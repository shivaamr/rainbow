@extends('layouts.app')

@section('title','Pet Shop')

@section('content')


<body>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>Welcome to Rainbow</br> Ceramics</h1>
      <p style="color: #fff;font-size: 18px;">We “Rainbow Ceramics” Established in the year 2017 and engaged in Manufacturing an </br>excellent quality range of Ceramic & Terracotta Pots and Planter,</br> for indoor & Out Door Applications. </p>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="{{ url('/allcategories')}}" class="btn-get-started scrollto">View Products</a>
      </div>
    </div>
  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

          <div class="row">
            <div class="col-xl-4 col-lg-5" data-aos="fade-up">

             <img class="d-block ph_img" src="assets/img/img1.jpg" alt="First slide" style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.8)";>


            </div>
            <div class="col-xl-8 col-lg-7 d-flex">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-receipt"></i>
                      <h4>Unique Designs</h4>
                      <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-cube-alt"></i>
                      <h4>Good Quality</h4>
                      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-images"></i>
                      <h4>Customer Needss</h4>
                      <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End Why Us Section -->
    <!-- ======= Featured Products ======= -->
    <section id="about" class="" style="background: #e5e5e5;  padding: 60px;margin-top: 24px;">
        <div class="container">
















          <div class="row">

            <div class="col-xl-12 col-lg-7 d-flex">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                    <h4 data-aos="fade-up" style="margin-bottom: 20px;">Featured Products</h4>

                </div>
                <div class="row">

                    @if($featuredProducts)

                    @foreach($featuredProducts as $productItem)

                    <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box mt-4 mt-xl-0">
                            <img src="{{ asset($productItem->productImages[0]->image)}}" style="padding:10px;width:100px;height:100px;border-radius: 7px;
                            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5);
                            margin-bottom: 15px;" alt=" {{ $productItem->name}}" >

                          <p class="product-name">
                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                {{ $productItem->name}}
                                </a>
                            </p>

                          <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                          <span class="selling-price">&#8377; {{ $productItem->price }}/-</span>
                        </div>
                      </div>
                      @endforeach

                    </div>
                    @else
                    <div class="col-12"><h4>sorry no products for this</h4></div>
                    @endif
                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End Featured Section -->






    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">

          <div class="row">
              <h4 data-aos="fade-up">About us</h4>
            <div class="col-xl-5 col-lg-6 justify-content-center align-items-stretch position-relative" data-aos="fade-right">

          <h3 data-aos="fade-up" style="padding:50px 40px;text-align:justify;font-size:21px;">We "Rainbow Ceramics" Established in the year 2017 and engaged in Manufacturing an excellent quality range of Ceramic & Terracotta Pots and Planter, for indoor & Out Door Applications. </h3>
                   <div class="icon-box" data-aos="fade-up">
                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                <h4 class="title"><a href="">Our Range of products includes</a></h4>
                    <ul data-aos="fade-up"  class="description"  style="padding-top:12px;">
              <li><h4 style="font-size:20px;"><i class="bi bi-patch-plus" ></i><span style="padding-left:12px;">Bonsai Pots</span></h4></li>
              <li><h4 style="font-size:20px;"><i class="bi bi-patch-plus" ></i><span style="padding-left:12px;">Succulents Pots</span></h4></li>
              <li><h4 style="font-size:20px;"><i class="bi bi-patch-plus" ></i><span style="padding-left:12px;">Tabletop Pots & Planters</span></h4></li>
              <li><h4 style="font-size:20px;"><i class="bi bi-patch-plus" ></i><span style="padding-left:12px;">Hanging Pots</span></h4></li>
              <li><h4 style="font-size:20px;"><i class="bi bi-patch-plus" ></i><span style="padding-left:12px;">Designer Pots</span></h4></li>
              <li><h4 style="font-size:20px;"><i class="bi bi-patch-plus" ></i><span style="padding-left:12px;">Animal & Fancy Planters</span></h4></li>

              </ul>
              </div>



            </div>

            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center px-lg-5">






              <div class="icon-box" data-aos="fade-up">
                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                <h4 class="title"><a href="">Product Size</a></h4>
                <p class="description">We offer product size from 2 Inch to 24 Inch and also customise as per client design / shape / size etc.</p>
              </div>

              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bx-gift"></i></div>
                <h4 class="title"><a href="">In-House facilities </a></h4>
                <p class="description">We have In-House facilities for printing on Pots & planters like Branding/ Logo Printing for Corporate companies and also Various occasion like Wedding Anniversary,
                Birth day Return Gifts, House Warming Ceremony etc.</p>
              </div>

              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-atom"></i></div>
                <h4 class="title"><a href=""></a></h4>
                <p class="description">We have a team of highly qualified and skilled professionals to handle our business-related tasks. Our understanding in this domain has always supported us to build best in class products at better prices with no compromise on superiority.  Apart from this, our ability to maintain timelines and quality in the assortment has assisted us in positioning our name in the list of top-notch companies of the industry</p>
              </div>

            </div>
          </div>

        </div>
      </section><!-- End About Section -->





   <!-- ======= Values Section ======= -->
   <section id="values" class="values">
    <div class="container">

      <div class="row">

             <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
          <div class="card" style="background-image: url(assets/img/values-2.jpg);">
            <div class="card-body">
              <h5 class="card-title"><a href="">Bonsai Pots</a></h5>
              <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
              <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>

        </div>
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="card" style="background-image: url(assets/img/values-1.jpg);">
            <div class="card-body">
              <h5 class="card-title"><a href="">Tabletop Pots & Planters</a></h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
              <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card" style="background-image: url(assets/img/values-3.jpg);">
            <div class="card-body">
              <h5 class="card-title"><a href="">Hanging Pots</a></h5>
              <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
              <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card" style="background-image: url(assets/img/values-4.jpg);">
            <div class="card-body">
              <h5 class="card-title"><a href="">Animal & Fancy Planters</a></h5>
              <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
              <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Values Section -->

   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-up">Contact</h2>
        <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>



      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
        <div class="col-xl-9 col-lg-12 mt-4">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->




  </main><!-- End #main -->



</body>

</html>



@endsection
