<?php

/* ucp_resend.html */
class __TwigTemplate_29c93386118b70f1149990dd8edab4824d18840c5008cfe9467f3122d586a938 extends Twig_Template
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
        $this->loadTemplate("login-panel.html", "ucp_resend.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form action=\"";
        // line 3
        echo (isset($context["S_PROFILE_ACTION"]) ? $context["S_PROFILE_ACTION"] : null);
        echo "\" method=\"post\" id=\"resend\">

    <a href=\"";
        // line 5
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\"><img class=\"register-panel-image\" src=\"";
        echo (isset($context["ROOTH_PATH"]) ? $context["ROOTH_PATH"] : null);
        echo "styles/anduin/theme/images/logo.png\"></img>
</a>
<div class=\"register-panel\">
\t<div class=\"inner\">

\t<div class=\"content\">

\t\t<fieldset class=\"register-field\">
\t\t<dl>
\t\t\t<dd><input class=\"inputbox-login\" type=\"text\" name=\"username\" id=\"username\" size=\"25\" placeholder=\"Username\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dd><input class=\"inputbox-login\" type=\"email\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" placeholder=\"Email\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd>";
        // line 21
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"submit\" name=\"submit\" id=\"submit\" class=\"login-panel-button\" value=\"RESEND PASSWORD\" tabindex=\"2\" /></dd>
\t\t</dl>
\t\t";
        // line 23
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t</fieldset>
\t</div>

\t</div>
</div>
</form>

";
        // line 31
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_resend.html", 31)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "ucp_resend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  76 => 31,  65 => 23,  60 => 21,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_resend.html", "");
    }
}
