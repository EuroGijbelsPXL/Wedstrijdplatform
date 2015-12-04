//wedstrijdFatory.js
(function () {
	'use strict';

	// Definitie van de wedstrijdFactory
	angular.module('myApp')
		.factory('wedstrijdFactory', wedstrijdFactory);
		
	wedstrijdFactory.$inject = ['$http', 'GLOBALS']; 

	// Implementatie van wedstrijdFactory
	function wedstrijdFactory($http, GLOBALS) {
		var factory = {};

		return factory;
	}
})();
