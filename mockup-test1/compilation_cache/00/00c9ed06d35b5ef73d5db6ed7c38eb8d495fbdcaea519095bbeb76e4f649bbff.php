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

/* components/packages.html */
class __TwigTemplate_a65cc70bde8727228ba9bb3f043fce6ab5ef68c51e31d0dc05b2502083aa2e37 extends Template
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
        echo "<div class=\"container mt-5 mb-5\">
  <div class=\"row row-no-padding\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["static"] ?? null), "packages", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["key"] => $context["package"]) {
            // line 4
            echo "
    ";
            // line 5
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["package"], "best_seller", [], "any", false, false, false, 5), false)) {
                // line 6
                echo "    <div class=\"rem-col col-sm text-center\">
      <div class=\"border-package-top best_seller-name\">
        <h4>";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "name", [], "any", false, false, false, 8), "html", null, true);
                echo "</h4>
      </div>
      <div class=\"border-package-mid best_seller-price\">
        <p class=\"normal_price\">Rp. ";
                // line 11
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "normal_price", [], "any", false, false, false, 11), 2), "html", null, true);
                echo "</p>
        <h4 class=\"discount_price\">
          <sup class=\"sup1\">Rp</sup>
          <span>";
                // line 14
                echo twig_escape_filter($this->env, (int) floor((twig_get_attribute($this->env, $this->source, $context["package"], "discount_price", [], "any", false, false, false, 14) / 1000)), "html", null, true);
                echo "</span>
          <sup class=\"sup2\">.";
                // line 15
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["package"], "discount_price", [], "any", false, false, false, 15) % 1000), "html", null, true);
                echo "</sup>
          <sup class=\"sup3\">/";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "range", [], "any", false, false, false, 16), "html", null, true);
                echo "</sup>
        </h4>
      </div>
      <div class=\"border-package-mid best_seller-total\">
        ";
                // line 20
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["package"], "total_user", [], "any", false, false, false, 20) . " Pengguna Terdaftar"), "html", null, true);
                echo "
      </div>
      <div class=\"container border-package-bottom\">
        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["package"], "features", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                    // line 24
                    echo "        ";
                    echo $context["feature"];
                    echo " <br>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "
        <button class=\"btn btn-outline-secondary my-4 best_seller-button\">Pilih Sekarang</button>
      </div>
    </div>
    ";
            } else {
                // line 31
                echo "    <div class=\"rem-col col-sm text-center\">
      <div class=\"border-package-top\">
        <h4>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "name", [], "any", false, false, false, 33), "html", null, true);
                echo "</h4>
      </div>
      <div class=\"border-package-mid\">
        <p class=\"normal_price\">Rp. ";
                // line 36
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "normal_price", [], "any", false, false, false, 36), 2), "html", null, true);
                echo "</p>
        <h4 class=\"discount_price\">
          <sup class=\"sup1\">Rp</sup>
          <span>";
                // line 39
                echo twig_escape_filter($this->env, (int) floor((twig_get_attribute($this->env, $this->source, $context["package"], "discount_price", [], "any", false, false, false, 39) / 1000)), "html", null, true);
                echo "</span>
          <sup class=\"sup2\">.";
                // line 40
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["package"], "discount_price", [], "any", false, false, false, 40) % 1000), "html", null, true);
                echo "</sup>
          <sup class=\"sup3\">/";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "range", [], "any", false, false, false, 41), "html", null, true);
                echo "</sup>
        </h4>
      </div>
      <div class=\"border-package-mid\">
        ";
                // line 45
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["package"], "total_user", [], "any", false, false, false, 45) . " Pengguna Terdaftar"), "html", null, true);
                echo "
      </div>
      <div class=\"container border-package-bottom\">
        ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["package"], "features", [], "any", false, false, false, 48));
                foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                    // line 49
                    echo "        ";
                    echo $context["feature"];
                    echo " <br>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "
        <button class=\"btn btn-outline-secondary my-4\">Pilih Sekarang</button>
      </div>
    </div>
    ";
            }
            // line 56
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "components/packages.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  164 => 56,  157 => 51,  148 => 49,  144 => 48,  138 => 45,  131 => 41,  127 => 40,  123 => 39,  117 => 36,  111 => 33,  107 => 31,  100 => 26,  91 => 24,  87 => 23,  81 => 20,  74 => 16,  70 => 15,  66 => 14,  60 => 11,  54 => 8,  50 => 6,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mt-5 mb-5\">
  <div class=\"row row-no-padding\">
    {% for key, package in static.packages %}

    {% if package.best_seller != false %}
    <div class=\"rem-col col-sm text-center\">
      <div class=\"border-package-top best_seller-name\">
        <h4>{{ package.name }}</h4>
      </div>
      <div class=\"border-package-mid best_seller-price\">
        <p class=\"normal_price\">Rp. {{ package.normal_price | number_format(2) }}</p>
        <h4 class=\"discount_price\">
          <sup class=\"sup1\">Rp</sup>
          <span>{{ package.discount_price//1000 }}</span>
          <sup class=\"sup2\">.{{ package.discount_price % 1000}}</sup>
          <sup class=\"sup3\">/{{ package.range }}</sup>
        </h4>
      </div>
      <div class=\"border-package-mid best_seller-total\">
        {{  package.total_user ~ ' Pengguna Terdaftar' }}
      </div>
      <div class=\"container border-package-bottom\">
        {% for feature in package.features %}
        {{  feature|raw }} <br>
        {% endfor %}

        <button class=\"btn btn-outline-secondary my-4 best_seller-button\">Pilih Sekarang</button>
      </div>
    </div>
    {% else %}
    <div class=\"rem-col col-sm text-center\">
      <div class=\"border-package-top\">
        <h4>{{ package.name }}</h4>
      </div>
      <div class=\"border-package-mid\">
        <p class=\"normal_price\">Rp. {{ package.normal_price | number_format(2) }}</p>
        <h4 class=\"discount_price\">
          <sup class=\"sup1\">Rp</sup>
          <span>{{ package.discount_price//1000 }}</span>
          <sup class=\"sup2\">.{{ package.discount_price % 1000}}</sup>
          <sup class=\"sup3\">/{{ package.range }}</sup>
        </h4>
      </div>
      <div class=\"border-package-mid\">
        {{  package.total_user ~ ' Pengguna Terdaftar' }}
      </div>
      <div class=\"container border-package-bottom\">
        {% for feature in package.features %}
        {{  feature|raw }} <br>
        {% endfor %}

        <button class=\"btn btn-outline-secondary my-4\">Pilih Sekarang</button>
      </div>
    </div>
    {% endif %}
    {% endfor %}
  </div>
</div>", "components/packages.html", "C:\\Users\\user\\devel\\mockup\\templates\\components\\packages.html");
    }
}
