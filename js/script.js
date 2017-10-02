		var cont = document.getElementById('contact');
		cont.addEventListener('click', function(){
		
		
				$.ajax("contact.html")
					.done(function(data) {
						
						$("bodymain").html(data);
						
					})
					.fail(function() {
						alert("Couldn't get data");
					}
			
			;}, false);
		
		$("#about").click(function() {
			
			$("mainiframe").attr("scr","about.html");
			
		});
