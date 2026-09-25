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

/* registration/register.html.twig */
class __TwigTemplate_a92647d29f04816dae05148e8234aff8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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

        yield "Incription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield (string) $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap(["app", "register"]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    <div class=\"container-sm py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"contact-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"mt-5 contact-info h-100\" >
                                <h6 class=\"mx-2 mb-3 text-center text-primary-emphasis\">Besoin d\x27aide ? </h6>
                                <p class=\"my-1 mt-2 small text-center text-warning fw-bolder small\" id=\"dialogRegister\">&nbsp;</p>
                                <ul class=\"mx-2 list-group text-warning-emphasis h-50\" id=\"list-group-register\">
                                    <li class=\"contact-item list-group-item\">
                                        <p class=\"mb-0\" id=\"email-info\">Email</p>
                                    </li>
                                    <li class=\"contact-item list-group-item mb-0\">
                                        <p class=\"mb-0\" id=\"password-info\">Mot de passe</p>
                                    </li>
                                    <div class=\"contact-item list-group-item mb-0 h-auto\"  id=\"password-info\">
                                        <ul id=\x27password_criteria\x27 class=\"text-primary-emphasis mx-2 mb-0 \">
                                            <li id=\"password_length_criteria\" data-password-criteria class=\"password-criteria-true\">10 caractères au total</li>
                                            <li id=\"password_special_character_criteria\" data-password-criteria>Caractère spécial</li>
                                            <li id=\"password_uppercase_criteria\" data-password-criteria>Majuscule</li>
                                            <li id=\"password_number_criteria\" data-password-criteria>Chiffre</li>
                                            <li id=\"password_lowercase_criteria\" data-password-criteria>Minuscule</li>
                                        </ul>
                                    </div>
                                    <li class=\"contact-item list-group-item\">
                                        <p class=\"mt-0\" id=\"agree-info\">Contrat </p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"col-md-8\" >
                            <div class=\"contact-form\">
                                <div class=\"mt-3\">
                                    <h1 class=\"card-title fst-italic text-capitalize text-center text-warning fw-semibold\">Inscription</h1>
                                </div>
                                ";
        // line 47
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), 'form_start', ["attr" => ["id" => "registration_form", "class" => "mt-5"]]);
        yield "
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 49
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'widget');
        yield "
                                    ";
        // line 50
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'label');
        yield "
                                    <div class=\"text-danger small\">
                                        ";
        // line 52
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 56
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "plainPassword", [], "any", false, false, false, 56), 'widget');
        yield "
                                    ";
        // line 57
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "plainPassword", [], "any", false, false, false, 57), 'label');
        yield "
                                    <div class=\"text-danger small\">
                                        ";
        // line 59
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "plainPassword", [], "any", false, false, false, 59), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 63
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "agreeTerms", [], "any", false, false, false, 63), 'widget');
        yield "
                                    ";
        // line 64
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "agreeTerms", [], "any", false, false, false, 64), 'label');
        yield "
                                    <div class=\"text-danger small\">
                                        ";
        // line 66
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "agreeTerms", [], "any", false, false, false, 66), 'errors');
        yield "
                                        <small id=\"errorAgreeTerms\"></small>
                                    </div>
                                </div>
                                <div class=\"d-grid\">
                                    ";
        // line 71
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "register", [], "any", false, false, false, 71), 'row', ["attr" => ["class" => "btn btn-outline-warning text-dark text-capitalize w-100 "]]);
        yield "
                                </div>
                                ";
        // line 73
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), 'form_end');
        yield "
                                <div class=\"text-center mt-3\">
                                    <a href=\"";
        // line 75
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\" text-primary-emphasis text-center fst-italic text-decoration-none \"
                                       data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Déjà inscrit ?\">Déjà inscrit ?</a>
                                </div>
                            </div>

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
        return "registration/register.html.twig";
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
        return array (  232 => 75,  227 => 73,  222 => 71,  214 => 66,  209 => 64,  205 => 63,  198 => 59,  193 => 57,  189 => 56,  182 => 52,  177 => 50,  173 => 49,  168 => 47,  129 => 10,  116 => 9,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Incription{% endblock %}

{% block importmap %}
    {{ importmap([\x27app\x27, \x27register\x27]) }}
{% endblock %}

{% block body %}
    <div class=\"container-sm py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"contact-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"mt-5 contact-info h-100\" >
                                <h6 class=\"mx-2 mb-3 text-center text-primary-emphasis\">Besoin d\x27aide ? </h6>
                                <p class=\"my-1 mt-2 small text-center text-warning fw-bolder small\" id=\"dialogRegister\">&nbsp;</p>
                                <ul class=\"mx-2 list-group text-warning-emphasis h-50\" id=\"list-group-register\">
                                    <li class=\"contact-item list-group-item\">
                                        <p class=\"mb-0\" id=\"email-info\">Email</p>
                                    </li>
                                    <li class=\"contact-item list-group-item mb-0\">
                                        <p class=\"mb-0\" id=\"password-info\">Mot de passe</p>
                                    </li>
                                    <div class=\"contact-item list-group-item mb-0 h-auto\"  id=\"password-info\">
                                        <ul id=\x27password_criteria\x27 class=\"text-primary-emphasis mx-2 mb-0 \">
                                            <li id=\"password_length_criteria\" data-password-criteria class=\"password-criteria-true\">10 caractères au total</li>
                                            <li id=\"password_special_character_criteria\" data-password-criteria>Caractère spécial</li>
                                            <li id=\"password_uppercase_criteria\" data-password-criteria>Majuscule</li>
                                            <li id=\"password_number_criteria\" data-password-criteria>Chiffre</li>
                                            <li id=\"password_lowercase_criteria\" data-password-criteria>Minuscule</li>
                                        </ul>
                                    </div>
                                    <li class=\"contact-item list-group-item\">
                                        <p class=\"mt-0\" id=\"agree-info\">Contrat </p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"col-md-8\" >
                            <div class=\"contact-form\">
                                <div class=\"mt-3\">
                                    <h1 class=\"card-title fst-italic text-capitalize text-center text-warning fw-semibold\">Inscription</h1>
                                </div>
                                {{ form_start(registrationForm,{attr:{id:\x27registration_form\x27,class:\x27mt-5\x27}}) }}
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(registrationForm.email) }}
                                    {{ form_label(registrationForm.email)}}
                                    <div class=\"text-danger small\">
                                        {{ form_errors(registrationForm.email)}}
                                    </div>
                                </div>
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget(registrationForm.plainPassword) }}
                                    {{ form_label(registrationForm.plainPassword)}}
                                    <div class=\"text-danger small\">
                                        {{ form_errors(registrationForm.plainPassword)}}
                                    </div>
                                </div>
                                <div class=\"form-floating mb-3\">
                                    {{ form_widget (registrationForm.agreeTerms) }}
                                    {{ form_label(registrationForm.agreeTerms)}}
                                    <div class=\"text-danger small\">
                                        {{ form_errors(registrationForm.agreeTerms)}}
                                        <small id=\"errorAgreeTerms\"></small>
                                    </div>
                                </div>
                                <div class=\"d-grid\">
                                    {{ form_row(registrationForm.register,{ attr:{ class:\x27btn btn-outline-warning text-dark text-capitalize w-100 \x27 } }) }}
                                </div>
                                {{ form_end(registrationForm) }}
                                <div class=\"text-center mt-3\">
                                    <a href=\"{{ path(\x27app_login\x27) }}\" class=\" text-primary-emphasis text-center fst-italic text-decoration-none \"
                                       data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Déjà inscrit ?\">Déjà inscrit ?</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "registration/register.html.twig", "/var/www/project/templates/registration/register.html.twig");
    }
}
