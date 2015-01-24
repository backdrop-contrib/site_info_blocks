<?php
/**
 * @file
 * Display site name.
 *
 * Available variables:
 *
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $front_page: The URL of the front page. Use this instead of $base_path, when
 *   linking to the front page. This includes the language domain or prefix.
 * - $site_name: The name of the site, empty when display has been disabled.
 */
?>

<?php if ($site_name): ?>
  <div class="site-name-wrapper">
    <h1 class="site-name">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
    </h1>
  </div>
<?php endif; ?>
