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

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_1c9864b57ea84080c8fa8f462c039c35 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "dumpsCount", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 6
                yield "            ";
                yield (string) Twig\Extension\CoreExtension::source($this->env, "@Debug/Profiler/icon.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 7
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "dumpsCount", [], "any", false, false, false, 7), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 9
            yield "
        ";
            // line 10
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 11
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "getDumps", ["html"], "method", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                    // line 12
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    ";
                    // line 14
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "label", [], "any", true, true, false, 14) && ("" != CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "label", [], "any", false, false, false, 14)))) {
                        // line 15
                        yield "                        <span class=\"sf-toolbar-file-line\"><strong>";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "label", [], "any", false, false, false, 15), "html", null, true);
                        yield "</strong> in </span>
                    ";
                    }
                    // line 17
                    yield "                    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 18
                        yield "                        ";
                        $context["link"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, false, 18));
                        // line 19
                        yield "                        ";
                        if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 20
                            yield "                            <a href=\"";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 20, $this->source); })()), "html", null, true);
                            yield "\" title=\"";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 20), "html", null, true);
                            yield "\">";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, false, 20), "html", null, true);
                            yield "</a>
                        ";
                        } else {
                            // line 22
                            yield "                            <abbr title=\"";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 22), "html", null, true);
                            yield "\">";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, false, 22), "html", null, true);
                            yield "</abbr>
                        ";
                        }
                        // line 24
                        yield "                    ";
                    } else {
                        // line 25
                        yield "                        ";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, false, 25), "html", null, true);
                        yield "
                    ";
                    }
                    // line 27
                    yield "                    </span>
                    <span class=\"sf-toolbar-file-line\">line ";
                    // line 28
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, false, 28), "html", null, true);
                    yield "</span>

                    ";
                    // line 30
                    yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "data", [], "any", false, false, false, 30);
                    yield "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['dump'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 33
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            yield "
        ";
            // line 35
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
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

        // line 40
        yield "    <span class=\"label ";
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "dumpsCount", [], "any", false, false, false, 40) == 0)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 41
        yield (string) Twig\Extension\CoreExtension::source($this->env, "@Debug/Profiler/icon.svg");
        yield "</span>
        <strong>Debug</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
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

        // line 47
        yield "    <h2>Dumped Contents</h2>

    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "getDumps", ["html"], "method", false, false, false, 49));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
            // line 50
            yield "        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">
                ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "label", [], "any", true, true, false, 52) && ("" != CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "label", [], "any", false, false, false, 52)))) {
                // line 53
                yield "                    <strong>";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "label", [], "any", false, false, false, 53), "html", null, true);
                yield "</strong> in
                ";
            } else {
                // line 55
                yield "                    In
                ";
            }
            // line 57
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "                    ";
                $context["link"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 58), CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, false, 58));
                // line 59
                yield "                    ";
                if ((($tmp = (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 59, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "                        <a href=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 60, $this->source); })()), "html", null, true);
                    yield "\" title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 60), "html", null, true);
                    yield "\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, false, 60), "html", null, true);
                    yield "</a>
                    ";
                } else {
                    // line 62
                    yield "                        <abbr title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 62), "html", null, true);
                    yield "\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, false, 62), "html", null, true);
                    yield "</abbr>
                    ";
                }
                // line 64
                yield "                ";
            } else {
                // line 65
                yield "                    ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, false, 65), "html", null, true);
                yield "
                ";
            }
            // line 67
            yield "                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 67), "html", null, true);
            yield "\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, false, 67), "html", null, true);
            yield "</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-";
            // line 70
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 70), "html", null, true);
            yield "\">
                <div class=\"trace\">
                    ";
            // line 72
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "fileExcerpt", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "fileExcerpt", [], "any", false, false, false, 72)) : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 72), CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, false, 72))));
            yield "
                </div>
            </div>

            ";
            // line 76
            yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "data", [], "any", false, false, false, 76);
            yield "
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 78
        if (!$context['_iterated']) {
            // line 79
            yield "        <div class=\"empty empty-panel\">
            <p>No content was dumped.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dump'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Debug/Profiler/dump.html.twig";
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
        return array (  351 => 79,  349 => 78,  334 => 76,  327 => 72,  322 => 70,  313 => 67,  307 => 65,  304 => 64,  296 => 62,  286 => 60,  283 => 59,  280 => 58,  277 => 57,  273 => 55,  267 => 53,  265 => 52,  261 => 50,  243 => 49,  239 => 47,  226 => 46,  211 => 41,  206 => 40,  193 => 39,  179 => 35,  176 => 34,  172 => 33,  162 => 30,  157 => 28,  154 => 27,  148 => 25,  145 => 24,  137 => 22,  127 => 20,  124 => 19,  121 => 18,  118 => 17,  112 => 15,  110 => 14,  106 => 12,  101 => 11,  99 => 10,  96 => 9,  90 => 7,  85 => 6,  82 => 5,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27@WebProfiler/Profiler/layout.html.twig\x27 %}

{% block toolbar %}
    {% if collector.dumpsCount %}
        {% set icon %}
            {{ source(\x27@Debug/Profiler/icon.svg\x27) }}
            <span class=\"sf-toolbar-value\">{{ collector.dumpsCount }}</span>
        {% endset %}

        {% set text %}
            {% for dump in collector.getDumps(\x27html\x27) %}
                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    {% if dump.label is defined and \x27\x27 != dump.label %}
                        <span class=\"sf-toolbar-file-line\"><strong>{{ dump.label }}</strong> in </span>
                    {% endif %}
                    {% if dump.file %}
                        {% set link = dump.file|file_link(dump.line) %}
                        {% if link %}
                            <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                        {% else %}
                            <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                        {% endif %}
                    {% else %}
                        {{ dump.name }}
                    {% endif %}
                    </span>
                    <span class=\"sf-toolbar-file-line\">line {{ dump.line }}</span>

                    {{ dump.data|raw }}
                </div>
            {% endfor %}
        {% endset %}

        {{ include(\x27@WebProfiler/Profiler/toolbar_item.html.twig\x27, {link: true}) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.dumpsCount == 0 ? \x27disabled\x27 }}\">
        <span class=\"icon\">{{ source(\x27@Debug/Profiler/icon.svg\x27) }}</span>
        <strong>Debug</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Dumped Contents</h2>

    {% for dump in collector.getDumps(\x27html\x27) %}
        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">
                {% if dump.label is defined and \x27\x27 != dump.label %}
                    <strong>{{ dump.label }}</strong> in
                {% else %}
                    In
                {% endif %}
                {% if dump.line %}
                    {% set link = dump.file|file_link(dump.line) %}
                    {% if link %}
                        <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                    {% else %}
                        <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                    {% endif %}
                {% else %}
                    {{ dump.name }}
                {% endif %}
                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ loop.index0 }}\">{{ dump.line }}</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-{{ loop.index0 }}\">
                <div class=\"trace\">
                    {{ dump.fileExcerpt ? dump.fileExcerpt|raw : dump.file|file_excerpt(dump.line) }}
                </div>
            </div>

            {{ dump.data|raw }}
        </div>
    {% else %}
        <div class=\"empty empty-panel\">
            <p>No content was dumped.</p>
        </div>
    {% endfor %}
{% endblock %}
", "@Debug/Profiler/dump.html.twig", "/home/thierry/Symfony/monApp/app/vendor/symfony/debug-bundle/Resources/views/Profiler/dump.html.twig");
    }
}
