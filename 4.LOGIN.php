<?PHP
$UNAME=$_POST['UNAME'];
$UPSWD=$_POST['UPSWD'];

If (!empty ($uname)&&!empty($upswd)&
	$host="local host";
	$dbusername="root";
	$dbpassword="";
	$dbname="sameera";
//create connection
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if (my sqli_connect_error())
{
	die('connect error('.mysqli_connect_error().').mysqli_connect_error());
	}
	else
	{
//checking the user name
	$select="SELECT uname1 from register where uname1=?limit1";
//prepare statement
$stmt=$conn->prepare($ select);
$stmt->bind_param("s",$uname);
$stmt->execute();
$stmt->bind_result ($uname);
$stmt->store_result();
$stmt=$stmt->num_rows;
//checking username
if ($rnum==0)
{
$stmt->close();
echo"username not found<br>";
}
else
{
echo"username found<br>";
//checking the username
$select='select upswd1'form register where uname1=?";
//prepare statement
$stmt=$conn->prepare($select);
$stmt->bind_param("s";$uname);
$stmt->execute();
$stmt->bind_result($upswd);
$stmt->fetch();
echo"<br>Registered password:".$pswd;
echo"<br>Entered password;"$pswd:
if($upswd==$pswd){
echo"<br> correct password<br> succefully logged in";
}
else{
echo"<br>incorrect password";
}
{
$stmt->close();
$stmt->close();
}
}
else
{
echo "all field are required";
die();
}
?>