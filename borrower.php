<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #3f51b5;
        /* Indigo background color */
        color: white;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .borrower-form {
        background-color: rgba(0, 0, 0, 0.3);
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label,
    input {
        display: block;
    }

    input[type="number"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
    }

    .btn {
        background-color: #2196F3;
        /* Blue button color */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #1976D2;
        /* Darker blue color on hover */
    }
</style>
<div class="container">
    <h1 class="header">Peer-to-Peer Lending Platform</h1>

    <div class="borrower-form">
        <h2>Borrower</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="loanAmount">Amount to Borrow:</label>
                <input type="number" name="loanAmount" id="loanAmount" placeholder="Enter amount" required>
            </div>

            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
</div>
<?php
// Database connection setup (replace with your database credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loanAmount = $_POST["loanAmount"];

    // Query to fetch lenders who can lend the requested amount
    $sql = "SELECT lending_id, user_id FROM lending WHERE amount_lend >= $loanAmount";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>List of Lenders:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            $lendingId = $row["lending_id"];
            $userId = $row["user_id"];

            // Fetch user details from the main user table
            $userSql = "SELECT name, email FROM user WHERE user_id = $userId";
            $userResult = $conn->query($userSql);

            if ($userResult->num_rows > 0) {
                $userData = $userResult->fetch_assoc();
                $userName = $userData["name"];
                $userEmail = $userData["email"];

                echo "<li>User ID: $userId, Name: $userName, Email: $userEmail, Lending ID: $lendingId</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "No lenders found for the requested amount.";
    }
}

$conn->close();
?>