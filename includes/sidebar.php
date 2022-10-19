<nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<img src="assets/img/profile.jfif" />
    <h2>
    <?php  if (isset($_SESSION['user'])) : ?>
    <strong><?php echo $_SESSION['user']['username']; ?></strong>
          
      <?php endif ?>
    </h2>
  </header>
	<ul>
    <li tabindex="0" class="icon-dashboard"><a href="form.php"><span>Accomodation Request</span></a></li>
    <li tabindex="0" class="icon-customers"><a href="profile.php"><span>Update Profile</span></a></li>
    <li tabindex="0" class="icon-users"><a href="my-testimonial.php"><span>Post Testimonial</span></li>
    <li tabindex="0" class="icon-settings"><a href="my-application.php"><span>Allocated Houses</span></a></li>
    <li tabindex="0" class="icon-settings"><a href="trackstay.php"><span>Track Stay</span></a></li>
    <li tabindex="0" class="icon-logout"><a href="connect.php?logout='1'" style="color: black;">Logout</a></li>
  </ul>
</nav>
