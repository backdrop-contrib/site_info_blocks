<?php
/**
 * @file
 * Display site logo.
 *
 * Available variables:
 *
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $front_page: The URL of the front page. Use this instead of $base_path, when
 *   linking to the front page. This includes the language domain or prefix.
 */
?>

<?php if ($logo): ?>
  <div class="logo-block-wrapper">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a>
  </div>
<?php endif; ?>
