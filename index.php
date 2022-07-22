<?php
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

// Instagram API
$clientId = '3167924910117506';
$accessToken = 'IGQVJYWl92enYzSldTdElscUtDVFc2TVRmRTNCVURtakQ0ck01QTF4cFJDUHZAiYTc5dHpfNFZAmdUV4RTlfSm5uRnpVeGpzZAWpWUnJjOVRjbjZAQSXkwSU9DUDRIbXVESTA0elpITEJmY09FZAkQ5bWJsQwZDZD';

// latest IG Post
$result = get_CURL('https://graph.instagram.com/me/media?fields=id,media_type,media_url,username,timestamp&access_token=IGQVJYWl92enYzSldTdElscUtDVFc2TVRmRTNCVURtakQ0ck01QTF4cFJDUHZAiYTc5dHpfNFZAmdUV4RTlfSm5uRnpVeGpzZAWpWUnJjOVRjbjZAQSXkwSU9DUDRIbXVESTA0elpITEJmY09FZAkQ5bWJsQwZDZD');

$photos = [];
foreach ($result['data'] as $photo){
  $photos[] = $photo['media_url'];
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project SemHas</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" alt="Landio logo">
      </a>

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">

          <li>
            <a href="#hero" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#Product" class="navbar-link">Product</a>
          </li>

          <li>
            <a href="#features" class="navbar-link">Features</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link">Contact Us</a>
          </li>

        </ul>

        <!-- <div class="header-actions">
          <a href="#" class="header-action-link">Log in</a>

          <a href="#" class="header-action-link">Register</a>
        </div> -->
      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - HERO
      -->

      <section class="hero" id="hero">
        <div class="container">

          <div class="hero-content">
            <h1 class="h1 hero-title">Selamat Datang di UMKM kami</h1>

            <p class="hero-text">
              A creative & modern landing page with Landio template & We love make things amazing.
            </p>
          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" alt="Hero image">
          </figure>

        </div>
      </section>



      <!-- 
        - BLOG
      -->

      <section class="Product" id="Product">
        <div class="container ">

          <h2 class="h2 section-title">Product News</h2>

          <p class="section-text">
            Et harum quidem rerum facilis est et expedita distinctio nam libero tempore cum soluta nobis eligendi
            cumque.
          </p>

        
          <ul class="blog-list">
        

            <li>
             
                <div class="blog-card">
              <?php foreach ($photos as $photo) : ?>
                <figure class="blog-banner">
                  
                <img src="<?= $photo; ?>"" alt="Best Product">
                </figure>

                <a href="#" class="blog-link-btn">
                  <span>Learn More</span>

                  <ion-icon name="chevron-forward-outline"></ion-icon>
                  
                  </a>
                  <?php endforeach; ?>
              </div>
            
              </div>
              
              
              </li>
              
              </div>
            
              
       
        
      </section>
      





      <!-- 
        - CONTACT
      -->

      <section class="contact" id="contact">
        <div class="container">

          <h2 class="h2 section-title">Contact Us</h2>

          <p class="section-text">
            Et harum quidem rerum facilis est et expedita distinctio nam libero tempore cum soluta nobis eligendi
            cumque.
          </p>

          <div class="contact-wrapper">

            <form action="" class="contact-form">

              <div class="wrapper-flex">

                <div class="input-wrapper">
                  <label for="name">Name*</label>

                  <input type="text" name="name" id="name" required placeholder="Enter Your Name" class="input-field">
                </div>

                <div class="input-wrapper">
                  <label for="emai">Email*</label>

                  <input type="text" name="email" id="email" required placeholder="Enter Your Email"
                    class="input-field">
                </div>

              </div>

              <label for="message">Message*</label>

              <textarea name="message" id="message" required placeholder="Type Your Message"
                class="input-field"></textarea>

              <button type="submit" class="btn btn-primary">
                <span>Send Message</span>

                <ion-icon name="paper-plane-outline"></ion-icon>
              </button>

            </form>

            <ul class="contact-list">

              <li>
                <a href="mailto:support@website.com" class="contact-link">
                  <ion-icon name="mail-outline"></ion-icon>

                  <span>: support@website.com</span>
                </a>
              </li>

              <li>
                <a href="#" class="contact-link">
                  <ion-icon name="globe-outline"></ion-icon>

                  <span>: www.website.com</span>
                </a>
              </li>

              <li>
                <a href="tel:+0011234567890" class="contact-link">
                  <ion-icon name="call-outline"></ion-icon>

                  <span>: (+001) 123 456 7890</span>
                </a>
              </li>

              <li>
                <div class="contact-link">
                  <ion-icon name="time-outline"></ion-icon>

                  <span>: 9:00 AM - 6:00 PM</span>
                </div>
              </li>

              <li>
                <a href="#" class="contact-link">
                  <ion-icon name="location-outline"></ion-icon>

                  <address>: 1644 Deer Ridge Drive Rochelle Park, NJ 07662</address>
                </a>
              </li>

            </ul>

          </div>

        </div>
      </section>

    </article>
  </main>


  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>