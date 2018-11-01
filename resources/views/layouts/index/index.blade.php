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
      <div style="background: rgba(255,255,255,.6); width: 100%; height: 700px;" class="slide__content center">
        <div class="slide__content--headings center">
          <h2 style="color: black; margin-top: 250px;" class="animated center" data-animation-in="fadeInUp">Financial Advisory</h2>
          <p style="color: black; padding: 30px 30px 30px 30px;" class="animated center" data-animation-in="fadeInUp" data-delay-in="0.3">We help you manage your resources, understand your finances, address governance essential to running the business and we go beyond to assist our clients with all aspects of their business. We provide our depth of experience, training, resources and skills and tailor them to your needs.</p>
          
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="slide__img">
        <img src="" alt="" data-lazy="images/building4.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
      <div style="background: rgba(255,255,255,.6); width: 100%; height: 700px;" class="slide__content center">
        <div class="slide__content--headings center">
          <h2 style="color: black; margin-top: 250px;" class="animated center" data-animation-in="fadeInUp">Financial Advisory</h2>
          <p style="color: black; padding: 30px 30px 30px 30px;" class="animated center" data-animation-in="fadeInUp" data-delay-in="0.3">We help you manage your resources, understand your finances, address governance essential to running the business and we go beyond to assist our clients with all aspects of their business. We provide our depth of experience, training, resources and skills and tailor them to your needs.</p>
          
        </div>
      </div>

  </div>

</section>
  <!--================End Home Banner Area =================-->

  <!--================Welcome Area =================-->
  <section id="aboutUs" style="background-color: #DDD;" class="welcome_area p_120">
    <div class="container">
      <div class="row welcome_inner">
        <div class="col-lg-6">
          <div class="welcome_text">
            <h4 style=" color: black;">About Us</h4>
            <p style="text-align: justify; color: black;">SOUTHPOINTE CAPITAL provides advisory services for companies looking for financial expertise. We work in virtually every industrial sector and in every province in Canada. SOUTHPOINTE CAPITAL has a wide range of clients and is able to provide services to all firms. Our large client base gives us a strong insight into the operation of all business. Vancouver professional financial advisory from business valuation through prospecting for buyers and preparing the company for sale, we can ensure that you present your business in the best possible light.</p>
            <div class="row">
              <div class="col-md-4">
                <div data-aos="zoom-out" style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="wel_item">
                  <i class="lnr lnr-database"></i>
                  <h4 style="color: black;" color: black;">20+</h4>
                  <p style=" color: black;">Years of Experience</p>
                </div>
              </div>
              <div data-aos="zoom-out" class="col-md-4">
                <div style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="wel_item">
                  <i class="lnr lnr-book"></i>
                  <h4 style=" color: black;">1465</h4>
                  <p style=" color: black;">Total Projects</p>
                </div>
              </div>
              <div data-aos="zoom-out" class="col-md-4">
                <div style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="wel_item">
                  <i class="lnr lnr-users"></i>
                  <h4 style=" color: black;">3965</h4>
                  <p style=" color: black;">Total Trainees</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="border-radius: 2%;" class="col-lg-6">
          <div class="tools_expert">
            <h3 style="">Expertise</h3>
            <div class="skill_main">
          <div data-aos="zoom-out" class="skill_item">
            <h4 style=" color: black;">Financials <span class="counter">100</span>%</h4>
            <div style="padding-top: 4px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div data-aos="zoom-out" class="skill_item">
            <h4 style=" color: black;">Valuations <span class="counter">100</span>%</h4>
            <div style="padding-top: 4px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div data-aos="zoom-out" class="skill_item">
            <h4 style=" color: black;">Companies Adquisitions <span class="counter">100</span>%</h4>
            <div style="padding-top: 4px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div data-aos="zoom-out" class="skill_item">
            <h4 style=" color: black;">Due Diligence <span class="counter">100</span>%</h4>
            <div style="padding-top: 4px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div data-aos="zoom-out" class="skill_item">
            <h4 style=" color: black;">Accounting and Corporate Services <span class="counter">100</span>%</h4>
            <div style="padding-top: 4px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="progress">
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
  <section style="background-color: #DDD;" class="feature_area p_120">
    <div class="container">
      <div class="main_title">
        <h2>Services</h2>
        <p style=" color: black;">We have a history of providing sound advice.</p>
      </div>
      <div class="feature_inner row">
        <div data-aos="zoom-out" class="col-lg-4 col-md-6">
          <div style="height: 550px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="feature_item">
            <i class="flaticon-city hvr-float"></i>
            <h4>Financial Advisory</h4>
            <p style="text-align: justify; color: black;">Addressing the corporate finance needs of entrepreneurial firms.</p>
          </div>
        </div>
        <div data-aos="zoom-out" class="col-lg-4 col-md-6">
          <div style="height: 550px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="feature_item">
            <i class="flaticon-city hvr-float"></i>
            <h4>Corporate Services</h4>
            <p style="text-align: justify; color: black;">Cost effective, results-based accounting, financial reporting, and corporate services.<br />Standardized solutions offer a only a glimpse of what we can do for your business. To find out how we can address your unique needs, please contact us here.</p>
          </div>
        </div>
        <div data-aos="zoom-out" class="col-lg-4 col-md-6">
          <div style="height: 550px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="feature_item">
            <i class="flaticon-city hvr-float"></i>
            <h4>Acquisition</h4>
            <p style="text-align: justify; color: black;">We will work with you to identify potential acquisitions, conduct due diligence, participate in negotiations and structuring and assist in sourcing funds to complete the deal.</p>
          </div>
        </div>
        <div data-aos="zoom-out" class="col-lg-4 col-md-6">
          <div style="height: 550px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="feature_item">
            <i class="flaticon-city hvr-float"></i>
            <h4>Valuations</h4>
            <p style="text-align: justify; color: black;">We provide valuation services for business interests relating to ownership succession, public transactions, shareholder disputes, estate planning, and income tax.</p>
          </div>
        </div>
        <div data-aos="zoom-out" class="col-lg-4 col-md-6">
          <div style="height: 550px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="feature_item">
            <i class="flaticon-city hvr-float"></i>
            <h4>Capital Requirements & Restructuring</h4>
            <p style="text-align: justify; color: black;">Whether you’re looking to maximize cash flow, renegotiate your bank credit facility, reorganize your corporation, find an optional capital structure or raise additional capital through private placements, initial public offerings, or reverse mergers, our experienced professionals will work alongside you to achieve your personal and corporate goals.</p>
          </div>
        </div>
        <div data-aos="zoom-out" class="col-lg-4 col-md-6">
          <div style="height: 550px; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="feature_item">
            <i class="flaticon-city hvr-float"></i>
            <h4>Accounting and Corporate Services</h4>
            <p style="text-align: justify; color: black;">We thrive on bringing financial information together – numbers, books, and plans for the future. trust us to pull together your financial results, present them professionally in easily readable formats, and give you the specific information you need to make smart business decisions, fast.</p>
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
        <h2>NEWS</h2>
      </div>
      <div style="margin-top: 50px;" class="row latest_blog_inner">
        <div data-aos="zoom-out" class="col-lg-4">
          <div class="l_blog_item">
            <div class="l_blog_img">
              <img style="width: 300px; height: 200px;" class="img-fluid" src="images/blog/1.png" alt="">
            </div>
            <div class="l_blog_text">
              <div class="date">
                <a href="http://southpointecapital.com/news/2018/10/29/tech-meltdown-pushes-stocks-to-edge-of-correction-markets-wrap/">29 October, 2018  |  By SOUTHPOINTECAPITAL</a>
              </div>
              <a href="http://southpointecapital.com/news/2018/10/29/tech-meltdown-pushes-stocks-to-edge-of-correction-markets-wrap/"><h4>Tech Meltdown Pushes Stocks to Edge of...</h4></a>
              <p>A rout in technology shares deepened Friday, threatening to push the S&P 500 Index into corrective territory along with the Nasdaq Composite...</p>
            </div>
          </div>
        </div>
        <div data-aos="zoom-out" class="col-lg-4">
          <div class="l_blog_item">
            <div class="l_blog_img">
              <img style="width: 300px; height: 200px;" class="img-fluid" src="images/blog/2.png" alt="">
            </div>
            <div class="l_blog_text">
              <div class="date">
                <a href="http://southpointecapital.com/news/2018/10/29/u-s-economy-charged-ahead-in-the-third-quarter/">29 October, 2018  |  By SOUTHPOINTECAPITAL</a>
              </div>
              <a href="http://southpointecapital.com/news/2018/10/29/u-s-economy-charged-ahead-in-the-third-quarter/"><h4>U.S. Economy Charged Ahead in the Third...</h4></a>
              <p>The American economy barreled ahead in the third quarter as consumers stepped up and spent more, keeping it on track for the best...</p>
            </div>
          </div>
        </div>
        <div data-aos="zoom-out" class="col-lg-4">
          <div class="l_blog_item">
            <div class="l_blog_img">
              <img style="width: 300px; height: 200px;" class="img-fluid" src="images/blog/3.jpg" alt="">
            </div>
            <div class="l_blog_text">
              <div class="date">
                <a href="http://southpointecapital.com/news/2018/10/29/new-usmca-trade-pact-leaves-u-s-businesses-in-mexico-at-the-mercy-of-countrys-notoriously-corrupt-courts/">29 October, 2018  |  By SOUTHPOINTECAPITAL</a>
              </div>
              <a href="http://southpointecapital.com/news/2018/10/29/new-usmca-trade-pact-leaves-u-s-businesses-in-mexico-at-the-mercy-of-countrys-notoriously-corrupt-courts/"><h4>New USMCA trade pact leaves U.S....</h4></a>
              <p>The new deal ends key legal protections that the Trump administration had seen as a subsidy for U.S. companies to invest in Mexico...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Latest Blog Area =================-->

  <!--================Contact Area =================-->
  <section id="contacts" style="background-color: #DDD;" class="testimonials_area p_120">
    <div class="container">
      <div class="main_title">
        <h2>CONTACT US</h2>
    </div>
  <div class="row">
    <div style="margin-top: 60px;" class="col-md-6">

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

      <div data-aos="zoom-out" style="margin-top:20px; text-align: left;">
          <a ng-click="send();" style="color: white; box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" id="send1" class="banner_btn">Send</a>
      </div>

    </div>
    <div class="col-md-6">
    
      <div class="row">

        <div style="margin-top: 80px; color: black;" class="col-md-12">

          <div class="row">

            <div class="col-md-12">
              For further inquiries, please contact us by filling out the form to the left in full or via the information below and we will respond promptly. We look forward to hearing from you.
              <br><br>
              <b style=" color: black;">SOUTHPOINTE CAPITAL Services</b> 

            </div>

          </div>

          <div class="row">

              <div class="col-md-12">
                  <br />
                  101 South Reid Street #307<br />
                  Sioux Falls, SD 57103<br /><br />

                  2727 Paces Ferry Road SE #750<br />
                  Atlanta, GA 30339<br /><br />

              </div>

          </div>

          <div class="row">

            <div class="col-md-12">

              info@southpointecapital.com

            </div>

          </div>
          
        </div>
          
      </div>

    </div>
  </div>
    </div>
  </section>
  <!--================End Testimonials Area =================-->

        

    @stop
