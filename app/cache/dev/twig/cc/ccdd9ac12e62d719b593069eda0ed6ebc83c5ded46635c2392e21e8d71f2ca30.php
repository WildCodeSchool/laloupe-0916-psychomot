<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_51edca61352b21a37a5937734f8b1c6a0621bff872dd9e3c5ca94ed4542e6473 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_32421c4dcf7135e3cf34d5cdacfa25df9a1181486e7c59d92bd7e392436b5aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32421c4dcf7135e3cf34d5cdacfa25df9a1181486e7c59d92bd7e392436b5aab->enter($__internal_32421c4dcf7135e3cf34d5cdacfa25df9a1181486e7c59d92bd7e392436b5aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));
=======
        $__internal_4539953dc9c29deeee04f3852b56350a487e84aea0677cc11e73ccb6a897f759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4539953dc9c29deeee04f3852b56350a487e84aea0677cc11e73ccb6a897f759->enter($__internal_4539953dc9c29deeee04f3852b56350a487e84aea0677cc11e73ccb6a897f759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));
>>>>>>> flo

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
<<<<<<< HEAD
        $__internal_32421c4dcf7135e3cf34d5cdacfa25df9a1181486e7c59d92bd7e392436b5aab->leave($__internal_32421c4dcf7135e3cf34d5cdacfa25df9a1181486e7c59d92bd7e392436b5aab_prof);
=======
        $__internal_4539953dc9c29deeee04f3852b56350a487e84aea0677cc11e73ccb6a897f759->leave($__internal_4539953dc9c29deeee04f3852b56350a487e84aea0677cc11e73ccb6a897f759_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
