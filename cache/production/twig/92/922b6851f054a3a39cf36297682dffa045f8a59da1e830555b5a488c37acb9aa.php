<?php

/* confirm_body.html */
class __TwigTemplate_4a47d315f514e00f4e3fb26f13ab36dc17081920d6e53610da19dd5210a3e565 extends Twig_Template
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
        if ((isset($context["S_AJAX_REQUEST"]) ? $context["S_AJAX_REQUEST"] : null)) {
            // line 2
            echo "<form action=\"";
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
    <center><h3 style=\"margin-top: 5px\">";
            // line 3
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3>
    <p class=\"confirm-message-text\">";
            // line 4
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p></center>
    <fieldset class=\"submit-buttons\">
        <input type=\"button\" name=\"confirm\" value=\"";
            // line 6
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "\" class=\"button1\" />&nbsp;
        <input type=\"button\" name=\"cancel\" value=\"";
            // line 7
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "\" class=\"button1\" /> </fieldset>
</form>
";
        } else {
            // line 10
            $location = "login-panel.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("login-panel.html", "confirm_body.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 11
            echo "<div class=\"confirm-body\">
<form id=\"confirm\" action=\"";
            // line 12
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
    <div class=\"panel\">
        <div class=\"inner\">
                <h2 class=\"message-title\">";
            // line 15
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h2>
                <p>";
            // line 16
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>
                <fieldset class=\"submit-buttons\"> ";
            // line 17
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
                    <input type=\"submit\" name=\"confirm\" value=\"";
            // line 18
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "\" class=\"button1\" />&nbsp;
                    <input type=\"submit\" name=\"cancel\" value=\"";
            // line 19
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "\" class=\"button1\" /> </fieldset>
        </div>
    </div>
</form>
    </div>
";
        }
        // line 25
        echo "</br>
</br>
";
    }

    public function getTemplateName()
    {
        return "confirm_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  60 => 12,  57 => 11,  45 => 10,  39 => 7,  35 => 6,  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirm_body.html", "");
    }
}
