@section('content')
@extends('layouts.app')
@include('includes.dbshow')
<hr>
<form action="/entreprise/create" method="POST">
    @include('includes.crform')
    @csrf
    <button type="submit" class="btn btn-primary">Ajouter l'entreprise</button>
</form>

@endsection
