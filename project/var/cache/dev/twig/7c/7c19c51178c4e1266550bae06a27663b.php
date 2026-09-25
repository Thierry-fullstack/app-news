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

/* @WebProfiler/Collector/messenger.html.twig */
class __TwigTemplate_d093c9d8471a7a93b7e416713f53e40e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

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
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 170px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none; color: inherit; }
        .message-item .icon svg { height: 24px; width: 24px; }
        .message-item .icon-close svg { transform: rotate(180deg); }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }

        #collector-content .message-bus .trace {
            border: var(--border);
            background: var(--base-0);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .message-bus .trace {
            font-size: 12px;
        }
        #collector-content .message-bus .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .message-bus .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
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

        // line 43
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "messages", [], "any", false, false, false, 43)) > 0)) {
            // line 44
            yield "        ";
            $context["status_color"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : (""));
            // line 45
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 46
                yield "            ";
                yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/messenger.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 47
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "messages", [], "any", false, false, false, 47)), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            yield "
        ";
            // line 50
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 51
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "buses", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                    // line 52
                    yield "                ";
                    $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "exceptionsCount", [$context["bus"]], "method", false, false, false, 52);
                    // line 53
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                    // line 54
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bus"], "html", null, true);
                    yield "</b>
                    <span
                        title=\"";
                    // line 56
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 56, $this->source); })()), "html", null, true);
                    yield " message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-";
                    // line 57
                    yield (string) (((($tmp = (isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 57, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : (""));
                    yield "\"
                    >
                        ";
                    // line 59
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "messages", [$context["bus"]], "method", false, false, false, 59)), "html", null, true);
                    yield "
                    </span>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['bus'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 63
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 64
            yield "
        ";
            // line 65
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => "messenger", "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 65, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
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

        // line 70
        yield "    <span class=\"label";
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" label-status-error") : (""));
        yield (string) ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "messages", [], "any", false, false, false, 70))) ? (" disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 71
        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/messenger.svg");
        yield "</span>
        <strong>Messages</strong>
        ";
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 73, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 73) > 0)) {
            // line 74
            yield "            <span class=\"count\">
                <span>";
            // line 75
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 75, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 75), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 78
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
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

        // line 82
        yield "    <h2>Messages</h2>

    ";
        // line 84
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 84, $this->source); })()), "messages", [], "any", false, false, false, 84))) {
            // line 85
            yield "        <div class=\"empty empty-panel\">
            <p>No messages have been collected.</p>
        </div>
    ";
        } elseif ((1 == Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 88
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 88, $this->source); })()), "buses", [], "any", false, false, false, 88)))) {
            // line 89
            yield "        <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
        ";
            // line 90
            yield (string) $this->getTemplateForMacro("macro_render_bus_messages", $context, 90, $this->getSourceContext())->macro_render_bus_messages(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "messages", [], "any", false, false, false, 90), true]);
            yield "
    ";
        } else {
            // line 92
            yield "        <div class=\"sf-tabs message-bus\">
            <div class=\"tab\">
                ";
            // line 94
            $context["messages"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 94, $this->source); })()), "messages", [], "any", false, false, false, 94);
            // line 95
            yield "                ";
            $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 95, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 95);
            // line 96
            yield "                <h3 class=\"tab-title\">All<span class=\"badge ";
            yield (string) (((($tmp = (isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 96, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 96, $this->source); })()) == Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 96, $this->source); })())))) ? ("status-error") : ("status-some-errors"))) : (""));
            yield "\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 96, $this->source); })())), "html", null, true);
            yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                    ";
            // line 100
            yield (string) $this->getTemplateForMacro("macro_render_bus_messages", $context, 100, $this->getSourceContext())->macro_render_bus_messages(...[(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 100, $this->source); })()), true]);
            yield "
                </div>
            </div>

            ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 104, $this->source); })()), "buses", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 105
                yield "                <div class=\"tab message-bus\">
                    ";
                // line 106
                $context["messages"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "messages", [$context["bus"]], "method", false, false, false, 106);
                // line 107
                yield "                    ";
                $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "exceptionsCount", [$context["bus"]], "method", false, false, false, 107);
                // line 108
                yield "                    <h3 class=\"tab-title\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bus"], "html", null, true);
                yield "<span class=\"badge ";
                yield (string) (((($tmp = (isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 108, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 108, $this->source); })()) == Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 108, $this->source); })())))) ? ("status-error") : ("status-some-errors"))) : (""));
                yield "\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 108, $this->source); })())), "html", null, true);
                yield "</span></h3>

                    <div class=\"tab-content\">
                        <p class=\"text-muted\">Ordered list of messages dispatched on the <code>";
                // line 111
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bus"], "html", null, true);
                yield "</code> bus</p>
                        ";
                // line 112
                yield (string) $this->getTemplateForMacro("macro_render_bus_messages", $context, 112, $this->getSourceContext())->macro_render_bus_messages(...[(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 112, $this->source); })())]);
                yield "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bus'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 116
            yield "        </div>
    ";
        }
        // line 118
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
    public function macro_render_bus_messages($messages = null, $showBus = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "messages" => $messages,
            "showBus" => $showBus,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            // line 122
            yield "    ";
            $context["discr"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 123
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 123, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["dispatchCall"]) {
                // line 124
                yield "    <table class=\"message-item\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"sf-toggle\"
                    data-toggle-selector=\"#message-item-";
                // line 128
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 128, $this->source); })()), "html", null, true);
                yield "-";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 128), "html", null, true);
                yield "-details\"
                    data-toggle-initial=\"";
                // line 129
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("display") : (""));
                yield "\"
                >
                    <span class=\"dump-inline\">";
                // line 131
                yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 131), "type", [], "any", false, false, false, 131));
                yield "</span>
                    ";
                // line 132
                if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 132)) {
                    // line 133
                    yield "                        <span class=\"label status-error\">exception</span>
                    ";
                }
                // line 135
                yield "                    <button class=\"btn btn-link toggle-button\" type=\"button\">
                        <span class=\"icon icon-close\">";
                // line 136
                yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                yield "</span>
                        <span class=\"icon icon-open\">";
                // line 137
                yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                yield "</span>
                    </button>
                </th>
            </tr>
        </thead>
        <tbody id=\"message-item-";
                // line 142
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 142, $this->source); })()), "html", null, true);
                yield "-";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 142), "html", null, true);
                yield "-details\" class=\"sf-toggle-content\">
            <tr>
                <th scope=\"row\" class=\"font-normal\">Caller</th>
                <td class=\"message-bus-dispatch-caller\">
                    In
                    ";
                // line 147
                $context["caller"] = CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "caller", [], "any", false, false, false, 147);
                // line 148
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 148, $this->source); })()), "line", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 149
                    yield "                        ";
                    $context["link"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 149, $this->source); })()), "file", [], "any", false, false, false, 149), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 149, $this->source); })()), "line", [], "any", false, false, false, 149));
                    // line 150
                    yield "                        ";
                    if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 150, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 151
                        yield "                            <a href=\"";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 151, $this->source); })()), "html", null, true);
                        yield "\" title=\"";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 151, $this->source); })()), "file", [], "any", false, false, false, 151), "html", null, true);
                        yield "\">";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 151, $this->source); })()), "name", [], "any", false, false, false, 151), "html", null, true);
                        yield "</a>
                        ";
                    } else {
                        // line 153
                        yield "                            <abbr title=\"";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 153, $this->source); })()), "file", [], "any", false, false, false, 153), "html", null, true);
                        yield "\">";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 153, $this->source); })()), "name", [], "any", false, false, false, 153), "html", null, true);
                        yield "</abbr>
                        ";
                    }
                    // line 155
                    yield "                    ";
                } else {
                    // line 156
                    yield "                        ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 156, $this->source); })()), "name", [], "any", false, false, false, 156), "html", null, true);
                    yield "
                    ";
                }
                // line 158
                yield "                    line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 158, $this->source); })()), "html", null, true);
                yield "-";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 158), "html", null, true);
                yield "\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 158, $this->source); })()), "line", [], "any", false, false, false, 158), "html", null, true);
                yield "</button>

                    <div class=\"hidden\" id=\"sf-trace-";
                // line 160
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 160, $this->source); })()), "html", null, true);
                yield "-";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 160), "html", null, true);
                yield "\">
                        <div class=\"trace\">
                            ";
                // line 162
                yield (string) Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 162, $this->source); })()), "file", [], "any", false, false, false, 162), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 162, $this->source); })()), "line", [], "any", false, false, false, 162)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 167
                yield "
                        </div>
                    </div>
                </td>
            </tr>
            ";
                // line 172
                if ((($tmp = (isset($context["showBus"]) || array_key_exists("showBus", $context) ? $context["showBus"] : (function () { throw new RuntimeError('Variable "showBus" does not exist.', 172, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 173
                    yield "                <tr>
                    <th scope=\"row\" class=\"font-normal\">Bus</th>
                    <td>";
                    // line 175
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "bus", [], "any", false, false, false, 175), "html", null, true);
                    yield "</td>
                </tr>
            ";
                }
                // line 178
                yield "            <tr>
                <th scope=\"row\" class=\"font-normal\">Message</th>
                <td>";
                // line 180
                yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 180), "value", [], "any", false, false, false, 180), 2);
                yield "</td>
            </tr>
            <tr>
                <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">when dispatching</span></th>
                <td>
                    ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps", [], "any", false, false, false, 185));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 186
                    yield "                        ";
                    yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                    yield "
                    ";
                    $context['_iterated'] = true;
                }
                // line 187
                if (!$context['_iterated']) {
                    // line 188
                    yield "                        <span class=\"text-muted font-normal\">No items</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 190
                yield "                </td>
            </tr>
            ";
                // line 192
                if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", true, true, false, 192)) {
                    // line 193
                    yield "                <tr>
                    <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">after dispatch</span></th>
                    <td>
                        ";
                    // line 196
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", false, false, false, 196));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 197
                        yield "                            ";
                        yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                        yield "
                        ";
                        $context['_iterated'] = true;
                    }
                    // line 198
                    if (!$context['_iterated']) {
                        // line 199
                        yield "                            <span class=\"text-muted\">No items</span>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 201
                    yield "                    </td>
                </tr>
            ";
                }
                // line 204
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 204)) {
                    // line 205
                    yield "                <tr>
                    <td class=\"text-bold\">Exception</td>
                    <td>
                        ";
                    // line 208
                    yield (string) $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", false, false, false, 208), "value", [], "any", false, false, false, 208), 1);
                    yield "
                    </td>
                </tr>
            ";
                }
                // line 212
                yield "        </tbody>
    </table>
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
            unset($context['_seq'], $context['_key'], $context['dispatchCall'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            
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
        return "@WebProfiler/Collector/messenger.html.twig";
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
        return array (  640 => 212,  633 => 208,  628 => 205,  625 => 204,  620 => 201,  612 => 199,  610 => 198,  603 => 197,  598 => 196,  593 => 193,  591 => 192,  587 => 190,  579 => 188,  577 => 187,  570 => 186,  565 => 185,  557 => 180,  553 => 178,  547 => 175,  543 => 173,  541 => 172,  534 => 167,  532 => 162,  525 => 160,  515 => 158,  509 => 156,  506 => 155,  498 => 153,  488 => 151,  485 => 150,  482 => 149,  479 => 148,  477 => 147,  467 => 142,  459 => 137,  455 => 136,  452 => 135,  448 => 133,  446 => 132,  442 => 131,  437 => 129,  431 => 128,  425 => 124,  407 => 123,  404 => 122,  385 => 121,  373 => 118,  369 => 116,  358 => 112,  354 => 111,  343 => 108,  340 => 107,  338 => 106,  335 => 105,  331 => 104,  324 => 100,  314 => 96,  311 => 95,  309 => 94,  305 => 92,  300 => 90,  297 => 89,  295 => 88,  290 => 85,  288 => 84,  284 => 82,  271 => 81,  259 => 78,  253 => 75,  250 => 74,  248 => 73,  243 => 71,  237 => 70,  224 => 69,  210 => 65,  207 => 64,  203 => 63,  192 => 59,  187 => 57,  183 => 56,  178 => 54,  175 => 53,  172 => 52,  167 => 51,  165 => 50,  162 => 49,  156 => 47,  151 => 46,  148 => 45,  145 => 44,  142 => 43,  129 => 42,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27@WebProfiler/Profiler/layout.html.twig\x27 %}

{% block head %}
    {{ parent() }}

    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 170px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none; color: inherit; }
        .message-item .icon svg { height: 24px; width: 24px; }
        .message-item .icon-close svg { transform: rotate(180deg); }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }

        #collector-content .message-bus .trace {
            border: var(--border);
            background: var(--base-0);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .message-bus .trace {
            font-size: 12px;
        }
        #collector-content .message-bus .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .message-bus .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.messages|length > 0 %}
        {% set status_color = collector.exceptionsCount ? \x27red\x27 %}
        {% set icon %}
            {{ source(\x27@WebProfiler/Icon/messenger.svg\x27) }}
            <span class=\"sf-toolbar-value\">{{ collector.messages|length }}</span>
        {% endset %}

        {% set text %}
            {% for bus in collector.buses %}
                {% set exceptionsCount = collector.exceptionsCount(bus) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ bus }}</b>
                    <span
                        title=\"{{ exceptionsCount }} message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-{{ exceptionsCount ? \x27red\x27 }}\"
                    >
                        {{ collector.messages(bus)|length }}
                    </span>
                </div>
            {% endfor %}
        {% endset %}

        {{ include(\x27@WebProfiler/Profiler/toolbar_item.html.twig\x27, {link: \x27messenger\x27, status: status_color}) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label{{ collector.exceptionsCount ? \x27 label-status-error\x27 }}{{ collector.messages is empty ? \x27 disabled\x27 }}\">
        <span class=\"icon\">{{ source(\x27@WebProfiler/Icon/messenger.svg\x27) }}</span>
        <strong>Messages</strong>
        {% if collector.exceptionsCount > 0 %}
            <span class=\"count\">
                <span>{{ collector.exceptionsCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Messages</h2>

    {% if collector.messages is empty %}
        <div class=\"empty empty-panel\">
            <p>No messages have been collected.</p>
        </div>
    {% elseif 1 == collector.buses|length %}
        <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
        {{ _self.render_bus_messages(collector.messages, true) }}
    {% else %}
        <div class=\"sf-tabs message-bus\">
            <div class=\"tab\">
                {% set messages = collector.messages %}
                {% set exceptionsCount = collector.exceptionsCount %}
                <h3 class=\"tab-title\">All<span class=\"badge {{ exceptionsCount ? exceptionsCount == messages|length ? \x27status-error\x27 : \x27status-some-errors\x27 }}\">{{ messages|length }}</span></h3>

                <div class=\"tab-content\">
                    <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                    {{ _self.render_bus_messages(messages, true) }}
                </div>
            </div>

            {% for bus in collector.buses %}
                <div class=\"tab message-bus\">
                    {% set messages = collector.messages(bus) %}
                    {% set exceptionsCount = collector.exceptionsCount(bus) %}
                    <h3 class=\"tab-title\">{{ bus }}<span class=\"badge {{ exceptionsCount ? exceptionsCount == messages|length ? \x27status-error\x27 : \x27status-some-errors\x27 }}\">{{ messages|length }}</span></h3>

                    <div class=\"tab-content\">
                        <p class=\"text-muted\">Ordered list of messages dispatched on the <code>{{ bus }}</code> bus</p>
                        {{ _self.render_bus_messages(messages) }}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

{% endblock %}

{% macro render_bus_messages(messages, showBus = false) %}
    {% set discr = random() %}
    {% for dispatchCall in messages %}
    <table class=\"message-item\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"sf-toggle\"
                    data-toggle-selector=\"#message-item-{{ discr }}-{{ loop.index0 }}-details\"
                    data-toggle-initial=\"{{ loop.first ? \x27display\x27 }}\"
                >
                    <span class=\"dump-inline\">{{ profiler_dump(dispatchCall.message.type) }}</span>
                    {% if dispatchCall.exception is defined %}
                        <span class=\"label status-error\">exception</span>
                    {% endif %}
                    <button class=\"btn btn-link toggle-button\" type=\"button\">
                        <span class=\"icon icon-close\">{{ source(\x27@WebProfiler/Icon/chevron-down.svg\x27) }}</span>
                        <span class=\"icon icon-open\">{{ source(\x27@WebProfiler/Icon/chevron-down.svg\x27) }}</span>
                    </button>
                </th>
            </tr>
        </thead>
        <tbody id=\"message-item-{{ discr }}-{{ loop.index0 }}-details\" class=\"sf-toggle-content\">
            <tr>
                <th scope=\"row\" class=\"font-normal\">Caller</th>
                <td class=\"message-bus-dispatch-caller\">
                    In
                    {% set caller = dispatchCall.caller %}
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
                    line <button type=\"button\" class=\"btn-link text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ discr }}-{{ loop.index0 }}\">{{ caller.line }}</button>

                    <div class=\"hidden\" id=\"sf-trace-{{ discr }}-{{ loop.index0 }}\">
                        <div class=\"trace\">
                            {{ caller.file|file_excerpt(caller.line)|replace({
                                \x27#DD0000\x27: \x27var(--highlight-string)\x27,
                                \x27#007700\x27: \x27var(--highlight-keyword)\x27,
                                \x27#0000BB\x27: \x27var(--highlight-default)\x27,
                                \x27#FF8000\x27: \x27var(--highlight-comment)\x27,
                            })|raw }}
                        </div>
                    </div>
                </td>
            </tr>
            {% if showBus %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">Bus</th>
                    <td>{{ dispatchCall.bus }}</td>
                </tr>
            {% endif %}
            <tr>
                <th scope=\"row\" class=\"font-normal\">Message</th>
                <td>{{ profiler_dump(dispatchCall.message.value, maxDepth: 2) }}</td>
            </tr>
            <tr>
                <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">when dispatching</span></th>
                <td>
                    {% for item in dispatchCall.stamps %}
                        {{ profiler_dump(item) }}
                    {% else %}
                        <span class=\"text-muted font-normal\">No items</span>
                    {% endfor %}
                </td>
            </tr>
            {% if dispatchCall.stamps_after_dispatch is defined %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">Envelope stamps <span class=\"block text-muted\">after dispatch</span></th>
                    <td>
                        {% for item in dispatchCall.stamps_after_dispatch %}
                            {{ profiler_dump(item) }}
                        {% else %}
                            <span class=\"text-muted\">No items</span>
                        {% endfor %}
                    </td>
                </tr>
            {% endif %}
            {% if dispatchCall.exception is defined %}
                <tr>
                    <td class=\"text-bold\">Exception</td>
                    <td>
                        {{ profiler_dump(dispatchCall.exception.value, maxDepth: 1) }}
                    </td>
                </tr>
            {% endif %}
        </tbody>
    </table>
    {% endfor %}
{% endmacro %}
", "@WebProfiler/Collector/messenger.html.twig", "/home/thierry/Symfony/monApp/app/vendor/symfony/web-profiler-bundle/Resources/views/Collector/messenger.html.twig");
    }
}
