<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html */
class __TwigTemplate_6a4f8a96e3645b1eb606cb9ab5c7609728f54edfe4ea603c1405196268edc977 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Document</title>
  <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"assets/style.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css\" integrity=\"sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
</head>
<body>
    <!-- header -->
    ";
        // line 14
        $this->loadTemplate("components/header.html", "index.html", 14)->display($context);
        // line 15
        echo "
    <!-- main -->
    <main>
      <!-- section1 == banner -->
      ";
        // line 19
        $this->loadTemplate("components/banner.html", "index.html", 19)->display($context);
        // line 20
        echo "
      <!-- section2 == service feature-->
      ";
        // line 22
        $this->loadTemplate("components/feature.html", "index.html", 22)->display($context);
        // line 23
        echo "
      <!-- section3 == packages-->
      ";
        // line 25
        $this->loadTemplate("components/packages.html", "index.html", 25)->display($context);
        // line 26
        echo "
      <!-- section3 == detail -->
      ";
        // line 28
        $this->loadTemplate("components/detail.html", "index.html", 28)->display($context);
        // line 29
        echo "    </main>

    <!-- footer -->
    ";
        // line 32
        $this->loadTemplate("components/footer.html", "index.html", 32)->display($context);
        // line 33
        echo "  <script src=\"assets\\js\\bootstrap.bundle.min.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  85 => 32,  80 => 29,  78 => 28,  74 => 26,  72 => 25,  68 => 23,  66 => 22,  62 => 20,  60 => 19,  54 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Document</title>
  <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"assets/style.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css\" integrity=\"sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
</head>
<body>
    <!-- header -->
    {% include 'components/header.html' %}

    <!-- main -->
    <main>
      <!-- section1 == banner -->
      {% include 'components/banner.html' %}

      <!-- section2 == service feature-->
      {% include 'components/feature.html' %}

      <!-- section3 == packages-->
      {% include 'components/packages.html' %}

      <!-- section3 == detail -->
      {% include 'components/detail.html' %}
    </main>

    <!-- footer -->
    {% include 'components/footer.html' %}
  <script src=\"assets\\js\\bootstrap.bundle.min.js\"></script>
</body>
</html>", "index.html", "C:\\Users\\user\\devel\\mockup\\templates\\index.html");
    }
}
