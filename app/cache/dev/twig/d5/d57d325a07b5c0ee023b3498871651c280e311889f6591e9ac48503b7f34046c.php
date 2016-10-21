<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_61c1ab6cc8764a378df80b2e19651193556be534a466b7ebf482cd8990838cbe extends Twig_Template
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
        $__internal_be3bcbead6859bebd80302129aa367aa9d95ebdfe8f363800ab90d861b425662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3bcbead6859bebd80302129aa367aa9d95ebdfe8f363800ab90d861b425662->enter($__internal_be3bcbead6859bebd80302129aa367aa9d95ebdfe8f363800ab90d861b425662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_be3bcbead6859bebd80302129aa367aa9d95ebdfe8f363800ab90d861b425662->leave($__internal_be3bcbead6859bebd80302129aa367aa9d95ebdfe8f363800ab90d861b425662_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->widget(\$form) ?>
";
    }
}
