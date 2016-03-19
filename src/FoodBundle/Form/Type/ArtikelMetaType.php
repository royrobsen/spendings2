<?php

namespace FoodBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArtikelMetaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('artikel', 'entity', array(
                    'class' => 'FoodBundle:Artikel',
                    'choice_label' => 'artikelName',
                ))
                ->add('purchaseDate', 'date', [
                        'widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ]
                    ])
                ->add('expireDate', 'date', [
                        'widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ]
                    ])
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
