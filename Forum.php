<!DOCTYPE html>
<html style="font-size: 16px;" lang="pl-PL">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Forum, zaliczenie, CMS, PWSZ">
    <meta name="description" content="Forum na cele zaliczeniowe.">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Forum</title>
    <link rel="stylesheet" href="forumcms.css" media="screen">
<link rel="stylesheet" href="Forum.css" media="screen">


<?php include('dbconn.php'); ?>
	<?php include('session.php'); ?>
	

    <script src="vendors/bootstrap.js"></script>
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="forumcms.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Rubik:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Forum CMS",
		"logo": "images/pwsz_logo.svg"
}</script>
    <meta property="og:title" content="Forum">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Forum na cele zaliczeniowe.">
    <meta name="theme-color" content="#834496">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-sticky u-white" id="menu" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
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
      <section class="u-align-center u-clearfix u-section-1" id="forum">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="logout.php" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1"><?php 
				echo $member_row['firstname']." ".$member_row['lastname'];
			?> - Wyloguj

    <a href="forum.php" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Załaduj tematy</a>
        <div class="u-form u-form-1">
          <form method="POST" style="padding: 10px" source="custom" name="form">
            <div class="u-form-group u-form-message u-form-group-1">
              <label for="message-f7da" class="u-label">Stwórz temat</label>
              <textarea rows="4" cols="50" id="message-f7da" name="post_content" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white" required=""></textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-submit u-button-style">Wyślij<br>
              </a>
              <input type="submit" name="post" value="submit" class="u-form-control-hidden">
            </div>
          </form>
        </div>
						<?php	
							$query = mysqli_query($conn,"SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC")or die(mysqli_error($conn));
							while($post_row=mysqli_fetch_array($query)){
							$id = $post_row['post_id'];	
							$upid = $post_row['user_id'];	
							$posted_by = $post_row['firstname']." ".$post_row['lastname'];
						?>

          <div class="u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-line-1" data-animation-name="zoomIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction=""></div>
        <div class="u-container-style u-expanded-width u-group u-group-1" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0">
          <div class="u-container-layout u-valign-top u-container-layout-1">
            <h4 class="u-align-center u-text u-text-default u-text-1">Napisane przez: <a href="#"> <?php echo $posted_by; ?> - 						<?php				
								$days = floor($post_row['TimeSpent'] / (60 * 60 * 24));
								$remainder = $post_row['TimeSpent'] % (60 * 60 * 24);
								$hours = floor($remainder / (60 * 60));
								$remainder = $remainder % (60 * 60);
								$minutes = floor($remainder / 60);
								$seconds = $remainder % 60;
								if($days > 0)
								echo date('F d, Y - H:i:sa', $post_row['date_created']);
								elseif($days == 0 && $hours == 0 && $minutes == 0)
								echo "Kilka sekund temu";		
								elseif($days == 0 && $hours == 0)
								echo $minutes.' minut temu';
						?></h4>
            <p class="u-align-center u-text u-text-2"><?php echo $post_row['content']; ?><br>
            </p>
            <div class="u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-line-2"></div>
            <h4 class="u-align-center u-text u-text-default u-text-3">Jak pisać posty?</h4>
            <p class="u-align-center u-text u-text-default u-text-4">
              <a href="#" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3">Drogi użytkowniku </a>- zamieść swój wpis poniżej, aby udzielić się w tym temacie
            </p>
          </div>
        </div>


					<form method="post">
					
          <hr>
					Post:<br>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
          <center><textarea name="comment_content" rows="2" cols="44" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-white" style="width:50%;" placeholder="Wprowadź swój post" required></textarea><br></center>
          <input type="submit" name="comment" value="Wyślij Post">
					</form>
						
					</br>
				
							<?php 
					
								$comment_query = mysqli_query($conn,"SELECT * ,UNIX_TIMESTAMP() - date_posted AS TimeSpent FROM comment LEFT JOIN user on user.user_id = comment.user_id where post_id = '$id'") or die (mysqli_error($conn));
								while ($comment_row=mysqli_fetch_array($comment_query)){
								$comment_id = $comment_row['comment_id'];
								$comment_by = $comment_row['firstname']." ".  $comment_row['lastname'];
							?>
					<br><a href="#"><?php echo $comment_by; ?></a> - <?php echo $comment_row['content']; ?>
					<br>
							<?php				
								$days = floor($comment_row['TimeSpent'] / (60 * 60 * 24));
								$remainder = $comment_row['TimeSpent'] % (60 * 60 * 24);
								$hours = floor($remainder / (60 * 60));
								$remainder = $remainder % (60 * 60);
								$minutes = floor($remainder / 60);
								$seconds = $remainder % 60;
								if($days > 0)
								echo date('F d, Y - H:i:sa', $comment_row['date_posted']);
								elseif($days == 0 && $hours == 0 && $minutes == 0)
								echo "Kilka sekund temu";		
								elseif($days == 0 && $hours == 0)
								echo $minutes.' minut temu';
							?>
					<br>
							<?php
							}
							?>
					<hr>
					&nbsp;
					<?php 
					if ($u_id = $id){
					?>
					
				
					
					<?php }else{ ?>
						
					<?php
					} } ?>
					
				
							<?php
								if (isset($_POST['post'])){
								$post_content  = $_POST['post_content'];
								
								mysqli_query($conn,"insert into post (content,date_created,user_id) values ('$post_content','".strtotime(date("Y-m-d h:i:sa"))."','$user_id') ")or die(mysqli_error($conn));
								header('location:Forum.php');
								}
							?>

							<?php
							
								if (isset($_POST['comment'])){
								$comment_content = $_POST['comment_content'];
								$post_id=$_POST['id'];
								
								mysqli_query($conn,"insert into comment (content,date_posted,user_id,post_id) values ('$comment_content','".strtotime(date("Y-m-d h:i:sa"))."','$user_id','$post_id')") or die (mysqli_error($conn));
								header('location:Forum.php');
								}
							?>
      </div>
    </section>
</body>

  <?php include('footer.php');?>

</html>