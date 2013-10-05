var MyModule = angular.module('MyApp', ['ngRoute']);
MyModule.value('database', {
	name: "wpa9ang",
	load: function(name) {
		return "Hello World " + name;
	}
});
MyModule.filter('ML', function(){
	return function(name) {
		return  name;
	}
});
MyModule.filter('greet', function() {
	return function(name) {
		return 'Hello ' + name;
	}
});
MyModule.factory('KickIt', function(){
	return "Bang! Bang!";
});
function TestController($scope, database, KickIt) {
	$scope.name = database.name;
	$scope.kick = KickIt;
	console.log(database.load('Myanmar Links'));
}