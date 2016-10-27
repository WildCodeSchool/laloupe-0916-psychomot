<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_57c5cf1722e886408c7655ada34e52b7e364b40369650bb604ebebf981f9e53f extends Twig_Template
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
        $__internal_ac47a7ed0167babc66372be62d8c10c4a4b4ea71001c0e6d17e6fd8fa33f3d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac47a7ed0167babc66372be62d8c10c4a4b4ea71001c0e6d17e6fd8fa33f3d14->enter($__internal_ac47a7ed0167babc66372be62d8c10c4a4b4ea71001c0e6d17e6fd8fa33f3d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));
=======
        $__internal_179ececa1bb6210037c716d90b7103eb9f9aec2e6bb639c09f770e74913e787d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179ececa1bb6210037c716d90b7103eb9f9aec2e6bb639c09f770e74913e787d->enter($__internal_179ececa1bb6210037c716d90b7103eb9f9aec2e6bb639c09f770e74913e787d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));
>>>>>>> flo

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$v, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
<<<<<<< HEAD
        $__internal_ac47a7ed0167babc66372be62d8c10c4a4b4ea71001c0e6d17e6fd8fa33f3d14->leave($__internal_ac47a7ed0167babc66372be62d8c10c4a4b4ea71001c0e6d17e6fd8fa33f3d14_prof);
=======
        $__internal_179ececa1bb6210037c716d90b7103eb9f9aec2e6bb639c09f770e74913e787d->leave($__internal_179ececa1bb6210037c716d90b7103eb9f9aec2e6bb639c09f770e74913e787d_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$v, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
    }
}
