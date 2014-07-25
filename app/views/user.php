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
    
    <!-- 1. include jQuery ... naturally none of this works without jQuery -->
    
     
    <!-- 2. include the AtD class with everything you need to make good stuff happen -->
    <script src="<?php echo URL::asset('js/jquery.atd.js');?>"></script>
    
    <!-- 3. this script is a hack that allows cross-domain AJAX -->
    <script src="<?php echo URL::asset('js/csshttprequest.js');?>"></script>

    <!-- 4. this CSS file contains the style information for highlighted errors -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo URL::asset('css/atd.css');?>" />    
    

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
     <script language="javascript">
     function check()
     {
        AtD.checkCrossAJAX('preview', 
        {
           success : function(errorCount) 
           {
              $("#total_errors").replaceWith(errorCount);
           },
    
           error : function(reason)
           {
              //alert(reason);
           }
        });
     }

     </script>       
    
    <script type="text/javascript">
        $( document ).ready(function() {
            check();
        });        
    </script>
    
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

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header> 
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="intro-text">
                        <span class="name">Total Grammar Mistakes: <span id ="total_errors"></span>  </span>
                        <p><span style="font-size:24px">(based on 20 random tweets you posted)</span></p>
                       <!-- <input type="text" name="twitter" style="width:100%;padding:15px;font-size:34px;border:1px solid #ccc;color:#ccc" placeholder="enter @twitterhandle" id="twHandle"/> -->
                        
                        <div style="margin-top:10px;padding-bottom:15px">&nbsp;</div>
                        
                        <?php foreach($data as $dx) { ?>

                            <hr class="star-light">
                            
                            <div class="tweetuser" id="preview"><span style="font-size:28px"><strong>"  
                                <?php echo $dx;?> " </strong> </span>
                            </div>

                        <?php }?>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>


    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">

                    </div>
                    <div class="footer-col col-md-4">
                        <h2>Compare with Friends</h2>
                        <p>Find out your friends tweet grammar</p>
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
