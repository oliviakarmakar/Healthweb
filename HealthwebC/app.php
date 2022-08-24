<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script>
      $(function () {
        $("#header").load("header.php");
      });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
    <link rel="stylesheet" href="app.css">

</head>
<body>

<div id="header"></div>


<section class="home" id="home">

    <div class="image">
        <img src="image/pac.svg" alt="">
    </div>

    <div class="content">
        <h3>stay safe, stay healthy</h3>
        <p>The danger which is least expected soonest comes to us, so Let us be prepared for that with our free checkups,expert doctors, suggested meds in total our total care.</p>
        <a href="#book" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Being aware means you’ll be in a better position to take care of your health.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>With 80+ specialties covered, get medical advice and medical second opinion to any of your health concerns under one roof.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Medicines can treat diseases and improve your health. If you are like most people, you need to take medicine at some point in your life.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Our experienced doctos will help look after you, wherever you may be.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>


<section class="book" id="book">

    <h1 class="heading"> <span>book</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/pics.svg" alt="">
        </div>

        <form action="https://formspree.io/f/xqknnawn" method="POST">
            <h3>book appointment</h3>
            <input type="text" placeholder="Your name" class="box">
            <input type="number" placeholder="Your number" class="box">
            <input type="email" placeholder="Your email" class="box">
            <input type="date" class="box">
            <input type="submit" value="BOOK NOW" class="btn">
        </form>
    </div>
</section>
  </div>
<div>
<script src="js/script.js"></script>
<script src="app.js"></script>
</body>
</html>