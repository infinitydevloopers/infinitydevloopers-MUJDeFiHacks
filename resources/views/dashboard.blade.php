@extends('./asset/sidenav')

@section('sidepage')
            <div class="p-4">
                <h2 class="text-xl font-semibold">User Details</h2>
                <div class="mt-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- User Details Content -->
                        <div class="bg-white shadow-md rounded-md p-4">
                            <h3 class="text-lg font-semibold">User name</h3>
                            <p class="mt-2">{{$data[0]['user_name']}}</p>
                        </div>
                        <div class="bg-white shadow-md rounded-md p-4">
                            <h3 class="text-lg font-semibold">Email</h3>
                            <p class="mt-2">{{$data[0]['email_id']}}</p>
                        </div>
                        {{-- {{-- <div class="bg-white shadow-md rounded-md p-4">
                            <h3 class="text-lg font-semibold">Phone</h3>
                            <p class="mt-2">+1234567890</p>
                        </div> --}}
                        <div class="bg-white shadow-md rounded-md p-4">
                            <h3 class="text-lg font-semibold">Last logged in</h3>
                            <p class="mt-2">{{$data[0]['last_logged_in']}}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Lenders List -->
            <div class="p-4 mt-4">
                <h2 class="text-xl font-semibold">Lenders List</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                    <!-- Lender Cards Content -->
                    <div class="bg-white shadow-md rounded-md p-4">
                        <h3 class="text-lg font-semibold">Lender 1</h3>
                        <p class="mt-2">Lender Information</p>
                    </div>
                    <div class="bg-white shadow-md rounded-md p-4">
                        <h3 class="text-lg font-semibold">Lender 2</h3>
                        <p class="mt-2">Lender Information</p>
                    </div>
                    <!-- Add more lender cards as needed -->
                </div>
            </div>

            <!-- Borrowers List -->
            <div class="p-4 mt-4">
                <h2 class="text-xl font-semibold">Borrowers List</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                    <!-- Borrower Cards Content -->
                    <div class="bg-white shadow-md rounded-md p-4">
                        <h3 class="text-lg font-semibold">Borrower 1</h3>
                        <p class="mt-2">Borrower Information</p>
                    </div>
                    <div class="bg-white shadow-md rounded-md p-4">
                        <h3 class="text-lg font-semibold">Borrower 2</h3>
                        <p class="mt-2">Borrower Information</p>
                    </div>
                    <!-- Add more borrower cards as needed -->
                </div>
            </div>
        </div>
    </div>
@endsection