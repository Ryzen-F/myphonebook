@section('content')
@extends('layouts.app')
@include('includes.dbcolla')
<hr>
<form action="/collaborateur/create" method="POST">
    @include('includes.collacrform')
    @csrf
    <button type="submit" class="btn btn-primary">Ajouter le collaborateur</button>
</form>

@endsection
