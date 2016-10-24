<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f8e5c3e440eab87d2e771c96ddf62f089a8c8c1b0ecf88945daaf623e06551be extends Twig_Template
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
        $__internal_01bc84d1533af49faaed236a4b7b93e92ed0f6b3b3f7b89561c0da3dbde55f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bc84d1533af49faaed236a4b7b93e92ed0f6b3b3f7b89561c0da3dbde55f2c->enter($__internal_01bc84d1533af49faaed236a4b7b93e92ed0f6b3b3f7b89561c0da3dbde55f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_01bc84d1533af49faaed236a4b7b93e92ed0f6b3b3f7b89561c0da3dbde55f2c->leave($__internal_01bc84d1533af49faaed236a4b7b93e92ed0f6b3b3f7b89561c0da3dbde55f2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
