<?php  namespace Raymondidema\FormValidation;

class FormValidationException extends \Exception {
    /**
     * @var
     */
    protected $errors;

    /**
     * @param string $message
     * @param int    $errors
     */
    public function __construct($message, $errors)
    {
        $this->errors = $errors;
        parent::__construct($message);
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }
} 