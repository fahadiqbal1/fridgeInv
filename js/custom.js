/** Copyright Fahad Iqbal 2013 */

$(function() {
	loadDiv('home');
});

function loadDiv(page) {
	$("#divDisplay").html('<div class="progress progress-striped active"><div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div></div>');
	//$("#divDisplay").load(page+".php");
	$(".progress-bar").animate({width: "100%"},1000);

	$("#divDisplay").delay(1000).queue(function(n){
		$(this).load(page+".php");
		n();
	});
}