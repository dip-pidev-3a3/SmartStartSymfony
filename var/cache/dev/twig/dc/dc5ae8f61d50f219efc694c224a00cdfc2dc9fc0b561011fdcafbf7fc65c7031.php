<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_10f7d023ff40be37b38b4c5f41a295a76a01f1e64bbb03139486300dc6182cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "


<!DOCTYPE html>
<html lang=\"en\" >
";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "
<head>
    <meta charset=\"UTF-8\">
    <title>SmartStart Login </title>

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"), "html", null, true);
        echo "\">

    <link rel='stylesheet' href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900"), "html", null, true);
        echo "\">
    <link rel='stylesheet' href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fosassets/css/style.css"), "html", null, true);
        echo "\">


</head>


<body background=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fosassets/background.jpg"), "html", null, true);
        echo "\">


<!-- Mixins-->
<!-- Pen Title-->
";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "<!-- Portfolio--><a id=\"portfolio\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://andytran.me/"), "html", null, true);
        echo "\" title=\"View my portfolio!\"><i class=\"fa fa-link\"></i></a>
<!-- CodePen--><a id=\"codepen\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://codepen.io/andytran/"), "html", null, true);
        echo "\" title=\"Follow me!\"><i class=\"fa fa-codepen\"></i></a>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"), "html", null, true);
        echo "\"></script>



<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fosassets/js/index.js"), "html", null, true);
        echo "\"></script>




</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "<div class=\"pen-title\">
</div>
<div class=\"container\">
    <div class=\"card\"></div>
    <div class=\"card\">
        <h1 class=\"title\">Login</h1>

        ";
        // line 36
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 55
        echo "    </div>
    <div class=\"card alt\">
        <div class=\"toggle\"></div>
        <h1 class=\"title\">Register
            <div class=\"close\"></div>
        </h1>
        <form>
            <div class=\"input-container\">
                <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                <label for=\"#{label}\">Username</label>
                <div class=\"bar\"></div>
            </div>
            <div class=\"input-container\">
                <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                <label for=\"#{label}\">Password</label>
                <div class=\"bar\"></div>
            </div>
            <div class=\"input-container\">
                <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                <label for=\"#{label}\">Repeat Password</label>
                <div class=\"bar\"></div>
            </div>
            <div class=\"button-container\">
                <button><span>Next</span></button>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 37
        echo "
        <form>
            <div class=\"input-container\">
                <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                <label for=\"#{label}\">Username</label>
                <div class=\"bar\"></div>
            </div>
            <div class=\"input-container\">
                <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                <label for=\"#{label}\">Password</label>
                <div class=\"bar\"></div>
            </div>
            <div class=\"button-container\">
                <button><span>Go</span></button>
            </div>
            <div class=\"footer\"><a href=\"#\">Forgot your password?</a></div>
        </form>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 37,  187 => 36,  149 => 55,  147 => 36,  138 => 29,  129 => 28,  112 => 6,  93 => 90,  86 => 86,  82 => 85,  77 => 84,  75 => 28,  67 => 23,  58 => 17,  53 => 15,  49 => 14,  44 => 12,  37 => 7,  35 => 6,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("


<!DOCTYPE html>
<html lang=\"en\" >
{% block title %}{% endblock %}

<head>
    <meta charset=\"UTF-8\">
    <title>SmartStart Login </title>

    <link rel=\"stylesheet\" href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css') }}\">

    <link rel='stylesheet' href=\"{{ asset('https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900') }}\">
    <link rel='stylesheet' href=\"{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('fosassets/css/style.css')}}\">


</head>


<body background=\"{{ asset('fosassets/background.jpg') }}\">


<!-- Mixins-->
<!-- Pen Title-->
{% block content %}
<div class=\"pen-title\">
</div>
<div class=\"container\">
    <div class=\"card\"></div>
    <div class=\"card\">
        <h1 class=\"title\">Login</h1>

        {% block fos_user_content %}

        <form>
            <div class=\"input-container\">
                <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                <label for=\"#{label}\">Username</label>
                <div class=\"bar\"></div>
            </div>
            <div class=\"input-container\">
                <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                <label for=\"#{label}\">Password</label>
                <div class=\"bar\"></div>
            </div>
            <div class=\"button-container\">
                <button><span>Go</span></button>
            </div>
            <div class=\"footer\"><a href=\"#\">Forgot your password?</a></div>
        </form>
        {% endblock %}
    </div>
    <div class=\"card alt\">
        <div class=\"toggle\"></div>
        <h1 class=\"title\">Register
            <div class=\"close\"></div>
        </h1>
        <form>
            <div class=\"input-container\">
                <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                <label for=\"#{label}\">Username</label>
                <div class=\"bar\"></div>
            </div>
            <div class=\"input-container\">
                <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                <label for=\"#{label}\">Password</label>
                <div class=\"bar\"></div>
            </div>
            <div class=\"input-container\">
                <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                <label for=\"#{label}\">Repeat Password</label>
                <div class=\"bar\"></div>
            </div>
            <div class=\"button-container\">
                <button><span>Next</span></button>
            </div>
        </form>
    </div>
</div>
{% endblock %}
<!-- Portfolio--><a id=\"portfolio\" href=\"{{ asset('http://andytran.me/') }}\" title=\"View my portfolio!\"><i class=\"fa fa-link\"></i></a>
<!-- CodePen--><a id=\"codepen\" href=\"{{ asset('https://codepen.io/andytran/') }}\" title=\"Follow me!\"><i class=\"fa fa-codepen\"></i></a>
<script src=\"{{ asset('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}\"></script>



<script src=\"{{ asset('fosassets/js/index.js') }}\"></script>




</body>

</html>
", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\smartstart\\vendor\\friendsofsymfony\\user-bundle/Resources/views/layout.html.twig");
    }
}
