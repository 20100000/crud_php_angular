/**
 * Created by tiago on 24/07/2017.
 */
(function() {
    'use strict';

    angular.module('FLYERBD')
        .controller('menssagemFormController', Controller);

    Controller.$inject = ['Model', 'MenssagemService','$scope','$rootScope'];

    function Controller(Model, MenssagemService,$scope,$rootScope) {


        //properties
        $scope.model2 = Model;
        $scope.usuarios = [];
        $scope.errors = [];
        $scope.isLoading = true;


        $scope.cancel = cancel;
        function cancel() {
            $rootScope.modal2.close();
        }

        //public methods
        $scope.save = save;
        function save() {

            MenssagemService.save($scope.model2)
                .then(function(response) {

                })
                .catch(function(data, status) {
                })
                .finally(function() {
                    cancel()
                });
        }
        
        function init() {
            MenssagemService.getUser()
                .then(function(response) {
                    $scope.usuarios=response;
                })
                .catch(function(data, status) {
                })
                .finally(function() {
                });
        }

        init();



    }
})();
