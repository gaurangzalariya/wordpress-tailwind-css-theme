<?php if ( ! get_field('hero_checkbox') ) : ?>
<section class="mx-auto mt-[30px] max-w-[1420px] max-[625px]:px-[4%] md:mt-[60px] lg:mt-[70px] xl:mt-[120px] max-2xl:px-[6%]">
    <div class="mx-auto">
        <div class="flex flex-col gap-[35px] lg:w-2/3">
            <!-- contain -->
            <div class="flex flex-col gap-[7px]">
                <?php if ( get_field('sub_title') ) : ?>
                <p class="font-mono-s text-Smallpsg text-lightblack font-light-w uppercase"><?php echo get_field('sub_title'); ?></p>
                <?php endif; ?>

                <?php if ( get_field('title') ) : ?>
                <h1 class="font-dm font-light leading-medium-lh tracking-[-0.96px] text-[52px] lg:text-[78px]"><?php echo get_field('title'); ?></h1>
                <?php endif; ?>

                <?php if ( get_field('description') ) : ?>
                <p class="font-dm text-lightblack text-largepsg tracking-[-0.46px] lg:text-smallText xl:m-text"><?php echo get_field('description'); ?></p>
                <?php endif; ?>
            </div>
            <div>
                <?php if ( get_field('button_label') && get_field('button_link') ) : ?>
                <a href="<?php echo esc_url( get_field('button_link') ); ?>" class="font-mono-s items-center inline-block bg-darkgray px-[22px] py-[8px] rounded-[9999px] text-white font-light-w text-normalpsg transition-all duration-300 lg:text-largepsg lg:px-[24px] lg:py-[12px] hover:bg-lightblack"><?php echo get_field('button_label'); ?></a> 
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
