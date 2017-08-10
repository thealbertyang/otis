@extends('layouts.app')
@section('content')
  <div class="section section-header no-pad" id="index-banner">
    <div class="container-fluid">
      <br><br>
      <div class="row center logo">
        <div class="col m2 offset-m5 s4 offset-s4">
          <img alt="" class="responsive-img" src="{{asset('/img/otis-logo.png')}}">
        </div>    
      </div>  
        <h1 class="header center orange-text">Sales Trainee</h1>
      <div class="row center">
        <h5 class="sub-header col s12 light">Welcome to <b style="color: #777777;">your</b> sales training program overview.</h5>
      </div>
      <div class="row center">
        <a href="{{ route('training') }}" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section section-toc">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12 l3">
        </div>

        <div class="col s12 m12 l6">
          <div class="icon-block">
            <h4 class="center"><i class="material-icons light-blue-text">toc</i> Table of Contents</h4>
          </div>
        </div>

        <div class="col s12 m12 l3">
        </div>
      </div>
      <div class="row">
        <div class="col s12 m12 l3">
          <div class="icon-block">
            <p class="light">
            </p>
            </div>
        </div>

        <div class="col s12 m12 l6">
          <div class="icon-block">
            <p class="light">

              <ul class="center table-of-contents">
                @foreach($trainingLinks as $linkK => $linkV)
                  <li><a href="{{ url('training/'.$linkK) }}">{{$trainingLinks[$linkK]}}</a></li>
                @endforeach
                  <li><a href="{{ route('profile') }}">Badges</a></li>
              </ul>
            </p>
          </div>
        </div>

        <div class="col s12 m12 l3">
          <div class="icon-block">
            <p class="light"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop