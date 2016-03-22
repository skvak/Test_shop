<?php

/* shop_cart.twig */
class __TwigTemplate_138bb965fc4e2a6c2646724aa7810ff86ae3aa3fc7c7077e47aab144fdb98a73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main_template.twig", "shop_cart.twig", 1);
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
  <div class=\"container\">
    <div class=\"row\">
    <h3>Ваша корзина:</h3>            
    <table class=\"table table-hover\">
      <thead>
        <tr>
          <th>Код товара</th>
          <th>Наименование</th>
          <th>Количество</th>
          <th>Цена, грн.</th>
          <th>Сумма</th>
          <th>Удалить</th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 32
        if ((isset($context["cart"]) ? $context["cart"] : null)) {
            // line 33
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) ? $context["cart"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 34
                echo "          <tr>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "qty", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "subtotal", array()), "html", null, true);
                echo "</td>
            <td><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "main/remove_from_cart/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "rowid", array()), "html", null, true);
                echo "\">Удалить</a></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "          <tr>
            <td colspan=\"5\" align=\"right\"><strong>Общая сумма, грн.: </strong></td>
            <td style=\"font-size: 18px;\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart_summary"]) ? $context["cart_summary"] : null), "sum", array()), "html", null, true);
            echo "</td>
          </tr>
        ";
        } else {
            // line 48
            echo "          <tr>
            <td>Корзина пуста</td>
          </tr>
      ";
        }
        // line 52
        echo "      </tbody>
    </table>
    </div>
    ";
        // line 55
        if ((isset($context["cart"]) ? $context["cart"] : null)) {
            // line 56
            echo "      <div class=\"row\">
        <div class=\"col-xs-8 col-sm-8 col-md-10 col-lg-10\">
        </div>
        <div class=\"col-xs-4 col-sm-4 col-md-2 col-lg-2\">
          <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "main/create_order\" class=\"btn btn-primary\" role=\"button\" type=\"button\">Оформить заказ</a>
        </div>
      </div>
    ";
        }
        // line 64
        echo "  </div>
  <br>
  <br>



";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "shop_cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 73,  167 => 72,  157 => 64,  150 => 60,  144 => 56,  142 => 55,  137 => 52,  131 => 48,  125 => 45,  121 => 43,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  87 => 34,  82 => 33,  80 => 32,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 4,  32 => 3,  11 => 1,);
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
/*    */
/*   <div class="container">*/
/*     <div class="row">*/
/*     <h3>Ваша корзина:</h3>            */
/*     <table class="table table-hover">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>Код товара</th>*/
/*           <th>Наименование</th>*/
/*           <th>Количество</th>*/
/*           <th>Цена, грн.</th>*/
/*           <th>Сумма</th>*/
/*           <th>Удалить</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       {% if cart %}*/
/*         {% for product in cart %}*/
/*           <tr>*/
/*             <td>{{ product.id }}</td>*/
/*             <td>{{ product.name }}</td>*/
/*             <td>{{ product.qty }}</td>*/
/*             <td>{{ product.price }}</td>*/
/*             <td>{{ product.subtotal }}</td>*/
/*             <td><a href="{{base_url()}}main/remove_from_cart/{{product.rowid}}">Удалить</a></td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*           <tr>*/
/*             <td colspan="5" align="right"><strong>Общая сумма, грн.: </strong></td>*/
/*             <td style="font-size: 18px;">{{ cart_summary.sum }}</td>*/
/*           </tr>*/
/*         {% else %}*/
/*           <tr>*/
/*             <td>Корзина пуста</td>*/
/*           </tr>*/
/*       {% endif %}*/
/*       </tbody>*/
/*     </table>*/
/*     </div>*/
/*     {% if cart %}*/
/*       <div class="row">*/
/*         <div class="col-xs-8 col-sm-8 col-md-10 col-lg-10">*/
/*         </div>*/
/*         <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">*/
/*           <a href="{{base_url()}}main/create_order" class="btn btn-primary" role="button" type="button">Оформить заказ</a>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/*   <br>*/
/*   <br>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {{parent()}}*/
/* {% endblock %}*/
