//wedstrijdFatory.js
(function () {
	'use strict';

	// Definitie van de wedstrijdFactory
	angular.module('wedstrijdPlatform')
		.factory('wedstrijdFactory', wedstrijdFactory);
		
	wedstrijdFactory.$inject = ['$http', 'GLOBALS']; 

	// Implementatie van wedstrijdFactory
	function wedstrijdFactory($http, GLOBALS) {
		var factory = {};

		factory.getUserByEmail = function (email, ww) {
            return $http({
                method: 'POST',
                url: GLOBALS.getUserByEmailUrl,
				data: '{"email": "' + email + '", "wachtwoord": "' + ww + '"}' 
            });
        }
		
		return factory;
	}
})();
