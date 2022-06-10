<?php

/**
 * helpers
 */

function ct_admin_current_view()
{
    $current_step = isset($_GET['page']) ? $_GET['page'] : 'step0';

    if (strpos($current_step, '_') === false) {
        return 'step0';
    }

    return str_replace("ct-wizard-admin_", "", $current_step);

}

function ct_admin_template_server_path($file_path, $include = true, $options = array())
{
    $my_plugin_dir = WP_PLUGIN_DIR . "/" . CT_WP_WIZARD_ADMIN_DIR . "/";

    if ( is_dir( $my_plugin_dir ) ) {

        $path_to_file = $my_plugin_dir . $file_path . '.php';

        if ($include) {
            include $path_to_file;
        }

        return $path_to_file;
    }
}
function ct_admin_url($append = '')
{
    return plugins_url($append, __DIR__);
}


function ct_admin_submit($submit_text, $hide_class = "sr-only"){ ?>
    <div class="form__submit <?php echo $hide_class ?>">
        <p class="submit">
            <input type="submit" name="submit5" id="submit5" class="button" value="<?php echo $submit_text; ?>">
        </p>
    </div>
<?php }


function ct_admin_wizard_is_step($step)
{
    $current_page = ct_admin_wizard_current_step();

    if (strpos($current_page, $step) !== false) {
        return true;
    }

    return false;
}

function ct_admin_wizard_current_step()
{
    return isset($_GET['step']) ? $_GET['step'] : 'step0';
}

function ct_admin_wizard_step_url($step)
{
    return admin_url('admin.php?page=ct-wizard-admin&step=' . $step);
}

function ct_admin_wizard_prev_step(){
    $current_page = ct_admin_wizard_current_step();
    $current_number = (int) filter_var($current_page, FILTER_SANITIZE_NUMBER_INT);
    $prev_number = $current_number-1;
    $prev_page = 'step'. $prev_number;
    return ct_admin_wizard_step_url($prev_page);
}

/**
 * @param $message
 * @param $msg_type
 * @return void
 * warning, info, success
 */
function ct_admin_message($message, $msg_type = 'info') {
    return "<div id='message' class='alert alert-$msg_type'>$message</div>";
}