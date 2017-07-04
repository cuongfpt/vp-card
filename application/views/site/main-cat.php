<html>
<head>
    <?php $this->load->view('site/head') ?>
</head>

<body>
<div id="container-cat">
    <?php $this->load->view('site/header') ?>
    <?php $this->load->view($temp, $this->data); ?>
</div>
</body>
</html>