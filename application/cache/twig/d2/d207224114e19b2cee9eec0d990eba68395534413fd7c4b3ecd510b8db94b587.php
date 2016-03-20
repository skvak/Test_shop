<?php

/* admin_categories.twig */
class __TwigTemplate_35b2697d51d7c18f27f39a32c5dcfc2e7f8d950581b180d61e5448f067ed1b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_template.twig", "admin_categories.twig", 1);
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
    <h3>Категории:</h3>            
    <table class=\"table table-hover\">
      <thead>
        <tr>
          <th>Название</th>
          <th>Описание</th>
          <th>Действия</th>          
        </tr>
      </thead>
      <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 31
            echo "        <tr>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "cat_name", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "cat_desc", array()), "html", null, true);
            echo "</td>
          <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "admin/delete/";
            echo twig_escape_filter($this->env, (isset($context["table"]) ? $context["table"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\">Удалить</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        
      </tbody>
    </table>
    ";
        // line 40
        echo form_open("/admin/add_category");
        echo "
      <div class=\"form-inline well\" role=\"form\" style=\"margin-right: 1%;\">
        <div class=\"form-group\">
          <label for=\"category\">Категория:</label>
          <input type=\"text\" name=\"cat\" class=\"form-control\" size=\"30%\" required> 
        </div>
        <div class=\"form-group\" style=\"margin-left: 3%;\">
          <label for=\"description\">Описание:</label>
          <input type=\"text\" class=\"form-control\" name=\"description\" size=\"100%\" required>
        </div>
        <button type=\"submit\" class=\"btn-primary\">Добавить</button>
        <button type=\"reset\" class=\"btn-primary\">Очистить</button>
      </div>
    ";
        // line 53
        echo form_close();
        echo "
    </div>
  </div>
  <br>
  <br>



";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 64,  143 => 63,  130 => 53,  114 => 40,  109 => 37,  96 => 34,  92 => 33,  88 => 32,  85 => 31,  81 => 30,  67 => 19,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 4,  32 => 3,  11 => 1,);
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
/*     <h3>Категории:</h3>            */
/*     <table class="table table-hover">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>Название</th>*/
/*           <th>Описание</th>*/
/*           <th>Действия</th>          */
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% for cat in categories %}*/
/*         <tr>*/
/*           <td>{{cat.cat_name}}</td>*/
/*           <td>{{cat.cat_desc}}</td>*/
/*           <td><a href="{{base_url()}}admin/delete/{{table}}/{{cat.id}}">Удалить</a></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         */
/*       </tbody>*/
/*     </table>*/
/*     {{ form_open ('/admin/add_category') }}*/
/*       <div class="form-inline well" role="form" style="margin-right: 1%;">*/
/*         <div class="form-group">*/
/*           <label for="category">Категория:</label>*/
/*           <input type="text" name="cat" class="form-control" size="30%" required> */
/*         </div>*/
/*         <div class="form-group" style="margin-left: 3%;">*/
/*           <label for="description">Описание:</label>*/
/*           <input type="text" class="form-control" name="description" size="100%" required>*/
/*         </div>*/
/*         <button type="submit" class="btn-primary">Добавить</button>*/
/*         <button type="reset" class="btn-primary">Очистить</button>*/
/*       </div>*/
/*     {{ form_close() }}*/
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
