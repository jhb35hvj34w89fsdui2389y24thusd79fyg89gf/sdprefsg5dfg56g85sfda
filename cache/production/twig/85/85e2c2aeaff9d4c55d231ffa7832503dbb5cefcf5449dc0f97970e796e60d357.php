<?php

/* user_activate_passwd.txt */
class __TwigTemplate_9a453d14147a055f53b2c5747ddacefc5bff7025f0fe236dedf2a476a14b6627 extends Twig_Template
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
        echo "Subject: New password activation

Hello ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

You are receiving this notification because you have (or someone pretending to be you has) requested a new password be sent for your account on \"";
        // line 5
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\". If you did not request this notification then please ignore it, if you keep receiving it please contact the board administrator.

To use the new password you need to activate it. To do this click the link provided below.

";
        // line 9
        echo (isset($context["U_ACTIVATE"]) ? $context["U_ACTIVATE"] : null);
        echo "

If successful you will be able to login using the following password:

Password: ";
        // line 13
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "

You can of course change this password yourself via the profile page. If you have any difficulties please contact the board administrator.

";
        // line 17
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_activate_passwd.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  42 => 13,  35 => 9,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user_activate_passwd.txt", "");
    }
}
