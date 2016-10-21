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
        $__internal_f3664a0f6ee89e2b2c021f3a0d4a21247ae8ebc7c5c0988392616ad1c9ef28da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3664a0f6ee89e2b2c021f3a0d4a21247ae8ebc7c5c0988392616ad1c9ef28da->enter($__internal_f3664a0f6ee89e2b2c021f3a0d4a21247ae8ebc7c5c0988392616ad1c9ef28da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f3664a0f6ee89e2b2c021f3a0d4a21247ae8ebc7c5c0988392616ad1c9ef28da->leave($__internal_f3664a0f6ee89e2b2c021f3a0d4a21247ae8ebc7c5c0988392616ad1c9ef28da_prof);

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
