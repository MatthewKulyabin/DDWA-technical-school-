<?php
  require './errors/errorHandler.php';
?>
<form method="post">
	<p>
	  <input type="text" name="name" placeholder="Enter your name" />
	</p>
	<p>
	  <input type="text" name="surname" placeholder="Enter your surname" />
	</p>
	<p>
	  <input type="text" name="email" placeholder="Enter your email" />
	</p>
	<input type="submit" value="Send" />
</form>
