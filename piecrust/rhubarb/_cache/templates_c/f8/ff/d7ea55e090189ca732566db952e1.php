<?php

/* default.html */
class __TwigTemplate_f8ffd7ea55e090189ca732566db952e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"description\" content=\"";
        // line 4
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "description"), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"";
        // line 5
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "author"), "html", null, true);
        echo "\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
  <title>";
        // line 7
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "title"), "html", null, true);
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "title")) {
            echo " &mdash; ";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "title"), "html", null, true);
        }
        echo "</title>
  ";
        // line 8
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        if ($this->getAttribute($_site_, "css")) {
            // line 9
            echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "root"), "html", null, true);
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "css"), "html", null, true);
            echo "\">
  ";
        } else {
            // line 11
            echo "  <style type=\"text/css\">
body {
    font-family: 'Baskerville', Georgia, Times, serif;
    font-size: 1.3em;
    line-height: 1.5em;
    padding: 0 1.5em;
    margin: 0;
}
h1, h2, h3, h4, h5, h6 { font-weight: bold; }
h1 { font-size: 2em; line-height: 0.75em; margin: 0.75em 0; }
h2 { font-size: 1.5em; line-height: 1em; margin: 1em 0; }
h3 { font-size: 1.2em; line-height: 1.25em; margin: 1.25em 0; }
h4 { font-size: 1em; line-height: 1.5em; margin: 1.5em 0; }
h5 { font-size: 0.8em; line-height: 1.875em; margin: 1.875em 0; }
h6 { font-size: 0.75em; line-height: 2em; margin: 2em 0; }
p {
    font-size: 1em;
    line-height: 1.5em;
    margin: 1.5em 0;
}
code { background: #fee; padding: 0 0.3em; }
#container > header {
    text-align: center;
}
#container > footer {
    text-align: center;
    font-style: italic;
    font-size: 0.8em;
    color: #888;
}

.site-title {
    font-size: 2em;
    font-weight: bold;
    line-height: 0.75em; 
    margin: 0.75em 0; 
}
.post h2 { margin-bottom: 0.33em; }
.date {
    font-style: italic;
    font-size: 0.75em;
    line-height: 0.5em;
    margin-bottom: 1.5em;
}
blockquote {
    font-style: italic;
}
  </style>
  ";
        }
        // line 60
        echo "</head>
<body>
  <div id=\"container\">
    <header>
        ";
        // line 64
        $this->displayBlock('header', $context, $blocks);
        // line 71
        echo "    </header>
    <section id=\"main\" role=\"main\">
        ";
        // line 73
        $this->displayBlock('main', $context, $blocks);
        // line 80
        echo "    </section>
    <footer>
        ";
        // line 82
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "        ";
        if (isset($context["piecrust"])) { $_piecrust_ = $context["piecrust"]; } else { $_piecrust_ = null; }
        echo $this->getAttribute($_piecrust_, "debug_info");
        echo "
        <p>";
        // line 85
        if (isset($context["piecrust"])) { $_piecrust_ = $context["piecrust"]; } else { $_piecrust_ = null; }
        echo $this->getAttribute($_piecrust_, "branding");
        echo "</p>
    </footer>
  </div>
</body>
</html>
";
    }

    // line 64
    public function block_header($context, array $blocks = array())
    {
        // line 65
        echo "        ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "title")) {
            // line 66
            echo "        <p class=\"site-title\"><a href=\"";
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "root"), "html", null, true);
            echo "\">";
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "title"), "html", null, true);
            echo "</a></p>
        ";
        } else {
            // line 68
            echo "        <h1><a href=\"";
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "root"), "html", null, true);
            echo "\">";
            if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_site_, "title"), "html", null, true);
            echo "</a></h1>
        ";
        }
        // line 70
        echo "        ";
    }

    // line 73
    public function block_main($context, array $blocks = array())
    {
        // line 74
        echo "        ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "title")) {
            // line 75
            echo "        <h1 class=\"page-title\">";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "title"), "html", null, true);
            echo "</h1>
        ";
        }
        // line 77
        echo "
        ";
        // line 78
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
        ";
    }

    // line 82
    public function block_footer($context, array $blocks = array())
    {
        // line 83
        echo "        ";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 83,  204 => 82,  197 => 78,  194 => 77,  187 => 75,  183 => 74,  180 => 73,  176 => 70,  166 => 68,  156 => 66,  152 => 65,  149 => 64,  138 => 85,  132 => 84,  130 => 82,  126 => 80,  124 => 73,  120 => 71,  118 => 64,  112 => 60,  61 => 11,  52 => 9,  49 => 8,  38 => 7,  32 => 5,  27 => 4,  66 => 39,  58 => 35,  23 => 2,  85 => 12,  81 => 10,  72 => 9,  64 => 8,  60 => 6,  46 => 5,  43 => 4,  25 => 3,  22 => 1,  19 => 1,);
    }
}
