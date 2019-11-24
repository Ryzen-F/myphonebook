@section('content')
@extends('layouts.app')

<h1>Editer le collaborateur :{{ $collaborateur->last_name }} </h1>
<form action="/collaborateur/edit/{{ $collaborateur->id }}" method="POST">
  <input type="hidden" value="{{$collaborateur->id}}" name="id">
  @include('includes.collaform')
  @csrf
  @method('POST')
  <button type="submit" class="btn btn-primary">Sauvegarder les informations</button>
</form>

@endsection
