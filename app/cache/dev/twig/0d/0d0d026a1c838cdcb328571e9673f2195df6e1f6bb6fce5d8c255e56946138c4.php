<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_83dcdf4a2b00bde599b0e512512b74fdc404aa0ad768fd4d3d16d5da7a1c14c1 extends Twig_Template
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
        $__internal_707f7def57fed1c159a37065e17597f0ecb6a4e61a54c99cfb0906ec34273c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707f7def57fed1c159a37065e17597f0ecb6a4e61a54c99cfb0906ec34273c40->enter($__internal_707f7def57fed1c159a37065e17597f0ecb6a4e61a54c99cfb0906ec34273c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_707f7def57fed1c159a37065e17597f0ecb6a4e61a54c99cfb0906ec34273c40->leave($__internal_707f7def57fed1c159a37065e17597f0ecb6a4e61a54c99cfb0906ec34273c40_prof);

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
