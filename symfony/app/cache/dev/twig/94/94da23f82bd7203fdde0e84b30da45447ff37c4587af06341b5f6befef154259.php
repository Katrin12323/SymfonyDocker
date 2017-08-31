<?php

/* base.html.twig */
class __TwigTemplate_8bc9d1e335e01b3618fe68a977c19bb508bc89754d82cfe8b0c71d8a0cd4fb56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_765b2393401aa10dbc4428425812374d0d3b08f47bfb8953e9e1268a4e9b389f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765b2393401aa10dbc4428425812374d0d3b08f47bfb8953e9e1268a4e9b389f->enter($__internal_765b2393401aa10dbc4428425812374d0d3b08f47bfb8953e9e1268a4e9b389f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_765b2393401aa10dbc4428425812374d0d3b08f47bfb8953e9e1268a4e9b389f->leave($__internal_765b2393401aa10dbc4428425812374d0d3b08f47bfb8953e9e1268a4e9b389f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cdb03105335092e2e35ddc43b521eab4c7acc5dde0f19ba343ec22cde7f4886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdb03105335092e2e35ddc43b521eab4c7acc5dde0f19ba343ec22cde7f4886->enter($__internal_6cdb03105335092e2e35ddc43b521eab4c7acc5dde0f19ba343ec22cde7f4886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6cdb03105335092e2e35ddc43b521eab4c7acc5dde0f19ba343ec22cde7f4886->leave($__internal_6cdb03105335092e2e35ddc43b521eab4c7acc5dde0f19ba343ec22cde7f4886_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd5f2458af42268f2844142198e2ade69123b5821d7a4affbda5bf2752d057fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5f2458af42268f2844142198e2ade69123b5821d7a4affbda5bf2752d057fb->enter($__internal_fd5f2458af42268f2844142198e2ade69123b5821d7a4affbda5bf2752d057fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fd5f2458af42268f2844142198e2ade69123b5821d7a4affbda5bf2752d057fb->leave($__internal_fd5f2458af42268f2844142198e2ade69123b5821d7a4affbda5bf2752d057fb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d7ba7d77ce399f31af1df2b90bea961c45ad3c36901ffaf154ce02fb620253b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7ba7d77ce399f31af1df2b90bea961c45ad3c36901ffaf154ce02fb620253b->enter($__internal_1d7ba7d77ce399f31af1df2b90bea961c45ad3c36901ffaf154ce02fb620253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d7ba7d77ce399f31af1df2b90bea961c45ad3c36901ffaf154ce02fb620253b->leave($__internal_1d7ba7d77ce399f31af1df2b90bea961c45ad3c36901ffaf154ce02fb620253b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9a6b8fe40716ad9e0c170771c3abc9262d893b36123d6bdee989521ea7b0f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a6b8fe40716ad9e0c170771c3abc9262d893b36123d6bdee989521ea7b0f0e->enter($__internal_a9a6b8fe40716ad9e0c170771c3abc9262d893b36123d6bdee989521ea7b0f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a9a6b8fe40716ad9e0c170771c3abc9262d893b36123d6bdee989521ea7b0f0e->leave($__internal_a9a6b8fe40716ad9e0c170771c3abc9262d893b36123d6bdee989521ea7b0f0e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/app/Resources/views/base.html.twig");
    }
}
