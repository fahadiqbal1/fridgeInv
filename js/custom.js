/** Copyright Fahad Iqbal 2013 */

$(function() {
	loadDiv('home');
});

function loadDiv(page) {
	//$("#divDisplay").load(page+".php");
	var num = 0
	setTimeout(function(){
		num + 10;
		$("#divDisplay").html('<div class="progress progress-striped active"><div class="progress-bar"  role="progressbar" aria-valuenow="'+num+'" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div></div>');
	}, 100);

	$("#divDisplay").delay(1000).queue(function(n){
		$(this).load(page+".php");
		n();
	});
}