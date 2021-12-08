<?php
require_once 'upload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<img src="<?php echo $profilePicture; ?>" style="border-radius: 100px;">
	<?php if (!empty($_POST['user']['name'] && $_POST['user']['surname'] && $_POST['user']['cities'] && $_POST['lang'])): ?>
	<h1>Jusu duomenys:</h1>
    <h3>Vardas: <?php echo $_POST['user']['name'] ?></h3>
	<h3>Pavarde: <?php echo $_POST['user']['surname'] ?></h3>
	<h3>Miestas: <?php echo $_POST['user']['cities'] ?></h3>
	<h2>Pasirinktos programavimo kalbos:</h2>
	<?php $checkbox = $_POST['lang'];
			foreach ($checkbox as $lang){
				if ($lang){
					echo"<h3>$lang<h3>";
				}
			}
			?>
	
	<h2>Papildoma informacija:</h2>
	<h3><?php echo $_POST['content']?></h3>
	
	
	<?php else: ?>
	<h3 style="color:red">Fill all fields !</h3>
	<?php endif;?>

</body>
</html>