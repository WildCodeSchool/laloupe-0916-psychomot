<?php

/* PsychomotBundle:psychomot:show.html.twig */
class __TwigTemplate_810e5cf58b05ec2f2981a43bc73e2f1a57b29c16c5d56b79110af8e47e7538a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PsychomotBundle:psychomot:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb9d783917270bbd73fac5729334c173a44cdf928d273e035912a8a0a99857b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9d783917270bbd73fac5729334c173a44cdf928d273e035912a8a0a99857b6->enter($__internal_eb9d783917270bbd73fac5729334c173a44cdf928d273e035912a8a0a99857b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychomotBundle:psychomot:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb9d783917270bbd73fac5729334c173a44cdf928d273e035912a8a0a99857b6->leave($__internal_eb9d783917270bbd73fac5729334c173a44cdf928d273e035912a8a0a99857b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cfdb56548c38398b049ee8f1ec27390ae7f18fe8fd15b25dcce207c416f683a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfdb56548c38398b049ee8f1ec27390ae7f18fe8fd15b25dcce207c416f683a->enter($__internal_3cfdb56548c38398b049ee8f1ec27390ae7f18fe8fd15b25dcce207c416f683a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Psychomot</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titledef</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titleDef", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtdef</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtDef", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titlewho</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titleWho", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtwho</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtWho", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titlewhy</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titleWhy", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtwhy</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtWhy", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titlepsy</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titlePsy", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtpsy1</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtPsy1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtpsy2</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtPsy2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titleconsult</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titleConsult", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtconsult</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtConsult", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titleinterv</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titleInterv", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtinterv</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtInterv", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titlebilan</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titleBilan", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtbilan</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtBilan", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Namepsy1</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "namePsy1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Namepsy2</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "namePsy2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactadress</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "contactAdress", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactmail</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "contactMail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contacttel</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "contactTel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactname</th>
                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "contactName", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psychomot_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psychomot_edit", array("id" => $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 111
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 113
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3cfdb56548c38398b049ee8f1ec27390ae7f18fe8fd15b25dcce207c416f683a->leave($__internal_3cfdb56548c38398b049ee8f1ec27390ae7f18fe8fd15b25dcce207c416f683a_prof);

    }

    public function getTemplateName()
    {
        return "PsychomotBundle:psychomot:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 113,  224 => 111,  218 => 108,  212 => 105,  202 => 98,  195 => 94,  188 => 90,  181 => 86,  174 => 82,  167 => 78,  160 => 74,  153 => 70,  146 => 66,  139 => 62,  132 => 58,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Psychomot</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ psychomot.id }}</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>{{ psychomot.tel }}</td>
            </tr>
            <tr>
                <th>Titledef</th>
                <td>{{ psychomot.titleDef }}</td>
            </tr>
            <tr>
                <th>Txtdef</th>
                <td>{{ psychomot.txtDef }}</td>
            </tr>
            <tr>
                <th>Titlewho</th>
                <td>{{ psychomot.titleWho }}</td>
            </tr>
            <tr>
                <th>Txtwho</th>
                <td>{{ psychomot.txtWho }}</td>
            </tr>
            <tr>
                <th>Titlewhy</th>
                <td>{{ psychomot.titleWhy }}</td>
            </tr>
            <tr>
                <th>Txtwhy</th>
                <td>{{ psychomot.txtWhy }}</td>
            </tr>
            <tr>
                <th>Titlepsy</th>
                <td>{{ psychomot.titlePsy }}</td>
            </tr>
            <tr>
                <th>Txtpsy1</th>
                <td>{{ psychomot.txtPsy1 }}</td>
            </tr>
            <tr>
                <th>Txtpsy2</th>
                <td>{{ psychomot.txtPsy2 }}</td>
            </tr>
            <tr>
                <th>Titleconsult</th>
                <td>{{ psychomot.titleConsult }}</td>
            </tr>
            <tr>
                <th>Txtconsult</th>
                <td>{{ psychomot.txtConsult }}</td>
            </tr>
            <tr>
                <th>Titleinterv</th>
                <td>{{ psychomot.titleInterv }}</td>
            </tr>
            <tr>
                <th>Txtinterv</th>
                <td>{{ psychomot.txtInterv }}</td>
            </tr>
            <tr>
                <th>Titlebilan</th>
                <td>{{ psychomot.titleBilan }}</td>
            </tr>
            <tr>
                <th>Txtbilan</th>
                <td>{{ psychomot.txtBilan }}</td>
            </tr>
            <tr>
                <th>Namepsy1</th>
                <td>{{ psychomot.namePsy1 }}</td>
            </tr>
            <tr>
                <th>Namepsy2</th>
                <td>{{ psychomot.namePsy2 }}</td>
            </tr>
            <tr>
                <th>Contactadress</th>
                <td>{{ psychomot.contactAdress }}</td>
            </tr>
            <tr>
                <th>Contactmail</th>
                <td>{{ psychomot.contactMail }}</td>
            </tr>
            <tr>
                <th>Contacttel</th>
                <td>{{ psychomot.contactTel }}</td>
            </tr>
            <tr>
                <th>Contactname</th>
                <td>{{ psychomot.contactName }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('psychomot_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('psychomot_edit', { 'id': psychomot.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
";
    }
}
