<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f0eb8296632117c7f707cfca23a134881c9be64a1d2deaf8c46c6bb4106baf64 extends Twig_Template
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
        $__internal_c6e91309e71814cf3b727889c004691ca2b38d351ad021566f8a0cfdea9b6202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e91309e71814cf3b727889c004691ca2b38d351ad021566f8a0cfdea9b6202->enter($__internal_c6e91309e71814cf3b727889c004691ca2b38d351ad021566f8a0cfdea9b6202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c6e91309e71814cf3b727889c004691ca2b38d351ad021566f8a0cfdea9b6202->leave($__internal_c6e91309e71814cf3b727889c004691ca2b38d351ad021566f8a0cfdea9b6202_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
