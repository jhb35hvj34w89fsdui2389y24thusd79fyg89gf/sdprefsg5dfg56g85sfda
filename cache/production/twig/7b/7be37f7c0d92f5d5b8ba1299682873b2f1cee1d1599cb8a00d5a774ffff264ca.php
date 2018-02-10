<?php

/* ucp_agreement.html */
class __TwigTemplate_2a6ea6886f83cbc5435a3aa9fbd8fbb602fb2dcfe410574515573cfb154d1f46 extends Twig_Template
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
        $location = "login-panel.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("login-panel.html", "ucp_agreement.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null))) {
            // line 4
            echo "
";
            // line 5
            if ((isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null)) {
                // line 6
                echo "<script type=\"text/javascript\">
// <![CDATA[
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
                // line 13
                echo (isset($context["COOKIE_NAME"]) ? $context["COOKIE_NAME"] : null);
                echo "_lang=' + lang_iso + '; path=";
                echo (isset($context["COOKIE_PATH"]) ? $context["COOKIE_PATH"] : null);
                echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit();
\t}

// ]]>
</script>

\t<form method=\"post\" action=\"";
                // line 21
                echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
                echo "\" id=\"register\">
\t\t<p class=\"rightside\">
\t\t\t<label for=\"lang\">";
                // line 23
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LANGUAGE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LANGUAGE");
                echo "\">";
                echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
                echo "</select>
\t\t\t";
                // line 24
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t</p>
\t</form>

\t<div class=\"clear\"></div>

";
            }
            // line 31
            echo "
\t<form method=\"post\" action=\"";
            // line 32
            echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
            echo "\" id=\"agreement\">
\t<div class=\"agreement-panel\">
\t\t<div class=\"inner\">
\t\t<div class=\"content\">
\t\t\t";
            // line 36
            // line 37
            echo "\t\t\t<p>";
            if ((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_BIRTHDAY");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_OF_USE");
            }
            echo "</p>
\t\t\t";
            // line 38
            // line 39
            echo "\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"agreement-panel-buttons\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 46
            if ((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null)) {
                // line 47
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_COPPA_NO"]) ? $context["U_COPPA_NO"] : null);
                echo "\" class=\"login-panel-button\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_NO");
                echo "</a>&nbsp; <a href=\"";
                echo (isset($context["U_COPPA_YES"]) ? $context["U_COPPA_YES"] : null);
                echo "\" class=\"login-panel-button\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_YES");
                echo "</a>
\t\t\t";
            } else {
                // line 49
                echo "\t\t\t<input type=\"submit\" name=\"agreed\" id=\"agreed\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AGREE");
                echo "\" class=\"login-panel-button\" />&nbsp;
\t\t\t<input type=\"submit\" name=\"not_agreed\" value=\"";
                // line 50
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOT_AGREE");
                echo "\" class=\"login-panel-button\" />
\t\t\t";
            }
            // line 52
            echo "\t\t\t";
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t";
            // line 53
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t</fieldset>
\t\t</div>
\t</div>
\t</form>

";
        }
        // line 60
        echo "

<p class=\"login-footer\">© 2018 ExpThemes.</p>";
    }

    public function getTemplateName()
    {
        return "ucp_agreement.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 60,  146 => 53,  141 => 52,  136 => 50,  131 => 49,  119 => 47,  117 => 46,  108 => 39,  107 => 38,  98 => 37,  97 => 36,  90 => 32,  87 => 31,  77 => 24,  68 => 23,  63 => 21,  50 => 13,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_agreement.html", "");
    }
}
