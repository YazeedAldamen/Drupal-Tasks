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

/* themes/honey/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_fc814780a392bd78ef72a54a384b3baa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "themes/honey/templates/block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 18
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" rel=\"home\" class=\"site-logo\">
      ";
            // line 19
            if (($context["site_logo_svg"] ?? null)) {
                // line 20
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["site_logo_svg"] ?? null), 20, $this->source));
                echo "
      ";
            } else {
                // line 22
                echo "        <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 22, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\"/>
      ";
            }
            // line 24
            echo "    </a>
  ";
        }
        // line 26
        echo "  ";
        if (($context["site_name"] ?? null)) {
            // line 27
            echo "    <div class=\"site-name\">
      <a href=\"";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 28, $this->source), "html", null, true);
            echo "</a>
    </div>
  ";
        }
        // line 31
        echo "  ";
        if (($context["site_slogan"] ?? null)) {
            // line 32
            echo "    <div class=\"site-slogan\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 32, $this->source), "html", null, true);
            echo "</div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/honey/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  96 => 31,  86 => 28,  83 => 27,  80 => 26,  76 => 24,  68 => 22,  62 => 20,  60 => 19,  55 => 18,  52 => 17,  48 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/honey/templates/block/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\march9thtask\\themes\\honey\\templates\\block\\block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17);
        static $filters = array("raw" => 20, "escape" => 22, "t" => 22);
        static $functions = array("path" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'escape', 't'],
                ['path']
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
