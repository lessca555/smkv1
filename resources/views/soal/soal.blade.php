@extends('layout.app')
@section('judul', 'Soal Tersedia')
@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Soal Tersedia</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Soal Tersedia</li>
                </ol>
            </nav>
        </div>

        <div class="col-md-6 col-sm-12 text-right">
            <div class="dropdown">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    January 2018
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Export List</a>
                    <a class="dropdown-item" href="#">Policies</a>
                    <a class="dropdown-item" href="#">View Assets</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white pd-30 box-shadow border-radius-5 mb-30 xs-pd-20-10">
    <div class="table-responsive">
        <table
            id="example"
            class="table table-striped data-table"
            style="width: 100%"
        >
            <thead>
                <tr>
                    <th>ID Soal</th>
                    <th>Nama Paket</th>
                    <th>Deskripsi</th>
                    <th>Jenis Soal</th>
                    <th>KKM</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>a</td>
                    <td>nigga</td>
                    <td>uts</td>
                    <td>70</td>
                    <td>69 menit</td>
                    <td>
                        <button class="btn btn-primary" style="font-size: 10px;" id="kerjakan" onclick="openFullscreen()">Kerjakan</button>
                    </td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <th>ID Soal</th>
                    <th>Nama Paket</th>
                    <th>Deskripsi</th>
                    <th>Jenis Soal</th>
                    <th>KKM</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>

        <div class="soal" id="soal">

        <div class="wrapper">
            <!-- Top content -->
            <div class="container">
                <div class="row">
                    <!-- Step-progress-bar -->
                    <div class="progress_bar">
                        <div class="step active current"></div>
                        <div class="step"></div>
                        <div class="step"></div>
                        <div class="step"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <form class="multisteps_form overflow-hidden position-relative" id="wizard" method="POST" action="../mail.php">
                    <div class="col-6 d-none d-md-block pt-5">
                        <div class="count_box pe-3 me-5 rounded-pill d-flex align-items-center justify-content-center float-end">
                            <div class="count_clock ps-2">
                                <img  src="{{ url('quizo/assets/images/clock.png') }}" alt="image-not-found">
                            </div>
                            <div class="count_title">
                                <h4 class="ps-1">Quiz</h4>
                                <span class="px-1">Time start</span>
                            </div>
                            <div class="count_number rounded-pill px-3 d-flex justify-content-around align-items-center position-relative overflow-hidden countdown_timer" data-countdown="2022/11/5 15:00">
                            </div>
                        </div>
                    </div>
                    <!------------------------- Step-1 ----------------------------->
                    <div class="multisteps_form_panel active shadow-lg">

                        <div class="form_content my-5 shadow-lg">

                            <div class="row col-md-10 m-auto pt-5 form_items radio-list">

                                <div class="question_title">
                                    <h1 class="text-center py-5">Dimanakah hitler meninggal?</h1>
                                </div>

                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li>
                                            <label for="opt_1" class="position-relative step_1 d-inline-block animate__animated animate__fadeInRight animate_50ms active">
                                                Berlin
                                                <input id="opt_1" type="radio" name="stp_1_select_option" value="sea grass bed">
                                                <span class="position-absolute">A</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li>
                                            <label for="opt_2" class="step_1 position-relative d-inline-block animate__animated animate__fadeInRight animate_100ms">
                                                Garut
                                                <input id="opt_2" type="radio" name="stp_1_select_option" value="coral reefs">
                                                <span class="position-absolute">B</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li>
                                            <label for="opt_3" class="step_1 position-relative d-inline-block animate__animated animate__fadeInRight animate_150ms">
                                                Sumenep
                                                <input id="opt_3" type="radio" name="stp_1_select_option" value="None of the above">
                                                <span class="position-absolute">C</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li>
                                            <label for="opt_4" class="step_1 position-relative d-inline-block animate__animated animate__fadeInRight animate_200ms">
                                                Kalibata City
                                                <input id="opt_4" type="radio" name="stp_1_select_option" value="hot spots">
                                                <span class="position-absolute">D</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            
                        </div>
                        <!-- Progress bar -->
                        <div class="step_progress position-absolute text-center">
                            <span class="text-capitalize">question 1 / 4</span>
                            <div class="progress rounded-pill">
                                <div class="progress-bar rounded-pill" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!---------- Form Button ---------->
                        <div class="form_btn">
                            <button type="button" class="js-btn-next f_btn next_btn text-uppercase position-absolute" id="nextBtn">Next Question <span><i class="fas fa-arrow-right"></i></span></button>
                        </div>
                    </div>
                    <!------------------------- Step-2 ----------------------------->
                    <div class="multisteps_form_panel shadow-lg">
                        <div class="form_content my-5 shadow-lg">
                            <div class="row col-md-10 m-auto pt-5 form_items check-list">
                                <div class="question_title">
                                    <h1 class="text-center py-5">The habitats valuable for commercially harvested
                                        species are called</h1>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="opt_5" class="position-relative step_2 d-inline-block animate__animated animate__fadeInRight animate_50ms">
                                                    Japan
                                                    <input id="opt_5" type="checkbox" class="required" name="stp_2_select_option" value="Japan" required>
                                                    <span class="position-absolute">A</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="opt_6" class="step_2 position-relative d-inline-block animate__animated animate__fadeInRight animate_100ms">
                                                    Britain
                                                    <input id="opt_6" type="checkbox" name="stp_2_select_option" value="Britain">
                                                    <span class="position-absolute">B</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="opt_7" class="step_2 position-relative d-inline-block animate__animated animate__fadeInRight animate_150ms">
                                                    Poland
                                                    <input id="opt_7" type="checkbox" name="stp_2_select_option" value="Poland">
                                                    <span class="position-absolute">C</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="opt_8" class="step_2 position-relative d-inline-block animate__animated animate__fadeInRight animate_200ms">
                                                    Germany
                                                    <input id="opt_8" type="checkbox" name="stp_2_select_option" value="Germany">
                                                    <span class="position-absolute">D</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Progress bar -->
                            <div class="step_progress position-absolute text-center">
                                <span class="text-capitalize">question 2 / 4</span>
                                <div class="progress rounded-pill">
                                    <div class="progress-bar rounded-pill" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!---------- Form Button ---------->
                            <div class="form_btn">
                                <button type="button" class="js-btn-prev f_btn prev_btn text-uppercase position-absolute" id="prevBtn"><span><i class="fas fa-arrow-left"></i></span> Last Question</button>
                                <button type="button" class="js-btn-next f_btn next_btn text-uppercase position-absolute" id="nextBtn">Next Question <span><i class="fas fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <!------------------------- Step-3 ----------------------------->
                        <div class="multisteps_form_panel shadow-lg">
                            <div class="form_content my-5 shadow-lg">
                                <div class="row col-md-10 m-auto pt-5 form_items radio-list">
                                    <div class="question_title">
                                        <h1 class="text-center py-5">The iron and steel industries of which of the following countries are almost fully dependent on imported raw materials</h1>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="opt_9" class="position-relative step_3 d-inline-block animate__animated animate__fadeInRight animate_50ms">
                                                    artesian
                                                    <input id="opt_9" type="radio" class="required" name="stp_3_select_option" value="artesian">
                                                    <span class="position-absolute">A</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="opt_10" class="step_3 position-relative d-inline-block animate__animated animate__fadeInRight animate_100ms">
                                                    artesian well
                                                    <input id="opt_10" type="radio" name="stp_3_select_option" value="artesian well">
                                                    <span class="position-absolute">B</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="opt_11" class="step_3 position-relative d-inline-block animate__animated animate__fadeInRight animate_150ms">
                                                    unconfined groundwater
                                                    <input id="opt_11" type="radio" name="stp_3_select_option" value="unconfined groundwater">
                                                    <span class="position-absolute">C</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="opt_12" class="step_3 position-relative d-inline-block animate__animated animate__fadeInRight animate_200ms">
                                                    confined groundwater
                                                    <input id="opt_12" type="radio" name="stp_3_select_option" value="confined groundwater">
                                                    <span class="position-absolute">D</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Progress bar -->
                            <div class="step_progress position-absolute text-center">
                                <span class="text-capitalize">question 3 / 4</span>
                                <div class="progress rounded-pill">
                                    <div class="progress-bar rounded-pill" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!---------- Form Button ---------->
                            <div class="form_btn">
                                <button type="button" class="js-btn-prev f_btn prev_btn text-uppercase position-absolute" id="prevBtn"><span><i class="fas fa-arrow-left"></i></span> Last Question</button>
                                <button type="button" class="js-btn-next f_btn next_btn text-uppercase position-absolute" id="nextBtn">Next Question <span><i class="fas fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <!------------------- Step-4 -------------------------->
                        <div class="multisteps_form_panel shadow-lg">
                            <div class="form_content my-5 shadow-lg">
                                <div class="row col-md-10 m-auto pt-5 form_items check-list">
                                    <div class="question_title">
                                        <h1 class="text-center py-5">The groundwater can become confined between two impermeable layers.This type of enclosed water is called</h1>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="opt_13" class="position-relative step_4 d-inline-block animate__animated animate__fadeInRight animate_50ms">
                                                    Michoel Crichton
                                                    <input id="opt_13" type="checkbox" class="required" name="stp_2_select_option" value="Michoel Crichton">
                                                    <span class="position-absolute">A</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="opt_14" class="step_4 position-relative d-inline-block animate__animated animate__fadeInRight animate_100ms">
                                                    Nicholos Sporks
                                                    <input id="opt_14" type="checkbox" name="stp_2_select_option" value="Nicholos Sporks">
                                                    <span class="position-absolute">B</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="opt_15" class="step_4 position-relative d-inline-block animate__animated animate__fadeInRight animate_150ms">
                                                    James Redfield
                                                    <input id="opt_15" type="checkbox" name="stp_2_select_option" value="James Redfield">
                                                    <span class="position-absolute">C</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="opt_16" class="step_4 position-relative d-inline-block animate__animated animate__fadeInRight animate_200ms">
                                                    Dovid Guterson
                                                    <input id="opt_16" type="checkbox" name="stp_2_select_option" value="Dovid Guterson">
                                                    <span class="position-absolute">D</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Progress bar -->
                            <div class="step_progress position-absolute text-center">
                                <span class="text-capitalize">question 4 / 4</span>
                                <div class="progress rounded-pill">
                                    <div class="progress-bar rounded-pill" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!---------- Form Button ---------->
                            <div class="form_btn">
                                <button type="button" class="js-btn-prev f_btn prev_btn text-uppercase position-absolute" id="prevBtn"><span><i class="fas fa-arrow-left"></i></span> Last Question</button>
                                <button type="submit" class="f_btn next_btn text-uppercase position-absolute" id="nextBtn"><a href="{{ route('home') }}" class="text-decoration-none">Submit</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>

@endsection
