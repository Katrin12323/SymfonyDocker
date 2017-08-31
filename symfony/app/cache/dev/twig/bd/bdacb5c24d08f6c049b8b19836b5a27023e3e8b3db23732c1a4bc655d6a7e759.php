<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_db56de4ef2c44c04391ad8189bf010ecce25dcdad682dfa23637140a6d83f090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c27aafda9099b97e208169424f8b6df35d9ddb0a2387c7e092cb60419f1ab874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27aafda9099b97e208169424f8b6df35d9ddb0a2387c7e092cb60419f1ab874->enter($__internal_c27aafda9099b97e208169424f8b6df35d9ddb0a2387c7e092cb60419f1ab874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c27aafda9099b97e208169424f8b6df35d9ddb0a2387c7e092cb60419f1ab874->leave($__internal_c27aafda9099b97e208169424f8b6df35d9ddb0a2387c7e092cb60419f1ab874_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_773954814df6abf8abb9b34597f4f850c4f91ba4285a2b25835536c34edc2022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773954814df6abf8abb9b34597f4f850c4f91ba4285a2b25835536c34edc2022->enter($__internal_773954814df6abf8abb9b34597f4f850c4f91ba4285a2b25835536c34edc2022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_773954814df6abf8abb9b34597f4f850c4f91ba4285a2b25835536c34edc2022->leave($__internal_773954814df6abf8abb9b34597f4f850c4f91ba4285a2b25835536c34edc2022_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b57df841cdab9e6ef4b04c7e7d261a7d08ee80c9ae307a03be06123bcf72bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b57df841cdab9e6ef4b04c7e7d261a7d08ee80c9ae307a03be06123bcf72bb7->enter($__internal_2b57df841cdab9e6ef4b04c7e7d261a7d08ee80c9ae307a03be06123bcf72bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b57df841cdab9e6ef4b04c7e7d261a7d08ee80c9ae307a03be06123bcf72bb7->leave($__internal_2b57df841cdab9e6ef4b04c7e7d261a7d08ee80c9ae307a03be06123bcf72bb7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a11e04477f65d8515d35eab765ec935b05c74720cea5f1bc261b0b2b673bae42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11e04477f65d8515d35eab765ec935b05c74720cea5f1bc261b0b2b673bae42->enter($__internal_a11e04477f65d8515d35eab765ec935b05c74720cea5f1bc261b0b2b673bae42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a11e04477f65d8515d35eab765ec935b05c74720cea5f1bc261b0b2b673bae42->leave($__internal_a11e04477f65d8515d35eab765ec935b05c74720cea5f1bc261b0b2b673bae42_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
