<?php

/* forms/fields/pages/pages.html.twig */
class __TwigTemplate_5abdc78de63c91edb9e62e120b773a47fb856cd6cb2e91d2b9d1275da4442009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/pages/pages.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 47
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 48
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array())) : (array()))), "html_attr");
        echo "\"
    data-grav-field=\"select\"
    data-grav-disabled=\"";
        // line 50
        echo (((null === (isset($context["originalValue"]) ? $context["originalValue"] : null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
";
    }

    // line 54
    public function block_input($context, array $blocks = array())
    {
        // line 55
        echo "
    <div class=\"form-select-wrapper ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array()), "html", null, true);
        echo "\">
        <select class=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? ("[]") : (""))), "html", null, true);
        echo "\"
                ";
        // line 58
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 59
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 60
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 61
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 62
        echo "                ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 63
        echo "                >
        ";
        // line 64
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "start_route", array())) {
            // line 65
            echo "            ";
            $context["field"] = twig_array_merge((isset($context["field"]) ? $context["field"] : null), array("show_root" => false));
            // line 66
            echo "            ";
            echo $this->getAttribute($this, "options", array(0 => $context, 1 => $this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "start_route", array())), "method"), 2 => 0), "method");
            echo "
        ";
        } else {
            // line 68
            echo "            ";
            echo $this->getAttribute($this, "options", array(0 => $context, 1 => (isset($context["pages"]) ? $context["pages"] : null), 2 => 0), "method");
            echo "
        ";
        }
        // line 70
        echo "        </select>
    </div>
";
    }

    // line 3
    public function getoptions($__globals__ = null, $__pages__ = null, $__depth__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "globals" => $__globals__,
            "pages" => $__pages__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "
    ";
            // line 5
            $context["field"] = $this->getAttribute((isset($context["globals"]) ? $context["globals"] : null), "field", array());
            // line 6
            echo "    ";
            $context["value"] = $this->getAttribute((isset($context["globals"]) ? $context["globals"] : null), "value", array());
            // line 7
            echo "    ";
            $context["current_page"] = $this->getAttribute($this->getAttribute((isset($context["globals"]) ? $context["globals"] : null), "admin", array()), "page", array());
            // line 8
            echo "
    ";
            // line 9
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()) && ((isset($context["depth"]) ? $context["depth"] : null) == 0))) {
                // line 10
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 11
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html_attr");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["value"]), "html", null, true);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "    ";
            }
            // line 14
            echo "
    ";
            // line 15
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "show_root", array()) && ((isset($context["depth"]) ? $context["depth"] : null) == 0))) {
                // line 16
                echo "        <option value=\"/\">/ (Root)</option>
        ";
                // line 17
                $context["depth"] = ((isset($context["depth"]) ? $context["depth"] : null) + 1);
                // line 18
                echo "    ";
            }
            // line 19
            echo "
    ";
            // line 20
            $context["indent"] = ((((isset($context["depth"]) ? $context["depth"] : null) == 0)) ? ("") : (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&mdash;-", (isset($context["depth"]) ? $context["depth"] : null)) . "&rtrif; ")));
            // line 21
            echo "
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 23
                echo "        ";
                if (($this->getAttribute($context["page"], "routable", array(), "method") || $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "show_all", array()))) {
                    // line 24
                    echo "            ";
                    if ( !(($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "show_self", array()) === false) && ($this->getAttribute($context["page"], "rawRoute", array(), "method") == $this->getAttribute((isset($context["current_page"]) ? $context["current_page"] : null), "rawRoute", array(), "method")))) {
                        // line 25
                        echo "                <option ";
                        if ((($this->getAttribute($context["page"], "route", array()) == (isset($context["value"]) ? $context["value"] : null)) || ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array()) && twig_in_filter($this->getAttribute($context["page"], "route", array()), (isset($context["value"]) ? $context["value"] : null))))) {
                            echo "selected=\"selected\"";
                        }
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "route", array()), "html", null, true);
                        echo "\">
                    ";
                        // line 26
                        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "show_fullpath", array())) {
                            // line 27
                            echo "                        ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "route", array()), "html", null, true);
                            echo "
                    ";
                        } else {
                            // line 29
                            echo "                        ";
                            echo (isset($context["indent"]) ? $context["indent"] : null);
                            echo "
                        ";
                            // line 30
                            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "show_slug", array())) {
                                // line 31
                                echo "                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "slug", array()), "html", null, true);
                                echo "
                        ";
                            } else {
                                // line 33
                                echo "                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", array()), "html", null, true);
                                echo "
                        ";
                            }
                            // line 35
                            echo "                    ";
                        }
                        // line 36
                        echo "                </option>
            ";
                    }
                    // line 38
                    echo "        ";
                }
                // line 39
                echo "        ";
                if (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "limit_levels", array(), "any", true, true) || (((isset($context["depth"]) ? $context["depth"] : null) + 1) < $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "limit_levels", array())))) {
                    // line 40
                    echo "            ";
                    if (((twig_length_filter($this->env, $this->getAttribute($context["page"], "children", array())) > 0) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "show_modular", array()) ||  !$this->getAttribute($context["page"], "modular", array(), "method")))) {
                        // line 41
                        echo "                ";
                        echo $this->getAttribute($this, "options", array(0 => (isset($context["globals"]) ? $context["globals"] : null), 1 => $context["page"], 2 => ((isset($context["depth"]) ? $context["depth"] : null) + 1)), "method");
                        echo "
            ";
                    }
                    // line 43
                    echo "        ";
                }
                // line 44
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/pages/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 44,  252 => 43,  246 => 41,  243 => 40,  240 => 39,  237 => 38,  233 => 36,  230 => 35,  224 => 33,  218 => 31,  216 => 30,  211 => 29,  205 => 27,  203 => 26,  194 => 25,  191 => 24,  188 => 23,  184 => 22,  181 => 21,  179 => 20,  176 => 19,  173 => 18,  171 => 17,  168 => 16,  166 => 15,  163 => 14,  160 => 13,  149 => 11,  144 => 10,  142 => 9,  139 => 8,  136 => 7,  133 => 6,  131 => 5,  128 => 4,  114 => 3,  108 => 70,  102 => 68,  96 => 66,  93 => 65,  91 => 64,  88 => 63,  83 => 62,  78 => 61,  73 => 60,  68 => 59,  64 => 58,  58 => 57,  54 => 56,  51 => 55,  48 => 54,  42 => 51,  38 => 50,  32 => 48,  29 => 47,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% macro options(globals, pages, depth) %}

    {% set field = globals.field %}
    {% set value = globals.value %}
    {% set current_page = globals.admin.page %}

    {% if field.options and depth == 0 %}
        {% for key, value in field.options %}
            <option value=\"{{ key|e('html_attr') }}\">{{ value|t }}</option>
        {% endfor %}
    {% endif %}

    {% if field.show_root and depth == 0 %}
        <option value=\"/\">/ (Root)</option>
        {% set depth = depth +1 %}
    {% endif %}

    {% set indent = depth == 0 ? '' : repeat('&mdash;-', depth) ~ '&rtrif; ' %}

    {% for page in pages.children %}
        {% if page.routable() or field.show_all %}
            {% if not (field.show_self is same as(false) and page.rawRoute() == current_page.rawRoute()) %}
                <option {% if page.route == value or (field.multiple and page.route in value) %}selected=\"selected\"{% endif %} value=\"{{ page.route }}\">
                    {% if field.show_fullpath %}
                        {{ page.route }}
                    {% else %}
                        {{indent|raw}}
                        {% if field.show_slug %}
                            {{ page.slug }}
                        {% else %}
                            {{ page.menu }}
                        {% endif %}
                    {% endif %}
                </option>
            {% endif %}
        {% endif %}
        {% if field.limit_levels is not defined or (depth+1 < field.limit_levels) %}
            {% if page.children|length > 0 and (field.show_modular or not page.modular()) %}
                {{ _self.options(globals, page, depth + 1) }}
            {% endif %}
        {% endif %}
    {% endfor %}
{% endmacro %}

{% block global_attributes %}
    data-grav-selectize=\"{{ (field.selectize is defined ? field.selectize : {})|json_encode|e('html_attr') }}\"
    data-grav-field=\"select\"
    data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
    data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
{% endblock %}

{% block input %}

    <div class=\"form-select-wrapper {{ field.size }}\">
        <select class=\"{{ field.classes }}\" name=\"{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}\"
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                {% if field.multiple in ['on', 'true', 1] %}multiple=\"multiple\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                >
        {% if field.start_route %}
            {% set field = field|merge({show_root: false}) %}
            {{ _self.options(_context, pages.find(field.start_route), 0) }}
        {% else %}
            {{ _self.options(_context, pages, 0) }}
        {% endif %}
        </select>
    </div>
{% endblock %}

", "forms/fields/pages/pages.html.twig", "/Users/emil/Documents/code/ratello-landing/user/plugins/admin/themes/grav/templates/forms/fields/pages/pages.html.twig");
    }
}
