<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Event\PostSubmitEvent;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Sequentially;

class AddPostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title',TextType::class,['attr'=>['class'=>'form-control'],
                'label'=>'Titre',
                'label_attr'=>['class'=>'form-label text-danger-emphasis fs-5'],
                'constraints'=>[
                    new Sequentially([
                        new NotBlank(),
                        new Length(min: 3,max: 254)
                    ])
                ]
            ])
            ->add('content',TextareaType::class,['attr'=>['class'=>'form-control '],'label'=>false,
                'label_attr'=>['class'=>'form-label text-danger-emphasis fs-5'],
                'constraints'=>[
                    new Sequentially([
                        new NotBlank(),
                    ])
                ]
            ])
            ->add('submit',SubmitType::class,['attr'=>['class'=>'btn btn-gray w-100'],'label'=>'Soumettre'])
            ->addEventListener(FormEvents::POST_SUBMIT,$this->addDate(...))
        ;
    }

    public function addDate(PostSubmitEvent $event):void
    {
        $data = $event->getData();
        if(!$data instanceof Post)return;
        $data->setCreatedAt(new \DateTimeImmutable());
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
