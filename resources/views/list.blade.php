@extends('layout')
@section('content')
<ul class="list-group">
@foreach ($accounts as $account)
  <li class="list-group-item">
      <b>Username :</b>
       {{$account->username}}
       <b> Password : </b>
       {{$account->password}} 
       <button class="btn btn-warning"> <a href="list/{{$account->id}}/edit"> <i class="fas fa-edit"></i></a></button>
       <form method="post" action="/list/{{ $account->id }}">
            @csrf
            @method('DELETE')
            <button onClick="return confirm('Are you Sure?')" class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
        </form>
       
    </li>
@endforeach
</ul>
@endsection