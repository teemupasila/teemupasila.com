<?php

/* core/modules/forum/templates/forum-list.html.twig */
class __TwigTemplate_8980921446c9b1e28c7b55a0ca7a80fcd70bc677726f3241a980efe7a902b33d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("for" => 45, "if" => 47);
        $filters = array("t" => 38);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 35
        echo "<table>
  <thead>
    <tr>
      <th>";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Forum")));
        echo "</th>
      <th>";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Topics")));
        echo "</th>
      <th>";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Posts")));
        echo "</th>
      <th>";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last post")));
        echo "</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["forums"] ?? null));
        foreach ($context['_seq'] as $context["child_id"] => $context["forum"]) {
            // line 46
            echo "    <tr>
      <td";
            // line 47
            if (($this->getAttribute($context["forum"], "is_container", array()) == true)) {
                echo " colspan=\"4\"";
            }
            echo ">
        ";
            // line 53
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["forum"], "depth", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["forum"], "depth", array()) > 0)) {
                    echo "<div class=\"indent\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "          <div title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "icon_title", array()), "html", null, true));
            echo "\">
            <span class=\"visually-hidden\">";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "icon_title", array()), "html", null, true));
            echo "</span>
          </div>
          <div><a href=\"";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "link", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "label", array()), "html", null, true));
            echo "</a></div>
          ";
            // line 58
            if ($this->getAttribute($this->getAttribute($context["forum"], "description", array()), "value", array())) {
                // line 59
                echo "            <div>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["forum"], "description", array()), "value", array()), "html", null, true));
                echo "</div>
          ";
            }
            // line 61
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["forum"], "depth", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["forum"], "depth", array()) > 0)) {
                    echo "</div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "      </td>
      ";
            // line 63
            if (($this->getAttribute($context["forum"], "is_container", array()) == false)) {
                // line 64
                echo "        <td>
          ";
                // line 65
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "num_topics", array()), "html", null, true));
                echo "
          ";
                // line 66
                if (($this->getAttribute($context["forum"], "new_topics", array()) == true)) {
                    // line 67
                    echo "            <br />
            <a href=\"";
                    // line 68
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "new_url", array()), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "new_text", array()), "html", null, true));
                    echo "</a>
          ";
                }
                // line 70
                echo "        </td>
        <td>";
                // line 71
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "num_posts", array()), "html", null, true));
                echo "</td>
        <td>";
                // line 72
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "last_reply", array()), "html", null, true));
                echo "</td>
      ";
            }
            // line 74
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['child_id'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/forum/templates/forum-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 76,  164 => 74,  159 => 72,  155 => 71,  152 => 70,  145 => 68,  142 => 67,  140 => 66,  136 => 65,  133 => 64,  131 => 63,  128 => 62,  116 => 61,  110 => 59,  108 => 58,  102 => 57,  97 => 55,  92 => 54,  80 => 53,  74 => 47,  71 => 46,  67 => 45,  60 => 41,  56 => 40,  52 => 39,  48 => 38,  43 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/modules/forum/templates/forum-list.html.twig", "/jet/app/drupal/core/modules/forum/templates/forum-list.html.twig");
    }
}
