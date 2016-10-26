<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_780c8018814dd5bfdabd9d3ffccf215057c82c1a0d20a608b943bc7eb029cba2 extends Twig_Template
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
        $__internal_92d87da98e68fdd8f979950290c10d240556c68457da8827482e224e64369bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d87da98e68fdd8f979950290c10d240556c68457da8827482e224e64369bcf->enter($__internal_92d87da98e68fdd8f979950290c10d240556c68457da8827482e224e64369bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_92d87da98e68fdd8f979950290c10d240556c68457da8827482e224e64369bcf->leave($__internal_92d87da98e68fdd8f979950290c10d240556c68457da8827482e224e64369bcf_prof);

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
