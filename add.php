
<?php
include "connections/db_conn.php";
 

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $price = $_POST['base_price'];
    $engine = $_POST['engine'];
    $power = $_POST['power'];
    $torque = $_POST['torque'];
    $speed = $_POST['top_speed'];

    $sql = "INSERT INTO `models`(`name`, `base_price`, `engine`, `power`, `torque`, `top_speed`) VALUES ('$name','$price','$engine','$power','$torque','$speed')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: dashboard.php?msg= New record created successfully");
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
    <title>Add New Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
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
</head>
<body>
    <div class="head">
        <h1> Ferrari Car Information </h1>
        <hr>
    </div>
    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Car</h3>
        </div>
    </div>
    
    <div class="container d-flex justify-content-center ">
        <form action="" method="post" style="width: 50vw; min-width: 300px;">
            <div class="row mb-3">
                
                <div>
                    <label for="" class="form-label">Car Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Car Name" required>
                </div>

                <div class="col-md-4 col-offset-4">
                    <label for="" class="form-label">Base Price($)</label>
                    <input type="text" class="form-control" name="base_price" placeholder="Base Price" required>
                </div>

                <div class="col">
                    <label for="" class="form-label">Engine</label>
                    <input type="text" class="form-control" name="engine" placeholder="Engine">
                </div>

                <div class="col">
                    <label for="" class="form-label">Power</label>
                    <input type="text" class="form-control" name="power" placeholder="Power" required>
                </div>

                <div class = "col">
                    <label for="" class="form-label">Torque</label>
                    <input type="text" class="form-control" name="torque" placeholder="Torque" required>
                </div>
                <div>
                    <label for="" class="form-label">Top Speed</label>
                    <input type="text" class="form-control" name="top_speed" placeholder="Top Speed" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-success mt-2" name="submit">Submit</button>
                    <a href="dashboard.php" class="btn btn-danger mt-2">Cancel</a>
                </div>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>