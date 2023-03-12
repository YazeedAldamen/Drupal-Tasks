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

/* themes/honey/templates/layout/page.html.twig */
class __TwigTemplate_1a7e1205d171a86a34ff8b90415ead43 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "<div class=\"honey-page layout-container\">
  <header class=\"honey-page__header\" role=\"banner\">
    <div class=\"honey-page__header-top\">
      ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
      <button class=\"honey-page__toggle-button\"
        onclick=\"this.getAttribute('aria-expanded')==='true' ? this.setAttribute('aria-expanded', false) : this.setAttribute('aria-expanded', true)\"
        role=\"button\" aria-expanded=\"false\">
          <span class=\"visually-hidden\">";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open menu"));
        echo "</span>
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 28\">
            <rect width=\"32\" height=\"4\" rx=\"2\"/>
            <rect width=\"32\" height=\"4\" rx=\"2\" transform=\"translate(0 12)\"/>
            <rect width=\"32\" height=\"4\" rx=\"2\" transform=\"translate(0 24)\"/>
          </svg>
        </button>
      ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"honey-page__header-bottom\">
      <div class=\"honey-page__header-bottom-inner\">
        ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
        ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </header>
  <div class=\"honey-page__content-wrapper\">
    <main role=\"main\" class=\"honey-page__content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 72
        echo "      <div class=\"honey-page__highlighted\">
        ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
        ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"layout-content\">
        ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "
      </div>";
        // line 79
        echo "    </main>
    <aside class=\"honey-page__sidebar\" role=\"complementary\">
      ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "
      ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
    </aside>
  </div>
  ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 85)) {
            // line 86
            echo "    <footer class=\"honey-page__footer\" role=\"contentinfo\">
      ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 90
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/honey/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 90,  117 => 87,  114 => 86,  112 => 85,  106 => 82,  102 => 81,  98 => 79,  94 => 77,  88 => 74,  84 => 73,  81 => 72,  72 => 65,  68 => 64,  61 => 60,  51 => 53,  44 => 49,  39 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/honey/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\march9thtask\\themes\\honey\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 85);
        static $filters = array("escape" => 49, "t" => 53);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
