<nav class="menu pt-3">
  <?php if ($user): ?>
  <a href="<?=site_url()?>/dashboard" class="menu-item small px-2 <?=$view == 'dashboard' ? 'active' : ''?>">
    <i class="fas fa-home mr-2 menu-icon"></i>Tableau de bord
  </a>
  <a href="<?=site_url()?>/propositions" class="menu-item small px-2 <?=$view == 'propositions' ? 'active' : ''?>">
    <i class="fas fa-scroll mr-2 menu-icon"></i>Propositions
  </a>
  <a href="<?=site_url()?>/projects" class="menu-item small px-2 <?=$view == 'projects' ? 'active' : ''?>">
    <i class="fas fa-briefcase mr-2 menu-icon"></i>Mes projets
  </a>
  <a href="<?=site_url()?>/profile" class="menu-item small px-2 <?=$view == 'profile' ? 'active' : ''?>">
    <i class="fas fa-address-card mr-2 menu-icon"></i>Mon profil
  </a>
  <a href="<?=site_url()?>/messages" class="menu-item small px-2 <?=$view == 'messages' ? 'active' : ''?>">
    <i class="fas fa-comments mr-2 menu-icon"></i>Messagerie
  </a>
  <a href="<?=site_url()?>/messages" class="menu-item small px-2 <?=$view == 'messages' ? 'active' : ''?>">
    <i class="fas fa-search mr-2 menu-icon"></i>Rechercher
  </a>
  <?php endif?>
</nav>