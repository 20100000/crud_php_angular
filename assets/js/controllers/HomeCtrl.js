// angular.module('FLYERBD')
// 	.controller('HomeCtrl', ['$scope', function ($scope) {
// 		$scope.title = 'contato views';
// 	}]);
(function() {
	'use strict';

	angular.module('FLYERBD')
		.controller('HomeCtrl', Controller);

	Controller.$inject = ['$scope','UsuarioService', '$uibModal','$rootScope','MenssagemService'];

	function Controller($scope, UsuarioService, $uibModal, $rootScope, MenssagemService) {
		$scope.collection = [];
		$scope.collection2 = [];

		$scope.title = 'Usuarios';

		$scope.model = {};
		$scope.model2  ={};
		$rootScope.disabled = false;
		$scope.tabUser = true;
		$scope.tabMsg = false

		$scope.openModal = openModal;
		function openModal(model,disabled) {
			$scope.model = angular.isUndefined(model) ? {} : model;
			$rootScope.disabled = angular.isUndefined(disabled) ? false : disabled;
			console.log($scope.model.nome);
			$rootScope.modal = $uibModal.open({
				animation: true,
				templateUrl: 'assets/js/controllers/usuarioForm.html',
				controller: 'usuarioFormController as vm',
				backdrop: 'static',
				keyboard: false,
				size: '900',
				resolve: {
					Model: function() {
						return $scope.model;
					}
				}
			});

			$rootScope.modal.result.then(function(model) {
				init();
				$rootScope.disabled = false;
			});
		}

		$scope.openModal2 = openModal2;
		function openModal2(model,disabled) {
			$rootScope.disabled = angular.isUndefined(disabled) ? false : disabled;
			$scope.model2 = angular.isUndefined(model) ? {} : model;
			console.log($scope.model2.nome);
			$rootScope.modal2 = $uibModal.open({
				animation: true,
				templateUrl: 'assets/js/controllers/menssagemForm.html',
				controller: 'menssagemFormController as vm',
				backdrop: 'static',
				keyboard: false,
				size: '900',
				resolve: {
					Model: function() {
						return $scope.model2;
					}
				}
			});

			$rootScope.modal2.result.then(function(model) {
				init2();
				$rootScope.disabled = false;
			});
		}

		$scope.remover = remover;
		function remover(model) {
			UsuarioService.remove(model)
				.then(function(response) {

				})
				.catch(function(data, status) {
				})
				.finally(function() {
					init();
				});

		}

		function init() {
			UsuarioService.getCollection()
				.then(function (response) {
					$scope.collection = response
				});

		}
		init();
		$scope.init2 = init2;
		function init2() {
			MenssagemService.getCollection()
				.then(function (response) {
					$scope.collection2= response;
					console.log($scope.collection2);
				});

		}
	init2();
	}
})();
