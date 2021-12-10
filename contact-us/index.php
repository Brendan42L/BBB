
<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Plasma fibroblast sydney, effective wrinkle reduction"
    />
    <title>Beauty By Brendan</title>
    <link rel="icon" href="/img/logo-favicon.png" type="image/png" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <script defer src="https://use.fontawesome.com/db2a392745.js"></script>
    <style>
      * {
        color: #000;
      }
      :not(.slider) {
        max-width: 2200px;
      }
      body {
        background-color: #fff;
        margin: 0 auto;
        font-family: "poppins", serif, fantasy, sans-serif;
      }
      .header {
        background-image: url(img/homepage-banner-mobile.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 0vh;
        position: relative;
        width: 100%;
      }
      .contact {
        background-image: url(img/contact-us-banner-mobile.jpg);
        background-position: bottom;
        height: 50vh;
      }
      nav {
        background-color: rgba(0, 0, 0, 0.54);
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-bottom: 1em;
      }
      .logo {
        padding: 0.2em;
      }
      .links {
        color: #fff;
        font-weight: 400;
        font-size: 15px;
        padding: 0.2em 1.3em;
        text-decoration: none;
        letter-spacing: 0.1em;
      }
      li {
        padding: 0.4em;
      }
      .nav {
        display: none;
      }
      .wrapper-contact-us {
        display: flex;
        flex-direction: column;
        background-color: #fff;
      }
      .number-1,
      .number-2,
      .number-3 {
        margin: 0 1em 1em 0;
        background-color: #e58e13;
        border-radius: 100%;
        padding: 1em;
        display: inline-block;
        height: 9px;
        width: 9px;
        line-height: 10px;
        -moz-border-radius: 50%;
        border-radius: 50%;
        color: #000;
        text-align: center;
        font-size: 0.8em;
      }
      .wrapper-contact-us {
        max-width: 100%;
        margin: 3em auto;
        background-color: #efefef;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.25);
      }
      form {
        max-width: 100%;
        padding: 1em;
        text-align: left;
        margin: 0 auto;
      }
      .boxing {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }
      form h1 {
        font-size: 2.5em;
        margin: 1.2em;
        display: block;
        text-align: center;
        color: #e58e13;
      }
      a {
        text-decoration: none;
      }
      .nav {
        margin: 0.8em;
        text-align: center;
      }
      .menu-btn {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 80px;
        height: 80px;
        position: absolute;
        left: 0%;
        top: 2%;
      }
      .menu-btn__burger {
        width: 40px;
        height: 4px;
        background: #e09405;
        border-radius: 5px;
      }
      .menu-btn__burger::before,
      .menu-btn__burger::after {
        content: "";
        position: absolute;
        width: 40px;
        height: 4px;
        background: #e09405;
        border-radius: 5px;
      }
      .menu-btn__burger::before {
        transform: translateY(-16px);
      }
      .menu-btn__burger::after {
        transform: translateY(16px);
      }
      @media (min-width: 826px) {
        nav {
          flex-direction: row;
          justify-content: space-between;
          height: 15vh;
          position: relative;
        }
        nav:last-of-type {
          padding-right: 20px;
        }
        .nav {
          display: flex !important;
          margin: 0;
        }
        .links {
          padding: 0.3em;
          font-size: 1.1em;
        }
        .menu-btn {
          display: none;
        }
        .wrapper-contact-us {
          border-radius: 20px;
          max-width: 80%;
        }
        .header {
          background-image: url(img/homepage-banner.jpg);
          background-position: left;
          background-repeat: no-repeat;
          background-size: cover;
          height: 75vh;
          position: relative;
          width: 100%;
        }
        .contact {
          background-image: url(img/contact-us-banner.jpg);
          background-position: top;
          height: 65vh;
        }
      }
      html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        box-sizing: border-box;
      }
      body {
        margin: 0;
      }
      h1 {
        font-size: 2em;
        margin: 0.67em 0;
      }
      a {
        background-color: transparent;
      }
      img {
        border-style: none;
      }
      input,
      select,
      textarea {
        font-family: inherit;
        font-size: 100%;
        line-height: 1.15;
        margin: 0;
      }
      input {
        overflow: visible;
      }
      select {
        text-transform: none;
      }
      fieldset {
        padding: 0.35em 0.75em 0.625em;
      }
      legend {
        box-sizing: border-box;
        color: inherit;
        display: table;
        max-width: 100%;
        padding: 0;
        white-space: normal;
      }
      textarea {
        overflow: auto;
      }
      ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit;
      }
      ul {
        margin: 0;
        padding: 0;
        list-style: none;
      }
    </style>
  </head>
  <body>
    <header class="header contact">
      <nav>
        <a href="/"
          ><img
            class="logo"
            alt=""
            width="160"
            height="80"
            src="img/logo-nav.png"
        /></a>
        <div class="menu-btn"><div class="menu-btn__burger"></div></div>
        <ul class="nav">
          <li><a class="links" href="/">Home</a></li>
          <li><a class="links" href="treatments">Treatments</a></li>
          <li><a class="links" href="pricing">Pricing</a></li>
          <li><a class="links" href="about-us">About Us</a></li>
          <li><a class="links" href="contact-us.php">Contact</a></li>
        </ul>
      </nav>
    </header>
    <div class="wrapper-contact-us">
      <div class="alert"><?php echo $alert; ?></div>
      <form action="" method="POST">
        <h1>Get In Touch!</h1>
        <div class="boxing">
          <fieldset>
            <legend class="legend-info">
              <span class="number-1">1</span>Your Basic Info
            </legend>
            <label for="firstName">First Name:</label><br /><input
              type="text"
              id="firstName"
              name="firstName"
            /><br /><label for="lastName">Last Name:</label><br /><input
              type="text"
              id="lastName"
              name="lastName"
            /><br /><label for="mail">Email:</label><br /><input
              type="email"
              id="email"
              name="email"
            /><br /><label for="phone">Phone:</label><br /><input
              type="tel"
              id="phone"
              name="phone"
            /><br />
          </fieldset>
          <fieldset>
            <legend class="legend-info">
              <span class="number-2">2</span>Pick Your Package
            </legend>
            <label for="package">Choose A Selection:</label><br /><select
              name="package"
              id="package"
            >
              <option value="Package_Single Or Multipule Area">
                Single Or Multipule Area
              </option>
              <option value="Full_Face_Package">Full Face Package</option>
              <option value="Face_+_Neck_Package">Face + Neck Package</option>
              <option value="Eyes_Package">Eyes Package</option>
              <option value="Lips_+_Jaw_Package">Lips + Jaw Package</option>
              <option value="Stretch_Marks">Stretch Marks</option>
              <option value="Skin_Tags">Skin Tags</option>
              <option value="Other">Other</option>
            </select>
          </fieldset>
          <fieldset>
            <legend class="legend-info">
              <span class="number-3">3</span>Leave Us A Note
            </legend>
            <label for="comment">Write Below:</label><br /><textarea
              name="comment"
              id="comment"
              rows="8"
              cols="auto"
            ></textarea>
          </fieldset>
        </div>
        <?php echo $alert; ?>
        <button id="submit" type="submit" name="submit">Send Message</button>
      </form>
      <div class="social">
        <a href="https://www.instagram.com/beauty.by.brendan/"
          ><img
            width="60"
            hieght="60"
            src="img/insta-logo.png"
            alt="Instagram logo link"
        /></a>
        <a href="https://www.facebook.com/beautybybrendan.com.au"
          ><img
            width="60"
            hieght="60"
            src="img/fb-logo.png"
            alt="facebook logo link"
        /></a>
      </div>
    </div>
    <footer>
      <ul class="nav-footer">
        <li><a class="links" href="/">Home</a></li>
        <li><a class="links" href="treatments">Treatments</a></li>
        <li><a class="links" href="pricing">Pricing</a></li>
        <li><a class="links" href="about-us">About Us</a></li>
        <li><a class="links" href="contact-us">Contact</a></li>
      </ul>
      <img
        class="logo-f"
        alt="logo"
        width="150"
        height="80"
        src="img/footer-logo.jpg"
      />
      <div class="contact-info">
        <a href="tel:+61402374947">0402 374 947</a>
        <a href="mailto:beauty.by.brendan.sydney@gmail.com">Book Now</a>
        <small>&copy; Copyright 2020, Beauty By Brendan</small>
      </div>
    </footer>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style-ver-1.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap"
      rel="stylesheet"
    />
    <script type="text/javascript">
      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
    <script src="js/app.js"></script>
  </body>
</html>
