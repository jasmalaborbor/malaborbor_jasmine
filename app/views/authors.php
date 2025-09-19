<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0d3b2e, #1f7a54);
            margin: 0;
            padding: 0;
            color: #fff;
        }
        .container {
            margin-top: 50px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #e0ffe0;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
        }
        .btn-create {
            background: linear-gradient(135deg, #28a745, #218838);
            border: none;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 25px;
            box-shadow: 0px 4px 6px rgba(0,0,0,0.3);
            transition: 0.3s;
        }
        .btn-create:hover {
            background: linear-gradient(135deg, #218838, #19692c);
        }
        .table-container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0px 6px 12px rgba(0,0,0,0.4);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        thead {
            background: linear-gradient(135deg, #145a32, #1e8449);
            color: #fff;
        }
        th, td {
            text-align: center;
            padding: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        tr:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        .btn-action {
            border: none;
            border-radius: 20px;
            padding: 6px 15px;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-edit {
            background: #17a2b8;
            color: white;
        }
        .btn-edit:hover {
            background: #117a8b;
        }
        .btn-delete {
            background: #dc3545;
            color: white;
        }
        .btn-delete:hover {
            background: #a71d2a;
        }
    </style>
</head>
<body>
<div class="container text-center">

    <h2>Welcome to Students Page</h2>
    <button class="btn-create mb-3">+ Create New Student</button>

    <div class="table-container">
        <div class="table-responsive">
			<div class="col-md-6 d-flex justify-content-end"> <form action="<?= site_url('author'); ?>" method="get" class="d-flex w-100" style="max-width: 400px;"> <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?> <input class="form-control me-2" name="q" type="text" placeholder="Search..." value="<?= html_escape($q); ?>"> <button type="submit" class="btn btn-primary">Search</button> </form>
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Birthdate</th>
                    <th>Added</th>
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
    </div>

    <div class="mt-3">
        <?= $page; ?>
    </div>

</div>
</body>
</html>
