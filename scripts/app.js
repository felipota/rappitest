'use strict';

// declare modules
angular.module('Authentication', []);


angular.module('BasicHttpAuthExample', [
    'Authentication',
  
    'ngRoute',
    'ngCookies',
    'ngStorage'
])
 
.config(['$routeProvider', function ($routeProvider) {

}])
 
.run(['$rootScope', '$location', '$cookieStore', '$http',
    function ($rootScope, $location, $cookieStore, $http) {
        
        $rootScope.globals = $cookieStore.get('globals') || {};
        
        
        
    }]);