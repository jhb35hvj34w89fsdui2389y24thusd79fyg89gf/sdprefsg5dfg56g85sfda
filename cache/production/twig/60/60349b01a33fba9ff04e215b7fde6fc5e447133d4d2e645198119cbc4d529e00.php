<?php

/* viewmember_header.html */
class __TwigTemplate_e81326c40a349b2ca2606c42155e9c68aa6c03d5bd9ff15b2e89161bcc8308a3 extends Twig_Template
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
        $this->loadTemplate("overall_ucp_header.html", "viewmember_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<center>
    <div class=\"viewmember-avatar\">
    ";
        // line 5
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            echo "
    ";
        } else {
            // line 6
            echo "<img src=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/anduin/theme/images/avatars/no-avatar-3.png\" alt=\"\" />
    ";
        }
        // line 8
        echo "</div>
</center>
<p class=\"viewmember-title\">";
        // line 10
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</p>
";
        // line 11
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "<p class=\"profile-rank-title\">";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</p>";
        }
        // line 12
        echo "<center>";
        if ((isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null);
            echo "\" class=\"contact-buttons\">&#9993; Send Email</a>";
        }
        echo " ";
        if ((isset($context["U_PM"]) ? $context["U_PM"] : null)) {
            echo " <a href=\"";
            echo (isset($context["U_PM"]) ? $context["U_PM"] : null);
            echo "\" class=\"contact-buttons\">&#9998; Send PM</a>";
        }
        // line 13
        echo "</center>
</br>

<p class=\"user-information\"><a class=\"user-infolinks\" href=\"#\">";
        // line 16
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</a> created his account on <a class=\"user-infolinks\">";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</a>. Since then he submitted <a class=\"user-infolinks\" href=\"";
        echo (isset($context["U_SEARCH_USER"]) ? $context["U_SEARCH_USER"] : null);
        echo "\">";
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo "</a> posts to our forums. </br> The user's favorite forum is <a class=\"user-infolinks\" href=\"";
        echo (isset($context["U_ACTIVE_FORUM"]) ? $context["U_ACTIVE_FORUM"] : null);
        echo "\">";
        echo (isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null);
        echo "</a> and his favorite topic is <a class=\"user-infolinks\" href=\"";
        echo (isset($context["U_ACTIVE_TOPIC"]) ? $context["U_ACTIVE_TOPIC"] : null);
        echo "\">";
        echo (isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null);
        echo "</a>.</p>
    

";
        // line 19
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewmember_header.html", 19)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewmember_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 19,  80 => 16,  75 => 13,  62 => 12,  56 => 11,  52 => 10,  48 => 8,  42 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewmember_header.html", "");
    }
}
