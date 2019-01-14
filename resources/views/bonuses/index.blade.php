@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Bonus Level</th>
      <th scope="col">Additional Bonus</th>
    </tr>
  </thead>
  <a class="btn btn-primary float-right" href="/bonuses/new">New</a>
  <tbody>
  @foreach ($bonuses as $bonus)
    <tr>
      <td><?= $bonus->id ?></td>
      <td><?= $bonus->bonus_level ?></td>
      <td><?= $bonus->bonus_bonus ?></td>
      <td><a href="/bonuses/delete/{{ $bonus->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection