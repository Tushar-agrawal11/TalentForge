<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Creative Studio landing page.">
    <meta name="author" content="Devcrud">
    <title>Knowledge Hub</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
        
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('vendors/themify-icons/css/themify-icons.css')}}">

    <!-- Bootstrap + Creative Studio main styles -->
    <link rel="stylesheet" href="{{ asset('css/creative-studio.css')}}">

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-icons.css')}}" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
  <a href="/book">Click to download books</a>    
    <!-- Page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-lg navbar-dark" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('imgs/logo.png')}}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#details">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timeline">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#dsa">DSA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#dev">Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary btn-sm ml-lg-3" href="components.html"> Register </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Page Navigation -->

  
    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h6 class="subtitle">Lorem Ipsum Dolor Sit Amet</h6>
            <h1 class="title">Knowledge Hub</h1>
            <div class="buttons text-center">
                <a href="#service" class="btn btn-primary rounded w-lg btn-lg my-1">Learn</a>
                <a href="#contact" class="btn btn-outline-light rounded w-lg btn-lg my-1">Practice</a>
            </div>              
        </div>      
    </header>
    <!-- End Of Page Header -->

    <!-- Box -->
    <div class="box text-center">
        <div class="box-item">
            <i class="ti-vector"></i>
            <h6 class="box-title">Data Structure & Algorithm</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis excepturi, repellat esse laborum explicabo quia.</p>
        </div>
        <div class="box-item">
            <i class="ti-filter"></i>
            <h6 class="box-title">Development</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis excepturi, repellat esse laborum explicabo quia.</p>
        </div>
        <div class="box-item">
            <i class="ti-mobile"></i>
            <h6 class="box-title">Interview Preparation</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis excepturi, repellat esse laborum explicabo quia.</p>
        </div>
    </div>
    <!-- End of Box -->

    <!-- About Section -->
    <section id="details">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-4">
                    <img src="{{ asset('imgs/detailsImg1.jpg')}}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page" class="w-100 img-thumbnail mb-3">
                </div>
                <div class="col-md-7 col-lg-8">
                    <h6 class="section-subtitle mb-0">IT Companies And</h6>
                    <h6 class="section-title mb-3">Why To Prepare ?</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente cupiditate quas, amet harum perferendis minus, cum dolorum obcaecati iste aspernatur voluptatum aut.</p>
                    <p>Cum laudantium unde nemo doloribus eligendi quodarum ea vitae dicta. Accusantium vero, ea? Alias, atque libero. Id, ut harum. </p>
                    <p>consectetur adipisicing elit. Omnis quidem, quos iure a dolorum illum culpa quia nemo soluta, ratione harum beatae minus doloribus consectetur! Similique tempora sunt doloribus molestias.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Section -->

    <!-- About Section with bg -->
    <section class="has-bg-img py-md">
        <div class="container text-center">
            <h6 class="section-subtitle">Get Placed In</h6>
            <h1 class="section-title mb-6">Top Product Based Company.</h1>
            <div class="widget mb-4">
                <div class="widget-item">
                    <i class="ti-facebook"></i>
                    <h4>Facebook</h4>
                </div>
                <div class="widget-item">
                    <i class="ti-apple"></i>
                    <h4>Apple</h4>
                </div>
                <div class="widget-item">
                    <i class="ti-microsoft"></i>
                    <h4>Microsoft</h4>
                </div>
                <div class="widget-item">
                    <i class="ti-google"></i>
                    <h4>Google</h4>
                </div>
                <div class="widget-item">
                    <i class="ti-linkedin"></i>
                    <h4>LinkedIn</h4>
                </div>

            </div>
        </div>
    </section>
    <!-- End Of About Sectoin -->

<!-- TimeLine -->
<!-- <div class="ag-timeline-block">
  <div class="ag-timeline_title-box ">
    <h6 class="section-subtitle">Some Text</h6>
    <h1 class="section-title ">Cracking The Code</h1>
  </div> -->
  <section id="timeline">
    <div class="container text-center">
            <h6 class="section-subtitle">Some Text</h6>
            <h1 class="section-title mb-6">Cracking The Code </h1>
        </div>
    <div class="ag-format-container">
      <div class="js-timeline ag-timeline">
        <div class="js-timeline_line ag-timeline_line">
          <div class="js-timeline_line-progress ag-timeline_line-progress"></div>
        </div>
        <div class="ag-timeline_list">
          <div class="js-timeline_item ag-timeline_item">
            <div class="ag-timeline-card_box">
              <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                <div class="ag-timeline-card_point">01</div>
              </div>
              <div class="ag-timeline-card_meta-box">
                <div class="ag-timeline-card_meta">Learn A Language</div>
              </div>
            </div>
            <div class="ag-timeline-card_item" >
              <div class="ag-timeline-card_inner">
                <div class="ag-timeline-card_img-box">
                  <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-13.png" class="ag-timeline-card_img" width="640" height="360" />
                </div>
                <div class="ag-timeline-card_info">
                  <div class="ag-timeline-card_title">Learn A Language</div>
                  <div class="ag-timeline-card_desc">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                    eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                    montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                    pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
                    vel, aliquet nec, vulputate eget, arcu.
                  </div>
                </div>
              </div>
              <div class="ag-timeline-card_arrow"></div>
            </div>
          </div>

          <div class="js-timeline_item ag-timeline_item" id="dsa">
            <div class="ag-timeline-card_box">
              <div class="ag-timeline-card_meta-box">
                <div class="ag-timeline-card_meta">Learn Data Structure & Algorithm</div>
              </div>
              <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                <div class="ag-timeline-card_point">02</div>
              </div>
            </div>
            <div class="ag-timeline-card_item" >
              <div class="ag-timeline-card_inner">
                <div class="ag-timeline-card_img-box">
                  <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-12.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                </div>
                <div class="ag-timeline-card_info">
                  <div class="ag-timeline-card_title">Learn Data Structure & Algorithm</div>
                  <div class="ag-timeline-card_desc">
                    Donec pede justo, fringilla
                    vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                    venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer
                    tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                    tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                    Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                    nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                  </div>
                </div>
              </div>
              <div class="ag-timeline-card_arrow"></div>
            </div>
          </div>

          <div class="js-timeline_item ag-timeline_item" id="dev">
            <div class="ag-timeline-card_box">
              <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                <div class="ag-timeline-card_point">03</div>
              </div>
              <div class="ag-timeline-card_meta-box">
                <div class="ag-timeline-card_meta">Learn Development</div>
              </div>
            </div>
            <div class="ag-timeline-card_item">
              <div class="ag-timeline-card_inner">
                <div class="ag-timeline-card_img-box">
                  <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-11.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                </div>
                <div class="ag-timeline-card_info">
                  <div class="ag-timeline-card_title">Learn Development</div>
                  <div class="ag-timeline-card_desc">
                    Aenean imperdiet. Etiam ultricies
                    nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                    Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
                    adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                    hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae
                    sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget
                    eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                  </div>
                </div>
              </div>
              <div class="ag-timeline-card_arrow"></div>
            </div>
          </div>

          <div class="js-timeline_item ag-timeline_item">
            <div class="ag-timeline-card_box">
              <div class="ag-timeline-card_meta-box">
                <div class="ag-timeline-card_meta">Interview Prep</div>
              </div>
              <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                <div class="ag-timeline-card_point">04</div>
              </div>
            </div>
            <div class="ag-timeline-card_item">
              <div class="ag-timeline-card_inner">
                <div class="ag-timeline-card_img-box">
                  <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-10.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                </div>
                <div class="ag-timeline-card_info">
                  <div class="ag-timeline-card_title">Interview Prep</div>
                  <div class="ag-timeline-card_desc">
                    Cum sociis natoque penatibus et magnis dis parturient
                    montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                    pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
                    vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                    venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer
                    tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                  </div>
                </div>
              </div>
              <div class="ag-timeline-card_arrow"></div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- </div> -->
<!-- TimeLine End -->




    <!-- Video Section -->
    <section class="has-bg-img py-lg">
        <div class="container text-center">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary play-control" data-toggle="modal" data-target="#exampleModalCenter">
              <i class="ti-control-play" ></i>
            </button>
            <h6 class="section-title mt-4">A Day In A Life Of Software Engineer. Watch Video</h6>

        </div>
    </section>
    <!-- End of Video Section -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/LQ1-F3OsX4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- end of modal -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="contact-card">
                <div class="infos">
                    <h6 class="section-subtitle">Get Here</h6>
                    <h6 class="section-title mb-4">Contact Us</h6>

                    <div class="item">
                        <i class="ti-location-pin"></i>
                        <div class="">
                            <h5>Location</h5>
                            <p> 12345 Fake ST NoWhere AB Country</p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-mobile"></i>
                        <div>
                            <h5>Phone Number</h5>
                            <p>(123) 456-7890</p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-email"></i>
                        <div class="mb-0">
                            <h5>Email Address</h5>
                            <p>info@website.com</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="ti-world"></i>
                        <div class="mb-0">
                            <h5>example.com</h5>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <h6 class="section-subtitle">Available 24/7</h6>
                    <h6 class="section-title mb-4">Get In Touch</h6>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <textarea name="contact-message" id="" cols="30" rows="7" class="form-control form-control-lg" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-3">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

    <section class="has-bg-img py-0">
        <div class="container">
            <div class="footer">
                <div class="footer-lists">
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">ABOUT US</h6>
                        </li>
                        <li class="list-body">
                            <a href="#" class="logo">
                                <img src="{{ asset('imgs/logo.png')}}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                                <h6>Knowledge Hub</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae nobis fugit maxime deleniti minus optio accusamus, quam maiores explicabo sunt.</p> 
                            <p class="mt-3">
                                Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a class="d-inline text-primary" href="http://www.devcrud.com">DevCRUD</a>
                            </p>                   
                        </li>
                    </ul>
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">USEFUL LINKS</h6>
                        </li>
                        <li class="list-body">
                            <div class="row">
                                <div class="col">
                                    <a href="#about">About</a>
                                    <a href="#service">Service</a>
                                    <a href="#portfolio">Portfolio</a>
                                    <a href="#testmonail">Testimonial</a>
                                </div>
                                <div class="col">
                                    <a href="#team">Team</a>
                                    <a href="#blog">Blog</a>
                                    <a href="#">Faq</a>
                                    <a href="#">Privacy Policy</a>                  
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">CONTACT INFO</h6>
                        </li>
                        <li class="list-body">
                            <p>Contact us and we'll get back to you within 24 hours.</p>
                            <p><i class="ti-location-pin"></i> 12345 Fake ST NoWhere AB Country</p>
                            <p><i class="ti-email"></i>  info@website.com</p>
                            <div class="social-links">
                                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                                <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                                <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                                <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                                <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>    
        </div>
    </section>


    <!-- core  -->
    <script src="{{ asset('vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap affix -->
    <script src="{{ asset('vendors/bootstrap/bootstrap.affix.js')}}"></script>

    <!-- Creative Studio js -->
    <script src="{{ asset('js/creative-studio.js')}}"></script>

</body>
</html>
