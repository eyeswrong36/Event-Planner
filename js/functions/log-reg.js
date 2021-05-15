$('#user-reg').submit(function(){
	$('.modal-title').html("Sending...");
	$('#modal-p').html("<center><i class='fa fa-spinner fa-spin fa-5x'></i></center>");
	$('#btn-modal').trigger("click");
	$.ajax({
		type:"POST",
		url:"ajax/ajax-user-reg.php",
		cache:false,
		data:new FormData(this),
		contentType:false,
		processData:false,
		success:function(res){

			$('#modal-p').html(res);
			$('#clearFields').trigger("click");
		}
	});
	
	return false;
});

$('#user-login').submit(function(){
	
	$.ajax({
		type:"POST",
		url:"ajax/ajax-login.php",
		cache:false,
		data:new FormData(this),
		contentType:false,
		processData:false,
		success:function(res){

			if(res=="00"){
				window.location = 'index.php';
			}else{
				$('.modal-title').html("Error");
				$('#modal-p').html(res);
				$('#btn-modal').trigger("click");
			}
			
		}
	});
	return false;
});