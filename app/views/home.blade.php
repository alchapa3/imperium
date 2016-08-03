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
  <th >Iron <button type="button" class="btn btn-danger">+</button></th>
  <th>Wood <button type="button" class="btn btn-success">+</button></th>
  <th>Gold <button type="button" class="btn btn-warning">+</button></th>
  <th>Food <button type="button" class="btn btn-danger">+</button></th>
  <th>Water <button type="button" class="btn btn-primary">+</button></th>
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
      <a class="btn btn-danger btn-lg btn-block"  href="/feed" role="button" >Send to Market</a>
      <a class="btn btn-danger btn-lg btn-block"  href="/feed" role="button">Shop at Market</a>
  </div>

</div>
@stop