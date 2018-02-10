<?php

/* forumlist_body.html */
class __TwigTemplate_f7f70667ba9afc04b3bdf398409195a8c31e2e42b47352ca67e0581bd3ae0ac3 extends Twig_Template
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
        echo "<div id=\"search-box\" class=\"search-main\" role=\"search\">
    <form action=\"";
        // line 2
        echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
        echo "\" method=\"get\" id=\"search\">
        <fieldset>
            <input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" class=\"inputbox-search\" size=\"20\" value=\"";
        // line 4
        echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
        echo "\" placeholder=\" &#128270; Search all forums\" /> ";
        echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
        echo " </fieldset>
    </form>
</div>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 8
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 9
                echo "</ul>
</div>
</div>
";
                // line 12
                if ((isset($context["S_INDEX"]) ? $context["S_INDEX"] : null)) {
                    // line 13
                    echo "</div>
";
                }
            }
            // line 16
            // line 17
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 18
                if (((isset($context["S_INDEX"]) ? $context["S_INDEX"] : null) || ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null) &&  !((isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))))) {
                    // line 19
                    echo "
<div id=\"category-";
                    // line 20
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\" class=\"collapse-box\">
    <h2>";
                    // line 21
                    if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                        echo "</a>";
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUMS");
                    }
                    echo "</h2>
    ";
                }
                // line 23
                echo "    <div class=\"forabg forum-blocks\">
        <div class=\"inner\">
            <ul class=\"forums\">
                ";
            }
            // line 27
            echo "                ";
            // line 28
            echo "                ";
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 29
                echo "                ";
                // line 30
                echo "                <li onclick=\"location.href='";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "';\" class=\"row\">
                    ";
                // line 31
                // line 32
                echo "                    <dl class=\"icon ";
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", array());
                echo "\"> <dt>
\t\t\t\t\t";
                // line 33
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    echo "<div class=\"";
                    if ($this->getAttribute($context["forumrow"], "FORUM_DESC", array())) {
                        echo "forum-image";
                    } else {
                        echo "forum-image-nosubforum";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</div>";
                }
                // line 34
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"icon-link\"></a>

\t\t\t\t\t";
                // line 36
                if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", array())) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    // line 37
                    echo "\t\t\t\t\t<div class=\"dropdown-container dropdown-button-control\">
\t\t\t\t\t\t<span class=\"dropdown-trigger\"></span>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<div class=\"dropdown-contents\">
\t\t\t\t\t\t\t";
                    // line 41
                    // line 42
                    echo "\t\t\t\t\t\t\t<strong>";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\">";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                        echo "</a>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "\t\t\t\t\t\t\t";
                    // line 47
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t<div class=\"list-inner\">
                        ";
                // line 52
                if ($this->getAttribute($context["forumrow"], "S_LOCKED_FORUM", array())) {
                    // line 53
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" class=\"";
                    if ($this->getAttribute($context["forumrow"], "FORUM_DESC", array())) {
                        echo "forumtitle";
                    } else {
                        echo "forumtitle-nosubforum";
                    }
                    echo "\" data-balloon=\"This Forum is Locked!\" data-balloon-pos=\"down\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "<img class=\"locked-forum-icon\" src=\"";
                    echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
                    echo "styles/anduin/theme/images/icons/locked.png\"></img></a>
                        ";
                } else {
                    // line 55
                    echo "                        <a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" class=\"";
                    if ($this->getAttribute($context["forumrow"], "FORUM_DESC", array())) {
                        echo "forumtitle";
                    } else {
                        echo "forumtitle-nosubforum";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>
                        ";
                }
                // line 57
                echo "\t\t\t\t\t\t<span class=\"forum-description\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</dt>
                        <dd class=\"mcp-status\"><span>
\t\t\t\t\t\t";
                // line 61
                if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                    // line 62
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                    echo "\">";
                    echo (isset($context["UNAPPROVED_IMG"]) ? $context["UNAPPROVED_IMG"] : null);
                    echo "</a>
\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 63
$context["forumrow"], "U_UNAPPROVED_POSTS", array())) {
                    // line 64
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", array());
                    echo "\">";
                    echo (isset($context["UNAPPROVED_POST_IMG"]) ? $context["UNAPPROVED_POST_IMG"] : null);
                    echo "</a>
\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t</span> </dd>
                        ";
            }
            // line 68
            echo "                    </dl>
                    ";
            // line 69
            // line 70
            echo "                </li>
                ";
            // line 71
            // line 72
            echo "                ";
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 73
                echo "            </ul>
        </div>
    </div>
    ";
                // line 76
                if (((isset($context["S_INDEX"]) ? $context["S_INDEX"] : null) || ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null) &&  !((isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))))) {
                    // line 77
                    echo "</div>
";
                }
                // line 79
            }
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "
<div class=\"panel\">
    <div class=\"inner\"> <strong>";
            // line 84
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS");
            echo "</strong> </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 84,  258 => 82,  253 => 79,  249 => 77,  247 => 76,  242 => 73,  239 => 72,  238 => 71,  235 => 70,  234 => 69,  231 => 68,  227 => 66,  219 => 64,  217 => 63,  210 => 62,  208 => 61,  200 => 57,  186 => 55,  170 => 53,  168 => 52,  165 => 51,  159 => 47,  157 => 46,  140 => 44,  136 => 43,  130 => 42,  129 => 41,  123 => 37,  121 => 36,  115 => 34,  103 => 33,  98 => 32,  97 => 31,  92 => 30,  90 => 29,  87 => 28,  85 => 27,  79 => 23,  66 => 21,  62 => 20,  59 => 19,  57 => 18,  55 => 17,  54 => 16,  49 => 13,  47 => 12,  42 => 9,  40 => 8,  35 => 7,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forumlist_body.html", "");
    }
}
