<?php

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_28d9b3f6bbfef4fc8a40a8886846fc21edd627a751eb5a24a5346df4c24479bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Debug/Profiler/dump.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_9def3fccbe6cedede9a16a9f26e62a6d4309a2902e08ab9524c46d2abba8dbce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9def3fccbe6cedede9a16a9f26e62a6d4309a2902e08ab9524c46d2abba8dbce->enter($__internal_9def3fccbe6cedede9a16a9f26e62a6d4309a2902e08ab9524c46d2abba8dbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9def3fccbe6cedede9a16a9f26e62a6d4309a2902e08ab9524c46d2abba8dbce->leave($__internal_9def3fccbe6cedede9a16a9f26e62a6d4309a2902e08ab9524c46d2abba8dbce_prof);
=======
        $__internal_66e9f340b7fede814c7896b3f3a4e3c1ada8551f49e72e9c102491a454437b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e9f340b7fede814c7896b3f3a4e3c1ada8551f49e72e9c102491a454437b59->enter($__internal_66e9f340b7fede814c7896b3f3a4e3c1ada8551f49e72e9c102491a454437b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66e9f340b7fede814c7896b3f3a4e3c1ada8551f49e72e9c102491a454437b59->leave($__internal_66e9f340b7fede814c7896b3f3a4e3c1ada8551f49e72e9c102491a454437b59_prof);
>>>>>>> flo

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_15746e811d5fbf0b9b5248d2784474d171f4659a73caaa93a42de857719bb599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15746e811d5fbf0b9b5248d2784474d171f4659a73caaa93a42de857719bb599->enter($__internal_15746e811d5fbf0b9b5248d2784474d171f4659a73caaa93a42de857719bb599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
        $__internal_c1d0a827b161621e2e7c2fb3b930e790366041e40bd3aab6887bc2250507927b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d0a827b161621e2e7c2fb3b930e790366041e40bd3aab6887bc2250507927b->enter($__internal_c1d0a827b161621e2e7c2fb3b930e790366041e40bd3aab6887bc2250507927b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
>>>>>>> flo

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array())) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "
        ";
            // line 10
            ob_start();
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 12
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    ";
                // line 14
                if ($this->getAttribute($context["dump"], "file", array())) {
                    // line 15
                    echo "                        ";
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                    // line 16
                    echo "                        ";
                    if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                        // line 17
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 19
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 21
                    echo "                    ";
                } else {
                    // line 22
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 24
                echo "                    </span>
                    <span class=\"sf-toolbar-file-line\">line ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
                echo "</span>

                    ";
                // line 27
                echo $this->getAttribute($context["dump"], "data", array());
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            <img src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" onload=\"var h = this.parentNode.innerHTML, rx=/<script>(.*?)<\\/script>/g, s; while (s = rx.exec(h)) {eval(s[1]);};\" />
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 32
            echo "
        ";
            // line 33
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
            echo "
    ";
        }
        
<<<<<<< HEAD
        $__internal_15746e811d5fbf0b9b5248d2784474d171f4659a73caaa93a42de857719bb599->leave($__internal_15746e811d5fbf0b9b5248d2784474d171f4659a73caaa93a42de857719bb599_prof);
=======
        $__internal_c1d0a827b161621e2e7c2fb3b930e790366041e40bd3aab6887bc2250507927b->leave($__internal_c1d0a827b161621e2e7c2fb3b930e790366041e40bd3aab6887bc2250507927b_prof);
>>>>>>> flo

    }

    // line 37
    public function block_menu($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_439e7af87f91a05904c1d778f580cf83472c4df4112ee8294b3e4a72963fab98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439e7af87f91a05904c1d778f580cf83472c4df4112ee8294b3e4a72963fab98->enter($__internal_439e7af87f91a05904c1d778f580cf83472c4df4112ee8294b3e4a72963fab98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
=======
        $__internal_d6453e8bac77dfff7eaaa1618173b2b78bdba6b471058ca58c15c01191ec7557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6453e8bac77dfff7eaaa1618173b2b78bdba6b471058ca58c15c01191ec7557->enter($__internal_d6453e8bac77dfff7eaaa1618173b2b78bdba6b471058ca58c15c01191ec7557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
>>>>>>> flo

        // line 38
        echo "    <span class=\"label ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dumpsCount", array()) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 39
        echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
        echo "</span>
        <strong>Debug</strong>
    </span>
";
        
<<<<<<< HEAD
        $__internal_439e7af87f91a05904c1d778f580cf83472c4df4112ee8294b3e4a72963fab98->leave($__internal_439e7af87f91a05904c1d778f580cf83472c4df4112ee8294b3e4a72963fab98_prof);
=======
        $__internal_d6453e8bac77dfff7eaaa1618173b2b78bdba6b471058ca58c15c01191ec7557->leave($__internal_d6453e8bac77dfff7eaaa1618173b2b78bdba6b471058ca58c15c01191ec7557_prof);
>>>>>>> flo

    }

    // line 44
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_9a4295a63a7ce701604270790c8d14a1c0bb706bbd2e81f0b4f80f94b8a998a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4295a63a7ce701604270790c8d14a1c0bb706bbd2e81f0b4f80f94b8a998a8->enter($__internal_9a4295a63a7ce701604270790c8d14a1c0bb706bbd2e81f0b4f80f94b8a998a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
=======
        $__internal_05c910120ac1772649ab95040ce15d22cf6ff8ad493ee4e744604b35b5a59646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c910120ac1772649ab95040ce15d22cf6ff8ad493ee4e744604b35b5a59646->enter($__internal_05c910120ac1772649ab95040ce15d22cf6ff8ad493ee4e744604b35b5a59646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
>>>>>>> flo

        // line 45
        echo "    <h2>Dumped Contents</h2>

    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
            // line 48
            echo "        <div class=\"sf-dump sf-reset\">
            <h3>In
                ";
            // line 50
            if ($this->getAttribute($context["dump"], "line", array())) {
                // line 51
                echo "                    ";
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                // line 52
                echo "                    ";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    // line 53
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 55
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "</abbr>
                    ";
                }
                // line 57
                echo "                ";
            } else {
                // line 58
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                echo "
                ";
            }
            // line 60
            echo "                <small>line ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
            echo "</small>

                <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\" data-toggle-alt-content=\"Hide code\">Show code</a>
            </h3>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                <div class=\"trace\">
                    ";
            // line 67
            echo (($this->getAttribute($context["dump"], "fileExcerpt", array())) ? ($this->getAttribute($context["dump"], "fileExcerpt", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()))));
            echo "
                </div>
            </div>

            ";
            // line 71
            echo $this->getAttribute($context["dump"], "data", array());
            echo "
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 74
            echo "        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
<<<<<<< HEAD
        $__internal_9a4295a63a7ce701604270790c8d14a1c0bb706bbd2e81f0b4f80f94b8a998a8->leave($__internal_9a4295a63a7ce701604270790c8d14a1c0bb706bbd2e81f0b4f80f94b8a998a8_prof);
=======
        $__internal_05c910120ac1772649ab95040ce15d22cf6ff8ad493ee4e744604b35b5a59646->leave($__internal_05c910120ac1772649ab95040ce15d22cf6ff8ad493ee4e744604b35b5a59646_prof);
>>>>>>> flo

    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 74,  254 => 71,  247 => 67,  242 => 65,  236 => 62,  230 => 60,  224 => 58,  221 => 57,  213 => 55,  203 => 53,  200 => 52,  197 => 51,  195 => 50,  191 => 48,  173 => 47,  169 => 45,  163 => 44,  152 => 39,  147 => 38,  141 => 37,  131 => 33,  128 => 32,  124 => 30,  115 => 27,  110 => 25,  107 => 24,  101 => 22,  98 => 21,  90 => 19,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 12,  63 => 11,  61 => 10,  58 => 9,  53 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.dumpsCount %}
        {% set icon %}
            {{ include('@Debug/Profiler/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.dumpsCount }}</span>
        {% endset %}

        {% set text %}
            {% for dump in collector.getDumps('html') %}
                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    {% if dump.file %}
                        {% set link = dump.file|file_link(dump.line) %}
                        {% if link %}
                            <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                        {% else %}
                            <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                        {% endif %}
                    {% else %}
                        {{ dump.name }}
                    {% endif %}
                    </span>
                    <span class=\"sf-toolbar-file-line\">line {{ dump.line }}</span>

                    {{ dump.data|raw }}
                </div>
            {% endfor %}
            <img src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" onload=\"var h = this.parentNode.innerHTML, rx=/<script>(.*?)<\\/script>/g, s; while (s = rx.exec(h)) {eval(s[1]);};\" />
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.dumpsCount == 0 ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Debug/Profiler/icon.svg') }}</span>
        <strong>Debug</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Dumped Contents</h2>

    {% for dump in collector.getDumps('html') %}
        <div class=\"sf-dump sf-reset\">
            <h3>In
                {% if dump.line %}
                    {% set link = dump.file|file_link(dump.line) %}
                    {% if link %}
                        <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                    {% else %}
                        <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                    {% endif %}
                {% else %}
                    {{ dump.name }}
                {% endif %}
                <small>line {{ dump.line }}</small>

                <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ loop.index0 }}\" data-toggle-alt-content=\"Hide code\">Show code</a>
            </h3>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-{{ loop.index0 }}\">
                <div class=\"trace\">
                    {{ dump.fileExcerpt ? dump.fileExcerpt|raw : dump.file|file_excerpt(dump.line) }}
                </div>
            </div>

            {{ dump.data|raw }}
        </div>
    {% else %}
        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>
    {% endfor %}
{% endblock %}
";
    }
}
