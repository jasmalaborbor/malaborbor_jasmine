<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Students List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
	<style>
		body {
			background-color: #204080;
			font-family: 'Inter', sans-serif;
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			margin: 0;
		}
		.card {
			width: 100%;
			max-width: 800px;
			background-color: #ffffff;
			border-radius: 20px;
			box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
			padding: 2rem;
		}
		h3 {
			text-align: center;
			color: #204080;
			margin-bottom: 1.5rem;
			font-weight: 600;
		}
		.table thead {
			background-color: #f1f1f1;
			font-weight: 600;
		}
		.table-hover tbody tr:hover {
			background-color: #f9f9f9;
			cursor: pointer;
		}
		.search-form {
			display: flex;
			justify-content: center;
			margin-bottom: 1.5rem;
			gap: 10px;
		}
		.search-form input {
			border-radius: 10px;
		}
		.search-form button {
			border-radius: 10px;
			background: linear-gradient(135deg, #6a5acd, #8a2be2);
			color: white;
			border: none;
			padding: 0.5rem 1rem;
		}
	</style>
</head>
<body>

<div class="card">
	<h3>📋 Students List</h3>

	<form action="<?= site_url('author'); ?>" method="get" class="search-form">
		<?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
		<input class="form-control" name="q" type="text" placeholder="Search students..." value="<?= html_escape($q); ?>">
		<button type="submit">Search</button>
	</form>

	<div class="table-responsive">
		<table class="table table-hover align-middle mb-0">
			<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Birthdate</th>
				<th>Added On</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach (html_escape($all) as $author): ?>
				<tr>
					<td><?= $author['first_name']; ?></td>
					<td><?= $author['last_name']; ?></td>
					<td><?= $author['email']; ?></td>
					<td><?= $author['birthdate']; ?></td>
					<td><?= $author['added']; ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<div class="text-end mt-3">
		<?= $page; ?>
	</div>
</div>

</body>
</html>
