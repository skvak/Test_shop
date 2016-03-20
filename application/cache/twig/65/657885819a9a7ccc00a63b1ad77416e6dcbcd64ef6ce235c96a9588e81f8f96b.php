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
        <tr>
          <td>1</td>
          <td>19.03.2016</td>
          <td>Планшет, ноутбук, телефон</td>
          <td>11200</td>
          <td>Иван Иванов</td>
          <td>0772344321</td>
          <td>ivan@ukr.net</td>
          <td>Наличные</td>
          <td>планета Земля</td>
          <td>Доставка с 15:00 до 20:00</td>
          <td>Не обработан</td>
          <td><a href=\"#\">Обработан</a> / <a href=\"#\">Удалить</a></td>
        </tr>
        <tr>
          <td>1</td>
          <td>19.03.2016</td>
          <td>Планшет, ноутбук, телефон</td>
          <td>11200</td>
          <td>Иван Иванов</td>
          <td>0772344321</td>
          <td>ivan@ukr.net</td>
          <td>Наличные</td>
          <td>планета Земля</td>
          <td>Доставка с 15:00 до 20:00</td>
          <td>Не обработан</td>
          <td><a href=\"#\">Обработан</a> / <a href=\"#\">Удалить</a></td>
        </tr>
        <tr>
          <td>1</td>
          <td>19.03.2016</td>
          <td>Планшет, ноутбук, телефон</td>
          <td>11200</td>
          <td>Иван Иванов</td>
          <td>0772344321</td>
          <td>ivan@ukr.net</td>
          <td>Наличные</td>
          <td>планета Земля</td>
          <td>Доставка с 15:00 до 20:00</td>
          <td>Не обработан</td>
          <td><a href=\"#\">Обработан</a> / <a href=\"#\">Удалить</a></td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <br>
  <br>



";
    }

    // line 91
    public function block_footer($context, array $blocks = array())
    {
        // line 92
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
        return array (  142 => 92,  139 => 91,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 4,  32 => 3,  11 => 1,);
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
/*         <tr>*/
/*           <td>1</td>*/
/*           <td>19.03.2016</td>*/
/*           <td>Планшет, ноутбук, телефон</td>*/
/*           <td>11200</td>*/
/*           <td>Иван Иванов</td>*/
/*           <td>0772344321</td>*/
/*           <td>ivan@ukr.net</td>*/
/*           <td>Наличные</td>*/
/*           <td>планета Земля</td>*/
/*           <td>Доставка с 15:00 до 20:00</td>*/
/*           <td>Не обработан</td>*/
/*           <td><a href="#">Обработан</a> / <a href="#">Удалить</a></td>*/
/*         </tr>*/
/*         <tr>*/
/*           <td>1</td>*/
/*           <td>19.03.2016</td>*/
/*           <td>Планшет, ноутбук, телефон</td>*/
/*           <td>11200</td>*/
/*           <td>Иван Иванов</td>*/
/*           <td>0772344321</td>*/
/*           <td>ivan@ukr.net</td>*/
/*           <td>Наличные</td>*/
/*           <td>планета Земля</td>*/
/*           <td>Доставка с 15:00 до 20:00</td>*/
/*           <td>Не обработан</td>*/
/*           <td><a href="#">Обработан</a> / <a href="#">Удалить</a></td>*/
/*         </tr>*/
/*         <tr>*/
/*           <td>1</td>*/
/*           <td>19.03.2016</td>*/
/*           <td>Планшет, ноутбук, телефон</td>*/
/*           <td>11200</td>*/
/*           <td>Иван Иванов</td>*/
/*           <td>0772344321</td>*/
/*           <td>ivan@ukr.net</td>*/
/*           <td>Наличные</td>*/
/*           <td>планета Земля</td>*/
/*           <td>Доставка с 15:00 до 20:00</td>*/
/*           <td>Не обработан</td>*/
/*           <td><a href="#">Обработан</a> / <a href="#">Удалить</a></td>*/
/*         </tr>*/
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
