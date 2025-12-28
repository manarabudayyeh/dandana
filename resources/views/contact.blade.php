@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{url('css/style.css')}}">
@endsection

@section('title')
    @lang('home.title')
@endsection

@section('meta')
    <meta name="description" content="@lang('home.description')">
    <meta name="keywords" content="@lang('home.keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@endsection

@section('content')

<div class="col-md-6 starters text-white contactus">
  <div class="col-wrapper-10">
    <h1>Contact Us</h1>
    <p>Thank you for visiting us.  If you have any questions or comments about a recent visit or order please let us know.</p>
    [contact-form-7 id="26" title="Contact form 1"]
  </div>
</div>
<!-- Right Column -->
<div class="col-md-6 starters text-white contactus">
  <div class="col-wrapper-10">
    <div id="map-canvas"></div>
    <script src="//maps.googleapis.com/maps/api/js?extension=.js&output=embed"></script>
  </div>
</div>
</div>



@endsection