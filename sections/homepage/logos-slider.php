<?php if ( ! get_field('ls_checkbox') ) : ?>
        <div class="mx-auto pt-[50px] md:pt-[60px] lg:pt-[70px] xl:pt-[120px]">
            <div class="slider">
                <?php if( have_rows('logo_slider') ): ?>
                    <div class="slider-wrapper">
                        <?php while( have_rows('logo_slider') ): the_row(); 
                            $image = get_sub_field('logo_image'); // Use the actual sub-field name for your image
                            if( $image ):
                                // Output the image
                                ?>
                                <img src="<?php echo esc_url($image); ?>"/>
                                <?php
                            endif;
                        endwhile; ?>
                        <?php while( have_rows('logo_slider') ): the_row(); 
                            $image = get_sub_field('logo_image'); // Use the actual sub-field name for your image
                            if( $image ):
                                // Output the image
                                ?>
                                <img src="<?php echo esc_url($image); ?>"/>
                                <?php
                            endif; 
                        endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
<?php endif; ?>
