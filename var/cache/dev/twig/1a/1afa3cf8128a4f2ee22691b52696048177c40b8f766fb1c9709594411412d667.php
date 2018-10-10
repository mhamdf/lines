<?php

/* template.html.twig */
class __TwigTemplate_070d79137bf31f5ecc4e2eefe38cc9ae03d5b667901a6f65065b371c9fe2baa9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
    \t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>
          ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    </head>
    <body>



        <header class=\"site-header header-s1 is-sticky\">

          ";
        // line 31
        $this->displayBlock('navbar', $context, $blocks);
        // line 112
        echo "
        </header>



      ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 120
        echo "

        ";
        // line 122
        $this->displayBlock('footer', $context, $blocks);
        // line 143
        echo "

        ";
        // line 145
        $this->displayBlock('javascripts', $context, $blocks);
        // line 159
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Welcome ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
          <!-- Vendors -->
          <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/owl.theme.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/pe-icon-7-stroke.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <!-- Custumable -->
          <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/theme-color.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendore.bundle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 32
        echo "            <!-- Navbar -->
            <div class=\"navbar navbar-primary\">
              <div class=\"container relative\">
                <!-- Logo -->
                <a class=\"navbar-brand\" href=\"index.html\">
                  <img class=\"logo logo-dark\" alt=\"logo\" src=\"/images/logo.png\">
                  <img class=\"logo logo-light\" alt=\"logo\" src=\"/images/logo.png\">
                </a>
                <!-- #end Logo -->
                <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#mainnav\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Menu</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                  </button>
                  <div class=\"quote-btn\"><a class=\"btn\" href=\"contact.html\"><span>get started</span></a></div>
                </div>
                <!-- MainNav -->
                <nav class=\"navbar-collapse collapse\" id=\"mainnav\">
                  <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\">Home <b class=\"caret\"></b></a>
                      <ul class=\"dropdown-menu\">
                        <li><a href=\"index.html\">Home - Default</a></li>
                        <li><a href=\"index-wallet.html\">Home - Wallet</a></li>
                        <li><a href=\"index-mining.html\">Home - Mining</a></li>
                      </ul>
                    </li>
                    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\">Pages <b class=\"caret\"></b></a>
                      <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">About Pages</a>
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"about.html\">About Us</a></li>
                            <li><a href=\"teams.html\">Teams</a></li>
                            <li><a href=\"testimonial.html\">Testimonial</a></li>
                          </ul>
                        </li>
                        <li><a href=\"#\">Service Pages</a>
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"service.html\">Service List</a></li>
                            <li><a href=\"service-single.html\">Service Single</a></li>
                          </ul>
                        </li>
                        <li><a href=\"#\">BitCoin Pages</a>
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"work-process.html\">How it Works</a></li>
                            <li><a href=\"buy-sell.html\">Buy &amp; Sell</a></li>
                            <li><a href=\"wallet-features.html\">Wallet Features</a></li>
                            <li><a href=\"market-data.html\">Market Data</a></li>
                            <li><a href=\"pricing.html\">Pricing</a></li>
                          </ul>
                        </li>
                        <li><a href=\"#\">Blog Pages</a>
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"blog.html\">Blog List</a></li>
                            <li><a href=\"blog-single.html\">Blog Single</a></li>
                          </ul>
                        </li>
                        <li><a href=\"#\">Miscellaneous Pages</a>
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"pricing-table.html\">Pricing Table</a></li>
                            <li><a href=\"signup.html\">Sign In/Sign Up</a></li>
                            <li><a href=\"faqs.html\">Faq/Support</a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                          </ul>
                        </li>
                        <li><a href=\"typography.html\">Typography</a></li>
                      </ul>
                    </li>
                    <li><a href=\"buy-sell.html\">buy &amp; Sell</a></li>
                    <li><a href=\"wallet-features.html\">wallet</a></li>
                    <li><a href=\"market-data.html\">Market data</a></li>
                    <li><a href=\"contact.html\">Contact</a></li>
                    <li class=\"quote-btn hidden-xs hidden-sm\"><a class=\"btn\" href=\"contact.html\">get started</a></li>
                  </ul>
                </nav>
                <!-- #end MainNav -->
              </div>
            </div>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 118
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 123
        echo "            <!-- Copyright -->
            <div class=\"copyright light\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"site-copy col-sm-7\">
                    <p>Copyright &copy; 2018 Template Made by me</p>
                  </div>
                  <div class=\"col-sm-5 text-right mobile-left\">
                    <ul class=\"social\">
                      <li><a href=\"#\"><em class=\"fa fa-facebook\"></em></a></li>
                      <li><a href=\"#\"><em class=\"fa fa-twitter\"></em></a></li>
                      <li><a href=\"#\"><em class=\"fa fa-linkedin\"></em></a></li>
                      <li><a href=\"#\"><em class=\"fa fa-google-plus\"></em></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Copyright -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 146
        echo "        <!-- Javascripts -->
        <script src=\"/js/jquery.bundle.js\"></script>
        <script src=\"/js/script.js\"></script>
    \t\t<script>
    \t\t  (function(b,i,t,C,O,I,N) {
    \t\t\twindow.addEventListener('load',function() {
    \t\t\t  if(b.getElementById(C))return;
    \t\t\t  I=b.createElement(i),N=b.getElementsByTagName(i)[0];
    \t\t\t  I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    \t\t\t},false)
    \t\t  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
    \t\t</script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  336 => 146,  327 => 145,  298 => 123,  289 => 122,  278 => 118,  269 => 117,  180 => 32,  171 => 31,  158 => 21,  154 => 20,  150 => 19,  145 => 17,  141 => 16,  137 => 15,  133 => 14,  129 => 13,  125 => 12,  121 => 10,  112 => 9,  94 => 7,  82 => 159,  80 => 145,  76 => 143,  74 => 122,  70 => 120,  68 => 117,  61 => 112,  59 => 31,  50 => 24,  48 => 9,  45 => 8,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
    \t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>
          {% block title %} Welcome {% endblock %}
        </title>
        {% block stylesheets %}

          <!-- Vendors -->
          <link href=\"{{asset('css/vendor/bootstrap.min.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('css/vendor/animate.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('css/vendor/magnific-popup.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('css/vendor/owl.carousel.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('css/vendor/owl.theme.default.css')}}\" rel=\"stylesheet\">
          <link href=\"{{asset('css/vendor/pe-icon-7-stroke.css')}}\" rel=\"stylesheet\">
          <!-- Custumable -->
          <link href=\"{{ asset('css/style.css')}}\" rel=\"stylesheet\">
          <link href=\"{{ asset('css/theme-color.css')}}\" rel=\"stylesheet\">
          <link href=\"{{ asset('css/vendore.bundle.css')}}\" rel=\"stylesheet\">

        {% endblock %}
    </head>
    <body>



        <header class=\"site-header header-s1 is-sticky\">

          {% block navbar %}
            <!-- Navbar -->
            <div class=\"navbar navbar-primary\">
              <div class=\"container relative\">
                <!-- Logo -->
                <a class=\"navbar-brand\" href=\"index.html\">
                  <img class=\"logo logo-dark\" alt=\"logo\" src=\"/images/logo.png\">
                  <img class=\"logo logo-light\" alt=\"logo\" src=\"/images/logo.png\">
                </a>
                <!-- #end Logo -->
                <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#mainnav\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Menu</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                  </button>
                  <div class=\"quote-btn\"><a class=\"btn\" href=\"contact.html\"><span>get started</span></a></div>
                </div>
                <!-- MainNav -->
                <nav class=\"navbar-collapse collapse\" id=\"mainnav\">
                  <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\">Home <b class=\"caret\"></b></a>
                      <ul class=\"dropdown-menu\">
                        <li><a href=\"index.html\">Home - Default</a></li>
                        <li><a href=\"index-wallet.html\">Home - Wallet</a></li>
                        <li><a href=\"index-mining.html\">Home - Mining</a></li>
                      </ul>
                    </li>
                    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\">Pages <b class=\"caret\"></b></a>
                      <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">About Pages</a>
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"about.html\">About Us</a></li>
                            <li><a href=\"teams.html\">Teams</a></li>
                            <li><a href=\"testimonial.html\">Testimonial</a></li>
                          </ul>
                        </li>
                        <li><a href=\"#\">Service Pages</a>
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"service.html\">Service List</a></li>
                            <li><a href=\"service-single.html\">Service Single</a></li>
                          </ul>
                        </li>
                        <li><a href=\"#\">BitCoin Pages</a>
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"work-process.html\">How it Works</a></li>
                            <li><a href=\"buy-sell.html\">Buy &amp; Sell</a></li>
                            <li><a href=\"wallet-features.html\">Wallet Features</a></li>
                            <li><a href=\"market-data.html\">Market Data</a></li>
                            <li><a href=\"pricing.html\">Pricing</a></li>
                          </ul>
                        </li>
                        <li><a href=\"#\">Blog Pages</a>
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"blog.html\">Blog List</a></li>
                            <li><a href=\"blog-single.html\">Blog Single</a></li>
                          </ul>
                        </li>
                        <li><a href=\"#\">Miscellaneous Pages</a>
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"pricing-table.html\">Pricing Table</a></li>
                            <li><a href=\"signup.html\">Sign In/Sign Up</a></li>
                            <li><a href=\"faqs.html\">Faq/Support</a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                          </ul>
                        </li>
                        <li><a href=\"typography.html\">Typography</a></li>
                      </ul>
                    </li>
                    <li><a href=\"buy-sell.html\">buy &amp; Sell</a></li>
                    <li><a href=\"wallet-features.html\">wallet</a></li>
                    <li><a href=\"market-data.html\">Market data</a></li>
                    <li><a href=\"contact.html\">Contact</a></li>
                    <li class=\"quote-btn hidden-xs hidden-sm\"><a class=\"btn\" href=\"contact.html\">get started</a></li>
                  </ul>
                </nav>
                <!-- #end MainNav -->
              </div>
            </div>
          {% endblock %}

        </header>



      {% block body %}

      {% endblock %}


        {% block footer  %}
            <!-- Copyright -->
            <div class=\"copyright light\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"site-copy col-sm-7\">
                    <p>Copyright &copy; 2018 Template Made by me</p>
                  </div>
                  <div class=\"col-sm-5 text-right mobile-left\">
                    <ul class=\"social\">
                      <li><a href=\"#\"><em class=\"fa fa-facebook\"></em></a></li>
                      <li><a href=\"#\"><em class=\"fa fa-twitter\"></em></a></li>
                      <li><a href=\"#\"><em class=\"fa fa-linkedin\"></em></a></li>
                      <li><a href=\"#\"><em class=\"fa fa-google-plus\"></em></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Copyright -->
        {% endblock %}


        {% block javascripts %}
        <!-- Javascripts -->
        <script src=\"/js/jquery.bundle.js\"></script>
        <script src=\"/js/script.js\"></script>
    \t\t<script>
    \t\t  (function(b,i,t,C,O,I,N) {
    \t\t\twindow.addEventListener('load',function() {
    \t\t\t  if(b.getElementById(C))return;
    \t\t\t  I=b.createElement(i),N=b.getElementsByTagName(i)[0];
    \t\t\t  I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    \t\t\t},false)
    \t\t  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
    \t\t</script>
        {% endblock %}
    </body>
</html>
", "template.html.twig", "C:\\Users\\Mohamed\\Documents\\GitHub\\line\\templates\\template.html.twig");
    }
}
