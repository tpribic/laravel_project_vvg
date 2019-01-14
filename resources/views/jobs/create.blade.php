@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/jobs" class="col-md-5 mx-auto">
@csrf

<div class="form-group">
    <input class="form-control" name="job_name" type="text" placeholder="Job Name">
</div>
<div class="form-group">
    <input class="form-control" name="job_salary" type="text" placeholder="Job Salary">
</div>
<div class="form-group">
    <select class="form-control" name="jobtype_id">
        @foreach($jobtypes as $jobtype)
        <option value="{{ $jobtype->id }}">{{ $jobtype->jobtype_name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection