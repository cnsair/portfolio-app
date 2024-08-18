@extends('layouts.app')

@section('content')
    
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="#index.html">Chisom Samson Nwachukwu</a></h1>
      <h2>I am a <span>Software Engineer, PHP (Laravel)</span> from Nigeria</h2>

      <div style="margin: 3% 3%; color: #da810e;">
        <h1>SORRY! SITE IS UNDER MAINTENANCE!</h1>
        <small>Please check back later to see full functionality. Meanwhile, you can use the About and social media links below to know me a bit.</small>
      </div>



      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>

          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
		  <li><a class="nav-link" href="#more">More</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a target="_blank" href="https://g.dev/cnsair" class="google"><i class="bi bi-google"></i></a>
        <a target="_blank" href="https://t.me/cnsair/" class="telegram"><i class="bi bi-telegram"></i></a>
        <a target="_blank" href="https://instagram.com/cnsair" class="instagram"><i class="bi bi-instagram"></i></a>
        
        <a target="_blank" href="https://twitter.com/cnsair" class="twitter"><i class="bi bi-twitter"></i></a>
        <!-- <a href="https://messenger.com/" class="messenger"><i class="bi bi-messenger"></i></a> -->
        <a target="_blank" href="https://facebook.com/samson.chisom/" class="facebook"><i class="bi bi-facebook"></i></a> 
        <a target="_blank" href="https://www.github.com/cnsair" class="github"><i class="bi bi-github"></i></a>
        <!-- <a href="https://www.youtube.com/channel/UCVlWiXd9VXXDvJHoPTFz2GQ/" class="youtube"><i
            class="bi bi-youtube"></i></a> -->
        <a target="_blank" href="https://www.linkedin.com/in/samson-chisom/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a target="_blank" href="https://www.reddit.com/user/cnsair" class="reddit"><i class="bi bi-reddit"></i></a>
      </div>
    </div>
  </header><!-- End Header -->




   <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

        <div class="section-title">
            <h2>About</h2>
            <p>Learn more about me!</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
            <img style="border-radius: 50%;" height="100%" width="100%" src="assets/img/moi_1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Software Engineer &amp; Designer</h3>
            <p class="fst-italic">
                Hello, I am Chisom Samson Nwachukwu...<br/>

                A result-driven PHP Software Engineer with 7 years of experience. Loves clean and elegant code. Has solely built and assisted from start to finish many web applications ranging from simple blogs to complex eCommerce. Equipped with an excellent understanding of Web 3 and blockchain technology. Tech savvy and a good team player.
            </p>
            <div class="row">
                <div class="col-lg-6">
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>March 8</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a
                        href="index.html">chisomsamson.me</a></span></li>
                    <li><i class="bi bi-chevron-right"></i> 
                    <strong>WhatsApp:</strong> 
                    <span>
                        <a target="_blank" href="https://wa.me/2347033229178">(+234) 703 322 9178 </a>
                    </span>
                    </li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><a
                        href="#">Ota,
                        Ogun State, Nigeria</a></span></li>
                </ul>
                </div>
                <div class="col-lg-6">
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Profession:</strong> <span>Software engineer</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Degrees:</strong> <span>Information Technology,<br/> Computer Science</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><a
                        href="mailto:Samsondestined@gmail.com">Samsondestined@gmail.com</a></span>
                    </li>

                </ul>
                </div>
            </div>
            <p>
                Currently a Technical Co-founder at Africa Blockchain Consortium & Digital Economy. I’m interested in Blockchain, ML, AI, Advanced Algorithms.
            </p>
            <p>
                I am also interested in Cyber Security and I like to play with Hardware. <br>
                    Feel free to reach out for any inquiry.
            </p>
                
            </div>
        </div>

    </div><!-- End About Me -->






    <!-- ======= Counts ======= -->
    <div class="counts container">

        <div class="row">

            <div class="col-lg-3 col-md-6">
            <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <span data-purecounter-start="0" data-purecounter-end="153" data-purecounter-duration="4"
                class="purecounter"></span>
                <p>Happy Clients</p>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
                <i class="bi bi-journal-richtext"></i>
                <span data-purecounter-start="0" data-purecounter-end="205" data-purecounter-duration="3"
                class="purecounter"></span>
                <p>Projects</p>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
                <i class="bi bi-headset"></i>
                <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="3"
                class="purecounter"></span>
                <p>Years Of Support</p>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
                <i class="bi bi-award"></i>
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="4"
                class="purecounter"></span>
                <p>Awards</p>
            </div>
            </div>

        </div>

    </div><!-- End Counts -->




    <!-- ======= Skills  ======= -->
    <div class="skills container">

        <div class="section-title">
            <h2>Skills</h2>
        </div>

        <div class="row skills-content">

            <div class="col-lg-6">

            <div class="progress">
                <span class="skill">PHP <i class="val">99%</i></span>
                <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
                </div>
                </div>
            </div>

            <div class="progress">
                <span class="skill">SQL <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                </div>
                </div>
            </div>

            <div class="progress">
                <span class="skill">HTML <i class="val">98%</i></span>
                <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                </div>
                </div>
            </div>

            <div class="progress">
                <span class="skill">CSS <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                </div>
                </div>
            </div>

            <div class="progress">
                <span class="skill">JavaScript <i class="val">60%</i></span>
                <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                </div>
                </div>
            </div>

            <div class="progress">
                <span class="skill">Laravel <i class="val">50%</i></span>
                <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                </div>
                </div>
            </div>

            </div>

            <div class="col-lg-6">

            <div class="progress">
                <span class="skill">CorelDraw <i class="val">99%</i></span>
                <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
                </div>
                </div>
            </div>

            <div class="progress">
                <span class="skill">Adobe Photoshop <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                </div>
                </div>
            </div>

            <div class="progress">
                <span class="skill">Adobe Illustrator<i class="val">50%</i></span>
                <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                </div>
                </div>
            </div>

            <div class="progress">
                <span class="skill">Adobe After Effect<i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                </div>
                </div>
            </div>

            </div>

        </div>

        </div><!-- End Skills -->


    </section><!-- End About Section -->
  
@endsection