(function (Config = App.Config || {}) {
	


	Config.add = function()
	{

	}

	

	Config.init = function()
	{
		jQuery(document).ready(function($) {
			console.log('.. Configurações');			
		});
	}



	App.Config = Config;
	window.App = App;

	return [
		init:Config.ini()
	]


})(App = window.App || {}); 