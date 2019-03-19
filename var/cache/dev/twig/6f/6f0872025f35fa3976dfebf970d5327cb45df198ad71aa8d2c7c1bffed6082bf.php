<?php

/* @Blog/BlogViews/Blog.html.twig */
class __TwigTemplate_94374f77d6c3d57ac0fd84668776ca7f2cc0c624ccbc24e6196183960bb43db2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "@Blog/BlogViews/Blog.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/BlogViews/Blog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/BlogViews/Blog.html.twig"));

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

        echo "Blog";
        
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


    <!-- Title Page -->
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url(";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-banner.png"), "html", null, true);
        echo ");\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>


    <!-- Content page -->
    <section>
        <div class=\"bread-crumb bo5-b p-t-17 p-b-17\">
            <div class=\"container\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_ListPosts");
        echo "\" class=\"txt27\">
                    Home
                </a>

                <span class=\"txt29 m-l-10 m-r-10\">/</span>

                <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_ListPosts");
        echo "\" class=\"txt27\">
                    Blog
                </a>

        ";
        // line 28
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []) != null)) {
            // line 29
            echo "            </div>
            <a href=\"#addEmployeeModal\" class=\"btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>Add A Post</span></a>

            </div>
        <!-- Add Modal HTML -->
        <div id=\"addEmployeeModal\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    ";
            // line 37
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "






                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Add A Post</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Post Content</label>
                            ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postContent", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea"]]);
            echo "

                        </div>
                        <div class=\"form-group\">
                            <label>Post Type</label>
                            ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postType", []), 'widget', ["attr" => ["class" => "form-control", "style" => "font-size: 12px"]]);
            echo "

                        </div>
                        <div class=\"form-group\">
                            <label>Article Title</label>
                            ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "articleTitle", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea"]]);
            echo "

                        </div>
                        <div class=\"form-group\">
                            <label>Article Content</label>
                            ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "articleContent", []), 'widget');
            echo "

                        </div>
                        <div class=\"form-group\">
                            <label>Your Image</label>
                            ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", []), 'widget', ["attr" => ["class" => "form-control", "style" => "font-size: 12px"]]);
            echo "

                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                        <input type=\"submit\" onclick=\"myFunction()\" id=\"form\" name=\"form\" class=\"btn btn-success\" id=\"addb\" value=\"Add\">
                    </div>
                    ";
            // line 79
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                </div>
            </div>
        </div>
        ";
        }
        // line 84
        echo "

        <div class=\"container\">


            <div class=\"row\">
                <div class=\"col-md-8 col-lg-9\">
                    <div class=\"p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md\">

                        <!-- Block4 -->
                        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")));
        foreach ($context['_seq'] as $context["_key"] => $context["blogposts"]) {
            // line 95
            echo "                        <div class=\"blo4 p-b-63\" id=\"content\">
                            <div class=\"pic-blo4 hov-img-zoom bo-rad-10 pos-relative\">
                                <a href=";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Detail", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo ">
                                    <img  src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["blogposts"], "image", []))), "html", null, true);
            echo "\" width=\"600\" height=\"427\" alt=\"IMG-BLOG\">
                                </a>

                                <div class=\"date-blo4 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t<span class=\"txt30 m-b-4\">


\t\t\t\t\t\t\t\t\t</span>

                                    <span class=\"txt31\">
\t\t\t\t\t\t\t\t\t\t";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blogposts"], "postDate", []), "m/d/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
                                </div>
                            </div>

                            <div class=\"text-blo4 p-t-33\">

                                ";
            // line 115
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []) != null)) {
                // line 116
                echo "                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "id", []) == $this->getAttribute($this->getAttribute($context["blogposts"], "author", []), "id", []))) {
                    // line 117
                    echo "                                <a href=\"#myModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" title=\"Delete\"></i></a>

                                <a href=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Update_BlogPost", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
                    echo "\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" title=\"Edit\"></i></a>
                                ";
                }
                // line 121
                echo "                                ";
            }
            // line 122
            echo "                                ";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []) != null)) {
                // line 123
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Like", ["postId" => $this->getAttribute($context["blogposts"], "postId", []), "id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "id", [])]), "html", null, true);
                echo "\" class=\"link\">
                                    <i class=\"far fa-thumbs-up\" style=\"color:midnightblue\"></i>
                                    <span class=\"js-likes\" style=\"color: midnightblue\">";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postLikesCount", []), "html", null, true);
                echo "</span>
                                    <span class=\"js-label\" style=\"color: midnightblue\">Like</span>
                                </a>
                                ";
            }
            // line 129
            echo "                                ";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []) == null)) {
                // line 130
                echo "                                    <a>
                                        <i class=\"far fa-thumbs-up\" style=\"color:midnightblue\"></i>
                                        <span class=\"js-likes\" style=\"color: midnightblue\">";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postLikesCount", []), "html", null, true);
                echo "</span>
                                        <span class=\"js-label\" style=\"color: midnightblue\">Like</span>
                                    </a>
                                ";
            }
            // line 136
            echo "
                                <h4 class=\"p-b-16\">
                                    <a href=";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Detail", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo " class=\"tit9\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postContent", []), "html", null, true);
            echo "</a>
                                </h4>


                                <div class=\"txt32 flex-w p-b-24\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\tby ";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["blogposts"], "author", []), "username", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span>
\t\t\t\t\t\t\t\t\t\t";
            // line 149
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blogposts"], "postDate", []), "m/d/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span>
\t\t\t\t\t\t\t\t\t\t";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postType", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span>
\t\t\t\t\t\t\t\t\t\t";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postCommentCount", []), "html", null, true);
            echo " Comments
                                        <span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>


                                    ";
            // line 164
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []) != null)) {
                // line 165
                echo "
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
                                                            <a href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Edit Modal HTML -->
                                            <div id=\"editEmployeeModal\" class=\"modal fade\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <form>
                                                            <div class=\"modal-header\">
                                                                <h4 class=\"modal-title\">Edit Employee</h4>
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <div class=\"form-group\">
                                                                    <label>Name</label>
                                                                    <input type=\"text\" class=\"form-control\" required>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label>Email</label>
                                                                    <input type=\"email\" class=\"form-control\" required>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label>Address</label>
                                                                    <textarea class=\"form-control\" required></textarea>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label>Phone</label>
                                                                    <input type=\"text\" class=\"form-control\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                                                                <input type=\"submit\" class=\"btn btn-info\" value=\"Save\">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                    ";
            }
            // line 226
            echo "
                                </div>

                                <p style=\" word-wrap:break-word\">
                                    ";
            // line 230
            echo $this->getAttribute($context["blogposts"], "articleContent", []);
            echo "
                                </p>

                                <a class=\"dis-block txt4m-t-30\" href=";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Detail", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo " >
                                Continue Reading
                                <i class=\"fas fa-book-open\"></i>
                                </a>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogposts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "



                        <!-- Pagination -->

                        <div class=\"pagination flex-l-m flex-w m-l--6 p-t-25\">
                            ";
        // line 247
        echo $this->env->getExtension('Tiloweb\PaginationBundle\Twig\Extension\PaginationExtension')->paginationFunction((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "page");
        echo "

                        </div>
                    </div>
                </div>

                <div style=\"word-wrap: break-word\" class=\"col-md-4 col-lg-3\">
                    <div style=\"word-wrap: break-word\" class=\"sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md\">
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
                                        Newsjacking
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Instructional
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Personal Spotlight
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Cheat Sheet
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Media
                                    </a>
                                </li>
                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Entertaining
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Most Popular -->
                        <div style=\"word-wrap: break-word\" class=\"popular\">
                            <h4 class=\"txt33 p-b-35 p-t-58\">
                                Most popular
                            </h4>

                            <ul>
                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-11.jpg"), "html", null, true);
        echo "\" alt=\"IMG-BLOG\">
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
                                            <img src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-12.jpg"), "html", null, true);
        echo "\" alt=\"IMG-BLOG\">
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
                                            <img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-13.jpg"), "html", null, true);
        echo "\" alt=\"IMG-BLOG\">
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
                                            <img src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-14.jpg"), "html", null, true);
        echo "\" alt=\"IMG-BLOG\">
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
                                            <img src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-15.jpg"), "html", null, true);
        echo "\" alt=\"IMG-BLOG\">
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






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/BlogViews/Blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 387,  560 => 369,  539 => 351,  518 => 333,  497 => 315,  426 => 247,  417 => 240,  404 => 233,  398 => 230,  392 => 226,  345 => 182,  326 => 165,  324 => 164,  316 => 159,  308 => 154,  300 => 149,  292 => 144,  281 => 138,  277 => 136,  270 => 132,  266 => 130,  263 => 129,  256 => 125,  250 => 123,  247 => 122,  244 => 121,  239 => 119,  235 => 117,  232 => 116,  230 => 115,  220 => 108,  207 => 98,  203 => 97,  199 => 95,  195 => 94,  183 => 84,  175 => 79,  164 => 71,  156 => 66,  148 => 61,  140 => 56,  132 => 51,  115 => 37,  105 => 29,  103 => 28,  96 => 24,  87 => 18,  74 => 8,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Blog{% endblock %}
{% block body %}



    <!-- Title Page -->
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url({{ asset('assets/images/blog-banner.png') }});\">
        <h2 class=\"tit6 t-center\">
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

        {% if app.user!=null %}
            </div>
            <a href=\"#addEmployeeModal\" class=\"btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>Add A Post</span></a>

            </div>
        <!-- Add Modal HTML -->
        <div id=\"addEmployeeModal\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    {{ form_start(form) }}






                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Add A Post</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Post Content</label>
                            {{ form_widget(form.postContent, { 'attr': {'class': 'form-control', 'type' : 'textarea'} }) }}

                        </div>
                        <div class=\"form-group\">
                            <label>Post Type</label>
                            {{ form_widget(form.postType, { 'attr': {'class': 'form-control', 'style':'font-size: 12px'} }) }}

                        </div>
                        <div class=\"form-group\">
                            <label>Article Title</label>
                            {{ form_widget(form.articleTitle, { 'attr': {'class': 'form-control', 'type' : 'textarea'} }) }}

                        </div>
                        <div class=\"form-group\">
                            <label>Article Content</label>
                            {{ form_widget(form.articleContent)}}

                        </div>
                        <div class=\"form-group\">
                            <label>Your Image</label>
                            {{ form_widget(form.image, { 'attr': {'class': 'form-control', 'style':'font-size: 12px'} }) }}

                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                        <input type=\"submit\" onclick=\"myFunction()\" id=\"form\" name=\"form\" class=\"btn btn-success\" id=\"addb\" value=\"Add\">
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
        {% endif %}


        <div class=\"container\">


            <div class=\"row\">
                <div class=\"col-md-8 col-lg-9\">
                    <div class=\"p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md\">

                        <!-- Block4 -->
                        {% for blogposts in v %}
                        <div class=\"blo4 p-b-63\" id=\"content\">
                            <div class=\"pic-blo4 hov-img-zoom bo-rad-10 pos-relative\">
                                <a href={{ path('blog_Detail',{('postId'):blogposts.postId}) }}>
                                    <img  src=\"{{ asset('uploads/images/' ~ blogposts.image) }}\" width=\"600\" height=\"427\" alt=\"IMG-BLOG\">
                                </a>

                                <div class=\"date-blo4 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t<span class=\"txt30 m-b-4\">


\t\t\t\t\t\t\t\t\t</span>

                                    <span class=\"txt31\">
\t\t\t\t\t\t\t\t\t\t{{ blogposts.postDate|date(\"m/d/Y\")}}
\t\t\t\t\t\t\t\t\t</span>
                                </div>
                            </div>

                            <div class=\"text-blo4 p-t-33\">

                                {% if app.user!=null %}
                                {% if app.user.id==blogposts.author.id %}
                                <a href=\"#myModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"fas fa-trash-alt\" data-toggle=\"tooltip\" title=\"Delete\"></i></a>

                                <a href=\"{{ path('Update_BlogPost',{('postId'):blogposts.postId}) }}\"><i class=\"fas fa-edit\" data-toggle=\"tooltip\" title=\"Edit\"></i></a>
                                {% endif %}
                                {% endif %}
                                {% if app.user!=null %}
                                <a href=\"{{ path('blog_Like',{('postId'):blogposts.postId,('id'):app.user.id}) }}\" class=\"link\">
                                    <i class=\"far fa-thumbs-up\" style=\"color:midnightblue\"></i>
                                    <span class=\"js-likes\" style=\"color: midnightblue\">{{ blogposts.postLikesCount }}</span>
                                    <span class=\"js-label\" style=\"color: midnightblue\">Like</span>
                                </a>
                                {% endif %}
                                {% if app.user==null %}
                                    <a>
                                        <i class=\"far fa-thumbs-up\" style=\"color:midnightblue\"></i>
                                        <span class=\"js-likes\" style=\"color: midnightblue\">{{ blogposts.postLikesCount }}</span>
                                        <span class=\"js-label\" style=\"color: midnightblue\">Like</span>
                                    </a>
                                {% endif %}

                                <h4 class=\"p-b-16\">
                                    <a href={{ path('blog_Detail',{('postId'):blogposts.postId}) }} class=\"tit9\">{{ blogposts.postContent }}</a>
                                </h4>


                                <div class=\"txt32 flex-w p-b-24\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\tby {{ blogposts.author.username }}
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span>
\t\t\t\t\t\t\t\t\t\t{{ blogposts.postDate|date(\"m/d/Y\")}}
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span>
\t\t\t\t\t\t\t\t\t\t{{ blogposts.postType }}
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span>
\t\t\t\t\t\t\t\t\t\t{{ blogposts.postCommentCount }} Comments
                                        <span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>


                                    {% if app.user!=null %}

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
                                                            <a href=\"{{ path('blog_delete',{('postId'):blogposts.postId}) }}\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Edit Modal HTML -->
                                            <div id=\"editEmployeeModal\" class=\"modal fade\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <form>
                                                            <div class=\"modal-header\">
                                                                <h4 class=\"modal-title\">Edit Employee</h4>
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <div class=\"form-group\">
                                                                    <label>Name</label>
                                                                    <input type=\"text\" class=\"form-control\" required>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label>Email</label>
                                                                    <input type=\"email\" class=\"form-control\" required>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label>Address</label>
                                                                    <textarea class=\"form-control\" required></textarea>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label>Phone</label>
                                                                    <input type=\"text\" class=\"form-control\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                                                                <input type=\"submit\" class=\"btn btn-info\" value=\"Save\">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                    {% endif %}

                                </div>

                                <p style=\" word-wrap:break-word\">
                                    {{ blogposts.articleContent|raw }}
                                </p>

                                <a class=\"dis-block txt4m-t-30\" href={{ path('blog_Detail',{('postId'):blogposts.postId}) }} >
                                Continue Reading
                                <i class=\"fas fa-book-open\"></i>
                                </a>
                            </div>
                        </div>
                        {% endfor %}




                        <!-- Pagination -->

                        <div class=\"pagination flex-l-m flex-w m-l--6 p-t-25\">
                            {{ pagination(v, 'page') }}

                        </div>
                    </div>
                </div>

                <div style=\"word-wrap: break-word\" class=\"col-md-4 col-lg-3\">
                    <div style=\"word-wrap: break-word\" class=\"sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md\">
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
                                        Newsjacking
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Instructional
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Personal Spotlight
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Cheat Sheet
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Media
                                    </a>
                                </li>
                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Entertaining
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Most Popular -->
                        <div style=\"word-wrap: break-word\" class=\"popular\">
                            <h4 class=\"txt33 p-b-35 p-t-58\">
                                Most popular
                            </h4>

                            <ul>
                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"{{ asset('assets/images/blog-11.jpg') }}\" alt=\"IMG-BLOG\">
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
                                            <img src=\"{{ asset('assets/images/blog-12.jpg') }}\" alt=\"IMG-BLOG\">
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
                                            <img src=\"{{ asset('assets/images/blog-13.jpg') }}\" alt=\"IMG-BLOG\">
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
                                            <img src=\"{{ asset('assets/images/blog-14.jpg') }}\" alt=\"IMG-BLOG\">
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
                                            <img src=\"{{ asset('assets/images/blog-15.jpg') }}\" alt=\"IMG-BLOG\">
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






{% endblock %}






", "@Blog/BlogViews/Blog.html.twig", "C:\\wamp64\\www\\smartstart\\src\\BlogBundle\\Resources\\views\\BlogViews\\Blog.html.twig");
    }
}
