<div id="form">
    <h1>Contact Us</h1>
    <p>We are here to answer any question you may have about traveling in Vancouver. Reach out to us and we'll respond as soon as we can. </p>
    <div class="errors">{errorMessage}</div>
    <form action="/admin/confirmMessage" method="post">
        {fName}
        {fEmail}
        {fSubject}
        {fMessage}
        {bSubmit}
    </form>
</div>
