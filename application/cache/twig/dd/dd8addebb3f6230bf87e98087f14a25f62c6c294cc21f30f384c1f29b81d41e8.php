<?php

/* start_view.twig */
class __TwigTemplate_8d5c15ee580ba421691c4024b2b70df95864a65faf2f899d7c66780845da88fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main_template.twig", "start_view.twig", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main_template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_scripts($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_nav($context, array $blocks = array())
    {
        // line 12
        $this->displayParentBlock("nav", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
        <div class=\"advertising\"></div></div>
            <div class=\"col-xs-12 col-sm-9 col-md-9 col-lg-9 main\">

                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["examples"]) ? $context["examples"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "                    <!-- <img src=\"img/example/after/1_0.jpg\" class=\"img-responsive\">  -->
                    <!-- для примера, в будующем нужно уточнить какое фото будет выводиться -->
                    <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "photo_after", array()), 0, array()), "html", null, true);
            echo "\" class=\"img-responsive\">
                    <h3>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : null), $this->getAttribute($context["item"], "category", array()), array(), "array"), "html", null, true);
            echo "</h3>
                    <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "about", array()), "html", null, true);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
            </div>
        </div>
    </div>
</section>

";
    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        // line 36
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "start_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  102 => 35,  92 => 27,  84 => 25,  80 => 24,  76 => 23,  72 => 21,  68 => 20,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'main_template.twig' %}*/
/* */
/* {% block scripts %}*/
/* {{parent()}}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/* {{parent()}}*/
/* {% endblock %}*/
/* */
/* {% block nav %}*/
/* {{parent()}}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*         <div class="advertising"></div></div>*/
/*             <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 main">*/
/* */
/*                 {% for item in examples %}*/
/*                     <!-- <img src="img/example/after/1_0.jpg" class="img-responsive">  -->*/
/*                     <!-- для примера, в будующем нужно уточнить какое фото будет выводиться -->*/
/*                     <img src="{{item.photo_after.0}}" class="img-responsive">*/
/*                     <h3>{{ cat[item.category] }}</h3>*/
/*                     <p>{{ item.about }}</p>*/
/*                 {% endfor %}*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {{parent()}}*/
/* {% endblock %}*/
