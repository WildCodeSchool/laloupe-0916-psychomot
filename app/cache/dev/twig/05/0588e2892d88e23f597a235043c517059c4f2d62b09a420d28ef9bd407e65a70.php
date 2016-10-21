<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_80e1685e690a657ead2e87e1f8fccfa1a3cbedcc3d55173e8efa1bc20dee8287 extends Twig_Template
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
        $__internal_c05ed28a15c96ace620de4d00f5e41ec7187dcd1085b554a6693c8eecb19c431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05ed28a15c96ace620de4d00f5e41ec7187dcd1085b554a6693c8eecb19c431->enter($__internal_c05ed28a15c96ace620de4d00f5e41ec7187dcd1085b554a6693c8eecb19c431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c05ed28a15c96ace620de4d00f5e41ec7187dcd1085b554a6693c8eecb19c431->leave($__internal_c05ed28a15c96ace620de4d00f5e41ec7187dcd1085b554a6693c8eecb19c431_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
