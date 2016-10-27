<?php get_header(); ?>

			<div id="content" class="wrapper">

				<div id="inner-content" class="container">

						<div id="main" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                                <header class="article-header cf">

                                  <h1 class="entry-title page-title" itemprop="headline">
                                     <?php the_title(); ?>
                                  </h1>

                                </header> <?php // end article header ?>

								<div class="entry-content" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();
									?>
								</div> <?php // end article section ?>

                                <footer class="article-footer">

                                </footer> <?php // end article footer ?>

							</article>

							<?php endwhile; else : ?>

                                <?php get_template_part ('partials/no-post-found');?>

							<?php endif; ?>

						</div>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
