<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Animal Recognizer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="/var/www/html/good_guage/js/graph.js"></script>
</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Animal Recognizer</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#result" onclick = $("#menu-close").click(); >Result</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Animal Recognizer <br> (Cat, Dog, Rabbit, Elephant, Tiger)</h1>
            <h3>Pattern Recognition - 2016 Spring Term Project</h3>
            <br>
            <form action="./php/recognition.php" method="post" enctype="multipart/form-data">
                <div class="btn btn-dark btn-lg">
                    <label for="img">Upload Your Animal Image</label>
                    <input type="file" id="img" name="img">
                    <input type="button" name="name" value="Read Text File" onclick="buttonReadFile()">
            	    <button type="submit" class="btn btn-default" onclick="buttonReadFile()">Submit</button>
	        	</div>
            </form>
        </div>
    </header>

    <!-- result -->
    <section id="result" class="result">
            <iframe align="center" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="../good_gauge/graph.html"></iframe>
        <!-- /.container -->
    </section>


    <!-- About -->
    <section id="about" class="services bg-primary">
      <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Works</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Cloud Computing - Openstack</strong>
                                </h4>
                                <p>OpenStack is a open-source software platform for cloud computing.</p>
				<a href="http://openstack.org" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Linux Kernel - Block Device I/O</strong>
                                </h4>
                                <p>we study the deduplication and acceleration in block layer.</p>
				<a href="http://ssel.sejong.ac.kr" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Virtualization - QEMU</strong>
                                </h4>
                                <p>QEMU is a generic and open source machine emulator and virtualizer.</p>
				<a href="http://wiki.qemu.org/Main_Page" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Big Data Platform - Spark</strong>
                                </h4>
                                <p>Apache Spark is an open source cluster computing framework.</p>
				<a href="http://spark.apache.org" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

    </section>

    <!-- Map -->
    <section id="contact" class="map">
	<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.1376615469308!2d127.0718552155606!3d37.551820332728056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca4d04ef3d389%3A0x322585c169b1b2bf!2z7ISc7Jq47Yq567OE7IucIOq0keynhOq1rCDqtbDsnpDrj5kg64ql64-Z66GcIOyEuOyiheuMgO2Vmeq1kCDsnKjqs6HqtIA!5e0!3m2!1sko!2skr!4v1464000876294"></iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Sejong System Engineering Laboratory</strong>
                    </h4>
                    <p>세종대학교 율곡관 205A<br>서울특별시 광진구 군자동 능동로</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> 010-4311-7287</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:koain@naver.con">koain@naver.com</a>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:thdrhkdgur1@naver.com">thdrhkdgur1@naver.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="http://blog.naver.com/koain"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="http://blog.naver.com/koain"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="http://blog.naver.com/koain"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Kim Young Woo &amp; Song Kwang Hyck </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>


</body>

</html>
