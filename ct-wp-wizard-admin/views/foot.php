<?php
/**
 *
 */
?>
<?php if ((!ct_admin_wizard_is_step('step0'))): ?>
    <?php if ((!ct_admin_wizard_is_step('step4'))): ?>
        <div class="float-start">
            <a href="<?php echo admin_url(); ?>"
               class="btn btn-primary"><?php _e("Quit") ?></a>

            <button href="<?php echo ct_admin_wizard_prev_step(); ?>"
                    class="btn btn-primary js-save-and-go"><?php _e("Back") ?></button>
        </div>
        <div class="float-end">
            <button class="btn btn-primary js-submit"><?php _e("Next step") ?></button>
        </div>
    <?php endif; ?>
<?php endif; ?>
