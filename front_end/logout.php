<?php
session_start();
session_unset();
header("Location: http://localhost:8000/front_end/");
die();