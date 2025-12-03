<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <form action="{{ route('process-login') }}" method="post">
        @csrf
        <input type="text" name="username" id="" placeholder="Username"><br>
        <input type="password" name="password" id="" placeholder="Password"><br>
        <input type="submit" value="Login">
    </form>
</div>
