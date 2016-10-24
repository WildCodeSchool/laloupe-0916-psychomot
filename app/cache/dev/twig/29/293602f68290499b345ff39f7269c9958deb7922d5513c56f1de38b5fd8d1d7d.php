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
        $__internal_007e0cebbebbbf45a146f74db3726b833552e0904d6a24b9a6b90f8c0440fad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007e0cebbebbbf45a146f74db3726b833552e0904d6a24b9a6b90f8c0440fad3->enter($__internal_007e0cebbebbbf45a146f74db3726b833552e0904d6a24b9a6b90f8c0440fad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_007e0cebbebbbf45a146f74db3726b833552e0904d6a24b9a6b90f8c0440fad3->leave($__internal_007e0cebbebbbf45a146f74db3726b833552e0904d6a24b9a6b90f8c0440fad3_prof);

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
