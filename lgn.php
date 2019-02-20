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

/* Проверка на соотвецтвие */
$cnt = mysqli_query($connection, "SELECT * FROM `data` WHERE `login` = '$ln' AND `password` = '$ps'"); 
if(mysqli_num_rows($cnt) == 0)
{
	echo "<h1>Неправильный логин и пароль</h1>";
}
    else 
    {
        echo 'Привет, '.$ln.'!' . "</br>";
		$res = mysqli_query($connection, "SELECT * FROM `data`");
	?>
	<ul>
	<?php
		while ($info = mysqli_fetch_assoc($res))
		{
			echo '<li>' . 'Login: ' . $info['login']. ' Password: ' . $info['password'] . ' ID: ' . $info['id'] . '</li>';
		}
		
		?>
</ul>
<?php
    }
}
else die();

mysqli_close($connection);
?>