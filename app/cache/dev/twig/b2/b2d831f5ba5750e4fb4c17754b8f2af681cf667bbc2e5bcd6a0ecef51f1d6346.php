<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_0a396e70e66dd8386f1659bfaa9c08cf38885f118da49011c614033c3bead4cc extends Twig_Template
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
<<<<<<< HEAD
        $__internal_b902bcbe8fe8ccfef0e5abfda879f75bb16c4b782cd41cbe9147d74e14b10822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b902bcbe8fe8ccfef0e5abfda879f75bb16c4b782cd41cbe9147d74e14b10822->enter($__internal_b902bcbe8fe8ccfef0e5abfda879f75bb16c4b782cd41cbe9147d74e14b10822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));
=======
        $__internal_ad7c85eda27547f029024d86a4520424c7b311d220d245a177969b5f3fcfc323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7c85eda27547f029024d86a4520424c7b311d220d245a177969b5f3fcfc323->enter($__internal_ad7c85eda27547f029024d86a4520424c7b311d220d245a177969b5f3fcfc323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));
>>>>>>> flo

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$v, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
<<<<<<< HEAD
        $__internal_b902bcbe8fe8ccfef0e5abfda879f75bb16c4b782cd41cbe9147d74e14b10822->leave($__internal_b902bcbe8fe8ccfef0e5abfda879f75bb16c4b782cd41cbe9147d74e14b10822_prof);
=======
        $__internal_ad7c85eda27547f029024d86a4520424c7b311d220d245a177969b5f3fcfc323->leave($__internal_ad7c85eda27547f029024d86a4520424c7b311d220d245a177969b5f3fcfc323_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$v, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
    }
}
