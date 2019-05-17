<?php 

//url aquispe
define('URL_SITIO', 'http://localhost:8080/PF_gmdlwebcamp');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AddYH402KA7uJ8FYEKM_OHnQLPBqtDpW78682Gnu9W0IpYtyJd2Khxr_zgP2Ywcn71rJn7Pa7UFF5pW8',     // ClientID
        'EOR2LPf1yXC3dSIQj3mC37LJ_y4oMDJ1hWNMgPi2oqKqSAWRCxiNEQILIgshYiAKTy-X5GrtAbqI_UO-'      // ClientSecret
    )
);

