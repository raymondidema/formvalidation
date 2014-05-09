<?php  namespace Raymondidema\FormValidation;

interface FactoryInterface {
    /**
     * @param array $formData
     * @param array $rules
     * @param array $messages
     *
     * @return mixed
     */
    public function make(array $formData, array $rules, array $messages = []);
} 