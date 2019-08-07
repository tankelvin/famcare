<!DOCTYPE html>
<?php include ('application/config/config.php'); ?>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$sql = "SELECT max(id_progress)id_progress FROM progress";
$result = $db->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "Progress: " . $row["id_progress"]. "  % ";
    } ?>

</body>
</html>


			






		