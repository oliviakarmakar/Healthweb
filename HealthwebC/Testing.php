<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/Testing.css" class="css">
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
  </head>
  <body>
    <div id="header"></div>
      
    <div class="container1">
      <form id="contact" action="in.php" method="post">
        <h1>Covid Testing Form</h1>
        <h3>Fill the form below and press the submit button!</h3>
        <div class="row">
          <!-- first column -->
          <div class="column">
            <fieldset>
              <input
                type="text"
                placeholder="Full Name *"
                name="name"
                required
                autofocus
              />
            </fieldset>
            <fieldset>
              <input
                type="text"
                placeholder="Guardian's name *"
                name="fname"
                required
                autofocus
              />
            </fieldset>
            <fieldset>
              <input
                type="email"
                placeholder="Your email *"
                name="email"
                required
                autofocus
              />
            </fieldset>
            <fieldset>
              <input
                type="text"
                placeholder="Date of birth *"
                name="date"
                onfocus="(this.type = 'date')"
                required
                autofocus
              />
            </fieldset>
            <!-- adding all country code list -->
            <fieldset>
              <input
                type="text"
                placeholder="Phone number *"
                name="phone"
                id="phone"
                required
                autofocus
              />
            </fieldset>
          </div>
          <!-- second column -->
          <div class="column">
            <fieldset>
              <p>What is your gender?</p>
              <div class="radio">
                <input type="radio" id="male" name="gender" value="m" required/>
                <label for="male">Male</label>
              </div>
              <div class="radio">
                <input type="radio" id="female" name="gender" value ="f"required />
                <label for="female">Female</label>
              </div>
            </fieldset>
            <fieldset>
              <label for="idCard">Enter your ID CardNo in given formate.</label>
              <div class="idCard">
                <input
                  type="text"
                  name="idCard"
                  pattern="[0-9]{12}"
                  placeholder="############"
                  maxlength="12"
                />
                
               
              </div>
            </fieldset>
           <fieldset>
              <p>Upload ID Card</p>
              <input type="file" id="file" name='file'/>
            </fieldset>
          </div>
        </div>
        <!-- submit button -->
        <fieldset>
          <button type="submit" value="submit" name="submit" id="button">Submit Now</button>
        </fieldset>
      </form>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="2" d="M0,192L20,186.7C40,181,80,171,120,170.7C160,171,200,181,240,160C280,139,320,85,360,53.3C400,21,440,11,480,42.7C520,75,560,149,600,154.7C640,160,680,96,720,96C760,96,800,160,840,154.7C880,149,920,75,960,53.3C1000,32,1040,64,1080,96C1120,128,1160,160,1200,181.3C1240,203,1280,213,1320,186.7C1360,160,1400,96,1420,64L1440,32L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    </div>

    <!-- Javascript to initialize the code list -->
    <script>
      var input = document.querySelector("#phone");
      window.intlTelInput(input, {
        separateDialCode: true,
      });
    </script>
  </body>
</html>