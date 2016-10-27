<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4fbd1bec92ba974ee2dc657a76cd2f8257f9fe66c26fdd0c35b4292c0804337d extends Twig_Template
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
<<<<<<< HEAD
        $__internal_5d8904d2c41e873ba6051330bafc3cac662267e20a96b6c8a7192e9633c54f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8904d2c41e873ba6051330bafc3cac662267e20a96b6c8a7192e9633c54f40->enter($__internal_5d8904d2c41e873ba6051330bafc3cac662267e20a96b6c8a7192e9633c54f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));
=======
        $__internal_44d9cb8b05287e89b9c12e9bd5ad4f68a019e8baaef02a2830bfc0a8716a2953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d9cb8b05287e89b9c12e9bd5ad4f68a019e8baaef02a2830bfc0a8716a2953->enter($__internal_44d9cb8b05287e89b9c12e9bd5ad4f68a019e8baaef02a2830bfc0a8716a2953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));
>>>>>>> flo

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
<<<<<<< HEAD
        $__internal_5d8904d2c41e873ba6051330bafc3cac662267e20a96b6c8a7192e9633c54f40->leave($__internal_5d8904d2c41e873ba6051330bafc3cac662267e20a96b6c8a7192e9633c54f40_prof);
=======
        $__internal_44d9cb8b05287e89b9c12e9bd5ad4f68a019e8baaef02a2830bfc0a8716a2953->leave($__internal_44d9cb8b05287e89b9c12e9bd5ad4f68a019e8baaef02a2830bfc0a8716a2953_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
