<?php

/* admin_main.twig */
class __TwigTemplate_18d13ae5beb077558023814f2e1fcd7840ba2cd08453047fb87f66a8e498a217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_template.twig", "admin_main.twig", 1);
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
        return "admin_template.twig";
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
   
  <div class=\"container-fluid\" style=\"margin-left: 1%;\">
    <div class=\"row\">
    <h3>Заказы:</h3>            
    <table class=\"table table-hover\">
      <thead>
        <tr>
          <th>№ заказа</th>
          <th>Дата заказа</th>
          <th>Товары</th>
          <th>Сумма</th>
          <th>Покупатель</th>
          <th>Телефон</th>
          <th>E-mail</th>
          <th>Способ оплаты</th>
          <th>Адрес доставки</th>
          <th>Дополнительно</th>
          <th>Статус заказа</th>
          <th>Действия</th>          
        </tr>
      </thead>
      <tbody>
      ";
        // line 40
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 41
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 42
                echo "          <tr>
            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "order_create", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "prod", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "sum", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "surname", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "tel", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "email", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "pay_meth", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "address", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "additional", array()), "html", null, true);
                echo "</td>
            ";
                // line 53
                if (($this->getAttribute($context["order"], "status", array()) == 0)) {
                    // line 54
                    echo "                <td>";
                    echo "Не обработан";
                    echo "</td>
              ";
                } else {
                    // line 56
                    echo "                <td>";
                    echo "Обработан";
                    echo "</td>
            ";
                }
                // line 58
                echo "            <td>
            ";
                // line 59
                if (($this->getAttribute($context["order"], "status", array()) == 0)) {
                    // line 60
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, base_url(), "html", null, true);
                    echo "admin/change_status/order/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                    echo "\">Обработан</a> / <a href=\"";
                    echo twig_escape_filter($this->env, base_url(), "html", null, true);
                    echo "admin/delete/order/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                    echo "\">Удалить</a>
              ";
                } else {
                    // line 62
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, base_url(), "html", null, true);
                    echo "admin/delete/order/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                    echo "\">Удалить</a>
            ";
                }
                // line 64
                echo "            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "      ";
        } else {
            // line 68
            echo "        <tr>
          <td>Нет заказов</td>
        </tr>
      ";
        }
        // line 71
        echo "  
      </tbody>
    </table>
    </div>
  </div>
  <br>
  <br>



";
    }

    // line 83
    public function block_footer($context, array $blocks = array())
    {
        // line 84
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 84,  213 => 83,  199 => 71,  193 => 68,  190 => 67,  182 => 64,  174 => 62,  162 => 60,  160 => 59,  157 => 58,  151 => 56,  145 => 54,  143 => 53,  139 => 52,  135 => 51,  131 => 50,  127 => 49,  123 => 48,  117 => 47,  113 => 46,  109 => 45,  105 => 44,  101 => 43,  98 => 42,  93 => 41,  91 => 40,  65 => 17,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'admin_template.twig' %}*/
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
/*    */
/*   <div class="container-fluid" style="margin-left: 1%;">*/
/*     <div class="row">*/
/*     <h3>Заказы:</h3>            */
/*     <table class="table table-hover">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>№ заказа</th>*/
/*           <th>Дата заказа</th>*/
/*           <th>Товары</th>*/
/*           <th>Сумма</th>*/
/*           <th>Покупатель</th>*/
/*           <th>Телефон</th>*/
/*           <th>E-mail</th>*/
/*           <th>Способ оплаты</th>*/
/*           <th>Адрес доставки</th>*/
/*           <th>Дополнительно</th>*/
/*           <th>Статус заказа</th>*/
/*           <th>Действия</th>          */
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       {% if orders %}*/
/*         {% for order in orders %}*/
/*           <tr>*/
/*             <td>{{order.id}}</td>*/
/*             <td>{{order.order_create}}</td>*/
/*             <td>{{order.prod}}</td>*/
/*             <td>{{order.sum}}</td>*/
/*             <td>{{order.name}} {{order.surname}}</td>*/
/*             <td>{{order.tel}}</td>*/
/*             <td>{{order.email}}</td>*/
/*             <td>{{order.pay_meth}}</td>*/
/*             <td>{{order.address}}</td>*/
/*             <td>{{order.additional}}</td>*/
/*             {% if order.status == 0 %}*/
/*                 <td>{{ 'Не обработан' }}</td>*/
/*               {% else %}*/
/*                 <td>{{ 'Обработан' }}</td>*/
/*             {% endif %}*/
/*             <td>*/
/*             {% if order.status == 0 %}*/
/*                 <a href="{{base_url()}}admin/change_status/order/{{order.id}}">Обработан</a> / <a href="{{base_url()}}admin/delete/order/{{order.id}}">Удалить</a>*/
/*               {% else %}*/
/*                 <a href="{{base_url()}}admin/delete/order/{{order.id}}">Удалить</a>*/
/*             {% endif %}*/
/*             </td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       {% else %}*/
/*         <tr>*/
/*           <td>Нет заказов</td>*/
/*         </tr>*/
/*       {% endif %}  */
/*       </tbody>*/
/*     </table>*/
/*     </div>*/
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
