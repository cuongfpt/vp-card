<html>
<head>
    <?php $this->load->view('site/head') ?>
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top">
<div id="container">
    <?php $this->load->view('site/header-ld') ?>
    <?php $this->load->view($temp, $this->data); ?>
</div>
</body>
</html>