<?php

/* base.html.twig */
class __TwigTemplate_8704d0bed13ab8ddbdcea6089240df7a0cada3da24a3c383fbc1fd52df48c4b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3901a9aa76f2306f99080eecabc84b0f3ac176c64feb72aea6cfcb38f4ce01fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3901a9aa76f2306f99080eecabc84b0f3ac176c64feb72aea6cfcb38f4ce01fb->enter($__internal_3901a9aa76f2306f99080eecabc84b0f3ac176c64feb72aea6cfcb38f4ce01fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>




<body data-spy=\"scroll\">
";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "

    <!--Début footer-->

    <footer>
        <p>
            <a data-toggle=\"modal\" data-target=\"#mentionsLeg\" class=\"ml\">Mentions Légales</a> -
            <a data-toggle=\"modal\" data-target=\"#eleves\" class=\"ml\">Site créé par les élèves de la Wild Code School</a>
        </p>
        <div id=\"mentionsLeg\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Mentions Légales</h4>
                    </div>
                    <div class=\"modal-body1\">
                        <p>Pour une société : raison sociale, forme juridique, adresse de l'établissement ou du siège social (et non pas une simple boîte postale), montant du capital social adresse de courrier électronique et numéro de téléphone</p>
                        <p>Pour une profession réglementée : référence aux règles professionnelles applicables et au titre professionnel nom et adresse de l'autorité ayant délivré l'autorisation d'exercer quand celle-ci est nécessaire nom du responsable de la publication coordonnées de l'hébergeur du site : nom, dénomination ou raison sociale, adresse et numéro de téléphone pour un site marchand, conditions générales de vente (CGV) : prix (exprimé en euros et TTC), frais et date de livraison, modalité de paiement, service après-vente, droit de rétractation, durée de l'offre, coût de la technique de communication à distance numéro de déclaration simplifiée Cnil, dans le cas de collecte de données sur les clients (non obligatoire, mais recommandé).</p>
                        <p>Avant de déposer ou lire un cookie, les éditeurs de sites ou d'applications doivent : informer les internautes de la finalité des cookies, obtenir leur consentement, fournir aux internautes un moyen de les refuser.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"eleves\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/logoWCS.jpg"), "html", null, true);
        echo "\" alt=\"Logo Wild Code School\" class=\"wcs\" >
                    </div>
                    <div class=\"modal-body\">
                        <p class=\"alert alert-info\">Site créé par les élèves de la Wild Code School</p>
                        <p>Ludovic QUOUILLAULT - <a href=\"https://www.linkedin.com/in/ludovic-quouillault-787914125?authType=NAME_SEARCH&authToken=GvDH&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A518843479%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1475741721460%2Ctas%3Alu\" class=\"lienLink\">Lien Linkedin</a></p>
                        <p>Florian GALERNE - <a href=\"https://www.linkedin.com/in/florian-galerne-610525114?authType=NAME_SEARCH&authToken=inXW&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A479052588%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1475741876604%2Ctas%3AFlori\" class=\"lienLink\">Lien Linkedin</a></p>
                        <p>Sylvie RETAT - <a href=\"https://fr.linkedin.com/in/sylvie-rétat-66724bb0\" class=\"lienLink\">Lien Linkedin</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Fin footer-->




";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
<script src=\"https://use.fontawesome.com/fafce886a9.js\"></script>
<script>
    \$(document).ready(function() {
        \$('.js-scrollTo').on('click', function() { // Au clic sur un élément
            var page = \$(this).attr('href'); // Page cible
            var speed = 1000; // Durée de l'animation (en ms)
            \$('html, body').animate( { scrollTop: \$(page).offset().top }, speed ); // Go
            return false;
        });
    });
</script>

</body>

</html>
";
        
        $__internal_3901a9aa76f2306f99080eecabc84b0f3ac176c64feb72aea6cfcb38f4ce01fb->leave($__internal_3901a9aa76f2306f99080eecabc84b0f3ac176c64feb72aea6cfcb38f4ce01fb_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_48ca2cf898d2c35705b5603f9ced44f99e87ada649443867df3a2d1f9db31f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ca2cf898d2c35705b5603f9ced44f99e87ada649443867df3a2d1f9db31f91->enter($__internal_48ca2cf898d2c35705b5603f9ced44f99e87ada649443867df3a2d1f9db31f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Psychomotriciennes_Le_Mans";
        
        $__internal_48ca2cf898d2c35705b5603f9ced44f99e87ada649443867df3a2d1f9db31f91->leave($__internal_48ca2cf898d2c35705b5603f9ced44f99e87ada649443867df3a2d1f9db31f91_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57085529f9e2c85341343cd513be8ff1c6e054e9d6da3e43857880d919cc49d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57085529f9e2c85341343cd513be8ff1c6e054e9d6da3e43857880d919cc49d3->enter($__internal_57085529f9e2c85341343cd513be8ff1c6e054e9d6da3e43857880d919cc49d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link href=\"http://www.cssscript.com/wp-includes/css/sticky.css\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_57085529f9e2c85341343cd513be8ff1c6e054e9d6da3e43857880d919cc49d3->leave($__internal_57085529f9e2c85341343cd513be8ff1c6e054e9d6da3e43857880d919cc49d3_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7138645afdf80b1a876417dffcef336a7ec6c5c7731cd1466ff28bfea58f97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7138645afdf80b1a876417dffcef336a7ec6c5c7731cd1466ff28bfea58f97f->enter($__internal_b7138645afdf80b1a876417dffcef336a7ec6c5c7731cd1466ff28bfea58f97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b7138645afdf80b1a876417dffcef336a7ec6c5c7731cd1466ff28bfea58f97f->leave($__internal_b7138645afdf80b1a876417dffcef336a7ec6c5c7731cd1466ff28bfea58f97f_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7547e214e8acd27036aacad23a542a6038be8b79db179879e95012e730c1f82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7547e214e8acd27036aacad23a542a6038be8b79db179879e95012e730c1f82f->enter($__internal_7547e214e8acd27036aacad23a542a6038be8b79db179879e95012e730c1f82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7547e214e8acd27036aacad23a542a6038be8b79db179879e95012e730c1f82f->leave($__internal_7547e214e8acd27036aacad23a542a6038be8b79db179879e95012e730c1f82f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 70,  165 => 19,  156 => 11,  152 => 10,  148 => 8,  142 => 7,  130 => 6,  106 => 71,  104 => 70,  83 => 52,  49 => 20,  47 => 19,  39 => 13,  37 => 7,  33 => 6,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Psychomotriciennes_Le_Mans{% endblock %}</title>
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link href=\"http://www.cssscript.com/wp-includes/css/sticky.css\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/psychomot/css/style.css') }}\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    {% endblock %}
</head>




<body data-spy=\"scroll\">
{% block body %}{% endblock %}


    <!--Début footer-->

    <footer>
        <p>
            <a data-toggle=\"modal\" data-target=\"#mentionsLeg\" class=\"ml\">Mentions Légales</a> -
            <a data-toggle=\"modal\" data-target=\"#eleves\" class=\"ml\">Site créé par les élèves de la Wild Code School</a>
        </p>
        <div id=\"mentionsLeg\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Mentions Légales</h4>
                    </div>
                    <div class=\"modal-body1\">
                        <p>Pour une société : raison sociale, forme juridique, adresse de l'établissement ou du siège social (et non pas une simple boîte postale), montant du capital social adresse de courrier électronique et numéro de téléphone</p>
                        <p>Pour une profession réglementée : référence aux règles professionnelles applicables et au titre professionnel nom et adresse de l'autorité ayant délivré l'autorisation d'exercer quand celle-ci est nécessaire nom du responsable de la publication coordonnées de l'hébergeur du site : nom, dénomination ou raison sociale, adresse et numéro de téléphone pour un site marchand, conditions générales de vente (CGV) : prix (exprimé en euros et TTC), frais et date de livraison, modalité de paiement, service après-vente, droit de rétractation, durée de l'offre, coût de la technique de communication à distance numéro de déclaration simplifiée Cnil, dans le cas de collecte de données sur les clients (non obligatoire, mais recommandé).</p>
                        <p>Avant de déposer ou lire un cookie, les éditeurs de sites ou d'applications doivent : informer les internautes de la finalité des cookies, obtenir leur consentement, fournir aux internautes un moyen de les refuser.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"eleves\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <img src=\"{{ asset('bundles/psychomot/img/logoWCS.jpg') }}\" alt=\"Logo Wild Code School\" class=\"wcs\" >
                    </div>
                    <div class=\"modal-body\">
                        <p class=\"alert alert-info\">Site créé par les élèves de la Wild Code School</p>
                        <p>Ludovic QUOUILLAULT - <a href=\"https://www.linkedin.com/in/ludovic-quouillault-787914125?authType=NAME_SEARCH&authToken=GvDH&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A518843479%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1475741721460%2Ctas%3Alu\" class=\"lienLink\">Lien Linkedin</a></p>
                        <p>Florian GALERNE - <a href=\"https://www.linkedin.com/in/florian-galerne-610525114?authType=NAME_SEARCH&authToken=inXW&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A479052588%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1475741876604%2Ctas%3AFlori\" class=\"lienLink\">Lien Linkedin</a></p>
                        <p>Sylvie RETAT - <a href=\"https://fr.linkedin.com/in/sylvie-rétat-66724bb0\" class=\"lienLink\">Lien Linkedin</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Fin footer-->




{% block javascripts %}{% endblock %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
<script src=\"https://use.fontawesome.com/fafce886a9.js\"></script>
<script>
    \$(document).ready(function() {
        \$('.js-scrollTo').on('click', function() { // Au clic sur un élément
            var page = \$(this).attr('href'); // Page cible
            var speed = 1000; // Durée de l'animation (en ms)
            \$('html, body').animate( { scrollTop: \$(page).offset().top }, speed ); // Go
            return false;
        });
    });
</script>

</body>

</html>
";
    }
}
