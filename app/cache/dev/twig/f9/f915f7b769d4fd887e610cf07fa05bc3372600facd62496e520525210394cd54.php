<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_59a1b21ed068831586a76858ea980bfde8ac04bc91806a9e04ea328d72fd76e3 extends Twig_Template
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
        $__internal_71f4cb4cd3d5d51f1b90a0838086c4dedeba01a39c5689047c6b64473d341a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f4cb4cd3d5d51f1b90a0838086c4dedeba01a39c5689047c6b64473d341a30->enter($__internal_71f4cb4cd3d5d51f1b90a0838086c4dedeba01a39c5689047c6b64473d341a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_71f4cb4cd3d5d51f1b90a0838086c4dedeba01a39c5689047c6b64473d341a30->leave($__internal_71f4cb4cd3d5d51f1b90a0838086c4dedeba01a39c5689047c6b64473d341a30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
