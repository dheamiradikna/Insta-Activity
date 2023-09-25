<?php
	function connect_to_db()
	{
		$koneksi=mysqli_connect("localhost","root","","insta_activity");

		if($koneksi == false)
		{
			echo mysqli_error($koneksi);
			die;
		}
		return $koneksi;
	}
	
    function get_data_activity()
	{
		$koneksi = connect_to_db();
		$sql = "SELECT * FROM insta_activity";
		return mysqli_query($koneksi, $sql);
	}
	
    function delete()
    {
        $koneksi=connect_to_db();
		$sql="DELETE FROM = insta_activity";
		mysqli_query($koneksi,$sql);
	}
	function cek_login($username,$password)
	{
		$koneksi = connect_to_db();
        $sql = "SELECT * FROM pengguna
        WHERE username='$username' AND pass='".md5($password)."'";
        $query = mysqli_query($koneksi,$sql);
        $num = mysqli_num_rows($query);
        return ($num >0);
	}
    function save($Sunday,$Monday,$Tuesday,$Wednesday,$Thursday,$Friday,$Saturday)
    {
        $koneksi=connect_to_db();
		$sql="INSERT INTO insta_activity VALUES('$Sunday','$Monday','$Tuesday','$Wednesday','$Thursday','$Friday','$Saturday')";
		mysqli_query($koneksi,$sql);
    }
    function update($Sunday,$Monday,$Tuesday,$Wednesday,$Thursday,$Friday,$Saturday)
	{
		$koneksi=connect_to_db();
		$sql="UPDATE insta_activity
			SET Sunday='$Sunday',Monday='$Monday',Tuesday='$Tuesday','Wednesday='$Wednesday'Thursday='$Thursday',Friday='$Friday',Saturday='$Saturday'
			";
		mysqli_query($koneksi,$sql);
	}
?>
