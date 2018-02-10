<?php

/* report_body.html */
class __TwigTemplate_038fc3c85ce43cfe0c18af4f5cbbdea9f3546667fec3174bd8886774673bd2b4 extends Twig_Template
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
        $this->loadTemplate("login-panel.html", "report_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<center><h2 class=\"titlespace\">";
        // line 3
        if ((isset($context["S_REPORT_POST"]) ? $context["S_REPORT_POST"] : null)) {
            echo "Report Post";
        } else {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_MESSAGE");
        }
        echo "</h2></center>

<form method=\"post\" action=\"";
        // line 5
        echo (isset($context["S_REPORT_ACTION"]) ? $context["S_REPORT_ACTION"] : null);
        echo "\" id=\"report\">
<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"content\">
\t\t<fieldset>
\t\t";
        // line 11
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<dl><dd class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</dd></dl>";
        }
        // line 12
        echo "\t\t<dl class=\"fields2\">
\t\t\t<dd>
                
            <dd><select name=\"reason_id\" id=\"reason_id\" class=\"select-style\">";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "reason", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
            echo "<option value=\"";
            echo $this->getAttribute($context["reason"], "ID", array());
            echo "\"";
            if ($this->getAttribute($context["reason"], "S_SELECTED", array())) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->getAttribute($context["reason"], "TITLE", array());
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></dd>
        
            </dd>
\t\t</dl>
\t\t";
        // line 19
        if ((isset($context["S_CAN_NOTIFY"]) ? $context["S_CAN_NOTIFY"] : null)) {
            // line 20
            echo "\t\t\t<dl class=\"fields2\">
\t\t\t\t<dd> 
                    <dd><select name=\"notify\" id=\"notify1\" class=\"select-style\"";
            // line 22
            if ( !(isset($context["S_NOTIFY"]) ? $context["S_NOTIFY"] : null)) {
                echo "checked=\"checked\"";
            }
            echo " /><option>Notify You?</option><option value=\"1\">Yes</option><option value=\"0\">No</option></select></dd>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
        }
        // line 26
        echo "\t\t<dl class=\"fields2\">
\t\t\t<dd><textarea name=\"report_text\" id=\"report_text\" rows=\"10\" cols=\"76\" class=\"report-box\" placeholder=\"Details about this report (optional)\">";
        // line 27
        echo (isset($context["REPORT_TEXT"]) ? $context["REPORT_TEXT"] : null);
        echo "</textarea></dd>
\t\t</dl>
\t\t";
        // line 29
        if ((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) {
            // line 30
            echo "\t\t\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "report_body.html", 30)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 31
            echo "\t\t";
        }
        // line 32
        echo "\t\t</fieldset>
\t</div>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"content\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"submit\" name=\"submit\" class=\"button1\" value=\"Report\" />&nbsp;
\t\t\t<input type=\"submit\" name=\"cancel\" class=\"button2\" value=\"";
        // line 44
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CANCEL");
        echo "\" />
\t\t\t";
        // line 45
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t</fieldset>
\t</div>

\t</div>
</div>
</form>

";
        // line 53
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "report_body.html", 53)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "report_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  144 => 45,  140 => 44,  126 => 32,  123 => 31,  110 => 30,  108 => 29,  103 => 27,  100 => 26,  91 => 22,  87 => 20,  85 => 19,  63 => 15,  58 => 12,  52 => 11,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "report_body.html", "");
    }
}
