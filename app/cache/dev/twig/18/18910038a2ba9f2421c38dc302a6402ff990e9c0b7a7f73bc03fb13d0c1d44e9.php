<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9bbc5c246e4fd4d3b24c6adadfd3e7a7aa61496a41dc455ab64946781d065843 extends Twig_Template
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
        $__internal_0dc669bd726e8f36a332911ddd2923257f1fe0c17e937ed1532bf48cb2d6a8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc669bd726e8f36a332911ddd2923257f1fe0c17e937ed1532bf48cb2d6a8c8->enter($__internal_0dc669bd726e8f36a332911ddd2923257f1fe0c17e937ed1532bf48cb2d6a8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0dc669bd726e8f36a332911ddd2923257f1fe0c17e937ed1532bf48cb2d6a8c8->leave($__internal_0dc669bd726e8f36a332911ddd2923257f1fe0c17e937ed1532bf48cb2d6a8c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
