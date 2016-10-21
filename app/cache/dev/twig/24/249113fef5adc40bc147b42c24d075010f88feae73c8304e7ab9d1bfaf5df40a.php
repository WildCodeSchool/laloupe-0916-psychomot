<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b19011d7e9f50714950b747737d0da34882a5d55203146eea6e59723953c8f2d extends Twig_Template
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
        $__internal_d5427a8529f82d1f55bcc2eaf65c291601a78d88aded54839f644b2d114fdaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5427a8529f82d1f55bcc2eaf65c291601a78d88aded54839f644b2d114fdaae->enter($__internal_d5427a8529f82d1f55bcc2eaf65c291601a78d88aded54839f644b2d114fdaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d5427a8529f82d1f55bcc2eaf65c291601a78d88aded54839f644b2d114fdaae->leave($__internal_d5427a8529f82d1f55bcc2eaf65c291601a78d88aded54839f644b2d114fdaae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
