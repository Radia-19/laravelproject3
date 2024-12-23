@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('content')

<div class="row">
    <div class="col-sm-6 col-md-3 grid-margin">
      <div class="card">
        <div class="card-body">
          @php
            $student=DB::table('students')->count();   
          @endphp
          <h2 class="card-title">All Student's ({{ $student }})</h2>
        </div>
        <div class="dashboard-chart-card-container">
          <div id="dashboard-card-chart-1" class="card-float-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3 grid-margin">
      <div class="card">
        <div class="card-body">
          @php
            $teacher=DB::table('teachers')->count();   
          @endphp
          <h2 class="card-title">All Teacher's ({{ $teacher }})</h2>
        </div>
        <div class="dashboard-chart-card-container">
          <div id="dashboard-card-chart-2" class="card-float-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3 grid-margin">
      <div class="card">
        <div class="card-body">
          @php
          $admin=DB::table('users')->count();   
        @endphp
          <h2 class="card-title">Admin ({{ $admin }})</h2>
        </div>
        <div class="dashboard-chart-card-container">
          <div id="dashboard-card-chart-3" class="card-float-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3 grid-margin">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Registration fee ( 2500 tk)</h2>
        </div>
        <div class="dashboard-chart-card-container">
          <div id="dashboard-card-chart-4" class="card-float-chart"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 revenue-card grid-margin d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body">
          <h2 class="card-title">Website Traffic</h2>
          <ul class="ct-legend mt-5"></ul>
          <div id="dashboard-chartist-simple"></div>
          <div class="row mx-1 mt-5 d-none d-sm-flex">
            <div class="col-12">
              <hr class="mt-1">
            </div>
            <div class="col-12 col-sm-4 revenue-details text-center text-sm-left">
              <p class="head text-muted">Gross Revenue</p>
              <p class="count">9,362.74</p>
            </div>
            <div class="col-12 col-sm-4 d-flex justifiy-content-center flex-column text-center revenue-details">
              <p class="head text-muted">Gross Revenue</p>
              <p class="count">9,362.74</p>
            </div>
            <div class="col-12 col-sm-4 text-center text-sm-right revenue-details">
              <p class="head text-muted">Gross Revenue</p>
              <p class="count">9,362.74</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 stock-price grid-margin d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body">
          <h2 class="card-title">Total fee</h2>
          <div class="amount-column-wrapper wrapper">
            <p class="total-performance">BDT {{ $student * 2500 }} </p>
            <div class="row">
             
            </div>
       
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection