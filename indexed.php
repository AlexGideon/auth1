 <?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'db_hub';

$connection = mysqli_connect($host, $user, $password, $database);
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
mysqli_close($connection);
?>