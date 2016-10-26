<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5422e90e83c9b2f4ab1262f689e62b5c14f48b4ed0f37c99cf5658853e43d635 extends Twig_Template
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
        $__internal_0d33641f97a6119bbb94fe2e20be86e54eb6e807d3afdaaf210e61092c7f26da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d33641f97a6119bbb94fe2e20be86e54eb6e807d3afdaaf210e61092c7f26da->enter($__internal_0d33641f97a6119bbb94fe2e20be86e54eb6e807d3afdaaf210e61092c7f26da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0d33641f97a6119bbb94fe2e20be86e54eb6e807d3afdaaf210e61092c7f26da->leave($__internal_0d33641f97a6119bbb94fe2e20be86e54eb6e807d3afdaaf210e61092c7f26da_prof);

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
