<?php
//requring for Dompdf
require __DIR__ . "/vendor/autoload.php";

//requiring for Whatapp Api
require_once("vendor/autoload.php"); //since we are use composer

use Dompdf\Dompdf;
use Dompdf\Options;

$sendername = $_GET['sender_name'];
$senderemail = $_GET['sender_contact'];
$senderaddress = $_GET['sender_address'];

$receivername = $_GET['receiver_name'];
$receiveremail = $_GET['receiver_contact'];
$receiveraddress = $_GET['receiver_address'];

$productitem = $_GET['product-item'];
$refcode = $_GET['ref_code'];

$productcategory = $_GET['product_category'];
$totalfreight = $_GET['total_freight'];
$weightkg = $_GET['weight_kg'];

$shipmentorigin = $_GET['shipmentorigin'];
$shipmentdestination = $_GET['shipmentdestination'];
$shipmenttype = $_GET['shipmenttype'];


$stampdate = date("d/m/Y");


//$html = '<h1 style="color: green">Example</h1>';
//$html .= "Hello <em>$name</em>";
//$html .= '<img src="example.png">';
//$html .= "Quantity: $quantity";

/**
 * Set the Dompdf options
 */
$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

/**
 * Set the paper size and orientation
 */
$dompdf->setPaper("A4", "Portrait");

/**
 * Load the HTML and replace placeholders with values from the form
 */
$html = file_get_contents("template.html");

$html = str_replace(["{{ refcode }}", "{{ productcategory }}", "{{ sendername }}", "{{ senderaddress }}", "{{ senderemail }}", "{{ receivername }}", "{{ receiveraddress }}", "{{ receiveremail }}", "{{ productitem }}", "{{ totalfreight }}", "{{ weightkg }}", "{{ shipmentorigin }}", "{{ shipmentdestination }}", "{{ shipmenttype }}", "{{ stampdate }}"], [$refcode, $productcategory, $sendername, $senderaddress, $senderemail, $receivername, $receiveraddress, $receiveremail, $productitem, $totalfreight, $weightkg, $shipmentorigin, $shipmentdestination, $shipmenttype, $stampdate], $html);

$dompdf->loadHtml($html);
//$dompdf->loadHtmlFile("template.html");

/**
 * Create the PDF and set attributes
 */
$dompdf->render();

$dompdf->addInfo("Title", "An Example PDF"); // "add_info" in earlier versions of Dompdf

/**
 * Send the PDF to the browser
 */
//$dompdf->stream("invoice.pdf", ["Attachment" => 0]);

/**
 * Save the PDF file locally
 */
$output = $dompdf->output();
file_put_contents("file.pdf", $output);





//Sending the Email Starts Here;

    $message = "Hi, " . $receivername . "\r\n\r\n" ."Welcome to dispatchwaves,"." we bring to your notice that " ."your Parcel Has been Received, Kindly Download your invoice and keep track of your package." . "\r\n\r\n"; 

    $message .= 'Carefully copy your Consignment Number and visit our tracking page to see the progress of your Parcel.' . "\r\n\r\n";

    $message .= "Consignment Number: " . $refcode . "\r\n\r\n";
    $message .= "Tracking Page: " . "http://dispatchwaves.com/trace_form.php" . "\r\n\r\n";
    $message .= "Thank you for engaging our services." . "\r\n\r\n";
    $message .="If you do not request any of this services, kindly ignore this message.";
    
    $subject ="Package now on dispatchwaves Custody";
    $fromname ="dispatchwaves";
    $fromemail = 'info@dispatchwaves.com';  //if u dont have an email create one on your cpanel
    $mailto = $receiveremail;  //the email which u want to recv this email
    $content = file_get_contents("file.pdf");
    $content = chunk_split(base64_encode($content));
    // a random hash will be necessary to send mixed content
    $separator = md5(time());
    // carriage return type (RFC)
    $eol = "\r\n";
    // main header (multipart mandatory)
    $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;
    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;
    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/pdf; name=\"" . "customer-invoice" . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";
    //SEND Mail
   if (mail($mailto, $subject, $body, $headers)) {
        
    $receipt = "file.pdf";
    unlink ($receipt);

    echo '        
     <h4>Go Back: <a href="admin/index.php"> Dashboard </h4></a>';

    echo '<p style="color: green;">Invoice was sent successfully to the customer.</p>';

        
        
    } else {
        echo "mail send ... ERROR!";
        //print_r( error_get_last() );
    }






// ================= Whatsapp API ===========
//receipt link
//$receipt = "https://dispatchwaves.com/file.pdf";

//sending whatsapp message
//Authentication
//$token = "733m91rded42q3me";
//$instance_id = "instance50839";

//object
//$client = new UltraMsg\WhatsAppApi($token, $instance_id);

// $to = "+2348142911111";
// $filename ="Client Receipt"; 
// $document = $receipt;
// $api = $client->sendDocumentMessage($to,$filename,$document);
// print_r($api);



// unlink("file.pdf");

//     echo '        
//      <h4>Go Back: <a href="admin/index.php"> Dashboard </h4></a>';
//      echo '<p style="color: green;">Invoice was sent successfully to the customer.</p>';
