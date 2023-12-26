<?php

	session_start();
	session_unset('sname');
	session_destroy();
	header("location:supplierlogin.html");

	?>