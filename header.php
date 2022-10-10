<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shree Sundevi Organic Agriculture
        Co-operative Ltd.</title>

    <!-- font awesome css -->
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/fontawesome.min.css">

    <!-- swiper css -->
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">

    <!-- UIkit css -->
    <link rel="stylesheet" href="./assets/css/uikit.min.css" />

    <!-- user css -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>
<div class="pre-loader"></div>
<header>
        <div class="head uk-flex uk-flex-middle uk-flex-between@s uk-flex-wrap">
            <div class="uk-margin-right head-info">
                <p>+977-1-4422657 | sales@geolandtravels.com</p>
                <p>Opening hours: 10:00 am - 5:00 pm</p>
            </div>

            <div class="uk-margin-right uk-margin-left head-icon">
                <div class="head-contact">
                    <a href="contact.php">Contact Us</a>
                </div>
                <a href="#" uk-icon="icon: facebook"></a>
                <a href="#" uk-icon="icon: instagram" class="uk-margin-small-left"></a>
                <a href="#" uk-icon="icon: twitter" class="uk-margin-small-left"></a>
                <a href="#" uk-icon="icon: youtube" class="uk-margin-small-left"></a>
            </div>
        </div>

        <div class="site-nav uk-margin-small-bottom" uk-sticky="top:300; animation: uk-animation-slide-top;">
            <div class="uk-container uk-container-expand  uk-flex uk-flex-between uk-flex-middle uk-flex-wrap">
                <div class="logo">
                    <div>
                        <a href="index.php"><img src="./assets/img/logo.png" alt="logo"></a>
                    </div>
                    <div class="uk-margin-left">
                        <p class="p1">Shree Sundevi Organic Agriculture <br>
                            Co-operative Ltd.</p>
                        <p class="p2">Gajuri-1, Dhading</p>
                    </div>
                </div>
                
                <nav class="uk-visible@l" uk-navbar>
                    <ul class="navbar">
                        <li><a href="index.php" class="nav-item <?php echo (basename($_SERVER['PHP_SELF'])=="index.php")?"active":""?>">home</a></li>
                        
                        <li class="dropdown">
                            <a href="#" class="nav-item" >about<span uk-icon="icon: chevron-down"
                                    class="dropdown-icon"></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="organization-history.php" class="dropdown-list">Organization History</a></li>
                                    <li><a href="board-member.php" class="dropdown-list">Board Members</a></li>
                                    <li><a href="management-team.php" class="dropdown-list">Management Teams</a></li>
                                    <li><a href="account-team.php" class="dropdown-list">Account Teams</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-item">services<span uk-icon="icon: chevron-down"
                                    class="dropdown-icon"></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="saving.php" class="dropdown-list">Saving</a></li>
                                    <li><a href="loan.php" class="dropdown-list">Loan</a></li>
                                    <li><a href="remittance.php" class="dropdown-list">Remittance</a></li>
                                    <li><a href="mobile-banking.php" class="dropdown-list">Mobile Banking</a></li>
                                    <li><a href="insurance.php" class="dropdown-list">Insurance</a></li>
                                    <li><a href="other-services.php" class="dropdown-list">Other Services</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-item" >report<span uk-icon="icon: chevron-down"
                                    class="dropdown-icon"></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="agm-report.php" class="dropdown-list">A.G.M. report</a></li>
                                    <li><a href="quarterly-report.php" class="dropdown-list">Quarterly report</a></li>
                                    <li><a href="pearls-report.php" class="dropdown-list">Pearls report</a></li>
                                    <li><a href="interest-report.php" class="dropdown-list">Interest report</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-item" >notice<span uk-icon="icon: chevron-down"
                                    class="dropdown-icon"></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="vacancy.php" class="dropdown-list">Vacancy</a></li>
                                    <li><a href="tender-notice.php" class="dropdown-list">Tender Notice</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-item" >downloads<span uk-icon="icon: chevron-down"
                                    class="dropdown-icon"></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="opening-form.php" class="dropdown-list">A/C opening form</a></li>
                                    <li><a href="other-form.php" class="dropdown-list">Other form</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="gallery.php" class="nav-item <?php echo (basename($_SERVER['PHP_SELF'])=="gallery.php")?"active":""?>">gallery</a></li>
                        <li><a href="news.php" class="nav-item <?php echo (basename($_SERVER['PHP_SELF'])=="news.php")?"active":""?>">news</a></li>
                    </ul>
                </nav>

                <div class="uk-hidden@l uk-visible hamburger-menu">
                    <a href="#offcanvas-slide" uk-toggle><span uk-icon="icon: menu"></span></a>
                </div>
            </div>
        </div>

        <div id="offcanvas-slide" uk-offcanvas>
            <div class="overlay"></div>
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" title="close" uk-close></button>

                <ul class="navbar">
                    <li style=" margin-top: 1rem;"><a href="index.php">home</a></li>
                   

                        <ul uk-accordion class="uk-margin-remove">   
                            <li>
                                <a href="#" class="uk-accordion-title">about<span uk-icon="icon: chevron-right"
                                        class="dropdown-icon"></span></a>
                                <div class="uk-accordion-content uk-margin-remove-top">
                                    <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="organization-history.php" class="dropdown-list">Organization History</a></li>
                                    <li><a href="board-member.php" class="dropdown-list">Board Members</a></li>
                                    <li><a href="management-team.php" class="dropdown-list">Management Teams</a></li>
                                    <li><a href="account-team.php" class="dropdown-list">Account Teams</a></li>
                                    </ul>
                                </div>
                            </li>
                        
                    
                       
                            <li class="uk-margin-remove">
                                <a href="#" class="uk-accordion-title">services<span uk-icon="icon: chevron-right"
                                        class="dropdown-icon"></span></a>
                                <div class="uk-accordion-content uk-margin-remove-top">
                                    <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="saving.php" class="dropdown-list">Saving</a></li>
                                    <li><a href="loan.php" class="dropdown-list">Loan</a></li>
                                    <li><a href="remittance.php" class="dropdown-list">Remittance</a></li>
                                    <li><a href="mobile-banking.php" class="dropdown-list">Mobile Banking</a></li>
                                    <li><a href="insurance.php" class="dropdown-list">Insurance</a></li>
                                    <li><a href="other-services.php" class="dropdown-list">Other Services</a></li>
                                    </ul>
                                </div>
                            </li>
                        
                   
                       
                            <li class="uk-margin-remove">
                                <a href="#" class="uk-accordion-title">report<span uk-icon="icon: chevron-right"
                                        class="dropdown-icon"></span></a>
                                <div class="uk-accordion-content uk-margin-remove-top">
                                    <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="agm-report.php" class="dropdown-list">A.G.M. report</a></li>
                                    <li><a href="quarterly-report.php" class="dropdown-list">Quarterly report</a></li>
                                    <li><a href="pearls-report.php" class="dropdown-list">Pearls report</a></li>
                                    <li><a href="interest-report.php" class="dropdown-list">Interest report</a></li>
                                    </ul>
                                </div>
                            </li>
                        
                   
                       
                            <li class="uk-margin-remove">
                                <a href="#" class="uk-accordion-title">notice<span uk-icon="icon: chevron-right"
                                        class="dropdown-icon"></span></a>
                                <div class="uk-accordion-content uk-margin-remove-top">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li><a href="vacancy.php" class="dropdown-list">Vacancy</a></li>
                                        <li><a href="tender-notice.php" class="dropdown-list">Tender Notice</a></li>
                                    </ul>
                                </div>
                            </li>
                        
                    
                       
                            <li class="uk-margin-remove">
                                <a href="#" class="uk-accordion-title">downloads<span uk-icon="icon: chevron-right"
                                        class="dropdown-icon"></span></a>
                                <div class="uk-accordion-content uk-margin-remove-top">
                                    <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="opening-form.php" class="dropdown-list">A/C opening form</a></li>
                                    <li><a href="other-form.php" class="dropdown-list">Other form</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    <li><a href="gallery.php">gallery</a></li>
                    <li><a href="news.php">news</a></li>
                </ul>
            </div>
        </div>
    </header>