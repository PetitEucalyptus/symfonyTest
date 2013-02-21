<?php

/* PetraeFichierPlanteBundle:Plante:show.html.twig */
class __TwigTemplate_364f9e9b321d1ccb2f22e45933a6e1e9 extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    Fiche: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "NomLatin"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"/css/modifier_plante.css\" type=\"text/css\"/>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <h2> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "NomLatin"), "html", null, true);
        echo " </h2>
    <div>
        <a class=\"btn btn-primary modifier\"
           href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plante_edit", array("id" => $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "id"))), "html", null, true);
        echo "\">
            Modifier</a>

        <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plante_delete", array("id" => $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "id"))), "html", null, true);
        echo "\" method=\"Post\">
            <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger modifier\"
                   href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plante_delete", array("id" => $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "id"))), "html", null, true);
        echo " \"/>
        </form>
    </div>
    <ul>
        <li>
            <b>Nom Français:</b> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "NomFrancais"), "html", null, true);
        echo "
        </li>
        <li>
            <b>Description:</b> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plante"]) ? $context["plante"] : $this->getContext($context, "plante")), "Description"), "html", null, true);
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "PetraeFichierPlanteBundle:Plante:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  80 => 26,  72 => 21,  67 => 19,  61 => 16,  54 => 13,  51 => 12,  43 => 8,  40 => 7,  33 => 5,  30 => 4,);
    }
}
