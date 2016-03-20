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
        <tr>
          <td>123</td>
          <td>Планшет</td>
          <td>1</td>
          <td>3500</td>
          <td>3500</td>
          <td><a href=\"#\">Удалить</a></td>
        </tr>
        <tr>
          <td>123</td>
          <td>Планшет</td>
          <td>1</td>
          <td>3500</td>
          <td>3500</td>
          <td><a href=\"#\">Удалить</a></td>
        </tr>
        <tr>
          <td>123</td>
          <td>Планшет</td>
          <td>1</td>
          <td>3500</td>
          <td>3500</td>
          <td><a href=\"#\">Удалить</a></td>
        </tr>
        <tr>
          <td colspan=\"5\" align=\"right\"><strong>Общая сумма, грн.:</strong></td>
          <td style=\"font-size: 18px;\">10500</td>
        </tr>
      </tbody>
    </table>
    </div>
    <div class=\"row\">
      <div class=\"col-xs-8 col-sm-8 col-md-10 col-lg-10\">
      </div>
      <div class=\"col-xs-4 col-sm-4 col-md-2 col-lg-2\">
        <button type=\"button\" class=\"btn btn-primary\">Оформить заказ</button>
      </div>
    </div>
  </div>
  <br>
  <br>



";
    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        // line 79
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
        return array (  129 => 79,  126 => 78,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 4,  32 => 3,  11 => 1,);
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
/*         <tr>*/
/*           <td>123</td>*/
/*           <td>Планшет</td>*/
/*           <td>1</td>*/
/*           <td>3500</td>*/
/*           <td>3500</td>*/
/*           <td><a href="#">Удалить</a></td>*/
/*         </tr>*/
/*         <tr>*/
/*           <td>123</td>*/
/*           <td>Планшет</td>*/
/*           <td>1</td>*/
/*           <td>3500</td>*/
/*           <td>3500</td>*/
/*           <td><a href="#">Удалить</a></td>*/
/*         </tr>*/
/*         <tr>*/
/*           <td>123</td>*/
/*           <td>Планшет</td>*/
/*           <td>1</td>*/
/*           <td>3500</td>*/
/*           <td>3500</td>*/
/*           <td><a href="#">Удалить</a></td>*/
/*         </tr>*/
/*         <tr>*/
/*           <td colspan="5" align="right"><strong>Общая сумма, грн.:</strong></td>*/
/*           <td style="font-size: 18px;">10500</td>*/
/*         </tr>*/
/*       </tbody>*/
/*     </table>*/
/*     </div>*/
/*     <div class="row">*/
/*       <div class="col-xs-8 col-sm-8 col-md-10 col-lg-10">*/
/*       </div>*/
/*       <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">*/
/*         <button type="button" class="btn btn-primary">Оформить заказ</button>*/
/*       </div>*/
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
