<!-- ////// start footer ////// -->
<footer class="bg-black pt-[60px] pb-[45px]">
    <section class="mx-medium max-lg:px-[4%] max-2xl:px-[5.5%]">
        <div class="max-w-[1420px] flex mx-auto gap-[170px] justify-between gap-y-[50px] border-b border-darkgray pb-[15px] md:pb-[80px] max-md:flex-col">
            <div>
                <?php
                    $footer_logo = get_field('footer_logo', 'option');
                    if ($footer_logo) :
                        ?>
                            <img class="h-[44px]" src="<?php echo esc_url($footer_logo); ?>"/>
                <?php endif; ?>
            </div>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-footer',
                    'menu_class' =>'grid grid-cols-1 max-md:gap-x-[20px] md:gap-[85px] md:grid-cols-3 max-md:gap-y-[15px] lg:grid-cols-4 lg:gap-[75px]',
                    'container'=>false,
                    'walker' => new First_Footer_Walker ()
                ));
            ?>  
        </div>
    </section>
    <section class="mx-medium md:mx-medium-m mt-[45px]">
        <div class="mx-auto justify-between gap-y-[30px] flex flex-col max-w-[1420px] xl:flex-row relative">
            <div class="flex items-center flex-col gap-[30px] md:gap-largGap md:flex-row">
                <div class="">
                    <span href="#" class="text-dark-white  text-[16px] transition-all duration-300 cursor-pointer hover:text-gray-400">
                        <button class="t-btn flex items-center gap-[7px]">  
                            <a class="fa-solid fa-globe"></a>
                            <p>USA</p>
                            <i class="fa-solid fa-caret-down"></i>
                        </button>
                    </span>
                    <div class="g-footer hidden bg-lightblack absolute left-[-7px] rounded-t-[8px] bottom-[-25px] md:rounded-[8px] max-md:left-0 md:bottom-[200px] xl:bottom-[150px] max-md:w-[100%] translate-y-5 transition-all duration-300">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer-dropdown',
                                'menu_class' =>'',
                                'container'=>false,
                                'walker' => new Country_List_Walker ()
                            ));
                        ?>
                    </div>
                </div>
                <div>
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-tos',
                            'menu_class' =>'flex gap-[30px] items-center flex-col md:flex-row',
                            'container'=>false,
                            'walker' => new General_Footer_Walker ()
                        ));
                     ?> 
                </div>
            </div>
            <div class="max-md:mx-auto">
                <div class="flex gap-[15px] sm:gap-[25px]">
                  <?php if(get_field('facebook_profile_link', 'options')) { ?>
                    <a target="_blank" href="<?php echo esc_url(get_field('facebook_profile_link', 'options')); ?>" class="h-full px-[11px] py-[8px] transition-all duration-300 bg-white rounded-full flex items-center justify-center md:text-smallText hover:bg-gray-300">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                  <?php } ?>
                    <?php if(get_field('x_profile_link', 'options')) { ?>
                        <a target="_blank" href="<?php echo esc_url(get_field('x_profile_link', 'options')); ?>" class="h-full p-2 md:text-smallText bg-white transition-all duration-300 rounded-full flex items-center justify-center hover:bg-gray-300">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    <?php } ?>
                    <?php if(get_field('youtube_profile__link', 'options')) { ?>
                        <a target="_blank" href="<?php echo esc_url(get_field('youtube_profile__link', 'options')); ?>" class="h-full p-2 md:text-smallText bg-white transition-all duration-300 rounded-full flex items-center justify-center hover:bg-gray-300">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    <?php } ?>
                    <?php if(get_field('instagram_profile_link', 'options')) { ?>
                        <a target="_blank" href="<?php echo esc_url(get_field('instagram_profile_link', 'options')); ?>" class="h-full p-2 md:text-smallText bg-white transition-all duration-300 rounded-full flex items-center justify-center hover:bg-gray-300">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    <?php } ?>
                    <?php if(get_field('tiktok_profile_link', 'options')) { ?>
                        <a target="_blank" href="<?php echo esc_url(get_field('tiktok_profile_link', 'options')); ?>" class="h-full p-2 md:text-smallText bg-white transition-all duration-300 rounded-full flex items-center justify-center hover:bg-gray-300">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    <?php } ?>
                    <?php if(get_field('linkedin_profile_link', 'options')) { ?>
                        <a target="_blank" href="<?php echo esc_url(get_field('linkedin_profile_link', 'options')); ?>" class="h-full p-2 md:text-smallText bg-white transition-all duration-300 rounded-full flex items-center justify-center hover:bg-gray-300">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    <?php } ?>
                    <?php if(get_field('pinterest_profile_link', 'options')) { ?>
                        <a target="_blank" href="<?php echo esc_url(get_field('pinterest_profile_link', 'options')); ?>" class="h-full p-2 md:text-smallText bg-white transition-all duration-300 rounded-full flex items-center justify-center hover:bg-gray-300">
                            <i class="fa-brands fa-pinterest"></i>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/function.js"></script>

</body>
</html>
