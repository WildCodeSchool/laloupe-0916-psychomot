<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c786c7ce2fbfb0a88f9e7ea49a017f5fd7b739167e87c3b2268eae53ff7cdde6 extends Twig_Template
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
        $__internal_73e5ce2e03e63a590f12061950e91a31c2a872b0459458c1289e7ba8a78a805e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e5ce2e03e63a590f12061950e91a31c2a872b0459458c1289e7ba8a78a805e->enter($__internal_73e5ce2e03e63a590f12061950e91a31c2a872b0459458c1289e7ba8a78a805e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_73e5ce2e03e63a590f12061950e91a31c2a872b0459458c1289e7ba8a78a805e->leave($__internal_73e5ce2e03e63a590f12061950e91a31c2a872b0459458c1289e7ba8a78a805e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
