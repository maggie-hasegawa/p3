@extends('layout')

@section('banner')
	<div class="row">
		<div class="col-lg-8 col-md-7 col-sm-6">
			<h1>Lorem Ipsum Generator</h1>
		</div>
	</div>
@stop

@section('content')
	<div class="well bs-component form-div">
		<form class="form-horizontal" method="POST" action="/p3/lorem">
			<div class="form-group">
					<div class="col-lg-3">
						<input id="number-of-paragraphs" name="number-of-paragraphs" class="form-control" size="10" type="text"/>
					</div>
					<label class="col-lg-2 control-label" for="number-of-paragraphs">PARAGRAPHS</label>
			</div>
			<!--<div class="radio">
				<label class="col-lg-2 control-label" for="paragraph-length">
					<input id="optionsRadios1" type="radio" value="long" name="paragraph-length">
					LONG
				</label>
				<label class="col-lg-2 control-label" for="paragraph-length">
					<input id="optionsRadios2" type="radio" value="medium" name="paragraph-length">
					MEDIUM
				</label>
				<label class="col-lg-2 control-label" for="paragraph-length">
					<input id="optionsRadios3" type="radio" value="short" name="paragraph-length">
					SHORT
				</label>
			</div>-->
			<br>
			<br>
			<div class="form-group">
				<div class="col-lg-10">
					<button type="submit" class="btn btn-primary">Generate</button>
				</div>
			</div>
		</form>
	</div>
@stop