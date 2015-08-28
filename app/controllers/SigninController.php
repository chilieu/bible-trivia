<?php
use Phalcon\Mvc\Controller;

class SigninController extends Controller
{

	public function initialize() {
		$this->view->setLayout('index');

        //Check if the cookie has previously set
        if ( !empty($_COOKIE["bible-trivia-user"]) || !empty($this->session->get("bible-trivia-user")) ) {
            return $this->response->redirect("user");
        } 

	}

    // wrapper function for debug purposes.
    public function pr($data = null) {
        echo '<pre>';print_r($data);echo '</pre>';      
    }

    public function indexAction()
    {

    }

    public function forgotPasswordAction()
    {
            //echo $this->config->application->pluginsDir;
    }

    public function resetPasswordAction()
    {

        if ($this->request->getPost()) {
            $email = $this->request->getPost('email', 'email');
            $user = User::findFirstByEmail($email);

            $captcha = $this->request->getPost("captcha");
            if($captcha !== $this->session->get('captcha_code') ){
                $this->flashSession->warning("Please correct your captcha.");
                return $this->response->redirect("signin/forgot-password");
            }

            if($user){
                //reset password here!
                $rand = rand(100000, 999999);
                $user->password = $rand;

                if( !$user->save() ){
                    $this->flashSession->warning("Could not reset your password, please try again.");
                    return $this->response->redirect("signin/forgot");
                }

                //email reset password here!
                $mail = new PHPMailer();
                $subject = "Bible Trivia - New password";
                
                $content = "A new password was requested from " . $this->request->getClientAddress() . "\r\n<br>";
                $content .= "Your new password to 'Bible Trivia' is: {$rand}" . "\r\n<br>";
                $content .= "\r\n<br>";
                $content .= "============================" . "\r\n<br>";
                $content .= "Sincerely," . "\r\n<br>";
                $content .= "Bible Trivia - Support Team" . "\r\n<br>";

                $mail->IsSMTP();
                $mail->SMTPDebug = 0;
                $mail->SMTPAuth = TRUE;
                $mail->Mailer   = "smtp";
                $mail->SMTPSecure = $this->config->mail->smtp->security;
                $mail->Port     = $this->config->mail->smtp->port;
                $mail->Username = $this->config->mail->smtp->username;
                $mail->Password = $this->config->mail->smtp->password;//reminder: password app active from google account
                $mail->Host     = $this->config->mail->smtp->server;
                $mail->SetFrom($this->config->mail->fromEmail, $this->config->mail->fromName);
                $mail->AddReplyTo($this->config->mail->fromEmail, $this->config->mail->fromName);
                $mail->AddAddress($email);
                $mail->Subject = $subject;
                $mail->WordWrap   = 80;
                $mail->MsgHTML($content);
                $mail->IsHTML(true);

                if(!$mail->Send()) {
                    $this->flashSession->warning("Could not send email, please try again. " . $mail->ErrorInfo);
                    return $this->response->redirect("signin/forgot");    
                } else {
                    $this->flashSession->success("Email has been sent, please follow steps in your email.");
                    return $this->response->redirect("signin#signin");    
                }

            } else {
                $this->flashSession->warning("Could not find your email, please try again.");
                return $this->response->redirect("signin/forgot");
            }
        } else {
            return $this->response->redirect("signin");
        }
    }

    public function registerAction()
    {

        if ($this->request->getPost()) {

            $email = $this->request->getPost('email', 'email');
            $password = $this->request->getPost('password', 'string');
            $password_confirm = $this->request->getPost('password_confirm', 'string');

            $captcha = $this->request->getPost("captcha");
            if($captcha !== $this->session->get('captcha_code') ){
                $this->flashSession->warning("Please correct your captcha.");
                return $this->response->redirect("user#register");
            }

            if($password != $password_confirm){
                $this->flashSession->warning("Password does not match");
                return $this->response->redirect("signin#register");
            }

            $user = new User();

            //insert data if gone through validation
            $user->assign(array(
                        'email' => $email,
                        'password' => $password
            ));


            if ( !$user->save()) {
                foreach ($user->getMessages() as $message)
                {
                    $this->flashSession->warning($message . "<br>");
                }
                return $this->response->redirect("signin#register");
            }

            $this->session->set("bible-trivia-user", $user->email);
            $this->flashSession->success("Welcome! Your information has been saved! <br>Please sign in.");
            return $this->response->redirect("signin#register");
        } else {
            return $this->response->redirect("signin#register");
        }
    }

    public function logoutAction()
    {
        //delete session
        $this->session->remove("bible-trivia-user");

        //remove cookie
        unset($_COOKIE["bible-trivia-user"]);
        setcookie('bible-trivia-user', null, -1, '/');

        $this->flashSession->success("Logged out!");
        return $this->response->redirect("");
    }

    public function authenticateAction()
    {

        $email = $this->request->getPost("email", 'email');
		$password = $this->request->getPost("password", 'string');
        $remember_me = $this->request->getPost('remember_me', 'string');

        $user = User::findFirstByEmail($email);
        if ($user) {
            if ($this->security->checkHash($password, $user->password)) {

                //The password is valid
                $this->session->set("bible-trivia-user", $user->email);

                if($remember_me){
                    //set cookie
                    if ( !setcookie("bible-trivia-user", $user->email, time() + 15 * 86400, '/' ) ) {
                        $this->flashSession->warning("Cannot set cookie on this browser.");
                    }
                }

                $this->flashSession->success("Welcome Back!");
                return $this->response->redirect("user");

            } else {
                $this->flashSession->warning("Your email or password is incorrect.");
                return $this->response->redirect("signin#signin");
            }
        } else {
            $this->flashSession->warning("Your email or password is incorrect.");
            return $this->response->redirect("signin#signin");
        }

    }


    public function captchaAction()
    {

        //set layout to no nav layout
        $this->view->setLayout('nonavlayout');
        $captcha = new CaptchaSecurityImages(120, 40, 6);
        exit;
    }
    
}
