<?php

namespace App\Form;

use App\Entity\Card;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CardForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('name')
                ->add('image')
                ->add('description')
                ->add('health')
                ->add('abilities', ChoiceType::class, [
                    'choices' => [
                        'Puñetazo' => 'punch',
                        'Patada' => 'kick',
                        'Corte' => 'cut'
                    ],
                    'multiple' => true,
                    'expanded' => true
                ])
                ->add('type');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Card::class,
        ]);
    }
}
