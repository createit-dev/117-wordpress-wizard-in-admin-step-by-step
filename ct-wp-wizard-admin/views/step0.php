<?php
/** @var string $cookie_content_language */
/** @var string $cookie_content */
/** @var string $cookie_popup_label_accept */
/** @var string $forgotten_automated_forget */
?>

<form method="POST" action="<?php echo esc_html(admin_url('admin-post.php')); ?>" class="js-form-wizard">
    <input type="hidden" name="action" value="ct_admin_save">
    <?php wp_nonce_field('ct_admin_save', 'ct_admin'); ?>
    <input type="hidden" name="redirectToUrl" value="<?php echo ct_admin_wizard_step_url('step1'); ?>">

    <div class="row g-5">
        <div class="col-md-12">
            <h3><?php echo esc_html__('Welcome in our wizard', 'ct-admin'); ?></h3>
            <p><img src="<?php echo ct_admin_url('images/wizard-of-oz-screen.jpg') ?>" class="img-thumbnail img-fluid"></p>
            <h4><?php echo esc_html__('Click button to start', 'ct-admin'); ?></h4>
            <button class="btn btn-primary btn-bg js-submit"><?php _e("Start wizard") ?></button>
        </div>
    </div>
    <!-- / row -->

    <?php ct_admin_submit(esc_html__('Submit')); ?>

</form>