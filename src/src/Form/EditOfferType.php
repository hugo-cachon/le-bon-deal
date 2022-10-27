<?php

namespace App\Form;

use App\Entity\Offer;
use App\Entity\Tag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditOfferType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
//            ->add('img')
            ->add('city')
            ->add('price')
//            ->add('created_at')
//            ->add('update_at')
            ->add('tag',EntityType::class, [
                'label' => 'Ajouter ou supprimer des tag ?',
                'expanded' => true,
                'multiple' => true,
                'class' => Tag::class,
                'choice_label' => 'name'
            ])
//            ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offer::class,
        ]);
    }
}
