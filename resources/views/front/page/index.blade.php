@extends('front.layout.main')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/plugins/icons/css/ionicons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/assets/back/keditor/css/st.css')}}">

    <style type="text/css" media="screen">
         
        </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>

      <!-- Stages -->
      <div class="container">
          <?php 
          $y =  str_replace("@owl","<?php",$page['html']);
          $x =  str_replace("owl@","?>",$y);
          $x =  str_replace("&gt;",">",$x);
          ?>
          <?php  eval("?>".$x."<?php"); ?>
      </div>
@endsection