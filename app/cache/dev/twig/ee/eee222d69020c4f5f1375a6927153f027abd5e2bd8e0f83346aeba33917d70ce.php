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
        $__internal_661feee983c14e80caadce8689b50e3f7f62dbfd3deb6e2f93cd3b3d512c9b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661feee983c14e80caadce8689b50e3f7f62dbfd3deb6e2f93cd3b3d512c9b77->enter($__internal_661feee983c14e80caadce8689b50e3f7f62dbfd3deb6e2f93cd3b3d512c9b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_661feee983c14e80caadce8689b50e3f7f62dbfd3deb6e2f93cd3b3d512c9b77->leave($__internal_661feee983c14e80caadce8689b50e3f7f62dbfd3deb6e2f93cd3b3d512c9b77_prof);

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
