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
<<<<<<< HEAD
        $__internal_4902681a348577b3763ed969ac571688a0c5c4b2b549e6c45172ba1efd08289d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4902681a348577b3763ed969ac571688a0c5c4b2b549e6c45172ba1efd08289d->enter($__internal_4902681a348577b3763ed969ac571688a0c5c4b2b549e6c45172ba1efd08289d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));
=======
        $__internal_7675ea1fd7a1c6ecd456029872c30299e5f83d347136340c7404c4bb1e59548d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7675ea1fd7a1c6ecd456029872c30299e5f83d347136340c7404c4bb1e59548d->enter($__internal_7675ea1fd7a1c6ecd456029872c30299e5f83d347136340c7404c4bb1e59548d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));
>>>>>>> flo

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
<<<<<<< HEAD
        $__internal_4902681a348577b3763ed969ac571688a0c5c4b2b549e6c45172ba1efd08289d->leave($__internal_4902681a348577b3763ed969ac571688a0c5c4b2b549e6c45172ba1efd08289d_prof);
=======
        $__internal_7675ea1fd7a1c6ecd456029872c30299e5f83d347136340c7404c4bb1e59548d->leave($__internal_7675ea1fd7a1c6ecd456029872c30299e5f83d347136340c7404c4bb1e59548d_prof);
>>>>>>> flo

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
