@extends('layouts.app')

@section('content')
  <h1>{{ $collaborateur->last_name }}</h1>
  <hr>
  <p><strong>First Name: {{ $collaborateur->first_name }}</strong></p>
  <p><strong>Civility: {{ $collaborateur->civility }}</strong></p>
  <p><strong>Address: {{ $collaborateur->address }}</strong></p>
  <p><strong>Code Postal: {{ $collaborateur->postal_code }}</strong></p>
  <p><strong>City: {{ $collaborateur->city }}</strong></p>
  <p><strong>Phone Number: {{ $collaborateur->phone }}</strong></p>
  <p><strong>Email: {{ $collaborateur->email }}</strong></p>
  <p><strong>Company Name: {{ $collaborateur->company_name }}</strong></p>

  <a href="/collaborateur/edit/{{ $collaborateur->id }}" class="btn btn-secondary my-3">Editer</a>
  <form action="/collaborateur/delete/{{ $collaborateur->id }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
  </form>
@endsection