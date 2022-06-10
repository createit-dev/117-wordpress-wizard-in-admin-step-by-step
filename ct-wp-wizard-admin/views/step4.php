<?php
/** @var string $cookie_content_language */
/** @var string $cookie_content */
/** @var string $cookie_popup_label_accept */
/** @var string $forgotten_automated_forget */
?>

<h1><?php echo esc_html__('The End', 'ct-admin'); ?></h1>
<form method="POST" action="<?php echo esc_html(admin_url('admin-post.php')); ?>" class="js-form-wizard">
    <input type="hidden" name="action" value="ct_admin_save">
    <?php wp_nonce_field('ct_admin_save', 'ct_admin'); ?>
    <input type="hidden" name="redirectToUrl" value="<?php echo ct_admin_wizard_step_url('step4'); ?>">

    <div class="row g-5">
        <div class="col-md-6">
            <p><?php echo esc_html__("That's it!", 'ct-admin'); ?></p>
            <p><?php echo esc_html__('Go back to dashboard', 'ct-admin'); ?></p>
            <a href="<?php echo admin_url(); ?>" class="btn btn-primary">
                <?php echo esc_html__("Go to Dashboard") ?>
            </a>
        </div>


    </div>
    <!-- / row -->

    <?php ct_admin_submit(esc_html__('Submit')); ?>

</form>