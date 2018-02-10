<?php

/* ucp_register.html */
class __TwigTemplate_3981f7c759e75a1d43efc3886c29f31c4bbe7aa503aa0f3397fe98a511be7ebf extends Twig_Template
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
        $this->loadTemplate("login-panel.html", "ucp_register.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<script type=\"text/javascript\">
    // <![CDATA[
    /**
     * Change language
     */
    function change_language(lang_iso) {
        document.cookie = '";
        // line 8
        echo (isset($context["COOKIE_NAME"]) ? $context["COOKIE_NAME"] : null);
        echo "_lang=' + lang_iso + '; path=";
        echo (isset($context["COOKIE_PATH"]) ? $context["COOKIE_PATH"] : null);
        echo "';
        document.forms['register'].change_lang.value = lang_iso;
        document.forms['register'].submit.click();
    }
    // ]]>
</script>
<form id=\"register\" method=\"post\" action=\"";
        // line 14
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\" ";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
    <div class=\"register-panel\">
        <div class=\"inner\">
            <a href=\"";
        // line 17
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\"><img class=\"register-panel-image\" src=\"";
        echo (isset($context["ROOTH_PATH"]) ? $context["ROOTH_PATH"] : null);
        echo "styles/anduin/theme/images/logo.png\"></img>
            </a>
            <fieldset class=\"register-field\">
                ";
        // line 20
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            // line 21
            echo "                <dl>
                    <div class=\"reg-alert reg-alert-error reg-alert-icon\">&#9888; ";
            // line 22
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</dd>
                </dl>
                ";
        }
        // line 25
        echo "                ";
        if ((isset($context["L_REG_COND"]) ? $context["L_REG_COND"] : null)) {
            // line 26
            echo "                <dl>
                    <dd><strong>";
            // line 27
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REG_COND");
            echo "</strong></dd>
                </dl>
                ";
        }
        // line 30
        echo "                ";
        // line 31
        echo "                <dl>
                    <dd>
                        <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" placeholder=\"Username\" class=\"inputbox-login\" title=\"Your username\" />
                    </dd>
                </dl>
                <dl>
                    <dd>
                        <input type=\"email\" tabindex=\"2\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" placeholder=\"Email Address\" class=\"inputbox-login\" title=\"Your email adress\" autocomplete=\"off\" />
                    </dd>
                </dl>
                <dl>
                    <dd>
                        <input type=\"password\" tabindex=\"4\" name=\"new_password\" id=\"new_password\" size=\"25\" placeholder=\"Password\" class=\"inputbox-login\" title=\"Your Password\" autocomplete=\"off\" />
                    </dd>
                </dl>
                <dl>
                    <dd>
                        <input type=\"password\" tabindex=\"5\" name=\"password_confirm\" id=\"password_confirm\" size=\"25\" placeholder=\"Confirm Password\" class=\"inputbox-login\" title=\"Confirm password\" autocomplete=\"off\" />
                    </dd>
                </dl>
                ";
        // line 51
        // line 52
        echo "                ";
        // line 53
        echo "                ";
        // line 54
        echo "                ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()))) {
            // line 55
            echo "                <dl>
                    <dd><strong>";
            // line 56
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ITEMS_REQUIRED");
            echo "</strong></dd>
                </dl>
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 59
                echo "                <dl> <dt><label";
                if ($this->getAttribute($context["profile_fields"], "FIELD_ID", array())) {
                    echo " for=\"";
                    echo $this->getAttribute($context["profile_fields"], "FIELD_ID", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["profile_fields"], "LANG_NAME", array());
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                if ($this->getAttribute($context["profile_fields"], "S_REQUIRED", array())) {
                    echo " *";
                }
                echo "</label>
\t\t\t";
                // line 60
                if ($this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array())) {
                    echo "<br /><span>";
                    echo $this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array());
                    echo "</span>";
                }
                // line 61
                echo "\t\t\t";
                if ($this->getAttribute($context["profile_fields"], "ERROR", array())) {
                    echo "<br /><span class=\"error\">";
                    echo $this->getAttribute($context["profile_fields"], "ERROR", array());
                    echo "</span>";
                }
                echo "</dt>
                    <dd>";
                // line 62
                echo $this->getAttribute($context["profile_fields"], "FIELD", array());
                echo "</dd>
                </dl>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                ";
        }
        // line 66
        echo "                ";
        // line 67
        echo "            </fieldset>
        </div>
    </div>
    ";
        // line 70
        if ((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) {
            // line 71
            echo "    ";
            $value = 8;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 72
            echo "    ";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "ucp_register.html", 72)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 73
            echo "    ";
        }
        // line 74
        echo "    <div class=\"login-panel\">
        <div class=\"inner\">
            <fieldset class=\"submit-buttons\"> ";
        // line 76
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
                <input type=\"submit\" tabindex=\"9\" name=\"submit\" id=\"submit\" value=\"Create Account\" class=\"login-panel-button\" /> ";
        // line 77
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo " </fieldset>
        </div>
    </div>
</form>
<dd><a class=\"register-panel-text\" href=\"";
        // line 81
        echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
        echo "\">Already Have an Account? </a></dd>

";
        // line 83
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_register.html", 83)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 83,  219 => 81,  212 => 77,  208 => 76,  204 => 74,  201 => 73,  188 => 72,  184 => 71,  182 => 70,  177 => 67,  175 => 66,  172 => 65,  163 => 62,  154 => 61,  148 => 60,  133 => 59,  129 => 58,  124 => 56,  121 => 55,  118 => 54,  116 => 53,  114 => 52,  113 => 51,  91 => 31,  89 => 30,  83 => 27,  80 => 26,  77 => 25,  71 => 22,  68 => 21,  66 => 20,  58 => 17,  50 => 14,  39 => 8,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_register.html", "");
    }
}
