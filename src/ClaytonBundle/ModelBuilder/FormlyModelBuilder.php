<?php
namespace ClaytonBundle\ModelBuilder;
/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 7/22/2017
 * Time: 1:50 PM
 */
class FormlyModelBuilder
{
    public function buildFormlyModel($formFields){
        $model = [];
        foreach($formFields as $formField){
                switch ($formField["type"]) {
                    case 'email' :
                        $model[] = $this->buildEmailTextBoxModel($formField);
                        break;
                    case 'text' :
                        $model[] = $this->buildTextAreaModel($formField);
                        break;
                    default :
                        $model[] = $this->buildTextBoxModel($formField);
                }
            }
            return ['form' => $model];
    }

    private function buildFieldModel($formField)
    {
        $model = [
            'key' => 'contact_' . $formField['name'],
            'id' => 'contact_' . $formField['name'],
            'templateOptions' => [
                'label' => $formField['label'],
                'required' => isset($formField['required']) && $formField['required'] ? true : false,
            ]
        ];
        return $model;
    }

    private function buildTextBoxModel($formField)
    {
        $model = $this->buildFieldModel($formField);
        $model['type'] = 'input';
        return $model;
    }

    private function buildTextAreaModel($formField)
    {
        $model = $this->buildFieldModel($formField);
        $model['type'] = 'textarea';
        $model['templateOptions']['rows'] = 5;
        return $model;
    }

    private function buildEmailTextBoxModel($formField)
    {
        $model = $this->buildFieldModel($formField);
        $model['type'] = 'input';
        $model['templateOptions']['type'] = 'email';
        return $model;
    }

}