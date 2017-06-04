//noinspection UnreachableCodeJS
(function (Config = App.Config || {}) {

	Config.init = function() {
		jQuery(document).ready(function($) {
			console.log('.. Configurações');
		});
	}

	App.Config = Config;
	window.App = App;

	return {init : Config.init()}

})(App = window.App || {}); 