<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b103be5d0f572a5713ce027cbc009d0e56941549bc0e630baabfa3bbb41e14c1 extends Twig_Template
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
        $__internal_719cf442e85d28a0ffa5a4d97d9fb08bb14c89b7ad053db7a499186e69e98ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719cf442e85d28a0ffa5a4d97d9fb08bb14c89b7ad053db7a499186e69e98ad7->enter($__internal_719cf442e85d28a0ffa5a4d97d9fb08bb14c89b7ad053db7a499186e69e98ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_719cf442e85d28a0ffa5a4d97d9fb08bb14c89b7ad053db7a499186e69e98ad7->leave($__internal_719cf442e85d28a0ffa5a4d97d9fb08bb14c89b7ad053db7a499186e69e98ad7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
