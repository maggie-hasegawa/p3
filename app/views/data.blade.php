@extends('layout')

@section('banner')
	<div class="row">
		<div class="col-lg-8 col-md-7 col-sm-6">
			<h1>Users</h1>
		</div>
	</div>
@stop

@section('content')
	<div class="well bs-component form-div">
	  <?php
	  	$faker = Faker\Factory::create();
	  	for ($i=0; $i < $number; $i++) {
  		echo $faker->name, "<br/>";
  	}
	  ?>
	</div>
@stop