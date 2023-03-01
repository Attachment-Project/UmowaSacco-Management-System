<html>
    <head>
        <style>
            .matatus-container{
                background-image: url(../images/hero-bg.png);
                color: white;
                display: flex;
                flex-direction: row;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                flex-wrap: wrap;
            }
            .matatu{
                margin: 10px;
                display: flex;
                flex-direction: column;
                align-items: center;
                border: 1px white solid;
                border-radius: 10px;
                padding: 15px;
                flex: 0 0 22%;
            }
            .update{
                display: flex;
                flex-direction: row;
            }
        </style>
    </head>
    <body>

    <button><a style="text-decoration: none;" href="./loggedin.php">Back</a></button>
        <?php
        include("../db.php");
        include('../userData/members.php');

        $IDNo = $_SESSION['IdNo'];

        $sql = "SELECT FleetNo, OwnerId, NumPlate, RouteFrom, RouteTo, DriverId, MatatuCapacity, RegistrationDate FROM Matatus WHERE OwnerId = '$IDNo'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="matatus-container">';
            while($row = $result->fetch_assoc()) {
                echo '<div class="matatu">';
                echo '<h3>Matatu Number: ' . $row['FleetNo']. '</h3>';
                echo '<p> OwnerId: ' . $row['OwnerId'] . '</p>';
                echo 'Route';
                echo '<p> From: ' .$row['RouteFrom'] . '</p>';
                echo '<p> To: ' .$row['RouteTo'] . '</p>';
                echo '<p> RegistrationDate: ' .$row['RegistrationDate']. '</p>';
                echo '<p>Number of Seats: ' . $row['MatatuCapacity'] . '</p>';

                echo '<div class="update">';
                echo '<button onclick="window.location.href=\'update_matatu.php?id=' . $row['FleetNo'] . '\'">Update</button>';
                echo ' &nbsp;';
                echo '<button onclick="if(confirm(\'Are you sure you want to delete this matatu?\')) window.location.href=\'delete_matatu.php?id=' . $row['FleetNo'] . '\'">Delete</button>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo "No matatus registered yet";
        }

        $conn->close();
        ?>
    </body>
</html>