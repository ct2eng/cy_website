<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/cheng.ico">    

    <title>Cheng Yao</title>

    <!-- Bootstrap Core CSS -->
    <link href='<?php echo base_url("assets/css/bootstrap.min.css"); ?>' rel="stylesheet">

    <!-- Custom CSS -->
    <link href='<?php echo base_url("assets/css/grayscale.css"); ?>' rel="stylesheet">

    <!-- home -->
    <link href='<?php echo base_url("assets/css/home.css"); ?>' rel="stylesheet">

    <!-- carousel -->
    <link href='<?php echo base_url("assets/css/carousel/owl.carousel.css"); ?>' rel="stylesheet">
    <link href='<?php echo base_url("assets/css/carousel/owl.theme.css"); ?>' rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='<?php echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>' rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- ==================================================導航列=============================================== -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    
                    <a class="navbar-brand page-scroll logo" href='<?=site_url("Main_page/index")?>'>
                        <img src=<?php echo base_url("assets/img/final_logo.png"); ?> alt="" style="width:50%;">
                    </a>
                    <a class="navbar-brand page-scroll logo_name" href='<?=site_url("Main_page/index")?>'>
                        Cheng Yao
                    </a>


                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav mid">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="hidden2">
                            <a class="page-scroll" href='<?=site_url("Main_page/index")?>'><p style="text-shadow:3px 3px 3px black;">cheng yao</p></a>
                        </li>

                        <li>
                            <a class="page-scroll" href='<?=site_url("Main_page/about_us")?>'><p style="text-shadow:3px 3px 3px black;">About us</p></a>
                        </li>
                        <li>
                            <a class="page-scroll" href='<?=site_url("Main_page/news")?>'><p style="text-shadow:3px 3px 3px black;">News</p></a>
                        </li>
                        <li>
                            <a class="page-scroll" href='<?=site_url("Main_page/new_arrival")?>'><p style="text-shadow:3px 3px 3px black;">New Arrival</p></a>
                        </li>
                        <li>
                            <a class="page-scroll" href='<?=site_url("Main_page/faq")?>'><p style="text-shadow:3px 3px 3px black;">FAQ</p></a>
                        </li>
                        <li>
                            <a class="page-scroll" href='<?=site_url("Main_page/contact_us")?>'><p style="text-shadow:3px 3px 3px black;">Contact us</p></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- ======================================清單列表========================================================= -->
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row home_top">
                        <button class="btn btn-default toggle" id="menu" >menu</button>
                        <!-- side menu -->
                        <div class="col-md-3"  style="text-align: center;">
                            <ul class="cd-accordion-menu animated">
                                <li class="has-children">
                                    <input type="checkbox" name ="group-1" id="group-1">
                                    <label for="group-1" >Hand Shower</label>

                                    <ul class="sidebar_left">
                                        <li><a href='<?=site_url("Main_page/project_list")?>'>Single Function</a></li>
                                        <li><a href="#0">2 Functions</a></li>
                                        <li><a href="#0">3 Functions</a></li>
                                        <li><a href="#0">5 Functions</a></li>
                                        <li><a href="#0">Pet Shower Set</a></li>

                                    </ul>
                                </li>
                                <li class="has-children">
                                    <input type="checkbox" name ="group-2" id="group-2">
                                    <label for="group-2">Shower Head</label>

                                    <ul class="sidebar_left">
                                        <li><a href="#0">Single Function</a></li>
                                        <li><a href="#0">3 Functions</a></li>
                                        <li><a href="#0">5 Functions</a></li>
                                        <li><a href="#0">Brass Shower Head</a></li>
                                    </ul>
                                </li>
                                <li class="has-children" >
                                    <a href="">Sliding Bar</a>
                                </li>
                                <li class="has-children">
                                    <input type="checkbox" name ="group-3" id="group-3">
                                    <label for="group-3">Spray</label>

                                    <ul class="sidebar_left">
                                        <li><a href="#0">Pull-out Kitchen Spray</a></li>
                                        <li><a href="#0">Pull-down Kitchen Sprays</a></li>
                                        <li><a href="#0">Kitchen Spray</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <input type="checkbox" name ="group-4" id="group-4">
                                    <label for="group-4">Hose</label>

                                    <ul class="sidebar_left">
                                        <li><a href="#0">Shower Hose</a></li>
                                        <li><a href="#0">Kitchen Hose</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#0">Aerator</a>
                                </li>
                                <li class="has-children">
                                    <a href="#0">Adaptor</a>
                                </li>

                            </ul> <!-- cd-accordion-menu -->

                        </div>
                        <!-- /end side menu -->
                        <div class="col-md-9 col-sm-12">