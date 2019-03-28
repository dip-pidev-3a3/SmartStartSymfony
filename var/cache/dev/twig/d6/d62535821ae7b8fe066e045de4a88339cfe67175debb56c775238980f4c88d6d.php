<?php

/* @Blog/BlogViews/BlogManagment.html.twig */
class __TwigTemplate_c57a7d4c5e929b3aa763a1e9dce7079dd9a8a548407f634e799f9c2bd77896ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "@Blog/BlogViews/BlogManagment.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "SmartStartBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/BlogViews/BlogManagment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/BlogViews/BlogManagment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog Managment";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Title Page -->
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-banner.png"), "html", null, true);
        echo ");\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>
    <br><br>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-sm-3\"><!--left col-->

                <ul class=\"list-group\">
                    <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Profile</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>First Post</strong></span> 2.13.2014</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Last Post</strong></span> Yesterday</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Username</strong></span>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "</li>

                </ul>
                <br>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Number Of Posts Per Category</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>First Post</strong></span> 2.13.2014</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Last Post</strong></span> Yesterday</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Real name</strong></span> Joseph Doe</li>

                </ul>


                <br>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Numbers</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Likes</strong></span> 0</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Comments</strong></span> 0</li>


                </ul>


            </div><!--/col-3-->
            <div class=\"col-sm-9\">



                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"home\">
                        <div id=\"carousel-example-2\" class=\"carousel slide carousel-fade z-depth-1-half\" data-ride=\"carousel\">
                            <!--Indicators-->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example-2\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example-2\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example-2\" data-slide-to=\"2\"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->

                            <!--/.Slides-->
                            <!--Controls-->
                            <a class=\"carousel-control-prev\" href=\"#carousel-example-2\" role=\"button\" data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carousel-example-2\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>



                        <h4>Your Posts</h4>
                        <br><hr>
                         ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["v"] ?? $this->getContext($context, "v")));
        foreach ($context['_seq'] as $context["_key"] => $context["blogposts"]) {
            // line 80
            echo "                        <div class=\"media\">
                            <img class=\"mr-3\" src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["blogposts"], "image", []))), "html", null, true);
            echo "\" width=\"64\" height=\"64\" alt=\"Generic placeholder image\">
                            <div class=\"media-body\">
                                <h5 class=\"mt-0\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "articleTitle", []), "html", null, true);
            echo "</h5>
                                ";
            // line 84
            echo $this->getAttribute($context["blogposts"], "articleContent", []);
            echo "
                            </div>
                            <div class=\"right\" st>
                                <i class=\"far fa-calendar\" style=\"color: midnightblue;\"></i> ";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blogposts"], "postDate", []), "m/d/Y"), "html", null, true);
            echo "
                                <br>
                                <i class=\"far fa-thumbs-up\" style=\"color:midnightblue\"></i>
                                <span class=\"js-likes\" style=\"color: midnightblue\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postLikesCount", []), "html", null, true);
            echo "</span>
                                <span class=\"js-label\" style=\"color: midnightblue\">Like</span>
                                <br>
                                <i class=\"fas fa-comments\" style=\"color:midnightblue\"></i> ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postCommentCount", []), "html", null, true);
            echo " Comments
                            </div>
                        </div>
                             <br><hr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogposts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
                    </div><!--/tab-pane-->
                </div>
            </div>

        </div><!--/col-9-->
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/BlogViews/BlogManagment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 98,  185 => 93,  179 => 90,  173 => 87,  167 => 84,  163 => 83,  158 => 81,  155 => 80,  151 => 79,  89 => 20,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SmartStartBase.html.twig\" %}
{% block title %}Blog Managment{% endblock %}
{% block body %}
    <!-- Title Page -->
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url({{ asset('assets/images/blog-banner.png') }});\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>
    <br><br>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-sm-3\"><!--left col-->

                <ul class=\"list-group\">
                    <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Profile</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>First Post</strong></span> 2.13.2014</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Last Post</strong></span> Yesterday</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Username</strong></span>{{ app.user.username }}</li>

                </ul>
                <br>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Number Of Posts Per Category</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>First Post</strong></span> 2.13.2014</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Last Post</strong></span> Yesterday</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Real name</strong></span> Joseph Doe</li>

                </ul>


                <br>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\" style=\"color: midnightblue;font-size: small;font-family: Montserrat-Bold\">Numbers</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Likes</strong></span> 0</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Comments</strong></span> 0</li>


                </ul>


            </div><!--/col-3-->
            <div class=\"col-sm-9\">



                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"home\">
                        <div id=\"carousel-example-2\" class=\"carousel slide carousel-fade z-depth-1-half\" data-ride=\"carousel\">
                            <!--Indicators-->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example-2\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example-2\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example-2\" data-slide-to=\"2\"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->

                            <!--/.Slides-->
                            <!--Controls-->
                            <a class=\"carousel-control-prev\" href=\"#carousel-example-2\" role=\"button\" data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carousel-example-2\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>



                        <h4>Your Posts</h4>
                        <br><hr>
                         {% for blogposts in v %}
                        <div class=\"media\">
                            <img class=\"mr-3\" src=\"{{ asset('uploads/images/' ~ blogposts.image) }}\" width=\"64\" height=\"64\" alt=\"Generic placeholder image\">
                            <div class=\"media-body\">
                                <h5 class=\"mt-0\">{{ blogposts.articleTitle }}</h5>
                                {{ blogposts.articleContent|raw }}
                            </div>
                            <div class=\"right\" st>
                                <i class=\"far fa-calendar\" style=\"color: midnightblue;\"></i> {{ blogposts.postDate|date(\"m/d/Y\")}}
                                <br>
                                <i class=\"far fa-thumbs-up\" style=\"color:midnightblue\"></i>
                                <span class=\"js-likes\" style=\"color: midnightblue\">{{ blogposts.postLikesCount }}</span>
                                <span class=\"js-label\" style=\"color: midnightblue\">Like</span>
                                <br>
                                <i class=\"fas fa-comments\" style=\"color:midnightblue\"></i> {{ blogposts.postCommentCount }} Comments
                            </div>
                        </div>
                             <br><hr>
                        {% endfor %}

                    </div><!--/tab-pane-->
                </div>
            </div>

        </div><!--/col-9-->
    </div>


{% endblock %}", "@Blog/BlogViews/BlogManagment.html.twig", "C:\\wamp\\www\\SmartStartSymfony-push\\src\\BlogBundle\\Resources\\views\\BlogViews\\BlogManagment.html.twig");
    }
}
