<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bid Page</title>
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

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        select,
        input {
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Additional Styles for Improved Look */
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .house-details {
            font-style: italic;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .house-details span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="process_bid.php" method="post">
            <h2>Place Bid</h2>
            <label for="house_id">Select House:</label>
            <select id="house_id" name="house_id" required>
                Populate this dropdown with houses from your database -->
               <!-- / <option value="1">Sea View Property - 3 Bedroom, 2 Bath</option>
                <option value="2">Modern Townhouse - 4 Bedroom, 3 Bath</option>
                <option value="3">Cozy Cottage - 2 Bedroom, 1 Bath</option>
                <option value="4">Luxury Villa - 5 Bedroom, 4 Bath</option>
            </select>
            <div class="house-details">
                <span>House Details:</span> Sea View Property - Located in a prime area with stunning ocean views.
            </div>
            <label for="bidder_name">Your Name:</label>
            <input type="text" id="bidder_name" name="bidder_name" placeholder="Enter your name" required>
            <label for="bid_amount">Your Bid Amount (in $):</label>
            <input type="number" id="bid_amount" name="bid_amount" min="1" placeholder="Enter your bid amount" required>
            <button type="submit">Place Bid</button>
        </form>
    </div>
</body> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bid Page</title>
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

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        select,
        input {
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Additional Styles for Improved Look */
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .house-details {
            font-style: italic;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .house-details span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="process_bid.php" method="post">
            <h2>Place Bid</h2>
            <label for="house_id">Select House:</label>
            <select id="house_id" name="house_id" required>
            <?php foreach ($houses as $house) : ?>
                    <option value="<?php echo $house['house_id']; ?>"><?php echo $house['house_name']; ?></option>
                <?php endforeach; ?>
                <!-- Populate this dropdown with houses from your database -->
                <option value="1">Sea View Property - 3 Bedroom, 2 Bath</option>
                <option value="2">Modern Townhouse - 4 Bedroom, 3 Bath</option>
                <option value="3">Cozy Cottage - 2 Bedroom, 1 Bath</option>
                <option value="4">Luxury Villa - 5 Bedroom, 4 Bath</option>
            </select>
            <div class="house-details">
                <span>House Details:</span> Sea View Property - Located in a prime area with stunning ocean views.
            </div>
            <label for="bidder_name">Your Name:</label>
            <input type="text" id="bidder_name" name="bidder_name" placeholder="Enter your name" required>
            <label for="bid_amount">Your Bid Amount (in $):</label>
            <input type="number" id="bid_amount" name="bid_amount" min="1" placeholder="Enter your bid amount" required>
            <button type="submit">Place Bid</button>
        </form>
    </div>
</body>
</html>
