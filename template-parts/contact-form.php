<?php
$current_user = wp_get_current_user();
$profile_tipo_de_telefone = (get_field('profile_tipo_de_telefone', 'user_' . $current_user->ID)) ? get_field('profile_tipo_de_telefone', 'user_' . $current_user->ID) : '';
if ($profile_tipo_de_telefone == 'brasil') {
    $telefone = get_field('profile_telefone', 'user_' . $current_user->ID);
} elseif ($profile_tipo_de_telefone == 'fora') {
    $telefone = get_field('profile_telefone_fora', 'user_' . $current_user->ID);
} else {
    $telefone = get_field('profile_telefone', 'user_' . $current_user->ID);
}
$cpf = (get_field('profile_cpf', 'user_' . $current_user->ID)) ? get_field('profile_cpf', 'user_' . $current_user->ID) : '';
$profile_nao_localizou_instrutor = (get_field('profile_nao_localizou_instrutor', 'user_' . $current_user->ID)) ? get_field('profile_nao_localizou_instrutor', 'user_' . $current_user->ID) : '';
$profile_instrutor_pessoal = (get_field('profile_instrutor_pessoal', 'user_' . $current_user->ID)) ? get_field('profile_instrutor_pessoal', 'user_' . $current_user->ID) : '';
?>

<form method="POST" action="https://meditacaotranscedental.activehosted.com/proc.php" id="_form_26_"
  class="_form _form_26 _inline-form  _dark" novalidate data-styles-version="3">
  <input type="hidden" name="u" value="26" />
  <input type="hidden" name="f" value="26" />
  <input type="hidden" name="s" />
  <input type="hidden" name="c" value="0" />
  <input type="hidden" name="m" value="0" />
  <input type="hidden" name="act" value="sub" />
  <input type="hidden" name="v" value="2" />
  <input type="hidden" name="or" value="90b9f5e5a329b8f1d5c6d129eac9d71d" />
  <div class="block block-rounded">
    <div class="block-header block-header-default block-header">
      <h3 class="block-title"></h3>
    </div>
    <div class="block-content">
      <div class="row justify-content-center py-sm-3 py-md-5">
        <div class="col-sm-10 col-md-8 _form-content">

          <div class="d-lg-flex gap-lg-3">

            <div class="col mb-4 form-floating">
              <input class="form-control form-control-alt" type="text" id="firstname" name="firstname"
                placeholder="Insira seu nome.."
                value="<?php echo esc_attr($current_user->first_name); ?>" />
              <label class="form-label" for="firstname">Nome</label>
            </div>
            <div class="col mb-4 form-floating">
              <input class="form-control form-control-alt" type="text" id="lastname" name="lastname"
                placeholder="Insira seu sobrenome.."
                value="<?php echo esc_attr($current_user->last_name); ?>" />
              <label class="form-label" for="lastname">Sobrenome</label>
            </div>
          </div>

          <div class="d-lg-flex gap-lg-3">

            <div class="col mb-4 form-floating">
              <input class="form-control form-control-alt" type="text" id="field[92]" name="field[92]"
                placeholder="Insira seu CPF.."
                value="<?php echo esc_attr($cpf); ?>" />
              <label class="form-label" for="field[92]">CPF</label>
            </div>
            <div class="col mb-4 form-floating">
              <input class="form-control form-control-alt" type="text" id="email" name="email"
                placeholder="Insira seu email.."
                value="<?php echo esc_attr($current_user->user_email); ?>"
                required />
              <label class="form-label" for="email">Email</label>
            </div>
          </div>

          <div class="d-lg-flex gap-lg-3">

            <div class="col mb-4 form-floating">
              <input class="form-control form-control-alt" type="text" id="phone" name="phone"
                placeholder="Insira seu telefone.."
                value="<?php echo esc_attr($telefone); ?>" />
              <label class="form-label" for="phone">Telefone</label>
            </div>
            <div class="col mb-4 form-floating">
              <input class="form-control form-control-alt" type="text" id="field[34]" name="field[34]"
                placeholder="Insira seu instrutor pessoal.." value="<?php
                if (!empty($profile_nao_localizou_instrutor)) {
                    $instrutor_pessoal = $profile_nao_localizou_instrutor;
                } elseif (is_array($profile_instrutor_pessoal) && !empty($profile_instrutor_pessoal)) {
                    $instrutor_pessoal = $profile_instrutor_pessoal["user_firstname"] . ' ' . $profile_instrutor_pessoal["user_lastname"];
                } else {
                  $instrutor_pessoal = '';
                }
                echo $instrutor_pessoal;
                ?>" />
              <label class="form-label" for="field[34]">Instrutor Pessoal</label>
            </div>
          </div>
          <div class="mb-4 form-floating">
            <textarea class="form-control form-control-alt" id="field[47]" name="field[47]"
              placeholder="Insira sua dúvida, sugestão ou crítica..." style="height: 100px"></textarea>
            <label class="form-label" for="block-form8-password">Dúvida, crítica ou sugestão</label>
          </div>
          <div class="mb-4">
            <div class="form-check">

              <fieldset class="_form-fieldset">
                <div class="_row">
                </div>
                <input data-autofill="false" type="hidden" id="field[75][]" name="field[75][]" value="~|">
                <div class="_row _checkbox-radio">
                  <input class="form-check-input"
                    id="field_75Ao preencher meus dados, concordo em receber comunicações sobre produtos e serviços, conforme a Política de Privacidade."
                    type="checkbox" name="field[75][]"
                    value="Ao preencher meus dados, concordo em receber comunicações sobre produtos e serviços, conforme a Política de Privacidade.">
                  <span>
                    <label class="form-check-label"
                      for="field_75Ao preencher meus dados, concordo em receber comunicações sobre produtos e serviços, conforme a Política de Privacidade.">
                      Ao preencher meus dados, concordo em receber comunicações sobre produtos e serviços, conforme a
                      Política
                      de Privacidade.
                    </label>
                  </span>
                </div>
              </fieldset>
            </div>
          </div>
          <div class="_clear-element">
          </div>
        </div>

        <div class="_form-thank-you alert alert-success" style="display:none;">
        </div>

      </div>
      <div class="block-content block-content-full block-content-sm bg-body-light text-center form-footer">
        <button id="_form_26_submit" class="_submit btn btn-primary" type="submit">
          <i class="fa fa-check opacity-50 me-1"></i> Enviar
        </button>
        <button type="reset" class="btn btn-alt-secondary">
          <i class="fa fa-sync-alt opacity-50 me-1"></i> Limpar
        </button>
      </div>
    </div>
</form>

<script type="text/javascript">
  window.cfields = {
    "92": "cpf",
    "34": "instrutordapalestra",
    "47": "mensagem",
    "75": "optin"
  };
  window._show_thank_you = function(id, message, trackcmp_url, email) {
    var form = document.getElementById('_form_' + id + '_'),
      thank_you = form.querySelector('._form-thank-you');
    form.querySelector('._form-content').style.display = 'none';
    form.querySelector('.form-footer').style.display = 'none';
    thank_you.innerHTML = message;
    thank_you.style.display = 'block';
    const vgoAlias = typeof visitorGlobalObjectAlias === 'undefined' ? 'vgo' : visitorGlobalObjectAlias;
    var visitorObject = window[vgoAlias];
    if (email && typeof visitorObject !== 'undefined') {
      visitorObject('setEmail', email);
      visitorObject('update');
    } else if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
      // Site tracking URL to use after inline form submission.
      _load_script(trackcmp_url);
    }
    if (typeof window._form_callback !== 'undefined') window._form_callback(id);
  };
  window._show_error = function(id, message, html) {
    var form = document.getElementById('_form_' + id + '_'),
      err = document.createElement('div'),
      button = form.querySelector('button'),
      old_error = form.querySelector('._form_error');
    if (old_error) old_error.parentNode.removeChild(old_error);
    err.innerHTML = message;
    err.className = '_error-inner _form_error _no_arrow';
    var wrapper = document.createElement('div');
    wrapper.className = '_form-inner';
    wrapper.appendChild(err);
    button.parentNode.insertBefore(wrapper, button);
    var submitButton = form.querySelector('[id^="_form"][id$="_submit"]');
    submitButton.disabled = false;
    submitButton.classList.remove('processing');
    if (html) {
      var div = document.createElement('div');
      div.className = '_error-html';
      div.innerHTML = html;
      err.appendChild(div);
    }
  };
  window._load_script = function(url, callback, isSubmit) {
    var head = document.querySelector('head'),
      script = document.createElement('script'),
      r = false;
    var submitButton = document.querySelector('#_form_26_submit');
    script.type = 'text/javascript';
    script.charset = 'utf-8';
    script.src = url;
    if (callback) {
      script.onload = script.onreadystatechange = function() {
        if (!r && (!this.readyState || this.readyState == 'complete')) {
          r = true;
          callback();
        }
      };
    }
    script.onerror = function() {
      if (isSubmit) {
        if (script.src.length > 10000) {
          _show_error("26", "Desculpe, seu envio falhou. Deixe suas respostas mais curtas e tente novamente.");
        } else {
          _show_error("26", "Desculpe, seu envio falhou. Tente novamente.");
        }
        submitButton.disabled = false;
        submitButton.classList.remove('processing');
      }
    }

    head.appendChild(script);
  };
  (function() {
    if (window.location.search.search("excludeform") !== -1) return false;
    var getCookie = function(name) {
      var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
      return match ? match[2] : null;
    }
    var setCookie = function(name, value) {
      var now = new Date();
      var time = now.getTime();
      var expireTime = time + 1000 * 60 * 60 * 24 * 365;
      now.setTime(expireTime);
      document.cookie = name + '=' + value + '; expires=' + now + ';path=/; Secure; SameSite=Lax;';
    }
    var addEvent = function(element, event, func) {
      if (element.addEventListener) {
        element.addEventListener(event, func);
      } else {
        var oldFunc = element['on' + event];
        element['on' + event] = function() {
          oldFunc.apply(this, arguments);
          func.apply(this, arguments);
        };
      }
    }
    var _removed = false;
    var form_to_submit = document.getElementById('_form_26_');
    var allInputs = form_to_submit.querySelectorAll('input, select, textarea'),
      tooltips = [],
      submitted = false;

    var getUrlParam = function(name) {
      var params = new URLSearchParams(window.location.search);
      return params.get(name) || false;
    };

    var acctDateFormat = "%d/%m/%Y";
    var getNormalizedDate = function(date, acctFormat) {
      var decodedDate = decodeURIComponent(date);
      if (acctFormat && acctFormat.match(/(%d|%e).*%m/gi) !== null) {
        return decodedDate.replace(/(\d{2}).*(\d{2}).*(\d{4})/g, '$3-$2-$1');
      } else if (Date.parse(decodedDate)) {
        var dateObj = new Date(decodedDate);
        var year = dateObj.getFullYear();
        var month = dateObj.getMonth() + 1;
        var day = dateObj.getDate();
        return `${year}-${month < 10 ? `0${month}` : month}-${day < 10 ? `0${day}` : day}`;
      }
      return false;
    };

    var getNormalizedTime = function(time) {
      var hour, minutes;
      var decodedTime = decodeURIComponent(time);
      var timeParts = Array.from(decodedTime.matchAll(/(\d{1,2}):(\d{1,2})\W*([AaPp][Mm])?/gm))[0];
      if (timeParts[3]) { // 12 hour format
        var isPM = timeParts[3].toLowerCase() === 'pm';
        if (isPM) {
          hour = parseInt(timeParts[1]) === 12 ? '12' : `${parseInt(timeParts[1]) + 12}`;
        } else {
          hour = parseInt(timeParts[1]) === 12 ? '0' : timeParts[1];
        }
      } else { // 24 hour format
        hour = timeParts[1];
      }
      var normalizedHour = parseInt(hour) < 10 ? `0${parseInt(hour)}` : hour;
      var minutes = timeParts[2];
      return `${normalizedHour}:${minutes}`;
    };

    for (var i = 0; i < allInputs.length; i++) {
      var regexStr = "field\\[(\\d+)\\]";
      var results = new RegExp(regexStr).exec(allInputs[i].name);
      if (results != undefined) {
        allInputs[i].dataset.name = allInputs[i].name.match(/\[time\]$/) ?
          `${window.cfields[results[1]]}_time` :
          window.cfields[results[1]];
      } else {
        allInputs[i].dataset.name = allInputs[i].name;
      }
      var fieldVal = getUrlParam(allInputs[i].dataset.name);

      if (fieldVal) {
        if (allInputs[i].dataset.autofill === "false") {
          continue;
        }
        if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
          if (allInputs[i].value == fieldVal) {
            allInputs[i].checked = true;
          }
        } else if (allInputs[i].type == "date") {
          allInputs[i].value = getNormalizedDate(fieldVal, acctDateFormat);
        } else if (allInputs[i].type == "time") {
          allInputs[i].value = getNormalizedTime(fieldVal);
        } else {
          allInputs[i].value = fieldVal;
        }
      }
    }

    var remove_tooltips = function() {
      for (var i = 0; i < tooltips.length; i++) {
        tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
      }
      tooltips = [];
    };
    var remove_tooltip = function(elem) {
      for (var i = 0; i < tooltips.length; i++) {
        if (tooltips[i].elem === elem) {
          tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
          tooltips.splice(i, 1);
          return;
        }
      }
    };
    var create_tooltip = function(elem, text) {
      var tooltip = document.createElement('div'),
        arrow = document.createElement('div'),
        inner = document.createElement('div'),
        new_tooltip = {};
      if (elem.type != 'radio' && elem.type != 'checkbox') {
        tooltip.className = '_error';
        arrow.className = '_error-arrow';
        inner.className = '_error-inner';
        inner.innerHTML = text;
        tooltip.appendChild(arrow);
        tooltip.appendChild(inner);
        elem.parentNode.appendChild(tooltip);
      } else {
        tooltip.className = '_error-inner _no_arrow';
        tooltip.innerHTML = text;
        elem.parentNode.insertBefore(tooltip, elem);
        new_tooltip.no_arrow = true;
      }
      new_tooltip.tip = tooltip;
      new_tooltip.elem = elem;
      tooltips.push(new_tooltip);
      return new_tooltip;
    };
    var resize_tooltip = function(tooltip) {
      var rect = tooltip.elem.getBoundingClientRect();
      var doc = document.documentElement,
        scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0));
      if (scrollPosition < 40) {
        tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
      } else {
        tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
      }
    };
    var resize_tooltips = function() {
      if (_removed) return;
      for (var i = 0; i < tooltips.length; i++) {
        if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
      }
    };
    var validate_field = function(elem, remove) {
      var tooltip = null,
        value = elem.value,
        no_error = true;
      remove ? remove_tooltip(elem) : false;
      if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
      if (elem.getAttribute('required') !== null) {
        if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
          var elems = form_to_submit.elements[elem.name];
          if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
            no_error = elem.checked;
          } else {
            no_error = false;
            for (var i = 0; i < elems.length; i++) {
              if (elems[i].checked) no_error = true;
            }
          }
          if (!no_error) {
            tooltip = create_tooltip(elem, "Por favor, selecione uma opção.");
          }
        } else if (elem.type == 'checkbox') {
          var elems = form_to_submit.elements[elem.name],
            found = false,
            err = [];
          no_error = true;
          for (var i = 0; i < elems.length; i++) {
            if (elems[i].getAttribute('required') === null) continue;
            if (!found && elems[i] !== elem) return true;
            found = true;
            elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
            if (!elems[i].checked) {
              no_error = false;
              elems[i].className = elems[i].className + ' _has_error';
              err.push("Marcar %s é necessário".replace("%s", elems[i].value));
            }
          }
          if (!no_error) {
            tooltip = create_tooltip(elem, err.join('<br/>'));
          }
        } else if (elem.tagName == 'SELECT') {
          var selected = true;
          if (elem.multiple) {
            selected = false;
            for (var i = 0; i < elem.options.length; i++) {
              if (elem.options[i].selected) {
                selected = true;
                break;
              }
            }
          } else {
            for (var i = 0; i < elem.options.length; i++) {
              if (elem.options[i].selected &&
                (!elem.options[i].value ||
                  (elem.options[i].value.match(/\n/g)))
              ) {
                selected = false;
              }
            }
          }
          if (!selected) {
            elem.className = elem.className + ' _has_error';
            no_error = false;
            tooltip = create_tooltip(elem, "Por favor, selecione uma opção.");
          }
        } else if (value === undefined || value === null || value === '') {
          elem.className = elem.className + ' _has_error';
          no_error = false;
          tooltip = create_tooltip(elem, "Este campo é necessário.");
        }
      }
      if (no_error && (elem.id == 'field[]' || elem.id == 'ca[11][v]')) {
        if (elem.className.includes('phone-input-error')) {
          elem.className = elem.className + ' _has_error';
          no_error = false;
        }
      }
      if (no_error && elem.name == 'email') {
        if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
          elem.className = elem.className + ' _has_error';
          no_error = false;
          tooltip = create_tooltip(elem, "Digite um e-mail válido");
        }
      }
      if (no_error && /date_field/.test(elem.className)) {
        if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
          elem.className = elem.className + ' _has_error';
          no_error = false;
          tooltip = create_tooltip(elem, "Digite uma data válida.");
        }
      }
      tooltip ? resize_tooltip(tooltip) : false;
      return no_error;
    };
    var needs_validate = function(el) {
      if (el.getAttribute('required') !== null) {
        return true
      }
      if (el.name === 'email' && el.value !== "") {
        return true
      }

      if ((el.id == 'field[]' || el.id == 'ca[11][v]') && el.className.includes('phone-input-error')) {
        return true
      }

      return false
    };
    var validate_form = function(e) {
      var err = form_to_submit.querySelector('._form_error'),
        no_error = true;
      if (!submitted) {
        submitted = true;
        for (var i = 0, len = allInputs.length; i < len; i++) {
          var input = allInputs[i];
          if (needs_validate(input)) {
            if (input.type == 'tel') {
              addEvent(input, 'blur', function() {
                this.value = this.value.trim();
                validate_field(this, true);
              });
            }
            if (input.type == 'text' || input.type == 'number' || input.type == 'time') {
              addEvent(input, 'blur', function() {
                this.value = this.value.trim();
                validate_field(this, true);
              });
              addEvent(input, 'input', function() {
                validate_field(this, true);
              });
            } else if (input.type == 'radio' || input.type == 'checkbox') {
              (function(el) {
                var radios = form_to_submit.elements[el.name];
                for (var i = 0; i < radios.length; i++) {
                  addEvent(radios[i], 'click', function() {
                    validate_field(el, true);
                  });
                }
              })(input);
            } else if (input.tagName == 'SELECT') {
              addEvent(input, 'change', function() {
                validate_field(this, true);
              });
            } else if (input.type == 'textarea') {
              addEvent(input, 'input', function() {
                validate_field(this, true);
              });
            }
          }
        }
      }
      remove_tooltips();
      for (var i = 0, len = allInputs.length; i < len; i++) {
        var elem = allInputs[i];
        if (needs_validate(elem)) {
          if (elem.tagName.toLowerCase() !== "select") {
            elem.value = elem.value.trim();
          }
          validate_field(elem) ? true : no_error = false;
        }
      }
      if (!no_error && e) {
        e.preventDefault();
      }
      resize_tooltips();
      return no_error;
    };
    addEvent(window, 'resize', resize_tooltips);
    addEvent(window, 'scroll', resize_tooltips);

    var hidePhoneInputError = function(inputId) {
      var errorMessage = document.getElementById("error-msg-" + inputId);
      var input = document.getElementById(inputId);
      errorMessage.classList.remove("phone-error");
      errorMessage.classList.add("phone-error-hidden");
      input.classList.remove("phone-input-error");
    };

    var initializePhoneInput = function(input, defaultCountry) {
      return window.intlTelInput(input, {
        utilsScript: "https://unpkg.com/intl-tel-input@17.0.18/build/js/utils.js",
        autoHideDialCode: false,
        separateDialCode: true,
        initialCountry: defaultCountry,
        preferredCountries: []
      });
    }

    var setPhoneInputEventListeners = function(inputId, input, iti) {
      input.addEventListener('blur', function() {
        var errorMessage = document.getElementById("error-msg-" + inputId);
        if (input.value.trim()) {
          if (iti.isValidNumber()) {
            iti.setNumber(iti.getNumber());
            if (errorMessage.classList.contains("phone-error")) {
              hidePhoneInputError(inputId);
            }
          } else {
            showPhoneInputError(inputId)
          }
        } else {
          if (errorMessage.classList.contains("phone-error")) {
            hidePhoneInputError(inputId);
          }
        }
      });

      input.addEventListener("countrychange", function() {
        iti.setNumber('');
      });

      input.addEventListener("keydown", function(e) {
        var charCode = (e.which) ? e.which : e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 8) {
          e.preventDefault();
        }
      });
    };

    var showPhoneInputError = function(inputId) {
      var errorMessage = document.getElementById("error-msg-" + inputId);
      var input = document.getElementById(inputId);
      errorMessage.classList.add("phone-error");
      errorMessage.classList.remove("phone-error-hidden");
      input.classList.add("phone-input-error");
    };


    var _form_serialize = function(form) {
      if (!form || form.nodeName !== "FORM") {
        return
      }
      var i, j, q = [];
      for (i = 0; i < form.elements.length; i++) {
        if (form.elements[i].name === "") {
          continue
        }
        switch (form.elements[i].nodeName) {
          case "INPUT":
            switch (form.elements[i].type) {
              case "tel":
                q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].previousSibling
                    .querySelector('div.iti__selected-dial-code').innerText) + encodeURIComponent(" ") +
                  encodeURIComponent(form.elements[i].value));
                break;
              case "text":
              case "number":
              case "date":
              case "time":
              case "hidden":
              case "password":
              case "button":
              case "reset":
              case "submit":
                q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
                break;
              case "checkbox":
              case "radio":
                if (form.elements[i].checked) {
                  q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value))
                }
                break;
              case "file":
                break
            }
            break;
          case "TEXTAREA":
            q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
            break;
          case "SELECT":
            switch (form.elements[i].type) {
              case "select-one":
                q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
                break;
              case "select-multiple":
                for (j = 0; j < form.elements[i].options.length; j++) {
                  if (form.elements[i].options[j].selected) {
                    q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].options[j].value))
                  }
                }
                break
            }
            break;
          case "BUTTON":
            switch (form.elements[i].type) {
              case "reset":
              case "submit":
              case "button":
                q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
                break
            }
            break
        }
      }
      return q.join("&")
    };

    const formSupportsPost = false;
    var form_submit = function(e) {
      e.preventDefault();
      if (validate_form()) {
        // use this trick to get the submit button & disable it using plain javascript
        var submitButton = e.target.querySelector('#_form_26_submit');
        submitButton.disabled = true;
        submitButton.classList.add('processing');
        var serialized = _form_serialize(
          document.getElementById('_form_26_')
        ).replace(/%0A/g, '\\n');
        var err = form_to_submit.querySelector('._form_error');
        err ? err.parentNode.removeChild(err) : false;
        async function submitForm() {
          var formData = new FormData();
          const searchParams = new URLSearchParams(serialized);
          searchParams.forEach((value, key) => {
            formData.append(key, value);
          });

          const response = await fetch('https://meditacaotranscedental.activehosted.com/proc.php?jsonp=true', {
            headers: {
              "Accept": "application/json"
            },
            body: formData,
            method: "POST"
          });
          return response.json();
        }

        if (formSupportsPost) {
          submitForm().then((data) => {
            eval(data.js);
          });
        } else {
          _load_script('https://meditacaotranscedental.activehosted.com/proc.php?' + serialized + '&jsonp=true',
            null,
            true);
        }
      }
      return false;
    };
    addEvent(form_to_submit, 'submit', form_submit);
  })();
</script>