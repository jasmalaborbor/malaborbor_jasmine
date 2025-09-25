<h2>Delete Author</h2>
<form method="post" action="/author/delete">
    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">
    <p>Are you sure you want to delete this author?</p>
    <button type="submit">Delete</button>
</form>
