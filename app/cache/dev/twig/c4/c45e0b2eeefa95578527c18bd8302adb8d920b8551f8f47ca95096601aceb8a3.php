<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5b57153aa7fc7b3aa2f29ceb0cbe2e0269dec5b629b7c181ef94ba67f8c9f3c0 extends Twig_Template
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
        $__internal_e7c64ae87052d8db980de76a45e925e51a9dcbfa1c3620978a4f5cd3dff855a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c64ae87052d8db980de76a45e925e51a9dcbfa1c3620978a4f5cd3dff855a5->enter($__internal_e7c64ae87052d8db980de76a45e925e51a9dcbfa1c3620978a4f5cd3dff855a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e7c64ae87052d8db980de76a45e925e51a9dcbfa1c3620978a4f5cd3dff855a5->leave($__internal_e7c64ae87052d8db980de76a45e925e51a9dcbfa1c3620978a4f5cd3dff855a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
