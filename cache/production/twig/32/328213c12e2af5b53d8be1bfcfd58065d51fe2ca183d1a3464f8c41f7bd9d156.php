<?php

/* navbar_header.html */
class __TwigTemplate_7752abc01843659caa079b5040eb21e4a101f93c2b278879f8df71e87adf31ed extends Twig_Template
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
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 2
            echo "
<ul id=\"menu-bar\">
    <li><a class=\"home-icon\" href=\"";
            // line 4
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\">Home</a></li>
    <li><a class=\"activity-icon\" href=\"";
            // line 5
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\">Activity</a></li>
    ";
            // line 6
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                // line 7
                echo "    <li><a class=\"admin-icon\" href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\">Admin</a></li>
    ";
            }
            // line 9
            echo "    ";
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                // line 10
                echo "    <li><a class=\"admin-icon\" href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\">Mod</a></li>
    ";
            }
            // line 12
            echo "    <li class=\"reg-button\" style=\"float:right\" ><a href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">Logout</a></li>
    <li style=\"float:right\" ><a class=\"account-icon\" href=\"";
            // line 13
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\">Account</a></li>
</ul>

";
        }
        // line 17
        if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 18
            echo "<ul id=\"menu-bar\">
    <li><a class=\"home-icon\" href=\"";
            // line 19
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\">Home</a></li>
    <li class=\"reg-button\" style=\"float: right\"><a href=\"";
            // line 20
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\">Create Account</a></li>
    <li style=\"float: right\"><a href=\"";
            // line 21
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">Login</a></li>
</ul>
";
        }
        // line 24
        echo "<div id=\"body-header\">
    ";
        // line 25
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 26
            echo "    ";
            if ((isset($context["S_INDEX"]) ? $context["S_INDEX"] : null)) {
                // line 27
                echo "    ";
            }
            // line 28
            echo "    ";
        }
        // line 29
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  100 => 28,  97 => 27,  94 => 26,  92 => 25,  89 => 24,  83 => 21,  79 => 20,  71 => 19,  68 => 18,  66 => 17,  59 => 13,  54 => 12,  48 => 10,  45 => 9,  39 => 7,  37 => 6,  33 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar_header.html", "");
    }
}
