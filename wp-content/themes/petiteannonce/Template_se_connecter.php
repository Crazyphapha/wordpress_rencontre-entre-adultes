<?php

/*
Template Name: connection
*/
?>

<?php get_header(); //appel du template header.php ?>
<div class="login-form">
    <?php
        $args = array(
            'echo'           => true,
            'remember'       => true,
            'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
            'form_id'        => 'loginform',
            'id_username'    => 'user_login',
            'id_password'    => 'user_pass',
            'id_remember'    => 'rememberme',
            'id_submit'      => 'wp-submit',
            'label_username' => __( 'Username' ),
            'label_password' => __( 'Password' ),
            'label_remember' => __( 'Remember Me' ),
            'label_log_in'   => __( 'Log In' ),
            'value_username' => '',
            'value_remember' => false
        );
        wp_login_form($args);
    ?>
</div>

<?php get_footer(); //appel du template footer.php ?>

