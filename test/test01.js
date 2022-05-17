{
    /*!
     * imagesLoaded PACKAGED v4.1.4
     * JavaScript is all like "You images are done yet or what?"
     * MIT License
     */

    ! function(e, t) { "function" == typeof define && define.amd ? define("ev-emitter/ev-emitter", t) : "object" == typeof module && module.exports ? module.exports = t() : e.EvEmitter = t() }("undefined" != typeof window ? window : this, function() {
        function e() {} var t = e.prototype; return t.on = function(e, t) { if (e && t) { var i = this._events = this._events || {},
                    n = i[e] = i[e] || []; return n.indexOf(t) == -1 && n.push(t), this } }, t.once = function(e, t) { if (e && t) { this.on(e, t); var i = this._onceEvents = this._onceEvents || {},
                    n = i[e] = i[e] || {}; return n[t] = !0, this } }, t.off = function(e, t) { var i = this._events && this._events[e]; if (i && i.length) { var n = i.indexOf(t); return n != -1 && i.splice(n, 1), this } }, t.emitEvent = function(e, t) { var i = this._events && this._events[e]; if (i && i.length) { i = i.slice(0), t = t || []; for (var n = this._onceEvents && this._onceEvents[e], o = 0; o < i.length; o++) { var r = i[o],
                        s = n && n[r];
                    s && (this.off(e, r), delete n[r]), r.apply(this, t) } return this } }, t.allOff = function() { delete this._events, delete this._onceEvents }, e }),
    function(e, t) { "use strict"; "function" == typeof define && define.amd ? define(["ev-emitter/ev-emitter"], function(i) { return t(e, i) }) : "object" == typeof module && module.exports ? module.exports = t(e, require("ev-emitter")) : e.imagesLoaded = t(e, e.EvEmitter) }("undefined" != typeof window ? window : this, function(e, t) {
        function i(e, t) { for (var i in t) e[i] = t[i]; return e }

        function n(e) { if (Array.isArray(e)) return e; var t = "object" == typeof e && "number" == typeof e.length; return t ? d.call(e) : [e] }

        function o(e, t, r) { if (!(this instanceof o)) return new o(e, t, r); var s = e; return "string" == typeof e && (s = document.querySelectorAll(e)), s ? (this.elements = n(s), this.options = i({}, this.options), "function" == typeof t ? r = t : i(this.options, t), r && this.on("always", r), this.getImages(), h && (this.jqDeferred = new h.Deferred), void setTimeout(this.check.bind(this))) : void a.error("Bad element for imagesLoaded " + (s || e)) }

        function r(e) { this.img = e }

        function s(e, t) { this.url = e, this.element = t, this.img = new Image } var h = e.jQuery,
            a = e.console,
            d = Array.prototype.slice;
        o.prototype = Object.create(t.prototype), o.prototype.options = {}, o.prototype.getImages = function() { this.images = [], this.elements.forEach(this.addElementImages, this) }, o.prototype.addElementImages = function(e) { "IMG" == e.nodeName && this.addImage(e), this.options.background === !0 && this.addElementBackgroundImages(e); var t = e.nodeType; if (t && u[t]) { for (var i = e.querySelectorAll("img"), n = 0; n < i.length; n++) { var o = i[n];
                    this.addImage(o) } if ("string" == typeof this.options.background) { var r = e.querySelectorAll(this.options.background); for (n = 0; n < r.length; n++) { var s = r[n];
                        this.addElementBackgroundImages(s) } } } }; var u = { 1: !0, 9: !0, 11: !0 }; return o.prototype.addElementBackgroundImages = function(e) { var t = getComputedStyle(e); if (t)
                for (var i = /url\((['"])?(.*?)\1\)/gi, n = i.exec(t.backgroundImage); null !== n;) { var o = n && n[2];
                    o && this.addBackground(o, e), n = i.exec(t.backgroundImage) } }, o.prototype.addImage = function(e) { var t = new r(e);
            this.images.push(t) }, o.prototype.addBackground = function(e, t) { var i = new s(e, t);
            this.images.push(i) }, o.prototype.check = function() {
            function e(e, i, n) { setTimeout(function() { t.progress(e, i, n) }) } var t = this; return this.progressedCount = 0, this.hasAnyBroken = !1, this.images.length ? void this.images.forEach(function(t) { t.once("progress", e), t.check() }) : void this.complete() }, o.prototype.progress = function(e, t, i) { this.progressedCount++, this.hasAnyBroken = this.hasAnyBroken || !e.isLoaded, this.emitEvent("progress", [this, e, t]), this.jqDeferred && this.jqDeferred.notify && this.jqDeferred.notify(this, e), this.progressedCount == this.images.length && this.complete(), this.options.debug && a && a.log("progress: " + i, e, t) }, o.prototype.complete = function() { var e = this.hasAnyBroken ? "fail" : "done"; if (this.isComplete = !0, this.emitEvent(e, [this]), this.emitEvent("always", [this]), this.jqDeferred) { var t = this.hasAnyBroken ? "reject" : "resolve";
                this.jqDeferred[t](this) } }, r.prototype = Object.create(t.prototype), r.prototype.check = function() { var e = this.getIsImageComplete(); return e ? void this.confirm(0 !== this.img.naturalWidth, "naturalWidth") : (this.proxyImage = new Image, this.proxyImage.addEventListener("load", this), this.proxyImage.addEventListener("error", this), this.img.addEventListener("load", this), this.img.addEventListener("error", this), void(this.proxyImage.src = this.img.src)) }, r.prototype.getIsImageComplete = function() { return this.img.complete && this.img.naturalWidth }, r.prototype.confirm = function(e, t) { this.isLoaded = e, this.emitEvent("progress", [this, this.img, t]) }, r.prototype.handleEvent = function(e) { var t = "on" + e.type;
            this[t] && this[t](e) }, r.prototype.onload = function() { this.confirm(!0, "onload"), this.unbindEvents() }, r.prototype.onerror = function() { this.confirm(!1, "onerror"), this.unbindEvents() }, r.prototype.unbindEvents = function() { this.proxyImage.removeEventListener("load", this), this.proxyImage.removeEventListener("error", this), this.img.removeEventListener("load", this), this.img.removeEventListener("error", this) }, s.prototype = Object.create(r.prototype), s.prototype.check = function() { this.img.addEventListener("load", this), this.img.addEventListener("error", this), this.img.src = this.url; var e = this.getIsImageComplete();
            e && (this.confirm(0 !== this.img.naturalWidth, "naturalWidth"), this.unbindEvents()) }, s.prototype.unbindEvents = function() { this.img.removeEventListener("load", this), this.img.removeEventListener("error", this) }, s.prototype.confirm = function(e, t) { this.isLoaded = e, this.emitEvent("progress", [this, this.element, t]) }, o.makeJQueryPlugin = function(t) { t = t || e.jQuery, t && (h = t, h.fn.imagesLoaded = function(e, t) { var i = new o(this, e, t); return i.jqDeferred.promise(h(this)) }) }, o.makeJQueryPlugin(), o });
    // helper functions
    const MathUtils = {
        // map number x from range [a, b] to [c, d]
        map: (x, a, b, c, d) => (x - a) * (d - c) / (b - a) + c,
        // linear interpolation
        lerp: (a, b, n) => (1 - n) * a + n * b
    };

    // body element
    const body = document.body;

    // calculate the viewport size
    let winsize;
    const calcWinsize = () =>
        (winsize = { width: window.innerWidth, height: window.innerHeight });
    calcWinsize();
    // and recalculate on resize
    window.addEventListener("resize", calcWinsize);

    // scroll position and update function
    let docScroll;
    const getPageYScroll = () =>
        (docScroll = window.pageYOffset || document.documentElement.scrollTop);
    window.addEventListener("scroll", getPageYScroll);

    // Item
    class Item {
        constructor(el) {
            // the .item element
            this.DOM = { el: el };
            // the inner image
            this.DOM.image = this.DOM.el.querySelector(".item__img");
            this.DOM.wrap = this.DOM.el.querySelector(".item__img-wrap");
            this.renderedStyles = {
                // here we define which property will change as we scroll the page and the items is inside the viewport
                // in this case we will be translating the image on the y-axis
                // we interpolate between the previous and current value to achieve a smooth effect
                innerTranslationY: {
                    // interpolated value
                    previous: 0,
                    // current value
                    current: 0,
                    // amount to interpolate
                    ease: 0.1,
                    // the maximum value to translate the image is set in a CSS variable (--overflow)
                    maxValue: parseInt(
                        getComputedStyle(this.DOM.image).getPropertyValue("--overflow"),
                        10
                    ),
                    // current value setter
                    // the value of the translation will be:
                    // when the item's top value (relative to the viewport) equals the window's height (items just came into the viewport) the translation = minimum value (- maximum value)
                    // when the item's top value (relative to the viewport) equals "-item's height" (item just exited the viewport) the translation = maximum value
                    setValue: () => {
                        const maxValue = this.renderedStyles.innerTranslationY.maxValue;
                        const minValue = -1 * maxValue;
                        return Math.max(
                            Math.min(
                                MathUtils.map(
                                    this.props.top - docScroll,
                                    winsize.height, -1 * this.props.height,
                                    minValue,
                                    maxValue
                                ),
                                maxValue
                            ),
                            minValue
                        );
                    }
                }
            };
            // set the initial values
            this.update();
            // use the IntersectionObserver API to check when the element is inside the viewport
            // only then the element translation will be updated
            this.observer = new IntersectionObserver(entries => {
                entries.forEach(
                    entry => (this.isVisible = entry.intersectionRatio > 0)
                );
            });
            this.observer.observe(this.DOM.el);
            // init/bind events
            this.initEvents();
        }
        update() {
            // gets the item's height and top (relative to the document)
            this.getSize();
            // sets the initial value (no interpolation)
            for (const key in this.renderedStyles) {
                this.renderedStyles[key].current = this.renderedStyles[
                    key
                ].previous = this.renderedStyles[key].setValue();
            }
            // translate the image
            this.layout();
        }
        getSize() {
            const rect = this.DOM.el.getBoundingClientRect();
            this.props = {
                // item's height
                height: rect.height,
                // offset top relative to the document
                top: docScroll + rect.top
            };
        }
        initEvents() {
            window.addEventListener("resize", () => this.resize());
        }
        resize() {
            // on resize rest sizes and update the translation value
            this.update();
        }
        render() {
            // update the current and interpolated values
            for (const key in this.renderedStyles) {
                this.renderedStyles[key].current = this.renderedStyles[key].setValue();
                this.renderedStyles[key].previous = MathUtils.lerp(
                    this.renderedStyles[key].previous,
                    this.renderedStyles[key].current,
                    this.renderedStyles[key].ease
                );
            }
            // and translates the image
            this.layout();
        }
        layout() {
            // translates the image
            this.DOM.image.style.transform = `translate3d(0,${
          this.renderedStyles.innerTranslationY.previous
        }px,0)`;
        }
    }

    // SmoothScroll
    class SmoothScroll {
        constructor() {
            // the <main> element
            this.DOM = { main: document.querySelector("main") };
            // the scrollable element
            // we translate this element when scrolling (y-axis)
            this.DOM.scrollable = this.DOM.main.querySelector("div[data-scroll]");
            // the items on the page
            this.items = [];
            [...this.DOM.main.querySelectorAll(".content > .item")].forEach(item =>
                this.items.push(new Item(item))
            );
            // here we define which property will change as we scroll the page
            // in this case we will be translating on the y-axis
            // we interpolate between the previous and current value to achieve the smooth scrolling effect
            this.renderedStyles = {
                translationY: {
                    // interpolated value
                    previous: 0,
                    // current value
                    current: 0,
                    // amount to interpolate
                    ease: 0.1,
                    // current value setter
                    // in this case the value of the translation will be the same like the document scroll
                    setValue: () => docScroll
                }
            };
            // set the body's height
            this.setSize();
            // set the initial values
            this.update();
            // the <main> element's style needs to be modified
            this.style();
            // init/bind events
            this.initEvents();
            // start the render loop
            requestAnimationFrame(() => this.render());
        }
        update() {
            // sets the initial value (no interpolation) - translate the scroll value
            for (const key in this.renderedStyles) {
                this.renderedStyles[key].current = this.renderedStyles[
                    key
                ].previous = this.renderedStyles[key].setValue();
            }
            // translate the scrollable element
            this.layout();
        }
        layout() {
            // translates the scrollable element
            this.DOM.scrollable.style.transform = `translate3d(0,${-1 *
          this.renderedStyles.translationY.previous}px,0)`;
        }
        setSize() {
            // set the heigh of the body in order to keep the scrollbar on the page
            body.style.height = `${this.DOM.scrollable.scrollHeight}px`;
        }
        style() {
            // the <main> needs to "stick" to the screen and not scroll
            // for that we set it to position fixed and overflow hidden
            this.DOM.main.style.position = "fixed";
            this.DOM.main.style.width = this.DOM.main.style.height = "100%";
            this.DOM.main.style.top = this.DOM.main.style.left = 0;
            this.DOM.main.style.overflow = "hidden";
        }
        initEvents() {
            // on resize reset the body's height
            window.addEventListener("resize", () => this.setSize());
        }
        render() {
            // update the current and interpolated values
            for (const key in this.renderedStyles) {
                this.renderedStyles[key].current = this.renderedStyles[key].setValue();
                this.renderedStyles[key].previous = MathUtils.lerp(
                    this.renderedStyles[key].previous,
                    this.renderedStyles[key].current,
                    this.renderedStyles[key].ease
                );
            }
            // and translate the scrollable element
            this.layout();

            // for every item
            for (const item of this.items) {
                // if the item is inside the viewport call it's render function
                // this will update the item's inner image translation, based on the document scroll value and the item's position on the viewport
                if (item.isVisible) {
                    item.render();
                }
            }

            // loop..
            requestAnimationFrame(() => this.render());
        }
    }

    /***********************************/
    /********** Preload stuff **********/

    // Preload images
    const preloadImages = () => {
        return new Promise((resolve, reject) => {
            imagesLoaded(
                document.querySelectorAll(".item__img"), { background: true },
                resolve
            );
        });
    };

    // And then..
    preloadImages().then(() => {
        // Remove the loader
        document.body.classList.remove("loading");
        // Get the scroll position
        getPageYScroll();
        // Initialize the Smooth Scrolling
        new SmoothScroll();
    });
}