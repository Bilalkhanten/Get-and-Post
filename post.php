<html>
<head>
	<title>Post Method</title>
</head>

<body>

<h1>Sending Data to Another Page using POST Method.</h1>

<FORM action="process.php" method="post">
    <pre style="background-color:lightgrey;">

    First name: <INPUT type="text" name="firstname" value="Bilal"><BR>
    Last name: <INPUT type="text" name="lastname" value="Khan"><BR>
    Email: <INPUT type="email" name="mail" value="Bilalkhanten@gmail.com"><BR>
    Phone No# <INPUT type="number" name="phone" value="3246222446"><BR><BR><BR>
    Choose Your Gender:<br>
    <INPUT type="radio" name="sex" value="Male" > Male<BR>
    <INPUT type="radio" name="sex" value="Female"> Female<BR>
    <TEXTAREA rows="10" cols="40" name="text">Enter Your Opinions!</TEXTAREA><BR>
    <INPUT type="submit" value="Send"> <INPUT type="reset">

    </Pre>
 </FORM>


</body>
</html>