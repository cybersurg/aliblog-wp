</main>
<footer class="border-t">
  <div class="container mx-auto px-4 py-8 text-sm flex justify-between">
    <span>© <?php echo date('Y'); ?> Ali Binmahfodh</span>
    <?php wp_nav_menu(['theme_location' => 'footer','container' => false,'menu_class' => 'flex gap-4']); ?>
  </div>
</footer>
<?php wp_footer(); ?>
</body></html>
