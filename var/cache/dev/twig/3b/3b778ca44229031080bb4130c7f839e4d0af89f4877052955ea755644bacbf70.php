<?php

/* ::BaseAdmin.html.twig */
class __TwigTemplate_fafc50e0a45df44769c9d78489925f9611fbe16d1dd6d5e4a594541282961c0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::BaseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::BaseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 395
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 436
        echo "    <div class=\"header\">
        <div class=\"logo\">
            <i class=\"fa fa-tachometer\"></i>
            <span>Brand</span>
        </div>
        <nav class=\"navbar navbar-default navbar-expand-xl navbar-light\">
            <div class=\"navbar-header d-flex col\">
                <a class=\"navbar-brand\" href=\"#\">Smart<b>Start</b></a>
                <button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle navbar-toggler ml-auto\">
                    <span class=\"navbar-toggler-icon\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id=\"navbarCollapse\" class=\"collapse navbar-collapse justify-content-start\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"nav-item active\"><a href=\"#\" class=\"nav-link\">Home</a></li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">About</a></li>
                    <li class=\"nav-item dropdown\">
                        <a data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\" href=\"#\">Services <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\" class=\"dropdown-item\">Web Design</a></li>
                            <li><a href=\"#\" class=\"dropdown-item\">Web Development</a></li>
                            <li><a href=\"#\" class=\"dropdown-item\">Graphic Design</a></li>
                            <li><a href=\"#\" class=\"dropdown-item\">Digital Marketing</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Blog</a></li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Contact</a></li>
                </ul>
                <form class=\"navbar-form form-inline\">
                    <div class=\"input-group search-box\">
                        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search by Name\">
                        <span class=\"input-group-addon\"><i class=\"material-icons\">&#xE8B6;</i></span>
                    </div>
                </form>
                <ul class=\"nav navbar-nav navbar-right ml-auto\">
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link notifications\"><i class=\"fa fa-bell-o\"></i><span class=\"badge\">1</span></a></li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link messages\"><i class=\"fa fa-envelope-o\"></i><span class=\"badge\">10</span></a></li>
                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle user-action\"><img src=\"https://www.tutorialrepublic.com/examples/images/avatar/2.jpg\" class=\"avatar\" alt=\"Avatar\"> Paula Wilson <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\" class=\"dropdown-item\"><i class=\"fa fa-user-o\"></i> Profile</a></li>
                            <li><a href=\"#\" class=\"dropdown-item\"><i class=\"fa fa-calendar-o\"></i> Calendar</a></li>
                            <li><a href=\"#\" class=\"dropdown-item\"><i class=\"fa fa-sliders\"></i> Settings</a></li>
                            <li class=\"divider dropdown-divider\"></li>
                            <li><a href=\"#\" class=\"dropdown-item\"><i class=\"material-icons\">&#xE8AC;</i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class=\"side-nav\">
        <div class=\"logo\">
            <i class=\"fa fa-tachometer\"></i>
            <span>Brand</span>
        </div>
        <nav>
            <ul>

                <li>
                    <a data-toggle=\"collapse\" data-target=\"#submenu-1\"><i class=\"fa fa-fw fa-search\"></i><span>Blog</span>  <i class=\"fa fa-fw fa-angle-down pull-right\"></i></a>
                    <ul id=\"submenu-1\" class=\"collapse\" style=\"list-style: none;\">
                        <li><a href=\"";
        // line 502
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listPosts");
        echo "\">Posts</a></li>
                        <li><a href=\"";
        // line 503
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_listComments");
        echo "\">Comments</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\">

                        <span><i class=\"fa fa-envelope\"></i></span>
                        <span>Messages</span>
                    </a>
                </li>
                <li class=\"active\">
                    <a href=\"#\">
                        <span><i class=\"fa fa-bar-chart\"></i></span>
                        <span>Analytics</span>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <span><i class=\"fa fa-credit-card-alt\"></i></span>
                        <span>Payments</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class=\"main-content\">
        <div class=\"title\">
            ";
        // line 530
        $this->displayBlock('title', $context, $blocks);
        // line 531
        echo "
        </div>
        ";
        // line 533
        $this->displayBlock('body', $context, $blocks);
        // line 534
        echo "

    </div>






</head>


</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link href=\"https://fonts.googleapis.com/css?family=Merienda+One\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <style type=\"text/css\">
            body{
                background: #eeeeee;
            }
            .form-inline {
                display: inline-block;
            }
            .navbar-header.col {
                padding: 0 !important;
            }
            .navbar {
                background: #fff;
                padding-left: 220px;
                padding-right: 16px;
                border-bottom: 1px solid #d6d6d6;
                box-shadow: 0 0 4px rgba(0,0,0,.1);
            }
            .nav-link img {
                border-radius: 50%;
                width: 36px;
                height: 36px;
                margin: -8px 0;
                float: left;
                margin-right: 10px;
            }
            .navbar .navbar-brand {
                color: #555;
                padding-left: 0;
                padding-right: 50px;
                font-family: 'Merienda One', sans-serif;
            }
            .navbar .navbar-brand i {
                font-size: 20px;
                margin-right: 5px;
            }
            .search-box {
                position: relative;
            }
            .search-box input {
                box-shadow: none;
                padding-right: 35px;
                border-radius: 3px !important;
            }
            .search-box .input-group-addon {
                min-width: 35px;
                border: none;
                background: transparent;
                position: absolute;
                right: 0;
                z-index: 9;
                padding: 7px;
                height: 100%;
            }
            .search-box i {
                color: #a0a5b1;
                font-size: 19px;
            }
            .navbar .nav-item i {
                font-size: 18px;
            }
            .navbar .dropdown-item i {
                font-size: 16px;
                min-width: 22px;
            }
            .navbar .nav-item.open > a {
                background: none !important;
            }
            .navbar .dropdown-menu {
                border-radius: 1px;
                border-color: #e5e5e5;
                box-shadow: 0 2px 8px rgba(0,0,0,.05);
            }
            .navbar .dropdown-menu li a {
                color: #777;
                padding: 8px 20px;
                line-height: normal;
            }
            .navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:active {
                color: #333;
            }
            .navbar .dropdown-item .material-icons {
                font-size: 21px;
                line-height: 16px;
                vertical-align: middle;
                margin-top: -2px;
            }
            .navbar .badge {
                background: #f44336;
                font-size: 11px;
                border-radius: 20px;
                position: absolute;
                min-width: 10px;
                padding: 4px 6px 0;
                min-height: 18px;
                top: 5px;
            }
            .navbar ul.nav li a.notifications, .navbar ul.nav li a.messages {
                position: relative;
                margin-right: 10px;
            }
            .navbar ul.nav li a.messages {
                margin-right: 20px;
            }
            .navbar a.notifications .badge {
                margin-left: -8px;
            }
            .navbar a.messages .badge {
                margin-left: -4px;
            }
            .navbar .active a, .navbar .active a:hover, .navbar .active a:focus {
                background: transparent !important;
            }
            @media (min-width: 1200px){
                .form-inline .input-group {
                    width: 300px;
                    margin-left: 30px;
                }
            }
            @media (max-width: 1199px){
                .form-inline {
                    display: block;
                    margin-bottom: 10px;
                }
                .input-group {
                    width: 100%;
                }
            }
        </style>
        <style>
            .ad {
                position: absolute;
                width: 300px;
                height: 250px;
                border: 1px solid #ddd;
                left: 50%;
                transform: translateX(-50%);
                top: 250px;
                z-index: 10;
            }
            .ad .close {
                position: absolute;
                font-family: 'ionicons';
                width: 20px;
                height: 20px;
                color: #fff;
                background-color: #999;
                font-size: 20px;
                left: -20px;
                top: -1px;
                display: table-cell;
                vertical-align: middle;
                cursor: pointer;
                text-align: center;
            }
        </style>
        <link href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300"), "html", null, true);
        echo "\"rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/main.css"), "html", null, true);
        echo "\">
        <style type=\"text/css\">
            body {
                color: #566787;
                background: #f5f5f5;
                font-family: 'Varela Round', sans-serif;
                font-size: 13px;
            }
            .table-wrapper {
                background: #fff;
                padding: 20px 25px;
                margin: 30px 0;
                border-radius: 3px;
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .table-title {
                padding-bottom: 15px;
                background: #435d7d;
                color: #fff;
                padding: 16px 30px;
                margin: -20px -25px 10px;
                border-radius: 3px 3px 0 0;
            }
            .table-title h2 {
                margin: 5px 0 0;
                font-size: 24px;
            }
            .table-title .btn-group {
                float: right;
            }
            .table-title .btn {
                color: #fff;
                float: right;
                font-size: 13px;
                border: none;
                min-width: 50px;
                border-radius: 2px;
                border: none;
                outline: none !important;
                margin-left: 10px;
            }
            .table-title .btn i {
                float: left;
                font-size: 21px;
                margin-right: 5px;
            }
            .table-title .btn span {
                float: left;
                margin-top: 2px;
            }
            table.table tr th, table.table tr td {
                border-color: #e9e9e9;
                padding: 12px 15px;
                vertical-align: middle;

            }
            table.table tr th:first-child {
                width: 100px;
            }
            table.table tr th:last-child {
                width: 150px;
            }
            table.table-striped tbody tr:nth-of-type(odd) {
                background-color: #fcfcfc;
            }
            table.table-striped.table-hover tbody tr:hover {
                background: #f5f5f5;
            }
            table.table th i {
                font-size: 13px;
                margin: 0 5px;
                cursor: pointer;
            }
            table.table td:last-child i {
                opacity: 0.9;
                font-size: 22px;
                margin: 0 5px;
            }
            table.table td a {
                font-weight: bold;
                color: #566787;
                display: inline-block;
                text-decoration: none;
                outline: none !important;
            }
            table.table td a:hover {
                color: #2196F3;
            }
            table.table td a.edit {
                color: #FFC107;
            }
            table.table td a.delete {
                color: #F44336;
            }
            table.table td i {
                font-size: 19px;
            }
            table.table .avatar {
                border-radius: 50%;
                vertical-align: middle;
                margin-right: 10px;
            }
            .pagination {
                float: right;
                margin: 0 0 5px;
            }
            .pagination li a {
                border: none;
                font-size: 13px;
                min-width: 30px;
                min-height: 30px;
                color: #999;
                margin: 0 2px;
                line-height: 30px;
                border-radius: 2px !important;
                text-align: center;
                padding: 0 6px;
            }
            .pagination li a:hover {
                color: #666;
            }
            .pagination li.active a, .pagination li.active a.page-link {
                background: #03A9F4;
            }
            .pagination li.active a:hover {
                background: #0397d6;
            }
            .pagination li.disabled i {
                color: #ccc;
            }
            .pagination li i {
                font-size: 16px;
                padding-top: 6px
            }
            .hint-text {
                float: left;
                margin-top: 10px;
                font-size: 13px;
            }
            /* Custom checkbox */
            .custom-checkbox {
                position: relative;
            }
            .custom-checkbox input[type=\"checkbox\"] {
                opacity: 0;
                position: absolute;
                margin: 5px 0 0 3px;
                z-index: 9;
            }
            .custom-checkbox label:before{
                width: 18px;
                height: 18px;
            }
            .custom-checkbox label:before {
                content: '';
                margin-right: 10px;
                display: inline-block;
                vertical-align: text-top;
                background: white;
                border: 1px solid #bbb;
                border-radius: 2px;
                box-sizing: border-box;
                z-index: 2;
            }
            .custom-checkbox input[type=\"checkbox\"]:checked + label:after {
                content: '';
                position: absolute;
                left: 6px;
                top: 3px;
                width: 6px;
                height: 11px;
                border: solid #000;
                border-width: 0 3px 3px 0;
                transform: inherit;
                z-index: 3;
                transform: rotateZ(45deg);
            }
            .custom-checkbox input[type=\"checkbox\"]:checked + label:before {
                border-color: #03A9F4;
                background: #03A9F4;
            }
            .custom-checkbox input[type=\"checkbox\"]:checked + label:after {
                border-color: #fff;
            }
            .custom-checkbox input[type=\"checkbox\"]:disabled + label:before {
                color: #b8b8b8;
                cursor: auto;
                box-shadow: none;
                background: #ddd;
            }
            /* Modal styles */
            .modal .modal-dialog {
                max-width: 600px;
            }
            .modal .modal-header, .modal .modal-body, .modal .modal-footer {
                padding: 20px 30px;
            }
            .modal .modal-content {
                border-radius: 3px;
            }
            .modal .modal-footer {
                background: #ecf0f1;
                border-radius: 0 0 3px 3px;
            }
            .modal .modal-title {
                display: inline-block;
            }
            .modal .form-control {
                border-radius: 2px;
                box-shadow: none;
                border-color: #dddddd;
            }
            .modal textarea.form-control {
                resize: vertical;
            }
            .modal .btn {
                border-radius: 2px;
                min-width: 100px;
            }
            .modal form label {
                font-weight: normal;
            }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 395
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 396
        echo "        <script>
            function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById(\"myInput\");
                filter = input.value.toUpperCase();
                table = document.getElementById(\"myTable\");
                tr = table.getElementsByTagName(\"tr\");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName(\"td\")[0];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                       if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = \"\";
                        } else {
                            tr[i].style.display = \"none\";
                        }
                    }
                }
            }
        </script>
        <script async src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"), "html", null, true);
        echo "\"></script>
        <!-- kodhus demos -->

        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.highcharts.com/highcharts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.highcharts.com/modules/data.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loginassets/main.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$(function() {
                \$('.close').click(function() {
                    \$('.ad').css('display', 'none');
                })
            })
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 530
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 533
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::BaseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  687 => 533,  670 => 530,  651 => 427,  647 => 426,  643 => 425,  639 => 424,  635 => 423,  631 => 422,  622 => 416,  600 => 396,  591 => 395,  357 => 171,  353 => 170,  349 => 169,  345 => 168,  184 => 9,  175 => 8,  153 => 534,  151 => 533,  147 => 531,  145 => 530,  115 => 503,  111 => 502,  43 => 436,  40 => 395,  38 => 8,  29 => 1,);
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
    <title></title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
        <link href=\"https://fonts.googleapis.com/css?family=Merienda+One\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <style type=\"text/css\">
            body{
                background: #eeeeee;
            }
            .form-inline {
                display: inline-block;
            }
            .navbar-header.col {
                padding: 0 !important;
            }
            .navbar {
                background: #fff;
                padding-left: 220px;
                padding-right: 16px;
                border-bottom: 1px solid #d6d6d6;
                box-shadow: 0 0 4px rgba(0,0,0,.1);
            }
            .nav-link img {
                border-radius: 50%;
                width: 36px;
                height: 36px;
                margin: -8px 0;
                float: left;
                margin-right: 10px;
            }
            .navbar .navbar-brand {
                color: #555;
                padding-left: 0;
                padding-right: 50px;
                font-family: 'Merienda One', sans-serif;
            }
            .navbar .navbar-brand i {
                font-size: 20px;
                margin-right: 5px;
            }
            .search-box {
                position: relative;
            }
            .search-box input {
                box-shadow: none;
                padding-right: 35px;
                border-radius: 3px !important;
            }
            .search-box .input-group-addon {
                min-width: 35px;
                border: none;
                background: transparent;
                position: absolute;
                right: 0;
                z-index: 9;
                padding: 7px;
                height: 100%;
            }
            .search-box i {
                color: #a0a5b1;
                font-size: 19px;
            }
            .navbar .nav-item i {
                font-size: 18px;
            }
            .navbar .dropdown-item i {
                font-size: 16px;
                min-width: 22px;
            }
            .navbar .nav-item.open > a {
                background: none !important;
            }
            .navbar .dropdown-menu {
                border-radius: 1px;
                border-color: #e5e5e5;
                box-shadow: 0 2px 8px rgba(0,0,0,.05);
            }
            .navbar .dropdown-menu li a {
                color: #777;
                padding: 8px 20px;
                line-height: normal;
            }
            .navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:active {
                color: #333;
            }
            .navbar .dropdown-item .material-icons {
                font-size: 21px;
                line-height: 16px;
                vertical-align: middle;
                margin-top: -2px;
            }
            .navbar .badge {
                background: #f44336;
                font-size: 11px;
                border-radius: 20px;
                position: absolute;
                min-width: 10px;
                padding: 4px 6px 0;
                min-height: 18px;
                top: 5px;
            }
            .navbar ul.nav li a.notifications, .navbar ul.nav li a.messages {
                position: relative;
                margin-right: 10px;
            }
            .navbar ul.nav li a.messages {
                margin-right: 20px;
            }
            .navbar a.notifications .badge {
                margin-left: -8px;
            }
            .navbar a.messages .badge {
                margin-left: -4px;
            }
            .navbar .active a, .navbar .active a:hover, .navbar .active a:focus {
                background: transparent !important;
            }
            @media (min-width: 1200px){
                .form-inline .input-group {
                    width: 300px;
                    margin-left: 30px;
                }
            }
            @media (max-width: 1199px){
                .form-inline {
                    display: block;
                    margin-bottom: 10px;
                }
                .input-group {
                    width: 100%;
                }
            }
        </style>
        <style>
            .ad {
                position: absolute;
                width: 300px;
                height: 250px;
                border: 1px solid #ddd;
                left: 50%;
                transform: translateX(-50%);
                top: 250px;
                z-index: 10;
            }
            .ad .close {
                position: absolute;
                font-family: 'ionicons';
                width: 20px;
                height: 20px;
                color: #fff;
                background-color: #999;
                font-size: 20px;
                left: -20px;
                top: -1px;
                display: table-cell;
                vertical-align: middle;
                cursor: pointer;
                text-align: center;
            }
        </style>
        <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300') }}\"rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('loginassets/main.css') }}\">
        <style type=\"text/css\">
            body {
                color: #566787;
                background: #f5f5f5;
                font-family: 'Varela Round', sans-serif;
                font-size: 13px;
            }
            .table-wrapper {
                background: #fff;
                padding: 20px 25px;
                margin: 30px 0;
                border-radius: 3px;
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .table-title {
                padding-bottom: 15px;
                background: #435d7d;
                color: #fff;
                padding: 16px 30px;
                margin: -20px -25px 10px;
                border-radius: 3px 3px 0 0;
            }
            .table-title h2 {
                margin: 5px 0 0;
                font-size: 24px;
            }
            .table-title .btn-group {
                float: right;
            }
            .table-title .btn {
                color: #fff;
                float: right;
                font-size: 13px;
                border: none;
                min-width: 50px;
                border-radius: 2px;
                border: none;
                outline: none !important;
                margin-left: 10px;
            }
            .table-title .btn i {
                float: left;
                font-size: 21px;
                margin-right: 5px;
            }
            .table-title .btn span {
                float: left;
                margin-top: 2px;
            }
            table.table tr th, table.table tr td {
                border-color: #e9e9e9;
                padding: 12px 15px;
                vertical-align: middle;

            }
            table.table tr th:first-child {
                width: 100px;
            }
            table.table tr th:last-child {
                width: 150px;
            }
            table.table-striped tbody tr:nth-of-type(odd) {
                background-color: #fcfcfc;
            }
            table.table-striped.table-hover tbody tr:hover {
                background: #f5f5f5;
            }
            table.table th i {
                font-size: 13px;
                margin: 0 5px;
                cursor: pointer;
            }
            table.table td:last-child i {
                opacity: 0.9;
                font-size: 22px;
                margin: 0 5px;
            }
            table.table td a {
                font-weight: bold;
                color: #566787;
                display: inline-block;
                text-decoration: none;
                outline: none !important;
            }
            table.table td a:hover {
                color: #2196F3;
            }
            table.table td a.edit {
                color: #FFC107;
            }
            table.table td a.delete {
                color: #F44336;
            }
            table.table td i {
                font-size: 19px;
            }
            table.table .avatar {
                border-radius: 50%;
                vertical-align: middle;
                margin-right: 10px;
            }
            .pagination {
                float: right;
                margin: 0 0 5px;
            }
            .pagination li a {
                border: none;
                font-size: 13px;
                min-width: 30px;
                min-height: 30px;
                color: #999;
                margin: 0 2px;
                line-height: 30px;
                border-radius: 2px !important;
                text-align: center;
                padding: 0 6px;
            }
            .pagination li a:hover {
                color: #666;
            }
            .pagination li.active a, .pagination li.active a.page-link {
                background: #03A9F4;
            }
            .pagination li.active a:hover {
                background: #0397d6;
            }
            .pagination li.disabled i {
                color: #ccc;
            }
            .pagination li i {
                font-size: 16px;
                padding-top: 6px
            }
            .hint-text {
                float: left;
                margin-top: 10px;
                font-size: 13px;
            }
            /* Custom checkbox */
            .custom-checkbox {
                position: relative;
            }
            .custom-checkbox input[type=\"checkbox\"] {
                opacity: 0;
                position: absolute;
                margin: 5px 0 0 3px;
                z-index: 9;
            }
            .custom-checkbox label:before{
                width: 18px;
                height: 18px;
            }
            .custom-checkbox label:before {
                content: '';
                margin-right: 10px;
                display: inline-block;
                vertical-align: text-top;
                background: white;
                border: 1px solid #bbb;
                border-radius: 2px;
                box-sizing: border-box;
                z-index: 2;
            }
            .custom-checkbox input[type=\"checkbox\"]:checked + label:after {
                content: '';
                position: absolute;
                left: 6px;
                top: 3px;
                width: 6px;
                height: 11px;
                border: solid #000;
                border-width: 0 3px 3px 0;
                transform: inherit;
                z-index: 3;
                transform: rotateZ(45deg);
            }
            .custom-checkbox input[type=\"checkbox\"]:checked + label:before {
                border-color: #03A9F4;
                background: #03A9F4;
            }
            .custom-checkbox input[type=\"checkbox\"]:checked + label:after {
                border-color: #fff;
            }
            .custom-checkbox input[type=\"checkbox\"]:disabled + label:before {
                color: #b8b8b8;
                cursor: auto;
                box-shadow: none;
                background: #ddd;
            }
            /* Modal styles */
            .modal .modal-dialog {
                max-width: 600px;
            }
            .modal .modal-header, .modal .modal-body, .modal .modal-footer {
                padding: 20px 30px;
            }
            .modal .modal-content {
                border-radius: 3px;
            }
            .modal .modal-footer {
                background: #ecf0f1;
                border-radius: 0 0 3px 3px;
            }
            .modal .modal-title {
                display: inline-block;
            }
            .modal .form-control {
                border-radius: 2px;
                box-shadow: none;
                border-color: #dddddd;
            }
            .modal textarea.form-control {
                resize: vertical;
            }
            .modal .btn {
                border-radius: 2px;
                min-width: 100px;
            }
            .modal form label {
                font-weight: normal;
            }
        </style>
    {% endblock %}
    {% block javascripts %}
        <script>
            function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById(\"myInput\");
                filter = input.value.toUpperCase();
                table = document.getElementById(\"myTable\");
                tr = table.getElementsByTagName(\"tr\");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName(\"td\")[0];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                       if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = \"\";
                        } else {
                            tr[i].style.display = \"none\";
                        }
                    }
                }
            }
        </script>
        <script async src=\"{{ asset('//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js') }}\"></script>
        <!-- kodhus demos -->

        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <script src=\"{{ asset('https://code.jquery.com/jquery-2.2.0.min.js') }}\"></script>
        <script src=\"{{ asset('https://code.highcharts.com/highcharts.js') }}\"></script>
        <script src=\"{{ asset('https://code.highcharts.com/modules/data.js') }}\"></script>
        <script src=\"{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('loginassets/main.js') }}\"></script>
        <script type=\"text/javascript\">
            \$(function() {
                \$('.close').click(function() {
                    \$('.ad').css('display', 'none');
                })
            })
        </script>
    {% endblock %}
    <div class=\"header\">
        <div class=\"logo\">
            <i class=\"fa fa-tachometer\"></i>
            <span>Brand</span>
        </div>
        <nav class=\"navbar navbar-default navbar-expand-xl navbar-light\">
            <div class=\"navbar-header d-flex col\">
                <a class=\"navbar-brand\" href=\"#\">Smart<b>Start</b></a>
                <button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle navbar-toggler ml-auto\">
                    <span class=\"navbar-toggler-icon\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id=\"navbarCollapse\" class=\"collapse navbar-collapse justify-content-start\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"nav-item active\"><a href=\"#\" class=\"nav-link\">Home</a></li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">About</a></li>
                    <li class=\"nav-item dropdown\">
                        <a data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\" href=\"#\">Services <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\" class=\"dropdown-item\">Web Design</a></li>
                            <li><a href=\"#\" class=\"dropdown-item\">Web Development</a></li>
                            <li><a href=\"#\" class=\"dropdown-item\">Graphic Design</a></li>
                            <li><a href=\"#\" class=\"dropdown-item\">Digital Marketing</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Blog</a></li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Contact</a></li>
                </ul>
                <form class=\"navbar-form form-inline\">
                    <div class=\"input-group search-box\">
                        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search by Name\">
                        <span class=\"input-group-addon\"><i class=\"material-icons\">&#xE8B6;</i></span>
                    </div>
                </form>
                <ul class=\"nav navbar-nav navbar-right ml-auto\">
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link notifications\"><i class=\"fa fa-bell-o\"></i><span class=\"badge\">1</span></a></li>
                    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link messages\"><i class=\"fa fa-envelope-o\"></i><span class=\"badge\">10</span></a></li>
                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle user-action\"><img src=\"https://www.tutorialrepublic.com/examples/images/avatar/2.jpg\" class=\"avatar\" alt=\"Avatar\"> Paula Wilson <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\" class=\"dropdown-item\"><i class=\"fa fa-user-o\"></i> Profile</a></li>
                            <li><a href=\"#\" class=\"dropdown-item\"><i class=\"fa fa-calendar-o\"></i> Calendar</a></li>
                            <li><a href=\"#\" class=\"dropdown-item\"><i class=\"fa fa-sliders\"></i> Settings</a></li>
                            <li class=\"divider dropdown-divider\"></li>
                            <li><a href=\"#\" class=\"dropdown-item\"><i class=\"material-icons\">&#xE8AC;</i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class=\"side-nav\">
        <div class=\"logo\">
            <i class=\"fa fa-tachometer\"></i>
            <span>Brand</span>
        </div>
        <nav>
            <ul>

                <li>
                    <a data-toggle=\"collapse\" data-target=\"#submenu-1\"><i class=\"fa fa-fw fa-search\"></i><span>Blog</span>  <i class=\"fa fa-fw fa-angle-down pull-right\"></i></a>
                    <ul id=\"submenu-1\" class=\"collapse\" style=\"list-style: none;\">
                        <li><a href=\"{{ path('admin_listPosts') }}\">Posts</a></li>
                        <li><a href=\"{{ path('admin_listComments') }}\">Comments</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\">

                        <span><i class=\"fa fa-envelope\"></i></span>
                        <span>Messages</span>
                    </a>
                </li>
                <li class=\"active\">
                    <a href=\"#\">
                        <span><i class=\"fa fa-bar-chart\"></i></span>
                        <span>Analytics</span>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <span><i class=\"fa fa-credit-card-alt\"></i></span>
                        <span>Payments</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class=\"main-content\">
        <div class=\"title\">
            {% block title %}{% endblock %}

        </div>
        {% block body %}{% endblock %}


    </div>






</head>


</html>", "::BaseAdmin.html.twig", "C:\\wamp\\www\\SmartStartSymfony\\app/Resources\\views/BaseAdmin.html.twig");
    }
}
