
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <!-- Google Font -->
   <base href="/">


    <title>JPBI</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/assets/owl.carousel.min.css">

    <style>
        .card{

            margin: 15px 0;


        }
        .card .card-image img{
            height: 300px;
            width: 100%;
        }
        .project-info h3,.timeline-title,.timeline-title-sub{
            color: #f05f40;
            font-weight: 600;
        }

        .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
            z-index: 2;
            color: #fff;
            background-color: #f05f40;
            border-color: #f05f40;
        }

        #mix-it .mix{
            display: none;
        }
        .list-group-item:first-child,.list-group-item:last-child {
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
        }

        .list-group-item{
            display: inline-block;
            margin: 5px 0;
            border-radius: 0;
        }

        .timeline > li > .timeline-badge{margin-left: -45px;width: 80px;height: 80px;top: 0px}
        .timeline > li > .timeline-badge img {
            border-radius: 50%;
        }
        .timeline > li > .timeline-panel{background: #fff}
    </style>
</head>
<body>

    <div class="background-image" id="page-top">
        <div class="container">
            <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="550">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="page-scroll" href="#about">ABOUT</a></li>
                                <li><a class="page-scroll" href="#portfolio">PORTFOLIO</a></li>
                                <li><a  class="page-scroll"href="#skills">SKILLS</a></li>
                                <li><a  class="page-scroll"href="#experience">WORK EXPERIENCE</a></li>
                                <li><a  class="page-scroll"href="#contact">CONTACT</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="info zoomIn">
                        <h1>Hi, I'm John Paul Inhog</h1>
                        <h2 class="cd-headline clip is-full-width">
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Web Developer</b>
                                <b>Get cape. Wear cape. Fly.</b>

                            </span>
                        </h2>
                        <a class="page-scroll" href="#about">READ MORE</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-push-5 text-center col-xs-6 col-xs-push-3">
                    <h1 class="section-title">ABOUT</h1>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4 wow fadeIn">
                    <img src="../assets/images/jp.jpg" class="img-responsive center-block">
                </div>
                <div class="col-md-4 text-center wow fadeIn ">
                    <div class="about-header">
                        <h2> Introduction.</h2>
                    </div>
                    <p>Hi, there! I am <a href="https://web.facebook.com/jampolXD">John Paul</a>. Currently working as a junior software developer. I love to create useful ideas and turn them into brilliant codes like I always do.
                        I'm a passionate web developer and always eager to learn new things about our current technology.
                    </p>
                    <ul>
                        <li>
                            <p>Date Of Birth : Aprl 22, 1995</p>
                        </li>
                        <li>
                            <p>Country : Philippines</p>
                        </li>
                    </ul>
                    <div class="button-cv">
                        <a class="button-preview" href="../assets/JP CV-Updated.docx" download>DOWNLOAD CV</a>
                    </div>


                </div>
                <div class="col-md-4 text-center wow fadeInUp " data-wow-delay=".5s">
                    <div class="about-header">
                        <h2> Hobbies & Interests.</h2>
                    </div>
                    <div class="hobbies-interest">
                        <ul>
                            <li>
                                <i class="fa fa-code"></i>
                                <h5>Code</h5>
                            </li>
                            <li>
                                <i class="fa fa-gamepad"></i>
                                <h5>Games</h5>
                            </li>
                            <li>
                                <i class="fa fa-music"></i>
                                <h5>Music</h5>
                            </li>
                            <li>
                                <i class="fa fa-coffee"></i>
                                <h5>Coffee</h5>
                            </li>
                            <li>
                                <i class="fa fa-plane"></i>
                                <h5>Travel</h5>
                            </li>
                            <li>
                                <i class="fa fa-bicycle"></i>
                                <h5>Bicycle</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-push-5 text-center col-xs-6 col-xs-push-3">
                    <h1 class="section-title">PORTFOLIO</h1>

                </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                   <div class="list-group text-center">
                       <a class="list-group-item active filter" data-filter="all">All</a>
                       <a class="list-group-item filter" data-filter=".web">Web</a>
                       <a class="list-group-item filter" data-filter=".mobile">Mobile</a>
                       <a class="list-group-item filter" data-filter=".vb">VB.net</a>
                   </div>
               </div>
                <div class="col-md-12" id="mix-it">
                    <div class="col-md-4 mix web mobile vb">
                        <div class="card ">
                            <div class="card-image">
                                <img src="assets/images/mcoat-web.jpg" class="img-responsive">
                            </div>
                            <div class="project-info">
                                <h3>MCOAT</h3>
                                <p>Web - Mobile - Desktop Application</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mix web" >
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/images/papers.jpg" class="img-responsive">
                            </div>
                            <div class="project-info">
                                <h3>Papers LLC</h3>
                                <p>Web Application</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mix web">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/images/atilano-web.jpg" class="img-responsive">
                            </div>
                            <div class="project-info">
                                <h3>Atiano's Cafe</h3>
                                <p>Web Application</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mix web">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/images/sample.png" class="img-responsive">
                            </div>
                            <div class="project-info">
                                <h3>NBYK Printing & Souvenir</h3>
                                <p>Web Application</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mix web mobile">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/images/sample.png" class="img-responsive">
                            </div>
                            <div class="project-info">
                                <h3>BLOGS</h3>
                                <p>Web - Mobile Application</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mix web">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/images/sample.png" class="img-responsive">
                            </div>
                            <div class="project-info">
                                <h3>RHEAN Laundry Shop</h3>
                                <p>Web Application</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mix mobile">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/images/philips-hue.png" class="img-responsive">
                            </div>
                            <div class="project-info">
                                <h3>ECE Hue</h3>
                                <p>Mobile Application</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mix vb">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/images/sample.png" class="img-responsive">
                            </div>
                            <div class="project-info">
                                <h3>Patient's Monitoring System</h3>
                                <p>Desktop Application</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mix vb">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/images/sample.png" class="img-responsive">
                            </div>
                            <div class="project-info">
                                <h3>Online Health Clinic Reservation</h3>
                                <p>Desktop Application</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mix vb">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/images/sample.png" class="img-responsive">
                            </div>
                            <div class="project-info">
                                <h3>Catering Reservation</h3>
                                <p>Desktop Application</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mix vb">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/images/sample.png" class="img-responsive">
                            </div>
                            <div class="project-info">
                                <h3>Queuing System for PLP</h3>
                                <p>Desktop Application</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="skills">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-push-5 text-center col-xs-6 col-xs-push-3">
                    <h1 class="section-title">SKILLS</h1>
                </div>
            </div>
            <div class="row wow bounceInDown">

                <div class="col-md-3 col-xs-6">
                    <div class="skill-img">
                        <img  src="../assets/images/svg/html.svg">

                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="skill-img">
                        <img  src="../assets/images/svg/css.svg">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="skill-img">
                        <img  src="../assets/images/svg/bootstrap.svg">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="skill-img">
                        <img src="../assets/images/js.png">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="skill-img">
                        <img  src="../assets/images/svg/jquery.svg">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="skill-img">
                        <img  src="../assets/images/svg/php.svg">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="skill-img">
                        <img  src="../assets/images/svg/laravel.svg">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="skill-img">
                        <img  src="../assets/images/svg/mysql.svg">
                    </div>
                </div>

            </div>
        </div>

    </section>
    <section id="qoute">
        <div class="container">
            <div class="img-overlay">


            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="qoute">
                        <q>5 Trust in the Lord with all your heart and lean not on your own understanding; in all your ways submit to him,and he will make your paths straight </q>-Proverbs 3:5-6

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="experience">

       <div class="container">
          <div class="row">
              <div class="col-md-2 col-md-push-5 text-center col-xs-6 col-xs-push-3">
                  <h1 class="section-title">WORK</h1>
              </div>
          </div>
          <ul class="timeline">
              <li>
                  <div class="timeline-badge"> <img class="img-responsive" src="../assets/images/republisys.png"></div>
                  <div class="timeline-panel">
                      <div class="timeline-heading">
                          <h4 class="timeline-title">Republisys Inc.</h4>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-briefcase"></i>  Junior Software Developer</small></p>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>  June 2016 - August 2017</small></p>
                      </div>
                      <div class="timeline-body">
                          <p>I work as back-end developer and front-end developer for almost 1year and 3month.</p>
                      </div>
                  </div>
              </li>
              <li class="timeline-inverted">
                  <div class="timeline-badge warning"><img class="img-responsive" src="../assets/images/mcoat.jpg"></div>
                  <div class="timeline-panel">
                      <div class="timeline-heading">
                          <h4 class="timeline-title">MCOAT</h4>
                          <p><small class="timeline-title-sub">Paint Commercial & Gen. Mdse.</small></p>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-briefcase"></i>  System Developer</small></p>
                          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>  April 2014 - February 2016</small></p>
                      </div>
                      <div class="timeline-body">
                          <p>I work for almost 2years as a part time developer and 3 months for OJT.</p>
                      </div>
                  </div>
              </li>

          </ul>

       </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="col-md-8 col-md-offset-2 col-md-push-1">
                <div class="col-md-6 wow fadeInDown" data-wow-delay="1s">
                    <i class="fa fa-envelope fa-lg"></i>
                    <h5>EMAIL</h5>
                    <p>johnpaulinhog@yahoo.com</p>
                </div>
                <div class="col-md-6  wow fadeInDown" data-wow-delay="2s">
                    <i class="fa fa-phone fa-lg"></i>
                    <h5>PHONE</h5>
                    <p>09177388097</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-md-push-1">
                    <form>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                <textarea class="form-control" name="message" rows="4" placeholder="Message" required="required"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="contact-submit wow fadeInUp">SUBMIT</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="col-md-12 text-center">
            <a href="https://github.com/deathnote332"><i class="fa fa-github fa-2x"></i></a>
            <a href="https://stackoverflow.com/users/6850994/paul"><i class="fa fa-stack-overflow fa-2x"></i></a>
            <a href="https://www.facebook.com/jampolXD"><i class="fa fa-facebook fa-2x"></i></a>
            <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
            <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
        </div>
    </section>
    <div class="scroll-top" style="display: block;">
        <a class="page-scroll" href="#page-top"><span class="fa fa-angle-up"></span></a>
    </div>

   <!-- JQuery 3.3.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>


    <script>




        $(document).ready(function(){

            $('#mix-it').mixItUp();

            // Scroll to top

            $('.scroll-top').hide()
            $(window).scroll(function() {
                if ($(this).scrollTop() > 400) {
                    $('.scroll-top').fadeIn();
                } else {
                    $('.scroll-top').fadeOut();
                }

            });


            jQuery('a.page-scroll').bind('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });

            // Closes Responsive Menu on Menu Item Click

            jQuery('.navbar-collapse ul li a').click(function() {
                $('.navbar-toggle:visible').click();
            });

            // Animation reveal on scroll


        })

    </script>
</body>
</head>

</html>
