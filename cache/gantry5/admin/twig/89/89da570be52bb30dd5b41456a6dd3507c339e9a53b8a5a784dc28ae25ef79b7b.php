<?php

/* forms/fields/gantry/inherit.html.twig */
class __TwigTemplate_97fd9c59110212ff2d6bacb2816a1710179e67bb14733dc56268ec04768915af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"g-inherit";
        echo (((isset($context["inherit"]) ? $context["inherit"] : null)) ? ("") : (" hide"));
        echo "\">
    <div class=\"g-inherit-content\">
        ";
        // line 3
        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_INHERITING_FROM_X", (("<strong>" . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "outlines", array()), "name", array(0 => (isset($context["inherit"]) ? $context["inherit"] : null)), "method"))) . "</strong>"));
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "forms/fields/gantry/inherit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/gantry/inherit.html.twig", "C:\\wamp64\\www\\tc-grav\\user\\plugins\\gantry5\\admin\\templates\\forms\\fields\\gantry\\inherit.html.twig");
    }
}
