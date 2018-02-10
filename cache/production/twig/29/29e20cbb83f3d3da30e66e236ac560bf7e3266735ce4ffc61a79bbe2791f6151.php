<?php

/* ucp_prefs_personal.html */
class __TwigTemplate_2cb4663b748610e2c2823d1863b1af88522e6abfd23c56517d4a43e167a299af extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_prefs_personal.html", 1)->display($context);
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

\t<fieldset>
\t";
        // line 6
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 7
        echo "\t";
        // line 8
        echo "\t<dl class=\"ucp-prefs-body\">
\t\t<dt><label for=\"viewemail0\" class=\"ucp-prefs-title\">";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SHOW_EMAIL");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"viewemail1\"><input type=\"radio\" class=\"radio-button\" name=\"viewemail\" id=\"viewemail1\" value=\"1\"";
        // line 11
        if ((isset($context["S_VIEW_EMAIL"]) ? $context["S_VIEW_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t<label for=\"viewemail0\"><input type=\"radio\" name=\"viewemail\" id=\"viewemail0\" value=\"0\"";
        // line 12
        if ( !(isset($context["S_VIEW_EMAIL"]) ? $context["S_VIEW_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
            
\t\t</dd>
\t</dl>
\t<dl class=\"ucp-prefs-body\">
\t\t<dt><label for=\"massemail1\" class=\"ucp-prefs-title\">";
        // line 17
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_EMAIL");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"massemail1\"><input type=\"radio\" name=\"massemail\" id=\"massemail1\" value=\"1\"";
        // line 19
        if ((isset($context["S_MASS_EMAIL"]) ? $context["S_MASS_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t<label for=\"massemail0\"><input type=\"radio\" name=\"massemail\" id=\"massemail0\" value=\"0\"";
        // line 20
        if ( !(isset($context["S_MASS_EMAIL"]) ? $context["S_MASS_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl class=\"ucp-prefs-body\">
\t\t<dt><label for=\"allowpm1\" class=\"ucp-prefs-title\">";
        // line 24
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOW_PM");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"allowpm1\" class=\"ucp-prefs-title\"><input type=\"radio\" name=\"allowpm\" id=\"allowpm1\" value=\"1\"";
        // line 26
        if ((isset($context["S_ALLOW_PM"]) ? $context["S_ALLOW_PM"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t<label for=\"allowpm0\"><input type=\"radio\" name=\"allowpm\" id=\"allowpm0\" value=\"0\"";
        // line 27
        if ( !(isset($context["S_ALLOW_PM"]) ? $context["S_ALLOW_PM"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t";
        // line 30
        if ((isset($context["S_CAN_HIDE_ONLINE"]) ? $context["S_CAN_HIDE_ONLINE"] : null)) {
            // line 31
            echo "\t\t<dl class=\"ucp-prefs-body\">
\t\t\t<dt><label for=\"hideonline0\" class=\"ucp-prefs-title\">";
            // line 32
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ONLINE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"hideonline1\"><input type=\"radio\" name=\"hideonline\" id=\"hideonline1\" value=\"1\"";
            // line 34
            if ((isset($context["S_HIDE_ONLINE"]) ? $context["S_HIDE_ONLINE"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label for=\"hideonline0\"><input type=\"radio\" name=\"hideonline\" id=\"hideonline0\" value=\"0\"";
            // line 35
            if ( !(isset($context["S_HIDE_ONLINE"]) ? $context["S_HIDE_ONLINE"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 39
        echo "    <dl class=\"ucp-prefs-body\">
\t\t<dt><label for=\"bbcode1\" class=\"ucp-prefs-title\">";
        // line 40
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEFAULT_BBCODE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"bbcode1\"><input type=\"radio\" name=\"bbcode\" id=\"bbcode1\" value=\"1\"";
        // line 42
        if ((isset($context["S_BBCODE"]) ? $context["S_BBCODE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"bbcode0\"><input type=\"radio\" name=\"bbcode\" id=\"bbcode0\" value=\"0\"";
        // line 43
        if ( !(isset($context["S_BBCODE"]) ? $context["S_BBCODE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
        \t<dl class=\"ucp-prefs-body\">
\t\t<dt><label for=\"smilies1\" class=\"ucp-prefs-title\">";
        // line 47
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEFAULT_SMILIES");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"smilies1\"><input type=\"radio\" name=\"smilies\" id=\"smilies1\" value=\"1\"";
        // line 49
        if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"smilies0\"><input type=\"radio\" name=\"smilies\" id=\"smilies0\" value=\"0\"";
        // line 50
        if ( !(isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl class=\"ucp-prefs-body\">
\t\t<dt><label for=\"sig1\" class=\"ucp-prefs-title\">";
        // line 54
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEFAULT_ADD_SIG");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"sig1\"><input type=\"radio\" name=\"sig\" id=\"sig1\" value=\"1\"";
        // line 56
        if ((isset($context["S_SIG"]) ? $context["S_SIG"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"sig0\"><input type=\"radio\" name=\"sig\" id=\"sig0\" value=\"0\"";
        // line 57
        if ( !(isset($context["S_SIG"]) ? $context["S_SIG"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl class=\"ucp-prefs-body\">
\t\t<dt><label for=\"notify1\" class=\"ucp-prefs-title\">";
        // line 61
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEFAULT_NOTIFY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"notify1\"><input type=\"radio\" name=\"notify\" id=\"notify1\" value=\"1\"";
        // line 63
        if ((isset($context["S_NOTIFY"]) ? $context["S_NOTIFY"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"notify0\"><input type=\"radio\" name=\"notify\" id=\"notify0\" value=\"0\"";
        // line 64
        if ( !(isset($context["S_NOTIFY"]) ? $context["S_NOTIFY"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t";
        // line 67
        if ((isset($context["S_SELECT_NOTIFY"]) ? $context["S_SELECT_NOTIFY"] : null)) {
            // line 68
            echo "\t\t<dl class=\"ucp-prefs-body\">
\t\t\t<dt><label for=\"notifymethod0\" class=\"ucp-prefs-title\">";
            // line 69
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_METHOD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"notifymethod0\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod0\" value=\"0\"";
            // line 71
            if ((isset($context["S_NOTIFY_EMAIL"]) ? $context["S_NOTIFY_EMAIL"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_METHOD_EMAIL");
            echo "</label>
\t\t\t\t<label for=\"notifymethod1\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod1\" value=\"1\"";
            // line 72
            if ((isset($context["S_NOTIFY_IM"]) ? $context["S_NOTIFY_IM"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_METHOD_IM");
            echo "</label>
\t\t\t\t<label for=\"notifymethod2\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod2\" value=\"2\"";
            // line 73
            if ((isset($context["S_NOTIFY_BOTH"]) ? $context["S_NOTIFY_BOTH"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_METHOD_BOTH");
            echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 77
        echo "        <dl class=\"ucp-prefs-body\">
\t\t\t<dt><label for=\"images1\"  class=\"ucp-prefs-title\">";
        // line 78
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_IMAGES");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"images1\"><input type=\"radio\" name=\"images\" id=\"images1\" value=\"1\"";
        // line 80
        if ((isset($context["S_IMAGES"]) ? $context["S_IMAGES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label> 
\t\t\t\t<label for=\"images0\"><input type=\"radio\" name=\"images\" id=\"images0\" value=\"0\"";
        // line 81
        if ( !(isset($context["S_IMAGES"]) ? $context["S_IMAGES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl class=\"ucp-prefs-body\">
\t\t\t<dt><label for=\"flash0\"  class=\"ucp-prefs-title\">";
        // line 85
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_FLASH");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"flash1\"><input type=\"radio\" name=\"flash\" id=\"flash1\" value=\"1\"";
        // line 87
        if ((isset($context["S_FLASH"]) ? $context["S_FLASH"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label> 
\t\t\t\t<label for=\"flash0\"><input type=\"radio\" name=\"flash\" id=\"flash0\" value=\"0\"";
        // line 88
        if ( !(isset($context["S_FLASH"]) ? $context["S_FLASH"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl class=\"ucp-prefs-body\">
\t\t\t<dt><label for=\"smilies1\"  class=\"ucp-prefs-title\">";
        // line 92
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_SMILIES");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"smilies1\"><input type=\"radio\" name=\"smilies\" id=\"smilies1\" value=\"1\"";
        // line 94
        if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label> 
\t\t\t\t<label for=\"smilies0\"><input type=\"radio\" name=\"smilies\" id=\"smilies0\" value=\"0\"";
        // line 95
        if ( !(isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl class=\"ucp-prefs-body\">
\t\t\t<dt><label for=\"sigs1\"  class=\"ucp-prefs-title\">";
        // line 99
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_SIGS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"sigs1\"><input type=\"radio\" name=\"sigs\" id=\"sigs1\" value=\"1\"";
        // line 101
        if ((isset($context["S_SIGS"]) ? $context["S_SIGS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label> 
\t\t\t\t<label for=\"sigs0\"><input type=\"radio\" name=\"sigs\" id=\"sigs0\" value=\"0\"";
        // line 102
        if ( !(isset($context["S_SIGS"]) ? $context["S_SIGS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t";
        // line 105
        if ((isset($context["S_CHANGE_CENSORS"]) ? $context["S_CHANGE_CENSORS"] : null)) {
            // line 106
            echo "\t\t\t<dl class=\"ucp-prefs-body\">
\t\t\t\t<dt><label for=\"wordcensor1\">";
            // line 107
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_CENSORS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label for=\"wordcensor1\"><input type=\"radio\" name=\"wordcensor\" id=\"wordcensor1\" value=\"1\"";
            // line 109
            if ((isset($context["S_DISABLE_CENSORS"]) ? $context["S_DISABLE_CENSORS"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label> 
\t\t\t\t\t<label for=\"wordcensor0\"><input type=\"radio\" name=\"wordcensor\" id=\"wordcensor0\" value=\"0\"";
            // line 110
            if ( !(isset($context["S_DISABLE_CENSORS"]) ? $context["S_DISABLE_CENSORS"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
        }
        // line 114
        echo "\t";
        // line 115
        echo "\t</fieldset>


<fieldset class=\"submit-buttons\">
\t";
        // line 119
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t<input type=\"submit\" name=\"submit\" value=\"Save Changes\" class=\"button1\" />
\t";
        // line 121
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

<script type=\"text/javascript\">
// <![CDATA[
\tvar date_format = '";
        // line 127
        echo (isset($context["A_DATE_FORMAT"]) ? $context["A_DATE_FORMAT"] : null);
        echo "';
\tvar default_dateformat = '";
        // line 128
        echo (isset($context["A_DEFAULT_DATEFORMAT"]) ? $context["A_DEFAULT_DATEFORMAT"] : null);
        echo "';

\tfunction customDates()
\t{
\t\tvar e = document.getElementById('dateoptions');

\t\te.selectedIndex = e.length - 1;

\t\t// Loop and match date_format in menu
\t\tfor (var i = 0; i < e.length; i++)
\t\t{
\t\t\tif (e.options[i].value == date_format)
\t\t\t{
\t\t\t\te.selectedIndex = i;
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\t// Show/hide custom field
\t\tif (e.selectedIndex == e.length - 1)
\t\t{
\t\t\tphpbb.toggleDisplay('custom_date',1);
\t\t}
\t\telse
\t\t{
\t\t\tphpbb.toggleDisplay('custom_date',-1);
\t\t}
\t}

\twindow.onload = customDates;
// ]]>
</script>

";
        // line 161
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_prefs_personal.html", 161)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_prefs_personal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 161,  456 => 128,  452 => 127,  443 => 121,  438 => 119,  432 => 115,  430 => 114,  419 => 110,  411 => 109,  405 => 107,  402 => 106,  400 => 105,  390 => 102,  382 => 101,  376 => 99,  365 => 95,  357 => 94,  351 => 92,  340 => 88,  332 => 87,  326 => 85,  315 => 81,  307 => 80,  301 => 78,  298 => 77,  287 => 73,  279 => 72,  271 => 71,  265 => 69,  262 => 68,  260 => 67,  250 => 64,  242 => 63,  236 => 61,  225 => 57,  217 => 56,  211 => 54,  200 => 50,  192 => 49,  186 => 47,  175 => 43,  167 => 42,  161 => 40,  158 => 39,  147 => 35,  139 => 34,  133 => 32,  130 => 31,  128 => 30,  118 => 27,  110 => 26,  104 => 24,  93 => 20,  85 => 19,  79 => 17,  67 => 12,  59 => 11,  53 => 9,  50 => 8,  48 => 7,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_prefs_personal.html", "");
    }
}
