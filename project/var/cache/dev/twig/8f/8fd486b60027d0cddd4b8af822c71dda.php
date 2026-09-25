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

/* _components/_unactivited_account.html.twig */
class __TwigTemplate_d1066f71fffd5f686d65ece92b96e55c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_components/_unactivited_account.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_components/_unactivited_account.html.twig"));

        // line 1
        yield "<div class=\"container-sm\">
<div class=\"alert alert-dismissible alert-light\">
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    <h4 class=\"alert-heading\">Information</h4>
    <p class=\"mb-0 text-dark\">Validez et confirmez votre inscription .<span class=\"text-primary-emphasis\">un mail de confirmation vous a été envoyé</span></p>
</div>
</div>
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
        return "_components/_unactivited_account.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container-sm\">
<div class=\"alert alert-dismissible alert-light\">
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    <h4 class=\"alert-heading\">Information</h4>
    <p class=\"mb-0 text-dark\">Validez et confirmez votre inscription .<span class=\"text-primary-emphasis\">un mail de confirmation vous a été envoyé</span></p>
</div>
</div>
", "_components/_unactivited_account.html.twig", "/var/www/project/templates/_components/_unactivited_account.html.twig");
    }
}
