<html class="mm-opened mm-background mm-opening">
<head>
    <?php $this->load->view('site/head') ?>
</head>

<body>
<div id="container">
    <?php $this->load->view('site/header') ?>
                <?php $this->load->view($temp, $this->data); ?>
    </div>
</body>
</html>