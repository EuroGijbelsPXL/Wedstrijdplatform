(function () {
    'use strict';

    angular.module('wedstrijdPlatform').constant('GLOBALS', {
        appName: '© 2015 – Wedstrijdplatform',
        appVersion: 'Appversie: 1.0.0',

		//als de app https gehost wordt, zijn de calls naar de api ook over https
		getUserByEmailUrl: 'phpapi/getUserByEmail.php/?'
    });
})();