<head>
  <style>
    .container {
      width: 100%;
      height: 9vh;
      background: rgb(2,0,36);
background: linear-gradient(80deg, rgba(2,0,36,1) 0%, rgba(80,75,233,0.5801492471988796) 11%, rgba(0,212,255,1) 100%);
      background-size: cover;
      background-position: centre;
      padding: 0 8%;
      position: relative;
    }
    nav {
      display: flex;
      width: 100%;
      align-items: centre;
      flex-wrap: wrap;
      padding: 5px 0;
    }
    .logo {
      height: 90px;
      width: 90px;
    }
    nav ul {
      flex: 1;
      text-align: right;
      padding-right: 30px;
    }
    nav ul li {
      display: inline-block;
      list-style: none;
      margin: 27px 30px;
    }
    nav ul li a {
      color: rgb(255, 255, 255);
      text-decoration: none;
      position: relative;
      font-size: 22px;
    }
    nav ul li a::after {
      content: "";
      width: 0;
      height: 3px;
      position: absolute;
      bottom: -5px;
      left: 50%;
      transform: translateX(-50%);
      transition: 0.5s;
      background: blue;
    }
    nav ul li a:hover {
      color: rgb(0, 0, 0);
      transition-delay: 0.1s;
      font-size: 110%;
    }
    nav ul li a:active {
      color: red;
    }
    nav ul li a:hover::after {
      width: 70%;
    }

    /* mobile responsive mode */
@media screen and (max-width: 580px) {
  .row {
    flex-direction: column;
  }
  .row .column {
    width: 90% !important;
  }
  #contact .row #phone {
    padding-right: 180px;
  }
}
  </style>
</head>
<div class="container">
  <nav>
    <img src="image/logo1.png" class="logo" />
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="Prevention.php">Prevention</a></li>
      <li><a href="Testing.php">Testing</a></li>
      <li><a href="aboutus.php">About</a></li>
      <li><a href="app.php">Appointment</a></li>
    </ul>
  </nav>
</div>
