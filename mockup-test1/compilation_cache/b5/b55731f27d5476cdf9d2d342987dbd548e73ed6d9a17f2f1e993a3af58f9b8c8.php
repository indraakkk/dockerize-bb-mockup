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

/* components/banner.html */
class __TwigTemplate_0a277641fee69c975102f98a729983aaa8d9187e0a094264b788d95496e40019 extends Template
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
        echo "<div class=\"container my-5\">
  <div class=\"row\">
    <div class=\"col-md-6 banner\">
      <h1>PHP Hosting</h1>
      <h4>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h4>

      <div class=\"mt-4\">
        <ul class=\"list-unstyled\">
          <li><i class=\"fa fa-check-circle text-success me-3 mb-2\" aria-hidden=\"true\"></i>Solusi PHP untuk performa query yang lebih cepat.</li>
          <li><i class=\"fa fa-check-circle text-success me-3 mb-2\" aria-hidden=\"true\"></i>Konsumsi memori yang lebih rendah.</li>
          <li><i class=\"fa fa-check-circle text-success me-3 mb-2\" aria-hidden=\"true\"></i>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7 </li>
          <li><i class=\"fa fa-check-circle text-success me-3 mb-2\" aria-hidden=\"true\"></i>Fitur enkripsi IonCube dan Zend Guard Loaders</li>
        </ul>
      </div>
    </div>
    <div class=\"col-md-6\">
      <img src=\"../../assets/svg/illustration banner PHP hosting-01.svg\" alt=\"banner-graphic\">
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/banner.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container my-5\">
  <div class=\"row\">
    <div class=\"col-md-6 banner\">
      <h1>PHP Hosting</h1>
      <h4>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h4>

      <div class=\"mt-4\">
        <ul class=\"list-unstyled\">
          <li><i class=\"fa fa-check-circle text-success me-3 mb-2\" aria-hidden=\"true\"></i>Solusi PHP untuk performa query yang lebih cepat.</li>
          <li><i class=\"fa fa-check-circle text-success me-3 mb-2\" aria-hidden=\"true\"></i>Konsumsi memori yang lebih rendah.</li>
          <li><i class=\"fa fa-check-circle text-success me-3 mb-2\" aria-hidden=\"true\"></i>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7 </li>
          <li><i class=\"fa fa-check-circle text-success me-3 mb-2\" aria-hidden=\"true\"></i>Fitur enkripsi IonCube dan Zend Guard Loaders</li>
        </ul>
      </div>
    </div>
    <div class=\"col-md-6\">
      <img src=\"../../assets/svg/illustration banner PHP hosting-01.svg\" alt=\"banner-graphic\">
    </div>
  </div>
</div>
", "components/banner.html", "/var/www/html/templates/components/banner.html");
    }
}
