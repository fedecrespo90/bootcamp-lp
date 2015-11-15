<?php

/* index.html */
class __TwigTemplate_273ca7fa82f2090cf17d34575546bc582f04e46d2c14c42430d61abfdfd3db0f extends Twig_Template
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
        echo "  <div class=\"book\">
      <h1>Book Title: ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
      <h2>Author: ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true);
        echo "</h2>
    <strong>Main characters:</strong>
    <ul>
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["main_characters"]) ? $context["main_characters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "        <li>";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
  </div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  36 => 7,  32 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/*   <div class="book">*/
/*       <h1>Book Title: {{ title }}</h1>*/
/*       <h2>Author: {{ author }}</h2>*/
/*     <strong>Main characters:</strong>*/
/*     <ul>*/
/*       {% for item in main_characters %}*/
/*         <li>{{ item }}</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* */
