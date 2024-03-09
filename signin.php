<?php
// Placeholder for database connection (replace with your actual database connection code)
include("server.php");

// Create a connection
$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Placeholder for storing error messages
$error = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);

    // Your database query to check if the username or email is already taken (replace with actual query)
    $checkUserQuery = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($checkUserQuery);

    if ($result && $result->num_rows > 0) {
        $error = 'Username or email is already taken';
    } else {
        // Your database query to insert user data (replace with actual query)
        $insertUserQuery = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = $conn->query($insertUserQuery);

        if ($result) {
            // Redirect to login page after successful signup
            header("Location: login.php");
            exit();
        } else {
            $error = 'Error in signup. Please try again.';
        }
    }
}

// Close the database connection (important!)
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
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
            max-width: 400px;
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

        p {
            text-align: center;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2>Sign Up</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Sign Up</button>
        </form>
        <?php
        if ($error) {
            echo "<p>{$error}</p>";
        }
        ?>
    </div>
</body>
</html>
