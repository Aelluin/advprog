<h1>Users Index Page</h1>
<p>This is index page</p>


<form action="{{ url('users', $id) }}" method="post">
    @csrf 
    @method('DELETE')
    <div>
        <button class="btn-primary" type="submit">Delete</button>
</div>
</form>