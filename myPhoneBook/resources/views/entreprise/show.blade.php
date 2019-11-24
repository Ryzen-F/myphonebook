@extends('layouts.app')

@section('content')
  <h1>{{ $entreprise->name }}</h1>
  <hr>
  <p><strong>Address: {{ $entreprise->address }}</strong></p>
  <p><strong>Code Postal: {{ $entreprise->postal_code }}</strong></p>
  <p><strong>City: {{ $entreprise->city }}</strong></p>
  <p><strong>Phone Number: {{ $entreprise->phone }}</strong></p>
  <p><strong>Email: {{ $entreprise->email }}</strong></p>
  <a href="/entreprise/edit/{{ $entreprise->id }}" class="btn btn-secondary my-3">Edit</a>
  <form action="/entreprise/delete/{{ $entreprise->id }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
  </form>
@endsection