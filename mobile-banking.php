<?php 
   include "header.php";
   ?>

    <main>
         <!-- breadcrumb section starts  -->
      <section class="bread-crumb">
            <div class="uk-container uk-container-expand">
                <div class="bread-crumb-content uk-flex uk-flex-middle uk-flex-between">
                    <div class="uk-flex uk-flex-middle bread-crumb-title">
                        <img src="./assets/img/mobile-banking.png" alt="">
                        <h3>Mobile Banking</h3>
                    </div>
                    <div class="bread-crumb-link">
                        <span uk-icon="home"></span>
                        <a href="index.php">HOME</a><span>Services</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb section ends  -->

        <section class="uk-margin-medium-top">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid uk-child-width-1-2@m organization-history-benefit uk-flex-middle uk-margin-top uk-margin-medium-bottom">
                    <div class="uk-width-1-3@m">
                        <div class="uk-position-relative">
                            <a href="#">
                                <div class="uk-position-relative uk-overflow-hidden">
                                    <img src="./assets/img/mobile-banking.jpg" alt="" class="uk-width-1-1">
                                    <div class="img-border"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="uk-width-expand@m uk-margin-top" uk-scrollspy="cls: uk-animation-slide-bottom; target: .service; delay: 300; repeat: false">
                        <div class="service">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit veniam odit illum nobis, ipsum perspiciatis dolorum mollitia reprehenderit modi odio. Illum, accusamus consectetur pariatur impedit quasi optio in nihil veniam? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero illum, veniam autem explicabo est sequi esse? Cumque adipisci inventore sequi culpa libero assumenda quo fugiat? Quae architecto quasi laboriosam nam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores qui ut nemo facere cum. Adipisci animi eligendi sunt nesciunt recusandae voluptate modi quo, voluptatibus, officiis, perferendis placeat voluptatem cum reprehenderit.</p>
                        </div>
                    </div>
                </div>    
            </div>
        </section>
    </main>

<?php 
   include "footer.php";
   ?>