@extends('layout.app')
@section('judul', 'SMKNTL')
@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Dashboard</h4>
            </div>
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

<div class="row clearfix progress-box">
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="bg-white pd-30 box-shadow border-radius-5 height-100-p">
            <div class="progress-box text-center">
                 <input type="text" class="knob dial1" value="66" data-width="120" data-height="120" data-thickness="0.05" data-fgColor="#0099ff" readonly>
                <h5 class="text-blue padding-top-10 weight-500">Rank kamu di kelas</h5>
                <span class="font-14">66% Average <i class="fa fa-line-chart"></i></span>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="bg-white pd-30 box-shadow border-radius-5 height-100-p">
            <div class="progress-box text-center">
                 <input type="text" class="knob dial2" value="75" data-width="120" data-height="120" data-thickness="0.05" data-fgColor="#41ccba" readonly>
                <h5 class="text-light-green padding-top-10 weight-500">Kehadiran</h5>
                <span class="font-14">75% Average <i class="fa fa-line-chart"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="bg-white pd-30 box-shadow border-radius-5 height-100-p">
            <div class="progress-box text-center">
                 <input type="text" class="knob dial3" value="90" data-width="120" data-height="120" data-thickness="0.05" data-fgColor="#f56767" readonly>
                <h5 class="text-light-orange padding-top-10 weight-500">Total pelanggaran</h5>
                <span class="font-14">90% Sebelum di suspend <i class="fa fa-line-chart"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="bg-white pd-30 box-shadow border-radius-5 height-100-p">
            <div class="progress-box text-center">
                 <input type="text" class="knob dial4" value="35" data-width="120" data-height="120" data-thickness="0.05" data-fgColor="#a683eb" readonly>
                <h5 class="text-light-purple padding-top-10 weight-500">Soal tersedia</h5>
                <span class="font-14">1 <i class="fa fa-line-chart"></i></span>
            </div>
        </div>
    </div>
</div>

@endsection
