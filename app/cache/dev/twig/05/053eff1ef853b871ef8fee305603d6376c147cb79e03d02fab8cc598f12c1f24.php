<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_726e8add2facee9036124886588a6bc02a93b0fc00e26ab5a93a20fcbe5a8230 extends Twig_Template
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
        $__internal_bc621668ae252d14b0024232c8e24d9ab33576dd9dffd32b2fa3d34c0329d689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc621668ae252d14b0024232c8e24d9ab33576dd9dffd32b2fa3d34c0329d689->enter($__internal_bc621668ae252d14b0024232c8e24d9ab33576dd9dffd32b2fa3d34c0329d689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bc621668ae252d14b0024232c8e24d9ab33576dd9dffd32b2fa3d34c0329d689->leave($__internal_bc621668ae252d14b0024232c8e24d9ab33576dd9dffd32b2fa3d34c0329d689_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
