// homeController.js
(function () {
	'use strict';
	angular.module('wedstrijdPlatform')
		.controller('homeController', homeController);
		
		function homeController() {
					this.msg = 'Hello vanuit de homeController';
				}
})();