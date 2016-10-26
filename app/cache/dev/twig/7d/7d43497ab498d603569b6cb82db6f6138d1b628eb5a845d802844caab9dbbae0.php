<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c105e869fc9cd1d4be886f92e45de4f848d70b28528fd4d89759f768890d9996 extends Twig_Template
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
        $__internal_42e3bf6c1c523357a75d36bc66d2acb683545fc637c978ae0fd9a6cb4c74b89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e3bf6c1c523357a75d36bc66d2acb683545fc637c978ae0fd9a6cb4c74b89f->enter($__internal_42e3bf6c1c523357a75d36bc66d2acb683545fc637c978ae0fd9a6cb4c74b89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_42e3bf6c1c523357a75d36bc66d2acb683545fc637c978ae0fd9a6cb4c74b89f->leave($__internal_42e3bf6c1c523357a75d36bc66d2acb683545fc637c978ae0fd9a6cb4c74b89f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
