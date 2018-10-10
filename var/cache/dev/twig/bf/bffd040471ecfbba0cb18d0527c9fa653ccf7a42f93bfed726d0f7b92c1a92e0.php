<?php

/* pages/index.html.twig */
class __TwigTemplate_1a1fb28191534eb10faec1e9a9904ac8cadb3e1ca013000c171eef28a8233aec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "pages/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'banner' => array($this, 'block_banner'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Welcome | Bienvenu";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

";
        // line 8
        $this->displayBlock('banner', $context, $blocks);
        // line 170
        echo "



       \t<!--Section -->
       \t<div class=\"section section-pad bg-grey\">
       \t\t<div class=\"container\">
      \t\t\t<div class=\"row text-center\">
      \t\t\t</div>
   \t\t\t\t</div>
   \t\t\t</div>
       \t<!--End Section -->


       \t<!--Section -->
       \t<div class=\"section section-pad has-bg light dark-filter\">
       \t\t<div class=\"imagebg has-parallax\">
\t\t\t\t\t\t<img src=\"images/calc-bg.jpg\" alt=\"calc-bg\">
\t\t\t\t\t</div>
       \t\t<div class=\"container\">
       \t\t\t<div class=\"row row-vm\">
       \t\t\t</div>
       \t\t</div>
       \t</div>
       \t<!--End Section -->



      \t<!-- Features Box -->
      \t<div class=\"features-box section section-pad\">
      \t\t<div class=\"container\">
      \t\t\t<div class=\"row text-center\">
      \t\t\t</div>
      \t\t</div>
      \t</div>
      \t<!--End Features Box -->

        
       \t<!--Section -->
       \t<div class=\"section section-pad\">
       \t\t<div class=\"container\">
       \t\t</div>
       \t</div>
       \t<!--End Section -->

       \t<!--Section -->
       \t<div class=\"section section-pad bg-grey\">
       \t\t<div class=\"container\">
       \t\t</div>
       \t</div>
       \t<!--End Section -->

       \t<!--Section -->
       \t<div class=\"section section-pad\">
       \t\t<div class=\"container\">


       \t\t</div>
       \t</div>
       \t<!--End Section -->

       \t<!-- Section -->
\t\t<div class=\"section section-pad-sm cta-small light\">
\t\t\t<div class=\"cta-block\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row mobile-center\">
\t\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Section -->

       \t<!-- Section -->
\t\t<div class=\"section section-pad-md bg-grey\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"content row\">
\t\t\t\t\t<div class=\"owl-carousel has-carousel no-dots\"  data-items=\"6\" data-loop=\"true\" data-dots=\"false\" data-auto=\"false\">
\t\t\t\t\t\t<div class=\"logo-item\"><img alt=\"\" width=\"190\" height=\"82\" src=\"/images/cl-logo1.png\"></div>
\t\t\t\t\t\t<div class=\"logo-item\"><img alt=\"\" width=\"190\" height=\"82\" src=\"/images/cl-logo2.png\"></div>
\t\t\t\t\t\t<div class=\"logo-item\"><img alt=\"\" width=\"190\" height=\"82\" src=\"/images/cl-logo3.png\"></div>
\t\t\t\t\t\t<div class=\"logo-item\"><img alt=\"\" width=\"190\" height=\"82\" src=\"/images/cl-logo4.png\"></div>
\t\t\t\t\t\t<div class=\"logo-item\"><img alt=\"\" width=\"190\" height=\"82\" src=\"/images/cl-logo5.png\"></div>
\t\t\t\t\t\t<div class=\"logo-item\"><img alt=\"\" width=\"190\" height=\"82\" src=\"/images/cl-logo6.png\"></div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Section -->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_banner($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        // line 9
        echo "  <!-- Banner/Slider -->
      <header class=\"\">
        <div class=\"canvtitle\">
            <h1>Lines animation tile goes here !</h1>
            <h3>Smal Subtitle text here</h3>
            <button type=\"button\" class=\"btn btn-outline btn-text-red\" name=\"button\">Hello World !</button>
        </div>
        <canvas></canvas>
        <script src=\"https://code.jquery.com/jquery-1.11.1.min.js\"></script>
        <script>
            //CANVAS
            \$(function(){
              var canvas = document.querySelector('canvas'),
                  ctx = canvas.getContext('2d')
              canvas.width = window.innerWidth;
              canvas.height = window.innerHeight;
              ctx.lineWidth = .3;
              ctx.strokeStyle = (new Color(150)).style;

              var mousePosition = {
                x: 30 * canvas.width / 100,
                y: 30 * canvas.height / 100
              };

              var dots = {
                nb: 250,
                distance: 100,
                d_radius: 150,
                array: []
              };

              function colorValue(min) {
                return Math.floor(Math.random() * 255 + min);
              }

              function createColorStyle(r,g,b) {
                return 'rgba(' + r + ',' + g + ',' + b + ', 0.8)';
              }

              function mixComponents(comp1, weight1, comp2, weight2) {
                return (comp1 * weight1 + comp2 * weight2) / (weight1 + weight2);
              }

              function averageColorStyles(dot1, dot2) {
                var color1 = dot1.color,
                    color2 = dot2.color;

                var r = mixComponents(color1.r, dot1.radius, color2.r, dot2.radius),
                    g = mixComponents(color1.g, dot1.radius, color2.g, dot2.radius),
                    b = mixComponents(color1.b, dot1.radius, color2.b, dot2.radius);
                return createColorStyle(Math.floor(r), Math.floor(g), Math.floor(b));
              }

              function Color(min) {
                min = min || 0;
                this.r = colorValue(min);
                this.g = colorValue(min);
                this.b = colorValue(min);
                this.style = createColorStyle(this.r, this.g, this.b);
              }

              function Dot(){
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;

                this.vx = -.5 + Math.random();
                this.vy = -.5 + Math.random();

                this.radius = Math.random() * 2;

                this.color = new Color();
                console.log(this);
              }

              Dot.prototype = {
                draw: function(){
                  ctx.beginPath();
                  ctx.fillStyle = this.color.style;
                  ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
                  ctx.fill();
                }
              };

              function createDots(){
                for(i = 0; i < dots.nb; i++){
                  dots.array.push(new Dot());
                }
              }

              function moveDots() {
                for(i = 0; i < dots.nb; i++){

                  var dot = dots.array[i];

                  if(dot.y < 0 || dot.y > canvas.height){
                    dot.vx = dot.vx;
                    dot.vy = - dot.vy;
                  }
                  else if(dot.x < 0 || dot.x > canvas.width){
                    dot.vx = - dot.vx;
                    dot.vy = dot.vy;
                  }
                  dot.x += dot.vx;
                  dot.y += dot.vy;
                }
              }

              function connectDots() {
                for(i = 0; i < dots.nb; i++){
                  for(j = 0; j < dots.nb; j++){
                    i_dot = dots.array[i];
                    j_dot = dots.array[j];

                    if((i_dot.x - j_dot.x) < dots.distance && (i_dot.y - j_dot.y) < dots.distance && (i_dot.x - j_dot.x) > - dots.distance && (i_dot.y - j_dot.y) > - dots.distance){
                      if((i_dot.x - mousePosition.x) < dots.d_radius && (i_dot.y - mousePosition.y) < dots.d_radius && (i_dot.x - mousePosition.x) > - dots.d_radius && (i_dot.y - mousePosition.y) > - dots.d_radius){
                        ctx.beginPath();
                        ctx.strokeStyle = averageColorStyles(i_dot, j_dot);
                        ctx.moveTo(i_dot.x, i_dot.y);
                        ctx.lineTo(j_dot.x, j_dot.y);
                        ctx.stroke();
                        ctx.closePath();
                      }
                    }
                  }
                }
              }

              function drawDots() {
                for(i = 0; i < dots.nb; i++){
                  var dot = dots.array[i];
                  dot.draw();
                }
              }

              function animateDots() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                moveDots();
                connectDots();
                drawDots();

                requestAnimationFrame(animateDots);
              }

              \$('canvas').on('mousemove', function(e){
                mousePosition.x = e.pageX;
                mousePosition.y = e.pageY;
              });

              \$('canvas').on('mouseleave', function(e){
                mousePosition.x = canvas.width / 2;
                mousePosition.y = canvas.height / 2;
              });

              createDots();
              requestAnimationFrame(animateDots);
            });

        </script>
      </header>
  <!-- End Banner/Slider -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 9,  184 => 8,  79 => 170,  77 => 8,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block title %} Welcome | Bienvenu{% endblock %}

{% block body %}


{% block banner %}
  <!-- Banner/Slider -->
      <header class=\"\">
        <div class=\"canvtitle\">
            <h1>Lines animation tile goes here !</h1>
            <h3>Smal Subtitle text here</h3>
            <button type=\"button\" class=\"btn btn-outline btn-text-red\" name=\"button\">Hello World !</button>
        </div>
        <canvas></canvas>
        <script src=\"https://code.jquery.com/jquery-1.11.1.min.js\"></script>
        <script>
            //CANVAS
            \$(function(){
              var canvas = document.querySelector('canvas'),
                  ctx = canvas.getContext('2d')
              canvas.width = window.innerWidth;
              canvas.height = window.innerHeight;
              ctx.lineWidth = .3;
              ctx.strokeStyle = (new Color(150)).style;

              var mousePosition = {
                x: 30 * canvas.width / 100,
                y: 30 * canvas.height / 100
              };

              var dots = {
                nb: 250,
                distance: 100,
                d_radius: 150,
                array: []
              };

              function colorValue(min) {
                return Math.floor(Math.random() * 255 + min);
              }

              function createColorStyle(r,g,b) {
                return 'rgba(' + r + ',' + g + ',' + b + ', 0.8)';
              }

              function mixComponents(comp1, weight1, comp2, weight2) {
                return (comp1 * weight1 + comp2 * weight2) / (weight1 + weight2);
              }

              function averageColorStyles(dot1, dot2) {
                var color1 = dot1.color,
                    color2 = dot2.color;

                var r = mixComponents(color1.r, dot1.radius, color2.r, dot2.radius),
                    g = mixComponents(color1.g, dot1.radius, color2.g, dot2.radius),
                    b = mixComponents(color1.b, dot1.radius, color2.b, dot2.radius);
                return createColorStyle(Math.floor(r), Math.floor(g), Math.floor(b));
              }

              function Color(min) {
                min = min || 0;
                this.r = colorValue(min);
                this.g = colorValue(min);
                this.b = colorValue(min);
                this.style = createColorStyle(this.r, this.g, this.b);
              }

              function Dot(){
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;

                this.vx = -.5 + Math.random();
                this.vy = -.5 + Math.random();

                this.radius = Math.random() * 2;

                this.color = new Color();
                console.log(this);
              }

              Dot.prototype = {
                draw: function(){
                  ctx.beginPath();
                  ctx.fillStyle = this.color.style;
                  ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
                  ctx.fill();
                }
              };

              function createDots(){
                for(i = 0; i < dots.nb; i++){
                  dots.array.push(new Dot());
                }
              }

              function moveDots() {
                for(i = 0; i < dots.nb; i++){

                  var dot = dots.array[i];

                  if(dot.y < 0 || dot.y > canvas.height){
                    dot.vx = dot.vx;
                    dot.vy = - dot.vy;
                  }
                  else if(dot.x < 0 || dot.x > canvas.width){
                    dot.vx = - dot.vx;
                    dot.vy = dot.vy;
                  }
                  dot.x += dot.vx;
                  dot.y += dot.vy;
                }
              }

              function connectDots() {
                for(i = 0; i < dots.nb; i++){
                  for(j = 0; j < dots.nb; j++){
                    i_dot = dots.array[i];
                    j_dot = dots.array[j];

                    if((i_dot.x - j_dot.x) < dots.distance && (i_dot.y - j_dot.y) < dots.distance && (i_dot.x - j_dot.x) > - dots.distance && (i_dot.y - j_dot.y) > - dots.distance){
                      if((i_dot.x - mousePosition.x) < dots.d_radius && (i_dot.y - mousePosition.y) < dots.d_radius && (i_dot.x - mousePosition.x) > - dots.d_radius && (i_dot.y - mousePosition.y) > - dots.d_radius){
                        ctx.beginPath();
                        ctx.strokeStyle = averageColorStyles(i_dot, j_dot);
                        ctx.moveTo(i_dot.x, i_dot.y);
                        ctx.lineTo(j_dot.x, j_dot.y);
                        ctx.stroke();
                        ctx.closePath();
                      }
                    }
                  }
                }
              }

              function drawDots() {
                for(i = 0; i < dots.nb; i++){
                  var dot = dots.array[i];
                  dot.draw();
                }
              }

              function animateDots() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                moveDots();
                connectDots();
                drawDots();

                requestAnimationFrame(animateDots);
              }

              \$('canvas').on('mousemove', function(e){
                mousePosition.x = e.pageX;
                mousePosition.y = e.pageY;
              });

              \$('canvas').on('mouseleave', function(e){
                mousePosition.x = canvas.width / 2;
                mousePosition.y = canvas.height / 2;
              });

              createDots();
              requestAnimationFrame(animateDots);
            });

        </script>
      </header>
  <!-- End Banner/Slider -->
{% endblock %}




       \t<!--Section -->
       \t<div class=\"section section-pad bg-grey\">
       \t\t<div class=\"container\">
      \t\t\t<div class=\"row text-center\">
      \t\t\t</div>
   \t\t\t\t</div>
   \t\t\t</div>
       \t<!--End Section -->


       \t<!--Section -->
       \t<div class=\"section section-pad has-bg light dark-filter\">
       \t\t<div class=\"imagebg has-parallax\">
\t\t\t\t\t\t<img src=\"images/calc-bg.jpg\" alt=\"calc-bg\">
\t\t\t\t\t</div>
       \t\t<div class=\"container\">
       \t\t\t<div class=\"row row-vm\">
       \t\t\t</div>
       \t\t</div>
       \t</div>
       \t<!--End Section -->



      \t<!-- Features Box -->
      \t<div class=\"features-box section section-pad\">
      \t\t<div class=\"container\">
      \t\t\t<div class=\"row text-center\">
      \t\t\t</div>
      \t\t</div>
      \t</div>
      \t<!--End Features Box -->

        
       \t<!--Section -->
       \t<div class=\"section section-pad\">
       \t\t<div class=\"container\">
       \t\t</div>
       \t</div>
       \t<!--End Section -->

       \t<!--Section -->
       \t<div class=\"section section-pad bg-grey\">
       \t\t<div class=\"container\">
       \t\t</div>
       \t</div>
       \t<!--End Section -->

       \t<!--Section -->
       \t<div class=\"section section-pad\">
       \t\t<div class=\"container\">


       \t\t</div>
       \t</div>
       \t<!--End Section -->

       \t<!-- Section -->
\t\t<div class=\"section section-pad-sm cta-small light\">
\t\t\t<div class=\"cta-block\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row mobile-center\">
\t\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Section -->

       \t<!-- Section -->
\t\t<div class=\"section section-pad-md bg-grey\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"content row\">
\t\t\t\t\t<div class=\"owl-carousel has-carousel no-dots\"  data-items=\"6\" data-loop=\"true\" data-dots=\"false\" data-auto=\"false\">
\t\t\t\t\t\t<div class=\"logo-item\"><img alt=\"\" width=\"190\" height=\"82\" src=\"/images/cl-logo1.png\"></div>
\t\t\t\t\t\t<div class=\"logo-item\"><img alt=\"\" width=\"190\" height=\"82\" src=\"/images/cl-logo2.png\"></div>
\t\t\t\t\t\t<div class=\"logo-item\"><img alt=\"\" width=\"190\" height=\"82\" src=\"/images/cl-logo3.png\"></div>
\t\t\t\t\t\t<div class=\"logo-item\"><img alt=\"\" width=\"190\" height=\"82\" src=\"/images/cl-logo4.png\"></div>
\t\t\t\t\t\t<div class=\"logo-item\"><img alt=\"\" width=\"190\" height=\"82\" src=\"/images/cl-logo5.png\"></div>
\t\t\t\t\t\t<div class=\"logo-item\"><img alt=\"\" width=\"190\" height=\"82\" src=\"/images/cl-logo6.png\"></div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Section -->



{% endblock %}
", "pages/index.html.twig", "C:\\Users\\Mohamed\\Documents\\GitHub\\line\\templates\\pages\\index.html.twig");
    }
}
