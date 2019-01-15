<!-- https://stackoverflow.com/questions/9540576/header-and-footer-in-codeigniter -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$user = $this->session->userdata('user');
?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/head', array('view' => $view));?>

<body class="">
  <?php $this->load->view('templates/header', array('view' => $view, 'user' => $user));?>
  <?php $this->load->view('templates/nav');?>
  <main>
    <?php $this->load->view($view, $data);?>
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