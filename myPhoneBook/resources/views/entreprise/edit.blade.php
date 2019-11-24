@section('content')
@extends('layouts.app')

<h1>Editer l'entreprise :{{ $entreprise->name }} </h1>
<form action="/entreprise/edit/{{ $entreprise->id }}" method="POST">
  <input type="hidden" value="{{$entreprise->id}}" name="id">
  @include('includes.form')
  @csrf
  @method('POST')
  <button type="submit" class="btn btn-primary">Sauvegarder les informations</button>
</form>

@endsection
