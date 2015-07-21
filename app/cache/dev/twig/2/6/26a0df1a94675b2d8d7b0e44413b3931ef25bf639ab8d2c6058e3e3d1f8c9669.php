<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_26a0df1a94675b2d8d7b0e44413b3931ef25bf639ab8d2c6058e3e3d1f8c9669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8cd587e579cf3f2d8026d317e5bbb14956513826ec4014160ea24013afab570 = $this->env->getExtension("native_profiler");
        $__internal_b8cd587e579cf3f2d8026d317e5bbb14956513826ec4014160ea24013afab570->enter($__internal_b8cd587e579cf3f2d8026d317e5bbb14956513826ec4014160ea24013afab570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8cd587e579cf3f2d8026d317e5bbb14956513826ec4014160ea24013afab570->leave($__internal_b8cd587e579cf3f2d8026d317e5bbb14956513826ec4014160ea24013afab570_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d56cda04af5368f9cee713ef01c85323e1c46b23d527cc099be7fae739c2a09 = $this->env->getExtension("native_profiler");
        $__internal_2d56cda04af5368f9cee713ef01c85323e1c46b23d527cc099be7fae739c2a09->enter($__internal_2d56cda04af5368f9cee713ef01c85323e1c46b23d527cc099be7fae739c2a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2d56cda04af5368f9cee713ef01c85323e1c46b23d527cc099be7fae739c2a09->leave($__internal_2d56cda04af5368f9cee713ef01c85323e1c46b23d527cc099be7fae739c2a09_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3b80d2c5e1ad9500a02abd33722ae9fb648dbd0878648b449891de36beae550 = $this->env->getExtension("native_profiler");
        $__internal_c3b80d2c5e1ad9500a02abd33722ae9fb648dbd0878648b449891de36beae550->enter($__internal_c3b80d2c5e1ad9500a02abd33722ae9fb648dbd0878648b449891de36beae550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c3b80d2c5e1ad9500a02abd33722ae9fb648dbd0878648b449891de36beae550->leave($__internal_c3b80d2c5e1ad9500a02abd33722ae9fb648dbd0878648b449891de36beae550_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_66c7fbcbf04f76d69fc9e494195327e318840eb2715f940d8c77da0827a032cd = $this->env->getExtension("native_profiler");
        $__internal_66c7fbcbf04f76d69fc9e494195327e318840eb2715f940d8c77da0827a032cd->enter($__internal_66c7fbcbf04f76d69fc9e494195327e318840eb2715f940d8c77da0827a032cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_66c7fbcbf04f76d69fc9e494195327e318840eb2715f940d8c77da0827a032cd->leave($__internal_66c7fbcbf04f76d69fc9e494195327e318840eb2715f940d8c77da0827a032cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
