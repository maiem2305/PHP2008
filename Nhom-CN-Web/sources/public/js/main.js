$(function(){
	$("#input1").keyup(function(event) {
		if (event.keyCode === 13) {
			$("#btn1").click();
		}
	});
	$('#btn1').click(function(){
		let keyword = $('#input1').val().trim();
		window.location.href = '?c=action&search='+keyword;
     //alert(window.location.href);
 }); 
});