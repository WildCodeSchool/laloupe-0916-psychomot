<?php

/* PsychomotBundle:psychomot:index.html.twig */
class __TwigTemplate_3b11b210654f720ece2122f293ce932bb701082b22943073a6c74e127a6b39e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PsychomotBundle:psychomot:index.html.twig", 1);
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
        $__internal_affc4734ac1ed61f74c1f485194e0c15cda7378557fcc2f017744d929e80344d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affc4734ac1ed61f74c1f485194e0c15cda7378557fcc2f017744d929e80344d->enter($__internal_affc4734ac1ed61f74c1f485194e0c15cda7378557fcc2f017744d929e80344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychomotBundle:psychomot:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_affc4734ac1ed61f74c1f485194e0c15cda7378557fcc2f017744d929e80344d->leave($__internal_affc4734ac1ed61f74c1f485194e0c15cda7378557fcc2f017744d929e80344d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_543f6147047196b138614da7ac3c1804606e11dff2b10fa3f7ee23f802af067d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543f6147047196b138614da7ac3c1804606e11dff2b10fa3f7ee23f802af067d->enter($__internal_543f6147047196b138614da7ac3c1804606e11dff2b10fa3f7ee23f802af067d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <tbody>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["psychomots"]) ? $context["psychomots"] : $this->getContext($context, "psychomots")));
        foreach ($context['_seq'] as $context["_key"] => $context["psychomot"]) {
            // line 7
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
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "tel", array()), "html", null, true);
            echo "</a></li>
                </ul>
            </div>
        </nav>

        <!-- Fin Nav Bar -->


        <!--Accueil-->

        <div id=\"page-home\">
            <div id=\"title\">
                <hr/>
                <h1>CABINET DE PSYCHOMOTRICITE
                    <br/><span class=\"home-adresse\">38 rue Arnold Dolmetsch - 72000 Le Mans</span>
                </h1>
                <hr/>
            </div>
        </div>

        <!--Fin Accueil-->



        <!--Début Psychomotricité-->

        <div id=\"Psychomotricité\">
            <div class=\"accordion1\">
                <ul>
                    <li>
                        <div>
                            <a href=\"#Psychomotricité\">
                                <!-- <img src=\"http://www.designchemical.com/lab/jquery/demo/images/section_1.png\"></img>
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> -->
                                <div>
                                    <h2 class=\"psyco_titre1\"> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "titleDef", array()), "html", null, true);
            echo "</h2>
                                    <img class=\"psyco_img1\" src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/1_questcequecest_500-575.jpg"), "html", null, true);
            echo "\">
                                    <p class=\"psyco_texte1\"> ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "txtDef", array()), "html", null, true);
            echo " </p>
                                </div>
                                <div>
                                    <!-- <img class=\"psyco_img1\" src=\"./img/SAM_2242-500_375.JPG\"> -->

                                    <!-- <img class=\"psyco_img1\" src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/1_questcequecest_500-575.jpg"), "html", null, true);
            echo "\"> -->
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href=\"#Psychomotricité\">
                                <h2>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "titleWho", array()), "html", null, true);
            echo "</h2>
                                <img class=\"psyco_img1\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/1_Pour_qui.jpg"), "html", null, true);
            echo "\">
                                <p>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "txtWho", array()), "html", null, true);
            echo "</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href=\"#Psychomotricité\">
                                <h2>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "titleWhy", array()), "html", null, true);
            echo "</h2>
                                <img class=\"psyco_img1\" src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/1_Pourquoi.jpg"), "html", null, true);
            echo "\">
                                <p>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "txtWhy", array()), "html", null, true);
            echo "
                                </p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!--Fin Psychomotricité-->




        <!--Début Psychomotriciennes-->

        <div class=\"row\">
            <div id=\"psychomot\" class=\"fond\">
                <div class=\"left col-xs-12 col-sm-6 col-md-6\">
                    <div class=\"col-xs-12\">
                        <img src=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/Psy2.jpg"), "html", null, true);
            echo "\" alt=\"Margaux Charrier\" />
                        <div class=\"border\">
                            <h3>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "namePsy1", array()), "html", null, true);
            echo "</h3>
                            <h5>Psychomotricienne diplomée</h5>
                            <p>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "txtPsy1", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
                <div class=\"right col-xs-12 col-sm-6 col-md-6\">
                    <div class=\"col-xs-12\">
                        <img src=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/Psy1.jpg"), "html", null, true);
            echo "\" alt=\"Adeline Florentin\" />
                        <div class=\"border\">
                            <h3>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "namePsy2", array()), "html", null, true);
            echo "</h3>
                            <h5>Psychomotricienne diplomée</h5>
                            <p>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "txtPsy2", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Fin Psychomotriciennes-->




        <!--Début Intervention-->

        <div class=\"row\" id=\"consultation\">
            <div class=\"accordion col-xs-12\">
                <ul>
                    <li>
                        <div>
                            <a>
                                <div class=\"row\">
                                    <div class=\"accordion col-xs-4\">
                                        <h2>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "titleConsult", array()), "html", null, true);
            echo "</h2>
                                        <p>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "txtConsult", array()), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a>
                                <div class=\"row\">
                                    <div class=\"accordion col-xs-4\">
                                        <h2>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "titleInterv", array()), "html", null, true);
            echo "</h2>
                                        <p>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "txtInterv", array()), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div>
                            <a>
                                <div class=\"row\">
                                    <div class=\"accordion col-xs-4\">
                                        <h2>";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "titleBilan", array()), "html", null, true);
            echo "</h2>
                                        <p>";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "txtBilan", array()), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!--Fin Interventions-->



    <!--Début Contact-->

    <div class=\"row\">
        <div id=\"page-contact\">
            <div class=\"essai1 border col-xs-12 col-sm-5\">
                <h3>Nous contacter</h3>
                <div class=\"adress\">
                    <p>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "contactName", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "contactAdress", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "contactMail", array()), "html", null, true);
            echo "</p>
                    <p>";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["psychomot"], "contactTel", array()), "html", null, true);
            echo "</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['psychomot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psychomot_mail");
        echo "\" method=\"post\">
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Prénom :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"text\" value=\"ex : John\" name=\"firstname\" id=\"example-text-input\">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Nom :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"text\" value=\"ex : Doe\" name=\"lastname\" id=\"example-text-input\">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-email-input\" class=\"col-xs-3 col-form-label\">Email :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"email\" value=\"john.doe@free.fr\" name=\"email\" id=\"example-email-input\">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Objet :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"text\" value=\"ex : Prise de rendez-vous\" name=\"object\" id=\"example-text-input\">
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label for=\"exampleTextarea\" >Votre message :</label>
                        <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"10\" name=\"message\"></textarea>
                    </div>
                    <div class=\"col-xs-offset-5 col-xs-2 send\">
                        <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-succcess\">
                    </div>
                </form>
            </div>


            <div class=\"map col-xs-12 col-sm-6\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2668.900152456399!2d0.1456287153106367!3d48.015638879213896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e286137f09c6d3%3A0x2ebd30be841e5f73!2s38+Rue+Arnold+Dolmetsch%2C+72000+Le+Mans!5e0!3m2!1sfr!2sfr!4v1476182827751\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Fin Contact -->

        <br/>
        <br/>
   ";
        // line 249
        echo "



    <!--<ul>
        <li>
            <a href=\"";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psychomot_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>-->
";
        
        $__internal_543f6147047196b138614da7ac3c1804606e11dff2b10fa3f7ee23f802af067d->leave($__internal_543f6147047196b138614da7ac3c1804606e11dff2b10fa3f7ee23f802af067d_prof);

    }

    public function getTemplateName()
    {
        return "PsychomotBundle:psychomot:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 255,  379 => 249,  329 => 202,  320 => 199,  316 => 198,  312 => 197,  308 => 196,  284 => 175,  280 => 174,  265 => 162,  261 => 161,  247 => 150,  243 => 149,  218 => 127,  213 => 125,  208 => 123,  199 => 117,  194 => 115,  189 => 113,  166 => 93,  162 => 92,  158 => 91,  148 => 84,  144 => 83,  140 => 82,  129 => 74,  121 => 69,  117 => 68,  113 => 67,  74 => 31,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}

    <tbody>
    {% for psychomot in psychomots %}


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
                </ul>
            </div>
        </nav>

        <!-- Fin Nav Bar -->


        <!--Accueil-->

        <div id=\"page-home\">
            <div id=\"title\">
                <hr/>
                <h1>CABINET DE PSYCHOMOTRICITE
                    <br/><span class=\"home-adresse\">38 rue Arnold Dolmetsch - 72000 Le Mans</span>
                </h1>
                <hr/>
            </div>
        </div>

        <!--Fin Accueil-->



        <!--Début Psychomotricité-->

        <div id=\"Psychomotricité\">
            <div class=\"accordion1\">
                <ul>
                    <li>
                        <div>
                            <a href=\"#Psychomotricité\">
                                <!-- <img src=\"http://www.designchemical.com/lab/jquery/demo/images/section_1.png\"></img>
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> -->
                                <div>
                                    <h2 class=\"psyco_titre1\"> {{ psychomot.titleDef }}</h2>
                                    <img class=\"psyco_img1\" src=\"{{asset('bundles/psychomot/img/1_questcequecest_500-575.jpg')}}\">
                                    <p class=\"psyco_texte1\"> {{ psychomot.txtDef }} </p>
                                </div>
                                <div>
                                    <!-- <img class=\"psyco_img1\" src=\"./img/SAM_2242-500_375.JPG\"> -->

                                    <!-- <img class=\"psyco_img1\" src=\"{{asset('bundles/psychomot/img/1_questcequecest_500-575.jpg')}}\"> -->
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href=\"#Psychomotricité\">
                                <h2>{{ psychomot.titleWho }}</h2>
                                <img class=\"psyco_img1\" src=\"{{asset('bundles/psychomot/img/1_Pour_qui.jpg')}}\">
                                <p>{{ psychomot.txtWho }}</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href=\"#Psychomotricité\">
                                <h2>{{ psychomot.titleWhy }}</h2>
                                <img class=\"psyco_img1\" src=\"{{asset('bundles/psychomot/img/1_Pourquoi.jpg')}}\">
                                <p>{{ psychomot.txtWhy }}
                                </p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!--Fin Psychomotricité-->




        <!--Début Psychomotriciennes-->

        <div class=\"row\">
            <div id=\"psychomot\" class=\"fond\">
                <div class=\"left col-xs-12 col-sm-6 col-md-6\">
                    <div class=\"col-xs-12\">
                        <img src=\"{{asset('bundles/psychomot/img/Psy2.jpg') }}\" alt=\"Margaux Charrier\" />
                        <div class=\"border\">
                            <h3>{{ psychomot.namePsy1 }}</h3>
                            <h5>Psychomotricienne diplomée</h5>
                            <p>{{ psychomot.txtPsy1 }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"right col-xs-12 col-sm-6 col-md-6\">
                    <div class=\"col-xs-12\">
                        <img src=\"{{asset('bundles/psychomot/img/Psy1.jpg') }}\" alt=\"Adeline Florentin\" />
                        <div class=\"border\">
                            <h3>{{ psychomot.namePsy2 }}</h3>
                            <h5>Psychomotricienne diplomée</h5>
                            <p>{{ psychomot.txtPsy2 }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Fin Psychomotriciennes-->




        <!--Début Intervention-->

        <div class=\"row\" id=\"consultation\">
            <div class=\"accordion col-xs-12\">
                <ul>
                    <li>
                        <div>
                            <a>
                                <div class=\"row\">
                                    <div class=\"accordion col-xs-4\">
                                        <h2>{{ psychomot.titleConsult }}</h2>
                                        <p>{{ psychomot.txtConsult }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a>
                                <div class=\"row\">
                                    <div class=\"accordion col-xs-4\">
                                        <h2>{{ psychomot.titleInterv }}</h2>
                                        <p>{{ psychomot.txtInterv }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div>
                            <a>
                                <div class=\"row\">
                                    <div class=\"accordion col-xs-4\">
                                        <h2>{{ psychomot.titleBilan }}</h2>
                                        <p>{{ psychomot.txtBilan }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!--Fin Interventions-->



    <!--Début Contact-->

    <div class=\"row\">
        <div id=\"page-contact\">
            <div class=\"essai1 border col-xs-12 col-sm-5\">
                <h3>Nous contacter</h3>
                <div class=\"adress\">
                    <p>{{ psychomot.contactName }}</p>
                    <p>{{ psychomot.contactAdress }}</p>
                    <p>{{ psychomot.contactMail }}</p>
                    <p>{{ psychomot.contactTel }}</p>
                </div>
                {% endfor %}
                <form action=\"{{  path('psychomot_mail') }}\" method=\"post\">
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Prénom :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"text\" value=\"ex : John\" name=\"firstname\" id=\"example-text-input\">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Nom :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"text\" value=\"ex : Doe\" name=\"lastname\" id=\"example-text-input\">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-email-input\" class=\"col-xs-3 col-form-label\">Email :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"email\" value=\"john.doe@free.fr\" name=\"email\" id=\"example-email-input\">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Objet :</label>
                        <div class=\"col-xs-9\">
                            <input class=\"form-control\" type=\"text\" value=\"ex : Prise de rendez-vous\" name=\"object\" id=\"example-text-input\">
                        </div>
                    </div>
                    <div class=\"form-group \">
                        <label for=\"exampleTextarea\" >Votre message :</label>
                        <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"10\" name=\"message\"></textarea>
                    </div>
                    <div class=\"col-xs-offset-5 col-xs-2 send\">
                        <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-succcess\">
                    </div>
                </form>
            </div>


            <div class=\"map col-xs-12 col-sm-6\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2668.900152456399!2d0.1456287153106367!3d48.015638879213896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e286137f09c6d3%3A0x2ebd30be841e5f73!2s38+Rue+Arnold+Dolmetsch%2C+72000+Le+Mans!5e0!3m2!1sfr!2sfr!4v1476182827751\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Fin Contact -->

        <br/>
        <br/>
   {#<img src=\"{{ app.request.basepath }}/uploads/{{ psychomot.image }}\">#}




    <!--<ul>
        <li>
            <a href=\"{{ path('psychomot_new') }}\">Create a new entry</a>
        </li>
    </ul>-->
{% endblock %}";
    }
}
