(function() {
    var a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s = {}.hasOwnProperty, t = function(a, b) {
        for (var c in b) if (s.call(b, c)) a[c] = b[c];
        function d() {
            this.constructor = a;
        }
        d.prototype = b.prototype;
        a.prototype = new d();
        a.__super__ = b.prototype;
        return a;
    };
    !function() {
        var a, b, c, d, e, f, g;
        e = [ "ms", "moz", "webkit", "o" ];
        for (f = 0, g = e.length; f < g; f++) {
            d = e[f];
            if (window.requestAnimationFrame) break;
            window.requestAnimationFrame = window[d + "RequestAnimationFrame"];
            window.cancelAnimationFrame = window[d + "CancelAnimationFrame"] || window[d + "CancelRequestAnimationFrame"];
        }
        a = null;
        c = 0;
        b = {};
        if (!requestAnimationFrame) {
            window.requestAnimationFrame = function(a, b) {
                var c, d, e, f;
                c = new Date().getTime();
                f = Math.max(0, 16 - (c - e));
                d = window.setTimeout(function() {
                    return a(c + f);
                }, f);
                e = c + f;
                return d;
            };
            return window.cancelAnimationFrame = function(a) {
                return clearTimeout(a);
            };
        } else if (!window.cancelAnimationFrame) {
            a = window.requestAnimationFrame;
            window.requestAnimationFrame = function(d, e) {
                var f;
                f = ++c;
                a(function() {
                    if (!b[f]) return d();
                }, e);
                return f;
            };
            return window.cancelAnimationFrame = function(a) {
                return b[a] = true;
            };
        }
    }();
    String.prototype.hashCode = function() {
        var a, b, c, d, e;
        b = 0;
        if (0 === this.length) return b;
        for (c = d = 0, e = this.length; 0 <= e ? d < e : d > e; c = 0 <= e ? ++d : --d) {
            a = this.charCodeAt(c);
            b = (b << 5) - b + a;
            b &= b;
        }
        return b;
    };
    o = function(a) {
        var b, c;
        b = Math.floor(a / 3600);
        c = Math.floor((a - 3600 * b) / 60);
        a -= 3600 * b + 60 * c;
        a += "";
        c += "";
        while (c.length < 2) c = "0" + c;
        while (a.length < 2) a = "0" + a;
        b = b ? b + ":" : "";
        return b + c + ":" + a;
    };
    m = function(a) {
        return k(a.toFixed(0));
    };
    p = function(a, b) {
        var c, d;
        for (c in b) {
            if (!s.call(b, c)) continue;
            d = b[c];
            a[c] = d;
        }
        return a;
    };
    n = function(a, b) {
        var c, d, e;
        d = {};
        for (c in a) {
            if (!s.call(a, c)) continue;
            e = a[c];
            d[c] = e;
        }
        for (c in b) {
            if (!s.call(b, c)) continue;
            e = b[c];
            d[c] = e;
        }
        return d;
    };
    k = function(a) {
        var b, c, d, e;
        a += "";
        c = a.split(".");
        d = c[0];
        e = "";
        if (c.length > 1) e = "." + c[1];
        b = /(\d+)(\d{3})/;
        while (b.test(d)) d = d.replace(b, "$1" + "," + "$2");
        return d + e;
    };
    l = function(a) {
        if ("#" === a.charAt(0)) return a.substring(1, 7);
        return a;
    };
    j = function() {
        a.prototype.animationSpeed = 32;
        function a(a, b) {
            if (null == a) a = true;
            this.clear = null != b ? b : true;
            if (a) AnimationUpdater.add(this);
        }
        a.prototype.update = function(a) {
            var b;
            if (null == a) a = false;
            if (a || this.displayedValue !== this.value) {
                if (this.ctx && this.clear) this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
                b = this.value - this.displayedValue;
                if (Math.abs(b / this.animationSpeed) <= .001) this.displayedValue = this.value; else this.displayedValue = this.displayedValue + b / this.animationSpeed;
                this.render();
                return true;
            }
            return false;
        };
        return a;
    }();
    e = function(a) {
        t(b, a);
        function b() {
            q = b.__super__.constructor.apply(this, arguments);
            return q;
        }
        b.prototype.displayScale = 1;
        b.prototype.setTextField = function(a) {
            return this.textField = a instanceof i ? a : new i(a);
        };
        b.prototype.setMinValue = function(a, b) {
            var c, d, e, f, g;
            this.minValue = a;
            if (null == b) b = true;
            if (b) {
                this.displayedValue = this.minValue;
                f = this.gp || [];
                g = [];
                for (d = 0, e = f.length; d < e; d++) {
                    c = f[d];
                    g.push(c.displayedValue = this.minValue);
                }
                return g;
            }
        };
        b.prototype.setOptions = function(a) {
            if (null == a) a = null;
            this.options = n(this.options, a);
            if (this.textField) this.textField.el.style.fontSize = a.fontSize + "px";
            if (this.options.angle > .5) this.gauge.options.angle = .5;
            this.configDisplayScale();
            return this;
        };
        b.prototype.configDisplayScale = function() {
            var a, b, c, d, e;
            d = this.displayScale;
            if (false === this.options.highDpiSupport) delete this.displayScale; else {
                b = window.devicePixelRatio || 1;
                a = this.ctx.webkitBackingStorePixelRatio || this.ctx.mozBackingStorePixelRatio || this.ctx.msBackingStorePixelRatio || this.ctx.oBackingStorePixelRatio || this.ctx.backingStorePixelRatio || 1;
                this.displayScale = b / a;
            }
            if (this.displayScale !== d) {
                e = this.canvas.G__width || this.canvas.width;
                c = this.canvas.G__height || this.canvas.height;
                this.canvas.width = e * this.displayScale;
                this.canvas.height = c * this.displayScale;
                this.canvas.style.width = "" + e + "px";
                this.canvas.style.height = "" + c + "px";
                this.canvas.G__width = e;
                this.canvas.G__height = c;
            }
            return this;
        };
        return b;
    }(j);
    i = function() {
        function a(a) {
            this.el = a;
        }
        a.prototype.render = function(a) {
            return this.el.innerHTML = m(a.displayedValue);
        };
        return a;
    }();
    a = function(a) {
        t(b, a);
        b.prototype.displayedValue = 0;
        b.prototype.value = 0;
        b.prototype.setVal = function(a) {
            return this.value = 1 * a;
        };
        function b(a, b) {
            this.elem = a;
            this.text = null != b ? b : false;
            this.value = 1 * this.elem.innerHTML;
            if (this.text) this.value = 0;
        }
        b.prototype.render = function() {
            var a;
            if (this.text) a = o(this.displayedValue.toFixed(0)); else a = k(m(this.displayedValue));
            return this.elem.innerHTML = a;
        };
        return b;
    }(j);
    b = {
        create: function(b) {
            var c, d, e, f;
            d = [];
            for (e = 0, f = b.length; e < f; e++) {
                c = b[e];
                d.push(new a(c));
            }
            return d;
        }
    };
    h = function(a) {
        t(b, a);
        b.prototype.displayedValue = 0;
        b.prototype.value = 0;
        b.prototype.options = {
            strokeWidth: .035,
            length: .1,
            color: "#000000"
        };
        function b(a) {
            this.gauge = a;
            this.ctx = this.gauge.ctx;
            this.canvas = this.gauge.canvas;
            b.__super__.constructor.call(this, false, false);
            this.setOptions();
        }
        b.prototype.setOptions = function(a) {
            if (null == a) a = null;
            p(this.options, a);
            this.length = this.canvas.height * this.options.length;
            this.strokeWidth = this.canvas.height * this.options.strokeWidth;
            this.maxValue = this.gauge.maxValue;
            this.minValue = this.gauge.minValue;
            this.animationSpeed = this.gauge.animationSpeed;
            return this.options.angle = this.gauge.options.angle;
        };
        b.prototype.render = function() {
            var a, b, c, d, e, f, g, h, i;
            a = this.gauge.getAngle.call(this, this.displayedValue);
            b = this.canvas.width / 2;
            c = .9 * this.canvas.height;
            h = Math.round(b + this.length * Math.cos(a));
            i = Math.round(c + this.length * Math.sin(a));
            f = Math.round(b + this.strokeWidth * Math.cos(a - Math.PI / 2));
            g = Math.round(c + this.strokeWidth * Math.sin(a - Math.PI / 2));
            d = Math.round(b + this.strokeWidth * Math.cos(a + Math.PI / 2));
            e = Math.round(c + this.strokeWidth * Math.sin(a + Math.PI / 2));
            this.ctx.fillStyle = this.options.color;
            this.ctx.beginPath();
            this.ctx.arc(b, c, this.strokeWidth, 0, 2 * Math.PI, true);
            this.ctx.fill();
            this.ctx.beginPath();
            this.ctx.moveTo(f, g);
            this.ctx.lineTo(h, i);
            this.ctx.lineTo(d, e);
            return this.ctx.fill();
        };
        return b;
    }(j);
    c = function() {
        function a(a) {
            this.elem = a;
        }
        a.prototype.updateValues = function(a) {
            this.value = a[0];
            this.maxValue = a[1];
            this.avgValue = a[2];
            return this.render();
        };
        a.prototype.render = function() {
            var a, b;
            if (this.textField) this.textField.text(m(this.value));
            if (0 === this.maxValue) this.maxValue = 2 * this.avgValue;
            b = this.value / this.maxValue * 100;
            a = this.avgValue / this.maxValue * 100;
            $(".bar-value", this.elem).css({
                width: b + "%"
            });
            return $(".typical-value", this.elem).css({
                width: a + "%"
            });
        };
        return a;
    }();
    g = function(a) {
        t(b, a);
        b.prototype.elem = null;
        b.prototype.value = [ 20 ];
        b.prototype.maxValue = 80;
        b.prototype.minValue = 0;
        b.prototype.displayedAngle = 0;
        b.prototype.displayedValue = 0;
        b.prototype.lineWidth = 40;
        b.prototype.paddingBottom = .1;
        b.prototype.percentColors = null;
        b.prototype.options = {
            colorStart: "#36A9E1",
            colorStop: void 0,
            gradientType: 0,
            strokeColor: "#e0e0e0",
            pointer: {
                length: .72,
                strokeWidth: .035
            },
            angle: .0,
            lineWidth: .10,
            fontSize: 40,
            limitMax: false
        };
        function b(a) {
            this.canvas = a;
            b.__super__.constructor.call(this);
            this.percentColors = null;
            if ("undefined" !== typeof G_vmlCanvasManager) this.canvas = window.G_vmlCanvasManager.initElement(this.canvas);
            this.ctx = this.canvas.getContext("2d");
            this.gp = [ new h(this) ];
            this.setOptions();
            this.render();
        }
        b.prototype.setOptions = function(a) {
            var c, d, e, f;
            if (null == a) a = null;
            b.__super__.setOptions.call(this, a);
            this.configPercentColors();
            this.lineWidth = this.canvas.height * (1 - this.paddingBottom) * this.options.lineWidth;
            this.radius = this.canvas.height * (1 - this.paddingBottom) - this.lineWidth;
            this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
            this.render();
            f = this.gp;
            for (d = 0, e = f.length; d < e; d++) {
                c = f[d];
                c.setOptions(this.options.pointer);
                c.render();
            }
            return this;
        };
        b.prototype.configPercentColors = function() {
            var a, b, c, d, e, f, g;
            this.percentColors = null;
            if (this.options.percentColors !== void 0) {
                this.percentColors = new Array();
                g = [];
                for (c = e = 0, f = this.options.percentColors.length - 1; 0 <= f ? e <= f : e >= f; c = 0 <= f ? ++e : --e) {
                    d = parseInt(l(this.options.percentColors[c][1]).substring(0, 2), 16);
                    b = parseInt(l(this.options.percentColors[c][1]).substring(2, 4), 16);
                    a = parseInt(l(this.options.percentColors[c][1]).substring(4, 6), 16);
                    g.push(this.percentColors[c] = {
                        pct: this.options.percentColors[c][0],
                        color: {
                            r: d,
                            g: b,
                            b: a
                        }
                    });
                }
                return g;
            }
        };
        b.prototype.set = function(a) {
            var b, c, d, e, f, g, i;
            if (!(a instanceof Array)) a = [ a ];
            if (a.length > this.gp.length) for (b = e = 0, i = a.length - this.gp.length; 0 <= i ? e < i : e > i; b = 0 <= i ? ++e : --e) this.gp.push(new h(this));
            b = 0;
            c = false;
            for (f = 0, g = a.length; f < g; f++) {
                d = a[f];
                if (d > this.maxValue) {
                    this.maxValue = 1.1 * this.value;
                    c = true;
                }
                this.gp[b].value = d;
                this.gp[b++].setOptions({
                    maxValue: this.maxValue,
                    angle: this.options.angle
                });
            }
            this.value = a[a.length - 1];
            if (c) {
                if (!this.options.limitMax) return AnimationUpdater.run();
            } else return AnimationUpdater.run();
        };
        b.prototype.getAngle = function(a) {
            return (1 + this.options.angle) * Math.PI + (a - this.minValue) / (this.maxValue - this.minValue) * (1 - 2 * this.options.angle) * Math.PI;
        };
        b.prototype.getColorForPercentage = function(a, b) {
            var c, d, e, f, g, h, i;
            if (0 === a) c = this.percentColors[0].color; else {
                c = this.percentColors[this.percentColors.length - 1].color;
                for (e = h = 0, i = this.percentColors.length - 1; 0 <= i ? h <= i : h >= i; e = 0 <= i ? ++h : --h) if (a <= this.percentColors[e].pct) {
                    if (true === b) {
                        g = this.percentColors[e - 1];
                        d = this.percentColors[e];
                        f = (a - g.pct) / (d.pct - g.pct);
                        c = {
                            r: Math.floor(g.color.r * (1 - f) + d.color.r * f),
                            g: Math.floor(g.color.g * (1 - f) + d.color.g * f),
                            b: Math.floor(g.color.b * (1 - f) + d.color.b * f)
                        };
                    } else c = this.percentColors[e].color;
                    break;
                }
            }
            return "rgb(" + [ c.r, c.g, c.b ].join(",") + ")";
        };
        b.prototype.getColorForValue = function(a, b) {
            var c;
            c = (a - this.minValue) / (this.maxValue - this.minValue);
            return this.getColorForPercentage(c, b);
        };
        b.prototype.render = function() {
            var a, b, c, d, e, f, g, h, i;
            e = this.canvas.width / 2;
            d = this.canvas.height * (1 - this.paddingBottom);
            a = this.getAngle(this.displayedValue);
            if (this.textField) this.textField.render(this);
            this.ctx.lineCap = "butt";
            if (this.options.customFillStyle !== void 0) b = this.options.customFillStyle(this); else if (null !== this.percentColors) b = this.getColorForValue(this.displayedValue, true); else if (this.options.colorStop !== void 0) {
                if (0 === this.options.gradientType) b = this.ctx.createRadialGradient(e, d, 9, e, d, 70); else b = this.ctx.createLinearGradient(0, 0, e, 0);
                b.addColorStop(0, this.options.colorStart);
                b.addColorStop(1, this.options.colorStop);
            } else b = this.options.colorStart;
            this.ctx.strokeStyle = b;
            this.ctx.beginPath();
            this.ctx.arc(e, d, this.radius, (1 + this.options.angle) * Math.PI, a, false);
            this.ctx.lineWidth = this.lineWidth;
            this.ctx.stroke();
            this.ctx.strokeStyle = this.options.strokeColor;
            this.ctx.beginPath();
            this.ctx.arc(e, d, this.radius, a, (2 - this.options.angle) * Math.PI, false);
            this.ctx.stroke();
            h = this.gp;
            i = [];
            for (f = 0, g = h.length; f < g; f++) {
                c = h[f];
                i.push(c.update(true));
            }
            return i;
        };
        return b;
    }(e);
    d = function(a) {
        t(b, a);
        b.prototype.lineWidth = 15;
        b.prototype.displayedValue = 0;
        b.prototype.value = 33;
        b.prototype.maxValue = 80;
        b.prototype.minValue = 0;
        b.prototype.options = {
            lineWidth: .08,
            colorStart: "#6f6ea0",
            colorStop: "#36A9E1",
            strokeColor: "#eeeeee",
            shadowColor: "#e0e0e0",
            angle: .50
        };
        function b(a) {
            this.canvas = a;
            b.__super__.constructor.call(this);
            if ("undefined" !== typeof G_vmlCanvasManager) this.canvas = window.G_vmlCanvasManager.initElement(this.canvas);
            this.ctx = this.canvas.getContext("2d");
            this.setOptions();
            this.render();
        }
        b.prototype.getAngle = function(a) {
            return (1 - this.options.angle) * Math.PI + (a - this.minValue) / (this.maxValue - this.minValue) * (2 + this.options.angle - (1 - this.options.angle)) * Math.PI;
        };
        b.prototype.setOptions = function(a) {
            if (null == a) a = null;
            b.__super__.setOptions.call(this, a);
            this.lineWidth = this.canvas.height * this.options.lineWidth;
            this.radius = this.canvas.height / 2 - this.lineWidth / 2;
            return this;
        };
        b.prototype.set = function(a) {
            this.value = a;
            if (this.value > this.maxValue) this.maxValue = 1.1 * this.value;
            return AnimationUpdater.run();
        };
        b.prototype.render = function() {
            var a, b, c, d, e, f;
            a = this.getAngle(this.displayedValue);
            f = this.canvas.width / 2;
            c = this.canvas.height / 2;
            if (this.textField) this.textField.render(this);
            b = this.ctx.createRadialGradient(f, c, 39, f, c, 70);
            b.addColorStop(0, this.options.colorStart);
            b.addColorStop(1, this.options.colorStop);
            d = this.radius - this.lineWidth / 2;
            e = this.radius + this.lineWidth / 2;
            this.ctx.strokeStyle = this.options.strokeColor;
            this.ctx.beginPath();
            this.ctx.arc(f, c, this.radius, (1 - this.options.angle) * Math.PI, (2 + this.options.angle) * Math.PI, false);
            this.ctx.lineWidth = this.lineWidth;
            this.ctx.lineCap = "round";
            this.ctx.stroke();
            this.ctx.strokeStyle = b;
            this.ctx.beginPath();
            this.ctx.arc(f, c, this.radius, (1 - this.options.angle) * Math.PI, a, false);
            return this.ctx.stroke();
        };
        return b;
    }(e);
    f = function(a) {
        t(b, a);
        function b() {
            r = b.__super__.constructor.apply(this, arguments);
            return r;
        }
        b.prototype.strokeGradient = function(a, b, c, d) {
            var e;
            e = this.ctx.createRadialGradient(a, b, c, a, b, d);
            e.addColorStop(0, this.options.shadowColor);
            e.addColorStop(.12, this.options._orgStrokeColor);
            e.addColorStop(.88, this.options._orgStrokeColor);
            e.addColorStop(1, this.options.shadowColor);
            return e;
        };
        b.prototype.setOptions = function(a) {
            var c, d, e, f;
            if (null == a) a = null;
            b.__super__.setOptions.call(this, a);
            f = this.canvas.width / 2;
            c = this.canvas.height / 2;
            d = this.radius - this.lineWidth / 2;
            e = this.radius + this.lineWidth / 2;
            this.options._orgStrokeColor = this.options.strokeColor;
            this.options.strokeColor = this.strokeGradient(f, c, d, e);
            return this;
        };
        return b;
    }(d);
    window.AnimationUpdater = {
        elements: [],
        animId: null,
        addAll: function(a) {
            var b, c, d, e;
            e = [];
            for (c = 0, d = a.length; c < d; c++) {
                b = a[c];
                e.push(AnimationUpdater.elements.push(b));
            }
            return e;
        },
        add: function(a) {
            return AnimationUpdater.elements.push(a);
        },
        run: function() {
            var a, b, c, d, e;
            a = true;
            e = AnimationUpdater.elements;
            for (c = 0, d = e.length; c < d; c++) {
                b = e[c];
                if (b.update()) a = false;
            }
            if (!a) return AnimationUpdater.animId = requestAnimationFrame(AnimationUpdater.run); else return cancelAnimationFrame(AnimationUpdater.animId);
        }
    };
    window.Gauge = g;
    window.Donut = f;
    window.BaseDonut = d;
    window.TextRenderer = i;
}).call(this);