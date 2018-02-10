<?php

/* ucp_profile_reg_details.html */
class __TwigTemplate_fe5d5a3cb785eda5de229f5f300e889ca9085a5b7efe79705ea9d5ce8cd0c44f extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_profile_reg_details.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

\t";
        // line 5
        if ((isset($context["S_FORCE_PASSWORD"]) ? $context["S_FORCE_PASSWORD"] : null)) {
            // line 6
            echo "\t\t<p class=\"error\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORCE_PASSWORD_EXPLAIN");
            echo "</p>
\t";
        }
        // line 8
        echo "
\t<fieldset>
\t";
        // line 10
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"alert-ucp alert-ucp-error alert-ucp-icon\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 11
        echo "\t";
        // line 12
        echo "\t<dl class=\"ucp-settings-fields\">
\t\t<dd>";
        // line 13
        if ((isset($context["S_CHANGE_USERNAME"]) ? $context["S_CHANGE_USERNAME"] : null)) {
            echo "<input type=\"text\" name=\"username\" id=\"username\" value=\"";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "\" placeholder=\"Username\" class=\"inputbox-ucp-settings\" title=\"Your Username\" />";
        } else {
            echo "<strong>";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "</strong>";
        }
        echo "</dd>
\t</dl>
\t<dl class=\"ucp-settings-fields\">
\t\t<dd>";
        // line 16
        if ((isset($context["S_CHANGE_EMAIL"]) ? $context["S_CHANGE_EMAIL"] : null)) {
            echo "<input type=\"email\" name=\"email\" id=\"email\" maxlength=\"100\" value=\"";
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "\" placeholder=\"Email\" class=\"inputbox-ucp-settings\" title=\"Your Email\" autocomplete=\"off\" />";
        } else {
            echo "<strong>";
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "</strong>";
        }
        echo "</dd>
\t</dl>
\t";
        // line 18
        if ((isset($context["S_CHANGE_PASSWORD"]) ? $context["S_CHANGE_PASSWORD"] : null)) {
            // line 19
            echo "\t\t<dl class=\"ucp-settings-fields\">
\t\t\t<dd><input type=\"password\" name=\"new_password\" id=\"new_password\" maxlength=\"255\" value=\"";
            // line 20
            echo (isset($context["NEW_PASSWORD"]) ? $context["NEW_PASSWORD"] : null);
            echo "\" class=\"inputbox-ucp-settings\" placeholder=\"New Password\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_PASSWORD");
            echo "\" autocomplete=\"off\" /></dd>
\t\t</dl>
\t\t<dl class=\"ucp-settings-fields\">
\t\t\t<dd><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" maxlength=\"255\" value=\"";
            // line 23
            echo (isset($context["PASSWORD_CONFIRM"]) ? $context["PASSWORD_CONFIRM"] : null);
            echo "\" placeholder=\"Confirm Password\" class=\"inputbox-ucp-settings\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_PASSWORD");
            echo "\" autocomplete=\"off\" /></dd>
\t\t</dl>
\t";
        }
        // line 26
        echo "\t";
        echo "\t
\t</fieldset>


\t<fieldset>
\t<dl class=\"ucp-settings-fields\">
\t\t<dd><input type=\"password\" name=\"cur_password\" id=\"cur_password\" maxlength=\"255\" value=\"";
        // line 32
        echo (isset($context["CUR_PASSWORD"]) ? $context["CUR_PASSWORD"] : null);
        echo "\" class=\"inputbox-ucp-settings\" placeholder=\"Current Password\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CURRENT_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t</fieldset>

<fieldset class=\"submit-buttons\">
\t";
        // line 37
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t<input type=\"submit\" name=\"submit\" value=\"Save Changes\" class=\"button1\" />
\t";
        // line 39
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 43
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_reg_details.html", 43)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_reg_details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 43,  136 => 39,  131 => 37,  121 => 32,  112 => 26,  104 => 23,  96 => 20,  93 => 19,  91 => 18,  78 => 16,  64 => 13,  61 => 12,  59 => 11,  53 => 10,  49 => 8,  43 => 6,  41 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_profile_reg_details.html", "");
    }
}
