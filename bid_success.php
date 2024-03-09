<?php
include("server.php");

// Initialize variables
$bidAmount = "";
$houseName = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $bidAmount = $_POST['bid_amount'];
    $houseName = $_POST['house'];
    
    // Placeholder for your database query to insert the bid
    // Make sure to properly sanitize and validate user input before using in SQL queries
    // For example:
    // $bidAmount = mysqli_real_escape_string($conn, $bidAmount);
    // $houseName = mysqli_real_escape_string($conn, $houseName);

    // Example query (replace with your actual query)
    $insertQuery = "INSERT INTO bids (bid_amount, house VALUES ('$bidAmount', '$houseName')";
    
    // Execute the query
    if ($conn->query($insertQuery) === TRUE) {
        // Data inserted successfully
    } else {
        // Error in inserting data
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bid Successful</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            font-size: 18px;
        }

        .success-message {
            background-color: #4caf50;
            color: #fff;
            padding: 15px;
            border-radius: 4px;
            text-align: center;
        }

        .success-message p {
            margin: 0;
        }

        /* Additional Styles for Improved Look */
        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-message">
            <p>Congratulations!</p>
            <p>Your bid<?php echo htmlspecialchars($bidAmount); ?>  <strong><?php echo htmlspecialchars($houseName); ?></strong> has been successfully submitted.</p>
        </div>
        <p>Thank you for your participation.</p>
        <button onclick="window.location.href='bid.php'">Place Another Bid</button>
    </div>
</body>
</html>
