<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5bd13f8d939813845f499dc19f0c19dbc5094bf921576e0b5be5da1937febbd9 extends Twig_Template
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
        $__internal_fa98f8e814066c6647b8955f58b11e8f31e50589d68f2058852b6594b20678f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa98f8e814066c6647b8955f58b11e8f31e50589d68f2058852b6594b20678f9->enter($__internal_fa98f8e814066c6647b8955f58b11e8f31e50589d68f2058852b6594b20678f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_fa98f8e814066c6647b8955f58b11e8f31e50589d68f2058852b6594b20678f9->leave($__internal_fa98f8e814066c6647b8955f58b11e8f31e50589d68f2058852b6594b20678f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
