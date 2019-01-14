@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Employee name</th>
      <th scope="col">Surename</th>
      <th scope="col">OIB</th>
      <th scope="col">E-mail</th>
      <th scope="col">Job</th>
      <th scope="col">Bonus Level</th>
      <th scope="col">Office</th>
    </tr>
  </thead>
  <a class="btn btn-primary float-right" href="/employees/new">New</a>
  <tbody>
  @foreach ($employees as $employee)
    <tr>
      <td><?= $employee->id ?></td>
      <td><?= $employee->employee_name ?></td>
      <td><?= $employee->employee_surename ?></td>
      <td><?= $employee->employee_oib ?></td>
      <td><?= $employee->employee_email ?></td>
      <td><?= $employee->job->job_name ?></td>
      <td><?= $employee->bonus->bonus_level ?></td>
      <td><?= $employee->office->office_name ?></td>
      <td><a href="/employees/delete/{{ $employee->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection