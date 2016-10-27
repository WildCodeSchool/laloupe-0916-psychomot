<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_0d292f2236007e25b54975ee6a53ecc4077edd517f9c74b6078ef6db5424abdc extends Twig_Template
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
        $__internal_34d8185983096d215558d8a51b545de4a312bf503898b7d3f7a6a34a80669b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d8185983096d215558d8a51b545de4a312bf503898b7d3f7a6a34a80669b51->enter($__internal_34d8185983096d215558d8a51b545de4a312bf503898b7d3f7a6a34a80669b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:table.html.twig"));
=======
        $__internal_07af45a00ad9289e0cbfd9ad119660fec89d7cc25b944ceca0f9abe8b690580d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07af45a00ad9289e0cbfd9ad119660fec89d7cc25b944ceca0f9abe8b690580d->enter($__internal_07af45a00ad9289e0cbfd9ad119660fec89d7cc25b944ceca0f9abe8b690580d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:table.html.twig"));
>>>>>>> flo

        // line 1
        echo "<table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
        echo "\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 0, array(), "array")) : ("Key")), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 1, array(), "array")) : ("Value")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th scope=\"row\">";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpValue($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $context["key"], array(), "array")), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
<<<<<<< HEAD
        $__internal_34d8185983096d215558d8a51b545de4a312bf503898b7d3f7a6a34a80669b51->leave($__internal_34d8185983096d215558d8a51b545de4a312bf503898b7d3f7a6a34a80669b51_prof);
=======
        $__internal_07af45a00ad9289e0cbfd9ad119660fec89d7cc25b944ceca0f9abe8b690580d->leave($__internal_07af45a00ad9289e0cbfd9ad119660fec89d7cc25b944ceca0f9abe8b690580d_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  51 => 12,  47 => 11,  44 => 10,  40 => 9,  33 => 5,  29 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<table class=\"{{ class|default('') }}\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ labels is defined ? labels[0] : 'Key' }}</th>
            <th scope=\"col\">{{ labels is defined ? labels[1] : 'Value' }}</th>
        </tr>
    </thead>
    <tbody>
        {% for key in data|keys|sort %}
            <tr>
                <th scope=\"row\">{{ key }}</th>
                <td>{{ profiler_dump(data[key]) }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
";
    }
}
