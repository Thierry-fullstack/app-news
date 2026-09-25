<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @WebProfiler/Collector/serializer.html.twig */
class __TwigTemplate_56ff425749b0942d35eee5a1d6703f4f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 32
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "handledCount", [], "any", false, false, false, 32) > 0)) {
            // line 33
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 34
                yield "            ";
                yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/serializer.svg");
                yield "
            <span class=\"sf-toolbar-value\">
                ";
                // line 36
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "handledCount", [], "any", false, false, false, 36), "html", null, true);
                yield "
            </span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            yield "
        ";
            // line 40
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 41
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">";
                // line 43
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "handledCount", [], "any", false, false, false, 43), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    ";
                // line 48
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "totalTime", [], "any", false, false, false, 48) * 1000)), "html", null, true);
                yield " <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 56
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "data", [], "any", false, false, false, 56), "serialize", [], "any", false, false, false, 56)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 60
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "data", [], "any", false, false, false, 60), "deserialize", [], "any", false, false, false, 60)), "html", null, true);
                yield "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">";
                // line 66
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "data", [], "any", false, false, false, 66), "encode", [], "any", false, false, false, 66)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">";
                // line 70
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "data", [], "any", false, false, false, 70), "decode", [], "any", false, false, false, 70)), "html", null, true);
                yield "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 76
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 76, $this->source); })()), "data", [], "any", false, false, false, 76), "normalize", [], "any", false, false, false, 76)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 80
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "data", [], "any", false, false, false, 80), "denormalize", [], "any", false, false, false, 80)), "html", null, true);
                yield "</span>
                    </div>
                </div>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 85
            yield "
        ";
            // line 86
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 86, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 91
        yield "    <span class=\"label ";
        yield (string) (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 91, $this->source); })()), "handledCount", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 92
        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/serializer.svg");
        yield "</span>
        <strong>Serializer</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 98
        yield "    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        ";
        // line 100
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "handledCount", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        ";
        } else {
            // line 105
            yield "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 107
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "handledCount", [], "any", false, false, false, 107), "html", null, true);
            yield "</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 112
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 112, $this->source); })()), "totalTime", [], "any", false, false, false, 112) * 1000)), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "serializerNames", [], "any", false, false, false, 118));
            foreach ($context['_seq'] as $context["_key"] => $context["serializer"]) {
                // line 119
                yield "                    ";
                yield (string) $this->getTemplateForMacro("macro_render_serializer_tab", $context, 119, $this->getSourceContext())->macro_render_serializer_tab(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 119, $this->source); })()), $context["serializer"]]);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['serializer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 121
            yield "            </div>
        ";
        }
        // line 123
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
    public function macro_render_serializer_tab($collector = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collector" => $collector,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serializer_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serializer_tab"));

            // line 127
            yield "    <div class=\"tab\">
        <h3 class=\"tab-title\">";
            // line 128
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 128, $this->source); })()), "html", null, true);
            yield " <span class=\"badge\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 128, $this->source); })()), "handledCount", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 128, $this->source); })())], "method", false, false, false, 128), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            <div class=\"sf-tabs\">
                ";
            // line 131
            yield (string) $this->getTemplateForMacro("macro_render_serialize_tab", $context, 131, $this->getSourceContext())->macro_render_serialize_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 131, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 131, $this->source); })())], "method", false, false, false, 131), true, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 131, $this->source); })())]);
            yield "
                ";
            // line 132
            yield (string) $this->getTemplateForMacro("macro_render_serialize_tab", $context, 132, $this->getSourceContext())->macro_render_serialize_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 132, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 132, $this->source); })())], "method", false, false, false, 132), false, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 132, $this->source); })())]);
            yield "

                ";
            // line 134
            yield (string) $this->getTemplateForMacro("macro_render_normalize_tab", $context, 134, $this->getSourceContext())->macro_render_normalize_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 134, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 134, $this->source); })())], "method", false, false, false, 134), true, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 134, $this->source); })())]);
            yield "
                ";
            // line 135
            yield (string) $this->getTemplateForMacro("macro_render_normalize_tab", $context, 135, $this->getSourceContext())->macro_render_normalize_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 135, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 135, $this->source); })())], "method", false, false, false, 135), false, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 135, $this->source); })())]);
            yield "

                ";
            // line 137
            yield (string) $this->getTemplateForMacro("macro_render_encode_tab", $context, 137, $this->getSourceContext())->macro_render_encode_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 137, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 137, $this->source); })())], "method", false, false, false, 137), true, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 137, $this->source); })())]);
            yield "
                ";
            // line 138
            yield (string) $this->getTemplateForMacro("macro_render_encode_tab", $context, 138, $this->getSourceContext())->macro_render_encode_tab(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 138, $this->source); })()), "data", [(isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 138, $this->source); })())], "method", false, false, false, 138), false, (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 138, $this->source); })())]);
            yield "
            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 144
    public function macro_render_serialize_tab($collectorData = null, $serialize = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collectorData" => $collectorData,
            "serialize" => $serialize,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            // line 145
            yield "    ";
            $context["data"] = (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 145, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 145, $this->source); })()), "serialize", [], "any", false, false, false, 145)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 145, $this->source); })()), "deserialize", [], "any", false, false, false, 145)));
            // line 146
            yield "    ";
            $context["cellPrefix"] = (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 146, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialize") : ("deserialize"));
            // line 147
            yield "
    <div class=\"tab ";
            // line 148
            yield (string) (( !(($tmp = (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 148, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 149
            yield (string) (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 149, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialize") : ("deserialize"));
            yield " <span class=\"badge\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 149, $this->source); })())), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            ";
            // line 151
            if ( !(($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 151, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 152
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 153
                yield (string) (((($tmp = (isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 153, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("serialized") : ("deserialized"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 156
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 168, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 169
                    yield "                            <tr>
                                <td>";
                    // line 170
                    yield (string) $this->getTemplateForMacro("macro_render_data_cell", $context, 170, $this->getSourceContext())->macro_render_data_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 170), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 170, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 170, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 171
                    yield (string) $this->getTemplateForMacro("macro_render_context_cell", $context, 171, $this->getSourceContext())->macro_render_context_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 171), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 171, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 171, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 172
                    yield (string) $this->getTemplateForMacro("macro_render_normalizer_cell", $context, 172, $this->getSourceContext())->macro_render_normalizer_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 172), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 172, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 172, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 173
                    yield (string) $this->getTemplateForMacro("macro_render_encoder_cell", $context, 173, $this->getSourceContext())->macro_render_encoder_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 173), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 173, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 173, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 174
                    yield (string) $this->getTemplateForMacro("macro_render_time_cell", $context, 174, $this->getSourceContext())->macro_render_time_cell(...[$context["item"]]);
                    yield "</td>
                                <td>";
                    // line 175
                    yield (string) $this->getTemplateForMacro("macro_render_caller_cell", $context, 175, $this->getSourceContext())->macro_render_caller_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 175), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 175, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 175, $this->source); })())]);
                    yield "</td>
                            </tr>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 178
                yield "                    </tbody>
                </table>
            ";
            }
            // line 181
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 185
    public function macro_render_caller_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            // line 186
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", true, true, false, 186)) {
                // line 187
                yield "        ";
                $context["trace_id"] = ((((("sf-trace-" . (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 187, $this->source); })())) . "-") . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 187, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 187, $this->source); })()));
                // line 188
                yield "
        <span class=\"metadata\">
            ";
                // line 190
                $context["caller"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 190, $this->source); })()), "caller", [], "any", false, false, false, 190);
                // line 191
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 191, $this->source); })()), "line", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 192
                    yield "                ";
                    $context["link"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 192, $this->source); })()), "file", [], "any", false, false, false, 192), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 192, $this->source); })()), "line", [], "any", false, false, false, 192));
                    // line 193
                    yield "                ";
                    if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 193, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 194
                        yield "                    <a href=\"";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 194, $this->source); })()), "html", null, true);
                        yield "\" title=\"";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 194, $this->source); })()), "file", [], "any", false, false, false, 194), "html", null, true);
                        yield "\">";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 194, $this->source); })()), "name", [], "any", false, false, false, 194), "html", null, true);
                        yield "</a>
                ";
                    } else {
                        // line 196
                        yield "                    <abbr title=\"";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 196, $this->source); })()), "file", [], "any", false, false, false, 196), "html", null, true);
                        yield "\">";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 196, $this->source); })()), "name", [], "any", false, false, false, 196), "html", null, true);
                        yield "</abbr>
                ";
                    }
                    // line 198
                    yield "            ";
                } else {
                    // line 199
                    yield "                ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 199, $this->source); })()), "name", [], "any", false, false, false, 199), "html", null, true);
                    yield "
            ";
                }
                // line 201
                yield "            line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 201, $this->source); })()), "html", null, true);
                yield "\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 201, $this->source); })()), "line", [], "any", false, false, false, 201), "html", null, true);
                yield "</button>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"";
                // line 204
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 204, $this->source); })()), "html", null, true);
                yield "\">
            <div class=\"trace\">
                ";
                // line 206
                yield (string) Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 206, $this->source); })()), "file", [], "any", false, false, false, 206), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 206, $this->source); })()), "line", [], "any", false, false, false, 206)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 211
                yield "
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 217
    public function macro_render_normalize_tab($collectorData = null, $normalize = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collectorData" => $collectorData,
            "normalize" => $normalize,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            // line 218
            yield "    ";
            $context["data"] = (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 218, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 218, $this->source); })()), "normalize", [], "any", false, false, false, 218)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 218, $this->source); })()), "denormalize", [], "any", false, false, false, 218)));
            // line 219
            yield "    ";
            $context["cellPrefix"] = (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 219, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalize") : ("denormalize"));
            // line 220
            yield "
    <div class=\"tab ";
            // line 221
            yield (string) (( !(($tmp = (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 221, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 222
            yield (string) (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 222, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalize") : ("denormalize"));
            yield " <span class=\"badge\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 222, $this->source); })())), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            ";
            // line 224
            if ( !(($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 224, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 225
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 226
                yield (string) (((($tmp = (isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 226, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("normalized") : ("denormalized"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 229
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 240
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 240, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 241
                    yield "                            <tr>
                                <td>";
                    // line 242
                    yield (string) $this->getTemplateForMacro("macro_render_data_cell", $context, 242, $this->getSourceContext())->macro_render_data_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 242), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 242, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 242, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 243
                    yield (string) $this->getTemplateForMacro("macro_render_context_cell", $context, 243, $this->getSourceContext())->macro_render_context_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 243), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 243, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 243, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 244
                    yield (string) $this->getTemplateForMacro("macro_render_normalizer_cell", $context, 244, $this->getSourceContext())->macro_render_normalizer_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 244), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 244, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 244, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 245
                    yield (string) $this->getTemplateForMacro("macro_render_time_cell", $context, 245, $this->getSourceContext())->macro_render_time_cell(...[$context["item"]]);
                    yield "</td>
                                <td>";
                    // line 246
                    yield (string) $this->getTemplateForMacro("macro_render_caller_cell", $context, 246, $this->getSourceContext())->macro_render_caller_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 246), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 246, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 246, $this->source); })())]);
                    yield "</td>
                            </tr>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 249
                yield "                    </tbody>
                </table>
            ";
            }
            // line 252
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 256
    public function macro_render_encode_tab($collectorData = null, $encode = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collectorData" => $collectorData,
            "encode" => $encode,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            // line 257
            yield "    ";
            $context["data"] = (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 257, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 257, $this->source); })()), "encode", [], "any", false, false, false, 257)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 257, $this->source); })()), "decode", [], "any", false, false, false, 257)));
            // line 258
            yield "    ";
            $context["cellPrefix"] = (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 258, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encode") : ("decode"));
            // line 259
            yield "
    <div class=\"tab ";
            // line 260
            yield (string) (( !(($tmp = (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 260, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 261
            yield (string) (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 261, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encode") : ("decode"));
            yield " <span class=\"badge\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 261, $this->source); })())), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            ";
            // line 263
            if ( !(($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 263, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 264
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 265
                yield (string) (((($tmp = (isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 265, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("encoded") : ("decoded"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 268
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 279
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 279, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 280
                    yield "                            <tr>
                                <td>";
                    // line 281
                    yield (string) $this->getTemplateForMacro("macro_render_data_cell", $context, 281, $this->getSourceContext())->macro_render_data_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 281), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 281, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 281, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 282
                    yield (string) $this->getTemplateForMacro("macro_render_context_cell", $context, 282, $this->getSourceContext())->macro_render_context_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 282), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 282, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 282, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 283
                    yield (string) $this->getTemplateForMacro("macro_render_encoder_cell", $context, 283, $this->getSourceContext())->macro_render_encoder_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 283), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 283, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 283, $this->source); })())]);
                    yield "</td>
                                <td>";
                    // line 284
                    yield (string) $this->getTemplateForMacro("macro_render_time_cell", $context, 284, $this->getSourceContext())->macro_render_time_cell(...[$context["item"]]);
                    yield "</td>
                                <td>";
                    // line 285
                    yield (string) $this->getTemplateForMacro("macro_render_caller_cell", $context, 285, $this->getSourceContext())->macro_render_caller_cell(...[$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 285), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 285, $this->source); })()), (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 285, $this->source); })())]);
                    yield "</td>
                            </tr>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 288
                yield "                    </tbody>
                </table>
            ";
            }
            // line 291
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 295
    public function macro_render_data_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            // line 296
            yield "    ";
            $context["data_id"] = ((((("data-" . (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 296, $this->source); })())) . "-") . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 296, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 296, $this->source); })()));
            // line 297
            yield "
    <span class=\"nowrap\">";
            // line 298
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 298, $this->source); })()), "dataType", [], "any", false, false, false, 298), "html", null, true);
            yield "</span>

    <div>
        <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 301
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data_id"]) || array_key_exists("data_id", $context) ? $context["data_id"] : (function () { throw new RuntimeError('Variable "data_id" does not exist.', 301, $this->source); })()), "html", null, true);
            yield "\" data-toggle-alt-content=\"Hide contents\">Show contents</button>
        <div id=\"";
            // line 302
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data_id"]) || array_key_exists("data_id", $context) ? $context["data_id"] : (function () { throw new RuntimeError('Variable "data_id" does not exist.', 302, $this->source); })()), "html", null, true);
            yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 303
            yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 303, $this->source); })()), "data", [], "any", false, false, false, 303));
            yield "
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 308
    public function macro_render_context_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            // line 309
            yield "    ";
            $context["context_id"] = ((((("context-" . (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 309, $this->source); })())) . "-") . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 309, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 309, $this->source); })()));
            // line 310
            yield "
    ";
            // line 311
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 311, $this->source); })()), "type", [], "any", false, false, false, 311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 312
                yield "        <span class=\"nowrap\">Type: ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 312, $this->source); })()), "type", [], "any", false, false, false, 312), "html", null, true);
                yield "</span>
        <div class=\"nowrap\">Format: ";
                // line 313
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 313, $this->source); })()), "format", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 313, $this->source); })()), "format", [], "any", false, false, false, 313), "html", null, true)) : ("none"));
                yield "</div>
    ";
            } else {
                // line 315
                yield "        <span class=\"nowrap\">Format: ";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "format", [], "any", false, false, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "format", [], "any", false, false, false, 315), "html", null, true)) : ("none"));
                yield "</span>
    ";
            }
            // line 317
            yield "
    <div>
        <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 319
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 319, $this->source); })()), "html", null, true);
            yield "\" data-toggle-alt-content=\"Hide context\">Show context</button>
        <div id=\"";
            // line 320
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 320, $this->source); })()), "html", null, true);
            yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 321
            yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 321, $this->source); })()), "context", [], "any", false, false, false, 321));
            yield "
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 326
    public function macro_render_normalizer_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            // line 327
            yield "    ";
            $context["nested_normalizers_id"] = ((((("nested-normalizers-" . (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 327, $this->source); })())) . "-") . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 327, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 327, $this->source); })()));
            // line 328
            yield "
    ";
            // line 329
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", true, true, false, 329)) {
                // line 330
                yield "        <span class=\"nowrap\"><a href=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "normalizer", [], "any", false, false, false, 330), "file", [], "any", false, false, false, 330), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "normalizer", [], "any", false, false, false, 330), "line", [], "any", false, false, false, 330)), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "normalizer", [], "any", false, false, false, 330), "file", [], "any", false, false, false, 330), "html", null, true);
                yield "\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "normalizer", [], "any", false, false, false, 330), "class", [], "any", false, false, false, 330), "html", null, true);
                yield "</a> (";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "normalizer", [], "any", false, false, false, 330), "time", [], "any", false, false, false, 330) * 1000)), "html", null, true);
                yield " ms)</span>
    ";
            }
            // line 332
            yield "
    ";
            // line 333
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 333, $this->source); })()), "normalization", [], "any", false, false, false, 333)) > 1)) {
                // line 334
                yield "        <div>
            <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 335
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nested_normalizers_id"]) || array_key_exists("nested_normalizers_id", $context) ? $context["nested_normalizers_id"] : (function () { throw new RuntimeError('Variable "nested_normalizers_id" does not exist.', 335, $this->source); })()), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</button>
            <div id=\"";
                // line 336
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nested_normalizers_id"]) || array_key_exists("nested_normalizers_id", $context) ? $context["nested_normalizers_id"] : (function () { throw new RuntimeError('Variable "nested_normalizers_id" does not exist.', 336, $this->source); })()), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 338
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 338, $this->source); })()), "normalization", [], "any", false, false, false, 338));
                foreach ($context['_seq'] as $context["_key"] => $context["normalizer"]) {
                    // line 339
                    yield "                        <li><span class=\"nowrap\">x";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "calls", [], "any", false, false, false, 339), "html", null, true);
                    yield " <a href=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 339), CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "line", [], "any", false, false, false, 339)), "html", null, true);
                    yield "\" title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 339), "html", null, true);
                    yield "\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "class", [], "any", false, false, false, 339), "html", null, true);
                    yield "</a> (";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "time", [], "any", false, false, false, 339) * 1000)), "html", null, true);
                    yield " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['normalizer'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 341
                yield "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 347
    public function macro_render_encoder_cell($item = null, $index = null, $method = null, $serializer = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "index" => $index,
            "method" => $method,
            "serializer" => $serializer,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            // line 348
            yield "    ";
            $context["nested_encoders_id"] = ((((("nested-encoders-" . (isset($context["serializer"]) || array_key_exists("serializer", $context) ? $context["serializer"] : (function () { throw new RuntimeError('Variable "serializer" does not exist.', 348, $this->source); })())) . "-") . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 348, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 348, $this->source); })()));
            // line 349
            yield "
    ";
            // line 350
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", true, true, false, 350)) {
                // line 351
                yield "        <span class=\"nowrap\"><a href=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 351, $this->source); })()), "encoder", [], "any", false, false, false, 351), "file", [], "any", false, false, false, 351), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 351, $this->source); })()), "encoder", [], "any", false, false, false, 351), "line", [], "any", false, false, false, 351)), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 351, $this->source); })()), "encoder", [], "any", false, false, false, 351), "file", [], "any", false, false, false, 351), "html", null, true);
                yield "\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 351, $this->source); })()), "encoder", [], "any", false, false, false, 351), "class", [], "any", false, false, false, 351), "html", null, true);
                yield "</a> (";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 351, $this->source); })()), "encoder", [], "any", false, false, false, 351), "time", [], "any", false, false, false, 351) * 1000)), "html", null, true);
                yield " ms)</span>
    ";
            }
            // line 353
            yield "
    ";
            // line 354
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 354, $this->source); })()), "encoding", [], "any", false, false, false, 354)) > 1)) {
                // line 355
                yield "        <div>
            <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 356
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nested_encoders_id"]) || array_key_exists("nested_encoders_id", $context) ? $context["nested_encoders_id"] : (function () { throw new RuntimeError('Variable "nested_encoders_id" does not exist.', 356, $this->source); })()), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</button>
            <div id=\"";
                // line 357
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nested_encoders_id"]) || array_key_exists("nested_encoders_id", $context) ? $context["nested_encoders_id"] : (function () { throw new RuntimeError('Variable "nested_encoders_id" does not exist.', 357, $this->source); })()), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 359
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 359, $this->source); })()), "encoding", [], "any", false, false, false, 359));
                foreach ($context['_seq'] as $context["_key"] => $context["encoder"]) {
                    // line 360
                    yield "                        <li><span class=\"nowrap\">x";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "calls", [], "any", false, false, false, 360), "html", null, true);
                    yield " <a href=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 360), CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "line", [], "any", false, false, false, 360)), "html", null, true);
                    yield "\" title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 360), "html", null, true);
                    yield "\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "class", [], "any", false, false, false, 360), "html", null, true);
                    yield "</a> (";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "time", [], "any", false, false, false, 360) * 1000)), "html", null, true);
                    yield " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['encoder'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 362
                yield "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 368
    public function macro_render_time_cell($item = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            // line 369
            yield "    <span class=\"nowrap\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 369, $this->source); })()), "time", [], "any", false, false, false, 369) * 1000)), "html", null, true);
            yield " ms</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/serializer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1278 => 369,  1260 => 368,  1244 => 362,  1226 => 360,  1222 => 359,  1217 => 357,  1213 => 356,  1210 => 355,  1208 => 354,  1205 => 353,  1193 => 351,  1191 => 350,  1188 => 349,  1185 => 348,  1164 => 347,  1148 => 341,  1130 => 339,  1126 => 338,  1121 => 336,  1117 => 335,  1114 => 334,  1112 => 333,  1109 => 332,  1097 => 330,  1095 => 329,  1092 => 328,  1089 => 327,  1068 => 326,  1052 => 321,  1048 => 320,  1044 => 319,  1040 => 317,  1034 => 315,  1029 => 313,  1024 => 312,  1022 => 311,  1019 => 310,  1016 => 309,  995 => 308,  979 => 303,  975 => 302,  971 => 301,  965 => 298,  962 => 297,  959 => 296,  938 => 295,  924 => 291,  919 => 288,  901 => 285,  897 => 284,  893 => 283,  889 => 282,  885 => 281,  882 => 280,  865 => 279,  852 => 268,  846 => 265,  843 => 264,  841 => 263,  834 => 261,  830 => 260,  827 => 259,  824 => 258,  821 => 257,  801 => 256,  787 => 252,  782 => 249,  764 => 246,  760 => 245,  756 => 244,  752 => 243,  748 => 242,  745 => 241,  728 => 240,  715 => 229,  709 => 226,  706 => 225,  704 => 224,  697 => 222,  693 => 221,  690 => 220,  687 => 219,  684 => 218,  664 => 217,  648 => 211,  646 => 206,  641 => 204,  632 => 201,  626 => 199,  623 => 198,  615 => 196,  605 => 194,  602 => 193,  599 => 192,  596 => 191,  594 => 190,  590 => 188,  587 => 187,  584 => 186,  563 => 185,  549 => 181,  544 => 178,  526 => 175,  522 => 174,  518 => 173,  514 => 172,  510 => 171,  506 => 170,  503 => 169,  486 => 168,  472 => 156,  466 => 153,  463 => 152,  461 => 151,  454 => 149,  450 => 148,  447 => 147,  444 => 146,  441 => 145,  421 => 144,  404 => 138,  400 => 137,  395 => 135,  391 => 134,  386 => 132,  382 => 131,  374 => 128,  371 => 127,  352 => 126,  340 => 123,  336 => 121,  326 => 119,  322 => 118,  313 => 112,  305 => 107,  301 => 105,  295 => 101,  293 => 100,  289 => 98,  276 => 97,  261 => 92,  256 => 91,  243 => 90,  229 => 86,  226 => 85,  217 => 80,  210 => 76,  201 => 70,  194 => 66,  185 => 60,  178 => 56,  167 => 48,  159 => 43,  155 => 41,  153 => 40,  150 => 39,  143 => 36,  137 => 34,  134 => 33,  131 => 32,  118 => 31,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27@WebProfiler/Profiler/layout.html.twig\x27 %}

{% block head %}
    {{ parent() }}

    <style>
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.handledCount > 0 %}
        {% set icon %}
            {{ source(\x27@WebProfiler/Icon/serializer.svg\x27) }}
            <span class=\"sf-toolbar-value\">
                {{ collector.handledCount }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.handledCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    {{ \x27%.2f\x27|format(collector.totalTime * 1000) }} <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.serialize|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.deserialize|length }}</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.encode|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.decode|length }}</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.normalize|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.denormalize|length }}</span>
                    </div>
                </div>
            </div>
        {% endset %}

        {{ include(\x27@WebProfiler/Profiler/toolbar_item.html.twig\x27, {link: profiler_url}) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.handledCount ? \x27disabled\x27 }}\">
        <span class=\"icon\">{{ source(\x27@WebProfiler/Icon/serializer.svg\x27) }}</span>
        <strong>Serializer</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        {% if not collector.handledCount %}
            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        {% else %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.handledCount }}</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ \x27%.2f\x27|format(collector.totalTime * 1000) }} <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                {% for serializer in collector.serializerNames %}
                    {{ _self.render_serializer_tab(collector, serializer) }}
                {% endfor %}
            </div>
        {% endif %}
    </div>
{% endblock %}

{% macro render_serializer_tab(collector, serializer) %}
    <div class=\"tab\">
        <h3 class=\"tab-title\">{{ serializer }} <span class=\"badge\">{{ collector.handledCount(serializer) }}</h3>
        <div class=\"tab-content\">
            <div class=\"sf-tabs\">
                {{ _self.render_serialize_tab(collector.data(serializer), true, serializer) }}
                {{ _self.render_serialize_tab(collector.data(serializer), false, serializer) }}

                {{ _self.render_normalize_tab(collector.data(serializer), true, serializer) }}
                {{ _self.render_normalize_tab(collector.data(serializer), false, serializer) }}

                {{ _self.render_encode_tab(collector.data(serializer), true, serializer) }}
                {{ _self.render_encode_tab(collector.data(serializer), false, serializer) }}
            </div>
        </div>
    </div>
{% endmacro %}

{% macro render_serialize_tab(collectorData, serialize, serializer) %}
    {% set data = serialize ? collectorData.serialize : collectorData.deserialize %}
    {% set cellPrefix = serialize ? \x27serialize\x27 : \x27deserialize\x27 %}

    <div class=\"tab {{ not data ? \x27disabled\x27 }}\">
        <h3 class=\"tab-title\">{{ serialize ? \x27serialize\x27 : \x27deserialize\x27 }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ serialize ? \x27serialized\x27 : \x27deserialized\x27 }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_normalizer_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_encoder_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix, serializer) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_caller_cell(item, index, method, serializer) %}
    {% if item.caller is defined %}
        {% set trace_id = \x27sf-trace-\x27 ~ serializer ~ \x27-\x27 ~ method ~ \x27-\x27 ~ index %}

        <span class=\"metadata\">
            {% set caller = item.caller %}
            {% if caller.line %}
                {% set link = caller.file|file_link(caller.line) %}
                {% if link %}
                    <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                {% else %}
                    <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                {% endif %}
            {% else %}
                {{ caller.name }}
            {% endif %}
            line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ trace_id }}\">{{ caller.line }}</button>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"{{ trace_id }}\">
            <div class=\"trace\">
                {{ caller.file|file_excerpt(caller.line)|replace({
                    \x27#DD0000\x27: \x27var(--highlight-string)\x27,
                    \x27#007700\x27: \x27var(--highlight-keyword)\x27,
                    \x27#0000BB\x27: \x27var(--highlight-default)\x27,
                    \x27#FF8000\x27: \x27var(--highlight-comment)\x27,
                })|raw }}
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_normalize_tab(collectorData, normalize, serializer) %}
    {% set data = normalize ? collectorData.normalize : collectorData.denormalize %}
    {% set cellPrefix = normalize ? \x27normalize\x27 : \x27denormalize\x27 %}

    <div class=\"tab {{ not data ? \x27disabled\x27 }}\">
        <h3 class=\"tab-title\">{{ normalize ? \x27normalize\x27 : \x27denormalize\x27 }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ normalize ? \x27normalized\x27 : \x27denormalized\x27 }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_normalizer_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix, serializer) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_encode_tab(collectorData, encode, serializer) %}
    {% set data = encode ? collectorData.encode : collectorData.decode %}
    {% set cellPrefix = encode ? \x27encode\x27 : \x27decode\x27 %}

    <div class=\"tab {{ not data ? \x27disabled\x27 }}\">
        <h3 class=\"tab-title\">{{ encode ? \x27encode\x27 : \x27decode\x27 }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ encode ? \x27encoded\x27 : \x27decoded\x27 }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_encoder_cell(item, loop.index, cellPrefix, serializer) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix, serializer) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_data_cell(item, index, method, serializer) %}
    {% set data_id = \x27data-\x27 ~ serializer ~ \x27-\x27 ~ method ~ \x27-\x27 ~ index %}

    <span class=\"nowrap\">{{ item.dataType }}</span>

    <div>
        <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ data_id }}\" data-toggle-alt-content=\"Hide contents\">Show contents</button>
        <div id=\"{{ data_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(item.data) }}
        </div>
    </div>
{% endmacro %}

{% macro render_context_cell(item, index, method, serializer) %}
    {% set context_id = \x27context-\x27 ~ serializer ~ \x27-\x27 ~ method ~ \x27-\x27 ~ index %}

    {% if item.type %}
        <span class=\"nowrap\">Type: {{ item.type }}</span>
        <div class=\"nowrap\">Format: {{ item.format ? item.format : \x27none\x27 }}</div>
    {% else %}
        <span class=\"nowrap\">Format: {{ item.format ? item.format : \x27none\x27 }}</span>
    {% endif %}

    <div>
        <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</button>
        <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(item.context) }}
        </div>
    </div>
{% endmacro %}

{% macro render_normalizer_cell(item, index, method, serializer) %}
    {% set nested_normalizers_id = \x27nested-normalizers-\x27 ~ serializer ~ \x27-\x27 ~ method ~ \x27-\x27 ~ index %}

    {% if item.normalizer is defined %}
        <span class=\"nowrap\"><a href=\"{{ item.normalizer.file|file_link(item.normalizer.line) }}\" title=\"{{ item.normalizer.file }}\">{{ item.normalizer.class }}</a> ({{ \x27%.2f\x27|format(item.normalizer.time * 1000) }} ms)</span>
    {% endif %}

    {% if item.normalization|length > 1 %}
        <div>
            <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ nested_normalizers_id }}\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</button>
            <div id=\"{{ nested_normalizers_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    {% for normalizer in item.normalization %}
                        <li><span class=\"nowrap\">x{{ normalizer.calls }} <a href=\"{{ normalizer.file|file_link(normalizer.line) }}\" title=\"{{ normalizer.file }}\">{{ normalizer.class }}</a> ({{ \x27%.2f\x27|format(normalizer.time * 1000) }} ms)</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_encoder_cell(item, index, method, serializer) %}
    {% set nested_encoders_id = \x27nested-encoders-\x27 ~ serializer ~ \x27-\x27 ~ method ~ \x27-\x27 ~ index %}

    {% if item.encoder is defined %}
        <span class=\"nowrap\"><a href=\"{{ item.encoder.file|file_link(item.encoder.line) }}\" title=\"{{ item.encoder.file }}\">{{ item.encoder.class }}</a> ({{ \x27%.2f\x27|format(item.encoder.time * 1000) }} ms)</span>
    {% endif %}

    {% if item.encoding|length > 1 %}
        <div>
            <button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ nested_encoders_id }}\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</button>
            <div id=\"{{ nested_encoders_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    {% for encoder in item.encoding %}
                        <li><span class=\"nowrap\">x{{ encoder.calls }} <a href=\"{{ encoder.file|file_link(encoder.line) }}\" title=\"{{ encoder.file }}\">{{ encoder.class }}</a> ({{ \x27%.2f\x27|format(encoder.time * 1000) }} ms)</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_time_cell(item) %}
    <span class=\"nowrap\">{{ \x27%.2f\x27|format(item.time * 1000) }} ms</span>
{% endmacro %}
", "@WebProfiler/Collector/serializer.html.twig", "/home/thierry/Symfony/monApp/app/vendor/symfony/web-profiler-bundle/Resources/views/Collector/serializer.html.twig");
    }
}
