@extends('layouts.master')

@section('title')
  <title>Imperium | Trade</title>
@stop

@section('style')
  <link rel="stylesheet" type="text/css" href="/css/trade.css">
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
      <h1>Trade</h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="form-group">
    <h3 class="text-center">What do you want?</h3>
      <div class="col-sm-2">
        Iron{{Form::text('iron_count', null, [ 'placeholder' => '# To Trade', 'required', 'class' => 'form-control'])}}
        <br>
        Wood{{Form::text('iron_count', null, [ 'placeholder' => '# To Trade', 'required', 'class' => 'form-control'])}}
        <br>
        Gold{{Form::text('iron_count', null, [ 'placeholder' => '# To Trade', 'required', 'class' => 'form-control'])}}
        <br>
        Food{{Form::text('iron_count', null, [ 'placeholder' => '# To Trade', 'required', 'class' => 'form-control'])}}
        <br>
        Water{{Form::text('iron_count', null, [ 'placeholder' => '# To Trade', 'required', 'class' => 'form-control'])}}
      </div>  
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="form-group">
      <h3 class="text-center">What are you offering?</h3>
        <div class="col-sm-2">
          Iron{{Form::text('iron_count', null, [ 'placeholder' => '# To Trade', 'required', 'class' => 'form-control'])}}
          <br>
          Wood{{Form::text('iron_count', null, [ 'placeholder' => '# To Trade', 'required', 'class' => 'form-control'])}}
          <br>
          Gold{{Form::text('iron_count', null, [ 'placeholder' => '# To Trade', 'required', 'class' => 'form-control'])}}
          <br>
          Food{{Form::text('iron_count', null, [ 'placeholder' => '# To Trade', 'required', 'class' => 'form-control'])}}
          <br>
          Water{{Form::text('iron_count', null, [ 'placeholder' => '# To Trade', 'required', 'class' => 'form-control'])}}
        </div>  
    </div>
  </div>
  <br>
  <div class="container">
    <div class=" form-group">
      <div class="col-md-5 col-sm-offset-4">
        <a class="btn btn-danger btn-lg btn-block"  href="/market" role="button" >Post</a>
      </div>
    </div>
  </div>

  <br>
  <p>
</div>
@stop