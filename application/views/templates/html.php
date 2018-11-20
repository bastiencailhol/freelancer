<!-- https://stackoverflow.com/questions/9540576/header-and-footer-in-codeigniter -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('templates/head', array('view' => $view));?>
    <body>
        <div class="maquette">
            <?php $this->load->view('templates/header');?>
            <?php $this->load->view($view, $data);?>
            <?php $this->load->view('templates/footer');?>
        </div>



        <!-- Core -->
        <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/vendor/popper/popper.min.js"></script>
        <script src="<?=base_url()?>assets/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/vendor/headroom/headroom.min.js"></script>
        <!-- Argon JS -->
        <script src="<?=base_url()?>assets/js/argon.js?v=1.0.1"></script>

    </body>
</html>
