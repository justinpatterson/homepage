<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JUSTIN TIME</title>
    <script src="../scripts/jquery-1.11.1.min.js" type="text/javascript">
      </script>
    <script src="../scripts/popup.js" type="text/javascript">
      </script>
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <!--FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'>
    
  </head>
  <body>

  <nav>
    <ul><li><a href="index.html">Justin Time</a></li></ul>
  </nav>
  <section id="image-popup">
    <img src="../images/img02.png">
  </section>

  <section id="splash">
    <!--<div class="cover"></div>-->
    <div class="title">
      <h1>JUSTIN TIME</h1><!--<h2>Justin Time</h2><h3>I'm a videogame developer, artist, and designer.</h3>-->
      <!--<a href="#">Play Now!</a>-->
    </div>
  </section>
  <section id="game-description">
    <h1>Contact</h1>
    <?php
          if(isset($_POST['email'])) {

              $email_to = "jhpatt33@gmail.com";
              $email_subject = "Email Form from justinhpatterson.com";

              function died($error) {
                    // your error code can go here
                    echo '<p class="text-content">';
                    echo "I am sorry but there were error(s) with your message. Try again, please!";
                    echo "</p>";
                    echo "</section>";
                    echo '<footer><p class="signature"><a href="http://www.twitter.com/j_patt">tweet</a><a href="http://www.linkedin.com/pub/justin-patterson/17/447/41/">linked</a></p></footer>';
                    die();
              }


              // validation expected data exists
              if(!isset($_POST['full_name']) ||
                !isset($_POST['email']) ||
                !isset($_POST['comments'])) {
                    died('I am sorry but there were error(s) with your message. Try again, please!');       
              }

              $full_name = $_POST['full_name']; // required
              $email_from = $_POST['email']; // required
              $comments = $_POST['comments']; // required

              $error_message = "";

              $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

              if(!preg_match($email_exp,$email_from)) {
                $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
              }

              $string_exp = "/^[A-Za-z .'-]+$/";

              if(!preg_match($string_exp,$full_name)) {
                $error_message .= 'The name you entered does not appear to be valid.<br />';
              }

              if(strlen($comments) < 2) {
                $error_message .= 'The Comments you entered do not appear to be valid.<br />';
              }

              if(strlen($error_message) > 0) {
                died($error_message);
              }

              $email_message = "Form details below.\n\n";
              
              function clean_string($string) {
                  $bad = array("content-type","bcc:","to:","cc:","href");
                  return str_replace($bad,"",$string);
              }
              
              $email_message .= "Full Name: ".clean_string($full_name)."\n";
              $email_message .= "Email: ".clean_string($email_from)."\n";
              $email_message .= "Comments: ".clean_string($comments)."\n";
              // create email headers
              $headers = 'From: '.$email_from."\r\n".
              'Reply-To: '.$email_from."\r\n" .
              'X-Mailer: PHP/' . phpversion();
              @mail($email_to, $email_subject, $email_message, $headers);  
              
              echo '<p class="text-content">Thank you for your message! I will get back to you soon.</p>';

              }
          ?>  
          <ul class="link-set">
          <li><a href="index.html">Back</a></li>
          </ul>
  </section>
  <footer>
   <p class="signature">
      <a href="http://www.twitter.com/j_patt">tweet</a>
      <a href="http://www.linkedin.com/pub/justin-patterson/17/447/41/">linked</a>
    </p>
  </footer>
  </body>
</html>