<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* test-global.html.twig */
class __TwigTemplate_adfa41712c90ca3293fe596fe19322f6927de5e3a8304fc6281d2ec3c86b389d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? null), "name", []), "html", null, true);
        echo "</h1>";
    }

    public function getTemplateName()
    {
        return "test-global.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>{{ session.name }}</h1>", "test-global.html.twig", "C:\\xampp\\htdocs\\vendors\\daycry\\twig\\tests\\_support\\Views\\test-global.html.twig");
    }
}
