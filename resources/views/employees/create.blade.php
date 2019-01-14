@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/employees" class="col-md-5 mx-auto">
@csrf

<div class="form-group">
    <input class="form-control" name="employee_oib" type="text" placeholder="Employee OIB">
</div>
<div class="form-group">
    <input class="form-control" name="employee_name" type="text" placeholder="Employee Name">
</div>
<div class="form-group">
    <input class="form-control" name="employee_surename" type="text" placeholder="Employee Surename">
</div>
<div class="form-group">
    <input class="form-control" name="employee_email" type="text" placeholder="Employee Email">
</div>
<div class="form-group">
    <select class="form-control" name="job_id">
        @foreach($jobs as $job)
        <option value="{{ $job->id }}">{{ $job->job_name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="bonus_id">
        @foreach($bonuses as $bonus)
        <option value="{{ $bonus->id }}">{{ $bonus->bonus_level }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="office_id">
        @foreach($offices as $office)
        <option value="{{ $office->id }}">{{ $office->office_name }}</option>
        @endforeach
    </select>
</div>


<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection