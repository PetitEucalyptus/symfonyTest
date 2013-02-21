<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Petit
 * Date: 20/02/13
 * Time: 15:11
 * To change this template use File | Settings | File Templates.
 */

namespace Petrae\FichierPlanteBundle\Form;

use \Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;
use \Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategorieType extends AbstractType
{

    public function buildForm(FormBuilderInterface $buider, array $options)
    {
        $buider->add('name');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data-class' => 'Petrae\FichierPlanteBundle\Entity\Categorie',
            ));
    }

    public function getName()
    {
        return "categorie";
    }
}
