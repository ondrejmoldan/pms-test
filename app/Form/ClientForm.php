<?php

namespace App\Form;

use Kris\LaravelFormBuilder\Form;

class ClientForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('firstname', 'text',
            [
                'label' => 'Firstname',
                'rules' => 'required',
            ])
            ->add('lastname', 'text', [
                'label' => 'Lastname',
                'rules' => 'required',
            ])
            ->add('company', 'text', [
                'label' => 'Company',
            ])
            ->add('email', 'email', [
                'label' => 'E-mail',
                'rules' => 'required',
            ])
            ->add('phone', 'tel', [
                'label' => 'Telephone',
            ])
            ->add('bank_account', 'text', [
                'label' => 'Bank account number',
            ])
            ->add('dni', 'number', [
                'label' => 'DNI',
            ])
            ->add('vat', 'text', [
                'label' => 'VAT',
            ])
            ->add('Create client', 'submit', [

            ]);
    }
}
