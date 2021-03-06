<?php

namespace App\Form;

use App\Entity\User;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AccountType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'firstName',
                TextType::class,
                $this->getConfiguration("Prénom","")
            )
            ->add(
                'lastName',
                TextType::class,
                $this->getConfiguration("Nom","")
            )
            ->add(
                'email',
                TextType::class,
                $this->getConfiguration("Email","")
                )
            ->add(
                'picture',
                TextType::class,
                $this->getConfiguration("Photo","")
                )
            ->add(
                'description',
                TextareaType::class,
                $this->getConfiguration("Déscription","")
                )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
