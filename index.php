<!doctype html>
<html lang="en" ng-app="MyApp">
<head>
	<meta charset="UTF-8">
	<title>Angular Chart</title>
	<script src="js/angular.min.js"></script>
	<script src="js/angular-route.min.js"></script>
	<script src="js/app.js"></script>
</head>
<body>
	<div ng-controller="TestController">
		<h1>{{ name }}</h1>
		<h2>{{ 'Myanmar Links' | ML }}</h2>
		<h3>{{ 'Ye Thu Soe' | holla }}</h3>
		<h1>{{ 'Thatoe' | greet }}</h1>
		<h1>{{ kick }}</h1>
	</div>
</body>
</html>