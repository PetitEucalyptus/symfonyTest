<?php

/* PetraeFichierPlanteBundle:Default:voir.html.twig */
class __TwigTemplate_5d71eaa95ec04119a43e7d180d9f34b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PetraeFichierPlanteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "    Fiche: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "NomLatin"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"/css/modifier_plante.css\" type=\"text/css\"/>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <h2> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "NomLatin"), "html", null, true);
        echo "  <a class=\"btn btn-primary modifier\"
                                   href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("petrae_fichier_plante_modifier", array("id" => $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "id"))), "html", null, true);
        echo "\">
        Modifier</a></h2>
    <ul>
        <li>
            <b>Nom Français:</b> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "NomFrancais"), "html", null, true);
        echo "
        </li>
        <li>
            <b>Description:</b> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "Description"), "html", null, true);
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "PetraeFichierPlanteBundle:Default:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  66 => 17,  59 => 13,  54 => 12,  51 => 11,  43 => 7,  40 => 6,  33 => 4,  30 => 3,);
    }
}
