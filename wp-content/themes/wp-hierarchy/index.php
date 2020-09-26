<?php get_header(); ?>

<div id="content" class="content-area">
    <main id="main" class="site-main" role="main">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">

        </header>

        <div class="entry-content">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat necessitatibus architecto voluptate est animi quasi temporibus, aperiam cum pariatur dolorum mollitia fuga autem iure omnis rerum consectetur illo magnam veniam.</p>
        </div>
      </article>
      <?php get_sidebar(); ?>
    </main>
</div>
<?php get_footer(); ?>