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
        $__internal_3df5681fd2825f3c9d37bdeb7fde24b51c2ed823dbc2b3bd5b06cdacf3852e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df5681fd2825f3c9d37bdeb7fde24b51c2ed823dbc2b3bd5b06cdacf3852e70->enter($__internal_3df5681fd2825f3c9d37bdeb7fde24b51c2ed823dbc2b3bd5b06cdacf3852e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3df5681fd2825f3c9d37bdeb7fde24b51c2ed823dbc2b3bd5b06cdacf3852e70->leave($__internal_3df5681fd2825f3c9d37bdeb7fde24b51c2ed823dbc2b3bd5b06cdacf3852e70_prof);

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
