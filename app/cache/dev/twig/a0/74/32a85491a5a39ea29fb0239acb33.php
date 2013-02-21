<?php

/* PetraeFichierPlanteBundle:Default:index.html.twig */
class __TwigTemplate_a07432a85491a5a39ea29fb0239acb33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PetraeFichierPlanteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PetraeFichierPlanteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Liste des plantes</h2>
 
  <ul>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plantes"]) ? $context["plantes"] : $this->getContext($context, "plantes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plante"]) {
            // line 13
            echo "     <li>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("petrae_fichier_plante_voir", array("id" => $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "NomLatin"), "html", null, true);
            echo "</a>
        ou ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "NomFrancais"), "html", null, true);
            echo ",
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "      <li>Pas (encore !) de plantes</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plante'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "  </ul>
 
";
    }

    public function getTemplateName()
    {
        return "PetraeFichierPlanteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  70 => 18,  62 => 15,  56 => 14,  53 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
