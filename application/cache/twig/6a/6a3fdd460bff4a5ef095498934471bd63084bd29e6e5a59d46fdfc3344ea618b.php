<?php

/* create_order.twig */
class __TwigTemplate_8bfae374475e18e59870d179862fdc3d6869c10b5e9feb3b74547301483ccd01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main_template.twig", "create_order.twig", 1);
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
      <div class=\"col-xs-1 col-sm-2 col-md-3 col-lg-3\"></div>
      ";
        // line 20
        echo form_open("/main/save_order");
        echo "
      <div class=\"form-horizontal col-xs-10 col-sm-8 col-md-6 col-lg-6\" role=\"form\" autocomplete>
        <div class=\"form-group\">
          <label class=\"col-sm-2 col-md-4 col-lg-3 control-label\">Имя</label>
          <div class=\"col-sm-10 col-md-8 col-lg-9\">
            <input class=\"form-control\" name=\"name\" type=\"text\" required autofocus>
          </div>
        </div>
  
        <div class=\"form-group\">
          <label class=\"col-sm-2 col-md-4 col-lg-3 control-label\">Фамилия</label>
          <div class=\"col-sm-10 col-md-8 col-lg-9\">
            <input class=\"form-control\" name=\"surname\" type=\"text\" required>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 col-md-4 col-lg-3 control-label\">E-mail</label>
          <div class=\"col-sm-10 col-md-8 col-lg-9\">
            <input class=\"form-control\" name=\"email\" type=\"email\" required>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 col-md-4 col-lg-3 control-label\">Телефон</label>
          <div class=\"col-sm-10 col-md-8 col-lg-9\">
            <input class=\"form-control\" name=\"tel\" type=\"tel\" required>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 col-md-4 col-lg-3 control-label\">Адрес доставки</label>
          <div class=\"col-sm-10 col-md-8 col-lg-9\">
            <input class=\"form-control\" name=\"address\" type=\"text\" required>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 col-md-4 col-lg-3 control-label\">Форма оплаты</label>
          <div class=\"col-sm-10 col-md-8 col-lg-9\">
            <select class=\"form-control\" name=\"pay_meth\" type=\"select\" required>
              <option value=\"1\" disabled=\"\" selected=\"selected\"></option>
              <option value=\"Наличные\">Наличные</option>
              <option value=\"Безнал\">Банковский перевод</option>
              <option value=\"Карта ПБ\">Карта ПриватБанк</option>
            </select>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 col-md-4 col-lg-3 control-label\">Дополнительно</label>
          <div class=\"col-sm-10 col-md-8 col-lg-9\">
            <textarea class=\"form-control\" name=\"additional\" type=\"textarea\" rows=\"4\"></textarea>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-sm-2 col-md-4 col-lg-3 control-label\"></label>
          <div class=\"col-sm-10 col-md-8 col-lg-9\">
            <input class=\"form-control btn-primary\" type=\"submit\">
          </div>
        </div>
      </div>
      ";
        // line 83
        echo form_close();
        echo "
      <div class=\"col-xs-1 col-sm-2 col-md-3 col-lg-3\"></div>
    </div>
  </div>
  <br>
  <br>



";
    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        // line 95
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "create_order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 95,  148 => 94,  134 => 83,  68 => 20,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 4,  32 => 3,  11 => 1,);
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
/*       <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>*/
/*       {{ form_open ('/main/save_order') }}*/
/*       <div class="form-horizontal col-xs-10 col-sm-8 col-md-6 col-lg-6" role="form" autocomplete>*/
/*         <div class="form-group">*/
/*           <label class="col-sm-2 col-md-4 col-lg-3 control-label">Имя</label>*/
/*           <div class="col-sm-10 col-md-8 col-lg-9">*/
/*             <input class="form-control" name="name" type="text" required autofocus>*/
/*           </div>*/
/*         </div>*/
/*   */
/*         <div class="form-group">*/
/*           <label class="col-sm-2 col-md-4 col-lg-3 control-label">Фамилия</label>*/
/*           <div class="col-sm-10 col-md-8 col-lg-9">*/
/*             <input class="form-control" name="surname" type="text" required>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <label class="col-sm-2 col-md-4 col-lg-3 control-label">E-mail</label>*/
/*           <div class="col-sm-10 col-md-8 col-lg-9">*/
/*             <input class="form-control" name="email" type="email" required>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <label class="col-sm-2 col-md-4 col-lg-3 control-label">Телефон</label>*/
/*           <div class="col-sm-10 col-md-8 col-lg-9">*/
/*             <input class="form-control" name="tel" type="tel" required>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <label class="col-sm-2 col-md-4 col-lg-3 control-label">Адрес доставки</label>*/
/*           <div class="col-sm-10 col-md-8 col-lg-9">*/
/*             <input class="form-control" name="address" type="text" required>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <label class="col-sm-2 col-md-4 col-lg-3 control-label">Форма оплаты</label>*/
/*           <div class="col-sm-10 col-md-8 col-lg-9">*/
/*             <select class="form-control" name="pay_meth" type="select" required>*/
/*               <option value="1" disabled="" selected="selected"></option>*/
/*               <option value="Наличные">Наличные</option>*/
/*               <option value="Безнал">Банковский перевод</option>*/
/*               <option value="Карта ПБ">Карта ПриватБанк</option>*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <label class="col-sm-2 col-md-4 col-lg-3 control-label">Дополнительно</label>*/
/*           <div class="col-sm-10 col-md-8 col-lg-9">*/
/*             <textarea class="form-control" name="additional" type="textarea" rows="4"></textarea>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <label class="col-sm-2 col-md-4 col-lg-3 control-label"></label>*/
/*           <div class="col-sm-10 col-md-8 col-lg-9">*/
/*             <input class="form-control btn-primary" type="submit">*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ form_close() }}*/
/*       <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>*/
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
