<?php

/* themes/mikecrit_theme/templates/page.html.twig */
class __TwigTemplate_8d0060f5ee5623ec7995be8197b829d7a4aa72db4ae69e3f4a9e669ec9464e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"container\">
  ";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "

  <div class=\"sidebar\">
    ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array()), "html", null, true));
        echo "
  </div>

  <div class=\"content\">
    <a id=\"main-content\" tabindex=\"-1\"></a>
    ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
  </div>

</div>

<div class=\"footer\">
  <div class=\"footer-inner\">
    ";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/mikecrit_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  60 => 10,  52 => 5,  46 => 2,  43 => 1,);
    }
}
/* <div class="container">*/
/*   {{ page.header }}*/
/* */
/*   <div class="sidebar">*/
/*     {{ page.sidebar }}*/
/*   </div>*/
/* */
/*   <div class="content">*/
/*     <a id="main-content" tabindex="-1"></a>*/
/*     {{ page.content }}*/
/*   </div>*/
/* */
/* </div>*/
/* */
/* <div class="footer">*/
/*   <div class="footer-inner">*/
/*     {{ page.footer }}*/
/*   </div>*/
/* </div>*/
/* */
