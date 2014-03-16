function configure_locale() {
  if (is_not_first_time()) return;
  var locale = extract_locale();
  var path = locale_path(locale);
  create_language_cookie()
  if (locale != 'en' && is_not_at_path(path)) redirect(path);
}

function is_not_first_time() {
  return document.cookie.indexOf('language=') >= 0;
}

function extract_locale() {
  var language = navigator.language || navigator.userLanguage;
  return language.slice(0, 2);
}

function locale_path(locale) {
  return '/'+locale+'/';
}

function create_language_cookie() {
  document.cookie = 'language=; path=/';
}

function is_not_at_path(path) {
  return window.location.pathname != path;
}

function redirect(path) {
  window.location.href = path;
}

configure_locale();