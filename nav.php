<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= FMMA; ?>" target="_blank"><?= TIT; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= URL; ?>">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Niveles
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= URL; ?>1/">1 Nivel</a></li>
            <li><a class="dropdown-item" href="<?= URL; ?>1/2/">2 Nivel</a></li>
            <li><a class="dropdown-item" href="<?= URL; ?>1/2/3/">3 Nivel</a></li>
            <li><a class="dropdown-item" href="<?= URL; ?>1/2/3/4/">4 Nivel</a></li>
            <li><a class="dropdown-item" href="<?= URL; ?>1/2/3/4/5/">5 Nivel</a></li>
            <li><a class="dropdown-item" href="<?= URL; ?>1/2/3/4/5/6/">6 Nivel</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>