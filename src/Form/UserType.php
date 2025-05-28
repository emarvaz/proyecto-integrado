<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Nombre de usuario',
            ])
            ->add('email', EmailType::class, [
                'label' => 'Correo electrónico',
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Contraseña',
                'mapped' => false,
                'required' => !$options['edit_mode'],
            ])
            ->add('name', TextType::class, [
                'label' => 'Nombre',
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Apellidos',
            ])
            ->add('register_date', DateTimeType::class, [
                'label' => 'Fecha de registro',
                'widget' => 'single_text',
                'html5' => true,
                'required' => false,
            ]);

        if ($options['administration']) {
                $builder->add('roles', ChoiceType::class, [
                    'label' => 'Roles',
                    'choices' => [
                        'Administrador' => 'ROLE_ADMIN',
                    ],
                    'multiple' => true,
                    'expanded' => true
                ]);
            }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'administration' => false,
            'edit_mode' => false,
        ]);
    }
}
