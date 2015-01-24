<?php
/**
 * @file
 * Display site slogan.
 *
 * Available variables:
 *
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $front_page: The URL of the front page. Use this instead of $base_path, when
 *   linking to the front page. This includes the language domain or prefix.
 * - $site_slogan: The site slogan, empty when display has been disabled.
 */
?>

<?php if ($site_slogan): ?>
  <div class="site-slogan-wrapper">
    <div class="site-slogan"><?php print $site_slogan; ?></div>
  </div>
<?php endif; ?>
