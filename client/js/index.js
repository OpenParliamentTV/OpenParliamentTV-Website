$(document).ready( function() {
	$(".langswitch").on("click",function(e) {
		e.preventDefault();
		$.ajax({
			url:"ajaxServer.php",
			data: {
				a:"lang",
				lang:$(this).data("lang")
			},
			method: "POST",
			success: function() {
				location.reload();
			}
		})
	});
});