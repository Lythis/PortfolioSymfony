<?php

namespace App\Form;

use App\Entity\Mail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom_Mail', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('Objet_Mail', TextType::class, [
                'label' => 'Objet'
            ])
            ->add('Message_Mail',TextareaType::class, [
                'label' => 'Message'
            ])
            ->add('Prenom_Mail',TextType::class, [
                'label' => 'Message'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mail::class,
        ]);
    }
}
