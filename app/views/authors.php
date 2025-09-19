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
			background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fad0c4);
			font-family: 'Inter', sans-serif;
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 2rem;
		}
		.container {
			max-width: 1000px;
			width: 100%;
		}
		h2 {
			text-align: center;
			font-weight: 700;
			color: #b83b9f;
			margin-bottom: 1.5rem;
		}
		.card {
			border: none;
			border-radius: 20px;
			box-shadow: 0 10px 25px rgba(0,0,0,0.1);
			overflow: hidden;
		}
		.table thead {
			background: linear-gradient(135deg, #c471f5, #fa71cd);
			color: white;
			text-align: center;
		}
		.table tbody tr {
			text-align: center;
		}
		.table-hover tbody tr:hover {
			background-color: rgba(250, 113, 205, 0.05);
			transition: 0.2s ease;
		}
		.btn-action {
			border: none;
			border-radius: 25px;
			padding: 6px 16px;
			font-weight: 600;
			font-size: 0.9rem;
			transition: 0.2s ease;
			box-shadow: 0 4px 10px rgba(0,0,0,0.1);
		}
		.btn-edit {
			background-color: #ff92e2;
			color: white;
			margin-right: 8px;
		}
		.btn-edit:hover {
			background-color: #ff6fd8;
		}
		.btn-delete {
			background-color: #ff5f6d;
			color: white;
		}
		.btn-delete:hover {
			background-color: #ff3b4a;
		}
		.card-footer {
			background: #fff;
			text-align: center;
			color: #777;
			font-size: 0.9rem;
			border-top: none;
			padding: 0.75rem;
		}
		.search-form {
			text-align: right;
			margin-bottom: 1rem;
		}
		.search-form input {
			border-radius: 20px;
			padding: 0.5rem 1rem;
		}
		.search-form button {
			border-radius: 20px;
			background: linear-gradient(135deg, #c471f5, #fa71cd);
			color: #fff;
			font-weight: 500;
			padding: 0.5rem 1rem;
			border: none;
			margin-left: 5px;
		}
	</style>
</head>
<body>
<div class="container">

	<h2>Welcome to Students Page</h2>

	<div class="search-form">
		<form action="<?= site_url('author'); ?>" method="get" class="d-flex justify-content-end">
			<?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
			<input class="form-control me-2" name="q" type="text" placeholder="Search students..." value="<?= html_escape($q); ?>" style="max-width: 250px;">
			<button type="submit" class="btn">Search</button>
		</form>
	</div>

	<div class="card">
		<div class="table-responsive">
			<table class="table table-hover align-middle mb-0">
				<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Birthdate</th>
					<th>Added On</th>
					<th>Action</th>
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
						<td>
							<button class="btn-action btn-edit">Edit</button>
							<button class="btn-action btn-delete">Delete</button>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="card-footer">
			<?= $page; ?>
		</div>
	</div>

</div>
</body>
</html>
