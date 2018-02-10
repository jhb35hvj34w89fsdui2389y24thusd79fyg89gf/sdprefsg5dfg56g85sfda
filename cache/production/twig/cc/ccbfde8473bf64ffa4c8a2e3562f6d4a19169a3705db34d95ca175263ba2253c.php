<?php

/* mcp_topic.html */
class __TwigTemplate_9856f8b5309828ed05b7bcb873e42bd11c616db958008e7ae1c0b309a4167990 extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_topic.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"tabs-container\">
<h2><a href=\"";
        // line 4
        echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</a></h2>

";
        // line 6
        if ((isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
            // line 7
            echo "\t";
            $value = "merge-panel";
            $context['definition']->set('SHOW_PANEL', $value);
        } elseif (        // line 8
(isset($context["S_SPLIT_VIEW"]) ? $context["S_SPLIT_VIEW"] : null)) {
            // line 9
            echo "\t";
            $value = "split-panel";
            $context['definition']->set('SHOW_PANEL', $value);
        } else {
            // line 11
            echo "\t";
            $value = "display-panel";
            $context['definition']->set('SHOW_PANEL', $value);
        }
        // line 13
        echo "
<div id=\"minitabs\" class=\"sub-panels\" data-show-panel=\"";
        // line 14
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_PANEL", array());
        echo "\" role=\"tablist\">
\t<ul>
\t\t<li id=\"display-panel-tab\" class=\"tab";
        // line 16
        if ( !(isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
            echo " activetab";
        }
        echo "\">
\t\t\t<a href=\"#minitabs\" data-subpanel=\"display-panel\" role=\"tab\" aria-controls=\"display-panel\">";
        // line 17
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_OPTIONS");
        echo "</a>
\t\t</li>
\t\t<li id=\"split-panel-tab\" class=\"tab\">
\t\t\t<a href=\"#minitabs\" data-subpanel=\"split-panel\" role=\"tab\" aria-controls=\"split-panel\">";
        // line 20
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPLIT_TOPIC");
        echo "</a>
\t\t</li>
\t\t<li id=\"merge-panel-tab\" class=\"tab";
        // line 22
        if ((isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
            echo " activetab";
        }
        echo "\">
\t\t\t<a href=\"#minitabs\" data-subpanel=\"merge-panel\" role=\"tab\" aria-controls=\"merge-panel\">";
        // line 23
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MERGE_POSTS");
        echo "</a>
\t\t</li>
\t</ul>
</div>
</div>

<form id=\"mcp\" method=\"post\" action=\"";
        // line 29
        echo (isset($context["S_MCP_ACTION"]) ? $context["S_MCP_ACTION"] : null);
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset id=\"display-panel\" class=\"fields2\" role=\"tabpanel\">
\t<dl>
\t\t<dt><label for=\"posts_per_page\">";
        // line 36
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_PER_PAGE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_PER_PAGE_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input class=\"inputbox autowidth\" type=\"number\" min=\"0\" max=\"999999\" name=\"posts_per_page\" id=\"posts_per_page\" value=\"";
        // line 37
        echo (isset($context["POSTS_PER_PAGE"]) ? $context["POSTS_PER_PAGE"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
        // line 40
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_POSTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 41
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "&nbsp;&nbsp;<label>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
        echo " ";
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "</label><label>";
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "</label> <input type=\"submit\" name=\"sort\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
        echo "\" class=\"button2\" /></dd>
\t</dl>
\t</fieldset>

";
        // line 45
        if ((isset($context["S_CAN_SPLIT"]) ? $context["S_CAN_SPLIT"] : null)) {
            // line 46
            echo "\t<fieldset id=\"split-panel\" class=\"fields2\" role=\"tabpanel\">
\t\t<p>";
            // line 47
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPLIT_TOPIC_EXPLAIN");
            echo "</p>

\t";
            // line 49
            if ((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null)) {
                // line 50
                echo "\t\t<dl>
\t\t\t<dt><label for=\"icon\">";
                // line 51
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_ICON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" /> ";
                // line 52
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPIC_ICON");
                echo "</label>
\t\t\t";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_icon", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                    echo "<label for=\"icon-";
                    echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                    echo "\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                    echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                    echo "\" ";
                    echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                    echo " /><img src=\"";
                    echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                    echo "\" alt=\"\" title=\"\" /></label> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</dd>
\t\t</dl>
\t";
            }
            // line 56
            echo "
\t";
            // line 57
            // line 58
            echo "\t<dl>
\t\t<dt><label for=\"subject\">";
            // line 59
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPLIT_SUBJECT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"124\" tabindex=\"2\" value=\"";
            // line 60
            echo (isset($context["SPLIT_SUBJECT"]) ? $context["SPLIT_SUBJECT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPLIT_SUBJECT");
            echo "\" class=\"inputbox\" /></dd>
\t</dl>
\t";
            // line 62
            // line 63
            echo "\t<dl>
\t\t<dt><label>";
            // line 64
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPLIT_FORUM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"to_forum_id\">";
            // line 65
            echo (isset($context["S_FORUM_SELECT"]) ? $context["S_FORUM_SELECT"] : null);
            echo "</select></dd>
\t</dl>
\t</fieldset>
";
        }
        // line 69
        echo "
";
        // line 70
        if ((isset($context["S_CAN_MERGE"]) ? $context["S_CAN_MERGE"] : null)) {
            // line 71
            echo "\t<fieldset id=\"merge-panel\" class=\"fields2\" role=\"tabpanel\">
\t\t<p>";
            // line 72
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MERGE_TOPIC_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt><label for=\"to_topic_id\">";
            // line 74
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MERGE_TOPIC_ID");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<input class=\"inputbox autowidth\" type=\"number\" min=\"0\" max=\"9999999999\" name=\"to_topic_id\" id=\"to_topic_id\" value=\"";
            // line 76
            echo (isset($context["TO_TOPIC_ID"]) ? $context["TO_TOPIC_ID"] : null);
            echo "\" />
\t\t\t<a href=\"";
            // line 77
            echo (isset($context["U_SELECT_TOPIC"]) ? $context["U_SELECT_TOPIC"] : null);
            echo "\" >";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_TOPIC");
            echo "</a>
\t\t</dd>
\t\t";
            // line 79
            if ((isset($context["TO_TOPIC_INFO"]) ? $context["TO_TOPIC_INFO"] : null)) {
                echo "<dd>";
                echo (isset($context["TO_TOPIC_INFO"]) ? $context["TO_TOPIC_INFO"] : null);
                echo "</dd>";
            }
            // line 80
            echo "\t</dl>
\t</fieldset>
";
        }
        // line 83
        echo "
\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3 id=\"review\">
\t\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data == '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW"), "js");
        echo "'};\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW");
        echo "</a></span>
\t\t";
        // line 92
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        // line 93
        echo "\t</h3>

\t<div id=\"topicreview\">
\t\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 97
            echo "\t\t<div class=\"post ";
            if (($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            echo "\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"postbody\" id=\"pr";
            // line 100
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 103
            echo $this->getAttribute($context["postrow"], "U_POST_DETAILS", array());
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DETAILS");
            echo "\" class=\"button icon-button info-icon\">
\t\t\t\t\t\t\t<span>";
            // line 104
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DETAILS");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<label for=\"post_id_list_select_";
            // line 108
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"post_id_list_select_";
            // line 109
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" name=\"post_id_list[]\" value=\"";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_CHECKED", array())) {
                echo " checked=\"checked\"";
            }
            echo " />
\t\t\t\t\t\t</label>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<h3><a href=\"";
            // line 114
            echo $this->getAttribute($context["postrow"], "U_POST_DETAILS", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
            echo "</a></h3>

\t\t\t\t";
            // line 116
            // line 117
            echo "\t\t\t\t<p class=\"author\"><a href=\"#pr";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "MINI_POST_IMG", array());
            echo "</a> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
            echo " ";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo " ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            echo "</strong>";
            if ($this->getAttribute($context["postrow"], "U_MCP_DETAILS", array())) {
                echo " [ <a href=\"";
                echo $this->getAttribute($context["postrow"], "U_MCP_DETAILS", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DETAILS");
                echo "</a> ]";
            }
            echo "</p>
\t\t\t\t";
            // line 118
            // line 119
            echo "
\t\t\t\t";
            // line 120
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                // line 121
                echo "\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<a href=\"";
                // line 122
                echo $this->getAttribute($context["postrow"], "U_MCP_APPROVE", array());
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_UNAPPROVED");
                echo "</strong></a>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 125
            echo "
\t\t\t\t";
            // line 126
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                // line 127
                echo "\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<a href=\"";
                // line 128
                echo $this->getAttribute($context["postrow"], "U_MCP_APPROVE", array());
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DELETED");
                echo "</strong></a>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 131
            echo "
\t\t\t\t";
            // line 132
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 133
                echo "\t\t\t\t<p class=\"post-notice reported\">
\t\t\t\t\t<a href=\"";
                // line 134
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 137
            echo "
\t\t\t\t<div class=\"content\" id=\"message_";
            // line 138
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "</div>

\t\t\t\t";
            // line 140
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 141
                echo "\t\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t\t<dt>";
                // line 142
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t\t";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 144
                    echo "\t\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "\t\t\t\t\t</dl>
\t\t\t\t";
            }
            // line 148
            echo "
\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "\t</div>

\t<hr />

\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 160
        echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
        echo "
\t\t\t";
        // line 161
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 162
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_topic.html", 162)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 163
            echo "\t\t\t";
        } else {
            // line 164
            echo "\t\t\t\t &bull; ";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t\t";
        }
        // line 166
        echo "\t\t</div>
\t</div>

\t</div>
</div>

<fieldset class=\"display-actions\">
\t<select name=\"action\">
\t\t<option value=\"\" selected=\"selected\">";
        // line 174
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_ACTION");
        echo "</option>
\t\t";
        // line 175
        if ((isset($context["S_CAN_APPROVE"]) ? $context["S_CAN_APPROVE"] : null)) {
            echo "<option value=\"approve\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE_POSTS");
            echo "</option>";
        }
        // line 176
        echo "\t\t";
        if ((isset($context["S_CAN_LOCK"]) ? $context["S_CAN_LOCK"] : null)) {
            echo "<option value=\"lock_post\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST_POSTS");
            echo " [ ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST_EXPLAIN");
            echo " ]</option><option value=\"unlock_post\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNLOCK_POST_POSTS");
            echo "</option>";
        }
        // line 177
        echo "\t\t";
        if ((isset($context["S_CAN_DELETE"]) ? $context["S_CAN_DELETE"] : null)) {
            echo "<option value=\"delete_post\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POSTS");
            echo "</option>";
        }
        // line 178
        echo "\t\t";
        if ((isset($context["S_CAN_RESTORE"]) ? $context["S_CAN_RESTORE"] : null)) {
            echo "<option value=\"restore\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_POSTS");
            echo "</option>";
        }
        // line 179
        echo "\t\t";
        if ((isset($context["S_CAN_MERGE"]) ? $context["S_CAN_MERGE"] : null)) {
            echo "<option value=\"merge_posts\"";
            if ((isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MERGE_POSTS");
            echo "</option>";
        }
        // line 180
        echo "\t\t";
        if ((isset($context["S_CAN_SPLIT"]) ? $context["S_CAN_SPLIT"] : null)) {
            echo "<option value=\"split_all\"";
            if ((isset($context["S_SPLIT_VIEW"]) ? $context["S_SPLIT_VIEW"] : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPLIT_POSTS");
            echo "</option><option value=\"split_beyond\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPLIT_AFTER");
            echo "</option>";
        }
        // line 181
        echo "\t\t";
        if ((isset($context["S_CAN_SYNC"]) ? $context["S_CAN_SYNC"] : null)) {
            echo "<option value=\"resync\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC");
            echo "</option>";
        }
        // line 182
        echo "\t</select>&nbsp;
\t<input class=\"button1\" type=\"submit\" name=\"mcp_topic_submit\" value=\"";
        // line 183
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />
\t<div><a href=\"#\" onclick=\"marklist('mcp', 'post', true); return false;\">";
        // line 184
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
        echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'post', false); return false;\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
        echo "</a></div>
";
        // line 185
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
";
        // line 186
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>

</form>

";
        // line 191
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_topic.html", 191)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_topic.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 191,  616 => 186,  612 => 185,  606 => 184,  602 => 183,  599 => 182,  592 => 181,  579 => 180,  568 => 179,  561 => 178,  554 => 177,  543 => 176,  537 => 175,  533 => 174,  523 => 166,  517 => 164,  514 => 163,  501 => 162,  499 => 161,  495 => 160,  487 => 154,  476 => 148,  472 => 146,  463 => 144,  459 => 143,  455 => 142,  452 => 141,  450 => 140,  443 => 138,  440 => 137,  432 => 134,  429 => 133,  427 => 132,  424 => 131,  416 => 128,  413 => 127,  411 => 126,  408 => 125,  400 => 122,  397 => 121,  395 => 120,  392 => 119,  391 => 118,  368 => 117,  367 => 116,  360 => 114,  346 => 109,  339 => 108,  332 => 104,  326 => 103,  320 => 100,  309 => 97,  305 => 96,  300 => 93,  295 => 92,  283 => 91,  273 => 83,  268 => 80,  262 => 79,  255 => 77,  251 => 76,  245 => 74,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  225 => 65,  220 => 64,  217 => 63,  216 => 62,  209 => 60,  204 => 59,  201 => 58,  200 => 57,  197 => 56,  170 => 53,  166 => 52,  161 => 51,  158 => 50,  156 => 49,  151 => 47,  148 => 46,  146 => 45,  131 => 41,  126 => 40,  120 => 37,  113 => 36,  103 => 29,  94 => 23,  88 => 22,  83 => 20,  77 => 17,  71 => 16,  66 => 14,  63 => 13,  58 => 11,  53 => 9,  51 => 8,  47 => 7,  45 => 6,  35 => 4,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mcp_topic.html", "");
    }
}
