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

/* themes/honey/templates/navigation/menu--tools.html.twig */
class __TwigTemplate_884d83d45f7c89a10f2409865cc4dcbe extends \Twig\Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 30
            echo "  ";
            $macros["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu"], "method", false, false, true, 33), "addClass", [0 => "honey-tools"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 35
                    echo "      <ul class=\"menu\">
    ";
                }
                // line 37
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "      ";
                    // line 39
                    $context["classes"] = [0 => "menu-item", 1 => "honey-tools__menu-item", 2 => ((twig_get_attribute($this->env, $this->source,                     // line 42
$context["item"], "is_expanded", [], "any", false, false, true, 42)) ? ("menu-item--expanded") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 43
$context["item"], "is_collapsed", [], "any", false, false, true, 43)) ? ("menu-item--collapsed") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "in_active_trail", [], "any", false, false, true, 44)) ? ("menu-item--active-trail") : (""))];
                    // line 47
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 47), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
                    echo ">
        <svg class=\"honey-tools__icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 29.734\">
          <path d=\"M31.761 19.313a.791.791 0 10-1.51.471 2.517 2.517 0 01-.867 2.986c-1.593 1.169-4.565 1.121-7.4-.119a11.856 11.856 0 01-1.723-.928c-.178-.115-.355-.237-.525-.362-1.848-1.355-2.951-3.037-2.951-4.5a2.354 2.354 0 011.03-1.98 3.608 3.608 0 01.447-.278c2.26-1.179 6.3-.438 9.2 1.686a.79124459.79124459 0 10.936-1.276 13.548 13.548 0 00-5.608-2.39 10.606 10.606 0 00-2.506-.142 4.842 4.842 0 00-1.492-6.194l1.493-5.282a.791.791 0 00-1.522-.43l-1.417 5.011a4.809 4.809 0 00-2.646-.014l-1.413-5a.7914054.7914054 0 00-1.523.431l1.483 5.244a4.849 4.849 0 00-1.547 6.235 10.615 10.615 0 00-2.5.143 13.547 13.547 0 00-5.6 2.389C1.345 16.666 0 18.825 0 20.791a3.96 3.96 0 001.677 3.256 6.819 6.819 0 004.049 1.151 12.069 12.069 0 004.088-.765 10.457 10.457 0 00.617 1.428c1.277 2.425 3.357 3.873 5.564 3.873s4.289-1.449 5.566-3.875a10.475 10.475 0 00.617-1.428 12.067 12.067 0 004.094.767 6.819 6.819 0 004.049-1.151 4.057 4.057 0 001.44-4.734zM17.6 21.626h-3.205A9.1 9.1 0 0016 19.591a9.09 9.09 0 001.6 2.035zm-3.075-14.3A3.219 3.219 0 0116 6.972a3.259 3.259 0 011.5 6.152 3.264 3.264 0 01-3 0 3.26 3.26 0 01.03-5.806zM10 22.654c-2.828 1.237-5.8 1.284-7.39.116a2.354 2.354 0 01-1.03-1.98c0-1.463 1.1-3.146 2.951-4.5a11.634 11.634 0 016.569-2.247 5.721 5.721 0 012.631.558 3.6 3.6 0 01.45.279 2.354 2.354 0 011.03 1.98c0 1.464-1.1 3.146-2.951 4.5-.178.131-.363.258-.548.377l-.022.014a11.906 11.906 0 01-1.69.903zm6 5.498a4.4 4.4 0 01-3.429-1.88h6.842A4.465 4.465 0 0116 28.152zm4.37-3.46h-8.75a9.165 9.165 0 01-.348-.887c.367-.183.726-.383 1.072-.6h7.309c.345.214.7.412 1.067.6a9.17 9.17 0 01-.35.887z\"/>
          <path d=\"M29.704 16.636c-.118-.142-.242-.286-.37-.428a1.11865991 1.11865991 0 00-1.66 1.5c.107.119.211.239.309.357a1.1175765 1.1175765 0 101.722-1.425z\"/>
        </svg>
        ";
                    // line 52
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), 52, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), 52, $this->source)), "html", null, true);
                    echo "
        ";
                    // line 53
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 53)) {
                        // line 54
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 54), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 54, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 56
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/honey/templates/navigation/menu--tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 58,  118 => 56,  112 => 54,  110 => 53,  106 => 52,  97 => 47,  95 => 44,  94 => 43,  93 => 42,  92 => 39,  90 => 38,  85 => 37,  81 => 35,  75 => 33,  72 => 32,  69 => 31,  66 => 30,  51 => 29,  44 => 27,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/honey/templates/navigation/menu--tools.html.twig", "C:\\xampp\\htdocs\\march9thtask\\themes\\honey\\templates\\navigation\\menu--tools.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 37, "set" => 39);
        static $filters = array("escape" => 33);
        static $functions = array("link" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
