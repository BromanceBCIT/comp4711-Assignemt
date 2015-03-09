<div id="form">
    <h1>Add Restaurant</h1>
    <div class="errors">{errorMessage}</div>
    <form action="/admin/confirmRest" method="post">
        {ftitle}
        {faddress}
        {fphone}
        {fwebsite}
        {fimage}
        {bdescription}
        {bSubmit}
    </form>
</div>