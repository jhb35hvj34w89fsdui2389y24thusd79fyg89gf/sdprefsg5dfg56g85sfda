<?php

/* search_results.html */
class __TwigTemplate_8518126a7a8c42ff94d0e619664624ca0a8df33edcfd257489cde45e44cd0919 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"searchresults-title\"> <img class=\"search-result-icon\" src=\"styles/anduin/theme/images/icons/wow/wow-vanilla.png\" /> Results ";
        // line 3
        if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
            echo " \"";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "\"";
        }
        echo "</h2>

";
        // line 5
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) || (isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null)) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 6
            echo "\t<div class=\"action-bar top\">

\t";
            // line 8
            if (((isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null) > 0)) {
                // line 9
                echo "\t<div id=\"search-box\" class=\"search-results\" role=\"search\">
        <a href=\"";
                // line 10
                echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                echo "\" class=\"button\">Advanced Search</a>
\t\t\t</div>
\t";
            }
            // line 13
            echo "\t</div>
";
        }
        // line 15
        echo "
";
        // line 16
        if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
            // line 17
            echo "
\t";
            // line 18
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) {
                // line 19
                echo "\t<div class=\"forumbg\">

\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist topics\">

\t\t";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 25
                    echo "\t\t\t";
                    // line 26
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", array()) % 2 == 0)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl class=\"row-item ";
                    // line 27
                    echo $this->getAttribute($context["searchresults"], "TOPIC_IMG_STYLE", array());
                    echo "\">
\t\t\t\t\t<dt ";
                    // line 28
                    if ($this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array())) {
                        echo "style=\"background-image: url(";
                        echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array());
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo " title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_FOLDER_IMG_ALT", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 29
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", array());
                        echo "\" class=\"row-item-link\"></a>";
                    }
                    // line 30
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t\t";
                    // line 32
                    // line 33
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", array());
                        echo "\">";
                        echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                        echo "</a> ";
                    }
                    // line 34
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a> ";
                    echo $this->getAttribute($context["searchresults"], "ATTACH_ICON_IMG", array());
                    echo "
\t\t\t\t\t\t\t";
                    // line 35
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["searchresults"], "S_POSTS_UNAPPROVED", array()))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "UNAPPROVED_IMG", array());
                        echo "</a> ";
                    }
                    // line 36
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_DELETED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\">";
                        echo (isset($context["DELETED_IMG"]) ? $context["DELETED_IMG"] : null);
                        echo "</a> ";
                    }
                    // line 37
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_REPORTED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_REPORT", array());
                        echo "\">";
                        echo (isset($context["REPORTED_IMG"]) ? $context["REPORTED_IMG"] : null);
                        echo "</a>";
                    }
                    echo "<br />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 39
                    // line 40
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"posts\"><img class=\"viewforum-comments\" src=\"styles/anduin/template/images/comments.png\" align=\"bottom\">  ";
                    // line 43
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</dd>
                
\t\t\t\t\t<dd class=\"topic_author\">";
                    // line 45
                    echo $this->getAttribute($context["searchresults"], "TOPIC_AUTHOR_FULL", array());
                    echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                    // line 48
                    // line 49
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "\t\t</ul>

\t\t</div>
\t</div>
\t";
            } else {
                // line 55
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 57
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 61
            echo "
";
        } else {
            // line 63
            echo "
\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 65
                echo "\t\t";
                // line 66
                echo "\t\t<div class=\"search post ";
                if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if ($this->getAttribute($context["searchresults"], "S_POST_REPORTED", array())) {
                    echo " reported";
                }
                echo "\" style=\"margin-top: 50px;\">
\t\t\t<div class=\"inner\">

\t";
                // line 69
                if ($this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 70
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 71
                    echo $this->getAttribute($context["searchresults"], "L_IGNORE_POST", array());
                    echo "
\t\t</div>
\t";
                } else {
                    // line 74
                    echo "\t\t<dl class=\"postprofile\">
\t\t\t";
                    // line 75
                    // line 76
                    echo "            <img src=\"styles/anduin/theme/images/avatars/no-avatar-3.png\" />
\t\t\t<dt class=\"author\">";
                    // line 77
                    echo $this->getAttribute($context["searchresults"], "POST_AUTHOR_FULL", array());
                    echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
                    // line 78
                    echo $this->getAttribute($context["searchresults"], "POST_DATE", array());
                    echo "</dd>
\t\t\t";
                    // line 79
                    // line 80
                    echo "\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t<h3><a href=\"";
                    // line 83
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "POST_SUBJECT", array());
                    echo "</a></h3>
\t\t\t<div class=\"content\">";
                    // line 84
                    echo $this->getAttribute($context["searchresults"], "MESSAGE", array());
                    echo "</div>
\t\t</div>
\t";
                }
                // line 87
                echo "
\t";
                // line 88
                if ( !$this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 89
                    echo "\t\t<ul class=\"searchresults\">
\t\t\t<li ><a href=\"";
                    // line 90
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\" class=\"button\" title=\"Go Back\">GO TO POST</a></li>
\t\t</ul>
\t";
                }
                // line 93
                echo "
\t\t\t</div>
\t\t</div>
\t\t";
                // line 96
                // line 97
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 98
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 100
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 105
        echo "
<div class=\"action-bar bottom\">
\t<center>
    ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 109
            echo "    ";
            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                // line 110
                echo "    </br> <a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" rel=\"prev\" role=\"button\" class=\"footer-button\">&#10094; PREVIOUS PAGE</a>";
            } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" class=\"footer-button\">";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                echo "</a>";
            } elseif ($this->getAttribute($context["pagination"], "S_IS_NEXT", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" rel=\"next\" role=\"button\" class=\"footer-button\">NEXT PAGE &#10095;</a>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "</center>
</div>
<center>
        </br> <a href=\"";
        // line 116
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" class=\"footer-button\">BACK TO HOME</a>
</center>

";
        // line 119
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 119)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 119,  360 => 116,  355 => 113,  335 => 110,  332 => 109,  328 => 108,  323 => 105,  312 => 100,  308 => 98,  303 => 97,  302 => 96,  297 => 93,  291 => 90,  288 => 89,  286 => 88,  283 => 87,  277 => 84,  271 => 83,  266 => 80,  265 => 79,  261 => 78,  257 => 77,  254 => 76,  253 => 75,  250 => 74,  244 => 71,  241 => 70,  239 => 69,  225 => 66,  223 => 65,  218 => 64,  215 => 63,  211 => 61,  204 => 57,  200 => 55,  193 => 50,  187 => 49,  186 => 48,  180 => 45,  175 => 43,  170 => 40,  169 => 39,  157 => 37,  148 => 36,  140 => 35,  131 => 34,  122 => 33,  121 => 32,  117 => 30,  111 => 29,  100 => 28,  96 => 27,  87 => 26,  85 => 25,  81 => 24,  74 => 19,  72 => 18,  69 => 17,  67 => 16,  64 => 15,  60 => 13,  54 => 10,  51 => 9,  49 => 8,  45 => 6,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search_results.html", "");
    }
}
