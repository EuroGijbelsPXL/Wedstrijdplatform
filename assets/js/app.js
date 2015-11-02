(function(){
	
		// 0. Algemene schrijfwijze voor configuratie van routes:

		// 1. Dependency op ngRoute toevoegen.
		angular.module('wedstrijdPlatform', ['ngRoute'])
			.config(moduleConfig);

		// 2. Inject dependencies
		moduleConfig.$inject = ['$routeProvider'];

		// 3. Routes configureren
		function moduleConfig($routeProvider) {
			$routeProvider.when('/', {
				templateUrl: 'views/home.html',
				controller: 'homeController',
				controllerAs: 'homeCtrl'
			})
			.when('/home', {
				templateUrl: 'views/home.html',
				controller: 'homeController',
				controllerAs: 'homeCtrl'
			})
			.when('/prijzen', {
				templateUrl: 'views/prijzen.html',
				controller: 'prijsController',
				controllerAs: 'prijsCtrl'
			})
			.when('/recepten', {
				templateUrl: 'views/recepten.html',
				controller: 'receptController',
				controllerAs: 'receptCtrl'
			})
			.when('/profiel', {
				templateUrl: 'views/profiel.html',
				controller: 'profielController',
				controllerAs: 'profielCtrl'
			})
			.when('/contact', {
				templateUrl: 'views/contact.html',
				controller: 'contactController',
				controllerAs: 'contactCtrl'
			})
			.otherwise({
				redirectTo: '/'
			})
		}

		// 4. Controllers configureren (idealiter komen deze natuurlijk in aparte bestanden!)
		angular.module('wedstrijdPlatform')
			.controller('homeController', homeController)
			.controller('prijsController', prijsController)
			.controller('receptController', receptController)
			.controller('profielController', profielController)
			.controller('contactController', contactController);

		// 5. Controllers implementeren
		function homeController() {
			this.msg = 'Hello vanuit de homeController';
		}
		function prijsController() {
			this.msg = 'Hello vanuit de prijsController';
		}
		function receptController() {
			this.msg = 'Hello vanuit de receptcontroller';
		}
		function profielController() {
			this.msg = 'Hello vanuit de profielController';
		}
		function contactController() {
			this.msg = 'Hello vanuit de contactController';
		}


})();

