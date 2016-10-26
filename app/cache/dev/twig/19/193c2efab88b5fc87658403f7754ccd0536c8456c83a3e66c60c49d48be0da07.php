<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_484a980ffb94d98d13e71dd7068ee318b689b4dcf05204adf0c4fb8571ed33ac extends Twig_Template
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
        $__internal_3b66f1d9f96288b2f3faa5a3928ba6bc36cae03a1bb0923070bec3d8e5ac5b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b66f1d9f96288b2f3faa5a3928ba6bc36cae03a1bb0923070bec3d8e5ac5b6a->enter($__internal_3b66f1d9f96288b2f3faa5a3928ba6bc36cae03a1bb0923070bec3d8e5ac5b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3b66f1d9f96288b2f3faa5a3928ba6bc36cae03a1bb0923070bec3d8e5ac5b6a->leave($__internal_3b66f1d9f96288b2f3faa5a3928ba6bc36cae03a1bb0923070bec3d8e5ac5b6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
