<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'oyayuta';
$password = 'ManmaruOyama12/27';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "update user set name=:name, age=:age where id = :id";
    $stmt = $dbh->prepare($sql);
    $prams = array(':id'=> $id, ':name'=> $name, ':age'=> $age,);
    $stmt->execute($prams);

    header('Location: index.php?fg=1');
    
} catch (PDOException $e) {
	header('Location: index.php?fg=2?err='.$e->getMessage());
	exit();
}
?>
