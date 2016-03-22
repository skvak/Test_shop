<?php

/* product.twig */
class __TwigTemplate_56ac9ea72391939840f945b3d8690d884f8c85244df4449c6acaebf196617d0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main_template.twig", "product.twig", 1);
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
<h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), 0, array()), "name", array()), "html", null, true);
        echo "</h3>    
  <div class=\"row\">
    <div class=\"col-sm-12 col-md-12 col-lg-12\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), 0, array()), "name", array()), "html", null, true);
        echo " (Код товара: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), 0, array()), "id", array()), "html", null, true);
        echo ")</div>
        <div class=\"panel-body\">
          <div class=\"col-xs-6 col-sm-4 col-md-4 col-lg-4\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"height: 200px; width: 200px;\" alt=\"Image\">
          </div>
          <div class=\"well well-lg col-xs-6 hidden-sm hidden-md hidden-lg\">
            <p>Цена: ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), 0, array()), "price", array()), "html", null, true);
        echo " грн.</p>
            <input type=\"number\" name=\"qty\" min=\"1\" value=\"1\"><br><br>
            <button type=\"button\" class=\"btn btn-primary btn-block\">В корзину</button>
          </div>
          <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
            <strong>Наименование:</strong><p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), 0, array()), "name", array()), "html", null, true);
        echo "</p>
            <strong>Описание:</strong><p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), 0, array()), "description", array()), "html", null, true);
        echo "</p>
            <strong>Дополнительно:</strong><p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), 0, array()), "additional", array()), "html", null, true);
        echo "</p>
            <strong>Наличие:</strong><p>Есть в наличии</p>
          </div>
          <div class=\"well well-lg hidden-xs col-sm-4 col-md-4 col-lg-4\">
            <p>Цена: ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), 0, array()), "price", array()), "html", null, true);
        echo " грн.</p>
            ";
        // line 40
        echo form_open("/main/add_to_cart");
        echo "
              ";
        // line 41
        echo form_hidden("url", (isset($context["current_url"]) ? $context["current_url"] : null));
        echo "
              ";
        // line 42
        echo form_hidden("id", $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), 0, array()), "id", array()));
        echo "
              ";
        // line 43
        echo form_hidden("name", $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), 0, array()), "name", array()));
        echo "
              ";
        // line 44
        echo form_hidden("price", $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), 0, array()), "price", array()));
        echo "
              <input type=\"number\" min=\"1\" value=\"1\" name=\"qty\"><br><br>
              <input type=\"submit\" value=\"В корзину\" class=\"btn-primary btn-block\">
            ";
        // line 47
        echo form_close();
        echo "
          </div>
         
        </div>
        <div class=\"panel-footer\">
        </div>
      </div>
    </div>
  </div>
</div><br><br>

";
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 61,  152 => 60,  136 => 47,  130 => 44,  126 => 43,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  103 => 35,  99 => 34,  95 => 33,  87 => 28,  81 => 25,  73 => 22,  66 => 18,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 4,  32 => 3,  11 => 1,);
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
/* <div class="container">*/
/* <h3>{{product.0.name}}</h3>    */
/*   <div class="row">*/
/*     <div class="col-sm-12 col-md-12 col-lg-12">*/
/*       <div class="panel panel-primary">*/
/*         <div class="panel-heading">{{product.0.name}} (Код товара: {{product.0.id}})</div>*/
/*         <div class="panel-body">*/
/*           <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">*/
/*             <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="height: 200px; width: 200px;" alt="Image">*/
/*           </div>*/
/*           <div class="well well-lg col-xs-6 hidden-sm hidden-md hidden-lg">*/
/*             <p>Цена: {{product.0.price}} грн.</p>*/
/*             <input type="number" name="qty" min="1" value="1"><br><br>*/
/*             <button type="button" class="btn btn-primary btn-block">В корзину</button>*/
/*           </div>*/
/*           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">*/
/*             <strong>Наименование:</strong><p>{{product.0.name}}</p>*/
/*             <strong>Описание:</strong><p>{{product.0.description}}</p>*/
/*             <strong>Дополнительно:</strong><p>{{product.0.additional}}</p>*/
/*             <strong>Наличие:</strong><p>Есть в наличии</p>*/
/*           </div>*/
/*           <div class="well well-lg hidden-xs col-sm-4 col-md-4 col-lg-4">*/
/*             <p>Цена: {{product.0.price}} грн.</p>*/
/*             {{ form_open ('/main/add_to_cart') }}*/
/*               {{ form_hidden ('url', current_url ) }}*/
/*               {{ form_hidden ('id', product.0.id ) }}*/
/*               {{ form_hidden ('name', product.0.name ) }}*/
/*               {{ form_hidden ('price', product.0.price ) }}*/
/*               <input type="number" min="1" value="1" name="qty"><br><br>*/
/*               <input type="submit" value="В корзину" class="btn-primary btn-block">*/
/*             {{ form_close() }}*/
/*           </div>*/
/*          */
/*         </div>*/
/*         <div class="panel-footer">*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div><br><br>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {{parent()}}*/
/* {% endblock %}*/
