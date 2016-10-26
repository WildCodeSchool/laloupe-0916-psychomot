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
        $__internal_3a67c08a6bdf1f9ab2ccf448a9e2a1fc78d5ff7e367b11ab79e01c1ac4e4c5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a67c08a6bdf1f9ab2ccf448a9e2a1fc78d5ff7e367b11ab79e01c1ac4e4c5e1->enter($__internal_3a67c08a6bdf1f9ab2ccf448a9e2a1fc78d5ff7e367b11ab79e01c1ac4e4c5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3a67c08a6bdf1f9ab2ccf448a9e2a1fc78d5ff7e367b11ab79e01c1ac4e4c5e1->leave($__internal_3a67c08a6bdf1f9ab2ccf448a9e2a1fc78d5ff7e367b11ab79e01c1ac4e4c5e1_prof);

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
