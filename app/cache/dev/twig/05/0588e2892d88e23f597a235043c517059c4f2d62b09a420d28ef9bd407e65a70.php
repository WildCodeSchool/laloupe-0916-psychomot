<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_80e1685e690a657ead2e87e1f8fccfa1a3cbedcc3d55173e8efa1bc20dee8287 extends Twig_Template
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
        $__internal_0642e9576228faa12a9d2b3b93590c1ccbc4a08332648b39982b4afbb1d4d56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0642e9576228faa12a9d2b3b93590c1ccbc4a08332648b39982b4afbb1d4d56f->enter($__internal_0642e9576228faa12a9d2b3b93590c1ccbc4a08332648b39982b4afbb1d4d56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0642e9576228faa12a9d2b3b93590c1ccbc4a08332648b39982b4afbb1d4d56f->leave($__internal_0642e9576228faa12a9d2b3b93590c1ccbc4a08332648b39982b4afbb1d4d56f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
