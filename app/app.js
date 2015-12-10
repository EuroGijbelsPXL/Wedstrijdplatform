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
				templateUrl: 'views/home.php',
				controller: 'homeController',
				controllerAs: 'homeCtrl'
			})
			.when('/home', {
				templateUrl: 'views/home.php',
				controller: 'homeController',
				controllerAs: 'homeCtrl'
			})
			.when('/spelpagina', {
				templateUrl: 'views/spelpagina.php',
				controller: 'spelController',
				controllerAs: 'spelCtrl'
			})
			.when('/prijzen', {
				templateUrl: 'views/prijzen.php',
				controller: 'prijsController',
				controllerAs: 'prijsCtrl'
			})
			.when('/recepten', {
				templateUrl: 'views/recepten.php',
				controller: 'receptController',
				controllerAs: 'receptCtrl'
			})
			.when('/profiel', {
				templateUrl: 'views/profiel.php',
				controller: 'profielController',
				controllerAs: 'profielCtrl'
			})
			.when('/contact', {
				templateUrl: 'views/contact.php',
				controller: 'contactController',
				controllerAs: 'contactCtrl'
			})	
			.when('/registreren', {
				templateUrl: 'views/registreren.php',
				controller: 'homeController',
				controllerAs: 'homeCtrl'
			})
			.otherwise({
				redirectTo: '/'
			})
		}


})();

