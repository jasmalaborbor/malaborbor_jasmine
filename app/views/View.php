<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View</title>

</head>
<body>
  <h1>👥 User List</h1>
  <a href="<?= '/create'; ?>" class="create-btn"> Create User</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $user): ?>
      <tr>
        <td><?= ($user['id']); ?></td>
        <td><?= ($user['name']); ?></td>
        <td><?= ($user['email']); ?></td>
        <td>
          <a href="<?= site_url('/edit/' . $user['id']); ?>">✏ Edit</a>
          <a href="<?= site_url('/delete/' . $user['id']); ?>" onclick="return confirm('Are you sure you want to delete this user?');">🗑 Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>    
  </table>
</body>
</html>
