<?php
include 'connect.php';
$name=$_GET['updateid'];
$sql="select * from crud where Name='$name'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$age=$row['Age'];
$phoneno=$row['phoneno'];
$subjectname=$row['subjectname'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phoneno = $_POST['phoneno'];
    $subjectname = $_POST['subjectname'];

    $sql = "update crud set Name='$name',Age=$age,phoneno=$phoneno,subjectname='$subjectname' where name='$name'";
    $result = mysqli_query($con, $sql);
    if ($result) {
       // echo "update  sucessfully";
       header('location:display.php');
    } else {
        
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>Crud Operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" name="name" placeholder="name" required class="form-control" value=<?php
                echo $name;?>>

                <label for="age">Age</label>
                <input type="age" name="age" placeholder="age" required class="form-control" value=<?php
                echo $age;?>>

                <label for="phoneno">Phone No</label>
                <input type="phoneno" name="phoneno" required class="form-control"value=<?php
                echo $phoneno;?>>

                <label for="subjectname">Subject Name</label>
                <input type="subjectname" name="subjectname" required class="form-control"value=<?php
                echo $subjectname;?>>

                <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>