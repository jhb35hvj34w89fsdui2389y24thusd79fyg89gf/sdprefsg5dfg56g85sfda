<?php

/* viewtopic_body.html */
class __TwigTemplate_59cb7cd86cad3fb952f3aeeb37cd244b382cc79336204d326f4ca56e72359340 extends Twig_Template
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
        $location = "forumview_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumview_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<h2 class=\"topic-title\">";
        echo "<img class=\"viewtopic-image\" src=\"";
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/anduin/theme/images/icons/wow/wow_icon.png\"></img> ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</h2>
<a class=\"viewtopic-forum-name\" href=\"";
        // line 3
        echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
        echo "\">";
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "</a>
<div class=\"action-bar top\">
    ";
        // line 5
        // line 6
        echo "</div>

";
        // line 8
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 9
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
                // line 10
                echo "<div style=\"text-align:right\">
    ";
                // line 11
                if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
                    // line 12
                    echo "    <a href=\"";
                    echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                    echo "\" class=\"button icon-button ";
                    if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                        echo "locked-icon";
                    } else {
                        echo "reply-icon";
                    }
                    echo "\" title=\"";
                    if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
                    }
                    echo "\">
        ";
                    // line 13
                    if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_TOPIC_LOCKED");
                        echo "
        ";
                    } else {
                        // line 14
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_POST_REPLY");
                        echo "
        ";
                    }
                    // line 16
                    echo "    </a>
</div>
</br>
";
                }
            }
        }
        // line 22
        echo "</div>
<hr class=\"border-bottom-button\"></hr>
";
        // line 24
        if ((isset($context["S_HAS_POLL"]) ? $context["S_HAS_POLL"] : null)) {
            // line 25
            echo "<form method=\"post\" action=\"";
            echo (isset($context["S_POLL_ACTION"]) ? $context["S_POLL_ACTION"] : null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">
    <div class=\"poll-panel\">
            <div class=\"content\">
                <p class=\"poll-title\"><span class=\"";
            // line 28
            if (((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null) && (isset($context["L_POLL_LENGTH"]) ? $context["L_POLL_LENGTH"] : null))) {
                echo "poll-icon-timer";
            } elseif ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                echo "poll-icon-open";
            } else {
                echo "poll-icon-closed";
            }
            echo "\"></span>";
            echo (isset($context["POLL_QUESTION"]) ? $context["POLL_QUESTION"] : null);
            echo "</p>
            
                <fieldset class=\"polls\">
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 32
                echo "                    ";
                // line 33
                echo "                    <dl class=\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo "voted";
                }
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_MOST_VOTES", array())) {
                    echo " most-votes";
                }
                echo "\" ";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                    echo "\"
                        ";
                }
                // line 34
                echo "data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                echo "\"> <dt>";
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    echo "<label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</label>";
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                }
                echo "</dt>
                        ";
                // line 35
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    // line 36
                    echo "                        <dd style=\"width: auto;\" class=\"poll_option_select\">
                            ";
                    // line 37
                    if ((isset($context["S_IS_MULTI_CHOICE"]) ? $context["S_IS_MULTI_CHOICE"] : null)) {
                        // line 38
                        echo "                            <input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" ";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"
                            ";
                        }
                        // line 39
                        echo "/>
                            ";
                    } else {
                        // line 41
                        echo "                            <input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" ";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"
                            ";
                        }
                        // line 42
                        echo "/>
                            ";
                    }
                    // line 44
                    echo "                        </dd>
                        ";
                }
                // line 46
                echo "                        <dd class=\"resultbar";
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo " hidden";
                }
                echo "\">
                            <div class=\"";
                // line 47
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 20)) {
                    echo "pollbar1";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 40)) {
                    echo "pollbar2";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 60)) {
                    echo "pollbar3";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT_REL", array());
                echo ";\">";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array());
                echo "</div>
                        </dd>
                        <dd class=\"poll_option_percent";
                // line 49
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo " hidden";
                }
                echo "\">
                            ";
                // line 50
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_VOTES");
                    echo "
                            ";
                } else {
                    // line 51
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                    echo "
                            ";
                }
                // line 53
                echo "                        </dd>
                    </dl>
                    ";
                // line 55
                // line 56
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    <div class=\"poll_total_votes";
            if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                echo " hidden";
            }
            echo "\"> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo (isset($context["TOTAL_VOTES"]) ? $context["TOTAL_VOTES"] : null);
            echo "</span> </div>
                    <div class=\"poll-footer\">
                        ";
            // line 59
            if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_RESULTS"]) ? $context["U_VIEW_RESULTS"] : null);
                echo "\" class=\"button1\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_RESULTS");
                echo "</a>
                        ";
            } else {
                // line 60
                echo "<a href=\"#\" class=\"button1 disabled\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_RESULTS");
                echo "</a>
                        ";
            }
            // line 62
            echo "                        ";
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                // line 63
                echo "                        <input type=\"submit\" name=\"update\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" />
                        ";
            } else {
                // line 65
                echo "                        <input type=\"button\" name=\"\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT_VOTE");
                echo "\" class=\"button1 disabled\" />
                        ";
            }
            // line 67
            echo "                    </div>
                </fieldset>
                <div class=\"vote-submitted hidden\">";
            // line 69
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VOTE_SUBMITTED");
            echo "</div>
            </div>
         ";
            // line 71
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo " ";
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo " </div>
</form>
";
        }
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 75
            // line 76
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", array())) {
                echo "<a id=\"unread\" class=\"anchor\" ";
                if ((isset($context["S_UNREAD_VIEW"]) ? $context["S_UNREAD_VIEW"] : null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                    echo "\"";
                }
                echo "</a>
";
            }
            // line 78
            echo "<div id=\"p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" class=\"post has-profile ";
            if (($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                echo " unreadpost";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                echo " reported";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                echo " deleted";
            }
            if (($this->getAttribute($context["postrow"], "S_ONLINE", array()) &&  !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array()))) {
                echo " online";
            }
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo " warned";
            }
            echo "\">
    <div class=\"inner\">
        <dl class=\"postprofile\" id=\"profile";
            // line 80
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" ";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"
            ";
            }
            // line 81
            echo "> <dt class=\"";
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
            // line 83
            // line 84
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                // line 85
                echo "                    ";
                if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) == "Administrator")) {
                    // line 86
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    echo "\" class=\"staff-avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>
                    ";
                } elseif (($this->getAttribute(                // line 87
$context["postrow"], "RANK_TITLE", array()) == "Developer")) {
                    // line 88
                    echo "                    <a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    echo "\" class=\"mvp-avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>
                    ";
                } else {
                    // line 90
                    echo "                    <a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    echo "\" class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>
\t\t\t\t\t";
                }
                // line 92
                echo "                    ";
            }
            // line 93
            echo "\t\t\t\t\t";
            // line 94
            echo "\t\t\t\t</div>
        <p class=\"post-author\">";
            // line 95
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            echo "</p>
\t\t\t</dt>
            ";
            // line 97
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) == "Administrator")) {
                // line 98
                echo "            <dd class=\"profile-rank\" style=\"color: #00b4ff;\">";
                echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                echo "</dd>
        ";
            } elseif (($this->getAttribute(            // line 99
$context["postrow"], "RANK_TITLE", array()) == "Developer")) {
                // line 100
                echo "        <dd class=\"profile-rank\" style=\"color: #00b4ff;\">";
                echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                echo "</dd>
        ";
            } else {
                // line 102
                echo "        <dd class=\"profile-rank\">";
                echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                echo "</dd>
        ";
            }
            // line 104
            echo "         <img class=\"total-posts-img\" src=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/anduin/theme/images/icons/posts.png\"><dd><a class=\"profile-posts\" href=\"";
            echo $this->getAttribute($context["postrow"], "U_SEARCH", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POSTER_POSTS", array());
            echo " posts</a></dd></img>
            ";
            // line 105
            // line 106
            echo "        </dl>
        
        <div class=\"profile-context\">
            <div class=\"dropdown hidden\">
                <div id=\"p";
            // line 110
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "-context\" class=\"dropdown-contents\">
                    <dl> <dt class=\"username\">";
            // line 111
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR", array());
            echo "</dt>
                        ";
            // line 112
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 113
                echo "                        <dd class=\"user-icons\"> <a class=\"icon-profile\" href=\"";
                echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
                echo "</a>
                            <a class=\"icon-search\" href=\"";
                // line 114
                echo $this->getAttribute($context["postrow"], "U_SEARCH", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_USER_POSTS");
                echo "\"></a>
                            ";
                // line 115
                if ($this->getAttribute($context["postrow"], "S_FRIEND", array())) {
                    // line 116
                    echo "                            <!--Friend! yay!-->
                            ";
                }
                // line 118
                echo "                            ";
                if ((isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null)) {
                    // line 119
                    echo "                            <a class=\"icon-ignore\" href=\"";
                    echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
                    echo "?i=zebra&amp;mode=foes&amp;add=";
                    echo $this->getAttribute($context["postrow"], "POST_AUTHOR", array());
                    echo "\" title=\"Ignore user\" accesskey=\"e\"></a>
                            ";
                }
                // line 121
                echo "                        </dd>
                        ";
            }
            // line 123
            echo "                        ";
            if ($this->getAttribute($context["postrow"], "POSTER_JOINED", array())) {
                // line 124
                echo "                        <dd class=\"profile-joined\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_JOINED", array());
                echo "</dd>
                        ";
            }
            // line 126
            echo "                        ";
            if ((isset($context["S_SMALL_RANKS"]) ? $context["S_SMALL_RANKS"] : null)) {
                // line 127
                echo "                        ";
                if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                    // line 128
                    echo "                        <dd class=\"profile-rank\">";
                    echo $this->getAttribute($context["postrow"], "RANK_IMG", array());
                    echo " ";
                    echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                    echo "</dd>
                        ";
                }
                // line 130
                echo "                        ";
                if (($this->getAttribute($context["postrow"], "S_HAS_MULTIPLE_RANKS", array()) && ($this->getAttribute($context["postrow"], "POSTS_RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "POSTS_RANK_IMG", array())))) {
                    // line 131
                    echo "                        <dd class=\"profile-posts-rank\">";
                    echo $this->getAttribute($context["postrow"], "POSTS_RANK_IMG", array());
                    echo " ";
                    echo $this->getAttribute($context["postrow"], "POSTS_RANK_TITLE", array());
                    echo "</dd>
                        ";
                }
                // line 133
                echo "                        ";
            }
            // line 134
            echo "                        ";
            // line 135
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 136
                echo "                        ";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 137
                    echo "                        <dd class=\"profile-custom-field profile-";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                    echo "\"><strong>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
                        ";
                }
                // line 139
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "                        ";
            // line 141
            echo "                    </dl>
                </div>
                <!-- /.dropdown-contents -->
            </div>
            <!-- /.dropdown -->
        </div>
        <!-- /.profile-context -->
        <div class=\"postbody\">
            ";
            // line 149
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                // line 150
                echo "            ";
                if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                    // line 151
                    echo "            <div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\"> ";
                    echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", array());
                    echo "
                <br /> ";
                    // line 152
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo " </div>
            ";
                } elseif ($this->getAttribute(                // line 153
$context["postrow"], "S_IGNORE_POST", array())) {
                    // line 154
                    echo "            <div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\"> ";
                    echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", array());
                    echo "
                <br /> ";
                    // line 155
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo " </div>
            ";
                }
                // line 157
                echo "            ";
            }
            // line 158
            echo "            <div id=\"post_content";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" ";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"
                ";
            }
            // line 159
            echo ">
                ";
            // line 160
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 161
                echo "                ";
                if (((((($this->getAttribute($context["postrow"], "U_EDIT", array()) || $this->getAttribute($context["postrow"], "U_DELETE", array())) || $this->getAttribute($context["postrow"], "U_REPORT", array())) || $this->getAttribute($context["postrow"], "U_WARN", array())) || $this->getAttribute($context["postrow"], "U_INFO", array())) || $this->getAttribute($context["postrow"], "U_QUOTE", array()))) {
                    // line 162
                    echo "                <ul class=\"post-buttons\">
                    ";
                    // line 163
                    // line 164
                    echo "                    ";
                    if ($this->getAttribute($context["postrow"], "U_EDIT", array())) {
                        // line 165
                        echo "                    <li> <a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_EDIT", array());
                        echo "\" title=\"Edit\" class=\"button icon-button edit-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_EDIT");
                        echo "</span></a> </li>
                    ";
                    }
                    // line 167
                    echo "                    ";
                    if ($this->getAttribute($context["postrow"], "U_DELETE", array())) {
                        // line 168
                        echo "                    <li> <a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_DELETE", array());
                        echo "\" title=\"Delete\" class=\"button icon-button delete-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                        echo "</span></a> </li>
                    ";
                    }
                    // line 170
                    echo "                    ";
                    if ($this->getAttribute($context["postrow"], "U_REPORT", array())) {
                        // line 171
                        echo "                    <li> <a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_REPORT", array());
                        echo "\" title=\"Report\" class=\"button icon-button report-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_POST");
                        echo "</span></a> </li>
                    ";
                    }
                    // line 173
                    echo "                    ";
                    if ($this->getAttribute($context["postrow"], "U_WARN", array())) {
                        // line 174
                        echo "                    <li> <a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_WARN", array());
                        echo "\" title=\"Warn This User\" class=\"button icon-button warn-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                        echo "</span></a> </li>
                    ";
                    }
                    // line 176
                    echo "                    ";
                    if ($this->getAttribute($context["postrow"], "U_INFO", array())) {
                        // line 177
                        echo "                    <li> <a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_INFO", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                        echo "\" class=\"button icon-button info-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                        echo "</span></a> </li>
                    ";
                    }
                    // line 179
                    echo "                    ";
                    // line 180
                    echo "                </ul>
            
                ";
                }
                // line 183
                echo "                ";
            }
            // line 184
            echo "                <p class=\"author\">
                    ";
            // line 185
            if ((isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 186
                echo "                    ";
            } else {
                echo "<a href=\"";
                echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                echo "\">";
                echo $this->getAttribute($context["postrow"], "MINI_POST_IMG", array());
                echo "</a>
                    ";
            }
            // line 187
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo "</p>
                ";
            // line 188
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                // line 189
                echo "                <form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
                    <p class=\"post-notice unapproved\"> <strong>";
                // line 190
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
                        <input class=\"button2\" type=\"submit\" value=\"";
                // line 191
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
                        <input class=\"button1\" type=\"submit\" value=\"";
                // line 192
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
                        <input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 193
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" /> ";
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo " </p>
                </form>
                ";
            } elseif ($this->getAttribute(            // line 195
$context["postrow"], "S_POST_DELETED", array())) {
                // line 196
                echo "                <form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
                    <p class=\"post-notice deleted\"> <strong>";
                // line 197
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DELETED_ACTION");
                echo "</strong>
                        <input class=\"button2\" type=\"submit\" value=\"";
                // line 198
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                echo "\" name=\"action[disapprove]\" />
                        <input class=\"button1\" type=\"submit\" value=\"";
                // line 199
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
                        <input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 200
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" /> ";
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo " </p>
                </form>
                ";
            }
            // line 203
            echo "                ";
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 204
                echo "                <p class=\"post-notice reported\"> <a href=\"";
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPORTED");
                echo "</strong></a> </p>
                ";
            }
            // line 206
            echo "                ";
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) == "Administrator")) {
                // line 207
                echo "                <div class=\"content\" style=\"color: #00b4ff; \">";
                echo $this->getAttribute($context["postrow"], "MESSAGE", array());
                echo "</div>
                ";
            } elseif (($this->getAttribute(            // line 208
$context["postrow"], "RANK_TITLE", array()) == "Moderation Team")) {
                // line 209
                echo "                <div class=\"content\" style=\"color: #00b4ff; \">";
                echo $this->getAttribute($context["postrow"], "MESSAGE", array());
                echo "</div>
            ";
            } elseif (($this->getAttribute(            // line 210
$context["postrow"], "RANK_TITLE", array()) == "Developer")) {
                // line 211
                echo "                <div class=\"content\" style=\"color: #00b4ff; \">";
                echo $this->getAttribute($context["postrow"], "MESSAGE", array());
                echo "</div>
                ";
            } else {
                // line 213
                echo "                <div class=\"content\">";
                echo $this->getAttribute($context["postrow"], "MESSAGE", array());
                echo "</div>
                ";
            }
            // line 215
            echo "                ";
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 216
                echo "                <dl class=\"attachbox\"> <dt>
\t\t\t\t\t\t";
                // line 217
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
                    ";
                // line 219
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 220
                    echo "                    <dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                echo "                </dl>
                ";
            }
            // line 224
            echo "                ";
            // line 225
            echo "                ";
            if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", array())) {
                // line 226
                echo "                <div class=\"rules\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_NOTICE");
                echo "</div>
                ";
            }
            // line 228
            echo "                ";
            if (($this->getAttribute($context["postrow"], "DELETED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "DELETE_REASON", array()))) {
                // line 229
                echo "                <div class=\"notice post_deleted_msg\"> ";
                echo $this->getAttribute($context["postrow"], "DELETED_MESSAGE", array());
                echo "
                    ";
                // line 230
                if ($this->getAttribute($context["postrow"], "DELETE_REASON", array())) {
                    // line 231
                    echo "                    <br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "DELETE_REASON", array());
                    echo "</em>
                    ";
                }
                // line 233
                echo "                </div>
                ";
            } elseif (($this->getAttribute(            // line 234
$context["postrow"], "EDITED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "EDIT_REASON", array()))) {
                // line 235
                echo "                <div class=\"notice\"> ";
                echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", array());
                echo "
                    ";
                // line 236
                if ($this->getAttribute($context["postrow"], "EDIT_REASON", array())) {
                    // line 237
                    echo "                    <br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "EDIT_REASON", array());
                    echo "</em>
                    ";
                }
                // line 239
                echo "                </div>
                ";
            }
            // line 241
            echo "                ";
            if ($this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array())) {
                // line 242
                echo "                <div class=\"notice\">
                    <br />
                    <br />";
                // line 244
                echo $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array());
                echo "</div>
                ";
            }
            // line 246
            echo "                ";
            // line 247
            echo "                ";
            if ($this->getAttribute($context["postrow"], "SIGNATURE", array())) {
                // line 248
                echo "                <div id=\"sig";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" class=\"signature\">";
                echo $this->getAttribute($context["postrow"], "SIGNATURE", array());
                echo "</div>
                ";
            }
            // line 250
            echo "                ";
            // line 251
            echo "                ";
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 252
                echo "                ";
                if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                    echo "<a class=\"quote-button\" href=\"";
                    echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                    echo "\">Quote</a>
                ";
                }
                // line 254
                echo "            ";
            }
            // line 255
            echo "            <br>
            </div>
        </div>
    </div>
</div>
<hr class=\"divider\" />
";
            // line 261
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 264
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 264)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 266
        // line 267
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 268
            echo "<div class=\"action-bar bottom\">
    <div class=\"buttons\">
        ";
            // line 270
            // line 271
            echo "        ";
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
                // line 272
                echo "        <a href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" class=\"button icon-button ";
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    echo "locked-icon";
                } else {
                    echo "reply-icon";
                }
                echo "\">
            ";
                // line 273
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_TOPIC_LOCKED");
                    echo "
            ";
                } else {
                    // line 274
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_POST_REPLY");
                    echo "
            ";
                }
                // line 276
                echo "        </a>
        ";
            }
            // line 278
            echo "    </div>
    ";
            // line 279
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()))) {
                // line 280
                echo "    <div class=\"dropdown-container dropdown-container-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo " dropdown-up dropdown-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo " dropdown-button-control\" id=\"quickmod\"> <span class=\"dropdown-trigger button\">MOD TOOLS</span>
        <div class=\"dropdown hidden\">
            <ul class=\"dropdown-contents\">
                ";
                // line 283
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                    // line 284
                    echo "                ";
                    $value = twig_in_filter($this->getAttribute($context["quickmod"], "VALUE", array()), array(0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"));
                    $context['definition']->set('QUICKMOD_AJAX', $value);
                    // line 285
                    echo "                <li><a class=\"quickmod-text\" href=\"";
                    echo $this->getAttribute($context["quickmod"], "LINK", array());
                    echo "\" ";
                    if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "QUICKMOD_AJAX", array())) {
                        echo " data-ajax=\"true\" data-refresh=\"true\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["quickmod"], "TITLE", array());
                    echo "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 287
                echo "            </ul>
        </div>
    </div>
    ";
            }
            // line 291
            echo "    ";
        }
        // line 292
        echo "    <div style=\"float: right\">
        ";
        // line 293
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
            // line 294
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                // line 295
                echo "        ";
                if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                    // line 296
                    echo "        </br> <a href=\"";
                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                    echo "\" rel=\"prev\" role=\"button\" class=\"footer-button\">&#10094; PREVIOUS PAGE</a>
        ";
                } elseif ($this->getAttribute(                // line 297
$context["pagination"], "S_IS_CURRENT", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                    echo "\" class=\"footer-button\">";
                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                    echo "</a>
        ";
                } elseif ($this->getAttribute(                // line 298
$context["pagination"], "S_IS_NEXT", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                    echo "\" rel=\"next\" role=\"button\" class=\"footer-button\">NEXT PAGE &#10095;</a>
        ";
                }
                // line 300
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 301
            echo "    </div>
    ";
        }
        // line 303
        echo "    </br>
    </br>
    </br>
    ";
        // line 306
        if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 307
            echo "    <center>
        <div class=\"topic-footer-button\">
            ";
            // line 309
            // line 310
            echo "            <p class=\"register-comment\">Have something to say? Log in to join the conversation.</p>
            </br> <a href=\"";
            // line 311
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" class=\"footer-button\" title=\"Login\">LOGIN</a> </div>
    </center>
    ";
        }
        // line 314
        echo "    </br>
    <center>
        ";
        // line 316
        // line 317
        echo "        </br> <a href=\"";
        echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
        echo "\" class=\"footer-button\">RETURN TO FORUM</a> </center>
</div>
</br>
</br>
";
        // line 321
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 321)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1127 => 321,  1119 => 317,  1118 => 316,  1114 => 314,  1108 => 311,  1105 => 310,  1104 => 309,  1100 => 307,  1098 => 306,  1093 => 303,  1089 => 301,  1083 => 300,  1076 => 298,  1068 => 297,  1063 => 296,  1060 => 295,  1055 => 294,  1053 => 293,  1050 => 292,  1047 => 291,  1041 => 287,  1026 => 285,  1022 => 284,  1018 => 283,  1009 => 280,  1007 => 279,  1004 => 278,  1000 => 276,  995 => 274,  989 => 273,  978 => 272,  975 => 271,  974 => 270,  970 => 268,  968 => 267,  967 => 266,  954 => 264,  952 => 263,  947 => 261,  939 => 255,  936 => 254,  928 => 252,  925 => 251,  923 => 250,  915 => 248,  912 => 247,  910 => 246,  905 => 244,  901 => 242,  898 => 241,  894 => 239,  885 => 237,  883 => 236,  878 => 235,  876 => 234,  873 => 233,  864 => 231,  862 => 230,  857 => 229,  854 => 228,  848 => 226,  845 => 225,  843 => 224,  839 => 222,  830 => 220,  826 => 219,  821 => 217,  818 => 216,  815 => 215,  809 => 213,  803 => 211,  801 => 210,  796 => 209,  794 => 208,  789 => 207,  786 => 206,  778 => 204,  775 => 203,  767 => 200,  763 => 199,  759 => 198,  755 => 197,  750 => 196,  748 => 195,  741 => 193,  737 => 192,  733 => 191,  729 => 190,  724 => 189,  722 => 188,  718 => 187,  708 => 186,  706 => 185,  703 => 184,  700 => 183,  695 => 180,  693 => 179,  683 => 177,  680 => 176,  672 => 174,  669 => 173,  661 => 171,  658 => 170,  650 => 168,  647 => 167,  639 => 165,  636 => 164,  635 => 163,  632 => 162,  629 => 161,  627 => 160,  624 => 159,  616 => 158,  613 => 157,  608 => 155,  601 => 154,  599 => 153,  595 => 152,  588 => 151,  585 => 150,  583 => 149,  573 => 141,  571 => 140,  565 => 139,  554 => 137,  551 => 136,  546 => 135,  544 => 134,  541 => 133,  533 => 131,  530 => 130,  522 => 128,  519 => 127,  516 => 126,  507 => 124,  504 => 123,  500 => 121,  492 => 119,  489 => 118,  485 => 116,  483 => 115,  477 => 114,  470 => 113,  468 => 112,  464 => 111,  460 => 110,  454 => 106,  453 => 105,  444 => 104,  438 => 102,  432 => 100,  430 => 99,  425 => 98,  423 => 97,  418 => 95,  415 => 94,  413 => 93,  410 => 92,  402 => 90,  394 => 88,  392 => 87,  385 => 86,  382 => 85,  379 => 84,  378 => 83,  362 => 81,  355 => 80,  328 => 78,  317 => 76,  316 => 75,  312 => 74,  304 => 71,  299 => 69,  295 => 67,  289 => 65,  283 => 63,  280 => 62,  274 => 60,  265 => 59,  252 => 57,  246 => 56,  245 => 55,  241 => 53,  236 => 51,  230 => 50,  224 => 49,  205 => 47,  198 => 46,  194 => 44,  190 => 42,  180 => 41,  176 => 39,  166 => 38,  164 => 37,  161 => 36,  159 => 35,  144 => 34,  129 => 33,  127 => 32,  123 => 31,  109 => 28,  102 => 25,  100 => 24,  96 => 22,  88 => 16,  83 => 14,  77 => 13,  60 => 12,  58 => 11,  55 => 10,  53 => 9,  51 => 8,  47 => 6,  46 => 5,  39 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewtopic_body.html", "");
    }
}
