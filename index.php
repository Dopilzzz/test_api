<?php 

spl_autoload_register(function ($class) {
    include 'api/' . $class . '.php';
});

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Test API</title>
</head>
<body>
<?php
$app = new Application;
?>
<?= $app->get_name() ?>
</body>
</html>