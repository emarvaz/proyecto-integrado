<?php

namespace App\Form;

use App\Entity\CardDeck;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CopyCardDeckForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $options['user'];
        $toCopyCardDeck = $options['source_deck'];

        $builder
            ->add('targetDeck', EntityType::class, [
                'class' => CardDeck::class,
                'label' => 'Selecciona al que copiar',
                'choice_label' => 'name',
                'placeholder' => 'Selecciona un mazo',
                'choices' => array_filter($user->getCardDecks()->toArray(), function ($cardDeck) {
                    return $cardDeck;
                }),
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired([
            'user',
            'source_deck'
        ]);
        $resolver->setDefaults([
            'csrf_protection' => true
        ]);
    }
}
