<?php
 include('includes/header.php');




?>



    <article class="body-text container">
        <h2>Professional Digital Branding Services</h2>
        <p>
            Prasanth Joseph has been helping some of stockholms most promising startups achieve significant and unprecedented fan growth. I am typically able to grow non-advertising traffic (direct, referral and organic search) by 100% per year for large established
            websites , and by 200-500% per year for newer websites.
        </p>
        <p>
            I specialize in driving, engaging and converting customers across all digital platforms. And I love what I do.
        </p>
        <p>
            If you’re ready for a winning partnership, contact me.
        </p>
    </article>


<?php

if(!isset($_GET['page'])) $page = ""; else $page = $_GET['page'];

switch ($page) {
  case 'admin':
    include "admin.php";
    break;
    case 'cv':
          load_page('CV');
      break;
      case 'start':
            load_page('start');
        break;
      case 'about':
        load_page('about');
        break;
        case 'portfolio':
          include "portfolio.php";
          break;


  default:
    load_page($page);
  }



 ?>

 <script src="assets/LiveDemo/jquery.min.js"></script>

   <script src="assets/LiveDemo/jquery.easteregg.js"></script>
   <script>
     $(function () {
       $(document).easteregg({
         sequence : [38, 38, 40, 40]
       , callback : function () {
           window.location.replace('assets/LiveDemo/hangman.html');

         }
       });
     });
   </script>

    <?php include('includes/footer.php');?>
