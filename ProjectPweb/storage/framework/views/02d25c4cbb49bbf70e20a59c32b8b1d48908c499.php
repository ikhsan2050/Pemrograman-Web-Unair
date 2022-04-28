<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php echo e(($active == "Home") ? 'active' : ''); ?>" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(($active == "Products") ? 'active' : ''); ?>" href="/product">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(($active == "Contact") ? 'active' : ''); ?>" href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Dashboard</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><?php /**PATH C:\laragon\www\ProjectPWeb\resources\views/partial/navbar.blade.php ENDPATH**/ ?>