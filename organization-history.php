<?php 
   include "header.php";
   ?>

<main>
     <!-- breadcrumb section starts  -->
     <section class="bread-crumb">
            <div class="uk-container uk-container-expand">
                <div class="bread-crumb-content uk-flex uk-flex-middle uk-flex-between">
                    <div class="uk-flex uk-flex-middle bread-crumb-title">
                        <img src="./assets/img/org-history.png" alt="" style="filter: invert(0); height: 50px">
                        <h3>Organization History</h3>
                    </div>
                    <div class="bread-crumb-link">
                        <span uk-icon="home"></span>
                        <a href="index.php">HOME</a><span>About</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb section ends  -->

        <section class="uk-margin-medium-top organization-history">
            <div class="uk-container uk-container-expand">
                <div class="uk-flex uk-flex-middle title">
                    <img src="./assets/img/what.png" alt="" style="filter:invert(1)">
                    <h4>Facts About Us</h4>
                </div>

                <div class="uk-grid uk-child-width-1-2@m organization-history-wrapper uk-margin-medium-top uk-flex-middle">
                    <div class="organization-history-img">
                    <img src="./assets/img/grp-img.png" alt="">
                    <div class="org-line"></div>
                    </div>

                    <div>
                        <div uk-scrollspy="cls: uk-animation-fade; delay: 300; repeat: false">
                            <p>We at Geoland Travels provide the best arrangement for MICE (Meetings, Incentives, Conferences & Exhibitions. Let our team do the planning and execution for your betterment. Our Management Team comes with long standing experienced in aviation, experienced in top tour companies and travel business proprietor.We at Geoland Travels provide the best arrangement for MICE (Meetings, Incentives, Conferences & Exhibitions. Let our team do the planning and execution for your betterment. Our Management Team comes with long standing experienced in aviation, experienced in top tour companies and travel business proprietor.</p>
                        </div>
                    </div>
                </div>

                <div class="uk-flex uk-flex-middle title uk-margin-large-top">
                    <img src="./assets/img/plus.png" alt="">
                    <h4>Discover More Benefits <br> <span>Provide an overview of this product benefit.</span></h4>
                </div>

                <div class="uk-grid uk-child-width-1-2@m organization-history-benefit uk-flex-middle uk-margin-top uk-margin-medium-bottom">
                    <div class="uk-width-1-3@m">
                   
                    <div class="uk-position-relative discover">
                        <a href="#">
                            <div class="uk-position-relative org-ben-img uk-overflow-hidden">
                                <img src="./assets/img/img.jpg" alt="" class="">
                                <div class="img-border"></div>
                            </div>
                        </a>
                    </div>
                    </div>

                    <div class="uk-width-expand@m">
                    <div class="uk-grid uk-child-width-1-2@s"
                    uk-scrollspy="cls: uk-animation-slide-bottom; target: .product; delay: 300; repeat: false">
                    <div class="product">
                        <div class="product-features-wrapper">
                            <div class="product-features-content">
                                <p>Insurance</p>
                            </div>
                            <div class="product-features-list">
                                <h5>01</h5>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-features-wrapper">
                            <div class="product-features-content">
                                <p>Insurance</p>
                            </div>
                            <div class="product-features-list">
                                <h5>02</h5>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-features-wrapper">
                            <div class="product-features-content">
                                <p>Insurance</p>
                            </div>
                            <div class="product-features-list">
                                <h5>03</h5>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-features-wrapper">
                            <div class="product-features-content">
                                <p>Insurance</p>
                            </div>
                            <div class="product-features-list">
                                <h5>04</h5>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-features-wrapper">
                            <div class="product-features-content">
                                <p>Insurance</p>
                            </div>
                            <div class="product-features-list">
                                <h5>05</h5>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </section>
</main>

<?php 
   include "footer.php";
   ?>