<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->

    @foreach ($customers as $customer)
        <p>This is item: {{ $customer->customer_name }}</p>
    @endforeach
</div>
