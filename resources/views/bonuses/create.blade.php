@extends('layouts.app')

@section('content')

<form method="post" action="/bonuses">
@csrf

<div class="form-group">
    <input class="form-control" name="bonus_level" type="text" placeholder="Bonus Level">
</div>
<div class="form-group">
    <input class="form-control" name="bonus_bonus" type="text" placeholder="Bonus">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection