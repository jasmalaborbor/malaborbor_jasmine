<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Author List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
	<style>
		body {
			background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
			font-family: 'Inter', sans-serif;
			min-height: 100vh;
		}
		.card {
			border: none;
			border-radius: 16px;
			box-shadow: 0 6px 16px rgba(0,0,0,0.08);
			overflow: hidden;
			background-color: #fff;
		}
		.card-header {
			background: linear-gradient(135deg, #667eea, #764ba2);
			color: white;
			font-weight: 600;
			font-size: 1.3rem;
			padding: 1rem 1.25rem;
			letter-spacing: 0.5px;
		}
		.table thead {
			background-color: #e9efff;
			font-weight: 600;
			color: #4a4a4a;
		}
		.table-hover tbody tr:hover {
			background-color: #f1f5ff;
			cursor: pointer;
		}
		.search-form {
			background-color: #fff;
			padding: 1rem 1rem 0.5rem 1rem;
			border-radius: 16px;
			box-shadow: 0 4px 12px rgba(0,0,0,0.05);
			margin-bottom: 1.5rem;
		}
		.search-form h3 {
			font-weight: 600;
			color: #333;
		}
		.search-form input {
			border-radius: 10px;
			border: 1px solid #ced4da;
		}
		.search-form button {
			border-radius: 10px;
			white-space: nowrap;
			background: linear-gradient(135deg, #667eea, #764ba2);
			border: none;
			color: #fff;
			font-weight: 500;
			transition: 0.3s ease;
		}
		.search-form button:hover {
			opacity: 0.9;
		}
		.card-footer {
			background-color: #f9f9fb;
			font-size: 0.875rem;
			color: #6c757d;
		}
	</style>
</head>
<body>
<div class="container py-4">

	<div class="search-form d-flex flex-column flex-md-row justify-content-between align-items-center">
		<h3 class="mb-3 mb-md-0">Students List</h3>
		<form action="<?= site_url('author'); ?>" method="get" class="d-flex w-100" style="max-width: 400px;">
			<?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
			<input class="form-control me-2" name="q" type="text" placeholder="Search students..." value="<?= html_escape($q); ?>">
			<button type="submit" class="btn">Search</button>
		</form>
	</div>

	<div class="card">
		<div class="card-header">
			Students List
		</div>
		<div class="card-body p-0">
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
		</div>
		<div class="card-footer text-end">
			<?= $page; ?>
		</div>
	</div>

</div>
</body>
</html>
