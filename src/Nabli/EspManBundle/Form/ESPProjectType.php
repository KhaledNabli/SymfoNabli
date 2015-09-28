<?php

namespace Nabli\EspManBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ESPProjectType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('lastModification')
            ->add('modifiedByUser')
            ->add('createdByUser')
            ->add('createdAt')
            ->add('checkSum')
            ->add('engine')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nabli\EspManBundle\Entity\ESPProject'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nabli_espmanbundle_espproject';
    }
}
