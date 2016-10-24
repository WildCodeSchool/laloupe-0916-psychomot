<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_009457ace21aec845e5410b6f2a4444cf9990c82f49eae8f865d9eda8ef6ae6a extends Twig_Template
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
        $__internal_9caa2d674b702a65374e13d982643aab69512ca14872295572a39befc245832f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9caa2d674b702a65374e13d982643aab69512ca14872295572a39befc245832f->enter($__internal_9caa2d674b702a65374e13d982643aab69512ca14872295572a39befc245832f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9caa2d674b702a65374e13d982643aab69512ca14872295572a39befc245832f->leave($__internal_9caa2d674b702a65374e13d982643aab69512ca14872295572a39befc245832f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
