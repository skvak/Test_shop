<?php

/* main.twig */
class __TwigTemplate_f3d56dc06bff6a88eb34d0cf3b06a703f8e5019d6557def847993bd578a8b11b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main_template.twig", "main.twig", 1);
        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 12
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : null), "html", null, true);
        echo "

";
        // line 19
        if ((isset($context["specials"]) ? $context["specials"] : null)) {
            // line 20
            echo "  <div class=\"container\">
    <h3>Специальные предложения:</h3>    
      <div class=\"row\">
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["specials"]) ? $context["specials"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["spec"]) {
                // line 24
                echo "        <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
          <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["spec"], "name", array()), "html", null, true);
                echo "</div>
            <div class=\"panel-body\">
              <div style=\"width:30%; float:left\">
                <img src=\"";
                // line 29
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
              </div>
              <div style=\"width:70%; margin-left:35%; font-size: 13px;\">
                <p>Код товара: ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["spec"], "id", array()), "html", null, true);
                echo "</p>
                <p>Описание: ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["spec"], "description", array()), "html", null, true);
                echo "</p>
                <p>Дополнительно: ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["spec"], "additional", array()), "html", null, true);
                echo "</p>
                <p>Цена: ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["spec"], "price", array()), "html", null, true);
                echo "</p>
              </div>
            </div>
            <div class=\"panel-footer\">
              <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "main/product/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["spec"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-primary\" role=\"button\" type=\"button\">Подробнее</a>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spec'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "  
      </div>
  </div>
  <br>
";
        }
        // line 48
        echo "
";
        // line 49
        if ((isset($context["top"]) ? $context["top"] : null)) {
            // line 50
            echo "  <div class=\"container\">
    <h3>Топ продаж:</h3>    
      <div class=\"row\">
      ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["top"]) ? $context["top"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tp"]) {
                // line 54
                echo "        <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
          <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "name", array()), "html", null, true);
                echo "</div>
            <div class=\"panel-body\">
              <div style=\"width:30%; float:left\">
                <img src=\"";
                // line 59
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
              </div>
              <div style=\"width:70%; margin-left:35%; font-size: 13px;\">
                <p>Код товара: ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "id", array()), "html", null, true);
                echo "</p>
                <p>Описание: ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "description", array()), "html", null, true);
                echo "</p>
                <p>Дополнительно: ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "additional", array()), "html", null, true);
                echo "</p>
                <p>Цена: ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "price", array()), "html", null, true);
                echo "</p>
              </div>
            </div>
            <div class=\"panel-footer\">
              <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "main/product/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-primary\" role=\"button\" type=\"button\">Подробнее</a>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "  
      </div>
  </div>
";
        }
        // line 77
        echo "
";
        // line 78
        if ((isset($context["goods"]) ? $context["goods"] : null)) {
            // line 79
            echo "  <div class=\"container\">
    <h3>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), 0, array()), "cat_name", array()), "html", null, true);
            echo ":</h3>    
      <div class=\"row\">
      ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["goods"]) ? $context["goods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 83
                echo "        <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
          <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</div>
            <div class=\"panel-body\">
              <div style=\"width:30%; float:left\">
                <img src=\"";
                // line 88
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
              </div>
              <div style=\"width:70%; margin-left:35%; font-size: 13px;\">
                <p>Код товара: ";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "</p>
                <p>Описание: ";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
                echo "</p>
                <p>Дополнительно: ";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "additional", array()), "html", null, true);
                echo "</p>
                <p>Цена: ";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo "</p>
              </div>
            </div>
            <div class=\"panel-footer\">
              <a href=\"";
                // line 98
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "main/product/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-primary\" role=\"button\" type=\"button\">Подробнее</a>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "  
      </div>
  </div>
";
        }
        // line 106
        echo "
<br><br>

";
    }

    // line 111
    public function block_footer($context, array $blocks = array())
    {
        // line 112
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 112,  282 => 111,  275 => 106,  269 => 102,  256 => 98,  249 => 94,  245 => 93,  241 => 92,  237 => 91,  231 => 88,  225 => 85,  221 => 83,  217 => 82,  212 => 80,  209 => 79,  207 => 78,  204 => 77,  198 => 73,  185 => 69,  178 => 65,  174 => 64,  170 => 63,  166 => 62,  160 => 59,  154 => 56,  150 => 54,  146 => 53,  141 => 50,  139 => 49,  136 => 48,  129 => 43,  116 => 39,  109 => 35,  105 => 34,  101 => 33,  97 => 32,  91 => 29,  85 => 26,  81 => 24,  77 => 23,  72 => 20,  70 => 19,  65 => 17,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 4,  32 => 3,  11 => 1,);
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
/* {% block menu %}*/
/* {{parent()}}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* {{ info }}*/
/* */
/* {% if specials %}*/
/*   <div class="container">*/
/*     <h3>Специальные предложения:</h3>    */
/*       <div class="row">*/
/*       {% for spec in specials%}*/
/*         <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">*/
/*           <div class="panel panel-primary">*/
/*             <div class="panel-heading">{{spec.name}}</div>*/
/*             <div class="panel-body">*/
/*               <div style="width:30%; float:left">*/
/*                 <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="width:100%" alt="Image">*/
/*               </div>*/
/*               <div style="width:70%; margin-left:35%; font-size: 13px;">*/
/*                 <p>Код товара: {{spec.id}}</p>*/
/*                 <p>Описание: {{spec.description}}</p>*/
/*                 <p>Дополнительно: {{spec.additional}}</p>*/
/*                 <p>Цена: {{spec.price}}</p>*/
/*               </div>*/
/*             </div>*/
/*             <div class="panel-footer">*/
/*               <a href="{{base_url()}}main/product/{{spec.id}}" class="btn btn-primary" role="button" type="button">Подробнее</a>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}  */
/*       </div>*/
/*   </div>*/
/*   <br>*/
/* {% endif %}*/
/* */
/* {% if top %}*/
/*   <div class="container">*/
/*     <h3>Топ продаж:</h3>    */
/*       <div class="row">*/
/*       {% for tp in top%}*/
/*         <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">*/
/*           <div class="panel panel-primary">*/
/*             <div class="panel-heading">{{tp.name}}</div>*/
/*             <div class="panel-body">*/
/*               <div style="width:30%; float:left">*/
/*                 <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="width:100%" alt="Image">*/
/*               </div>*/
/*               <div style="width:70%; margin-left:35%; font-size: 13px;">*/
/*                 <p>Код товара: {{tp.id}}</p>*/
/*                 <p>Описание: {{tp.description}}</p>*/
/*                 <p>Дополнительно: {{tp.additional}}</p>*/
/*                 <p>Цена: {{tp.price}}</p>*/
/*               </div>*/
/*             </div>*/
/*             <div class="panel-footer">*/
/*               <a href="{{base_url()}}main/product/{{tp.id}}" class="btn btn-primary" role="button" type="button">Подробнее</a>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}  */
/*       </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if goods %}*/
/*   <div class="container">*/
/*     <h3>{{ goods.0.cat_name }}:</h3>    */
/*       <div class="row">*/
/*       {% for product in goods%}*/
/*         <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">*/
/*           <div class="panel panel-primary">*/
/*             <div class="panel-heading">{{product.name}}</div>*/
/*             <div class="panel-body">*/
/*               <div style="width:30%; float:left">*/
/*                 <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="width:100%" alt="Image">*/
/*               </div>*/
/*               <div style="width:70%; margin-left:35%; font-size: 13px;">*/
/*                 <p>Код товара: {{product.id}}</p>*/
/*                 <p>Описание: {{product.description}}</p>*/
/*                 <p>Дополнительно: {{product.additional}}</p>*/
/*                 <p>Цена: {{product.price}}</p>*/
/*               </div>*/
/*             </div>*/
/*             <div class="panel-footer">*/
/*               <a href="{{base_url()}}main/product/{{product.id}}" class="btn btn-primary" role="button" type="button">Подробнее</a>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}  */
/*       </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* <br><br>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {{parent()}}*/
/* {% endblock %}*/
