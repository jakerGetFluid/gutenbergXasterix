<?php
/**
 * Block Name: Testimonial
 *
 * This is the template that displays the testimonial block.
 */

$avatar = get_field('slide_avatar');
$title = get_field('slide_title');
$content = get_field('slide_content');
$background_color = get_field('background_color');
$text_color = get_field('text_color');

// create id attribute for specific styling
$id = 'testimonial-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : ''; ?>

<blockquote id="<?= $id; ?>" class="testimonial <?= $align_class; ?>">
  <p><?= $content ?></p>
  <cite>
    <img src="<?= $avatar ?>" alt="<?= $title ?>" />
    <span><?= $title ?></span>
  </cite>
</blockquote>
<style type="text/css">
  #<?= $id; ?> {
    background: <?= $background_color ?>;
    color: <?= $text_color ?>;
  }
</style>