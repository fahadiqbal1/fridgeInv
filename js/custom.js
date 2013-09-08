/** Copyright Fahad Iqbal 2013 */

$(function() {
	loadDiv('home');
});

function loadDiv(page) {
	$("#divDisplay").html('<div class="progress progress-striped active"><div class="progress-bar"  role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%; margin-top: 50px;"></div></div>');
	$("#divDisplay").load(page+".php");
}