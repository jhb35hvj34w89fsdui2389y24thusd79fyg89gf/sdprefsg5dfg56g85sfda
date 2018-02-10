<?php

/* ucp_pm_viewfolder.html */
class __TwigTemplate_f35d55670219bdc28692788874453aef4367e93e30535a47754f1d1329960dad extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewfolder.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ( !(isset($context["PROMPT"]) ? $context["PROMPT"] : null)) {
            // line 4
            echo "\t";
            $location = "ucp_pm_message_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewfolder.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["PROMPT"]) ? $context["PROMPT"] : null)) {
            // line 8
            echo "\t
\t<form id=\"viewfolder\" method=\"post\" action=\"";
            // line 9
            echo (isset($context["S_PM_ACTION"]) ? $context["S_PM_ACTION"] : null);
            echo "\">
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<h3>";
            // line 12
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
            echo "</h3>
\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"delimiter\">";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELIMITER");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" id=\"delimiter\" name=\"delimiter\" value=\",\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"enclosure\">";
            // line 19
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENCLOSURE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" id=\"enclosure\" name=\"enclosure\" value=\"&#034;\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t</div>
\t</div>
\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"export_option\" value=\"CSV\" />
\t\t<input class=\"button1\" type=\"submit\" name=\"submit_export\" value=\"";
            // line 27
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPORT_FOLDER");
            echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"reset\" value=\"";
            // line 28
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" name=\"reset\" />&nbsp;
\t\t";
            // line 29
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 34
            echo "
\t";
            // line 35
            if ((isset($context["NUM_REMOVED"]) ? $context["NUM_REMOVED"] : null)) {
                // line 36
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 37
                echo (isset($context["RULE_REMOVED_MESSAGES"]) ? $context["RULE_REMOVED_MESSAGES"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 40
            echo "
\t";
            // line 41
            if ((isset($context["NUM_NOT_MOVED"]) ? $context["NUM_NOT_MOVED"] : null)) {
                // line 42
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 43
                echo (isset($context["NOT_MOVED_MESSAGES"]) ? $context["NOT_MOVED_MESSAGES"] : null);
                echo "<br />";
                echo (isset($context["RELEASE_MESSAGE_INFO"]) ? $context["RELEASE_MESSAGE_INFO"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 46
            echo "
\t";
            // line 47
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "messagerow", array()))) {
                // line 48
                echo "\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"inner\">";
                // line 51
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
                // line 52
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
                echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist pmlist responsive-show-all ";
                // line 56
                if ((isset($context["S_SHOW_RECIPIENTS"]) ? $context["S_SHOW_RECIPIENTS"] : null)) {
                    echo "missing-column";
                } else {
                    echo "two-columns";
                }
                echo "\">

\t\t";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "messagerow", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["messagerow"]) {
                    // line 59
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["messagerow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    if ($this->getAttribute($context["messagerow"], "PM_CLASS", array())) {
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "PM_CLASS", array());
                    }
                    echo "\">
\t\t\t\t<dl class=\"";
                    // line 60
                    echo $this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "TOPIC_FOLDER_IMG_STYLE", array());
                    echo "\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                    // line 62
                    if (($this->getAttribute($context["messagerow"], "S_PM_UNREAD", array()) &&  !$this->getAttribute($context["messagerow"], "S_PM_DELETED", array()))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_VIEW_PM", array());
                        echo "\" class=\"link\"></a>";
                    }
                    // line 63
                    echo "\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t";
                    // line 65
                    if ($this->getAttribute($context["messagerow"], "S_PM_DELETED", array())) {
                        // line 66
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_REMOVE_PM", array());
                        echo "\" class=\"topictitle\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_MESSAGE");
                        echo "</a><br />
\t\t\t\t\t\t\t<span class=\"error\">";
                        // line 67
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_REMOVED_FROM_OUTBOX");
                        echo "</span>
\t\t\t\t\t\t";
                    } else {
                        // line 69
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_VIEW_PM", array());
                        echo "\" class=\"topictitle\">";
                        echo $this->getAttribute($context["messagerow"], "SUBJECT", array());
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute($context["messagerow"], "S_AUTHOR_DELETED", array())) {
                        // line 72
                        echo "\t\t\t\t\t\t\t<br /><em class=\"small\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM_FROM_REMOVED_AUTHOR");
                        echo "</em>
\t\t\t\t\t\t";
                    }
                    // line 74
                    echo "
\t\t\t\t\t\t";
                    // line 75
                    if ($this->getAttribute($context["messagerow"], "S_PM_REPORTED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_MCP_REPORT", array());
                        echo "\">";
                        echo (isset($context["REPORTED_IMG"]) ? $context["REPORTED_IMG"] : null);
                        echo "</a>";
                    }
                    echo " ";
                    echo $this->getAttribute($context["messagerow"], "ATTACH_ICON_IMG", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 76
                    if ((isset($context["S_SHOW_RECIPIENTS"]) ? $context["S_SHOW_RECIPIENTS"] : null)) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_TO");
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "RECIPIENTS", array());
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "MESSAGE_AUTHOR_FULL", array());
                        echo " &raquo; ";
                        echo $this->getAttribute($context["messagerow"], "SENT_TIME", array());
                    }
                    // line 77
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t";
                    // line 80
                    if ((isset($context["S_SHOW_RECIPIENTS"]) ? $context["S_SHOW_RECIPIENTS"] : null)) {
                        echo "<dd class=\"info\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SENT_AT");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "SENT_TIME", array());
                        echo "</span></dd>";
                    }
                    // line 81
                    echo "\t\t\t\t\t";
                    if ((isset($context["S_UNREAD"]) ? $context["S_UNREAD"] : null)) {
                        echo "<dd class=\"info\">";
                        if ($this->getAttribute($context["messagerow"], "FOLDER", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["messagerow"], "U_FOLDER", array());
                            echo "\">";
                            echo $this->getAttribute($context["messagerow"], "FOLDER", array());
                            echo "</a>";
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNKNOWN_FOLDER");
                        }
                        echo "</dd>";
                    }
                    // line 82
                    echo "\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"marked_msg_id[]\" value=\"";
                    echo $this->getAttribute($context["messagerow"], "MESSAGE_ID", array());
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagerow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "
\t\t</ul>
\t";
            } else {
                // line 89
                echo "\t\t<p><strong>
\t\t\t";
                // line 90
                if (((isset($context["S_COMPOSE_PM_VIEW"]) ? $context["S_COMPOSE_PM_VIEW"] : null) && (isset($context["S_NO_AUTH_SEND_MESSAGE"]) ? $context["S_NO_AUTH_SEND_MESSAGE"] : null))) {
                    // line 91
                    echo "\t\t\t\t";
                    if ((isset($context["S_USER_NEW"]) ? $context["S_USER_NEW"] : null)) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_NEW_PERMISSION_DISALLOWED");
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_AUTH_SEND_MESSAGE");
                    }
                    // line 92
                    echo "\t\t\t";
                } else {
                    // line 93
                    echo "\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MESSAGES");
                    echo "
\t\t\t";
                }
                // line 95
                echo "\t\t</strong></p>
\t";
            }
            // line 97
            echo "
\t";
            // line 98
            if (((isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 99
                echo "\t\t<fieldset class=\"display-actions\">
\t\t\t<select name=\"mark_option\">";
                // line 100
                echo (isset($context["S_MARK_OPTIONS"]) ? $context["S_MARK_OPTIONS"] : null);
                echo (isset($context["S_MOVE_MARKED_OPTIONS"]) ? $context["S_MOVE_MARKED_OPTIONS"] : null);
                echo "</select> <input class=\"button1\" type=\"submit\" name=\"submit_mark\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" />
\t\t\t<div><a href=\"#\" onclick=\"marklist('viewfolder', 'marked_msg', true); return false;\">";
                // line 101
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                echo "</a> &bull; <a href=\"#\" onclick=\"marklist('viewfolder', 'marked_msg', false); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                echo "</a></div>
\t\t</fieldset>
\t
\t\t<hr />
\t
\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
                // line 108
                echo (isset($context["TOTAL_MESSAGES"]) ? $context["TOTAL_MESSAGES"] : null);
                echo "
\t\t\t\t";
                // line 109
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    echo " 
\t\t\t\t\t";
                    // line 110
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_pm_viewfolder.html", 110)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 111
                    echo "\t\t\t\t";
                } else {
                    echo " 
\t\t\t\t\t &bull; ";
                    // line 112
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "
\t\t\t\t";
                }
                // line 114
                echo "\t\t\t</div>
\t\t</div>
\t";
            }
            // line 117
            echo "
\t\t</div>
\t</div>

\t";
            // line 121
            if (((isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 122
                echo "\t<fieldset class=\"display-options\">
\t\t<label>";
                // line 123
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                echo "</label>
\t\t<label>";
                // line 124
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
                echo " ";
                echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                echo "</label>
\t\t<label>";
                // line 125
                echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 126
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" class=\"button1\" />
\t\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
                // line 127
                echo (isset($context["CUR_FOLDER_ID"]) ? $context["CUR_FOLDER_ID"] : null);
                echo "\" />
\t</fieldset>
\t";
            }
            // line 130
            echo "
\t";
            // line 131
            $location = "ucp_pm_message_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewfolder.html", 131)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 133
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewfolder.html", 133)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewfolder.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 133,  429 => 131,  426 => 130,  420 => 127,  416 => 126,  412 => 125,  406 => 124,  399 => 123,  396 => 122,  394 => 121,  388 => 117,  383 => 114,  378 => 112,  373 => 111,  361 => 110,  357 => 109,  353 => 108,  341 => 101,  334 => 100,  331 => 99,  329 => 98,  326 => 97,  322 => 95,  316 => 93,  313 => 92,  306 => 91,  304 => 90,  301 => 89,  296 => 86,  285 => 82,  270 => 81,  261 => 80,  256 => 77,  244 => 76,  232 => 75,  229 => 74,  223 => 72,  220 => 71,  212 => 69,  207 => 67,  200 => 66,  198 => 65,  194 => 63,  188 => 62,  183 => 60,  170 => 59,  166 => 58,  157 => 56,  150 => 52,  146 => 51,  141 => 48,  139 => 47,  136 => 46,  128 => 43,  125 => 42,  123 => 41,  120 => 40,  114 => 37,  111 => 36,  109 => 35,  106 => 34,  98 => 29,  94 => 28,  90 => 27,  78 => 19,  70 => 15,  64 => 12,  58 => 9,  55 => 8,  53 => 7,  50 => 6,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_pm_viewfolder.html", "");
    }
}
