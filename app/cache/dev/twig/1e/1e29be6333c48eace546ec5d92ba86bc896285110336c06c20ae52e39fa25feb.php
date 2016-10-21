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
        $__internal_0ab4970513bbfb5c23fc9d99c37ee921b9589700adb631fe2402a1e1e60332bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab4970513bbfb5c23fc9d99c37ee921b9589700adb631fe2402a1e1e60332bf->enter($__internal_0ab4970513bbfb5c23fc9d99c37ee921b9589700adb631fe2402a1e1e60332bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0ab4970513bbfb5c23fc9d99c37ee921b9589700adb631fe2402a1e1e60332bf->leave($__internal_0ab4970513bbfb5c23fc9d99c37ee921b9589700adb631fe2402a1e1e60332bf_prof);

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
