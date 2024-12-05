<?php if ( ! get_field('pa_checkbox') ) : ?>
    <div class="bg-lightblack flex flex-col gap-mediumGap max-lg:px-[4%] max-2xl:px-[5.5%]">
        <div class="mx-auto py-[80px] flex flex-col gap-mediumGap md:gap-largGap md:py-[60px] max-w-[1420px] lg:py-[70px] xl:py-[120px]">
            <!-- contain -->
            <div class="flex flex-col gap-[10px] lg:w-3/4">
                <?php if ( get_field('pa_sub_title') ) : ?>
                    <p class="font-mono-s text-Smallpsg text-OliveGreen font-light-w uppercase"><?php echo get_field('pa_sub_title'); ?></p>
                <?php endif; ?>
                <?php if ( get_field('pa_title') ) : ?>
                    <h2 class="font-dm font-light text-dark-white text-[32px] leading-medium-lh lg:text-xlText xl:text-2xlText"><?php echo get_field('pa_title'); ?></h2>
                <?php endif; ?>
                <?php if ( get_field('pa_description') ) : ?>
                    <p class="font-dm text-dark-white text-normalpsg lg:text-largepsg "><?php echo get_field('pa_description'); ?></p>
                <?php endif; ?>
            </div>
            <?php if( have_rows('advantages') ): ?>
                <div class="flex w-full gap-smallGap grid min-[642px]:grid-cols-2 xl:grid-cols-3 ">
                    <?php while( have_rows('advantages') ): the_row(); ?>
                        <div class="flex flex-col fade-left gap-[20px] md:w-33.33% lg:gap-[25px]">
                            <div>
                                <?php if ( get_sub_field('ad_imeag') ) : ?>
                                    <img src="<?php echo get_sub_field('ad_imeag'); ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="flex flex-col gap-[10px] lg:gap-[15px]">
                                <?php if ( get_sub_field('ad_title') ) : ?>
                                    <h2 class="font-dm font-light text-dark-white leading-medium-lh text-smallText lg:text-mediumText"><?php echo get_sub_field('ad_title'); ?></h2>
                                <?php endif; ?>
                                <?php if ( get_sub_field('ad_description') ) : ?>
                                    <p class="font-dm text-dark-white text-normalpsg lg:text-largepsg"><?php echo get_sub_field('ad_description'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="flex max-md:flex-col">
                <div class="bg-optical-gray flex flex-col justify-center max-md:rounded-t-[16px] md:rounded-l-[16px] md:w-1/2">
                <?php if ( get_field('sa_video') ) : ?>
                    <video class="sm:w-[70%] mx-auto" autoplay loop preload="auto" muted>
                        <source src="<?php echo get_field('sa_video'); ?>" type="video/mp4">
                    </video>
                <?php endif; ?>

                </div>
                <div class="bg-white flex flex-col justify-center px-[22px] max-md:rounded-b-[16px] max-md:py-[22px] md:px-[32px] md:rounded-r-[16px] md:w-1/2 xl:px-[64px] max-xl:py-[32px]">
                    <div class="flex flex-col gap-[20px]">
                        <div class="flex flex-col gap-[10px]">
                            <?php if ( get_field('sa_sub_title') ) : ?>
                                <p class="font-mono-s text-Smallpsg text-lightblack font-light-w uppercase"><?php echo get_field('sa_sub_title'); ?></p>
                            <?php endif; ?>
                            <?php if ( get_field('sa_title') ) : ?>
                                <h2 class="font-dm font-light text-lightblack text-[32px] leading-small-lh lg:text-xlText"><?php echo get_field('sa_title'); ?></h2>
                            <?php endif; ?>
                            <?php if ( get_field('sa_description') ) : ?>
                                <p class="font-dm text-lightblack text-normalpsg lg:text-largepsg "><?php echo get_field('sa_description'); ?></p>
                            <?php endif; ?>
                        </div>
                        <div >
                            <?php if ( get_field('sa_button') && get_field('sa_button_link') ) : ?>
                                <a href="<?php echo esc_url( get_field('sa_button_link') ); ?>" class="font-mono-s bg-white inline-block outline-[2px] px-[18px] py-[8px] border-white rounded-[9999px] border-[1px] outline text-lightblack font-light-w text-normalpsg transition-all duration-300 lg:px-[24px] lg:py-[12px] lg:text-largepsg hover:border-lightblack"><?php echo get_field('sa_button'); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

