<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo isset($title) ? $title : 'App'; ?></title>
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-TX8FwO9Rguq0Xh8zXlXK5Yw0G5m0Vd2t0WQ5lQ2K1x5V6s1n2oF9B1Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
<div class="container">
  <header class="header">
    <div class="brand">
      <div class="logo"><i class="fas fa-feather-alt"></i></div>
      <div>
        <h1 class="grad-1">My Library</h1>
        <div class="small">Manage authors and books</div>
      </div>
    </div>
    <div class="actions">
      <a class="btn btn-primary" href="/author"><i class="fas fa-list icon"></i> Authors</a>
      <a class="btn btn-accent" href="/author/create"><i class="fas fa-plus icon"></i> New</a>
    </div>
  </header>
