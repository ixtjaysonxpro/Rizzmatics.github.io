<!DOCTYPE html>
<center>
  <I><b><h4>Play Phonk/Sigma music on site</h4></b></I>
<!-- Sound icon to notify the user that the sound is from the site -->
    <i id="sound-icon" class="fas fa-volume-up"></i>

    <!-- Audio player for the songs -->
    <audio id="audio-player" controls loop autoplay>
      <source src="[YT2mp3.info] - _ MGMT - Little Dark Age (REMIX) _[No Copyright]__ (320kbps).mp3" type="audio/mp3">
      <source src="[YT2mp3.info] - No Copyright Snowfall (320kbps).mp3" type="audio/mp3">
    </audio>

    <script src="https://kit.fontawesome.com/1234567890.js" crossorigin="anonymous"></script>
    <script>
      // Get the audio player element
      const audioPlayer = document.getElementById('audio-player');

      // Play the next song in the loop when the current song ends
      audioPlayer.addEventListener('ended', function() {
        // Get the next song in the loop
        const nextSong = audioPlayer.querySelector('source[src]').nextSibling;

        // If there is no next song, start again from the beginning
        if (!nextSong) {
          const firstSong = audioPlayer.querySelector('source[src]');
          audioPlayer.src = firstSong.src;
        } else {
          audioPlayer.src = nextSong.src;
        }

        // Play the next song
        audioPlayer.play();
      });

      // Start playing the first song
      audioPlayer.play();

      // Toggle the sound icon and mute/unmute the audio player when clicked
      const soundIcon = document.getElementById('sound-icon');
      soundIcon.addEventListener('click', function() {
        if (audioPlayer.muted) {
          audioPlayer.muted = false;
          soundIcon.classList.remove('fa-volume-mute');
          soundIcon.classList.add('fa-volume-up');
        } else {
          audioPlayer.muted = true;
          soundIcon.classList.remove('fa-volume-up');
          soundIcon.classList.add('fa-volume-mute');
        }
      });
    </script>
</center>


    <style>
      /* Style the splash screen content */
      #splash-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        opacity: 1;
        transition: opacity 1s ease-in-out;
      }

      #splash-screen h1 {
        font-size: 4em;
        font-weight: bold;
        color: #fff;
        text-align: center;
        text-shadow: 2px 2px 4px #000;
      }
    </style>
  </head>
  <body>
    
    <!-- The splash screen -->
    <div id="splash-screen">
      <h1>Welcome To Rizzmatics</h1>
    </div>
<html>
 <meta name="description" content="Rizzmatics is a digital marketing agency specialized in expansion, SEO,and web design. Contact us today for improvement!">
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Rizzmatics</title>

    <script>
      // Fade out the splash screen after 3 seconds
      window.setTimeout(function() {
        document.getElementById('splash-screen').style.opacity = '0';
      }, 720);

      // Remove the splash screen from the DOM after fading out
      window.setTimeout(function() {
        document.getElementById('splash-screen').remove();
      }, 4000);
    </script>
  </body>
</html>

<head>
  <title>Rizzmatics| Social Media Marketing Agency, Graphic design and Business Growth</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      color: #333;
    }

    header {
      background-color: #fff;
      box-shadow: 0 1px 4px rgba(0, 0, 0, .1);
    }

    nav ul {
      display: flex;
      justify-content: space-between;
      align-items: center;
      list-style: none;
      margin: 0;
      padding: 10px;
    }

    nav ul li a {
      color: #333;
      text-decoration: none;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    nav ul li a:hover {
      background-color: #333;
      color: #fff;
    }

    .hero {
      background-image: url('https://img.freepik.com/free-vector/computer-monitor-graphic-animator-creating-video-game-modeling-motion-processing-video-file-using-professional-editor-vector-illustration-graphic-design-art-designer-workplace-concept_74855-13038.jpg?w=2000');
      background-size: cover;
      background-position: center;
      height: 600px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .hero-content {
      text-align: center;
    }

    .hero-content h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      color: #fff;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, .5);
    }

    .hero-content p {
      font-size: 1.5rem;
      margin-bottom: 40px;
      color: #fff;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, .5);
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      border: none;
      background-color: #333;
      color: #fff;
      font-size: 1.2rem;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #fff;
      color: #333;
    }

    .services {
      background-color: #f5f5f5;
      padding: 40px 0;
    }

    .services h2 {
      text-align: center;
      margin-bottom: 40px;
    }

    .services-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }

    .service {
      flex: 1;
      max-width: 300px;
      margin: 20px;
      box-shadow: 0 1px 4px rgba(0, 0, 0, .1);
      border-radius: 5px;
      overflow: hidden;
      transition: box-shadow 0.3s ease;
    }

    .service:hover {
      box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
    }

    .service img {
      display: block;
      width: 100%;
      height: auto;
    }

    .service-content {
      padding: 20px;
      text-align: center;
    }

    .service-content h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }

    .service-content p {
      font-size: 1.2rem;
      margin-bottom: 20px;
      color: #666;
    }

    .contact {
      background-color: #fff;
      padding: 40px 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }

    .contact-form {
      flex: 1;
      max-width: 600px;
      margin: 20px;
      box-shadow: 0 1px 4px rgba(0, 0, 0, .1);
      border-radius: 5px;
      padding: 20px;
      overflow: hidden;
    }

    .contact-form label {
      display: block;
      font-size: 1.2rem;
      margin-bottom: 5px;
      color: #333;
    }

    .contact-form input,
    .contact-form textarea {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 1.2rem;
      border-radius: 5px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
    }

    .contact-form textarea {
      height: 200px;
    }

    .contact-form button {
      display: block;
      padding: 10px 20px;
      border: none;
      background-color: #333;
      color: #fff;
      font-size: 1.2rem;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
      background-color: #fff;
      color: #333;
    }

    @media screen and (max-width: 768px) {
      .hero {
        height: 400px;
      }

      .hero-content h1 {
        font-size: 2rem;
      }

      .hero-content p {
        font-size: 1rem;
      }

      .service {
        max-width: 100%;
      }

      .contact-form {
        max-width: 200%;
      }
    }

    .logo {
      font-weight: bold;
      font-size: 28px;
      color: #000000;
    }

    .logo a:hover {
      color: #000000;
    }
  </style>
  
  <script>
    // Script for smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });

    // Script for toggling the mobile navigation menu
    const mobileMenu = document.querySelector('.mobile-menu');
    const navMenu = document.querySelector('nav ul');

    mobileMenu.addEventListener('click', function () {
      navMenu.classList.toggle('show');
    });
  </script>
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <center><a href="#">Rizzmatics</a></center>
      </div>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="mobile-menu"><i class="fa fa-bars"></i></li>
      </ul>
    </nav>
  </header>
  <header>

  </header>

  <section class="hero" id="home">
    <div class="hero-content">
      <h1>Welcome to Rizzmatics</h1>
      <p>Your one-stop-shop for web design and development services</p>
      <a href="#services" class="btn">Learn More</a>
    </div>
  </section>

  <section class="services" id="services">
    <div class="services-container">
      <div class="service">
        <div class="service-icon">
          <i class="fa fa-code"></i>
        </div>
        <div class="service-content">
          <h3>Web Design & Development</h3>
          <p>We specialize in creating beautiful and functional websites that meet the unique needs of our clients.</p>
        </div>
      </div>

      <div class="service-container">
    <div class="service">
      <div class="service-content">
        <h3>SEO</h3>
        <p>We help your website rank higher on search engines.</p>
      </div>
    </div>
  </div>

      <div class="service">
        <div class="service-icon">
          <i class="fa fa-cogs"></i>
        </div>
        <div class="service-content">
          <h3>Graphic design</h3>
          <p>Graphic design services can be sold to businesses which require logos, business cards, brochures, flyers, and other visual marketing materials.</p>
        </div>
      </div>
    </div>
  </section>
  
<center><h2>contact us to get our services</h2></center>

        <section class="contact" id="contact">
  <div class="contact-form-container">
    <div class="contact-form">
      <iframe src="https://form.jotform.com/230641344037044" frameborder="0" style="width:110%;height:500px;"></iframe>
    </div>
  </div>
</section>

      </div>
    </div>
  </section>
</body>
  <center>
<body itemscope itemtype="http://schema.org/Organization">
  <header>
    <h4 itemprop="name">Rizzmatics</h4>
    <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <span itemprop="streetAddress">763 Zone 90 bldg.No-46</span>
      <span itemprop="addressLocality">Al Wakrah</span>,
      <span itemprop="addressRegion">Doha,Qatar</span>
      <span itemprop="postalCode">00000</span>
    </address>
    <span itemprop="emal">kargo@consultant.com</span>
  </header>
  ...
</body>
      </center>
    </html>
  </html>
</html>
<h6>|FOR Songs|Copyright Disclaimer Under Section 107 of the Copyright Act 1976, allowance is made for "fair use" for purposes such as criticism, comment, news reporting, teaching, scholarship, and research. Fair use is a use permitted by copyright statute that might otherwise be infringing. Non-profit, educational or personal use tips the balance in favor of fair use.</h6>
