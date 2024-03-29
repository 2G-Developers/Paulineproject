<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149334051-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149334051-1');
</script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Innovision Design Institute exclusively for Interior Design education. Faculty of experienced designers.
  Artists. Software experts. Creative Workshops. Easy to learn curriculum. On-site Training. Affordable
  fees. Internship guidance. Get enrolled. Courses: Master Diploma in Interior Design. Coaching for NATA.
  NID. NIFT. VISCOMM.">
  <link rel="shortcut icon" type="image/ico" href="./assets/img/favico.ico"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="./assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="./assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.css"
    integrity="sha256-cKiyvRKpm8RaTdU71Oq2RUVgvfWrdIXjvVdQF2oZ1Y4=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <script src="https://kit.fontawesome.com/284331321e.js"></script>

  <!-- <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css"> -->
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/mobile-style.css" />
  <title>Innovision Design Institute</title>
</head>

<body>
    <div id="loadfirst"></div>
  <div class="spinner-wrapper">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div>
  <header>
    <div class="container-fluid p-0">
      <!-- menu navbar -->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="main-nav">
          <button class="navbar-toggler py-2 bg-white text-dark ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-align-left"></i>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav text-center ml-auto">
            <li class="nav-item active">
              <a class="nav-link  bg-dark text-light" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-dark text-light" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-dark text-light" href="#whyidi">Why IDI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-dark text-light" href="#experts">Experts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-dark text-light" href="#courses">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-dark text-light" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-dark text-light" href="#testimonials">Testimonials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-dark text-light" href="#events">Events</a>
              </li>
            <li class="nav-item">
              <a class="nav-link bg-dark text-light" href="#register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-dark text-light" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <main>
      <!-- Sticky container -->
      <div class="sticky-container">
          <a href="https://www.facebook.com/Innovision-design-institute-107181497339381/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="https://api.whatsapp.com/send?phone=919361324488" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
          <a href="https://twitter.com/idichennai" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/idichennai/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UCQi4GXxrUpxZfJ8FVCkSLDA?view_as=subscriber" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
        </div>

      <!-- home -->
      <section id="home">
        <div class="container p-0">
            <div>
                <marquee><p>Interior Design Courses Hub.</p></marquee>
            </div>
          <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <?php $dir ="./assets/img/carousel/*.jpg" ;
					$images=glob($dir);
					$i=0;
					$act='active';
					foreach($images as $image):
					$i++;
					if($i>1)
					{
						$act="";
					}
									?>
                <div class="carousel-item <?php echo $act?>">
                  <img src=".<?php echo $image?>" class="d-block w-100" alt="...">
                </div>
                <?php endforeach?>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <i style="font-size: 60px" class="fas fa-arrow-alt-circle-left text-warning"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <i style="font-size: 60px" class="fas fa-arrow-alt-circle-right text-warning"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="px-2 pt-2" id="overlay">
              <div class="box-text">
                  <p>Master Diploma in Interior Design - 1 year</p>
                  <p>Short Term Certificate in Interior Design - 6 months</p>
                  <p>Coaching classes for entrance:</p>
                  <p>NATA, NID, NIFT and VISCOMM – 6 months/1 year</p>
                  <ul>
                    <li>Tutored by experienced designers.</li>
                    <li>Easy -to -learn curriculum.</li>
                    <li>Individual attention.</li>
                    <li>Flexible timings.</li>
                    <li>Guidance in internships.</li>
                    <li>Affordable fee structure.</li>
                    <li>The right ambience to learn.</li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About-us -->

      <section id="about" style="position: relative;">
        <div  class="py-4">

        </div>

        <div  class="py-2">

        </div>
        <div class="container">
          <div  class="py-4">

          </div>
          <div class="row pb-4 py-3">
            <div class="col-md-12 text-center p-0">
              <h2 class="title text-center my-5" ><div class="wow rubberBand" data-wow-duration="2s">About Us</div></h2>
              <p class="about-title m-0"><span class="font-weight-bold">IDI</span> - <span
                  class="font-weight-bold">i</span>nnovision <span class="font-weight-bold">d</span>esign <span
                  class="font-weight-bold">i</span>nstitute</p>
              <p id="handwriting" class="about-title">
                To innovate your vision in Interior Design
              </p>
              <p class="about-content text-left px-5">
                While the population in the cities is off the charts, the living spaces are shrinking. This calls for
                smart usage of space and who else to rescue than the interior designer! To create talented designers you
                need the right academic exposure- which IDI offers.
              </p>
              <p class="about-content text-left px-5 py-2">
                Since 1991 “Innovision” is passionately involved in providing quality design services as well as
                educating
                aspiring students in interior design, architecture and fine art.
              </p>
              <p class="about-content text-left px-5 py-2">
                Innovision Design Institute…specializes exclusively in Interior Design education. Backed by a team of
                experienced designers/artists and software experts the institute imparts quality education and training
                to
                become a well versed interior design professional.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id="whyidi" >
        <div  class="py-4">

        </div>

        <div  class="py-2">

        </div>
        <div class="container">
          <div  class="py-4">

          </div>

          <div class="row pt-3">
            <div class="col-md-12 p-0">
              <h2 class="title text-center mt-5"><div class="wow rubberBand" data-wow-duration="2s">Why IDI?</div></h2>
              <marquee><p style="color: #ffeb3b;">Easy to <span class="text-white">learn.</span> Easy to <span class="text-white">earn</span></p></marquee>
            </div>

            <div class="col-md-6 text-left">
              <ul class="list-group list-group-flush pt-5 pb-3">
                <ul class="list-group">
                  <li class="list-group-item">
                    <i class="fa fa-check pr-3 text-success"></i>Teaching the nuances of making the living/workspace
                    more
                    enticing and functional
                  </li>
                  <li class="list-group-item">
                    <i class="fa fa-check pr-3 text-success"></i>Expert faculty team with proven experience in designing
                    and design education
                  </li>
                  <li class="list-group-item">
                    <i class="fa fa-check pr-3 text-success"></i>Besides the key areas the curriculum focuses on
                    freehand
                    design practices
                  </li>
                  <li class="list-group-item">
                    <i class="fa fa-check pr-3 text-success"></i>Exposure to 3D Workshops, demos, seminars, site visits
                    to
                    train the students further with other nuances of design- acoustics, colour theory, temperature, lighting
                    etc.
                  </li>
                  <li class="list-group-item">
                    <i class="fa fa-check pr-3 text-success"></i>Excellent software set up
                  </li>
                  <li class="list-group-item">
                    <i class="fa fa-check pr-3 text-success"></i>Training in developing their portfolios to showcase
                    their
                    potential that will bag them plum jobs post completion of the course
                  </li>
                  <li class="list-group-item">
                    <i class="fa fa-check pr-3 text-success"></i>The right ambience to enhance the mood to learn
                  </li>
                  <li class="list-group-item">
                    <i class="fa fa-check pr-3 text-success"></i>At the end of the course an exhibition will be held to
                    showcase the works of the students.
                  </li>
                  <li class="list-group-item">
                    <i class="fa fa-check pr-3 text-success"></i>The faculty are well networked designers and the
                    relationship they develop with students will create the right internships and professional
                    opportunities
                  </li>
                  <li class="list-group-item">
                    <i class="fa fa-check pr-3 text-success"></i>Located in the heart of the city
                  </li>
                </ul>
              </ul>
            </div>
            <div class="col-md-6">
              <img src="./assets/img/whyidi/why IDI picture 1.JPG" alt="why IDI picture" class="img-fluid pt-5 pb-2">
              <img id="whyidipic2" src="./assets/img/whyidi/why IDI picture 2.JPG" alt="why IDI picture 2" class="img-fluid">
            </div>
          </div>
        </div>
      </section>


      <section id="experts" >
        <div  class="py-4">

        </div>

        <div  class="py-2">

        </div>
        <div class="container text-center">
          <div  class="py-4">

          </div>

          <div class="row pb-4 py-3">
            <div class="col-md-12 p-0">
              <h2 class="title text-center my-5 "><div class="wow rubberBand" data-wow-duration="2s">Meet The Experts</div></h2>
            </div>
            <div class="col-md-6">
              <div class="panel pl-4 text-left">
                <p>
                    <b>Ms. Pauline Jagdish:</b> Interior Designer/Director/Expert Faculty has a long illustrious career practicing interior design, visual merchandising and art education. Her works has been featured in highly prestigious show rooms, residences and offices in Chennai, Kerala, Bangalore and Dubai. Her creativity is much acclaimed by several publications and TV media. She also served as HOD/Expert Design Faculty in reputed design colleges and institutes. She was awarded for her teaching and organizing skills. She has trained and placed over a hundred interior design students successfully. She has a flair for conducting art camps and workshops.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="pray">
                <img class="img-fluid" src="./assets/img/experts/2.jpg" alt="Pauline" />
              </div>
            </div>
          </div>
<hr class="style-three">
          <div class="row pb-4">
            <div class="col-md-6">
              <div class="panel pl-4 text-left">
                <p>
                    <b>Mr. Jagdish:</b> Creative Art Director/ Fine Artist/Graphic Designer/Illustrator/Art Faculty with decades of practice in top advertising agencies, design houses, international schools and has worked on varied art and design projects. An award winning designer, his works are well appreciated by the clients. He has also exhibited his paintings, graphics and sculptures which were acclaimed by the media. He brings with him years of meticulous research and planning of lessons and execution in detail.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="pray">
                <img src="./assets/img/experts/3.jpg" alt="Jagdish" class="img-fluid" />
              </div>
            </div>
          </div>
<hr class="style-three">
          <div class="row pb-4">
            <div class="col-md-6">
              <div class="panel pl-4 text-left">
                <p>
                    <b>Pranitha Janet:</b> Pranitha Janet is a highly creative and experienced designer, specializing in Home
                    textiles with over 10 years of experience. She is a post-graduate from National Institute of
                    Fashion Technology and a graduate of Fine Arts from Stella Maris, the premier
                    institutes of India. In addition to the skills in all aspects of design from textile and surface
                    design, product design and development to trend research, CAD and visual
                    merchandising she possesses a vast knowledge of various textile techniques, fabrics,
                    weaves and surface ornamentation. She is proficient in CAD using Adobe Photoshop,
                    Illustrator and other design softwares. She has participated in international trade and
                    textile fairs such as Heimtextil, Frankfurt. She has developed and honed a fine aesthetic
                    design sense and color sense by working with international clients and designers from
                    USA, Canada, Europe, South Africa and Dubai. She has also dabbled in graphic
                    design, interior design, leather accessories and Jewellery Design.
                </p>
                <p>She has won the most Innovative Use of Leather Award- Design Collection 2000 at
                    NIFT, New Delhi. She has bagged an award in the all India MIA &quot;My Expression&quot;
                    Jewellery Design Competition by Tanishq 2012.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="pray">
                <img src="./assets/img/experts/4.jpg" class="img-fluid" alt="Pranitha" />
              </div>
            </div>
          </div>

        </div>
      </section>

      <section id="courses" >
        <div  class="py-4">

        </div>

        <div  class="py-2">

        </div>
        <div class="container pb-4">
          <div  class="py-4">

          </div>

          <div class="row py-3">
            <div class="col-md-12 p-0">
                <h2 class="title text-center my-5 text-white"><div class="wow rubberBand" data-wow-duration="2s">Courses</div></h2>
            </div>
            <div class="col-md-12">
              <div id="course-detail">
                <div class="panel px-5 text-left text-white">
                  <p>
                    Interior Design is a creative, dynamic and a versatile profession, hence the course covers every
                    aspect of the process, from designing to execution, project management with specific modules,
                    focusing on drawing, colour theory, space-planning, furniture styles, wall, floor and ceiling
                    finishes, lighting, estimation, site visits, relevant software training and professional practice –
                    all of them integrated in creating successful and winning Interior Designers.
                  </p>
                </div>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-6 py-2">
              <div id="masterdesign" class="card shadow-lg">
                <div class="inner">
                  <img class="card-img-top" style="height: 200px;"
                    src="./assets/img/course/picture for master diploma course.JPG"
                    alt="picture for master diploma course" />
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">Master Diploma in Interior Design</h5>

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Course Duration: 1 Year</li>
                  </ul>

                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 py-2">
              <div id="shortterm" class="card shadow-lg">
                <div class="inner">
                  <img class="card-img-top" style="height: 200px;"
                    src="./assets/img/course/picture for certficate course.JPG"
                    alt="picture for certficate course" />
                </div>

                <div class="card-body text-center">
                  <h5 class="card-title">
                    Short Term Certificate in Interior Design
                  </h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Course Duration: 6 Months</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- coaching -->
      <section id="coaching" >
        <div  class="py-4"></div>

        <div  class="py-2"></div>
        <div class="container">
          <div  class="py-4"> </div>
          <div class="row pb-4 py-3">
            <div class="col-md-12 p-0">
              <h2 class="title text-white text-center my-5 "><div class="wow rubberBand" data-wow-duration="2s">Coaching For Entrance</div></h2>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 py-2">
              <div class="card ml-auto">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <div class="card-body">
                      <p>
                        <img src="./assets/img/course/nata_img.PNG" alt="nata_img" class="img-fluid"
                          style="width: 100%;border-radius: initial;">
                      </p>
                      <h4 class="mb-3 card-title">NATA</h4>
                      <p class="card-text">Course Duration</p>
                      <p class="card-text"> 6 months/ 1 year</p>
                      <a id="buttonHover" class="btn btn-dark text-white btn-sm" onclick="rotateCard(this);"><i class="fa fa fa-redo-alt"></i></a>
                    </div>

                  </div>

                  <div class="flip-card-back">
                    <div class="card-body">
                      <h4 class="card-title">NATA</h4>
                      <p class="card-text">
                        The National Aptitude Test in Architecture (NATA) conducted by the Council of
                        Architects, New Delhi measures the aptitude of the applicant for specific field of study, i.e.,
                        Architecture.
                      </p>
                      <a id="buttonHover" class="btn btn-dark text-white btn-sm" onclick="rotateCard(this);"><i class="fa fa-undo"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 py-2">
              <div class="card mr-auto">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <div class="card-body">
                      <p>
                        <img src="./assets/img/course/NID.png" alt="NID" class="img-fluid">
                      </p>
                      <h4 class="card-title">
                        NID
                      </h4>
                      <p class="card-text">Course Duration</p>
                      <p class="card-text"> 6 months/ 1 year</p>
                      <a id="buttonHover" class="btn btn-dark text-white btn-sm" onclick="rotateCard(this);"><i class="fa fa-redo-alt"></i></a>
                    </div>

                  </div>

                  <div class="flip-card-back">

                    <div class="card-body">
                      <h4 class="card-title">
                        NID
                      </h4>
                      <p class="card-text">
                        National Institute of Design (NID) is an internationally acclaimed design
                        education and research institution for Industrial, Communication, Textiles and IT Integrated
                        (Experiential) Design.
                      </p>
                      <a id="buttonHover" class="btn btn-dark text-white btn-sm" onclick="rotateCard(this);"><i class="fa fa-undo"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 py-2">
              <div class="card mr-auto">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <div class="card-body">
                      <p>
                        <img src="./assets/img/course/niftt-1024x594.png" alt="niftt" class="img-fluid">
                      </p>
                      <h4 class="card-title">
                        NIFT
                      </h4>
                      <p class="card-text">Course Duration</p>
                      <p class="card-text"> 6 months/ 1 year</p>
                      <a id="buttonHover" class="btn btn-dark text-white btn-sm" onclick="rotateCard(this);"><i class="fa fa-redo-alt"></i></a>
                    </div>

                  </div>

                  <div class="flip-card-back">
                    <div class="card-body">
                      <h4 class="card-title">NIFT</h4>
                      <p class="card-text">
                        National Institute of Fashion Technology is the pioneering institute of
                        fashion education in the country and has been in the vanguard of providing professional human
                        resource to the textile and apparel industry.
                      </p>
                      <a id="buttonHover" class="btn btn-dark text-white btn-sm" onclick="rotateCard(this);"><i class="fa fa-undo"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 py-2">
              <div class="card ml-auto">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <div class="card-body">
                      <p>
                        <img
                          src="./assets/img/course/viscomm.JPG"
                          alt="viscomm" class="img-fluid" style="width: 100%;border-radius: initial;">
                      </p>
                      <h4 class="card-title">
                        VISCOMM
                      </h4>
                      <p class="card-text">Course Duration</p>
                      <p class="card-text"> 6 months/ 1 year</p>
                      <a id="buttonHover" class="btn btn-dark text-white btn-sm" onclick="rotateCard(this);"><i class="fa fa-redo-alt"></i></a>
                    </div>

                  </div>

                  <div class="flip-card-back">
                    <div class="card-body">
                      <h4 class="card-title">VISCOMM</h4>
                      <p class="card-text">
                        Visual Communication is a graduate course that specializes in visual ideas
                        and information that can be seen such as signs, typography, drawing, graphic design,
                        illustration, film, script writing, copywriting, Media Management.
                      </p>
                      <a id="buttonHover" class="btn btn-dark text-white btn-sm" onclick="rotateCard(this);"><i class="fa fa-undo"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 pt-4">
              <div id="course-detail">
                  <div class="panel px-5 text-left text-white">
                    <p>All the above institutions conduct entrance examination to get into the admission process.</p>
                    <p>For NATA we at IDI, devised a creative training program that is based on free hand drawing, composition, colour theory, geometrical patterns, perspective principles besides exploring design principles, architectural aptitude.</p>
                    <p>We at IDI, impart extensive learning practices which covers free hand drawing, composition, colour theory, image manipulation, 3D modelling, fashion illustration, thematic presentations, design, typography, logo design and graphic design. All our well designed programs are taught by thorough art and design professionals with years of field experience.</p>
                  </div>
                </div>
          </div>

          </div>
        </div>
      </section>
      <!-- coaching -->

      <section id="portfolio" >
        <div  class="py-4">

        </div>

        <div  class="py-2">

        </div>
        <div class="container">
          <div  class="py-4">

          </div>


          <div class="row pb-4 py-3">
            <div class="col-md-12 p-0">
                <h2 class="title text-center text-white mt-5"><div class="wow rubberBand" data-wow-duration="2s">Our Portfolio</div></h2>
                <marquee><p class="text-white">Creativity is intelligence having fun- Albert Einstein</p></marquee>
            </div>
            <div class="col-md-12">
              <div id="portfolio-carousel" class="owl-carousel owl-theme baguetteBoxTwo">
                <div class="item">
                  <a href="./assets/img/portfolio/Interior view of a jewellery show room.jpg"
                    data-at-450="./assets/img/portfolio/Interior view of a jewellery show room.jpg"
                    data-at-800="./assets/img/portfolio/Interior view of a jewellery show room.jpg"
                    data-at-1366="./assets/img/portfolio/Interior view of a jewellery show room.jpg"
                    data-at-1920="./assets/img/portfolio/Interior view of a jewellery show room.jpg"
                    data-caption="Interior view of a jewellery show room">
                    <img class="d-block img-thumbnail"
                      src="./assets/img/portfolio/Interior view of a jewellery show room.jpg" alt="Interior view of a jewellery show room">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/Interior of a watch show room.jpg"
                    data-at-450="./assets/img/portfolio/Interior of a watch show room.jpg"
                    data-at-800="./assets/img/portfolio/Interior of a watch show room.jpg"
                    data-at-1366="./assets/img/portfolio/Interior of a watch show room.jpg"
                    data-at-1920="./assets/img/portfolio/Interior of a watch show room.jpg"
                    data-caption="Interior of a watch show room">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/Interior of a watch show room.jpg"
                      alt="Interior of a watch show room">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/Interior of a Jewellery show room.jpg"
                    data-at-450="./assets/img/portfolio/Interior of a Jewellery show room.jpg"
                    data-at-800="./assets/img/portfolio/Interior of a Jewellery show room.jpg"
                    data-at-1366="./assets/img/portfolio/Interior of a Jewellery show room.jpg"
                    data-at-1920="./assets/img/portfolio/Interior of a Jewellery show room.jpg"
                    data-caption="Interior of a Jewellery show room">
                    <img class="d-block img-thumbnail"
                      src="./assets/img/portfolio/Interior of a Jewellery show room.jpg" alt="Interior of a Jewellery show room">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/Festival set design.jpg"
                    data-at-450="./assets/img/portfolio/Festival set design.jpg"
                    data-at-800="./assets/img/portfolio/Festival set design.jpg"
                    data-at-1366="./assets/img/portfolio/Festival set design.jpg"
                    data-at-1920="./assets/img/portfolio/Festival set design.jpg" data-caption="Festival set design">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/Festival set design.jpg"
                      alt="Festival set design">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/3D fabrication.jpg"
                    data-at-450="./assets/img/portfolio/3D fabrication.jpg"
                    data-at-800="./assets/img/portfolio/3D fabrication.jpg"
                    data-at-1366="./assets/img/portfolio/3D fabrication.jpg"
                    data-at-1920="./assets/img/portfolio/3D fabrication.jpg" data-caption="3D fabrication">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/3D fabrication.jpg"
                      alt="3D fabrication">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/Window display.jpg"
                    data-at-450="./assets/img/portfolio/Window display.jpg"
                    data-at-800="./assets/img/portfolio/Window display.jpg"
                    data-at-1366="./assets/img/portfolio/Window display.jpg"
                    data-at-1920="./assets/img/portfolio/Window display.jpg" data-caption="Window display">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/Window display.jpg"
                      alt="Window display">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/Window display 2.jpg"
                    data-at-450="./assets/img/portfolio/Window display 2.jpg"
                    data-at-800="./assets/img/portfolio/Window display 2.jpg"
                    data-at-1366="./assets/img/portfolio/Window display 2.jpg"
                    data-at-1920="./assets/img/portfolio/Window display 2.jpg" data-caption="Window display 2">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/Window display 2.jpg"
                      alt="Window display 2">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/Show case fabrication.jpg"
                    data-at-450="./assets/img/portfolio/Show case fabrication.jpg"
                    data-at-800="./assets/img/portfolio/Show case fabrication.jpg"
                    data-at-1366="./assets/img/portfolio/Show case fabrication.jpg"
                    data-at-1920="./assets/img/portfolio/Show case fabrication.jpg"
                    data-caption="Show case fabrication">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/Show case fabrication.jpg"
                      alt="Show case fabrication">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/Dubai- acrylic painting.jpg"
                    data-at-450="./assets/img/portfolio/Dubai- acrylic painting.jpg"
                    data-at-800="./assets/img/portfolio/Dubai- acrylic painting.jpg"
                    data-at-1366="./assets/img/portfolio/Dubai- acrylic painting.jpg"
                    data-at-1920="./assets/img/portfolio/Dubai- acrylic painting.jpg"
                    data-caption="Dubai- acrylic painting">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/Dubai- acrylic painting.jpg"
                      alt="Dubai- acrylic painting">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/Portrait in watercolours.JPG"
                    data-at-450="./assets/img/portfolio/Portrait in watercolours.JPG"
                    data-at-800="./assets/img/portfolio/Portrait in watercolours.JPG"
                    data-at-1366="./assets/img/portfolio/Portrait in watercolours.JPG"
                    data-at-1920="./assets/img/portfolio/Portrait in watercolours.JPG"
                    data-caption="Portrait in watercolours">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/Portrait in watercolours.JPG"
                      alt="Portrait in watercolours">
                  </a>
                </div>
                <div class="item">
                    <a href="./assets/img/portfolio/MSV.jpg"
                      data-at-450="./assets/img/portfolio/MSV.jpg"
                      data-at-800="./assets/img/portfolio/MSV.jpg"
                      data-at-1366="./assets/img/portfolio/MSV.jpg"
                      data-at-1920="./assets/img/portfolio/MSV.jpg"
                      data-caption="Portrait in Acrylics">
                      <img class="d-block img-thumbnail" src="./assets/img/portfolio/MSV.jpg"
                        alt="MSV">
                    </a>
                  </div>
                <div class="item">
                  <a href="./assets/img/portfolio/Design for notebook.png"
                    data-at-450="./assets/img/portfolio/Design for notebook.png"
                    data-at-800="./assets/img/portfolio/Design for notebook.png"
                    data-at-1366="./assets/img/portfolio/Design for notebook.png"
                    data-at-1920="./assets/img/portfolio/Design for notebook.png" data-caption="Design for notebook">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/Design for notebook.png"
                      alt="Design for notebook">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/LnT.jpg" data-at-450="./assets/img/portfolio/LnT.jpg"
                    data-at-800="./assets/img/portfolio/LnT.jpg" data-at-1366="./assets/img/portfolio/LnT.jpg"
                    data-at-1920="./assets/img/portfolio/LnT.jpg" data-caption="LnT">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/LnT.jpg" alt="LnT">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/Digital caricature drawing.jpg"
                    data-at-450="./assets/img/portfolio/Digital caricature drawing.jpg"
                    data-at-800="./assets/img/portfolio/Digital caricature drawing.jpg"
                    data-at-1366="./assets/img/portfolio/Digital caricature drawing.jpg"
                    data-at-1920="./assets/img/portfolio/Digital caricature drawing.jpg"
                    data-caption="Digital caricature drawing">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/Digital caricature drawing.jpg"
                      alt="Digital caricature drawing">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/Caricature drawing in ink.jpg"
                    data-at-450="./assets/img/portfolio/Caricature drawing in ink.jpg"
                    data-at-800="./assets/img/portfolio/Caricature drawing in ink.jpg"
                    data-at-1366="./assets/img/portfolio/Caricature drawing in ink.jpg"
                    data-at-1920="./assets/img/portfolio/Caricature drawing in ink.jpg"
                    data-caption="Caricature drawing in ink">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/Caricature drawing in ink.jpg"
                      alt="Caricature drawing in ink">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/nift.JPG"
                    data-at-450="./assets/img/portfolio/nift.JPG"
                    data-at-800="./assets/img/portfolio/nift.JPG"
                    data-at-1366="./assets/img/portfolio/nift.JPG"
                    data-at-1920="./assets/img/portfolio/nift.JPG"
                    data-caption="Award winning leather garment design- NIFT">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/nift.JPG"
                      alt="nift">
                  </a>
                </div>
                <div class="item">
                  <a href="./assets/img/portfolio/Tanishq.JPG"
                    data-at-450="./assets/img/portfolio/Tanishq.JPG"
                    data-at-800="./assets/img/portfolio/Tanishq.JPG"
                    data-at-1366="./assets/img/portfolio/Tanishq.JPG"
                    data-at-1920="./assets/img/portfolio/Tanishq.JPG"
                    data-caption="All India Best jewellery design Award..Mia- Tanishq">
                    <img class="d-block img-thumbnail" src="./assets/img/portfolio/Tanishq.JPG"
                      alt="Tanishq">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="testimonials" >
        <div  class="py-4">

        </div>

        <div  class="py-2">

        </div>
        <div class="container">
          <div  class="py-4">

          </div>


          <div class="row pb-4 py-3">
            <div class="col-md-12 p-0">
              <h2 class="title text-center text-white my-5 "><div class="wow rubberBand" data-wow-duration="2s">Testimonials</div></h2>
            </div>

            <div class="col-md-12 col-lg-12 d-md-flex">
              <div class="col-md-5 col-lg-5 d-md-flex">
                <div class="col-md-8 col-lg-8 pt-2 d-md-flex">
                  <a href="./assets/img/testimonials/1.jpg" data-lightbox-type="image" data-lightbox="photos"><img
                      src="./assets/img/testimonials/1.jpg" alt="1" class="img-fluid"></a>
                </div>
                <div class="col-md-4 col-lg-4 pt-2 d-md-flex">
                  <a href="./assets/img/testimonials/2.jpg" data-lightbox-type="image" data-lightbox="photos"> <img
                      src="./assets/img/testimonials/2.jpg" alt="2" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 v d-md-flex">
                <div class="col-md-6 col-lg-6 pt-2 d-md-flex">
                  <a href="./assets/img/testimonials/3.jpg" data-lightbox-type="image" data-lightbox="photos"> <img
                      src="./assets/img/testimonials/3.jpg" alt="3" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-lg-3 pt-2 d-md-flex">
                  <a href="./assets/img/testimonials/4.jpg" data-lightbox-type="image" data-lightbox="photos"> <img
                      src="./assets/img/testimonials/4.jpg" alt="4" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-lg-3 pt-2 d-md-flex">
                  <a href="./assets/img/testimonials/9.jpg" data-lightbox-type="image" data-lightbox="photos"> <img
                      src="./assets/img/testimonials/9.jpg" alt="9" class="img-fluid"></a>
                </div>
              </div>
            </div>

          </div>

          <div class="row p-4">

            <div class="col-md-12 col-lg-12 d-md-flex">
              <div class="col-md-4 col-lg-4 d-md-flex">
                <div class="col-md-6 col-lg-6 pt-2 d-md-flex">
                  <a href="./assets/img/testimonials/10.jpg" data-lightbox-type="image" data-lightbox="photos"> <img
                      src="./assets/img/testimonials/10.jpg" alt="10" class="img-fluid"></a>
                </div>

                <div class="col-md-6 col-lg-6 pt-2 d-md-flex">
                  <a href="./assets/img/testimonials/11.jpg" data-lightbox-type="image" data-lightbox="photos"> <img
                      src="./assets/img/testimonials/11.jpg" alt="11" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-8 col-lg-8 d-md-flex">

                <div class="col-md-3 col-lg-3 pt-2 d-md-flex">
                  <a href="./assets/img/testimonials/6.jpg" data-lightbox-type="image" data-lightbox="photos"> <img
                      src="./assets/img/testimonials/6.jpg" alt="6" class="img-fluid"></a>
                </div>
                <div class="col-md-6 col-lg-6 pt-2 d-md-flex">
                  <a href="./assets/img/testimonials/8.jpg" data-lightbox-type="image" data-lightbox="photos"> <img
                      src="./assets/img/testimonials/8.jpg" alt="8" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-lg-3 pt-2 d-md-flex">
                  <a href="./assets/img/testimonials/5.jpg" data-lightbox-type="image" data-lightbox="photos"> <img
                      src="./assets/img/testimonials/5.jpg" alt="5" class="img-fluid"></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section id="events" >
          <div  class="py-4">

          </div>

          <div  class="py-2">

          </div>
          <div class="container">
            <div  class="py-4">

            </div>


            <div class="row pb-4 py-3">
              <div class="col-md-12 p-0">
                  <h2 class="title text-center text-white mt-5"><div class="wow rubberBand" data-wow-duration="2s">Events</div></h2>
                  <h4 class="text-center text-white mt-4"></h4>
              </div>
              <div class="col-md-12">
                <div id="events-carousel" class="owl-carousel owl-theme baguetteBoxTwo">
               <?php 
			   $dir ="./assets/img/events/*" ;
			  
					$images=glob($dir);
					$i=0;
					$act='active';
					$file_name="./assets/captions/events.txt";
					$file = fopen($file_name,"r");

						while(! feof($file))
						  {
							$line =  fgets($file);
							list($img, $cap ) = split('~', $line);
						  $caption[$img]=$cap;
						  }

						fclose($file);
					
					foreach($images as $image):
					
					?>
                  <div class="item">
                    <a href="<?php echo $image?>"
                      data-at-450="<?php echo $image?>"
                      data-at-800="<?php echo $image?>"
                      data-at-1366="<?php echo $image?>"
                      data-at-1920="<?php echo $image?>"
					  data-caption="<?php echo $caption[$image]?>">
                      <img class="d-block img-thumbnail"
                        src="<?php echo $image?>" alt="Acrylic painting workshop">
                    </a>
                  </div>
                <?php endforeach?>
                </div>
              </div>
            </div>
          </div>
        </section>

      <section id="register" >
        <div  class="py-4">

        </div>

        <div  class="py-2">

        </div>
        <div class="container">
          <div  class="py-4">

          </div>
          <div class="row pb-4 py-3">
            <div class="col-md-12 p-0">
                <h2 class="title text-center text-white my-5"><div class="wow rubberBand" data-wow-duration="2s">Register</div></h2>
            </div>
            <div class="col-md-12">
              <div class="card text-center">
                <div id="serverStatus" class="card-body text-center">
                  <form id="registerform" class="needs-validation" method="POST" action="/register.php">
                    <div class="form-row text-left">
                      <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" id="name" name= "name" class="form-control" placeholder="Name*"
                          pattern="^.+$" required>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="date-picker">Date of Birth</label>
                        <input type="text" class="form-control" id="date-picker" name="dob" placeholder="Date of Birth*" required>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="Age">Age</label>
                        <input type="text" class="form-control" id="Age" name="age" placeholder="Age*" pattern="^\d{2}$" required>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="" selected disabled>Please select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-row text-left">
                        <label for="address1">Street Name</label>
                      <div class="form-group col-md-12"><input type="text" class="form-control" name="address1" id="address1"
                          pattern="^.{10,}$" placeholder="Street Name*(10 char min)" required></div>
                    </div>

                    <div class="form-row text-left">
                        <label for="Landmark">Address</label>
                      <div class="form-group col-md-12"><input type="text" class="form-control" name="address2" id="Landmark"
                          placeholder="Address*(10 char min)" pattern="^.{10,}$" required></div>
                    </div>

                    <div class="form-row text-left">
                      <div class="form-group col-md-6">
                          <label for="qualification">Educational qualifications</label>
                        <input type="text" class="form-control" name="qualification" id="qualification"
                          placeholder="Educational qualifications*" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="yos">Year of study / Completion</label>
                        <input type="text" class="form-control" name="yos" id="yos" placeholder="Year of study / Completion*"
                          pattern="^\d{4}$" required>
                      </div>
                    </div>

                    <div class="form-row text-left">
                      <div class="form-group col-md-6">
                          <label for="mobile">Mobile No</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No*"
                          pattern="^\d{8,11}$" required>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                        placeholder="Email Id*" pattern="^.*@.*\..*$" required></div>
                    </div>

                    <div class="form-row text-left">
                      <div class="form-group col-md-6">
                          <label for="nop">Name of parent/spouse/guardian</label>
                        <input type="text" name="nop" class="form-control" id="nop"
                          placeholder="Name of parent/spouse/guardian*" required></div>
                      <div class="form-group col-md-6">
                          <label for="occupation">Occupation</label>
                        <input type="text" name="occupation" class="form-control" id="occupation"
                        placeholder="Occupation*" required></div>
                    </div>

                    <div class="form-row text-left">
                      <div class="form-group col-md-12">
                          <label for="parentAddress">Address</label>
                        <input type="text" class="form-control" name="parentaddress" id="parentAddress"
                          placeholder="Address*" required></div>
                    </div>

                    <div class="form-row text-left">
                        <div class="form-group col-md-6">
                            <label for="parentContact">Contact</label>
                          <input type="text" name="parentcontact" class="form-control" id="parentContact"
                          placeholder="Contact*" pattern="^\d{8,12}$" required></div>
                      <div class="form-group col-md-6">
                          <label for="courses">Course opted for</label>
                          <select class="form-control" name="courses" id="courses">
                              <option value="" selected disabled>Please select</option>
                              <option value="Master Diploma in Interior Design">Master Diploma in Interior Design</option>
                              <option value="Short Term Certificate in Interior Design">Short Term Certificate in Interior Design</option>
                              <option disabled="disabled">Coaching for Entrance</option>
                              <option value="NATA">NATA</option>
                              <option value="NID">NID</option>
                              <option value="NIFT">NIFT</option>
                              <option value="VISCOMM">VISCOMM</option>
                            </select>
                      </div>
                    </div>


                    <button type="submit" class="btn btn-lg btn-light">Register</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact">
        <div  class="py-4">

        </div>

        <div  class="py-2">

        </div>
        <div class="container">
          <div  class="py-4">

          </div>

          <div class="row pb-4 py-3">
            <div class="col-md-12 p-0">
                <h2 class="title text-center text-white my-5"><div class="wow rubberBand" data-wow-duration="2s">Contact Us</div></h2>
            </div>
            <div class="col-md-12 shadow">
              <div class="card text-center">
                <div class="card-body">
                  <div class="row p-0">
                    <div class="col-md-4">
                      <button class="bg-white px-3 py-2 rounded text-dark mb-2 d-inline-block" data-toggle="modal"
                        data-target="#exampleModalCenter1"><i class="fa fa-map-marker"></i></button>
                      <p>Ram Mansion, 3 C, III Floor, 37I/I-A, Pantheon Road, Egmore, Chennai - 600 008, Tamilnadu, India</p>

                    </div>

                    <div class="col-md-4">
                      <a href="tel:+919361324488" class="bg-white px-3 py-2 rounded text-dark mb-2 d-inline-block"><i
                          class="fa fa-phone"></i></a>
                      <p>+91-9361324488, &nbsp;<br>+91-7299886107</p>
                    </div>

                    <div class="col-md-4">
                      <a href="mailto:innovisioninstitute@gmail.com" class="bg-white px-3 py-2 rounded text-dark mb-2 d-inline-block"><i
                          class="fas fa-envelope"></i></a>
                      <p>innovisioninstitute@gmail.com</p>
                    </div>

                  </div>
                </div>
                <div class="card-footer" >
                  <button class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">Enquiry</button>
                </div>
              </div>
            </div>

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Enquiry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div id="contactstatus">
                    <form id="contactform" method="POST" action="./contact.php" class="needs-validation">
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <input type="text" class="form-control" name="name" id="Name" placeholder="Name" pattern="^.{1,}$"
                            required>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email Id*"
                            pattern="^.*@.*\..*$" required>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile*" pattern="^\d{8,11}$"
                            required>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <input type="text" class="form-control" name="message" id="message" placeholder="Message">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Send to us</button>
                    </form>
                    </div>
                  </div>
                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div> -->
                </div>
              </div>
            </div>



            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
              aria-labelledby="Modal-large-demo-label" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-dark" id="Modal-large-demo-label">Map</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31094.807776055215!2d80.22228625023665!3d13.045156419820593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526612c5cefea1%3A0xfc880a13c76a5359!2sRam%20Mansion!5e0!3m2!1sen!2sin!4v1569287220392!5m2!1sen!2sin"
                      width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="yes"></iframe>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  </main>

  <!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

  <!-- Footer Elements -->
  <div class="container-fluid m-0">

    <!-- Grid row-->
    <div class="row text-white text-center">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic" href="https://www.facebook.com/Innovision-design-institute-107181497339381/" target="_blank">
            <i class="fab fa-facebook-f fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Whatsapp -->
          <a class="li-ic" href="https://api.whatsapp.com/send?phone=919361324488" target="_blank">
            <i class="fab fa-whatsapp fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic" href="https://www.instagram.com/idichennai/" target="_blank">
            <i class="fab fa-instagram fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Twitter-->
          <a class="ins-ic" href="https://twitter.com/idichennai" target="_blank">
            <i class="fab fa-twitter fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--youtube-->
          <a class="pin-ic" href="https://www.youtube.com/channel/UCQi4GXxrUpxZfJ8FVCkSLDA?view_as=subscriber" target="_blank">
            <i class="fab fa-youtube fa-lg text-white fa-2x"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright bg-dark text-white py-2 text-center">© <span id="year"></span> Copyright
    <p>IDI - innovision design institute</p>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="./assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
  <!-- <script src="./OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
  <script src="./assets/js/custom.js"></script>
  <script src="assets/js/wow.min.js"></script>
   <script>
       $(function () {
           var wow = new WOW({
               animateClass: 'animated',
               offset: 100,
               callback: function (box) {
                   console.log(box.tagName);
               }
           });
           wow.init();
       });
   </script>
</body>

</html>