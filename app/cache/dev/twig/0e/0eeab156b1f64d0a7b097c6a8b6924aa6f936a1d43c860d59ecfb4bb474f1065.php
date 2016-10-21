<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e693bcd933db9f7d85890583d958f35c7481ba4cd98faa8376040fbe3d14ed64 extends Twig_Template
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
        $__internal_f6f2bc2a6788679bc154add57777ba3b91e08a35c48c43d740bc35a69898760e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f2bc2a6788679bc154add57777ba3b91e08a35c48c43d740bc35a69898760e->enter($__internal_f6f2bc2a6788679bc154add57777ba3b91e08a35c48c43d740bc35a69898760e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f6f2bc2a6788679bc154add57777ba3b91e08a35c48c43d740bc35a69898760e->leave($__internal_f6f2bc2a6788679bc154add57777ba3b91e08a35c48c43d740bc35a69898760e_prof);

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
