<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>example</title>
</head>
<body>
<form action="{{url('/insert')}}" method="post">
    @csrf

	name<input type="text" name="name">	
	lastname<input type="text" name="lastname">
	address<input type="text" name="address">
	<button type="submit">Insert</button>
	
</form>
</body>
</html>