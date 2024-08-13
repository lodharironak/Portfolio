<?php

/**
 * Template Name: home
 */
get_header();
$banner_image = get_field('banner_image');
$about_content = get_field('about_content');
$positon_content = get_field('positon_content');
$about_us_content = get_field('about_us_content');
$sklils_content = get_field('sklils_content');
$resume_text = get_field('resume_text');
$sumary_text = get_field('sumary_text');
$project_content = get_field('project_content');
?>
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="<?php echo $banner_image['url']; ?>" alt="" data-aos="fade-in" class="">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h2>Ronak Lodhari</h2>
            <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer">Wordpress Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
        </div>
    </section>
    <!-- /Hero Section -->
    <!-- About Section -->
    <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>
            <p><?php echo $about_content; ?></p>
        </div>
        <!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-center">
                <!-- <div class="col-lg-4">
                    <img src="https://bootstrapmade.com/demo/templates/iPortfolio/assets/img/my-profile-img.jpg" class="img-fluid" alt="">
                </div> -->
                <div class="col-lg-12 content">
                    <h2><?php echo $positon_content; ?></h2>
                    <p class="fst-italic py-3"><?php echo $about_us_content; ?></p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <?php
                                if (have_rows('my_personal')) :
                                    while (have_rows('my_personal')) : the_row();
                                    $birthday = get_sub_field('birthday');
                                    $phone = get_sub_field('phone');
                                    $city = get_sub_field('city');
                                    $state = get_sub_field('state');
                                ?>
                                <li><i class="bi bi-chevron-right"></i> <?php echo $birthday; ?></li>
                                <li><i class="bi bi-chevron-right"></i> <?php echo $phone; ?></li>
                                <li><i class="bi bi-chevron-right"></i> <?php echo $city; ?></li>
                                <li><i class="bi bi-chevron-right"></i> <?php echo $state; ?></li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <?php
                                if (have_rows('my_bio')) :
                                    while (have_rows('my_bio')) : the_row();
                                        $age = get_sub_field('age');
                                        $degree = get_sub_field('degree');
                                        $email = get_sub_field('email');
                                        $freelance = get_sub_field('freelance');
                                ?>
                                        <li><i class="bi bi-chevron-right"></i> <?php echo $age; ?></li>
                                        <li><i class="bi bi-chevron-right"></i> <?php echo $degree; ?></li>
                                        <li><i class="bi bi-chevron-right"></i> <?php echo $email; ?></li>
                                        <li><i class="bi bi-chevron-right"></i> <?php echo $freelance; ?></li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->
    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Skills</h2>
            <p><?php echo $sklils_content; ?></p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row skills-content skills-animation">
                <div class="col-lg-6">
                    <div class="progress">
                        <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="progress">
                        <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!-- End Skills Item -->
                    <div class="progress">
                        <span class="skill"><span>WordPress/CMS</span> <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!-- End Skills Item -->
                    <div class="progress">
                        <span class="skill"><span>jquery</span> <i class="val">55%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!-- End Skills Item -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Skills Section -->
    <!-- Resume Section -->
    <section id="resume" class="resume section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Resume</h2>
            <p><?php echo $resume_text; ?></p>
        </div>
        <!-- End Section Title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Sumary</h3>

                    <div class="resume-item pb-0">
                        <p><em><?php echo $sumary_text; ?></em></p>
                        <ul>
                            <li>Ahmedabad, gujarat</li>
                            <li>9106685143</li>
                        </ul>
                    </div><!-- Edn Resume Item -->

                    <h3 class="resume-title">Education</h3>
                    <?php
                    if (have_rows('education_details')) :
                        while (have_rows('education_details')) : the_row();
                            $clg_degree = get_sub_field('clg_degree');
                            $clg_year = get_sub_field('clg_year');
                            $clg_name = get_sub_field('clg_name');
                            $clg_content = get_sub_field('clg_content');
                    ?>
                    <div class="resume-item">
                        <h4><?php echo $clg_degree; ?></h4>
                        <h5><?php echo $clg_year; ?></h5>
                        <p><em><?php echo $clg_name; ?></em></p>
                        <p><?php echo $clg_content; ?></p>
                    </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="resume-title">Professional Experience</h3>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php if (have_rows('experience_details')) : ?>
                                <?php while (have_rows('experience_details')) : the_row();
                                    $experience_h4 = get_sub_field('experience_h4');
                                    $experience_h5 = get_sub_field('experience_h5');
                                    $experience_city = get_sub_field('experience_city');
                                ?>
                                    <div class="resume-item">
                                        <h4><?php echo $experience_h4; ?></h4>
                                        <h5><?php echo $experience_h5; ?></h5>
                                        <p><em><?php echo $experience_city; ?></em></p>
                                        <?php if (have_rows('experience_content')) : ?>
                                            <ul>
                                                <?php while (have_rows('experience_content')) : the_row();
                                                    $experience_ptag = get_sub_field('experience_ptag');
                                                ?>
                                                    <li>
                                                        <p><?php echo $experience_ptag; ?></p>
                                                    </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /Resume Section -->
    <!-- Services Section -->
    <section id="portfolio" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Project Details</h2>
            <p><?php echo $project_content; ?></p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                    <div>
                        <h4 class="title"><a href="https://azv.be/" target="_blank" class="stretched-link">AZV</a></h4>
                        <p>AZV i NGO website which provides healthcare services in Belgium and africa.</p>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                    <div>
                        <h4 class="title"><a href="https://securitiesdm.com/" target="_blank" class="stretched-link">SDM</a></h4>
                        <p class="description">SDM isa family-owned investment company specialised in private banking services. We have used Advanced Custom Fields and Cookle banner plugin for WordPress site for security we used ithemes security pro plugin. for multiple language we used WPML plugins.</p>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                    <div>
                        <h4 class="title"><a href="https://slappiebrand.com/" target="_blank" class="stretched-link">Slappiedbrand</a></h4>
                        <p class="description">Slappiedbrand Website is product base website In USA. We use woocommenrnce. rafflepress pro and elementor plugins.</p>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                    <div>
                        <h4 class="title"><a href="https://altwood.be/" target="_blank" class="stretched-link">Altwood</a></h4>
                        <p class="description">Altwood isa interior furniture website. we have used greenshift plugin.</p>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                    <div>
                        <h4 class="title"><a href="https://radyx.com" target="_blank" class="stretched-link">Radyx</a></h4>
                        <p class="description">Radys provides advisory services like Finance. Operations: Human Resources. We used Advanced Custom Fields hubspot Integration plugins</p>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                    <div>
                        <h4 class="title"><a href="https://valuexstream.eu/" target="_blank" class="stretched-link">Valuexstream</a></h4>
                        <p class="description">Valuexstream ts for strategic and operational optimization in the world of logistics and supply chains, We have used Advanced Custom Flelds, Mega menu and Cookle banner plugin for WordPress site for we used themes security pro plugin multipl language we used WML.</p>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                    <div>
                        <h4 class="title"><a href="https://wheelhousehr.com/home/" target="_blank" class="stretched-link">Wheelhousehr</a></h4>
                        <p>Whether you are a small or a-mid-sized organization, scaling and growing brings with it more time-consuming and complex human resource needs, Thats why we created Wheelhouse, the simplified approach to your HR solutions.</p>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                    <div>
                        <h4 class="title"><a href="https://www.tec.be/" target="_blank" class="stretched-link">Tec.be</a></h4>
                        <p class="description">At Tec we have been working on various projects in sectors for more than 25 years as industry, IT, building & infrastructure, chemicals & petrochemicals. Bringing together wonderful people and protean adventures is what we do, 20 we provide magic.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                    <div>
                        <h4 class="title"><a href="https://www.vinix.be/" target="_blank" class="stretched-link">Vinix.be</a></h4>
                        <p class="description">We are an independent creative apency fully dedicated to branding, digital marketing and web design. Collaborating with leading creatives in a variety of fields we boost companies, products and brands.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services Section -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>The best way to predict your future is to create it.</p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>Lotus School near Sweet Home Society,<br>Jodhpur Gam Ahmedabad</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <a href="tel:+9106685143"><p>+91 8849302848</p></a>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <a href="email:ronaklodhari.6982@gmail.com">ronaklodhari.6982@gmail.com</a>
                            </div>
                        </div><!-- End Info Item -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.259510396472!2d72.56764567400182!3d23.05094561527123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e847d2cb8b615%3A0x5758ff2a651b2c5a!2sKetan%20Apartment!5e0!3m2!1sen!2sin!4v1721304921095!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row gy-4">
                        <?php echo do_shortcode('[contact-form-7 id="d9d115a" title="Contact form"]');?>
                    </div>
                </div>
                <!-- End Contact Form -->
            </div>
        </div>
    </section>
    <!-- /Contact Section -->
</main>
<?php get_footer(); ?>