<?php

/* ucp_profile_profile_info.html */
class __TwigTemplate_bb9ec7f4a0666847d5d2dd4543cd1c2e4966b124954ef6cbb54a9d4e71135287 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_profile_info.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"panel\">
\t<div class=\"inner\">
\t";
        // line 5
        if ( !(isset($context["S_AVATARS_ENABLED"]) ? $context["S_AVATARS_ENABLED"] : null)) {
            // line 6
            echo "\t\t<p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_FEATURES_DISABLED");
            echo "</p>
\t";
        }
        // line 8
        echo "
\t<fieldset>
\t";
        // line 10
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"avatar-error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 11
        echo "\t\t<dl>
\t\t\t<dt><label class=\"current-avatar\">Current Avatar</label><br /><span class=\"avatar-explain\">";
        // line 12
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>";
        // line 13
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
\t<fieldset>
\t\t<dl>
\t\t\t<dd><select name=\"avatar_driver\" id=\"avatar_driver\" data-togglable-settings=\"true\" class=\"select-style\">
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_drivers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 20
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
        // line 22
        echo "\t\t\t</select></dd>
\t\t</dl>
\t</fieldset>
\t<div id=\"avatar_options\">
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_drivers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 27
            echo "\t<div id=\"avatar_option_";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", array());
            echo "\">
\t<noscript>
\t<h3 class=\"avatar_section_header\">";
            // line 29
            echo $this->getAttribute($context["avatar_drivers"], "L_TITLE", array());
            echo "</h3>
\t</noscript>

\t<fieldset>
\t";
            // line 33
            echo $this->getAttribute($context["avatar_drivers"], "OUTPUT", array());
            echo "
\t</fieldset>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t</div>
";
        // line 38
        if ( !(isset($context["S_GROUP_MANAGE"]) ? $context["S_GROUP_MANAGE"] : null)) {
            // line 39
            echo "\t<fieldset class=\"submit-buttons\">
        <input type=\"submit\" name=\"avatar_delete\" id=\"avatar_delete\" value=\"Delete Avatar\" class=\"button1\" /> &nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"Save Changes\" class=\"button1\" />
\t</fieldset>
";
        }
        // line 44
        echo "\t</div>
</div>


";
        // line 48
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_profile_info.html", 48)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_profile_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 48,  142 => 44,  135 => 39,  133 => 38,  130 => 37,  120 => 33,  113 => 29,  107 => 27,  103 => 26,  97 => 22,  80 => 20,  76 => 19,  61 => 13,  57 => 12,  54 => 11,  48 => 10,  44 => 8,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_profile_profile_info.html", "");
    }
}
