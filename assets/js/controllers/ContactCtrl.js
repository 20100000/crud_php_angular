(function() {
	'use strict';

	angular.module('FLYERBD')
		.controller('ContactCtrl', Controller);

	Controller.$inject = ['$scope','$rootScope'];

	function Controller($scope, $rootScope) {

		$scope.title = 'contato views';
	}
})();
