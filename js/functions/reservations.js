$('#reservedForm').submit(function(){
	$.ajax({
		type:"POST",
		url:"ajax/ajax-reserved.php",
		cache:false,
		data:new FormData(this),
		contentType:false,
		processData:false,
		success:function(res){
			$('#canCel').trigger("click");
			$('#btn-modal').trigger("click");
			$('.modal-title').html("Result");
			$('#modal-p').html(res);

		}
	});
	return false;
});