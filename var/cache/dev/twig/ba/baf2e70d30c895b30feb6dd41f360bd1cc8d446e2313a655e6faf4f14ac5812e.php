<?php

/* ::SmartStartBase.html.twig */
class __TwigTemplate_8f43a4d52312299104ebd2535e2c8df4722fc3cdf32682244262c866bbc062bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::SmartStartBase.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::SmartStartBase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
</head>
<body class=\"animsition\">

<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class=\"wrap-menu-header gradient1 trans-0-4\">
        <div class=\"container h-full\">
            <div class=\"wrap_header trans-0-3\">
                <!-- Logo -->
                <div class=\"logo\">
                    <a href=\"\">
                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/logo.png"), "html", null, true);
        echo "\" alt=\"IMG-LOGO\" data-logofixed=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/logo2.png"), "html", null, true);
        echo "\">
                    </a>
                </div>

                <!-- Menu -->
                <div class=\"wrap_menu p-l-45 p-l-0-xl\">
                    <nav class=\"menu\">
                        <ul class=\"main_menu\">
                            <li>
                                <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
                            </li>

                            <li>
                                <a href=\"\">Menu</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_contracts");
        echo "\">Contracts</a>
                            </li>

                            <li>
                                <a href=\"\">Gallery</a>
                            </li>

                            <li>
                                <a href=\"\">About</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_ListPosts");
        echo "\">Blog</a>
                            </li>

                            <li>
                                <a href=\"\">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Social -->
                <div class=\"social flex-w flex-l-m p-r-20\">
                    <a href=\"#\"><i class=\"fab fa-tripadvisor\"></i></a>
                    <a href=\"#\"><i class=\"fab fa-facebook m-l-21\" aria-hidden=\"true\"></i></a>
                    <a href=\"#\"><i class=\"fab fa-twitter m-l-21\" aria-hidden=\"true\"></i></a>

                    <button class=\"btn-show-sidebar m-l-33 trans-0-4\"></button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar -->
<aside class=\"sidebar trans-0-4\">
    <!-- Button Hide sidebar -->
    <button class=\"btn-hide-sidebar ti-close color0-hov trans-0-4\"></button>

    <!-- - -->
    <ul class=\"menu-sidebar p-t-95 p-b-70\">
        <li class=\"t-center m-b-13\">
            <a href=\"homepage\" class=\"txt19\">Home</a>
        </li>

        <li class=\"t-center m-b-13\">
            <a href=\"\" class=\"txt19\">Menu</a>
        </li>

        <li class=\"t-center m-b-13\">
            <a href=\"\" class=\"txt19\">Reservation</a>
        </li>

        <li class=\"t-center m-b-13\">
            <a href=\"\" class=\"txt19\">Gallery</a>
        </li>

        <li class=\"t-center m-b-13\">
            <a href=\"\" class=\"txt19\">About</a>
        </li>

        <li class=\"t-center m-b-13\">
            <a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_ListPosts");
        echo "\" class=\"txt19\">Blog</a>
        </li>

        <li class=\"t-center m-b-33\">
            <a href=\"\" class=\"txt19\">Contact</a>
        </li>

        ";
        // line 138
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 139
            echo "            <li class=\"t-center\">
                <a href=\"";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto\">Logout</a>
            </li>
        ";
        } else {
            // line 143
            echo "            <li class=\"t-center\">
                <a href=\"";
            // line 144
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto\">Login</a>
            </li>
        ";
        }
        // line 147
        echo "
    </ul>

    <!-- - -->
    <div class=\"gallery-sidebar t-center p-l-60 p-r-60 p-b-40\">
        <!-- - -->
        <h4 class=\"txt20 m-b-33\">
            Gallery
        </h4>

        <!-- Gallery -->
        <div class=\"wrap-gallery-sidebar flex-w\">
            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-01.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-01.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"i";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-02.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-02.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-03.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-03.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-05.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-05.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-06.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-06.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-07.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-07.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-09.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-09.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-10.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-10.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-11.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-11.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
            </a>
        </div>
    </div>
</aside>



";
        // line 200
        $this->displayBlock('body', $context, $blocks);
        // line 201
        echo "
<footer class=\"bg1\">
    <div class=\"container p-t-40 p-b-70\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-md-4 p-t-50\">
                <!-- - -->
                <h4 class=\"txt13 m-b-33\">
                    Contact Us
                </h4>

                <ul class=\"m-b-70\">
                    <li class=\"txt14 m-b-14\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                        8th floor, 379 Hudson St, New York, NY 10018
                    </li>

                    <li class=\"txt14 m-b-14\">
                        <i class=\"far fa-phone\"></i>
                        (+1) 96 716 6879
                    </li>

                    <li class=\"txt14 m-b-14\">
                        <i class=\"far fa-file-contract\"></i>                        contact@site.com
                    </li>
                </ul>

                <!-- - -->
                <h4 class=\"txt13 m-b-32\">
                    Opening Times
                </h4>

                <ul>
                    <li class=\"txt14\">
                        09:30 AM – 11:00 PM
                    </li>

                    <li class=\"txt14\">
                        Every Day
                    </li>
                </ul>
            </div>

            <div class=\"col-sm-6 col-md-4 p-t-50\">
                <!-- - -->
                <h4 class=\"txt13 m-b-33\">
                    Latest twitter
                </h4>

                <div class=\"m-b-25\">
                        <span class=\"fs-13 color2 m-r-5\">
                            <i class=\"fab fa-twitter\" aria-hidden=\"true\"></i>
                        </span>
                    <a href=\"#\" class=\"txt15\">
                        @colorlib
                    </a>

                    <p class=\"txt14 m-b-18\">
                        Activello is a good option. It has a slider built into that displays the featured image in the slider.
                        <a href=\"#\" class=\"txt15\">
                            https://buff.ly/2zaSfAQ
                        </a>
                    </p>

                    <span class=\"txt16\">
                            21 Dec 2017
                        </span>
                </div>

                <div>
                        <span class=\"fs-13 color2 m-r-5\">
                            <i class=\"fab fa-twitter\" aria-hidden=\"true\"></i>
                        </span>
                    <a href=\"#\" class=\"txt15\">
                        @colorlib
                    </a>

                    <p class=\"txt14 m-b-18\">
                        Activello is a good option. It has a slider built into that displays
                        <a href=\"#\" class=\"txt15\">
                            https://buff.ly/2zaSfAQ
                        </a>
                    </p>

                    <span class=\"txt16\">
                            21 Dec 2017
                        </span>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4 p-t-50\">
                <!-- - -->
                <h4 class=\"txt13 m-b-38\">
                    Gallery
                </h4>

                <!-- Gallery footer -->
                <div class=\"wrap-gallery-footer flex-w\">
                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-01.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                        <img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-01.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-02.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                        <img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-02.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-03.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                        <img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-03.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-04.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                        <img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-04.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-05.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                        <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-05.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-06.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                        <img src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-06.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-07.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                        <img src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-07.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-08.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                        <img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-08.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-09.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                        <img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-09.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-10.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                        <img src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-10.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-11.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                        <img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-11.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-12.jpg"), "html", null, true);
        echo "\" data-lightbox=\"gallery-footer\">
                        <img src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photo-gallery-thumb-12.jpg"), "html", null, true);
        echo "\" alt=\"GALLERY\">
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class=\"end-footer bg2\">
        <div class=\"container\">
            <div class=\"flex-sb-m flex-w p-t-22 p-b-22\">
                <div class=\"p-t-5 p-b-5\">
                    <a href=\"#\" class=\"fs-15 c-white\"><i class=\"fab fa-tripadvisor\" aria-hidden=\"true\"></i></a>
                    <a href=\"#\" class=\"fs-15 c-white\"><i class=\"fab fa-facebook m-l-18\" aria-hidden=\"true\"></i></a>
                    <a href=\"#\" class=\"fs-15 c-white\"><i class=\"fab fa-twitter m-l-18\" aria-hidden=\"true\"></i></a>
                </div>

                <div class=\"txt17 p-r-20 p-t-5 p-b-5\">
                    Copyright &copy; 2018 All rights reserved  |  This template is made with <i class=\"fab fa-heart\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class=\"btn-back-to-top bg0-hov\" id=\"myBtn\">
        <span class=\"symbol-btn-back-to-top\">
            <i class=\"fab fa-angle-double-up\" aria-hidden=\"true\"></i>
        </span>
</div>
";
        // line 375
        $this->displayBlock('javascripts', $context, $blocks);
        // line 441
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <meta charset=\"UTF-8\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/googleapis.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--===============================================================================================-->
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/favicon.png"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/themify/themify-icons.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/animate/animate.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo " \">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/slick/slick.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/lightbox2/css/lightbox.min.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/util.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 200
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 375
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 376
        echo "    <script>

        \$(function () {
            \$(\"#mdb-lightbox-ui\").load(\"mdb-addons/mdb-lightbox-ui.html\");
        });
    </script>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script>
        var likelink=document.querySelectorAll('link')
        document.querySelectorAll('.link').forEach(function(link){
            link.addEventListener('click',onClickBtnLlike)

        })
        function onClickBtnLlike(event) {
            event.preventDefault();
            const url=this.href;
            const spanCount=this.querySelector('span.js-likes')
            console.log(\"biiij\");
            axios.get(url).then(function (response) {
                console.log(response);

                console.log(response.data.likes);
                spanCount.textContent=response.data.likes;
                console.log(\"biiij\");

            })


        }

    </script>


    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/slick-custom.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/parallax100/parallax100.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/countdowntime/countdowntime.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/lightbox2/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/googlemaps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/map-custom.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::SmartStartBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  797 => 439,  792 => 437,  788 => 436,  783 => 434,  778 => 432,  773 => 430,  765 => 425,  760 => 423,  756 => 422,  751 => 420,  747 => 419,  742 => 417,  737 => 415,  733 => 414,  728 => 412,  723 => 410,  687 => 376,  678 => 375,  661 => 200,  648 => 35,  644 => 34,  639 => 32,  634 => 30,  629 => 28,  622 => 24,  617 => 22,  612 => 20,  607 => 18,  602 => 16,  597 => 14,  592 => 12,  587 => 10,  582 => 8,  579 => 7,  570 => 6,  553 => 5,  541 => 441,  539 => 375,  504 => 343,  500 => 342,  494 => 339,  490 => 338,  484 => 335,  480 => 334,  474 => 331,  470 => 330,  464 => 327,  460 => 326,  454 => 323,  450 => 322,  444 => 319,  440 => 318,  434 => 315,  430 => 314,  424 => 311,  420 => 310,  414 => 307,  410 => 306,  404 => 303,  400 => 302,  394 => 299,  390 => 298,  291 => 201,  289 => 200,  278 => 192,  274 => 191,  268 => 188,  264 => 187,  258 => 184,  254 => 183,  248 => 180,  244 => 179,  238 => 176,  234 => 175,  228 => 172,  224 => 171,  218 => 168,  214 => 167,  208 => 164,  204 => 163,  198 => 160,  194 => 159,  180 => 147,  174 => 144,  171 => 143,  165 => 140,  162 => 139,  160 => 138,  150 => 131,  96 => 80,  81 => 68,  70 => 60,  56 => 51,  41 => 38,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>

    <title>{% block title %}{% endblock %}</title>
    {% block stylesheets %}
        <meta charset=\"UTF-8\" />
        <link href=\"{{ asset('assets/css/googleapis.css') }}\" rel=\"stylesheet\">
        <!--===============================================================================================-->
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/images/icons/favicon.png') }}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/fonts/themify/themify-icons.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/animate/animate.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/animsition/css/animsition.min.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/select2/select2.min.css') }}\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }} \">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/slick/slick.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/lightbox2/css/lightbox.min.css') }}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/util.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/main.css') }}\">

    {% endblock %}

</head>
<body class=\"animsition\">

<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class=\"wrap-menu-header gradient1 trans-0-4\">
        <div class=\"container h-full\">
            <div class=\"wrap_header trans-0-3\">
                <!-- Logo -->
                <div class=\"logo\">
                    <a href=\"\">
                        <img src=\"{{ asset('assets/images/icons/logo.png') }}\" alt=\"IMG-LOGO\" data-logofixed=\"{{ asset('assets/images/icons/logo2.png') }}\">
                    </a>
                </div>

                <!-- Menu -->
                <div class=\"wrap_menu p-l-45 p-l-0-xl\">
                    <nav class=\"menu\">
                        <ul class=\"main_menu\">
                            <li>
                                <a href=\"{{ path('homepage') }}\">Home</a>
                            </li>

                            <li>
                                <a href=\"\">Menu</a>
                            </li>

                            <li>
                                <a href=\"{{ path('my_contracts') }}\">Contracts</a>
                            </li>

                            <li>
                                <a href=\"\">Gallery</a>
                            </li>

                            <li>
                                <a href=\"\">About</a>
                            </li>

                            <li>
                                <a href=\"{{ path('blog_ListPosts')}}\">Blog</a>
                            </li>

                            <li>
                                <a href=\"\">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Social -->
                <div class=\"social flex-w flex-l-m p-r-20\">
                    <a href=\"#\"><i class=\"fab fa-tripadvisor\"></i></a>
                    <a href=\"#\"><i class=\"fab fa-facebook m-l-21\" aria-hidden=\"true\"></i></a>
                    <a href=\"#\"><i class=\"fab fa-twitter m-l-21\" aria-hidden=\"true\"></i></a>

                    <button class=\"btn-show-sidebar m-l-33 trans-0-4\"></button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar -->
<aside class=\"sidebar trans-0-4\">
    <!-- Button Hide sidebar -->
    <button class=\"btn-hide-sidebar ti-close color0-hov trans-0-4\"></button>

    <!-- - -->
    <ul class=\"menu-sidebar p-t-95 p-b-70\">
        <li class=\"t-center m-b-13\">
            <a href=\"homepage\" class=\"txt19\">Home</a>
        </li>

        <li class=\"t-center m-b-13\">
            <a href=\"\" class=\"txt19\">Menu</a>
        </li>

        <li class=\"t-center m-b-13\">
            <a href=\"\" class=\"txt19\">Reservation</a>
        </li>

        <li class=\"t-center m-b-13\">
            <a href=\"\" class=\"txt19\">Gallery</a>
        </li>

        <li class=\"t-center m-b-13\">
            <a href=\"\" class=\"txt19\">About</a>
        </li>

        <li class=\"t-center m-b-13\">
            <a href=\"{{ path('blog_ListPosts')}}\" class=\"txt19\">Blog</a>
        </li>

        <li class=\"t-center m-b-33\">
            <a href=\"\" class=\"txt19\">Contact</a>
        </li>

        {% if is_granted(\"ROLE_USER\") %}
            <li class=\"t-center\">
                <a href=\"{{  path('fos_user_security_logout')}}\" class=\"btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto\">Logout</a>
            </li>
        {% else %}
            <li class=\"t-center\">
                <a href=\"{{ path('fos_user_security_login') }}\" class=\"btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto\">Login</a>
            </li>
        {% endif %}

    </ul>

    <!-- - -->
    <div class=\"gallery-sidebar t-center p-l-60 p-r-60 p-b-40\">
        <!-- - -->
        <h4 class=\"txt20 m-b-33\">
            Gallery
        </h4>

        <!-- Gallery -->
        <div class=\"wrap-gallery-sidebar flex-w\">
            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-01.jpg') }}\" data-lightbox=\"gallery-footer\">
                <img src=\"{{ asset('assets/images/photo-gallery-thumb-01.jpg') }}\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"i{{ asset('assets/images/photo-gallery-02.jpg') }}\" data-lightbox=\"gallery-footer\">
                <img src=\"{{ asset('assets/images/photo-gallery-thumb-02.jpg') }}\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-03.jpg') }}\" data-lightbox=\"gallery-footer\">
                <img src=\"{{ asset('assets/images/photo-gallery-thumb-03.jpg') }}\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-05.jpg') }}\" data-lightbox=\"gallery-footer\">
                <img src=\"{{ asset('assets/images/photo-gallery-thumb-05.jpg') }}\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-06.jpg') }}\" data-lightbox=\"gallery-footer\">
                <img src=\"{{ asset('assets/images/photo-gallery-thumb-06.jpg') }}\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-07.jpg') }}\" data-lightbox=\"gallery-footer\">
                <img src=\"{{ asset('assets/images/photo-gallery-thumb-07.jpg') }}\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-09.jpg') }}\" data-lightbox=\"gallery-footer\">
                <img src=\"{{ asset('assets/images/photo-gallery-thumb-09.jpg') }}\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-10.jpg') }}\" data-lightbox=\"gallery-footer\">
                <img src=\"{{ asset('assets/images/photo-gallery-thumb-10.jpg') }}\" alt=\"GALLERY\">
            </a>

            <a class=\"item-gallery-sidebar wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-11.jpg') }}\" data-lightbox=\"gallery-footer\">
                <img src=\"{{ asset('assets/images/photo-gallery-thumb-11.jpg') }}\" alt=\"GALLERY\">
            </a>
        </div>
    </div>
</aside>



{% block body %}{% endblock %}

<footer class=\"bg1\">
    <div class=\"container p-t-40 p-b-70\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-md-4 p-t-50\">
                <!-- - -->
                <h4 class=\"txt13 m-b-33\">
                    Contact Us
                </h4>

                <ul class=\"m-b-70\">
                    <li class=\"txt14 m-b-14\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                        8th floor, 379 Hudson St, New York, NY 10018
                    </li>

                    <li class=\"txt14 m-b-14\">
                        <i class=\"far fa-phone\"></i>
                        (+1) 96 716 6879
                    </li>

                    <li class=\"txt14 m-b-14\">
                        <i class=\"far fa-file-contract\"></i>                        contact@site.com
                    </li>
                </ul>

                <!-- - -->
                <h4 class=\"txt13 m-b-32\">
                    Opening Times
                </h4>

                <ul>
                    <li class=\"txt14\">
                        09:30 AM – 11:00 PM
                    </li>

                    <li class=\"txt14\">
                        Every Day
                    </li>
                </ul>
            </div>

            <div class=\"col-sm-6 col-md-4 p-t-50\">
                <!-- - -->
                <h4 class=\"txt13 m-b-33\">
                    Latest twitter
                </h4>

                <div class=\"m-b-25\">
                        <span class=\"fs-13 color2 m-r-5\">
                            <i class=\"fab fa-twitter\" aria-hidden=\"true\"></i>
                        </span>
                    <a href=\"#\" class=\"txt15\">
                        @colorlib
                    </a>

                    <p class=\"txt14 m-b-18\">
                        Activello is a good option. It has a slider built into that displays the featured image in the slider.
                        <a href=\"#\" class=\"txt15\">
                            https://buff.ly/2zaSfAQ
                        </a>
                    </p>

                    <span class=\"txt16\">
                            21 Dec 2017
                        </span>
                </div>

                <div>
                        <span class=\"fs-13 color2 m-r-5\">
                            <i class=\"fab fa-twitter\" aria-hidden=\"true\"></i>
                        </span>
                    <a href=\"#\" class=\"txt15\">
                        @colorlib
                    </a>

                    <p class=\"txt14 m-b-18\">
                        Activello is a good option. It has a slider built into that displays
                        <a href=\"#\" class=\"txt15\">
                            https://buff.ly/2zaSfAQ
                        </a>
                    </p>

                    <span class=\"txt16\">
                            21 Dec 2017
                        </span>
                </div>
            </div>

            <div class=\"col-sm-6 col-md-4 p-t-50\">
                <!-- - -->
                <h4 class=\"txt13 m-b-38\">
                    Gallery
                </h4>

                <!-- Gallery footer -->
                <div class=\"wrap-gallery-footer flex-w\">
                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-01.jpg') }}\" data-lightbox=\"gallery-footer\">
                        <img src=\"{{ asset('assets/images/photo-gallery-thumb-01.jpg') }}\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-02.jpg') }}\" data-lightbox=\"gallery-footer\">
                        <img src=\"{{ asset('assets/images/photo-gallery-thumb-02.jpg') }}\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-03.jpg') }}\" data-lightbox=\"gallery-footer\">
                        <img src=\"{{ asset('assets/images/photo-gallery-thumb-03.jpg') }}\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-04.jpg') }}\" data-lightbox=\"gallery-footer\">
                        <img src=\"{{ asset('assets/images/photo-gallery-thumb-04.jpg') }}\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-05.jpg') }}\" data-lightbox=\"gallery-footer\">
                        <img src=\"{{ asset('assets/images/photo-gallery-thumb-05.jpg') }}\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-06.jpg') }}\" data-lightbox=\"gallery-footer\">
                        <img src=\"{{ asset('assets/images/photo-gallery-thumb-06.jpg') }}\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-07.jpg') }}\" data-lightbox=\"gallery-footer\">
                        <img src=\"{{ asset('assets/images/photo-gallery-thumb-07.jpg') }}\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-08.jpg') }}\" data-lightbox=\"gallery-footer\">
                        <img src=\"{{ asset('assets/images/photo-gallery-thumb-08.jpg') }}\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-09.jpg') }}\" data-lightbox=\"gallery-footer\">
                        <img src=\"{{ asset('assets/images/photo-gallery-thumb-09.jpg') }}\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-10.jpg') }}\" data-lightbox=\"gallery-footer\">
                        <img src=\"{{ asset('assets/images/photo-gallery-thumb-10.jpg') }}\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-11.jpg') }}\" data-lightbox=\"gallery-footer\">
                        <img src=\"{{ asset('assets/images/photo-gallery-thumb-11.jpg') }}\" alt=\"GALLERY\">
                    </a>

                    <a class=\"item-gallery-footer wrap-pic-w\" href=\"{{ asset('assets/images/photo-gallery-12.jpg') }}\" data-lightbox=\"gallery-footer\">
                        <img src=\"{{ asset('assets/images/photo-gallery-thumb-12.jpg') }}\" alt=\"GALLERY\">
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class=\"end-footer bg2\">
        <div class=\"container\">
            <div class=\"flex-sb-m flex-w p-t-22 p-b-22\">
                <div class=\"p-t-5 p-b-5\">
                    <a href=\"#\" class=\"fs-15 c-white\"><i class=\"fab fa-tripadvisor\" aria-hidden=\"true\"></i></a>
                    <a href=\"#\" class=\"fs-15 c-white\"><i class=\"fab fa-facebook m-l-18\" aria-hidden=\"true\"></i></a>
                    <a href=\"#\" class=\"fs-15 c-white\"><i class=\"fab fa-twitter m-l-18\" aria-hidden=\"true\"></i></a>
                </div>

                <div class=\"txt17 p-r-20 p-t-5 p-b-5\">
                    Copyright &copy; 2018 All rights reserved  |  This template is made with <i class=\"fab fa-heart\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class=\"btn-back-to-top bg0-hov\" id=\"myBtn\">
        <span class=\"symbol-btn-back-to-top\">
            <i class=\"fab fa-angle-double-up\" aria-hidden=\"true\"></i>
        </span>
</div>
{% block javascripts %}
    <script>

        \$(function () {
            \$(\"#mdb-lightbox-ui\").load(\"mdb-addons/mdb-lightbox-ui.html\");
        });
    </script>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script>
        var likelink=document.querySelectorAll('link')
        document.querySelectorAll('.link').forEach(function(link){
            link.addEventListener('click',onClickBtnLlike)

        })
        function onClickBtnLlike(event) {
            event.preventDefault();
            const url=this.href;
            const spanCount=this.querySelector('span.js-likes')
            console.log(\"biiij\");
            axios.get(url).then(function (response) {
                console.log(response);

                console.log(response.data.likes);
                spanCount.textContent=response.data.likes;
                console.log(\"biiij\");

            })


        }

    </script>


    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/animsition/js/animsition.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/bootstrap/js/popper.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/select2/select2.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/daterangepicker/moment.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/slick/slick.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/slick-custom.js') }}\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/parallax100/parallax100.js') }}\"></script>
    <script type=\"text/javascript\">
        \$('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/countdowntime/countdowntime.js') }}\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/lightbox2/js/lightbox.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('assets/js/googlemaps.js') }}\"></script>
    <script src=\"{{ asset('assets/js/map-custom.js') }}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>
{% endblock %}
</body>
</html>
", "::SmartStartBase.html.twig", "C:\\wamp\\www\\SmartStartSymfony\\app/Resources\\views/SmartStartBase.html.twig");
    }
}
