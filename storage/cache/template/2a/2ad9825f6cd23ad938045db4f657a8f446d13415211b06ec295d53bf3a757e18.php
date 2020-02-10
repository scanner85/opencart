<?php

/* catalog/attribute_list.twig */
class __TwigTemplate_3db5884599cf84d48c145200cf37d73dd79fed2d5fab5631f8e86d1b3f00b9a5 extends Twig_Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-attribute').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", []);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", []);
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>";
        }
        // line 22
        if (($context["success"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i>";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>";
        }
        // line 27
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-list\"></i>";
        // line 28
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 30
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-attribute\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                  <td class=\"text-left\">";
        // line 36
        if ((($context["sort"] ?? null) == "ad.name")) {
            // line 37
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        } else {
            // line 39
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        }
        // line 40
        echo "</td>
                  <td class=\"text-left\">";
        // line 41
        if ((($context["sort"] ?? null) == "attribute_group")) {
            // line 42
            echo "                      <a href=\"";
            echo ($context["sort_attribute_group"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_attribute_group"] ?? null);
            echo "</a>";
        } else {
            // line 44
            echo "                      <a href=\"";
            echo ($context["sort_attribute_group"] ?? null);
            echo "\">";
            echo ($context["column_attribute_group"] ?? null);
            echo "</a>";
        }
        // line 45
        echo "</td>
                  <td class=\"text-right\">";
        // line 46
        if ((($context["sort"] ?? null) == "a.sort_order")) {
            // line 47
            echo "                      <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>";
        } else {
            // line 49
            echo "                      <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>";
        }
        // line 50
        echo "</td>
                  <td class=\"text-right\">";
        // line 51
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>";
        // line 55
        if (($context["attributes"] ?? null)) {
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 57
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 58
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["attribute"], "attribute_id", []), ($context["selected"] ?? null))) {
                    // line 59
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "attribute_id", []);
                    echo "\" checked=\"checked\"/>";
                } else {
                    // line 61
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "attribute_id", []);
                    echo "\"/>";
                }
                // line 62
                echo "</td>
                      <td class=\"text-left\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", []);
                echo "</td>
                      <td class=\"text-left\">";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "attribute_group", []);
                echo "</td>
                      <td class=\"text-right\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "sort_order", []);
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "edit", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                    </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 70
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"5\">";
            // line 71
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>";
        }
        // line 74
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 79
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 80
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>";
        // line 86
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/attribute_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 86,  237 => 80,  233 => 79,  226 => 74,  221 => 71,  218 => 70,  207 => 66,  203 => 65,  199 => 64,  195 => 63,  192 => 62,  187 => 61,  182 => 59,  180 => 58,  177 => 57,  173 => 56,  171 => 55,  165 => 51,  162 => 50,  155 => 49,  146 => 47,  144 => 46,  141 => 45,  134 => 44,  125 => 42,  123 => 41,  120 => 40,  113 => 39,  104 => 37,  102 => 36,  93 => 30,  88 => 28,  85 => 27,  78 => 23,  76 => 22,  69 => 18,  67 => 17,  62 => 13,  52 => 11,  48 => 10,  44 => 8,  37 => 6,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catalog/attribute_list.twig", "");
    }
}
