<?php 
   include "header.php";
   ?>

   <main>
      <!-- breadcrumb section starts  -->
      <section class="bread-crumb">
            <div class="uk-container uk-container-expand">
                <div class="bread-crumb-content uk-flex uk-flex-middle uk-flex-between">
                    <div class="uk-flex uk-flex-middle bread-crumb-title">
                        <img src="./assets/img/phone.png" alt="" style="filter: invert(0); height: 50px">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="bread-crumb-link">
                        <span uk-icon="home"></span>
                        <a href="index.php">HOME</a><span>Contact</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb section ends  -->

        <section class="contact">
        <div class="uk-container uk-container-expand">
                <h4 class="uk-margin-medium-top uk-text-bold">We love questions and feedbacks - and we're always happy to
                    help!</h4>
                
                <form>
                    <div class="contact-box">
                       
                        <div class="uk-grid uk-child-width-1-2 uk-flex-wrap">
                            <div>
                                <p class="uk-text-bold">Full Name:</p>
                                <input type="text" id="fullname" class="uk-input"
                                     required>
                               
                            </div>
                            <div>
                                <p class="uk-text-bold">Email:</p>
                                <input type="email" id="email" class="uk-input" 
                                    required>
                            </div>
                            <div>
                                <p class="uk-text-bold">Contact:</p>
                                <input type="text" id="contact" class="uk-input" 
                                    required>
                               
                            </div>
                            <div >
                                <p class="uk-text-bold">Organisation:</p>
                                <input type="text" id="organisation" class="uk-input"
                                     required>
                               
                            </div>
                            <div>
                            <p class="uk-text-bold">Message:</p>
                                <textarea cols="30" rows="10" id="type-msg" class="uk-input"></textarea>
                                
                            </div>
                        </div>

                    
                        <div class="text-end px-sm-5 px-3 pt-5 pb-2">
                            <button class="uk-button" type="submit">Submit</button>
                        </div>

                    </div>
                </form>

                <div class="contact-detail">
                    <div class="uk-grid uk-child-width-1-3 uk-flex-wrap">
                        <div class="uk-text-center">
                            <h5 class="uk-text-bold">Address</h5>
                            <i class="fa fa-map-marker-alt fa-5x"></i>
                            <p class="uk-text-center">Kalimati, Kathmandu</p>
                        </div>

                        <div class="uk-text-center">
                            <h5 class="uk-text-bold">Contact</h5>
                            <i class="fa fa-phone fa-5x"></i>
                            <a href="tel:9866336577">
                                <p class="uk-text-center">9866336577</p>
                            </a>
                        </div>

                        <div class="uk-text-center">
                            <h5 class="uk-text-bold">Email</h5>
                            <i class="fa fa-envelope fa-5x"></i>
                            <a href="mailto:khlkismat@gmail.com">
                                <p class="uk-text-center">khlkismat@gmail.com</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   </main>

   <?php 
   include "footer.php";
   ?>