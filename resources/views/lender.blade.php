@extends('./asset/sidenav')
@section('sidepage')
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
@endsection  