<?php
/**
 * TSW Monthly - Open Source
 * user= monthly pass= monthly
 * change ASAP!
 */

// clean outputs
function esc($string)
{
	return htmlentities(trim($string), ENT_QUOTES, 'UTF-8');
}

// foolproof redirect
function redirect($url)
{
    if (!headers_sent())
    {
        header('Location: '.$url);
        exit;
        }
    else
    {
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}
?>


