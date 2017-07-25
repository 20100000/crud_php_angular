var FLYERBD = angular.module('FLYERBD', [
	'ngRoute','oc.lazyLoad','ui.bootstrap'
	]);

FLYERBD.config(['$routeProvider', function ($routeProvider,$ocLazyLoad) {
	$routeProvider
	.when('/', {
		templateUrl: 'home',
		controller: 'HomeCtrl',
		resolve:{
			loadAsset:["$ocLazyLoad", function ($ocLazyLoad) {
				return $ocLazyLoad.load(['assets/js/controllers/HomeCtrl.js','assets/js/server/UsuarioService.js',
					'assets/js/controllers/usuarioFormController.js','assets/js/controllers/menssagemFormController.js',
					'assets/js/server/MenssagemService.js'
				])
			}]
		}
	})

}]);