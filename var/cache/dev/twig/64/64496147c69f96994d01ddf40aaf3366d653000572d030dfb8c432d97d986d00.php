<?php

/* @QandA/Default/index.html.twig */
class __TwigTemplate_bee317c98d960cdf4815bf2e91c581b5630633096facae449f40ca6d99631e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "@QandA/Default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QandA/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QandA/Default/index.html.twig"));

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

        echo "Q & A";
        
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
        echo "    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-banner.png"), "html", null, true);
        echo ");\">
        <h2 class=\"tit6 t-center\">
            questions
        </h2>
    </section>

<section>
    <div>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "    <!-- Default box -->
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reply_question", ["idq" => $this->getAttribute($context["m"], "id", [])]), "html", null, true);
            echo "\" >   <div class=\"box\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "question", []), "html", null, true);
            echo "</h3>

            <div class=\"box-tools pull-right\">
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Collapse\">
                    <i class=\"fa fa-minus\"></i> 2 </button>
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Collapse\">
                    <i class=\"fa fa-minus\"></i></button>
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Remove\">
                    <i class=\"fa fa-times\"></i></button>
            </div>
        </div>
        <div class=\"box-body\">
             m.idc.img | m.idc.file | m.idc.vocal | m.idc.video
        </div>
        <!-- /.box-body -->
        <div class=\"box-footer\">
            ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", []), "html", null, true);
            echo "
        </div>
        <!-- /.box-footer-->
            </div> </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@QandA/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 37,  111 => 32,  92 => 16,  87 => 14,  84 => 13,  80 => 12,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Q & A{% endblock %}
{% block body %}
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url({{ asset('assets/images/blog-banner.png') }});\">
        <h2 class=\"tit6 t-center\">
            questions
        </h2>
    </section>

<section>
    <div>
{% for m in questions %}
    <!-- Default box -->
        <a href=\"{{ path('reply_question',{'idq':m.id} ) }}\" >   <div class=\"box\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">{{ m.question }}</h3>

            <div class=\"box-tools pull-right\">
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Collapse\">
                    <i class=\"fa fa-minus\"></i> 2 </button>
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Collapse\">
                    <i class=\"fa fa-minus\"></i></button>
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Remove\">
                    <i class=\"fa fa-times\"></i></button>
            </div>
        </div>
        <div class=\"box-body\">
             m.idc.img | m.idc.file | m.idc.vocal | m.idc.video
        </div>
        <!-- /.box-body -->
        <div class=\"box-footer\">
            {{ m.description }}
        </div>
        <!-- /.box-footer-->
            </div> </a>
{% endfor %}
    </div>
</section>
{% endblock %}
", "@QandA/Default/index.html.twig", "/Applications/MAMP/htdocs/SmartStartSymfony/src/QandABundle/Resources/views/Default/index.html.twig");
    }
}
