<?php

/* template.html */
class __TwigTemplate_2e54775c221dd7e07a9a1a5f26d9079a extends Twig_Template
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
        echo "
    <html>
        <head>
            <title>";
        // line 4
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</title>
        </head>
        <div>";
        // line 6
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo $_title_;
        echo "<div>
        <body>
        \t<?php echo(getPageData(\"amroche.md\"))?>
            ";
        // line 9
        if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
        echo $_text_;
        echo "
            ";
        // line 10
        if (isset($context["speaker"])) { $_speaker_ = $context["speaker"]; } else { $_speaker_ = null; }
        echo $_speaker_;
        echo "
        </body>
    </html>";
    }

    public function getTemplateName()
    {
        return "template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  37 => 9,  30 => 6,  24 => 4,  207 => 83,  204 => 82,  197 => 78,  194 => 77,  187 => 75,  183 => 74,  180 => 73,  176 => 70,  166 => 68,  156 => 66,  152 => 65,  149 => 64,  138 => 85,  132 => 84,  130 => 82,  126 => 80,  124 => 73,  120 => 71,  118 => 64,  112 => 60,  61 => 11,  52 => 9,  49 => 8,  38 => 7,  32 => 5,  27 => 4,  66 => 39,  58 => 35,  23 => 2,  85 => 12,  81 => 10,  72 => 9,  64 => 8,  60 => 6,  46 => 5,  43 => 4,  25 => 3,  22 => 1,  19 => 1,);
    }
}
