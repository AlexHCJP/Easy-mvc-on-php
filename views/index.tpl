<form action="/books" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="author" placeholder="Author">
    <button>Create</button>
</form>

<ul>
    {foreach $books as $book}
        <li>{$book->author}, "{$book->name}"</li>
    {/foreach}
</ul>