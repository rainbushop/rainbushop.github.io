$(document).ready(function() {
	console.log("abc");
	$(".sitemap-parent").next().slideUp(0);
	$(".sitemap-parent").click(function(event) {
		/* Act on the event */
		console.log("abc");
		$(this).next().slideToggle();
	});
});