<?php

/* catalog/option_form.twig */
class __TwigTemplate_b3293b44fc37ef961f6fc496ee5680774d69c6f6ef5da712a297fb68afce03c9 extends Twig_Template
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
      <div class=\"float-right\">
        <button type=\"submit\" form=\"form-option\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
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
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i>";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 25
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-option\">
          <fieldset>
            <legend>";
        // line 27
        echo ($context["text_option"] ?? null);
        echo "</legend>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 32
            echo "                  <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                      <span class=\"input-group-text\"><img src=\"language/";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
            echo "\"/></span>
                    </div>
                    <input type=\"text\" name=\"option_description[";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][name]\" value=\"";
            echo (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["option_description"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["option_description"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "name", [])) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\"/>
                  </div>";
            // line 38
            if ((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["error_name"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) {
                // line 39
                echo "                    <div class=\"invalid-tooltip\">";
                echo (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["error_name"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null);
                echo "</div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
            </div>
            <div class=\"form-group row\">
              <label for=\"input-type\" class=\"col-sm-2 col-form-label\">";
        // line 44
        echo ($context["entry_type"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-control\">
                  <optgroup label=\"";
        // line 47
        echo ($context["text_choose"] ?? null);
        echo "\">";
        // line 48
        if ((($context["type"] ?? null) == "select")) {
            // line 49
            echo "                      <option value=\"select\" selected=\"selected\">";
            echo ($context["text_select"] ?? null);
            echo "</option>";
        } else {
            // line 51
            echo "                      <option value=\"select\">";
            echo ($context["text_select"] ?? null);
            echo "</option>";
        }
        // line 53
        if ((($context["type"] ?? null) == "radio")) {
            // line 54
            echo "                      <option value=\"radio\" selected=\"selected\">";
            echo ($context["text_radio"] ?? null);
            echo "</option>";
        } else {
            // line 56
            echo "                      <option value=\"radio\">";
            echo ($context["text_radio"] ?? null);
            echo "</option>";
        }
        // line 58
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 59
            echo "                      <option value=\"checkbox\" selected=\"selected\">";
            echo ($context["text_checkbox"] ?? null);
            echo "</option>";
        } else {
            // line 61
            echo "                      <option value=\"checkbox\">";
            echo ($context["text_checkbox"] ?? null);
            echo "</option>";
        }
        // line 63
        echo "                  </optgroup>
                  <optgroup label=\"";
        // line 64
        echo ($context["text_input"] ?? null);
        echo "\">";
        // line 65
        if ((($context["type"] ?? null) == "text")) {
            // line 66
            echo "                      <option value=\"text\" selected=\"selected\">";
            echo ($context["text_text"] ?? null);
            echo "</option>";
        } else {
            // line 68
            echo "                      <option value=\"text\">";
            echo ($context["text_text"] ?? null);
            echo "</option>";
        }
        // line 70
        if ((($context["type"] ?? null) == "textarea")) {
            // line 71
            echo "                      <option value=\"textarea\" selected=\"selected\">";
            echo ($context["text_textarea"] ?? null);
            echo "</option>";
        } else {
            // line 73
            echo "                      <option value=\"textarea\">";
            echo ($context["text_textarea"] ?? null);
            echo "</option>";
        }
        // line 75
        echo "                  </optgroup>
                  <optgroup label=\"";
        // line 76
        echo ($context["text_file"] ?? null);
        echo "\">";
        // line 77
        if ((($context["type"] ?? null) == "file")) {
            // line 78
            echo "                      <option value=\"file\" selected=\"selected\">";
            echo ($context["text_file"] ?? null);
            echo "</option>";
        } else {
            // line 80
            echo "                      <option value=\"file\">";
            echo ($context["text_file"] ?? null);
            echo "</option>";
        }
        // line 82
        echo "                  </optgroup>
                  <optgroup label=\"";
        // line 83
        echo ($context["text_date"] ?? null);
        echo "\">";
        // line 84
        if ((($context["type"] ?? null) == "date")) {
            // line 85
            echo "                      <option value=\"date\" selected=\"selected\">";
            echo ($context["text_date"] ?? null);
            echo "</option>";
        } else {
            // line 87
            echo "                      <option value=\"date\">";
            echo ($context["text_date"] ?? null);
            echo "</option>";
        }
        // line 89
        if ((($context["type"] ?? null) == "time")) {
            // line 90
            echo "                      <option value=\"time\" selected=\"selected\">";
            echo ($context["text_time"] ?? null);
            echo "</option>";
        } else {
            // line 92
            echo "                      <option value=\"time\">";
            echo ($context["text_time"] ?? null);
            echo "</option>";
        }
        // line 94
        if ((($context["type"] ?? null) == "datetime")) {
            // line 95
            echo "                      <option value=\"datetime\" selected=\"selected\">";
            echo ($context["text_datetime"] ?? null);
            echo "</option>";
        } else {
            // line 97
            echo "                      <option value=\"datetime\">";
            echo ($context["text_datetime"] ?? null);
            echo "</option>";
        }
        // line 99
        echo "                  </optgroup>
                </select>
              </div>
            </div>
            <div class=\"form-group row\">
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 104
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 106
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 111
        echo ($context["text_value"] ?? null);
        echo "</legend>
            <table id=\"option-value\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left required\">";
        // line 115
        echo ($context["entry_option_value"] ?? null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 116
        echo ($context["entry_image"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 117
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>";
        // line 122
        $context["option_value_row"] = 0;
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["option_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
            // line 124
            echo "                  <tr id=\"option-value-row";
            echo ($context["option_value_row"] ?? null);
            echo "\">
                    <td class=\"text-center\"><input type=\"hidden\" name=\"option_value[";
            // line 125
            echo ($context["option_value_row"] ?? null);
            echo "][option_value_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", []);
            echo "\"/>";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 127
                echo "                        <div class=\"input-group\">
                          <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\"><img src=\"language/";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "\"/></span>
                          </div>
                          <input type=\"text\" name=\"option_value[";
                // line 131
                echo ($context["option_value_row"] ?? null);
                echo "][option_value_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "][name]\" value=\"";
                echo (((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_description", [])) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_description", [])) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "name", [])) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" class=\"form-control\"/>
                        </div>";
                // line 133
                if ((($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["error_option_value"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) {
                    // line 134
                    echo "                          <div class=\"invalid-tooltip\">";
                    echo (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["error_option_value"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null);
                    echo "</div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "</td>
                    <td class=\"text-left\">
                      <div class=\"card image\">
                        <img src=\"";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "thumb", []);
            echo "\" alt=\"\" title=\"\" id=\"thumb-image";
            echo ($context["option_value_row"] ?? null);
            echo "\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"option_value[";
            echo ($context["option_value_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", []);
            echo "\" id=\"input-image";
            echo ($context["option_value_row"] ?? null);
            echo "\"/>
                        <div class=\"card-body\">
                          <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image";
            // line 141
            echo ($context["option_value_row"] ?? null);
            echo "\" data-thumb=\"#thumb-image";
            echo ($context["option_value_row"] ?? null);
            echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i>";
            echo ($context["button_edit"] ?? null);
            echo "</button>
                          <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image";
            // line 142
            echo ($context["option_value_row"] ?? null);
            echo "\" data-thumb=\"#thumb-image";
            echo ($context["option_value_row"] ?? null);
            echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i>";
            echo ($context["button_clear"] ?? null);
            echo "</button>
                        </div>
                      </div>
                    </td>
                    <td class=\"text-right\"><input type=\"text\" name=\"option_value[";
            // line 146
            echo ($context["option_value_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "sort_order", []);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\"/></td>
                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#option-value-row";
            // line 147
            echo ($context["option_value_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                  </tr>";
            // line 149
            $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"addOptionValue();\" data-toggle=\"tooltip\" title=\"";
        // line 155
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'type\\']').on('change', function() {
\tif (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
\t\t\$('#option-value').parent().show();
\t} else {
\t\t\$('#option-value').parent().hide();
\t}
});

\$('select[name=\\'type\\']').trigger('change');

var option_value_row =";
        // line 176
        echo ($context["option_value_row"] ?? null);
        echo ";

function addOptionValue() {
\thtml = '<tr id=\"option-value-row' + option_value_row + '\">';
\thtml += '  <td class=\"text-left\"><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 182
            echo "\thtml += '    <div class=\"input-group\">';
\thtml += '      <div class=\"input-group-prepend\"><span class=\"input-group-text\"><img src=\"language/";
            // line 183
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
            echo "\" /></span></div>';
\thtml += '      <input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][";
            // line 184
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_option_value"] ?? null);
            echo "\" class=\"form-control\" />';
\thtml += '    </div>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "\thtml += '  </td>';
\thtml += '  <td class=\"text-center\">';
\thtml += '    <div class=\"card image\">';
\thtml += '      <img src=\"";
        // line 190
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image' + option_value_row + '\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/>';
\thtml += '      <input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image' + option_value_row + '\"/>';
\thtml += '      <div class=\"card-body\">';
\thtml += '        <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image' + option_value_row + '\" data-thumb=\"#thumb-image' + option_value_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i>";
        // line 193
        echo ($context["button_edit"] ?? null);
        echo "</button>';
\thtml += '        <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image' + option_value_row + '\" data-thumb=\"#thumb-image' + option_value_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i>";
        // line 194
        echo ($context["button_clear"] ?? null);
        echo "</button>';
\thtml += '      </div>';
\thtml += '    </div>';
\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 198
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 199
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#option-value tbody').append(html);

\toption_value_row++;
}
//--></script>";
        // line 207
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/option_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 207,  519 => 199,  515 => 198,  508 => 194,  504 => 193,  496 => 190,  491 => 187,  481 => 184,  473 => 183,  470 => 182,  466 => 181,  459 => 176,  435 => 155,  429 => 151,  423 => 149,  417 => 147,  409 => 146,  398 => 142,  390 => 141,  375 => 139,  370 => 136,  361 => 134,  359 => 133,  349 => 131,  340 => 129,  336 => 127,  332 => 126,  327 => 125,  322 => 124,  318 => 123,  316 => 122,  309 => 117,  305 => 116,  301 => 115,  294 => 111,  284 => 106,  279 => 104,  272 => 99,  267 => 97,  262 => 95,  260 => 94,  255 => 92,  250 => 90,  248 => 89,  243 => 87,  238 => 85,  236 => 84,  233 => 83,  230 => 82,  225 => 80,  220 => 78,  218 => 77,  215 => 76,  212 => 75,  207 => 73,  202 => 71,  200 => 70,  195 => 68,  190 => 66,  188 => 65,  185 => 64,  182 => 63,  177 => 61,  172 => 59,  170 => 58,  165 => 56,  160 => 54,  158 => 53,  153 => 51,  148 => 49,  146 => 48,  143 => 47,  137 => 44,  132 => 41,  123 => 39,  121 => 38,  113 => 36,  104 => 34,  100 => 32,  96 => 31,  92 => 29,  87 => 27,  82 => 25,  77 => 23,  74 => 22,  67 => 18,  65 => 17,  60 => 13,  50 => 11,  46 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catalog/option_form.twig", "");
    }
}
