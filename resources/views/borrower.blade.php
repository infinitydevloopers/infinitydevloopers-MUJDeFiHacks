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
    
        color: rgb(0, 0, 0);
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #1976D2;
      /* Darker blue color on hover */
    }
          @media (max-width: 640px) {
            .sidebar-hidden {
                left: -64px;
         
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

    <div class="borrower-form p-5  rounded-md mb-5 bg-indigo-300">
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