<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_4216892018224da2cde13eb6babdfc6c14337e6e958c4b2e85d7232529dd6f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0e5e2a15f99b5f5f7a99891fe6775b20210f12fe1ea42a84fe5e704ea6422ad = $this->env->getExtension("native_profiler");
        $__internal_d0e5e2a15f99b5f5f7a99891fe6775b20210f12fe1ea42a84fe5e704ea6422ad->enter($__internal_d0e5e2a15f99b5f5f7a99891fe6775b20210f12fe1ea42a84fe5e704ea6422ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0e5e2a15f99b5f5f7a99891fe6775b20210f12fe1ea42a84fe5e704ea6422ad->leave($__internal_d0e5e2a15f99b5f5f7a99891fe6775b20210f12fe1ea42a84fe5e704ea6422ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f36e4cfce7a84ebf081a3ae1f19b7467e2b100b5cc92fc6a3711a363ebe88deb = $this->env->getExtension("native_profiler");
        $__internal_f36e4cfce7a84ebf081a3ae1f19b7467e2b100b5cc92fc6a3711a363ebe88deb->enter($__internal_f36e4cfce7a84ebf081a3ae1f19b7467e2b100b5cc92fc6a3711a363ebe88deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f36e4cfce7a84ebf081a3ae1f19b7467e2b100b5cc92fc6a3711a363ebe88deb->leave($__internal_f36e4cfce7a84ebf081a3ae1f19b7467e2b100b5cc92fc6a3711a363ebe88deb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6137cabad1d53d22a06cddcb66c00fb97eed43a9819562f9f7d4bbf83a43a7e2 = $this->env->getExtension("native_profiler");
        $__internal_6137cabad1d53d22a06cddcb66c00fb97eed43a9819562f9f7d4bbf83a43a7e2->enter($__internal_6137cabad1d53d22a06cddcb66c00fb97eed43a9819562f9f7d4bbf83a43a7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6137cabad1d53d22a06cddcb66c00fb97eed43a9819562f9f7d4bbf83a43a7e2->leave($__internal_6137cabad1d53d22a06cddcb66c00fb97eed43a9819562f9f7d4bbf83a43a7e2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_43b7c990f44fe984ebdc57836e0a3cdb4b42a51e3223c57d096170cfddca6c5a = $this->env->getExtension("native_profiler");
        $__internal_43b7c990f44fe984ebdc57836e0a3cdb4b42a51e3223c57d096170cfddca6c5a->enter($__internal_43b7c990f44fe984ebdc57836e0a3cdb4b42a51e3223c57d096170cfddca6c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_43b7c990f44fe984ebdc57836e0a3cdb4b42a51e3223c57d096170cfddca6c5a->leave($__internal_43b7c990f44fe984ebdc57836e0a3cdb4b42a51e3223c57d096170cfddca6c5a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8e0287eeab49304af3c7de13b2420a89718ec63eea56e54996c16a8db04480b0 = $this->env->getExtension("native_profiler");
        $__internal_8e0287eeab49304af3c7de13b2420a89718ec63eea56e54996c16a8db04480b0->enter($__internal_8e0287eeab49304af3c7de13b2420a89718ec63eea56e54996c16a8db04480b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8e0287eeab49304af3c7de13b2420a89718ec63eea56e54996c16a8db04480b0->leave($__internal_8e0287eeab49304af3c7de13b2420a89718ec63eea56e54996c16a8db04480b0_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
