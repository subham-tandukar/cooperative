<?php 
   include "header.php";
   ?>

<main>
      <!-- breadcrumb section starts  -->
      <section class="bread-crumb">
            <div class="uk-container uk-container-expand">
                <div class="bread-crumb-content uk-flex uk-flex-middle uk-flex-between">
                    <div class="uk-flex uk-flex-middle bread-crumb-title">
                        <img src="./assets/img/member.png" alt="" style="filter: invert(0); height: 50px">
                        <h3>Board Members</h3>
                    </div>
                    <div class="bread-crumb-link">
                        <span uk-icon="home"></span>
                        <a href="index.php">HOME</a><span>About</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb section ends  -->

        <section class="uk-container uk-container-expand uk-margin-top">
        <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-top"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .board-member-wrapper; delay: 300; repeat: false">
                <div class="board-member-wrapper uk-visible@m">
                    
                </div>
                <div class="board-member-wrapper">
                    <div class="uk-position-relative">
                        
                            <div class="board-member-img">
                                <img src="./assets/img/img.jpg" alt="">
                                <div class="img-border"></div>
                            </div>
                       
                    </div>

                    <h5>Surya Dhoj Neupane</h5>
                    <p>Chairman of Board & CEO</p>

                </div>
                <div class="board-member-wrapper uk-visible@m">
                   
                </div>
                <div class="board-member-wrapper">
                    <div class="uk-position-relative">
                        
                            <div class="board-member-img">
                                <img src="./assets/img/img.jpg" alt="">
                                <div class="img-border"></div>
                            </div>
                       
                    </div>

                    <h5>Surya Dhoj Neupane</h5>
                    <p>Chairman of Board & CEO</p>

                </div>
                <div class="board-member-wrapper">
                    <div class="uk-position-relative">
                        
                            <div class="board-member-img">
                                <img src="./assets/img/img.jpg" alt="">
                                <div class="img-border"></div>
                            </div>
                       
                    </div>

                    <h5>Surya Dhoj Neupane</h5>
                    <p>Chairman of Board & CEO</p>

                </div>
                <div class="board-member-wrapper">
                    <div class="uk-position-relative">
                        
                            <div class="board-member-img">
                                <img src="./assets/img/img.jpg" alt="">
                                <div class="img-border"></div>
                            </div>
                       
                    </div>

                    <h5>Surya Dhoj Neupane</h5>
                    <p>Chairman of Board & CEO</p>

                </div>
            </div>
        </section>
</main>

<?php 
   include "footer.php";
   ?>