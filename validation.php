<?php 

require('../connection.php');

$nombre =  $_POST['nombre'];
$email = $_POST['email'];
$mensaje =  $_POST['mensaje'];

function email_validation($str) {
    return (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str))? FALSE : TRUE;
}

if(!email_validation($email)) {
    header('Location: index.php?error');
} else {
    $sql = "INSERT INTO contacto (nombre, email, mensaje) VALUES ('$nombre', '$email','$mensaje')";
    if(mysqli_query($conn, $sql)){
        session_start();
        header("Location: index.php?success"); 
    } else{
        echo "ERROR: $sql. " . mysqli_error($conn);
    }   
}

if(isset($_POST['nombre']) && isset($_POST['email'])) {
    $to = "contacto@datafy.cl";
    $subject = "Contacto sitio web". " ". $DateAndTime = date('m-d-Y h:i:s a', time());;
    $body = '<html>
        <body style="margin:0;padding:0;">

        <table
        role="presentation"
        style="
          width: 100%;
          border-collapse: collapse;
          border: 0;
          border-spacing: 0;
          background: #ffffff;
        "
      >
        <tr>
          <td align="center" style="padding: 0">
            <table
              role="presentation"
              style="
                width: 602px;
                border-collapse: collapse;
                border: 1px solid #cccccc;
                border-spacing: 0;
                text-align: left;
              "
            >
              <tr>
                <td style="padding: 36px 30px 42px 30px">
                  <table
                    role="presentation"
                    style="
                      width: 100%;
                      border-collapse: collapse;
                      border: 0;
                      border-spacing: 0;
                    "
                  >
                    <tr>
                      <td style="padding: 0 0 36px 0; color: #153643">
                        <h1
                          style="
                            font-size: 24px;
                            margin: 0 0 10px 0;
                            font-family: Arial, sans-serif;
                            text-align: left;
                          "
                        >
                          Consulta Nuevo Proyecto
                        </h1>
                      </td>
                    </tr>
  
                    <tr>
                      <td style="padding: 0 0 36px 0; color: #153643">
                        <h2
                          style="
                            font-size: 20px;
                            margin: 0 0 10px 0;
                            font-family: Arial, sans-serif;
                            text-align: left;
                          "
                        >
                          Nombre:
                        </h2>
  
                        <p
                          style="
                            margin: 0 0 12px 0;
                            font-size: 16px;
                            line-height: 24px;
                            font-family: Arial, sans-serif;
                          "
                        >
                          '.$nombre.'
                        </p>
                      </td>
                    </tr>
  
                    <tr>
                      <td style="padding: 0 0 36px 0; color: #153643">
                        <h2
                          style="
                            font-size: 20px;
                            margin: 0 0 10px 0;
                            font-family: Arial, sans-serif;
                            text-align: left;
                          "
                        >
                          Email:
                        </h2>
  
                        <p
                          style="
                            margin: 0 0 12px 0;
                            font-size: 16px;
                            line-height: 24px;
                            font-family: Arial, sans-serif;
                          "
                        >
                        '.$email.'
                        </p>
                      </td>
                    </tr>
  
                    <tr>
                      <td style="padding: 0 0 36px 0; color: #153643">
                        <h2
                          style="
                            font-size: 20px;
                            margin: 0 0 10px 0;
                            font-family: Arial, sans-serif;
                            text-align: left;
                          "
                        >
                          Mensaje:
                        </h2>
  
                        <p
                          style="
                            margin: 0 0 12px 0;
                            font-size: 16px;
                            line-height: 24px;
                            font-family: Arial, sans-serif;
                          "
                        >
                        '.$mensaje.'
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
        </body>
    </html>';

    $headers = "De:" .$_POST['nombre']." <".$_POST['email']."> \r\n";
    $headers .= "Para: "."<".$email."> \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";
    $headers .= "Cc: sammy.caro94@gmail.com \r\n";

    $send = mail($to, $subject, $body, $headers);

}

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}
?>