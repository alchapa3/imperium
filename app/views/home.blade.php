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
               <h3>Population - {{$population}}</h3>
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
  <th>Wood {{Form::submit('+', ['class' => 'btn btn-success', 'id' => 'button2' ])}}</th>
  {{Form::close()}}
  
  {{Form::open(['action'=> 'ButtonController3@buttonCount3', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <th>Gold {{Form::submit('+', ['class' => 'btn btn-warning', 'id' => 'button3'])}}</th>
  {{Form::close()}}

  {{Form::open(['action'=> 'ButtonController4@buttonCount4', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <th>Food {{Form::submit('+', ['class' => 'btn btn-danger', 'id' => 'button4'])}}</th>
  {{Form::close()}}

  {{Form::open(['action'=> 'ButtonController5@buttonCount5', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <th>Water {{Form::submit('+', ['class' => 'btn btn-primary', 'id' => 'button5'])}}</th>
  {{Form::close()}}
  
<tr>
  <td>{{$iron_count}}</td>
  <td>{{$wood_count}}</td>
  <td>{{$gold_count}}</td>
  <td>{{$food_count}}</td>
  <td>{{$water_count}}</td>
</tr>

<tr>
  <th>Smith</th>
  <th>Lumbermill</th>
  <th>Mine</th>
  <th>Farm</th>
  <th>Well</th>
</tr>

<tr>
  {{Form::open(['action'=> 'SmithController@addSmith', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <td>{{$smith}} {{Form::submit('Upgrade (' .$smith*$smith*10 .')', ['class' => 'btn btn-danger', 'id' => 'upSmith'])}}</td>
  {{Form::close()}} 

  {{Form::open(['action'=> 'MillController@addMill', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <td>{{$lumbermill}} {{Form::submit('Upgrade (' .$lumbermill*$lumbermill*10 .')', ['class' => 'btn btn-success', 'id' => 'upMill'])}}</td>
  {{Form::close()}}

  {{Form::open(['action'=> 'MineController@addMine', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <td>{{$mine}} {{Form::submit('Upgrade (' .$mine*$mine*10 .')', ['class' => 'btn btn-warning', 'id' => 'upMine'])}}</td>
  {{Form::close()}}


  {{Form::open(['action'=> 'FarmController@addFarm', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <td>{{$farm}} {{Form::submit('Upgrade (' .$farm*$farm*10 .')', ['class' => 'btn btn-danger', 'id' => 'upFarm'])}}</td>
  {{Form::close()}}


  {{Form::open(['action'=> 'WellController@addWell', 'method' => 'POST', 'class' => 'form-horizontal'])}}
  <td>{{$well}} {{Form::submit('Upgrade (' .$well*$well*10 .')', ['class' => 'btn btn-primary', 'id' => 'upWell'])}}</td>
  {{Form::close()}}

</tr>
</table>



  <div class=" form-group">
    <div class="col-md-6 col-sm-offset-3">
      <a class="btn btn-default btn-lg btn-block"  href="/market" role="button" >Market</a>
    </div>
  </div>

</div>
@stop