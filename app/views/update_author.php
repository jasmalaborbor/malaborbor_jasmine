<h2>Update Author</h2>
<form method="post" action="/author/update">
    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">
    <label>Name:</label>
    <input type="text" name="name" required>
    <button type="submit">Update</button>
</form>
