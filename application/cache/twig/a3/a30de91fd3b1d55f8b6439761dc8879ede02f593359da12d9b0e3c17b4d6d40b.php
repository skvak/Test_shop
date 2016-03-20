<?php

/* admin_template.twig */
class __TwigTemplate_61e7c970d4f6358a74b8c1532eb9e3f7e5c5d03dc076916563988f6b99bf1422 extends Twig_Template
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
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('footer', $context, $blocks);
        // line 85
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
      margin-left: 7%;
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
    <h1>Admin panel</h1>      
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
        echo "admin\">Заказы</a></li>
        <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "admin/categories\">Категории</a></li>
        <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "admin/goods\">Товары</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon glyphicon-home\"></span> На сайт</a></li>
      </ul>
    </div>
  </div>
</nav>

";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        // line 79
        echo "
<footer class=\"container-fluid text-center\">
  <p>Online Shop \"Ларёк\" By Alexandr Kvak</p>  
</footer>

";
    }

    public function getTemplateName()
    {
        return "admin_template.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 79,  170 => 78,  165 => 75,  154 => 67,  148 => 64,  144 => 63,  140 => 62,  126 => 50,  123 => 49,  111 => 39,  108 => 38,  82 => 13,  78 => 12,  74 => 11,  68 => 8,  65 => 7,  62 => 6,  55 => 85,  53 => 78,  50 => 77,  48 => 75,  45 => 74,  43 => 49,  40 => 48,  38 => 38,  33 => 35,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/* {% block scripts %}*/
/* */
/*   <title>{{ title }}</title>*/
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
/*       margin-left: 7%;*/
/*     }*/
/*     footer {*/
/*     background-color: #f2f2f2;*/
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
/*     <h1>Admin panel</h1>      */
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
/*         <li><a href="{{base_url()}}admin">Заказы</a></li>*/
/*         <li><a href="{{base_url()}}admin/categories">Категории</a></li>*/
/*         <li><a href="{{base_url()}}admin/goods">Товары</a></li>*/
/*       </ul>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li><a href="{{base_url()}}"><span class="glyphicon glyphicon glyphicon-home"></span> На сайт</a></li>*/
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
