<div id="form">
    <h1>Add Photo</h1>
    <div class="errors">{errorMessage}</div>
    <form action="/admin/confirmPhoto" method="post">
        {fTitle}
        {fAuthor}
        {fPhoto}
        {fDescription}
        {bSubmit}
    </form>
</div>