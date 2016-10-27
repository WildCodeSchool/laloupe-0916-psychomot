<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f151e23da3d8b3ff90b6df37e374471a43861938c41afcd74c67f0800bcda588 extends Twig_Template
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
        $__internal_d1903264f59fe997e0792a48363b824fb9f897125a477ee6f99abe5e08ac5b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1903264f59fe997e0792a48363b824fb9f897125a477ee6f99abe5e08ac5b35->enter($__internal_d1903264f59fe997e0792a48363b824fb9f897125a477ee6f99abe5e08ac5b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d1903264f59fe997e0792a48363b824fb9f897125a477ee6f99abe5e08ac5b35->leave($__internal_d1903264f59fe997e0792a48363b824fb9f897125a477ee6f99abe5e08ac5b35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
