<?php

/* :default:index.html.twig */
class __TwigTemplate_19247e33eb56cb15319ca417aef1a7fa8bf269ba22c8af1d6989f5a57d24b6fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", ":default:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

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

        echo "About";
        
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
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bg-title-page-03.jpg"), "html", null, true);
        echo ");\">
        <h2 class=\"tit6 t-center\">
           Welcome To SmartStart
        </h2>
    </section>


    <!-- Our Story -->
    <section class=\"bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15\">
\t\t<span class=\"tit2 t-center\">
\t\t\tItalian Restaurant
\t\t</span>

        <h3 class=\"tit3 t-center m-b-35 m-t-5\">
            Our Story
        </h3>

        <p class=\"t-center size32 m-l-r-auto\">
            Fusce at risus eget mi auctor pulvinar. Suspendisse maximus venenatis pretium. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam purus purus, lacinia a scelerisque in, luctus vel felis. Donec odio diam, dignissim a efficitur at, efficitur et est. Pellentesque semper est ut pulvinar ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla et leo accumsan, egestas velit ac, fringilla tortor. Sed varius justo sed luctus mattis.
        </p>
    </section>


    <!-- Video -->
    <section class=\"section-video parallax100\" style=\"background-image: url(";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/header-menu-01.jpg"), "html", null, true);
        echo ");\">
        <div class=\"content-video t-center p-t-225 p-b-250\">
\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\tDiscover
\t\t\t</span>

            <h3 class=\"tit4 t-center p-l-15 p-r-15 p-t-3\">
                Our Video
            </h3>

            <div class=\"btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33\" data-toggle=\"modal\" data-target=\"#modal-video-01\">
                <div class=\"flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4\">
                    <i class=\"fa fa-play fs-18 m-l-2\" aria-hidden=\"true\"></i>
                </div>
            </div>
        </div>
    </section>


    <!-- Delicious & Romantic-->
    <section class=\"bg1-pattern p-t-120 p-b-105\">
        <div class=\"container\">
            <!-- Delicious -->
            <div class=\"row\">
                <div class=\"col-md-6 p-t-45 p-b-30\">
                    <div class=\"wrap-text-delicious t-center\">
\t\t\t\t\t\t<span class=\"tit2 t-center\">
\t\t\t\t\t\t\tDelicious
\t\t\t\t\t\t</span>

                        <h3 class=\"tit3 t-center m-b-35 m-t-5\">
                            RECIPES
                        </h3>

                        <p class=\"t-center m-b-22 size3 m-l-r-auto\">
                            Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.
                        </p>
                    </div>
                </div>

                <div class=\"col-md-6 p-b-30\">
                    <div class=\"wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto\">
                        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/our-story-01.jpg"), "html", null, true);
        echo "\" alt=\"IMG-OUR\">
                    </div>
                </div>
            </div>


            <!-- Romantic -->
            <div class=\"row p-t-170\">
                <div class=\"col-md-6 p-b-30\">
                    <div class=\"wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto\">
                        <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/our-story-02.jpg"), "html", null, true);
        echo "\" alt=\"IMG-OUR\">
                    </div>
                </div>

                <div class=\"col-md-6 p-t-45 p-b-30\">
                    <div class=\"wrap-text-romantic t-center\">
\t\t\t\t\t\t<span class=\"tit2 t-center\">
\t\t\t\t\t\t\tRomantic
\t\t\t\t\t\t</span>

                        <h3 class=\"tit3 t-center m-b-35 m-t-5\">
                            Restaurant
                        </h3>

                        <p class=\"t-center m-b-22 size3 m-l-r-auto\">
                            Fusce iaculis, quam quis volutpat cursus, tellus quam varius eros, in euismod lorem nisl in ante. Maecenas imperdiet vulputate dui sit amet vestibulum. Nulla quis suscipit nisl.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Banner -->
    <div class=\"parallax0 parallax100\" style=\"background-image: url(";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/bg-cover-video-02.jpg"), "html", null, true);
        echo ");\">
        <div class=\"overlay0-parallax t-center size33\"></div>
    </div>


    <!-- Chef -->
    <section class=\"section-chef bgwhite p-t-115 p-b-95\">
        <div class=\"container t-center\">
\t\t\t<span class=\"tit2 t-center\">
\t\t\t\tMeet Our
\t\t\t</span>

            <h3 class=\"tit5 t-center m-b-50 m-t-5\">
                Chef
            </h3>

            <div class=\"row\">
                <div class=\"col-md-8 col-lg-4 m-l-r-auto p-b-30\">
                    <!-- -Block5 -->
                    <div class=\"blo5 pos-relative p-t-60\">
                        <div class=\"pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t\">
                            <a href=\"#\"><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/avatar-02.jpg"), "html", null, true);
        echo "\" alt=\"IGM-AVATAR\"></a>
                        </div>

                        <div class=\"text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30\">
                            <a href=\"#\" class=\"txt34 dis-block p-b-6\">
                                Peter Hart
                            </a>

                            <span class=\"dis-block t-center txt35 p-b-25\">
\t\t\t\t\t\t\t\tChef
\t\t\t\t\t\t\t</span>

                            <p class=\"t-center\">
                                Donec porta eleifend mauris ut effici-tur. Quisque non velit vestibulum, lob-ortis mi eget, rhoncus nunc
                            </p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-8 col-lg-4 m-l-r-auto p-b-30\">
                    <!-- -Block5 -->
                    <div class=\"blo5 pos-relative p-t-60\">
                        <div class=\"pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t\">
                            <a href=\"#\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/avatar-03.jpg"), "html", null, true);
        echo "\" alt=\"IGM-AVATAR\"></a>
                        </div>

                        <div class=\"text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30\">
                            <a href=\"#\" class=\"txt34 dis-block p-b-6\">
                                Joyce Bowman
                            </a>

                            <span class=\"dis-block t-center txt35 p-b-25\">
\t\t\t\t\t\t\t\tChef
\t\t\t\t\t\t\t</span>

                            <p class=\"t-center\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies felis a sem tempus tempus.
                            </p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-8 col-lg-4 m-l-r-auto p-b-30\">
                    <!-- -Block5 -->
                    <div class=\"blo5 pos-relative p-t-60\">
                        <div class=\"pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t\">
                            <a href=\"#\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/avatar-05.jpg"), "html", null, true);
        echo "\" alt=\"IGM-AVATAR\"></a>
                        </div>

                        <div class=\"text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30\">
                            <a href=\"#\" class=\"txt34 dis-block p-b-6\">
                                Peter Hart
                            </a>

                            <span class=\"dis-block t-center txt35 p-b-25\">
\t\t\t\t\t\t\t\tChef
\t\t\t\t\t\t\t</span>

                            <p class=\"t-center\">
                                Phasellus aliquam libero a nisi varius, vitae placerat sem aliquet. Ut at velit nec ipsum iaculis posuere quis in sapien
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sign up -->
    <div class=\"section-signup bg1-pattern p-t-85 p-b-85\">
        <form class=\"flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5\">
\t\t\t<span class=\"txt5 m-10\">
\t\t\t\tSpecials Sign up
\t\t\t</span>

            <div class=\"wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10\">
                <input class=\"bo-rad-10 sizefull txt10 p-l-20\" type=\"text\" name=\"email-address\" placeholder=\"Email Adrress\">
                <i class=\"fa fa-envelope ab-r-m m-r-18\" aria-hidden=\"true\"></i>
            </div>

            <!-- Button3 -->
            <button type=\"submit\" class=\"btn3 flex-c-m size18 txt11 trans-0-4 m-10\">
                Sign-up
            </button>
        </form>
    </div>

    <!-- Container Selection1 -->
    <div id=\"dropDownSelect1\"></div>
    <!-- Modal Video 01-->
    <div class=\"modal fade\" id=\"modal-video-01\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">

        <div class=\"modal-dialog\" role=\"document\" data-dismiss=\"modal\">
            <div class=\"close-mo-video-01 trans-0-4\" data-dismiss=\"modal\" aria-label=\"Close\">&times;</div>

            <div class=\"wrap-video-mo-01\">
                <div class=\"w-full wrap-pic-w op-0-0\"><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/video-16-9.jpg"), "html", null, true);
        echo "\" alt=\"IMG\"></div>
                <div class=\"video-mo-01\">
                    <iframe src=\"https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0\" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 226,  262 => 175,  236 => 152,  210 => 129,  186 => 108,  158 => 83,  145 => 73,  100 => 31,  73 => 7,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}About{% endblock %}
{% block body %}


    <!-- Title Page -->
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url({{ asset('assets/images/bg-title-page-03.jpg') }});\">
        <h2 class=\"tit6 t-center\">
           Welcome To SmartStart
        </h2>
    </section>


    <!-- Our Story -->
    <section class=\"bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15\">
\t\t<span class=\"tit2 t-center\">
\t\t\tItalian Restaurant
\t\t</span>

        <h3 class=\"tit3 t-center m-b-35 m-t-5\">
            Our Story
        </h3>

        <p class=\"t-center size32 m-l-r-auto\">
            Fusce at risus eget mi auctor pulvinar. Suspendisse maximus venenatis pretium. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam purus purus, lacinia a scelerisque in, luctus vel felis. Donec odio diam, dignissim a efficitur at, efficitur et est. Pellentesque semper est ut pulvinar ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla et leo accumsan, egestas velit ac, fringilla tortor. Sed varius justo sed luctus mattis.
        </p>
    </section>


    <!-- Video -->
    <section class=\"section-video parallax100\" style=\"background-image: url({{ asset('assets/images/header-menu-01.jpg') }});\">
        <div class=\"content-video t-center p-t-225 p-b-250\">
\t\t\t<span class=\"tit2 p-l-15 p-r-15\">
\t\t\t\tDiscover
\t\t\t</span>

            <h3 class=\"tit4 t-center p-l-15 p-r-15 p-t-3\">
                Our Video
            </h3>

            <div class=\"btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33\" data-toggle=\"modal\" data-target=\"#modal-video-01\">
                <div class=\"flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4\">
                    <i class=\"fa fa-play fs-18 m-l-2\" aria-hidden=\"true\"></i>
                </div>
            </div>
        </div>
    </section>


    <!-- Delicious & Romantic-->
    <section class=\"bg1-pattern p-t-120 p-b-105\">
        <div class=\"container\">
            <!-- Delicious -->
            <div class=\"row\">
                <div class=\"col-md-6 p-t-45 p-b-30\">
                    <div class=\"wrap-text-delicious t-center\">
\t\t\t\t\t\t<span class=\"tit2 t-center\">
\t\t\t\t\t\t\tDelicious
\t\t\t\t\t\t</span>

                        <h3 class=\"tit3 t-center m-b-35 m-t-5\">
                            RECIPES
                        </h3>

                        <p class=\"t-center m-b-22 size3 m-l-r-auto\">
                            Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.
                        </p>
                    </div>
                </div>

                <div class=\"col-md-6 p-b-30\">
                    <div class=\"wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto\">
                        <img src=\"{{ asset('assets/images/our-story-01.jpg') }}\" alt=\"IMG-OUR\">
                    </div>
                </div>
            </div>


            <!-- Romantic -->
            <div class=\"row p-t-170\">
                <div class=\"col-md-6 p-b-30\">
                    <div class=\"wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto\">
                        <img src=\"{{ asset('assets/images/our-story-02.jpg') }}\" alt=\"IMG-OUR\">
                    </div>
                </div>

                <div class=\"col-md-6 p-t-45 p-b-30\">
                    <div class=\"wrap-text-romantic t-center\">
\t\t\t\t\t\t<span class=\"tit2 t-center\">
\t\t\t\t\t\t\tRomantic
\t\t\t\t\t\t</span>

                        <h3 class=\"tit3 t-center m-b-35 m-t-5\">
                            Restaurant
                        </h3>

                        <p class=\"t-center m-b-22 size3 m-l-r-auto\">
                            Fusce iaculis, quam quis volutpat cursus, tellus quam varius eros, in euismod lorem nisl in ante. Maecenas imperdiet vulputate dui sit amet vestibulum. Nulla quis suscipit nisl.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Banner -->
    <div class=\"parallax0 parallax100\" style=\"background-image: url({{ asset('assets/images/bg-cover-video-02.jpg') }});\">
        <div class=\"overlay0-parallax t-center size33\"></div>
    </div>


    <!-- Chef -->
    <section class=\"section-chef bgwhite p-t-115 p-b-95\">
        <div class=\"container t-center\">
\t\t\t<span class=\"tit2 t-center\">
\t\t\t\tMeet Our
\t\t\t</span>

            <h3 class=\"tit5 t-center m-b-50 m-t-5\">
                Chef
            </h3>

            <div class=\"row\">
                <div class=\"col-md-8 col-lg-4 m-l-r-auto p-b-30\">
                    <!-- -Block5 -->
                    <div class=\"blo5 pos-relative p-t-60\">
                        <div class=\"pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t\">
                            <a href=\"#\"><img src=\"{{ asset('assets/images/avatar-02.jpg') }}\" alt=\"IGM-AVATAR\"></a>
                        </div>

                        <div class=\"text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30\">
                            <a href=\"#\" class=\"txt34 dis-block p-b-6\">
                                Peter Hart
                            </a>

                            <span class=\"dis-block t-center txt35 p-b-25\">
\t\t\t\t\t\t\t\tChef
\t\t\t\t\t\t\t</span>

                            <p class=\"t-center\">
                                Donec porta eleifend mauris ut effici-tur. Quisque non velit vestibulum, lob-ortis mi eget, rhoncus nunc
                            </p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-8 col-lg-4 m-l-r-auto p-b-30\">
                    <!-- -Block5 -->
                    <div class=\"blo5 pos-relative p-t-60\">
                        <div class=\"pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t\">
                            <a href=\"#\"><img src=\"{{ asset('assets/images/avatar-03.jpg') }}\" alt=\"IGM-AVATAR\"></a>
                        </div>

                        <div class=\"text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30\">
                            <a href=\"#\" class=\"txt34 dis-block p-b-6\">
                                Joyce Bowman
                            </a>

                            <span class=\"dis-block t-center txt35 p-b-25\">
\t\t\t\t\t\t\t\tChef
\t\t\t\t\t\t\t</span>

                            <p class=\"t-center\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies felis a sem tempus tempus.
                            </p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-8 col-lg-4 m-l-r-auto p-b-30\">
                    <!-- -Block5 -->
                    <div class=\"blo5 pos-relative p-t-60\">
                        <div class=\"pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t\">
                            <a href=\"#\"><img src=\"{{ asset('assets/images/avatar-05.jpg') }}\" alt=\"IGM-AVATAR\"></a>
                        </div>

                        <div class=\"text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30\">
                            <a href=\"#\" class=\"txt34 dis-block p-b-6\">
                                Peter Hart
                            </a>

                            <span class=\"dis-block t-center txt35 p-b-25\">
\t\t\t\t\t\t\t\tChef
\t\t\t\t\t\t\t</span>

                            <p class=\"t-center\">
                                Phasellus aliquam libero a nisi varius, vitae placerat sem aliquet. Ut at velit nec ipsum iaculis posuere quis in sapien
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sign up -->
    <div class=\"section-signup bg1-pattern p-t-85 p-b-85\">
        <form class=\"flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5\">
\t\t\t<span class=\"txt5 m-10\">
\t\t\t\tSpecials Sign up
\t\t\t</span>

            <div class=\"wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10\">
                <input class=\"bo-rad-10 sizefull txt10 p-l-20\" type=\"text\" name=\"email-address\" placeholder=\"Email Adrress\">
                <i class=\"fa fa-envelope ab-r-m m-r-18\" aria-hidden=\"true\"></i>
            </div>

            <!-- Button3 -->
            <button type=\"submit\" class=\"btn3 flex-c-m size18 txt11 trans-0-4 m-10\">
                Sign-up
            </button>
        </form>
    </div>

    <!-- Container Selection1 -->
    <div id=\"dropDownSelect1\"></div>
    <!-- Modal Video 01-->
    <div class=\"modal fade\" id=\"modal-video-01\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">

        <div class=\"modal-dialog\" role=\"document\" data-dismiss=\"modal\">
            <div class=\"close-mo-video-01 trans-0-4\" data-dismiss=\"modal\" aria-label=\"Close\">&times;</div>

            <div class=\"wrap-video-mo-01\">
                <div class=\"w-full wrap-pic-w op-0-0\"><img src=\"{{ asset('assets/images/icons/video-16-9.jpg') }}\" alt=\"IMG\"></div>
                <div class=\"video-mo-01\">
                    <iframe src=\"https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0\" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>


{% endblock %}", ":default:index.html.twig", "C:\\wamp64\\www\\smartstart\\app/Resources\\views/default/index.html.twig");
    }
}
