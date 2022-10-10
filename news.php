   <?php 
   include "header.php";
   ?>

    <!-- main section starts  -->
    <main>
        <!-- breadcrumb section starts  -->
        <section class="bread-crumb">
            <div class="uk-container uk-container-expand">
                <div class="bread-crumb-content uk-flex uk-flex-middle uk-flex-between">
                    <div class="uk-flex uk-flex-middle bread-crumb-title">
                        <img src="./assets/img/news.png" alt="" style="filter: invert(1)">
                        <h3>Our News</h3>
                    </div>
                    <div class="bread-crumb-link">
                        <span uk-icon="home"></span>
                        <a href="index.php">HOME</a><span>News</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb section ends  -->

        <section class="news-content">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid">
                    <div class="uk-width-expand@m main-content uk-margin-medium-top uk-margin-medium-bottom">
                        <div class="uk-position-relative news-wrapper"
                            uk-scrollspy="cls: uk-animation-slide-bottom; delay: 300; repeat: false">
                            <div class="img-bg">
                                <img src="./assets/img/img.jpg" alt="">
                            </div>
                            <div class="img-content">
                                <span uk-icon="icon: user"></span>
                                <span>By admin</span>

                                <span uk-icon="icon: calendar" class="uk-margin-left"></span>
                                <span>13 Sept 2022</span>
                                <a href="news-secondary.php">
                                    <h3>Title of the news</h3>
                                </a>
                            </div>
                        </div>

                        <div class="uk-grid uk-child-width-1-2@m"
                            uk-scrollspy="cls: uk-animation-slide-bottom; target: .news-wrapper; delay: 300; repeat: false">
                            <div class="news-wrapper">
                                <div class="uk-position-relative uk-margin-medium-top">
                                    <div class="img-bg">
                                        <img src="./assets/img/img.jpg" alt="">
                                    </div>
                                    <div class="img-content">
                                        <span uk-icon="icon: user"></span>
                                        <span>By admin</span>

                                        <span uk-icon="icon: calendar" class="uk-margin-left"></span>
                                        <span>13 Sept 2022</span>
                                        <a href="news-secondary.php">
                                            <h3>Title of the news</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="news-wrapper">
                                <div class="uk-position-relative uk-margin-medium-top">
                                    <div class="img-bg">
                                        <img src="./assets/img/img.jpg" alt="">
                                    </div>
                                    <div class="img-content">
                                        <span uk-icon="icon: user"></span>
                                        <span>By admin</span>

                                        <span uk-icon="icon: calendar" class="uk-margin-left"></span>
                                        <span>13 Sept 2022</span>
                                        <a href="news-secondary.php">
                                            <h3>Title of the news</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="news-wrapper">
                                <div class="uk-position-relative uk-margin-medium-top">
                                    <div class="img-bg">
                                        <img src="./assets/img/img.jpg" alt="">
                                    </div>
                                    <div class="img-content">
                                        <span uk-icon="icon: user"></span>
                                        <span>By admin</span>

                                        <span uk-icon="icon: calendar" class="uk-margin-left"></span>
                                        <span>13 Sept 2022</span>
                                        <a href="news-secondary.php">
                                            <h3>Title of the news</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="news-wrapper">
                                <div class="uk-position-relative uk-margin-medium-top">
                                    <div class="img-bg">
                                        <img src="./assets/img/img.jpg" alt="">
                                    </div>
                                    <div class="img-content">
                                        <span uk-icon="icon: user"></span>
                                        <span>By admin</span>

                                        <span uk-icon="icon: calendar" class="uk-margin-left"></span>
                                        <span>13 Sept 2022</span>
                                        <a href="news-secondary.php">
                                            <h3>Title of the news</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="uk-width-1-3@m sidebar uk-margin-medium-top">
                        <form class="uk-search uk-search-default">
                            <a href="#" class="uk-search-icon-flip" title="Search" uk-search-icon></a>
                            <input class="uk-search-input" type="search" placeholder="Search">
                        </form>
                        <div class="sidebar-content">

                            <div class="category uk-margin-medium-top">
                                <div class="uk-flex uk-flex-middle title">
                                    <img src="./assets/img/category.png" alt="">
                                    <h4>Category</h4>
                                </div>
                                <ul class="uk-list">
                                    <li><span uk-icon="icon: arrow-right" class="uk-margin-small-left"></span><a
                                            href="#">Cooperative</a>
                                    <li><span uk-icon="icon: arrow-right" class="uk-margin-small-left"></span><a
                                            href="#">News</a>
                                    <li><span uk-icon="icon: arrow-right" class="uk-margin-small-left"></span><a
                                            href="#">Scheme</a>
                                    <li><span uk-icon="icon: arrow-right" class="uk-margin-small-left"></span><a
                                            href="#">Collector</a>
                                    <li><span uk-icon="icon: arrow-right" class="uk-margin-small-left"></span><a
                                            href="#">News</a>
                                    </li>
                                    <li><span uk-icon="icon: arrow-right" class="uk-margin-small-left"></span><a
                                            href="#">Current account</a>
                                    </li>
                                </ul>
                            </div>

                            <hr>

                            <div class="latest-news uk-margin-medium-top">
                                <div class="uk-flex uk-flex-middle title">
                                    <img src="./assets/img/news.png" alt="">
                                    <h4>Latest News</h4>
                                </div>

                                <div class="uk-grid uk-flex-middle uk-margin-top">
                                    <div class="uk-width-1-3">
                                        <img src="./assets/img/img.jpg" alt="">
                                    </div>
                                    <div class="uk-width-expand uk-padding-small">
                                        <a href="news-secondary.php">
                                            <h4>Title</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="uk-grid uk-flex-middle uk-margin-top">
                                    <div class="uk-width-1-3">
                                        <img src="./assets/img/img.jpg" alt="">
                                    </div>
                                    <div class="uk-width-expand uk-padding-small">
                                        <a href="news-secondary.php">
                                            <h4>Title</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="uk-grid uk-flex-middle uk-margin-top">
                                    <div class="uk-width-1-3">
                                        <img src="./assets/img/img.jpg" alt="">
                                    </div>
                                    <div class="uk-width-expand uk-padding-small">
                                        <a href="news-secondary.php">
                                            <h4>Title</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="social-media uk-margin-medium-top">
                                <div class="uk-flex uk-flex-middle title">
                                    <img src="./assets/img/social-media.png" alt="">
                                    <h4>Social Media</h4>
                                </div>

                                <div class="uk-margin-top">
                                    <a href="#"><span uk-icon="icon: facebook;ratio:2"
                                            class="uk-margin-right"></span></a>
                                    <a href="#"><span uk-icon="icon: twitter;ratio:2"
                                            class="uk-margin-right"></span></a>
                                    <a href="#"><span uk-icon="icon: instagram;ratio:2"
                                            class="uk-margin-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- main section ends  -->

    <?php 
   include "footer.php";
   ?>