<?php
include "ReserverClass.php";
$reserve=new ReserverClass();
$reserve->setFilm($_POST['film']);
header("Location: ReserverFilm");

