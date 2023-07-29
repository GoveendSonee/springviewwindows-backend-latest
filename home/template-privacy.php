<?php

/**
 * Template Name:  Privacy And Cookies Policy
 */

get_header();
?>

    <!-- Heading  -->
    <section id="heading_pages">
        <div class="container">
            <a  id="back-link" href="">

                <div class="previous">
                    <div class="icon"><i class='bx bx-arrow-back'></i><small>Back</small></div>
                </div>
            </a>
            <div class="topic_page">
                <h1 class="head"><?php the_title(); ?></h1>
                <hr class="hr_headinggallery">
            </div>
        </div>
    </section>
    <!-- End Heading  -->

    <!-- Pages  -->
   <section id="privacy_policy">
    <div class="container">
      <div class="description">
        <?php the_content(); ?>
        <!-- <ol class="list_privacy">
          <li class="list_pricay">
            The Website does not automatically collect any information, except for the information contained in cookies.
          </li>
          <li class="list_pricay">
            Cookies are computer data, in particular text files, which are stored on the end device of the User of the Website and allow the User to use the pages of the Website. Cookies usually contain the name of the website from which they originate, the duration of their storage on the end device, and a unique number. 
          </li>
          <li class="list_pricay">
            The entity that places cookies on the end device of the User of the Website and that has access to those files is the administrator of the Website. 
          </li>
          <li class="list_pricay">
            Cookies are used for: 
            <ul class="ref">
              <li class="ref"> adjusting the content of the Website pages to the User's preferences and optimising the use of pages; in particular, these files allow to recognize the device of the User of the Website and properly display the website in a way adjusted to their individual needs; </li>
              <li class="ref"> creating statistics that help to understand how the Users of the Website are using the pages, which allows for improving their structure and content; </li>
              <li class="ref"> maintaining the session of the User of the Website (after logging in), thanks to which the User does not have to re-enter their login and password on every sub-page of the Website. </li>
            </ul>
          </li>
          <li class="list_pricay">
            The Website uses the following types of cookies: 
            <ul class="ref">
              <li class="ref"> “necessary” cookies, enabling the use of services available on the Website, e.g. authentication cookies used for services that require authentication on the Website; </li>
              <li class="ref"> security cookies, e.g. used to detect fraud in authentication within the Website; </li>
              <li class="ref"> “performance” cookies, enabling the collection of information on the use of the Website pages; </li>
              <li class="ref"> “functional” cookies, allowing for “remembering” of the settings selected by the User and personalising the User's interface, e.g. with regard to the selected language or region of the User's origin, font size, website appearance, etc.; </li>
              <li class="ref"> “advertising” cookies, enabling to provide Users with advertising content that is more appropriate to their interests. </li>
            </ul>
          </li>
          <li class="list_pricay">
            In many cases, the software used for browsing websites (web browser) allows cookies to be stored on the User's end device by default. Users of the Website may change their cookie settings at any time. These settings may be changed, in particular, in such a way as to block the automatic use of cookies in the web browser's settings, or to inform the User about each time cookies are stored on the end device. Detailed information about the possibilities and methods of using cookies can be found in the settings of the software (web browser). 
          </li>
          <li class="list_pricay">
            The administrator of the Website hereby informs that applicable restrictions on the use of cookies may affect certain functionalities available on the Website. 
          </li>
          <li class="list_pricay">
            Cookies may also be stored on the end device of the User of the Website and used by advertisers and partners cooperating with the administrator of the Website. 
          </li>
          <li class="list_pricay">
            For more information on cookies, please visit http://wszystkoociasteczkach.pl/ or the “Help” section of your browser's menu.
          </li>
        </ol> -->
      </div>
    </div>
   </section>
    <!-- End Pages  -->


<?php get_footer(); ?>