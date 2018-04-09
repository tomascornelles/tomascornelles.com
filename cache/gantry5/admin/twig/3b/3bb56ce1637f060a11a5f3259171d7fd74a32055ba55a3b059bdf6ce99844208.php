<?php

/* forms/fields/input/hidden.html.twig */
class __TwigTemplate_97938ddf6a334324921d0fb9490bd7f5e242418893f995eadd4a05c150428446 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'overridable' => array($this, 'block_overridable'),
            'label' => array($this, 'block_label'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["default"]) ? $context["default"] : null)) ? ("partials/field.html.twig") : ((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"))), "forms/fields/input/hidden.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_overridable($context, array $blocks = array())
    {
    }

    // line 8
    public function block_label($context, array $blocks = array())
    {
    }

    // line 11
    public function block_input($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "array", array())) {
            // line 13
            echo "        ";
            $context["name"] = ((isset($context["name"]) ? $context["name"] : null) . "._json");
            // line 14
            echo "        ";
            $context["value"] = twig_jsonencode_filter(((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), array())) : (array())));
            // line 15
            echo "        ";
        } else {
            // line 16
            echo "        ";
            $context["value"] = twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", ");
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    <input
        ";
        // line 21
        echo "        type=\"hidden\"
        name=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\"
        value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"
        ";
        // line 25
        echo "        ";
        $this->displayBlock("global_attributes", $context, $blocks);
        echo "
    />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/input/hidden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  71 => 23,  67 => 22,  64 => 21,  60 => 18,  57 => 17,  54 => 16,  51 => 15,  48 => 14,  45 => 13,  42 => 12,  39 => 11,  34 => 8,  29 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/input/hidden.html.twig", "C:\\wamp64\\www\\tc-grav\\user\\plugins\\gantry5\\admin\\templates\\forms\\fields\\input\\hidden.html.twig");
    }
}
