/** Copyright Fahad Iqbal 2013 */

$(function() {
	loadDiv('home');
});

function loadDiv(page) {
	$("#divDisplay").html('');
	$("#divDisplay").load(page+".php");
}