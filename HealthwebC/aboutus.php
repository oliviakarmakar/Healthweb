<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/aboutus.css" class="css" />
    <title>Aboutus</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('#header').load('header.php');
        });
    </script>
  </head>
  <body>
    <div id="header"></div>
    <div class="about-section">
      <h1>About Us</h1>
      <p>
        We're a transparent team with a mission to make information easily
        accesible every where everyday, we design an amazing user experiences
        for our customers
      </p>
      <p>
        Our mission is to make it easier for everyone to find and understand the
        government services and information they need—anytime, anywhere, any way
        they want. Thats's likely over-simplified, but it's cleaner tha a long
        list of descriptors. We think about how people search for government
        information, and how they use it. This helps us simplify and organize it
        in a way that makes sense.
      </p>
    </div>
    <div class="Our">
      <h2 style="text-align: center">Our Team</h2>
    </div>
    <div class="row">
      <div class="column">
        <div class="card">
          <img src="image/Ronal.jpg" alt="image" style="width: 100%" />
          <div class="container2">
            <h2>Ronal Ghosh</h2>
            <p class="title">Member</p>
            <a
              class="social-icon"
              href="https://www.instagram.com/ronal2.00/"
              target="_blank"
            >
              <ion-icon name="logo-instagram"
            size="large">
            </ion-icon>
            </a>
            <a
              class="social-icon"
              href="https://www.linkedin.com/in/ronalg2/"
              target="_blank"
            >
            <ion-icon name="logo-linkedin"
            size="large">
            </ion-icon>
            </a>
            <a
              class="social-icon"
              href="https://github.com/RonalG-2"
              target="_blank"
            >
            <ion-icon name="logo-github"size="large"></ion-icon>
              <a width = "32px" height="32px">
            </a>
            <a
              class="social-icon"
              href="mailto: ghoshronal007@outlook.com"
              target="_blank"
            >
              <ion-icon name="mail-outline"size="large"></ion-icon>
            </a>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="image/Oli.jpg" alt="image" style="width: 100%" />
          <div class="container2">
            <h2>Olivia Karmakar</h2>
            <p class="title">Member</p>
            <a
              class="social-icon"
              href="https://www.instagram.com/olivia.547/"
              target="_blank"
            >
              <ion-icon name="logo-instagram"size="large"></ion-icon>
            </a>
            <a
              class="social-icon"
              href="https://www.linkedin.com/in/olivia-karmakar-939076210/"
              target="_blank"
            >
            <ion-icon name="logo-linkedin"
            size="large">
            </ion-icon>
            </a>
            <a
              class="social-icon"
              href="https://github.com/oliviakarmakar"
              target="_blank"
            >
            <ion-icon name="logo-github"size="large"></ion-icon>
            </a>
            <a
              class="social-icon"
              href="mailto: oliviakarmakar@gmail.com"
              target="_blank"
            >
              <ion-icon name="mail-outline"size="large"></ion-icon>
            </a>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="image/pankaj.jpg" alt="image" style="width: 100%" />
          <div class="container2">
            <h2>Pankaj Sadhukhan</h2>
            <p class="title">Member</p>
            <a
              class="social-icon"
              href="https://www.instagram.com/pankajsadhukhan243/"
              target="_blank"
            >
              <ion-icon name="logo-instagram"size="large"></ion-icon>
            </a>
            <a
              class="social-icon"
              href="https://www.linkedin.com/in/pankaj-sadhukhan-1b15481b9/"
              target="_blank"
            >
            <ion-icon name="logo-linkedin"
            size="large">
            </ion-icon>
            </a>
            <a
              class="social-icon"
              href="https://github.com/PANKAJ-SADHUKHAN"
              target="_blank"
            >
            <ion-icon name="logo-github"size="large"></ion-icon>
            </a>
            <a
              class="social-icon"
              href="mailto: pankajsadhukhan243@gmail.com"
              target="_blank"
            >
              <ion-icon name="mail-outline"size="large"></ion-icon>
            </a>
          </div>
        </div>
      </div>
    </div>
    <section class="contain" id="contact">
      <h2 class="text-center">Contact us</h2>
      <div class="form">
        <form action="https://formspree.io/f/xqknnawn" method="POST">
        <input
          class="form-input"
          type="text"
          name="name"
          id="name"
          placeholder="Enter your Name"
        />
        <input
          class="form-input"
          type="tel"
          name="phoneNo"
          id="phoneNo"
          placeholder="Enter your Mobile number"
        />
        <input
          class="form-input"
          type="email"
          name="email"
          id="email"
          placeholder="Enter your Email"
        />
        <textarea
          class="form-input"
          type="text"
          name="Message"
          id="concern"
          cols="30"
          rows="10"
          placeholder="Ellaborate your Concern"
        ></textarea>
        <button class="btn btn-dark">Submit</button>
        </form>
        </div>
       </section>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
