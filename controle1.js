
function captcha()
{	 
 x=Math.random().toString(20).substr(2,8);
		 
 f.t3.value=x;
}

function verif1()
{
a=f.t1.value;
b=f.t2.value;
c=f.t3.value;
d=f.t4.value;
if (a.length==0||b.length==0||c.length==0)
{
alert('verifier votre données');
	return false;
}
else
if (c!=d)
{
	alert('verifier votre réponse de recaptcha');
	return false; 
}

	}
	
	function verif2()
	{
a=f.t1.value;
b=f.t2.value;
c=f.t3.value;
if (a.length==0||b.length==0||c.length==0)
{
alert('verifier votre données');
	return false;
	}
	}

