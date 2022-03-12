<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phoneno = $_POST['phoneno'];
    $subjectname = $_POST['subjectname'];

    $sql = "insert into crud (name,age,phoneno,subjectname)
        values('$name','$age','$phoneno','$subjectname')";
    $result = mysqli_query($con, $sql);
    if ($result) {
       // echo "Data inserted sucessfully";
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
                <input type="name" name="name" placeholder="name" required class="form-control">

                <label for="age">Age</label>
                <input type="age" name="age" placeholder="age" required class="form-control">

                <label for="phoneno">Phone No</label>
                <input type="phoneno" name="phoneno" required class="form-control">

                <label for="subjectname">Subject Name</label>
                <input type="subjectname" name="subjectname" required class="form-control">

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>