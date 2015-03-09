<div id="form">
    <h1>Photos</h1>
    
    <table border="0">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Photo</th>
            <th>Description</th>
        </tr>
        
        {photos}
        <tr>
            <td>{photoId}</td>
            <td>{title}</td>
            <td>{author}</td>
            <td>{photo}</td>
            <td>{description}</td>
        </tr>
        {/photos}
        
    </table> 
    <a href='/admin/addPhoto'>Add a new Photo</a>
    <br />
    <br />
    <h1>Restaurants</h1>
    
    <table border="0">
        <tr>
            <th>ID</th>
            <th>Restaurant Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Website</th>
            <th>Photo</th>
            <th>Description</th>
        </tr>
        
        {restaurants}
        <tr>
            <td>{dineOutId}</td>
            <td>{title}</td>
            <td>{address}</td>
            <td>{phone}</td>
            <td>{website}</td>
            <td>{image}</td>
            <td>{description}</td>
        </tr>
        {/restaurants}
        
    </table> 
    <a href='/admin/addRestaruant'>Add a new Restaurant</a>
    <br>
    <br>
    
    <h1>Message</h1>
    <table border="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        
        {messages}
        <tr>
            <td>{contactId}</td>
            <td>{name}</td>
            <td>{email}</td>
            <td>{subject}</td>
            <td>{message}</td>
        </tr>
        {/messages}
        
    </table> 
    <a href='/admin/addMessage'>Add a new Message</a>
    
</div>
