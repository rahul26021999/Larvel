<!DOCTYPE html>
<html>
<head>
	<title>Create </title>
</head>
<body>
<h1>create a new project</h1>
<div>
	<form method="POST" action="/project">
		{{csrf_field()}} <!-- most important beacuse security check in larvel -->
		<input type="text" name="title" placeholder="enter title"/>
		<input type="text" name="description" placeholder="enter description"/>
		<input type="submit">submit</input>
	</form>
</div>
</body>
</html>