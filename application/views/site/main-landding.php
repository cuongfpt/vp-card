<html>
<head>
    <?php $this->load->view('site/head') ?>
</head>

<body>
<div id="container">
    <?php $this->load->view('site/header-ld') ?>
    <?php $this->load->view($temp, $this->data); ?>
</div>


</body>
</html>