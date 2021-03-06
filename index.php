<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'oyayuta';
$password = 'ManmaruOyama12/27';
try {
    $dbh = new PDO($dsn, $user, $password);

    $sql = "select * from user;";
    $result = $dbh->query($sql);
    $result2 = $dbh->query($sql);
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
}

?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
     <div class="navbar bg-dark navbar-dark">
         <div class="container-fluir">
             <div class="nav-header">
                 <a class="navbar-brand" href="index.html">lamp</a>                 
             </div>
         </div>
     </div>

     <div class="jambotoron jambotoron-fluid">
        <div class="container">
            <h1 class="display-4">
                    DB Manager -sample_db-  //(なんでもいい
            </h1>
            <p class="read">
                    LAMP環境を構築し、データベース管理webアプリを作成しています。<br>デザインはBootstrapを使用
            </p>
        </div>
    </div>
    <div class="container">
        <?php if($_GET['fg'] == 1) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
          </button>
          </div>
        <?php } else if($_GET['fg'] == 2) { ?>
           <p>failed</p>
           <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
          </button>
</div>
        <?php } ?>
    </div>

     <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#select" class="nav-link active" data-toggle="tab">select[一覧]</a>
            </li>
            <li class="nav-item">
                <a href="#insert" class="nav-link" data-toggle="tab">insert[追加]</a>
            </li>
            <li class="nav-item">
                <a href="#update" class="nav-link" data-toggle="tab">update[更新]</a>
            </li>
            <li class="nav-item">
                <a href="#delete" class="nav-link" data-toggle="tab">delete[削除]</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="select">
                <table class="table table-striped mt-2">
                    <caption>Show User Table</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>age</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach($result as $value) { ?>
                        <tr>
                            <th><?php echo "$value[id]"; ?></th>
                            <td><?php echo "$value[name]"; ?></td>
                            <td><?php echo "$value[age]"; ?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <th>2</th>
                            <td>test</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>test</td>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tab-pane" id="insert">
                <form action="./insert.php" method="POST">
                    <div class="form-group row">
                        <label for="id" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                             <input type="text" class="form-control" id="id" name="id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                             <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="age" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                             <input type="text" class="form-control" id="age" name="age">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Insert</button>
                    </div>
                </form>
            </div>

            <div class="tab-pane" id="update">
            <form action="./update.php" method="POST">
                    <div class="form-group row">
                        <label for="id" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                             <input type="text" class="form-control" id="id" name="id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                             <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="age" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                             <input type="text" class="form-control" id="age" name="age">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Insert</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="delete">
                <p>sample tabs4</p>
                <div class="tab-pane active" id="select">
                <table class="table table-striped mt-2">
                    <caption>Show User Table</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>age</th>
                            <th>-</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach($result2 as $value) { ?>
                        <tr>
                            <th><?php echo "$value[id]"; ?></th>
                            <td><?php echo "$value[name]"; ?></td>
                            <td><?php echo "$value[age]"; ?></td>
                            <td>
                                <form action="./delete.php" method="GET">
                                    <input type="text class="d-none" name="id" value="<?php echo "$value[id]"; ?>">
                                    <button class="btn btn-danger" type="submit">delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>
</html>