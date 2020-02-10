<?php

/* design/layout_form.twig */
class __TwigTemplate_62763fbda9ab69df3a5c338b5399303e0a45f4e6b446d955a2079bf9c955bc81 extends Twig_Template
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
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\">
          <fieldset>
            <legend>";
        // line 27
        echo ($context["text_route"] ?? null);
        echo "</legend>
            <div class=\"form-group row required\">
              <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "                  <div class=\"invalid-tooltip\">";
            echo ($context["error_name"] ?? null);
            echo "</div>";
        }
        // line 35
        echo "              </div>
            </div>
            <br/>
            <table id=\"route\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 41
        echo ($context["entry_store"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 42
        echo ($context["entry_route"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>";
        // line 47
        $context["route_row"] = 0;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 49
            echo "                  <tr id=\"route-row";
            echo ($context["route_row"] ?? null);
            echo "\">
                    <td class=\"text-left\"><select name=\"layout_route[";
            // line 50
            echo ($context["route_row"] ?? null);
            echo "][store_id]\" class=\"form-control\">
                        <option value=\"0\">";
            // line 51
            echo ($context["text_default"] ?? null);
            echo "</option>";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 53
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []) == twig_get_attribute($this->env, $this->source, $context["layout_route"], "store_id", []))) {
                    // line 54
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
                    echo "</option>";
                } else {
                    // line 56
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                      </select></td>
                    <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 60
            echo ($context["route_row"] ?? null);
            echo "][route]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout_route"], "route", []);
            echo "\" placeholder=\"";
            echo ($context["entry_route"] ?? null);
            echo "\" class=\"form-control\"/></td>
                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 61
            echo ($context["route_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                  </tr>";
            // line 63
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 69
        echo ($context["button_route_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 75
        echo ($context["text_module"] ?? null);
        echo "</legend>";
        // line 76
        $context["module_row"] = 0;
        // line 77
        echo "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 82
        echo ($context["text_column_left"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 87
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", []) == "column_left")) {
                // line 88
                echo "                        <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-left\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 91
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 93
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                    echo "\">";
                    // line 94
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [])) {
                        // line 95
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", []) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", []))) {
                            // line 96
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                            echo "</option>";
                        } else {
                            // line 98
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                            echo "</option>";
                        }
                    } else {
                        // line 101
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 102
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", []) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", []))) {
                                // line 103
                                echo "                                          <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", []);
                                echo "</option>";
                            } else {
                                // line 105
                                echo "                                          <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", []);
                                echo "</option>";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 109
                    echo "                                  </optgroup>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", []);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", []);
                echo "\"/>
                              <div class=\"input-group-append\">
                                <a href=\"";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pencil-alt fa-fw\"></i></a>
                                <button type=\"button\" onclick=\"\$('#module-row";
                // line 114
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle fa-fw\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>";
                // line 119
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group input-group-sm\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 130
            echo "                              <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
            echo "\">";
            // line 131
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [])) {
                // line 132
                echo "                                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                echo "</option>";
            } else {
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", []));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 135
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", []);
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 138
            echo "                              </optgroup>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                          </select>
                          <div class=\"input-group-append\">
                            <button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 142
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-plus-circle fa-fw\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-content-top\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 154
        echo ($context["text_content_top"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 159
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", []) == "content_top")) {
                // line 160
                echo "                        <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-left\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 163
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 165
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                    echo "\">";
                    // line 166
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [])) {
                        // line 167
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", []) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", []))) {
                            // line 168
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                            echo "</option>";
                        } else {
                            // line 170
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                            echo "</option>";
                        }
                    } else {
                        // line 173
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 174
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", []) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", []))) {
                                // line 175
                                echo "                                          <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", []);
                                echo "</option>";
                            } else {
                                // line 177
                                echo "                                          <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", []);
                                echo "</option>";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 181
                    echo "                                  </optgroup>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", []);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", []);
                echo "\"/>
                              <div class=\"input-group-append\">
                                <a href=\"";
                // line 185
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pencil-alt fa-fw\"></i></a>
                                <button type=\"button\" onclick=\"\$('#module-row";
                // line 186
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle fa-fw\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>";
                // line 191
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group input-group-sm\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 202
            echo "                              <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
            echo "\">";
            // line 203
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [])) {
                // line 204
                echo "                                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                echo "</option>";
            } else {
                // line 206
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", []));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 207
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", []);
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 210
            echo "                              </optgroup>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                          </select>
                          <div class=\"input-group-append\">
                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 214
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-plus-circle fa-fw\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 224
        echo ($context["text_content_bottom"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 229
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", []) == "content_bottom")) {
                // line 230
                echo "                        <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-left\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 233
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">";
                // line 234
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 235
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                    echo "\">";
                    // line 236
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [])) {
                        // line 237
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", []) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", []))) {
                            // line 238
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                            echo "</option>";
                        } else {
                            // line 240
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                            echo "</option>";
                        }
                    } else {
                        // line 243
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 244
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", []) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", []))) {
                                // line 245
                                echo "                                          <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", []);
                                echo "</option>";
                            } else {
                                // line 247
                                echo "                                          <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", []);
                                echo "</option>";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 251
                    echo "                                  </optgroup>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", []);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", []);
                echo "\"/>
                              <div class=\"input-group-append\">
                                <a href=\"";
                // line 255
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pencil-alt fa-fw\"></i></a>
                                <button type=\"button\" onclick=\"\$('#module-row";
                // line 256
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle fa-fw\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>";
                // line 261
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group input-group-sm\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 272
            echo "                              <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
            echo "\">";
            // line 273
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [])) {
                // line 274
                echo "                                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                echo "</option>";
            } else {
                // line 276
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", []));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 277
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", []);
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 280
            echo "                              </optgroup>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "                          </select>
                          <div class=\"input-group-append\">
                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 284
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-plus-circle fa-fw\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 296
        echo ($context["text_column_right"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 301
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", []) == "column_right")) {
                // line 302
                echo "                        <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-left\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 305
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">";
                // line 306
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 307
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                    echo "\">";
                    // line 308
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [])) {
                        // line 309
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", []) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", []))) {
                            // line 310
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                            echo "</option>";
                        } else {
                            // line 312
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                            echo "</option>";
                        }
                    } else {
                        // line 315
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 316
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", []) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", []))) {
                                // line 317
                                echo "                                          <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", []);
                                echo "</option>";
                            } else {
                                // line 319
                                echo "                                          <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", []);
                                echo "</option>";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 323
                    echo "                                  </optgroup>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 325
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", []);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", []);
                echo "\"/>
                              <div class=\"input-group-append\">
                                <a href=\"";
                // line 327
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pencil-alt fa-fw\"></i></a>
                                <button type=\"button\" onclick=\"\$('#module-row";
                // line 328
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle fa-fw\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>";
                // line 333
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group input-group-sm\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 344
            echo "                              <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
            echo "\">";
            // line 345
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [])) {
                // line 346
                echo "                                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                echo "</option>";
            } else {
                // line 348
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", []));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 349
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", []);
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 352
            echo "                              </optgroup>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "                          </select>
                          <div class=\"input-group-append\">
                            <button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 356
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-plus-circle fa-fw\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var route_row =";
        // line 372
        echo ($context["route_row"] ?? null);
        echo ";

function addRoute() {
\thtml = '<tr id=\"route-row' + route_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
\thtml += '  <option value=\"0\">";
        // line 377
        echo ($context["text_default"] ?? null);
        echo "</option>';";
        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 379
            echo "\thtml += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "name", []), "js");
            echo "</option>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 381
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 382
        echo ($context["entry_route"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 383
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#route tbody').append(html);

\troute_row++;
}

var module_row =";
        // line 391
        echo ($context["module_row"] ?? null);
        echo ";

function addModule(type) {
\tif (\$('#module-' + type + ' tfoot select').val()) {
\t\thtml = '<tr id=\"module-row' + module_row + '\">';
\t\thtml += '  <td class=\"text-left\"><div class=\"input-group input-group-sm\">';
\t\thtml += '    <select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';";
        // line 398
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 399
            echo "\t\thtml += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", []), "js");
            echo "\">';";
            // line 400
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [])) {
                // line 401
                echo "\t\thtml += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", []);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", []), "js");
                echo "</option>';";
            } else {
                // line 403
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", []));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 404
                    echo "\t\thtml += '      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", []);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", []), "js");
                    echo "</option>';";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 407
            echo "\t\thtml += '    </optgroup>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 409
        echo "\t\thtml += '  </select>';
\t\thtml += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
\t\thtml += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
\t\thtml += '  <div class=\"input-group-append\"><a href=\"\" data-toggle=\"tooltip\" title=\"";
        // line 412
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pencil-alt fa-fw\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle fa-fw\"></i></button></div>';
\t\thtml += '  </div></td>';
\t\thtml += '</tr>';

\t\t\$('#module-' + type + ' tbody').append(html);

\t\t\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());

\t\t\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');

\t\t\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
\t\t\t\$(element).val(i);
\t\t});

\t\tmodule_row++;
\t} else {
\t\talert('";
        // line 428
        echo ($context["error_module"] ?? null);
        echo "');
\t}
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').on('change', 'select[name*=\\'code\\']', function() {
\tvar part = this.value.split('.');

\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 436
        echo ($context["user_token"] ?? null);
        echo "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 438
        echo ($context["user_token"] ?? null);
        echo "&module_id=' + part[1]);
\t}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');
//--></script>";
        // line 444
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "design/layout_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 444,  1070 => 438,  1065 => 436,  1054 => 428,  1033 => 412,  1028 => 409,  1022 => 407,  1011 => 404,  1007 => 403,  1000 => 401,  998 => 400,  994 => 399,  990 => 398,  981 => 391,  970 => 383,  966 => 382,  963 => 381,  953 => 379,  949 => 378,  946 => 377,  938 => 372,  919 => 356,  915 => 354,  909 => 352,  898 => 349,  894 => 348,  887 => 346,  885 => 345,  881 => 344,  877 => 343,  869 => 336,  862 => 333,  853 => 328,  847 => 327,  835 => 325,  829 => 323,  817 => 319,  810 => 317,  808 => 316,  804 => 315,  796 => 312,  789 => 310,  787 => 309,  785 => 308,  781 => 307,  777 => 306,  774 => 305,  767 => 302,  765 => 301,  761 => 300,  755 => 296,  740 => 284,  736 => 282,  730 => 280,  719 => 277,  715 => 276,  708 => 274,  706 => 273,  702 => 272,  698 => 271,  690 => 264,  683 => 261,  674 => 256,  668 => 255,  656 => 253,  650 => 251,  638 => 247,  631 => 245,  629 => 244,  625 => 243,  617 => 240,  610 => 238,  608 => 237,  606 => 236,  602 => 235,  598 => 234,  595 => 233,  588 => 230,  586 => 229,  582 => 228,  576 => 224,  563 => 214,  559 => 212,  553 => 210,  542 => 207,  538 => 206,  531 => 204,  529 => 203,  525 => 202,  521 => 201,  513 => 194,  506 => 191,  497 => 186,  491 => 185,  479 => 183,  473 => 181,  461 => 177,  454 => 175,  452 => 174,  448 => 173,  440 => 170,  433 => 168,  431 => 167,  429 => 166,  425 => 165,  421 => 164,  418 => 163,  411 => 160,  409 => 159,  405 => 158,  399 => 154,  384 => 142,  380 => 140,  374 => 138,  363 => 135,  359 => 134,  352 => 132,  350 => 131,  346 => 130,  342 => 129,  334 => 122,  327 => 119,  318 => 114,  312 => 113,  300 => 111,  294 => 109,  282 => 105,  275 => 103,  273 => 102,  269 => 101,  261 => 98,  254 => 96,  252 => 95,  250 => 94,  246 => 93,  242 => 92,  239 => 91,  232 => 88,  230 => 87,  226 => 86,  220 => 82,  213 => 77,  211 => 76,  208 => 75,  199 => 69,  193 => 65,  187 => 63,  181 => 61,  173 => 60,  170 => 59,  159 => 56,  152 => 54,  150 => 53,  146 => 52,  143 => 51,  139 => 50,  134 => 49,  130 => 48,  128 => 47,  121 => 42,  117 => 41,  109 => 35,  104 => 33,  102 => 32,  97 => 31,  92 => 29,  87 => 27,  82 => 25,  77 => 23,  74 => 22,  67 => 18,  65 => 17,  60 => 13,  50 => 11,  46 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "design/layout_form.twig", "");
    }
}
