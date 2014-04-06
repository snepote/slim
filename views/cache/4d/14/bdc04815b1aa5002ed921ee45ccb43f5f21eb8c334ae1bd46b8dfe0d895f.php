<?php

/* layout.twig */
class __TwigTemplate_4d14bdc04815b1aa5002ed921ee45ccb43f5f21eb8c334ae1bd46b8dfe0d895f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/foundation/5.1.1/css/foundation.min.css\" />
        <link rel=\"stylesheet\" href=\"css/style.css\" />
    </head>
    <body>
        <nav class=\"top-bar\" data-topbar>
            ";
        // line 12
        $this->env->loadTemplate("menu.twig")->display($context);
        // line 13
        echo "            <ul class=\"title-area\">
                <!-- Title Area -->
                <li class=\"name\">
                    <h1>
                        <a href=\"/\">
                            slim.nepoteidea
                        </a>
                    </h1>
                </li>
            </ul>            
         </nav>
        <div class=\"row\">
            <div class=\"large-12 columns\">
                <h1>slim.nepoteidea</h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"large-12 columns\">
                ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "            </div>
        </div>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/foundation/5.1.1/js/vendor/modernizr.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/foundation/5.1.1/js/vendor/jquery.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/foundation/5.1.1/js/foundation.min.js\"></script>
        <script>
            \$(document).foundation();
        </script>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "title";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  74 => 6,  61 => 32,  59 => 31,  39 => 13,  37 => 12,  28 => 6,  21 => 1,);
    }
}
