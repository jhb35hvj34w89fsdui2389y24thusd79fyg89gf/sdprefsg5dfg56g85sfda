<?php

/* mcp_forum.html */
class __TwigTemplate_710b4246ae7ef7dec65b697c179341363fedc6b13d8d93b5d8efe81475f03504 extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_forum.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $value = "forum-selection2";
        $context['definition']->set('CUSTOM_FIELDSET_CLASS', $value);
        // line 4
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "mcp_forum.html", 4)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 5
        echo "
<h2><a href=\"";
        // line 6
        echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " ";
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "</a></h2>

<form method=\"post\" id=\"mcp\" action=\"";
        // line 8
        echo (isset($context["S_MCP_ACTION"]) ? $context["S_MCP_ACTION"] : null);
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"action-bar top\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 15
        echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
        echo "
\t\t\t";
        // line 16
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 17
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_forum.html", 17)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 18
            echo "\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t &bull; ";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t\t";
        }
        // line 21
        echo "\t\t</div>
\t</div>

\t";
        // line 24
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()))) {
            // line 25
            echo "\t\t<ul class=\"topiclist";
            if ((isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
                echo " missing-column";
            }
            echo "\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 28
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
            // line 29
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
            echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
            // line 30
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo "</span></dd>
\t\t\t\t\t";
            // line 31
            if ( !(isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
                echo "<dd class=\"mark\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
                echo "</dd>";
            }
            // line 32
            echo "\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist";
            // line 35
            if ((isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
                echo " missing-column";
            }
            echo "\">

\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                // line 38
                echo "\t\t<li class=\"row";
                if (($this->getAttribute($context["topicrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                    echo " reported";
                }
                echo "\">
\t\t\t<dl class=\"icon ";
                // line 39
                echo $this->getAttribute($context["topicrow"], "TOPIC_IMG_STYLE", array());
                echo "\">
\t\t\t\t<dt ";
                // line 40
                if ($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array())) {
                    echo "style=\"background-image: url(";
                    echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                    echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                    echo "); background-repeat: no-repeat;\"";
                }
                echo ">
\t\t\t\t\t";
                // line 41
                if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 42
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t";
                // line 43
                // line 44
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["topicrow"], "S_SELECT_TOPIC", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_SELECT_TOPIC", array());
                    echo "\" class=\"topictitle\">[ ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_MERGE");
                    echo " ]</a>&nbsp;&nbsp; ";
                }
                // line 45
                echo "\t\t\t\t\t";
                // line 46
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
                echo "</a>
\t\t\t\t\t";
                // line 47
                // line 48
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "UNAPPROVED_IMG", array());
                    echo "</a> ";
                }
                // line 49
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_DELETED", array()))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "DELETED_IMG", array());
                    echo "</a> ";
                }
                // line 50
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                    echo "\">";
                    echo (isset($context["REPORTED_IMG"]) ? $context["REPORTED_IMG"] : null);
                    echo "</a>";
                }
                // line 51
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["topicrow"], "S_MOVED_TOPIC", array()) && (isset($context["S_CAN_DELETE"]) ? $context["S_CAN_DELETE"] : null))) {
                    echo "&nbsp;<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_DELETE_TOPIC", array());
                    echo "\" class=\"topictitle\">[ ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_SHADOW_TOPIC");
                    echo " ]</a>";
                }
                // line 52
                echo "\t\t\t\t\t<br />
\t\t\t\t\t";
                // line 53
                // line 54
                echo "\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t";
                // line 55
                if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                    echo $this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array());
                    echo " ";
                }
                // line 56
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo " &laquo; ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "<br />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"responsive-show left-box\" style=\"display: none;\">";
                // line 58
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <strong>";
                echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                echo "</strong></span>

\t\t\t\t\t";
                // line 60
                if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                    // line 61
                    echo "\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 64
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                            // line 65
                            echo "\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                            echo "<li class=\"active\"><span>";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</span></li>
\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 66
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 67
$context["pagination"], "S_IS_NEXT", array())) {
                            // line 68
                            echo "\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                            echo "\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</a></li>
\t\t\t\t\t\t\t";
                        }
                        // line 70
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 74
                echo "
\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t";
                // line 76
                if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                    echo $this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array());
                    echo " ";
                }
                // line 77
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
                echo " &raquo; ";
                echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 79
                // line 80
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
                // line 82
                echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                echo " <dfn>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
                // line 83
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " </dfn>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo "<br />";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</span>
\t\t\t\t</dd>
\t\t\t\t";
                // line 85
                if ( !(isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
                    // line 86
                    echo "\t\t\t\t<dd class=\"mark\">
\t\t\t\t\t";
                    // line 87
                    if ( !$this->getAttribute($context["topicrow"], "S_MOVED_TOPIC", array())) {
                        echo "<input type=\"checkbox\" name=\"topic_id_list[]\" value=\"";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["topicrow"], "S_TOPIC_CHECKED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "&nbsp;";
                    }
                    // line 88
                    echo "\t\t\t\t</dd>
\t\t\t\t";
                }
                // line 90
                echo "\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t</ul>
\t";
        } else {
            // line 95
            echo "\t\t<ul class=\"topiclist\">
\t\t\t<li><p class=\"notopics\">";
            // line 96
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS");
            echo "</p></li>
\t\t</ul>
\t";
        }
        // line 99
        echo "
\t<fieldset class=\"display-options\">
\t\t<label>";
        // line 101
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_TOPICS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " ";
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "</label>
\t\t<label>";
        // line 102
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
        echo " ";
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "</label>
\t\t<label>";
        // line 103
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
        // line 104
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
        echo "\" class=\"button2\" />
\t</fieldset>

\t<hr />

\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 111
        echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
        echo "
\t\t\t";
        // line 112
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 113
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_forum.html", 113)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 114
            echo "\t\t\t";
        } else {
            // line 115
            echo "\t\t\t\t &bull; ";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t\t";
        }
        // line 117
        echo "\t\t</div>
\t</div>

\t</div>
</div>

<fieldset class=\"display-actions\">
\t";
        // line 124
        if ( !(isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null)) {
            // line 125
            echo "\t<select name=\"action\">
\t\t<option value=\"\" selected=\"selected\">";
            // line 126
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_ACTION");
            echo "</option>
\t\t";
            // line 127
            if ((isset($context["S_CAN_DELETE"]) ? $context["S_CAN_DELETE"] : null)) {
                echo "<option value=\"delete_topic\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                echo "</option>";
            }
            // line 128
            echo "\t\t";
            if ((isset($context["S_CAN_RESTORE"]) ? $context["S_CAN_RESTORE"] : null)) {
                echo "<option value=\"restore_topic\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
                echo "</option>";
            }
            // line 129
            echo "\t\t";
            if ((isset($context["S_CAN_MERGE"]) ? $context["S_CAN_MERGE"] : null)) {
                echo "<option value=\"merge_topics\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MERGE");
                echo "</option>";
            }
            // line 130
            echo "\t\t";
            if ((isset($context["S_CAN_MOVE"]) ? $context["S_CAN_MOVE"] : null)) {
                echo "<option value=\"move\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOVE");
                echo "</option>";
            }
            // line 131
            echo "\t\t";
            if ((isset($context["S_CAN_FORK"]) ? $context["S_CAN_FORK"] : null)) {
                echo "<option value=\"fork\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORK");
                echo "</option>";
            }
            // line 132
            echo "\t\t";
            if ((isset($context["S_CAN_LOCK"]) ? $context["S_CAN_LOCK"] : null)) {
                echo "<option value=\"lock\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK");
                echo "</option><option value=\"unlock\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNLOCK");
                echo "</option>";
            }
            // line 133
            echo "\t\t";
            if ((isset($context["S_CAN_SYNC"]) ? $context["S_CAN_SYNC"] : null)) {
                echo "<option value=\"resync\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC");
                echo "</option>";
            }
            // line 134
            echo "\t\t";
            if ((isset($context["S_CAN_MAKE_NORMAL"]) ? $context["S_CAN_MAKE_NORMAL"] : null)) {
                echo "<option value=\"make_normal\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAKE_NORMAL");
                echo "</option>";
            }
            // line 135
            echo "\t\t";
            if ((isset($context["S_CAN_MAKE_STICKY"]) ? $context["S_CAN_MAKE_STICKY"] : null)) {
                echo "<option value=\"make_sticky\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAKE_STICKY");
                echo "</option>";
            }
            // line 136
            echo "\t\t";
            if ((isset($context["S_CAN_MAKE_ANNOUNCE"]) ? $context["S_CAN_MAKE_ANNOUNCE"] : null)) {
                // line 137
                echo "\t\t\t<option value=\"make_announce\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAKE_ANNOUNCE");
                echo "</option>
\t\t\t<option value=\"make_global\">";
                // line 138
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAKE_GLOBAL");
                echo "</option>
\t\t";
            }
            // line 140
            echo "\t</select>
\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 141
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t<div><a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', true); return false;\">";
            // line 142
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', false); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a></div>
\t";
        }
        // line 144
        echo "\t";
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 148
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_forum.html", 148)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_forum.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  580 => 148,  572 => 144,  565 => 142,  561 => 141,  558 => 140,  553 => 138,  548 => 137,  545 => 136,  538 => 135,  531 => 134,  524 => 133,  515 => 132,  508 => 131,  501 => 130,  494 => 129,  487 => 128,  481 => 127,  477 => 126,  474 => 125,  472 => 124,  463 => 117,  457 => 115,  454 => 114,  441 => 113,  439 => 112,  435 => 111,  425 => 104,  421 => 103,  415 => 102,  408 => 101,  404 => 99,  398 => 96,  395 => 95,  391 => 93,  383 => 90,  379 => 88,  367 => 87,  364 => 86,  362 => 85,  351 => 83,  345 => 82,  341 => 80,  340 => 79,  330 => 77,  325 => 76,  321 => 74,  316 => 71,  310 => 70,  300 => 68,  298 => 67,  292 => 66,  285 => 65,  282 => 64,  278 => 63,  274 => 61,  272 => 60,  264 => 58,  252 => 56,  247 => 55,  244 => 54,  243 => 53,  240 => 52,  231 => 51,  222 => 50,  213 => 49,  204 => 48,  203 => 47,  196 => 46,  194 => 45,  185 => 44,  184 => 43,  181 => 42,  175 => 41,  166 => 40,  162 => 39,  150 => 38,  146 => 37,  139 => 35,  134 => 32,  128 => 31,  124 => 30,  120 => 29,  116 => 28,  107 => 25,  105 => 24,  100 => 21,  94 => 19,  91 => 18,  78 => 17,  76 => 16,  72 => 15,  62 => 8,  52 => 6,  49 => 5,  37 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mcp_forum.html", "");
    }
}
