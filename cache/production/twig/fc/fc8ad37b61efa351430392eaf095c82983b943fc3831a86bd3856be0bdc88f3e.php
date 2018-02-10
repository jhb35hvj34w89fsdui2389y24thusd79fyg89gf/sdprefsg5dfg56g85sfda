<?php

/* overall_footer.html */
class __TwigTemplate_259d325f2b36a6c283b30fd0a92ebf8ade709c64910e5fd867ef8ee2f559f62d extends Twig_Template
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
        // line 2
        echo "</div>
";
        // line 3
        // line 4
        echo "<div id=\"page-footer\">
    ";
        // line 5
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 5)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 6
        echo "    <div class=\"Divider\"></div>
    </br>
    </br>
    </br>
<!--<center><a class=\"login-footer-links\" href=\"";
        // line 10
        echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
        echo "\">Members</a> <span class=\"login-footer-links\">|</span> <a class=\"login-footer-links\" href=\"#\">Changes</a> <span class=\"login-footer-links\">|</span> <a class=\"login-footer-links\" href=\"";
        echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
        echo "\">Contact</a> <span class=\"login-footer-links\">|</span> <a class=\"login-footer-links\" href=\"";
        echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
        echo "\">Team</a></center>-->
<p class=\"login-footer\">";
        // line 11
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " © 2018.
</br>
</br>

<!-- Please don't remove the next lines. -->

    Theme created by <a class=\"copyright-footer\" href=\"https://twitter.com/exp_themes\">ExpThemes</a>. Powered by <a class=\"copyright-footer\" href=\"http://phpbb.com\">phpBB</a>.</p>
    
    <div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
        
    </div>
    <div id=\"loading_indicator\"></div>
    <div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 23
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
        <a href=\"#\" class=\"alert_close\"></a>
        <h3 class=\"alert_title\">&nbsp;</h3>
        <p class=\"alert_text\"></p>
    </div>
    <div id=\"phpbb_confirm\" class=\"phpbb_alert\">
        <a href=\"#\" class=\"alert_close\"></a>
        <div class=\"alert_text\"></div>
    </div>
</div>
</div>
<div>
    <a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
    ";
        // line 36
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
            echo "
    ";
        }
        // line 38
        echo "</div>
<script src=\"";
        // line 39
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/anduin/theme/js/nav.js\"></script>
<script src=\"";
        // line 40
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
";
        // line 41
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 42
            echo "<script>
    window.jQuery || document.write(unescape('%3Cscript src=\"";
            // line 43
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" type=\"text/javascript\"%3E%3C/script%3E'));
</script>
";
        }
        // line 46
        echo "<script src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
";
        // line 47
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('10');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 48
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('10');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 49
        echo "<script>
    jQuery(function (\$) {
        'use strict';
        \$('.stat-block.online-list').attr('id', 'online-list');
        \$('.stat-block.birthday-list').attr('id', 'birthday-list');
        \$('.stat-block.statistics').attr('id', 'statistics');
        \$('.collapse-box > h2, .stat-block > h3').addClass(\"open\").find('a').contents().unwrap();
        \$('.collapse-box, .stat-block').collapse({
            persist: true
            , open: function () {
                this.stop(true, true);
                this.addClass(\"open\");
                this.slideDown(400);
            }
            , close: function () {
                this.stop(true, true);
                this.slideUp(400);
                this.removeClass(\"open\");
            }
        });
        var \$videoBG = \$('#video-background');
        var hasTopBar = \$('#top-bar').length;

        function resizeVideoBG() {
            var height = \$(window).height();
            \$videoBG.css('height', (height - 42) + 'px');
        }
        if (hasTopBar && \$videoBG.length) {
            \$(window).resize(function () {
                resizeVideoBG()
            });
            resizeVideoBG();
        }
        ";
        // line 82
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            // line 83
            echo "        phpbb.dropdownVisibleContainers += ', .profile-context';
        \$('.postprofile').each(function () {
            var \$this = \$(this)
                , \$trigger = \$this.find('dt a')
                , \$contents = \$this.siblings('.profile-context').children('.dropdown')
                , options = {
                    direction: 'auto'
                    , verticalDirection: 'auto'
                }
                , data;
            if (!\$trigger.length) {
                data = \$this.attr('data-dropdown-trigger');
                \$trigger = data ? \$this.children(data) : \$this.children('a:first');
            }
            if (!\$contents.length) {
                data = \$this.attr('data-dropdown-contents');
                \$contents = data ? \$this.children(data) : \$this.children('div:first');
            }
            if (!\$trigger.length || !\$contents.length) return;
            if (\$this.hasClass('dropdown-up')) options.verticalDirection = 'up';
            if (\$this.hasClass('dropdown-down')) options.verticalDirection = 'down';
            if (\$this.hasClass('dropdown-left')) options.direction = 'left';
            if (\$this.hasClass('dropdown-right')) options.direction = 'right';
            phpbb.registerDropdown(\$trigger, \$contents, options);
        });
        ";
        }
        // line 109
        echo "    });
</script>
";
        // line 111
        if ((((isset($context["S_VIDEOBG"]) ? $context["S_VIDEOBG"] : null) && ((isset($context["S_INDEX"]) ? $context["S_INDEX"] : null) || (isset($context["S_VIDEOBG_ALL"]) ? $context["S_VIDEOBG_ALL"] : null))) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 112
            $location = "videobg.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("videobg.html", "overall_footer.html", 112)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 114
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 115
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 116
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 116)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 117
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo " </body>

</html>";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 117,  247 => 116,  245 => 115,  240 => 114,  227 => 112,  225 => 111,  221 => 109,  193 => 83,  191 => 82,  156 => 49,  145 => 48,  134 => 47,  127 => 46,  119 => 43,  116 => 42,  114 => 41,  110 => 40,  106 => 39,  103 => 38,  97 => 36,  79 => 23,  64 => 19,  53 => 11,  45 => 10,  39 => 6,  27 => 5,  24 => 4,  23 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_footer.html", "");
    }
}
