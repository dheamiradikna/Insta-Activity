<?php
	//kalau file ini diakses tanpa login melalui index,maka akan muncul pesan ini
	if (defined("INDEX")==false)
	{
		die("You  shall not pass!");
	}

	//logout process
	session_destroy();

	//redirect ke hal login
	echo "<script>window.location='index.php?page=login';
	</script>";
?>

