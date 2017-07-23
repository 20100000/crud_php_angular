// angular.module('FLYERBD')
// 	.controller('HomeCtrl', ['$scope', function ($scope) {
// 		$scope.title = 'contato views';
// 	}]);
(function() {
	'use strict';

	angular.module('FLYERBD')
		.controller('HomeCtrl', Controller);

	Controller.$inject = ['$scope','UsuarioService'];

	function Controller($scope, UsuarioService) {

		$scope.model = "";
		$scope.title = 'Usuarios';
		function init() {
			UsuarioService.getCollection()
				.then(function (response) {
					$scope.model = response
				});

			console.log($scope.model);
		}
		init();

	}
})();
