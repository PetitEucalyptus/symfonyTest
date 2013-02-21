<?php

namespace Petrae\FichierPlanteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Petrae\FichierPlanteBundle\Form;

class PlanteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('NomLatin')
            ->add('NomFrancais')
            ->add('Description')
            ->add('Image')
        ;
        $builder->add('categorie', new CategorieType());
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Petrae\FichierPlanteBundle\Entity\Plante',
                'cascade_validation' => true,
        ));
    }

    public function getName()
    {
        return 'PlanteType';
    }
}
