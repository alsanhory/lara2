<!doctype html>
<html>
<head>
    <title>Forms</title>
</head>
<body>
<!-- resources/view/calc.blade.php -->

{{Form::open()}}

{{Form::label('num1','First num')}}
{{Form::text('num1')}}

{{Form::label('num2','Second num')}}
{{Form::text('num2')}}

{{Form::submit('c')}}
{{Form::close()}}
</body>
</html>