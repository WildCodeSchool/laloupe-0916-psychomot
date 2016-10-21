<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_7a93f070518eb79300e9530320ad1731680e73caefed879df935c5189ca6db51 extends Twig_Template
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
        $__internal_9fcfce36f775756398a16e198f34003457a2d5eb646859cff316679e6b0e0c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcfce36f775756398a16e198f34003457a2d5eb646859cff316679e6b0e0c1e->enter($__internal_9fcfce36f775756398a16e198f34003457a2d5eb646859cff316679e6b0e0c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_9fcfce36f775756398a16e198f34003457a2d5eb646859cff316679e6b0e0c1e->leave($__internal_9fcfce36f775756398a16e198f34003457a2d5eb646859cff316679e6b0e0c1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
