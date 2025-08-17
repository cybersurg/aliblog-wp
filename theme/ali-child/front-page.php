<?php /* Home template */ get_header(); ?>
<section class="grid md:grid-cols-2 gap-8 items-center">
  <div>
    <h1 class="text-3xl md:text-5xl font-bold leading-tight">Bilingual Cybersecurity & IT Consulting</h1>
    <p class="mt-4 text-lg">Practical insights, tools, and training — Arabic & English.</p>
    <div class="mt-6 flex gap-3">
      <a class="px-5 py-3 rounded-xl bg-black text-white" href="/services">View Services</a>
      <a class="px-5 py-3 rounded-xl border" href="/blog">Read the Blog</a>
    </div>
    <form class="mt-6 flex gap-2" action="YOUR_EMAIL_TOOL_SUBSCRIBE_URL" method="post">
      <input class="flex-1 rounded-lg border px-3 py-2" type="email" name="email" placeholder="Your email for updates" required>
      <button class="px-4 py-2 rounded-lg bg-black text-white" type="submit">Subscribe</button>
    </form>
  </div>
  <div class="rounded-2xl p-6 border bg-white">
    <?php echo do_shortcode('[ali_featured_tools]'); ?>
  </div>
</section>

<section class="mt-12">
  <h2 class="text-2xl font-semibold mb-4">Latest Posts</h2>
  <div class="grid md:grid-cols-3 gap-6">
    <?php
      $q = new WP_Query(['posts_per_page' => 6]);
      while($q->have_posts()): $q->the_post(); ?>
        <article class="rounded-xl border bg-white overflow-hidden">
          <a href="<?php the_permalink(); ?>" class="block p-5">
            <h3 class="font-semibold text-lg"><?php the_title(); ?></h3>
            <p class="text-sm opacity-70 mt-2"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            <span class="inline-block mt-4 text-sm underline">Read</span>
          </a>
        </article>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>
<?php get_footer(); ?>
