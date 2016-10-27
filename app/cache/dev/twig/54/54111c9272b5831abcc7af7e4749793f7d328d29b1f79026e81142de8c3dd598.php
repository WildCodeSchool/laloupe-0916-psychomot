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
<<<<<<< HEAD
        $__internal_8edfaffd82e766701bfc6c91a12d6563cf68e3322122df386a24cb2b7c3c512f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8edfaffd82e766701bfc6c91a12d6563cf68e3322122df386a24cb2b7c3c512f->enter($__internal_8edfaffd82e766701bfc6c91a12d6563cf68e3322122df386a24cb2b7c3c512f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));
=======
        $__internal_aa65c46e2905cbd206dbd62f5ad052e95fc45536b6145c22525a7d45a2c5a604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa65c46e2905cbd206dbd62f5ad052e95fc45536b6145c22525a7d45a2c5a604->enter($__internal_aa65c46e2905cbd206dbd62f5ad052e95fc45536b6145c22525a7d45a2c5a604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));
>>>>>>> flo

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
        
<<<<<<< HEAD
        $__internal_8edfaffd82e766701bfc6c91a12d6563cf68e3322122df386a24cb2b7c3c512f->leave($__internal_8edfaffd82e766701bfc6c91a12d6563cf68e3322122df386a24cb2b7c3c512f_prof);
=======
        $__internal_aa65c46e2905cbd206dbd62f5ad052e95fc45536b6145c22525a7d45a2c5a604->leave($__internal_aa65c46e2905cbd206dbd62f5ad052e95fc45536b6145c22525a7d45a2c5a604_prof);
>>>>>>> flo

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
