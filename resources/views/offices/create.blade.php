@extends('layouts.app')

@section('content')

<form method="post" action="/offices">
@csrf

<div class="form-group">
    <input class="form-control" name="office_name" type="text" placeholder="Office Name">
</div>
<div class="form-group">
    <input class="form-control" name="office_address" type="text" placeholder="Office Address">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection