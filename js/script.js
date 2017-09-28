$(document).ready(function(){
	$('#submit').on('click',function(){
		var name = $('#name').val();
		var shout = $("#shout").val();
		var date = getDate();
		var dataString = 'name='+name+'&shout='+shout+'&date='+date;   //output string
 		
 		//validation
 		if(name == '' || shout == ''){
 			alert("Please fill in the details");
 		}
 		else{
 			$.ajax({
 				type:'POST',
 				url:"../jsshoutbox/shoutbox.php",
 				data: dataString,
 				cache: false,
 				success: function(html){
 					$('#shouts ul').prepend(html);
 				}
 			});
 		}
 		return false;
 	});
});

function getDate(){
	var date; 
	date = new Date();
	date = date.getDate()+'-'+ date.getMonth()+'-'+date.getFullYear() + ' ' + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
	return date;	 
}