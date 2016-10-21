<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f259505f28ddf50129d696e762fcec9363d065827e7efed65762f7bd95f8890f extends Twig_Template
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
        $__internal_21e670a208b4d13ac1d0b299896150c2bef429446c94dc5cfb9ee1ccbbaffc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e670a208b4d13ac1d0b299896150c2bef429446c94dc5cfb9ee1ccbbaffc24->enter($__internal_21e670a208b4d13ac1d0b299896150c2bef429446c94dc5cfb9ee1ccbbaffc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_21e670a208b4d13ac1d0b299896150c2bef429446c94dc5cfb9ee1ccbbaffc24->leave($__internal_21e670a208b4d13ac1d0b299896150c2bef429446c94dc5cfb9ee1ccbbaffc24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
