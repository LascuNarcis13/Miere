<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
	$phone = trim($_POST["telefon"]);
    $message = trim($_POST["message"]);


    if ($name == "" OR $email == "" OR $phone == "" OR $message == "") {
        $error_message = "Trebuie sa specifici un nume, o adresa de e-mail, un numar de telefon si un mesaj.";
    
    }
if (!isset($error_message)) { 
    foreach( $_POST as $value ){
        if( stripos($value,'Content-Type:') !== FALSE ){
            $error_message = "A aparut o problema la informatia pe care a-i adaugat-o.";    
            
        }
    }
}

    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Completarea dumneavoastra are o eroare.";
        
    }

    require_once("inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!isset($error_message) && !$mail->ValidateAddress($email)){
        $error_message = "Trebuie sa specifici o adresa de e-mail valida.";
        
    }
    
  if(!isset($error_message)) { 	
    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "<br>";
    $email_body = $email_body . "Email: " . $email . "<br>";
	$email_body = $email_body . "Telefon: " . $phone . "<br>";
    $email_body = $email_body . "Message: " . $message;

    $mail->SetFrom($email, $name);
    $address = "lascu.narciss@yahoo.com";
    $mail->AddAddress($address);
    $mail->Subject    = "Lascu Miere Formular de Contact  | " . $name;
    $mail->MsgHTML($email_body);

    if($mail->Send()) {
		 header("Location: contact.php?status=thanks");
    exit;
	}else { 
      $error_message = "Multumim de comanda. Tinem legatura. ";
     
    }

  }
}

?>
<?php 
$pageTitle = "Contact Lascu";
$section = "contact";
include('inc/header.php'); ?>

    <div class="section page">

        <div class="wrapper">

            <h3> Contact</h3>

            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p>Multumesc de email! Tinem legatura!</p>
            <?php } else { ?>

             
				<?php 
				
				if (!isset($error_message)) {
					echo '<p>Mi-ar placea sa luam legatura! Completati formularul pentru a trimite un e-mail.</p>';
					
					       
				}else { 
					echo '<p class="message">' . $error_message . '</p>';
				}
				
				?>
				
                <form method="post" action="contact.php">

                    <table>
                        <tr>
                            <th>
                                <label for="name">Nume</label>
                            </th>
                            <td>
                                <input type="text" name="name" placeholder="Numele dumneavoastra" id="name" value="<?php  if (isset($name)) {echo htmlspecialchars($name); } ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" placeholder="Adresa de e-mail" id="email" value="<?php if (isset($email)) { echo htmlspecialchars($email); } ?>"> 
                            </td>
                        </tr>
						<tr>
                            <th>
                                <label for="name">Telefon</label>
                            </th>
                            <td>
                                <input type="text" name="telefon" placeholder="Numar de Telefon" id="name" value="<?php  if (isset($phone)) {echo htmlspecialchars($phone); } ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="message">Mesaj</label>
                            </th>
                            <td>
                                <textarea rows="7" cols="4" name="message"  placeholder="Mesaj si Comenzi" id="message"><?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
                            </td>
                        </tr> 
                        <tr style="display: none;">
                            <th>
                                <label for="address">Address</label>
                            </th>
                            <td>
                                <input type="text" name="address" id="address">
                                <p>Miere : please leave this field blank.</p>
                            </td>
                        </tr>                   
                    </table>
                    <input type="submit" value="Trimite">

                </form>

            <?php } ?>

        </div>

    </div>

<?php include('inc/footer.php') ?>