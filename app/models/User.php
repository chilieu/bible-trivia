<?php
use Phalcon\Mvc\Model\Validator\Uniqueness as Uniqueness;
use Phalcon\Mvc\Model\Validator\PresenceOf as PresenceOf;
use Phalcon\Mvc\Model\Validator\StringLength as StringLength;
use Phalcon\Validation\Validator\Confirmation as Confirmation;
use Phalcon\Mvc\Model\Validator\Email as EmailValidator;

class User extends BaseModel
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $created;

    public function initialize()
    {
        //$this->belongsTo('question_id', 'Question', 'id');
    }

    public function beforeSave()
    {
        $this->email = $this->getDI()->getFilter()->sanitize($this->email, "trim");
        $this->password = $this->getDI()->getFilter()->sanitize($this->password, "trim");
        $this->password = $this->getDI()->getSecurity()->hash($this->password);
        $this->created = date('Y-m-d H:i:s');
    }

    public function validation()
    {
        $this->validate(new EmailValidator(array(
                'field' => 'email',
                'message' => 'Email is invalided!'
        )));

        $this->validate(new PresenceOf(array(
            'field' => 'email',
            'message' => 'Email is required!'
        )));

        $this->validate(new Uniqueness(array(
            'field' => 'email',
            'message' => 'This email is already registered!'
        )));

        $this->validate(new StringLength(array(
                'field' => 'password',
                'min' => 6,
                'max' => 20,
                'messageMinimum' => 'We want more than 6 characters password',
                'messageMaximum' => 'We don\'t really like 20 characters long password'
        )));
  
        return $this->validationHasFailed() != true;
    }

}
