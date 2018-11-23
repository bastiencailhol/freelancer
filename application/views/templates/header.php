<style>
  .nav-logo {
    position: absolute;
    left: 0;
    height: 100%;
  }
  .nav-logo img {
    max-height: 100%;
  }

  .input-group-with-button button {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
  }
  .input-group-with-button button {
    padding-top: 0;
    padding-bottom: 0;
  }
  header .form-control,
  header .input-group-text {
    height: auto;
    background-color: var(--primary-dark) !important;
    color: var(--lighter) !important;
  }
  header .focused .form-control,
  header .focused .input-group-text {
    color: white !important;
  }
</style>

<header class="header-global bg-default">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light position-relative py-1">
      <a class="nav-logo px-2 py-1" href="<?=site_url()?>/accueil">
          <img src="<?=base_url();?>assets/img/brand/logo_horiz_inv.png" alt="Patchwork">
      </a>
      <div class="container">
        <div class="form-group mb-0">
          <div class="input-group input-group-alternative input-group-with-button">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control form-control-alternative" placeholder="Trouver un freelance" type="text">
			    	<button type="button" class="btn btn-warning">RECHERCHER</button>
          </div>
        </div>
        <div class="navbar-nav">
          <a href="" class="nav-link mr-3">Je suis freelance</a>
          <a href="" class="nav-link">Connexion</a>
        </div>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
      </div>
    </nav>
</header>
