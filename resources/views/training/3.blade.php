@extends('layouts.training')
@section('title')
  Program Timeline
@stop
@section('content')
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          <img src="{{ asset('/img/training/prog-time.jpg') }}" class="responsive-img materialboxed center-align">
        </div>   
      </div>
      <div class="divider"></div>
      <div class="row">
        <div class="col s12 m4 card">
          <h5>First 90 Days</h5>
          <ul>
            <li>Orientation and introduction to elevators</li>
            <li>Product and system knowledge training with supervisors and managers</li>
            <li>Basic sales skills, online training modules</li>
            <li>Field learning experiences</li>
          </ul>
        </div>
        <div class="col s12 m4 card">
          <h5>Months 4-6</h5>
          <ul>
            <li>Conduct elevator quality surveys</li>
            <li>Cold call on potential customers</li>
            <li>Sell OTIS products and/or service upgrades</li>
          </ul>
        </div>
        <div class="col s12 m4 card">
          <h5>6 Months<sup>+</sup></h5>
          <ul>
            <li>Become fluent with technical product knowledge</li>
            <li>Assist with local sales projects</li>
            <li>Work closely with reps to learn sales and administrative processes</li>
          </ul>
        </div>
      </div>
@stop