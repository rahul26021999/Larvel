<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Projects</h1>

@foreach($project as $p)

<h3>{{ $p->title }}</h3>
@endforeach
</body>
</html>