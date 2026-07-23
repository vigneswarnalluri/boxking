<?php
    $title='Contact Us';
    $subTitle='Contact Us';
    $bg_src='assets/img/contact_bg.png';
?>

<?php include './layouts/layout-top.php'?>

    <!--==============================
    Contact Page Area  
    ==============================-->
    <section class="contact-page-area space">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="contact-page-card bg-smoke">
                        <div class="contact-page-card-details">
                            <h4 class="contact-page-card_title">Sales &amp; Leasing</h4>
                            <div class="contact-page-card-text"><i class="ri-phone-line"></i><a class="contact-page-card_link" href="tel:+18005552695">+1 (800) 555-BOXKING</a></div>   
                            <div class="contact-page-card-text"><i class="ri-mail-line"></i><a class="contact-page-card_link" href="mailto:info@boxkingmodular.com">info@boxkingmodular.com</a></div>   
                            <div class="contact-page-card-text"><i class="ri-time-line"></i>Mon - Sat 08:00 - 18:00</div>
                        </div>
                        <div class="contact-page-card-thumb">
                            <img src="assets/img/container_office.png" alt="BoxKing Sales">
                        </div>  
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="contact-page-card bg-smoke">
                        <div class="contact-page-card-details">
                            <h4 class="contact-page-card_title">Custom Fabrication Yard</h4>
                            <div class="contact-page-card-text"><i class="ri-phone-line"></i><a class="contact-page-card_link" href="tel:+18005552695">+1 (800) 555-BOXKING</a></div>   
                            <div class="contact-page-card-text"><i class="ri-mail-line"></i><a class="contact-page-card_link" href="mailto:info@boxkingmodular.com">info@boxkingmodular.com</a></div>   
                            <div class="contact-page-card-text"><i class="ri-time-line"></i>Certified Welding Specialists</div>
                        </div>
                        <div class="contact-page-card-thumb">
                            <img src="assets/img/about_modular.png" alt="BoxKing Welding Yard">
                        </div>  
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="contact-page-card bg-smoke">
                        <div class="contact-page-card-details">
                            <h4 class="contact-page-card_title">Residential Container Homes</h4>
                            <div class="contact-page-card-text"><i class="ri-phone-line"></i><a class="contact-page-card_link" href="tel:+18005552695">+1 (800) 555-BOXKING</a></div>   
                            <div class="contact-page-card-text"><i class="ri-mail-line"></i><a class="contact-page-card_link" href="mailto:info@boxkingmodular.com">info@boxkingmodular.com</a></div>   
                            <div class="contact-page-card-text"><i class="ri-time-line"></i>One-Trip Container Builds</div>
                        </div>
                        <div class="contact-page-card-thumb">
                            <img src="assets/img/container_home.png" alt="BoxKing Container Homes">
                        </div>  
                    </div>
                </div>

            </div>
        </div>
    </section>  
    
    <!--==============================
    Contact Area  
    ==============================-->
    <section class="contact-area-2 space-bottom overflow-hidden">        
        <div class="container">
            <div class="contact-wrap2 space overflow-hidden" data-bg-src="assets/img/hero_container.png">
                <div class="section-animation-shape1-1 shape-mockup animation-infinite" data-top="0" data-left="0" data-bg-src="assets/img/shape/global-line-shape1.png">
                </div>
                <div class="row gy-60 justify-content-lg-end justify-content-center">
                    <div class="col-xl-7">
                        <div class="contact-form-wrap">
                            <div class="title-area">
                                <span class="sub-title text-theme"><img src="assets/img/icon/section-subtitle-icon.svg" alt="img">Get Free Quote </span>
                                <h2 class="sec-title">Ready to Build Your Modular Space?</h2>
                            </div>
                            <form action="mail.php" method="POST" class="contact-form ajax-contact">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="subject" id="subject" class="single-select nice-select form-select">
                                                <option value="" disabled selected hidden>Select Product / Service</option>
                                                <option value="Container Office">Container Office</option>
                                                <option value="Container Home">Container Home</option>
                                                <option value="Portable Cabin">Portable Cabin</option>
                                                <option value="Modular Building">Modular Building</option>
                                                <option value="Custom Fabrication">Custom Fabrication</option>
                                                <option value="DIY Container Kit">DIY Container Kit</option>
                                                <option value="Sales & Leasing">Sales &amp; Leasing Inquiry</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="form-group ">
                                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Message..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-btn col-12">
                                        <button class="btn w-100">Submit Now <i class="ri-arrow-right-up-line"></i></button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                            </form>
                        </div>
                    </div>            
                </div>
            </div>
            
        </div>
    </section>   

    <div class="map-area overflow-hidden">
        <div class="map-sec">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2s!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

<?php include './layouts/layout-bottom.php'?>