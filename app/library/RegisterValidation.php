<?php
use Phalcon\Validation,
    Phalcon\Validation\Validator\PresenceOf,
    Phalcon\Validation\Validator\Email,
    Phalcon\Validation\Message;

class RegisterValidation extends Validation
{

    public function initialize()
    {

        $this->add('email', new PresenceOf(array(
            'message' => 'The e-mail is required'
        )));

        $this->add('email', new Email(array(
            'message' => 'The e-mail is not valid'
        )));

    }

    public function validate($record)
    {
        $field = $this->getOption('field');
        $value = $record->readAttribute($field);
        $user = User::find(array(
                                "conditions" => array("name" => $value)
                            ));

        if(count($user) == 1)
        {
            $this->appendMessage("The Email is already in use", $field, "Unique");
            return false;
        }
        return true;
    }


}

