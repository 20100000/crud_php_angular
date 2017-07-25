/**
 * Created by tiago on 24/07/2017.
 */
(function() {
    'use strict';

    angular.module('FLYERBD')
        .controller('usuarioFormController', Controller);

    Controller.$inject = ['Model', 'UsuarioService','$scope','$rootScope'];

    function Controller(Model, UsuarioService,$scope,$rootScope) {


        //properties
        $scope.model = Model;
        $scope.errors = [];
        $scope.isLoading = true;


        $scope.cancel = cancel;
        function cancel() {
            $rootScope.modal.close();
        }

        //public methods
        $scope.save = save;
        function save() {

            UsuarioService.save($scope.model)
                .then(function(response) {

                })
                .catch(function(data, status) {
                })
                .finally(function() {
                    cancel()
                });
        }

        $scope.buscaCEP = buscaCEP;
        function buscaCEP(cep) {
            cep = cep.replace('-','');
            console.log(cep);
            UsuarioService.getCep(cep)
            .then(function(response) {
                console.log(response);
                $scope.model.logradouro = response.logradouro;
                $scope.model.bairro = response.bairro;
                $scope.model.cidade = response.localidade;
                $scope.model.uf = response.uf;
             })
             .catch(function(data, status) {
             })
             .finally(function() {
             });
        }

    }
})();
