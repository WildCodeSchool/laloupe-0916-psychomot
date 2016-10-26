<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_73a6abbe8f1874e572e07ff4a94ec4b47eb90c0df70258919e01cd33babd71eb extends Twig_Template
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
        $__internal_6994dfe75bd4a2331a6f5c869809757ab71c3ca43c13a1ecd20bfedc46c3a018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6994dfe75bd4a2331a6f5c869809757ab71c3ca43c13a1ecd20bfedc46c3a018->enter($__internal_6994dfe75bd4a2331a6f5c869809757ab71c3ca43c13a1ecd20bfedc46c3a018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6994dfe75bd4a2331a6f5c869809757ab71c3ca43c13a1ecd20bfedc46c3a018->leave($__internal_6994dfe75bd4a2331a6f5c869809757ab71c3ca43c13a1ecd20bfedc46c3a018_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
    }
}
