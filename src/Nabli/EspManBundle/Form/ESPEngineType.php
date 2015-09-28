<?php

namespace Nabli\EspManBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ESPEngineType extends AbstractType
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
            ->add('processId')
            ->add('status')
            ->add('sysmsg')
            ->add('lastModification')
            ->add('startDttm')
            ->add('modifiedByUser')
            ->add('startedByUser')
            ->add('checkSum')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nabli\EspManBundle\Entity\ESPEngine'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nabli_espmanbundle_espengine';
    }
}
