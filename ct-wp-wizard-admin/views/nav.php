<?php
$current_page = ct_admin_wizard_current_step();
$step = str_replace('step', '', $current_page);

?>
<?php
if (ct_admin_wizard_is_step('step')): ?>
    <?php if ((!ct_admin_wizard_is_step('step0'))): ?>
        <?php if ((!ct_admin_wizard_is_step('step4'))): ?>
            <div class="container">
                <nav class="nav nav-pills nav-fill">
                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <?php $step_number = 'step' . $i;
                        ?>
                        <li class="nav-item">
                            <button class="js-save-and-go nav-link <?php if (ct_admin_wizard_is_step($step_number)): ?> active<?php endif; ?> <?php if ($i < intval($step)): ?>done<?php endif; ?>"
                                    href="<?php echo ct_admin_wizard_step_url($step_number) ?>">
                                Step <?php echo $i; ?></button>
                        </li>
                    <?php endfor; ?>
                </nav>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>