<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b103be5d0f572a5713ce027cbc009d0e56941549bc0e630baabfa3bbb41e14c1 extends Twig_Template
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
        $__internal_78066d749178d49c91f26461f10e907daaef93edb9902c534bac1fbd85d7456c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78066d749178d49c91f26461f10e907daaef93edb9902c534bac1fbd85d7456c->enter($__internal_78066d749178d49c91f26461f10e907daaef93edb9902c534bac1fbd85d7456c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_78066d749178d49c91f26461f10e907daaef93edb9902c534bac1fbd85d7456c->leave($__internal_78066d749178d49c91f26461f10e907daaef93edb9902c534bac1fbd85d7456c_prof);

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
