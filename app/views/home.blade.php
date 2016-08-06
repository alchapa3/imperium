@extends('layouts.master')

@section('title')
  <title>Imperium | Home</title>
@stop

@section('style')
  <link rel="stylesheet" type="text/css" href="/css/feed.css">
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
               <h1>{{$kingdom_name->kingdom_name}}</h1>
               <h3>Population - 0</h3>
          </div>
      </div>




<!--div class="container">
  <div class="row-fluid">
      <div class="col-md-2">
          <div class="profile">
              <img src="{{$username->profile_pic}}">
              <h4>{{$username->username}}</h4>
          </div>
      </div>    
  </div>
</div-->



<table class="table striped-table">
<tr>

  {{Form::open(['action'=> 'ButtonController1@buttonCount1', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <th>Iron {{Form::submit('+', ['class' => 'btn btn-danger', 'id' => 'button1'])}}</th>
  {{Form::close()}}

  {{Form::open(['action'=> 'ButtonController2@buttonCount2', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <th>Wood {{Form::submit('+', ['class' => 'btn btn-success'])}}</th>
  {{Form::close()}}
  
  {{Form::open(['action'=> 'ButtonController3@buttonCount3', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <th>Gold {{Form::submit('+', ['class' => 'btn btn-warning'])}}</th>
  {{Form::close()}}

  {{Form::open(['action'=> 'ButtonController4@buttonCount4', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <th>Food {{Form::submit('+', ['class' => 'btn btn-danger'])}}</th>
  {{Form::close()}}

  {{Form::open(['action'=> 'ButtonController5@buttonCount5', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <th>Water {{Form::submit('+', ['class' => 'btn btn-primary'])}}</th>
  {{Form::close()}}
  
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
</tr>

<tr>
  <th>Smith</th>
  <th>Lumbermill</th>
  <th>Mine</th>
  <th>Farm</th>
  <th>Well</th>
</tr>
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>

</tr>
</table>



  <div class=" form-group">
      <a class="btn btn-danger btn-lg btn-block"  href="/market" role="button" >Market</a>
  </div>

</div>
@stop