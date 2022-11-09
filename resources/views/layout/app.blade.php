<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/d508f9c7b5.js" crossorigin="anonymous"></script>

    <!-- FontAwesome-cdn include -->
    <link rel="stylesheet" href="{{ url('quizo/assets/css/all.min.css') }}">
    <!-- CSS -->
	<link rel="stylesheet" href="{{ url('dashmin/vendors/styles/style.css') }}">
    <!-- Animate-css include -->
    <link rel="stylesheet" href="{{ url('quizo/assets/css/animate.min.css') }}">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="{{ url('quizo/assets/css/style.css') }}">
    <!-- no wizard css include -->
    <link rel="stylesheet" href="{{ url('quizo/assets/css/nowiz.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-119386393-1');
	</script>

    {{-- jvectormap --}}
    <link rel="stylesheet" type="text/css" href="{{ url('dashmin/src/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}">
    <title>@yield('judul')</title>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('parts.navbar')
            @include('parts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <main>
                        <div class="main-container">
                            <div class="customscroll customscroll-10-p height-100-p xs-pd-20-10 pd-ltr-20">
                                @yield('content')

                                <!-- js -->
                            </div>
                        </div>
                    </main>
                </section>
            </div>


        </div>
    </div>

    <script src="{{ url('dashmin/vendors/scripts/script.js') }}"></script>
    <script src="{{ url('dashmin/src/plugins/jQuery-Knob-master/js/jquery.knob.js') }}"></script>
	<script src="{{ url('dashmin/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
	<script src="{{ url('dashmin/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jquery-count-down include -->
    <script src="{{ url('quizo/assets/js/countdown.js') }}"></script>
    <!-- Custom-js include -->
    <script src="{{ url('quizo/assets/js/script.js') }}"></script>
    <!-- jQuery-validate-js include -->
    <script src="{{ url('quizo/assets/js/jquery.validate.min.js') }}"></script>
    <script>
        $(".dial1").knob();
		$({animatedVal: 0}).animate({animatedVal: 66}, {
			duration: 3000,
			easing: "swing",
			step: function() {
				$(".dial1").val(Math.ceil(this.animatedVal)).trigger("change");
			}
		});
		$(".dial2").knob();
		$({animatedVal: 0}).animate({animatedVal: 75}, {
			duration: 3000,
			easing: "swing",
			step: function() {
				$(".dial2").val(Math.ceil(this.animatedVal)).trigger("change");
			}
		});
		$(".dial3").knob();
		$({animatedVal: 0}).animate({animatedVal: 90}, {
			duration: 3000,
			easing: "swing",
			step: function() {
				$(".dial3").val(Math.ceil(this.animatedVal)).trigger("change");
			}
		});
		$(".dial4").knob();
		$({animatedVal: 0}).animate({animatedVal: 100}, {
			duration: 3000,
			easing: "swing",
			step: function() {
				$(".dial4").val(Math.ceil(this.animatedVal)).trigger("change");
			}
		});
    </script>
</body>
</html>
