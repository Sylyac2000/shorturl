<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{$title}}</title>
	<link rel="stylesheet" href="css/bulma.css">
	<style>
	.margin-top-50{
		margin-top: 50px;
	}
	</style>
</head>
<body>
	@yield("content")

	@yield("script")
	
</body>
</html>