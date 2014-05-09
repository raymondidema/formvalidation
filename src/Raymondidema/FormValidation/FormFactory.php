<?php  namespace Raymondidema\FormValidation;

use Raymondidema\FormValidation\FactoryInterface as Validator;

abstract class FormFactory {

    /**
     * @var \Illuminate\Validation\Factory
     */
    protected $validator;

    /**
     * @var
     */
    protected $validation;

    /**
     * @param Validator $validator
     */
    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param array $formData
     *
     * @return bool
     * @throws FormValidationException
     */
    public function validate(array $formData)
    {
        $this->validation = $this->validator->make($formData, $this->getValidatorRules());

        if($this->validation->fails())
        {
            throw new FormValidationException('Validation Failed!', $this->getValidationErrors());
        }
        return true;
    }

    /**
     * @return mixed
     */
    public function getValidatorRules()
    {
        return $this->rules;
    }

    /**
     * @return mixed
     */
    protected function getValidationErrors()
    {
        return $this->validation->errors();
    }
} 