<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EpisodeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('sumView')
            ->add('season',EntityType::class, array(
                'class' => 'AppBundle:Season',

                'choice_label' => 'number'
            ))
            ->add('realisator',EntityType::class, array(
                'class' => 'AppBundle:Realisator',

                'choice_label' => 'lastName'
            ))
            ->add('actor',EntityType::class, array(
                'class' => 'AppBundle:Actor',

                'choice_label' => 'lastName'
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Episode'
        ));
    }
}
