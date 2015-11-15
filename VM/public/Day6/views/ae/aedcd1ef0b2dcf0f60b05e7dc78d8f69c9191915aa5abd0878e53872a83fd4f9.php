<?php

/* view.html */
class __TwigTemplate_cb741f3803dc3b7b3d5bc7b889968876a88af735791243a1bd55aefbbc501955 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
    </head>
    <body>
        <ul id=\"navigation\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigation"]) ? $context["navigation"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "caption", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </ul>

        <h1>My Webpage</h1>
        ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  43 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>My Webpage</title>*/
/*     </head>*/
/*     <body>*/
/*         <ul id="navigation">*/
/*         {% for item in navigation %}*/
/*             <li><a href="{{ item.href }}">{{ item.caption }}</a></li>*/
/*         {% endfor %}*/
/*         </ul>*/
/* */
/*         <h1>My Webpage</h1>*/
/*         {{ name }}*/
/*     </body>*/
/* </html>*/
/* */
