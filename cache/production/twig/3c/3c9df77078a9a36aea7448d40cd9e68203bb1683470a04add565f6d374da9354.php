<?php

/* ucp_pm_viewmessage.html */
class __TwigTemplate_3e9a9cf2c1858e5204d2e907a7c2ffd85c3d2c93e3fdccd35b8c3bf0cbafe985 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewmessage.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $location = "ucp_pm_message_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewmessage.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "
\t</div>
</div>


";
        // line 9
        if (((isset($context["S_DISPLAY_HISTORY"]) ? $context["S_DISPLAY_HISTORY"] : null) && ((isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null) || (isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null)))) {
            // line 10
            echo "\t<fieldset class=\"display-options clearfix\">
\t\t";
            // line 11
            if ((isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null);
                echo "\" class=\"left-box arrow-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PREVIOUS_HISTORY");
                echo "</a>";
            }
            // line 12
            echo "\t\t";
            if ((isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null);
                echo "\" class=\"right-box arrow-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_NEXT_HISTORY");
                echo "</a>";
            }
            // line 13
            echo "\t</fieldset>
";
        }
        // line 15
        echo "

<div id=\"post-";
        // line 17
        echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
        echo "\" class=\"post pm has-profile";
        if (((isset($context["S_POST_UNAPPROVED"]) ? $context["S_POST_UNAPPROVED"] : null) || (isset($context["S_POST_REPORTED"]) ? $context["S_POST_REPORTED"] : null))) {
            echo " reported";
        }
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo " online";
        }
        echo "\">
<div class=\"inner\">

\t<dl class=\"postprofile\" id=\"profile";
        // line 20
        echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
        echo "\">
\t\t<dt class=\"";
        // line 21
        if (((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null) || (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null))) {
            echo "has-profile-rank";
        } else {
            echo "no-profile-rank";
        }
        echo " ";
        if ((isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null)) {
            echo "has-avatar";
        } else {
            echo "no-avatar";
        }
        echo "\">
\t\t\t<div class=\"avatar-container\">
\t\t\t\t";
        // line 23
        // line 24
        echo "\t\t\t\t";
        if ((isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_MESSAGE_AUTHOR"]) ? $context["U_MESSAGE_AUTHOR"] : null);
            echo "\" class=\"avatar\">";
            echo (isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null);
            echo "</a>";
        }
        // line 25
        echo "\t\t\t\t";
        // line 26
        echo "\t\t\t</div>
\t\t\t";
        // line 27
        echo (isset($context["MESSAGE_AUTHOR_FULL"]) ? $context["MESSAGE_AUTHOR_FULL"] : null);
        echo "
\t\t</dt>

\t\t";
        // line 30
        // line 31
        echo "\t\t";
        if (((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null) || (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null))) {
            echo "<dd class=\"profile-rank\">";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            if (((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null) && (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null))) {
                echo "<br />";
            }
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</dd>";
        }
        // line 32
        echo "\t\t";
        // line 33
        echo "
\t\t<dd class=\"profile-posts\"><a class=\"profile-post-count\" href=\"";
        // line 34
        echo (isset($context["U_AUTHOR_POSTS"]) ? $context["U_AUTHOR_POSTS"] : null);
        echo "\">";
        echo (isset($context["AUTHOR_POSTS"]) ? $context["AUTHOR_POSTS"] : null);
        echo " ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
        echo "</a></dd>

\t\t";
        // line 36
        // line 37
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 38
            echo "\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 39
                echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</dd>
\t\t\t";
            }
            // line 41
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t";
        // line 43
        echo "
\t\t";
        // line 44
        // line 45
        echo "\t\t";
        // line 46
        echo "\t</dl>

\t<div class=\"postbody\">
\t\t<h3 class=\"first\">";
        // line 49
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "</h3>

\t\t";
        // line 51
        $value = ((((isset($context["U_EDIT"]) ? $context["U_EDIT"] : null) || (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null)) || (isset($context["U_REPORT"]) ? $context["U_REPORT"] : null)) || (isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null));
        $context['definition']->set('SHOW_PM_POST_BUTTONS', $value);
        // line 52
        echo "\t\t";
        // line 53
        echo "\t\t";
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_PM_POST_BUTTONS", array())) {
            // line 54
            echo "\t\t<ul class=\"post-buttons\">
\t\t\t";
            // line 55
            // line 56
            echo "\t\t\t";
            if ((isset($context["U_EDIT"]) ? $context["U_EDIT"] : null)) {
                // line 57
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 58
                echo (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_EDIT_PM");
                echo "\" class=\"button icon-button edit-icon\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_EDIT_PM");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 61
            echo "\t\t\t";
            if ((isset($context["U_DELETE"]) ? $context["U_DELETE"] : null)) {
                // line 62
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 63
                echo (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_MESSAGE");
                echo "\" class=\"button icon-button delete-icon\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_MESSAGE");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 66
            echo "\t\t\t";
            if ((isset($context["U_REPORT"]) ? $context["U_REPORT"] : null)) {
                // line 67
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 68
                echo (isset($context["U_REPORT"]) ? $context["U_REPORT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_PM");
                echo "\" class=\"button icon-button report-icon\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_PM");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 71
            echo "\t\t\t";
            if ((isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null)) {
                // line 72
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 73
                echo (isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_QUOTE_PM");
                echo "\" class=\"button icon-button quote-icon\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_QUOTE_PM");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 76
            echo "\t\t\t";
            // line 77
            echo "\t\t</ul>
\t\t";
        }
        // line 79
        echo "\t\t";
        // line 80
        echo "
\t\t<p class=\"author\">
\t\t\t<strong>";
        // line 82
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SENT_AT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</strong> ";
        echo (isset($context["SENT_DATE"]) ? $context["SENT_DATE"] : null);
        echo "
\t\t\t<br /><strong>";
        // line 83
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM_FROM");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</strong> ";
        echo (isset($context["MESSAGE_AUTHOR_FULL"]) ? $context["MESSAGE_AUTHOR_FULL"] : null);
        echo "
\t\t\t";
        // line 84
        if ((isset($context["S_TO_RECIPIENT"]) ? $context["S_TO_RECIPIENT"] : null)) {
            echo "<br /><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TO");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                if ($this->getAttribute($context["to_recipient"], "NAME_FULL", array())) {
                    echo $this->getAttribute($context["to_recipient"], "NAME_FULL", array());
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["to_recipient"], "U_VIEW", array());
                    echo "\" style=\"color:";
                    if ($this->getAttribute($context["to_recipient"], "COLOUR", array())) {
                        echo $this->getAttribute($context["to_recipient"], "COLOUR", array());
                    } elseif ($this->getAttribute($context["to_recipient"], "IS_GROUP", array())) {
                        echo "#0000FF";
                    }
                    echo ";\">";
                    echo $this->getAttribute($context["to_recipient"], "NAME", array());
                    echo "</a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 85
        echo "\t\t\t";
        if ((isset($context["S_BCC_RECIPIENT"]) ? $context["S_BCC_RECIPIENT"] : null)) {
            echo "<br /><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BCC");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                if ($this->getAttribute($context["bcc_recipient"], "NAME_FULL", array())) {
                    echo $this->getAttribute($context["bcc_recipient"], "NAME_FULL", array());
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["bcc_recipient"], "U_VIEW", array());
                    echo "\" style=\"color:";
                    if ($this->getAttribute($context["bcc_recipient"], "COLOUR", array())) {
                        echo $this->getAttribute($context["bcc_recipient"], "COLOUR", array());
                    } elseif ($this->getAttribute($context["bcc_recipient"], "IS_GROUP", array())) {
                        echo "#0000FF";
                    }
                    echo ";\">";
                    echo $this->getAttribute($context["bcc_recipient"], "NAME", array());
                    echo "</a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 86
        echo "\t\t</p>


\t\t<div class=\"content\">";
        // line 89
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "</div>

\t\t";
        // line 91
        if ((isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) {
            // line 92
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>
\t\t\t\t\t";
            // line 94
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
            echo "
\t\t\t\t</dt>
\t\t\t\t";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 97
                echo "\t\t\t\t\t<dd>";
                echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t</dl>
\t\t";
        }
        // line 101
        echo "
\t\t";
        // line 102
        if ((isset($context["S_DISPLAY_NOTICE"]) ? $context["S_DISPLAY_NOTICE"] : null)) {
            // line 103
            echo "\t\t\t<div class=\"post-notice error\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_NOTICE");
            echo "</div>
\t\t";
        }
        // line 105
        echo "
\t\t";
        // line 106
        if (((isset($context["EDITED_MESSAGE"]) ? $context["EDITED_MESSAGE"] : null) || (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null))) {
            // line 107
            echo "\t\t<div class=\"notice\">";
            echo (isset($context["EDITED_MESSAGE"]) ? $context["EDITED_MESSAGE"] : null);
            echo "
\t\t\t";
            // line 108
            if ((isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> <em>";
                echo (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null);
                echo "</em>";
            }
            // line 109
            echo "\t\t</div>
\t\t";
        }
        // line 111
        echo "
\t\t";
        // line 112
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 113
            echo "\t\t\t<div id=\"sig";
            echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
            echo "\" class=\"signature\">";
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "</div>
\t\t";
        }
        // line 115
        echo "    </div>

\t</div>
</div>

";
        // line 120
        $location = "ucp_pm_message_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewmessage.html", 120)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 121
        echo "
";
        // line 122
        if ((isset($context["S_DISPLAY_HISTORY"]) ? $context["S_DISPLAY_HISTORY"] : null)) {
            $location = "ucp_pm_history.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_history.html", "ucp_pm_viewmessage.html", 122)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 123
        echo "
";
        // line 124
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewmessage.html", 124)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewmessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 124,  494 => 123,  480 => 122,  477 => 121,  465 => 120,  458 => 115,  450 => 113,  448 => 112,  445 => 111,  441 => 109,  432 => 108,  427 => 107,  425 => 106,  422 => 105,  416 => 103,  414 => 102,  411 => 101,  407 => 99,  398 => 97,  394 => 96,  389 => 94,  385 => 92,  383 => 91,  378 => 89,  373 => 86,  342 => 85,  312 => 84,  305 => 83,  298 => 82,  294 => 80,  292 => 79,  288 => 77,  286 => 76,  276 => 73,  273 => 72,  270 => 71,  260 => 68,  257 => 67,  254 => 66,  244 => 63,  241 => 62,  238 => 61,  228 => 58,  225 => 57,  222 => 56,  221 => 55,  218 => 54,  215 => 53,  213 => 52,  210 => 51,  205 => 49,  200 => 46,  198 => 45,  197 => 44,  194 => 43,  192 => 42,  186 => 41,  175 => 39,  172 => 38,  167 => 37,  166 => 36,  157 => 34,  154 => 33,  152 => 32,  141 => 31,  140 => 30,  134 => 27,  131 => 26,  129 => 25,  120 => 24,  119 => 23,  104 => 21,  100 => 20,  87 => 17,  83 => 15,  79 => 13,  68 => 12,  58 => 11,  55 => 10,  53 => 9,  46 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_pm_viewmessage.html", "");
    }
}
