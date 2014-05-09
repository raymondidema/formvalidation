<?php  namespace Raymondidema\FormValidation;

use Illuminate\Validation\Factory as Validator;

class LaravelValidator implements FactoryInterface {
    /**
     * @var \Illuminate\Validation\Factory
     */
    private $validator;

    /**
     * @param Validator $validator
     */
    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param array $formData
     * @param array $rules
     * @param array $messages
     *
     * @return \Illuminate\Validation\Validator
     */
    public function make(array $formData, array $rules, array $messages = [])
    {
        return $this->validator->make($formData, $rules, $messages);
    }
}