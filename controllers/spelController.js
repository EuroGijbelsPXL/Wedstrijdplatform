// spelController.js
(function () {
	'use strict';
	angular.module('wedstrijdPlatform')
		.controller('spelController', spelController);
		
		function spelController() {
					this.msg = 'Hello vanuit de spelController';
					
					this.uitleg = 'instructies spel';
					this.prijzen = 	[{'type': 'Hoofdprijs', 'afb': 'fordShelby.jpg'},
							{'type': 'Premiumprijs', 'afb': 'vespaGeel.jpg'},
							{'type': 'Troostprijs', 'afb': 'hotwheels.jpg'}];
				}
})();