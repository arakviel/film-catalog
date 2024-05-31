<form method="POST" action="{{ route('auth.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
