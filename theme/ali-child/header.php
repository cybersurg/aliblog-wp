<?php /* ali-child/header.php */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>
<body <?php body_class('bg-neutral-50'); ?>>
<header class="container mx-auto px-4 py-4 flex items-center justify-between">
  <a href="<?php echo esc_url(home_url('/')); ?>" class="font-semibold text-xl">AliBlog.me</a>
  <?php wp_nav_menu(['theme_location' => 'primary','container' => false,'menu_class' => 'flex gap-6']); ?>
  <div class="flex items-center gap-4">
    <?php if(function_exists('pll_the_languages')): ?>
      <nav class="text-sm"><?php pll_the_languages(['show_flags'=>1,'show_names'=>0]); ?></nav>
    <?php endif; ?>
    <a href="/contact" class="px-4 py-2 rounded-lg border">Book a Call</a>
  </div>
</header>
<main class="container mx-auto px-4 py-8">
