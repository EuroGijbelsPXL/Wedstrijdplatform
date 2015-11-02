// contactController.js
(function () {
	'use strict';
	angular.module('wedstrijdPlatform')
		.controller('contactController', contactController);
		
		function contactController() {
					this.msg = 'Hello vanuit de contactController';
				}
})();