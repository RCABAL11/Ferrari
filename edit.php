<?php include "connections/db_conn.php";

$id = $_GET["CID"];

if(isset($_POST["submit"])){
$name = $_POST['name'];
$price = $_POST['base_price'];
$engine = $_POST['engine'];
$power = $_POST['power'];
$torque = $_POST['torque'];
$speed = $_POST['top_speed'];

$sql = "UPDATE `models` SET `name`='$name',`base_price`='$price',`engine`='$engine',`power`='$power',`torque`='$torque',`top_speed`='$speed' WHERE CID = $id";

$result = mysqli_query($conn, $sql);

if($result) {
    header("Location: dashboard.php?msg=Data edited successfully");

}else{
    echo "Failed: " . mysqli_error($conn);
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body{
        color: white;
        font-family: 'Courier New', Courier, monospace;
        background-color: #112e42;
    }
    .head{
        text-align: center;
    }
</style>
<body>

<div class="head">
 <h1>FERRARI CAR INFORMATION</h1>
 <hr>
   </div>

    <div>
        <div class="text-center mb-4">
            <h3> EDIT CAR INFO</h3>
        </div>
    </div>
    <?php
    $sql = "SELECT * FROM `models` WHERE CID = $id LIMIT 1";
    $result = mysqli_query($conn, $sql) or die ($conn->error);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
    <form action="" method="POST">
        <div class="row mb-3">
            <div class="col-md-4 col-offset-4">
                <label for="" class="form-label">Car Name</label>
                <input type="text" class="form-control" name="name"  value="<?php echo $row['name']?>">
            </div>
            <div class="col">
                <label for="" class="form-label">Base Price</label>
                <input type="text" class="form-control" name="base_price" value="<?php echo $row['base_price']?>">
            </div>
            <div class="col-md-4 col-offset-4">
                <label for="" class="form-label">Engine</label>
                <input type="text" class="form-control" name="engine" value="<?php echo $row['engine']?>">
            </div>
            <div class="col-md-4 col-offset-4">
                <label for="" class="form-label">Power</label>
                <input type="text" class="form-control" name="power" value="<?php echo $row['power']?>">
            </div>
            <div class="col">
                <label for="" class="form-label">Torque</label>
                <input type="text" class="form-control" name="torque" value="<?php echo $row['torque']?>">
            </div>
            <div class="col">
                <label for="" class="form-label">Top Speed</label>
                <input type="text" class="form-control" name="top_speed" value="<?php echo $row['top_speed']?>">
            </div>
                <div>
                    <button type="submit" class="btn btn-success mt-2" name="submit">Update</button>
                    <a href="dashboard.php" class="btn btn-danger mt-2">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>