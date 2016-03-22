<?php

/* main_template.twig */
class __TwigTemplate_da693e8d6a345699c733d9cccbb27752c8d962477cb614b2e5ab2cfe94919966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

";
        // line 6
        $this->displayBlock('scripts', $context, $blocks);
        // line 35
        echo "
<body>

";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('menu', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 86
        echo "</body>
</html>

";
    }

    // line 6
    public function block_scripts($context, array $blocks = array())
    {
        // line 7
        echo "
  <title>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), 0, array()), "cat_name", array()), "html", null, true);
        echo "</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/bootstrap.min.css\">
  <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-1.11.3.js\"></script>
  <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>
  <style>
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    .jumbotron {
      margin-bottom: 0;
      padding-top: 0;
      padding-bottom: 0;
    }
    .btn {
      margin-left: 32%;
    }
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>

";
    }

    // line 38
    public function block_header($context, array $blocks = array())
    {
        // line 39
        echo "
<div class=\"jumbotron\">
  <div class=\"container text-center\">
    <h1>Online Shop</h1>      
    <p>\"Ларёк\"</p>
  </div>
</div>

";
    }

    // line 49
    public function block_menu($context, array $blocks = array())
    {
        // line 50
        echo "
<nav class=\"navbar navbar-inverse\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>                        
      </button>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">Главная</a></li>
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 64
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "main/category/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "cat_name", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "main/cart\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> Корзина  <span class=\"glyphicon glyphicon-menu-right\"></span>  <span class=\"label label-default\">Товаров ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart_summary"]) ? $context["cart_summary"] : null), "amt", array()), "html", null, true);
        echo " на сумму: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart_summary"]) ? $context["cart_summary"] : null), "sum", array()), "html", null, true);
        echo "</span></a></li>
      </ul>
    </div>
  </div>
</nav>

";
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        // line 80
        echo "
<footer class=\"container-fluid text-center\">
  <p>Online Shop \"Ларёк\" By Alexandr Kvak</p>  
</footer>

";
    }

    public function getTemplateName()
    {
        return "main_template.twig";
    }

    public function getDebugInfo()
    {
        return array (  189 => 80,  186 => 79,  181 => 76,  166 => 68,  162 => 66,  149 => 64,  145 => 63,  141 => 62,  127 => 50,  124 => 49,  112 => 39,  109 => 38,  83 => 13,  79 => 12,  75 => 11,  68 => 8,  65 => 7,  62 => 6,  55 => 86,  53 => 79,  50 => 78,  48 => 76,  45 => 75,  43 => 49,  40 => 48,  38 => 38,  33 => 35,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/* {% block scripts %}*/
/* */
/*   <title>{{ title }}{{ goods.0.cat_name }}</title>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <link rel="stylesheet" href="{{base_url()}}assets/css/bootstrap.min.css">*/
/*   <script src="{{base_url()}}assets/js/jquery-1.11.3.js"></script>*/
/*   <script src="{{base_url()}}assets/js/bootstrap.min.js"></script>*/
/*   <style>*/
/*     .navbar {*/
/*       margin-bottom: 50px;*/
/*       border-radius: 0;*/
/*     }*/
/*     .jumbotron {*/
/*       margin-bottom: 0;*/
/*       padding-top: 0;*/
/*       padding-bottom: 0;*/
/*     }*/
/*     .btn {*/
/*       margin-left: 32%;*/
/*     }*/
/*     footer {*/
/*       background-color: #f2f2f2;*/
/*       padding: 25px;*/
/*     }*/
/*   </style>*/
/* </head>*/
/* */
/* {% endblock %}*/
/* */
/* <body>*/
/* */
/* {% block header %}*/
/* */
/* <div class="jumbotron">*/
/*   <div class="container text-center">*/
/*     <h1>Online Shop</h1>      */
/*     <p>"Ларёк"</p>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* */
/* <nav class="navbar navbar-inverse">*/
/*   <div class="container">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>                        */
/*       </button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse" id="myNavbar">*/
/*       <ul class="nav navbar-nav">*/
/*         <li><a href="{{base_url()}}">Главная</a></li>*/
/*         {% for cat in categories %}*/
/*           <li><a href="{{base_url()}}main/category/{{cat.id}}">{{cat.cat_name}}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li><a href="{{base_url()}}main/cart"><span class="glyphicon glyphicon-shopping-cart"></span> Корзина  <span class="glyphicon glyphicon-menu-right"></span>  <span class="label label-default">Товаров {{ cart_summary.amt }} на сумму: {{ cart_summary.sum }}</span></a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* <footer class="container-fluid text-center">*/
/*   <p>Online Shop "Ларёк" By Alexandr Kvak</p>  */
/* </footer>*/
/* */
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
/* */
