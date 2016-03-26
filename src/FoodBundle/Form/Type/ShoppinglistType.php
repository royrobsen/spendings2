<?php

namespace FoodBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShoppinglistType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('artikel', 'entity', array(
                    'class' => 'FoodBundle:Artikel',
                    'choice_label' => 'artikelName',
                ))
                ->add('amount', 'integer', 
                    array('label' => false))  
                ->add('save', 'submit', 
                    array('label' => 'Speichern'));
  
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FoodBundle\Entity\Shoppinglist',
        ));
    }

    public function getName()
    {
        return 'shoppinglist';
    }
}
