
 /*xmlhttp.open("POST", "login.php", true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send("email="+e+"&fullname="+fn+"&username="+u+"&password="+ps+"&repass="+rep);*/
$("button#submit").click(function(){
	if($("input#username").val()=="" || $("input#password").val()=="")
	$("div#result").html("Please enter both username and password");
	else
	{
	$.post($("#register").attr("action"),
		$("#register:input").serializeArray(),
		function(data) {
			$("div#result").html(data);
			});
	}
		$("#register").submit(function(){
					return false;
									 
									 });				 
});// JavaScript Document