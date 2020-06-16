<?php
$dsn = 'mysql:dbname=test_DB;host=localhost;';
$user = 'oyayuta';
$password = 'ManmaruOyama12/27';
try {
    $dbh = new PDO($dsn, $user, $password);
    
    $sql = "select * from sample;";
    $result = $dbh->query($sql);
    
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Lesson</title>
</head>
<body>
    <?php foreach( $result as $value { ?>
    
        <h1><?php echo "$value[name]"; ?></h1>
    
    <?php } ?>
</body>
</html>