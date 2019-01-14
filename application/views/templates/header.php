<header class="header-global bg-default">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg position-relative py-0">
      <a class="nav-logo px-2 py-1" href="<?=site_url()?>/accueil">
          <img src="<?=base_url();?>assets/img/brand/logo_horiz_inv.png" alt="Patchwork">
      </a>
      <div class="container">
        <?php if ($user): ?>
          <div class="navbar-nav">
            <div class="nav-item"><a href="<?=site_url()?>/dashboard" class="nav-link <?=$view == 'dashboard' ? 'active' : ''?>">Tableau de bord</a></div>
            <div class="nav-item"><a href="" class="nav-link <?=$view == 'projects' ? 'active' : ''?>">Mes projets</a></div>
            <div class="nav-item"><a href="" class="nav-link <?=$view == 'profile' ? 'active' : ''?>">Mon profil</a></div>
            <div class="nav-item"><a href="" class="nav-link <?=$view == 'messages' ? 'active' : ''?>">Messagerie</a></div>
          </div>
        <?php endif?>
        <div class="form-group mb-0">
          <div class="input-group input-group-alternative input-group-with-button">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control form-control-alternative" placeholder="Trouver un freelance" type="text">
			    	<button type="button" class="btn btn-warning">RECHERCHER</button>
          </div>
        </div>
        <?php if (!$user): ?>
          <div class="navbar-nav">
            <a href="" class="nav-link mr-3">Je suis freelance</a>
            <a href="<?=site_url()?>/connect" class="nav-link">Connexion</a>
          </div>
        <?php endif?>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <?php if ($user): ?>
          <div class="nav-user pr-3"><i class="fas fa-user-circle f2 mr-1"></i><i class="fas fa-caret-down"></i></div>
        <?php endif?>
      </div>
    </nav>
</header>
