<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Sequentially;

class VerifyNumberType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('number',TextType::class,['attr'=>['class'=>'form-control','autofocus'=>true ],'label'=>'Code :',
                'mapped'=>false,
                'constraints'=>[
                    new Sequentially([
                        new NotBlank(message:'!'),
                        new Regex(
                            pattern: '/^[0-9_-]{6}$/i',
                            message: ('!'),
                            htmlPattern: '^[0-9_-]{6}$',
                        )
                    ]),
                ],
            ])
            ->add('submit',SubmitType::class,
                ['attr'=>['class'=>'btn btn-outline-warning text-primary-emphasis text-capitalize w-100 '],'label'=>'Soumettre'])
        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
