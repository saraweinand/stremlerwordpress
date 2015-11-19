

            <div class="title">
                <h2><?php echo get_the_title( 13 ); ?></h2>
            </div>
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/resident.jpg" alt="">
                <h3><?php echo get_the_title( 13 ); ?> </h3>
                <p><?php echo get_post_field('post_content', 13); ?></p>
            </section>
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/sitedev.jpg" alt="">
                <h3><?php echo get_the_title( 11 ); ?></h3>
                <p><?php echo get_post_field('post_content', 11); ?></p>
            </section>
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/roadconstruction.jpg" alt="">
                <h3><?php echo get_the_title( 1 ); ?></h3>
                <p><?php echo get_post_field('post_content', 1); ?></p>
            </section>

        </div>

        <div class="col fourty-sixty about" id="about">
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/landingpage-2.jpg" alt="">
            </section>
            <section>
                <h2><?php echo get_the_title( 13 ); ?></h2>
                <h4><?php echo get_the_title( 13 ); ?></h4>
                <p><?php echo get_post_field('post_content', 11); ?></p>
            </section>
        </div>

        <div class="col four-even gallery" id="pit">
            <div class="title">
                <h2><?php echo get_the_title( 13 ); ?></h2>
            </div>
            <section class="gallery-rock a">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/gravel-1.jpg" alt="">
                <h4><?php echo get_the_title( 13 ); ?></h4>
            </section>
            <section class="gallery-rock b">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/gravel-2.jpg" alt="">
                <h4><?php echo get_the_title( 13 ); ?></h4>
            </section>
            <section class="gallery-rock c">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/gravel-3.jpg" alt="">
                <h4><?php echo get_the_title( 13 ); ?></h4>
            </section>
            <section class="gallery-rock d">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/gravel-4.jpg" alt="">
                <h4><?php echo get_the_title( 13 ); ?></h4>
            </section>
           <section class="gallery-rock e">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/gravel-5.jpg" alt="">
                <h4><?php echo get_the_title( 13 ); ?></h4>
            </section>
            <section class="gallery-rock f">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/gravel-6.jpg" alt="">
                <h4><?php echo get_the_title( 13 ); ?></h4>
            </section>
            <section class="gallery-rock g">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/gravel-7.jpg" alt="">
                <h4><?php echo get_the_title( 13 ); ?></h4>
            </section>
            <section class="gallery-rock h">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/gravel-8.jpg" alt="">
                <h4><?php echo get_the_title( 13 ); ?></h4>
            </section>
        </div>

        <div class="col fourty-sixty calculator" id="calculator">
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/landingpage-4.jpg" alt="">
            </section>
            <section>
                <h2><?php echo get_the_title( 13 ); ?></h2>
                <h4><?php echo get_the_title( 13 ); ?></h4>
                <h4 class="calcTitle">Area Size:</h4>
                <form>

                    <input type="text" id="lengthFeet" placeholder="length (in feet)"></input>
                    <input type="text" id="widthFeet" placeholder="width (in feet)"></input>
                    
                    <h4 class="calcTitle">Coverage:</h4>
                    <div id="depth">
                      <div>
                         <input id="radio-1" class="radio-custom" name="radio-group" type="radio" checked>
                         <label for="radio-1" class="radio-custom-label">Heavy (about 3")</label>
                       </div>
                       <div>
                          <input id="radio-2" class="radio-custom"name="radio-group" type="radio">
                          <label for="radio-2" class="radio-custom-label">Moderate (about 2")</label>
                        </div>
                        <div>
                          <input id="radio-3" class="radio-custom" name="radio-group" type="radio">
                          <label for="radio-3" class="radio-custom-label">Light (about 1")</label>
                        </div>

                    </div><!--depth-->


                    <input type="button" value="Calculate" class="submit" onClick="calculateGravel()">

                </form>
                <h3 class="coverageh3">Estimated Cubic Yards: <div id="coverage"></div></h3>
            </section>
        </div>



        <div class="col four-even gallery" id="projects">
            <div class="title">
                <h2><?php echo get_the_title( 13 ); ?></h2>
            </div>
            <section>
                <div class="imagecontainer">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/projectgallery-1.jpg" class="cover">
                </div>
            </section>
            <section>
                <div class="imagecontainer">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/projectgallery-2.jpg" alt="">
                </div>
            </section>
            <section>
                <div class="imagecontainer">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/projectgallery-3.jpg" alt="">
                </div>
            </section>
            <section>
                <div class="imagecontainer">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/projectgallery-4.jpg" alt="">
                </div>
            </section>
            <section>
                <div class="imagecontainer">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/projectgallery-4.jpg" alt="">
                </div>
            </section>
            <section>
                <div class="imagecontainer">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/projectgallery-3.jpg" alt="">
                </div>
            </section>
            <section>
                <div class="imagecontainer">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/projectgallery-2.jpg" alt="">
                </div>
            </section>
            <section>
                <div class="imagecontainer">
                    <img src="<?php bloginfo( 'template_url' ); ?>/images/projectgallery-1.jpg" alt="">
                </div>
            </section>
        </div>

        <div class="col fourty-sixty contact" id="contact">
            <section>
                <div>
                <div class="col ten-ninety">
                        <section>
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/contacticons-03.png" alt="">
                        </section>
                        <section>
                            <h3><?php echo get_the_title( 13 ); ?></h3>
                            <h5><?php echo get_the_title( 13 ); ?></h5>
                            <h3><?php echo get_the_title( 13 ); ?></h3>
                            <h5><?php echo get_the_title( 13 ); ?></h5>
                        </section>
                </div>
                <div class="col ten-ninety">
                        <section>
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/contacticons-02.png" alt="">
                        </section>
                        <section>
                            <h3><?php echo get_the_title( 13 ); ?></h3>
                            <h5><?php echo get_the_title( 13 ); ?></h5>
                            <h3><?php echo get_the_title( 13 ); ?></h3>
                            <h5><?php echo get_the_title( 13 ); ?></h5>
                        </section>
                </div>
                <div class="col ten-ninety">
                        <section>
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/contacticons-01.png" alt="">
                        </section>
                        <section>
                            <h5><?php echo get_the_title( 13 ); ?></h5>
                        </section>
                </div>
                </div>
            </section>
            <section>
                <h2><?php echo get_the_title( 13 ); ?></h2>
                <h4><?php echo get_the_title( 13 ); ?></h4>
                <form action="">
                    <input type="text" placeholder="name"><input type="text" placeholder="phone">
                    <input type="text" placeholder="email">
                    <textarea id="message" class="input" name="message" rows="7" cols="30" placeholder="message"></textarea>
                    <button>Send</button>
                </form>
            </section>
        </div>

        <div class="col two-even testimonials">
            <div class="title">
                <h2><?php echo get_the_title( 13 ); ?></h2>
            </div>
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/user-placeholder.png" alt=""> <h4><?php echo get_the_title( 13 ); ?></h4>
            </section>
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/user-placeholder.png" alt=""> <h4><?php echo get_the_title( 13 ); ?></h4>
            </section>
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/user-placeholder.png" alt=""> <h4><?php echo get_the_title( 13 ); ?></h4>
            </section>
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/user-placeholder.png" alt=""> <h4><?php echo get_the_title( 13 ); ?></h4>
            </section>
        </div>

