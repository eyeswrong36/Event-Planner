var e = $('#uEmail').text();
$('#appContract').click(function(){
	var tID = $('#tID').text();
	$(this).text("Processing please wait...");
	$.ajax({
		type:"POST",
		url:"ajax/ajax-appcontract.php",
		cache:false,
		data:{'transID':tID,'Email':e},
		success:function(res){
			alert(res);
			window.location='reservations.php';
		}
	});

});

$('#rejContract').click(function(){
	var tID = $('#tID').text();
	$(this).text("Processing please wait...");
	if(confirm("Are you sure you want to reject this contract?")){
		$.ajax({
			type:"POST",
			url:"ajax/ajax-rejcontract.php",
			cache:false,
			data:{'transID':tID,'Email':e},
			success:function(res){
				alert(res);
				window.location='notifications.php';
			}
		});
	}else{

	}
	

});

$('#canContract').click(function(){
	var tID = $('#tID').text();
	$.ajax({
		type:"POST",
		url:"ajax/ajax-cancontract.php",
		cache:false,
		data:{'transID':tID},
		success:function(res){
			alert(res);
			window.location='availedservices.php';
		}
	});
});