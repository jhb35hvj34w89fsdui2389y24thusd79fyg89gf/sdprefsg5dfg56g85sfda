<?php

/* ucp_avatar_options_upload.html */
class __TwigTemplate_7bbce8c812bf5bf79525f446c40a942684e137f1bacd17eca7982bbcb08c57bc extends Twig_Template
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
\t<dd><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"";
        // line 2
        echo (isset($context["AVATAR_UPLOAD_SIZE"]) ? $context["AVATAR_UPLOAD_SIZE"] : null);
        echo "\" /><input type=\"file\" name=\"avatar_upload_file\" id=\"avatar_upload_file\" class=\"inputbox-avatar-upload\" /></dd>
</dl>

";
        // line 5
        if ((isset($context["S_UPLOAD_AVATAR_URL"]) ? $context["S_UPLOAD_AVATAR_URL"] : null)) {
            // line 6
            echo "<p class=\"ucp-avatar-or\">OR</p>
\t<dl>
\t\t<dd><input type=\"url\" name=\"avatar_upload_url\" id=\"avatar_upload_url\" placeholder=\"Avatar URL\" value=\"\" class=\"inputbox-avatar-url\" /></dd>
\t</dl>
";
        }
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options_upload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_avatar_options_upload.html", "");
    }
}
