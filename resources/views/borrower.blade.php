@extends('./asset/sidenav')

@section('sidepage')
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
@endsection