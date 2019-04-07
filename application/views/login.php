<!DOCTYPE html>
<html>
    <head>
        <title>Aplikasi Inventori</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/login.css') ?>">
        <link rel="shortcut icon" href="<?php echo base_url()?>assets//images/favicon.png" />

    </head>
    <body>
        <!--slider area starts-->
        <div id="home"></div>
        <div class="banner-area" id="slider-area">
            <div id="particles-js"></div>
            <div class="banner-table">
                <div class="banner-table-cell">
                    <div class="welcome-text">
                        <div class="container">
                            <div class="row">
                                <br><br><br><br>
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <h5 style="font-size: 42px;color: #fff"><span><img style="width: 60px" src="<?= base_url('assets/images/computer.png') ?>"> Inventori</span></h5>
                                    <div class="clearfix"></div>
                                    <br><br><br><br>
                                    <div class="card">
                                        <form method="post" action="<?= site_url('login/aksi_login') ?>">
                                        <div class="input-container">
                                            <input name="username" type="text" id="#{label}" required="required" />
                                            <label for="#{label}">Username</label>
                                            <div class="bar"></div>
                                        </div>
                                        <div class="input-container">
                                            <input name="password" type="password" id="#{label}" required="required" />
                                            <label for="#{label}">Password</label>
                                            <div class="bar"></div>
                                        </div>
                                    </div>
                                    <input id="buttonId" type="submit" value="Login" class="button"></a><br><br><br><br><br><br><br><br><br>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--slider area ends-->
        <!--Latest version JQuery-->
        <script src="<?=base_url()?>assets/js/jquery-3.2.1.min.js"></script>
        
        <!--particle js-->
        <script src="<?=base_url()?>assets/js/particles.js"></script>
        <script src="<?=base_url()?>assets/js/app.js"></script>
        <!--Main js-->
    </body>
</html>