$('label').click(function(){
	var v = $(this).html();
	$("[value='"+v+"']").trigger('click');
});

$('form').submit(function(){
	$('#btn-modal').trigger("click");
	$('.modal-title').html("Result");
	$.ajax({
		type:"POST",
		url:"ajax/ajax-insert-prod.php",
		cache:false,
		data:new FormData(this),
		contentType:false,
		processData:false,
		success:function(res){
			$('#modal-p').html(res);
			setTimeout(function(){
				window.location = 'myservices.php';
			},1500);
		}
	});
	return false;
});
$('#imgFile').change(function(e){
    var img = URL.createObjectURL(event.target.files[0]);
    $('#imgtoUp').attr("src",img);
  });