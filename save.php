<?php
include('config.php');

	save($_POST['Sunday'],$_POST['Monday'],$_POST['Tuesday'],$_POST['Wednesday'],$_POST['Thursday'],$_POST['Friday'],$_POST['Saturday']);
	echo "<script>
	window.location='activity.php?page=add';
	</script>";
?>
