<form method="POST" action="{{ route('search.results') }}">
    @csrf
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>
</form>