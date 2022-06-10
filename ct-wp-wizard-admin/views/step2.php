<?php
/** @var string $option1 */
/** @var string $option2 */
?>

<h1><?php echo esc_html__('Step2', 'ct-admin'); ?></h1>
<form method="POST" action="<?php echo esc_html(admin_url('admin-post.php')); ?>" class="js-form-wizard">
    <input type="hidden" name="action" value="ct_admin_save">
    <?php wp_nonce_field('ct_admin_save', 'ct_admin'); ?>
    <input type="hidden" name="redirectToUrl" value="<?php echo ct_admin_wizard_step_url('step3'); ?>">

    <div class="row g-5">
        <div class="col-md-6">
            <fieldset class="mt-3">
                <legend class="mb-3"><?php echo esc_html__('Section 1', 'ct-admin') ?></legend>

                <div class="mb-3 row">
                    <div class="col-md-4">
                        <label for="cookie_content_language"
                               class="form-label"><?php echo esc_html__('Option 1', 'ct-admin') ?></label>
                    </div>
                    <div class="col-md-8">
                        <?php echo $option1; ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="cookie_content"
                           class="form-label"><?php echo esc_html__('Option 2', 'ct-admin') ?></label>
                    <?php echo $option2; ?>
                </div>
            </fieldset>

        </div>

    </div>
    <!-- / row -->

    <?php ct_admin_submit(esc_html__('Submit')); ?>

</form>