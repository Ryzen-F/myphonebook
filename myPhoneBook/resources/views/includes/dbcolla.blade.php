<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div class="container">
<h2>DATABASE DES COLLABORATEURS </h2>
<table class="table">
  <thead>
    <tr>
      <th>Civility</th>
      <th>Last Name</th>
      <th>First Name</th>
      <th>Address</th>
      <th>Code Postal</th>
      <th>City</th>
      <th>Phone Number</th>
      <th>E-mail</th>
      <th>Company Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($collaborateurs as $collaborateur)
      <tr>
        <td>{{ $collaborateur->civility }}</td>
        <td><a href="/collaborateur/{{ $collaborateur->id }}">{{ $collaborateur->last_name }}</a></td>
        <td>{{ $collaborateur->address }}</td>
        <td>{{ $collaborateur->first_name }}</td>
        <td>{{ $collaborateur->postal_code }}</td>
        <td>{{ $collaborateur->city }}</td>
        <td>{{ $collaborateur->phone }}</td>
        <td>{{ $collaborateur->email }}</td>
        <td>{{ $collaborateur->company_name }}</td>
      </tr>
  @endforeach
</table>
</div>
@yield('content')