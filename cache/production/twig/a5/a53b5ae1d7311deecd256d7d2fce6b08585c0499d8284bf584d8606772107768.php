<?php

/* ucp_avatar_options.html */
class __TwigTemplate_9cb4e455bf79b47b8fa92f0872af7826b4a6c039c03b58219751946c02a948a3 extends Twig_Template
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
        if ( !(isset($context["S_AVATARS_ENABLED"]) ? $context["S_AVATARS_ENABLED"] : null)) {
            // line 2
            echo "
<p>";
            // line 3
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_FEATURES_DISABLED");
            echo "</p>

";
        }
        // line 6
        echo "
\t<fieldset>
\t";
        // line 8
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"avatar-error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 9
        echo "\t\t<dl class=\"ucp-panel-avatar\">
\t\t\t<dd>";
        // line 10
        if ((isset($context["AVATAR"]) ? $context["AVATAR"] : null)) {
            echo (isset($context["AVATAR"]) ? $context["AVATAR"] : null);
        } else {
            echo "<img src=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/anduin/theme/images/avatars/no-avatar-3.png\" />";
        }
        echo "</dd>
\t\t</dl>
\t</fieldset>
<dt class=\"ucp-panel-avatar-info\"><span class=\"avatar-explain\">";
        // line 13
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_EXPLAIN");
        echo "</span></dt>
<fieldset>
\t\t<dl>
\t\t\t<dd><select name=\"avatar_driver\" id=\"avatar_driver\" data-togglable-settings=\"true\" class=\"select-style\">
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_drivers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 18
            echo "\t\t\t\t<option value=\"";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", array());
            echo "\"";
            if ($this->getAttribute($context["avatar_drivers"], "SELECTED", array())) {
                echo " selected=\"selected\"";
            }
            echo " data-toggle-setting=\"#avatar_option_";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", array());
            echo "\">";
            echo $this->getAttribute($context["avatar_drivers"], "L_TITLE", array());
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</select></dd>
\t\t</dl>
\t</fieldset>
\t<div id=\"avatar_options\">
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_drivers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 25
            echo "\t<div id=\"avatar_option_";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", array());
            echo "\">
\t<noscript>
\t<h3 class=\"avatar_section_header\">";
            // line 27
            echo $this->getAttribute($context["avatar_drivers"], "L_TITLE", array());
            echo "</h3>
\t</noscript>

\t<fieldset>
\t";
            // line 31
            echo $this->getAttribute($context["avatar_drivers"], "OUTPUT", array());
            echo "
\t</fieldset>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t</div>
";
        // line 36
        if ( !(isset($context["S_GROUP_MANAGE"]) ? $context["S_GROUP_MANAGE"] : null)) {
            // line 37
            echo "\t<fieldset class=\"submit-buttons\">
        <input type=\"submit\" name=\"avatar_delete\" id=\"avatar_delete\" value=\"Delete Avatar\" class=\"button1\" /> &nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"Save Changes\" class=\"button1\" />
\t</fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  119 => 36,  116 => 35,  106 => 31,  99 => 27,  93 => 25,  89 => 24,  83 => 20,  66 => 18,  62 => 17,  55 => 13,  43 => 10,  40 => 9,  34 => 8,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_avatar_options.html", "");
    }
}
