<!-- https://stackoverflow.com/questions/9540576/header-and-footer-in-codeigniter -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$userId = $this->session->userdata('id');
?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/head', array('view' => $view));?>

<body class="">
  <!-- TO DO : séparer header connecté et header anonyme -->
  <?php $this->load->view('templates/header', array('view' => $view, 'userId' => $userId));?>

  <?php if ($userId) {$this->load->view('templates/nav');}?>
  <main>
    <div class="px-4 pt-3 pb-4">
      <?php $this->load->view($view, $data);?>
    </div>
  </main>
  <?php $this->load->view('templates/footer');?>

  <!-- Core -->
  <script src="<?=base_url()?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/popper/popper.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="<?=base_url()?>/assets/js/argon.js?v=1.0.1"></script>

</body>

</html>