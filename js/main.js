/*globals window, document, navigator*/
(function (w, d, n) {
    'use strict';
    var
        redirect = function (path) {
            w.location.href = path;
        },
        is_at_path = function (path) {
            return w.location.pathname === path;
        },
        extract_locale = function () {
            var language = n.language || n.userLanguage;
            return language.slice(0, 2);
        },
        is_locale = function (locale) {
            return locale === extract_locale();
        },
        create_language_cookie = function () {
            d.cookie = 'language=; path=/';
        },
        is_not_first_time = function () {
            return d.cookie.indexOf('language=') >= 0;
        },
        configure_locale = function () {
            if (is_not_first_time()) {
                return;
            }
            create_language_cookie();
            if (is_locale('es') && is_at_path('/')) {
                redirect('/es/');
            }
        };

    configure_locale();
}(window, document, navigator));
