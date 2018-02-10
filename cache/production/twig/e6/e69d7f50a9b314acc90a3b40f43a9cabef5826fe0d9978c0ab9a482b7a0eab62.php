<?php

/* quickreply_editor.html */
class __TwigTemplate_f5dd444666e1ac569bc99f29a3067306192847e78c21ff5d6b15b15587f14561 extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo (isset($context["U_QR_ACTION"]) ? $context["U_QR_ACTION"] : null);
        echo "\" id=\"qr_postform\">
";
        // line 2
        // line 3
        echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t\t<h2 class=\"quickreply-title\">Join the Conversation</h2>
\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t";
        // line 7
        // line 8
        echo "\t\t\t\t";
        // line 9
        echo "\t\t\t\t<center>
                    <div class=\"reply-box\">
\t\t\t\t\t<textarea spellcheck=\"false\" style=\"height: 9em;\" name=\"message\" rows=\"7\" cols=\"76\" tabindex=\"3\" class=\"reply-inputbox\" placeholder=\"&#9998; Write something...\"></textarea>
\t\t\t\t</div>
                    </center>
\t\t\t\t";
        // line 14
        // line 15
        echo "\t\t\t\t</fieldset>
\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t";
        // line 17
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t\t\t";
        // line 18
        echo (isset($context["QR_HIDDEN_FIELDS"]) ? $context["QR_HIDDEN_FIELDS"] : null);
        echo "
\t\t\t\t\t<input type=\"submit\" accesskey=\"f\" tabindex=\"6\" name=\"preview\" value=\"Advanced\" class=\"advanced-button\" id=\"qr_full_editor\" />&nbsp;
\t\t\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"7\" name=\"post\" value=\"";
        // line 20
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t\t\t\t</fieldset>
\t\t</div>
\t</div>
";
        // line 24
        // line 25
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "quickreply_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 25,  62 => 24,  55 => 20,  50 => 18,  46 => 17,  42 => 15,  41 => 14,  34 => 9,  32 => 8,  31 => 7,  25 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "quickreply_editor.html", "");
    }
}
