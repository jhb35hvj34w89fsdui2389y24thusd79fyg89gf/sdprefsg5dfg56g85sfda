<?php

/* ucp_header.html */
class __TwigTemplate_f2dec98589e5eb3e8102bab52bc1c9cf0f39ae34a7e6df72b0d8db4a27c3ebbd extends Twig_Template
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
        $location = "overall_ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_ucp_header.html", "ucp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<p class=\"ucp-title\">Profile Page</p> 
<p class=\"ucp-description\">Welcome to your profile page. From here you can change your avatar, see private messages, manage your privacy and user settings.</p>

<div id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t
\t\t<li class=\"tab\"><a class=\"tab-title\" href=\"";
        // line 9
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "ucp.php?i=ucp_profile&mode=reg_details\">Settings</a></li>
        <li class=\"tab\"><a class=\"tab-title\" href=\"";
        // line 10
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "ucp.php?i=ucp_profile&mode=avatar\">Profile</a></li>
        <li class=\"tab\"><a class=\"tab-title\" href=\"";
        // line 11
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "ucp.php?i=ucp_prefs&mode=personal\">Privacy</a></li>
        <li class=\"tab\"><a class=\"tab-title\" href=\"";
        // line 12
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "ucp.php?i=ucp_pm\">Messages</a></li>
        
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "ucp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  48 => 11,  44 => 10,  40 => 9,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_header.html", "");
    }
}
