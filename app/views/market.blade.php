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
      <h1><u>Market</u></h1>
    </div>
  </div>
  <p></p>
    <div class="col-md-10">
      <div class="container">
        <div class="form-group">
          <!--h3 class="text-center">Market is Empty</h3-->
          @if(Session::has('error_message'))
          <div class="alert alert-danger" role="alert">
            {{Session::get('error_message')}}
          </div>
        @endif

          <div class="posts">
              @foreach($posts as $post)
                @if($post == '[]')
                  <h3 class="text-center">Market is Empty</h3>
                @else

                <div class="post">
                  <div class="row">
                    <div class="col-md-3">
                      <p><h3>{{$names[$post->id]}} wants </h3></p>
                      <p>{{$post->iron1}} iron</p>
                      <p>{{$post->wood1}} wood</p>
                      <p>{{$post->gold1}} gold</p>
                      <p>{{$post->food1}} food</p>
                      <p>{{$post->water1}} water</p>
                    </div>
                    <div class="col-md-3">
                      <p></p>
                      <p><h3>Offering</h3></p> 
                      <p>{{$post->iron2}} iron</p>
                      <p>{{$post->wood2}} wood</p>
                      <p>{{$post->gold2}} gold</p>
                      <p>{{$post->food2}} food</p>
                      <p>{{$post->water2}} water</p>
                    </div>
                    <div class="col-md-1">
                      <div class="col-xs-12" style="height:80px;"></div>


                        {{Form::open(['action'=> 'MarketController@acceptTrade', 'method' => 'POST', 'class' => 'form-horizontal'])}}
                        {{Form::hidden('id', $post->id)}}
                        <th>{{Form::submit('Accept', ['class' => 'btn btn-danger'])}}</th>
                        {{Form::close()}}



                      </div>
                    </div>
                  </div>
                  <hr>
                  @endif
              @endforeach

        </div>
      </div>
    </div>
  <p></p>
  <div class="container">
    <div class=" form-group">
      <div class="col-md-6 col-sm-offset-3">
        <a class="btn btn-default btn-lg btn-block"  href="/trade" role="button" >Trade in Market</a>
      </div>
    </div>
  </div>
  <p>
  <div class="container">
    <div class=" form-group">
      <div class="col-md-4 col-sm-offset-5">
        <a class="btn btn-danger"  href="/feed" role="button" >Back to Kingdom</a>
      </div>
    </div>
  </div>

</div>

@stop