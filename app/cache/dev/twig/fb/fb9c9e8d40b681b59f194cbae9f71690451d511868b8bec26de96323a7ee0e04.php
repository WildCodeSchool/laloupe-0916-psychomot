<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_cf5848fc3d622d422e41f95a51c9352d281dca822daf66fd518fe0244cfc72ea extends Twig_Template
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
        $__internal_ac2f7d70f8015a41a0650675a696a5d682514358b9be1b325b073bc5d50a679b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2f7d70f8015a41a0650675a696a5d682514358b9be1b325b073bc5d50a679b->enter($__internal_ac2f7d70f8015a41a0650675a696a5d682514358b9be1b325b073bc5d50a679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ac2f7d70f8015a41a0650675a696a5d682514358b9be1b325b073bc5d50a679b->leave($__internal_ac2f7d70f8015a41a0650675a696a5d682514358b9be1b325b073bc5d50a679b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
