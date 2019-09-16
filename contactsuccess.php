<!--  Template Name: Contact Success  -->

<?php get_header();?>

<div class='contact-banner'>
  <div class='cb-img'>
    <img src="<?php bloginfo('template_directory')?>/images/banners/contact-banner.jpg">
  </div>
  <div class='cb-textbox'>
    <div class='cb-textbox3'>
      <span class='cb3-i1'>DO YOU HAVE A </span>
      <span class='cb3-i2'>QUESTION OR PROJECT IN MIND? </span>
      <span class='cb3-i1'>JUST WANT TO SAY HI? </span>
      <span class='cb3-i2'>TALK TO US </span>
    </div>
  </div>
</div>

<div class="temp-notice">
  <div class="container">
    <div class="tn-img">
      <img src="<?php bloginfo('template_directory')?>/images/web_thumb_img/IL60139.jpg">
      <div class="tn-content">
        <div class="tn-title">
          Moving in Q1 2020.
        </div>
        <div class="tn-txt">
          <p>990 North Avenue<br/>Glendale Heights, IL 60139</p>
        </div>
      </div>
    </div>
  </div>  <!--  end container  -->
</div>

<div class='contact-form'>
  <div class='contact-container'>
    <div class='col-sm-12 contact-maintitle'>
      <span>CONTACT</span>
    </div>
    <div class='contact-success-message'>
      <?php

        $response = "";

        $message_sent    = "Thanks! Your message has been sent.";
        $message_spam    = "Spam detected. Please send your inquiry to orders@stzindustries.com";
        include 'phpsnippet/google_captcha.php';
        //user posted variables
        $name = $_POST['contact-name'];
        $email = $_POST['contact-email'];
        $message = $_POST['contact-message'];
        $company = $_POST['contact-company'];
        $phone = $_POST['contact-phone'];
        $contents = "Name: $name \nEmail: $email \nPhone: $phone \nCompany: $company \nMessage: \n$message";

        //php mailer variables
        $to = "orders@stzindustries.com";
        $subject = "STZ web contact from $name";
        $headers = array(
          'Reply-To: '.$email
        );
        $headers = implode("\r\n", $headers);

        if($message !='' && $responseData->success){
          $sent = wp_mail($to,$subject,strip_tags($contents),$headers);
          echo $local;
          echo "<h3>$message_sent</h3>";
          echo "<p>We will respond to you within one to two business days.</p>";
          // unset($name, $email, $message, $company, $phone, $contents);
        } else {
          echo "<h3>$message_spam</h3>";
        }

      ?>
    </div>
    <div class='contact-phaddress'>
      <div class='contact-phaddress-ph'>
        <span>P.800.545.5230</span>
        <span>P.773.265.3000</span>
        <span>F.773.265.3130</span>
      </div>
      <div class='contact-phaddress-address'>
        <p>600 N. Kilbourn Avenue, Chicago, IL 60624</p>
        <p>orders@stzindustries.com</p>
      </div>
    </div>

  </div>
</div>

<?php get_footer();?>
