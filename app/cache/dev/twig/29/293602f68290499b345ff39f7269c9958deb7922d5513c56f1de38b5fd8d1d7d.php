<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f3854fccc9cc7051135145fe9fb76749e304e7cde38fc4a020a45557ea635be8 extends Twig_Template
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
        $__internal_fa7141bbb68c3cc52562751a2c0a9232ac1ab9b2c675976be953f27de9553cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7141bbb68c3cc52562751a2c0a9232ac1ab9b2c675976be953f27de9553cee->enter($__internal_fa7141bbb68c3cc52562751a2c0a9232ac1ab9b2c675976be953f27de9553cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fa7141bbb68c3cc52562751a2c0a9232ac1ab9b2c675976be953f27de9553cee->leave($__internal_fa7141bbb68c3cc52562751a2c0a9232ac1ab9b2c675976be953f27de9553cee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
