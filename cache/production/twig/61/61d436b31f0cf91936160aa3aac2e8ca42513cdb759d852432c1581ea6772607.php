<?php

/* acp_avatar_options_gravatar.html */
class __TwigTemplate_c14251d0de385de6d7d586001f49a23035c6b7fe687c6db38b9590124d4affe6 extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"avatar_gravatar_email\">";
        // line 2
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GRAVATAR_AVATAR_EMAIL");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GRAVATAR_AVATAR_EMAIL_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"email\" name=\"avatar_gravatar_email\" id=\"avatar_gravatar_email\" value=\"";
        // line 3
        echo (isset($context["AVATAR_GRAVATAR_EMAIL"]) ? $context["AVATAR_GRAVATAR_EMAIL"] : null);
        echo "\" class=\"inputbox\" /></dd>
</dl>
<dl>
\t<dt><label for=\"avatar_gravatar_width\">";
        // line 6
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GRAVATAR_AVATAR_SIZE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GRAVATAR_AVATAR_SIZE_EXPLAIN");
        echo "</span></dt>
\t<dd>
\t\t<input type=\"number\" name=\"avatar_gravatar_width\" id=\"avatar_gravatar_width\" min=\"";
        // line 8
        echo (isset($context["AVATAR_MIN_WIDTH"]) ? $context["AVATAR_MIN_WIDTH"] : null);
        echo "\" max=\"";
        echo (isset($context["AVATAR_MAX_WIDTH"]) ? $context["AVATAR_MAX_WIDTH"] : null);
        echo "\" value=\"";
        echo (isset($context["AVATAR_GRAVATAR_WIDTH"]) ? $context["AVATAR_GRAVATAR_WIDTH"] : null);
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PIXEL");
        echo " &times;&nbsp;
\t\t<input type=\"number\" name=\"avatar_gravatar_height\" id=\"avatar_gravatar_height\" min=\"";
        // line 9
        echo (isset($context["AVATAR_MIN_HEIGHT"]) ? $context["AVATAR_MIN_HEIGHT"] : null);
        echo "\" max=\"";
        echo (isset($context["AVATAR_MAX_HEIGHT"]) ? $context["AVATAR_MAX_HEIGHT"] : null);
        echo "\" value=\"";
        echo (isset($context["AVATAR_GRAVATAR_HEIGHT"]) ? $context["AVATAR_GRAVATAR_HEIGHT"] : null);
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PIXEL");
        echo "
\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "acp_avatar_options_gravatar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  43 => 8,  35 => 6,  29 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "acp_avatar_options_gravatar.html", "");
    }
}
