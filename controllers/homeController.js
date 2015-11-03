// homeController.js
(function () {
	'use strict';
	angular.module('wedstrijdPlatform')
		.controller('homeController', homeController);
		
		function homeController() {
					this.msg = 'Hello vanuit de homeController';
					
					this.uitleg = 'Speluitleg van de wedstrijdpagina,Speluitleg van de wedstrijdpagina,Speluitleg van de wedstrijdpagina';
					this.prijzen = 	[{'type': 'Hoofdprijs', 'afb': 'fordShelby.jpg'},
							{'type': 'Premiumprijs', 'afb': 'vespaGeel.jpg'},
							{'type': 'Troostprijs', 'afb': 'hotwheels.jpg'}];
				}
})();