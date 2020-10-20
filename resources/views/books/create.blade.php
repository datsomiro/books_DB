<h1>Create new book</h1>
<form action="{{ action('BookController@store') }}" method="post">
    @csrf
    <p>
        <label for="title">Title:</label>
        <input id="title" type="text" name="title"/>
    </p>
    <p>
        <label for="authors">Authors:</label>
        <input id="authors" type="text" name="authors"/>
    </p>
    <p>
        <label for="image">Image:</label>
        <input id="image" type="text" name="image" value="https://www.codingbootcamp.cz/img/cbp_logo-dark.png"/>
    </p>

    <button type="submit">Create</button>
</form>