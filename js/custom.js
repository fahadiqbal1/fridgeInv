/** Copyright Fahad Iqbal 2013 */

$(function() {
	var href = location.href;
	var split = href.split("#");
	if(split[1] != null){
		loadDiv(split[1]);
	}
	else {
		loadDiv('home');
	}
});

function loadDiv(page) {
	$("#divDisplay").html('<br/><div class="progress progress-striped active"><div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div></div>');
	//$("#divDisplay").load(page+".php");
	$(".progress-bar").animate({width: "100%"},1000);

	$("#divDisplay").delay(1500).queue(function(n){
		$(this).load(page+".php");
		n();
	});
}

function formVal(name) {
	alert('submitting: ' + name);
}