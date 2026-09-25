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

/* email/register.html.twig */
class __TwigTemplate_8ae7059e3417c73b30f0049fc612398b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Confirmation mot de passe</title>
    <style>
        body{
            background-color:#fdfdfd;
        }
        .bouton-email{
            display: inline-block;
            outline: 0;
            border: 0;
            cursor: pointer;
            background-color: #0891b2;
            border-radius: 4px;
            padding: 8px 16px;
            font-size: 16px;
            font-weight: 700;
            color: white;
            line-height: 26px;

        }
        div{
            margin-bottom: 10px;
        }
        h2{
            color: rgb(251,191,36);
        }
        h1{
            color: rgb(8,145,178);
        }
    </style>
</head>

<body>
<!-- Main Container -->
<div>
    <!-- Header -->
    <div>
        <h1>Annonces.fr</h1>
    </div>
    <!-- Content -->
    <div>
        <h2>Bienvenue ";
        // line 46
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), "html", null, true);
        yield " sur notre site</h2>

        <!-- CTA Button  -->
        <div>
            <p>
                Pour confirmer votre adresse email ,
                Veuillez cliquez sur le bouton suivant :
            </p>
            <a href=\"";
        // line 54
        yield (string) (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 54, $this->source); })());
        yield "\" >
                <button class=\"bouton-email\">Confirmation email</button>
            </a>
            <p>Ce lien expire dans 1 heure.</p>
            <p>Merci !</p>
        </div>
    </div>

    <!-- Footer -->
    <div>
        <p>
            Vous désabonnez de notre newletter ? c\x27est
            <a href=\"#\" >Ici</a>.
        </p>
    </div>
</div>
</body>
</html>

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
        return "email/register.html.twig";
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
        return array (  107 => 54,  96 => 46,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Confirmation mot de passe</title>
    <style>
        body{
            background-color:#fdfdfd;
        }
        .bouton-email{
            display: inline-block;
            outline: 0;
            border: 0;
            cursor: pointer;
            background-color: #0891b2;
            border-radius: 4px;
            padding: 8px 16px;
            font-size: 16px;
            font-weight: 700;
            color: white;
            line-height: 26px;

        }
        div{
            margin-bottom: 10px;
        }
        h2{
            color: rgb(251,191,36);
        }
        h1{
            color: rgb(8,145,178);
        }
    </style>
</head>

<body>
<!-- Main Container -->
<div>
    <!-- Header -->
    <div>
        <h1>Annonces.fr</h1>
    </div>
    <!-- Content -->
    <div>
        <h2>Bienvenue {{ user.email }} sur notre site</h2>

        <!-- CTA Button  -->
        <div>
            <p>
                Pour confirmer votre adresse email ,
                Veuillez cliquez sur le bouton suivant :
            </p>
            <a href=\"{{ url | raw }}\" >
                <button class=\"bouton-email\">Confirmation email</button>
            </a>
            <p>Ce lien expire dans 1 heure.</p>
            <p>Merci !</p>
        </div>
    </div>

    <!-- Footer -->
    <div>
        <p>
            Vous désabonnez de notre newletter ? c\x27est
            <a href=\"#\" >Ici</a>.
        </p>
    </div>
</div>
</body>
</html>

", "email/register.html.twig", "/var/www/project/templates/email/register.html.twig");
    }
}
