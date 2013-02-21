<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Petit
 * Date: 17/02/13
 * Time: 16:03
 * To change this template use File | Settings | File Templates.
 */

namespace Petrae\FichierPlanteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class PlanteType extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('NomLatin');
        $builder->add('NomFrancais');
        $builder->add('Description');
        $builder->add('categorie', new \CategorieType());
    }

    public function getName()
    {
        return 'plante';
    }
}
