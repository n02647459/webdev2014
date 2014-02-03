var file = document.location.href.match(/[^\/]+$/)[0];

$( document ).ready(function() {
//	$( "#"+file ).addClass("active");
	$( "#page1.php" ).attr('class', 'active');
});
