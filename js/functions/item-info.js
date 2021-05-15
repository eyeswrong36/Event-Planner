$('#sendReq').click(function(){
	$('#setSched').trigger("click");
});
var cnt = {};
var data = [];





$('.fa-star').hover(function(){
	$('.fa-star').css({'color':'gray'});
	$('.fa-star').css({'cursor':'pointer'});
	var count = $(this).attr("id").slice(-1);
	var total = parseInt(count)+1;
	for(var i = 1; total > i; i++){
		$('#star'+i).css({'color':'yellow'});
	}

});
$('#divstar').mouseleave(function(){
	$('.fa-star').css({'color':'gray'});
});

$('.fa-star').click(function(){
         var count = $(this).attr("id").slice(-1);
         var pID = $('#pID').val();
         $.ajax({
            type:"POST",
            url:"ajax/ajax-rate.php",
            cache:false,
            data:{'rate':count,'pID':pID},
            success:function(res){
               alert(res);
               location.reload(true);
            }
         });

      });





