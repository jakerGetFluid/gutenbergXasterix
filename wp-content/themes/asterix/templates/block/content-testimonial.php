<?php
/**
 * Block Name: Testimonial
 *
 * This is the template that displays the testimonial block.
 */


// create id attribute for specific styling
$id = 'testimonial-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : ''; ?>

<?php if (have_rows('testimonials')) : $slide_i = 0; ?>
  <div class="testimonials slider">
    <?php while (have_rows('testimonials')) : the_row();
      $avatar = get_sub_field('avatar');
      $title = get_sub_field('title');
      $content = get_sub_field('content');
      $background_color = get_sub_field('background_color');
      $text_color = get_sub_field('text_color'); ?>

      <div class="testimonial" id="slide-<?= $slide_i ?>">
        <blockquote id="<?= $id; ?>" class="testimonial <?= $align_class; ?>">
          <p><?= $content ?></p>
          <cite>
            <img src="<?= $avatar ?>" alt="<?= $title ?>" />
            <span><?= $title ?></span>
          </cite>
        </blockquote>
        <style type="text/css">
          #slide-<?= $slide_i ?> {
            background: <?= $background_color ?>;
          }
          #slide-<?= $slide_i ?> p,
          #slide-<?= $slide_i ?> cite {
            color: <?= $text_color ?>;
          }
        </style>
      </div>
      <?php $slide_i++; ?>
    <?php endwhile; ?>
  </div>
<?php endif; ?>
