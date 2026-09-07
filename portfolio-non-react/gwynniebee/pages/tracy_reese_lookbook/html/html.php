<!-- START -->
<style type="text/css">
  .p-9759#page {
    margin-top: -25px
  }

  .p-9759#page .inner {
    max-width: 1440px;
    margin: 0 auto
  }

  .p-9759 .c-primary {
    color: #39f
  }

  .p-9759 .bc-primary {
    background-color: #39f
  }

  .p-9759 .btn-n.button.primary.primary {
    background-color: #39f;
    color: #fff !important;
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0
  }

  .p-9759 .btn-n.button.primary.primary:hover {
    opacity: 1;
    background-color: #0080ff
  }

  .p-9759 .btn-n.button.primary.primary:active {
    opacity: 1;
    background-color: #06c
  }

  .p-9759 .c-secondary {
    color: #040404
  }

  .p-9759 .bc-secondary {
    background-color: #040404
  }

  .p-9759 .btn-n.button.secondary.secondary {
    background-color: #040404;
    color: #fff !important;
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0
  }

  .p-9759 .btn-n.button.secondary.secondary:active,
  .p-9759 .btn-n.button.secondary.secondary:hover {
    opacity: 1;
    background-color: #000
  }

  .p-9759 .hero-section {
    overflow-x: hidden;
    background-color: #bedcf4
  }

  .p-9759 .hero-section .heroimg img {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto
  }

  .p-9759 .inner {
    overflow-x: hidden
  }

  .p-9759 .inner .slides {
    position: relative;
    margin: 3em auto
  }

  @media screen and (max-width:767px) {
    .p-9759 .hero-section .heroimg img {
      position: relative;
      width: 110%;
      left: -5%
    }
    .p-9759 .inner .slides.main-right .hover {
      top: 45% !important;
      left: 5% !important;
      right: inherit !important;
      width: 50% !important
    }
  }

  .p-9759 .inner .slides.main-right .hover .caption {
    text-align: right;
    position: relative;
    right: 33%
  }

  @media screen and (max-width:767px) {
    .p-9759 .inner .slides.main-right .hover .caption {
      right: 0 !important
    }
    .p-9759 .inner .slides.main-left .hover {
      top: 45% !important;
      left: inherit !important;
      right: 5% !important;
      width: 50% !important
    }
  }

  .p-9759 .inner .slides.main-left .hover .caption {
    text-align: left;
    position: relative;
    left: 33%
  }

  @media screen and (max-width:767px) {
    .p-9759 .inner .slides.main-left .hover .caption {
      left: 0 !important
    }
  }

  .p-9759 .inner .slides .item {
    position: absolute;
    box-sizing: content-box
  }

  .p-9759 .inner .slides .item.main {
    border: none !important
  }

  .p-9759 .inner .slides #i008 .caption {
    left: 14%
  }

  .p-9759 .inner .slides #i010 .caption {
    right: 5%
  }

  @media screen and (max-width:767px) {
    .p-9759 .inner .slides #i008 .caption {
      left: 0 !important
    }
    .p-9759 .inner .slides #i010 .caption {
      right: 0 !important
    }
  }

  .p-9759 .inner .slides #i012 .caption {
    left: 19%
  }

  .p-9759 .inner .slides #i014 .caption {
    right: 14%
  }

  @media screen and (max-width:767px) {
    .p-9759 .inner .slides #i012 .caption,
    .p-9759 .inner .slides #i014 .caption {
      left: 0 !important
    }
  }

  .p-9759 .inner .lg-right-img {
    float: right;
    width: 60%
  }

  .p-9759 .inner .quote-wrap .quote-section {
    text-align: center;
    display: table;
    border: 3px solid rgba(51, 153, 255, .15);
    margin: 0 auto;
    max-width: 960px
  }

  .p-9759 .action .last-button {
    text-align: center
  }

  .p-9759 .action .last-button .btn-n.button {
    font-family: ProximaNovaRegular !important
  }

</style>
<style type="text/css">
  .below-mobile-header-btn {
    position: static !important;
  }

  .p-9759#page {
    margin-top: 0px;
  }

</style>
<script type="text/javascript">
  /*! WOW - v1.1.2 - 2015-04-07
   * Copyright (c) 2015 Matthieu Aussaguel; Licensed MIT */
  (function() {
    var a, b, c, d, e, f = function(a, b) {
        return function() {
          return a.apply(b, arguments)
        }
      },
      g = [].indexOf || function(a) {
        for (var b = 0, c = this.length; c > b; b++)
          if (b in this && this[b] === a) return b;
        return -1
      };
    b = function() {
      function a() {}
      return a.prototype.extend = function(a, b) {
        var c, d;
        for (c in b) d = b[c], null == a[c] && (a[c] = d);
        return a
      }, a.prototype.isMobile = function(a) {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)
      }, a.prototype.createEvent = function(a, b, c, d) {
        var e;
        return null == b && (b = !1), null == c && (c = !1), null == d && (d = null), null != document.createEvent ? (e = document.createEvent("CustomEvent"), e.initCustomEvent(a, b, c, d)) : null != document.createEventObject ? (e = document.createEventObject(), e.eventType = a) : e.eventName = a, e
      }, a.prototype.emitEvent = function(a, b) {
        return null != a.dispatchEvent ? a.dispatchEvent(b) : b in (null != a) ? a[b]() : "on" + b in (null != a) ? a["on" + b]() : void 0
      }, a.prototype.addEvent = function(a, b, c) {
        return null != a.addEventListener ? a.addEventListener(b, c, !1) : null != a.attachEvent ? a.attachEvent("on" + b, c) : a[b] = c
      }, a.prototype.removeEvent = function(a, b, c) {
        return null != a.removeEventListener ? a.removeEventListener(b, c, !1) : null != a.detachEvent ? a.detachEvent("on" + b, c) : delete a[b]
      }, a.prototype.innerHeight = function() {
        return "innerHeight" in window ? window.innerHeight : document.documentElement.clientHeight
      }, a
    }(), c = this.WeakMap || this.MozWeakMap || (c = function() {
      function a() {
        this.keys = [], this.values = []
      }
      return a.prototype.get = function(a) {
        var b, c, d, e, f;
        for (f = this.keys, b = d = 0, e = f.length; e > d; b = ++d)
          if (c = f[b], c === a) return this.values[b]
      }, a.prototype.set = function(a, b) {
        var c, d, e, f, g;
        for (g = this.keys, c = e = 0, f = g.length; f > e; c = ++e)
          if (d = g[c], d === a) return void(this.values[c] = b);
        return this.keys.push(a), this.values.push(b)
      }, a
    }()), a = this.MutationObserver || this.WebkitMutationObserver || this.MozMutationObserver || (a = function() {
      function a() {
        "undefined" != typeof console && null !== console && console.warn("MutationObserver is not supported by your browser."), "undefined" != typeof console && null !== console && console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.")
      }
      return a.notSupported = !0, a.prototype.observe = function() {}, a
    }()), d = this.getComputedStyle || function(a) {
      return this.getPropertyValue = function(b) {
        var c;
        return "float" === b && (b = "styleFloat"), e.test(b) && b.replace(e, function(a, b) {
          return b.toUpperCase()
        }), (null != (c = a.currentStyle) ? c[b] : void 0) || null
      }, this
    }, e = /(\-([a-z]){1})/g, this.WOW = function() {
      function e(a) {
        null == a && (a = {}), this.scrollCallback = f(this.scrollCallback, this), this.scrollHandler = f(this.scrollHandler, this), this.resetAnimation = f(this.resetAnimation, this), this.start = f(this.start, this), this.scrolled = !0, this.config = this.util().extend(a, this.defaults), this.animationNameCache = new c, this.wowEvent = this.util().createEvent(this.config.boxClass)
      }
      return e.prototype.defaults = {
        boxClass: "wow",
        animateClass: "animated",
        offset: 0,
        mobile: !0,
        live: !0,
        callback: null
      }, e.prototype.init = function() {
        var a;
        return this.element = window.document.documentElement, "interactive" === (a = document.readyState) || "complete" === a ? this.start() : this.util().addEvent(document, "DOMContentLoaded", this.start), this.finished = []
      }, e.prototype.start = function() {
        var b, c, d, e;
        if (this.stopped = !1, this.boxes = function() {
            var a, c, d, e;
            for (d = this.element.querySelectorAll("." + this.config.boxClass), e = [], a = 0, c = d.length; c > a; a++) b = d[a], e.push(b);
            return e
          }.call(this), this.all = function() {
            var a, c, d, e;
            for (d = this.boxes, e = [], a = 0, c = d.length; c > a; a++) b = d[a], e.push(b);
            return e
          }.call(this), this.boxes.length)
          if (this.disabled()) this.resetStyle();
          else
            for (e = this.boxes, c = 0, d = e.length; d > c; c++) b = e[c], this.applyStyle(b, !0);
        return this.disabled() || (this.util().addEvent(window, "scroll", this.scrollHandler), this.util().addEvent(window, "resize", this.scrollHandler), this.interval = setInterval(this.scrollCallback, 50)), this.config.live ? new a(function(a) {
          return function(b) {
            var c, d, e, f, g;
            for (g = [], c = 0, d = b.length; d > c; c++) f = b[c], g.push(function() {
              var a, b, c, d;
              for (c = f.addedNodes || [], d = [], a = 0, b = c.length; b > a; a++) e = c[a], d.push(this.doSync(e));
              return d
            }.call(a));
            return g
          }
        }(this)).observe(document.body, {
          childList: !0,
          subtree: !0
        }) : void 0
      }, e.prototype.stop = function() {
        return this.stopped = !0, this.util().removeEvent(window, "scroll", this.scrollHandler), this.util().removeEvent(window, "resize", this.scrollHandler), null != this.interval ? clearInterval(this.interval) : void 0
      }, e.prototype.sync = function() {
        return a.notSupported ? this.doSync(this.element) : void 0
      }, e.prototype.doSync = function(a) {
        var b, c, d, e, f;
        if (null == a && (a = this.element), 1 === a.nodeType) {
          for (a = a.parentNode || a, e = a.querySelectorAll("." + this.config.boxClass), f = [], c = 0, d = e.length; d > c; c++) b = e[c], g.call(this.all, b) < 0 ? (this.boxes.push(b), this.all.push(b), this.stopped || this.disabled() ? this.resetStyle() : this.applyStyle(b, !0), f.push(this.scrolled = !0)) : f.push(void 0);
          return f
        }
      }, e.prototype.show = function(a) {
        return this.applyStyle(a), a.className = a.className + " " + this.config.animateClass, null != this.config.callback && this.config.callback(a), this.util().emitEvent(a, this.wowEvent), this.util().addEvent(a, "animationend", this.resetAnimation), this.util().addEvent(a, "oanimationend", this.resetAnimation), this.util().addEvent(a, "webkitAnimationEnd", this.resetAnimation), this.util().addEvent(a, "MSAnimationEnd", this.resetAnimation), a
      }, e.prototype.applyStyle = function(a, b) {
        var c, d, e;
        return d = a.getAttribute("data-wow-duration"), c = a.getAttribute("data-wow-delay"), e = a.getAttribute("data-wow-iteration"), this.animate(function(f) {
          return function() {
            return f.customStyle(a, b, d, c, e)
          }
        }(this))
      }, e.prototype.animate = function() {
        return "requestAnimationFrame" in window ? function(a) {
          return window.requestAnimationFrame(a)
        } : function(a) {
          return a()
        }
      }(), e.prototype.resetStyle = function() {
        var a, b, c, d, e;
        for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++) a = d[b], e.push(a.style.visibility = "visible");
        return e
      }, e.prototype.resetAnimation = function(a) {
        var b;
        return a.type.toLowerCase().indexOf("animationend") >= 0 ? (b = a.target || a.srcElement, b.className = b.className.replace(this.config.animateClass, "").trim()) : void 0
      }, e.prototype.customStyle = function(a, b, c, d, e) {
        return b && this.cacheAnimationName(a), a.style.visibility = b ? "hidden" : "visible", c && this.vendorSet(a.style, {
          animationDuration: c
        }), d && this.vendorSet(a.style, {
          animationDelay: d
        }), e && this.vendorSet(a.style, {
          animationIterationCount: e
        }), this.vendorSet(a.style, {
          animationName: b ? "none" : this.cachedAnimationName(a)
        }), a
      }, e.prototype.vendors = ["moz", "webkit"], e.prototype.vendorSet = function(a, b) {
        var c, d, e, f;
        d = [];
        for (c in b) e = b[c], a["" + c] = e, d.push(function() {
          var b, d, g, h;
          for (g = this.vendors, h = [], b = 0, d = g.length; d > b; b++) f = g[b], h.push(a["" + f + c.charAt(0).toUpperCase() + c.substr(1)] = e);
          return h
        }.call(this));
        return d
      }, e.prototype.vendorCSS = function(a, b) {
        var c, e, f, g, h, i;
        for (h = d(a), g = h.getPropertyCSSValue(b), f = this.vendors, c = 0, e = f.length; e > c; c++) i = f[c], g = g || h.getPropertyCSSValue("-" + i + "-" + b);
        return g
      }, e.prototype.animationName = function(a) {
        var b;
        try {
          b = this.vendorCSS(a, "animation-name").cssText
        } catch (c) {
          b = d(a).getPropertyValue("animation-name")
        }
        return "none" === b ? "" : b
      }, e.prototype.cacheAnimationName = function(a) {
        return this.animationNameCache.set(a, this.animationName(a))
      }, e.prototype.cachedAnimationName = function(a) {
        return this.animationNameCache.get(a)
      }, e.prototype.scrollHandler = function() {
        return this.scrolled = !0
      }, e.prototype.scrollCallback = function() {
        var a;
        return !this.scrolled || (this.scrolled = !1, this.boxes = function() {
          var b, c, d, e;
          for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++) a = d[b], a && (this.isVisible(a) ? this.show(a) : e.push(a));
          return e
        }.call(this), this.boxes.length || this.config.live) ? void 0 : this.stop()
      }, e.prototype.offsetTop = function(a) {
        for (var b; void 0 === a.offsetTop;) a = a.parentNode;
        for (b = a.offsetTop; a = a.offsetParent;) b += a.offsetTop;
        return b
      }, e.prototype.isVisible = function(a) {
        var b, c, d, e, f;
        return c = a.getAttribute("data-wow-offset") || this.config.offset, f = window.pageYOffset, e = f + Math.min(this.element.clientHeight, this.util().innerHeight()) - c, d = this.offsetTop(a), b = d + a.clientHeight, e >= d && b >= f
      }, e.prototype.util = function() {
        return null != this._util ? this._util : this._util = new b
      }, e.prototype.disabled = function() {
        return !this.config.mobile && this.util().isMobile(navigator.userAgent)
      }, e
    }()
  }).call(this);

</script>
<script type="text/javascript">
  /*! picturefill - v3.0.2 - 2016-02-12
   * https://scottjehl.github.io/picturefill/
   * Copyright (c) 2016 https://github.com/scottjehl/picturefill/blob/master/Authors.txt; Licensed MIT
   */
  ! function(a) {
    var b = navigator.userAgent;
    a.HTMLPictureElement && /ecko/.test(b) && b.match(/rv\:(\d+)/) && RegExp.$1 < 45 && addEventListener("resize", function() {
      var b, c = document.createElement("source"),
        d = function(a) {
          var b, d, e = a.parentNode;
          "PICTURE" === e.nodeName.toUpperCase() ? (b = c.cloneNode(), e.insertBefore(b, e.firstElementChild), setTimeout(function() {
            e.removeChild(b)
          })) : (!a._pfLastSize || a.offsetWidth > a._pfLastSize) && (a._pfLastSize = a.offsetWidth, d = a.sizes, a.sizes += ",100vw", setTimeout(function() {
            a.sizes = d
          }))
        },
        e = function() {
          var a, b = document.querySelectorAll("picture > img, img[srcset][sizes]");
          for (a = 0; a < b.length; a++) d(b[a])
        },
        f = function() {
          clearTimeout(b), b = setTimeout(e, 99)
        },
        g = a.matchMedia && matchMedia("(orientation: landscape)"),
        h = function() {
          f(), g && g.addListener && g.addListener(f)
        };
      return c.srcset = "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==", /^[c|i]|d$/.test(document.readyState || "") ? h() : document.addEventListener("DOMContentLoaded", h), f
    }())
  }(window),
  function(a, b, c) {
    "use strict";

    function d(a) {
      return " " === a || "  " === a || "\n" === a || "\f" === a || "\r" === a
    }

    function e(b, c) {
      var d = new a.Image;
      return d.onerror = function() {
        A[b] = !1, ba()
      }, d.onload = function() {
        A[b] = 1 === d.width, ba()
      }, d.src = c, "pending"
    }

    function f() {
      M = !1, P = a.devicePixelRatio, N = {}, O = {}, s.DPR = P || 1, Q.width = Math.max(a.innerWidth || 0, z.clientWidth), Q.height = Math.max(a.innerHeight || 0, z.clientHeight), Q.vw = Q.width / 100, Q.vh = Q.height / 100, r = [Q.height, Q.width, P].join("-"), Q.em = s.getEmValue(), Q.rem = Q.em
    }

    function g(a, b, c, d) {
      var e, f, g, h;
      return "saveData" === B.algorithm ? a > 2.7 ? h = c + 1 : (f = b - c, e = Math.pow(a - .6, 1.5), g = f * e, d && (g += .1 * e), h = a + g) : h = c > 1 ? Math.sqrt(a * b) : a, h > c
    }

    function h(a) {
      var b, c = s.getSet(a),
        d = !1;
      "pending" !== c && (d = r, c && (b = s.setRes(c), s.applySetCandidate(b, a))), a[s.ns].evaled = d
    }

    function i(a, b) {
      return a.res - b.res
    }

    function j(a, b, c) {
      var d;
      return !c && b && (c = a[s.ns].sets, c = c && c[c.length - 1]), d = k(b, c), d && (b = s.makeUrl(b), a[s.ns].curSrc = b, a[s.ns].curCan = d, d.res || aa(d, d.set.sizes)), d
    }

    function k(a, b) {
      var c, d, e;
      if (a && b)
        for (e = s.parseSet(b), a = s.makeUrl(a), c = 0; c < e.length; c++)
          if (a === s.makeUrl(e[c].url)) {
            d = e[c];
            break
          }
      return d
    }

    function l(a, b) {
      var c, d, e, f, g = a.getElementsByTagName("source");
      for (c = 0, d = g.length; d > c; c++) e = g[c], e[s.ns] = !0, f = e.getAttribute("srcset"), f && b.push({
        srcset: f,
        media: e.getAttribute("media"),
        type: e.getAttribute("type"),
        sizes: e.getAttribute("sizes")
      })
    }

    function m(a, b) {
      function c(b) {
        var c, d = b.exec(a.substring(m));
        return d ? (c = d[0], m += c.length, c) : void 0
      }

      function e() {
        var a, c, d, e, f, i, j, k, l, m = !1,
          o = {};
        for (e = 0; e < h.length; e++) f = h[e], i = f[f.length - 1], j = f.substring(0, f.length - 1), k = parseInt(j, 10), l = parseFloat(j), X.test(j) && "w" === i ? ((a || c) && (m = !0), 0 === k ? m = !0 : a = k) : Y.test(j) && "x" === i ? ((a || c || d) && (m = !0), 0 > l ? m = !0 : c = l) : X.test(j) && "h" === i ? ((d || c) && (m = !0), 0 === k ? m = !0 : d = k) : m = !0;
        m || (o.url = g, a && (o.w = a), c && (o.d = c), d && (o.h = d), d || c || a || (o.d = 1), 1 === o.d && (b.has1x = !0), o.set = b, n.push(o))
      }

      function f() {
        for (c(T), i = "", j = "in descriptor";;) {
          if (k = a.charAt(m), "in descriptor" === j)
            if (d(k)) i && (h.push(i), i = "", j = "after descriptor");
            else {
              if ("," === k) return m += 1, i && h.push(i), void e();
              if ("(" === k) i += k, j = "in parens";
              else {
                if ("" === k) return i && h.push(i), void e();
                i += k
              }
            }
          else if ("in parens" === j)
            if (")" === k) i += k, j = "in descriptor";
            else {
              if ("" === k) return h.push(i), void e();
              i += k
            }
          else if ("after descriptor" === j)
            if (d(k));
            else {
              if ("" === k) return void e();
              j = "in descriptor", m -= 1
            }
          m += 1
        }
      }
      for (var g, h, i, j, k, l = a.length, m = 0, n = [];;) {
        if (c(U), m >= l) return n;
        g = c(V), h = [], "," === g.slice(-1) ? (g = g.replace(W, ""), e()) : f()
      }
    }

    function n(a) {
      function b(a) {
        function b() {
          f && (g.push(f), f = "")
        }

        function c() {
          g[0] && (h.push(g), g = [])
        }
        for (var e, f = "", g = [], h = [], i = 0, j = 0, k = !1;;) {
          if (e = a.charAt(j), "" === e) return b(), c(), h;
          if (k) {
            if ("*" === e && "/" === a[j + 1]) {
              k = !1, j += 2, b();
              continue
            }
            j += 1
          } else {
            if (d(e)) {
              if (a.charAt(j - 1) && d(a.charAt(j - 1)) || !f) {
                j += 1;
                continue
              }
              if (0 === i) {
                b(), j += 1;
                continue
              }
              e = " "
            } else if ("(" === e) i += 1;
            else if (")" === e) i -= 1;
            else {
              if ("," === e) {
                b(), c(), j += 1;
                continue
              }
              if ("/" === e && "*" === a.charAt(j + 1)) {
                k = !0, j += 2;
                continue
              }
            }
            f += e, j += 1
          }
        }
      }

      function c(a) {
        return k.test(a) && parseFloat(a) >= 0 ? !0 : l.test(a) ? !0 : "0" === a || "-0" === a || "+0" === a ? !0 : !1
      }
      var e, f, g, h, i, j, k = /^(?:[+-]?[0-9]+|[0-9]*\.[0-9]+)(?:[eE][+-]?[0-9]+)?(?:ch|cm|em|ex|in|mm|pc|pt|px|rem|vh|vmin|vmax|vw)$/i,
        l = /^calc\((?:[0-9a-z \.\+\-\*\/\(\)]+)\)$/i;
      for (f = b(a), g = f.length, e = 0; g > e; e++)
        if (h = f[e], i = h[h.length - 1], c(i)) {
          if (j = i, h.pop(), 0 === h.length) return j;
          if (h = h.join(" "), s.matchesMedia(h)) return j
        }
      return "100vw"
    }
    b.createElement("picture");
    var o, p, q, r, s = {},
      t = !1,
      u = function() {},
      v = b.createElement("img"),
      w = v.getAttribute,
      x = v.setAttribute,
      y = v.removeAttribute,
      z = b.documentElement,
      A = {},
      B = {
        algorithm: ""
      },
      C = "data-pfsrc",
      D = C + "set",
      E = navigator.userAgent,
      F = /rident/.test(E) || /ecko/.test(E) && E.match(/rv\:(\d+)/) && RegExp.$1 > 35,
      G = "currentSrc",
      H = /\s+\+?\d+(e\d+)?w/,
      I = /(\([^)]+\))?\s*(.+)/,
      J = a.picturefillCFG,
      K = "position:absolute;left:0;visibility:hidden;display:block;padding:0;border:none;font-size:1em;width:1em;overflow:hidden;clip:rect(0px, 0px, 0px, 0px)",
      L = "font-size:100%!important;",
      M = !0,
      N = {},
      O = {},
      P = a.devicePixelRatio,
      Q = {
        px: 1,
        "in": 96
      },
      R = b.createElement("a"),
      S = !1,
      T = /^[ \t\n\r\u000c]+/,
      U = /^[, \t\n\r\u000c]+/,
      V = /^[^ \t\n\r\u000c]+/,
      W = /[,]+$/,
      X = /^\d+$/,
      Y = /^-?(?:[0-9]+|[0-9]*\.[0-9]+)(?:[eE][+-]?[0-9]+)?$/,
      Z = function(a, b, c, d) {
        a.addEventListener ? a.addEventListener(b, c, d || !1) : a.attachEvent && a.attachEvent("on" + b, c)
      },
      $ = function(a) {
        var b = {};
        return function(c) {
          return c in b || (b[c] = a(c)), b[c]
        }
      },
      _ = function() {
        var a = /^([\d\.]+)(em|vw|px)$/,
          b = function() {
            for (var a = arguments, b = 0, c = a[0]; ++b in a;) c = c.replace(a[b], a[++b]);
            return c
          },
          c = $(function(a) {
            return "return " + b((a || "").toLowerCase(), /\band\b/g, "&&", /,/g, "||", /min-([a-z-\s]+):/g, "e.$1>=", /max-([a-z-\s]+):/g, "e.$1<=", /calc([^)]+)/g, "($1)", /(\d+[\.]*[\d]*)([a-z]+)/g, "($1 * e.$2)", /^(?!(e.[a-z]|[0-9\.&=|><\+\-\*\(\)\/])).*/gi, "") + ";"
          });
        return function(b, d) {
          var e;
          if (!(b in N))
            if (N[b] = !1, d && (e = b.match(a))) N[b] = e[1] * Q[e[2]];
            else try {
              N[b] = new Function("e", c(b))(Q)
            } catch (f) {}
          return N[b]
        }
      }(),
      aa = function(a, b) {
        return a.w ? (a.cWidth = s.calcListLength(b || "100vw"), a.res = a.w / a.cWidth) : a.res = a.d, a
      },
      ba = function(a) {
        if (t) {
          var c, d, e, f = a || {};
          if (f.elements && 1 === f.elements.nodeType && ("IMG" === f.elements.nodeName.toUpperCase() ? f.elements = [f.elements] : (f.context = f.elements, f.elements = null)), c = f.elements || s.qsa(f.context || b, f.reevaluate || f.reselect ? s.sel : s.selShort), e = c.length) {
            for (s.setupRun(f), S = !0, d = 0; e > d; d++) s.fillImg(c[d], f);
            s.teardownRun(f)
          }
        }
      };
    o = a.console && console.warn ? function(a) {
      console.warn(a)
    } : u, G in v || (G = "src"), A["image/jpeg"] = !0, A["image/gif"] = !0, A["image/png"] = !0, A["image/svg+xml"] = b.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1"), s.ns = ("pf" + (new Date).getTime()).substr(0, 9), s.supSrcset = "srcset" in v, s.supSizes = "sizes" in v, s.supPicture = !!a.HTMLPictureElement, s.supSrcset && s.supPicture && !s.supSizes && ! function(a) {
      v.srcset = "data:,a", a.src = "data:,a", s.supSrcset = v.complete === a.complete, s.supPicture = s.supSrcset && s.supPicture
    }(b.createElement("img")), s.supSrcset && !s.supSizes ? ! function() {
      var a = "data:image/gif;base64,R0lGODlhAgABAPAAAP///wAAACH5BAAAAAAALAAAAAACAAEAAAICBAoAOw==",
        c = "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==",
        d = b.createElement("img"),
        e = function() {
          var a = d.width;
          2 === a && (s.supSizes = !0), q = s.supSrcset && !s.supSizes, t = !0, setTimeout(ba)
        };
      d.onload = e, d.onerror = e, d.setAttribute("sizes", "9px"), d.srcset = c + " 1w," + a + " 9w", d.src = c
    }() : t = !0, s.selShort = "picture>img,img[srcset]", s.sel = s.selShort, s.cfg = B, s.DPR = P || 1, s.u = Q, s.types = A, s.setSize = u, s.makeUrl = $(function(a) {
      return R.href = a, R.href
    }), s.qsa = function(a, b) {
      return "querySelector" in a ? a.querySelectorAll(b) : []
    }, s.matchesMedia = function() {
      return a.matchMedia && (matchMedia("(min-width: 0.1em)") || {}).matches ? s.matchesMedia = function(a) {
        return !a || matchMedia(a).matches
      } : s.matchesMedia = s.mMQ, s.matchesMedia.apply(this, arguments)
    }, s.mMQ = function(a) {
      return a ? _(a) : !0
    }, s.calcLength = function(a) {
      var b = _(a, !0) || !1;
      return 0 > b && (b = !1), b
    }, s.supportsType = function(a) {
      return a ? A[a] : !0
    }, s.parseSize = $(function(a) {
      var b = (a || "").match(I);
      return {
        media: b && b[1],
        length: b && b[2]
      }
    }), s.parseSet = function(a) {
      return a.cands || (a.cands = m(a.srcset, a)), a.cands
    }, s.getEmValue = function() {
      var a;
      if (!p && (a = b.body)) {
        var c = b.createElement("div"),
          d = z.style.cssText,
          e = a.style.cssText;
        c.style.cssText = K, z.style.cssText = L, a.style.cssText = L, a.appendChild(c), p = c.offsetWidth, a.removeChild(c), p = parseFloat(p, 10), z.style.cssText = d, a.style.cssText = e
      }
      return p || 16
    }, s.calcListLength = function(a) {
      if (!(a in O) || B.uT) {
        var b = s.calcLength(n(a));
        O[a] = b ? b : Q.width
      }
      return O[a]
    }, s.setRes = function(a) {
      var b;
      if (a) {
        b = s.parseSet(a);
        for (var c = 0, d = b.length; d > c; c++) aa(b[c], a.sizes)
      }
      return b
    }, s.setRes.res = aa, s.applySetCandidate = function(a, b) {
      if (a.length) {
        var c, d, e, f, h, k, l, m, n, o = b[s.ns],
          p = s.DPR;
        if (k = o.curSrc || b[G], l = o.curCan || j(b, k, a[0].set), l && l.set === a[0].set && (n = F && !b.complete && l.res - .1 > p, n || (l.cached = !0, l.res >= p && (h = l))), !h)
          for (a.sort(i), f = a.length, h = a[f - 1], d = 0; f > d; d++)
            if (c = a[d], c.res >= p) {
              e = d - 1, h = a[e] && (n || k !== s.makeUrl(c.url)) && g(a[e].res, c.res, p, a[e].cached) ? a[e] : c;
              break
            }
        h && (m = s.makeUrl(h.url), o.curSrc = m, o.curCan = h, m !== k && s.setSrc(b, h), s.setSize(b))
      }
    }, s.setSrc = function(a, b) {
      var c;
      a.src = b.url, "image/svg+xml" === b.set.type && (c = a.style.width, a.style.width = a.offsetWidth + 1 + "px", a.offsetWidth + 1 && (a.style.width = c))
    }, s.getSet = function(a) {
      var b, c, d, e = !1,
        f = a[s.ns].sets;
      for (b = 0; b < f.length && !e; b++)
        if (c = f[b], c.srcset && s.matchesMedia(c.media) && (d = s.supportsType(c.type))) {
          "pending" === d && (c = d), e = c;
          break
        }
      return e
    }, s.parseSets = function(a, b, d) {
      var e, f, g, h, i = b && "PICTURE" === b.nodeName.toUpperCase(),
        j = a[s.ns];
      (j.src === c || d.src) && (j.src = w.call(a, "src"), j.src ? x.call(a, C, j.src) : y.call(a, C)), (j.srcset === c || d.srcset || !s.supSrcset || a.srcset) && (e = w.call(a, "srcset"), j.srcset = e, h = !0), j.sets = [], i && (j.pic = !0, l(b, j.sets)), j.srcset ? (f = {
        srcset: j.srcset,
        sizes: w.call(a, "sizes")
      }, j.sets.push(f), g = (q || j.src) && H.test(j.srcset || ""), g || !j.src || k(j.src, f) || f.has1x || (f.srcset += ", " + j.src, f.cands.push({
        url: j.src,
        d: 1,
        set: f
      }))) : j.src && j.sets.push({
        srcset: j.src,
        sizes: null
      }), j.curCan = null, j.curSrc = c, j.supported = !(i || f && !s.supSrcset || g && !s.supSizes), h && s.supSrcset && !j.supported && (e ? (x.call(a, D, e), a.srcset = "") : y.call(a, D)), j.supported && !j.srcset && (!j.src && a.src || a.src !== s.makeUrl(j.src)) && (null === j.src ? a.removeAttribute("src") : a.src = j.src), j.parsed = !0
    }, s.fillImg = function(a, b) {
      var c, d = b.reselect || b.reevaluate;
      a[s.ns] || (a[s.ns] = {}), c = a[s.ns], (d || c.evaled !== r) && ((!c.parsed || b.reevaluate) && s.parseSets(a, a.parentNode, b), c.supported ? c.evaled = r : h(a))
    }, s.setupRun = function() {
      (!S || M || P !== a.devicePixelRatio) && f()
    }, s.supPicture ? (ba = u, s.fillImg = u) : ! function() {
      var c, d = a.attachEvent ? /d$|^c/ : /d$|^c|^i/,
        e = function() {
          var a = b.readyState || "";
          f = setTimeout(e, "loading" === a ? 200 : 999), b.body && (s.fillImgs(), c = c || d.test(a), c && clearTimeout(f))
        },
        f = setTimeout(e, b.body ? 9 : 99),
        g = function(a, b) {
          var c, d, e = function() {
            var f = new Date - d;
            b > f ? c = setTimeout(e, b - f) : (c = null, a())
          };
          return function() {
            d = new Date, c || (c = setTimeout(e, b))
          }
        },
        h = z.clientHeight,
        i = function() {
          M = Math.max(a.innerWidth || 0, z.clientWidth) !== Q.width || z.clientHeight !== h, h = z.clientHeight, M && s.fillImgs()
        };
      Z(a, "resize", g(i, 99)), Z(b, "readystatechange", e)
    }(), s.picturefill = ba, s.fillImgs = ba, s.teardownRun = u, ba._ = s, a.picturefillCFG = {
      pf: s,
      push: function(a) {
        var b = a.shift();
        "function" == typeof s[b] ? s[b].apply(s, a) : (B[b] = a[0], S && s.fillImgs({
          reselect: !0
        }))
      }
    };
    for (; J && J.length;) a.picturefillCFG.push(J.shift());
    a.picturefill = ba, "object" == typeof module && "object" == typeof module.exports ? module.exports = ba : "function" == typeof define && define.amd && define("picturefill", function() {
      return ba
    }), s.supPicture || (A["image/webp"] = e("image/webp", "data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA=="))
  }(window, document);

</script>
<script type="text/javascript">
  start = function() {
    var a = $('#page').attr('ocalc'),
      b = window.innerWidth,
      c = b / a,
      z = .007;
    if (b > a) {
      b == a
    }
    if (c > 1) {
      c = 1;
    }

    $('.inner > section').each(function() {
      var d = $(this).attr('calc');
      if (b < 768) {
        $(this).attr({
          'style': 'width:' + a * c + 'px;height:' + (d * c) * 1.8 + 'px;'
        });
      } else {
        $(this).attr({
          'style': 'width:' + a * c + 'px;height:' + d * c + 'px;'
        });
      }


      $(this).children('*').each(function() {
        var e = $(this).attr('w'),
          f = $(this).attr('h'),
          g = $(this).attr('order'),
          h = $(this).attr('top'),
          j = $(this).attr('right'),
          k = $(this).attr('bottom'),
          l = $(this).attr('left'),
          m = {},
          n = {};
        if (h) {
          m.v = 'top';
          m.vu = h;
        } else {
          m.v = 'bottom';
          m.vu = k;
        }
        if (l) {
          m.h = 'left';
          m.hu = l;
        } else {
          m.h = 'right';
          m.hu = j;
        }
        $(this).attr({
          'style': 'width:' + e * c + 'px;' +
            'height:' + f * c + 'px;' +
            'z-index:' + ';' +
            'border:' + ((a * z) * c) + 'px solid #fff;' +
            m.v + ':' + m.vu + '%;' +
            m.h + ':' + m.hu + '%;'
        });

      });

    });
  }
  calcFontSize = function() {
    var a = window.innerWidth,
      b = a / 1440,
      c = b * 12,
      d,
      e = b * 21,
      f;
    if (a > 768) {
      d = c;
      f = e;
    } else {
      d = 11;
      f = 14;
    }
    $('.p-tracyreese [class*=link-]').css({
      'font-size': d + 'px'
    });
    $('.p-tracyreese .caption').css({
      'font-size': f + 'px'
    });
    $('.p-tracyreese [class*=link-] .cs').css({
      'font-size': d * .75 + 'px'
    });
  }
  $(document).ready(function() {
    start();
    calcFontSize();
  });
  $(window).load(function() {
    new WOW().init();
  });
  $(window).resize(function() {
    start();
    calcFontSize();
  });
  // $( window ).resize(function() {
  //   start();
  // });

</script>

<div id="page" class="clearfix responsive uc1 p-9759 fix" ocalc="1440">
  <!-- max width -->
  <section class="hero-section" style="background-color:#fff;">
    <a class="heroimg text-center" href="/a/clothing/tracy-reese-collection">
      <picture>
        <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-hero-2x.jpg" media="(min-width: 1441px)">
        <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-hero.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-hero-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
        <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-hero.jpg" media="(max-width: 767px)">
        <img srcset="" class="ma block" style="" alt="Introducing: Plenty by Tracy Reese">
      </picture>
    </a>
  </section>
  <div class="inner block">
    <section class="slides main-right" calc="1058">

      <div id="i002" class="item main wow fadeInUp" w="845" h="705" order="" top="0" right="0">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide1-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide1.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide1-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide1.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Utility Shift Dress">
        </picture>
      </div>
      <div id="i001" class="item hover wow fadeInUp" w="526" h="662" order="" top="10" left="15">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide1n-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide1n.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide1n-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide1n.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Utility Shift Dress Detail">
          <a href="/products/plenty-by-tracy-reese-utility-shift-dress" class="caption c-primary fs-21 m-tb-0-5 mb0 block">Utility Shift Dress</a>
        </picture>
      </div>
    </section>
    <div class="quote-wrap block">
      <div class="quote-section fs-27 c-secondary p-tb-1 p-lr-1">"It's my mission to make every woman feel beautiful." - Tracy Reese</div>
    </div>
    <section class="slides main-left" calc="1058">

      <div id="i004" class="item main wow fadeInUp" w="845" h="705" order="" top="0" left="0">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide2-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide2.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide2-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide2.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Soweto Sea Breeze Fit-And-Flare Dress">
        </picture>
      </div>
      <div id="i003" class="item hover wow fadeInUp" w="526" h="662" order="" top="20" right="15">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide2n-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide2n.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide2n-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide2n.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Soweto Sea Breeze Fit-And-Flare Dress Detail">
          <a href="/products/plenty-by-tracy-reese-soweto-sea-breeze-fit-and-flare-dress" class="caption c-primary fs-21 m-tb-0-5 mb0 block">Soweto Sea Breeze Fit-And-Flare Dress</a>
        </picture>
      </div>
    </section>
    <section class="slides main-right" calc="1058">

      <div id="i005" class="item main wow fadeInUp" w="845" h="705" order="" top="0" right="0">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide3-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide3.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide3-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide3.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Deconstructed Plaid Off Shoulder Dress">
        </picture>
      </div>
      <div id="i006" class="item hover wow fadeInUp" w="526" h="662" order="" bottom="8" left="15">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide3n-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide3n.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide3n-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide3n.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Deconstructed Plaid Off Shoulder Dress Detail">
          <a href="/products/plenty-by-tracy-reese-deconstructed-plaid-off-shoulder-dress" class="caption c-primary fs-21 m-tb-0-5 mb0 block">Deconstructed Plaid Off Shoulder Dress</a>
        </picture>
      </div>
    </section>
    <section class="slides main-left" calc="1058">

      <div id="i007" class="item main wow fadeInUp" w="845" h="705" order="" top="0" left="0">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide4-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide4.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide4-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide4.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Wild Orchid Scallop Fit-And-Flare Dress">
        </picture>
      </div>
      <div id="i008" class="item hover wow fadeInUp" w="526" h="662" order="" top="7" right="8">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide4n-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide4n.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide4n-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide4n.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Wild Orchid Scallop Fit-And-Flare Dress">
          <a href="/products/plenty-by-tracy-reese-wild-orchid-scallop-fit-and-flare-dress" class="caption c-primary fs-21 m-tb-0-5 mb0">Wild Orchid Scallop Fit-And-Flare Dress</a>
        </picture>
      </div>
    </section>
    <div class="quote-wrap block">
      <div class="quote-section fs-27 c-secondary p-tb-1 p-lr-1">"Nothing makes me happier than to see amazing women in our clothes and know that we can be a part of their daily lives." - Tracy Reese</div>
    </div>
    <section class="slides main-right" calc="1058">

      <div id="i009" class="item main wow fadeInUp" w="845" h="705" order="" top="0" right="0">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide5-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide5.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide5-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide5.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Bandana Placement Skirt">
        </picture>
      </div>
      <div id="i010" class="item hover wow fadeInUp" w="526" h="662" order="" top="20" left="5">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide5n-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide5n.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide5n-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide5n.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Bandanna Placement Skirt Detail">
          <a href="/products/plenty-by-tracy-reese-bandana-placement-skirt" class="caption c-primary fs-21 m-tb-0-5 mb0 block">Bandana Placement Skirt</a>
        </picture>
      </div>
    </section>
    <section class="slides main-left" calc="1058">

      <div id="i011" class="item main wow fadeInUp" w="845" h="705" order="" top="0" left="0">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide6-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide6.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide6-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide6.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Denim Button-Front Dress">
        </picture>
      </div>
      <div id="i012" class="item hover wow fadeInUp" w="526" h="662" order="" bottom="5" right="10">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide6n-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide6n.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide6n-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide6n.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Denim Button-Front Dress Dress">
          <a href="/products/plenty-by-tracy-reese-denim-button-front-dress" class="caption c-primary fs-21 m-tb-0-5 mb0 block">Denim Button-Front Dress</a>
        </picture>
      </div>
    </section>
    <section class="slides main-right" calc="1058">

      <div id="i013" class="item main wow fadeInUp" w="845" h="705" order="" top="0" right="0">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide7-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide7.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide7-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide7.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Concentric Circles Off Shoulder Blouse">
        </picture>
      </div>
      <div id="i014" class="item hover wow fadeInUp" w="526" h="662" order="" top="15" left="8">
        <picture>
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide7n-2x.jpg" media="(min-width: 1441px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide7n.jpg, https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide7n-2x.jpg 2x" media="(min-width: 768px) and (max-width: 1440px)">
          <source srcset="https://cdn.shopify.com/s/files/1/0110/6032/files/9759-tracyreese-slide7n.jpg" media="(max-width: 767px)">
          <img srcset="" class="" style="" alt="Concentric Circles Off Shoulder Blouse Detail">
          <a href="/products/plenty-by-tracy-reese-concentric-circles-off-shoulder-blouse" class="caption c-primary fs-21 m-tb-0-5 mb0 block">Concentric Circles Off Shoulder Blouse</a>
        </picture>
      </div>
    </section>
    <div class="quote-wrap block">
      <div class="quote-section fs-27 c-secondary p-tb-1 p-lr-1">"The collection embodies a modern bohemian spirit. Bringing the Plenty world to Gwynnie Bee is a perfect match." - Tracy Reese</div>
    </div>
    <div class="action">
      <div class="last-button">
        <a class="proxima-regular btn-n button bc-secondary fs-18 caps center m-tb-2" href="/a/clothing/tracy-reese-collection">View the Collection</a>
      </div>
    </div>
    <section class="terms"></section>
  </div>
</div>

<!-- /#page -->
