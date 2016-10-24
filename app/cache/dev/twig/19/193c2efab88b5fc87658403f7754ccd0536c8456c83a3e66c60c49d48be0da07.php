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
        $__internal_b2777dc4a94474aea40cd8b655dda14f1e505bd5a385dbfcb1ea45abd0cd68f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2777dc4a94474aea40cd8b655dda14f1e505bd5a385dbfcb1ea45abd0cd68f6->enter($__internal_b2777dc4a94474aea40cd8b655dda14f1e505bd5a385dbfcb1ea45abd0cd68f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b2777dc4a94474aea40cd8b655dda14f1e505bd5a385dbfcb1ea45abd0cd68f6->leave($__internal_b2777dc4a94474aea40cd8b655dda14f1e505bd5a385dbfcb1ea45abd0cd68f6_prof);

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
