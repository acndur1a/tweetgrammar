<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TweetGrammar - Check your Tweet Grammar</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL::asset('css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('css/main.css');?>" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="<?php echo URL::asset('css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="<?php echo URL::asset('js/jquery-1.10.2.js');?>"></script>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="<?php echo URL::asset('img/logo.png');?>" border="0"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href=""></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Whats This?</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo URL::to('login');?>">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
       
        <script type="text/javascript">
        $( "#twHandleClick" ).click(function( event ) {
          
          var twhandle = $("#twHandle").val();
          
          if($("#twHandle").val() == "")
          {
              event.preventDefault();
          }
          else
          {
                
          }
        });
        </script>        
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="intro-text">
                        <span class="name">check your tweet grammar</span>
                       <!-- <input type="text" name="twitter" style="width:100%;padding:15px;font-size:34px;border:1px solid #ccc;color:#ccc" placeholder="enter @twitterhandle" id="twHandle"/> -->
                        
                        <div style="margin-top:10px;padding-bottom:15px"><a href="<?php echo URL::to('login');?>" class="btn btn-large btn-french-5"  id="twHandleClick">Check Now</a>
                        </div>
                        
                        <hr class="star-light">
                        
                        <span class="skills" style="font-size:34px">Find out if your tweets are grammatically correct</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="about">
      <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>WTF?</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p><img src="<?php echo URL::asset('img/twitter.png');?>" border=""/></p>
                </div>
                <div class="col-lg-4">
                    <p><strong>Tweetgrammar</strong> is a simple little tool for checking to see exactly how screwed up your tweets are when compared to proper dictionary level grammar</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
 
                </div>
            </div>
        </div>
    </section>

    <section class="success" id="github">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contribute</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Tweetgrammar is an <strong>opensource</strong> tool, so feel free to give it a quick fork on <a href="">github</a> so we can eliminate the twitterverse of expontially declining grammar quality </p>
                </div>
                <div class="col-lg-4">
                    <p><img src="<?php echo URL::asset('img/github.png');?>" border=""/></p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Fork on Github
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2></h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="herox">
                        
                        <p>I have come to realize that Twitter has slowly damaged my once grammatically correct written language. Something had to be done...   </p>
                      
                        <p class="whois">-<em> Andrew Condurache, Founder of Gink Labs (makers of TweetGrammar)</em></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">

                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Help A Friend</h3>
                        <p>Give a friend the gift of good grammar, share below:</p>
                        <ul class="list-inline">
                            <li>
                                <a href="http://www.facebook.com/sharer.php?u=http://tweetgrammar.com&t=Check your tweet grammar now!" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="http://www.twitter.com/share?url=http://tweetgrammar.com&text=Check your tweet grammar now!" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 footer_link">
                        Copyright &copy; 2014 - Created by <a href="http://twitter.com/acondurache" target="_blank">Andrew Condurache</a> @ <a href="http://ginklabs.co" target="_blank"> Gink Labs </a> 
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    
    <script src="<?php echo URL::asset('js/bootstrap.min.js');?>"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo URL::asset('js/classie.js');?>"></script>
    <script src="<?php echo URL::asset('js/cbpAnimatedHeader.js');?>"></script>
    <script src="<?php echo URL::asset('js/main.js');?>"></script>

</body>

</html>
