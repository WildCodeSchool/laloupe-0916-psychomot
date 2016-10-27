<?php

/* PsychomotBundle:psychomot:edit.html.twig */
class __TwigTemplate_4e092e62c94df5f83c9d34585a9a47addb8aaf69a98b83251a57447b29fdb017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PsychomotBundle:psychomot:edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa10df6000ff9ad7853dfd1ebb9167b549bfed6f174a3d3e539968a387c578bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa10df6000ff9ad7853dfd1ebb9167b549bfed6f174a3d3e539968a387c578bd->enter($__internal_aa10df6000ff9ad7853dfd1ebb9167b549bfed6f174a3d3e539968a387c578bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychomotBundle:psychomot:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa10df6000ff9ad7853dfd1ebb9167b549bfed6f174a3d3e539968a387c578bd->leave($__internal_aa10df6000ff9ad7853dfd1ebb9167b549bfed6f174a3d3e539968a387c578bd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97316a41e71c20db79bb830da38e82db9a5ad3d7d271283b0c8be7112e0e5009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97316a41e71c20db79bb830da38e82db9a5ad3d7d271283b0c8be7112e0e5009->enter($__internal_97316a41e71c20db79bb830da38e82db9a5ad3d7d271283b0c8be7112e0e5009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
       <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
       <link href=\"http://www.cssscript.com/wp-includes/css/sticky.css\" rel=\"stylesheet\" type=\"text/css\">
       <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/css/style_edit.css"), "html", null, true);
        echo "\">
       <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


   ";
        
        $__internal_97316a41e71c20db79bb830da38e82db9a5ad3d7d271283b0c8be7112e0e5009->leave($__internal_97316a41e71c20db79bb830da38e82db9a5ad3d7d271283b0c8be7112e0e5009_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_6816306fe89ed64b4e788f7cda6d658d94af3647ff7c3eaa8ac97227b07f9c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6816306fe89ed64b4e788f7cda6d658d94af3647ff7c3eaa8ac97227b07f9c2f->enter($__internal_6816306fe89ed64b4e788f7cda6d658d94af3647ff7c3eaa8ac97227b07f9c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
    ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "



    <!-- Début Nav Bar -->

    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <!--<div class=\"container\">-->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Logo</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav \">
                <li class=\"active\"><a class=\"js-scrollTo\" href=\"#page-home\">Accueil <span class=\"sr-only\">(current)</span></a></li>
                <li><a class=\"js-scrollTo\" href=\"#Psychomotricité\">Psychomotricité</a></li>
                <li><a class=\"js-scrollTo\" href=\"#psychomot\">Les psychomotriciennes</a></li>
                <li><a class=\"js-scrollTo\" href=\"#consultation\">Interventions</a></li>
                <li><a class=\"js-scrollTo\" href=\"#page-contact\">Contact</a></li>
                <li><a>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "tel", array()), "html", null, true);
        echo "</a></li>
                <li><input type=\"submit\" value=\"Mise à jour\" /> </li>
            </ul>
            <div>
                ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'errors');
        echo "
            </div>
        </div>
    </nav>

    <!-- Fin Nav Bar -->




    <!--Début Psychomotricité-->

    <div id=\"Psychomotricité\">
        <div class=\"accordion1\">
            <ul>
                <li>
                    <div>
                        <a>

                            <!-- <img src=\"http://www.designchemical.com/lab/jquery/demo/images/section_1.png\"></img>
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> -->
                            <div>
                                <h2 class=\"psyco_titre1\"> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titleDef", array()), "html", null, true);
        echo "</h2>
                                ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleDef", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleDef", array()), 'errors');
        echo "

                                <P>
                                <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "image1", array()), "html", null, true);
        echo "\">


                                    ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file1", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                                    ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file1", array()), 'widget');
        echo "
                                    ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file1", array()), 'errors');
        echo "</P>

                                <p> ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtDef", array()), "html", null, true);
        echo "
                                    </br>
                                ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtDef", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtDef", array()), 'errors');
        echo "</p>

                                <!-- <img class=\"psyco_img1\" src=\"./img/SAM_2242-500_375.JPG\"> -->

                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a>
                            <div>
                                <h2>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titleWho", array()), "html", null, true);
        echo "</h2>
                                ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleWho", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleWho", array()), 'errors');
        echo "
                                <p>
                                    <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "image2", array()), "html", null, true);
        echo "\">

                                    ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file2", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                                    ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file2", array()), 'widget');
        echo "
                                    ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file2", array()), 'errors');
        echo "</P>

                                <p>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtWho", array()), "html", null, true);
        echo "

                                </br>
                                ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtWho", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtWho", array()), 'errors');
        echo "</p>

                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a>
                            <div >
                                <h2>";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titleWhy", array()), "html", null, true);
        echo "</h2>
                                ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleWhy", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleWhy", array()), 'errors');
        echo "
                                <p>
                                    <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "image3", array()), "html", null, true);
        echo "\">
                                    ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file3", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                                    ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file3", array()), 'widget');
        echo "
                                    ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file3", array()), 'errors');
        echo "</P>

                                <p>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtWhy", array()), "html", null, true);
        echo "

                                </br>
                                ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtWhy", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtWhy", array()), 'errors');
        echo "</p>

                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--Fin Psychomotricité-->


<div>
    </br>
</div>

    <!--Début Psychomotriciennes-->

    <div class=\"row\">
        </br>
        <div id=\"psychomot\">
            <H3>";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titlePsy", array()), "html", null, true);
        echo "</H3>

                <P> ";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titlePsy", array()), 'widget');
        echo "</P>
                ";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titlePsy", array()), 'errors');
        echo "

            <div class=\"fond\">
                <div class=\"left col-xs-12 col-sm-6 col-md-6\">
                    <div class=\"col-xs-12\">
                        <!--<img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/Psy2.jpg"), "html", null, true);
        echo "\" alt=\"Margaux Charrier\" />-->
                        <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "image4", array()), "html", null, true);
        echo "\">

                        ";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file4", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                        ";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file4", array()), 'widget');
        echo "
                        ";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file4", array()), 'errors');
        echo "

                        <div class=\"border\">
                            <h3>";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "namePsy1", array()), "html", null, true);
        echo "</h3>
                            <div>
                                ";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namePsy1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namePsy1", array()), 'errors');
        echo "
                            </div>
                            <h5>Psychomotricienne diplomée</h5>
                            <p>";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtPsy1", array()), "html", null, true);
        echo "</p>
                            <div>
                                ";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtPsy1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtPsy1", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"right col-xs-12 col-sm-6 col-md-6\">
                    <div class=\"col-xs-12\">
                        <!--<img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/Psy1.jpg"), "html", null, true);
        echo "\" alt=\"Adeline Florentin\" />-->
                        <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "image5", array()), "html", null, true);
        echo "\">

                        ";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file5", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                        ";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file5", array()), 'widget');
        echo "
                        ";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file5", array()), 'errors');
        echo "

                        <div class=\"border\">
                            <h3>";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "namePsy2", array()), "html", null, true);
        echo "</h3>
                            <div>
                                ";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namePsy2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namePsy2", array()), 'errors');
        echo "
                            </div>
                            <h5>Psychomotricienne diplomée</h5>
                            <p>";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtPsy2", array()), "html", null, true);
        echo "</p>
                            <div>
                                ";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtPsy2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtPsy2", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Fin Psychomotriciennes-->




    <!--Début Intervention-->

    <div class=\"row\">
        <div id=\"consultation\">
            <div class=\"accordion col-xs-12\">
                <ul>
                    <li>
                        <div>
                            <!--<img src=\"img/essais1.jpg\">-->
                            <a>
                                <div class=\"row\">
                                    <div class=\"accordion col-xs-4\">
                                        <h2>";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titleConsult", array()), "html", null, true);
        echo "</h2>
                                        ";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleConsult", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleConsult", array()), 'errors');
        echo "
                                        <p>";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtConsult", array()), "html", null, true);
        echo "</p>
                                        ";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtConsult", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtConsult", array()), 'errors');
        echo "
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <!-- <img src=\"img/essais2.jpg\">-->
                            <a>
                                <div class=\"row\">
                                    <div class=\"accordion col-xs-4\">
                                        <h2>";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titleInterv", array()), "html", null, true);
        echo "</h2>
                                        ";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleInterv", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 249
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleInterv", array()), 'errors');
        echo "
                                        <p>";
        // line 250
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtInterv", array()), "html", null, true);
        echo "</p>
                                        ";
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtInterv", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtInterv", array()), 'errors');
        echo "
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <!--<img src=\"img/essais3.jpg\">-->
                            <a>
                                <div class=\"row\">
                                    <div class=\"accordion col-xs-4\">
                                        <h2>";
        // line 264
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "titleBilan", array()), "html", null, true);
        echo "</h2>
                                        ";
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleBilan", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 266
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleBilan", array()), 'errors');
        echo "
                                        <p>";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "txtBilan", array()), "html", null, true);
        echo "</p>
                                        ";
        // line 268
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtBilan", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 269
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtBilan", array()), 'errors');
        echo "
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Fin Intervention-->




    <!--Début Contact-->

    <div class=\"row\">
        <div id=\"page-contact\">
            <div class=\"essai1 border col-xs-12 col-sm-5\">
                <h3>Nous contacter</h3>
                <div class=\"adress\">
                    <p>";
        // line 292
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "contactName", array()), "html", null, true);
        echo "</p>
                    <div>
                        ";
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 295
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactName", array()), 'errors');
        echo "
                    </div>
                    <p>";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "contactAdress", array()), "html", null, true);
        echo "</p>
                    <div>
                        ";
        // line 299
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactAdress", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 300
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactAdress", array()), 'errors');
        echo "
                    </div>
                    <p>";
        // line 302
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "contactMail", array()), "html", null, true);
        echo "</p>
                    <div>
                        ";
        // line 304
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactMail", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 305
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactMail", array()), 'errors');
        echo "
                    </div>
                    <p>";
        // line 307
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "contactTel", array()), "html", null, true);
        echo "</p>
                    <div>
                        ";
        // line 309
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactTel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 310
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactTel", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"formulaire\">
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Nom :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"text\" value=\"ex : Doe\" id=\"example-text-input\">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Prénom :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"text\" value=\"ex : John\" id=\"example-text-input\">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-email-input\" class=\"col-xs-3 col-form-label\">Email :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"email\" value=\"john.doe@free.fr\" id=\"example-email-input\">
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label for=\"exampleTextarea\" >Votre message :</label>
                        <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"10\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"map col-xs-12 col-sm-6\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2668.900152456399!2d0.1456287153106367!3d48.015638879213896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e286137f09c6d3%3A0x2ebd30be841e5f73!2s38+Rue+Arnold+Dolmetsch%2C+72000+Le+Mans!5e0!3m2!1sfr!2sfr!4v1476182827751\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!--Fin Contact-->
    <div>
    <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "image", array()), "html", null, true);
        echo "\">

    ";
        // line 348
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
    ";
        // line 349
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
    ";
        // line 350
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
    </div>


    <li>
        <a href=\"";
        // line 355
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psychomot_index");
        echo "\">Back to the list</a>
    </li>

    ";
        // line 358
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psychomot"]) ? $context["psychomot"] : $this->getContext($context, "psychomot")), "image", array()), "html", null, true);
        echo "
            <input type=\"submit\" value=\"Edit\" />
            ";
        // line 360
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            ";
        // line 362
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 364
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "



";
        
        $__internal_6816306fe89ed64b4e788f7cda6d658d94af3647ff7c3eaa8ac97227b07f9c2f->leave($__internal_6816306fe89ed64b4e788f7cda6d658d94af3647ff7c3eaa8ac97227b07f9c2f_prof);

    }

    public function getTemplateName()
    {
        return "PsychomotBundle:psychomot:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  722 => 364,  717 => 362,  712 => 360,  707 => 358,  701 => 355,  693 => 350,  689 => 349,  685 => 348,  678 => 346,  639 => 310,  635 => 309,  630 => 307,  625 => 305,  621 => 304,  616 => 302,  611 => 300,  607 => 299,  602 => 297,  597 => 295,  593 => 294,  588 => 292,  562 => 269,  558 => 268,  554 => 267,  550 => 266,  546 => 265,  542 => 264,  527 => 252,  523 => 251,  519 => 250,  515 => 249,  511 => 248,  507 => 247,  492 => 235,  488 => 234,  484 => 233,  480 => 232,  476 => 231,  472 => 230,  443 => 204,  439 => 203,  434 => 201,  428 => 198,  424 => 197,  419 => 195,  413 => 192,  409 => 191,  405 => 190,  398 => 188,  394 => 187,  384 => 180,  380 => 179,  375 => 177,  369 => 174,  365 => 173,  360 => 171,  354 => 168,  350 => 167,  346 => 166,  339 => 164,  335 => 163,  327 => 158,  323 => 157,  318 => 155,  293 => 133,  289 => 132,  283 => 129,  278 => 127,  274 => 126,  270 => 125,  264 => 124,  259 => 122,  255 => 121,  251 => 120,  238 => 110,  234 => 109,  228 => 106,  223 => 104,  219 => 103,  215 => 102,  208 => 100,  203 => 98,  199 => 97,  195 => 96,  180 => 84,  176 => 83,  171 => 81,  166 => 79,  162 => 78,  158 => 77,  150 => 74,  144 => 71,  140 => 70,  136 => 69,  110 => 46,  106 => 45,  99 => 41,  70 => 15,  67 => 14,  61 => 13,  50 => 8,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

   {% block stylesheets  %}

       <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
       <link href=\"http://www.cssscript.com/wp-includes/css/sticky.css\" rel=\"stylesheet\" type=\"text/css\">
       <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/psychomot/css/style_edit.css') }}\">
       <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />


   {% endblock %}

{% block body %}

    {{ form_start(form) }}



    <!-- Début Nav Bar -->

    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <!--<div class=\"container\">-->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Logo</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav \">
                <li class=\"active\"><a class=\"js-scrollTo\" href=\"#page-home\">Accueil <span class=\"sr-only\">(current)</span></a></li>
                <li><a class=\"js-scrollTo\" href=\"#Psychomotricité\">Psychomotricité</a></li>
                <li><a class=\"js-scrollTo\" href=\"#psychomot\">Les psychomotriciennes</a></li>
                <li><a class=\"js-scrollTo\" href=\"#consultation\">Interventions</a></li>
                <li><a class=\"js-scrollTo\" href=\"#page-contact\">Contact</a></li>
                <li><a>{{ psychomot.tel }}</a></li>
                <li><input type=\"submit\" value=\"Mise à jour\" /> </li>
            </ul>
            <div>
                {{ form_widget(form.tel, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.tel) }}
            </div>
        </div>
    </nav>

    <!-- Fin Nav Bar -->




    <!--Début Psychomotricité-->

    <div id=\"Psychomotricité\">
        <div class=\"accordion1\">
            <ul>
                <li>
                    <div>
                        <a>

                            <!-- <img src=\"http://www.designchemical.com/lab/jquery/demo/images/section_1.png\"></img>
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> -->
                            <div>
                                <h2 class=\"psyco_titre1\"> {{ psychomot.titleDef }}</h2>
                                {{ form_widget(form.titleDef, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.titleDef) }}

                                <P>
                                <img src=\"{{ app.request.basepath }}/uploads/{{ psychomot.image1 }}\">


                                    {{form.children.file1.vars.label}}
                                    {{ form_widget(form.file1) }}
                                    {{ form_errors(form.file1) }}</P>

                                <p> {{ psychomot.txtDef }}
                                    </br>
                                {{ form_widget(form.txtDef, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.txtDef) }}</p>

                                <!-- <img class=\"psyco_img1\" src=\"./img/SAM_2242-500_375.JPG\"> -->

                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a>
                            <div>
                                <h2>{{ psychomot.titleWho }}</h2>
                                {{ form_widget(form.titleWho, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.titleWho) }}
                                <p>
                                    <img src=\"{{ app.request.basepath }}/uploads/{{ psychomot.image2 }}\">

                                    {{form.children.file2.vars.label}}
                                    {{ form_widget(form.file2) }}
                                    {{ form_errors(form.file2) }}</P>

                                <p>{{ psychomot.txtWho }}

                                </br>
                                {{ form_widget(form.txtWho, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.txtWho) }}</p>

                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a>
                            <div >
                                <h2>{{ psychomot.titleWhy }}</h2>
                                {{ form_widget(form.titleWhy, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.titleWhy) }}
                                <p>
                                    <img src=\"{{ app.request.basepath }}/uploads/{{ psychomot.image3 }}\">
                                    {{form.children.file3.vars.label}}
                                    {{ form_widget(form.file3) }}
                                    {{ form_errors(form.file3) }}</P>

                                <p>{{ psychomot.txtWhy }}

                                </br>
                                {{ form_widget(form.txtWhy, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.txtWhy) }}</p>

                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--Fin Psychomotricité-->


<div>
    </br>
</div>

    <!--Début Psychomotriciennes-->

    <div class=\"row\">
        </br>
        <div id=\"psychomot\">
            <H3>{{ psychomot.titlePsy }}</H3>

                <P> {{ form_widget(form.titlePsy) }}</P>
                {{ form_errors(form.titlePsy) }}

            <div class=\"fond\">
                <div class=\"left col-xs-12 col-sm-6 col-md-6\">
                    <div class=\"col-xs-12\">
                        <!--<img src=\"{{asset('bundles/psychomot/img/Psy2.jpg') }}\" alt=\"Margaux Charrier\" />-->
                        <img src=\"{{ app.request.basepath }}/uploads/{{ psychomot.image4 }}\">

                        {{form.children.file4.vars.label}}
                        {{ form_widget(form.file4) }}
                        {{ form_errors(form.file4) }}

                        <div class=\"border\">
                            <h3>{{ psychomot.namePsy1 }}</h3>
                            <div>
                                {{ form_widget(form.namePsy1, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.namePsy1) }}
                            </div>
                            <h5>Psychomotricienne diplomée</h5>
                            <p>{{ psychomot.txtPsy1 }}</p>
                            <div>
                                {{ form_widget(form.txtPsy1, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.txtPsy1) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"right col-xs-12 col-sm-6 col-md-6\">
                    <div class=\"col-xs-12\">
                        <!--<img src=\"{{asset('bundles/psychomot/img/Psy1.jpg') }}\" alt=\"Adeline Florentin\" />-->
                        <img src=\"{{ app.request.basepath }}/uploads/{{ psychomot.image5 }}\">

                        {{form.children.file5.vars.label}}
                        {{ form_widget(form.file5) }}
                        {{ form_errors(form.file5) }}

                        <div class=\"border\">
                            <h3>{{ psychomot.namePsy2 }}</h3>
                            <div>
                                {{ form_widget(form.namePsy2, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.namePsy2) }}
                            </div>
                            <h5>Psychomotricienne diplomée</h5>
                            <p>{{ psychomot.txtPsy2 }}</p>
                            <div>
                                {{ form_widget(form.txtPsy2, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.txtPsy2) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Fin Psychomotriciennes-->




    <!--Début Intervention-->

    <div class=\"row\">
        <div id=\"consultation\">
            <div class=\"accordion col-xs-12\">
                <ul>
                    <li>
                        <div>
                            <!--<img src=\"img/essais1.jpg\">-->
                            <a>
                                <div class=\"row\">
                                    <div class=\"accordion col-xs-4\">
                                        <h2>{{ psychomot.titleConsult }}</h2>
                                        {{ form_widget(form.titleConsult, {'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(form.titleConsult) }}
                                        <p>{{ psychomot.txtConsult }}</p>
                                        {{ form_widget(form.txtConsult, {'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(form.txtConsult) }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <!-- <img src=\"img/essais2.jpg\">-->
                            <a>
                                <div class=\"row\">
                                    <div class=\"accordion col-xs-4\">
                                        <h2>{{ psychomot.titleInterv }}</h2>
                                        {{ form_widget(form.titleInterv, {'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(form.titleInterv) }}
                                        <p>{{ psychomot.txtInterv }}</p>
                                        {{ form_widget(form.txtInterv, {'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(form.txtInterv) }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <!--<img src=\"img/essais3.jpg\">-->
                            <a>
                                <div class=\"row\">
                                    <div class=\"accordion col-xs-4\">
                                        <h2>{{ psychomot.titleBilan }}</h2>
                                        {{ form_widget(form.titleBilan, {'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(form.titleBilan) }}
                                        <p>{{ psychomot.txtBilan }}</p>
                                        {{ form_widget(form.txtBilan, {'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(form.txtBilan) }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Fin Intervention-->




    <!--Début Contact-->

    <div class=\"row\">
        <div id=\"page-contact\">
            <div class=\"essai1 border col-xs-12 col-sm-5\">
                <h3>Nous contacter</h3>
                <div class=\"adress\">
                    <p>{{ psychomot.contactName }}</p>
                    <div>
                        {{ form_widget(form.contactName, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.contactName) }}
                    </div>
                    <p>{{ psychomot.contactAdress }}</p>
                    <div>
                        {{ form_widget(form.contactAdress, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.contactAdress) }}
                    </div>
                    <p>{{ psychomot.contactMail }}</p>
                    <div>
                        {{ form_widget(form.contactMail, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.contactMail) }}
                    </div>
                    <p>{{ psychomot.contactTel }}</p>
                    <div>
                        {{ form_widget(form.contactTel, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.contactTel) }}
                    </div>
                </div>
                <div class=\"formulaire\">
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Nom :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"text\" value=\"ex : Doe\" id=\"example-text-input\">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Prénom :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"text\" value=\"ex : John\" id=\"example-text-input\">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-email-input\" class=\"col-xs-3 col-form-label\">Email :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"email\" value=\"john.doe@free.fr\" id=\"example-email-input\">
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label for=\"exampleTextarea\" >Votre message :</label>
                        <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"10\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"map col-xs-12 col-sm-6\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2668.900152456399!2d0.1456287153106367!3d48.015638879213896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e286137f09c6d3%3A0x2ebd30be841e5f73!2s38+Rue+Arnold+Dolmetsch%2C+72000+Le+Mans!5e0!3m2!1sfr!2sfr!4v1476182827751\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!--Fin Contact-->
    <div>
    <img src=\"{{ app.request.basepath }}/uploads/{{ psychomot.image }}\">

    {{form.children.file.vars.label}}
    {{ form_widget(form.file) }}
    {{ form_errors(form.file) }}
    </div>


    <li>
        <a href=\"{{ path('psychomot_index') }}\">Back to the list</a>
    </li>

    {{ psychomot.image }}
            <input type=\"submit\" value=\"Edit\" />
            {{ form_end(form) }}

            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}



{% endblock %}
";
    }
}
