
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="http://bootflat.github.io/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://bootflat.github.io/js/site.min.js"></script>
    <style>
        .docs-header {
            background: none;
        }
        .documents {
            background-color: white;
            border-radius: 20px;
            padding: 50px;
        }
    </style>
</head>
<body style="background-color: rgb(241, 242, 246);">
<div class="docs-header">
    <!--nav-->
    <nav class="navbar navbar-default navbar-custom" role="navigation">
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li><a class="nav-link <?php if($currentPage == 'home') {echo 'current';} ?>" href="home.php">Home</a></li>

                    <?php if(!$_SESSION['name']){ ?>
                        <li><a class="nav-link <?php if($currentPage == 'register') {echo 'current';} ?>" href="./register.html">Register</a></li>
                        <li><a class="nav-link <?php if($currentPage == 'login') {echo 'current';} ?>" href="index.php">Login</a></li>
                    <?php }?>

                    <?php if($_SESSION['name']){ ?>
                        <li class="dropdown <?php if($currentPage == 'contacts') {echo 'current';}?>"">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contacts <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-header">Manage</li>
                                <li><a href="./insert.php">Add New</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link <?php if($currentPage == 'users') {echo 'current';}?>" href="#">Users</a></li>

                        <li><a class="nav-link" href="./logout.php">Logout</a></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container documents" style="margin-top: 80px;">
