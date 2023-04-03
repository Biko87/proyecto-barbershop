<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;


class Email
{

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {

        // create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'f0088f72f881da';
        $mail->Password = 'd4b2b1c9d9728e';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Confirma tu Cuenta';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $Body = "
                <html>
                <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');
                h2 {
                    font-size: 25px;
                    font-weight: 500;
                    line-height: 25px;
                }
            
                body {
                    font-family: 'Poppins', sans-serif;
                    background-color: #ffffff;
                    max-width: 400px;
                    margin: 0 auto;
                    padding: 20px;
                }
            
                p {
                    line-height: 18px;
                }
            
                a {
                    position: relative;
                    z-index: 0;
                    display: inline-block;
                    margin: 20px 0;
                }
            
                a button {
                    padding: 0.7em 2em;
                    font-size: 16px !important;
                    font-weight: 500;
                    background: #000000;
                    color: #ffffff;
                    border: none;
                    text-transform: uppercase;
                    cursor: pointer;
                }
                p span {
                    font-size: 12px;
                }
                div p{
                    border-bottom: 1px solid #000000;
                    border-top: none;
                    margin-top: 40px;
                }
            </style>
            <body>
                <h1> &#128136; Bienvenido a  BarberShop &#128136;</h1>
                <h2>¡Gracias por registrarte!</h2>
                <h3><strong>Hola " . $this->email .  "</strong>.</p></h3>
                <p>Has creado una cuenta nueva en BarberShop, por favor confirma tu cuenta para que puedas comenzar a disfrutar de todos los servicios de
                    BarberShop</p>
                <p>Clic en el botón para confirmar</p>
                <p>&#128071 &#128071</p>
                <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'><button>Confirmar Cuenta</button></a>
                <p>&#9940; Si tú no te registraste en BarberShop, por favor ignora este correo electrónico. &#9940;</p>
                <div><p></p></div>
                <p><span>Este correo electrónico fue enviado desde una dirección solamente de notificaciones que no puede aceptar correo electrónico entrante. Por favor no respondas a este mensaje.</span></p>
            </body>
            </html>";
        $mail->Body = $Body;

        //Enviar el mail
        $mail->send();
    }

    public function enviarInstrucciones() {

        // create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'f0088f72f881da';
        $mail->Password = 'd4b2b1c9d9728e';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Reestablece Tu Contraseña';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';
        $Body = "
                <html>
                <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');
                h2 {
                    font-size: 25px;
                    font-weight: 500;
                    line-height: 25px;
                }
            
                body {
                    font-family: 'Poppins', sans-serif;
                    background-color: #ffffff;
                    max-width: 400px;
                    margin: 0 auto;
                    padding: 20px;
                }
            
                p {
                    line-height: 18px;
                }
            
                a {
                    position: relative;
                    z-index: 0;
                    display: inline-block;
                    margin: 20px 0;
                }
            
                a button {
                    padding: 0.7em 2em;
                    font-size: 16px !important;
                    font-weight: 500;
                    background: #000000;
                    color: #ffffff;
                    border: none;
                    text-transform: uppercase;
                    cursor: pointer;
                }
                p span {
                    font-size: 12px;
                }
                div p{
                    border-bottom: 1px solid #000000;
                    border-top: none;
                    margin-top: 40px;
                }
            </style>
            <body>
                <h1> &#128136; Restablecer Contraseña - BarberShop &#128136;</h1>
                <h3><strong>Hola " . $this->nombre . "</strong>.</p></h3>
                <p>Has solicitado reestablecer tu contraseña, sigue el siguiente enlace para hacerlo.</p>
                <p>Clic en el botón para restablecer la contraseña.</p>
                <p>&#128071 &#128071</p>
                <a href='http://localhost:3000/recuperar?token=" . $this->token . "'><button>Reestablecer Password</button></a>
                <p>&#9940 Si tu no solicitaste este cambio, por favor ignora este correo electrónico. &#9940</p>
                <div><p></p></div>
                <p><span>Este correo electrónico fue enviado desde una dirección solamente de notificaciones que no puede aceptar correo electrónico entrante. Por favor no respondas a este mensaje.</span></p>
            </body>
            </html>";
        $mail->Body = $Body;

            //Enviar el mail
        $mail->send();
    }
}
