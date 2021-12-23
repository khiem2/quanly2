$(document).ready(function(){ 
//Ẩn hiện pần đăng nhập
$('#login').click(function(){
	console.log("hello");
	$('#black').toggle();
	$('.choose_acount').toggle();

});
$('#cancel').click(function(){
	$('#black').css("display","none");
	$('.choose_acount').css("display","none");
});
$('#manager').click(function(){
location.href='./login.php?role=1';
});

$('#manager_one').click(function(){
location.href='./login.php?role=2';
});

$('#teacher').click(function(){
location.href='./login.php?role=3';
});

})//