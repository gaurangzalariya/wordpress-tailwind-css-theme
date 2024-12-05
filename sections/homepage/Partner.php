<?php if ( ! get_field('cp_checkbox') ) : ?>
    <section class="grid-background max-lg:px-[4%] max-2xl:px-[5.5%]">
        <div class="flex flex-col gap-mediumGap mx-auto py-[50px] md:py-[60px] max-w-[1420px] lg:py-[70px] xl:flex-row xl:py-[120px]">
            <div class="flex flex-col gap-[10px] xl:w-1/3">
                <?php if ( get_field('cp_sub_title') ) : ?>
                <p class="font-mono-s text-Smallpsg text-lightblack font-light-w uppercase"><?php echo get_field('cp_sub_title'); ?></p>
                <?php endif; ?>
                <?php if ( get_field('cp_title') ) : ?>
                <h2 class="font-dm font-light text-lightblack leading-small-lh tracking-[-0.96px] text-[32px] lg:text-xlText xl:text-2xlText"><?php echo get_field('cp_title'); ?></h2>
                <?php endif; ?>
                <?php if ( get_field('cp_description') ) : ?>
                <p class="font-dm text-lightblack text-normalpsg lg:text-largepsg"><?php echo get_field('cp_description'); ?></p>
                <?php endif; ?>
            </div>
            <!-- box info slider -->
            <div class="w-[100%] xl:w-2/3">
                <div class="max-md:overflow-x-auto">
                    <div class="flex gap-smallGap fade-right max-[645px]:w-[600px]">
                        <div class="w-[80%] md:basis-1/2 bg-white py-[34px] rounded-[16px] flex flex-col max-[711px]:border min-[711px]:shadow-small-Shadow ">
                            <div class="px-[24px] md:px-[32px] flex flex-col gap-smallGap flex-grow ">
                                <?php if ( get_field('s_pa_title') ) : ?>
                                    <h2 class="font-dm font-light leading-medium-lh text-lightblack text-[28px] md:text-largText lg:text-xlText"><?php echo get_field('s_pa_title'); ?></h2>
                                <?php endif; ?>
                                <div>
                                <?php if ( get_field('s_pa_description') ) : ?>
                                    <p class="font-dm text-lightblack text-normalpsg lg:text-largepsg"><?php echo get_field('s_pa_description'); ?></p>
                                <?php endif; ?>
                                </div>
                            </div>
                            <div class="w-full flex-shrink-0">
                                <?php if ( get_field('s_pa_image') ) : ?>
                                    <img src="<?php echo esc_url( get_field('s_pa_image') ); ?>" class="w-full" alt="">
                                <?php endif; ?>
                            </div>
                            <?php if ( get_field('s_pa_btn') && get_field('s_pa_link') ) : ?>
                                <a href="<?php echo esc_url( get_field('s_pa_link') ); ?>" class="px-[32px] mt-[20px] group">
                                    <p class="font-mono-s relative font-normal-w text-lightblack text-Smallpsg md:text-largepsg border-b-[2px] border-lightblack">
                                        <?php echo get_field('s_pa_btn'); ?>
                                        <i class="fa-solid fa-arrow-right absolute right-[0px] md:right-[15px] top-[6px] transition-all duration-300 group-hover:right-0"></i>
                                    </p>
                                </a>
                            <?php endif; ?>    
                        </div>
                        <div class="w-[80%] bg-optical-gray py-[34px] rounded-[16px] flex flex-col md:basis-1/2">
                            <div class="px-[24px] flex flex-col gap-smallGap flex-grow md:px-[32px]">
                                <?php if ( get_field('t_pa_title') ) : ?>
                                    <h2 class="font-dm font-light leading-medium-lh text-dark-white text-[28px] md:text-largText lg:text-xlText"><?php echo get_field('t_pa_title'); ?></h2>
                                <?php endif; ?>
                                <div>
                                    <?php if ( get_field('t_pa_description-1') ) : ?>
                                        <p class="font-dm text-dark-white text-normalpsg lg:text-largepsg"><?php echo get_field('t_pa_description-1'); ?></p>
                                    <?php endif; ?>
                                    <?php if ( get_field('t_pa_description-2') ) : ?>
                                        <p class="font-dm text-dark-white text-normalpsg lg:text-largepsg"><?php echo get_field('t_pa_description-2'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="w-full flex-shrink-0">
                                <?php if ( get_field('t_pa_image') ) : ?>
                                    <img src="<?php echo esc_url( get_field('t_pa_image') ); ?>" class="w-full" alt="">
                                <?php endif; ?>
                            </div>
                            <a href="#" class="px-[32px] mt-[20px] group">
                                <p class="font-mono-s relative font-normal-w text-white text-Smallpsg border-b-[2px] border-darkwhite md:text-largepsg">
                                    Explore technology track
                                    <i class="fa-solid fa-arrow-right absolute right-[0px] top-[6px] transition-all duration-300 min-[800px]:right-[15px] group-hover:right-0"></i>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

    
