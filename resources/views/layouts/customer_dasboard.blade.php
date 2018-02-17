<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Customer Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel='stylesheet' id='ajax-auth-style-css'  href='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/ajax-auth-style.css?ver=4.9.4' type='text/css' media='all' />
    <link rel='stylesheet' id='brandflow-wp-css'  href='https://mdbootstrap.com/wp-content/plugins/brandflow-wp/public/css/brandflow-wp-public.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='https://mdbootstrap.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0' type='text/css' media='all' />
    <link rel='stylesheet' id='dwqa-style-css'  href='https://mdbootstrap.com/wp-content/plugins/dw-question-answer-pro/templates/assets/css/style.css?ver=250420160307' type='text/css' media='all' />
    <link rel='stylesheet' id='dwqa-style-rtl-css'  href='https://mdbootstrap.com/wp-content/plugins/dw-question-answer-pro/templates/assets/css/rtl.css?ver=250420160307' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'  href='https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=3.3.1' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='wsl-widget-css'  href='https://mdbootstrap.com/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=4.9.4' type='text/css' media='all' />
    <link rel='stylesheet' id='compiled.css-css'  href='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled.min.css?ver=4.4.0' type='text/css' media='all' />
    <link rel='stylesheet' id='style.css-css'  href='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/style.css?ver=4.9.4' type='text/css' media='all' />
    <link rel='stylesheet' id='dwqa_leaderboard-css'  href='https://mdbootstrap.com/wp-content/plugins/dw-question-answer-pro/templates/assets/css/leaderboard.css?ver=4.9.4' type='text/css' media='all' />

</head>
<style>
 
</style>
<body>

    <!--Card-->

            <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
                <div class="container-fluid">
                <a class="companyname navbar-brand" href="#"><strong>Antares</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./Antares.html">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Customer Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            Car Showroom
                            </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">New Cars</a>
                                <a class="dropdown-item" href="#">Used Cars</a>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-divider"></div>

                    <div class="row">
                       
                       <div class="col-lg-12">  
                    <ul class="navbar-nav navbar-right mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-bell" aria-hidden="true"></i> Notifications</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-comments" aria-hidden="true"></i> Support</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</a>
                        </li>

                    </ul>
                    </div>
                    </div>
                </div>
            </div>
            </nav>    

            @yield('content')

        <footer class="page-footer center-on-small-only stylish-color-dark">

                <!--Footer Links-->
                <div class="container">
                    <div class="row">
            
                        <!--First column-->
                        <div class="col-md-4">
                            <h5 class="title mb-4 mt-3 font-bold">Footer Content</h5>
                            <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit.</p>
                        </div>
                        <!--/.First column-->
            
                        <hr class="clearfix w-100 d-md-none">
            
                        <!--Second column-->
                        <div class="col-md-2 mx-auto">
                            <h5 class="title mb-4 mt-3 font-bold">Links</h5>
                            <ul>
                                <li><a href="#!">Link 1</a></li>
                                <li><a href="#!">Link 2</a></li>
                                <li><a href="#!">Link 3</a></li>
                                <li><a href="#!">Link 4</a></li>
                            </ul>
                        </div>
                        <!--/.Second column-->
            
                        <hr class="clearfix w-100 d-md-none">
            
                        <!--Third column-->
                        <div class="col-md-2 mx-auto">
                            <h5 class="title mb-4 mt-3 font-bold">Links</h5>
                            <ul>
                                <li><a href="#!">Link 1</a></li>
                                <li><a href="#!">Link 2</a></li>
                                <li><a href="#!">Link 3</a></li>
                                <li><a href="#!">Link 4</a></li>
                            </ul>
                        </div>
                        <!--/.Third column-->
            
                        <hr class="clearfix w-100 d-md-none">
            
                        <!--Fourth column-->
                        <div class="col-md-2 mx-auto">
                            <h5 class="title mb-4 mt-3 font-bold ">Links</h5>
                            <ul>
                                <li><a href="#!">Link 1</a></li>
                                <li><a href="#!">Link 2</a></li>
                                <li><a href="#!">Link 3</a></li>
                                <li><a href="#!">Link 4</a></li>
                            </ul>
                        </div>
                        <!--/.Fourth column-->
                    </div>
                </div>
                <!--/.Footer Links-->
            
                <hr>
            
                <!--Call to action-->
                <div class="call-to-action">
                    <ul>
                        <li>
                            <h5 class="mb-1">Register for free</h5>
                        </li>
                        <li><a href="" class="btn btn-danger btn-rounded">Sign up!</a></li>
                    </ul>
                </div>
                <!--/.Call to action-->
            
                <hr>
            
                <!--Social buttons-->
                <div class="social-section text-center">
                    <ul>
            
                        <li><a class="btn btn-floating btn-sm fbbtn2"><i class="fa fa-facebook text-center"> </i></a></li>
                        <li><a class="btn btn-floating btn-sm twtbtn2"><i class="fa fa-twitter text-center"> </i></a></li>
                        <li><a class="btn btn-floating btn-sm gplsbtn2"><i class="fa fa-google-plus text-center"> </i></a></li>
                        <li><a class="btn btn-floating btn-sm libtn"><i class="fa fa-linkedin text-center"> </i></a></li>
                        <li><a class="btn btn-floating btn-sm drblbtn"><i class="fa fa-dribbble text-center"> </i></a></li>
            
                    </ul>
                </div>
                <!--/.Social buttons-->
            
                <!--Copyright-->
                <div class="footer-copyright">
                    <div class="container-fluid">
                       
            
                    </div>
                </div>
                <!--/.Copyright-->
            
            </footer>
        <!--Main Navigation-->
        
        <!--Main Layout-->
        
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
    <script type="text/javascript" src="./Antares_files/jarallax.js.download"></script>
    <script>
        new WOW().init();

    </script>   
</body>

</html>
