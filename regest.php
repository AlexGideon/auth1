 <?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'db_hub';

$connection = mysqli_connect($host, $user, $password, $database);
if($connection == true)
{
	
$ln = $_POST['login'];
$ps = $_POST['pass'];
$cnt = mysqli_query($connection, "SELECT * FROM `data` WHERE `login` = '$ln'" );
if(mysqli_num_rows($cnt) == 0)
{
	$query ="INSERT INTO data VALUES(NULL, '$ln','$ps')";
	$result = mysqli_query($connection, $query);
    echo "<H1>Welcome " . $ln . "</H1>";
}
    else 
    {
        echo 'Такой юзер, '.$ln.' есть!';
    }
}
else die();

mysqli_close($connection);
?>