<?php
session_start();
session_destroy();
header("mes=<p class='logout'>You are Loged Out.</p>");


?>