
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	{!! Form::open(['route' => 'login']) !!}

	 {!! Form::label('email', 'Email..') !!}
	 {!! Form::text('email', null, ['class' => 'form-control']) !!}
	
	 {!! Form::label('password', 'Password..') !!}
	 {!! Form::password('password', ['class' => 'form-control']) !!}
	
	 {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
	
	{!! Form::close() !!}
</body>
</html>
