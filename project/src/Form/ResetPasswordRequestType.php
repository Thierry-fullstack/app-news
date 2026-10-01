<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Sequentially;

class ResetPasswordRequestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',EmailType::class,['attr'=>['class'=>'form-control text-dark col-11'],'required'=>true,
                'label'=>'Email *',
                'label_attr'=>['class'=>'form-check-label text-info-emphasis','id'=>'email-label'],
                'constraints'=>[
                    new Sequentially([
                        new NotBlank(),
                        new Length(max: 180),
                        new Email()
                    ])
                ]
            ])
            ->add('submit',SubmitType::class,['attr'=>['class'=>'btn btn-outline-warning text-capitalize col-12 mx-auto'],
                'label'=>'Soumettre',

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
