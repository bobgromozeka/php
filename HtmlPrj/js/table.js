function change()
{
	
var x = document.getElementsByClassName(document.getElementById("select").value);
var i;
for (i = 0; i < x.length; i++) {
    x[i].setAttribute('style','background-color:red');
}

}
function changejq()
{
	$("." + $("#select").val()).css('background-color', 'red');
/*	for (i = 0; i < x.length; i++) {
    x[i].css('background-color', 'red');
}*/
}

function funset()
{
	
	//$("tr:nth-child(1) td:nth-child(1)").text($("input:nth-child(1) [type='text']:nth-child(1)").val());
	$("tr:nth-child(1) td:nth-child(1)").text($('#text1').val());
	$("tr:nth-child(2) td:nth-child(1)").text($('#text2').val());
	$("tr:nth-child(3) td:nth-child(1)").text($('#text3').val());
	$("tr:nth-child(4) td:nth-child(1)").text($('input[name="rb"]:checked').val());
	//if ($("#radio2").checked = true) $("tr:nth-child(4) td:nth-child(1)").text($("#radio2").val());
	
}

