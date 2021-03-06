<?php
require_once 'user_library/user_system_files.php';
$std = new manageStudent();  //// mb: managed books
$stdrow = $std->get_student_record_row();

?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo SYSTEM_TITLE; ?></title>
<link type="text/css" rel="stylesheet" href="admin_section/style_file.css" />
<link type="text/css" rel="stylesheet" href="main_site_style.css" />
<script type="text/javascript" src="admin_section/js_files/common_functions.js"></script>
</head>
<body>
    <div class="main_block">
        <div class="main_header"><?php echo SYSTEM_TITLE; ?></div>
        <div class="main_menu">
            <ul><?php echo main_header_menu();  /// function in common_function_lib.php file ?></ul>
        </div>
        
        <div class="body_content">
            <div class="page_mgmt">
                <div class="page_left_col">
                    <ul class="left_menu_settings">
                        <?php echo student_left_menu();  /// function in common_function_lib.php file ?>
                    </ul>                    
                </div>
                <div class="page_right_col">  
            <div class="form_block">
                <h1 class="main_heading">Update Profile</h1>          
                <div id="return_msg"></div><br>
            <?php
                if( isset($_GET['msg']) && !empty($_GET['msg']) ) {
                    echo '<div class="success_msg">'.$_GET['msg'].'</div><br>';
                }
            ?>
                <div class="books_block">
                    <form method="post" name="file_record_form" action="add_student_submit.php">
                    <div class="form_row">
                        <div class="form_label">Full Name <span class="required">*</span> :</div>
                        <div class="form_field">
                            <input type="text" name="full_name" value="<?php echo $stdrow['full_name']; ?>" required="" />
                        </div>
                        <div class="clear"></div>
                    </div>                        
                    <div class="form_row">
                        <div class="form_label">Registration # <span class="required">*</span> :</div>
                        <div class="form_field">
                            <input type="text" name="register_no" value="<?php echo $stdrow['registration_number']; ?>" required="" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form_row">
                        <div class="form_label">Contact Number <span class="required">*</span> :</div>
                        <div class="form_field">
                            <input type="text" name="contact_no" value="<?php echo $stdrow['contact_number']; ?>" required="" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form_row">
                        <div class="form_label">Email Address <span class="required">*</span> :</div>
                        <div class="form_field">
                            <input type="email" name="email_address" value="<?php echo $stdrow['email_address']; ?>" required="" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form_row">
                        <div class="form_label">Login Password <span class="required">*</span> :</div>
                        <div class="form_field">
                            <input type="text" name="login_pass" value="<?php echo $stdrow['login_password']; ?>" required="" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form_row">
                        <div class="form_label">City <span class="required">*</span> :</div>
                        <div class="form_field">
                            <input type="text" name="city_name" value="<?php echo $stdrow['city']; ?>" required="" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form_row">
                        <div class="form_label">Zip Code <span class="required">*</span> :</div>
                        <div class="form_field"><input type="text" name="zip_code" value="<?php echo $stdrow['zip_code']; ?>" required="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="form_row">
                        <div class="form_label">Country</div>
                        <div class="form_field">
                            <input type="text" name="country_name" value="<?php echo $stdrow['country']; ?>" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form_row">
                        <div class="form_label">Full Address <span class="required">*</span> :</div>
                        <div class="form_field">
                            <input type="text" name="full_address" value="<?php echo $stdrow['full_address']; ?>" required="" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form_row">
                        <div class="form_label">&nbsp;</div>
                        <div class="form_field">
                            <input type="submit" name="btn_submit" value="Update Profile" />
                            <input type="hidden" value="<?php echo $stdrow['id']; ?>" name="student_id" />
                        </div>
                        <div class="clear"></div><br>
                    </div>
                </form>
                </div>
            </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <?php require_once('admin_section/main_bottom_footer.php'); ?>
    </div>
</body>
</html>