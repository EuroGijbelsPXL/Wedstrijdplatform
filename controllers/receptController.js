// receptController.js
(function () {
	'use strict';
	angular.module('wedstrijdPlatform')
		.controller('receptController', receptController);
		
		function receptController() {
					this.msg = 'Hello vanuit de receptController';
					
					this.recepten = [{'afb': 'recept.jpg','titel': 'Chiquita Milkshake', 'soort': 'Tussendoortje','aantalPers': 2, 'tijd' : '10 min', 'bereiding': 'Om deze milkshake te kunnen maken is het belangrijk om in ieder geval een blender en/of staafmixer paraat te hebben. Snijdt eerst de bananen in kleine stukjes. Voeg vervolgens de stukjes banaan, de melk, het ijs en de vanillesuiker toe in de blender en hussel het geheel goed door. Mix het ongeveer een minuutje in de blender en alles is goed gemengd. Eventueel kunt u naar eigen smaak ook wat aardbeien of kiwi’s toevoegen aan de milkshake. - See more at: http://www.milkshakemaken.net/milkshake-banaan/#sthash.72ym8RAY.dpuf', 'ingredienten': 'banaan', 'materiaal': 'mixer'},
					{'afb': 'recept.jpg','titel': 'Chiquita Milkshake', 'soort': 'Tussendoortje','aantalPers': 2, 'tijd' : '10 min', 'bereiding': 'dssssssslfjlsdjflsjqdfldlsfjsl', 'ingredienten': 'banaan', 'materiaal': 'mixer'},
					{'afb': 'recept.jpg','titel': 'Chiquita Milkshake', 'soort': 'Tussendoortje','aantalPers': 2, 'tijd' : '10 min', 'bereiding': 'dssssssslfjlsdjflsjqdfldlsfjsl', 'ingredienten': 'banaan', 'materiaal': 'mixer'},
					{'afb': 'recept.jpg','titel': 'Chiquita Milkshake', 'soort': 'Tussendoortje','aantalPers': 2, 'tijd' : '10 min', 'bereiding': 'dssssssslfjlsdjflsjqdfldlsfjsl', 'ingredienten': 'banaan', 'materiaal': 'mixer'},
					{'afb': 'recept.jpg','titel': 'Chiquita Milkshake', 'soort': 'Tussendoortje','aantalPers': 2, 'tijd' : '10 min', 'bereiding': 'dssssssslfjlsdjflsjqdfldlsfjsl', 'ingredienten': 'banaan', 'materiaal': 'mixer'},
					{'afb': 'recept.jpg','titel': 'Chiquita Milkshake', 'soort': 'Tussendoortje','aantalPers': 2, 'tijd' : '10 min', 'bereiding': 'dssssssslfjlsdjflsjqdfldlsfjsl', 'ingredienten': 'banaan', 'materiaal': 'mixer'},
					];
				}
})();

