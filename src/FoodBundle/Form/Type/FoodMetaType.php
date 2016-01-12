<?php

namespace FoodBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FoodMetaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('foodMain', 'entity', array(
                    'class' => 'FoodBundle:Food',
                    'choice_label' => 'foodName',
                ))
                ->add('purchaseDate', 'date', 
                    array('label' => false))
                ->add('expireDate', 'date', 
                    array('label' => false))
                ->add('amount', 'integer', 
                    array('label' => false))  
                ->add('abgang', 'integer', 
                    array('label' => false))   
                ->add('price', 'text', 
                    array('label' => false)) 
                ->add('save', 'submit', 
                    array('label' => 'Speichern'));
  
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FoodBundle\Entity\FoodMeta',
        ));
    }

    public function getName()
    {
        return 'foodMeta';
    }
}
