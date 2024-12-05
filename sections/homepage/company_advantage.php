<?php if ( ! get_field('ca_checkbox') ) : ?>
    <div class="bg-lightblack py-[50px] mt-[20px] md:mt-[60px] md:py-[60px] lg:mt-[70px] lg:py-[70px] max-lg:px-[4%] xl:mt-[50px] xl:py-[120px] max-2xl:px-[6%]">
        <div class="mx-auto flex flex-col gap-mediumGap md:gap-largGap max-w-[1420px]">
            <!-- contain -->
            <div class="w-full flex flex-col gap-[10px] xl:w-2/3">
                <?php if ( get_field('ca_sub_title_new') ) : ?>
                <p class="font-mono-s text-Smallpsg text-OliveGreen font-light-w uppercase"><?php echo get_field('ca_sub_title_new'); ?></p>
                <?php endif; ?>
                <?php if ( get_field('ca_title') ) : ?>
                <h2 class="font-dm font-light text-dark-white tracking-[-0.96px] text-[32px] leading-medium-lh lg:text-xlText xl:text-2xlText"><?php echo get_field('ca_title'); ?></h2>
                <?php endif; ?>
                <?php if ( get_field('ca_description') ) : ?>
                <p class="font-dm text-dark-white text-normalpsg lg:text-largepsg "><?php echo get_field('ca_description'); ?></p>
                <?php endif; ?>
            </div>
            <!-- box info -->
            <?php if( have_rows('business_growth') ): ?>
                <div class="mx-auto flex gap-[24px] grid sm:grid-cols-2 max-w-[1420px] xl:grid-cols-3">  
                    <?php while( have_rows('business_growth') ): the_row(); ?>
                        <div class="flex-1 rounded-[10px] flex flex-col fade-up">
                            <!-- Inner container for title and description -->
                            <div class="flex-1 flex flex-col gap-[15px] bg-optical-gray px-[24px] pt-[24px] pb-[24px] rounded-t-[16px] lg:px-[32px] lg:pt-[32px] lg:pb-[56px]">
                                
                                <?php if ( $bg_title = get_sub_field('bg_title') ) : ?>
                                    <h2 class="font-dm font-light text-dark-white text-smallText leading-medium-lh tracking-[-0.48px] lg:text-mediumText">
                                        <?php echo esc_html($bg_title); ?>
                                    </h2>
                                <?php endif; ?>
                                
                                <?php if ( $bg_description = get_sub_field('bg_description') ) : ?>
                                    <p class="font-dm text-dark-white text-normalpsg lg:text-largepsg">
                                        <?php echo esc_html($bg_description); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <!-- Bottom section for ROI statement -->
                            <div class="bg-OliveGreen flex items-center gap-[7px] flex-shrink-0 rounded-b-[16px] pl-[15px] py-[15px] xl:py-[20px] xl:pl-[32px]">
                                <?php if (get_sub_field('growth_value') ) : ?>
                                    <p class="font-mono-s font-[300] text-lightblack text-[44px] xs:text-[45px] sm:text-[46px] md:text-[48px] lg:text-[52px]"><?php echo get_sub_field('growth_value'); ?></p>
                                <?php endif; ?>
                                
                                <?php if ( get_sub_field('growth_type') ) : ?>
                                    <p><?php echo get_sub_field('growth_type'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>  
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

