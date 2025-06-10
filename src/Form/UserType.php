<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

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
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'invalid_message' => 'Los campos de contraseña deben coincidir.',
                'required' => true,
                'first_options'  => ['label' => 'Contraseña'],
                'second_options' => ['label' => 'Confirmar contraseña'],
                'constraints' => [
                    new NotBlank(['message' => 'La contraseña es obligatoria.']),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'La contraseña debe tener al menos {{ limit }} caracteres.',
                    ]),
                    new Regex([
                        'pattern' => "/(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&^._-])/",
                        'message' => "La contraseña debe contener al menos una letra, un número y un carácter especial (@$!%*#?&^._-).",
                    ]),
                ],
            ])
            ->add('name', TextType::class, [
                'label' => 'Nombre',
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Apellidos',
            ]);

        if ($options['administration']) {
            $builder->add('roles', ChoiceType::class, [
                'label' => 'Roles',
                'choices' => [
                    'Administrador' => 'ROLE_ADMIN',
                ],
                'multiple' => true,
                'expanded' => true,
                'required' => false,
            ]);
        }

        if ($options['edit_mode']) {
            $builder->add('profilePic', FileType::class, [
                'label' => 'Imagen',
                'mapped' => false,
                'required' => false,
                'attr' => ['accept' => 'image/*'],
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
