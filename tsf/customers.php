<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body style="margin:50px;">
    <h1>List of Customers</h1><br>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $servername='localhost';
                $username='TSF_Intern_user';
                $password='9Gjl<YNgrC%]r0BP';
                $database='id19139385_customers_db';

                //create connection
                $connection=new mysqli($servername, $username, $password, $database);

                //check connection
                if ($connection->connect_error) {
                    die("Connection failed: ".$connection->connect_error);
                }

                //read all row from database table
                $sql='SELECT * FROM employees';
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query : ".$connection->error);
                }

                //read data of each row
                while ($row=$result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["first_name"]."</td>
                        <td>".$row["last_name"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["phone"]."</td>
                        <td>".$row["address"]."</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='single_cust.php'>Transfer Money from</a>
                            <a class='btn btn-primary btn-sm' href='single_cust.php'>Transfer Money to</a>
                        </td>
                        </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>