<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/head.php"); ?>
</head>

<body>
    <!-- header -->
    <?php include("include/header.php"); ?>
    <!-- header -->
    <!-- hero banner -->
    <div class="hero-banner">
      <button class="slick-arrow home-prev">
        <svg class="icon" width="24" height="39">
          <use xlink:href="./assets/images/icons/svgsprit.svg#chevron-left"></use>
        </svg>
      </button>
      <button class="slick-arrow home-next">
        <svg class="icon" width="24" height="39">
          <use xlink:href="./assets/images/icons/svgsprit.svg#chevron-right"></use>
        </svg>
      </button>
      <div class="hero-slider">
        <div class="banner-slide" style="background-image: url(./assets/images/home-banner.jpg);">
          <div class="container">
            <div class="banner-info mx-auto text-center">
              <span class="sub-title">- Welcome To Azpiretech -</span>
              <h1 class="banner-title">Best Digital Startup Agency</h1>
              <div class="btn-wrap">
                <a href="#" class="btn btn-lg btn-secondary">Discover More</a>
              </div>
            </div>
          </div>
        </div>    
        <div class="banner-slide" style="background-image: url(./assets/images/home-banner.jpg);">
          <div class="container">
            <div class="banner-info mx-auto text-center">
              <span class="sub-title">- Welcome To Azpiretech -</span>
              <h1 class="banner-title">Best Digital Startup Agency</h1>
              <div class="btn-wrap">
                <a href="#" class="btn btn-lg btn-secondary">Discover More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- hero banner -->

    <!-- about -->
    <div class="section home about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="title">
              <div class="sub-title" data-aos="fade-up">About Us</div>
              <h2 class="h2" data-aos="fade-up" data-aos-delay="100">Welcome to our digital agency</h2>
            </div>
            <div class="content-box" data-aos="fade-up" data-aos-delay="200">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              <div class="btn-wrap">
                <a href="#" class="btn btn-secondary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="img-box">
              <img src="./assets/images/about-primary.jpg" data-aos="fade-down-left" alt="primary img">
              <div class="secondary" data-aos="fade-down-left" data-aos-delay="200">
                <img src="./assets/images/about-secondary.jpg"  alt="primary img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>       
    <!-- about -->

    <!-- service -->
    <div class="section home service">
      <div class="title-section" style="background-image: url(./assets/images/service-pattern.png);">
        <div class="container">
          <div class="title-wrap d-flex">
            <div class="title">
              <div class="sub-title" data-aos="fade-up">We Provide digital services</div>
              <h2 class="h2" data-aos="fade-up" data-aos-delay="100">Services We're offering</h2>
            </div>
            <div class="btn-wrap" data-aos="fade-up">
              <a href="#" class="btn btn-sm btn-primary">View All</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="service-list">
          <ul class="row">
            <div class="col-lg-3">
              <div class="service-box">
                <div class="service-icon">
                  <img src="./assets/images/service-1.png" alt="service">
                </div>
                <h3>Website Design and Development</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque ..</p>
                <div class="btn-link-wrap">
                  <a href="#" class="btn-link primary">Read More <svg class="icon" width="16" height="11">
                    <use xlink:href="./assets/images/icons/svgsprit.svg#arrow-right"></use>
                  </svg></a>
                </div>
              </div>
            </div>
          </ul>
        </div>
        <div class="btn-wrap text-center" data-aos="fade-up">
          <a href="#" class="btn btn-sm btn-secondary">View All</a>
        </div>
      </div>
    </div>   
    <!-- service -->   

    <!--footer-->
    <?php include("include/footer.php"); ?>
    <!--footer-->
</body>
</html>