@extends('layout')

@section('content')

<form class="form-horizontal" action="/edit/{{$accounts->id}}" method="post">
  @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username/Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" value="{{$accounts->username}}" placeholder="{{$accounts->username}}" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" value="{{$accounts->password}}" id="pwd" placeholder="{{$accounts->password}}" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>

  @endsection