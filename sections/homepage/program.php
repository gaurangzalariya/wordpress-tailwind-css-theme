<?php if ( ! get_field('p_checkbox') ) : ?>
    <section class="custom-background mx-auto relative bg-lightblack z-99 max-lg:px-[4%] max-2xl:px-[6%]">
        <div class="w-full h-full absolute left-0 bottom-0">
            <picture>
                <img class="w-full h-full object-cover object-bottom block"
                    src="https://cdn.shopify.com/b/shopify-brochure2-assets/49a395e075447d2933fa0d96ad97a9e9.svg?width=1440">
            </picture>
        </div>
        <div class="max-sm:px-[0%] relative mx-auto pt-[60px] max-md:pb-[90px] md:py-[60px] lg:py-[70px] max-w-[1420px] xl:py-[130px] max-2xl:px-[6%]">
            <div class="mx-auto relative z-10 max-w-[1420px]">
                <div class="flex flex-col gap-smallGap">
                    <!-- Partner info -->
                    <div class="flex flex-col gap-[20px] mx-auto text-center min-[1344px]:w-3/5">
                        <div class="flex flex-col gap-[5px]">
                            <?php if ( get_field('p_sub_title') ) : ?>
                                <p class="font-mono-s text-Smallpsg text-OliveGreen font-light-w uppercase"><?php echo get_field('p_sub_title'); ?></p>
                            <?php endif; ?>
                            <?php if ( get_field('p_title') ) : ?>
                                <h1 class="font-dm font-light text-dark-white leading-medium-lh text-[40px] md:text-[48px] lg:text-[56px]"><?php echo get_field('p_title'); ?></h1>
                            <?php endif; ?>
                            <?php if ( get_field('p_description') ) : ?>
                                <p class="font-dm text-dark-white text-normalpsg lg:text-largepsg"><?php echo get_field('p_description'); ?></p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php if ( get_field('p_button') && get_field('p_button_link') ) : ?>
                                <a href="<?php echo esc_url( get_field('p_button_link') ); ?>" class="font-mono-s inline-block items-center bg-OliveGreen leading-[24px] text-lightblack font-light-w px-[22px] transition-all duration-300 py-[8px] rounded-[9999px] text-normalpsg lg:text-largepsg lg:px-[24px] lg:py-[12px] hover:text-lightblack hover:bg-dark-white"><?php echo get_field('p_button'); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
