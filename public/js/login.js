$(function() {	
	function cargando(){
		$('#nowLoading').removeClass('hidden').addClass('loading');
	}
	$('#test').on('click', cargando);
	$('#nowLoading').on('click', function(){
		$('#nowLoading').removeClass('loading').addClass('hidden');
	});
});