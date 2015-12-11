// homeController.js
(function () {
	'use strict';
	angular.module('wedstrijdPlatform')
		.controller('homeController', homeController);
		
		homeController.$inject = ['$routeParams', 'wedstrijdFactory'];
		
		function homeController($routeParams, wedstrijdFactory) {
			var vm = this;
			
					vm.msg = 'Hello vanuit de homeController';
					
					vm.uitleg = 'ClemenGold is een heerlijk zoete, geurige en zachte mandarijn. Zongerijpt en met de hand geplukt door geselecteerde telers over de hele wereld, belooft een ClemenGold een versheid waar je iedere dag van kan genieten. Ben jij een fresh food-lover? Op zoek naar lekkere en gezonde, verse producten? Wil je de nieuwste producten als eerste ontdekken en proeven? Of wil je op de hoogte gebracht worden van acties en promoties? Schrijf je dan in voor onze nieuwsbrief! Ontdek meer over ClemenGold, of probeer deze recepten uit!';
					vm.prijzen = 	[{'type': 'Hoofdprijs', 'afb': 'fordShelby.jpg'},
							{'type': 'Premiumprijs', 'afb': 'fordShelby.jpg'},
							{'type': 'Troostprijs', 'afb': 'fordShelby.jpg'}];
							
					vm.showError = false;
					
					//Hierbinnen eerst controleren of de velden wel juist zijn ingevuld, daarna pas factory (en zo api) aanspreken
					vm.getUserByEmail = function (){
						var email = vm.email;
						var ww = vm.ww;
						//alert(email);
						
						wedstrijdFactory.getUserByEmail(email, ww)
						.success(function (record) {
							
							//alert(record);
							if(record !== "false"){
								/*vm.user = record;
								vm.voornaam = "voornaam: " + record['voornaam'];
								vm.showError = false;
								vm.status = "";*/
								
								window.location = "#/spelpagina";
								
							}else{
								//vm.user = "";
								//vm.voornaam = "";
								vm.showError = true;
							}
						})
						.error(function (err, status) { //Als hij aan de API kan geeft hij nooit error (geeft altijd success maar als record 'false')
							//vm.errorMsg = err;
							//vm.status = status;
							alert("Error: " + err + " status = " + status);
						});
					}
				}
})();