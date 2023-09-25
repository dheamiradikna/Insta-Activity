<?php
include('config.php');
?>
<?php
	
	if (defined("INDEX")==false)
	{
		die("You  shall not pass!");
	}
    update($_POST['Sunday'],$_POST['Monday'],$_POST['Tuesday'],$_POST['Thursday'],$_POST['Wednesday'],$_POST['Friday'],$_POST['Saturday']);
	echo "<script>
	window.location='add.php?page=activity';
	</script>";
?>
