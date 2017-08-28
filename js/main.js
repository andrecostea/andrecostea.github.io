$(document).ready(function() {
	$(".compute-sum").change(function (){
		var conference = $('input[name=conference]:checked').val()
		var workshop = $('input[name=workshop]').is(":checked") ? 1 : 0;
		var extraPages = $('input[name=extrapages]').val();

		var data = {
			"conference": conference,
			"workshop": workshop,
			"extrapages": extraPages,
			"action": "compute-sum"
		};

		$.ajax({
		  url: "ajax.php",
		  data: data,
		  success: function(data) {
		  	$("#price").text(data);
		  }
		});
	});
});

function goBack() {
    window.history.back()
}