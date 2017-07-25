/**
 * Created by tiago on 24/07/2017.
 */
(function() {
    'use strict';
    angular.module('FLYERBD')
        .factory('MenssagemService', Service);

    Service.$inject = ['$http', '$q'];

    function Service($http, $q ) {
        var service = this;

        //properties
        service.resources = null;

        //public methods
        service.getCollection = getCollection;
        service.save = save;
        service.remove = remove;
        service.getUser = getUser;
        var UrlService ="http://localhost/codeigniter-restserver-master/";

        return service;

        function getCollection() {
            var future = $q.defer();

            $http.get(UrlService+'msg')

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
                svc = $http.put(UrlService+'msg/update/'+ model.id, model)
            } else {
                svc = $http.post(UrlService+'msg/create', model);
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
            $http.delete(UrlService+'msg/delete/'+model.id)
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

        function getUser() {
            var future = $q.defer();

            $http.get(UrlService+'user')

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
