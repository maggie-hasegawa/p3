@extends('layout')

@section('banner')
	<div class="row">
		<div class="col-lg-8 col-md-7 col-sm-6">
			<h1>Random User Generator</h1>
		</div>
	</div>
@stop

@section('content')
	<div class="well bs-component form-div">
		<form class="form-horizontal" method="POST">
			<div class="form-group">
					<div class="col-lg-2">
						<input id="number-of-users" class="form-control" size="10" type="text"/>
					</div>
					<label class="col-lg-4 control-label" for="number-of-users">HOW MANY USERS</label>
			</div>
			<br>
			<div class="form-group">
				<div class="col-lg-10">
					<button type="submit" class="btn btn-primary">Generate</button>
				</div>
			</div>
		</form>
	</div>
@stop