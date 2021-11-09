<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Connect to db
require('/home/afternoo/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>Contacts</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container">

    <h1>Customer List:</h1>
    <table id="student-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>AddMailingList</th>
        </tr>
        </thead>
        <?php
        //Define a query
        $sql = "SELECT * FROM Contact";

        //Send the query to the db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        //Process the result
        foreach ($result as $row) {
            //var_dump($row);

            $name = $row['Name'];
            $email = $row['Email'];
            $phone = $row['PhoneNumber'];
            $mail=$row['AddMailingList'];
            echo "<tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td>$mail</td>
                  </tr>";
        }
        ?>
    </table>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $('#student-table').DataTable();
</script>

</body>
</html>