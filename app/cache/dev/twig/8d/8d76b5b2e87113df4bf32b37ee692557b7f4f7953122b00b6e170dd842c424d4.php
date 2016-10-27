<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_47bad364f14961da823ddcc380a67bc8c0d2445c9959823d51de5499b693a497 extends Twig_Template
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
        $__internal_84c32e8e2d201268eee4f0919bdc521cfb140886fa03762dfd6036c4b3f08eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c32e8e2d201268eee4f0919bdc521cfb140886fa03762dfd6036c4b3f08eed->enter($__internal_84c32e8e2d201268eee4f0919bdc521cfb140886fa03762dfd6036c4b3f08eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_84c32e8e2d201268eee4f0919bdc521cfb140886fa03762dfd6036c4b3f08eed->leave($__internal_84c32e8e2d201268eee4f0919bdc521cfb140886fa03762dfd6036c4b3f08eed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
