<?php if ( ! get_field('cs_checkbox') ) : ?>
    <section class="custom2-background flex flex-col gap-[25px] max-lg:px-[4%] max-2xl:px-[5.5%]">
        <div class="mx-auto flex flex-col gap-mediumGap md:gap-largGap pt-[75px] md:pt-[60px] lg:pt-[70px] max-w-[1420px] xl:pt-[120px]">
            <div class="flex flex-col gap-[10px] lg:w-4/6">
                <?php if ( get_field('cs_sub_title') ) : ?>
                    <p class="font-mono-s text-Smallpsg text-lightblack font-light-w uppercase"><?php echo get_field('cs_sub_title'); ?></p>
                <?php endif; ?>
                <?php if ( get_field('cs_title') ) : ?>
                    <h2 class="font-dm font-light text-lightblack text-[32px] leading-small-lh lg:text-xlText xl:text-2xlText"><?php echo get_field('cs_title'); ?></h2>
                <?php endif; ?>
                <?php if ( get_field('cs_description') ) : ?>
                    <p class="font-dm text-lightblack text-normalpsg lg:text-largepsg "><?php echo get_field('cs_description'); ?></p>
                <?php endif; ?>
            </div>
            <div class="flex max-md:flex-col">
                <div class="bg-light-gray flex flex-col justify-between py-[22px] pr-[22px] pl-[22px] md:basis-1/2 max-md:rounded-t-[16px] md:rounded-l-[16px] max-lg:gap-[25px] lg:gap-[30px] lg:basis-2/3 lg:p-[32px]">
                    <div>
                        <?php if ( get_field('company_description_new') ) : ?>
                            <h2 class="font-dm font-normal-w text-white leading-[1.4] text-[24px] lg:text-[28px] xl:text-[32px]"><?php echo get_field('company_description_new'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <?php if ( get_field('company_name') ) : ?>
                            <p class="font-dm text-white text-largepsg lg:text-smallText "><?php echo get_field('company_name'); ?></p>
                        <?php endif; ?>
                        <?php if ( get_field('author_name') && get_field('author_position') ) : ?>
                            <p class="font-dm font-extra-w text-white text-normalpsg lg:text-Smallpsg ">
                                <?php echo get_field('author_name'); ?>
                                <span class="font-light"><?php echo get_field('author_position'); ?></span>
                            </p>
                        <?php endif; ?>
                        <div>
                            <?php if ( get_field('md_button') && get_field('md_button_link') ) : ?>
                                <a href="<?php echo esc_url( get_field('md_button_link') ); ?>" class="underline font-dm relative group font-light-w text-white spaced-words text-normalpsg lg:text-largepsg hover:text-dark-white hover:no-underline"><?php echo get_field('md_button'); ?>
                                    <i class="fa-solid fa-arrow-right text-white absolute right-[-20px] top-[6px] opacity-0 transition-all duration-300 group-hover:opacity-100 group-hover:right-[-30px]"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="bg-lightblack flex py-[30px] px-[20px] py-[30px] px-[20px] md:basis-1/2 max-md:rounded-b-[16px] md:rounded-r-[16px] lg:basis-1/3 lg:px-[36px]">
                    <?php if ( get_field('md_image') ) : ?>
                        <img class="object-contain" src="<?php echo esc_url( get_field('md_image') ); ?>" >
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="mx-auto flex gap-[25px] flex-col lg:flex-row max-w-[1420px]">
            <div class="bg-light-perpal flex flex-col justify-between shadow-small-Shadow rounded-[16px] max-sm:gap-[50px] lg:basis-2/6 max-lg:gap-[120px]">
                <div class="flex flex-col p-[32px] gap-[15px] max-md:p-[22px]">
                    <?php if ( get_field('sd_sub_title') ) : ?>
                        <p class="font-mono-s text-Smallpsg text-lightblack font-light-w uppercase"><?php echo get_field('sd_sub_title'); ?></p>
                    <?php endif; ?>
                    <?php if ( get_field('sd_title') ) : ?>
                        <h2 class="font-dm text-lightblack text-smallText leading-medium-lh tracking-[-0.46px] lg:text-mediumText"><?php echo get_field('sd_title'); ?></h2>
                    <?php endif; ?>
                    <?php if ( get_field('sd_description') ) : ?>
                        <p class="font-dm text-lightblack text-normalpsg lg:text-largepsg"><?php echo get_field('sd_description'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="px-[32px] pb-[32px] max-md:px-[22px] max-md:pb-[22px]">
                    <?php if ( get_field('sd_button') && get_field('sd_button_link') ) : ?>
                        <a href="<?php echo esc_url( get_field('sd_button_link') ); ?>" class="underline font-dm font-light-w text-lightblack relative group text-normalpsg spaced-words lg:text-largepsg hover:no-underline"><?php echo get_field('sd_button'); ?>
                            <i class="fa-solid fa-arrow-right text-lightblack absolute right-[-20px] top-[6px] opacity-0 transition-all duration-300 group-hover:opacity-100 group-hover:right-[-30px]"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="flex flex-col md:flex-row lg:basis-4/6">
                <div class="bg-OliveGreen flex flex-col flex-1 justify-center py-[30px] px-[36px] shadow-small-Shadow max-md:rounded-t-[16px] md:rounded-l-[16px] max-md:hidden md:basis-1/2">
                    <?php if ( get_field('sd_image') ) : ?>
                        <img src="<?php echo esc_url( get_field('sd_image') ); ?>">
                    <?php endif; ?>
                </div>
                <div class="bg-white flex flex-col shadow-2xl justify-between shadow-small-Shadow max-sm:gap-[50px] max-md:rounded-[16px] md:rounded-r-[16px] md:basis-1/2 max-lg:gap-[120px]">
                    <div class="flex flex-col p-[32px] gap-[15px] max-md:p-[22px]">
                        <?php if ( get_field('sd_sub_title-2') ) : ?>
                            <p class="font-mono-s font-light-w text-Smallpsg text-lightblack uppercase"><?php echo get_field('sd_sub_title-2'); ?></p>
                        <?php endif; ?>
                        <?php if ( get_field('sd_title-2') ) : ?>
                            <h2 class="font-dm text-lightblack leading-medium-lh tracking-[-0.46px] text-smallText lg:text-mediumText"><?php echo get_field('sd_title-2'); ?></h2>
                        <?php endif; ?>
                        <?php if ( get_field('sd_descripton-2') ) : ?>
                            <p class="font-dm text-lightblack text-normalpsg lg:text-largepsg"><?php echo get_field('sd_descripton-2'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="px-[32px] pb-[32px] max-md:px-[22px] max-md:pb-[22px]">
                        <?php if ( get_field('sd_btn-2') && get_field('sd_btn-link') ) : ?>
                            <a href="<?php echo esc_url( get_field('sd_btn-link') ); ?>" class="underline font-dm relative group font-light-w text-lightblack spaced-words text-normalpsg lg:text-largepsg hover:no-underline"><?php echo get_field('sd_btn-2'); ?>
                                <i class="fa-solid fa-arrow-right text-lightblack absolute right-[-20px] top-[6px] opacity-0 transition-all duration-300 group-hover:opacity-100 group-hover:right-[-30px]"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
