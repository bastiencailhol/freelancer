<!-- https://stackoverflow.com/questions/9540576/header-and-footer-in-codeigniter -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('templates/head');?>
    <body>
    <div id="mainWrap">
        <?php $this->load->view('templates/header');?>
        <?php $this->load->view($view, $data);?>
        <?php $this->load->view('templates/footer');?>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
    </script>
    </body>
</html>
