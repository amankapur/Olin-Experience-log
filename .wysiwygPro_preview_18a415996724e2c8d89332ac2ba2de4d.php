<?php
if ($_GET['randomId'] != "tQfJuxr8THFVLemCrG9xwuKNq_GUpGGeztkO17IUyQ_2NoX8kLaudho4Eyk3g2iX") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
