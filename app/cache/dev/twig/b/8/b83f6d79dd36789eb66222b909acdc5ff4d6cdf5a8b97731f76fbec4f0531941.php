<?php

/* SensioDistributionBundle::Configurator/final.html.twig */
class __TwigTemplate_b83f6d79dd36789eb66222b909acdc5ff4d6cdf5a8b97731f76fbec4f0531941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle::Configurator/final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ac18619ed2fd0f27aec8a85801b6724dec63f97df13638c48f9857f828123d9 = $this->env->getExtension("native_profiler");
        $__internal_1ac18619ed2fd0f27aec8a85801b6724dec63f97df13638c48f9857f828123d9->enter($__internal_1ac18619ed2fd0f27aec8a85801b6724dec63f97df13638c48f9857f828123d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ac18619ed2fd0f27aec8a85801b6724dec63f97df13638c48f9857f828123d9->leave($__internal_1ac18619ed2fd0f27aec8a85801b6724dec63f97df13638c48f9857f828123d9_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_7dd45614895b344218782244909dbec0200f4b9ea46f74dafab6f689a658b1ed = $this->env->getExtension("native_profiler");
        $__internal_7dd45614895b344218782244909dbec0200f4b9ea46f74dafab6f689a658b1ed->enter($__internal_7dd45614895b344218782244909dbec0200f4b9ea46f74dafab6f689a658b1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_7dd45614895b344218782244909dbec0200f4b9ea46f74dafab6f689a658b1ed->leave($__internal_7dd45614895b344218782244909dbec0200f4b9ea46f74dafab6f689a658b1ed_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_52c68dbc905c19c831cea6cca8cbc060ec260745240a3cae7703c3255da1f2d2 = $this->env->getExtension("native_profiler");
        $__internal_52c68dbc905c19c831cea6cca8cbc060ec260745240a3cae7703c3255da1f2d2->enter($__internal_52c68dbc905c19c831cea6cca8cbc060ec260745240a3cae7703c3255da1f2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_52c68dbc905c19c831cea6cca8cbc060ec260745240a3cae7703c3255da1f2d2->leave($__internal_52c68dbc905c19c831cea6cca8cbc060ec260745240a3cae7703c3255da1f2d2_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
