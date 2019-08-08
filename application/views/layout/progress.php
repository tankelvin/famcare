<!DOCTYPE html>
<?php include ('application/config/config.php'); ?>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

// $sql = "SELECT max(id_progress)id_progress FROM progress";


$sql = "SELECT count(done) done from items
WHERE done LIKE '1%';";

$result = $db->query($sql);

    while($row = $result->fetch_assoc()) {

        echo "Progress: " . $row["done"]. "0% ";
    } ?>

</body>
</html>


			






		