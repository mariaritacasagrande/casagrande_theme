<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<!-- Main content -->
<main id="main">
    <!-- Page head/intro title & subtitle -->
    <div class="container mar-btm-md">
        <div class="intro col-md-6 col-md-offset-6">
            <p><?php the_content(); ?></p>
        </div>
    </div>

    <!-- Contact form -->
    <div class="container contact-form mar-btm-xlg">
        <div class="row">
            <div class="col-md-6 col-md-offset-6">
                <form class="validate-form">
                    <div class="row">
                        <div class="input-row col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control required-field" id="name" placeholder="Name"
                                required>
                        </div>
                        <div class="input-row col-md-6">
                            <label for="mail">Email address</label>
                            <input type="email" class="form-control required-email" id="mail" placeholder="Email"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-row col-md-6">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control required-number" id="phone" placeholder="Phone Number"
                                required>
                        </div>
                        <div class="input-row col-md-6">
                            <label for="topic">Topic</label>
                            <select id="topic" class="form-control required-select">
                                <option>Select</option>
                                <option>Project in process</option>
                                <option>New Project</option>
                                <option>General Queries</option>
                                <option>Say Hello</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-row col-md-12">
                            <label for="message">Comment</label>
                            <textarea id="message" cols="30" rows="10" placeholder="Say Hello!"
                                class="form-control required-field" required></textarea>
                        </div>
                        <div id="submit-btn">
                            <input type="submit" value="send">
                            <i class="arrow right-arrow"></i>
                        </div>
                    </div>
                </form>
                <small id="msg-submit-form" class="form-success hidde">We will back to you as soon as possible.
                    Thanks!</small>
            </div>
        </div>
    </div>
    <!-- ./Contact form -->

    <!-- Map -->
    <div class="map-container mar-btm-lg" data-map-height="675">
        <div class="map-zoom">
            <a class="zoom-in" href="#"><i class="btn-plus">+</i></a>
            <a class="zoom-out" href="#"><i class="btn-minus">-</i></a>
        </div>
        <div id="map-canvas"></div>
    </div>

    <!-- Newsletter form -->
    <div class="container newsletter mar-btm-lg">
        <div class="row">
            <div class="col-md-6 col-md-offset-6">
                <h5>Stay tunned</h5>
                <p class="feat-text highlight">Subscribe to our newsletter in order to stay updated about our new
                    projects.</p>
                <form class="validate-news">
                    <div class="row input-row col-md-12">
                        <input type="email" id="news-mail" class="form-control required-email"
                            placeholder="Your e-mail">
                    </div>
                    <button type="submit" class="btn btn-submit">Subscribe<i class="arrow right-arrow"></i></button>
                </form>
                <small>* we promise that we won´t spam you, never.</small>
                <small id="msg-submit-news" class="form-success hidde">You have been succesfully subscribed to our
                    newsletter</small>
            </div>
        </div>
    </div>
    <!-- ./Newsletter form -->

    <!-- Go top button/arrow -->
    <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>
</main>
<!-- #/main content area -->
<?php get_footer(); ?>