@extends('layouts.main')

@section('section')

  <section>
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-12 text-center mb-5">
          <h1 class="page-title">Tentang</h1>
        </div>
      </div>

      <div class="row mb-5">

        <div class="d-md-flex post-entry-2 half">
          <a href="#" class="me-4 thumbnail">
            <img src="{{ asset('img') }}/post-landscape-2.jpg" alt="" class="img-fluid">
          </a>
          <div class="ps-md-5 mt-4 mt-md-0">
            <div class="post-meta mt-4">Sejarah</div>
            <h2 class="mb-4 display-4">PERCASI JATENG</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
            <p>Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>
          </div>
        </div>

        <div class="d-md-flex post-entry-2 half mt-5">
          <a href="#" class="me-4 thumbnail order-2">
            <img src="{{ asset('img') }}/post-landscape-1.jpg" alt="" class="img-fluid">
          </a>
          <div class="pe-md-5 mt-4 mt-md-0">
            <div class="post-meta mt-4">Visi &amp; Misi</div>
            <h2 class="mb-4 display-4">Visi &amp; Misi</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
            <p>Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <section id="contact" class="contact mb-5">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-12 text-center mb-5">
          <h1 class="page-title">Contact us</h1>
        </div>
      </div>

      <div class="row gy-4">

        <div class="col-md-4">
          <div class="info-item">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <address>A108 Adam Street, NY 535022, USA</address>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-4">
          <div class="info-item info-item-borders">
            <i class="bi bi-phone"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-4">
          <div class="info-item">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@example.com">info@example.com</a></p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="form mt-5">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div><!-- End Contact Form -->

    </div>
  </section>
    
@endsection