<?php

/* test.txt */
class __TwigTemplate_dce9d7844400f1e09bc73e7fe0daaa39eaeb2f62d1672636a04a93367ee01c74 extends Twig_Template
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
        echo "Subject: phpBB is correctly configured to send emails

Hello ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo ",

Congratulations. If you received this email, phpBB is correctly configured to send emails.

In case you require assistance, please visit the phpBB support forums - https://www.phpbb.com/community/

";
        // line 9
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "test.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "test.txt", "");
    }
}
