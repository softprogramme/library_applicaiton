<?php
require_once 'library/admin_system_files.php';
$book = new booksRecords();

?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo SYSTEM_TITLE; ?></title>
<link type="text/css" rel="stylesheet" href="style_file.css" />
<script type="text/javascript" src="js_files/common_functions.js"></script>
</head>
<body>
    <div class="main_block">
        <?php require_once('main_topheader.php'); ?>
        
        <div class="body_content">
            <div class="page_mgmt">
                <div class="page_left_col">
                    <?php echo page_left_menu(); /// common_function.php file ?>
                </div>
                <div class="page_right_col">  
            <div class="form_block">
                <h1 class="main_heading">Books Management</h1>          
                <div id="return_msg"></div><br>
            <?php
                if( isset($_GET['msg']) && !empty($_GET['msg']) ) {
                    echo '<div class="success_msg">'.$_GET['msg'].'</div>';
                }
            ?>
                <div class="books_block">
                    <table class="record_view_table">
                        <tr>
                            <th>Sr#</th>
                            <th>Book Title</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th width="80"><div align="center">Book Cover</div></th>
                            <th width="70"><div align="center">Add Date</div></th>
                            <th width="70"><div align="center">Action</div></th>
                        </tr>
                        <?php echo $book->view_book_records(); ?>
                    </table>
                </div>
            </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <?php require_once('main_bottom_footer.php'); ?>
    </div>
</body>
</html>