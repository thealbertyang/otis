@extends('layouts.app')
@section('content')
  <div class="section section-profile no-pad-bot " id="index-banner">
    <div class="container-fluid">
      <br><br>
      <div class="row center">
        <div class="col m2 offset-m5 s4 offset-s4">
          <img alt="" class="avatar circle responsive-img" src="{{asset('public/img/avatar.jpg')}}">
        </div>
      </div>
      <h1 class="header center">Welcome to Otis Elevator Company!</h1>
      <br><br>

    </div>
  </div>

  <div class="section section-badges">
    <div class="container">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s6 m4">
          <div class="card">
            <div class="card-image">
              <img src="{{asset('public/img/badges/badge-1-sale-incomplete.png')}}">
              <span class="card-title black-text center"></span>
            </div>
            <div class="card-action">
              <h5 class="center-align">1 Sales</h5>
            </div>
          </div>
        </div>        
        <div class="col s6 m4">
          <div class="card">
            <div class="card-image">
              <img src="{{asset('public/img/badges/badge-course-incomplete.png')}}">
              <span class="card-title black-text center"></span>
            </div>
            <div class="card-action">
              <h5 class="center-align">15 Sales</h5>
            </div>
          </div>
        </div>
        <div class="col s6 m4">
          <div class="card">
            <div class="card-image">
              <img src="{{asset('public/img/badges/badge-training-incomplete.png')}}">
              <span class="card-title black-text center"></span>
            </div>
            <div class="card-action">
              <h5 class="center-align">Training Complete</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop