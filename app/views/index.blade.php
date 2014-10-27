@extends('layout')

@section('banner')
	<div class="row">
		<div class="col-lg-8 col-md-7 col-sm-6">
			<h1>Developer's Best Friend</h1>
		</div>
	</div>
@stop

@section('content')
	<div class="jumbotron">
		<h2>Lorem Ipsum Generator</h2>
		<p>Whether you're in need of a convenient tool to help showcase mock-ups or you're designing a future presentation, adding some Lorem Ipsum text to your design is a great way to get started. Lorem Ipsum is pseudo-Latin text used as placeholder or filler text to help emphasize design elements in a document, presentation, web site or typography.</p>
		<p><a href="/p3/lorem" class="btn btn-primary btn-lg">Take me to the text generator</a></p>
	</div>
	<div class="jumbotron">
		<h2>Random User Generator</h2>
		<p>For mock-ups or testing database applications that need random user information, the random user generator creates random user data to work with.</p>
		<p><a href="/p3/users" class="btn btn-primary btn-lg">Take me to the random user generator</a></p>
	</div>
@stop