<?php

/* extension/dashboard/sale_info.twig */
class __TwigTemplate_cfb9fcaad9411341362dd14f63cd175049fe2c159fa3a98a80066173f197b9bb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo " <span class=\"float-right\">";
        // line 3
        if ((($context["percentage"] ?? null) > 0)) {
            // line 4
            echo "      <i class=\"fas fa-caret-up\"></i>";
        } elseif ((        // line 5
($context["percentage"] ?? null) < 0)) {
            // line 6
            echo "      <i class=\"fas fa-caret-down\"></i>";
        }
        // line 8
        echo ($context["percentage"] ?? null);
        echo "%</span></div>
  <div class=\"tile-body\"><i class=\"fas fa-credit-card\"></i>
    <h2 class=\"float-right\">";
        // line 10
        echo ($context["total"] ?? null);
        echo "</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"";
        // line 12
        echo ($context["sale"] ?? null);
        echo "\">";
        echo ($context["text_view"] ?? null);
        echo "</a></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/sale_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  43 => 10,  38 => 8,  35 => 6,  33 => 5,  31 => 4,  29 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "extension/dashboard/sale_info.twig", "");
    }
}
