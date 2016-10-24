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
        $__internal_47fa56db97594a2b98d5c6c95fcd347f453e2aa8213a6b5acb2e7278a8f955e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fa56db97594a2b98d5c6c95fcd347f453e2aa8213a6b5acb2e7278a8f955e1->enter($__internal_47fa56db97594a2b98d5c6c95fcd347f453e2aa8213a6b5acb2e7278a8f955e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_47fa56db97594a2b98d5c6c95fcd347f453e2aa8213a6b5acb2e7278a8f955e1->leave($__internal_47fa56db97594a2b98d5c6c95fcd347f453e2aa8213a6b5acb2e7278a8f955e1_prof);

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
