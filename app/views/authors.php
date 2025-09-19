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
			background-color: #f1f4f9;
			font-family: 'Inter', sans-serif;
		}
		.card {
			border: none;
			border-radius: 12px;
			box-shadow: 0 4px 12px rgba(0,0,0,0.05);
			overflow: hidden;
		}
		.card-header {
			background: linear-gradient(135deg, #4e73df, #224abe);
			color: white;
			font-weight: 600;
			font-size: 1.2rem;
			padding: 1rem 1.25rem;
		}
		.table thead {
			background-color: #e9ecef;
			font-weight: 600;
		}
		.table-hover tbody tr:hover {
			background-color: #f1f1f1;
			cursor: pointer;
		}
		.search-form {
			background-color: #fff;
			padding: 1rem 1rem 0.5rem 1rem;
			border-radius: 12px;
			box-shadow: 0 2px 6px rgba(0,0,0,0.05);
			margin-bottom: 1.5rem;
		}
		.search-form input {
			border-radius: 8px;
		}
		.search-form button {
			border-radius: 8px;
			white-space: nowrap;
		}
		.card-footer {
			background-color: #f8f9fa;
			font-size: 0.875rem;
			color: #6c757d;
		}
	</style>
</head>
<body>
<div class="container py-4">

	<div class="search-form d-flex flex-column flex-md-row justify-content-between align-items-center">
		<h3 class="mb-3 mb-md-0">Student List</h3>
		<form action="<?= site_url('author'); ?>" method="get" class="d-flex w-100" style="max-width: 400px;">
			<?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
			<input class="form-control me-2" name="q" type="text" placeholder="Search students..." value="<?= html_escape($q); ?>">
			<button type="submit" class="btn btn-primary">Search</button>
		</form>
	</div>

	<div class="card">
		<div class="card-header">
			📋 Students Directory
		</div>
		<div class="card-body p-0">
			<div class="table-responsive">
				<table class="table table-hover align-middle mb-0">
					<thead class="table-light">
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
