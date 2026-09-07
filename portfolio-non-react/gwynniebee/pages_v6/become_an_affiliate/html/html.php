<img id="loadTest" class="hide">
<script type="text/javascript">
  /*!
   * imagesLoaded PACKAGED v4.1.4
   * JavaScript is all like "You images are done yet or what?"
   * MIT License
   */

  ! function(e, t) {
    "function" == typeof define && define.amd ? define("ev-emitter/ev-emitter", t) : "object" == typeof module && module.exports ? module.exports = t() : e.EvEmitter = t()
  }("undefined" != typeof window ? window : this, function() {
    function e() {}
    var t = e.prototype;
    return t.on = function(e, t) {
      if (e && t) {
        var i = this._events = this._events || {},
          n = i[e] = i[e] || [];
        return n.indexOf(t) == -1 && n.push(t), this
      }
    }, t.once = function(e, t) {
      if (e && t) {
        this.on(e, t);
        var i = this._onceEvents = this._onceEvents || {},
          n = i[e] = i[e] || {};
        return n[t] = !0, this
      }
    }, t.off = function(e, t) {
      var i = this._events && this._events[e];
      if (i && i.length) {
        var n = i.indexOf(t);
        return n != -1 && i.splice(n, 1), this
      }
    }, t.emitEvent = function(e, t) {
      var i = this._events && this._events[e];
      if (i && i.length) {
        i = i.slice(0), t = t || [];
        for (var n = this._onceEvents && this._onceEvents[e], o = 0; o < i.length; o++) {
          var r = i[o],
            s = n && n[r];
          s && (this.off(e, r), delete n[r]), r.apply(this, t)
        }
        return this
      }
    }, t.allOff = function() {
      delete this._events, delete this._onceEvents
    }, e
  }),
  function(e, t) {
    "use strict";
    "function" == typeof define && define.amd ? define(["ev-emitter/ev-emitter"], function(i) {
      return t(e, i)
    }) : "object" == typeof module && module.exports ? module.exports = t(e, require("ev-emitter")) : e.imagesLoaded = t(e, e.EvEmitter)
  }("undefined" != typeof window ? window : this, function(e, t) {
    function i(e, t) {
      for (var i in t) e[i] = t[i];
      return e
    }

    function n(e) {
      if (Array.isArray(e)) return e;
      var t = "object" == typeof e && "number" == typeof e.length;
      return t ? d.call(e) : [e]
    }

    function o(e, t, r) {
      if (!(this instanceof o)) return new o(e, t, r);
      var s = e;
      return "string" == typeof e && (s = document.querySelectorAll(e)), s ? (this.elements = n(s), this.options = i({}, this.options), "function" == typeof t ? r = t : i(this.options, t), r && this.on("always", r), this.getImages(), h && (this.jqDeferred = new h.Deferred), void setTimeout(this.check.bind(this))) : void a.error("Bad element for imagesLoaded " + (s || e))
    }

    function r(e) {
      this.img = e
    }

    function s(e, t) {
      this.url = e, this.element = t, this.img = new Image
    }
    var h = e.jQuery,
      a = e.console,
      d = Array.prototype.slice;
    o.prototype = Object.create(t.prototype), o.prototype.options = {}, o.prototype.getImages = function() {
      this.images = [], this.elements.forEach(this.addElementImages, this)
    }, o.prototype.addElementImages = function(e) {
      "IMG" == e.nodeName && this.addImage(e), this.options.background === !0 && this.addElementBackgroundImages(e);
      var t = e.nodeType;
      if (t && u[t]) {
        for (var i = e.querySelectorAll("img"), n = 0; n < i.length; n++) {
          var o = i[n];
          this.addImage(o)
        }
        if ("string" == typeof this.options.background) {
          var r = e.querySelectorAll(this.options.background);
          for (n = 0; n < r.length; n++) {
            var s = r[n];
            this.addElementBackgroundImages(s)
          }
        }
      }
    };
    var u = {
      1: !0,
      9: !0,
      11: !0
    };
    return o.prototype.addElementBackgroundImages = function(e) {
      var t = getComputedStyle(e);
      if (t)
        for (var i = /url\((['"])?(.*?)\1\)/gi, n = i.exec(t.backgroundImage); null !== n;) {
          var o = n && n[2];
          o && this.addBackground(o, e), n = i.exec(t.backgroundImage)
        }
    }, o.prototype.addImage = function(e) {
      var t = new r(e);
      this.images.push(t)
    }, o.prototype.addBackground = function(e, t) {
      var i = new s(e, t);
      this.images.push(i)
    }, o.prototype.check = function() {
      function e(e, i, n) {
        setTimeout(function() {
          t.progress(e, i, n)
        })
      }
      var t = this;
      return this.progressedCount = 0, this.hasAnyBroken = !1, this.images.length ? void this.images.forEach(function(t) {
        t.once("progress", e), t.check()
      }) : void this.complete()
    }, o.prototype.progress = function(e, t, i) {
      this.progressedCount++, this.hasAnyBroken = this.hasAnyBroken || !e.isLoaded, this.emitEvent("progress", [this, e, t]), this.jqDeferred && this.jqDeferred.notify && this.jqDeferred.notify(this, e), this.progressedCount == this.images.length && this.complete(), this.options.debug && a && a.log("progress: " + i, e, t)
    }, o.prototype.complete = function() {
      var e = this.hasAnyBroken ? "fail" : "done";
      if (this.isComplete = !0, this.emitEvent(e, [this]), this.emitEvent("always", [this]), this.jqDeferred) {
        var t = this.hasAnyBroken ? "reject" : "resolve";
        this.jqDeferred[t](this)
      }
    }, r.prototype = Object.create(t.prototype), r.prototype.check = function() {
      var e = this.getIsImageComplete();
      return e ? void this.confirm(0 !== this.img.naturalWidth, "naturalWidth") : (this.proxyImage = new Image, this.proxyImage.addEventListener("load", this), this.proxyImage.addEventListener("error", this), this.img.addEventListener("load", this), this.img.addEventListener("error", this), void(this.proxyImage.src = this.img.src))
    }, r.prototype.getIsImageComplete = function() {
      return this.img.complete && this.img.naturalWidth
    }, r.prototype.confirm = function(e, t) {
      this.isLoaded = e, this.emitEvent("progress", [this, this.img, t])
    }, r.prototype.handleEvent = function(e) {
      var t = "on" + e.type;
      this[t] && this[t](e)
    }, r.prototype.onload = function() {
      this.confirm(!0, "onload"), this.unbindEvents()
    }, r.prototype.onerror = function() {
      this.confirm(!1, "onerror"), this.unbindEvents()
    }, r.prototype.unbindEvents = function() {
      this.proxyImage.removeEventListener("load", this), this.proxyImage.removeEventListener("error", this), this.img.removeEventListener("load", this), this.img.removeEventListener("error", this)
    }, s.prototype = Object.create(r.prototype), s.prototype.check = function() {
      this.img.addEventListener("load", this), this.img.addEventListener("error", this), this.img.src = this.url;
      var e = this.getIsImageComplete();
      e && (this.confirm(0 !== this.img.naturalWidth, "naturalWidth"), this.unbindEvents())
    }, s.prototype.unbindEvents = function() {
      this.img.removeEventListener("load", this), this.img.removeEventListener("error", this)
    }, s.prototype.confirm = function(e, t) {
      this.isLoaded = e, this.emitEvent("progress", [this, this.element, t])
    }, o.makeJQueryPlugin = function(t) {
      t = t || e.jQuery, t && (h = t, h.fn.imagesLoaded = function(e, t) {
        var i = new o(this, e, t);
        return i.jqDeferred.promise(h(this))
      })
    }, o.makeJQueryPlugin(), o
  });

</script>
<script type="text/javascript">
  var A = {
    f: {
      getStart: function() {
        var a = document.getElementById('loadTest');
        if (window.innerWidth < A.v.breakpoint) {
          a.setAttribute('scr', A.v.imgM);
        } else {
          a.setAttribute('src', A.v.img2x);
        }
        // vanilla JS
        imagesLoaded('#loadTest', {
          background: true
        }, function() {
          if (window.innerWidth < A.v.breakpoint) {
            window.onload = A.f.runOnLoad();
          } else {
            A.f.runOnLoad();
          }
        });
      },
      runOnLoad: function() {
        var a = document.querySelectorAll('.rect .inner'),
          b = '',
          c, d, e = 0,
          f, g;
        for (i = 0; i < a.length; i++) {
          // rotation salt
          c = 0;
          // timing salt
          d = .3;
          // margin salt
          f = Math.random();
          // coin flip
          g = Math.random();
          if (g > .5) {
            f = f * (-187.5);
          } else {
            f = f * (187.5);
          }
          e = e + d;
          b = b + '@keyframes anim' + (i + 1) + ' {' +
            'from {' +
            '-webkit-transform: rotate(' + c + 'deg);' +
            'transform: rotate(' + c + 'deg);' +
            'margin-top:187.5px;' +
            'margin-left:' + f + 'px;' +
            'opacity: 0; ' +
            '}' +
            '25% {' +
            'opacity: 1; ' +
            '}' +
            'to {' +
            '-webkit-transform: rotate(0deg) scale(1);' +
            'transform: rotate(0deg) scale(1);' +
            'margin-left:0px;' +
            'margin-bottom:0px;' +
            'opacity: 1; ' +
            '} ' +
            '}' +
            '.anim' + (i + 1) + ' {' +
            '-webkit-animation-name: anim' + (i + 1) + ';' +
            'animation-delay:' + e + 's;' +
            'transition-timing-function: linear;' +
            'animation-name: anim' + (i + 1) + '; }'
          console.log(c);
        }
        b = '<style>' + b + '<\/script>';
        A.f.htmlToContainer('styleOuter', b);
        for (i = 0; i < a.length; i++) {
          A.f.addClass(a[i], 'animated');
          A.f.addClass(a[i], 'anim' + (i + 1));
        }
      },
      addClass: function(a, b) {
        var el = a;
        if (el.classList) {
          el.classList.add(b);
        } else {
          el.classList += ' ' + b;
        }
      },
      htmlToContainer: function(a, b) {
        a = document.getElementById(a);
        a.innerHTML = b;
      },
    },
    v: {
      breakpoint: 640,
      img1x: null,
      img2x: 'https://cdn.shopify.com/s/files/1/0110/6032/files/11767-hero-2x.jpg?9068061695683816041',
      imgM: 'https://cdn.shopify.com/s/files/1/0110/6032/files/11767-hero-m.jpg?01282724160752443335'
    }
  };
  A.f.getStart();
  //window.onload = A.f.runOnLoad;

</script>
<style>
  .gb-throbber {
    display: none;
  }

  #page {
    padding-bottom: 2em;
  }

  .nowrap {
    white-space: nowrap;
  }

  #page .numOuter {
    margin-bottom: 3em;
  }

  #page .ma {
    margin-left: auto;
    margin-right: auto;
  }

  #page .m-tb-0-5 {
    margin-top: .5em;
    margin-bottom: .5em;
  }

  #page .m-tb-1 {
    margin-top: 1em;
    margin-bottom: 1em;
  }

  #page .c-823696 {
    color: #823696;
  }

  #page .c-4a4a4a {
    color: #4a4a4a;
  }

  #page .numberOuter {
    padding-bottom: 1px;
    border-bottom: 1px solid #D8D8D8;
  }

  #page .numberOuter {
    margin-bottom: 18px;
  }

  #page .mainWindow {
    width: 607px;
    height: 374px;
    position: absolute;
    padding: 1em;
  }

  #page #heroOuter {
    width: 1440px;
    height: 566px;
  }

  #page #heroInner {
    width: 1440px;
    height: 566px;
    position: absolute;
    left: 50%;
    margin-left: -720px;
  }

  #page .bottom img {
    margin-bottom: 18px;
    height: 45px;
    width: auto;
  }

  #page .rect {
    position: absolute;
    z-index: 0;
    background-color: rgba(0, 0, 0, 0.03);
  }

  #page .rect,
  #page .rect .inner {
    width: 193px;
    height: 182px;
  }

  #page .rect .inner {
    background-image: url("https://cdn.shopify.com/s/files/1/0110/6032/files/11767-hero-2x.jpg?9068061695683816041");
    background-size: 1435px;
    z-index: 9;
    visibility: hidden;
  }

  #page .row1 {
    top: 0px;
  }

  #page .row1 .inner {
    background-position-y: 0px;
  }

  #page .row2 {
    top: 192px;
  }

  #page .row2 .inner {
    background-position-y: -192px;
  }

  #page .row3 {
    top: 384px;
  }

  #page .row3 .inner {
    background-position-y: -384px;
  }

  #page .row4 {
    top: 576px;
  }

  #page .row4 .inner {
    background-position-y: -576px;
  }

  #page .row5 {
    top: 768px;
  }

  #page .row5 .inner {
    background-position-y: -768px;
  }

  #page .row6 {
    top: 960px;
  }

  #page .row6 .inner {
    background-position-y: -960px;
  }

  #page .row7 {
    top: 1152px;
  }

  #page .row7 .inner {
    background-position-y: -1152p;
  }

  #page .column1 {
    left: 0px;
  }

  #page .column1 .inner {
    background-position-x: 0px;
  }

  #page .column2 {
    left: 207px;
  }

  #page .column2 .inner {
    background-position-x: -207px;
  }

  #page .column3 {
    left: 414px;
  }

  #page .column3 .inner {
    background-position-x: -414px;
  }

  #page .column4 {
    left: 621px;
  }

  #page .column4 .inner {
    background-position-x: -621px;
  }

  #page .column5 {
    left: 828px;
  }

  #page .column5 .inner {
    background-position-x: -828px;
  }

  #page .column6 {
    left: 1035px;
  }

  #page .column6 .inner {
    background-position-x: -1035px;
  }

  #page .column7 {
    left: 1242px;
  }

  #page .column7 .inner {
    background-position-x: -1242px;
  }

  @media screen and (max-width: 639px) {
    
    #page .numOuter .columns {
      padding-bottom: 2em;
    }
    #page .mainWindow {
      width: 100%;
      height: auto;
      position: static;
    }
    #page #heroOuter {
      width: 100%;
      height: auto;
    }
    #page #heroInner {
      width: 100%;
      height: auto;
      position: static;
      left: 0;
      margin-left: 0px;
    }
    #page .rect {
      position: static;
      float: left;
      padding: 2.5px;
      box-sizing: content-box;
      display: none;
      background-color: rgba(0, 0, 0, 0);
    }
    #page .rect:nth-child(2),
    #page .rect:nth-child(3),
    #page .rect:nth-child(4),
    #page .rect:nth-child(5),
    #page .rect:nth-child(6),
    #page .rect:nth-child(7),
    #page .rect:nth-child(8),
    #page .rect:nth-child(9) {
      display: block;
    }
    #page .rect:nth-child(2) .inner {
      background-position: 0px 0px !important;
      display: block !important;
    }
    #page .rect:nth-child(3) .inner {
      background-position: -83.5px 0px !important;
      display: block;
    }
    #page .rect:nth-child(4) .inner {
      background-position: -167.5px 0px !important;
      display: block;
    }
    #page .rect:nth-child(5) .inner {
      background-position: -250.5px 0px !important;
      display: block;
    }
    #page .rect:nth-child(6) .inner {
      background-position: 0px 91px !important;
      display: block;
    }
    #page .rect:nth-child(7) .inner {
      background-position: -83.5px 91px !important;
      display: block;
    }
    #page .rect:nth-child(8) .inner {
      background-position: -167.5px 91px !important;
      display: block;
    }
    #page .rect:nth-child(9) .inner {
      background-position: -250.5px 91px !important;
      display: block;
    }
    #page #imgOuter {
      width: 352px;
      margin-left: auto;
      margin-right: auto;
    }
    #page .rect,
    #page .rect .inner {
      width: 83px;
      height: 91px;
    }
    #page .rect .inner {
      background-image: url('https://cdn.shopify.com/s/files/1/0110/6032/files/11767-hero-m.jpg?01282724160752443335');
      background-size: 333.5px 182.5px;
    }
  }

  @media screen and (max-width: 352px) {
    #page #imgOuter {
      width: 264px;
    }
    #page .rect:nth-child(8) {
      display: none;
    }
    #page .rect:nth-child(9) {
      display: none;
    }
  }

  /* animate.css START */

  #page .animated {
    animation-duration: .5s;
    -webkit-animation-fill-mode: both;
    visibility: visible !important;
    animation-fill-mode: both;
  }

  @-webkit-keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  #page .fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
    animation-duration: 4s;
  }

  #page .fadeIn.s05 {
    animation-duration: .5s;
  }

  /* animate.css END */

  #page .fs-64,
  #page .fs-64 a {
    font-size: 4rem
  }

  #page .fs-63,
  #page .fs-63 a {
    font-size: 3.9375rem
  }

  #page .fs-62,
  #page .fs-62 a {
    font-size: 3.875rem
  }

  #page .fs-61,
  #page .fs-61 a {
    font-size: 3.8125rem
  }

  #page .fs-60,
  #page .fs-60 a {
    font-size: 3.75rem
  }

  #page .fs-59,
  #page .fs-59 a {
    font-size: 3.6875rem
  }

  #page .fs-58,
  #page .fs-58 a {
    font-size: 3.625rem
  }

  #page .fs-57,
  #page .fs-57 a {
    font-size: 3.5625rem
  }

  #page .fs-56,
  #page .fs-56 a {
    font-size: 3.5rem
  }

  #page .fs-55,
  #page .fs-55 a {
    font-size: 3.4375rem
  }

  #page .fs-54,
  #page .fs-54 a {
    font-size: 3.375rem
  }

  #page .fs-53,
  #page .fs-53 a {
    font-size: 3.3125rem
  }

  #page .fs-52,
  #page .fs-52 a {
    font-size: 3.25rem
  }

  #page .fs-51,
  #page .fs-51 a {
    font-size: 3.1875rem
  }

  #page .fs-50,
  #page .fs-50 a {
    font-size: 3.125rem
  }

  #page .fs-49,
  #page .fs-49 a {
    font-size: 3.0625rem
  }

  #page .fs-48,
  #page .fs-48 a {
    font-size: 3rem
  }

  #page .fs-47,
  #page .fs-47 a {
    font-size: 2.9375rem
  }

  #page .fs-46,
  #page .fs-46 a {
    font-size: 2.875rem
  }

  #page .fs-45,
  #page .fs-45 a {
    font-size: 2.8125rem
  }

  #page .fs-44,
  #page .fs-44 a {
    font-size: 2.75rem
  }

  #page .fs-43,
  #page .fs-43 a {
    font-size: 2.6875rem
  }

  #page .fs-42,
  #page .fs-42 a {
    font-size: 2.625rem
  }

  #page .fs-41,
  #page .fs-41 a {
    font-size: 2.5625rem
  }

  #page .fs-40,
  #page .fs-40 a {
    font-size: 2.5rem
  }

  #page .fs-39,
  #page .fs-39 a {
    font-size: 2.4375rem
  }

  #page .fs-38,
  #page .fs-38 a {
    font-size: 2.375rem
  }

  #page .fs-37,
  #page .fs-37 a {
    font-size: 2.3125rem
  }

  #page .fs-36,
  #page .fs-36 a {
    font-size: 2.25rem
  }

  #page .fs-35,
  #page .fs-35 a {
    font-size: 2.1875rem
  }

  #page .fs-34,
  #page .fs-34 a {
    font-size: 2.125rem
  }

  #page .fs-33,
  #page .fs-33 a {
    font-size: 2.0625rem
  }

  #page .fs-32,
  #page .fs-32 a {
    font-size: 2rem
  }

  #page .fs-31,
  #page .fs-31 a {
    font-size: 1.9375rem
  }

  #page .fs-30,
  #page .fs-30 a {
    font-size: 1.875rem
  }

  #page .fs-29,
  #page .fs-29 a {
    font-size: 1.8125rem
  }

  #page .fs-28,
  #page .fs-28 a {
    font-size: 1.75rem
  }

  #page .fs-27,
  #page .fs-27 a {
    font-size: 1.6875rem
  }

  #page .fs-26,
  #page .fs-26 a {
    font-size: 1.625rem
  }

  #page .fs-25,
  #page .fs-25 a {
    font-size: 1.5625rem
  }

  #page .fs-24,
  #page .fs-24 a {
    font-size: 1.5rem
  }

  #page .fs-23,
  #page .fs-23 a {
    font-size: 1.4375rem
  }

  #page .fs-22,
  #page .fs-22 a {
    font-size: 1.375rem
  }

  #page .fs-21,
  #page .fs-21 a {
    font-size: 1.3125rem
  }

  #page .fs-20,
  #page .fs-20 a {
    font-size: 1.25rem
  }

  #page .fs-19,
  #page .fs-19 a {
    font-size: 1.1875rem
  }

  #page .fs-18,
  #page .fs-18 a {
    font-size: 1.125rem
  }

  #page .fs-17,
  #page .fs-17 a {
    font-size: 1.0625rem
  }

  #page .fs-16,
  #page .fs-16 a {
    font-size: 1rem
  }

  #page .fs-15,
  #page .fs-15 a {
    font-size: .9375rem
  }

  #page .fs-14,
  #page .fs-14 a {
    font-size: .875rem
  }

  #page .fs-13,
  #page .fs-13 a {
    font-size: .8125rem
  }

  #page .fs-12,
  #page .fs-12 a {
    font-size: .75rem
  }

  #page .fs-11,
  #page .fs-11 a {
    font-size: .6875rem
  }

  #page .fs-10,
  #page .fs-10 a {
    font-size: .625rem
  }

  #page .fs-9,
  #page .fs-9 a {
    font-size: .5625rem
  }

  #page .fs-8,
  #page .fs-8 a {
    font-size: .5rem
  }

  #page .fs-7,
  #page .fs-7 a {
    font-size: .4375rem
  }

  #page .fs-6,
  #page .fs-6 a {
    font-size: .375rem
  }

  #page .fs-5,
  #page .fs-5 a {
    font-size: .3125rem
  }

  #page .fs-4,
  #page .fs-4 a {
    font-size: .25rem
  }

  #page .fs-3,
  #page .fs-3 a {
    font-size: .1875rem
  }

  #page .fs-2,
  #page .fs-2 a {
    font-size: .125rem
  }

  #page .fs-1,
  #page .fs-1 a {
    font-size: .0625rem
  }

  @media screen and (max-width:639px) {
    #page .mfs-64,
    #page a {
      font-size: 4rem
    }
    #page .mfs-6 a,
    #page .mfs-63 {
      font-size: 3.9375rem
    }
    #page .mfs-62,
    #page .mfs-62 a {
      font-size: 3.875rem
    }
    #page .mfs-61,
    #page .mfs-61 a {
      font-size: 3.8125rem
    }
    #page .mfs-60,
    #page .mfs-60 a {
      font-size: 3.75rem
    }
    #page .mfs-59,
    #page .mfs-59 a {
      font-size: 3.6875rem
    }
    #page .mfs-58,
    #page .mfs-58 a {
      font-size: 3.625rem
    }
    #page .mfs-57,
    #page .mfs-57 a {
      font-size: 3.5625rem
    }
    #page .mfs-56,
    #page .mfs-56 a {
      font-size: 3.5rem
    }
    #page .mfs-55,
    #page .mfs-55 a {
      font-size: 3.4375rem
    }
    #page .mfs-54,
    #page .mfs-54 a {
      font-size: 3.375rem
    }
    #page .mfs-53,
    #page .mfs-53 a {
      font-size: 3.3125rem
    }
    #page .mfs-52,
    #page .mfs-52 a {
      font-size: 3.25rem
    }
    #page .mfs-51,
    #page .mfs-51 a {
      font-size: 3.1875rem
    }
    #page .mfs-50,
    #page .mfs-50 a {
      font-size: 3.125rem
    }
    #page .mfs-49,
    #page .mfs-49 a {
      font-size: 3.0625rem
    }
    #page .mfs-48,
    #page .mfs-48 a {
      font-size: 3rem
    }
    #page .mfs-47,
    #page .mfs-47 a {
      font-size: 2.9375rem
    }
    #page .mfs-46,
    #page .mfs-46 a {
      font-size: 2.875rem
    }
    #page .mfs-45,
    #page .mfs-45 a {
      font-size: 2.8125rem
    }
    #page .mfs-44,
    #page .mfs-44 a {
      font-size: 2.75rem
    }
    #page .mfs-43,
    #page .mfs-43 a {
      font-size: 2.6875rem
    }
    #page .mfs-42,
    #page .mfs-42 a {
      font-size: 2.625rem
    }
    #page .mfs-41,
    #page .mfs-41 a {
      font-size: 2.5625rem
    }
    #page .mfs-40,
    #page .mfs-40 a {
      font-size: 2.5rem
    }
    #page .mfs-39,
    #page .mfs-39 a {
      font-size: 2.4375rem
    }
    #page .mfs-38,
    #page .mfs-38 a {
      font-size: 2.375rem
    }
    #page .mfs-37,
    #page .mfs-37 a {
      font-size: 2.3125rem
    }
    #page .mfs-36,
    #page .mfs-36 a {
      font-size: 2.25rem
    }
    #page .mfs-35,
    #page .mfs-35 a {
      font-size: 2.1875rem
    }
    #page .mfs-34,
    #page .mfs-34 a {
      font-size: 2.125rem
    }
    #page .mfs-33,
    #page .mfs-33 a {
      font-size: 2.0625rem
    }
    #page .mfs-32,
    #page .mfs-32 a {
      font-size: 2rem
    }
    #page .mfs-31,
    #page .mfs-31 a {
      font-size: 1.9375rem
    }
    #page .mfs-30,
    #page .mfs-30 a {
      font-size: 1.875rem
    }
    #page .mfs-29,
    #page .mfs-29 a {
      font-size: 1.8125rem
    }
    #page .mfs-28,
    #page .mfs-28 a {
      font-size: 1.75rem
    }
    #page .mfs-27,
    #page .mfs-27 a {
      font-size: 1.6875rem
    }
    #page .mfs-26,
    #page .mfs-26 a {
      font-size: 1.625rem
    }
    #page .mfs-25,
    #page .mfs-25 a {
      font-size: 1.5625rem
    }
    #page .mfs-24,
    #page .mfs-24 a {
      font-size: 1.5rem
    }
    #page .mfs-23,
    #page .mfs-23 a {
      font-size: 1.4375rem
    }
    #page .mfs-22,
    #page .mfs-22 a {
      font-size: 1.375rem
    }
    #page .mfs-21,
    #page .mfs-21 a {
      font-size: 1.3125rem
    }
    #page .mfs-20,
    #page .mfs-20 a {
      font-size: 1.25rem
    }
    #page .mfs-19,
    #page .mfs-19 a {
      font-size: 1.1875rem
    }
    #page .mfs-18,
    #page .mfs-18 a {
      font-size: 1.125rem
    }
    #page .mfs-17,
    #page .mfs-17 a {
      font-size: 1.0625rem
    }
    #page .mfs-16,
    #page .mfs-16 a {
      font-size: 1rem
    }
    #page .mfs-15,
    #page .mfs-15 a {
      font-size: .9375rem
    }
    #page .mfs-14,
    #page .mfs-14 a {
      font-size: .875rem
    }
    #page .mfs-13,
    #page .mfs-13 a {
      font-size: .8125rem
    }
    #page .mfs-12,
    #page .mfs-12 a {
      font-size: .75rem
    }
    #page .mfs-11,
    #page .mfs-11 a {
      font-size: .6875rem
    }
    #page .mfs-10,
    #page .mfs-10 a {
      font-size: .625rem
    }
    #page .mfs-9,
    #page .mfs-9 a {
      font-size: .5625rem
    }
    #page .mfs-8,
    #page .mfs-8 a {
      font-size: .5rem
    }
    #page .mfs-7,
    #page .mfs-7 a {
      font-size: .4375rem
    }
    #page .mfs-6,
    #page .mfs-6 a {
      font-size: .375rem
    }
    #page .mfs-5,
    #page .mfs-5 a {
      font-size: .3125rem
    }
    #page .mfs-4,
    #page .mfs-4 a {
      font-size: .25rem
    }
    #page .mfs-3,
    #page .mfs-3 a {
      font-size: .1875rem
    }
    #page .mfs-2,
    #page .mfs-2 a {
      font-size: .125rem
    }
    #page .mfs-1,
    #page .mfs-1 a {
      font-size: .0625rem
    }
  }

</style>
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
<div id="page" class="clearfix bc-f3eef5">

  <div id="heroOuter" class="ma text-center">
    <div id="heroInner" class="clearfix animated fadeIn s05">
      <div id="l-00" class="mainWindow column3 row1 animated fadeIn">
        <h2 class="fs-20 mfs-14 c-823696 proxima-regular caps">
          Love talking about Gwynnie Bee?
        </h2>
        <h1 class="zahrah-semibolditalic fs-60 mfs-42" style="line-height:1;">
          Become an<br>Affiliate
        </h1>
        <div class="proxima-regular fs-18 mfs-16 m-tb-1">
          Our Affiliate Program is built on rewarding you for being a great advocate! Plus, you’ll join a network of some of the most stylish, relevant trendsetters and content creators around. Partner with us through <span class="nowrap">Pepperjam today.</span>
        </div>
        <div class="ma" style="max-width:200px;">
          <a href=""
            id="link_apply-to-gwynniebee-affiliate-program" class="btTxt btn-n button purple mfs-16" style="display:block;">
              Apply now
            </a>
        </div>
      </div>
      <div id="imgOuter" class="clearfix">
        <div id="l-01" class="rect column1 row1">
          <div class="inner"></div>
        </div>
        <div id="l-04" class="rect column2 row1">
          <div class="inner"></div>
        </div>
        <div id="l-10" class="rect column6 row1">
          <div class="inner"></div>
        </div>
        <div id="l-13" class="rect column7 row1">
          <div class="inner"></div>
        </div>
        <div id="l-02" class="rect column1 row2">
          <div class="inner"></div>
        </div>
        <div id="l-05" class="rect column2 row2">
          <div class="inner"></div>
        </div>
        <div id="l-11" class="rect column6 row2">
          <div class="inner"></div>
        </div>
        <div id="l-14" class="rect column7 row2">
          <div class="inner"></div>
        </div>
        <div id="l-03" class="rect column1 row3">
          <div class="inner"></div>
        </div>
        <div id="l-06" class="rect column2 row3">
          <div class="inner"></div>
        </div>
        <div id="l-07" class="rect column3 row3">
          <div class="inner"></div>
        </div>
        <div id="l-08" class="rect column4 row3">
          <div class="inner"></div>
        </div>
        <div id="l-09" class="rect column5 row3">
          <div class="inner"></div>
        </div>
        <div id="l-12" class="rect column6 row3">
          <div class="inner"></div>
        </div>
        <div id="l-15" class="rect column7 row3">
          <div class="inner"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom text-center animated fadeIn">
    <h1 class="zahrah-semibolditalic fs-60 mfs-42 m-tb-0-5" style="line-height:1;">
      How it Works
    </h1>
    <div class="row numOuter" style="max-width:1080px;">
      <div class="medium-4 columns">
        <div class="numberOuter">
          <img src="https://cdn.shopify.com/s/files/1/0110/6032/files/11767-01.svg?3252398161976044993">
        </div>
        <div class="proxima-regular fs-18 c-4a4a4a">
          Sign up with Pepperjam and apply to be a <span class="nowrap">Gwynnie Bee Affiliate.</span>
        </div>
      </div>
      <div class="medium-4 columns">
        <div class="numberOuter">
          <img src="https://cdn.shopify.com/s/files/1/0110/6032/files/11767-02.svg?3252398161976044993">
        </div>
        <div class="proxima-regular fs-18 c-4a4a4a">
          Display our ads, banners, and links. Review our service and collections, and advertise <span class="nowrap">our promotions.</span>
        </div>
      </div>
      <div class="medium-4 columns">
        <div class="numberOuter">
          <img src="https://cdn.shopify.com/s/files/1/0110/6032/files/11767-03.svg?3252398161976044993">
        </div>
        <div class="proxima-semibold fs-20 c-823696">
          Get PAID!
        </div>
      </div>
    </div>
    <div class="ma m-tb-1" style="max-width:200px;">
      <a href="http://t.signauxsept.com/e1t/c/5/f18dQhb0S7lC8dDMPbW2n0x6l2B9nMJN7t5XZsQBlwnVQJZgz3LrcdvW2z8MDM56dLdld86LdR02?t=http%3A%2F%2Fwww.pepperjamnetwork.com%2Faffiliate%2Fprogram%2Fdetails%3FprogramId%3D7298&si=5886684246835200&pi=376f0b03-faa0-4082-9236-c15ed7301b2c&{{url_tracking2}}"
        id="link_apply-to-gwynniebee-affiliate-program-2" class="btTxt btn-n button black" style="display:block;">
          Apply now
        </a>
    </div>
    <div class="proxima-bold fs-24 mfs-18">
      Welcome to the GB <span class="nowrap">Affiliate program!</span>
    </div>
  </div>
  <div id="styleOuter">

  </div>
</div>
