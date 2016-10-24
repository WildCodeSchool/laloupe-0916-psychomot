<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_b5c1f47cfd0409d862f00ba053ae3487f76a1357d40029777176dbdcacd3c114 extends Twig_Template
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
        $__internal_2ee6d89d83e4bbc2f4619cb482b7ee6d47d99b20560f284ff7f13902bb40dfc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee6d89d83e4bbc2f4619cb482b7ee6d47d99b20560f284ff7f13902bb40dfc9->enter($__internal_2ee6d89d83e4bbc2f4619cb482b7ee6d47d99b20560f284ff7f13902bb40dfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_2ee6d89d83e4bbc2f4619cb482b7ee6d47d99b20560f284ff7f13902bb40dfc9->leave($__internal_2ee6d89d83e4bbc2f4619cb482b7ee6d47d99b20560f284ff7f13902bb40dfc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
