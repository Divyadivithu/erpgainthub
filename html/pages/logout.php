<?php
session_start();
session_destroy();
header("location:../../index.php?mes=<p class='logout'>You are Loged Out.</p>");


?>