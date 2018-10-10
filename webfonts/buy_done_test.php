<?php

/*
 * Callback para paypal al procesar o cancelar un pago
 *
 */


require_once dirname(__FILE__) . '/buy/conf/config.php';

require_once $PATHS['lib'] . 'paypal.lib.php';

// paypal_get_api_context
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

// paypal_create_payment
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

// paypal_execute_payment
use PayPal\Api\PaymentExecution;



$array_msg_langs = array(
    'es'    => array(
        'ok'            => 'El pago se ha recibido correctamente. En los próximos días te enviaremos los Tokens al Wallet indicado.',
        'cancel'        => 'El pago ha sido cancelado.',
        'error'         => 'Error al procesar el pago.',
        'not_approved'  => 'El pago no ha sido aprovado por la pasarela de pago.',
    ),
    'en'    => array(
        'ok'            => 'The payment has been received correctly. In the next few days, we will send the Tokens to the indicated wallet.',
        'cancel'        => 'The payment has been canceled.',
        'error'         => 'Error processing payment.',
        'not_approved'  => 'The payment has not been approved by the payment gateway.',
    ),
/*
    'ru'    => array(
        'ok'            => 'El pago se ha recibido correctamente. En los próximos días te enviaremos los Tokens al Wallet indicado.',
        'cancel'        => 'El pago ha sido cancelado.',
        'error'         => 'Error al procesar el pago.',
        'not_approved'  => 'El pago no ha sido aprovado por la pasarela de pago.',
    ),
*/
);


$html_data  = '';
$html_msg   = '';




////// GET & CHECK LANG

$lang       = 'en';

if (isset($_GET['lang']) && in_array(strtolower($_GET['lang']), $LANGS)){
    $lang = strtolower($_GET['lang']);
}


////// GET HTML 4 LANG

$path_html_file = $PATHS['html'] . $lang . '.html';
if (!is_file($path_html_file)){
    $path_html_file = $PATHS['html'] . 'en.html';
}

if (is_file($path_html_file)){
    $html_data = file_get_contents($path_html_file);
    if ($html_data === false){
        $html_data = '';
    }
}



////// ARRAY TO DB
$arr_buy = array(
    'date'          => date('Y-m-d H:i:s'),
    'status'        => 'waiting',
    'payment_id'    => '',
    'token_id'      => '',
    'lang'          => $lang,
    //'data'        => array(),
);

$flag_reload = false;



////// PAYPAL CODE PAY

if (isset($_GET['pp_success'])){

    if ($_GET['pp_success'] == 'true') {

        $apiContext = paypal_get_api_context(CLIENTID, CLIENTSECRET, PAYPAL_MODE);                                           // TODO => , $PATH_TO_LOG_FILE


        // Get the payment Object by passing paymentId
        // payment id was previously stored in session in
        // CreatePaymentUsingPayPal.php
        $paymentId = $_GET['paymentId'];
        $payment = Payment::get($paymentId, $apiContext);


        // ### Payment Execute
        // PaymentExecution object includes information necessary
        // to execute a PayPal account payment.
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId($_GET['PayerID']);

        $error = '';

        try {
            // Execute the payment
            // (See bootstrap.php for more on `ApiContext`)
            $result = $payment->execute($execution, $apiContext);

        } catch (Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            //ResultPrinter::printError("Executed Payment", "Payment", null, null, $ex);
            //echo 'Error al ejecutar el pago: '.$ex->getMessage();
            //exit(1);

            //$error = 'yes';               // TODO !?!?!?!
            $flag_reload = true;            // TODO !?!?!?!
        }

        try {
            $payment = Payment::get($paymentId, $apiContext);
        } catch (Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            //ResultPrinter::printError("Get Payment", "Payment", null, null, $ex);
            //echo 'Error: '.$ex->getMessage();
            //exit(1);
            $error = 'yes';
        }

        if ($error == 'yes'){
            $html_msg = 'error';
        }
        else{

            if($payment->getState() === 'approved'){
                $html_msg = 'ok';
                $arr_buy['status'] = 'done';
                $arr_buy['payment_id'] = $payment->getId();
                if (isset($_GET['token'])){
                    $arr_buy['token_id'] = $_GET['token'];
                }
            }else{
                $html_msg = 'not_approved';
            }
        }
    }
    else{
        $html_msg = 'cancel';
    }
}



////// SAVE DB ???
if ($html_msg == 'ok' && $flag_reload == false){

    ////// GET IP
    require_once $PATHS['lib'] . 'XIP.class.php';

    $XIP = new XIP();
    $arr_buy['ip'] = $XIP->IP['all']; 
    unset($XIP);


    ////// CRYPT
    require_once $PATHS['vendor'] . 'autoload.php';

    if (!is_file($PATHS['key_public'])){
        //echo "error";
        //exit(0);    // TODO: !?

        $str = serialize($arr_buy);
    }
    else{

        $key_public = file_get_contents($PATHS['key_public']);

        $str = serialize($arr_buy);

        $str = openpgp_encrypt($key_public, $str);
        $str = str_replace("-----BEGIN PGP MESSAGE-----\n\n", '', $str);
        $str = str_replace("\n-----END PGP MESSAGE-----\n", '', $str);
    }


    ////// PREPARE DB
    $id_inv = 1;

    if (is_file($PATHS['db'])){
	    $db = new SQLite3($PATHS['db']);

        
	    //Get last ID
	    $sql = 'SELECT max(id) as max_id FROM inv';
	    $res = execute_sqlite($sql, $db, 'query');
	    if ($res['error'] != 'not an error'){
           // echo "error";
           //exit(0);    // TODO: !?
	    }
        else{

	        while($row = $res['result']->fetchArray(SQLITE3_ASSOC) ){
		        $id_inv = $row['max_id'];
	        }

	        if (!is_numeric($id_inv)){
		        $id_inv = 1;
	        }
	        else{
		        $id_inv++;
	        }
        }
    }
    else{
	    $db = new SQLite3($PATHS['db']);

	    $db->exec(
		    'CREATE TABLE inv (
			    id          INTEGER PRIMARY KEY
					                UNIQUE,
			    data        TEXT  NOT NULL
		    );');
    }



    ////// INSERT TO DB
    $values = array(
	    'data'	=> $str
    );

    $res2 = execute_insert_sqlite($db, 'inv', $values);
    if ($res2['error'] != 'not an error'){
        //echo "error";
        //exit(0);    // TODO: !?
    }



    ////// SAVE BACKUP FILE TXT
    file_put_contents($PATHS['backups'] . date("Y-m-d_H-i-s") . '_' . $id_inv, $str);
}




////// PREPARE HTML

$html_msg = '
    <div class="col-md-12 text-center" style="margin:30px 0;">
        ' . $array_msg_langs[$lang][$html_msg] . '
    </div>';

$ini = strpos($html_data, '<!-- %INI_FORM% -->');
$end = strpos($html_data, '<!-- %END_FORM% -->');

if ($ini !== false && $end !== false){
    $end += strlen('<!-- %END_FORM% -->');

    $html_data = substr($html_data, 0, $ini) . $html_msg . substr($html_data, $end);
}
else{
    $html_data = $html_msg;
}

$html_data = str_replace('../', '', $html_data);


echo $html_data;

exit(0);


?>
