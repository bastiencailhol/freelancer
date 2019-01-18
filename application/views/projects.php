<h3 class="text-uppercase"><i class="fas fa-briefcase text-info f4 mr-2"></i>Mes projets</h3>
<section class="section section-sm">
  <h4 class="mb-3">Projets en cours</h4>
  <?php foreach ($projects->collab as $project): ?>
  <?php $this->load->view('components/project-card', array('project' => $project))?>
  <?php endforeach?>
</section>
<section class="section section-sm">
  <h4 class="mb-3">Brouillons</h4>
  <?php foreach ($projects->drafts as $project): ?>
  <div class="card p-4 mb-4">
    <h5>
      <?=$project->title?>
    </h5>
  </div>
  <?php endforeach?>
</section>
<section class="section section-sm">
  <h4 class="mb-3">Projets en attente de collaboration</h4>
  <?php foreach ($projects->published as $project): ?>
  <div class="card p-4 mb-4">
    <h5>
      <?=$project->title?>
    </h5>
  </div>
  <?php endforeach?>
</section>
<section class="section section-sm">
  <h4 class="mb-3">Projets terminés</h4>
  <?php foreach ($projects->finished as $project): ?>
  <div class="card p-4 mb-4">
    <h5>
      <?=$project->title?>
    </h5>
  </div>
  <?php endforeach?>
</section>