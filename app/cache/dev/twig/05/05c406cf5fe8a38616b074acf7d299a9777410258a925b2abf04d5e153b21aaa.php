<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7c074031bf63265d4b97c1a3beccc5f4c27330e544a8ea99d71d6c8241296d23 extends Twig_Template
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
        $__internal_44bd25f1e81b50e533f8a66d1b56f70eb2fab55348b04d6e53c4d2ec7cd192c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bd25f1e81b50e533f8a66d1b56f70eb2fab55348b04d6e53c4d2ec7cd192c8->enter($__internal_44bd25f1e81b50e533f8a66d1b56f70eb2fab55348b04d6e53c4d2ec7cd192c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_44bd25f1e81b50e533f8a66d1b56f70eb2fab55348b04d6e53c4d2ec7cd192c8->leave($__internal_44bd25f1e81b50e533f8a66d1b56f70eb2fab55348b04d6e53c4d2ec7cd192c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
