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

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_a069c3ae389af3cf2acc9db259ff6889 extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'queries' => [$this, 'block_queries'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->load((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1, $this->source); })()), "isXmlHttpRequest", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        // line 6
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "querycount", [], "any", false, false, false, 6) > 0) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 6) > 0))) {
            // line 7
            yield "
        ";
            // line 8
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 9
                yield "            ";
                $context["status"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 9) > 0)) ? ("red") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "querycount", [], "any", false, false, false, 9) > 50)) ? ("yellow") : (""))));
                // line 10
                yield "
            ";
                // line 11
                if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 11, $this->source); })()) >= 3)) {
                    // line 12
                    yield "                ";
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@Doctrine/Collector/database.svg");
                    yield "
            ";
                } else {
                    // line 14
                    yield "                <span class=\"icon\">";
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@Doctrine/Collector/icon.svg");
                    yield "</span>
            ";
                }
                // line 16
                yield "
            ";
                // line 17
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "querycount", [], "any", false, false, false, 17) == 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 17) > 0))) {
                    // line 18
                    yield "                <span class=\"sf-toolbar-value\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 18), "html", null, true);
                    yield "</span>
                <span class=\"sf-toolbar-label\">errors</span>
            ";
                } else {
                    // line 21
                    yield "                <span class=\"sf-toolbar-value\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "querycount", [], "any", false, false, false, 21), "html", null, true);
                    yield "</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">";
                    // line 24
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "time", [], "any", false, false, false, 24) * 1000)), "html", null, true);
                    yield "</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            ";
                }
                // line 28
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            yield "
        ";
            // line 30
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 31
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
                // line 33
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "querycount", [], "any", false, false, false, 33) > 50)) ? ("sf-toolbar-status-yellow") : (""));
                yield "\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "querycount", [], "any", false, false, false, 33), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">";
                // line 37
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "groupedQueryCount", [], "any", false, false, false, 37), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
                // line 41
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 41, $this->source); })()), "time", [], "any", false, false, false, 41) * 1000)), "html", null, true);
                yield " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
                // line 45
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 45) > 0)) ? ("sf-toolbar-status-red") : (""));
                yield "\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 45), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Managed entities</b>
                <span class=\"sf-toolbar-status\">";
                // line 49
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "managedEntityCount", [], "any", false, false, false, 49), "html", null, true);
                yield "</span>
            </div>
            ";
                // line 51
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 52
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                    // line 54
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "cacheHitsCount", [], "any", false, false, false, 54), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                    // line 58
                    yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 58, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 58) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 58, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 58), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                    // line 62
                    yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 62, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 62) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 62, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 62), "html", null, true);
                    yield "</span>
                </div>
            ";
                } else {
                    // line 65
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
                }
                // line 70
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 71
            yield "
        ";
            // line 72
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 72, $this->source); })()), "status" => ((array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 72, $this->source); })()), "")) : (""))]);
            yield "

    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
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

        // line 78
        yield "    <span class=\"label ";
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 78) > 0)) ? ("label-status-error") : (""));
        yield " ";
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "querycount", [], "any", false, false, false, 78) == 0)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 79
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, (("@Doctrine/Collector/" . ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 79, $this->source); })()) < 3)) ? ("icon") : ("database"))) . ".svg"));
        yield "</span>
        <strong>Doctrine</strong>
        ";
        // line 81
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 81, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "            <span class=\"count\">
                <span>";
            // line 83
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 83), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 86
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield "    ";
        if (("explain" == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 90, $this->source); })()))) {
            // line 91
            yield "        ";
            yield (string) $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("doctrine.profiler_controller::explainAction", ["token" =>             // line 92
(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 92, $this->source); })()), "panel" => "db", "connectionName" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 94
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 94, $this->source); })()), "query", [], "any", false, false, false, 94), "get", ["connection"], "method", false, false, false, 94), "query" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 95
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 95, $this->source); })()), "query", [], "any", false, false, false, 95), "get", ["query"], "method", false, false, false, 95)]));
            // line 96
            yield "
    ";
        } else {
            // line 98
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("queries", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_queries(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        // line 103
        yield "    <style>
        :root {
            --query-time-bar-color: var(--gray-200);
        }
        .theme-dark {
            --query-time-bar-color: var(--gray-700);
        }
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px var(--page-background); }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: var(--query-time-bar-color); }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
        ";
        // line 115
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 115, $this->source); })()) >= 3)) {
            // line 116
            yield "        .highlight .keyword   { color: var(--highlight-keyword); font-weight: bold; }
        .highlight .word      { color: var(--color-text); }
        .highlight .variable  { color: var(--highlight-variable); }
        .highlight .symbol    { color: var(--color-text); }
        .highlight .comment   { color: var(--highlight-comment); }
        .highlight .string    { color: var(--highlight-string); }
        .highlight .number    { color: var(--highlight-constant); font-weight: bold; }
        .highlight .error     { color: var(--highlight-error); }
        ";
        }
        // line 125
        yield "    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
        // line 132
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 132, $this->source); })()), "querycount", [], "any", false, false, false, 132), "html", null, true);
        yield "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 137
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 137, $this->source); })()), "groupedQueryCount", [], "any", false, false, false, 137), "html", null, true);
        yield "</span>
                <span class=\"label\">Different statements</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 142
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 142, $this->source); })()), "time", [], "any", false, false, false, 142) * 1000)), "html", null, true);
        yield " ms</span>
                <span class=\"label\">Query time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 147
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 147, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 147), "html", null, true);
        yield "</span>
                <span class=\"label\">Invalid entities</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
        // line 152
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 152, $this->source); })()), "managedEntityCount", [], "any", false, false, false, 152), "html", null, true);
        yield "</span>
                <span class=\"label\">Managed entities</span>
            </div>
        </div>

        ";
        // line 157
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 157, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 160
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 160, $this->source); })()), "cacheHitsCount", [], "any", false, false, false, 160), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 164
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 164, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 164), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 168
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 168, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 168), "html", null, true);
            yield "</span>
                    <span class=\"label\">Cache puts</span>
                </div>
            </div>
        ";
        }
        // line 173
        yield "    </div>

    <div class=\"sf-tabs\" style=\"margin-top: 20px;\">
        <div class=\"tab ";
        // line 176
        yield (string) ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 176, $this->source); })()), "queries", [], "any", false, false, false, 176))) ? ("disabled") : (""));
        yield "\">
            ";
        // line 177
        $context["group_queries"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 177, $this->source); })()), "query", [], "any", false, false, false, 177), "getBoolean", ["group", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 177, $this->source); })()), "querycount", [], "any", false, false, false, 177) > 100)], "method", false, false, false, 177);
        // line 178
        yield "            <h3 class=\"tab-title\">
                ";
        // line 179
        if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 179, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 180
            yield "                    Grouped Statements
                ";
        } else {
            // line 182
            yield "                    Queries
                ";
        }
        // line 184
        yield "            </h3>

            <div class=\"tab-content\">
                ";
        // line 187
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 187, $this->source); })()), "queries", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 188
            yield "                    <div class=\"empty\">
                        <p>No executed queries.</p>
                    </div>
                ";
        } else {
            // line 192
            yield "                    ";
            if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 192, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 193
                yield "                        <p><a href=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 193, $this->source); })()), "group" => false]), "html", null, true);
                yield "\">Show all queries</a></p>
                    ";
            } else {
                // line 195
                yield "                        <p><a href=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 195, $this->source); })()), "group" => true]), "html", null, true);
                yield "\">Group similar statements</a></p>
                    ";
            }
            // line 197
            yield "
                    ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 198, $this->source); })()), "queries", [], "any", false, false, false, 198));
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
            foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
                // line 199
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 199, $this->source); })()), "connections", [], "any", false, false, false, 199)) > 1)) {
                    // line 200
                    yield "                            <h3>";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["connection"], "html", null, true);
                    yield " <small>connection</small></h3>
                        ";
                }
                // line 202
                yield "
                        ";
                // line 203
                if (Twig\Extension\CoreExtension::testEmpty($context["queries"])) {
                    // line 204
                    yield "                            <div class=\"empty\">
                                <p>No database queries were performed.</p>
                            </div>
                        ";
                } else {
                    // line 208
                    yield "                            ";
                    if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 208, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 209
                        yield "                                ";
                        $context["queries"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 209, $this->source); })()), "groupedQueries", [], "any", false, false, false, 209), $context["connection"], [], "array", false, false, false, 209);
                        // line 210
                        yield "                            ";
                    }
                    // line 211
                    yield "                            <table class=\"alt queries-table\">
                                <thead>
                                <tr>
                                    ";
                    // line 214
                    if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 214, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 215
                        yield "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, \x27queries-";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 215), "html", null, true);
                        yield "\x27)\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, \x27queries-";
                        // line 216
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 216), "html", null, true);
                        yield "\x27)\" style=\"cursor: pointer;\">Count<span></span></th>
                                    ";
                    } else {
                        // line 218
                        yield "                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, \x27queries-";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 218), "html", null, true);
                        yield "\x27)\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, \x27queries-";
                        // line 219
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 219), "html", null, true);
                        yield "\x27)\" style=\"cursor: pointer;\">Time<span></span></th>
                                    ";
                    }
                    // line 221
                    yield "                                    <th style=\"width: 100%;\">Info</th>
                                </tr>
                                </thead>
                                <tbody id=\"queries-";
                    // line 224
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 224), "html", null, true);
                    yield "\">
                                ";
                    // line 225
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["queries"]);
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
                    foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                        // line 226
                        yield "                                    ";
                        $context["i"] = (((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 226, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "index", [], "any", false, false, false, 226)) : ($context["i"]));
                        // line 227
                        yield "                                    <tr id=\"queryNo-";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 227), "loop", [], "any", false, false, false, 227), "index", [], "any", false, false, false, 227), "html", null, true);
                        yield "\">
                                        ";
                        // line 228
                        if ((($tmp = (isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 228, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 229
                            yield "                                            <td class=\"time-container\">
                                                <span class=\"time-bar\" style=\"width:";
                            // line 230
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 230)), "html", null, true);
                            yield "%\"></span>
                                                <span class=\"nowrap\">";
                            // line 231
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 231) * 1000)), "html", null, true);
                            yield "&nbsp;ms<br />(";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 231)), "html", null, true);
                            yield "%)</span>
                                            </td>
                                            <td class=\"nowrap\">";
                            // line 233
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "count", [], "any", false, false, false, 233), "html", null, true);
                            yield "</td>
                                        ";
                        } else {
                            // line 235
                            yield "                                            <td class=\"nowrap\">";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 235), "html", null, true);
                            yield "</td>
                                            <td>
                                                <span class=\"nowrap\">";
                            // line 237
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 237) * 1000)), "html", null, true);
                            yield "&nbsp;ms</span>
                                                ";
                            // line 238
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["query"], "ranOnPrimary", [], "any", true, true, false, 238) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["query"], "ranOnPrimary", [], "any", false, false, false, 238)))) {
                                // line 239
                                yield "                                                    <br />
                                                    <span class=\"badge\">";
                                // line 240
                                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "ranOnPrimary", [], "any", false, false, false, 240)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Primary") : ("Replica"));
                                yield "</span>
                                                ";
                            }
                            // line 242
                            yield "                                            </td>
                                        ";
                        }
                        // line 244
                        yield "                                        <td>
                                            ";
                        // line 245
                        yield (string) $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 245));
                        yield "

                                            <div>
                                                <strong class=\"font-normal text-small\">Parameters</strong>: ";
                        // line 248
                        yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 248), 2);
                        yield "
                                            </div>

                                            <div class=\"text-small font-normal\">
                                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                        // line 252
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 252), "loop", [], "any", false, false, false, 252), "index", [], "any", false, false, false, 252), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                                ";
                        // line 254
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 255
                            yield "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                            // line 256
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 256), "loop", [], "any", false, false, false, 256), "index", [], "any", false, false, false, 256), "html", null, true);
                            yield "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                                ";
                        }
                        // line 258
                        yield "
                                                ";
                        // line 259
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 260
                            yield "                                                    &nbsp;&nbsp;
                                                    <a class=\"link-inverse\" href=\"";
                            // line 261
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 261, $this->source); })()), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"]]), "html", null, true);
                            yield "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 261), "loop", [], "any", false, false, false, 261), "index", [], "any", false, false, false, 261), "html", null, true);
                            yield "\">Explain query</a>
                                                ";
                        }
                        // line 263
                        yield "
                                                ";
                        // line 264
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 264)) {
                            // line 265
                            yield "                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-";
                            // line 266
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 266), "loop", [], "any", false, false, false, 266), "index", [], "any", false, false, false, 266), "html", null, true);
                            yield "\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                                ";
                        }
                        // line 268
                        yield "                                            </div>

                                            <div id=\"formatted-query-";
                        // line 270
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 270), "loop", [], "any", false, false, false, 270), "index", [], "any", false, false, false, 270), "html", null, true);
                        yield "\" class=\"sql-runnable hidden\">
                                                ";
                        // line 271
                        yield (string) $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 271), true);
                        yield "
                                                <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                        // line 272
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 272), false), "html_attr");
                        yield "\">Copy</button>
                                            </div>

                                            ";
                        // line 275
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 275)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 276
                            yield "                                                <div id=\"original-query-";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 276), "loop", [], "any", false, false, false, 276), "index", [], "any", false, false, false, 276), "html", null, true);
                            yield "\" class=\"sql-runnable hidden\">
                                                    ";
                            // line 277
                            $context["runnable_sql"] = $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters((CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 277) . ";"), CoreExtension::getAttribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 277));
                            // line 278
                            yield "                                                    ";
                            yield (string) $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql((isset($context["runnable_sql"]) || array_key_exists("runnable_sql", $context) ? $context["runnable_sql"] : (function () { throw new RuntimeError('Variable "runnable_sql" does not exist.', 278, $this->source); })()));
                            yield "
                                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                            // line 279
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["runnable_sql"]) || array_key_exists("runnable_sql", $context) ? $context["runnable_sql"] : (function () { throw new RuntimeError('Variable "runnable_sql" does not exist.', 279, $this->source); })()), "html_attr");
                            yield "\">Copy</button>
                                                </div>
                                            ";
                        }
                        // line 282
                        yield "
                                            ";
                        // line 283
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 283)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 284
                            yield "                                                <div id=\"explain-";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 284), "loop", [], "any", false, false, false, 284), "index", [], "any", false, false, false, 284), "html", null, true);
                            yield "\" class=\"sql-explain\"></div>
                                            ";
                        }
                        // line 286
                        yield "
                                            ";
                        // line 287
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 287)) {
                            // line 288
                            yield "                                                <div id=\"backtrace-";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                            yield "-";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 288), "loop", [], "any", false, false, false, 288), "index", [], "any", false, false, false, 288), "html", null, true);
                            yield "\" class=\"hidden\">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th scope=\"col\">#</th>
                                                            <th scope=\"col\">File/Call</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
                            // line 297
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 297));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                                // line 298
                                yield "                                                            <tr>
                                                                <td>";
                                // line 299
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 299), "html", null, true);
                                yield "</td>
                                                                <td>
                                                                            <span class=\"text-small\">
                                                                                ";
                                // line 302
                                $context["line_number"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", true, true, false, 302)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", false, false, false, 302), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 302), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 302), [], "array", false, true, false, 302), "line", [], "any", true, true, false, 302)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 302), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 302), [], "array", false, false, false, 302), "line", [], "any", false, false, false, 302), 1)) : (1)))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 302), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 302), [], "array", false, true, false, 302), "line", [], "any", true, true, false, 302)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 302), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 302), [], "array", false, false, false, 302), "line", [], "any", false, false, false, 302), 1)) : (1))));
                                // line 303
                                yield "                                                                                ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 303)) {
                                    // line 304
                                    yield "                                                                                    <a href=\"";
                                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 304), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 304, $this->source); })())), "html", null, true);
                                    yield "\">
                                                                                ";
                                }
                                // line 306
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 306), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 306), [], "array", false, true, false, 306), "class", [], "any", true, true, false, 306)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 306), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 306), [], "array", false, false, false, 306), "class", [], "any", false, false, false, 306))) : ("")) . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 306), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 306), [], "array", false, true, false, 306), "class", [], "any", true, true, false, 306)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", true, true, false, 306)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 306), "::")) : ("::"))) : (""))), "html", null, true);
                                // line 307
                                yield "<span class=\"status-warning\">";
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, true, false, 307), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 307), [], "array", false, true, false, 307), "function", [], "any", true, true, false, 307)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 307), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 307), [], "array", false, false, false, 307), "function", [], "any", false, false, false, 307), CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 307))) : (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 307))), "html", null, true);
                                yield "</span>
                                                                                ";
                                // line 308
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 308)) {
                                    // line 309
                                    yield "                                                                                    </a>
                                                                                ";
                                }
                                // line 311
                                yield "                                                                                (line ";
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 311, $this->source); })()), "html", null, true);
                                yield ")
                                                                            </span>
                                                                </td>
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
                            unset($context['_seq'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent);
                            $context += $_parent;
                            // line 316
                            yield "                                                        </tbody>
                                                    </table>
                                                </div>
                                            ";
                        }
                        // line 320
                        yield "                                        </td>
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
                    unset($context['_seq'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 323
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 326
                yield "                    ";
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
            unset($context['_seq'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 327
            yield "                ";
        }
        // line 328
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 331
        yield (string) ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 331, $this->source); })()), "connections", [], "any", false, false, false, 331))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Database Connections</h3>
            <div class=\"tab-content\">
                ";
        // line 334
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 334, $this->source); })()), "connections", [], "any", false, false, false, 334)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 335
            yield "                    <div class=\"empty\">
                        <p>There are no configured database connections.</p>
                    </div>
                ";
        } else {
            // line 339
            yield "                    ";
            yield (string) $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 339, $this->getSourceContext())->macro_render_simple_table(...["Name", "Service", CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 339, $this->source); })()), "connections", [], "any", false, false, false, 339)]);
            yield "
                ";
        }
        // line 341
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 344
        yield (string) ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 344, $this->source); })()), "managers", [], "any", false, false, false, 344))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Entity Managers</h3>
            <div class=\"tab-content\">

                ";
        // line 348
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 348, $this->source); })()), "managers", [], "any", false, false, false, 348)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 349
            yield "                    <div class=\"empty\">
                        <p>There are no configured entity managers.</p>
                    </div>
                ";
        } else {
            // line 353
            yield "                    ";
            yield (string) $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 353, $this->getSourceContext())->macro_render_simple_table(...["Name", "Service", CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 353, $this->source); })()), "managers", [], "any", false, false, false, 353)]);
            yield "
                ";
        }
        // line 355
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 358
        yield (string) (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 358, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Second Level Cache</h3>
            <div class=\"tab-content\">

                ";
        // line 362
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 362, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 362)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 363
            yield "                    <div class=\"empty\">
                        <p>Second Level Cache is not enabled.</p>
                    </div>
                ";
        } else {
            // line 367
            yield "                    ";
            if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 367, $this->source); })()), "cacheCounts", [], "any", false, false, false, 367)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 368
                yield "                        <div class=\"empty\">
                            <p>Second level cache information is not available.</p>
                        </div>
                    ";
            } else {
                // line 372
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 374
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 374, $this->source); })()), "cacheCounts", [], "any", false, false, false, 374), "hits", [], "any", false, false, false, 374), "html", null, true);
                yield "</span>
                                <span class=\"label\">Hits</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 379
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 379, $this->source); })()), "cacheCounts", [], "any", false, false, false, 379), "misses", [], "any", false, false, false, 379), "html", null, true);
                yield "</span>
                                <span class=\"label\">Misses</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 384
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 384, $this->source); })()), "cacheCounts", [], "any", false, false, false, 384), "puts", [], "any", false, false, false, 384), "html", null, true);
                yield "</span>
                                <span class=\"label\">Puts</span>
                            </div>
                        </div>

                        ";
                // line 389
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 389, $this->source); })()), "cacheRegions", [], "any", false, false, false, 389), "hits", [], "any", false, false, false, 389)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 390
                    yield "                            <h3>Number of cache hits</h3>
                            ";
                    // line 391
                    yield (string) $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 391, $this->getSourceContext())->macro_render_simple_table(...["Region", "Hits", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 391, $this->source); })()), "cacheRegions", [], "any", false, false, false, 391), "hits", [], "any", false, false, false, 391)]);
                    yield "
                        ";
                }
                // line 393
                yield "
                        ";
                // line 394
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 394, $this->source); })()), "cacheRegions", [], "any", false, false, false, 394), "misses", [], "any", false, false, false, 394)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 395
                    yield "                            <h3>Number of cache misses</h3>
                            ";
                    // line 396
                    yield (string) $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 396, $this->getSourceContext())->macro_render_simple_table(...["Region", "Misses", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 396, $this->source); })()), "cacheRegions", [], "any", false, false, false, 396), "misses", [], "any", false, false, false, 396)]);
                    yield "
                        ";
                }
                // line 398
                yield "
                        ";
                // line 399
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 399, $this->source); })()), "cacheRegions", [], "any", false, false, false, 399), "puts", [], "any", false, false, false, 399)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 400
                    yield "                            <h3>Number of cache puts</h3>
                            ";
                    // line 401
                    yield (string) $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 401, $this->getSourceContext())->macro_render_simple_table(...["Region", "Puts", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 401, $this->source); })()), "cacheRegions", [], "any", false, false, false, 401), "puts", [], "any", false, false, false, 401)]);
                    yield "
                        ";
                }
                // line 403
                yield "                    ";
            }
            // line 404
            yield "                ";
        }
        // line 405
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Managed Entities</h3>
            <div class=\"tab-content\">
                ";
        // line 411
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 411, $this->source); })()), "managedEntityCountByClass", [], "any", false, false, false, 411)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 412
            yield "                    <div class=\"empty\">
                        <p>No managed entities.</p>
                    </div>
                ";
        } else {
            // line 416
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 416, $this->source); })()), "managedEntityCountByClass", [], "any", false, false, false, 416));
            foreach ($context['_seq'] as $context["manager"] => $context["entityCounts"]) {
                // line 417
                yield "                        <h4>";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["manager"], "html", null, true);
                yield " <small>entity manager</small></h4>
                        ";
                // line 418
                yield (string) $macros["helper"]->getTemplateForMacro("macro_render_simple_table", $context, 418, $this->getSourceContext())->macro_render_simple_table(...["Class", "Amount of managed objects", $context["entityCounts"]]);
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['manager'], $context['entityCounts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 420
            yield "                ";
        }
        // line 421
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 424
        yield (string) (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 424, $this->source); })()), "entities", [], "any", false, false, false, 424)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Entities Mapping</h3>
            <div class=\"tab-content\">

                ";
        // line 428
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 428, $this->source); })()), "entities", [], "any", false, false, false, 428)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 429
            yield "                    <div class=\"empty\">
                        <p>No mapped entities.</p>
                    </div>
                ";
        } else {
            // line 433
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 433, $this->source); })()), "entities", [], "any", false, false, false, 433));
            foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
                // line 434
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 434, $this->source); })()), "managers", [], "any", false, false, false, 434)) > 1)) {
                    // line 435
                    yield "                            <h4>";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["manager"], "html", null, true);
                    yield " <small>entity manager</small></h4>
                        ";
                }
                // line 437
                yield "
                        ";
                // line 438
                if (Twig\Extension\CoreExtension::testEmpty($context["classes"])) {
                    // line 439
                    yield "                            <div class=\"empty\">
                                <p>No loaded entities.</p>
                            </div>
                        ";
                } else {
                    // line 443
                    yield "                            <table>
                                <thead>
                                <tr>
                                    <th scope=\"col\">Class</th>
                                    <th scope=\"col\">Mapping errors</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 451
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["classes"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                        // line 452
                        yield "                                    ";
                        $context["contains_errors"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 452), $context["manager"], [], "array", true, true, false, 452) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 452), $context["manager"], [], "array", false, true, false, 452), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 452), [], "array", true, true, false, 452));
                        // line 453
                        yield "                                    <tr class=\"";
                        yield (string) (((($tmp = (isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new RuntimeError('Variable "contains_errors" does not exist.', 453, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("status-error") : (""));
                        yield "\">
                                        <td>
                                            <a href=\"";
                        // line 455
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "file", [], "any", false, false, false, 455), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "line", [], "any", false, false, false, 455)), "html", null, true);
                        yield "\">";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 455), "html", null, true);
                        yield "</a>
                                        </td>
                                        <td class=\"font-normal\">
                                            ";
                        // line 458
                        if ((($tmp = (isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new RuntimeError('Variable "contains_errors" does not exist.', 458, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 459
                            yield "                                                <ul>
                                                    ";
                            // line 460
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 460, $this->source); })()), "mappingErrors", [], "any", false, false, false, 460), $context["manager"], [], "array", false, false, false, 460), CoreExtension::getAttribute($this->env, $this->source, $context["class"], "class", [], "any", false, false, false, 460), [], "array", false, false, false, 460));
                            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                                // line 461
                                yield "                                                        <li>";
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                                yield "</li>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent);
                            $context += $_parent;
                            // line 463
                            yield "                                                </ul>
                                            ";
                        } else {
                            // line 465
                            yield "                                                No errors.
                                            ";
                        }
                        // line 467
                        yield "                                        </td>
                                    </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['class'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 470
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 473
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['manager'], $context['classes'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 474
            yield "                ";
        }
        // line 475
        yield "            </div>
        </div>
    </div>

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute(\x27data-target-id\x27);
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != \x27block\x27) {
                if (targetElement.getAttribute(\x27data-sfurl\x27) !== link.href) {
                    fetch(link.href, {
                        headers: {\x27X-Requested-With\x27: \x27XMLHttpRequest\x27}
                    }).then(async function (response) {
                        targetElement.innerHTML = await response.text()
                        targetElement.setAttribute(\x27data-sfurl\x27, link.href)
                    }, function () {
                        targetElement.innerHTML = \x27An error occurred while loading the query explanation.\x27;
                    })
                }

                targetElement.style.display = \x27block\x27;
                link.innerHTML = \x27Hide query explanation\x27;
            } else {
                targetElement.style.display = \x27none\x27;
                link.innerHTML = \x27Explain query\x27;
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute(\x27data-sort-direction\x27)) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute(\x27data-sort-direction\x27);
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = \x27\x27;
                }
            }

            header.setAttribute(\x27data-sort-direction\x27, (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? \x27<span class=\"text-muted\">&#9650;</span>\x27 : \x27<span class=\"text-muted\">&#9660;</span>\x27;

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll(\x27[data-clipboard-text]\x27).forEach(function(button) {
                button.classList.remove(\x27hidden\x27);
                button.addEventListener(\x27click\x27, function() {
                    navigator.clipboard.writeText(button.getAttribute(\x27data-clipboard-text\x27));
                })
            });
        }

        //]]></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 553
    public function macro_render_simple_table($label1 = null, $label2 = null, $data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label1" => $label1,
            "label2" => $label2,
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            // line 554
            yield "    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
            // line 557
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label1"]) || array_key_exists("label1", $context) ? $context["label1"] : (function () { throw new RuntimeError('Variable "label1" does not exist.', 557, $this->source); })()), "html", null, true);
            yield "</th>
            <th scope=\"col\">";
            // line 558
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label2"]) || array_key_exists("label2", $context) ? $context["label2"] : (function () { throw new RuntimeError('Variable "label2" does not exist.', 558, $this->source); })()), "html", null, true);
            yield "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 562
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 562, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 563
                yield "            <tr>
                <th scope=\"row\">";
                // line 564
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</th>
                <td>";
                // line 565
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 568
            yield "        </tbody>
    </table>
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
        return "@Doctrine/Collector/db.html.twig";
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
        return array (  1378 => 568,  1368 => 565,  1364 => 564,  1361 => 563,  1357 => 562,  1350 => 558,  1346 => 557,  1341 => 554,  1321 => 553,  1234 => 475,  1231 => 474,  1224 => 473,  1219 => 470,  1210 => 467,  1206 => 465,  1202 => 463,  1192 => 461,  1188 => 460,  1185 => 459,  1183 => 458,  1175 => 455,  1169 => 453,  1166 => 452,  1162 => 451,  1152 => 443,  1146 => 439,  1144 => 438,  1141 => 437,  1135 => 435,  1132 => 434,  1127 => 433,  1121 => 429,  1119 => 428,  1112 => 424,  1107 => 421,  1104 => 420,  1095 => 418,  1090 => 417,  1085 => 416,  1079 => 412,  1077 => 411,  1069 => 405,  1066 => 404,  1063 => 403,  1058 => 401,  1055 => 400,  1053 => 399,  1050 => 398,  1045 => 396,  1042 => 395,  1040 => 394,  1037 => 393,  1032 => 391,  1029 => 390,  1027 => 389,  1019 => 384,  1011 => 379,  1003 => 374,  999 => 372,  993 => 368,  990 => 367,  984 => 363,  982 => 362,  975 => 358,  970 => 355,  964 => 353,  958 => 349,  956 => 348,  949 => 344,  944 => 341,  938 => 339,  932 => 335,  930 => 334,  924 => 331,  919 => 328,  916 => 327,  901 => 326,  896 => 323,  879 => 320,  873 => 316,  852 => 311,  848 => 309,  846 => 308,  841 => 307,  839 => 306,  833 => 304,  830 => 303,  828 => 302,  822 => 299,  819 => 298,  802 => 297,  787 => 288,  785 => 287,  782 => 286,  774 => 284,  772 => 283,  769 => 282,  763 => 279,  758 => 278,  756 => 277,  749 => 276,  747 => 275,  741 => 272,  737 => 271,  731 => 270,  727 => 268,  720 => 266,  717 => 265,  715 => 264,  712 => 263,  703 => 261,  700 => 260,  698 => 259,  695 => 258,  688 => 256,  685 => 255,  683 => 254,  676 => 252,  669 => 248,  663 => 245,  660 => 244,  656 => 242,  651 => 240,  648 => 239,  646 => 238,  642 => 237,  636 => 235,  631 => 233,  624 => 231,  620 => 230,  617 => 229,  615 => 228,  608 => 227,  605 => 226,  588 => 225,  584 => 224,  579 => 221,  574 => 219,  569 => 218,  564 => 216,  559 => 215,  557 => 214,  552 => 211,  549 => 210,  546 => 209,  543 => 208,  537 => 204,  535 => 203,  532 => 202,  526 => 200,  523 => 199,  506 => 198,  503 => 197,  497 => 195,  491 => 193,  488 => 192,  482 => 188,  480 => 187,  475 => 184,  471 => 182,  467 => 180,  465 => 179,  462 => 178,  460 => 177,  456 => 176,  451 => 173,  443 => 168,  436 => 164,  429 => 160,  425 => 158,  423 => 157,  415 => 152,  407 => 147,  399 => 142,  391 => 137,  383 => 132,  374 => 125,  363 => 116,  361 => 115,  347 => 103,  334 => 102,  319 => 98,  315 => 96,  313 => 95,  312 => 94,  311 => 92,  309 => 91,  306 => 90,  293 => 89,  281 => 86,  275 => 83,  272 => 82,  270 => 81,  265 => 79,  258 => 78,  245 => 77,  230 => 72,  227 => 71,  223 => 70,  216 => 65,  208 => 62,  199 => 58,  192 => 54,  188 => 52,  186 => 51,  181 => 49,  172 => 45,  165 => 41,  158 => 37,  149 => 33,  145 => 31,  143 => 30,  140 => 29,  136 => 28,  129 => 24,  122 => 21,  115 => 18,  113 => 17,  110 => 16,  104 => 14,  98 => 12,  96 => 11,  93 => 10,  90 => 9,  88 => 8,  85 => 7,  82 => 6,  69 => 5,  59 => 1,  57 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends request.isXmlHttpRequest ? \x27@WebProfiler/Profiler/ajax_layout.html.twig\x27 : \x27@WebProfiler/Profiler/layout.html.twig\x27 %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.querycount > 0 or collector.invalidEntityCount > 0 %}

        {% set icon %}
            {% set status = collector.invalidEntityCount > 0 ? \x27red\x27 : collector.querycount > 50 ? \x27yellow\x27 %}

            {% if profiler_markup_version >= 3 %}
                {{ include(\x27@Doctrine/Collector/database.svg\x27) }}
            {% else %}
                <span class=\"icon\">{{ include(\x27@Doctrine/Collector/icon.svg\x27) }}</span>
            {% endif %}

            {% if collector.querycount == 0 and collector.invalidEntityCount > 0 %}
                <span class=\"sf-toolbar-value\">{{ collector.invalidEntityCount }}</span>
                <span class=\"sf-toolbar-label\">errors</span>
            {% else %}
                <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">{{ \x27%0.2f\x27|format(collector.time * 1000) }}</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status {{ collector.querycount > 50 ? \x27sf-toolbar-status-yellow\x27 : \x27\x27 }}\">{{ collector.querycount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">{{ collector.groupedQueryCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>{{ \x27%0.2f\x27|format(collector.time * 1000) }} ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status {{ collector.invalidEntityCount > 0 ? \x27sf-toolbar-status-red\x27 : \x27\x27 }}\">{{ collector.invalidEntityCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Managed entities</b>
                <span class=\"sf-toolbar-status\">{{ collector.managedEntityCount }}</span>
            </div>
            {% if collector.cacheEnabled %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.cacheHitsCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status {{ collector.cacheMissesCount > 0 ? \x27sf-toolbar-status-yellow\x27 : \x27\x27 }}\">{{ collector.cacheMissesCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status {{ collector.cachePutsCount > 0 ? \x27sf-toolbar-status-yellow\x27 : \x27\x27 }}\">{{ collector.cachePutsCount }}</span>
                </div>
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            {% endif %}
        {% endset %}

        {{ include(\x27@WebProfiler/Profiler/toolbar_item.html.twig\x27, { link: profiler_url, status: status|default(\x27\x27) }) }}

    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.invalidEntityCount > 0 ? \x27label-status-error\x27 }} {{ collector.querycount == 0 ? \x27disabled\x27 }}\">
        <span class=\"icon\">{{ include(\x27@Doctrine/Collector/\x27 ~ (profiler_markup_version < 3 ? \x27icon\x27 : \x27database\x27) ~ \x27.svg\x27) }}</span>
        <strong>Doctrine</strong>
        {% if collector.invalidEntityCount %}
            <span class=\"count\">
                <span>{{ collector.invalidEntityCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% if \x27explain\x27 == page %}
        {{ render(controller(\x27doctrine.profiler_controller::explainAction\x27, {
            token: token,
            panel: \x27db\x27,
            connectionName: request.query.get(\x27connection\x27),
            query: request.query.get(\x27query\x27)
        })) }}
    {% else %}
        {{ block(\x27queries\x27) }}
    {% endif %}
{% endblock %}

{% block queries %}
    <style>
        :root {
            --query-time-bar-color: var(--gray-200);
        }
        .theme-dark {
            --query-time-bar-color: var(--gray-700);
        }
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px var(--page-background); }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: var(--query-time-bar-color); }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
        {% if profiler_markup_version >= 3 %}
        .highlight .keyword   { color: var(--highlight-keyword); font-weight: bold; }
        .highlight .word      { color: var(--color-text); }
        .highlight .variable  { color: var(--highlight-variable); }
        .highlight .symbol    { color: var(--color-text); }
        .highlight .comment   { color: var(--highlight-comment); }
        .highlight .string    { color: var(--highlight-string); }
        .highlight .number    { color: var(--highlight-constant); font-weight: bold; }
        .highlight .error     { color: var(--highlight-error); }
        {% endif %}
    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.querycount }}</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.groupedQueryCount }}</span>
                <span class=\"label\">Different statements</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ \x27%0.2f\x27|format(collector.time * 1000) }} ms</span>
                <span class=\"label\">Query time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.invalidEntityCount }}</span>
                <span class=\"label\">Invalid entities</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.managedEntityCount }}</span>
                <span class=\"label\">Managed entities</span>
            </div>
        </div>

        {% if collector.cacheEnabled %}
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.cacheHitsCount }}</span>
                    <span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.cacheMissesCount }}</span>
                    <span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.cachePutsCount }}</span>
                    <span class=\"label\">Cache puts</span>
                </div>
            </div>
        {% endif %}
    </div>

    <div class=\"sf-tabs\" style=\"margin-top: 20px;\">
        <div class=\"tab {{ collector.queries is empty ? \x27disabled\x27 }}\">
            {% set group_queries = request.query.getBoolean(\x27group\x27, collector.querycount > 100) %}
            <h3 class=\"tab-title\">
                {% if group_queries %}
                    Grouped Statements
                {% else %}
                    Queries
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% if not collector.queries %}
                    <div class=\"empty\">
                        <p>No executed queries.</p>
                    </div>
                {% else %}
                    {% if group_queries %}
                        <p><a href=\"{{ path(\x27_profiler\x27, { panel: \x27db\x27, token: token, group: false }) }}\">Show all queries</a></p>
                    {% else %}
                        <p><a href=\"{{ path(\x27_profiler\x27, { panel: \x27db\x27, token: token, group: true }) }}\">Group similar statements</a></p>
                    {% endif %}

                    {% for connection, queries in collector.queries %}
                        {% if collector.connections|length > 1 %}
                            <h3>{{ connection }} <small>connection</small></h3>
                        {% endif %}

                        {% if queries is empty %}
                            <div class=\"empty\">
                                <p>No database queries were performed.</p>
                            </div>
                        {% else %}
                            {% if group_queries %}
                                {% set queries = collector.groupedQueries[connection] %}
                            {% endif %}
                            <table class=\"alt queries-table\">
                                <thead>
                                <tr>
                                    {% if group_queries %}
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, \x27queries-{{ loop.index }}\x27)\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, \x27queries-{{ loop.index }}\x27)\" style=\"cursor: pointer;\">Count<span></span></th>
                                    {% else %}
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, \x27queries-{{ loop.index }}\x27)\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, \x27queries-{{ loop.index }}\x27)\" style=\"cursor: pointer;\">Time<span></span></th>
                                    {% endif %}
                                    <th style=\"width: 100%;\">Info</th>
                                </tr>
                                </thead>
                                <tbody id=\"queries-{{ loop.index }}\">
                                {% for i, query in queries %}
                                    {% set i = group_queries ? query.index : i %}
                                    <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\">
                                        {% if group_queries %}
                                            <td class=\"time-container\">
                                                <span class=\"time-bar\" style=\"width:{{ \x27%0.2f\x27|format(query.executionPercent) }}%\"></span>
                                                <span class=\"nowrap\">{{ \x27%0.2f\x27|format(query.executionMS * 1000) }}&nbsp;ms<br />({{ \x27%0.2f\x27|format(query.executionPercent) }}%)</span>
                                            </td>
                                            <td class=\"nowrap\">{{ query.count }}</td>
                                        {% else %}
                                            <td class=\"nowrap\">{{ loop.index }}</td>
                                            <td>
                                                <span class=\"nowrap\">{{ \x27%0.2f\x27|format(query.executionMS * 1000) }}&nbsp;ms</span>
                                                {% if query.ranOnPrimary is defined and query.ranOnPrimary is not null %}
                                                    <br />
                                                    <span class=\"badge\">{{ query.ranOnPrimary ? \x27Primary\x27 : \x27Replica\x27 }}</span>
                                                {% endif %}
                                            </td>
                                        {% endif %}
                                        <td>
                                            {{ query.sql|doctrine_prettify_sql }}

                                            <div>
                                                <strong class=\"font-normal text-small\">Parameters</strong>: {{ profiler_dump(query.params, 2) }}
                                            </div>

                                            <div class=\"text-small font-normal\">
                                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                                {% if query.runnable %}
                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                                {% endif %}

                                                {% if query.explainable %}
                                                    &nbsp;&nbsp;
                                                    <a class=\"link-inverse\" href=\"{{ path(\x27_profiler\x27, { panel: \x27db\x27, token: token, page: \x27explain\x27, connection: connection, query: i }) }}\" onclick=\"return explain(this);\" data-target-id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\">Explain query</a>
                                                {% endif %}

                                                {% if query.backtrace is defined %}
                                                    &nbsp;&nbsp;
                                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                                {% endif %}
                                            </div>

                                            <div id=\"formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                                {{ query.sql|doctrine_format_sql(highlight = true) }}
                                                <button class=\"btn btn-sm hidden\" data-clipboard-text=\"{{ query.sql|doctrine_format_sql(highlight = false)|e(\x27html_attr\x27) }}\">Copy</button>
                                            </div>

                                            {% if query.runnable %}
                                                <div id=\"original-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                                    {% set runnable_sql = (query.sql ~ \x27;\x27)|doctrine_replace_query_parameters(query.params) %}
                                                    {{ runnable_sql|doctrine_prettify_sql }}
                                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"{{ runnable_sql|e(\x27html_attr\x27) }}\">Copy</button>
                                                </div>
                                            {% endif %}

                                            {% if query.explainable %}
                                                <div id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-explain\"></div>
                                            {% endif %}

                                            {% if query.backtrace is defined %}
                                                <div id=\"backtrace-{{ i }}-{{ loop.parent.loop.index }}\" class=\"hidden\">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th scope=\"col\">#</th>
                                                            <th scope=\"col\">File/Call</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% for trace in query.backtrace %}
                                                            <tr>
                                                                <td>{{ loop.index }}</td>
                                                                <td>
                                                                            <span class=\"text-small\">
                                                                                {% set line_number = trace.line|default(query.backtrace[loop.index].line|default(1)) %}
                                                                                {% if trace.file is defined %}
                                                                                    <a href=\"{{ trace.file|file_link(line_number) }}\">
                                                                                {% endif %}
                                                                                        {{- query.backtrace[loop.index].class|default ~ (query.backtrace[loop.index].class is defined ? trace.type|default(\x27::\x27)) -}}
                                                                                    <span class=\"status-warning\">{{ query.backtrace[loop.index].function|default(trace.function) }}</span>
                                                                                {% if trace.file is defined %}
                                                                                    </a>
                                                                                {% endif %}
                                                                                (line {{ line_number }})
                                                                            </span>
                                                                </td>
                                                            </tr>
                                                        {% endfor %}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    {% endfor %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.connections is empty ? \x27disabled\x27 }}\">
            <h3 class=\"tab-title\">Database Connections</h3>
            <div class=\"tab-content\">
                {% if not collector.connections %}
                    <div class=\"empty\">
                        <p>There are no configured database connections.</p>
                    </div>
                {% else %}
                    {{ helper.render_simple_table(\x27Name\x27, \x27Service\x27, collector.connections) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.managers is empty ? \x27disabled\x27 }}\">
            <h3 class=\"tab-title\">Entity Managers</h3>
            <div class=\"tab-content\">

                {% if not collector.managers %}
                    <div class=\"empty\">
                        <p>There are no configured entity managers.</p>
                    </div>
                {% else %}
                    {{ helper.render_simple_table(\x27Name\x27, \x27Service\x27, collector.managers) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ not collector.cacheEnabled ? \x27disabled\x27 }}\">
            <h3 class=\"tab-title\">Second Level Cache</h3>
            <div class=\"tab-content\">

                {% if not collector.cacheEnabled %}
                    <div class=\"empty\">
                        <p>Second Level Cache is not enabled.</p>
                    </div>
                {% else %}
                    {% if not collector.cacheCounts %}
                        <div class=\"empty\">
                            <p>Second level cache information is not available.</p>
                        </div>
                    {% else %}
                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.cacheCounts.hits }}</span>
                                <span class=\"label\">Hits</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.cacheCounts.misses }}</span>
                                <span class=\"label\">Misses</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.cacheCounts.puts }}</span>
                                <span class=\"label\">Puts</span>
                            </div>
                        </div>

                        {% if collector.cacheRegions.hits %}
                            <h3>Number of cache hits</h3>
                            {{ helper.render_simple_table(\x27Region\x27, \x27Hits\x27, collector.cacheRegions.hits) }}
                        {% endif %}

                        {% if collector.cacheRegions.misses %}
                            <h3>Number of cache misses</h3>
                            {{ helper.render_simple_table(\x27Region\x27, \x27Misses\x27, collector.cacheRegions.misses) }}
                        {% endif %}

                        {% if collector.cacheRegions.puts %}
                            <h3>Number of cache puts</h3>
                            {{ helper.render_simple_table(\x27Region\x27, \x27Puts\x27, collector.cacheRegions.puts) }}
                        {% endif %}
                    {% endif %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Managed Entities</h3>
            <div class=\"tab-content\">
                {% if not collector.managedEntityCountByClass %}
                    <div class=\"empty\">
                        <p>No managed entities.</p>
                    </div>
                {% else %}
                    {% for manager, entityCounts in collector.managedEntityCountByClass %}
                        <h4>{{ manager }} <small>entity manager</small></h4>
                        {{ helper.render_simple_table(\x27Class\x27, \x27Amount of managed objects\x27, entityCounts) }}
                    {% endfor %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ not collector.entities ? \x27disabled\x27 }}\">
            <h3 class=\"tab-title\">Entities Mapping</h3>
            <div class=\"tab-content\">

                {% if not collector.entities %}
                    <div class=\"empty\">
                        <p>No mapped entities.</p>
                    </div>
                {% else %}
                    {% for manager, classes in collector.entities %}
                        {% if collector.managers|length > 1 %}
                            <h4>{{ manager }} <small>entity manager</small></h4>
                        {% endif %}

                        {% if classes is empty %}
                            <div class=\"empty\">
                                <p>No loaded entities.</p>
                            </div>
                        {% else %}
                            <table>
                                <thead>
                                <tr>
                                    <th scope=\"col\">Class</th>
                                    <th scope=\"col\">Mapping errors</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for class in classes %}
                                    {% set contains_errors = collector.mappingErrors[manager] is defined and collector.mappingErrors[manager][class.class] is defined %}
                                    <tr class=\"{{ contains_errors ? \x27status-error\x27 }}\">
                                        <td>
                                            <a href=\"{{ class.file|file_link(class.line) }}\">{{ class. class}}</a>
                                        </td>
                                        <td class=\"font-normal\">
                                            {% if contains_errors %}
                                                <ul>
                                                    {% for error in collector.mappingErrors[manager][class.class] %}
                                                        <li>{{ error }}</li>
                                                    {% endfor %}
                                                </ul>
                                            {% else %}
                                                No errors.
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute(\x27data-target-id\x27);
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != \x27block\x27) {
                if (targetElement.getAttribute(\x27data-sfurl\x27) !== link.href) {
                    fetch(link.href, {
                        headers: {\x27X-Requested-With\x27: \x27XMLHttpRequest\x27}
                    }).then(async function (response) {
                        targetElement.innerHTML = await response.text()
                        targetElement.setAttribute(\x27data-sfurl\x27, link.href)
                    }, function () {
                        targetElement.innerHTML = \x27An error occurred while loading the query explanation.\x27;
                    })
                }

                targetElement.style.display = \x27block\x27;
                link.innerHTML = \x27Hide query explanation\x27;
            } else {
                targetElement.style.display = \x27none\x27;
                link.innerHTML = \x27Explain query\x27;
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute(\x27data-sort-direction\x27)) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute(\x27data-sort-direction\x27);
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = \x27\x27;
                }
            }

            header.setAttribute(\x27data-sort-direction\x27, (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? \x27<span class=\"text-muted\">&#9650;</span>\x27 : \x27<span class=\"text-muted\">&#9660;</span>\x27;

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll(\x27[data-clipboard-text]\x27).forEach(function(button) {
                button.classList.remove(\x27hidden\x27);
                button.addEventListener(\x27click\x27, function() {
                    navigator.clipboard.writeText(button.getAttribute(\x27data-clipboard-text\x27));
                })
            });
        }

        //]]></script>
{% endblock %}

{% macro render_simple_table(label1, label2, data) %}
    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ label1 }}</th>
            <th scope=\"col\">{{ label2 }}</th>
        </tr>
        </thead>
        <tbody>
        {% for key, value in data %}
            <tr>
                <th scope=\"row\">{{ key }}</th>
                <td>{{ value }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@Doctrine/Collector/db.html.twig", "/home/thierry/Symfony/monApp/app/vendor/doctrine/doctrine-bundle/templates/Collector/db.html.twig");
    }
}
