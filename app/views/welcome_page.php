<?php require_once __DIR__ . '/_head.php'; ?>

<div class="card">
  <div class="card" style="padding:14px">
    <h1 class="grad-1" style="margin:0"><i class="fas fa-feather-alt"></i> LavaLust Framework</h1>
    <div class="small">Lightweight • Fast • MVC for PHP Developers</div>
  </div>

  <div class="card" style="margin-top:12px">
    <h2 class="grad-1">What is LavaLust?</h2>
    <p><strong>LavaLust</strong> is a lightweight PHP framework that follows the MVC pattern. It's designed for developers who want a structured yet minimalistic PHP development experience.</p>

    <h2 class="grad-1">Key Features</h2>
    <div class="grid">
      <div class="card"><h3><i class="fas fa-brain"></i> MVC Architecture</h3><p>Clear separation of concerns with Models, Views and Controllers.</p></div>
      <div class="card"><h3><i class="fas fa-route"></i> Routing</h3><p>Clean and flexible routing system.</p></div>
      <div class="card"><h3><i class="fas fa-boxes"></i> Libraries & Helpers</h3><p>Utilities for sessions, forms, database, validation.</p></div>
      <div class="card"><h3><i class="fas fa-folder-open"></i> Organized Structure</h3><p>Modular folders for scalable apps.</p></div>
      <div class="card"><h3><i class="fas fa-link"></i> REST API Support</h3><p>Build RESTful APIs easily.</p></div>
      <div class="card"><h3><i class="fas fa-book"></i> ORM-like Models</h3><p>Structured DB operations made easier.</p></div>
    </div>

    <h2 class="grad-1">Project Structure</h2>
    <pre><code>/app
  /config
  /controllers
  /helpers
  /language
  /libraries
  /models
  /views
/console
/public
/runtime
/scheme
</code></pre>

    <h2 class="grad-1">Quick Example</h2>
    <pre><code>$router->get('/', 'Welcome::index');</code></pre>
  </div>
</div>

<?php require_once __DIR__ . '/_footer.php'; ?>
