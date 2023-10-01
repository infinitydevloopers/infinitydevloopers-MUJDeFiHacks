<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peer-to-Peer Lending</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3f51b5; /* Indigo background color */
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
        .lender-form, .borrower-form {
            background-color: rgba(0, 0, 0, 0.3);
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label, input {
            display: block;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }
        .btn {
            background-color: #2196F3; /* Blue button color */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #1976D2; /* Darker blue color on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="header">Peer-to-Peer Lending Platform</h1>

        <!-- Lender Form -->
        <div class="lender-form">
            <h2>Lender</h2>
            <form id="lenderForm">
                <div class="form-group">
                    <label for="loanAmount">Amount to Lend:</label>
                    <input type="number" id="loanAmount" placeholder="Enter amount" required>
                </div>
                <div class="form-group">
                    <label for="interestRate">Expected Interest Rate (%):</label>
                    <input type="number" id="interestRate" placeholder="Enter interest rate" required>
                </div>
                <button class="btn" type="button" onclick="calculateProfit()">Calculate Profit</button>
                <p>Total Profit: <span id="totalProfit">0</span> Rupees</p>
            </form>
        </div>
    </div>

    <script>
        // JavaScript function to calculate profit
        function calculateProfit() {
            // Get loan amount and interest rate from the form
            const loanAmount = parseFloat(document.getElementById('loanAmount').value);
            const interestRate = parseFloat(document.getElementById('interestRate').value);

            // Calculate profit
            const profit = (loanAmount * interestRate) / 100;

            // Display the result
            document.getElementById('totalProfit').textContent = profit.toFixed(2);
        }
    </script>
</body>
</html>
