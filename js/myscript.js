$(document).ready(function(){
	$("#suggest").keyup(function(){
		$.get("suggest.php", {company: $(this).val()}, function(data){
			$("datalist").empty();
			$("datalist").html(data);
		});
	});
});