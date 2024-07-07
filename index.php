<?php 
/**
 * This template is for displaying the Header
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    <?php
/**
 * Main Tempalte File.
 */
get_header();
?>

<?php
get_footer(); ?>
</body>
</html>