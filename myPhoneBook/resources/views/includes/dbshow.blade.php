<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div class="container">
<h2>DATABASE DES ENTREPRISES</h2>
<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Address</th>
      <th>Code Postal</th>
      <th>City</th>
      <th>Phone Number</th>
      <th>E-mail</th>
    </tr>
  </thead>
  <tbody>
    @foreach($entreprises as $entreprise)
      <tr>
      <td><a href="/entreprise/{{ $entreprise->id }}">{{ $entreprise->name }}</a></td>
          <td>{{ $entreprise->address }}</td>
          <td>{{ $entreprise->postal_code }}</td>
          <td>{{ $entreprise->city }}</td>
          <td>{{ $entreprise->phone }}</td>
          <td>{{ $entreprise->email }}</td>
        </tr>
  @endforeach
</table>
</div>
@yield('content')