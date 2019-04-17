<?php
function alert($w,$e)
{
	echo "<script>alert('$w');";
	if($e==0)
	echo "location = 'home1.php'</script>";
	else if($e==1)
	echo "location = 'login.php'</script>";
	else if($e==2)
	echo "location = 'signup.php'</script>";
    else if($e==3)
	echo "location = 'veg.php'</script>";
	else if($e==-1)
	echo "</script>";
}
