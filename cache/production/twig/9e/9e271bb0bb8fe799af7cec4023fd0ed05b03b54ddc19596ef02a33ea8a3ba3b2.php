<?php

/* captcha_default.html */
class __TwigTemplate_7cc9c2c2d4f5764e1ffaa125da2f5b6c4deacc649259f02d480f2f36a4230722 extends Twig_Template
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
        // line 1
        if (((isset($context["S_TYPE"]) ? $context["S_TYPE"] : null) == 1)) {
            // line 2
            echo "<div class=\"captcha-panel\">
\t<div class=\"inner\">
\t<fieldset class=\"fields2\">
";
        }
        // line 6
        echo "
\t<dl>
\t\t<dd class=\"captcha-image\"><img class=\"image-captcha\" src=\"";
        // line 8
        echo (isset($context["CONFIRM_IMAGE_LINK"]) ? $context["CONFIRM_IMAGE_LINK"] : null);
        echo "\" alt=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_CODE");
        echo "\" /></dd>
\t\t<dd><input type=\"text\" name=\"confirm_code\" id=\"confirm_code\" size=\"8\" maxlength=\"8\" tabindex=\"";
        // line 9
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CAPTCHA_TAB_INDEX", array());
        echo "\" class=\"inputbox-login\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_CODE");
        echo "\" placeholder=\"CONFIRMATION CODE\"/>
            <br>
\t\t";
        // line 11
        if ((isset($context["S_CONFIRM_REFRESH"]) ? $context["S_CONFIRM_REFRESH"] : null)) {
            echo "<input type=\"submit\" name=\"refresh_vc\" id=\"refresh_vc\" class=\"login-panel-button\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VC_REFRESH");
            echo "\" />";
        }
        // line 12
        echo "\t\t<input type=\"hidden\" name=\"confirm_id\" id=\"confirm_id\" value=\"";
        echo (isset($context["CONFIRM_ID"]) ? $context["CONFIRM_ID"] : null);
        echo "\" /></dd>
\t</dl>

";
        // line 15
        if (((isset($context["S_TYPE"]) ? $context["S_TYPE"] : null) == 1)) {
            // line 16
            echo "\t</fieldset>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "captcha_default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  57 => 15,  50 => 12,  44 => 11,  37 => 9,  31 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "captcha_default.html", "");
    }
}
