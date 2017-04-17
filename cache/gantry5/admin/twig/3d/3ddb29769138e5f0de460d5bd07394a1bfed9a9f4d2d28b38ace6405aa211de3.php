<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_6db09f315d6eea18e83b118d67e585891e3f3aa04da1716b682587d6d5495860 extends Twig_Template
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
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_c3e69c6da6295d8328bef24ffca3c07aa7c13d416298e88092720cb3b68e7ce1 = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_e4c7c8cb8e300bdd22ac5e128f8e113f37940ca470c4bfb575d2b611c7341bec = "5.4") && ('' === $__internal_e4c7c8cb8e300bdd22ac5e128f8e113f37940ca470c4bfb575d2b611c7341bec || 0 === strpos($__internal_c3e69c6da6295d8328bef24ffca3c07aa7c13d416298e88092720cb3b68e7ce1, $__internal_e4c7c8cb8e300bdd22ac5e128f8e113f37940ca470c4bfb575d2b611c7341bec)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", (isset($context["php_version"]) ? $context["php_version"] : null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/Users/emil/Documents/code/ratello-landing/user/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
