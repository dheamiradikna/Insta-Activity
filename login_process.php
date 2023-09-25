<?php
	//kalau file ini diakses tanpa login melalui index,maka akan muncul pesan ini
	if (defined("INDEX")==false)
	{
		die("You  shall not pass!");
	}


    $username = $_POST['username'];
    $password = $_POST['pass'];

    $cek = cek_login($username,$password);

    if($cek)
    {
        //set session
        $_SESSION['username']=$username;

        //redirect ke dashboard
        echo "<script>
	window.location='index.php?page=add';
	</script>";
    }
    else
    {
        //redirect ke halaman login
    }
    echo "<script>
	window.location='index.php?page=login';
	</script>";

?>