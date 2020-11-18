<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') | Shop Hoa Tươi</title>
</head>
<body>
	<div style="background: red">
		<h3>Header</h3>
	</div>
	<div style="background: blue">
		@yield('content');
		<h3>Body</h3>
	</div>	
	<div style="background: yellow">
		<h3>Footer</h3>
	</div>	
</body>