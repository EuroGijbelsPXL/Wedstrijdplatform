// prijsController.js
(function () {
	'use strict';
	angular.module('wedstrijdPlatform')
		.controller('prijsController', prijsController);
		
		function prijsController() {
					this.msg = 'Hello vanuit de prijsController';
					
					this.prijzen = 	[{'type': 'Hoofdprijs', 'omschrijving': 'De omschrijving van de hoofdprijs','afb': 'fordShelby.jpg', 'aantal' : 1},
							{'type': 'Premiumprijs', 'omschrijving': 'De omschrijving van de premiumprijs', 'afb': 'fordShelby.jpg', 'aantal' : 10},
							{'type': 'Troostprijs', 'omschrijving': 'De omschrijving van de troostprijs','afb': 'fordShelby.jpg', 'aantal' : 250},
							{'type': 'Extra prijs', 'omschrijving': 'De omschrijving van de extra prijs','afb': 'fordShelby.jpg', 'aantal' : 1000}];
				}
})();