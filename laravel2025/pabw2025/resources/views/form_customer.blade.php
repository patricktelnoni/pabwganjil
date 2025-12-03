
<form method="POST" action="{{ route('customers.store') }}">
    @csrf
    
    <div>
        <label for="name">Customer Name</label>
        <input type="text" id="name" name="customer_name" value="{{ old('name') }}" required>
    </div>

    <div>
        <label for="city">Customer City</label>
        <input type="text" id="city" name="city" value="{{ old('city') }}" required>
    </div>

    <div>
        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone_number" value="{{ old('phone') }}" required>
    </div>

    <div>
        <label for="amount_paid">Amount Paid</label>
        <input type="text" id="amount_paid" name="amt_paid" value="{{ old('amount_paid') }}" required>
    </div>

    <div>
        <button type="submit">Save Customer</button>
    </div>
</form>