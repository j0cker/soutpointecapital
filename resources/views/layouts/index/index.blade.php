@extends('layouts.index.master')

  {{-- lang html tag --}}

  @section('lang'){{$lang}}@stop

  {{-- Title Head --}}

  @section('title'){{$title}}@stop

  {{-- Metatag Head --}}

  @section('Content-Type','text/html; charset=UTF-8')
  @section('x-ua-compatible','ie=edge')
  @section('keywords','')
  @section('description','')
  @section('facebookUrl','')
  @section('facebookImage','')
  @section('viewport','width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1')
  @section('idiomaLang','es-mx')
  @section('urlLang','http://southpointecapital.com/')

  <!--Menu Transparente-->
  @section('menuCSS','css/menu/menu.css?v='.cache("js_version_number").'')

  {{-- Angular Controller --}}

  @section('controller','index')

  {{-- Body --}}

  @section('content')

  <!--================Home Banner Area =================-->
  <section>

    <div class="slider stick-dots">

      <div class="slide">
        <div class="slide__img">
          <img src="" alt="" data-lazy="images/building1.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
        </div>
        <div style="" class="slide__content center layer_transparent">
          <div class="slide__content--headings center">

            <div class="container-title">
                <div class="helper-title-slider">
                    <div style="background: rgba(255,255,255,.5);" class="content-title">

                      <h2 style="animation-duration: 0.5s; padding-top: 25px; color: black;" class="animated center titles" data-animation-in="fadeInUp">Who we are</h2>
                      <p style="color: black; padding: 30px 30px 30px 30px; " class="animated center subtitles" data-animation-in="fadeInUp" data-delay-in="0.3">A financial Advisory Company, which operates from Canada, United States and United Kingdom to ensure the best service for our clients. Thanks to very qualified employees and many years of experience, we are the right choice as your financial partner.</p>
              
                    </div>
                </div>
            </div>

          </div>
        </div>
      </div>

      <div class="slide">
        <div class="slide__img">
          <img src="" alt="" data-lazy="images/building4.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
        </div>
        <div style="" class="slide__content center layer_transparent">
          <div class="slide__content--headings center">

            <div class="container-title">
                <div class="helper-title-slider">
                    <div style="background: rgba(255,255,255,.5);" class="content-title">

                      <h2 style="animation-duration: 0.5s; padding-top: 25px; color: black;" class="animated center titles" data-animation-in="fadeInUp">What we do</h2>
                      <p style="color: black; padding: 30px 30px 30px 30px; " class="animated center subtitles" data-animation-in="fadeInUp" data-delay-in="0.3">We help you manage your resources, understand your finances, address governance essentials in running the business, and go above and beyond  in assisting our clients with all aspects of their business.</p>
              
                    </div>
                </div>
            </div>

          </div>
        </div>
      </div>

      <div class="slide">
        <div class="slide__img">
          <img src="" alt="" data-lazy="images/blue1.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
        </div>
        <div style="" class="slide__content center layer_transparent">
          <div class="slide__content--headings center">

            <div class="container-title">
                <div class="helper-title-slider">
                    <div style="background: rgba(255,255,255,.5);" class="content-title">

                      <h2 style="animation-duration: 0.5s; padding-top: 25px; color: black;" class="animated center titles" data-animation-in="fadeInUp">Why we are the best</h2>
                      <p style="color: black; padding: 30px 30px 30px 30px; " class="animated center subtitles" data-animation-in="fadeInUp" data-delay-in="0.3">We provide not only services, but a real support in our clients' daily business. We deliver what we promise and keep the client in the center of our attention. We would be happy to welcome you as our new client.</p>
              
                    </div>
                </div>
            </div>

          </div>
        </div>
      </div>

      <div class="slide">
        <div class="slide__img">
          <img src="" alt="" data-lazy="images/building10.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
        </div>
        <div style="" class="slide__content center layer_transparent">
          <div style="" class="slide__content--headings center">

            <div class="container-title">
                <div class="helper-title-slider">
                    <div style="background: rgba(255,255,255,.5);" class="content-title">

                      <h2 style="animation-duration: 0.5s; padding-top: 25px; color: black;" class="animated center titles" data-animation-in="fadeInUp">Our value</h2>
                      <p style="color: black; padding: 30px 30px 30px 30px; " class="animated center subtitles" data-animation-in="fadeInUp" data-delay-in="0.3">We deliver professional services and fully understand our clients and their needs. We value our clients and we are confident that together we can achieve any goal.</p>
              
                    </div>
                </div>
            </div>

          </div>
        </div>
      </div>

    </div>
    
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Welcome Area =================-->
  <section id="aboutUs" style="background-color: #DDD;" class="welcome_area p_120">
    <div class="container">
      <div class="row welcome_inner">
        <div class="col-lg-12">


          <div class="row center">

            <h2 style="font-family: 'Heebo', sans-serif; font-size: 36px; color: #222222; font-weight: bold; margin-bottom: 30px; text-transform: uppercase; color: black; text-align: center;" class="center">About Us</h2>

            <div style="display: inline-block; text-align: center; margin-bottom: 0; padding-bottom: 20px;" data-aos="zoom-out" class="col-xs-12 col-sm-12 col-md-4 center">
              <div style="display: inline-block; text-align: center; width: 150px; height: 182px; background-color: white; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="wel_item">
                <i style="text-align: center;" class="lnr lnr-database"></i>
                <h4 style="color: black; text-align: center;">20+</h4>
                <p style="color: black; text-align: center;">Years of Experience</p>
              </div>
            </div>
            <div style="display: inline-block; text-align: center; margin-bottom: 0; padding-bottom: 20px;" data-aos="zoom-out" class="col-xs-12 col-sm-12 col-md-4 center">
              <div style="display: inline-block; text-align: center; width: 150px; height: 182px; background-color: white !important; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="wel_item">
                <i style="text-align: center;" class="lnr lnr-book"></i>
                <h4 style="color: black; text-align: center;">1465</h4>
                <p style="color: black; text-align: center;">Total Projects</p>
              </div>
            </div>
            <div style="display: inline-block; text-align: center; margin-bottom: 0; padding-bottom: 20px;" data-aos="zoom-out" class="col-xs-12 col-sm-12 col-md-4 center">
              <div style="display: inline-block; text-align: center; width: 150px; height: 182px; background-color: white; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="wel_item">
                <i style="text-align: center;" class="lnr lnr-users"></i>
                <h4 style="color: black; text-align: center;">3965</h4>
                <p style="color: black; text-align: center;">Total Trainees</p>
              </div>
            </div>
          </div>

          <div style="margin-top: 60px;" class="col-lg-12">
            <p style="text-align: justify; color: black; margin-bottom: 18px; padding-bottom: 0;">
              Southpointe Capital has years of experience providing advisory services for companies looking for financial expertise. We work in virtually every industrial sector and in every province in Canada. 
            </p>
            <p style="text-align: justify; color: black; margin-bottom: 18px; padding-bottom: 0;">
              Southpointe Capital has a wide range of clients and is able to provide services to firms of all structures and sizes. Our large client base gives us a strong insight into the operation of all types of businesses.
            </p>
            <p style="text-align: justify; color: black; margin-bottom: 18px; padding-bottom: 0;">
              We offer professional financial expertise ranging from business valuation through prospecting for buyers and preparing the company for sale or public listing, and we can ensure that you present your business in the best possible light.
            </p>

          </div>
        </div>
        <div style="padding-bottom: 0px !important; border-radius: 2%; text-align: center;" class="col-lg-12">
          <div style="padding-bottom: 0px !important; text-align: center;" class="tools_expert center">
            <h3 style="text-align: center;">Expertise</h3>
            <div class="skill_main">
          <div data-aos="zoom-out" class="skill_item">
            <h4 style="margin-top: 40px; text-align: center; color: black;">Financials <span class="counter">100</span>%</h4>
            <div style="padding-top: 5px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div data-aos="zoom-out" class="skill_item">
            <h4 style="text-align: center; color: black;">Valuations <span class="counter">100</span>%</h4>
            <div style="padding-top: 5px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div data-aos="zoom-out" class="skill_item">
            <h4 style="text-align: center; color: black;">Companies Adquisitions <span class="counter">100</span>%</h4>
            <div style="padding-top: 5px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div data-aos="zoom-out" class="skill_item">
            <h4 style="text-align: center; color: black;">Due Diligence <span class="counter">100</span>%</h4>
            <div style="padding-top: 5px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div data-aos="zoom-out" class="skill_item">
            <h4 style="text-align: center; color: black;">Accounting and Corporate Services <span class="counter">100</span>%</h4>
            <div style="padding-top: 5px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Welcome Area =================-->

  <!--================Feature Area =================-->
  <section id="services" style="background-color: #DDD;" class="feature_area p_120">
    <div class="container">
      <div class="main_title">
        <h2>Services</h2>
        <p style=" color: black;">We have a history of providing sound advice.</p>
      </div>

      <div style="text-align: center;" class="feature_inner row">

        <div data-aos="zoom-out" class="col-lg-4 col-md-6 center">
          <div style="" class="feature_item center cards_columns">
            <i class="lnr lnr-briefcase hvr-float"></i>
            <h4>Financial Advisory</h4>
            <p style="text-align: left; color: black;">Addressing the corporate finance needs of entrepreneurial firms.</p>
          </div>
        </div>
        <div data-aos="zoom-out" class="col-lg-4 col-md-6 center">
          <div style="" class="feature_item center cards_columns">
            <i class="flaticon-city hvr-float"></i>
            <h4>Corporate Services</h4>
            <p style="text-align: left; color: black;">Cost effective, results-based accounting, financial reporting, and corporate services.<br />Standardized solutions offer a only a glimpse of what we can do for your business. To find out how we can address your unique needs, please contact us here.</p>
          </div>
        </div>
        <div data-aos="zoom-out" class="col-lg-4 col-md-6 center">
          <div style="" class="feature_item center cards_columns">
            <i class="fa fa-trophy hvr-float"></i>
            <h4>Acquisition</h4>
            <p style="text-align: left; color: black;">We will work with you to identify potential acquisitions, conduct due diligence, participate in negotiations and structuring and assist in sourcing funds to complete the deal.</p>
          </div>
        </div>
        <div data-aos="zoom-out" class="col-lg-4 col-md-6 center">
          <div style="" class="feature_item center cards_columns">
            <i class="fa fa-money hvr-float"></i>
            <h4>Valuations</h4>
            <p style="text-align: left; color: black;">We provide valuation services for business interests relating to ownership succession, public transactions, shareholder disputes, estate planning, and income tax.</p>
          </div>
        </div>
        <div data-aos="zoom-out" class="col-lg-4 col-md-6 center">
          <div style="" class="feature_item center cards_columns">
            <i class="fa fa-area-chart hvr-float"></i>
            <h4>Capital Requirements & Restructuring</h4>
            <p style="text-align: left; color: black;">Whether you’re looking to maximize cash flow, renegotiate your bank credit facility, reorganize your corporation, find an optional capital structure or raise additional capital through private placements, initial public offerings, or reverse mergers.</p>
          </div>
        </div>
        <div data-aos="zoom-out" class="col-lg-4 col-md-6 center">
          <div style="" class="feature_item center cards_columns">
            <i class="lnr lnr-apartment hvr-float"></i>
            <h4>Accounting and Corporate Services</h4>
            <p style="text-align: left; color: black;">We thrive on bringing financial information together – numbers, books, and plans for the future. trust us to pull together your financial results, present them professionally in easily readable formats, and give you the specific information you need to make smart business decisions, fast.</p>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!--================End Feature Area =================-->

  <!--================Projects Area =================
  <section class="projects_area p_120">
    <div class="container">
      <div class="main_title">
    <h2>Our Recent Completed Projects</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
  </div>
      <div class="projects_fillter">
    <ul class="filter list">
      <li class="active" data-filter="*"><a href="#">All Categories</a></li>
      <li data-filter=".brand"><a href="#">Branding</a></li>
      <li data-filter=".work"><a href="#">Creative Work </a></li>
      <li data-filter=".web"><a href="#">Web Design</a></li>
    </ul>
  </div>
  <div class="projects_inner row">
    <div class="col-lg-4 col-sm-6 brand web">
      <div class="projects_item">
        <img class="img-fluid" src="images/projects-1.jpg" alt="">
        <div class="projects_text">
          <a href="portfolio-details.html"><h4>3D Helmet Design</h4></a>
          <p>Client Project</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 brand work">
      <div class="projects_item">
        <img class="img-fluid" src="images/projects-2.jpg" alt="">
        <div class="projects_text">
          <a href="portfolio-details.html"><h4>3D Helmet Design</h4></a>
          <p>Client Project</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 work">
      <div class="projects_item">
        <img class="img-fluid" src="images/projects-3.jpg" alt="">
        <div class="projects_text">
          <a href="portfolio-details.html"><h4>3D Helmet Design</h4></a>
          <p>Client Project</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 brand web">
      <div class="projects_item">
        <img class="img-fluid" src="images/projects-4.jpg" alt="">
        <div class="projects_text">
          <a href="portfolio-details.html"><h4>3D Helmet Design</h4></a>
          <p>Client Project</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 brand work">
      <div class="projects_item">
        <img class="img-fluid" src="images/projects-5.jpg" alt="">
        <div class="projects_text">
          <a href="portfolio-details.html"><h4>3D Helmet Design</h4></a>
          <p>Client Project</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 brand work web">
      <div class="projects_item">
        <img class="img-fluid" src="images/projects-6.jpg" alt="">
        <div class="projects_text">
          <a href="portfolio-details.html"><h4>3D Helmet Design</h4></a>
          <p>Client Project</p>
        </div>
      </div>
    </div>
  </div>
    </div>
  </section>
  -->
  <!--================End Projects Area =================-->


  <!--================Latest Blog Area =================-->
  <section style="background-color: #DDD;" class="latest_blog_area p_120">

    <div class="container">

      <div class="main_title">
        <h2>RECENT NEWS</h2>
      </div>

      <div style="margin-top: 50px;" class="row latest_blog_inner">

        <div data-aos="zoom-out" class="col-lg-4">

          <div style="text-align: center;" class="l_blog_item center">
            
            <div class="l_blog_text">
              <a href="http://southpointecapital.com/news/2018/11/20/annual-pace-of-housing-starts-picked-up-in-october-topping-economists-expectations/">
                <h4>Annual pace of housing starts picked up...</h4>
              </a>
            </div>

            <div style="text-align: center;" class="l_blog_img center">
              <a href="http://southpointecapital.com/news/2018/11/20/annual-pace-of-housing-starts-picked-up-in-october-topping-economists-expectations/">
                <img style="display: inline-block; width: 300px; height: 200px;" class="img-fluid" src="images/blog/4.jpg" alt="">
              </a>
            </div>

            <div style="text-align: center;" class="l_blog_text center">
              <div style="text-align: center;" class="date center">
                <a href="http://southpointecapital.com/news/2018/11/20/annual-pace-of-housing-starts-picked-up-in-october-topping-economists-expectations/">20 November, 2018</a>
              </div>
              <p style="text-align: left;">The increase came as the annual pace of urban starts climbed by 8.6 per cent in October to 191,964 units....</p>
            </div>

          </div>

        </div>

        <div data-aos="zoom-out" class="col-lg-4">

          <div style="text-align: center;" class="l_blog_item center">
            
            <div class="l_blog_text">
                <a href="http://southpointecapital.com/news/2018/11/20/canadian-business-groups-have-called-on-prime-minister-justin-trudeau-to-address-weakening-competitiveness-canadian-prime-minister-justin-trudeau-meets-with-chinese-premier-li-keqiang-before-the-cana/">
                <h4>‘Be more entrepreneurial’: Chance for...</h4></a>
            </div>

            <div style="text-align: center;" class="l_blog_img center">
              <a href="http://southpointecapital.com/news/2018/11/20/canadian-business-groups-have-called-on-prime-minister-justin-trudeau-to-address-weakening-competitiveness-canadian-prime-minister-justin-trudeau-meets-with-chinese-premier-li-keqiang-before-the-cana/">
                <img style="display: inline-block; width: 300px; height: 200px;" class="img-fluid" src="images/blog/5.jpg" alt="">
              </a>
            </div>

            <div class="l_blog_text">
              <div style="text-align: center;" class="date center">
                <a href="http://southpointecapital.com/news/2018/11/20/canadian-business-groups-have-called-on-prime-minister-justin-trudeau-to-address-weakening-competitiveness-canadian-prime-minister-justin-trudeau-meets-with-chinese-premier-li-keqiang-before-the-cana/">20 November, 2018</a>
              </div>
              <p style="text-align: left;">Canada should take advantage of fraught relations between the U.S. and nations including China to lure capital....</p>
            </div>

          </div>

        </div>

        <div data-aos="zoom-out" class="col-lg-4">

          <div style="text-align: center;" class="l_blog_item center">
            
            <div class="l_blog_text">
              <a href="http://southpointecapital.com/news/2018/11/20/fear-the-cloud-theres-lots-of-room-to-pull-back-taking-stock/">
              <h4>Fear the Cloud. There’s Lots of Room ...</h4></a>
            </div>

            <div style="text-align: center;" class="l_blog_img center">
              <a href="http://southpointecapital.com/news/2018/11/20/fear-the-cloud-theres-lots-of-room-to-pull-back-taking-stock/">
                <img style="display: inline-block; width: 300px; height: 200px;" class="img-fluid" src="images/blog/6.jpg" alt="">
              </a>
            </div>

            <div class="l_blog_text">
              <div style="text-align: center;" class="date center">
                <a href="http://southpointecapital.com/news/2018/11/20/fear-the-cloud-theres-lots-of-room-to-pull-back-taking-stock/">20 November, 2018</a>
              </div>
              <p style="text-align: left;">The selling remains vicious and the bounces are listless....</p>
            </div>

          </div>

        </div>

      </div>

    </div>

  </section>
  <!--================End Latest Blog Area =================-->

  <!--================Contact Area =================-->
  <section id="contacts" style="background-color: #DDD; padding-bottom: 120px;" class="testimonials_area p_120">
    <div class="container">
      <div class="main_title">
        <h2>CONTACT US</h2>
      </div>
      <div class="row">

        <div class="col-md-12">
        
          <div class="row">

            <div style="margin-top: 80px; color: black;" class="col-md-12">

              <div class="row">

                <div class="col-md-12">
                  For further inquiries, please contact us by filling out the form to the left in full or via the information below and we will respond promptly. We look forward to hearing from you.
                  
                </div>

              </div>
              
            </div>
              
          </div>

        </div>

        <div style="margin-top: 60px;" class="col-md-12">

          <div class="row">

            <div class="col-md-1">

            </div>

            <div class="col-md-10">

              <div data-aos="zoom-out" class="form-group">
                <label style="color: black;" for="InputName">Name:</label>
                <input style="color: black; padding-left: 10px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); background: #FFFFFF;" type="text" class="form-control" id="name" placeholder="">
              </div>

              <div data-aos="zoom-out" class="form-group">
                <label style="color: black;" for="InputName">Email:</label>
                <input style="color: black; padding-left: 10px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); background: #FFFFFF;" type="email" class="form-control" id="email" placeholder="">
              </div>

              <div data-aos="zoom-out" class="form-group">
                <label style="color: black;" for="InputName">Message:</label>
                <textarea style="color: black; padding-left: 10px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3); height: 200px; background: #FFFFFF;" class="form-control" id="body" placeholder=""></textarea>
              </div>

              <div style="margin-top:20px; text-align: left;">
                  <a ng-click="send();" style="cursor: pointer; color: white; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" id="send1" class="banner_btn">Send</a>
              </div>

            </div>

            <div class="col-md-1">

            </div>

          </div>

        </div>

        <div style="margin-top: 60px;" class="col-md-12">

          <div class="row">

            <div class="col-md-8">
              
              <iframe id="map1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2891.8401511567577!2d-96.72574938450568!3d43.54737387912515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x878eb5a373e20fcd%3A0x8894a90c7d73099b!2s101+S+Reid+St+%23307%2C+Sioux+Falls%2C+SD+57103%2C+EE.+UU.!5e0!3m2!1ses-419!2smx!4v1544053020893" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

              <iframe id="map2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.9084155205783!2d-84.47596238478984!3d33.86625108065691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f510646939b3f9%3A0x91d8a4bac3becbf4!2s2727+Paces+Ferry+Rd+SE+%23750%2C+Atlanta%2C+GA+30339%2C+EE.+UU.!5e0!3m2!1ses-419!2smx!4v1544053070819" style="display: none;" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

              <iframe id="map3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.907909745984!2d-0.12578628422974847!3d51.51490547963637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ccabd74e61%3A0x9f541e2bfa56e4dd!2s71+Shelton+St%2C+London+WC2H+9BP%2C+Reino+Unido!5e0!3m2!1ses-419!2smx!4v1544053103273" style="display: none;" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>

            <div style="margin-top: 100px; text-align: center;" class="col-md-4 center">
              
            <a ng-click="map(1)" style="cursor: pointer; text-align: center;">101 South Reid Street #307<br> Sioux Falls, SD 57103</a><br><br>

            <a ng-click="map(2)" style="cursor: pointer; text-align: center;">2727 Paces Ferry Road SE #750<br> Atlanta, GA 30339</a><br><br>

            <a ng-click="map(3)" style="cursor: pointer; text-align: center;">71-75 Shelton Street, Covent Garden,<br> London, England, WC2H 9JQ</a><br>

            </div>

          </div>

        </div>
        
      </div>
    </div>
  </section>
  <!--================End Testimonials Area =================-->

        

    @stop
