<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_986da315f40748a04c6946293f9e6637f5cad4918a8501390d734a91c007d1a4 extends Twig_Template
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
        $__internal_9a5d741b6f783d140bbc9103ea78561abfe686d92f1e6c474d6d45abb14835d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5d741b6f783d140bbc9103ea78561abfe686d92f1e6c474d6d45abb14835d9->enter($__internal_9a5d741b6f783d140bbc9103ea78561abfe686d92f1e6c474d6d45abb14835d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9a5d741b6f783d140bbc9103ea78561abfe686d92f1e6c474d6d45abb14835d9->leave($__internal_9a5d741b6f783d140bbc9103ea78561abfe686d92f1e6c474d6d45abb14835d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
