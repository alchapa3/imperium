@extends('layouts.master')

@section('title')
  <title>Imperium | Market</title>
@stop

@section('style')
  <link rel="stylesheet" type="text/css" href="/css/market.css">
@stop

@section('content')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="/feed">Imperium</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$username->username}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>		

<div class="container">
  <div class="row-fluid">
    <div class="col-md-8">
      <!--div class="profile"-->
      <!--img src="{{$username->profile_pic}}"-->
      <h1>Market</h1>
    </div>
  </div>
  <p></p>
    <div class="col-md-10">
      <div class="container">
        <div class="form-group">
          <h3 class="text-center">Nothing In Market</h3>
        </div>
      </div>
    </div>
  <p></p>
  <div class="container">
    <div class=" form-group">
      <div class="col-md-5 col-sm-offset-4">
        <a class="btn btn-danger btn-lg btn-block"  href="/trade" role="button" >Trade in Market</a>
      </div>
    </div>
  </div>
</div>

@stop