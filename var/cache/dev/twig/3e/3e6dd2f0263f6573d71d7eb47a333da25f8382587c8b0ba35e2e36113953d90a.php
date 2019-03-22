<?php

/* @QandA/Crud/addQuestion.html.twig */
class __TwigTemplate_99f8bb42beea34521122cd883b332ffa0c8497b9a9bb305592d0c73948d74e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "@QandA/Crud/addQuestion.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QandA/Crud/addQuestion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QandA/Crud/addQuestion.html.twig"));

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

        echo "add question";
        
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
<section>
<center>
    <h1>
        new question
    </h1>


    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <table>
        <tr><td>question:</td><td> ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "question", []), 'widget');
        echo " </td> </tr>
        <tr><td>description:</td><td> ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget');
        echo " </td> </tr>
        <tr><td>suject:</td><td> ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", []), 'widget');
        echo " </td> </tr>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cl"] ?? $this->getContext($context, "cl")), 'form_start');
        echo "
        <tr><td>file:</td><td> ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cl"] ?? $this->getContext($context, "cl")), "file", []), 'widget');
        echo " </td> </tr>
        <tr><td>image:</td><td> ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cl"] ?? $this->getContext($context, "cl")), "img", []), 'widget');
        echo " </td> </tr>
        <tr><td>vocal:</td><td> ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cl"] ?? $this->getContext($context, "cl")), "vocal", []), 'widget');
        echo " </td> </tr>
        <tr><td>video:</td><td> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cl"] ?? $this->getContext($context, "cl")), "video", []), 'widget');
        echo " </td> </tr>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cl"] ?? $this->getContext($context, "cl")), 'form_end');
        echo "
        <tr><td></td><td> ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Add", []), 'widget');
        echo " </td> </tr>
    </table>
    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


    <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("qand_a_homepage");
        echo "\" > <button>home</button> </a>

</center>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@QandA/Crud/addQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 32,  131 => 29,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  85 => 16,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}add question{% endblock %}
{% block body %}
    <!-- Title Page -->
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url({{ asset('assets/images/blog-banner.png') }});\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>
<section>
<center>
    <h1>
        new question
    </h1>


    {{ form_start(form) }}
    <table>
        <tr><td>question:</td><td> {{ form_widget(form.question) }} </td> </tr>
        <tr><td>description:</td><td> {{ form_widget(form.description) }} </td> </tr>
        <tr><td>suject:</td><td> {{ form_widget(form.subject) }} </td> </tr>
        {{ form_start(cl) }}
        <tr><td>file:</td><td> {{ form_widget(cl.file) }} </td> </tr>
        <tr><td>image:</td><td> {{ form_widget(cl.img) }} </td> </tr>
        <tr><td>vocal:</td><td> {{ form_widget(cl.vocal) }} </td> </tr>
        <tr><td>video:</td><td> {{ form_widget(cl.video) }} </td> </tr>
        {{ form_end(cl) }}
        <tr><td></td><td> {{ form_widget(form.Add) }} </td> </tr>
    </table>
    {{ form_end(form) }}


    <a href=\"{{ path('qand_a_homepage' ) }}\" > <button>home</button> </a>

</center>
</section>
{% endblock %}


", "@QandA/Crud/addQuestion.html.twig", "/Applications/MAMP/htdocs/SmartStartSymfony/src/QandABundle/Resources/views/Crud/addQuestion.html.twig");
    }
}
