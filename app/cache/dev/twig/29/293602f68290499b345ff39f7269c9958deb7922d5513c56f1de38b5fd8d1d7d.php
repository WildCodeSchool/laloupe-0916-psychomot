<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f3854fccc9cc7051135145fe9fb76749e304e7cde38fc4a020a45557ea635be8 extends Twig_Template
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
        $__internal_de5db6e9fcf502c1d6b1f9e74a3c78df83e5cff21eaeb8dd78e17d0c7294e184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5db6e9fcf502c1d6b1f9e74a3c78df83e5cff21eaeb8dd78e17d0c7294e184->enter($__internal_de5db6e9fcf502c1d6b1f9e74a3c78df83e5cff21eaeb8dd78e17d0c7294e184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_de5db6e9fcf502c1d6b1f9e74a3c78df83e5cff21eaeb8dd78e17d0c7294e184->leave($__internal_de5db6e9fcf502c1d6b1f9e74a3c78df83e5cff21eaeb8dd78e17d0c7294e184_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
