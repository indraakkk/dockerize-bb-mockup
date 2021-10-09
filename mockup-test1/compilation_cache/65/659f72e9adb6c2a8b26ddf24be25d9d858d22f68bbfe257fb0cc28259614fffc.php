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

/* components/feature.html */
class __TwigTemplate_a86319f61aef36a20a2153cadde41f5984ec6ce41153c677043710b44c43903a extends Template
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
        echo "<div class=\"border-top\"></div>

<div class=\"container banner-tech\">
  <div class=\"row justify-content-center text-center\">
    <div class=\"col-md-3\">
      <div class=\"tech-logo-wrapper\">
        <img src=\"../../assets/images/zendguard-logo.png\" alt=\"Zendguard\" class=\"img-fluid\">
      </div>
      <p>PHP Zend Guard Loader</p>
    </div>
    <div class=\"col-md-3\">
      <div class=\"tech-logo-wrapper\">
        <img src=\"../../assets/images/composer-logo.png\" alt=\"Composer\" class=\"img-fluid\">
      </div>
      <p>PHP Composer</p>
    </div>
    <div class=\"col-md-3\">
      <div class=\"tech-logo-wrapper\">
        <img src=\"../../assets/images/ioncube-logo.png\" alt=\"IonCube\" class=\"img-fluid\">
      </div>
      <p>PHP IonCube Loader</p>
    </div>
  </div>
</div>


<div class=\"container my-5\">
  <div class=\"text-center packages-title\">
    <h2>Paket Hosting Singapura yang tepat</h2>
    <h3>Diskon 40% + Domain dan SSL gratis untuk Anda</h3>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "components/feature.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"border-top\"></div>

<div class=\"container banner-tech\">
  <div class=\"row justify-content-center text-center\">
    <div class=\"col-md-3\">
      <div class=\"tech-logo-wrapper\">
        <img src=\"../../assets/images/zendguard-logo.png\" alt=\"Zendguard\" class=\"img-fluid\">
      </div>
      <p>PHP Zend Guard Loader</p>
    </div>
    <div class=\"col-md-3\">
      <div class=\"tech-logo-wrapper\">
        <img src=\"../../assets/images/composer-logo.png\" alt=\"Composer\" class=\"img-fluid\">
      </div>
      <p>PHP Composer</p>
    </div>
    <div class=\"col-md-3\">
      <div class=\"tech-logo-wrapper\">
        <img src=\"../../assets/images/ioncube-logo.png\" alt=\"IonCube\" class=\"img-fluid\">
      </div>
      <p>PHP IonCube Loader</p>
    </div>
  </div>
</div>


<div class=\"container my-5\">
  <div class=\"text-center packages-title\">
    <h2>Paket Hosting Singapura yang tepat</h2>
    <h3>Diskon 40% + Domain dan SSL gratis untuk Anda</h3>
  </div>
</div>", "components/feature.html", "/var/www/html/templates/components/feature.html");
    }
}
