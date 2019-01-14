@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Job name</th>
      <th scope="col">Salary</th>
    </tr>
  </thead>
  <a class="btn btn-primary float-right" href="/jobs/new">New</a>
  <tbody>
  @foreach ($jobs as $job)
    <tr>
      <td><?= $job->id ?></td>
      <td><?= $job->job_name ?></td>
      <td><?= $job->job_salary ?></td>
      <td><a href="/jobs/delete/{{ $job->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection