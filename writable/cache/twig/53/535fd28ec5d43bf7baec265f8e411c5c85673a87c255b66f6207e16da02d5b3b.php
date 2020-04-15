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

/* base.html.twig */
class __TwigTemplate_47d1df7a91e50be2a7cee85414911275ade074954d007724ae13d81144fff730 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"es\">  
    <head>    
        <title>Corporate Compliance</title>    
        <meta charset=\"UTF-8\">
        <meta name=\"title\" content=\"Corporate Compliance\">
        <meta name=\"description\" content=\"Corporate Compliance\">   
    </head>  
    <body>
        <h1>Hola que tal ";
        // line 10
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h1>
        ";
        // line 11
        echo twig_var_dump($this->env, $context, [0 => $this->getAttribute(($context["session"] ?? null), "get", [0 => "name"], "method")]);
        echo "
    </body>  
</html>";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">  
    <head>    
        <title>Corporate Compliance</title>    
        <meta charset=\"UTF-8\">
        <meta name=\"title\" content=\"Corporate Compliance\">
        <meta name=\"description\" content=\"Corporate Compliance\">   
    </head>  
    <body>
        <h1>Hola que tal {{ name }}</h1>
        {{ dump( session.get( 'name' ) ) }}
    </body>  
</html>", "base.html.twig", "C:\\xampp\\htdocs\\protectyourdata\\app\\Views\\base.html.twig");
    }
}
