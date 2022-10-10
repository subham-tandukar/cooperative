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
                        <img src="./assets/img/gallery.png" alt="" style="filter: invert(1)">
                        <h3>Our Gallery</h3>
                    </div>
                    <div class="bread-crumb-link">
                        <span uk-icon="home"></span>
                        <a href="index.php">HOME</a><span>Gallery</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb section ends  -->

        <section class="uk-container uk-container-expand gallery uk-margin-top">
           
        <div class="uk-flex uk-flex-middle title">
                <img src="./assets/img/video.png" alt="">
                <h4>Our Video</h4>
            </div>

          
            <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s video uk-margin-top"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .gallery-wrapper; delay: 300; repeat: true">
                <div class="gallery-wrapper">
                    <div class="uk-position-relative">
                        <a href="#">
                            <div class="gallery-img">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/V0nQdqnCUF4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </a>
                    </div>

                    <h5 class="sub-title">Title</h5>

                </div>
                <div class="gallery-wrapper">
                    <div class="uk-position-relative">
                        <a href="#">
                            <div class="gallery-img">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/V0nQdqnCUF4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </a>
                    </div>

                    <h5 class="sub-title">Title</h5>

                </div>
                <div class="gallery-wrapper">
                    <div class="uk-position-relative">
                        <a href="#">
                            <div class="gallery-img">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/V0nQdqnCUF4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </a>
                    </div>

                    <h5 class="sub-title">Title</h5>

                </div>
                <div class="gallery-wrapper">
                    <div class="uk-position-relative">
                        <a href="#">
                            <div class="gallery-img">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/V0nQdqnCUF4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </a>
                    </div>

                    <h5 class="sub-title">Title</h5>

                </div>
                <div class="gallery-wrapper">
                    <div class="uk-position-relative">
                        <a href="#">
                            <div class="gallery-img">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/V0nQdqnCUF4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </a>
                    </div>

                    <h5 class="sub-title">Title</h5>

                </div>
                <div class="gallery-wrapper">
                    <div class="uk-position-relative">
                        <a href="#">
                            <div class="gallery-img">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/V0nQdqnCUF4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </a>
                    </div>

                    <h5 class="sub-title">Title</h5>

                </div>
            </div>
        </section>
    </main>
    <!-- main section ends  -->

    <?php 
   include "footer.php";
   ?>