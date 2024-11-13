<?php

/**
 * Template Name: Mass Times
 *
 * The template for displaying the mass times Template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pier
 */

get_header();
?>

<div class="content-area" id="primary">
    <main class="site-main page-template-mass-times" id="main">
        <?php get_template_part('template-parts/headers/page-header'); ?>

        <?php if (have_rows("mass_times_days", "options")) : ?>
            <div class="mass-times-container limit-width">
                <?php while (have_rows("mass_times_days", "options")) : the_row(); ?>
                    <div class="mass-times-section">
                        <h1 class="mass-times-title">
                            <?php the_sub_field("day"); ?>
                        </h1>
                        <div class="mass-times-mid-section">
                          <?php if (have_rows("mass_times_weekend", "options")):?>
                          <div class="mass-times-times">
                          <h3>Weekends</h3>
                          <?php while (have_rows("mass_times_weekend", "options")) : the_row(); ?>
                              <div class="mass-time">
                                  <div class="mass-time-day">
                                      <?php the_sub_field("mass_times_label"); ?>
                                  </div>
                                  <div class="mass-time-time">
                                      <?php the_sub_field("mass_times_time"); ?>
                                  </div>
                              </div>
                          <?php endwhile; ?>
                          </div>
                          <?php endif;?>
                          <?php if (have_rows("mass_times_weekday", "options")):?>
                          <div class="mass-times-times">
                          <h3>Weekdays</h3>
                          <?php while (have_rows("mass_times_weekday", "options")) : the_row(); ?>
                              <div class="mass-time">
                                  <div class="mass-time-day">
                                      <?php the_sub_field("mass_times_label"); ?>
                                  </div>
                                  <div class="mass-time-time">
                                      <?php the_sub_field("mass_times_time"); ?>
                                  </div>
                              </div>
                          <?php endwhile; ?>
                          </div>
                          <?php endif;?>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        <?php endif; ?>
        <div class="limit-width">
            <?php the_content(); ?>
        </div>
    </main>
</div>

<?php get_footer();
