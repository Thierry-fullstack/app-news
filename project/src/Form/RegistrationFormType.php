<?php

namespace App\Form;

use App\Entity\User;
use DateTimeImmutable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Event\PostSubmitEvent;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Sequentially;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',EmailType::class,['attr'=>['class'=>'form-control text-dark col-11'],'required'=>true,
                'label'=>'Email *',
                'label_attr'=>['class'=>'form-check-label','id'=>'email-label'],
                'constraints'=>[
                    new Sequentially([
                        new NotBlank(),
                        new Length(max: 180),
                        new Email()
                    ])
                ]
            ])
            ->add('plainPassword', PasswordType::class,[
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password','class'=>'form-control text-dark col-11'],
                'label'=>'Mot de passe *',
                'label_attr'=>['class'=>'form-check-label'],
                'constraints' => [
                    new Sequentially([
                        new NotBlank(
                            message: '',
                        ),
                        new Length(
                            min: 10,
                            max: 10,
                            minMessage: '',
                            maxMessage: '',
                        ),
                        new Regex(
                            pattern: '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{10}$/i',
                            message: '',
                            htmlPattern: '^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{10}$'
                        )
                    ])
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, ['attr'=>['class'=>''],
                'mapped' => false,
                'label'=>'  Accepter contrat *',
                'label_attr'=>['class'=>'p-0 fw-light','id'=>'label-check-agreeTerms'],
                'constraints' => [
                    new IsTrue(
                        message: '',
                    ),
                ],
            ])
            ->add('register',SubmitType::class,[
                'label'=>'Soumettre'
            ])
            ->addEventListener(FormEvents::POST_SUBMIT,$this->addDate(...))
        ;
    }

    public function addDate(PostSubmitEvent $event):void
    {
        $data =$event->getData();
        if(!$data instanceof User)return;
        $data->setCreatedAt(new DateTimeImmutable());
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
