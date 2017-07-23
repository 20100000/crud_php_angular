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
        var UrlService ="http://localhost/flyerbd/";

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

    }

    return Service;
})();
