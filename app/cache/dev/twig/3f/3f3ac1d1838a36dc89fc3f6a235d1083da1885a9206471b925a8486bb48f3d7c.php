<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9417f85038cb3d8f22f046026d8b84fc190e7ff0ef1ba4bff1f99c4787b3b265 extends Twig_Template
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
        $__internal_9625774537b44bee3d6e4a30d6dffd13f36cf8f35423e6a29c195b969b7e7417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9625774537b44bee3d6e4a30d6dffd13f36cf8f35423e6a29c195b969b7e7417->enter($__internal_9625774537b44bee3d6e4a30d6dffd13f36cf8f35423e6a29c195b969b7e7417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9625774537b44bee3d6e4a30d6dffd13f36cf8f35423e6a29c195b969b7e7417->leave($__internal_9625774537b44bee3d6e4a30d6dffd13f36cf8f35423e6a29c195b969b7e7417_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
