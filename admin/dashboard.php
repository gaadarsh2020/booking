<?php

    if( isset($_GET['page']) ){
        $page = $_GET['page'] ? $_GET['page'] : 'match';
    }
    else{
        $page = 'match';
    }

    require_once 'inc/functions.php';

?>
<div class="dashboard_wrapper">
    <?php
        switch($page){
            case 'match':
                matchpage();
                break;

            case 'team':
                echo 'team Page';
                break;
                
            case 'stadium':
                stadiumpage();
                break;
            
            case 'booking':
                echo 'booking Page';
                break;

            case 'logout':
                echo 'logout Page';
                break;
                
            default:
                echo 'No Page';
                break;
        }
    ?>
</div>
