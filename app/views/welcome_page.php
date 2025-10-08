<?php require_once __DIR__ . '/_head.php'; ?>

<div class="container">
  <div class="header" style="background:var(--grad-1);color:#fff;padding:2rem;text-align:center;border-radius:8px">
    <h1>Welcome to LavaLust</h1>
    <p>Lightweight • Fast • MVC for PHP Developers</p>
  </div>

  <div class="main" style="margin-top:16px">
    <h2>What is LavaLust?</h2>
    <p><strong>LavaLust</strong> is a lightweight PHP framework that follows the MVC (Model–View–Controller) pattern. It's designed for developers who want a structured yet minimalistic PHP development experience.</p>

    <h2>Key Features</h2>
    <div class="grid">
      <div class="card">
        <h3>MVC Architecture</h3>
        <p>Clear separation of concerns with Models, Views, and Controllers.</p>
      </div>
      <div class="card">
        <h3>Built-in Routing</h3>
        <p>Clean and flexible routing system similar to Laravel or CodeIgniter.</p>
      </div>
      <div class="card">
        <h3>Libraries & Helpers</h3>
        <p>Includes utilities for sessions, forms, database, validation, and more.</p>
      </div>
      <div class="card">
        <h3>Organized Structure</h3>
        <p>Modular folder structure for scalable app development.</p>
      </div>
      <div class="card">
        <h3>REST API Support</h3>
        <p>Build RESTful APIs easily using built-in tools and conventions.</p>
      </div>
      <div class="card">
        <h3>ORM-like Models</h3>
        <p>Use LavaLust's model layer for structured database operations with ease.</p>
      </div>
    </div>

    <h2>Project Structure</h2>
    <pre><code>
/app
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

    <h2>Quick Example</h2>
    <pre><code>
$router->get('/', 'Welcome::index');
    </code></pre>
  </div>

  <div class="footer" style="margin-top:16px">
    Page rendered in <strong><?php echo lava_instance()->performance->elapsed_time('lavalust'); ?></strong> seconds.
    Memory usage: <?php echo lava_instance()->performance->memory_usage(); ?>.
    <?php if(config_item('ENVIRONMENT') === 'development'): ?>
      <br>LavaLust Version <strong><?php echo config_item('VERSION'); ?></strong>
    <?php endif; ?>
  </div>
</div>

<?php require_once __DIR__ . '/_footer.php'; ?>
