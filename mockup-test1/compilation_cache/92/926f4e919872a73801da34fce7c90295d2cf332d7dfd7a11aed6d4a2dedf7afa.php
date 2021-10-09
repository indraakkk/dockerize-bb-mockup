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

/* components/header.html */
class __TwigTemplate_55c95e30d088f5de174a3acb573dfdfc141dfd03bd76429751f3f2150416cbe8 extends Template
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
        echo "<div class=\"container\" id=\"header-info-contact\">
  <div class=\"row\">
      <div class=\"col-md-6 header-1\">
          <i class=\"fa fa-tag\"></i>
          <img src=\"../../assets/images/blue-ribbon.svg\" width=\"25\" class=\"mr-2\"> Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]
      </div>
      <div class=\"col-md-6 header-1-contact py-2\">
          <div class=\"d-flex justify-content-end\">
              <div class=\"me-3\">
                  <i class=\"fa fa-phone-alt\"></i>
                  <span>0274-5305505</span>
              </div>
              <div class=\"me-3\">
                  <a href=\"#\" class=\"text-decorator-none\">
                      <i class=\"fa fa-comments\"></i>
                      <span>Live Chat</span>
                  </a>
              </div>
              <div>
                  <a href=\"#\" class=\"text-decorator-none\">
                      <i class=\"fa fa-user-circle\"></i>
                      <span>Member Area</span>
                  </a>
              </div>
          </div>
      </div>
  </div>
</div>

<header class=\"border-bottom border-top\">
  <nav class=\"navbar navbar-expand-lg navbar-light\">
    <div class=\"container\">
      <a href=\"/\" class=\"float-left d-flex mb-3 mb-md-0 me-md-auto text-dark text-decoration-none\">
        <img src=\"../../assets/images/logo-niagahoster.jpg\" alt=\"\" width=\"200\">
      </a>

      <button class=\"float-right navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
        aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNav\" style=\"flex-grow: unset;\">
        <ul class=\"navbar-nav\">
          ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["static"] ?? null), "headers", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">";
            // line 45
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</a>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </ul>
      </div>
    </div>
  </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "components/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 48,  88 => 45,  85 => 44,  81 => 43,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\" id=\"header-info-contact\">
  <div class=\"row\">
      <div class=\"col-md-6 header-1\">
          <i class=\"fa fa-tag\"></i>
          <img src=\"../../assets/images/blue-ribbon.svg\" width=\"25\" class=\"mr-2\"> Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]
      </div>
      <div class=\"col-md-6 header-1-contact py-2\">
          <div class=\"d-flex justify-content-end\">
              <div class=\"me-3\">
                  <i class=\"fa fa-phone-alt\"></i>
                  <span>0274-5305505</span>
              </div>
              <div class=\"me-3\">
                  <a href=\"#\" class=\"text-decorator-none\">
                      <i class=\"fa fa-comments\"></i>
                      <span>Live Chat</span>
                  </a>
              </div>
              <div>
                  <a href=\"#\" class=\"text-decorator-none\">
                      <i class=\"fa fa-user-circle\"></i>
                      <span>Member Area</span>
                  </a>
              </div>
          </div>
      </div>
  </div>
</div>

<header class=\"border-bottom border-top\">
  <nav class=\"navbar navbar-expand-lg navbar-light\">
    <div class=\"container\">
      <a href=\"/\" class=\"float-left d-flex mb-3 mb-md-0 me-md-auto text-dark text-decoration-none\">
        <img src=\"../../assets/images/logo-niagahoster.jpg\" alt=\"\" width=\"200\">
      </a>

      <button class=\"float-right navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
        aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNav\" style=\"flex-grow: unset;\">
        <ul class=\"navbar-nav\">
          {% for item in static.headers %}
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">{{ item }}</a>
          </li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </nav>
</header>", "components/header.html", "C:\\Users\\user\\devel\\mockup\\templates\\components\\header.html");
    }
}
