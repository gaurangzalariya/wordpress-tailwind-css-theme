<script>
// tailwind.config.js
tailwind.config = {
  theme: {
    extend: {
      boxShadow: { // custom shadow
        'small-Shadow': '<?php the_field('small_shadow', 'option'); ?>',
        'medium-Shadow': '<?php the_field('medium_shadow', 'option'); ?>',
      },
      gap: { // custom gap
        'smallGap': '<?php the_field('gap_small', 'option'); ?>',
        'mediumGap': '<?php the_field('gap_medium', 'option'); ?>',
        'largGap': '<?php the_field('gap_large', 'option'); ?>',
        'xlGap': '<?php the_field('gap_xl', 'option'); ?>',
      },
      colors: { // custom custom color
        'lightblack': 'rgba(<?php the_field('lightblack', 'option'); ?>)',
        'darkgray': 'rgba(<?php the_field('darkgray', 'option'); ?>)',
        'OliveGreen': 'rgba(<?php the_field('olivegreen', 'option'); ?>)',
        'dark-white': 'rgba(<?php the_field('dark-white', 'option'); ?>)',
        'optical-gray': 'rgba(<?php the_field('optical-gray', 'option'); ?>)',
        'light-gray': 'rgba(<?php the_field('light-gray', 'option'); ?>)',
        'light-perpal': 'rgba(<?php the_field('light-perpal', 'option'); ?>)',
        'off-gray': 'rgba(<?php the_field('off-gray', 'option'); ?>)',
      },
      fontSize: { // custom font size
        'Smallpsg': '<?php the_field('smallpsg', 'option'); ?>',
        'normalpsg': '<?php the_field('normalpsg', 'option'); ?>',
        'largepsg': '<?php the_field('largepsg', 'option'); ?>',
        'smallText': '<?php the_field('smallText', 'option'); ?>',
        'm-text': '<?php the_field('m-text', 'option'); ?>',
        'mediumText': '<?php the_field('mediumText', 'option'); ?>',
        'largText': '<?php the_field('largText', 'option'); ?>',
        'xlText': '<?php the_field('xlText', 'option'); ?>',
        '2xlText': '<?php the_field('2xlText', 'option'); ?>',
      },
      fontFamily: { // custom font family
        'mono-s': ['<?php the_field('mono-s', 'option'); ?>'],
        'dm': ['<?php the_field('dm', 'option'); ?>'],
        'barlow': ['<?php the_field('barlow', 'option'); ?>'],
      },
      fontWeight: {  // custom font weight
        'normal-w': '<?php the_field('normal-w', 'option'); ?>',
        'light-w': '<?php the_field('light-w', 'option'); ?>',
        'bold-w': '<?php the_field('bold_w', 'option'); ?>',
        'extra-w': '<?php the_field('extra_weight', 'option'); ?>',

      },
      lineHeight: {  // custom line-hight
        'large-lh': '<?php the_field('large_lh', 'option'); ?>',
        'medium-lh': '<?php the_field('medium_lh', 'option'); ?>',
        'small-lh': '<?php the_field('small_lh', 'option'); ?>',
      },
      margin: { // custom margin value
        'medium-m': '<?php the_field('medium_m', 'option'); ?>' // Add your custom margin value here
      },
    }
  }
};

// prettier.config.js
module.exports = {
  plugins: ['prettier-plugin-tailwindcss'],
}
</script>
