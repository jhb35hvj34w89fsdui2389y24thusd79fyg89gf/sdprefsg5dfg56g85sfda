<?php

/* mcp_post.html */
class __TwigTemplate_a75cceb25bb78d0142c658b33f61c60bcc29ad6fe59b8b6c5678abc98d80fa99 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_post.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null)) {
            // line 4
            echo "\t";
            if ((isset($context["S_PM"]) ? $context["S_PM"] : null)) {
                // line 5
                echo "\t<h2>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM_REPORT_DETAILS");
                echo "</h2>
\t";
            } else {
                // line 7
                echo "\t<h2>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_DETAILS");
                echo "</h2>
\t";
            }
            // line 9
            echo "
\t<div id=\"report\" class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"postbody\">
\t\t\t<h3>";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_REASON");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            echo (isset($context["REPORT_REASON_TITLE"]) ? $context["REPORT_REASON_TITLE"] : null);
            echo "</h3>
\t\t\t<p class=\"author\">";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED");
            echo " ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo (isset($context["REPORTER_FULL"]) ? $context["REPORTER_FULL"] : null);
            echo " &laquo; ";
            echo (isset($context["REPORT_DATE"]) ? $context["REPORT_DATE"] : null);
            echo "</p>
\t\t";
            // line 16
            if ((isset($context["S_REPORT_CLOSED"]) ? $context["S_REPORT_CLOSED"] : null)) {
                // line 17
                echo "\t\t\t<p class=\"post-notice reported\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_CLOSED");
                echo "</p>
\t\t";
            }
            // line 19
            echo "\t\t\t<div class=\"content\">
\t\t\t";
            // line 20
            if ((isset($context["REPORT_TEXT"]) ? $context["REPORT_TEXT"] : null)) {
                // line 21
                echo "\t\t\t\t";
                echo (isset($context["REPORT_TEXT"]) ? $context["REPORT_TEXT"] : null);
                echo "
\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t";
                echo (isset($context["REPORT_REASON_DESCRIPTION"]) ? $context["REPORT_REASON_DESCRIPTION"] : null);
                echo "
\t\t\t";
            }
            // line 25
            echo "\t\t\t</div>
\t\t</div>

\t\t</div>
\t</div>

\t<form method=\"post\" id=\"mcp_report\" action=\"";
            // line 31
            echo (isset($context["S_CLOSE_ACTION"]) ? $context["S_CLOSE_ACTION"] : null);
            echo "\">

\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 34
            if ( !(isset($context["S_REPORT_CLOSED"]) ? $context["S_REPORT_CLOSED"] : null)) {
                // line 35
                echo "\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLOSE_REPORT");
                echo "\" name=\"action[close]\" /> &nbsp;
\t\t";
            }
            // line 37
            echo "\t\t<input class=\"button2\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_REPORT");
            echo "\" name=\"action[delete]\" />
\t\t<input type=\"hidden\" name=\"report_id_list[]\" value=\"";
            // line 38
            echo (isset($context["REPORT_ID"]) ? $context["REPORT_ID"] : null);
            echo "\" />
\t\t";
            // line 39
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 44
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DETAILS");
            echo "</h2>
";
        }
        // line 46
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"postbody\">
\t\t<h3><a href=\"";
        // line 51
        echo (isset($context["U_VIEW_POST"]) ? $context["U_VIEW_POST"] : null);
        echo "\">";
        echo (isset($context["POST_SUBJECT"]) ? $context["POST_SUBJECT"] : null);
        echo "</a></h3>

\t\t<ul class=\"post-buttons\">
\t\t\t<li id=\"expand\">
\t\t\t\t<a href=\"#post_details\" onclick=\"viewableArea(getElementById('post_details'), true); var rev_text = getElementById('expand').getElementsByTagName('a').item(0).firstChild; if (rev_text.data.trim() == '";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data.trim() == '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW"), "js");
        echo "';} return false;\">
\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW");
        echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        // line 59
        if ((isset($context["U_EDIT"]) ? $context["U_EDIT"] : null)) {
            // line 60
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 61
            echo (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_POST");
            echo "\" class=\"button icon-button edit-icon\">
\t\t\t\t\t\t<span>";
            // line 62
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_POST");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 66
        echo "\t\t</ul>

\t\t";
        // line 68
        if ((isset($context["S_PM"]) ? $context["S_PM"] : null)) {
            // line 69
            echo "\t\t<p class=\"author\">
\t\t\t<strong>";
            // line 70
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SENT_AT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["POST_DATE"]) ? $context["POST_DATE"] : null);
            echo "
\t\t\t<br /><strong>";
            // line 71
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM_FROM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["POST_AUTHOR_FULL"]) ? $context["POST_AUTHOR_FULL"] : null);
            echo "
\t\t\t";
            // line 72
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
            // line 73
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
            // line 74
            echo "\t\t</p>
\t\t";
        } else {
            // line 76
            echo "\t\t<p class=\"author\">";
            echo (isset($context["MINI_POST_IMG"]) ? $context["MINI_POST_IMG"] : null);
            echo " ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
            echo " ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo (isset($context["POST_AUTHOR_FULL"]) ? $context["POST_AUTHOR_FULL"] : null);
            echo " &raquo; ";
            echo (isset($context["POST_DATE"]) ? $context["POST_DATE"] : null);
            echo "</p>
\t\t";
        }
        // line 78
        echo "
\t\t";
        // line 79
        if ((isset($context["S_POST_UNAPPROVED"]) ? $context["S_POST_UNAPPROVED"] : null)) {
            // line 80
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            echo (isset($context["U_APPROVE_ACTION"]) ? $context["U_APPROVE_ACTION"] : null);
            echo "\">

\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 83
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
            echo "\" name=\"action[disapprove]\" /> &nbsp;
\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
            // line 84
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
            echo "\" name=\"action[approve]\" />
\t\t\t\t";
            // line 85
            if ( !(isset($context["S_FIRST_POST"]) ? $context["S_FIRST_POST"] : null)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"unapproved_posts\" />";
            }
            // line 86
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            echo (isset($context["POST_ID"]) ? $context["POST_ID"] : null);
            echo "\" />
\t\t\t\t";
            // line 87
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        } elseif (        // line 90
(isset($context["S_POST_DELETED"]) ? $context["S_POST_DELETED"] : null)) {
            // line 91
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            echo (isset($context["U_APPROVE_ACTION"]) ? $context["U_APPROVE_ACTION"] : null);
            echo "\">

\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t";
            // line 94
            if ((isset($context["S_CAN_DELETE_POST"]) ? $context["S_CAN_DELETE_POST"] : null)) {
                echo "<input class=\"button2\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                echo "\" name=\"action[delete]\" /> &nbsp;";
            }
            // line 95
            echo "\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
            echo "\" name=\"action[restore]\" />
\t\t\t\t";
            // line 96
            if ( !(isset($context["S_FIRST_POST"]) ? $context["S_FIRST_POST"] : null)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"deleted_posts\" />";
            }
            // line 97
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            echo (isset($context["POST_ID"]) ? $context["POST_ID"] : null);
            echo "\" />
\t\t\t\t";
            // line 98
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        }
        // line 102
        echo "
\t\t";
        // line 103
        if ((isset($context["S_MESSAGE_REPORTED"]) ? $context["S_MESSAGE_REPORTED"] : null)) {
            // line 104
            echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t";
            // line 105
            echo (isset($context["REPORTED_IMG"]) ? $context["REPORTED_IMG"] : null);
            echo " <a href=\"";
            echo (isset($context["U_MCP_REPORT"]) ? $context["U_MCP_REPORT"] : null);
            echo "\"><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_REPORTED");
            echo "</strong></a>
\t\t\t</p>
\t\t";
        }
        // line 108
        echo "
\t\t<div class=\"content\" id=\"post_details\">
\t\t\t";
        // line 110
        echo (isset($context["POST_PREVIEW"]) ? $context["POST_PREVIEW"] : null);
        echo "
\t\t</div>

\t\t";
        // line 113
        if ((isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) {
            // line 114
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>";
            // line 115
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
            echo "</dt>
\t\t\t\t";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 117
                echo "\t\t\t\t\t<dd>";
                echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "\t\t\t</dl>
\t\t";
        }
        // line 121
        echo "
\t\t";
        // line 122
        if (((isset($context["DELETED_MESSAGE"]) ? $context["DELETED_MESSAGE"] : null) || (isset($context["DELETE_REASON"]) ? $context["DELETE_REASON"] : null))) {
            // line 123
            echo "\t\t\t<div class=\"notice\">
\t\t\t\t";
            // line 124
            echo (isset($context["DELETED_MESSAGE"]) ? $context["DELETED_MESSAGE"] : null);
            echo "
\t\t\t\t";
            // line 125
            if ((isset($context["DELETE_REASON"]) ? $context["DELETE_REASON"] : null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> <em>";
                echo (isset($context["DELETE_REASON"]) ? $context["DELETE_REASON"] : null);
                echo "</em>";
            }
            // line 126
            echo "\t\t\t</div>
\t\t";
        }
        // line 128
        echo "
\t\t";
        // line 129
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 130
            echo "\t\t\t<div id=\"sig";
            echo (isset($context["POST_ID"]) ? $context["POST_ID"] : null);
            echo "\" class=\"signature\">";
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "</div>
\t\t";
        }
        // line 132
        echo "
\t\t";
        // line 133
        if (((isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null) && (isset($context["S_CAN_VIEWIP"]) ? $context["S_CAN_VIEWIP"] : null))) {
            // line 134
            echo "\t\t\t<hr />
\t\t\t<div>";
            // line 135
            if ((isset($context["S_PM"]) ? $context["S_PM"] : null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THIS_PM_IP");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THIS_POST_IP");
            }
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            if ((isset($context["U_WHOIS"]) ? $context["U_WHOIS"] : null)) {
                // line 136
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_WHOIS"]) ? $context["U_WHOIS"] : null);
                echo "\">";
                if ((isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null)) {
                    echo (isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null);
                } else {
                    echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                }
                echo "</a> (";
                if ((isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null)) {
                    echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                } else {
                    echo "<a href=\"";
                    echo (isset($context["U_LOOKUP_IP"]) ? $context["U_LOOKUP_IP"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOKUP_IP");
                    echo "</a>";
                }
                echo ")
\t\t\t";
            } else {
                // line 138
                echo "\t\t\t\t";
                if ((isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null)) {
                    echo (isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null);
                    echo " (";
                    echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                    echo ")";
                } else {
                    echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                    if ((isset($context["U_LOOKUP_IP"]) ? $context["U_LOOKUP_IP"] : null)) {
                        echo " (<a href=\"";
                        echo (isset($context["U_LOOKUP_IP"]) ? $context["U_LOOKUP_IP"] : null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                }
                // line 139
                echo "\t\t\t";
            }
            echo "</div>
\t\t";
        }
        // line 141
        echo "
\t</div>

\t</div>
</div>

";
        // line 147
        if (((((isset($context["S_CAN_LOCK_POST"]) ? $context["S_CAN_LOCK_POST"] : null) || (isset($context["S_CAN_DELETE_POST"]) ? $context["S_CAN_DELETE_POST"] : null)) || (isset($context["S_CAN_CHGPOSTER"]) ? $context["S_CAN_CHGPOSTER"] : null)) || (isset($context["S_MCP_POST_ADDITIONAL_OPTS"]) ? $context["S_MCP_POST_ADDITIONAL_OPTS"] : null))) {
            // line 148
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 151
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOD_OPTIONS");
            echo "</h3>
\t\t";
            // line 152
            if ((isset($context["S_CAN_CHGPOSTER"]) ? $context["S_CAN_CHGPOSTER"] : null)) {
                // line 153
                echo "\t\t\t<form method=\"post\" id=\"mcp_chgposter\" action=\"";
                echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 157
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_POSTER");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t";
                // line 158
                if ((isset($context["S_USER_SELECT"]) ? $context["S_USER_SELECT"] : null)) {
                    echo "<dd><select name=\"u\">";
                    echo (isset($context["S_USER_SELECT"]) ? $context["S_USER_SELECT"] : null);
                    echo "</select> <input type=\"submit\" class=\"button2\" name=\"action[chgposter_ip]\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM");
                    echo "\" /></dd>";
                }
                // line 159
                echo "\t\t\t\t<dd style=\"margin-top:3px;\">
\t\t\t\t\t<input class=\"inputbox autowidth\" type=\"text\" name=\"username\" value=\"\" />
\t\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"action[chgposter]\" value=\"";
                // line 161
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM");
                echo "\" />
\t\t\t\t\t<br />
\t\t\t\t\t<span>[ <a href=\"";
                // line 163
                echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                echo "</a> ]</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 166
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 170
            echo "
\t\t";
            // line 171
            // line 172
            echo "
\t\t";
            // line 173
            if (((isset($context["S_CAN_LOCK_POST"]) ? $context["S_CAN_LOCK_POST"] : null) || (isset($context["S_CAN_DELETE_POST"]) ? $context["S_CAN_DELETE_POST"] : null))) {
                // line 174
                echo "\t\t\t<form method=\"post\" id=\"mcp\" action=\"";
                echo (isset($context["U_MCP_ACTION"]) ? $context["U_MCP_ACTION"] : null);
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 178
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOD_OPTIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><select name=\"action\">
\t\t\t\t\t";
                // line 180
                if ((isset($context["S_CAN_LOCK_POST"]) ? $context["S_CAN_LOCK_POST"] : null)) {
                    if ((isset($context["S_POST_LOCKED"]) ? $context["S_POST_LOCKED"] : null)) {
                        echo "<option value=\"unlock_post\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNLOCK_POST");
                        echo " [";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNLOCK_POST_EXPLAIN");
                        echo "]</option>";
                    } else {
                        echo "<option value=\"lock_post\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST");
                        echo " [";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST_EXPLAIN");
                        echo "]</option>";
                    }
                }
                // line 181
                echo "\t\t\t\t\t";
                if ((isset($context["S_CAN_DELETE_POST"]) ? $context["S_CAN_DELETE_POST"] : null)) {
                    echo "<option value=\"delete_post\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                    echo "</option>";
                }
                // line 182
                echo "\t\t\t\t\t</select> <input class=\"button2\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 185
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 189
            echo "
\t\t</div>
\t</div>
";
        }
        // line 193
        echo "

";
        // line 195
        if ((((isset($context["S_MCP_QUEUE"]) ? $context["S_MCP_QUEUE"] : null) || (isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null)) || (isset($context["RETURN_TOPIC"]) ? $context["RETURN_TOPIC"] : null))) {
            // line 196
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<p>";
            // line 199
            if ((isset($context["S_MCP_QUEUE"]) ? $context["S_MCP_QUEUE"] : null)) {
                echo (isset($context["RETURN_QUEUE"]) ? $context["RETURN_QUEUE"] : null);
                echo " | ";
                echo (isset($context["RETURN_TOPIC_SIMPLE"]) ? $context["RETURN_TOPIC_SIMPLE"] : null);
                echo " | ";
                echo (isset($context["RETURN_POST"]) ? $context["RETURN_POST"] : null);
            } elseif ((isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null)) {
                echo (isset($context["RETURN_REPORTS"]) ? $context["RETURN_REPORTS"] : null);
                if ( !(isset($context["S_PM"]) ? $context["S_PM"] : null)) {
                    echo " | <a href=\"";
                    echo (isset($context["U_VIEW_POST"]) ? $context["U_VIEW_POST"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_POST");
                    echo "</a> | <a href=\"";
                    echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC");
                    echo "</a> | <a href=\"";
                    echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_FORUM");
                    echo "</a>";
                }
            } else {
                echo (isset($context["RETURN_TOPIC"]) ? $context["RETURN_TOPIC"] : null);
            }
            echo "</p>

\t\t</div>
\t</div>
";
        }
        // line 204
        echo "
";
        // line 205
        if ((isset($context["S_MCP_QUEUE"]) ? $context["S_MCP_QUEUE"] : null)) {
        } else {
            // line 207
            echo "
\t";
            // line 208
            if ((isset($context["S_SHOW_USER_NOTES"]) ? $context["S_SHOW_USER_NOTES"] : null)) {
                // line 209
                echo "\t\t<div class=\"panel\" id=\"usernotes\">
\t\t\t<div class=\"inner\">

\t\t\t<form method=\"post\" id=\"mcp_notes\" action=\"";
                // line 212
                echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
                echo "\">

\t\t\t";
                // line 214
                if ((isset($context["S_USER_NOTES"]) ? $context["S_USER_NOTES"] : null)) {
                    // line 215
                    echo "\t\t\t\t<h3>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEEDBACK");
                    echo "</h3>

\t\t\t\t";
                    // line 217
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "usernotes", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["usernotes"]) {
                        // line 218
                        echo "\t\t\t\t\t<span class=\"small\"><strong>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED_BY");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["usernotes"], "REPORT_BY", array());
                        echo " &laquo; ";
                        echo $this->getAttribute($context["usernotes"], "REPORT_AT", array());
                        echo "</strong></span>
\t\t\t\t\t";
                        // line 219
                        if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                            echo "<div class=\"right-box\"><input type=\"checkbox\" name=\"marknote[]\" value=\"";
                            echo $this->getAttribute($context["usernotes"], "ID", array());
                            echo "\" /></div>";
                        }
                        // line 220
                        echo "\t\t\t\t\t<div class=\"postbody\">";
                        echo $this->getAttribute($context["usernotes"], "ACTION", array());
                        echo "</div>

\t\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usernotes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 224
                    echo "
\t\t\t\t";
                    // line 225
                    if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                        // line 226
                        echo "\t\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_all]\" value=\"";
                        // line 227
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_ALL");
                        echo "\" />&nbsp;
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_marked]\" value=\"";
                        // line 228
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_MARKED");
                        echo "\" />
\t\t\t\t\t</fieldset>
\t\t\t\t";
                    }
                    // line 231
                    echo "\t\t\t";
                }
                // line 232
                echo "
\t\t\t<h3>";
                // line 233
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_FEEDBACK");
                echo "</h3>
\t\t\t<p>";
                // line 234
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_FEEDBACK_EXPLAIN");
                echo "</p>

\t\t\t<fieldset>
\t\t\t\t<textarea name=\"usernote\" rows=\"4\" cols=\"76\" class=\"inputbox\"></textarea>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"action[add_feedback]\" value=\"";
                // line 241
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"reset\" value=\"";
                // line 242
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
                echo "\" />
\t\t\t\t";
                // line 243
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 250
            echo "
\t";
            // line 251
            if ((isset($context["S_SHOW_REPORTS"]) ? $context["S_SHOW_REPORTS"] : null)) {
                // line 252
                echo "\t\t<div class=\"panel\" id=\"reports\">
\t\t\t<div class=\"inner\">

\t\t\t<h3>";
                // line 255
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_POST_REPORTS");
                echo "</h3>

\t\t\t";
                // line 257
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "reports", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["reports"]) {
                    // line 258
                    echo "\t\t\t\t<span class=\"small\"><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED_BY");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    if ($this->getAttribute($context["reports"], "U_REPORTER", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["reports"], "U_REPORTER", array());
                        echo "\">";
                        echo $this->getAttribute($context["reports"], "REPORTER", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["reports"], "REPORTER", array());
                    }
                    echo " &laquo; ";
                    echo $this->getAttribute($context["reports"], "REPORT_TIME", array());
                    echo "</strong></span>
\t\t\t\t<p><em>";
                    // line 259
                    echo $this->getAttribute($context["reports"], "REASON_TITLE", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["reports"], "REASON_DESC", array());
                    echo "</em>";
                    if ($this->getAttribute($context["reports"], "REPORT_TEXT", array())) {
                        echo "<br />";
                        echo $this->getAttribute($context["reports"], "REPORT_TEXT", array());
                    }
                    echo "</p>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reports'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 261
                echo "
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 265
            echo "
\t";
            // line 266
            if (((isset($context["S_CAN_VIEWIP"]) ? $context["S_CAN_VIEWIP"] : null) &&  !(isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null))) {
                // line 267
                echo "\t\t<div class=\"panel\" id=\"ip\">
\t\t\t<div class=\"inner\">

\t\t\t<p>";
                // line 270
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THIS_POST_IP");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                if ((isset($context["U_WHOIS"]) ? $context["U_WHOIS"] : null)) {
                    // line 271
                    echo "\t\t\t\t<a href=\"";
                    echo (isset($context["U_WHOIS"]) ? $context["U_WHOIS"] : null);
                    echo "\">";
                    if ((isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null)) {
                        echo (isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null);
                    } else {
                        echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                    }
                    echo "</a> (";
                    if ((isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null)) {
                        echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                    } else {
                        echo "<a href=\"";
                        echo (isset($context["U_LOOKUP_IP"]) ? $context["U_LOOKUP_IP"] : null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOKUP_IP");
                        echo "</a>";
                    }
                    echo ")
\t\t\t";
                } else {
                    // line 273
                    echo "\t\t\t\t";
                    if ((isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null)) {
                        echo (isset($context["POST_IPADDR"]) ? $context["POST_IPADDR"] : null);
                        echo " (";
                        echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                        echo ")";
                    } else {
                        echo (isset($context["POST_IP"]) ? $context["POST_IP"] : null);
                        if ((isset($context["U_LOOKUP_IP"]) ? $context["U_LOOKUP_IP"] : null)) {
                            echo " (<a href=\"";
                            echo (isset($context["U_LOOKUP_IP"]) ? $context["U_LOOKUP_IP"] : null);
                            echo "\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOKUP_IP");
                            echo "</a>)";
                        }
                    }
                    // line 274
                    echo "\t\t\t";
                }
                echo "</p>

\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 279
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OTHER_USERS");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 280
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 284
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "userrow", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["userrow"]) {
                    // line 285
                    echo "\t\t\t<tr class=\"";
                    if (($this->getAttribute($context["userrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 286
                    if ($this->getAttribute($context["userrow"], "U_PROFILE", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["userrow"], "U_PROFILE", array());
                        echo "\">";
                        echo $this->getAttribute($context["userrow"], "USERNAME", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["userrow"], "USERNAME", array());
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\"><a href=\"";
                    // line 287
                    echo $this->getAttribute($context["userrow"], "U_SEARCHPOSTS", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_POSTS_BY");
                    echo " ";
                    echo $this->getAttribute($context["userrow"], "USERNAME", array());
                    echo "\">";
                    echo $this->getAttribute($context["userrow"], "NUM_POSTS", array());
                    echo "</a></td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 290
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 291
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 294
                echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 300
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IPS_POSTED_FROM");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 301
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 305
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "iprow", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["iprow"]) {
                    // line 306
                    echo "\t\t\t<tr class=\"";
                    if (($this->getAttribute($context["iprow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 307
                    if ($this->getAttribute($context["iprow"], "HOSTNAME", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["iprow"], "U_WHOIS", array());
                        echo "\">";
                        echo $this->getAttribute($context["iprow"], "HOSTNAME", array());
                        echo "</a> (";
                        echo $this->getAttribute($context["iprow"], "IP", array());
                        echo ")";
                    } else {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["iprow"], "U_WHOIS", array());
                        echo "\">";
                        echo $this->getAttribute($context["iprow"], "IP", array());
                        echo "</a> (<a href=\"";
                        echo $this->getAttribute($context["iprow"], "U_LOOKUP_IP", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\">";
                    // line 308
                    echo $this->getAttribute($context["iprow"], "NUM_POSTS", array());
                    echo "</td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 311
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 312
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iprow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 315
                echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t<p><a href=\"";
                // line 318
                echo (isset($context["U_LOOKUP_ALL"]) ? $context["U_LOOKUP_ALL"] : null);
                echo "#ip\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOKUP_ALL");
                echo "</a></p>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 323
            echo "
";
        }
        // line 325
        echo "
";
        // line 326
        if ((isset($context["S_TOPIC_REVIEW"]) ? $context["S_TOPIC_REVIEW"] : null)) {
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "mcp_post.html", 326)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 327
        echo "
";
        // line 328
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_post.html", 328)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1113 => 328,  1110 => 327,  1096 => 326,  1093 => 325,  1089 => 323,  1079 => 318,  1074 => 315,  1065 => 312,  1062 => 311,  1054 => 308,  1032 => 307,  1023 => 306,  1018 => 305,  1011 => 301,  1007 => 300,  999 => 294,  990 => 291,  987 => 290,  973 => 287,  961 => 286,  952 => 285,  947 => 284,  940 => 280,  936 => 279,  927 => 274,  910 => 273,  888 => 271,  883 => 270,  878 => 267,  876 => 266,  873 => 265,  867 => 261,  851 => 259,  833 => 258,  829 => 257,  824 => 255,  819 => 252,  817 => 251,  814 => 250,  804 => 243,  800 => 242,  796 => 241,  786 => 234,  782 => 233,  779 => 232,  776 => 231,  770 => 228,  766 => 227,  763 => 226,  761 => 225,  758 => 224,  747 => 220,  741 => 219,  731 => 218,  727 => 217,  721 => 215,  719 => 214,  714 => 212,  709 => 209,  707 => 208,  704 => 207,  701 => 205,  698 => 204,  665 => 199,  660 => 196,  658 => 195,  654 => 193,  648 => 189,  641 => 185,  634 => 182,  627 => 181,  611 => 180,  605 => 178,  597 => 174,  595 => 173,  592 => 172,  591 => 171,  588 => 170,  581 => 166,  573 => 163,  568 => 161,  564 => 159,  556 => 158,  551 => 157,  543 => 153,  541 => 152,  537 => 151,  532 => 148,  530 => 147,  522 => 141,  516 => 139,  499 => 138,  477 => 136,  468 => 135,  465 => 134,  463 => 133,  460 => 132,  452 => 130,  450 => 129,  447 => 128,  443 => 126,  434 => 125,  430 => 124,  427 => 123,  425 => 122,  422 => 121,  418 => 119,  409 => 117,  405 => 116,  401 => 115,  398 => 114,  396 => 113,  390 => 110,  386 => 108,  376 => 105,  373 => 104,  371 => 103,  368 => 102,  361 => 98,  356 => 97,  352 => 96,  347 => 95,  341 => 94,  334 => 91,  332 => 90,  326 => 87,  321 => 86,  317 => 85,  313 => 84,  309 => 83,  302 => 80,  300 => 79,  297 => 78,  283 => 76,  279 => 74,  248 => 73,  218 => 72,  211 => 71,  204 => 70,  201 => 69,  199 => 68,  195 => 66,  188 => 62,  182 => 61,  179 => 60,  177 => 59,  171 => 56,  161 => 55,  152 => 51,  145 => 46,  139 => 44,  131 => 39,  127 => 38,  122 => 37,  116 => 35,  114 => 34,  108 => 31,  100 => 25,  94 => 23,  88 => 21,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  65 => 15,  58 => 14,  51 => 9,  45 => 7,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mcp_post.html", "");
    }
}
