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
        $__internal_f4be6e445f9b5038c3ef0a958d2f53143715b7b7811fa6ca666185cb63372bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4be6e445f9b5038c3ef0a958d2f53143715b7b7811fa6ca666185cb63372bd6->enter($__internal_f4be6e445f9b5038c3ef0a958d2f53143715b7b7811fa6ca666185cb63372bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f4be6e445f9b5038c3ef0a958d2f53143715b7b7811fa6ca666185cb63372bd6->leave($__internal_f4be6e445f9b5038c3ef0a958d2f53143715b7b7811fa6ca666185cb63372bd6_prof);

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
