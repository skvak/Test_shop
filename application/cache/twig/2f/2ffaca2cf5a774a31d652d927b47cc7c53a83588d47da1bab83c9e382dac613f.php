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
        // line 18
        if ((isset($context["specials"]) ? $context["specials"] : null)) {
            // line 19
            echo "  <div class=\"container\">
    <h3>Специальные предложения:</h3>    
      <div class=\"row\">
      ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["specials"]) ? $context["specials"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["spec"]) {
                // line 23
                echo "        <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
          <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["spec"], "name", array()), "html", null, true);
                echo "</div>
            <div class=\"panel-body\">
              <div style=\"width:30%; float:left\">
                <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
              </div>
              <div style=\"width:70%; margin-left:35%; font-size: 13px;\">
                <p>Код товара: ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["spec"], "id", array()), "html", null, true);
                echo "</p>
                <p>Описание: ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["spec"], "description", array()), "html", null, true);
                echo "</p>
                <p>Дополнительно: ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["spec"], "additional", array()), "html", null, true);
                echo "</p>
                <p>Цена: ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["spec"], "price", array()), "html", null, true);
                echo "</p>
              </div>
            </div>
            <div class=\"panel-footer\">
              <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "main/product/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["spec"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-primary\" role=\"button\" type=\"button\">Подробнее</a>
              <button type=\"button\" class=\"btn btn-primary\">В корзину</button>
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
              <button type=\"button\" class=\"btn btn-primary\">В корзину</button>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "  
      </div>
  </div>
";
        }
        // line 78
        echo "
";
        // line 79
        if ((isset($context["goods"]) ? $context["goods"] : null)) {
            // line 80
            echo "  <div class=\"container\">
    <h3>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), 0, array()), "cat_name", array()), "html", null, true);
            echo ":</h3>    
      <div class=\"row\">
      ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["goods"]) ? $context["goods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 84
                echo "        <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
          <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</div>
            <div class=\"panel-body\">
              <div style=\"width:30%; float:left\">
                <img src=\"";
                // line 89
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
              </div>
              <div style=\"width:70%; margin-left:35%; font-size: 13px;\">
                <p>Код товара: ";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "</p>
                <p>Описание: ";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
                echo "</p>
                <p>Дополнительно: ";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "additional", array()), "html", null, true);
                echo "</p>
                <p>Цена: ";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo "</p>
              </div>
            </div>
            <div class=\"panel-footer\">
              <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "main/product/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-primary\" role=\"button\" type=\"button\">Подробнее</a>
              <button type=\"button\" class=\"btn btn-primary\">В корзину</button>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "  
      </div>
  </div>
";
        }
        // line 108
        echo "
<br><br>

";
    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        // line 114
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
        return array (  284 => 114,  281 => 113,  274 => 108,  268 => 104,  254 => 99,  247 => 95,  243 => 94,  239 => 93,  235 => 92,  229 => 89,  223 => 86,  219 => 84,  215 => 83,  210 => 81,  207 => 80,  205 => 79,  202 => 78,  196 => 74,  182 => 69,  175 => 65,  171 => 64,  167 => 63,  163 => 62,  157 => 59,  151 => 56,  147 => 54,  143 => 53,  138 => 50,  136 => 49,  133 => 48,  126 => 43,  112 => 38,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  87 => 28,  81 => 25,  77 => 23,  73 => 22,  68 => 19,  66 => 18,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 4,  32 => 3,  11 => 1,);
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
/*               <button type="button" class="btn btn-primary">В корзину</button>*/
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
/*               <button type="button" class="btn btn-primary">В корзину</button>*/
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
/*               <button type="button" class="btn btn-primary">В корзину</button>*/
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
