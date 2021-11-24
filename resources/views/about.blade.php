<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GoMobile</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}">
</head>
<body>
<header class="with-background">
                <div class="top-nav container">
                    <div class="top-nav-left">
                        <div class="logo">Ecommerce</div>
                        {{ menu('main', 'partials.menus.main') }}
                    </div>
                    <div class="top-nav-right">
                        @include('partials.menus.main-right')
                    </div>
                </div> <!-- end top-nav -->
            </header>
   <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span>About Us</span></h3>
          <p>GoMobile mission is to be the most customer-centric online shopping destination in Africa, and has built a foundation on the simple concept that the customer comes first.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="https://dcatalog.com/wp-content/uploads/2017/06/eecommerce.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Learn more about our values</h3>
            <p class="font-italic">
            The GoMobile family lives and breathes by a set of core values that represent how we think and how we operate on a daily basis.
            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Diversity & inclusion</h5>
                  <p>We strive for a dirvese, inclusive and safe environment for all our people.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Simplify & do it</h5>
                  <p>Male it easier for the customer, if you see a problem find a solution</p>
                </div>
              </li>
            </ul>
            <p>
            We want to know our customers. We want to be a part of their lives. We want each experience they have with us to leave them with a smile, whether it’s a confirmation email, an added detail on the packaging or even the return of an unwanted or damaged order.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    @include('partials.footer')
</body>
</html>