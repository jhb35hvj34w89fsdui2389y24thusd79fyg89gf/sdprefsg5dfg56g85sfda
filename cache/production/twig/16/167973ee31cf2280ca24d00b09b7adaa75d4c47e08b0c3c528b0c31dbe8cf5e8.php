<?php

/* login_body.html */
class __TwigTemplate_b733a46ee975ad8db88ec15d8824b1233d2e33980607d9c4df44568eb230d3a5 extends Twig_Template
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
        $this->loadTemplate("login-panel.html", "login_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form action=\"";
        // line 3
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\" method=\"post\" id=\"login\" data-focus=\"";
        if ((isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null)) {
            echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        } else {
            echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        }
        echo "\">
<div class=\"login-panel\">
\t<div class=\"inner\">
       <a href=\"";
        // line 6
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\"><img class=\"login-panel-image\" src=\"";
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/anduin/theme/images/logo.png\"></img>
</a>
\t<div class=\"login-content\">

\t\t<fieldset ";
        // line 10
        if ( !(isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null)) {
            echo "class=\"login-field\"";
        } else {
            echo "class=\"login-field\"";
        }
        echo ">
\t\t";
        // line 11
        if ((isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null)) {
            echo "<div class=\"alert alert-error alert-icon\">&#9888; Wrong credentials.</div>";
        }
        // line 12
        echo "\t\t<dl class=\"username-login\">
\t\t\t
\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"";
        // line 14
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" id=\"";
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" size=\"30\" placeholder=\"Username\" class=\"inputbox-login\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t
\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"";
        // line 18
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" name=\"";
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" size=\"25\" placeholder=\"Password\" class=\"inputbox-login\" autocomplete=\"off\" /></dd>
\t\t\t
\t\t</dl>
\t\t";
        // line 21
        if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
            // line 22
            echo "\t\t\t";
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 23
            echo "\t\t\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "login_body.html", 23)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 24
            echo "\t\t";
        }
        // line 25
        echo "\t\t";
        if ((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null)) {
            // line 26
            echo "\t\t";
        }
        // line 27
        echo "
\t\t";
        // line 28
        echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
        echo "
\t\t<dl>
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd>";
        // line 31
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"submit\" name=\"login\" tabindex=\"6\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
        echo "\" class=\"login-panel-button\" /></dd>
            
\t\t</dl>
        ";
        // line 34
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 35
            echo "    ";
        } else {
            // line 36
            echo "    <div class=\"login-line\">
            <span>Or</span>
</div>
            </br>
    <dd><a class=\"login-panel-text\" href=\"";
            // line 40
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\">Create a Free Account</a></dd>
    ";
        }
        // line 42
        echo "
        ";
        // line 43
        if (((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null) && ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null) || (isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null)))) {
            // line 44
            echo "\t\t\t\t";
            if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
                echo "<dd><a class=\"login-panel-text\" href=\"";
                echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
                echo "\">I Forgot My Password!</a></dd>";
            }
            // line 45
            echo "\t\t\t\t";
            if ((isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null)) {
                echo "<dd><a href=\"";
                echo (isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESEND_ACTIVATION");
                echo "</a></dd>";
            }
            // line 46
            echo "\t\t\t";
        }
        // line 47
        echo "\t\t</fieldset>
\t</div>

\t";
        // line 50
        if (( !(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null) && (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null))) {
            // line 51
            echo "\t\t";
            $location = (("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . ""), "login_body.html", 51)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 52
            echo "\t";
        }
        // line 53
        echo "\t</div>
</div>
</form>

";
        // line 57
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "login_body.html", 57)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 57,  196 => 53,  193 => 52,  180 => 51,  178 => 50,  173 => 47,  170 => 46,  161 => 45,  154 => 44,  152 => 43,  149 => 42,  144 => 40,  138 => 36,  135 => 35,  133 => 34,  125 => 31,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  107 => 24,  94 => 23,  90 => 22,  88 => 21,  80 => 18,  71 => 14,  67 => 12,  63 => 11,  55 => 10,  46 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login_body.html", "");
    }
}
