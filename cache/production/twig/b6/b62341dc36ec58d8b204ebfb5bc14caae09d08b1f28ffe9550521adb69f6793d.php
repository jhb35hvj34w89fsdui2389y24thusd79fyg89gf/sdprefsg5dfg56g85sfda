<?php

/* memberlist_email.html */
class __TwigTemplate_6dcd98039a0cbfd2d8b118f3a2a7f7a9b91527aeb0c0bb330e9a58d8f841f68b extends Twig_Template
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
        $this->loadTemplate("login-panel.html", "memberlist_email.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a href=\"";
        // line 3
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\"><img class=\"contact-panel-image\" src=\"";
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/anduin/theme/images/logo.png\"></img>
</a>

";
        // line 6
        // line 7
        echo "
<form method=\"post\" action=\"";
        // line 8
        echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
        echo "\" id=\"post\">


\t\t";
        // line 11
        if ((isset($context["ERROR_MESSAGE"]) ? $context["ERROR_MESSAGE"] : null)) {
            echo "<p class=\"contact-alert\">";
            echo (isset($context["ERROR_MESSAGE"]) ? $context["ERROR_MESSAGE"] : null);
            echo "</p>";
        }
        // line 12
        echo "\t\t<fieldset class=\"fields2\">
            <dl>
\t\t\t\t<dd><input class=\"contact-inputbox\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"2\" value=\"";
        // line 14
        echo (isset($context["NAME"]) ? $context["NAME"] : null);
        echo "\" placeholder=\"Your Name\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dd><input class=\"contact-inputbox\" type=\"text\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"1\" value=\"";
        // line 17
        echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
        echo "\" placeholder=\"Your Email Address\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dd><input class=\"contact-inputbox\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"3\" value=\"";
        // line 20
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "\" placeholder=\"Subject\" /></dd>
\t\t\t</dl>
\t\t<dl>
\t\t\t<dd><textarea class=\"contact-messagebox\" name=\"message\" id=\"message\" rows=\"15\" cols=\"76\" tabindex=\"4\" placeholder=\"Write your message here\">";
        // line 23
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "</textarea></dd>
\t\t</dl>
\t\t</fieldset>


\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"submit\" tabindex=\"6\" name=\"submit\" class=\"button1\" value=\"";
        // line 29
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_EMAIL");
        echo "\" />
\t\t</fieldset>
";
        // line 31
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "

</form>

";
        // line 35
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_email.html", 35)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 35,  94 => 31,  89 => 29,  80 => 23,  74 => 20,  68 => 17,  62 => 14,  58 => 12,  52 => 11,  46 => 8,  43 => 7,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "memberlist_email.html", "");
    }
}
