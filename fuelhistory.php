<?php include('includes/header.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Order History</title>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th {
            background-color: #ddd;
            text-align: left;
            padding: 10px;
        }
  
        td {
            border-bottom: 1px solid #ddd;
            padding: 10px;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <h1>Quote History</h1>
    <table>
        <tr>
            <th>Gallons Requested</th>
            <th>Delivery Address</th>
            <th>Delivery Date</th>
            <th>Suggested Price</th>
            <th>Total Price</th>
        </tr>
        <?php
            //access the dbconnection and functions.php file
            require_once './includes/config/dbconnection.php';

            //declaring the session variable to fetch specific data, place on where user_id = #user_id
            $user_id = $_SESSION["useruid"];

            //gettin user's order history
            $sql = "SELECT request_Gals, del_Address, delv_date, suggested_Price, total_price FROM order_history WHERE user_ID = '$user_id'";
            $result = mysqli_query($con, $sql);

            //if there are rows returned, display them in a table
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["request_Gals"] . "</td>";
                    echo "<td>" . $row["del_Address"] . "</td>";
                    echo "<td>" . $row["delv_date"] . "</td>";
                    echo "<td>" . $row["suggested_Price"] . "</td>";
                    echo "<td>" . $row["total_price"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No previous orders found!</td></tr>";
            }

            //closing connection
            mysqli_close($con);
        ?>
    </table>
</body>
</html>

<?php include('includes/footer.php'); ?>
