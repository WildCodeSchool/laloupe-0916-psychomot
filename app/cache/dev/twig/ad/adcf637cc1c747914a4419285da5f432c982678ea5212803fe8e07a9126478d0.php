<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_b5c1f47cfd0409d862f00ba053ae3487f76a1357d40029777176dbdcacd3c114 extends Twig_Template
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
        $__internal_d6fcdb35a89c90f9582a451b17d8762b53851e5e35aad962ae130a3ccdb8fccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6fcdb35a89c90f9582a451b17d8762b53851e5e35aad962ae130a3ccdb8fccd->enter($__internal_d6fcdb35a89c90f9582a451b17d8762b53851e5e35aad962ae130a3ccdb8fccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d6fcdb35a89c90f9582a451b17d8762b53851e5e35aad962ae130a3ccdb8fccd->leave($__internal_d6fcdb35a89c90f9582a451b17d8762b53851e5e35aad962ae130a3ccdb8fccd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
