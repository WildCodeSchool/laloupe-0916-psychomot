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
        $__internal_754e565ae5bf71a73e974e251a945749a06e2d5261f008a5a49249a0d89e78fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754e565ae5bf71a73e974e251a945749a06e2d5261f008a5a49249a0d89e78fb->enter($__internal_754e565ae5bf71a73e974e251a945749a06e2d5261f008a5a49249a0d89e78fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_754e565ae5bf71a73e974e251a945749a06e2d5261f008a5a49249a0d89e78fb->leave($__internal_754e565ae5bf71a73e974e251a945749a06e2d5261f008a5a49249a0d89e78fb_prof);

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
