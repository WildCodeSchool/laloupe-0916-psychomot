<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_f007d5b977e54323d335841ee9e365c91c92030965638df87aa06d7543805f88 extends Twig_Template
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
        $__internal_0036ab3b3670eab479c699694f91d77fc57579e93ee285c606c720afa2ef81e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0036ab3b3670eab479c699694f91d77fc57579e93ee285c606c720afa2ef81e2->enter($__internal_0036ab3b3670eab479c699694f91d77fc57579e93ee285c606c720afa2ef81e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));
=======
        $__internal_edae65651e99543078d830f288431b80f76160d1dc7a5bb0d66284123afa6aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edae65651e99543078d830f288431b80f76160d1dc7a5bb0d66284123afa6aaf->enter($__internal_edae65651e99543078d830f288431b80f76160d1dc7a5bb0d66284123afa6aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));
>>>>>>> flo

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$read_only): ?> readonly=\"readonly\"<?php endif ?>
<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('readonly' === \$k && \$read_only): continue; endif ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
<<<<<<< HEAD
        $__internal_0036ab3b3670eab479c699694f91d77fc57579e93ee285c606c720afa2ef81e2->leave($__internal_0036ab3b3670eab479c699694f91d77fc57579e93ee285c606c720afa2ef81e2_prof);
=======
        $__internal_edae65651e99543078d830f288431b80f76160d1dc7a5bb0d66284123afa6aaf->leave($__internal_edae65651e99543078d830f288431b80f76160d1dc7a5bb0d66284123afa6aaf_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$read_only): ?> readonly=\"readonly\"<?php endif ?>
<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('readonly' === \$k && \$read_only): continue; endif ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
    }
}
