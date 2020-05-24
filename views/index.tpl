{$css}


<div class="container">
    <form action="/books" method="post" >
        <div class="d-flex flex-column">
            <input type="text" name="name" placeholder="Name" class="mt-1 p-2 form-control" autocomplete="off">
            <input type="text" name="author" placeholder="Author" class="mt-1 p-2 form-control" autocomplete="off">
            <button class="btn btn-dark mt-1 p-2">Create</button>
        </div>

    </form>
    <ul class="list-group">
        {foreach $books as $book}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">{$book->author}</span>
                </div>
                <input type="text" class="form-control"  aria-describedby="basic-addon1" readonly value="{$book->name}">
            </div>
        {/foreach}
    </ul>
</div>
