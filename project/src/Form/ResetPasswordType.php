<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Sequentially;

class ResetPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('plainPassword', RepeatedType::class, [
                'attr'=>['class'=>'text-primary-emphasis'],
                'type' => PasswordType::class,
                'options' => [
                    'attr' => [
                        'autocomplete' => 'new-password',
                    ],
                ],
                'first_options' => [
                    'constraints' => [
                        new Sequentially([
                            new NotBlank(
                                message: '!',
                            ),
                            new Length(
                                min: 10,
                                max: 10,
                                minMessage: '!',
                                maxMessage: '!',
                            ),
                            new Regex(
                                pattern: '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{10}$/i',
                                message: '!',
                                htmlPattern: '^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{10}$'
                            )
                        ])
                    ],
                    'label' => 'Mot de passe',
                    'label_attr'=>['class'=>'form-label']
                ],
                'second_options' => [
                    'constraints' => [
                        new Sequentially([
                            new NotBlank(
                                message: '!',
                            ),
                            new Length(
                                min: 10,
                                max: 10,
                                minMessage: '!',
                                maxMessage: '!',
                            ),
                            new Regex(
                                pattern: '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{10}$/i',
                                message: '!',
                                htmlPattern: '^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{10}$'
                            )
                        ])
                    ],
                    'label' => 'Confirmation',
                ],
                'invalid_message' => '!',
                // Instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
            ])
            ->add('submit',SubmitType::class,['attr'=>['class'=>'btn btn-outline-warning text-capitalize col-12 mx-auto'],
                'label'=>'Soumettre',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
