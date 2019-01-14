@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Job Type</th>
    </tr>
  </thead>
  <a class="btn btn-primary float-right" href="/jobtypes/new">New</a>
  <tbody>
  @foreach ($jobtypes as $jobtype)
    <tr>
      <td><?= $jobtype->id ?></td>
      <td><?= $jobtype->jobtype_name ?></td>
      <td><a href="/jobtypes/delete/{{ $jobtype->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection