$('label').click(function(){
	var v = $(this).html();
	$("[value='"+v+"']").trigger('click');
});

$('form').submit(function(){
	var getID = $("[name='prodID']").val();
	$('#btn-modal').trigger("click");
	$('.modal-title').html("Result");
	$.ajax({
		type:"POST",
		url:"ajax/ajax-change-prod.php",
		cache:false,
		data:new FormData(this),
		contentType:false,
		processData:false,
		success:function(res){
			$('#modal-p').html(res);
			setTimeout(function(){
				window.location = 'item-info.php?prodID='+getID;
			},1500);
		}
	});
	return false;
});
$('#imgFile').change(function(e){
    var img = URL.createObjectURL(event.target.files[0]);
    $('#imgtoUp').attr("src",img);
  });
