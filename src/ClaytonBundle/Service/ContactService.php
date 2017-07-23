<?php
namespace ClaytonBundle\Service;

use ClaytonBundle\Entity\Contact;

class ContactService
{
    public function formFields()
    {
		return [
			[
				'name' => 'name',
                'label' => 'Name',
                'input' => 'text',
                'type' => 'string',
				'max' => 50,
				'required' => true
			],
			[
				'name' => 'email',
                'label' => 'Email',
                'input' => 'text',
				'type' => 'email',
                'required' => true
			],
			[
				'name' => 'contact',
                'label' => 'Contact',
                'input' => 'text',
                'type' => 'number',
				'max' => 11
			],
			[
				'name' => 'message',
                'label' => 'Message',
				'type' => 'text',
                'required' => true
			]
		];
    }

	public function create($formData){
        $contact = new Contact();
		$contact->setName($formData->contact_name);
		$contact->setContact($formData->contact_contact);
        $contact->setMessage($formData->contact_message);
		$contact->setEmail($formData->contact_email);
		return $contact;
	}
}
