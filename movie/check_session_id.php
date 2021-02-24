<?php
session_start();
if( isset( $_SESSION[ 'user_id' ] ) ) {
    $check_login = TRUE;
}
?>