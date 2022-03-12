<?php
include 'connect.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />

</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">
                Add Teacher</a>


        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Phone no</th>
                    <th scope="col">Subject Name</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "Select * from crud";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['Name'];
                        $age = $row['Age'];
                        $phoneno = $row['phoneno'];
                        $subjectname = $row['subjectname'];
                        echo '<tr>
                            <th scope="row">' . $name . '</th>
                                <td>' . $age . '</td>
                                <td>' . $phoneno . '</td>
                                <td>' . $subjectname . '</td>
                                <td>
                                    <button class="btn btn-primary"><a href="update.php?updateid='. $name . '" class="text-light">Update</a></button>
                                    <button class="btn btn-danger"><a href="delete.php?deleteid=' . $name . '" class="text-light">Delete</a></button>
                                </td>
                            </tr>';
                    }
                }

                ?>

            </tbody>
        </table>
    </div>
</body>

</html>