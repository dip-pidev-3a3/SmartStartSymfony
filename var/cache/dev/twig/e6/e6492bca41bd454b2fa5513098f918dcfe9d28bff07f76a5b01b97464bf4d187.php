<?php

/* @Blog/BlogViews/DetailBlog.html.twig */
class __TwigTemplate_c31196e79329c75d7268f6064de0df288b6940f40ff0421667e3da496128956d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "@Blog/BlogViews/DetailBlog.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/BlogViews/DetailBlog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/BlogViews/DetailBlog.html.twig"));

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

        echo "Detail blog";
        
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
        echo "
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-banner.png"), "html", null, true);
        echo ");\">
        <h2 class=\"tit6 t-center\">
            Blog
        </h2>
    </section>


    <!-- Content page -->
    <section>
        <div class=\"bread-crumb bo5-b p-t-17 p-b-17\">
            <div class=\"container\">
                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_ListPosts");
        echo "\" class=\"txt27\">
                    Home
                </a>

                <span class=\"txt29 m-l-10 m-r-10\">/</span>

                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_ListPosts");
        echo "\" class=\"txt27\">
                    Blog
                </a>

                <span class=\"txt29 m-l-10 m-r-10\">/</span>
                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_ListPosts");
        echo "\" class=\"txt27\">
                    Detail
                </a>

                <span class=\"txt29\">
                    ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "articleTitle", []), "html", null, true);
        echo "
\t\t\t\t</span>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-md-8 col-lg-9\">
                    <div class=\"p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md\">
                        <!-- Block4 -->
                        <div class=\"blo4 p-b-63\">
                            <!-- - -->
                            <div class=\"pic-blo4 hov-img-zoom bo-rad-10 pos-relative\">
                                <a href=\"blog-detail.html\">
                                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "image", []))), "html", null, true);
        echo "\" alt=\"IMG-BLOG\" width=\"600\" height=\"427\">
                                </a>

                                <div class=\"date-blo4 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t<span class=\"txt30 m-b-4\">


\t\t\t\t\t\t\t\t\t</span>

                                    <span class=\"txt31\">
\t\t\t\t\t\t\t\t\t\t";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "postDate", []), "m/d/Y"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</span>
                                </div>
                            </div>

                            <!-- - -->
                            <div class=\"text-blo4 p-t-33\">

                                <h4 class=\"p-b-16\">
                                    <a href=\"blog-detail.html\" class=\"tit9\" style=\"word-wrap:break-word;font-family: Montserrat-Bold\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "articleTitle", []), "html", null, true);
        echo "</a>
                                   <p style=\"word-wrap:break-word\">Post :";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "postContent", []), "html", null, true);
        echo "</p>
                                </h4>

                                <div class=\"txt32 flex-w p-b-24\">
\t\t\t\t\t\t\t\t\t<span style=\"font-family: Montserrat-Bold\">
\t\t\t\t\t\t\t\t\t\t";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "author", []), "username", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span style=\"font-family: Montserrat-Bold\">
\t\t\t\t\t\t\t\t\t\t";
        // line 76
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "postDate", []), "m/d/Y"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span style=\"font-family: Montserrat-Bold\">
\t\t\t\t\t\t\t\t\t\t";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "postType", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span style=\"font-family: Montserrat-Bold\">
\t\t\t\t\t\t\t\t\t\t";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "postCommentCount", []), "html", null, true);
        echo " Comments
\t\t\t\t\t\t\t\t\t</span>
                                </div>


                            </div>


                        <p style=\"word-wrap:break-word\">";
        // line 94
        echo $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "articleContent", []);
        echo " </p>

                            <hr>
                            <div class=\"blo4 p-b-63\">
                                <a href=\"\" class=\"tit9\"></a>
                            </div>




                            <div class=\"text-blo4 p-t-33\" style=\"word-wrap:break-word\">

                                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["com"]) ? $context["com"] : $this->getContext($context, "com")));
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 107
            echo "                                    <div class=\"media\" style=\"word-wrap:break-word\">


                                        <div class=\"media-body\" style=\"word-wrap:break-word\">
                                            <h4 class=\"media-heading\" style=\"font-family: Montserrat-Bold\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["comments"], "commentAuthor", []), "html", null, true);
            echo " <small><i style=\"font-family: Montserrat-SemiBold;font-size: 16px\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comments"], "commentDate", []), "l jS  F Y h:i:s A"), "html", null, true);
            echo "</i></small> ";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []) != null)) {
                // line 112
                echo "                                                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "id", []) == $this->getAttribute($this->getAttribute($context["comments"], "commentAuthor", []), "id", []))) {
                    // line 113
                    echo "                                                        <!-- Modal HTML -->
                                                        <div id=\"myModal\" class=\"modal fade\">
                                                            <div class=\"modal-dialog modal-confirm\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <div class=\"icon-box\">
                                                                            <i class=\"material-icons\">&#xE5CD;</i>
                                                                        </div>
                                                                        <h4 class=\"modal-title\">Are you sure?</h4>
                                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                                    </div>
                                                                    <div class=\"modal-body\">
                                                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\">Cancel</button>
                                                                        <a href=\"";
                    // line 129
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_deleteComment", ["commentId" => $this->getAttribute($context["comments"], "commentId", [])]), "html", null, true);
                    echo "\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"right\">
                                                        <a href=\"#myModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" title=\"Delete\"></i></a>

                                                        <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" title=\"Edit\"></i></a>
                                                        </div>
                                                    ";
                }
                // line 140
                echo "                                                ";
            }
            echo "</h4>

                                                ";
            // line 142
            echo $this->getAttribute($context["comments"], "commentContent", []);
            echo ".
                                        </div>
                                    </div>
                                    <hr />



                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                            </div>

                        </div>






";
        // line 159
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []) != null)) {
            // line 160
            echo "                        <!-- Leave a comment -->

                            <h4 class=\"txt33 p-b-14\">
                                Leave a Comment
                            </h4>

                            <p>

                            </p>
                            ";
            // line 169
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "




                        ";
            // line 174
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentContent", []), 'widget');
            echo "

                            <!-- Button3 -->
                            <button type=\"submit\" class=\"btn3 flex-c-m size31 txt11 trans-0-4\" id=\"addb\">
                                Post Comment
                            </button>
                        <div class=\"text-center\">
                            <!-- Button HTML (to Trigger Modal) -->
                        </div>


                        ";
            // line 185
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                        ";
        }
        // line 187
        echo "                        ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []) == null)) {
            // line 188
            echo "                            <h4 class=\"txt33 p-b-14\">
                                You must log in to leave a comment !
                            </h4>
                        ";
        }
        // line 192
        echo "
                    </div>
                </div>

                <div class=\"col-md-4 col-lg-3\">
                    <div class=\"sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md\">
                        <!-- Search -->
                        <div class=\"search-sidebar2 size12 bo2 pos-relative\">
                            <input class=\"input-search-sidebar2 txt10 p-l-20 p-r-55\" type=\"text\" name=\"search\" placeholder=\"Search\">
                            <button class=\"btn-search-sidebar2 flex-c-m ti-search trans-0-4\"></button>
                        </div>

                        <!-- Categories -->
                        <div class=\"categories\">
                            <h4 class=\"txt33 bo5-b p-b-35 p-t-58\">
                                Categories
                            </h4>

                            <ul>
                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Cooking recipe
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Delicious foods
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Events Design
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Restaurant Place
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        WordPress
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Most Popular -->
                        <div class=\"popular\">
                            <h4 class=\"txt33 p-b-35 p-t-58\">
                                Most popular
                            </h4>

                            <ul>
                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"images/blog-11.jpg\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Best Places for Wine
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\t3 days ago
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"images/blog-12.jpg\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Eggs and Cheese
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tJuly 2, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"images/blog-13.jpg\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Style the Wedding Party
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tMay 28, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"images/blog-14.jpg\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Cooking recipe Delicious
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tMay 25, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"images/blog-15.jpg\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Pizza is prepared fresh
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tMay 2, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <!-- Archive -->
                        <div class=\"archive\">
                            <h4 class=\"txt33 p-b-20 p-t-43\">
                                Archive
                            </h4>

                            <ul>
                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        uly 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(9)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        June 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(39)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        May 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(29)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        April  2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(35)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        March 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(22)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        February 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(32)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        January 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(21)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        December 2017
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(26)
\t\t\t\t\t\t\t\t\t</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src=\"//cdn.ckeditor.com/4.11.3/full/ckeditor.js\"></script><script>
    CKEDITOR.replace('editor1');
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/BlogViews/DetailBlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 192,  339 => 188,  336 => 187,  331 => 185,  317 => 174,  309 => 169,  298 => 160,  296 => 159,  285 => 150,  271 => 142,  265 => 140,  251 => 129,  233 => 113,  230 => 112,  224 => 111,  218 => 107,  214 => 106,  199 => 94,  188 => 86,  180 => 81,  172 => 76,  164 => 71,  156 => 66,  152 => 65,  140 => 56,  127 => 46,  110 => 32,  102 => 27,  94 => 22,  85 => 16,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Detail blog{% endblock %}
{% block body %}

    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url({{ asset('assets/images/blog-banner.png') }});\">
        <h2 class=\"tit6 t-center\">
            Blog
        </h2>
    </section>


    <!-- Content page -->
    <section>
        <div class=\"bread-crumb bo5-b p-t-17 p-b-17\">
            <div class=\"container\">
                <a href=\"{{ path('blog_ListPosts') }}\" class=\"txt27\">
                    Home
                </a>

                <span class=\"txt29 m-l-10 m-r-10\">/</span>

                <a href=\"{{ path('blog_ListPosts') }}\" class=\"txt27\">
                    Blog
                </a>

                <span class=\"txt29 m-l-10 m-r-10\">/</span>
                <a href=\"{{ path('blog_ListPosts') }}\" class=\"txt27\">
                    Detail
                </a>

                <span class=\"txt29\">
                    {{ v.articleTitle}}
\t\t\t\t</span>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-md-8 col-lg-9\">
                    <div class=\"p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md\">
                        <!-- Block4 -->
                        <div class=\"blo4 p-b-63\">
                            <!-- - -->
                            <div class=\"pic-blo4 hov-img-zoom bo-rad-10 pos-relative\">
                                <a href=\"blog-detail.html\">
                                    <img src=\"{{ asset('uploads/images/' ~ v.image) }}\" alt=\"IMG-BLOG\" width=\"600\" height=\"427\">
                                </a>

                                <div class=\"date-blo4 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t<span class=\"txt30 m-b-4\">


\t\t\t\t\t\t\t\t\t</span>

                                    <span class=\"txt31\">
\t\t\t\t\t\t\t\t\t\t{{ v.postDate|date(\"m/d/Y\")}}
\t\t\t\t\t\t\t\t\t</span>
                                </div>
                            </div>

                            <!-- - -->
                            <div class=\"text-blo4 p-t-33\">

                                <h4 class=\"p-b-16\">
                                    <a href=\"blog-detail.html\" class=\"tit9\" style=\"word-wrap:break-word;font-family: Montserrat-Bold\">{{ v.articleTitle }}</a>
                                   <p style=\"word-wrap:break-word\">Post :{{ v.postContent }}</p>
                                </h4>

                                <div class=\"txt32 flex-w p-b-24\">
\t\t\t\t\t\t\t\t\t<span style=\"font-family: Montserrat-Bold\">
\t\t\t\t\t\t\t\t\t\t{{ v.author.username }}
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span style=\"font-family: Montserrat-Bold\">
\t\t\t\t\t\t\t\t\t\t{{ v.postDate|date(\"m/d/Y\")}}
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span style=\"font-family: Montserrat-Bold\">
\t\t\t\t\t\t\t\t\t\t{{ v.postType }}
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span style=\"font-family: Montserrat-Bold\">
\t\t\t\t\t\t\t\t\t\t{{ v.postCommentCount }} Comments
\t\t\t\t\t\t\t\t\t</span>
                                </div>


                            </div>


                        <p style=\"word-wrap:break-word\">{{ v.articleContent|raw }} </p>

                            <hr>
                            <div class=\"blo4 p-b-63\">
                                <a href=\"\" class=\"tit9\"></a>
                            </div>




                            <div class=\"text-blo4 p-t-33\" style=\"word-wrap:break-word\">

                                {% for comments in com %}
                                    <div class=\"media\" style=\"word-wrap:break-word\">


                                        <div class=\"media-body\" style=\"word-wrap:break-word\">
                                            <h4 class=\"media-heading\" style=\"font-family: Montserrat-Bold\">{{ comments.commentAuthor }} <small><i style=\"font-family: Montserrat-SemiBold;font-size: 16px\">{{ comments.commentDate|date('l jS \\f F Y h:i:s A') }}</i></small> {% if app.user!=null %}
                                                    {% if app.user.id==comments.commentAuthor.id %}
                                                        <!-- Modal HTML -->
                                                        <div id=\"myModal\" class=\"modal fade\">
                                                            <div class=\"modal-dialog modal-confirm\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <div class=\"icon-box\">
                                                                            <i class=\"material-icons\">&#xE5CD;</i>
                                                                        </div>
                                                                        <h4 class=\"modal-title\">Are you sure?</h4>
                                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                                    </div>
                                                                    <div class=\"modal-body\">
                                                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\">Cancel</button>
                                                                        <a href=\"{{ path('blog_deleteComment',{('commentId'):comments.commentId}) }}\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"right\">
                                                        <a href=\"#myModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" title=\"Delete\"></i></a>

                                                        <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" title=\"Edit\"></i></a>
                                                        </div>
                                                    {% endif %}
                                                {% endif %}</h4>

                                                {{ comments.commentContent|raw }}.
                                        </div>
                                    </div>
                                    <hr />



                                {% endfor %}
                            </div>

                        </div>






{% if app.user!=null %}
                        <!-- Leave a comment -->

                            <h4 class=\"txt33 p-b-14\">
                                Leave a Comment
                            </h4>

                            <p>

                            </p>
                            {{ form_start(form) }}




                        {{ form_widget(form.commentContent)}}

                            <!-- Button3 -->
                            <button type=\"submit\" class=\"btn3 flex-c-m size31 txt11 trans-0-4\" id=\"addb\">
                                Post Comment
                            </button>
                        <div class=\"text-center\">
                            <!-- Button HTML (to Trigger Modal) -->
                        </div>


                        {{ form_end(form) }}
                        {% endif %}
                        {% if app.user==null %}
                            <h4 class=\"txt33 p-b-14\">
                                You must log in to leave a comment !
                            </h4>
                        {% endif %}

                    </div>
                </div>

                <div class=\"col-md-4 col-lg-3\">
                    <div class=\"sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md\">
                        <!-- Search -->
                        <div class=\"search-sidebar2 size12 bo2 pos-relative\">
                            <input class=\"input-search-sidebar2 txt10 p-l-20 p-r-55\" type=\"text\" name=\"search\" placeholder=\"Search\">
                            <button class=\"btn-search-sidebar2 flex-c-m ti-search trans-0-4\"></button>
                        </div>

                        <!-- Categories -->
                        <div class=\"categories\">
                            <h4 class=\"txt33 bo5-b p-b-35 p-t-58\">
                                Categories
                            </h4>

                            <ul>
                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Cooking recipe
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Delicious foods
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Events Design
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Restaurant Place
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        WordPress
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Most Popular -->
                        <div class=\"popular\">
                            <h4 class=\"txt33 p-b-35 p-t-58\">
                                Most popular
                            </h4>

                            <ul>
                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"images/blog-11.jpg\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Best Places for Wine
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\t3 days ago
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"images/blog-12.jpg\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Eggs and Cheese
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tJuly 2, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"images/blog-13.jpg\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Style the Wedding Party
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tMay 28, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"images/blog-14.jpg\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Cooking recipe Delicious
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tMay 25, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"images/blog-15.jpg\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Pizza is prepared fresh
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tMay 2, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <!-- Archive -->
                        <div class=\"archive\">
                            <h4 class=\"txt33 p-b-20 p-t-43\">
                                Archive
                            </h4>

                            <ul>
                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        uly 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(9)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        June 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(39)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        May 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(29)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        April  2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(35)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        March 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(22)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        February 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(32)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        January 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(21)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        December 2017
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(26)
\t\t\t\t\t\t\t\t\t</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src=\"//cdn.ckeditor.com/4.11.3/full/ckeditor.js\"></script><script>
    CKEDITOR.replace('editor1');
</script>
{% endblock %}
", "@Blog/BlogViews/DetailBlog.html.twig", "C:\\wamp64\\www\\smartstart\\src\\BlogBundle\\Resources\\views\\BlogViews\\DetailBlog.html.twig");
    }
}
