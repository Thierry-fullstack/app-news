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

/* _components/_navbar.html.twig */
class __TwigTemplate_016fd3564e2b9470d9603223f97c8eb5 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_components/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_components/_navbar.html.twig"));

        // line 1
        yield "<!-- Responsive navbar-->
<nav class=\"navbar navbar-expand-lg mb-1\" data-bs-theme=\"light\" id=\"nav-bar\">
    <div class=\"container\">
        <a class=\"navbar-brand text-primary-emphasis\" href=\"";
        // line 4
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        yield "\">Blog</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "                ";
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 9
                yield "                <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 text-small\">
                    <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"";
                // line 10
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
                yield "\">Accueil</a></li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-primary-emphasis\" href=\"#\" id=\"dropdown09\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
                // line 12
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "email", [], "any", false, false, false, 12), "html", null, true);
                yield "</a>
                        <ul class=\"dropdown-menu text-small\" aria-labelledby=\"dropdown09\">
                            <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#\"><i class=\"fa-solid fa-industry\"></i> Gestion</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#\"><i class=\"fa-regular fa-circle-user\"></i> Votre profile</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"";
                // line 16
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                yield "\"><i class=\"bi bi-door-open\"></i></i>Se déconnecter</a></li>
                        </ul>
                    </li>
                </ul>
                ";
            } elseif (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 20
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AUTHOR")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 21
                yield "                    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 small\">
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"";
                // line 22
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
                yield "\">Accueil</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle text-primary-emphasis\" href=\"#\" id=\"dropdown09\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
                // line 24
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "email", [], "any", false, false, false, 24), "html", null, true);
                yield "</a>
                            <ul class=\"dropdown-menu small\" aria-labelledby=\"dropdown09\">
                                <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#\"><i class=\"fa-solid fa-industry\"></i> Gestion</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#\"><i class=\"fa-regular fa-circle-user\"></i> Profile</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"";
                // line 28
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                yield "\"><i class=\"bi bi-door-open\"></i>Se déconnecter</a></li>
                            </ul>
                        </li>
                    </ul>
                ";
            } elseif (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 32
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 33
                yield "                    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 small\">
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"";
                // line 34
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
                yield "\">Accueil</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle text-primary-emphasis\" href=\"#\" id=\"dropdown09\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
                // line 36
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "email", [], "any", false, false, false, 36), "html", null, true);
                yield "</a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown09\">
                                <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#\"><i class=\"fa-regular fa-circle-user\"></i>Profile</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"";
                // line 39
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                yield "\"><i class=\"bi bi-door-open\"></i></i>Se déconnecter</a></li>
                            </ul>
                        </li>
                    </ul>
                ";
            }
            // line 44
            yield "                ";
        } else {
            // line 45
            yield "                    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 small\">
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"";
            // line 46
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
            yield "\">Accueil</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#!\">A propos</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#!\">Contact</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" aria-current=\"page\" href=\"";
            // line 49
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">S\x27inscrire</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" aria-current=\"page\" href=\"";
            // line 50
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Se connecter</a></li>
                    </ul>
                ";
        }
        // line 53
        yield "        </div>

    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_components/_navbar.html.twig";
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
        return array (  157 => 53,  151 => 50,  147 => 49,  141 => 46,  138 => 45,  135 => 44,  127 => 39,  121 => 36,  116 => 34,  113 => 33,  111 => 32,  104 => 28,  97 => 24,  92 => 22,  89 => 21,  87 => 20,  80 => 16,  73 => 12,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  54 => 4,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Responsive navbar-->
<nav class=\"navbar navbar-expand-lg mb-1\" data-bs-theme=\"light\" id=\"nav-bar\">
    <div class=\"container\">
        <a class=\"navbar-brand text-primary-emphasis\" href=\"{{ path(\x27app_main\x27) }}\">Blog</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                {% if app.user %}
                {% if app.user and is_granted(\x27ROLE_ADMIN\x27) %}
                <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 text-small\">
                    <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"{{ path(\x27app_main\x27) }}\">Accueil</a></li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-primary-emphasis\" href=\"#\" id=\"dropdown09\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">{{ app.user.email }}</a>
                        <ul class=\"dropdown-menu text-small\" aria-labelledby=\"dropdown09\">
                            <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#\"><i class=\"fa-solid fa-industry\"></i> Gestion</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#\"><i class=\"fa-regular fa-circle-user\"></i> Votre profile</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"{{ path(\x27app_logout\x27) }}\"><i class=\"bi bi-door-open\"></i></i>Se déconnecter</a></li>
                        </ul>
                    </li>
                </ul>
                {% elseif app.user and is_granted(\x27ROLE_AUTHOR\x27) %}
                    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 small\">
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"{{ path(\x27app_main\x27) }}\">Accueil</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle text-primary-emphasis\" href=\"#\" id=\"dropdown09\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">{{ app.user.email }}</a>
                            <ul class=\"dropdown-menu small\" aria-labelledby=\"dropdown09\">
                                <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#\"><i class=\"fa-solid fa-industry\"></i> Gestion</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#\"><i class=\"fa-regular fa-circle-user\"></i> Profile</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"{{ path(\x27app_logout\x27) }}\"><i class=\"bi bi-door-open\"></i>Se déconnecter</a></li>
                            </ul>
                        </li>
                    </ul>
                {% elseif app.user and is_granted(\x27ROLE_USER\x27) %}
                    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 small\">
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"{{ path(\x27app_main\x27) }}\">Accueil</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle text-primary-emphasis\" href=\"#\" id=\"dropdown09\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">{{ app.user.email }}</a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown09\">
                                <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#\"><i class=\"fa-regular fa-circle-user\"></i>Profile</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"{{ path(\x27app_logout\x27) }}\"><i class=\"bi bi-door-open\"></i></i>Se déconnecter</a></li>
                            </ul>
                        </li>
                    </ul>
                {% endif %}
                {% else %}
                    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 small\">
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"{{ path(\x27app_main\x27) }}\">Accueil</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#!\">A propos</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" href=\"#!\">Contact</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" aria-current=\"page\" href=\"{{ path(\x27app_register\x27) }}\">S\x27inscrire</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link text-primary-emphasis\" aria-current=\"page\" href=\"{{ path(\x27app_login\x27) }}\">Se connecter</a></li>
                    </ul>
                {% endif %}
        </div>

    </div>
</nav>
", "_components/_navbar.html.twig", "/var/www/project/templates/_components/_navbar.html.twig");
    }
}
