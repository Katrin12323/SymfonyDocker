<?php

/* @WebProfiler/Icon/memory.svg */
class __TwigTemplate_1a302ca3aa707cdb4184bde5d08960eaecefa41c03dcb1a90a5a4b855f70940c extends Twig_Template
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
        $__internal_0cfbec4e58089bea8841ecee69d1a2ba841e4a0e7256b5fe3c8b0ce6077055d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfbec4e58089bea8841ecee69d1a2ba841e4a0e7256b5fe3c8b0ce6077055d7->enter($__internal_0cfbec4e58089bea8841ecee69d1a2ba841e4a0e7256b5fe3c8b0ce6077055d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/memory.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M6,18.9V15h12v3.9c0,0.7-0.2,1.1-1,1.1H7C6.2,20,6,19.6,6,18.9z M20,1C20,1,20,1,20,1c-0.6,0-1,0.5-1,1.1
    l0,18c0,0.5-0.4,0.9-0.9,0.9H5.9C5.4,21,5,20.6,5,20.1l0-18C5,1.5,4.6,1,4,1c0,0,0,0,0,0C3.5,1,3,1.5,3,2.1l0,18
    C3,21.7,4.3,23,5.9,23h12.2c1.6,0,2.9-1.3,2.9-2.9l0-18C21,1.5,20.6,1,20,1z M18,9H6v5h12V9z\"/>
</svg>
";
        
        $__internal_0cfbec4e58089bea8841ecee69d1a2ba841e4a0e7256b5fe3c8b0ce6077055d7->leave($__internal_0cfbec4e58089bea8841ecee69d1a2ba841e4a0e7256b5fe3c8b0ce6077055d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/memory.svg";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M6,18.9V15h12v3.9c0,0.7-0.2,1.1-1,1.1H7C6.2,20,6,19.6,6,18.9z M20,1C20,1,20,1,20,1c-0.6,0-1,0.5-1,1.1
    l0,18c0,0.5-0.4,0.9-0.9,0.9H5.9C5.4,21,5,20.6,5,20.1l0-18C5,1.5,4.6,1,4,1c0,0,0,0,0,0C3.5,1,3,1.5,3,2.1l0,18
    C3,21.7,4.3,23,5.9,23h12.2c1.6,0,2.9-1.3,2.9-2.9l0-18C21,1.5,20.6,1,20,1z M18,9H6v5h12V9z\"/>
</svg>
", "@WebProfiler/Icon/memory.svg", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Icon/memory.svg");
    }
}
