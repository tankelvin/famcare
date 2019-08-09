<?php

	require_once 'app/init.php';

	$itemsQuery = $db->prepare("
		SELECT ID, name, done
		FROM progress4
		WHERE user = :user
	");

	$itemsQuery->execute([
		'user' => $_SESSION['user_id']
	]);

	$progress4 = $itemsQuery->rowCount() ? $itemsQuery : [];

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>To do list</title>

		<link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<link rel="stylesheet" href="<?php testParsing(); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>

		<div class="list">
			<h1 class="header"> To do.</h1>

			<?php if(!empty($progress4)): ?>
			<ul class="items">
				<?php foreach($progress4 as $item): ?>
				<li>
					<span class="item<?php echo $item['done'] ? ' done' : ''?>"> <?php echo parse($item['name']); ?></span>
					
					<?php if(!$item['done']): ?> 
						<a class="done-button" href="mark2.php?as=done&item=<?php echo $item['ID']; ?>">Mark as done</a>
					<?php else: ?>
						<a class="undone-button" href="mark2.php?as=undone&item=<?php echo $item['ID']; ?>">Mark as undone</a>						
					<?php endif; ?>
				</li>
				<?php endforeach; ?>
			</ul>
			<?php else: ?>
				<p>You haven't added any items yet.</p>
			<?php endif; ?>

			<form class="item-add" action="add.php" method="POST">
				 <a  href="http://localhost/famcare/index.php/Welcome/courses">back</a>
			</form>

		</div>

	</body>

</html>