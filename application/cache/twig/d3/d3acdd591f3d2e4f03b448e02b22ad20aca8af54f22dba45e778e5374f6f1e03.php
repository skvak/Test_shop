<?php

/* admin_goods.twig */
class __TwigTemplate_10d04269bbbc5d515dfc84a2a0eb080fe97099d19dee7782400418c44b99524e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_template.twig", "admin_goods.twig", 1);
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
    ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : null), "html", null, true);
        echo "

    ";
        // line 21
        echo form_open("/admin/add_product");
        echo "
        <div class=\"form well\" role=\"form\" style=\"margin-right: 1%;\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
              <div class=\"form-group\">
                <label for=\"category\">Категория:</label>
                <select type=\"select\" name=\"cat_id\" class=\"form-control\" required>
                  <option value=\"\" selected=\"\" hidden=\"\"></option>
                  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 30
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "cat_name", array()), "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </select> 
              </div>

              <div class=\"form-group\">
                <label for=\"description\">Наименование:</label>
                <input type=\"text\" class=\"form-control\" name=\"name\" required>
              </div>

              <div class=\"form-group\">
                <label for=\"description\">Описание:</label>
                <textarea type=\"text\" class=\"form-control\" name=\"description\" rows=\"3\" required></textarea>
              </div>
            </div>
            
            <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
              <div class=\"form-group\">
                <label for=\"description\">Цена:</label>
                <input type=\"number\" class=\"form-control\" name=\"price\" min=\"0\" required>
              </div>

              <div class=\"form-group\">
                <label for=\"description\">Количество:</label>
                <input type=\"number\" class=\"form-control\" name=\"qty\" min=\"0\" required>
              </div>

              <div class=\"form-group\">
                <label for=\"description\">Дополнительно:</label>
                <textarea type=\"text\" class=\"form-control\" name=\"additional\" rows=\"3\" required></textarea>
              </div>
            </div>

            <div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">
              <div class=\"form-group\">
                <label for=\"description\">Фото:</label>
                <input type=\"text\" class=\"form-control\" name=\"photo\">
              </div>

              <div class=\"form-group\">
                <label for=\"description\">Спецпредложение:</label>
                <select type=\"select\" class=\"form-control\" name=\"spec\" required>
                  <option value=\"1\">Да</option>
                  <option value=\"0\" selected>Нет</option>
                </select>
              </div>
              <br>
              <br>
              <button type=\"submit\" class=\"btn-primary\">Добавить</button>
              <button type=\"reset\" class=\"btn-primary\">Очистить</button>
            </div>  
          </div> 
        </div>
      ";
        // line 83
        echo form_close();
        echo "

      <h3>Товары:</h3>            
      <table class=\"table table-hover\">
        <thead>
          <tr>
            <th>Код</th>
            <th>Категория</th>
            <th>Наименование</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Кол-во</th>
            <th>Дополнительно</th>
            <th>Фото</th>
            <th>Спецпредл.</th>
            <th>Продано</th>
            <th>Действия</th>         
          </tr>
        </thead>
        <tbody>
          ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["goods"]) ? $context["goods"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 104
            echo "            <tr>
              <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "id", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "cat_name", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "name", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "description", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "price", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "qty", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "additional", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "photo", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "spec", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "sold", array()), "html", null, true);
            echo "</td>
              <td><a href=\"";
            // line 115
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "admin/delete/";
            echo twig_escape_filter($this->env, (isset($context["table"]) ? $context["table"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "id", array()), "html", null, true);
            echo "\">Удалить</a></td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "        </tbody>
      </table> 
    </div>
  </div>
  <br>
  <br>



";
    }

    // line 129
    public function block_footer($context, array $blocks = array())
    {
        // line 130
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_goods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 130,  247 => 129,  234 => 118,  221 => 115,  217 => 114,  213 => 113,  209 => 112,  205 => 111,  201 => 110,  197 => 109,  193 => 108,  189 => 107,  185 => 106,  181 => 105,  178 => 104,  174 => 103,  151 => 83,  98 => 32,  87 => 30,  83 => 29,  72 => 21,  67 => 19,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 4,  32 => 3,  11 => 1,);
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
/*     {{ info }}*/
/* */
/*     {{ form_open ('/admin/add_product') }}*/
/*         <div class="form well" role="form" style="margin-right: 1%;">*/
/*           <div class="row">*/
/*             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">*/
/*               <div class="form-group">*/
/*                 <label for="category">Категория:</label>*/
/*                 <select type="select" name="cat_id" class="form-control" required>*/
/*                   <option value="" selected="" hidden=""></option>*/
/*                   {% for cat in categories %}*/
/*                     <option value="{{cat.id}}">{{cat.cat_name}}</option>*/
/*                   {% endfor %}*/
/*                 </select> */
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label for="description">Наименование:</label>*/
/*                 <input type="text" class="form-control" name="name" required>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label for="description">Описание:</label>*/
/*                 <textarea type="text" class="form-control" name="description" rows="3" required></textarea>*/
/*               </div>*/
/*             </div>*/
/*             */
/*             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">*/
/*               <div class="form-group">*/
/*                 <label for="description">Цена:</label>*/
/*                 <input type="number" class="form-control" name="price" min="0" required>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label for="description">Количество:</label>*/
/*                 <input type="number" class="form-control" name="qty" min="0" required>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label for="description">Дополнительно:</label>*/
/*                 <textarea type="text" class="form-control" name="additional" rows="3" required></textarea>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">*/
/*               <div class="form-group">*/
/*                 <label for="description">Фото:</label>*/
/*                 <input type="text" class="form-control" name="photo">*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label for="description">Спецпредложение:</label>*/
/*                 <select type="select" class="form-control" name="spec" required>*/
/*                   <option value="1">Да</option>*/
/*                   <option value="0" selected>Нет</option>*/
/*                 </select>*/
/*               </div>*/
/*               <br>*/
/*               <br>*/
/*               <button type="submit" class="btn-primary">Добавить</button>*/
/*               <button type="reset" class="btn-primary">Очистить</button>*/
/*             </div>  */
/*           </div> */
/*         </div>*/
/*       {{ form_close() }}*/
/* */
/*       <h3>Товары:</h3>            */
/*       <table class="table table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <th>Код</th>*/
/*             <th>Категория</th>*/
/*             <th>Наименование</th>*/
/*             <th>Описание</th>*/
/*             <th>Цена</th>*/
/*             <th>Кол-во</th>*/
/*             <th>Дополнительно</th>*/
/*             <th>Фото</th>*/
/*             <th>Спецпредл.</th>*/
/*             <th>Продано</th>*/
/*             <th>Действия</th>         */
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           {% for prod in goods %}*/
/*             <tr>*/
/*               <td>{{prod.id}}</td>*/
/*               <td>{{prod.cat_name}}</td>*/
/*               <td>{{prod.name}}</td>*/
/*               <td>{{prod.description}}</td>*/
/*               <td>{{prod.price}}</td>*/
/*               <td>{{prod.qty}}</td>*/
/*               <td>{{prod.additional}}</td>*/
/*               <td>{{prod.photo}}</td>*/
/*               <td>{{prod.spec}}</td>*/
/*               <td>{{prod.sold}}</td>*/
/*               <td><a href="{{base_url()}}admin/delete/{{table}}/{{prod.id}}">Удалить</a></td>*/
/*             </tr>*/
/*           {% endfor %}*/
/*         </tbody>*/
/*       </table> */
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
