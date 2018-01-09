@extends('templating.master')


@section('content')

	<h1>Submit Form to here</h1>
	<hr>

	{!! Form::open(['route'=>'f.submit']) !!}

		{!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control','name'=> 'first_name')) !!}

		{!! Form::submit() !!}

	{!! Form::close() !!}

@endsection