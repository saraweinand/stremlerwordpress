<?php get_header(); ?>


<article>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <?php else : ?>
<?php endif; ?>

        <div class="services_container">
        <div class="col three-even services" id="services">

            <div class="title">
                <h2>Services We Offer</h2>
            </div>
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/resident.jpg" alt="">
                <p><?php echo get_post_field('post_content', 11); ?></p>
            </section>
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/sitedev.jpg" alt="">
                <p><?php echo get_post_field('post_content', 28); ?></p>
            </section>
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/roadconstruction.jpg" alt="">
                <p><?php echo get_post_field('post_content', 30); ?></p>
            </section>
    </div>
        </div>

        <div class="col fourty-sixty about" id="about">
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/landingpage-2.jpg" alt="">
            </section>
            <section>
                <h2>About Stremler Gravel</h2>
                <p><?php echo get_post_field('post_content', 32); ?></p>
            </section>
        </div>

        <div class="col four-even gallery" id="pit">
            <div class="title">
                <h2><?php echo get_the_title( 58 ); ?></h2>
            </div>
            
                <?php echo get_post_field('post_content', 58); ?>
           
        </div>

        <div class="col fourty-sixty calculator" id="calculator">
            <section>
                <img src="<?php bloginfo( 'template_url' ); ?>/images/landingpage-4.jpg" alt="">
            </section>
            <section>
                <h2>Gravel Calculator</h2>
                <h4><?php echo get_post_field('post_content', 34); ?></h4>
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
                <h2><?php echo get_the_title( 73 ); ?></h2>
            </div>
            
                <?php echo get_post_field('post_content', 73); ?>
        </div>

        <div class="col fourty-sixty contact" id="contact">
            <section>
                <div>
                <div class="col ten-ninety">
                        <section>
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/contacticons-03.png" alt="">
                        </section>
                        <section>
                            <?php echo get_post_field('post_content', 36); ?>
                        </section>
                </div>
                <div class="col ten-ninety">
                        <section>
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/contacticons-02.png" alt="">
                        </section>
                        <section>
                            <?php echo get_post_field('post_content', 38); ?>
                        </section>
                </div>
                <div class="col ten-ninety">
                        <section>
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/contacticons-01.png" alt="">
                        </section>
                        <section>
                            <?php echo get_post_field('post_content', 40); ?>
                        </section>
                </div>
                </div>
            </section>
            <section>
                <h2><?php echo get_the_title( 75 ); ?></h2>
                <h4><?php echo get_post_field('post_content', 75); ?></h4>
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
                <h2><?php echo get_the_title( 77 ); ?></h2>
            </div>
            <?php echo get_post_field('post_content', 77); ?>
        </div>

   
</article>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>