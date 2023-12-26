<?php

	session_start();
	session_unset('cname');
	session_destroy();
	header("location:customerlogin.html");

	?>