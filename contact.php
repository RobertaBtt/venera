<?php
/**
 * 
 *
 * @package WordPress
 * @subpackage Venera
 * @since Venera 1.0
 */

get_header();

?>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
            <![endif]-->
           
            <section class='section-wrapper contact-page-w'>
              <div class='container'>
                <h3 class='section-header'>Contact Page</h3>
                <div class='row'>
                  <div class='span4'>
                    <div class='blog-side-text-block widget-filled widget-yellow'>
                      <h3>Contact Infromation</h3>
                      <ul class="unstyled big-iconed-tips">
                        <li>
                          <i class='icon-map-marker'></i>
                          Address: 4 Penn Plaza, New York, NY
                        </li>
                        <li>
                          <i class='icon-phone-sign'></i>
                          Phone: (212) 465-3244
                        </li>
                        <li>
                          <i class='icon-envelope-alt'></i>
                          Email: info@website.com
                        </li>
                        <li>
                          <i class='icon-globe'></i>
                          Website: www.example.com
                        </li>
                        <li>
                          <i class='icon-facebook-sign'></i>
                          Facebook: facebook.com/example
                        </li>
                        <li>
                          <i class='icon-twitter-sign'></i>
                          Twitter: twitter.com/example
                        </li>
                      </ul>
                      <p>Sed euismod, metus sed congue rutrum, justo elit malesuada quam, id pulvinar velit massa et justo.</p>
                    </div>
                  </div>
                  <div class='span8'>
                    <div class="white-card extra-padding">
                    <form class='form-transparent no-margin-bottom' id='form-add-comment'>
                      <fieldset>
                        <div class='row-fluid'>
                          <div class='span12'>
                            <legend>Complete the form to contact us</legend>
                            <div class='controls controls-row'>
                              <input class='search-input span6' placeholder='Your name' type='text'>
                              <input class='search-input span6' placeholder='Your email' type='text'>
                            </div>
                            <div class='controls controls-row'>
                              <textarea class='span12' placeholder='Your message' rows='6'></textarea>
                            </div>
                            <div class='form-actions'>
                              <button class='btn btn-small'>Submit Message</button>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                    </div>
                  </div>
                </div>
                <div class='row'>
                  <div class='span12'>
                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Madison+Square+Garden,+Penn+Plaza,+New+York,+NY&amp;aq=0&amp;oq=madisson+s&amp;sll=40.697488,-73.979681&amp;sspn=0.603884,1.355438&amp;ie=UTF8&amp;hq=Madison+Square+Garden,&amp;hnear=Penn+Plaza,+New+York&amp;t=m&amp;ll=40.750248,-73.992362&amp;spn=0.005689,0.002124&amp;z=16&amp;output=embed"></iframe>
                  </div>
                </div>
              </div>
            </section>

            <?php get_footer(); ?>
