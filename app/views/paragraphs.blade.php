@extends('layout')

@section('banner')
	<div class="row">
		<div class="col-lg-8 col-md-7 col-sm-6">
			<h1>Lorem Ipsum Text</h1>
		</div>
	</div>
@stop

@section('content')
	<div class="well bs-component form-div">
	  <?php
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($number);
		echo "<p>" . implode('<p>', $paragraphs) . "</p>";
	  ?>
	</div>
@stop