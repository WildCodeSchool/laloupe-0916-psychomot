<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4b5bf727bb342b11ab3156f73a0f73ddbe909c09d2e202381a21603fba31e1bc extends Twig_Template
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
        $__internal_436c75976e30441b2899883c4230f833dcde57f0cdd42adc4afe219f41d3e0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436c75976e30441b2899883c4230f833dcde57f0cdd42adc4afe219f41d3e0ca->enter($__internal_436c75976e30441b2899883c4230f833dcde57f0cdd42adc4afe219f41d3e0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_436c75976e30441b2899883c4230f833dcde57f0cdd42adc4afe219f41d3e0ca->leave($__internal_436c75976e30441b2899883c4230f833dcde57f0cdd42adc4afe219f41d3e0ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
