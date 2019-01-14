@extends('layouts.app')

@section('content')

<form method="post" action="/jobtypes">
@csrf

<div class="form-group">
    <input class="form-control" name="jobtype_name" type="text" placeholder="Job Type">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection