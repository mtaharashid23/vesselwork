<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <?php include 'include/css.php'; ?>    
</head>

<body>        

    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand header-main__logo" href="index.php">
                    <img src="images/logo.png" alt="img">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto header-main__nav">
                        <li class="nav-item active">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : '' ?>"
                                href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">CareXR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">Rocky</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">Activities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">Volunteer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">Sponsor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '#') ? 'active' : '' ?>"
                                href="#">Contact Us</a>
                        </li>
                        <li>
                            <a href="" class="themeBtn">Donate Now</a>
                        </li>                        
                    </ul>
                </div>
            </nav>
        </div>
    </header>
