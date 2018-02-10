<?php

/* posting_buttons.html */
class __TwigTemplate_af710f7daa556a60186313f8dd69c5c08a279bead78e42a8dfdd95acac16f0d0 extends Twig_Template
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
        echo "
<script type=\"text/javascript\">
// <![CDATA[
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 5
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array())) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_B_HELP"), "js");
        echo "',
\t\ti: '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_I_HELP"), "js");
        echo "',
\t\tu: '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_U_HELP"), "js");
        echo "',
\t\tq: '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Q_HELP"), "js");
        echo "',
\t\tc: '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_C_HELP"), "js");
        echo "',
\t\tl: '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_L_HELP"), "js");
        echo "',
\t\to: '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_O_HELP"), "js");
        echo "',
\t\tp: '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_P_HELP"), "js");
        echo "',
\t\tw: '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_W_HELP"), "js");
        echo "',
\t\ta: '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_A_HELP"), "js");
        echo "',
\t\ts: '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_S_HELP"), "js");
        echo "',
\t\tf: '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_F_HELP"), "js");
        echo "',
\t\ty: '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Y_HELP"), "js");
        echo "',
\t\td: '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_D_HELP"), "js");
        echo "'
\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 31
            echo "\t\t\t,cb_";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ": '";
            echo $this->getAttribute($context["custom_tags"], "A_BBCODE_HELPLINE", array());
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t}

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR_HIDE"), "js");
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR"), "js");
        echo "';
\t\t}
\t}

// ]]>
</script>
";
        // line 52
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/javascript/editor.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('10');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 53
        echo "
";
        // line 54
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 55
            echo "<div id=\"colour_palette\" style=\"display: none;\">
\t<dl style=\"clear: left;\">
\t\t<dt><label>";
            // line 57
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd id=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dd>
\t</dl>
</div>

";
            // line 62
            // line 63
            echo "<div id=\"format-buttons\">
\t<input type=\"button\" class=\"bbcode-button\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" style=\"font-weight:bold; width: 30px\" onclick=\"bbstyle(0)\" title=\"";
            // line 64
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_B_HELP");
            echo "\" />
\t<input type=\"button\" class=\"bbcode-button\" accesskey=\"i\" name=\"addbbcode2\" value=\" I \" style=\"font-style:italic; width: 30px\" onclick=\"bbstyle(2)\" title=\"";
            // line 65
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_I_HELP");
            echo "\" />
\t<input type=\"button\" class=\"bbcode-button\" accesskey=\"u\" name=\"addbbcode4\" value=\" U \" style=\"text-decoration: underline; width: 30px\" onclick=\"bbstyle(4)\" title=\"";
            // line 66
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_U_HELP");
            echo "\" />
\t";
            // line 67
            if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
                // line 68
                echo "\t\t<input type=\"button\" class=\"bbcode-button\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" style=\"width: 60px\" onclick=\"bbstyle(6)\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Q_HELP");
                echo "\" />
\t";
            }
            // line 70
            echo "\t<input type=\"button\" class=\"bbcode-button\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" style=\"width: 60px\" onclick=\"bbstyle(8)\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_C_HELP");
            echo "\" />
\t<input type=\"button\" class=\"bbcode-button\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" style=\"width: 40px\" onclick=\"bbstyle(10)\" title=\"";
            // line 71
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_L_HELP");
            echo "\" />
\t";
            // line 72
            if ((isset($context["S_BBCODE_IMG"]) ? $context["S_BBCODE_IMG"] : null)) {
                // line 73
                echo "\t\t<input type=\"button\" class=\"bbcode-button\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" style=\"width: 40px\" onclick=\"bbstyle(14)\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_P_HELP");
                echo "\" />
\t";
            }
            // line 75
            echo "\t";
            if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                // line 76
                echo "\t\t<input type=\"button\" class=\"bbcode-button\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" style=\"width: 40px\" onclick=\"bbstyle(16)\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_W_HELP");
                echo "\" />
\t";
            }
            // line 78
            echo "\t<input type=\"button\" class=\"bbcode-button\" name=\"bbpalette\" id=\"bbpalette\" value=\"Color\" onclick=\"change_palette();\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_S_HELP");
            echo "\" />

\t";
            // line 80
            // line 81
            echo "</div>
";
            // line 82
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 82,  238 => 81,  237 => 80,  231 => 78,  225 => 76,  222 => 75,  216 => 73,  214 => 72,  210 => 71,  205 => 70,  199 => 68,  197 => 67,  193 => 66,  189 => 65,  185 => 64,  182 => 63,  181 => 62,  172 => 57,  168 => 55,  166 => 54,  163 => 53,  152 => 52,  143 => 46,  136 => 42,  125 => 33,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  38 => 11,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_buttons.html", "");
    }
}
