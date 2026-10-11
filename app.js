/* PornProxy - landing page tool form. Pure JS, no frameworks. */
(function () {
  function normalize(u) {
    u = (u || '').trim();
    if (!u) return u;
    if (!/^[a-zA-Z][a-zA-Z0-9+.-]*:\/\//.test(u)) u = 'https://' + u;
    return u;
  }
  document.querySelectorAll('form[data-proxy-form]').forEach(function (form) {
    var input = form.querySelector('input[name="url"]');
    if (!input) return;
    form.addEventListener('submit', function () {
      var u = normalize(input.value);
      if (!u) return false;
      input.value = u;
    });
    if (form.hasAttribute('data-autofocus')) {
      try { input.focus(); } catch (e) {}
    }
  });
  document.querySelectorAll('[data-quick]').forEach(function (el) {
    el.addEventListener('click', function () {
      var form = document.querySelector('form[data-proxy-form]');
      var input = form && form.querySelector('input[name="url"]');
      if (!form || !input) return;
      input.value = normalize(el.getAttribute('data-quick'));
      form.submit();
    });
  });
})();
