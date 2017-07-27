<html class="">
<head>
    <?php $this->load->view('site/head') ?>
</head>

<body>
<nav id="menu" class="mm-menu mm-horizontal mm-offcanvas"><ul class="mm-list mm-panel mm-opened mm-current" id="mm-0">
                <li>
                    <a href="<?php echo base_url("/") ?>"><img class="logo-mobile" src="<?php echo public_url("/site/images/logo.png") ?>"></a>
                </li>
                <?php foreach ($menufooter as $row): ?>
                      <?php if ($row->typepage == 1){ ?>
                         <li>
                           <a href="<?php echo base_url('huong-dan/' . $row->seolink . '-' . $row->id) ?>"><?php echo $row->catname ?></a>
                                    </li>
                                <?php } else if ($row->typepage == 4){ ?>
                                    <li>
                                        <a href="<?php echo base_url('hoi-dap')?>"><?php echo $row->catname ?></a>
                                    </li>
                                        
                                <?php } else if ($row->typepage == 5){ ?>
                                    <li>
                                        <a href="<?php echo base_url('lien-he') ?>"><?php echo $row->catname ?></a>
                                    </li>
                                <?php } else {?>
                                    <li>
                                        <a href="<?php echo base_url('danh-muc/' . $row->seolink . '-' . $row->id) ?>"><?php echo $row->catname ?></a>
                                    </li>
                                <?php }?>
                            <?php endforeach ?>
        </ul>
        </nav>
<div id="container" class="mm-page">
    <?php $this->load->view('site/header') ?>
    <?php $this->load->view($temp, $this->data); ?>
    </div>
</body>
</html>