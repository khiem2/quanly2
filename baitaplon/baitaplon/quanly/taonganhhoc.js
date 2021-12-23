$(document).ready(function(){ 

$('.create_majorss').click(function(event) {
	$('#black').toggle();
	$('.create_majors').css('display','flex');
})

$('#cancel,#cancel2,#cancel1').click(function(event) {
	$('#black').css('display','none');
	$('.create_majors').css('display','none');
	$('.create_subject').css('display','none');
	$('.change_subject').css('display','none');
	$('#black1').css('display','none');
})
// $('#cancel2').click(function(event) {
// 	location.href='quanly_taonganhhoc.php'
// });

$('.create_subjects').click(function(event) {
	$('#black').toggle();
	$('.create_subject').css('display','flex');
});

//$('.change').click(function(event) {
	//$('#black').toggle();
	//$('.change_subject').css('display','flex');
//});

$(".list-group div").contextmenu(function(event){
	var list=$(this).children('.idnganh').html();
    event.preventDefault();
    var x=event.pageX;
    var y=event.pageY;
    $('.delete_majors').css('display','block');
    $('.delete_majors').css("top",y+"px");
    $('.delete_majors').css("left",x+"px");
    $('#delete').click(function(){
    	location.href='./delete_majort.php?id='+list;
    });
})

$('body').click(function(event) {
	$('.delete_majors').css('display','none');
});

})//