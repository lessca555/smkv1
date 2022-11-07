// ==================================================
// Project Name  :  Quizo
// Version       :  1.0.0
// Author        :  jthemes (https://themeforest.net/user/jthemes)
// ==================================================
$(function(){
  "use strict";

  // ========== Form-select-option ========== //
  $('.radio-list input').click(function () {
    $('input:not(:checked)').parent().removeClass("active");
    $('input:checked').parent().addClass("active");
  });


  $('.check-list label').on('change', function(e) {
    e.stopPropagation();
    if($(this).hasClass('active')) {
      $(this).removeClass("active");
    } else if( !$(this).hasClass('active') ) {
      $(this).addClass("active");
    }
  });

  // ================== CountDown function ================
  $('.countdown_timer').each(function(){
    $('[data-countdown]').each(function() {
      var $this = $(this), finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function(event) {
        var $this = $(this).html(event.strftime(''
        + '<div class="count_hours"><h3>%H</h3><span class="text-uppercase">hrs</span></div>'
        + '<div class="count_min"><h3>%M</h3><span class="text-uppercase">min</span></div>'
        + '<div class="count_sec"><h3>%S</h3><span class="text-uppercase">sec</span></div>'));
      });
    });
  });


  //multi form ===================================
  //DOM elements
  const DOMstrings = {
    stepsBtnClass: 'step',
    stepsBtns: document.querySelectorAll(`.step`),
    stepsBar: document.querySelector('.progress_bar'),
    stepsForm: document.querySelector('.multisteps_form'),
    stepFormPanelClass: 'multisteps_form_panel',
    stepFormPanels: document.querySelectorAll('.multisteps_form_panel'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next'
  };


  //remove class from a set of items
  const removeClasses = (elemSet, className) => {

    elemSet.forEach(elem => {

      elem.classList.remove(className);

    });

  };

  //return exect parent node of the element
  const findParent = (elem, parentClass) => {

    let currentNode = elem;

    while (!currentNode.classList.contains(parentClass)) {
      currentNode = currentNode.parentNode;
    }

    return currentNode;

  };

  //get active button step number
  const getActiveStep = elem => {
    return Array.from(DOMstrings.stepsBtns).indexOf(elem);
  };

  //set all steps before clicked (and clicked too) to active
  const setActiveStep = activeStepNum => {

    //remove active state from all the state
    removeClasses(DOMstrings.stepsBtns, 'active');
    removeClasses(DOMstrings.stepsBtns, 'current');

    //set picked items to active
    DOMstrings.stepsBtns.forEach((elem, index) => {
      if (index <= activeStepNum) {
        elem.classList.add('active');
        $(elem).addClass(index);

      }

      if (index == activeStepNum) {
        elem.classList.add('current');
      }

    });
  };

  //get active panel
  const getActivePanel = () => {

    let activePanel;

    DOMstrings.stepFormPanels.forEach(elem => {

      if (elem.classList.contains('active')) {

        activePanel = elem;

      }

    });

    return activePanel;

  };

  //open active panel (and close unactive panels)
  const setActivePanel = activePanelNum => {

    const animation = $(DOMstrings.stepFormPanels, 'active').attr("data-animation");

    //remove active class from all the panels
    removeClasses(DOMstrings.stepFormPanels, 'active');
    removeClasses(DOMstrings.stepFormPanels, animation);
    removeClasses(DOMstrings.stepFormPanels, 'animate__animated');

    //show active panel
    DOMstrings.stepFormPanels.forEach((elem, index) => {
      if (index === activePanelNum) {

        elem.classList.add('active');
        // stepFormPanels
        elem.classList.add('animate__animated', animation);

        setTimeout(function() {
          removeClasses(DOMstrings.stepFormPanels, 'animate__animated', animation);
        }, 1200);

        setFormHeight(elem);

      }
    });

  };


  //set form height equal to current panel height
  const formHeight = activePanel => {

    const activePanelHeight = activePanel.offsetHeight;

    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

  };

  const setFormHeight = () => {
    const activePanel = getActivePanel();

    formHeight(activePanel);
  };

  //STEPS BAR CLICK FUNCTION
  DOMstrings.stepsBar.addEventListener('click', e => {

    //check if click target is a step button
    const eventTarget = e.target;

    if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
      return;
    }

    //get active button step number
    const activeStep = getActiveStep(eventTarget);

    //set all steps before clicked (and clicked too) to active
    // setActiveStep(activeStep);

    //open active panel
    // setActivePanel(activeStep);
  });

  //PREV/NEXT BTNS CLICK
  DOMstrings.stepsForm.addEventListener('click', e => {

    const eventTarget = e.target;

    //check if we clicked on `PREV` or NEXT` buttons
    if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`))) {
      return;
    }

    //find active panel
    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);


    //set active step and active panel onclick
    if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) ) {
      activePanelNum--;

      setActiveStep(activePanelNum);
      setActivePanel(activePanelNum);

    } else if(eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)  ) {

      var form = $('#wizard');

      var parent_fieldset = $('.multisteps_form_panel.active');
      var next_step = true;

      parent_fieldset.find('.required').each( function(){
        next_step = false;
        var form = $('.required');
        form.validate();
        $(this).addClass('invalid is-invalid');
      });

      if( next_step === true || form.valid() === true ) {
        // $("html, body").animate({
        //     scrollTop: 0
        // }, 600);
        activePanelNum++;
        setActiveStep(activePanelNum);
        setActivePanel(activePanelNum);
      }


    }


  });

  //SETTING PROPER FORM HEIGHT ONLOAD
  window.addEventListener('load', setFormHeight, true);

  //SETTING PROPER FORM HEIGHT ONRESIZE
  window.addEventListener('resize', setFormHeight, true);


});

$('#soal').hide();

var elem = document.getElementById("soal");

function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
    $('#soal').show();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }



}

function closeFullscreen() {
    if (document.exitFullscreen) {
        document.exitFullscreen();
        $('#soal').hide();
    } else if (document.webkitExitFullscreen) { /* Safari */
        document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) { /* IE11 */
        document.msExitFullscreen();
    }
}

$(document).on(
	'keydown', function(event) {
	  if (event.key == "Escape") {
		$('#soal').hide();
	  }
});

document.addEventListener('fullscreenchange', function() {
	var full_screen_element = document.fullscreenElement;

	if(full_screen_element !== null){
        $('#soal').show();
    }
	else{
        var content = confirm("Ingin keluar?"); // The "hello" means to show the following text
        if (content === true) {
            $('#soal').hide();
        } else {
            $('#soal').hide();
        }
	}
});
