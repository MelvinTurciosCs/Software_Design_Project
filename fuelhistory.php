<?php
include('includes/header.php');
?>



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
    <table>
        <tr>
            <th>Gallons Requested</th>
            <th>Delivery Address</th>
            <th>Delivery Date</th>
            <th>Suggested Price</th>
            <th>Total Price</th>
        </tr>
        <?php

        //access the dbconnection and functions php
        require_once './includes/config/dbconnection.php';

        //declare the session variable to fetch specific data, place on where user_id = #user_id
        $user_id = $_SESSION["useruid"];


        //delete stuff below
        $sql = "SELECT request_Gals, del_Address, delv_date, suggested_Price, total_price FROM order_history WHERE user_ID = '$user_id'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["request_Gals"] . "</td><td>" . $row["del_Address"] . "</td><td>" . $row["delv_date"] . "</td><td>" . $row["suggested_Price"] . "</td><td>" . $row["total_price"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }

        mysqli_close($con);
        ?>
    </table>
</body>

</html>


<?php
include('includes/footer.php');

//$_session["useruid"]
//$sql = "SELECT 'request_Gals', 'delv_adress', 'delv_date', 'ccpm', 'total_price'  FROM order_history WHERE "
//`order_ID`, `total_price`, `client_name`, `delv_date`, `ccpm`, `request_Gals`
?>