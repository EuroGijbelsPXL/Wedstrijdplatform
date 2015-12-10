// homeController.js
(function () {
	'use strict';
	angular.module('wedstrijdPlatform')
		.controller('homeController', homeController);
		
		function homeController() {
					this.msg = 'Hello vanuit de homeController';
					
					this.uitleg = 'ClemenGold is een heerlijk zoete, geurige en zachte mandarijn. Zongerijpt en met de hand geplukt door geselecteerde telers over de hele wereld, belooft een ClemenGold een versheid waar je iedere dag van kan genieten. Ben jij een fresh food-lover? Op zoek naar lekkere en gezonde, verse producten? Wil je de nieuwste producten als eerste ontdekken en proeven? Of wil je op de hoogte gebracht worden van acties en promoties? Schrijf je dan in voor onze nieuwsbrief! Ontdek meer over ClemenGold, of probeer deze recepten uit!';
					this.prijzen = 	[{'type': 'Hoofdprijs', 'afb': 'fordShelby.jpg'},
							{'type': 'Premiumprijs', 'afb': 'fordShelby.jpg'},
							{'type': 'Troostprijs', 'afb': 'fordShelby.jpg'}];
				}
})();