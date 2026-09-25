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

/* @WebProfiler/Collector/mailer.html.twig */
class __TwigTemplate_ba9de941a3eea11d5557b34862c375ca extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

    <style>
        :root {
            --mailer-email-table-wrapper-background: var(--gray-100);
            --mailer-email-table-active-row-background: #dbeafe;
            --mailer-email-table-active-row-color: var(--color-text);
        }
        .theme-dark {
            --mailer-email-table-wrapper-background: var(--gray-900);
            --mailer-email-table-active-row-background: var(--gray-300);
            --mailer-email-table-active-row-color: var(--gray-800);
        }

        .mailer-email-summary-table-wrapper {
            background: var(--mailer-email-table-wrapper-background);
            border-bottom: 4px double var(--table-border-color);
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin: 0 -9px 10px -9px;
            padding-bottom: 10px;
            transform: translateY(-9px);
            max-height: 265px;
            overflow-y: auto;
        }
        .mailer-email-summary-table,
        .mailer-email-summary-table tr,
        .mailer-email-summary-table td {
            border: 0;
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-shadow: none;
        }
        .mailer-email-summary-table th {
            color: var(--color-muted);
            font-size: 13px;
            padding: 4px 10px;
        }
        .mailer-email-summary-table tr td,
        .mailer-email-summary-table tr:last-of-type td {
            border: solid var(--table-border-color);
            border-width: 1px 0;
        }
        .mailer-email-summary-table-row {
            margin: 5px 0;
        }
        .mailer-email-summary-table-row:hover {
            cursor: pointer;
        }
        .mailer-email-summary-table-row.active {
            background: var(--mailer-email-table-active-row-background);
            color: var(--mailer-email-table-active-row-color);
        }
        .mailer-email-summary-table-row td {
            font-family: var(--font-family-system);
            font-size: inherit;
        }
        .mailer-email-details {
            display: none;
        }
        .mailer-email-details.active {
            display: block;
        }
        .mailer-transport-information {
            border-bottom: 1px solid var(--form-input-border-color);
            padding-bottom: 5px;
            font-size: var(--font-size-body);
            margin: 5px 0 10px 5px;
        }
        .mailer-transport-information .badge {
            font-size: inherit;
            font-weight: inherit;
        }
        .mailer-message-subject {
            font-size: 21px;
            font-weight: bold;
            margin: 5px;
        }
        .mailer-message-headers {
            margin-bottom: 10px;
        }
        .mailer-message-headers p {
            font-size: var(--font-size-body);
            margin: 2px 5px;
        }
        .mailer-message-header-secondary {
            color: var(--color-muted);
        }
        .mailer-message-attachments-title {
            align-items: center;
            display: flex;
            font-size: var(--font-size-body);
            font-weight: 600;
            margin-bottom: 10px;
        }
        .mailer-message-attachments-title svg {
            color: var(--color-muted);
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-title span {
            font-weight: normal;
            margin-left: 4px;
        }
        .mailer-message-attachments-list {
            list-style: none;
            margin: 0 0 5px 20px;
            padding: 0;
        }
        .mailer-message-attachments-list li {
            align-items: center;
            display: flex;
        }
        .mailer-message-attachments-list li svg {
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-list li a {
            margin-left: 5px;
        }
        .mailer-email-body {
            margin: 0;
            padding: 6px 8px;
        }
        .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width=\x27100%25\x27 height=\x27100%25\x27 xmlns=\x27http://www.w3.org/2000/svg\x27%3e%3crect width=\x27100%25\x27 height=\x27100%25\x27 fill=\x27none\x27 stroke=\x27%23e5e5e5\x27 stroke-width=\x274\x27 stroke-dasharray=\x276%2c 14\x27 stroke-dashoffset=\x270\x27 stroke-linecap=\x27square\x27/%3e%3c/svg%3e\");
            border-radius: 6px;
            color: var(--color-muted);
            margin: 1em 0 0;
            padding: .5em 1em;
        }
        .theme-dark .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width=\x27100%25\x27 height=\x27100%25\x27 xmlns=\x27http://www.w3.org/2000/svg\x27%3e%3crect width=\x27100%25\x27 height=\x27100%25\x27 fill=\x27none\x27 stroke=\x27%23737373\x27 stroke-width=\x274\x27 stroke-dasharray=\x276%2c 14\x27 stroke-dashoffset=\x270\x27 stroke-linecap=\x27square\x27/%3e%3c/svg%3e\");
        }
        .mailer-empty-email-body p {
            font-size: var(--font-size-body);
            margin: 0;
            padding: 0.5em 0;
        }

        .mailer-message-download-raw {
            align-items: center;
            display: flex;
            padding: 5px 0 0 5px;
        }
        .mailer-message-download-raw svg {
            height: 18px;
            width: 18px;
            margin-right: 3px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 162
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        window.addEventListener(\x27DOMContentLoaded\x27, () => {
            new SymfonyProfilerMailerPanel();
        });

        class SymfonyProfilerMailerPanel {
            constructor() {
                this.#initializeEmailsTable();
            }

            #initializeEmailsTable() {
                const emailRows = document.querySelectorAll(\x27.mailer-email-summary-table-row\x27);

                emailRows.forEach((emailRow) => {
                    emailRow.addEventListener(\x27click\x27, () => {
                        emailRows.forEach((row) => row.classList.remove(\x27active\x27));
                        emailRow.classList.add(\x27active\x27);

                        document.querySelectorAll(\x27.mailer-email-details\x27).forEach((emailDetails) => emailDetails.style.display = \x27none\x27);
                        document.querySelector(emailRow.getAttribute(\x27data-target\x27)).style.display = \x27block\x27;
                    });
                });
            }
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 191
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

        // line 192
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 192, $this->source); })()), "events", [], "any", false, false, false, 192);
        // line 193
        yield "
    ";
        // line 194
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 194, $this->source); })()), "messages", [], "any", false, false, false, 194))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 195
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 196
                yield "            ";
                yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 197
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 197, $this->source); })()), "messages", [], "any", false, false, false, 197)), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 199
            yield "
        ";
            // line 200
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 201
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 203
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 203, $this->source); })()), "events", [], "any", false, false, false, 203), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 203, $this->source); })()), "isQueued", [], "method", false, false, false, 203); })), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 207
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 207, $this->source); })()), "events", [], "any", false, false, false, 207), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 207, $this->source); })()), "isQueued", [], "method", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp); })), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 210
            yield "
        ";
            // line 211
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 211, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 215
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

        // line 216
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 216, $this->source); })()), "events", [], "any", false, false, false, 216);
        // line 217
        yield "
    <span class=\"label ";
        // line 218
        yield (string) ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 218, $this->source); })()), "messages", [], "any", false, false, false, 218))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 219
        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
        yield "</span>

        <strong>Emails</strong>
        ";
        // line 222
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 222, $this->source); })()), "messages", [], "any", false, false, false, 222)) > 0)) {
            // line 223
            yield "            <span class=\"count\">
                <span>";
            // line 224
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 224, $this->source); })()), "messages", [], "any", false, false, false, 224)), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 227
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 230
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

        // line 231
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 231, $this->source); })()), "events", [], "any", false, false, false, 231);
        // line 232
        yield "    <h2>Emails</h2>

    ";
        // line 234
        if ( !(($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 234, $this->source); })()), "messages", [], "any", false, false, false, 234))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    ";
        } else {
            // line 239
            yield "        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 242
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 242, $this->source); })()), "events", [], "any", false, false, false, 242), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 242, $this->source); })()), "isQueued", [], "method", false, false, false, 242); })), "html", null, true);
            yield "</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 247
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 247, $this->source); })()), "events", [], "any", false, false, false, 247), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 247, $this->source); })()), "isQueued", [], "method", false, false, false, 247)) && $tmp instanceof Markup ? (string) $tmp : $tmp); })), "html", null, true);
            yield "</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    ";
        }
        // line 253
        yield "
    ";
        // line 254
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 254, $this->source); })()), "transports", [], "any", false, false, false, 254)) > 1)) {
            // line 255
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 255, $this->source); })()), "transports", [], "any", false, false, false, 255));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 256
                yield "            <h2><code>";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["transport"], "html", null, true);
                yield "</code> transport</h2>
            ";
                // line 257
                yield (string) $this->getTemplateForMacro("macro_render_transport_details", $context, 257, $this->getSourceContext())->macro_render_transport_details(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 257, $this->source); })()), $context["transport"]]);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 259
            yield "    ";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 259, $this->source); })()), "transports", [], "any", false, false, false, 259))) {
            // line 260
            yield "        ";
            yield (string) $this->getTemplateForMacro("macro_render_transport_details", $context, 260, $this->getSourceContext())->macro_render_transport_details(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 260, $this->source); })()), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 260, $this->source); })()), "transports", [], "any", false, false, false, 260)), true]);
            yield "
    ";
        }
        // line 262
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 265
    public function macro_render_transport_details($collector = null, $transport = null, $show_transport_name = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collector" => $collector,
            "transport" => $transport,
            "show_transport_name" => $show_transport_name,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

            // line 266
            yield "    <div class=\"card\">
        ";
            // line 267
            $context["num_emails"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 267, $this->source); })()), "events", [], "any", false, false, false, 267), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 267, $this->source); })())], "method", false, false, false, 267));
            // line 268
            yield "        ";
            if (((isset($context["num_emails"]) || array_key_exists("num_emails", $context) ? $context["num_emails"] : (function () { throw new RuntimeError('Variable "num_emails" does not exist.', 268, $this->source); })()) > 1)) {
                // line 269
                yield "            <div class=\"mailer-email-summary-table-wrapper\">
                <table class=\"mailer-email-summary-table\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Subject</th>
                            <th>To</th>
                            <th class=\"visually-hidden\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 280
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 280, $this->source); })()), "events", [], "any", false, false, false, 280), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 280, $this->source); })())], "method", false, false, false, 280));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 281
                    yield "                            <tr class=\"mailer-email-summary-table-row ";
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 281)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\" data-target=\"#email-";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 281), "html", null, true);
                    yield "\">
                                <td>";
                    // line 282
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 282), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 283
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 283), "headers", [], "any", false, true, false, 283), "get", ["subject"], "method", false, true, false, 283), "bodyAsString", [], "method", true, true, false, 283)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 283), "headers", [], "any", false, false, false, 283), "get", ["subject"], "method", false, false, false, 283), "bodyAsString", [], "method", false, false, false, 283), "(No subject)")) : ("(No subject)")), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 284
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 284), "headers", [], "any", false, true, false, 284), "get", ["to"], "method", false, true, false, 284), "bodyAsString", [], "method", true, true, false, 284)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 284), "headers", [], "any", false, false, false, 284), "get", ["to"], "method", false, false, false, 284), "bodyAsString", [], "method", false, false, false, 284), Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "envelope", [], "any", false, false, false, 284), "recipients", [], "any", false, false, false, 284), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["addr"]) || array_key_exists("addr", $context) ? $context["addr"] : (function () { throw new RuntimeError('Variable "addr" does not exist.', 284, $this->source); })()), "toString", [], "method", false, false, false, 284); }), ", "))) : (Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "envelope", [], "any", false, false, false, 284), "recipients", [], "any", false, false, false, 284), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["addr"]) || array_key_exists("addr", $context) ? $context["addr"] : (function () { throw new RuntimeError('Variable "addr" does not exist.', 284, $this->source); })()), "toString", [], "method", false, false, false, 284); }), ", "))), "html", null, true);
                    yield "</td>
                                <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-";
                    // line 285
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 285), "html", null, true);
                    yield "\">View email details</button></td>
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
                unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 288
                yield "                    </tbody>
                </table>
            </div>

            ";
                // line 292
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 292, $this->source); })()), "events", [], "any", false, false, false, 292), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 292, $this->source); })())], "method", false, false, false, 292));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 293
                    yield "                <div class=\"mailer-email-details ";
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 293)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\" id=\"email-";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 293), "html", null, true);
                    yield "\">
                    ";
                    // line 294
                    yield (string) $this->getTemplateForMacro("macro_render_email_details", $context, 294, $this->getSourceContext())->macro_render_email_details(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 294, $this->source); })()), (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 294, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 294), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isQueued", [], "any", false, false, false, 294), (isset($context["show_transport_name"]) || array_key_exists("show_transport_name", $context) ? $context["show_transport_name"] : (function () { throw new RuntimeError('Variable "show_transport_name" does not exist.', 294, $this->source); })())]);
                    yield "
                </div>
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
                unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 297
                yield "        ";
            } else {
                // line 298
                yield "            ";
                $context["event"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 298, $this->source); })()), "events", [], "any", false, false, false, 298), "events", [(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 298, $this->source); })())], "method", false, false, false, 298));
                // line 299
                yield "            ";
                yield (string) $this->getTemplateForMacro("macro_render_email_details", $context, 299, $this->getSourceContext())->macro_render_email_details(...[(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 299, $this->source); })()), (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 299, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 299, $this->source); })()), "message", [], "any", false, false, false, 299), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 299, $this->source); })()), "isQueued", [], "any", false, false, false, 299), (isset($context["show_transport_name"]) || array_key_exists("show_transport_name", $context) ? $context["show_transport_name"] : (function () { throw new RuntimeError('Variable "show_transport_name" does not exist.', 299, $this->source); })())]);
                yield "
        ";
            }
            // line 301
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 304
    public function macro_render_email_details($collector = null, $transport = null, $message = null, $message_is_queued = null, $show_transport_name = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "collector" => $collector,
            "transport" => $transport,
            "message" => $message,
            "message_is_queued" => $message_is_queued,
            "show_transport_name" => $show_transport_name,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

            // line 305
            yield "    ";
            if ((($tmp = (isset($context["show_transport_name"]) || array_key_exists("show_transport_name", $context) ? $context["show_transport_name"] : (function () { throw new RuntimeError('Variable "show_transport_name" does not exist.', 305, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 306
                yield "        <p class=\"mailer-transport-information\">
            <strong>Status:</strong> <span class=\"badge badge-";
                // line 307
                yield (string) (((($tmp = (isset($context["message_is_queued"]) || array_key_exists("message_is_queued", $context) ? $context["message_is_queued"] : (function () { throw new RuntimeError('Variable "message_is_queued" does not exist.', 307, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("success"));
                yield "\">";
                yield (string) (((($tmp = (isset($context["message_is_queued"]) || array_key_exists("message_is_queued", $context) ? $context["message_is_queued"] : (function () { throw new RuntimeError('Variable "message_is_queued" does not exist.', 307, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Queued") : ("Sent"));
                yield "</span>
            &bull;
            <strong>Transport:</strong> <code>";
                // line 309
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 309, $this->source); })()), "html", null, true);
                yield "</code>
        </p>
    ";
            }
            // line 312
            yield "
    ";
            // line 313
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", true, true, false, 313)) {
                // line 314
                yield "        ";
                // line 315
                yield "        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 315, $this->source); })()), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 315, $this->source); })()), "toString", [], "method", false, false, false, 315)], "method", false, false, false, 315), "html", null, true);
                yield "\" download=\"email.eml\">
            ";
                // line 316
                yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/download.svg");
                yield "
            Download as EML file
        </a>

        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 320
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 320, $this->source); })()), "toString", [], "method", false, false, false, 320), "html", null, true);
                yield "</pre>
    ";
            } else {
                // line 322
                yield "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Email contents</h3>
                <div class=\"tab-content\">
                    <div class=\"card-block\">
                        <p class=\"mailer-message-subject\">
                            ";
                // line 328
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 328), "get", ["subject"], "method", false, true, false, 328), "bodyAsString", [], "method", true, true, false, 328)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 328, $this->source); })()), "headers", [], "any", false, false, false, 328), "get", ["subject"], "method", false, false, false, 328), "bodyAsString", [], "method", false, false, false, 328), "(No subject)")) : ("(No subject)")), "html", null, true);
                yield "
                        </p>
                        <div class=\"mailer-message-headers\">
                            <p>
                                <strong>From:</strong>
                                ";
                // line 333
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 333), "get", ["from"], "method", false, true, false, 333), "bodyAsString", [], "method", true, true, false, 333)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 333, $this->source); })()), "headers", [], "any", false, false, false, 333), "get", ["from"], "method", false, false, false, 333), "bodyAsString", [], "method", false, false, false, 333), "(empty)")) : ("(empty)")), "html", null, true);
                yield "
                            </p>
                            <p>
                                <strong>To:</strong>
                                ";
                // line 337
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 337), "get", ["to"], "method", false, true, false, 337), "bodyAsString", [], "method", true, true, false, 337)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 337, $this->source); })()), "headers", [], "any", false, false, false, 337), "get", ["to"], "method", false, false, false, 337), "bodyAsString", [], "method", false, false, false, 337), "(empty)")) : ("(empty)")), "html", null, true);
                yield "
                            </p>
                            ";
                // line 339
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 339, $this->source); })()), "headers", [], "any", false, false, false, 339), "all", [], "any", false, false, false, 339));
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 340
                    yield "                                ";
                    if (!CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", true, true, false, 340) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 340)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 340)) : (""))), ["subject", "from", "to"])) {
                        // line 341
                        yield "                                    <p class=\"mailer-message-header-secondary\">";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "toString", [], "any", false, false, false, 341), "html", null, true);
                        yield "</p>
                                ";
                    }
                    // line 343
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['header'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 344
                yield "                        </div>
                    </div>

                    ";
                // line 347
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", true, true, false, 347) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 347, $this->source); })()), "attachments", [], "any", false, false, false, 347)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 348
                    yield "                        <div class=\"card-block\">
                            ";
                    // line 349
                    $context["num_of_attachments"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 349, $this->source); })()), "attachments", [], "any", false, false, false, 349));
                    // line 350
                    yield "                            ";
                    $context["total_attachments_size_in_bytes"] = Twig\Extension\CoreExtension::reduce($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 350, $this->source); })()), "attachments", [], "any", false, false, false, 350), function ($__total_size__, $__attachment__) use ($context, $macros) { $context["total_size"] = $__total_size__; $context["attachment"] = $__attachment__; return ((isset($context["total_size"]) || array_key_exists("total_size", $context) ? $context["total_size"] : (function () { throw new RuntimeError('Variable "total_size" does not exist.', 350, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->mailerBody((isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 350, $this->source); })())))); }, 0);
                    // line 351
                    yield "                            <p class=\"mailer-message-attachments-title\">
                                ";
                    // line 352
                    yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/attachment.svg");
                    yield "
                                Attachments <span>(";
                    // line 353
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["num_of_attachments"]) || array_key_exists("num_of_attachments", $context) ? $context["num_of_attachments"] : (function () { throw new RuntimeError('Variable "num_of_attachments" does not exist.', 353, $this->source); })()), "html", null, true);
                    yield " file";
                    yield (string) ((((isset($context["num_of_attachments"]) || array_key_exists("num_of_attachments", $context) ? $context["num_of_attachments"] : (function () { throw new RuntimeError('Variable "num_of_attachments" does not exist.', 353, $this->source); })()) > 1)) ? ("s") : (""));
                    yield " / ";
                    yield (string) $this->getTemplateForMacro("macro_render_file_size_humanized", $context, 353, $this->getSourceContext())->macro_render_file_size_humanized(...[(isset($context["total_attachments_size_in_bytes"]) || array_key_exists("total_attachments_size_in_bytes", $context) ? $context["total_attachments_size_in_bytes"] : (function () { throw new RuntimeError('Variable "total_attachments_size_in_bytes" does not exist.', 353, $this->source); })())]);
                    yield ")</span>
                            </p>

                            <ul class=\"mailer-message-attachments-list\">
                                ";
                    // line 357
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 357, $this->source); })()), "attachments", [], "any", false, false, false, 357));
                    foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                        // line 358
                        yield "                                    ";
                        $context["attachment_body"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->mailerBody($context["attachment"]);
                        // line 359
                        yield "                                    <li>
                                        ";
                        // line 360
                        yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/file.svg");
                        yield "

                                        ";
                        // line 362
                        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 362)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 362))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 363
                            yield "                                            ";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 363), "html", null, true);
                            yield "
                                        ";
                        } else {
                            // line 365
                            yield "                                            <em>(no filename)</em>
                                        ";
                        }
                        // line 367
                        yield "
                                        ";
                        // line 368
                        if ((null === (isset($context["attachment_body"]) || array_key_exists("attachment_body", $context) ? $context["attachment_body"] : (function () { throw new RuntimeError('Variable "attachment_body" does not exist.', 368, $this->source); })()))) {
                            // line 369
                            yield "                                            <em>(the file is not readable anymore)</em>
                                        ";
                        } else {
                            // line 371
                            yield "                                            (";
                            yield (string) $this->getTemplateForMacro("macro_render_file_size_humanized", $context, 371, $this->getSourceContext())->macro_render_file_size_humanized(...[Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["attachment_body"]) || array_key_exists("attachment_body", $context) ? $context["attachment_body"] : (function () { throw new RuntimeError('Variable "attachment_body" does not exist.', 371, $this->source); })()))]);
                            yield ")

                                            <a href=\"data:";
                            // line 373
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", true, true, false, 373)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", false, false, false, 373), "application/octet-stream")) : ("application/octet-stream")), "html", null, true);
                            yield ";base64,";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 373, $this->source); })()), "base64Encode", [(isset($context["attachment_body"]) || array_key_exists("attachment_body", $context) ? $context["attachment_body"] : (function () { throw new RuntimeError('Variable "attachment_body" does not exist.', 373, $this->source); })())], "method", false, false, false, 373), "html", null, true);
                            yield "\" download=\"";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 373)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 373), "attachment")) : ("attachment")), "html", null, true);
                            yield "\">Download</a>
                                        ";
                        }
                        // line 375
                        yield "                                    </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 377
                    yield "                            </ul>
                        </div>
                    ";
                }
                // line 380
                yield "
                    <div class=\"card-block\">
                        <div class=\"sf-tabs sf-tabs-sm\">
                        ";
                // line 383
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", true, true, false, 383)) {
                    // line 384
                    yield "                            ";
                    $context["textBody"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 384, $this->source); })()), "textBody", [], "any", false, false, false, 384);
                    // line 385
                    yield "                            ";
                    $context["htmlBody"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 385, $this->source); })()), "htmlBody", [], "any", false, false, false, 385);
                    // line 386
                    yield "                            <div class=\"tab ";
                    yield (string) (( !(($tmp = (isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 386, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield " ";
                    yield (string) (((($tmp = (isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 386, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\">
                                <h3 class=\"tab-title\">Text content</h3>
                                <div class=\"tab-content\">
                                    ";
                    // line 389
                    if ((($tmp = (isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 389, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 390
                        yield "                                        <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                        // line 391
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 391, $this->source); })()), "textCharset", [], "method", false, false, false, 391)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 392
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding((isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 392, $this->source); })()), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 392, $this->source); })()), "textCharset", [], "method", false, false, false, 392)), "html", null, true);
                        } else {
                            // line 394
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 394, $this->source); })()), "html", null, true);
                        }
                        // line 396
                        yield "</pre>
                                    ";
                    } else {
                        // line 398
                        yield "                                        <div class=\"mailer-empty-email-body\">
                                            <p>The text body is empty.</p>
                                        </div>
                                    ";
                    }
                    // line 402
                    yield "                                </div>
                            </div>

                            ";
                    // line 405
                    if ((($tmp = (isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 405, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 406
                        yield "                                <div class=\"tab\">
                                    <h3 class=\"tab-title\">HTML preview</h3>
                                    <div class=\"tab-content\">
                                        <pre class=\"prewrap\" style=\"max-height: 600px\"><iframe src=\"data:text/html;charset=utf-8;base64,";
                        // line 409
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 409, $this->source); })()), "base64Encode", [(isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 409, $this->source); })())], "method", false, false, false, 409), "html", null, true);
                        yield "\" style=\"height: 80vh;width: 100%;\"></iframe>
                                        </pre>
                                    </div>
                                </div>
                            ";
                    }
                    // line 414
                    yield "
                            <div class=\"tab ";
                    // line 415
                    yield (string) (( !(($tmp = (isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 415, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield " ";
                    yield (string) ((( !(($tmp = (isset($context["textBody"]) || array_key_exists("textBody", $context) ? $context["textBody"] : (function () { throw new RuntimeError('Variable "textBody" does not exist.', 415, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = (isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 415, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("active") : (""));
                    yield "\">
                                <h3 class=\"tab-title\">HTML content</h3>
                                <div class=\"tab-content\">
                                    ";
                    // line 418
                    if ((($tmp = (isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 418, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 419
                        yield "                                        <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                        // line 420
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 420, $this->source); })()), "htmlCharset", [], "method", false, false, false, 420)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 421
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding((isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 421, $this->source); })()), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 421, $this->source); })()), "htmlCharset", [], "method", false, false, false, 421)), "html", null, true);
                        } else {
                            // line 423
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["htmlBody"]) || array_key_exists("htmlBody", $context) ? $context["htmlBody"] : (function () { throw new RuntimeError('Variable "htmlBody" does not exist.', 423, $this->source); })()), "html", null, true);
                        }
                        // line 425
                        yield "</pre>
                                    ";
                    } else {
                        // line 427
                        yield "                                        <div class=\"mailer-empty-email-body\">
                                            <p>The HTML body is empty.</p>
                                        </div>
                                    ";
                    }
                    // line 431
                    yield "                                </div>
                            </div>
                        ";
                } else {
                    // line 434
                    yield "                            ";
                    $context["body"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 434, $this->source); })()), "body", [], "any", false, false, false, 434)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->mailerAsString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 434, $this->source); })()), "body", [], "any", false, false, false, 434))) : (null));
                    // line 435
                    yield "                            <div class=\"tab ";
                    yield (string) (( !(($tmp = (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 435, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield " ";
                    yield (string) (((($tmp = (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 435, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                    yield "\">
                                <h3 class=\"tab-title\">Content</h3>
                                <div class=\"tab-content\">
                                    ";
                    // line 438
                    if ((($tmp = (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 438, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 439
                        yield "                                        <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                        // line 440
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 440, $this->source); })()), "html", null, true);
                        yield "
                                        </pre>
                                    ";
                    } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 442
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 442, $this->source); })()), "body", [], "any", false, false, false, 442)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 443
                        yield "                                        <div class=\"mailer-empty-email-body\">
                                            <p>The body is not readable anymore.</p>
                                        </div>
                                    ";
                    } else {
                        // line 447
                        yield "                                        <div class=\"mailer-empty-email-body\">
                                            <p>The body is empty.</p>
                                        </div>
                                    ";
                    }
                    // line 451
                    yield "                                </div>
                            </div>
                        ";
                }
                // line 454
                yield "                        </div>
                    </div>
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">MIME parts</h3>
                <div class=\"tab-content\">
                    <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 462
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 462, $this->source); })()), "body", [], "method", false, false, false, 462), "asDebugString", [], "method", false, false, false, 462), "html", null, true);
                yield "</pre>
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Raw Message</h3>
                <div class=\"tab-content\">
                    ";
                // line 469
                $context["raw_message"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->mailerAsString((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 469, $this->source); })()));
                // line 470
                yield "                    ";
                if ((null === (isset($context["raw_message"]) || array_key_exists("raw_message", $context) ? $context["raw_message"] : (function () { throw new RuntimeError('Variable "raw_message" does not exist.', 470, $this->source); })()))) {
                    // line 471
                    yield "                        <div class=\"mailer-empty-email-body\">
                            <p>The raw message is not readable anymore.</p>
                        </div>
                    ";
                } else {
                    // line 475
                    yield "                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 475, $this->source); })()), "base64Encode", [(isset($context["raw_message"]) || array_key_exists("raw_message", $context) ? $context["raw_message"] : (function () { throw new RuntimeError('Variable "raw_message" does not exist.', 475, $this->source); })())], "method", false, false, false, 475), "html", null, true);
                    yield "\" download=\"email.eml\">
                            ";
                    // line 476
                    yield (string) Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/download.svg");
                    yield "
                            Download as EML file
                        </a>

                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                    // line 480
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["raw_message"]) || array_key_exists("raw_message", $context) ? $context["raw_message"] : (function () { throw new RuntimeError('Variable "raw_message" does not exist.', 480, $this->source); })()), "html", null, true);
                    yield "</pre>
                    ";
                }
                // line 482
                yield "                </div>
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 488
    public function macro_render_file_size_humanized($bytes = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "bytes" => $bytes,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

            // line 489
            if (((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 489, $this->source); })()) < 1000)) {
                // line 490
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 490, $this->source); })()) . " bytes"), "html", null, true);
            } elseif ((            // line 491
(isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 491, $this->source); })()) < (1000 ** 2))) {
                // line 492
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 492, $this->source); })()) / 1000), 2) . " kB"), "html", null, true);
            } else {
                // line 494
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["bytes"]) || array_key_exists("bytes", $context) ? $context["bytes"] : (function () { throw new RuntimeError('Variable "bytes" does not exist.', 494, $this->source); })()) / (1000 ** 2)), 2) . " MB"), "html", null, true);
            }
            
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
        return "@WebProfiler/Collector/mailer.html.twig";
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
        return array (  1135 => 494,  1132 => 492,  1130 => 491,  1128 => 490,  1126 => 489,  1108 => 488,  1092 => 482,  1087 => 480,  1080 => 476,  1075 => 475,  1069 => 471,  1066 => 470,  1064 => 469,  1054 => 462,  1044 => 454,  1039 => 451,  1033 => 447,  1027 => 443,  1025 => 442,  1020 => 440,  1018 => 439,  1016 => 438,  1007 => 435,  1004 => 434,  999 => 431,  993 => 427,  989 => 425,  986 => 423,  983 => 421,  981 => 420,  979 => 419,  977 => 418,  969 => 415,  966 => 414,  958 => 409,  953 => 406,  951 => 405,  946 => 402,  940 => 398,  936 => 396,  933 => 394,  930 => 392,  928 => 391,  926 => 390,  924 => 389,  915 => 386,  912 => 385,  909 => 384,  907 => 383,  902 => 380,  897 => 377,  889 => 375,  880 => 373,  874 => 371,  870 => 369,  868 => 368,  865 => 367,  861 => 365,  855 => 363,  853 => 362,  848 => 360,  845 => 359,  842 => 358,  838 => 357,  827 => 353,  823 => 352,  820 => 351,  817 => 350,  815 => 349,  812 => 348,  810 => 347,  805 => 344,  798 => 343,  792 => 341,  789 => 340,  785 => 339,  780 => 337,  773 => 333,  765 => 328,  757 => 322,  752 => 320,  745 => 316,  740 => 315,  738 => 314,  736 => 313,  733 => 312,  727 => 309,  720 => 307,  717 => 306,  714 => 305,  692 => 304,  679 => 301,  673 => 299,  670 => 298,  667 => 297,  649 => 294,  642 => 293,  625 => 292,  619 => 288,  601 => 285,  597 => 284,  593 => 283,  589 => 282,  582 => 281,  565 => 280,  552 => 269,  549 => 268,  547 => 267,  544 => 266,  524 => 265,  512 => 262,  506 => 260,  503 => 259,  494 => 257,  489 => 256,  484 => 255,  482 => 254,  479 => 253,  470 => 247,  462 => 242,  457 => 239,  451 => 235,  449 => 234,  445 => 232,  442 => 231,  429 => 230,  417 => 227,  411 => 224,  408 => 223,  406 => 222,  400 => 219,  396 => 218,  393 => 217,  390 => 216,  377 => 215,  363 => 211,  360 => 210,  353 => 207,  346 => 203,  342 => 201,  340 => 200,  337 => 199,  331 => 197,  326 => 196,  323 => 195,  321 => 194,  318 => 193,  315 => 192,  302 => 191,  262 => 162,  249 => 161,  81 => 4,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27@WebProfiler/Profiler/layout.html.twig\x27 %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        :root {
            --mailer-email-table-wrapper-background: var(--gray-100);
            --mailer-email-table-active-row-background: #dbeafe;
            --mailer-email-table-active-row-color: var(--color-text);
        }
        .theme-dark {
            --mailer-email-table-wrapper-background: var(--gray-900);
            --mailer-email-table-active-row-background: var(--gray-300);
            --mailer-email-table-active-row-color: var(--gray-800);
        }

        .mailer-email-summary-table-wrapper {
            background: var(--mailer-email-table-wrapper-background);
            border-bottom: 4px double var(--table-border-color);
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin: 0 -9px 10px -9px;
            padding-bottom: 10px;
            transform: translateY(-9px);
            max-height: 265px;
            overflow-y: auto;
        }
        .mailer-email-summary-table,
        .mailer-email-summary-table tr,
        .mailer-email-summary-table td {
            border: 0;
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-shadow: none;
        }
        .mailer-email-summary-table th {
            color: var(--color-muted);
            font-size: 13px;
            padding: 4px 10px;
        }
        .mailer-email-summary-table tr td,
        .mailer-email-summary-table tr:last-of-type td {
            border: solid var(--table-border-color);
            border-width: 1px 0;
        }
        .mailer-email-summary-table-row {
            margin: 5px 0;
        }
        .mailer-email-summary-table-row:hover {
            cursor: pointer;
        }
        .mailer-email-summary-table-row.active {
            background: var(--mailer-email-table-active-row-background);
            color: var(--mailer-email-table-active-row-color);
        }
        .mailer-email-summary-table-row td {
            font-family: var(--font-family-system);
            font-size: inherit;
        }
        .mailer-email-details {
            display: none;
        }
        .mailer-email-details.active {
            display: block;
        }
        .mailer-transport-information {
            border-bottom: 1px solid var(--form-input-border-color);
            padding-bottom: 5px;
            font-size: var(--font-size-body);
            margin: 5px 0 10px 5px;
        }
        .mailer-transport-information .badge {
            font-size: inherit;
            font-weight: inherit;
        }
        .mailer-message-subject {
            font-size: 21px;
            font-weight: bold;
            margin: 5px;
        }
        .mailer-message-headers {
            margin-bottom: 10px;
        }
        .mailer-message-headers p {
            font-size: var(--font-size-body);
            margin: 2px 5px;
        }
        .mailer-message-header-secondary {
            color: var(--color-muted);
        }
        .mailer-message-attachments-title {
            align-items: center;
            display: flex;
            font-size: var(--font-size-body);
            font-weight: 600;
            margin-bottom: 10px;
        }
        .mailer-message-attachments-title svg {
            color: var(--color-muted);
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-title span {
            font-weight: normal;
            margin-left: 4px;
        }
        .mailer-message-attachments-list {
            list-style: none;
            margin: 0 0 5px 20px;
            padding: 0;
        }
        .mailer-message-attachments-list li {
            align-items: center;
            display: flex;
        }
        .mailer-message-attachments-list li svg {
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-list li a {
            margin-left: 5px;
        }
        .mailer-email-body {
            margin: 0;
            padding: 6px 8px;
        }
        .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width=\x27100%25\x27 height=\x27100%25\x27 xmlns=\x27http://www.w3.org/2000/svg\x27%3e%3crect width=\x27100%25\x27 height=\x27100%25\x27 fill=\x27none\x27 stroke=\x27%23e5e5e5\x27 stroke-width=\x274\x27 stroke-dasharray=\x276%2c 14\x27 stroke-dashoffset=\x270\x27 stroke-linecap=\x27square\x27/%3e%3c/svg%3e\");
            border-radius: 6px;
            color: var(--color-muted);
            margin: 1em 0 0;
            padding: .5em 1em;
        }
        .theme-dark .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width=\x27100%25\x27 height=\x27100%25\x27 xmlns=\x27http://www.w3.org/2000/svg\x27%3e%3crect width=\x27100%25\x27 height=\x27100%25\x27 fill=\x27none\x27 stroke=\x27%23737373\x27 stroke-width=\x274\x27 stroke-dasharray=\x276%2c 14\x27 stroke-dashoffset=\x270\x27 stroke-linecap=\x27square\x27/%3e%3c/svg%3e\");
        }
        .mailer-empty-email-body p {
            font-size: var(--font-size-body);
            margin: 0;
            padding: 0.5em 0;
        }

        .mailer-message-download-raw {
            align-items: center;
            display: flex;
            padding: 5px 0 0 5px;
        }
        .mailer-message-download-raw svg {
            height: 18px;
            width: 18px;
            margin-right: 3px;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        window.addEventListener(\x27DOMContentLoaded\x27, () => {
            new SymfonyProfilerMailerPanel();
        });

        class SymfonyProfilerMailerPanel {
            constructor() {
                this.#initializeEmailsTable();
            }

            #initializeEmailsTable() {
                const emailRows = document.querySelectorAll(\x27.mailer-email-summary-table-row\x27);

                emailRows.forEach((emailRow) => {
                    emailRow.addEventListener(\x27click\x27, () => {
                        emailRows.forEach((row) => row.classList.remove(\x27active\x27));
                        emailRow.classList.add(\x27active\x27);

                        document.querySelectorAll(\x27.mailer-email-details\x27).forEach((emailDetails) => emailDetails.style.display = \x27none\x27);
                        document.querySelector(emailRow.getAttribute(\x27data-target\x27)).style.display = \x27block\x27;
                    });
                });
            }
        }
    </script>
{% endblock %}

{% block toolbar %}
    {% set events = collector.events %}

    {% if events.messages|length %}
        {% set icon %}
            {{ source(\x27@WebProfiler/Icon/mailer.svg\x27) }}
            <span class=\"sf-toolbar-value\">{{ events.messages|length }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">{{ events.events|filter(e => e.isQueued())|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">{{ events.events|filter(e => not e.isQueued())|length }}</span>
            </div>
        {% endset %}

        {{ include(\x27@WebProfiler/Profiler/toolbar_item.html.twig\x27, {link: profiler_url}) }}
    {% endif %}
{% endblock %}

{% block menu %}
    {% set events = collector.events %}

    <span class=\"label {{ events.messages is empty ? \x27disabled\x27 }}\">
        <span class=\"icon\">{{ source(\x27@WebProfiler/Icon/mailer.svg\x27) }}</span>

        <strong>Emails</strong>
        {% if events.messages|length > 0 %}
            <span class=\"count\">
                <span>{{ events.messages|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% set events = collector.events %}
    <h2>Emails</h2>

    {% if not events.messages|length %}
        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">{{ events.events|filter(e => e.isQueued())|length }}</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ events.events|filter(e => not e.isQueued())|length }}</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    {% endif %}

    {% if events.transports|length > 1 %}
        {% for transport in events.transports %}
            <h2><code>{{ transport }}</code> transport</h2>
            {{ _self.render_transport_details(collector, transport) }}
        {% endfor %}
    {% elseif events.transports is not empty %}
        {{ _self.render_transport_details(collector, events.transports|first, true) }}
    {% endif %}

{% endblock %}

{% macro render_transport_details(collector, transport, show_transport_name = false) %}
    <div class=\"card\">
        {% set num_emails = collector.events.events(transport)|length %}
        {% if num_emails > 1 %}
            <div class=\"mailer-email-summary-table-wrapper\">
                <table class=\"mailer-email-summary-table\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Subject</th>
                            <th>To</th>
                            <th class=\"visually-hidden\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for event in collector.events.events(transport) %}
                            <tr class=\"mailer-email-summary-table-row {{ loop.first ? \x27active\x27 }}\" data-target=\"#email-{{ loop.index }}\">
                                <td>{{ loop.index }}</td>
                                <td>{{ event.message.headers.get(\x27subject\x27).bodyAsString()|default(\x27(No subject)\x27) }}</td>
                                <td>{{ event.message.headers.get(\x27to\x27).bodyAsString()|default(event.envelope.recipients|map(addr => addr.toString())|join(\x27, \x27)) }}</td>
                                <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-{{ loop.index }}\">View email details</button></td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            {% for event in collector.events.events(transport) %}
                <div class=\"mailer-email-details {{ loop.first ? \x27active\x27 }}\" id=\"email-{{ loop.index }}\">
                    {{ _self.render_email_details(collector, transport, event.message, event.isQueued, show_transport_name) }}
                </div>
            {% endfor %}
        {% else %}
            {% set event = (collector.events.events(transport)|first) %}
            {{ _self.render_email_details(collector, transport, event.message, event.isQueued, show_transport_name) }}
        {% endif %}
    </div>
{% endmacro %}

{% macro render_email_details(collector, transport, message, message_is_queued, show_transport_name = false) %}
    {% if show_transport_name %}
        <p class=\"mailer-transport-information\">
            <strong>Status:</strong> <span class=\"badge badge-{{ message_is_queued ? \x27warning\x27 : \x27success\x27 }}\">{{ message_is_queued ? \x27Queued\x27 : \x27Sent\x27 }}</span>
            &bull;
            <strong>Transport:</strong> <code>{{ transport }}</code>
        </p>
    {% endif %}

    {% if message.headers is not defined %}
        {# render the raw message contents #}
        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,{{ collector.base64Encode(message.toString()) }}\" download=\"email.eml\">
            {{ source(\x27@WebProfiler/Icon/download.svg\x27) }}
            Download as EML file
        </a>

        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">{{ message.toString() }}</pre>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Email contents</h3>
                <div class=\"tab-content\">
                    <div class=\"card-block\">
                        <p class=\"mailer-message-subject\">
                            {{ message.headers.get(\x27subject\x27).bodyAsString()|default(\x27(No subject)\x27) }}
                        </p>
                        <div class=\"mailer-message-headers\">
                            <p>
                                <strong>From:</strong>
                                {{ message.headers.get(\x27from\x27).bodyAsString()|default(\x27(empty)\x27) }}
                            </p>
                            <p>
                                <strong>To:</strong>
                                {{ message.headers.get(\x27to\x27).bodyAsString()|default(\x27(empty)\x27) }}
                            </p>
                            {% for header in message.headers.all %}
                                {% if (header.name ?? \x27\x27)|lower not in [\x27subject\x27, \x27from\x27, \x27to\x27] %}
                                    <p class=\"mailer-message-header-secondary\">{{ header.toString }}</p>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>

                    {% if message.attachments is defined and message.attachments %}
                        <div class=\"card-block\">
                            {% set num_of_attachments = message.attachments|length %}
                            {% set total_attachments_size_in_bytes = message.attachments|reduce((total_size, attachment) => total_size + profiler_mailer_body(attachment)|length, 0) %}
                            <p class=\"mailer-message-attachments-title\">
                                {{ source(\x27@WebProfiler/Icon/attachment.svg\x27) }}
                                Attachments <span>({{ num_of_attachments }} file{{ num_of_attachments > 1 ? \x27s\x27 }} / {{ _self.render_file_size_humanized(total_attachments_size_in_bytes) }})</span>
                            </p>

                            <ul class=\"mailer-message-attachments-list\">
                                {% for attachment in message.attachments %}
                                    {% set attachment_body = profiler_mailer_body(attachment) %}
                                    <li>
                                        {{ source(\x27@WebProfiler/Icon/file.svg\x27) }}

                                        {% if attachment.filename|default %}
                                            {{ attachment.filename }}
                                        {% else %}
                                            <em>(no filename)</em>
                                        {% endif %}

                                        {% if attachment_body is null %}
                                            <em>(the file is not readable anymore)</em>
                                        {% else %}
                                            ({{ _self.render_file_size_humanized(attachment_body|length) }})

                                            <a href=\"data:{{ attachment.contentType|default(\x27application/octet-stream\x27) }};base64,{{ collector.base64Encode(attachment_body) }}\" download=\"{{ attachment.filename|default(\x27attachment\x27) }}\">Download</a>
                                        {% endif %}
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    {% endif %}

                    <div class=\"card-block\">
                        <div class=\"sf-tabs sf-tabs-sm\">
                        {% if message.htmlBody is defined %}
                            {% set textBody = message.textBody %}
                            {% set htmlBody = message.htmlBody %}
                            <div class=\"tab {{ not textBody ? \x27disabled\x27 }} {{ textBody ? \x27active\x27 }}\">
                                <h3 class=\"tab-title\">Text content</h3>
                                <div class=\"tab-content\">
                                    {% if textBody %}
                                        <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">
                                            {%- if message.textCharset() %}
                                                {{- textBody|convert_encoding(\x27UTF-8\x27, message.textCharset()) }}
                                            {%- else %}
                                                {{- textBody }}
                                            {%- endif -%}
                                        </pre>
                                    {% else %}
                                        <div class=\"mailer-empty-email-body\">
                                            <p>The text body is empty.</p>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>

                            {% if htmlBody %}
                                <div class=\"tab\">
                                    <h3 class=\"tab-title\">HTML preview</h3>
                                    <div class=\"tab-content\">
                                        <pre class=\"prewrap\" style=\"max-height: 600px\"><iframe src=\"data:text/html;charset=utf-8;base64,{{ collector.base64Encode(htmlBody) }}\" style=\"height: 80vh;width: 100%;\"></iframe>
                                        </pre>
                                    </div>
                                </div>
                            {% endif %}

                            <div class=\"tab {{ not htmlBody ? \x27disabled\x27 }} {{ not textBody and htmlBody ? \x27active\x27 }}\">
                                <h3 class=\"tab-title\">HTML content</h3>
                                <div class=\"tab-content\">
                                    {% if htmlBody %}
                                        <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">
                                            {%- if message.htmlCharset() %}
                                                {{- htmlBody|convert_encoding(\x27UTF-8\x27, message.htmlCharset()) }}
                                            {%- else %}
                                                {{- htmlBody }}
                                            {%- endif -%}
                                        </pre>
                                    {% else %}
                                        <div class=\"mailer-empty-email-body\">
                                            <p>The HTML body is empty.</p>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        {% else %}
                            {% set body = message.body ? profiler_mailer_as_string(message.body) : null %}
                            <div class=\"tab {{ not body ? \x27disabled\x27 }} {{ body ? \x27active\x27 }}\">
                                <h3 class=\"tab-title\">Content</h3>
                                <div class=\"tab-content\">
                                    {% if body %}
                                        <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">
                                            {{- body }}
                                        </pre>
                                    {% elseif message.body %}
                                        <div class=\"mailer-empty-email-body\">
                                            <p>The body is not readable anymore.</p>
                                        </div>
                                    {% else %}
                                        <div class=\"mailer-empty-email-body\">
                                            <p>The body is empty.</p>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        {% endif %}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">MIME parts</h3>
                <div class=\"tab-content\">
                    <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">{{ message.body().asDebugString() }}</pre>
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Raw Message</h3>
                <div class=\"tab-content\">
                    {% set raw_message = profiler_mailer_as_string(message) %}
                    {% if raw_message is null %}
                        <div class=\"mailer-empty-email-body\">
                            <p>The raw message is not readable anymore.</p>
                        </div>
                    {% else %}
                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,{{ collector.base64Encode(raw_message) }}\" download=\"email.eml\">
                            {{ source(\x27@WebProfiler/Icon/download.svg\x27) }}
                            Download as EML file
                        </a>

                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">{{ raw_message }}</pre>
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_file_size_humanized(bytes) %}
    {%- if bytes < 1000 -%}
        {{- bytes ~ \x27 bytes\x27 -}}
    {%- elseif bytes < 1000 ** 2 -%}
        {{- (bytes / 1000)|number_format(2) ~ \x27 kB\x27 -}}
    {%- else -%}
        {{- (bytes / 1000 ** 2)|number_format(2) ~ \x27 MB\x27 -}}
    {%- endif -%}
{% endmacro %}
", "@WebProfiler/Collector/mailer.html.twig", "/home/thierry/Symfony/monApp/app/vendor/symfony/web-profiler-bundle/Resources/views/Collector/mailer.html.twig");
    }
}
