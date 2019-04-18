function checkEmail()
{
	var n=document.getElementById("i1");
	var v=n.value.search(/^[a-z]\w+@[a-z]+\.[a-z]+/);
	if(v!=0)
	{
		alert("Please enter a valid email-id(It should be in the form abc@xyz.com)");
		return false;
	}
	else 
		return true;
}

function checkPassword2()
{
	var n1=document.getElementById("i6");
	var n2=document.getElementById("i7");
	if(n1.value!=n2.value)
	{
		alert("Please enter the same password(It should be 6 characters long.)");
		return false;
	}
	else 
		return true;
}
 function checkValue1()
 {
	var n=document.getElementById("onionqty");
	if(n.value>=0 && n.value<=9)
		return true;
	else
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
}
  function checkValue2()
 {
	var n=document.getElementById("tomatoqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue3()
 {
	var n=document.getElementById("patatoqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue4()
 {
	var n=document.getElementById("bananaqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue5()
 {
	var n=document.getElementById("appleqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
 function checkValue6()
 {
	var n=document.getElementById("pomqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue7()
 {
	var n=document.getElementById("sugarqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue8()
 {
	var n=document.getElementById("aataqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue9()
 {
	var n=document.getElementById("ooilqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue10()
 {
	var n=document.getElementById("gheeqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue11()
 {
	var n=document.getElementById("tdalqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue12()
 {
	var n=document.getElementById("saltqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue13()
 {
	var n=document.getElementById("milkqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue14()
 {
	var n=document.getElementById("butterqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue15()
 {
	var n=document.getElementById("yogqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue16()
 {
	var n=document.getElementById("ruskqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue17()
 {
	var n=document.getElementById("breadqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }
  function checkValue18()
 {
	var n=document.getElementById("oatsqty");
	var v=n.value.search(/\d/);
	if(v!=0)
	{
		alert("Please enter a valid quantity...( It should be less then 10 !!!)");
		return false;
	}
	else 
		return true;
 }