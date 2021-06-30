<?php

    require 'database.php';

    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		    $id = $_POST['id'];
		    $category = $_POST['category'];
        $sleeve = $_POST['sleeve'];
        $color = $_POST['color'];
        $quantity = $_POST['quantity'];

		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO table_rfid (name,id,category,sleeve,color,quantity) values(?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$id,$category,$sleeve,$color,$quantity));
		Database::disconnect();
		header("Location: user data.php");
    }
?>
