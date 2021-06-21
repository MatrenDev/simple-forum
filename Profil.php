<!DOCTYPE html>
<html style="font-size: 16px;" lang="pl-PL">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Forum, zaliczenie, CMS, PWSZ">
    <meta name="description" content="Forum na cele zaliczeniowe.">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Profil</title>
    <link rel="stylesheet" href="forumcms.css" media="screen">
<link rel="stylesheet" href="Profil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="forumcms.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Rubik:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    <?php include('dbconn.php'); ?>
	<?php include('session.php'); ?>
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Forum CMS",
		"logo": "images/pwsz_logo.svg"
}</script>
    <meta property="og:title" content="Profil">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Forum na cele zaliczeniowe.">
    <meta name="theme-color" content="#834496">
  </head>
  <body class="u-body u-stick-footer"><header class="u-clearfix u-header u-sticky u-white" id="menu" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="169" data-image-height="100">
          <img src="images/pwsz_logo.svg" class="u-logo-image u-logo-image-1" data-image-width="114">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-0 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-palette-2-base u-button-style u-hover-palette-2-light-1 u-nav-link u-text-active-white u-text-hover-white" href="Forum.php" style="padding: 10px 20px;">Forum</a>
</li><li class="u-nav-item"><a class="u-active-palette-2-base u-button-style u-hover-palette-2-light-1 u-nav-link u-text-active-white u-text-hover-white" href="Kontakt.html" style="padding: 10px 20px;">Kontakt</a>
</li><li class="u-nav-item"><a class="u-active-palette-2-base u-button-style u-hover-palette-2-light-1 u-nav-link u-text-active-white u-text-hover-white" href="Profil.php" style="padding: 10px 20px;">Profil</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Forum.php" style="padding: 10px 20px;">Forum</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Kontakt.html" style="padding: 10px 20px;">Kontakt</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Profil.php" style="padding: 10px 20px;">Profil</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-e60f">
      <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Witaj, <?php echo $fullname; ?></h2>
        <div class="u-form u-form-1">
          <form action="#" method="POST" style="padding: 10px" source="custom" name="form">
            <div class="u-form-group u-form-name">
              <label for="name-2a7f" class="u-label">Zmiana loginu</label>
              <input type="text" id="name-2a7f" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-submit u-button-style">Zmień<br>
              </a>
              <input type="submit" name="change" value="submit" class="u-form-control-hidden">
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php
								if (isset($_POST['change'])){
                  $query = $_POST['name'];

                  mysqli_query($conn,"UPDATE user SET username='$query' WHERE user_id ='$user_id'");
                }
    ?>
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="footer"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 512 512" style="width: 1em; height: 1em;"><path d="m256 512c-68.378906 0-132.667969-26.628906-181.019531-74.980469-48.351563-48.351562-74.980469-112.640625-74.980469-181.019531s26.628906-132.667969 74.980469-181.019531c48.351562-48.351563 112.640625-74.980469 181.019531-74.980469s132.667969 26.628906 181.019531 74.980469c48.351563 48.351562 74.980469 112.640625 74.980469 181.019531s-26.628906 132.667969-74.980469 181.019531c-48.351562 48.351563-112.640625 74.980469-181.019531 74.980469zm0-472c-119.101562 0-216 96.898438-216 216s96.898438 216 216 216 216-96.898438 216-216-96.898438-216-216-216zm105.359375 321.359375-28.285156-28.285156c-42.5 42.5-111.648438 42.5-154.148438 0s-42.5-111.648438 0-154.148438 111.648438-42.5 154.148438 0l28.285156-28.285156c-58.097656-58.09375-152.625-58.09375-210.71875 0-58.09375 58.097656-58.09375 152.625 0 210.71875 29.046875 29.046875 67.203125 43.570313 105.359375 43.570313 38.152344 0 76.3125-14.523438 105.359375-43.570313zm0 0"></path></svg><img></span> Copyright PWSZ 2021
        </p>
      </div></footer>
  </body>
</html>