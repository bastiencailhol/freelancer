<!-- https://stackoverflow.com/questions/9540576/header-and-footer-in-codeigniter -->

<!DOCTYPE html>
<html lang="en">
    <? $this->load->view('head'); ?>
    <body>
    <div id="mainWrap">
        <? $this->load->view('header'); ?>
        <? //FINALLY LOAD THE VIEW!!! ?>
        <? $this->load->view($view, $data); ?>
        <? $this->load->view('footer'); ?>
    </div>
</body>
</html>
