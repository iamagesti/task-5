<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  >
    <div class="container">
      <a class="navbar-brand" href="/">Paper Post Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php echo e(($active === "home") ? 'active' : ''); ?>"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php echo e(($active === "posts") ? 'active' : ''); ?>" href="/posts">Posts</a>
          </li>
        </ul>

        <li class="nav-item dropdown navbar-nav ms-auto">
          <?php if(auth()->guard()->check()): ?>
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back,<?php echo e(auth()->user()->name); ?>

            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window"></i>My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  <?php echo csrf_field(); ?>
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                </form>
            </ul>
          </li>
        
            
        <?php else: ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="/login" class="nav-link <?php echo e(($active === "login") ? 'active' : ''); ?>"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            <?php endif; ?>
          </ul>   
      </div>
    </div>
  </nav><?php /**PATH C:\Application\task-5\resources\views/partials/navbar.blade.php ENDPATH**/ ?>