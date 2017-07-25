/**
 * Created by tiago on 23/07/2017.
 */
(function() {
    'use strict';
    angular.module('FLYERBD')
        .factory('UsuarioService', Service);

    Service.$inject = ['$http', '$q'];

    function Service($http, $q ) {
        var service = this;

        //properties
        service.resources = null;

        //public methods
        service.getCollection = getCollection;
        service.save = save;
        service.remove = remove;
        service.getCep = getCep;

        var UrlService ="http://localhost/crud_php_angular-master/";

        return service;

        function getCollection() {
            var future = $q.defer();

            $http.get(UrlService+'usuario')

                .then(function(response) {
                    future.resolve(response.data);
                })
                .catch(function(data, status) {
                    future.reject({
                        data: data,
                        status: status
                    });
                });

            return future.promise;
        }

        function save(model) {
            var future = $q.defer(),
                svc = "";

            if (model.id) {
                svc = $http.put(UrlService+'usuario/update/'+ model.id, model)
            } else {
                svc = $http.post(UrlService+'usuario/create', model);
            }

            svc.then(function(response) {
                future.resolve(response.data);
            })
                .catch(function(data, status) {
                    future.reject({
                        data: data,
                        status: status
                    });
                });

            return future.promise;
        }

        function remove(model) {
            var future = $q.defer();
            console.log(model);
            $http.delete(UrlService+'usuario/delete/'+model.id)
                .then(function(response) {
                    future.resolve(response.data);
                })
                .catch(function(data, status) {
                    future.reject({
                        data: data,
                        status: status
                    });
                });

            return future.promise;
        }

        function getCep(cep) {
            var future = $q.defer();

            $http.get("https://viacep.com.br/ws/"+cep+"/json/")

                .then(function(response) {
                    future.resolve(response.data);
                })
                .catch(function(data, status) {
                    future.reject({
                        data: data,
                        status: status
                    });
                });

            return future.promise;
        }

    }

    return Service;
})();
