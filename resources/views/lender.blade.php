@extends('./asset/sidenav')
@section('sidepage')
<style>
    .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
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
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #1976D2;
        }

        /* CSS for Mobile Sidebar Toggle */
        @media (max-width: 640px) {
            .sidebar-hidden {
                left: -64px;
                /* Adjust the width of your sidebar */
                transition: left 0.3s ease;
            }

            .sidebar-show {
                left: 0;
                transition: left 0.3s ease;
            }
        }
</style>
        <div class="container">
            <h1 class="header">Peer-to-Peer Lending Platform</h1>

            <!-- Lender Form -->
            <div class="bg-indigo-300  p-5 mb-5 rounded-md">
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
@endsection  