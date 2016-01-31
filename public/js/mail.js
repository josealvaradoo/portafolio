var sendMail = function()
{
	var form = $("form");
	var dataString = form.serialize();
	var urlString = form.attr("action");
	var method = form.attr("method");

	$.ajax({
		type: method,
		url: urlString,
		data: dataString,
		success: function(response)
		{
			if (response == 1)
			{
				$(".alert-success").fadeIn("slow");
				setTimeout(function() {
					$(".alert-success").fadeOut("slow");
				}, 4000);
				$("form input[type=text], form input[type=email], form textarea").val("");
			}
			else if (response == 0)
			{
				$(".alert-danger").fadeIn("slow");
				setTimeout(function() {
					$(".alert-danger").fadeOut("slow");
				}, 4000);
			}

		}
	});
}

var closeAlert = function() {
	$(".alert").fadeOut();
}