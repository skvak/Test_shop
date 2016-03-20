<?php

/* smartphone.twig */
class __TwigTemplate_32c55f699433f3160a45b3cb0ba8d82d32684677b58e138a06c351aad87fbdf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main_template.twig", "smartphone.twig", 1);
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
<h3>Смартфоны</h2>    
  <div class=\"row\">
    <div class=\"col-sm-3\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Спецпредложение</div>
        <div class=\"panel-body\">
          <div style=\"width:46%; float:left\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
          </div>
          <div style=\"width:46%; margin-left:55%\">
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
          </div>
        </div>
        <div class=\"panel-footer\">
          <button type=\"button\" class=\"btn btn-primary\">Подробнее</button>
          <button type=\"button\" class=\"btn btn-primary\">В корзину</button>
        </div>
      </div>
    </div>
    <div class=\"col-sm-3\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Спецпредложение</div>
        <div class=\"panel-body\">
          <div style=\"width:46%; float:left\">
            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
          </div>
          <div style=\"width:46%; margin-left:55%\">
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
          </div>
        </div>
        <div class=\"panel-footer\">
          <button type=\"button\" class=\"btn btn-primary\">Подробнее</button>
          <button type=\"button\" class=\"btn btn-primary\">В корзину</button>
        </div>
      </div>
    </div><div class=\"col-sm-3\">
    <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">Спецпредложение</div>
        <div class=\"panel-body\">
          <div style=\"width:46%; float:left\">
            <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
          </div>
          <div style=\"width:46%; margin-left:55%\">
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
          </div>
        </div>
        <div class=\"panel-footer\">
          <button type=\"button\" class=\"btn btn-primary\">Подробнее</button>
          <button type=\"button\" class=\"btn btn-primary\">В корзину</button>
        </div>
      </div>
    </div>
    <div class=\"col-sm-3\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Спецпредложение</div>
        <div class=\"panel-body\">
          <div style=\"width:46%; float:left\">
            <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
          </div>
          <div style=\"width:46%; margin-left:55%\">
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
          </div>
        </div>
        <div class=\"panel-footer\">
          <button type=\"button\" class=\"btn btn-primary\">Подробнее</button>
          <button type=\"button\" class=\"btn btn-primary\">В корзину</button>
        </div>
      </div>
    </div>
    <div class=\"col-sm-3\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Спецпредложение</div>
        <div class=\"panel-body\">
          <div style=\"width:46%; float:left\">
            <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
          </div>
          <div style=\"width:46%; margin-left:55%\">
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
          </div>
        </div>
        <div class=\"panel-footer\">
          <button type=\"button\" class=\"btn btn-primary\">Подробнее</button>
          <button type=\"button\" class=\"btn btn-primary\">В корзину</button>
        </div>
      </div>
    </div>
    <div class=\"col-sm-3\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Спецпредложение</div>
        <div class=\"panel-body\">
          <div style=\"width:46%; float:left\">
            <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
          </div>
          <div style=\"width:46%; margin-left:55%\">
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
          </div>
        </div>
        <div class=\"panel-footer\">
          <button type=\"button\" class=\"btn btn-primary\">Подробнее</button>
          <button type=\"button\" class=\"btn btn-primary\">В корзину</button>
        </div>
      </div>
    </div>
    <div class=\"col-sm-3\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Спецпредложение</div>
        <div class=\"panel-body\">
          <div style=\"width:46%; float:left\">
            <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
          </div>
          <div style=\"width:46%; margin-left:55%\">
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
          </div>
        </div>
        <div class=\"panel-footer\">
          <button type=\"button\" class=\"btn btn-primary\">Подробнее</button>
          <button type=\"button\" class=\"btn btn-primary\">В корзину</button>
        </div>
      </div>
    </div>
    <div class=\"col-sm-3\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Спецпредложение</div>
        <div class=\"panel-body\">
          <div style=\"width:46%; float:left\">
            <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
          </div>
          <div style=\"width:46%; margin-left:55%\">
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
          </div>
        </div>
        <div class=\"panel-footer\">
          <button type=\"button\" class=\"btn btn-primary\">Подробнее</button>
          <button type=\"button\" class=\"btn btn-primary\">В корзину</button>
        </div>
      </div>
    </div>
    <div class=\"col-sm-3\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Спецпредложение</div>
        <div class=\"panel-body\">
          <div style=\"width:46%; float:left\">
            <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/posipaka.jpg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
          </div>
          <div style=\"width:46%; margin-left:55%\">
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
            <p>Описание</p>
          </div>
        </div>
        <div class=\"panel-footer\">
          <button type=\"button\" class=\"btn btn-primary\">Подробнее</button>
          <button type=\"button\" class=\"btn btn-primary\">В корзину</button>
        </div>
      </div>
    </div>





  </div>
</div><br>

";
    }

    // line 209
    public function block_footer($context, array $blocks = array())
    {
        // line 210
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "smartphone.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 210,  284 => 209,  256 => 184,  233 => 164,  210 => 144,  187 => 124,  164 => 104,  141 => 84,  118 => 64,  96 => 45,  73 => 25,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 4,  32 => 3,  11 => 1,);
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
/* <h3>Смартфоны</h2>    */
/*   <div class="row">*/
/*     <div class="col-sm-3">*/
/*       <div class="panel panel-primary">*/
/*         <div class="panel-heading">Спецпредложение</div>*/
/*         <div class="panel-body">*/
/*           <div style="width:46%; float:left">*/
/*             <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="width:100%" alt="Image">*/
/*           </div>*/
/*           <div style="width:46%; margin-left:55%">*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*           <button type="button" class="btn btn-primary">Подробнее</button>*/
/*           <button type="button" class="btn btn-primary">В корзину</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-sm-3">*/
/*       <div class="panel panel-primary">*/
/*         <div class="panel-heading">Спецпредложение</div>*/
/*         <div class="panel-body">*/
/*           <div style="width:46%; float:left">*/
/*             <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="width:100%" alt="Image">*/
/*           </div>*/
/*           <div style="width:46%; margin-left:55%">*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*           <button type="button" class="btn btn-primary">Подробнее</button>*/
/*           <button type="button" class="btn btn-primary">В корзину</button>*/
/*         </div>*/
/*       </div>*/
/*     </div><div class="col-sm-3">*/
/*     <div class="panel panel-primary">*/
/*       <div class="panel-heading">Спецпредложение</div>*/
/*         <div class="panel-body">*/
/*           <div style="width:46%; float:left">*/
/*             <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="width:100%" alt="Image">*/
/*           </div>*/
/*           <div style="width:46%; margin-left:55%">*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*           <button type="button" class="btn btn-primary">Подробнее</button>*/
/*           <button type="button" class="btn btn-primary">В корзину</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-sm-3">*/
/*       <div class="panel panel-primary">*/
/*         <div class="panel-heading">Спецпредложение</div>*/
/*         <div class="panel-body">*/
/*           <div style="width:46%; float:left">*/
/*             <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="width:100%" alt="Image">*/
/*           </div>*/
/*           <div style="width:46%; margin-left:55%">*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*           <button type="button" class="btn btn-primary">Подробнее</button>*/
/*           <button type="button" class="btn btn-primary">В корзину</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-sm-3">*/
/*       <div class="panel panel-primary">*/
/*         <div class="panel-heading">Спецпредложение</div>*/
/*         <div class="panel-body">*/
/*           <div style="width:46%; float:left">*/
/*             <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="width:100%" alt="Image">*/
/*           </div>*/
/*           <div style="width:46%; margin-left:55%">*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*           <button type="button" class="btn btn-primary">Подробнее</button>*/
/*           <button type="button" class="btn btn-primary">В корзину</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-sm-3">*/
/*       <div class="panel panel-primary">*/
/*         <div class="panel-heading">Спецпредложение</div>*/
/*         <div class="panel-body">*/
/*           <div style="width:46%; float:left">*/
/*             <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="width:100%" alt="Image">*/
/*           </div>*/
/*           <div style="width:46%; margin-left:55%">*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*           <button type="button" class="btn btn-primary">Подробнее</button>*/
/*           <button type="button" class="btn btn-primary">В корзину</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-sm-3">*/
/*       <div class="panel panel-primary">*/
/*         <div class="panel-heading">Спецпредложение</div>*/
/*         <div class="panel-body">*/
/*           <div style="width:46%; float:left">*/
/*             <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="width:100%" alt="Image">*/
/*           </div>*/
/*           <div style="width:46%; margin-left:55%">*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*           <button type="button" class="btn btn-primary">Подробнее</button>*/
/*           <button type="button" class="btn btn-primary">В корзину</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-sm-3">*/
/*       <div class="panel panel-primary">*/
/*         <div class="panel-heading">Спецпредложение</div>*/
/*         <div class="panel-body">*/
/*           <div style="width:46%; float:left">*/
/*             <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="width:100%" alt="Image">*/
/*           </div>*/
/*           <div style="width:46%; margin-left:55%">*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*           <button type="button" class="btn btn-primary">Подробнее</button>*/
/*           <button type="button" class="btn btn-primary">В корзину</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-sm-3">*/
/*       <div class="panel panel-primary">*/
/*         <div class="panel-heading">Спецпредложение</div>*/
/*         <div class="panel-body">*/
/*           <div style="width:46%; float:left">*/
/*             <img src="{{base_url()}}assets/img/posipaka.jpg" class="img-responsive" style="width:100%" alt="Image">*/
/*           </div>*/
/*           <div style="width:46%; margin-left:55%">*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*             <p>Описание</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*           <button type="button" class="btn btn-primary">Подробнее</button>*/
/*           <button type="button" class="btn btn-primary">В корзину</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/*   </div>*/
/* </div><br>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {{parent()}}*/
/* {% endblock %}*/
