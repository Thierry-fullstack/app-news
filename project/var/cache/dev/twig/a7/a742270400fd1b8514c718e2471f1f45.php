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

/* security/login.html.twig */
class __TwigTemplate_2ce0f3af4a2d74eb1be4a724c3fecbf7 extends Template
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
            'title' => [$this, 'block_title'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connection";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        // line 5
        yield "    ";
        yield (string) $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap(["app", "login"]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        yield "    ";
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "        <div class=\"alert alert-danger\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "messageKey", [], "any", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "messageData", [], "any", false, false, false, 10), "security"), "html", null, true);
            yield "</div>
    ";
        }
        // line 12
        yield "    <div class=\"container mt-5 \">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 col-md-8 col-sm-12\">
                <div class=\"card shadow rounded-3\" id=\"bg-login-form\">
                    <div class=\"card-body\">
                        <div >
                            <h1 class=\"card-title text-center fst-italic text-capitalize text-info-emphasis fw-semibold\">Connexion</h1>
                        </div>
                        <hr class=\"text-primary\" />
                        <div class=\"d-grid gap-2 mb-3\">
                            <ul class=\"list-group\">
                                <li id=\"dialogLogin\" class=\"list-group-item text-warning fw-bolder\"></li>
                            </ul>
                        </div>
                        <form method=\"post\" id=\"loginForm\" novalidate>
                            <div class=\"form-floating mb-3\">
                                <input type=\"email\" value=\"";
        // line 28
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control form-control-sm  text-primary-emphasis \" name=\"email\" id=\"inputEmail\" required
                                       autocomplete=\"email\" >
                                <label for=\"inputEmail\" class=\"form-check-label text-info-emphasis\" id=\"labelEmail\">Email *</label>
                            </div>
                            <div class=\"form-floating mb-3\">
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-sm  text-primary-emphasis\" required
                                       autocomplete=\"current-password\" >
                                <label for=\"inputPassword\" class=\"form-check-label text-info-emphasis\" id=\"labelPassword\">Mot de passe *</label>
                            </div>
                            <div class=\"mb-3 form-check\">
                                <input type=\"checkbox\" name=\"_remember_me\" class=\"form-check-input text-info-emphasis\" id=\"inputRemember\">
                                <label class=\"form-check-label text-info-emphasis\" for=\"inputRemember\" id=\"labelRemember\"><small class=\"mx-2\">Se souvenir de moi</small></label>
                            </div>
                            <div class=\"d-grid\">
                                <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"";
        // line 42
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-outline-success fw-bolder text-capitalize\" id=\"submitConnect\">Soumettre</button>
                            </div>
                        </form>
                        <div class=\"text-center mt-3\">
                            <a href=\"";
        // line 47
        yield "\" class=\"text-warning fw-semibold fst-italic text-decoration-none \"
                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Mot de passe oublié\">Mot de passe oublié ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  181 => 47,  173 => 42,  156 => 28,  138 => 12,  132 => 10,  129 => 9,  116 => 8,  102 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Connection{% endblock %}
{% block importmap %}
    {{ importmap([\x27app\x27, \x27login\x27]) }}
{% endblock %}

{% block body %}
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, \x27security\x27) }}</div>
    {% endif %}
    <div class=\"container mt-5 \">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 col-md-8 col-sm-12\">
                <div class=\"card shadow rounded-3\" id=\"bg-login-form\">
                    <div class=\"card-body\">
                        <div >
                            <h1 class=\"card-title text-center fst-italic text-capitalize text-info-emphasis fw-semibold\">Connexion</h1>
                        </div>
                        <hr class=\"text-primary\" />
                        <div class=\"d-grid gap-2 mb-3\">
                            <ul class=\"list-group\">
                                <li id=\"dialogLogin\" class=\"list-group-item text-warning fw-bolder\"></li>
                            </ul>
                        </div>
                        <form method=\"post\" id=\"loginForm\" novalidate>
                            <div class=\"form-floating mb-3\">
                                <input type=\"email\" value=\"{{ last_username }}\" class=\"form-control form-control-sm  text-primary-emphasis \" name=\"email\" id=\"inputEmail\" required
                                       autocomplete=\"email\" >
                                <label for=\"inputEmail\" class=\"form-check-label text-info-emphasis\" id=\"labelEmail\">Email *</label>
                            </div>
                            <div class=\"form-floating mb-3\">
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-sm  text-primary-emphasis\" required
                                       autocomplete=\"current-password\" >
                                <label for=\"inputPassword\" class=\"form-check-label text-info-emphasis\" id=\"labelPassword\">Mot de passe *</label>
                            </div>
                            <div class=\"mb-3 form-check\">
                                <input type=\"checkbox\" name=\"_remember_me\" class=\"form-check-input text-info-emphasis\" id=\"inputRemember\">
                                <label class=\"form-check-label text-info-emphasis\" for=\"inputRemember\" id=\"labelRemember\"><small class=\"mx-2\">Se souvenir de moi</small></label>
                            </div>
                            <div class=\"d-grid\">
                                <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"{{ csrf_token(\x27authenticate\x27) }}\">
                                <button type=\"submit\" class=\"btn btn-outline-success fw-bolder text-capitalize\" id=\"submitConnect\">Soumettre</button>
                            </div>
                        </form>
                        <div class=\"text-center mt-3\">
                            <a href=\"{# path(\x27app_forgot_password_request\x27) #}\" class=\"text-warning fw-semibold fst-italic text-decoration-none \"
                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Mot de passe oublié\">Mot de passe oublié ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "security/login.html.twig", "/var/www/project/templates/security/login.html.twig");
    }
}
