@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Office Name</th>
      <th scope="col">Office Address</th>
    </tr>
  </thead>
  <a class="btn btn-primary float-right" href="/offices/new">New</a>
  <tbody>
  @foreach ($offices as $office)
    <tr>
      <td><?= $office->id ?></td>
      <td><?= $office->office_name ?></td>
      <td><?= $office->office_address ?></td>
      <td><a href="/offices/delete/{{ $office->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection