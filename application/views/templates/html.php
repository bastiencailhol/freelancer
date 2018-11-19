<!-- https://stackoverflow.com/questions/9540576/header-and-footer-in-codeigniter -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('templates/head');?>
    <body>
        <?php $this->load->view('templates/header');?>
        <?php $this->load->view($view, $data);?>
        <?php $this->load->view('templates/footer');?>

        <!-- Core -->
        <script src="/assets/vendor/jquery/jquery.min.js"></script>
        <script src="/assets/vendor/popper/popper.min.js"></script>
        <script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>

        <!-- Theme JS -->
        <script src="/assets/js/argon.min.js"></script>

    </body>
</html>
