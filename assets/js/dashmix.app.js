/*!
 * dashmix - v5.5.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2022
 */
/*! For license information please see app.js.LICENSE.txt */
!(function () {
  var e = {
      1807: function (e) {
        var t = !(
          "undefined" == typeof window ||
          !window.document ||
          !window.document.createElement
        );
        e.exports = t;
      },
      9662: function (e, t, i) {
        var n = i(614),
          r = i(6330),
          s = TypeError;
        e.exports = function (e) {
          if (n(e)) return e;
          throw s(r(e) + " is not a function");
        };
      },
      6077: function (e, t, i) {
        var n = i(614),
          r = String,
          s = TypeError;
        e.exports = function (e) {
          if ("object" == typeof e || n(e)) return e;
          throw s("Can't set " + r(e) + " as a prototype");
        };
      },
      1223: function (e, t, i) {
        var n = i(5112),
          r = i(30),
          s = i(3070).f,
          o = n("unscopables"),
          a = Array.prototype;
        null == a[o] && s(a, o, { configurable: !0, value: r(null) }),
          (e.exports = function (e) {
            a[o][e] = !0;
          });
      },
      1530: function (e, t, i) {
        "use strict";
        var n = i(8710).charAt;
        e.exports = function (e, t, i) {
          return t + (i ? n(e, t).length : 1);
        };
      },
      5787: function (e, t, i) {
        var n = i(7976),
          r = TypeError;
        e.exports = function (e, t) {
          if (n(t, e)) return e;
          throw r("Incorrect invocation");
        };
      },
      9670: function (e, t, i) {
        var n = i(111),
          r = String,
          s = TypeError;
        e.exports = function (e) {
          if (n(e)) return e;
          throw s(r(e) + " is not an object");
        };
      },
      7556: function (e, t, i) {
        var n = i(7293);
        e.exports = n(function () {
          if ("function" == typeof ArrayBuffer) {
            var e = new ArrayBuffer(8);
            Object.isExtensible(e) &&
              Object.defineProperty(e, "a", { value: 8 });
          }
        });
      },
      8533: function (e, t, i) {
        "use strict";
        var n = i(2092).forEach,
          r = i(9341)("forEach");
        e.exports = r
          ? [].forEach
          : function (e) {
              return n(this, e, arguments.length > 1 ? arguments[1] : void 0);
            };
      },
      1318: function (e, t, i) {
        var n = i(5656),
          r = i(1400),
          s = i(6244),
          o = function (e) {
            return function (t, i, o) {
              var a,
                l = n(t),
                c = s(l),
                u = r(o, c);
              if (e && i != i) {
                for (; c > u; ) if ((a = l[u++]) != a) return !0;
              } else
                for (; c > u; u++)
                  if ((e || u in l) && l[u] === i) return e || u || 0;
              return !e && -1;
            };
          };
        e.exports = { includes: o(!0), indexOf: o(!1) };
      },
      2092: function (e, t, i) {
        var n = i(9974),
          r = i(1702),
          s = i(8361),
          o = i(7908),
          a = i(6244),
          l = i(5417),
          c = r([].push),
          u = function (e) {
            var t = 1 == e,
              i = 2 == e,
              r = 3 == e,
              u = 4 == e,
              d = 6 == e,
              h = 7 == e,
              f = 5 == e || d;
            return function (p, g, m, v) {
              for (
                var b,
                  _,
                  y = o(p),
                  w = s(y),
                  x = n(g, m),
                  E = a(w),
                  k = 0,
                  S = v || l,
                  A = t ? S(p, E) : i || h ? S(p, 0) : void 0;
                E > k;
                k++
              )
                if ((f || k in w) && ((_ = x((b = w[k]), k, y)), e))
                  if (t) A[k] = _;
                  else if (_)
                    switch (e) {
                      case 3:
                        return !0;
                      case 5:
                        return b;
                      case 6:
                        return k;
                      case 2:
                        c(A, b);
                    }
                  else
                    switch (e) {
                      case 4:
                        return !1;
                      case 7:
                        c(A, b);
                    }
              return d ? -1 : r || u ? u : A;
            };
          };
        e.exports = {
          forEach: u(0),
          map: u(1),
          filter: u(2),
          some: u(3),
          every: u(4),
          find: u(5),
          findIndex: u(6),
          filterReject: u(7),
        };
      },
      1194: function (e, t, i) {
        var n = i(7293),
          r = i(5112),
          s = i(7392),
          o = r("species");
        e.exports = function (e) {
          return (
            s >= 51 ||
            !n(function () {
              var t = [];
              return (
                ((t.constructor = {})[o] = function () {
                  return { foo: 1 };
                }),
                1 !== t[e](Boolean).foo
              );
            })
          );
        };
      },
      9341: function (e, t, i) {
        "use strict";
        var n = i(7293);
        e.exports = function (e, t) {
          var i = [][e];
          return (
            !!i &&
            n(function () {
              i.call(
                null,
                t ||
                  function () {
                    return 1;
                  },
                1
              );
            })
          );
        };
      },
      3671: function (e, t, i) {
        var n = i(9662),
          r = i(7908),
          s = i(8361),
          o = i(6244),
          a = TypeError,
          l = function (e) {
            return function (t, i, l, c) {
              n(i);
              var u = r(t),
                d = s(u),
                h = o(u),
                f = e ? h - 1 : 0,
                p = e ? -1 : 1;
              if (l < 2)
                for (;;) {
                  if (f in d) {
                    (c = d[f]), (f += p);
                    break;
                  }
                  if (((f += p), e ? f < 0 : h <= f))
                    throw a("Reduce of empty array with no initial value");
                }
              for (; e ? f >= 0 : h > f; f += p)
                f in d && (c = i(c, d[f], f, u));
              return c;
            };
          };
        e.exports = { left: l(!1), right: l(!0) };
      },
      1589: function (e, t, i) {
        var n = i(1400),
          r = i(6244),
          s = i(6135),
          o = Array,
          a = Math.max;
        e.exports = function (e, t, i) {
          for (
            var l = r(e),
              c = n(t, l),
              u = n(void 0 === i ? l : i, l),
              d = o(a(u - c, 0)),
              h = 0;
            c < u;
            c++, h++
          )
            s(d, h, e[c]);
          return (d.length = h), d;
        };
      },
      7475: function (e, t, i) {
        var n = i(3157),
          r = i(4411),
          s = i(111),
          o = i(5112)("species"),
          a = Array;
        e.exports = function (e) {
          var t;
          return (
            n(e) &&
              ((t = e.constructor),
              ((r(t) && (t === a || n(t.prototype))) ||
                (s(t) && null === (t = t[o]))) &&
                (t = void 0)),
            void 0 === t ? a : t
          );
        };
      },
      5417: function (e, t, i) {
        var n = i(7475);
        e.exports = function (e, t) {
          return new (n(e))(0 === t ? 0 : t);
        };
      },
      7072: function (e, t, i) {
        var n = i(5112)("iterator"),
          r = !1;
        try {
          var s = 0,
            o = {
              next: function () {
                return { done: !!s++ };
              },
              return: function () {
                r = !0;
              },
            };
          (o[n] = function () {
            return this;
          }),
            Array.from(o, function () {
              throw 2;
            });
        } catch (e) {}
        e.exports = function (e, t) {
          if (!t && !r) return !1;
          var i = !1;
          try {
            var s = {};
            (s[n] = function () {
              return {
                next: function () {
                  return { done: (i = !0) };
                },
              };
            }),
              e(s);
          } catch (e) {}
          return i;
        };
      },
      4326: function (e, t, i) {
        var n = i(1702),
          r = n({}.toString),
          s = n("".slice);
        e.exports = function (e) {
          return s(r(e), 8, -1);
        };
      },
      648: function (e, t, i) {
        var n = i(1694),
          r = i(614),
          s = i(4326),
          o = i(5112)("toStringTag"),
          a = Object,
          l =
            "Arguments" ==
            s(
              (function () {
                return arguments;
              })()
            );
        e.exports = n
          ? s
          : function (e) {
              var t, i, n;
              return void 0 === e
                ? "Undefined"
                : null === e
                ? "Null"
                : "string" ==
                  typeof (i = (function (e, t) {
                    try {
                      return e[t];
                    } catch (e) {}
                  })((t = a(e)), o))
                ? i
                : l
                ? s(t)
                : "Object" == (n = s(t)) && r(t.callee)
                ? "Arguments"
                : n;
            };
      },
      9320: function (e, t, i) {
        "use strict";
        var n = i(1702),
          r = i(9190),
          s = i(2423).getWeakData,
          o = i(5787),
          a = i(9670),
          l = i(8554),
          c = i(111),
          u = i(408),
          d = i(2092),
          h = i(2597),
          f = i(9909),
          p = f.set,
          g = f.getterFor,
          m = d.find,
          v = d.findIndex,
          b = n([].splice),
          _ = 0,
          y = function (e) {
            return e.frozen || (e.frozen = new w());
          },
          w = function () {
            this.entries = [];
          },
          x = function (e, t) {
            return m(e.entries, function (e) {
              return e[0] === t;
            });
          };
        (w.prototype = {
          get: function (e) {
            var t = x(this, e);
            if (t) return t[1];
          },
          has: function (e) {
            return !!x(this, e);
          },
          set: function (e, t) {
            var i = x(this, e);
            i ? (i[1] = t) : this.entries.push([e, t]);
          },
          delete: function (e) {
            var t = v(this.entries, function (t) {
              return t[0] === e;
            });
            return ~t && b(this.entries, t, 1), !!~t;
          },
        }),
          (e.exports = {
            getConstructor: function (e, t, i, n) {
              var d = e(function (e, r) {
                  o(e, f),
                    p(e, { type: t, id: _++, frozen: void 0 }),
                    l(r) || u(r, e[n], { that: e, AS_ENTRIES: i });
                }),
                f = d.prototype,
                m = g(t),
                v = function (e, t, i) {
                  var n = m(e),
                    r = s(a(t), !0);
                  return !0 === r ? y(n).set(t, i) : (r[n.id] = i), e;
                };
              return (
                r(f, {
                  delete: function (e) {
                    var t = m(this);
                    if (!c(e)) return !1;
                    var i = s(e);
                    return !0 === i
                      ? y(t).delete(e)
                      : i && h(i, t.id) && delete i[t.id];
                  },
                  has: function (e) {
                    var t = m(this);
                    if (!c(e)) return !1;
                    var i = s(e);
                    return !0 === i ? y(t).has(e) : i && h(i, t.id);
                  },
                }),
                r(
                  f,
                  i
                    ? {
                        get: function (e) {
                          var t = m(this);
                          if (c(e)) {
                            var i = s(e);
                            return !0 === i
                              ? y(t).get(e)
                              : i
                              ? i[t.id]
                              : void 0;
                          }
                        },
                        set: function (e, t) {
                          return v(this, e, t);
                        },
                      }
                    : {
                        add: function (e) {
                          return v(this, e, !0);
                        },
                      }
                ),
                d
              );
            },
          });
      },
      7710: function (e, t, i) {
        "use strict";
        var n = i(2109),
          r = i(7854),
          s = i(1702),
          o = i(4705),
          a = i(8052),
          l = i(2423),
          c = i(408),
          u = i(5787),
          d = i(614),
          h = i(8554),
          f = i(111),
          p = i(7293),
          g = i(7072),
          m = i(8003),
          v = i(9587);
        e.exports = function (e, t, i) {
          var b = -1 !== e.indexOf("Map"),
            _ = -1 !== e.indexOf("Weak"),
            y = b ? "set" : "add",
            w = r[e],
            x = w && w.prototype,
            E = w,
            k = {},
            S = function (e) {
              var t = s(x[e]);
              a(
                x,
                e,
                "add" == e
                  ? function (e) {
                      return t(this, 0 === e ? 0 : e), this;
                    }
                  : "delete" == e
                  ? function (e) {
                      return !(_ && !f(e)) && t(this, 0 === e ? 0 : e);
                    }
                  : "get" == e
                  ? function (e) {
                      return _ && !f(e) ? void 0 : t(this, 0 === e ? 0 : e);
                    }
                  : "has" == e
                  ? function (e) {
                      return !(_ && !f(e)) && t(this, 0 === e ? 0 : e);
                    }
                  : function (e, i) {
                      return t(this, 0 === e ? 0 : e, i), this;
                    }
              );
            };
          if (
            o(
              e,
              !d(w) ||
                !(
                  _ ||
                  (x.forEach &&
                    !p(function () {
                      new w().entries().next();
                    }))
                )
            )
          )
            (E = i.getConstructor(t, e, b, y)), l.enable();
          else if (o(e, !0)) {
            var A = new E(),
              L = A[y](_ ? {} : -0, 1) != A,
              O = p(function () {
                A.has(1);
              }),
              j = g(function (e) {
                new w(e);
              }),
              C =
                !_ &&
                p(function () {
                  for (var e = new w(), t = 5; t--; ) e[y](t, t);
                  return !e.has(-0);
                });
            j ||
              (((E = t(function (e, t) {
                u(e, x);
                var i = v(new w(), e, E);
                return h(t) || c(t, i[y], { that: i, AS_ENTRIES: b }), i;
              })).prototype = x),
              (x.constructor = E)),
              (O || C) && (S("delete"), S("has"), b && S("get")),
              (C || L) && S(y),
              _ && x.clear && delete x.clear;
          }
          return (
            (k[e] = E),
            n({ global: !0, constructor: !0, forced: E != w }, k),
            m(E, e),
            _ || i.setStrong(E, e, b),
            E
          );
        };
      },
      9920: function (e, t, i) {
        var n = i(2597),
          r = i(3887),
          s = i(1236),
          o = i(3070);
        e.exports = function (e, t, i) {
          for (var a = r(t), l = o.f, c = s.f, u = 0; u < a.length; u++) {
            var d = a[u];
            n(e, d) || (i && n(i, d)) || l(e, d, c(t, d));
          }
        };
      },
      8544: function (e, t, i) {
        var n = i(7293);
        e.exports = !n(function () {
          function e() {}
          return (
            (e.prototype.constructor = null),
            Object.getPrototypeOf(new e()) !== e.prototype
          );
        });
      },
      6178: function (e) {
        e.exports = function (e, t) {
          return { value: e, done: t };
        };
      },
      8880: function (e, t, i) {
        var n = i(9781),
          r = i(3070),
          s = i(9114);
        e.exports = n
          ? function (e, t, i) {
              return r.f(e, t, s(1, i));
            }
          : function (e, t, i) {
              return (e[t] = i), e;
            };
      },
      9114: function (e) {
        e.exports = function (e, t) {
          return {
            enumerable: !(1 & e),
            configurable: !(2 & e),
            writable: !(4 & e),
            value: t,
          };
        };
      },
      6135: function (e, t, i) {
        "use strict";
        var n = i(4948),
          r = i(3070),
          s = i(9114);
        e.exports = function (e, t, i) {
          var o = n(t);
          o in e ? r.f(e, o, s(0, i)) : (e[o] = i);
        };
      },
      8052: function (e, t, i) {
        var n = i(614),
          r = i(3070),
          s = i(6339),
          o = i(3072);
        e.exports = function (e, t, i, a) {
          a || (a = {});
          var l = a.enumerable,
            c = void 0 !== a.name ? a.name : t;
          if ((n(i) && s(i, c, a), a.global)) l ? (e[t] = i) : o(t, i);
          else {
            try {
              a.unsafe ? e[t] && (l = !0) : delete e[t];
            } catch (e) {}
            l
              ? (e[t] = i)
              : r.f(e, t, {
                  value: i,
                  enumerable: !1,
                  configurable: !a.nonConfigurable,
                  writable: !a.nonWritable,
                });
          }
          return e;
        };
      },
      9190: function (e, t, i) {
        var n = i(8052);
        e.exports = function (e, t, i) {
          for (var r in t) n(e, r, t[r], i);
          return e;
        };
      },
      3072: function (e, t, i) {
        var n = i(7854),
          r = Object.defineProperty;
        e.exports = function (e, t) {
          try {
            r(n, e, { value: t, configurable: !0, writable: !0 });
          } catch (i) {
            n[e] = t;
          }
          return t;
        };
      },
      9781: function (e, t, i) {
        var n = i(7293);
        e.exports = !n(function () {
          return (
            7 !=
            Object.defineProperty({}, 1, {
              get: function () {
                return 7;
              },
            })[1]
          );
        });
      },
      4154: function (e) {
        var t = "object" == typeof document && document.all,
          i = void 0 === t && void 0 !== t;
        e.exports = { all: t, IS_HTMLDDA: i };
      },
      317: function (e, t, i) {
        var n = i(7854),
          r = i(111),
          s = n.document,
          o = r(s) && r(s.createElement);
        e.exports = function (e) {
          return o ? s.createElement(e) : {};
        };
      },
      8324: function (e) {
        e.exports = {
          CSSRuleList: 0,
          CSSStyleDeclaration: 0,
          CSSValueList: 0,
          ClientRectList: 0,
          DOMRectList: 0,
          DOMStringList: 0,
          DOMTokenList: 1,
          DataTransferItemList: 0,
          FileList: 0,
          HTMLAllCollection: 0,
          HTMLCollection: 0,
          HTMLFormElement: 0,
          HTMLSelectElement: 0,
          MediaList: 0,
          MimeTypeArray: 0,
          NamedNodeMap: 0,
          NodeList: 1,
          PaintRequestList: 0,
          Plugin: 0,
          PluginArray: 0,
          SVGLengthList: 0,
          SVGNumberList: 0,
          SVGPathSegList: 0,
          SVGPointList: 0,
          SVGStringList: 0,
          SVGTransformList: 0,
          SourceBufferList: 0,
          StyleSheetList: 0,
          TextTrackCueList: 0,
          TextTrackList: 0,
          TouchList: 0,
        };
      },
      8509: function (e, t, i) {
        var n = i(317)("span").classList,
          r = n && n.constructor && n.constructor.prototype;
        e.exports = r === Object.prototype ? void 0 : r;
      },
      5268: function (e, t, i) {
        var n = i(4326),
          r = i(7854);
        e.exports = "process" == n(r.process);
      },
      8113: function (e, t, i) {
        var n = i(5005);
        e.exports = n("navigator", "userAgent") || "";
      },
      7392: function (e, t, i) {
        var n,
          r,
          s = i(7854),
          o = i(8113),
          a = s.process,
          l = s.Deno,
          c = (a && a.versions) || (l && l.version),
          u = c && c.v8;
        u && (r = (n = u.split("."))[0] > 0 && n[0] < 4 ? 1 : +(n[0] + n[1])),
          !r &&
            o &&
            (!(n = o.match(/Edge\/(\d+)/)) || n[1] >= 74) &&
            (n = o.match(/Chrome\/(\d+)/)) &&
            (r = +n[1]),
          (e.exports = r);
      },
      748: function (e) {
        e.exports = [
          "constructor",
          "hasOwnProperty",
          "isPrototypeOf",
          "propertyIsEnumerable",
          "toLocaleString",
          "toString",
          "valueOf",
        ];
      },
      2109: function (e, t, i) {
        var n = i(7854),
          r = i(1236).f,
          s = i(8880),
          o = i(8052),
          a = i(3072),
          l = i(9920),
          c = i(4705);
        e.exports = function (e, t) {
          var i,
            u,
            d,
            h,
            f,
            p = e.target,
            g = e.global,
            m = e.stat;
          if ((i = g ? n : m ? n[p] || a(p, {}) : (n[p] || {}).prototype))
            for (u in t) {
              if (
                ((h = t[u]),
                (d = e.dontCallGetSet ? (f = r(i, u)) && f.value : i[u]),
                !c(g ? u : p + (m ? "." : "#") + u, e.forced) && void 0 !== d)
              ) {
                if (typeof h == typeof d) continue;
                l(h, d);
              }
              (e.sham || (d && d.sham)) && s(h, "sham", !0), o(i, u, h, e);
            }
        };
      },
      7293: function (e) {
        e.exports = function (e) {
          try {
            return !!e();
          } catch (e) {
            return !0;
          }
        };
      },
      7007: function (e, t, i) {
        "use strict";
        i(4916);
        var n = i(1470),
          r = i(8052),
          s = i(2261),
          o = i(7293),
          a = i(5112),
          l = i(8880),
          c = a("species"),
          u = RegExp.prototype;
        e.exports = function (e, t, i, d) {
          var h = a(e),
            f = !o(function () {
              var t = {};
              return (
                (t[h] = function () {
                  return 7;
                }),
                7 != ""[e](t)
              );
            }),
            p =
              f &&
              !o(function () {
                var t = !1,
                  i = /a/;
                return (
                  "split" === e &&
                    (((i = {}).constructor = {}),
                    (i.constructor[c] = function () {
                      return i;
                    }),
                    (i.flags = ""),
                    (i[h] = /./[h])),
                  (i.exec = function () {
                    return (t = !0), null;
                  }),
                  i[h](""),
                  !t
                );
              });
          if (!f || !p || i) {
            var g = n(/./[h]),
              m = t(h, ""[e], function (e, t, i, r, o) {
                var a = n(e),
                  l = t.exec;
                return l === s || l === u.exec
                  ? f && !o
                    ? { done: !0, value: g(t, i, r) }
                    : { done: !0, value: a(i, t, r) }
                  : { done: !1 };
              });
            r(String.prototype, e, m[0]), r(u, h, m[1]);
          }
          d && l(u[h], "sham", !0);
        };
      },
      6677: function (e, t, i) {
        var n = i(7293);
        e.exports = !n(function () {
          return Object.isExtensible(Object.preventExtensions({}));
        });
      },
      2104: function (e, t, i) {
        var n = i(4374),
          r = Function.prototype,
          s = r.apply,
          o = r.call;
        e.exports =
          ("object" == typeof Reflect && Reflect.apply) ||
          (n
            ? o.bind(s)
            : function () {
                return o.apply(s, arguments);
              });
      },
      9974: function (e, t, i) {
        var n = i(1470),
          r = i(9662),
          s = i(4374),
          o = n(n.bind);
        e.exports = function (e, t) {
          return (
            r(e),
            void 0 === t
              ? e
              : s
              ? o(e, t)
              : function () {
                  return e.apply(t, arguments);
                }
          );
        };
      },
      4374: function (e, t, i) {
        var n = i(7293);
        e.exports = !n(function () {
          var e = function () {}.bind();
          return "function" != typeof e || e.hasOwnProperty("prototype");
        });
      },
      6916: function (e, t, i) {
        var n = i(4374),
          r = Function.prototype.call;
        e.exports = n
          ? r.bind(r)
          : function () {
              return r.apply(r, arguments);
            };
      },
      6530: function (e, t, i) {
        var n = i(9781),
          r = i(2597),
          s = Function.prototype,
          o = n && Object.getOwnPropertyDescriptor,
          a = r(s, "name"),
          l = a && "something" === function () {}.name,
          c = a && (!n || (n && o(s, "name").configurable));
        e.exports = { EXISTS: a, PROPER: l, CONFIGURABLE: c };
      },
      1470: function (e, t, i) {
        var n = i(4326),
          r = i(1702);
        e.exports = function (e) {
          if ("Function" === n(e)) return r(e);
        };
      },
      1702: function (e, t, i) {
        var n = i(4374),
          r = Function.prototype,
          s = r.call,
          o = n && r.bind.bind(s, s);
        e.exports = n
          ? o
          : function (e) {
              return function () {
                return s.apply(e, arguments);
              };
            };
      },
      5005: function (e, t, i) {
        var n = i(7854),
          r = i(614),
          s = function (e) {
            return r(e) ? e : void 0;
          };
        e.exports = function (e, t) {
          return arguments.length < 2 ? s(n[e]) : n[e] && n[e][t];
        };
      },
      1246: function (e, t, i) {
        var n = i(648),
          r = i(8173),
          s = i(8554),
          o = i(7497),
          a = i(5112)("iterator");
        e.exports = function (e) {
          if (!s(e)) return r(e, a) || r(e, "@@iterator") || o[n(e)];
        };
      },
      4121: function (e, t, i) {
        var n = i(6916),
          r = i(9662),
          s = i(9670),
          o = i(6330),
          a = i(1246),
          l = TypeError;
        e.exports = function (e, t) {
          var i = arguments.length < 2 ? a(e) : t;
          if (r(i)) return s(n(i, e));
          throw l(o(e) + " is not iterable");
        };
      },
      8173: function (e, t, i) {
        var n = i(9662),
          r = i(8554);
        e.exports = function (e, t) {
          var i = e[t];
          return r(i) ? void 0 : n(i);
        };
      },
      647: function (e, t, i) {
        var n = i(1702),
          r = i(7908),
          s = Math.floor,
          o = n("".charAt),
          a = n("".replace),
          l = n("".slice),
          c = /\$([$&'`]|\d{1,2}|<[^>]*>)/g,
          u = /\$([$&'`]|\d{1,2})/g;
        e.exports = function (e, t, i, n, d, h) {
          var f = i + e.length,
            p = n.length,
            g = u;
          return (
            void 0 !== d && ((d = r(d)), (g = c)),
            a(h, g, function (r, a) {
              var c;
              switch (o(a, 0)) {
                case "$":
                  return "$";
                case "&":
                  return e;
                case "`":
                  return l(t, 0, i);
                case "'":
                  return l(t, f);
                case "<":
                  c = d[l(a, 1, -1)];
                  break;
                default:
                  var u = +a;
                  if (0 === u) return r;
                  if (u > p) {
                    var h = s(u / 10);
                    return 0 === h
                      ? r
                      : h <= p
                      ? void 0 === n[h - 1]
                        ? o(a, 1)
                        : n[h - 1] + o(a, 1)
                      : r;
                  }
                  c = n[u - 1];
              }
              return void 0 === c ? "" : c;
            })
          );
        };
      },
      7854: function (e, t, i) {
        var n = function (e) {
          return e && e.Math == Math && e;
        };
        e.exports =
          n("object" == typeof globalThis && globalThis) ||
          n("object" == typeof window && window) ||
          n("object" == typeof self && self) ||
          n("object" == typeof i.g && i.g) ||
          (function () {
            return this;
          })() ||
          Function("return this")();
      },
      2597: function (e, t, i) {
        var n = i(1702),
          r = i(7908),
          s = n({}.hasOwnProperty);
        e.exports =
          Object.hasOwn ||
          function (e, t) {
            return s(r(e), t);
          };
      },
      3501: function (e) {
        e.exports = {};
      },
      490: function (e, t, i) {
        var n = i(5005);
        e.exports = n("document", "documentElement");
      },
      4664: function (e, t, i) {
        var n = i(9781),
          r = i(7293),
          s = i(317);
        e.exports =
          !n &&
          !r(function () {
            return (
              7 !=
              Object.defineProperty(s("div"), "a", {
                get: function () {
                  return 7;
                },
              }).a
            );
          });
      },
      8361: function (e, t, i) {
        var n = i(1702),
          r = i(7293),
          s = i(4326),
          o = Object,
          a = n("".split);
        e.exports = r(function () {
          return !o("z").propertyIsEnumerable(0);
        })
          ? function (e) {
              return "String" == s(e) ? a(e, "") : o(e);
            }
          : o;
      },
      9587: function (e, t, i) {
        var n = i(614),
          r = i(111),
          s = i(7674);
        e.exports = function (e, t, i) {
          var o, a;
          return (
            s &&
              n((o = t.constructor)) &&
              o !== i &&
              r((a = o.prototype)) &&
              a !== i.prototype &&
              s(e, a),
            e
          );
        };
      },
      2788: function (e, t, i) {
        var n = i(1702),
          r = i(614),
          s = i(5465),
          o = n(Function.toString);
        r(s.inspectSource) ||
          (s.inspectSource = function (e) {
            return o(e);
          }),
          (e.exports = s.inspectSource);
      },
      2423: function (e, t, i) {
        var n = i(2109),
          r = i(1702),
          s = i(3501),
          o = i(111),
          a = i(2597),
          l = i(3070).f,
          c = i(8006),
          u = i(1156),
          d = i(2050),
          h = i(9711),
          f = i(6677),
          p = !1,
          g = h("meta"),
          m = 0,
          v = function (e) {
            l(e, g, { value: { objectID: "O" + m++, weakData: {} } });
          },
          b = (e.exports = {
            enable: function () {
              (b.enable = function () {}), (p = !0);
              var e = c.f,
                t = r([].splice),
                i = {};
              (i[g] = 1),
                e(i).length &&
                  ((c.f = function (i) {
                    for (var n = e(i), r = 0, s = n.length; r < s; r++)
                      if (n[r] === g) {
                        t(n, r, 1);
                        break;
                      }
                    return n;
                  }),
                  n(
                    { target: "Object", stat: !0, forced: !0 },
                    { getOwnPropertyNames: u.f }
                  ));
            },
            fastKey: function (e, t) {
              if (!o(e))
                return "symbol" == typeof e
                  ? e
                  : ("string" == typeof e ? "S" : "P") + e;
              if (!a(e, g)) {
                if (!d(e)) return "F";
                if (!t) return "E";
                v(e);
              }
              return e[g].objectID;
            },
            getWeakData: function (e, t) {
              if (!a(e, g)) {
                if (!d(e)) return !0;
                if (!t) return !1;
                v(e);
              }
              return e[g].weakData;
            },
            onFreeze: function (e) {
              return f && p && d(e) && !a(e, g) && v(e), e;
            },
          });
        s[g] = !0;
      },
      9909: function (e, t, i) {
        var n,
          r,
          s,
          o = i(4811),
          a = i(7854),
          l = i(111),
          c = i(8880),
          u = i(2597),
          d = i(5465),
          h = i(6200),
          f = i(3501),
          p = "Object already initialized",
          g = a.TypeError,
          m = a.WeakMap;
        if (o || d.state) {
          var v = d.state || (d.state = new m());
          (v.get = v.get),
            (v.has = v.has),
            (v.set = v.set),
            (n = function (e, t) {
              if (v.has(e)) throw g(p);
              return (t.facade = e), v.set(e, t), t;
            }),
            (r = function (e) {
              return v.get(e) || {};
            }),
            (s = function (e) {
              return v.has(e);
            });
        } else {
          var b = h("state");
          (f[b] = !0),
            (n = function (e, t) {
              if (u(e, b)) throw g(p);
              return (t.facade = e), c(e, b, t), t;
            }),
            (r = function (e) {
              return u(e, b) ? e[b] : {};
            }),
            (s = function (e) {
              return u(e, b);
            });
        }
        e.exports = {
          set: n,
          get: r,
          has: s,
          enforce: function (e) {
            return s(e) ? r(e) : n(e, {});
          },
          getterFor: function (e) {
            return function (t) {
              var i;
              if (!l(t) || (i = r(t)).type !== e)
                throw g("Incompatible receiver, " + e + " required");
              return i;
            };
          },
        };
      },
      7659: function (e, t, i) {
        var n = i(5112),
          r = i(7497),
          s = n("iterator"),
          o = Array.prototype;
        e.exports = function (e) {
          return void 0 !== e && (r.Array === e || o[s] === e);
        };
      },
      3157: function (e, t, i) {
        var n = i(4326);
        e.exports =
          Array.isArray ||
          function (e) {
            return "Array" == n(e);
          };
      },
      614: function (e, t, i) {
        var n = i(4154),
          r = n.all;
        e.exports = n.IS_HTMLDDA
          ? function (e) {
              return "function" == typeof e || e === r;
            }
          : function (e) {
              return "function" == typeof e;
            };
      },
      4411: function (e, t, i) {
        var n = i(1702),
          r = i(7293),
          s = i(614),
          o = i(648),
          a = i(5005),
          l = i(2788),
          c = function () {},
          u = [],
          d = a("Reflect", "construct"),
          h = /^\s*(?:class|function)\b/,
          f = n(h.exec),
          p = !h.exec(c),
          g = function (e) {
            if (!s(e)) return !1;
            try {
              return d(c, u, e), !0;
            } catch (e) {
              return !1;
            }
          },
          m = function (e) {
            if (!s(e)) return !1;
            switch (o(e)) {
              case "AsyncFunction":
              case "GeneratorFunction":
              case "AsyncGeneratorFunction":
                return !1;
            }
            try {
              return p || !!f(h, l(e));
            } catch (e) {
              return !0;
            }
          };
        (m.sham = !0),
          (e.exports =
            !d ||
            r(function () {
              var e;
              return (
                g(g.call) ||
                !g(Object) ||
                !g(function () {
                  e = !0;
                }) ||
                e
              );
            })
              ? m
              : g);
      },
      4705: function (e, t, i) {
        var n = i(7293),
          r = i(614),
          s = /#|\.prototype\./,
          o = function (e, t) {
            var i = l[a(e)];
            return i == u || (i != c && (r(t) ? n(t) : !!t));
          },
          a = (o.normalize = function (e) {
            return String(e).replace(s, ".").toLowerCase();
          }),
          l = (o.data = {}),
          c = (o.NATIVE = "N"),
          u = (o.POLYFILL = "P");
        e.exports = o;
      },
      8554: function (e) {
        e.exports = function (e) {
          return null == e;
        };
      },
      111: function (e, t, i) {
        var n = i(614),
          r = i(4154),
          s = r.all;
        e.exports = r.IS_HTMLDDA
          ? function (e) {
              return "object" == typeof e ? null !== e : n(e) || e === s;
            }
          : function (e) {
              return "object" == typeof e ? null !== e : n(e);
            };
      },
      1913: function (e) {
        e.exports = !1;
      },
      2190: function (e, t, i) {
        var n = i(5005),
          r = i(614),
          s = i(7976),
          o = i(3307),
          a = Object;
        e.exports = o
          ? function (e) {
              return "symbol" == typeof e;
            }
          : function (e) {
              var t = n("Symbol");
              return r(t) && s(t.prototype, a(e));
            };
      },
      408: function (e, t, i) {
        var n = i(9974),
          r = i(6916),
          s = i(9670),
          o = i(6330),
          a = i(7659),
          l = i(6244),
          c = i(7976),
          u = i(4121),
          d = i(1246),
          h = i(9212),
          f = TypeError,
          p = function (e, t) {
            (this.stopped = e), (this.result = t);
          },
          g = p.prototype;
        e.exports = function (e, t, i) {
          var m,
            v,
            b,
            _,
            y,
            w,
            x,
            E = i && i.that,
            k = !(!i || !i.AS_ENTRIES),
            S = !(!i || !i.IS_RECORD),
            A = !(!i || !i.IS_ITERATOR),
            L = !(!i || !i.INTERRUPTED),
            O = n(t, E),
            j = function (e) {
              return m && h(m, "normal", e), new p(!0, e);
            },
            C = function (e) {
              return k
                ? (s(e), L ? O(e[0], e[1], j) : O(e[0], e[1]))
                : L
                ? O(e, j)
                : O(e);
            };
          if (S) m = e.iterator;
          else if (A) m = e;
          else {
            if (!(v = d(e))) throw f(o(e) + " is not iterable");
            if (a(v)) {
              for (b = 0, _ = l(e); _ > b; b++)
                if ((y = C(e[b])) && c(g, y)) return y;
              return new p(!1);
            }
            m = u(e, v);
          }
          for (w = S ? e.next : m.next; !(x = r(w, m)).done; ) {
            try {
              y = C(x.value);
            } catch (e) {
              h(m, "throw", e);
            }
            if ("object" == typeof y && y && c(g, y)) return y;
          }
          return new p(!1);
        };
      },
      9212: function (e, t, i) {
        var n = i(6916),
          r = i(9670),
          s = i(8173);
        e.exports = function (e, t, i) {
          var o, a;
          r(e);
          try {
            if (!(o = s(e, "return"))) {
              if ("throw" === t) throw i;
              return i;
            }
            o = n(o, e);
          } catch (e) {
            (a = !0), (o = e);
          }
          if ("throw" === t) throw i;
          if (a) throw o;
          return r(o), i;
        };
      },
      3061: function (e, t, i) {
        "use strict";
        var n = i(3383).IteratorPrototype,
          r = i(30),
          s = i(9114),
          o = i(8003),
          a = i(7497),
          l = function () {
            return this;
          };
        e.exports = function (e, t, i, c) {
          var u = t + " Iterator";
          return (
            (e.prototype = r(n, { next: s(+!c, i) })),
            o(e, u, !1, !0),
            (a[u] = l),
            e
          );
        };
      },
      1656: function (e, t, i) {
        "use strict";
        var n = i(2109),
          r = i(6916),
          s = i(1913),
          o = i(6530),
          a = i(614),
          l = i(3061),
          c = i(9518),
          u = i(7674),
          d = i(8003),
          h = i(8880),
          f = i(8052),
          p = i(5112),
          g = i(7497),
          m = i(3383),
          v = o.PROPER,
          b = o.CONFIGURABLE,
          _ = m.IteratorPrototype,
          y = m.BUGGY_SAFARI_ITERATORS,
          w = p("iterator"),
          x = "keys",
          E = "values",
          k = "entries",
          S = function () {
            return this;
          };
        e.exports = function (e, t, i, o, p, m, A) {
          l(i, t, o);
          var L,
            O,
            j,
            C = function (e) {
              if (e === p && N) return N;
              if (!y && e in P) return P[e];
              switch (e) {
                case x:
                case E:
                case k:
                  return function () {
                    return new i(this, e);
                  };
              }
              return function () {
                return new i(this);
              };
            },
            T = t + " Iterator",
            D = !1,
            P = e.prototype,
            I = P[w] || P["@@iterator"] || (p && P[p]),
            N = (!y && I) || C(p),
            M = ("Array" == t && P.entries) || I;
          if (
            (M &&
              (L = c(M.call(new e()))) !== Object.prototype &&
              L.next &&
              (s || c(L) === _ || (u ? u(L, _) : a(L[w]) || f(L, w, S)),
              d(L, T, !0, !0),
              s && (g[T] = S)),
            v &&
              p == E &&
              I &&
              I.name !== E &&
              (!s && b
                ? h(P, "name", E)
                : ((D = !0),
                  (N = function () {
                    return r(I, this);
                  }))),
            p)
          )
            if (((O = { values: C(E), keys: m ? N : C(x), entries: C(k) }), A))
              for (j in O) (y || D || !(j in P)) && f(P, j, O[j]);
            else n({ target: t, proto: !0, forced: y || D }, O);
          return (
            (s && !A) || P[w] === N || f(P, w, N, { name: p }), (g[t] = N), O
          );
        };
      },
      3383: function (e, t, i) {
        "use strict";
        var n,
          r,
          s,
          o = i(7293),
          a = i(614),
          l = i(111),
          c = i(30),
          u = i(9518),
          d = i(8052),
          h = i(5112),
          f = i(1913),
          p = h("iterator"),
          g = !1;
        [].keys &&
          ("next" in (s = [].keys())
            ? (r = u(u(s))) !== Object.prototype && (n = r)
            : (g = !0)),
          !l(n) ||
          o(function () {
            var e = {};
            return n[p].call(e) !== e;
          })
            ? (n = {})
            : f && (n = c(n)),
          a(n[p]) ||
            d(n, p, function () {
              return this;
            }),
          (e.exports = { IteratorPrototype: n, BUGGY_SAFARI_ITERATORS: g });
      },
      7497: function (e) {
        e.exports = {};
      },
      6244: function (e, t, i) {
        var n = i(7466);
        e.exports = function (e) {
          return n(e.length);
        };
      },
      6339: function (e, t, i) {
        var n = i(7293),
          r = i(614),
          s = i(2597),
          o = i(9781),
          a = i(6530).CONFIGURABLE,
          l = i(2788),
          c = i(9909),
          u = c.enforce,
          d = c.get,
          h = Object.defineProperty,
          f =
            o &&
            !n(function () {
              return 8 !== h(function () {}, "length", { value: 8 }).length;
            }),
          p = String(String).split("String"),
          g = (e.exports = function (e, t, i) {
            "Symbol(" === String(t).slice(0, 7) &&
              (t = "[" + String(t).replace(/^Symbol\(([^)]*)\)/, "$1") + "]"),
              i && i.getter && (t = "get " + t),
              i && i.setter && (t = "set " + t),
              (!s(e, "name") || (a && e.name !== t)) &&
                (o
                  ? h(e, "name", { value: t, configurable: !0 })
                  : (e.name = t)),
              f &&
                i &&
                s(i, "arity") &&
                e.length !== i.arity &&
                h(e, "length", { value: i.arity });
            try {
              i && s(i, "constructor") && i.constructor
                ? o && h(e, "prototype", { writable: !1 })
                : e.prototype && (e.prototype = void 0);
            } catch (e) {}
            var n = u(e);
            return (
              s(n, "source") ||
                (n.source = p.join("string" == typeof t ? t : "")),
              e
            );
          });
        Function.prototype.toString = g(function () {
          return (r(this) && d(this).source) || l(this);
        }, "toString");
      },
      4758: function (e) {
        var t = Math.ceil,
          i = Math.floor;
        e.exports =
          Math.trunc ||
          function (e) {
            var n = +e;
            return (n > 0 ? i : t)(n);
          };
      },
      3009: function (e, t, i) {
        var n = i(7854),
          r = i(7293),
          s = i(1702),
          o = i(1340),
          a = i(3111).trim,
          l = i(1361),
          c = n.parseInt,
          u = n.Symbol,
          d = u && u.iterator,
          h = /^[+-]?0x/i,
          f = s(h.exec),
          p =
            8 !== c(l + "08") ||
            22 !== c(l + "0x16") ||
            (d &&
              !r(function () {
                c(Object(d));
              }));
        e.exports = p
          ? function (e, t) {
              var i = a(o(e));
              return c(i, t >>> 0 || (f(h, i) ? 16 : 10));
            }
          : c;
      },
      1574: function (e, t, i) {
        "use strict";
        var n = i(9781),
          r = i(1702),
          s = i(6916),
          o = i(7293),
          a = i(1956),
          l = i(5181),
          c = i(5296),
          u = i(7908),
          d = i(8361),
          h = Object.assign,
          f = Object.defineProperty,
          p = r([].concat);
        e.exports =
          !h ||
          o(function () {
            if (
              n &&
              1 !==
                h(
                  { b: 1 },
                  h(
                    f({}, "a", {
                      enumerable: !0,
                      get: function () {
                        f(this, "b", { value: 3, enumerable: !1 });
                      },
                    }),
                    { b: 2 }
                  )
                ).b
            )
              return !0;
            var e = {},
              t = {},
              i = Symbol(),
              r = "abcdefghijklmnopqrst";
            return (
              (e[i] = 7),
              r.split("").forEach(function (e) {
                t[e] = e;
              }),
              7 != h({}, e)[i] || a(h({}, t)).join("") != r
            );
          })
            ? function (e, t) {
                for (
                  var i = u(e), r = arguments.length, o = 1, h = l.f, f = c.f;
                  r > o;

                )
                  for (
                    var g,
                      m = d(arguments[o++]),
                      v = h ? p(a(m), h(m)) : a(m),
                      b = v.length,
                      _ = 0;
                    b > _;

                  )
                    (g = v[_++]), (n && !s(f, m, g)) || (i[g] = m[g]);
                return i;
              }
            : h;
      },
      30: function (e, t, i) {
        var n,
          r = i(9670),
          s = i(6048),
          o = i(748),
          a = i(3501),
          l = i(490),
          c = i(317),
          u = i(6200),
          d = "prototype",
          h = "script",
          f = u("IE_PROTO"),
          p = function () {},
          g = function (e) {
            return "<" + h + ">" + e + "</" + h + ">";
          },
          m = function (e) {
            e.write(g("")), e.close();
            var t = e.parentWindow.Object;
            return (e = null), t;
          },
          v = function () {
            try {
              n = new ActiveXObject("htmlfile");
            } catch (e) {}
            var e, t, i;
            v =
              "undefined" != typeof document
                ? document.domain && n
                  ? m(n)
                  : ((t = c("iframe")),
                    (i = "java" + h + ":"),
                    (t.style.display = "none"),
                    l.appendChild(t),
                    (t.src = String(i)),
                    (e = t.contentWindow.document).open(),
                    e.write(g("document.F=Object")),
                    e.close(),
                    e.F)
                : m(n);
            for (var r = o.length; r--; ) delete v[d][o[r]];
            return v();
          };
        (a[f] = !0),
          (e.exports =
            Object.create ||
            function (e, t) {
              var i;
              return (
                null !== e
                  ? ((p[d] = r(e)), (i = new p()), (p[d] = null), (i[f] = e))
                  : (i = v()),
                void 0 === t ? i : s.f(i, t)
              );
            });
      },
      6048: function (e, t, i) {
        var n = i(9781),
          r = i(3353),
          s = i(3070),
          o = i(9670),
          a = i(5656),
          l = i(1956);
        t.f =
          n && !r
            ? Object.defineProperties
            : function (e, t) {
                o(e);
                for (var i, n = a(t), r = l(t), c = r.length, u = 0; c > u; )
                  s.f(e, (i = r[u++]), n[i]);
                return e;
              };
      },
      3070: function (e, t, i) {
        var n = i(9781),
          r = i(4664),
          s = i(3353),
          o = i(9670),
          a = i(4948),
          l = TypeError,
          c = Object.defineProperty,
          u = Object.getOwnPropertyDescriptor,
          d = "enumerable",
          h = "configurable",
          f = "writable";
        t.f = n
          ? s
            ? function (e, t, i) {
                if (
                  (o(e),
                  (t = a(t)),
                  o(i),
                  "function" == typeof e &&
                    "prototype" === t &&
                    "value" in i &&
                    f in i &&
                    !i[f])
                ) {
                  var n = u(e, t);
                  n &&
                    n[f] &&
                    ((e[t] = i.value),
                    (i = {
                      configurable: h in i ? i[h] : n[h],
                      enumerable: d in i ? i[d] : n[d],
                      writable: !1,
                    }));
                }
                return c(e, t, i);
              }
            : c
          : function (e, t, i) {
              if ((o(e), (t = a(t)), o(i), r))
                try {
                  return c(e, t, i);
                } catch (e) {}
              if ("get" in i || "set" in i) throw l("Accessors not supported");
              return "value" in i && (e[t] = i.value), e;
            };
      },
      1236: function (e, t, i) {
        var n = i(9781),
          r = i(6916),
          s = i(5296),
          o = i(9114),
          a = i(5656),
          l = i(4948),
          c = i(2597),
          u = i(4664),
          d = Object.getOwnPropertyDescriptor;
        t.f = n
          ? d
          : function (e, t) {
              if (((e = a(e)), (t = l(t)), u))
                try {
                  return d(e, t);
                } catch (e) {}
              if (c(e, t)) return o(!r(s.f, e, t), e[t]);
            };
      },
      1156: function (e, t, i) {
        var n = i(4326),
          r = i(5656),
          s = i(8006).f,
          o = i(1589),
          a =
            "object" == typeof window && window && Object.getOwnPropertyNames
              ? Object.getOwnPropertyNames(window)
              : [];
        e.exports.f = function (e) {
          return a && "Window" == n(e)
            ? (function (e) {
                try {
                  return s(e);
                } catch (e) {
                  return o(a);
                }
              })(e)
            : s(r(e));
        };
      },
      8006: function (e, t, i) {
        var n = i(6324),
          r = i(748).concat("length", "prototype");
        t.f =
          Object.getOwnPropertyNames ||
          function (e) {
            return n(e, r);
          };
      },
      5181: function (e, t) {
        t.f = Object.getOwnPropertySymbols;
      },
      9518: function (e, t, i) {
        var n = i(2597),
          r = i(614),
          s = i(7908),
          o = i(6200),
          a = i(8544),
          l = o("IE_PROTO"),
          c = Object,
          u = c.prototype;
        e.exports = a
          ? c.getPrototypeOf
          : function (e) {
              var t = s(e);
              if (n(t, l)) return t[l];
              var i = t.constructor;
              return r(i) && t instanceof i
                ? i.prototype
                : t instanceof c
                ? u
                : null;
            };
      },
      2050: function (e, t, i) {
        var n = i(7293),
          r = i(111),
          s = i(4326),
          o = i(7556),
          a = Object.isExtensible,
          l = n(function () {
            a(1);
          });
        e.exports =
          l || o
            ? function (e) {
                return !!r(e) && (!o || "ArrayBuffer" != s(e)) && (!a || a(e));
              }
            : a;
      },
      7976: function (e, t, i) {
        var n = i(1702);
        e.exports = n({}.isPrototypeOf);
      },
      6324: function (e, t, i) {
        var n = i(1702),
          r = i(2597),
          s = i(5656),
          o = i(1318).indexOf,
          a = i(3501),
          l = n([].push);
        e.exports = function (e, t) {
          var i,
            n = s(e),
            c = 0,
            u = [];
          for (i in n) !r(a, i) && r(n, i) && l(u, i);
          for (; t.length > c; ) r(n, (i = t[c++])) && (~o(u, i) || l(u, i));
          return u;
        };
      },
      1956: function (e, t, i) {
        var n = i(6324),
          r = i(748);
        e.exports =
          Object.keys ||
          function (e) {
            return n(e, r);
          };
      },
      5296: function (e, t) {
        "use strict";
        var i = {}.propertyIsEnumerable,
          n = Object.getOwnPropertyDescriptor,
          r = n && !i.call({ 1: 2 }, 1);
        t.f = r
          ? function (e) {
              var t = n(this, e);
              return !!t && t.enumerable;
            }
          : i;
      },
      7674: function (e, t, i) {
        var n = i(1702),
          r = i(9670),
          s = i(6077);
        e.exports =
          Object.setPrototypeOf ||
          ("__proto__" in {}
            ? (function () {
                var e,
                  t = !1,
                  i = {};
                try {
                  (e = n(
                    Object.getOwnPropertyDescriptor(
                      Object.prototype,
                      "__proto__"
                    ).set
                  ))(i, []),
                    (t = i instanceof Array);
                } catch (e) {}
                return function (i, n) {
                  return r(i), s(n), t ? e(i, n) : (i.__proto__ = n), i;
                };
              })()
            : void 0);
      },
      288: function (e, t, i) {
        "use strict";
        var n = i(1694),
          r = i(648);
        e.exports = n
          ? {}.toString
          : function () {
              return "[object " + r(this) + "]";
            };
      },
      2140: function (e, t, i) {
        var n = i(6916),
          r = i(614),
          s = i(111),
          o = TypeError;
        e.exports = function (e, t) {
          var i, a;
          if ("string" === t && r((i = e.toString)) && !s((a = n(i, e))))
            return a;
          if (r((i = e.valueOf)) && !s((a = n(i, e)))) return a;
          if ("string" !== t && r((i = e.toString)) && !s((a = n(i, e))))
            return a;
          throw o("Can't convert object to primitive value");
        };
      },
      3887: function (e, t, i) {
        var n = i(5005),
          r = i(1702),
          s = i(8006),
          o = i(5181),
          a = i(9670),
          l = r([].concat);
        e.exports =
          n("Reflect", "ownKeys") ||
          function (e) {
            var t = s.f(a(e)),
              i = o.f;
            return i ? l(t, i(e)) : t;
          };
      },
      7651: function (e, t, i) {
        var n = i(6916),
          r = i(9670),
          s = i(614),
          o = i(4326),
          a = i(2261),
          l = TypeError;
        e.exports = function (e, t) {
          var i = e.exec;
          if (s(i)) {
            var c = n(i, e, t);
            return null !== c && r(c), c;
          }
          if ("RegExp" === o(e)) return n(a, e, t);
          throw l("RegExp#exec called on incompatible receiver");
        };
      },
      2261: function (e, t, i) {
        "use strict";
        var n,
          r,
          s = i(6916),
          o = i(1702),
          a = i(1340),
          l = i(7066),
          c = i(2999),
          u = i(2309),
          d = i(30),
          h = i(9909).get,
          f = i(9441),
          p = i(7168),
          g = u("native-string-replace", String.prototype.replace),
          m = RegExp.prototype.exec,
          v = m,
          b = o("".charAt),
          _ = o("".indexOf),
          y = o("".replace),
          w = o("".slice),
          x =
            ((r = /b*/g),
            s(m, (n = /a/), "a"),
            s(m, r, "a"),
            0 !== n.lastIndex || 0 !== r.lastIndex),
          E = c.BROKEN_CARET,
          k = void 0 !== /()??/.exec("")[1];
        (x || k || E || f || p) &&
          (v = function (e) {
            var t,
              i,
              n,
              r,
              o,
              c,
              u,
              f = this,
              p = h(f),
              S = a(e),
              A = p.raw;
            if (A)
              return (
                (A.lastIndex = f.lastIndex),
                (t = s(v, A, S)),
                (f.lastIndex = A.lastIndex),
                t
              );
            var L = p.groups,
              O = E && f.sticky,
              j = s(l, f),
              C = f.source,
              T = 0,
              D = S;
            if (
              (O &&
                ((j = y(j, "y", "")),
                -1 === _(j, "g") && (j += "g"),
                (D = w(S, f.lastIndex)),
                f.lastIndex > 0 &&
                  (!f.multiline ||
                    (f.multiline && "\n" !== b(S, f.lastIndex - 1))) &&
                  ((C = "(?: " + C + ")"), (D = " " + D), T++),
                (i = new RegExp("^(?:" + C + ")", j))),
              k && (i = new RegExp("^" + C + "$(?!\\s)", j)),
              x && (n = f.lastIndex),
              (r = s(m, O ? i : f, D)),
              O
                ? r
                  ? ((r.input = w(r.input, T)),
                    (r[0] = w(r[0], T)),
                    (r.index = f.lastIndex),
                    (f.lastIndex += r[0].length))
                  : (f.lastIndex = 0)
                : x &&
                  r &&
                  (f.lastIndex = f.global ? r.index + r[0].length : n),
              k &&
                r &&
                r.length > 1 &&
                s(g, r[0], i, function () {
                  for (o = 1; o < arguments.length - 2; o++)
                    void 0 === arguments[o] && (r[o] = void 0);
                }),
              r && L)
            )
              for (r.groups = c = d(null), o = 0; o < L.length; o++)
                c[(u = L[o])[0]] = r[u[1]];
            return r;
          }),
          (e.exports = v);
      },
      7066: function (e, t, i) {
        "use strict";
        var n = i(9670);
        e.exports = function () {
          var e = n(this),
            t = "";
          return (
            e.hasIndices && (t += "d"),
            e.global && (t += "g"),
            e.ignoreCase && (t += "i"),
            e.multiline && (t += "m"),
            e.dotAll && (t += "s"),
            e.unicode && (t += "u"),
            e.unicodeSets && (t += "v"),
            e.sticky && (t += "y"),
            t
          );
        };
      },
      2999: function (e, t, i) {
        var n = i(7293),
          r = i(7854).RegExp,
          s = n(function () {
            var e = r("a", "y");
            return (e.lastIndex = 2), null != e.exec("abcd");
          }),
          o =
            s ||
            n(function () {
              return !r("a", "y").sticky;
            }),
          a =
            s ||
            n(function () {
              var e = r("^r", "gy");
              return (e.lastIndex = 2), null != e.exec("str");
            });
        e.exports = { BROKEN_CARET: a, MISSED_STICKY: o, UNSUPPORTED_Y: s };
      },
      9441: function (e, t, i) {
        var n = i(7293),
          r = i(7854).RegExp;
        e.exports = n(function () {
          var e = r(".", "s");
          return !(e.dotAll && e.exec("\n") && "s" === e.flags);
        });
      },
      7168: function (e, t, i) {
        var n = i(7293),
          r = i(7854).RegExp;
        e.exports = n(function () {
          var e = r("(?<a>b)", "g");
          return (
            "b" !== e.exec("b").groups.a || "bc" !== "b".replace(e, "$<a>c")
          );
        });
      },
      4488: function (e, t, i) {
        var n = i(8554),
          r = TypeError;
        e.exports = function (e) {
          if (n(e)) throw r("Can't call method on " + e);
          return e;
        };
      },
      8003: function (e, t, i) {
        var n = i(3070).f,
          r = i(2597),
          s = i(5112)("toStringTag");
        e.exports = function (e, t, i) {
          e && !i && (e = e.prototype),
            e && !r(e, s) && n(e, s, { configurable: !0, value: t });
        };
      },
      6200: function (e, t, i) {
        var n = i(2309),
          r = i(9711),
          s = n("keys");
        e.exports = function (e) {
          return s[e] || (s[e] = r(e));
        };
      },
      5465: function (e, t, i) {
        var n = i(7854),
          r = i(3072),
          s = "__core-js_shared__",
          o = n[s] || r(s, {});
        e.exports = o;
      },
      2309: function (e, t, i) {
        var n = i(1913),
          r = i(5465);
        (e.exports = function (e, t) {
          return r[e] || (r[e] = void 0 !== t ? t : {});
        })("versions", []).push({
          version: "3.26.1",
          mode: n ? "pure" : "global",
          copyright: "© 2014-2022 Denis Pushkarev (zloirock.ru)",
          license: "https://github.com/zloirock/core-js/blob/v3.26.1/LICENSE",
          source: "https://github.com/zloirock/core-js",
        });
      },
      8710: function (e, t, i) {
        var n = i(1702),
          r = i(9303),
          s = i(1340),
          o = i(4488),
          a = n("".charAt),
          l = n("".charCodeAt),
          c = n("".slice),
          u = function (e) {
            return function (t, i) {
              var n,
                u,
                d = s(o(t)),
                h = r(i),
                f = d.length;
              return h < 0 || h >= f
                ? e
                  ? ""
                  : void 0
                : (n = l(d, h)) < 55296 ||
                  n > 56319 ||
                  h + 1 === f ||
                  (u = l(d, h + 1)) < 56320 ||
                  u > 57343
                ? e
                  ? a(d, h)
                  : n
                : e
                ? c(d, h, h + 2)
                : u - 56320 + ((n - 55296) << 10) + 65536;
            };
          };
        e.exports = { codeAt: u(!1), charAt: u(!0) };
      },
      3111: function (e, t, i) {
        var n = i(1702),
          r = i(4488),
          s = i(1340),
          o = i(1361),
          a = n("".replace),
          l = "[" + o + "]",
          c = RegExp("^" + l + l + "*"),
          u = RegExp(l + l + "*$"),
          d = function (e) {
            return function (t) {
              var i = s(r(t));
              return 1 & e && (i = a(i, c, "")), 2 & e && (i = a(i, u, "")), i;
            };
          };
        e.exports = { start: d(1), end: d(2), trim: d(3) };
      },
      6293: function (e, t, i) {
        var n = i(7392),
          r = i(7293);
        e.exports =
          !!Object.getOwnPropertySymbols &&
          !r(function () {
            var e = Symbol();
            return (
              !String(e) ||
              !(Object(e) instanceof Symbol) ||
              (!Symbol.sham && n && n < 41)
            );
          });
      },
      1400: function (e, t, i) {
        var n = i(9303),
          r = Math.max,
          s = Math.min;
        e.exports = function (e, t) {
          var i = n(e);
          return i < 0 ? r(i + t, 0) : s(i, t);
        };
      },
      5656: function (e, t, i) {
        var n = i(8361),
          r = i(4488);
        e.exports = function (e) {
          return n(r(e));
        };
      },
      9303: function (e, t, i) {
        var n = i(4758);
        e.exports = function (e) {
          var t = +e;
          return t != t || 0 === t ? 0 : n(t);
        };
      },
      7466: function (e, t, i) {
        var n = i(9303),
          r = Math.min;
        e.exports = function (e) {
          return e > 0 ? r(n(e), 9007199254740991) : 0;
        };
      },
      7908: function (e, t, i) {
        var n = i(4488),
          r = Object;
        e.exports = function (e) {
          return r(n(e));
        };
      },
      7593: function (e, t, i) {
        var n = i(6916),
          r = i(111),
          s = i(2190),
          o = i(8173),
          a = i(2140),
          l = i(5112),
          c = TypeError,
          u = l("toPrimitive");
        e.exports = function (e, t) {
          if (!r(e) || s(e)) return e;
          var i,
            l = o(e, u);
          if (l) {
            if (
              (void 0 === t && (t = "default"), (i = n(l, e, t)), !r(i) || s(i))
            )
              return i;
            throw c("Can't convert object to primitive value");
          }
          return void 0 === t && (t = "number"), a(e, t);
        };
      },
      4948: function (e, t, i) {
        var n = i(7593),
          r = i(2190);
        e.exports = function (e) {
          var t = n(e, "string");
          return r(t) ? t : t + "";
        };
      },
      1694: function (e, t, i) {
        var n = {};
        (n[i(5112)("toStringTag")] = "z"),
          (e.exports = "[object z]" === String(n));
      },
      1340: function (e, t, i) {
        var n = i(648),
          r = String;
        e.exports = function (e) {
          if ("Symbol" === n(e))
            throw TypeError("Cannot convert a Symbol value to a string");
          return r(e);
        };
      },
      6330: function (e) {
        var t = String;
        e.exports = function (e) {
          try {
            return t(e);
          } catch (e) {
            return "Object";
          }
        };
      },
      9711: function (e, t, i) {
        var n = i(1702),
          r = 0,
          s = Math.random(),
          o = n((1).toString);
        e.exports = function (e) {
          return "Symbol(" + (void 0 === e ? "" : e) + ")_" + o(++r + s, 36);
        };
      },
      3307: function (e, t, i) {
        var n = i(6293);
        e.exports = n && !Symbol.sham && "symbol" == typeof Symbol.iterator;
      },
      3353: function (e, t, i) {
        var n = i(9781),
          r = i(7293);
        e.exports =
          n &&
          r(function () {
            return (
              42 !=
              Object.defineProperty(function () {}, "prototype", {
                value: 42,
                writable: !1,
              }).prototype
            );
          });
      },
      4811: function (e, t, i) {
        var n = i(7854),
          r = i(614),
          s = n.WeakMap;
        e.exports = r(s) && /native code/.test(String(s));
      },
      5112: function (e, t, i) {
        var n = i(7854),
          r = i(2309),
          s = i(2597),
          o = i(9711),
          a = i(6293),
          l = i(3307),
          c = r("wks"),
          u = n.Symbol,
          d = u && u.for,
          h = l ? u : (u && u.withoutSetter) || o;
        e.exports = function (e) {
          if (!s(c, e) || (!a && "string" != typeof c[e])) {
            var t = "Symbol." + e;
            a && s(u, e) ? (c[e] = u[e]) : (c[e] = l && d ? d(t) : h(t));
          }
          return c[e];
        };
      },
      1361: function (e) {
        e.exports = "\t\n\v\f\r                　\u2028\u2029\ufeff";
      },
      7327: function (e, t, i) {
        "use strict";
        var n = i(2109),
          r = i(2092).filter;
        n(
          { target: "Array", proto: !0, forced: !i(1194)("filter") },
          {
            filter: function (e) {
              return r(this, e, arguments.length > 1 ? arguments[1] : void 0);
            },
          }
        );
      },
      6992: function (e, t, i) {
        "use strict";
        var n = i(5656),
          r = i(1223),
          s = i(7497),
          o = i(9909),
          a = i(3070).f,
          l = i(1656),
          c = i(6178),
          u = i(1913),
          d = i(9781),
          h = "Array Iterator",
          f = o.set,
          p = o.getterFor(h);
        e.exports = l(
          Array,
          "Array",
          function (e, t) {
            f(this, { type: h, target: n(e), index: 0, kind: t });
          },
          function () {
            var e = p(this),
              t = e.target,
              i = e.kind,
              n = e.index++;
            return !t || n >= t.length
              ? ((e.target = void 0), c(void 0, !0))
              : c("keys" == i ? n : "values" == i ? t[n] : [n, t[n]], !1);
          },
          "values"
        );
        var g = (s.Arguments = s.Array);
        if (
          (r("keys"), r("values"), r("entries"), !u && d && "values" !== g.name)
        )
          try {
            a(g, "name", { value: "values" });
          } catch (e) {}
      },
      5827: function (e, t, i) {
        "use strict";
        var n = i(2109),
          r = i(3671).left,
          s = i(9341),
          o = i(7392),
          a = i(5268);
        n(
          {
            target: "Array",
            proto: !0,
            forced: !s("reduce") || (!a && o > 79 && o < 83),
          },
          {
            reduce: function (e) {
              var t = arguments.length;
              return r(this, e, t, t > 1 ? arguments[1] : void 0);
            },
          }
        );
      },
      8309: function (e, t, i) {
        var n = i(9781),
          r = i(6530).EXISTS,
          s = i(1702),
          o = i(3070).f,
          a = Function.prototype,
          l = s(a.toString),
          c =
            /function\b(?:\s|\/\*[\S\s]*?\*\/|\/\/[^\n\r]*[\n\r]+)*([^\s(/]*)/,
          u = s(c.exec);
        n &&
          !r &&
          o(a, "name", {
            configurable: !0,
            get: function () {
              try {
                return u(c, l(this))[1];
              } catch (e) {
                return "";
              }
            },
          });
      },
      9601: function (e, t, i) {
        var n = i(2109),
          r = i(1574);
        n(
          { target: "Object", stat: !0, arity: 2, forced: Object.assign !== r },
          { assign: r }
        );
      },
      1539: function (e, t, i) {
        var n = i(1694),
          r = i(8052),
          s = i(288);
        n || r(Object.prototype, "toString", s, { unsafe: !0 });
      },
      1058: function (e, t, i) {
        var n = i(2109),
          r = i(3009);
        n({ global: !0, forced: parseInt != r }, { parseInt: r });
      },
      4916: function (e, t, i) {
        "use strict";
        var n = i(2109),
          r = i(2261);
        n({ target: "RegExp", proto: !0, forced: /./.exec !== r }, { exec: r });
      },
      8783: function (e, t, i) {
        "use strict";
        var n = i(8710).charAt,
          r = i(1340),
          s = i(9909),
          o = i(1656),
          a = i(6178),
          l = "String Iterator",
          c = s.set,
          u = s.getterFor(l);
        o(
          String,
          "String",
          function (e) {
            c(this, { type: l, string: r(e), index: 0 });
          },
          function () {
            var e,
              t = u(this),
              i = t.string,
              r = t.index;
            return r >= i.length
              ? a(void 0, !0)
              : ((e = n(i, r)), (t.index += e.length), a(e, !1));
          }
        );
      },
      4723: function (e, t, i) {
        "use strict";
        var n = i(6916),
          r = i(7007),
          s = i(9670),
          o = i(8554),
          a = i(7466),
          l = i(1340),
          c = i(4488),
          u = i(8173),
          d = i(1530),
          h = i(7651);
        r("match", function (e, t, i) {
          return [
            function (t) {
              var i = c(this),
                r = o(t) ? void 0 : u(t, e);
              return r ? n(r, t, i) : new RegExp(t)[e](l(i));
            },
            function (e) {
              var n = s(this),
                r = l(e),
                o = i(t, n, r);
              if (o.done) return o.value;
              if (!n.global) return h(n, r);
              var c = n.unicode;
              n.lastIndex = 0;
              for (var u, f = [], p = 0; null !== (u = h(n, r)); ) {
                var g = l(u[0]);
                (f[p] = g),
                  "" === g && (n.lastIndex = d(r, a(n.lastIndex), c)),
                  p++;
              }
              return 0 === p ? null : f;
            },
          ];
        });
      },
      5306: function (e, t, i) {
        "use strict";
        var n = i(2104),
          r = i(6916),
          s = i(1702),
          o = i(7007),
          a = i(7293),
          l = i(9670),
          c = i(614),
          u = i(8554),
          d = i(9303),
          h = i(7466),
          f = i(1340),
          p = i(4488),
          g = i(1530),
          m = i(8173),
          v = i(647),
          b = i(7651),
          _ = i(5112)("replace"),
          y = Math.max,
          w = Math.min,
          x = s([].concat),
          E = s([].push),
          k = s("".indexOf),
          S = s("".slice),
          A = "$0" === "a".replace(/./, "$0"),
          L = !!/./[_] && "" === /./[_]("a", "$0");
        o(
          "replace",
          function (e, t, i) {
            var s = L ? "$" : "$0";
            return [
              function (e, i) {
                var n = p(this),
                  s = u(e) ? void 0 : m(e, _);
                return s ? r(s, e, n, i) : r(t, f(n), e, i);
              },
              function (e, r) {
                var o = l(this),
                  a = f(e);
                if (
                  "string" == typeof r &&
                  -1 === k(r, s) &&
                  -1 === k(r, "$<")
                ) {
                  var u = i(t, o, a, r);
                  if (u.done) return u.value;
                }
                var p = c(r);
                p || (r = f(r));
                var m = o.global;
                if (m) {
                  var _ = o.unicode;
                  o.lastIndex = 0;
                }
                for (var A = []; ; ) {
                  var L = b(o, a);
                  if (null === L) break;
                  if ((E(A, L), !m)) break;
                  "" === f(L[0]) && (o.lastIndex = g(a, h(o.lastIndex), _));
                }
                for (var O, j = "", C = 0, T = 0; T < A.length; T++) {
                  for (
                    var D = f((L = A[T])[0]),
                      P = y(w(d(L.index), a.length), 0),
                      I = [],
                      N = 1;
                    N < L.length;
                    N++
                  )
                    E(I, void 0 === (O = L[N]) ? O : String(O));
                  var M = L.groups;
                  if (p) {
                    var F = x([D], I, P, a);
                    void 0 !== M && E(F, M);
                    var z = f(n(r, void 0, F));
                  } else z = v(D, a, P, I, M, r);
                  P >= C && ((j += S(a, C, P) + z), (C = P + D.length));
                }
                return j + S(a, C);
              },
            ];
          },
          !!a(function () {
            var e = /./;
            return (
              (e.exec = function () {
                var e = [];
                return (e.groups = { a: "7" }), e;
              }),
              "7" !== "".replace(e, "$<a>")
            );
          }) ||
            !A ||
            L
        );
      },
      1202: function (e, t, i) {
        "use strict";
        var n,
          r = i(7854),
          s = i(1702),
          o = i(9190),
          a = i(2423),
          l = i(7710),
          c = i(9320),
          u = i(111),
          d = i(2050),
          h = i(9909).enforce,
          f = i(4811),
          p = !r.ActiveXObject && "ActiveXObject" in r,
          g = function (e) {
            return function () {
              return e(this, arguments.length ? arguments[0] : void 0);
            };
          },
          m = l("WeakMap", g, c);
        if (f && p) {
          (n = c.getConstructor(g, "WeakMap", !0)), a.enable();
          var v = m.prototype,
            b = s(v.delete),
            _ = s(v.has),
            y = s(v.get),
            w = s(v.set);
          o(v, {
            delete: function (e) {
              if (u(e) && !d(e)) {
                var t = h(this);
                return (
                  t.frozen || (t.frozen = new n()),
                  b(this, e) || t.frozen.delete(e)
                );
              }
              return b(this, e);
            },
            has: function (e) {
              if (u(e) && !d(e)) {
                var t = h(this);
                return (
                  t.frozen || (t.frozen = new n()),
                  _(this, e) || t.frozen.has(e)
                );
              }
              return _(this, e);
            },
            get: function (e) {
              if (u(e) && !d(e)) {
                var t = h(this);
                return (
                  t.frozen || (t.frozen = new n()),
                  _(this, e) ? y(this, e) : t.frozen.get(e)
                );
              }
              return y(this, e);
            },
            set: function (e, t) {
              if (u(e) && !d(e)) {
                var i = h(this);
                i.frozen || (i.frozen = new n()),
                  _(this, e) ? w(this, e, t) : i.frozen.set(e, t);
              } else w(this, e, t);
              return this;
            },
          });
        }
      },
      4129: function (e, t, i) {
        i(1202);
      },
      4747: function (e, t, i) {
        var n = i(7854),
          r = i(8324),
          s = i(8509),
          o = i(8533),
          a = i(8880),
          l = function (e) {
            if (e && e.forEach !== o)
              try {
                a(e, "forEach", o);
              } catch (t) {
                e.forEach = o;
              }
          };
        for (var c in r) r[c] && l(n[c] && n[c].prototype);
        l(s);
      },
      3948: function (e, t, i) {
        var n = i(7854),
          r = i(8324),
          s = i(8509),
          o = i(6992),
          a = i(8880),
          l = i(5112),
          c = l("iterator"),
          u = l("toStringTag"),
          d = o.values,
          h = function (e, t) {
            if (e) {
              if (e[c] !== d)
                try {
                  a(e, c, d);
                } catch (t) {
                  e[c] = d;
                }
              if ((e[u] || a(e, u, t), r[t]))
                for (var i in o)
                  if (e[i] !== o[i])
                    try {
                      a(e, i, o[i]);
                    } catch (t) {
                      e[i] = o[i];
                    }
            }
          };
        for (var f in r) h(n[f] && n[f].prototype, f);
        h(s, "DOMTokenList");
      },
      1296: function (e, t, i) {
        var n = /^\s+|\s+$/g,
          r = /^[-+]0x[0-9a-f]+$/i,
          s = /^0b[01]+$/i,
          o = /^0o[0-7]+$/i,
          a = parseInt,
          l = "object" == typeof i.g && i.g && i.g.Object === Object && i.g,
          c = "object" == typeof self && self && self.Object === Object && self,
          u = l || c || Function("return this")(),
          d = Object.prototype.toString,
          h = Math.max,
          f = Math.min,
          p = function () {
            return u.Date.now();
          };
        function g(e) {
          var t = typeof e;
          return !!e && ("object" == t || "function" == t);
        }
        function m(e) {
          if ("number" == typeof e) return e;
          if (
            (function (e) {
              return (
                "symbol" == typeof e ||
                ((function (e) {
                  return !!e && "object" == typeof e;
                })(e) &&
                  "[object Symbol]" == d.call(e))
              );
            })(e)
          )
            return NaN;
          if (g(e)) {
            var t = "function" == typeof e.valueOf ? e.valueOf() : e;
            e = g(t) ? t + "" : t;
          }
          if ("string" != typeof e) return 0 === e ? e : +e;
          e = e.replace(n, "");
          var i = s.test(e);
          return i || o.test(e)
            ? a(e.slice(2), i ? 2 : 8)
            : r.test(e)
            ? NaN
            : +e;
        }
        e.exports = function (e, t, i) {
          var n,
            r,
            s,
            o,
            a,
            l,
            c = 0,
            u = !1,
            d = !1,
            v = !0;
          if ("function" != typeof e)
            throw new TypeError("Expected a function");
          function b(t) {
            var i = n,
              s = r;
            return (n = r = void 0), (c = t), (o = e.apply(s, i));
          }
          function _(e) {
            return (c = e), (a = setTimeout(w, t)), u ? b(e) : o;
          }
          function y(e) {
            var i = e - l;
            return void 0 === l || i >= t || i < 0 || (d && e - c >= s);
          }
          function w() {
            var e = p();
            if (y(e)) return x(e);
            a = setTimeout(
              w,
              (function (e) {
                var i = t - (e - l);
                return d ? f(i, s - (e - c)) : i;
              })(e)
            );
          }
          function x(e) {
            return (a = void 0), v && n ? b(e) : ((n = r = void 0), o);
          }
          function E() {
            var e = p(),
              i = y(e);
            if (((n = arguments), (r = this), (l = e), i)) {
              if (void 0 === a) return _(l);
              if (d) return (a = setTimeout(w, t)), b(l);
            }
            return void 0 === a && (a = setTimeout(w, t)), o;
          }
          return (
            (t = m(t) || 0),
            g(i) &&
              ((u = !!i.leading),
              (s = (d = "maxWait" in i) ? h(m(i.maxWait) || 0, t) : s),
              (v = "trailing" in i ? !!i.trailing : v)),
            (E.cancel = function () {
              void 0 !== a && clearTimeout(a),
                (c = 0),
                (n = l = r = a = void 0);
            }),
            (E.flush = function () {
              return void 0 === a ? o : x(p());
            }),
            E
          );
        };
      },
      773: function (e, t, i) {
        var n,
          r = "__lodash_hash_undefined__",
          s = /^\[object .+?Constructor\]$/,
          o = "object" == typeof i.g && i.g && i.g.Object === Object && i.g,
          a = "object" == typeof self && self && self.Object === Object && self,
          l = o || a || Function("return this")(),
          c = Array.prototype,
          u = Function.prototype,
          d = Object.prototype,
          h = l["__core-js_shared__"],
          f = (n = /[^.]+$/.exec((h && h.keys && h.keys.IE_PROTO) || ""))
            ? "Symbol(src)_1." + n
            : "",
          p = u.toString,
          g = d.hasOwnProperty,
          m = d.toString,
          v = RegExp(
            "^" +
              p
                .call(g)
                .replace(/[\\^$.*+?()[\]{}|]/g, "\\$&")
                .replace(
                  /hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g,
                  "$1.*?"
                ) +
              "$"
          ),
          b = c.splice,
          _ = A(l, "Map"),
          y = A(Object, "create");
        function w(e) {
          var t = -1,
            i = e ? e.length : 0;
          for (this.clear(); ++t < i; ) {
            var n = e[t];
            this.set(n[0], n[1]);
          }
        }
        function x(e) {
          var t = -1,
            i = e ? e.length : 0;
          for (this.clear(); ++t < i; ) {
            var n = e[t];
            this.set(n[0], n[1]);
          }
        }
        function E(e) {
          var t = -1,
            i = e ? e.length : 0;
          for (this.clear(); ++t < i; ) {
            var n = e[t];
            this.set(n[0], n[1]);
          }
        }
        function k(e, t) {
          for (var i, n, r = e.length; r--; )
            if ((i = e[r][0]) === (n = t) || (i != i && n != n)) return r;
          return -1;
        }
        function S(e, t) {
          var i,
            n,
            r = e.__data__;
          return (
            "string" == (n = typeof (i = t)) ||
            "number" == n ||
            "symbol" == n ||
            "boolean" == n
              ? "__proto__" !== i
              : null === i
          )
            ? r["string" == typeof t ? "string" : "hash"]
            : r.map;
        }
        function A(e, t) {
          var i = (function (e, t) {
            return null == e ? void 0 : e[t];
          })(e, t);
          return (function (e) {
            if (!O(e) || (f && f in e)) return !1;
            var t =
              (function (e) {
                var t = O(e) ? m.call(e) : "";
                return (
                  "[object Function]" == t || "[object GeneratorFunction]" == t
                );
              })(e) ||
              (function (e) {
                var t = !1;
                if (null != e && "function" != typeof e.toString)
                  try {
                    t = !!(e + "");
                  } catch (e) {}
                return t;
              })(e)
                ? v
                : s;
            return t.test(
              (function (e) {
                if (null != e) {
                  try {
                    return p.call(e);
                  } catch (e) {}
                  try {
                    return e + "";
                  } catch (e) {}
                }
                return "";
              })(e)
            );
          })(i)
            ? i
            : void 0;
        }
        function L(e, t) {
          if ("function" != typeof e || (t && "function" != typeof t))
            throw new TypeError("Expected a function");
          var i = function () {
            var n = arguments,
              r = t ? t.apply(this, n) : n[0],
              s = i.cache;
            if (s.has(r)) return s.get(r);
            var o = e.apply(this, n);
            return (i.cache = s.set(r, o)), o;
          };
          return (i.cache = new (L.Cache || E)()), i;
        }
        function O(e) {
          var t = typeof e;
          return !!e && ("object" == t || "function" == t);
        }
        (w.prototype.clear = function () {
          this.__data__ = y ? y(null) : {};
        }),
          (w.prototype.delete = function (e) {
            return this.has(e) && delete this.__data__[e];
          }),
          (w.prototype.get = function (e) {
            var t = this.__data__;
            if (y) {
              var i = t[e];
              return i === r ? void 0 : i;
            }
            return g.call(t, e) ? t[e] : void 0;
          }),
          (w.prototype.has = function (e) {
            var t = this.__data__;
            return y ? void 0 !== t[e] : g.call(t, e);
          }),
          (w.prototype.set = function (e, t) {
            return (this.__data__[e] = y && void 0 === t ? r : t), this;
          }),
          (x.prototype.clear = function () {
            this.__data__ = [];
          }),
          (x.prototype.delete = function (e) {
            var t = this.__data__,
              i = k(t, e);
            return !(
              i < 0 || (i == t.length - 1 ? t.pop() : b.call(t, i, 1), 0)
            );
          }),
          (x.prototype.get = function (e) {
            var t = this.__data__,
              i = k(t, e);
            return i < 0 ? void 0 : t[i][1];
          }),
          (x.prototype.has = function (e) {
            return k(this.__data__, e) > -1;
          }),
          (x.prototype.set = function (e, t) {
            var i = this.__data__,
              n = k(i, e);
            return n < 0 ? i.push([e, t]) : (i[n][1] = t), this;
          }),
          (E.prototype.clear = function () {
            this.__data__ = {
              hash: new w(),
              map: new (_ || x)(),
              string: new w(),
            };
          }),
          (E.prototype.delete = function (e) {
            return S(this, e).delete(e);
          }),
          (E.prototype.get = function (e) {
            return S(this, e).get(e);
          }),
          (E.prototype.has = function (e) {
            return S(this, e).has(e);
          }),
          (E.prototype.set = function (e, t) {
            return S(this, e).set(e, t), this;
          }),
          (L.Cache = E),
          (e.exports = L);
      },
      3096: function (e, t, i) {
        var n = "Expected a function",
          r = /^\s+|\s+$/g,
          s = /^[-+]0x[0-9a-f]+$/i,
          o = /^0b[01]+$/i,
          a = /^0o[0-7]+$/i,
          l = parseInt,
          c = "object" == typeof i.g && i.g && i.g.Object === Object && i.g,
          u = "object" == typeof self && self && self.Object === Object && self,
          d = c || u || Function("return this")(),
          h = Object.prototype.toString,
          f = Math.max,
          p = Math.min,
          g = function () {
            return d.Date.now();
          };
        function m(e) {
          var t = typeof e;
          return !!e && ("object" == t || "function" == t);
        }
        function v(e) {
          if ("number" == typeof e) return e;
          if (
            (function (e) {
              return (
                "symbol" == typeof e ||
                ((function (e) {
                  return !!e && "object" == typeof e;
                })(e) &&
                  "[object Symbol]" == h.call(e))
              );
            })(e)
          )
            return NaN;
          if (m(e)) {
            var t = "function" == typeof e.valueOf ? e.valueOf() : e;
            e = m(t) ? t + "" : t;
          }
          if ("string" != typeof e) return 0 === e ? e : +e;
          e = e.replace(r, "");
          var i = o.test(e);
          return i || a.test(e)
            ? l(e.slice(2), i ? 2 : 8)
            : s.test(e)
            ? NaN
            : +e;
        }
        e.exports = function (e, t, i) {
          var r = !0,
            s = !0;
          if ("function" != typeof e) throw new TypeError(n);
          return (
            m(i) &&
              ((r = "leading" in i ? !!i.leading : r),
              (s = "trailing" in i ? !!i.trailing : s)),
            (function (e, t, i) {
              var r,
                s,
                o,
                a,
                l,
                c,
                u = 0,
                d = !1,
                h = !1,
                b = !0;
              if ("function" != typeof e) throw new TypeError(n);
              function _(t) {
                var i = r,
                  n = s;
                return (r = s = void 0), (u = t), (a = e.apply(n, i));
              }
              function y(e) {
                return (u = e), (l = setTimeout(x, t)), d ? _(e) : a;
              }
              function w(e) {
                var i = e - c;
                return void 0 === c || i >= t || i < 0 || (h && e - u >= o);
              }
              function x() {
                var e = g();
                if (w(e)) return E(e);
                l = setTimeout(
                  x,
                  (function (e) {
                    var i = t - (e - c);
                    return h ? p(i, o - (e - u)) : i;
                  })(e)
                );
              }
              function E(e) {
                return (l = void 0), b && r ? _(e) : ((r = s = void 0), a);
              }
              function k() {
                var e = g(),
                  i = w(e);
                if (((r = arguments), (s = this), (c = e), i)) {
                  if (void 0 === l) return y(c);
                  if (h) return (l = setTimeout(x, t)), _(c);
                }
                return void 0 === l && (l = setTimeout(x, t)), a;
              }
              return (
                (t = v(t) || 0),
                m(i) &&
                  ((d = !!i.leading),
                  (o = (h = "maxWait" in i) ? f(v(i.maxWait) || 0, t) : o),
                  (b = "trailing" in i ? !!i.trailing : b)),
                (k.cancel = function () {
                  void 0 !== l && clearTimeout(l),
                    (u = 0),
                    (r = c = s = l = void 0);
                }),
                (k.flush = function () {
                  return void 0 === l ? a : E(g());
                }),
                k
              );
            })(e, t, { leading: r, maxWait: t, trailing: s })
          );
        };
      },
    },
    t = {};
  function i(n) {
    var r = t[n];
    if (void 0 !== r) return r.exports;
    var s = (t[n] = { exports: {} });
    return e[n](s, s.exports, i), s.exports;
  }
  (i.n = function (e) {
    var t =
      e && e.__esModule
        ? function () {
            return e.default;
          }
        : function () {
            return e;
          };
    return i.d(t, { a: t }), t;
  }),
    (i.d = function (e, t) {
      for (var n in t)
        i.o(t, n) &&
          !i.o(e, n) &&
          Object.defineProperty(e, n, { enumerable: !0, get: t[n] });
    }),
    (i.g = (function () {
      if ("object" == typeof globalThis) return globalThis;
      try {
        return this || new Function("return this")();
      } catch (e) {
        if ("object" == typeof window) return window;
      }
    })()),
    (i.o = function (e, t) {
      return Object.prototype.hasOwnProperty.call(e, t);
    }),
    (i.r = function (e) {
      "undefined" != typeof Symbol &&
        Symbol.toStringTag &&
        Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
        Object.defineProperty(e, "__esModule", { value: !0 });
    }),
    (function () {
      "use strict";
      var e = {};
      i.r(e),
        i.d(e, {
          afterMain: function () {
            return x;
          },
          afterRead: function () {
            return _;
          },
          afterWrite: function () {
            return S;
          },
          applyStyles: function () {
            return D;
          },
          arrow: function () {
            return J;
          },
          auto: function () {
            return a;
          },
          basePlacements: function () {
            return l;
          },
          beforeMain: function () {
            return y;
          },
          beforeRead: function () {
            return v;
          },
          beforeWrite: function () {
            return E;
          },
          bottom: function () {
            return r;
          },
          clippingParents: function () {
            return d;
          },
          computeStyles: function () {
            return ie;
          },
          createPopper: function () {
            return Te;
          },
          createPopperBase: function () {
            return Ce;
          },
          createPopperLite: function () {
            return De;
          },
          detectOverflow: function () {
            return ve;
          },
          end: function () {
            return u;
          },
          eventListeners: function () {
            return re;
          },
          flip: function () {
            return be;
          },
          hide: function () {
            return we;
          },
          left: function () {
            return o;
          },
          main: function () {
            return w;
          },
          modifierPhases: function () {
            return A;
          },
          offset: function () {
            return xe;
          },
          placements: function () {
            return m;
          },
          popper: function () {
            return f;
          },
          popperGenerator: function () {
            return je;
          },
          popperOffsets: function () {
            return Ee;
          },
          preventOverflow: function () {
            return ke;
          },
          read: function () {
            return b;
          },
          reference: function () {
            return p;
          },
          right: function () {
            return s;
          },
          start: function () {
            return c;
          },
          top: function () {
            return n;
          },
          variationPlacements: function () {
            return g;
          },
          viewport: function () {
            return h;
          },
          write: function () {
            return k;
          },
        });
      var t = {};
      i.r(t),
        i.d(t, {
          Alert: function () {
            return At;
          },
          Button: function () {
            return Ot;
          },
          Carousel: function () {
            return ai;
          },
          Collapse: function () {
            return wi;
          },
          Dropdown: function () {
            return Qi;
          },
          Modal: function () {
            return On;
          },
          Offcanvas: function () {
            return Qn;
          },
          Popover: function () {
            return gr;
          },
          ScrollSpy: function () {
            return Ar;
          },
          Tab: function () {
            return Qr;
          },
          Toast: function () {
            return as;
          },
          Tooltip: function () {
            return hr;
          },
        });
      var n = "top",
        r = "bottom",
        s = "right",
        o = "left",
        a = "auto",
        l = [n, r, s, o],
        c = "start",
        u = "end",
        d = "clippingParents",
        h = "viewport",
        f = "popper",
        p = "reference",
        g = l.reduce(function (e, t) {
          return e.concat([t + "-" + c, t + "-" + u]);
        }, []),
        m = [].concat(l, [a]).reduce(function (e, t) {
          return e.concat([t, t + "-" + c, t + "-" + u]);
        }, []),
        v = "beforeRead",
        b = "read",
        _ = "afterRead",
        y = "beforeMain",
        w = "main",
        x = "afterMain",
        E = "beforeWrite",
        k = "write",
        S = "afterWrite",
        A = [v, b, _, y, w, x, E, k, S];
      function L(e) {
        return e ? (e.nodeName || "").toLowerCase() : null;
      }
      function O(e) {
        if (null == e) return window;
        if ("[object Window]" !== e.toString()) {
          var t = e.ownerDocument;
          return (t && t.defaultView) || window;
        }
        return e;
      }
      function j(e) {
        return e instanceof O(e).Element || e instanceof Element;
      }
      function C(e) {
        return e instanceof O(e).HTMLElement || e instanceof HTMLElement;
      }
      function T(e) {
        return (
          "undefined" != typeof ShadowRoot &&
          (e instanceof O(e).ShadowRoot || e instanceof ShadowRoot)
        );
      }
      var D = {
        name: "applyStyles",
        enabled: !0,
        phase: "write",
        fn: function (e) {
          var t = e.state;
          Object.keys(t.elements).forEach(function (e) {
            var i = t.styles[e] || {},
              n = t.attributes[e] || {},
              r = t.elements[e];
            C(r) &&
              L(r) &&
              (Object.assign(r.style, i),
              Object.keys(n).forEach(function (e) {
                var t = n[e];
                !1 === t
                  ? r.removeAttribute(e)
                  : r.setAttribute(e, !0 === t ? "" : t);
              }));
          });
        },
        effect: function (e) {
          var t = e.state,
            i = {
              popper: {
                position: t.options.strategy,
                left: "0",
                top: "0",
                margin: "0",
              },
              arrow: { position: "absolute" },
              reference: {},
            };
          return (
            Object.assign(t.elements.popper.style, i.popper),
            (t.styles = i),
            t.elements.arrow && Object.assign(t.elements.arrow.style, i.arrow),
            function () {
              Object.keys(t.elements).forEach(function (e) {
                var n = t.elements[e],
                  r = t.attributes[e] || {},
                  s = Object.keys(
                    t.styles.hasOwnProperty(e) ? t.styles[e] : i[e]
                  ).reduce(function (e, t) {
                    return (e[t] = ""), e;
                  }, {});
                C(n) &&
                  L(n) &&
                  (Object.assign(n.style, s),
                  Object.keys(r).forEach(function (e) {
                    n.removeAttribute(e);
                  }));
              });
            }
          );
        },
        requires: ["computeStyles"],
      };
      function P(e) {
        return e.split("-")[0];
      }
      var I = Math.max,
        N = Math.min,
        M = Math.round;
      function F() {
        var e = navigator.userAgentData;
        return null != e && e.brands
          ? e.brands
              .map(function (e) {
                return e.brand + "/" + e.version;
              })
              .join(" ")
          : navigator.userAgent;
      }
      function z() {
        return !/^((?!chrome|android).)*safari/i.test(F());
      }
      function R(e, t, i) {
        void 0 === t && (t = !1), void 0 === i && (i = !1);
        var n = e.getBoundingClientRect(),
          r = 1,
          s = 1;
        t &&
          C(e) &&
          ((r = (e.offsetWidth > 0 && M(n.width) / e.offsetWidth) || 1),
          (s = (e.offsetHeight > 0 && M(n.height) / e.offsetHeight) || 1));
        var o = (j(e) ? O(e) : window).visualViewport,
          a = !z() && i,
          l = (n.left + (a && o ? o.offsetLeft : 0)) / r,
          c = (n.top + (a && o ? o.offsetTop : 0)) / s,
          u = n.width / r,
          d = n.height / s;
        return {
          width: u,
          height: d,
          top: c,
          right: l + u,
          bottom: c + d,
          left: l,
          x: l,
          y: c,
        };
      }
      function $(e) {
        var t = R(e),
          i = e.offsetWidth,
          n = e.offsetHeight;
        return (
          Math.abs(t.width - i) <= 1 && (i = t.width),
          Math.abs(t.height - n) <= 1 && (n = t.height),
          { x: e.offsetLeft, y: e.offsetTop, width: i, height: n }
        );
      }
      function W(e, t) {
        var i = t.getRootNode && t.getRootNode();
        if (e.contains(t)) return !0;
        if (i && T(i)) {
          var n = t;
          do {
            if (n && e.isSameNode(n)) return !0;
            n = n.parentNode || n.host;
          } while (n);
        }
        return !1;
      }
      function q(e) {
        return O(e).getComputedStyle(e);
      }
      function B(e) {
        return ["table", "td", "th"].indexOf(L(e)) >= 0;
      }
      function H(e) {
        return ((j(e) ? e.ownerDocument : e.document) || window.document)
          .documentElement;
      }
      function V(e) {
        return "html" === L(e)
          ? e
          : e.assignedSlot || e.parentNode || (T(e) ? e.host : null) || H(e);
      }
      function Q(e) {
        return C(e) && "fixed" !== q(e).position ? e.offsetParent : null;
      }
      function X(e) {
        for (var t = O(e), i = Q(e); i && B(i) && "static" === q(i).position; )
          i = Q(i);
        return i &&
          ("html" === L(i) || ("body" === L(i) && "static" === q(i).position))
          ? t
          : i ||
              (function (e) {
                var t = /firefox/i.test(F());
                if (/Trident/i.test(F()) && C(e) && "fixed" === q(e).position)
                  return null;
                var i = V(e);
                for (
                  T(i) && (i = i.host);
                  C(i) && ["html", "body"].indexOf(L(i)) < 0;

                ) {
                  var n = q(i);
                  if (
                    "none" !== n.transform ||
                    "none" !== n.perspective ||
                    "paint" === n.contain ||
                    -1 !== ["transform", "perspective"].indexOf(n.willChange) ||
                    (t && "filter" === n.willChange) ||
                    (t && n.filter && "none" !== n.filter)
                  )
                    return i;
                  i = i.parentNode;
                }
                return null;
              })(e) ||
              t;
      }
      function Y(e) {
        return ["top", "bottom"].indexOf(e) >= 0 ? "x" : "y";
      }
      function U(e, t, i) {
        return I(e, N(t, i));
      }
      function K(e) {
        return Object.assign({}, { top: 0, right: 0, bottom: 0, left: 0 }, e);
      }
      function G(e, t) {
        return t.reduce(function (t, i) {
          return (t[i] = e), t;
        }, {});
      }
      var J = {
        name: "arrow",
        enabled: !0,
        phase: "main",
        fn: function (e) {
          var t,
            i = e.state,
            a = e.name,
            c = e.options,
            u = i.elements.arrow,
            d = i.modifiersData.popperOffsets,
            h = P(i.placement),
            f = Y(h),
            p = [o, s].indexOf(h) >= 0 ? "height" : "width";
          if (u && d) {
            var g = (function (e, t) {
                return K(
                  "number" !=
                    typeof (e =
                      "function" == typeof e
                        ? e(
                            Object.assign({}, t.rects, {
                              placement: t.placement,
                            })
                          )
                        : e)
                    ? e
                    : G(e, l)
                );
              })(c.padding, i),
              m = $(u),
              v = "y" === f ? n : o,
              b = "y" === f ? r : s,
              _ =
                i.rects.reference[p] +
                i.rects.reference[f] -
                d[f] -
                i.rects.popper[p],
              y = d[f] - i.rects.reference[f],
              w = X(u),
              x = w
                ? "y" === f
                  ? w.clientHeight || 0
                  : w.clientWidth || 0
                : 0,
              E = _ / 2 - y / 2,
              k = g[v],
              S = x - m[p] - g[b],
              A = x / 2 - m[p] / 2 + E,
              L = U(k, A, S),
              O = f;
            i.modifiersData[a] =
              (((t = {})[O] = L), (t.centerOffset = L - A), t);
          }
        },
        effect: function (e) {
          var t = e.state,
            i = e.options.element,
            n = void 0 === i ? "[data-popper-arrow]" : i;
          null != n &&
            ("string" != typeof n ||
              (n = t.elements.popper.querySelector(n))) &&
            W(t.elements.popper, n) &&
            (t.elements.arrow = n);
        },
        requires: ["popperOffsets"],
        requiresIfExists: ["preventOverflow"],
      };
      function Z(e) {
        return e.split("-")[1];
      }
      var ee = { top: "auto", right: "auto", bottom: "auto", left: "auto" };
      function te(e) {
        var t,
          i = e.popper,
          a = e.popperRect,
          l = e.placement,
          c = e.variation,
          d = e.offsets,
          h = e.position,
          f = e.gpuAcceleration,
          p = e.adaptive,
          g = e.roundOffsets,
          m = e.isFixed,
          v = d.x,
          b = void 0 === v ? 0 : v,
          _ = d.y,
          y = void 0 === _ ? 0 : _,
          w = "function" == typeof g ? g({ x: b, y: y }) : { x: b, y: y };
        (b = w.x), (y = w.y);
        var x = d.hasOwnProperty("x"),
          E = d.hasOwnProperty("y"),
          k = o,
          S = n,
          A = window;
        if (p) {
          var L = X(i),
            j = "clientHeight",
            C = "clientWidth";
          L === O(i) &&
            "static" !== q((L = H(i))).position &&
            "absolute" === h &&
            ((j = "scrollHeight"), (C = "scrollWidth")),
            (l === n || ((l === o || l === s) && c === u)) &&
              ((S = r),
              (y -=
                (m && L === A && A.visualViewport
                  ? A.visualViewport.height
                  : L[j]) - a.height),
              (y *= f ? 1 : -1)),
            (l !== o && ((l !== n && l !== r) || c !== u)) ||
              ((k = s),
              (b -=
                (m && L === A && A.visualViewport
                  ? A.visualViewport.width
                  : L[C]) - a.width),
              (b *= f ? 1 : -1));
        }
        var T,
          D = Object.assign({ position: h }, p && ee),
          P =
            !0 === g
              ? (function (e) {
                  var t = e.x,
                    i = e.y,
                    n = window.devicePixelRatio || 1;
                  return { x: M(t * n) / n || 0, y: M(i * n) / n || 0 };
                })({ x: b, y: y })
              : { x: b, y: y };
        return (
          (b = P.x),
          (y = P.y),
          f
            ? Object.assign(
                {},
                D,
                (((T = {})[S] = E ? "0" : ""),
                (T[k] = x ? "0" : ""),
                (T.transform =
                  (A.devicePixelRatio || 1) <= 1
                    ? "translate(" + b + "px, " + y + "px)"
                    : "translate3d(" + b + "px, " + y + "px, 0)"),
                T)
              )
            : Object.assign(
                {},
                D,
                (((t = {})[S] = E ? y + "px" : ""),
                (t[k] = x ? b + "px" : ""),
                (t.transform = ""),
                t)
              )
        );
      }
      var ie = {
          name: "computeStyles",
          enabled: !0,
          phase: "beforeWrite",
          fn: function (e) {
            var t = e.state,
              i = e.options,
              n = i.gpuAcceleration,
              r = void 0 === n || n,
              s = i.adaptive,
              o = void 0 === s || s,
              a = i.roundOffsets,
              l = void 0 === a || a,
              c = {
                placement: P(t.placement),
                variation: Z(t.placement),
                popper: t.elements.popper,
                popperRect: t.rects.popper,
                gpuAcceleration: r,
                isFixed: "fixed" === t.options.strategy,
              };
            null != t.modifiersData.popperOffsets &&
              (t.styles.popper = Object.assign(
                {},
                t.styles.popper,
                te(
                  Object.assign({}, c, {
                    offsets: t.modifiersData.popperOffsets,
                    position: t.options.strategy,
                    adaptive: o,
                    roundOffsets: l,
                  })
                )
              )),
              null != t.modifiersData.arrow &&
                (t.styles.arrow = Object.assign(
                  {},
                  t.styles.arrow,
                  te(
                    Object.assign({}, c, {
                      offsets: t.modifiersData.arrow,
                      position: "absolute",
                      adaptive: !1,
                      roundOffsets: l,
                    })
                  )
                )),
              (t.attributes.popper = Object.assign({}, t.attributes.popper, {
                "data-popper-placement": t.placement,
              }));
          },
          data: {},
        },
        ne = { passive: !0 },
        re = {
          name: "eventListeners",
          enabled: !0,
          phase: "write",
          fn: function () {},
          effect: function (e) {
            var t = e.state,
              i = e.instance,
              n = e.options,
              r = n.scroll,
              s = void 0 === r || r,
              o = n.resize,
              a = void 0 === o || o,
              l = O(t.elements.popper),
              c = [].concat(t.scrollParents.reference, t.scrollParents.popper);
            return (
              s &&
                c.forEach(function (e) {
                  e.addEventListener("scroll", i.update, ne);
                }),
              a && l.addEventListener("resize", i.update, ne),
              function () {
                s &&
                  c.forEach(function (e) {
                    e.removeEventListener("scroll", i.update, ne);
                  }),
                  a && l.removeEventListener("resize", i.update, ne);
              }
            );
          },
          data: {},
        },
        se = { left: "right", right: "left", bottom: "top", top: "bottom" };
      function oe(e) {
        return e.replace(/left|right|bottom|top/g, function (e) {
          return se[e];
        });
      }
      var ae = { start: "end", end: "start" };
      function le(e) {
        return e.replace(/start|end/g, function (e) {
          return ae[e];
        });
      }
      function ce(e) {
        var t = O(e);
        return { scrollLeft: t.pageXOffset, scrollTop: t.pageYOffset };
      }
      function ue(e) {
        return R(H(e)).left + ce(e).scrollLeft;
      }
      function de(e) {
        var t = q(e),
          i = t.overflow,
          n = t.overflowX,
          r = t.overflowY;
        return /auto|scroll|overlay|hidden/.test(i + r + n);
      }
      function he(e) {
        return ["html", "body", "#document"].indexOf(L(e)) >= 0
          ? e.ownerDocument.body
          : C(e) && de(e)
          ? e
          : he(V(e));
      }
      function fe(e, t) {
        var i;
        void 0 === t && (t = []);
        var n = he(e),
          r = n === (null == (i = e.ownerDocument) ? void 0 : i.body),
          s = O(n),
          o = r ? [s].concat(s.visualViewport || [], de(n) ? n : []) : n,
          a = t.concat(o);
        return r ? a : a.concat(fe(V(o)));
      }
      function pe(e) {
        return Object.assign({}, e, {
          left: e.x,
          top: e.y,
          right: e.x + e.width,
          bottom: e.y + e.height,
        });
      }
      function ge(e, t, i) {
        return t === h
          ? pe(
              (function (e, t) {
                var i = O(e),
                  n = H(e),
                  r = i.visualViewport,
                  s = n.clientWidth,
                  o = n.clientHeight,
                  a = 0,
                  l = 0;
                if (r) {
                  (s = r.width), (o = r.height);
                  var c = z();
                  (c || (!c && "fixed" === t)) &&
                    ((a = r.offsetLeft), (l = r.offsetTop));
                }
                return { width: s, height: o, x: a + ue(e), y: l };
              })(e, i)
            )
          : j(t)
          ? (function (e, t) {
              var i = R(e, !1, "fixed" === t);
              return (
                (i.top = i.top + e.clientTop),
                (i.left = i.left + e.clientLeft),
                (i.bottom = i.top + e.clientHeight),
                (i.right = i.left + e.clientWidth),
                (i.width = e.clientWidth),
                (i.height = e.clientHeight),
                (i.x = i.left),
                (i.y = i.top),
                i
              );
            })(t, i)
          : pe(
              (function (e) {
                var t,
                  i = H(e),
                  n = ce(e),
                  r = null == (t = e.ownerDocument) ? void 0 : t.body,
                  s = I(
                    i.scrollWidth,
                    i.clientWidth,
                    r ? r.scrollWidth : 0,
                    r ? r.clientWidth : 0
                  ),
                  o = I(
                    i.scrollHeight,
                    i.clientHeight,
                    r ? r.scrollHeight : 0,
                    r ? r.clientHeight : 0
                  ),
                  a = -n.scrollLeft + ue(e),
                  l = -n.scrollTop;
                return (
                  "rtl" === q(r || i).direction &&
                    (a += I(i.clientWidth, r ? r.clientWidth : 0) - s),
                  { width: s, height: o, x: a, y: l }
                );
              })(H(e))
            );
      }
      function me(e) {
        var t,
          i = e.reference,
          a = e.element,
          l = e.placement,
          d = l ? P(l) : null,
          h = l ? Z(l) : null,
          f = i.x + i.width / 2 - a.width / 2,
          p = i.y + i.height / 2 - a.height / 2;
        switch (d) {
          case n:
            t = { x: f, y: i.y - a.height };
            break;
          case r:
            t = { x: f, y: i.y + i.height };
            break;
          case s:
            t = { x: i.x + i.width, y: p };
            break;
          case o:
            t = { x: i.x - a.width, y: p };
            break;
          default:
            t = { x: i.x, y: i.y };
        }
        var g = d ? Y(d) : null;
        if (null != g) {
          var m = "y" === g ? "height" : "width";
          switch (h) {
            case c:
              t[g] = t[g] - (i[m] / 2 - a[m] / 2);
              break;
            case u:
              t[g] = t[g] + (i[m] / 2 - a[m] / 2);
          }
        }
        return t;
      }
      function ve(e, t) {
        void 0 === t && (t = {});
        var i = t,
          o = i.placement,
          a = void 0 === o ? e.placement : o,
          c = i.strategy,
          u = void 0 === c ? e.strategy : c,
          g = i.boundary,
          m = void 0 === g ? d : g,
          v = i.rootBoundary,
          b = void 0 === v ? h : v,
          _ = i.elementContext,
          y = void 0 === _ ? f : _,
          w = i.altBoundary,
          x = void 0 !== w && w,
          E = i.padding,
          k = void 0 === E ? 0 : E,
          S = K("number" != typeof k ? k : G(k, l)),
          A = y === f ? p : f,
          O = e.rects.popper,
          T = e.elements[x ? A : y],
          D = (function (e, t, i, n) {
            var r =
                "clippingParents" === t
                  ? (function (e) {
                      var t = fe(V(e)),
                        i =
                          ["absolute", "fixed"].indexOf(q(e).position) >= 0 &&
                          C(e)
                            ? X(e)
                            : e;
                      return j(i)
                        ? t.filter(function (e) {
                            return j(e) && W(e, i) && "body" !== L(e);
                          })
                        : [];
                    })(e)
                  : [].concat(t),
              s = [].concat(r, [i]),
              o = s[0],
              a = s.reduce(function (t, i) {
                var r = ge(e, i, n);
                return (
                  (t.top = I(r.top, t.top)),
                  (t.right = N(r.right, t.right)),
                  (t.bottom = N(r.bottom, t.bottom)),
                  (t.left = I(r.left, t.left)),
                  t
                );
              }, ge(e, o, n));
            return (
              (a.width = a.right - a.left),
              (a.height = a.bottom - a.top),
              (a.x = a.left),
              (a.y = a.top),
              a
            );
          })(j(T) ? T : T.contextElement || H(e.elements.popper), m, b, u),
          P = R(e.elements.reference),
          M = me({
            reference: P,
            element: O,
            strategy: "absolute",
            placement: a,
          }),
          F = pe(Object.assign({}, O, M)),
          z = y === f ? F : P,
          $ = {
            top: D.top - z.top + S.top,
            bottom: z.bottom - D.bottom + S.bottom,
            left: D.left - z.left + S.left,
            right: z.right - D.right + S.right,
          },
          B = e.modifiersData.offset;
        if (y === f && B) {
          var Q = B[a];
          Object.keys($).forEach(function (e) {
            var t = [s, r].indexOf(e) >= 0 ? 1 : -1,
              i = [n, r].indexOf(e) >= 0 ? "y" : "x";
            $[e] += Q[i] * t;
          });
        }
        return $;
      }
      var be = {
        name: "flip",
        enabled: !0,
        phase: "main",
        fn: function (e) {
          var t = e.state,
            i = e.options,
            u = e.name;
          if (!t.modifiersData[u]._skip) {
            for (
              var d = i.mainAxis,
                h = void 0 === d || d,
                f = i.altAxis,
                p = void 0 === f || f,
                v = i.fallbackPlacements,
                b = i.padding,
                _ = i.boundary,
                y = i.rootBoundary,
                w = i.altBoundary,
                x = i.flipVariations,
                E = void 0 === x || x,
                k = i.allowedAutoPlacements,
                S = t.options.placement,
                A = P(S),
                L =
                  v ||
                  (A !== S && E
                    ? (function (e) {
                        if (P(e) === a) return [];
                        var t = oe(e);
                        return [le(e), t, le(t)];
                      })(S)
                    : [oe(S)]),
                O = [S].concat(L).reduce(function (e, i) {
                  return e.concat(
                    P(i) === a
                      ? (function (e, t) {
                          void 0 === t && (t = {});
                          var i = t,
                            n = i.placement,
                            r = i.boundary,
                            s = i.rootBoundary,
                            o = i.padding,
                            a = i.flipVariations,
                            c = i.allowedAutoPlacements,
                            u = void 0 === c ? m : c,
                            d = Z(n),
                            h = d
                              ? a
                                ? g
                                : g.filter(function (e) {
                                    return Z(e) === d;
                                  })
                              : l,
                            f = h.filter(function (e) {
                              return u.indexOf(e) >= 0;
                            });
                          0 === f.length && (f = h);
                          var p = f.reduce(function (t, i) {
                            return (
                              (t[i] = ve(e, {
                                placement: i,
                                boundary: r,
                                rootBoundary: s,
                                padding: o,
                              })[P(i)]),
                              t
                            );
                          }, {});
                          return Object.keys(p).sort(function (e, t) {
                            return p[e] - p[t];
                          });
                        })(t, {
                          placement: i,
                          boundary: _,
                          rootBoundary: y,
                          padding: b,
                          flipVariations: E,
                          allowedAutoPlacements: k,
                        })
                      : i
                  );
                }, []),
                j = t.rects.reference,
                C = t.rects.popper,
                T = new Map(),
                D = !0,
                I = O[0],
                N = 0;
              N < O.length;
              N++
            ) {
              var M = O[N],
                F = P(M),
                z = Z(M) === c,
                R = [n, r].indexOf(F) >= 0,
                $ = R ? "width" : "height",
                W = ve(t, {
                  placement: M,
                  boundary: _,
                  rootBoundary: y,
                  altBoundary: w,
                  padding: b,
                }),
                q = R ? (z ? s : o) : z ? r : n;
              j[$] > C[$] && (q = oe(q));
              var B = oe(q),
                H = [];
              if (
                (h && H.push(W[F] <= 0),
                p && H.push(W[q] <= 0, W[B] <= 0),
                H.every(function (e) {
                  return e;
                }))
              ) {
                (I = M), (D = !1);
                break;
              }
              T.set(M, H);
            }
            if (D)
              for (
                var V = function (e) {
                    var t = O.find(function (t) {
                      var i = T.get(t);
                      if (i)
                        return i.slice(0, e).every(function (e) {
                          return e;
                        });
                    });
                    if (t) return (I = t), "break";
                  },
                  Q = E ? 3 : 1;
                Q > 0 && "break" !== V(Q);
                Q--
              );
            t.placement !== I &&
              ((t.modifiersData[u]._skip = !0),
              (t.placement = I),
              (t.reset = !0));
          }
        },
        requiresIfExists: ["offset"],
        data: { _skip: !1 },
      };
      function _e(e, t, i) {
        return (
          void 0 === i && (i = { x: 0, y: 0 }),
          {
            top: e.top - t.height - i.y,
            right: e.right - t.width + i.x,
            bottom: e.bottom - t.height + i.y,
            left: e.left - t.width - i.x,
          }
        );
      }
      function ye(e) {
        return [n, s, r, o].some(function (t) {
          return e[t] >= 0;
        });
      }
      var we = {
          name: "hide",
          enabled: !0,
          phase: "main",
          requiresIfExists: ["preventOverflow"],
          fn: function (e) {
            var t = e.state,
              i = e.name,
              n = t.rects.reference,
              r = t.rects.popper,
              s = t.modifiersData.preventOverflow,
              o = ve(t, { elementContext: "reference" }),
              a = ve(t, { altBoundary: !0 }),
              l = _e(o, n),
              c = _e(a, r, s),
              u = ye(l),
              d = ye(c);
            (t.modifiersData[i] = {
              referenceClippingOffsets: l,
              popperEscapeOffsets: c,
              isReferenceHidden: u,
              hasPopperEscaped: d,
            }),
              (t.attributes.popper = Object.assign({}, t.attributes.popper, {
                "data-popper-reference-hidden": u,
                "data-popper-escaped": d,
              }));
          },
        },
        xe = {
          name: "offset",
          enabled: !0,
          phase: "main",
          requires: ["popperOffsets"],
          fn: function (e) {
            var t = e.state,
              i = e.options,
              r = e.name,
              a = i.offset,
              l = void 0 === a ? [0, 0] : a,
              c = m.reduce(function (e, i) {
                return (
                  (e[i] = (function (e, t, i) {
                    var r = P(e),
                      a = [o, n].indexOf(r) >= 0 ? -1 : 1,
                      l =
                        "function" == typeof i
                          ? i(Object.assign({}, t, { placement: e }))
                          : i,
                      c = l[0],
                      u = l[1];
                    return (
                      (c = c || 0),
                      (u = (u || 0) * a),
                      [o, s].indexOf(r) >= 0 ? { x: u, y: c } : { x: c, y: u }
                    );
                  })(i, t.rects, l)),
                  e
                );
              }, {}),
              u = c[t.placement],
              d = u.x,
              h = u.y;
            null != t.modifiersData.popperOffsets &&
              ((t.modifiersData.popperOffsets.x += d),
              (t.modifiersData.popperOffsets.y += h)),
              (t.modifiersData[r] = c);
          },
        },
        Ee = {
          name: "popperOffsets",
          enabled: !0,
          phase: "read",
          fn: function (e) {
            var t = e.state,
              i = e.name;
            t.modifiersData[i] = me({
              reference: t.rects.reference,
              element: t.rects.popper,
              strategy: "absolute",
              placement: t.placement,
            });
          },
          data: {},
        },
        ke = {
          name: "preventOverflow",
          enabled: !0,
          phase: "main",
          fn: function (e) {
            var t = e.state,
              i = e.options,
              a = e.name,
              l = i.mainAxis,
              u = void 0 === l || l,
              d = i.altAxis,
              h = void 0 !== d && d,
              f = i.boundary,
              p = i.rootBoundary,
              g = i.altBoundary,
              m = i.padding,
              v = i.tether,
              b = void 0 === v || v,
              _ = i.tetherOffset,
              y = void 0 === _ ? 0 : _,
              w = ve(t, {
                boundary: f,
                rootBoundary: p,
                padding: m,
                altBoundary: g,
              }),
              x = P(t.placement),
              E = Z(t.placement),
              k = !E,
              S = Y(x),
              A = "x" === S ? "y" : "x",
              L = t.modifiersData.popperOffsets,
              O = t.rects.reference,
              j = t.rects.popper,
              C =
                "function" == typeof y
                  ? y(Object.assign({}, t.rects, { placement: t.placement }))
                  : y,
              T =
                "number" == typeof C
                  ? { mainAxis: C, altAxis: C }
                  : Object.assign({ mainAxis: 0, altAxis: 0 }, C),
              D = t.modifiersData.offset
                ? t.modifiersData.offset[t.placement]
                : null,
              M = { x: 0, y: 0 };
            if (L) {
              if (u) {
                var F,
                  z = "y" === S ? n : o,
                  R = "y" === S ? r : s,
                  W = "y" === S ? "height" : "width",
                  q = L[S],
                  B = q + w[z],
                  H = q - w[R],
                  V = b ? -j[W] / 2 : 0,
                  Q = E === c ? O[W] : j[W],
                  K = E === c ? -j[W] : -O[W],
                  G = t.elements.arrow,
                  J = b && G ? $(G) : { width: 0, height: 0 },
                  ee = t.modifiersData["arrow#persistent"]
                    ? t.modifiersData["arrow#persistent"].padding
                    : { top: 0, right: 0, bottom: 0, left: 0 },
                  te = ee[z],
                  ie = ee[R],
                  ne = U(0, O[W], J[W]),
                  re = k
                    ? O[W] / 2 - V - ne - te - T.mainAxis
                    : Q - ne - te - T.mainAxis,
                  se = k
                    ? -O[W] / 2 + V + ne + ie + T.mainAxis
                    : K + ne + ie + T.mainAxis,
                  oe = t.elements.arrow && X(t.elements.arrow),
                  ae = oe
                    ? "y" === S
                      ? oe.clientTop || 0
                      : oe.clientLeft || 0
                    : 0,
                  le = null != (F = null == D ? void 0 : D[S]) ? F : 0,
                  ce = q + se - le,
                  ue = U(b ? N(B, q + re - le - ae) : B, q, b ? I(H, ce) : H);
                (L[S] = ue), (M[S] = ue - q);
              }
              if (h) {
                var de,
                  he = "x" === S ? n : o,
                  fe = "x" === S ? r : s,
                  pe = L[A],
                  ge = "y" === A ? "height" : "width",
                  me = pe + w[he],
                  be = pe - w[fe],
                  _e = -1 !== [n, o].indexOf(x),
                  ye = null != (de = null == D ? void 0 : D[A]) ? de : 0,
                  we = _e ? me : pe - O[ge] - j[ge] - ye + T.altAxis,
                  xe = _e ? pe + O[ge] + j[ge] - ye - T.altAxis : be,
                  Ee =
                    b && _e
                      ? (function (e, t, i) {
                          var n = U(e, t, i);
                          return n > i ? i : n;
                        })(we, pe, xe)
                      : U(b ? we : me, pe, b ? xe : be);
                (L[A] = Ee), (M[A] = Ee - pe);
              }
              t.modifiersData[a] = M;
            }
          },
          requiresIfExists: ["offset"],
        };
      function Se(e, t, i) {
        void 0 === i && (i = !1);
        var n,
          r,
          s = C(t),
          o =
            C(t) &&
            (function (e) {
              var t = e.getBoundingClientRect(),
                i = M(t.width) / e.offsetWidth || 1,
                n = M(t.height) / e.offsetHeight || 1;
              return 1 !== i || 1 !== n;
            })(t),
          a = H(t),
          l = R(e, o, i),
          c = { scrollLeft: 0, scrollTop: 0 },
          u = { x: 0, y: 0 };
        return (
          (s || (!s && !i)) &&
            (("body" !== L(t) || de(a)) &&
              (c =
                (n = t) !== O(n) && C(n)
                  ? { scrollLeft: (r = n).scrollLeft, scrollTop: r.scrollTop }
                  : ce(n)),
            C(t)
              ? (((u = R(t, !0)).x += t.clientLeft), (u.y += t.clientTop))
              : a && (u.x = ue(a))),
          {
            x: l.left + c.scrollLeft - u.x,
            y: l.top + c.scrollTop - u.y,
            width: l.width,
            height: l.height,
          }
        );
      }
      function Ae(e) {
        var t = new Map(),
          i = new Set(),
          n = [];
        function r(e) {
          i.add(e.name),
            []
              .concat(e.requires || [], e.requiresIfExists || [])
              .forEach(function (e) {
                if (!i.has(e)) {
                  var n = t.get(e);
                  n && r(n);
                }
              }),
            n.push(e);
        }
        return (
          e.forEach(function (e) {
            t.set(e.name, e);
          }),
          e.forEach(function (e) {
            i.has(e.name) || r(e);
          }),
          n
        );
      }
      var Le = { placement: "bottom", modifiers: [], strategy: "absolute" };
      function Oe() {
        for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++)
          t[i] = arguments[i];
        return !t.some(function (e) {
          return !(e && "function" == typeof e.getBoundingClientRect);
        });
      }
      function je(e) {
        void 0 === e && (e = {});
        var t = e,
          i = t.defaultModifiers,
          n = void 0 === i ? [] : i,
          r = t.defaultOptions,
          s = void 0 === r ? Le : r;
        return function (e, t, i) {
          void 0 === i && (i = s);
          var r,
            o,
            a = {
              placement: "bottom",
              orderedModifiers: [],
              options: Object.assign({}, Le, s),
              modifiersData: {},
              elements: { reference: e, popper: t },
              attributes: {},
              styles: {},
            },
            l = [],
            c = !1,
            u = {
              state: a,
              setOptions: function (i) {
                var r = "function" == typeof i ? i(a.options) : i;
                d(),
                  (a.options = Object.assign({}, s, a.options, r)),
                  (a.scrollParents = {
                    reference: j(e)
                      ? fe(e)
                      : e.contextElement
                      ? fe(e.contextElement)
                      : [],
                    popper: fe(t),
                  });
                var o,
                  c,
                  h = (function (e) {
                    var t = Ae(e);
                    return A.reduce(function (e, i) {
                      return e.concat(
                        t.filter(function (e) {
                          return e.phase === i;
                        })
                      );
                    }, []);
                  })(
                    ((o = [].concat(n, a.options.modifiers)),
                    (c = o.reduce(function (e, t) {
                      var i = e[t.name];
                      return (
                        (e[t.name] = i
                          ? Object.assign({}, i, t, {
                              options: Object.assign({}, i.options, t.options),
                              data: Object.assign({}, i.data, t.data),
                            })
                          : t),
                        e
                      );
                    }, {})),
                    Object.keys(c).map(function (e) {
                      return c[e];
                    }))
                  );
                return (
                  (a.orderedModifiers = h.filter(function (e) {
                    return e.enabled;
                  })),
                  a.orderedModifiers.forEach(function (e) {
                    var t = e.name,
                      i = e.options,
                      n = void 0 === i ? {} : i,
                      r = e.effect;
                    if ("function" == typeof r) {
                      var s = r({ state: a, name: t, instance: u, options: n });
                      l.push(s || function () {});
                    }
                  }),
                  u.update()
                );
              },
              forceUpdate: function () {
                if (!c) {
                  var e = a.elements,
                    t = e.reference,
                    i = e.popper;
                  if (Oe(t, i)) {
                    (a.rects = {
                      reference: Se(t, X(i), "fixed" === a.options.strategy),
                      popper: $(i),
                    }),
                      (a.reset = !1),
                      (a.placement = a.options.placement),
                      a.orderedModifiers.forEach(function (e) {
                        return (a.modifiersData[e.name] = Object.assign(
                          {},
                          e.data
                        ));
                      });
                    for (var n = 0; n < a.orderedModifiers.length; n++)
                      if (!0 !== a.reset) {
                        var r = a.orderedModifiers[n],
                          s = r.fn,
                          o = r.options,
                          l = void 0 === o ? {} : o,
                          d = r.name;
                        "function" == typeof s &&
                          (a =
                            s({ state: a, options: l, name: d, instance: u }) ||
                            a);
                      } else (a.reset = !1), (n = -1);
                  }
                }
              },
              update:
                ((r = function () {
                  return new Promise(function (e) {
                    u.forceUpdate(), e(a);
                  });
                }),
                function () {
                  return (
                    o ||
                      (o = new Promise(function (e) {
                        Promise.resolve().then(function () {
                          (o = void 0), e(r());
                        });
                      })),
                    o
                  );
                }),
              destroy: function () {
                d(), (c = !0);
              },
            };
          if (!Oe(e, t)) return u;
          function d() {
            l.forEach(function (e) {
              return e();
            }),
              (l = []);
          }
          return (
            u.setOptions(i).then(function (e) {
              !c && i.onFirstUpdate && i.onFirstUpdate(e);
            }),
            u
          );
        };
      }
      var Ce = je(),
        Te = je({ defaultModifiers: [re, Ee, ie, D, xe, be, ke, J, we] }),
        De = je({ defaultModifiers: [re, Ee, ie, D] });
      const Pe = "transitionend",
        Ie = (e) => {
          let t = e.getAttribute("data-bs-target");
          if (!t || "#" === t) {
            let i = e.getAttribute("href");
            if (!i || (!i.includes("#") && !i.startsWith("."))) return null;
            i.includes("#") &&
              !i.startsWith("#") &&
              (i = `#${i.split("#")[1]}`),
              (t = i && "#" !== i ? i.trim() : null);
          }
          return t;
        },
        Ne = (e) => {
          const t = Ie(e);
          return t && document.querySelector(t) ? t : null;
        },
        Me = (e) => {
          const t = Ie(e);
          return t ? document.querySelector(t) : null;
        },
        Fe = (e) => {
          e.dispatchEvent(new Event(Pe));
        },
        ze = (e) =>
          !(!e || "object" != typeof e) &&
          (void 0 !== e.jquery && (e = e[0]), void 0 !== e.nodeType),
        Re = (e) =>
          ze(e)
            ? e.jquery
              ? e[0]
              : e
            : "string" == typeof e && e.length > 0
            ? document.querySelector(e)
            : null,
        $e = (e) => {
          if (!ze(e) || 0 === e.getClientRects().length) return !1;
          const t =
              "visible" === getComputedStyle(e).getPropertyValue("visibility"),
            i = e.closest("details:not([open])");
          if (!i) return t;
          if (i !== e) {
            const t = e.closest("summary");
            if (t && t.parentNode !== i) return !1;
            if (null === t) return !1;
          }
          return t;
        },
        We = (e) =>
          !e ||
          e.nodeType !== Node.ELEMENT_NODE ||
          !!e.classList.contains("disabled") ||
          (void 0 !== e.disabled
            ? e.disabled
            : e.hasAttribute("disabled") &&
              "false" !== e.getAttribute("disabled")),
        qe = (e) => {
          if (!document.documentElement.attachShadow) return null;
          if ("function" == typeof e.getRootNode) {
            const t = e.getRootNode();
            return t instanceof ShadowRoot ? t : null;
          }
          return e instanceof ShadowRoot
            ? e
            : e.parentNode
            ? qe(e.parentNode)
            : null;
        },
        Be = () => {},
        He = (e) => {
          e.offsetHeight;
        },
        Ve = () =>
          window.jQuery && !document.body.hasAttribute("data-bs-no-jquery")
            ? window.jQuery
            : null,
        Qe = [],
        Xe = () => "rtl" === document.documentElement.dir,
        Ye = (e) => {
          var t;
          (t = () => {
            const t = Ve();
            if (t) {
              const i = e.NAME,
                n = t.fn[i];
              (t.fn[i] = e.jQueryInterface),
                (t.fn[i].Constructor = e),
                (t.fn[i].noConflict = () => ((t.fn[i] = n), e.jQueryInterface));
            }
          }),
            "loading" === document.readyState
              ? (Qe.length ||
                  document.addEventListener("DOMContentLoaded", () => {
                    for (const e of Qe) e();
                  }),
                Qe.push(t))
              : t();
        },
        Ue = (e) => {
          "function" == typeof e && e();
        },
        Ke = (e, t, i = !0) => {
          if (!i) return void Ue(e);
          const n =
            ((e) => {
              if (!e) return 0;
              let { transitionDuration: t, transitionDelay: i } =
                window.getComputedStyle(e);
              const n = Number.parseFloat(t),
                r = Number.parseFloat(i);
              return n || r
                ? ((t = t.split(",")[0]),
                  (i = i.split(",")[0]),
                  1e3 * (Number.parseFloat(t) + Number.parseFloat(i)))
                : 0;
            })(t) + 5;
          let r = !1;
          const s = ({ target: i }) => {
            i === t && ((r = !0), t.removeEventListener(Pe, s), Ue(e));
          };
          t.addEventListener(Pe, s),
            setTimeout(() => {
              r || Fe(t);
            }, n);
        },
        Ge = (e, t, i, n) => {
          const r = e.length;
          let s = e.indexOf(t);
          return -1 === s
            ? !i && n
              ? e[r - 1]
              : e[0]
            : ((s += i ? 1 : -1),
              n && (s = (s + r) % r),
              e[Math.max(0, Math.min(s, r - 1))]);
        },
        Je = /[^.]*(?=\..*)\.|.*/,
        Ze = /\..*/,
        et = /::\d+$/,
        tt = {};
      let it = 1;
      const nt = { mouseenter: "mouseover", mouseleave: "mouseout" },
        rt = new Set([
          "click",
          "dblclick",
          "mouseup",
          "mousedown",
          "contextmenu",
          "mousewheel",
          "DOMMouseScroll",
          "mouseover",
          "mouseout",
          "mousemove",
          "selectstart",
          "selectend",
          "keydown",
          "keypress",
          "keyup",
          "orientationchange",
          "touchstart",
          "touchmove",
          "touchend",
          "touchcancel",
          "pointerdown",
          "pointermove",
          "pointerup",
          "pointerleave",
          "pointercancel",
          "gesturestart",
          "gesturechange",
          "gestureend",
          "focus",
          "blur",
          "change",
          "reset",
          "select",
          "submit",
          "focusin",
          "focusout",
          "load",
          "unload",
          "beforeunload",
          "resize",
          "move",
          "DOMContentLoaded",
          "readystatechange",
          "error",
          "abort",
          "scroll",
        ]);
      function st(e, t) {
        return (t && `${t}::${it++}`) || e.uidEvent || it++;
      }
      function ot(e) {
        const t = st(e);
        return (e.uidEvent = t), (tt[t] = tt[t] || {}), tt[t];
      }
      function at(e, t, i = null) {
        return Object.values(e).find(
          (e) => e.callable === t && e.delegationSelector === i
        );
      }
      function lt(e, t, i) {
        const n = "string" == typeof t,
          r = n ? i : t || i;
        let s = ht(e);
        return rt.has(s) || (s = e), [n, r, s];
      }
      function ct(e, t, i, n, r) {
        if ("string" != typeof t || !e) return;
        let [s, o, a] = lt(t, i, n);
        if (t in nt) {
          const e = (e) =>
            function (t) {
              if (
                !t.relatedTarget ||
                (t.relatedTarget !== t.delegateTarget &&
                  !t.delegateTarget.contains(t.relatedTarget))
              )
                return e.call(this, t);
            };
          o = e(o);
        }
        const l = ot(e),
          c = l[a] || (l[a] = {}),
          u = at(c, o, s ? i : null);
        if (u) return void (u.oneOff = u.oneOff && r);
        const d = st(o, t.replace(Je, "")),
          h = s
            ? (function (e, t, i) {
                return function n(r) {
                  const s = e.querySelectorAll(t);
                  for (let { target: o } = r; o && o !== this; o = o.parentNode)
                    for (const a of s)
                      if (a === o)
                        return (
                          pt(r, { delegateTarget: o }),
                          n.oneOff && ft.off(e, r.type, t, i),
                          i.apply(o, [r])
                        );
                };
              })(e, i, o)
            : (function (e, t) {
                return function i(n) {
                  return (
                    pt(n, { delegateTarget: e }),
                    i.oneOff && ft.off(e, n.type, t),
                    t.apply(e, [n])
                  );
                };
              })(e, o);
        (h.delegationSelector = s ? i : null),
          (h.callable = o),
          (h.oneOff = r),
          (h.uidEvent = d),
          (c[d] = h),
          e.addEventListener(a, h, s);
      }
      function ut(e, t, i, n, r) {
        const s = at(t[i], n, r);
        s && (e.removeEventListener(i, s, Boolean(r)), delete t[i][s.uidEvent]);
      }
      function dt(e, t, i, n) {
        const r = t[i] || {};
        for (const s of Object.keys(r))
          if (s.includes(n)) {
            const n = r[s];
            ut(e, t, i, n.callable, n.delegationSelector);
          }
      }
      function ht(e) {
        return (e = e.replace(Ze, "")), nt[e] || e;
      }
      const ft = {
        on(e, t, i, n) {
          ct(e, t, i, n, !1);
        },
        one(e, t, i, n) {
          ct(e, t, i, n, !0);
        },
        off(e, t, i, n) {
          if ("string" != typeof t || !e) return;
          const [r, s, o] = lt(t, i, n),
            a = o !== t,
            l = ot(e),
            c = l[o] || {},
            u = t.startsWith(".");
          if (void 0 === s) {
            if (u) for (const i of Object.keys(l)) dt(e, l, i, t.slice(1));
            for (const i of Object.keys(c)) {
              const n = i.replace(et, "");
              if (!a || t.includes(n)) {
                const t = c[i];
                ut(e, l, o, t.callable, t.delegationSelector);
              }
            }
          } else {
            if (!Object.keys(c).length) return;
            ut(e, l, o, s, r ? i : null);
          }
        },
        trigger(e, t, i) {
          if ("string" != typeof t || !e) return null;
          const n = Ve();
          let r = null,
            s = !0,
            o = !0,
            a = !1;
          t !== ht(t) &&
            n &&
            ((r = n.Event(t, i)),
            n(e).trigger(r),
            (s = !r.isPropagationStopped()),
            (o = !r.isImmediatePropagationStopped()),
            (a = r.isDefaultPrevented()));
          let l = new Event(t, { bubbles: s, cancelable: !0 });
          return (
            (l = pt(l, i)),
            a && l.preventDefault(),
            o && e.dispatchEvent(l),
            l.defaultPrevented && r && r.preventDefault(),
            l
          );
        },
      };
      function pt(e, t) {
        for (const [i, n] of Object.entries(t || {}))
          try {
            e[i] = n;
          } catch (t) {
            Object.defineProperty(e, i, {
              configurable: !0,
              get() {
                return n;
              },
            });
          }
        return e;
      }
      const gt = new Map(),
        mt = {
          set(e, t, i) {
            gt.has(e) || gt.set(e, new Map());
            const n = gt.get(e);
            n.has(t) || 0 === n.size
              ? n.set(t, i)
              : console.error(
                  `Bootstrap doesn't allow more than one instance per element. Bound instance: ${
                    Array.from(n.keys())[0]
                  }.`
                );
          },
          get(e, t) {
            return (gt.has(e) && gt.get(e).get(t)) || null;
          },
          remove(e, t) {
            if (!gt.has(e)) return;
            const i = gt.get(e);
            i.delete(t), 0 === i.size && gt.delete(e);
          },
        };
      function vt(e) {
        if ("true" === e) return !0;
        if ("false" === e) return !1;
        if (e === Number(e).toString()) return Number(e);
        if ("" === e || "null" === e) return null;
        if ("string" != typeof e) return e;
        try {
          return JSON.parse(decodeURIComponent(e));
        } catch (t) {
          return e;
        }
      }
      function bt(e) {
        return e.replace(/[A-Z]/g, (e) => `-${e.toLowerCase()}`);
      }
      const _t = {
        setDataAttribute(e, t, i) {
          e.setAttribute(`data-bs-${bt(t)}`, i);
        },
        removeDataAttribute(e, t) {
          e.removeAttribute(`data-bs-${bt(t)}`);
        },
        getDataAttributes(e) {
          if (!e) return {};
          const t = {},
            i = Object.keys(e.dataset).filter(
              (e) => e.startsWith("bs") && !e.startsWith("bsConfig")
            );
          for (const n of i) {
            let i = n.replace(/^bs/, "");
            (i = i.charAt(0).toLowerCase() + i.slice(1, i.length)),
              (t[i] = vt(e.dataset[n]));
          }
          return t;
        },
        getDataAttribute(e, t) {
          return vt(e.getAttribute(`data-bs-${bt(t)}`));
        },
      };
      class yt {
        static get Default() {
          return {};
        }
        static get DefaultType() {
          return {};
        }
        static get NAME() {
          throw new Error(
            'You have to implement the static method "NAME", for each component!'
          );
        }
        _getConfig(e) {
          return (
            (e = this._mergeConfigObj(e)),
            (e = this._configAfterMerge(e)),
            this._typeCheckConfig(e),
            e
          );
        }
        _configAfterMerge(e) {
          return e;
        }
        _mergeConfigObj(e, t) {
          const i = ze(t) ? _t.getDataAttribute(t, "config") : {};
          return {
            ...this.constructor.Default,
            ...("object" == typeof i ? i : {}),
            ...(ze(t) ? _t.getDataAttributes(t) : {}),
            ...("object" == typeof e ? e : {}),
          };
        }
        _typeCheckConfig(e, t = this.constructor.DefaultType) {
          for (const n of Object.keys(t)) {
            const r = t[n],
              s = e[n],
              o = ze(s)
                ? "element"
                : null == (i = s)
                ? `${i}`
                : Object.prototype.toString
                    .call(i)
                    .match(/\s([a-z]+)/i)[1]
                    .toLowerCase();
            if (!new RegExp(r).test(o))
              throw new TypeError(
                `${this.constructor.NAME.toUpperCase()}: Option "${n}" provided type "${o}" but expected type "${r}".`
              );
          }
          var i;
        }
      }
      class wt extends yt {
        constructor(e, t) {
          super(),
            (e = Re(e)) &&
              ((this._element = e),
              (this._config = this._getConfig(t)),
              mt.set(this._element, this.constructor.DATA_KEY, this));
        }
        dispose() {
          mt.remove(this._element, this.constructor.DATA_KEY),
            ft.off(this._element, this.constructor.EVENT_KEY);
          for (const e of Object.getOwnPropertyNames(this)) this[e] = null;
        }
        _queueCallback(e, t, i = !0) {
          Ke(e, t, i);
        }
        _getConfig(e) {
          return (
            (e = this._mergeConfigObj(e, this._element)),
            (e = this._configAfterMerge(e)),
            this._typeCheckConfig(e),
            e
          );
        }
        static getInstance(e) {
          return mt.get(Re(e), this.DATA_KEY);
        }
        static getOrCreateInstance(e, t = {}) {
          return (
            this.getInstance(e) || new this(e, "object" == typeof t ? t : null)
          );
        }
        static get VERSION() {
          return "5.2.3";
        }
        static get DATA_KEY() {
          return `bs.${this.NAME}`;
        }
        static get EVENT_KEY() {
          return `.${this.DATA_KEY}`;
        }
        static eventName(e) {
          return `${e}${this.EVENT_KEY}`;
        }
      }
      const xt = (e, t = "hide") => {
          const i = `click.dismiss${e.EVENT_KEY}`,
            n = e.NAME;
          ft.on(document, i, `[data-bs-dismiss="${n}"]`, function (i) {
            if (
              (["A", "AREA"].includes(this.tagName) && i.preventDefault(),
              We(this))
            )
              return;
            const r = Me(this) || this.closest(`.${n}`);
            e.getOrCreateInstance(r)[t]();
          });
        },
        Et = ".bs.alert",
        kt = `close${Et}`,
        St = `closed${Et}`;
      class At extends wt {
        static get NAME() {
          return "alert";
        }
        close() {
          if (ft.trigger(this._element, kt).defaultPrevented) return;
          this._element.classList.remove("show");
          const e = this._element.classList.contains("fade");
          this._queueCallback(() => this._destroyElement(), this._element, e);
        }
        _destroyElement() {
          this._element.remove(), ft.trigger(this._element, St), this.dispose();
        }
        static jQueryInterface(e) {
          return this.each(function () {
            const t = At.getOrCreateInstance(this);
            if ("string" == typeof e) {
              if (void 0 === t[e] || e.startsWith("_") || "constructor" === e)
                throw new TypeError(`No method named "${e}"`);
              t[e](this);
            }
          });
        }
      }
      xt(At, "close"), Ye(At);
      const Lt = '[data-bs-toggle="button"]';
      class Ot extends wt {
        static get NAME() {
          return "button";
        }
        toggle() {
          this._element.setAttribute(
            "aria-pressed",
            this._element.classList.toggle("active")
          );
        }
        static jQueryInterface(e) {
          return this.each(function () {
            const t = Ot.getOrCreateInstance(this);
            "toggle" === e && t[e]();
          });
        }
      }
      ft.on(document, "click.bs.button.data-api", Lt, (e) => {
        e.preventDefault();
        const t = e.target.closest(Lt);
        Ot.getOrCreateInstance(t).toggle();
      }),
        Ye(Ot);
      const jt = {
          find(e, t = document.documentElement) {
            return [].concat(...Element.prototype.querySelectorAll.call(t, e));
          },
          findOne(e, t = document.documentElement) {
            return Element.prototype.querySelector.call(t, e);
          },
          children(e, t) {
            return [].concat(...e.children).filter((e) => e.matches(t));
          },
          parents(e, t) {
            const i = [];
            let n = e.parentNode.closest(t);
            for (; n; ) i.push(n), (n = n.parentNode.closest(t));
            return i;
          },
          prev(e, t) {
            let i = e.previousElementSibling;
            for (; i; ) {
              if (i.matches(t)) return [i];
              i = i.previousElementSibling;
            }
            return [];
          },
          next(e, t) {
            let i = e.nextElementSibling;
            for (; i; ) {
              if (i.matches(t)) return [i];
              i = i.nextElementSibling;
            }
            return [];
          },
          focusableChildren(e) {
            const t = [
              "a",
              "button",
              "input",
              "textarea",
              "select",
              "details",
              "[tabindex]",
              '[contenteditable="true"]',
            ]
              .map((e) => `${e}:not([tabindex^="-"])`)
              .join(",");
            return this.find(t, e).filter((e) => !We(e) && $e(e));
          },
        },
        Ct = ".bs.swipe",
        Tt = `touchstart${Ct}`,
        Dt = `touchmove${Ct}`,
        Pt = `touchend${Ct}`,
        It = `pointerdown${Ct}`,
        Nt = `pointerup${Ct}`,
        Mt = { endCallback: null, leftCallback: null, rightCallback: null },
        Ft = {
          endCallback: "(function|null)",
          leftCallback: "(function|null)",
          rightCallback: "(function|null)",
        };
      class zt extends yt {
        constructor(e, t) {
          super(),
            (this._element = e),
            e &&
              zt.isSupported() &&
              ((this._config = this._getConfig(t)),
              (this._deltaX = 0),
              (this._supportPointerEvents = Boolean(window.PointerEvent)),
              this._initEvents());
        }
        static get Default() {
          return Mt;
        }
        static get DefaultType() {
          return Ft;
        }
        static get NAME() {
          return "swipe";
        }
        dispose() {
          ft.off(this._element, Ct);
        }
        _start(e) {
          this._supportPointerEvents
            ? this._eventIsPointerPenTouch(e) && (this._deltaX = e.clientX)
            : (this._deltaX = e.touches[0].clientX);
        }
        _end(e) {
          this._eventIsPointerPenTouch(e) &&
            (this._deltaX = e.clientX - this._deltaX),
            this._handleSwipe(),
            Ue(this._config.endCallback);
        }
        _move(e) {
          this._deltaX =
            e.touches && e.touches.length > 1
              ? 0
              : e.touches[0].clientX - this._deltaX;
        }
        _handleSwipe() {
          const e = Math.abs(this._deltaX);
          if (e <= 40) return;
          const t = e / this._deltaX;
          (this._deltaX = 0),
            t &&
              Ue(
                t > 0 ? this._config.rightCallback : this._config.leftCallback
              );
        }
        _initEvents() {
          this._supportPointerEvents
            ? (ft.on(this._element, It, (e) => this._start(e)),
              ft.on(this._element, Nt, (e) => this._end(e)),
              this._element.classList.add("pointer-event"))
            : (ft.on(this._element, Tt, (e) => this._start(e)),
              ft.on(this._element, Dt, (e) => this._move(e)),
              ft.on(this._element, Pt, (e) => this._end(e)));
        }
        _eventIsPointerPenTouch(e) {
          return (
            this._supportPointerEvents &&
            ("pen" === e.pointerType || "touch" === e.pointerType)
          );
        }
        static isSupported() {
          return (
            "ontouchstart" in document.documentElement ||
            navigator.maxTouchPoints > 0
          );
        }
      }
      const Rt = ".bs.carousel",
        $t = ".data-api",
        Wt = "next",
        qt = "prev",
        Bt = "left",
        Ht = "right",
        Vt = `slide${Rt}`,
        Qt = `slid${Rt}`,
        Xt = `keydown${Rt}`,
        Yt = `mouseenter${Rt}`,
        Ut = `mouseleave${Rt}`,
        Kt = `dragstart${Rt}`,
        Gt = `load${Rt}${$t}`,
        Jt = `click${Rt}${$t}`,
        Zt = "carousel",
        ei = "active",
        ti = ".active",
        ii = ".carousel-item",
        ni = ti + ii,
        ri = { ArrowLeft: Ht, ArrowRight: Bt },
        si = {
          interval: 5e3,
          keyboard: !0,
          pause: "hover",
          ride: !1,
          touch: !0,
          wrap: !0,
        },
        oi = {
          interval: "(number|boolean)",
          keyboard: "boolean",
          pause: "(string|boolean)",
          ride: "(boolean|string)",
          touch: "boolean",
          wrap: "boolean",
        };
      class ai extends wt {
        constructor(e, t) {
          super(e, t),
            (this._interval = null),
            (this._activeElement = null),
            (this._isSliding = !1),
            (this.touchTimeout = null),
            (this._swipeHelper = null),
            (this._indicatorsElement = jt.findOne(
              ".carousel-indicators",
              this._element
            )),
            this._addEventListeners(),
            this._config.ride === Zt && this.cycle();
        }
        static get Default() {
          return si;
        }
        static get DefaultType() {
          return oi;
        }
        static get NAME() {
          return "carousel";
        }
        next() {
          this._slide(Wt);
        }
        nextWhenVisible() {
          !document.hidden && $e(this._element) && this.next();
        }
        prev() {
          this._slide(qt);
        }
        pause() {
          this._isSliding && Fe(this._element), this._clearInterval();
        }
        cycle() {
          this._clearInterval(),
            this._updateInterval(),
            (this._interval = setInterval(
              () => this.nextWhenVisible(),
              this._config.interval
            ));
        }
        _maybeEnableCycle() {
          this._config.ride &&
            (this._isSliding
              ? ft.one(this._element, Qt, () => this.cycle())
              : this.cycle());
        }
        to(e) {
          const t = this._getItems();
          if (e > t.length - 1 || e < 0) return;
          if (this._isSliding)
            return void ft.one(this._element, Qt, () => this.to(e));
          const i = this._getItemIndex(this._getActive());
          if (i === e) return;
          const n = e > i ? Wt : qt;
          this._slide(n, t[e]);
        }
        dispose() {
          this._swipeHelper && this._swipeHelper.dispose(), super.dispose();
        }
        _configAfterMerge(e) {
          return (e.defaultInterval = e.interval), e;
        }
        _addEventListeners() {
          this._config.keyboard &&
            ft.on(this._element, Xt, (e) => this._keydown(e)),
            "hover" === this._config.pause &&
              (ft.on(this._element, Yt, () => this.pause()),
              ft.on(this._element, Ut, () => this._maybeEnableCycle())),
            this._config.touch &&
              zt.isSupported() &&
              this._addTouchEventListeners();
        }
        _addTouchEventListeners() {
          for (const e of jt.find(".carousel-item img", this._element))
            ft.on(e, Kt, (e) => e.preventDefault());
          const e = {
            leftCallback: () => this._slide(this._directionToOrder(Bt)),
            rightCallback: () => this._slide(this._directionToOrder(Ht)),
            endCallback: () => {
              "hover" === this._config.pause &&
                (this.pause(),
                this.touchTimeout && clearTimeout(this.touchTimeout),
                (this.touchTimeout = setTimeout(
                  () => this._maybeEnableCycle(),
                  500 + this._config.interval
                )));
            },
          };
          this._swipeHelper = new zt(this._element, e);
        }
        _keydown(e) {
          if (/input|textarea/i.test(e.target.tagName)) return;
          const t = ri[e.key];
          t && (e.preventDefault(), this._slide(this._directionToOrder(t)));
        }
        _getItemIndex(e) {
          return this._getItems().indexOf(e);
        }
        _setActiveIndicatorElement(e) {
          if (!this._indicatorsElement) return;
          const t = jt.findOne(ti, this._indicatorsElement);
          t.classList.remove(ei), t.removeAttribute("aria-current");
          const i = jt.findOne(
            `[data-bs-slide-to="${e}"]`,
            this._indicatorsElement
          );
          i && (i.classList.add(ei), i.setAttribute("aria-current", "true"));
        }
        _updateInterval() {
          const e = this._activeElement || this._getActive();
          if (!e) return;
          const t = Number.parseInt(e.getAttribute("data-bs-interval"), 10);
          this._config.interval = t || this._config.defaultInterval;
        }
        _slide(e, t = null) {
          if (this._isSliding) return;
          const i = this._getActive(),
            n = e === Wt,
            r = t || Ge(this._getItems(), i, n, this._config.wrap);
          if (r === i) return;
          const s = this._getItemIndex(r),
            o = (t) =>
              ft.trigger(this._element, t, {
                relatedTarget: r,
                direction: this._orderToDirection(e),
                from: this._getItemIndex(i),
                to: s,
              });
          if (o(Vt).defaultPrevented) return;
          if (!i || !r) return;
          const a = Boolean(this._interval);
          this.pause(),
            (this._isSliding = !0),
            this._setActiveIndicatorElement(s),
            (this._activeElement = r);
          const l = n ? "carousel-item-start" : "carousel-item-end",
            c = n ? "carousel-item-next" : "carousel-item-prev";
          r.classList.add(c),
            He(r),
            i.classList.add(l),
            r.classList.add(l),
            this._queueCallback(
              () => {
                r.classList.remove(l, c),
                  r.classList.add(ei),
                  i.classList.remove(ei, c, l),
                  (this._isSliding = !1),
                  o(Qt);
              },
              i,
              this._isAnimated()
            ),
            a && this.cycle();
        }
        _isAnimated() {
          return this._element.classList.contains("slide");
        }
        _getActive() {
          return jt.findOne(ni, this._element);
        }
        _getItems() {
          return jt.find(ii, this._element);
        }
        _clearInterval() {
          this._interval &&
            (clearInterval(this._interval), (this._interval = null));
        }
        _directionToOrder(e) {
          return Xe() ? (e === Bt ? qt : Wt) : e === Bt ? Wt : qt;
        }
        _orderToDirection(e) {
          return Xe() ? (e === qt ? Bt : Ht) : e === qt ? Ht : Bt;
        }
        static jQueryInterface(e) {
          return this.each(function () {
            const t = ai.getOrCreateInstance(this, e);
            if ("number" != typeof e) {
              if ("string" == typeof e) {
                if (void 0 === t[e] || e.startsWith("_") || "constructor" === e)
                  throw new TypeError(`No method named "${e}"`);
                t[e]();
              }
            } else t.to(e);
          });
        }
      }
      ft.on(document, Jt, "[data-bs-slide], [data-bs-slide-to]", function (e) {
        const t = Me(this);
        if (!t || !t.classList.contains(Zt)) return;
        e.preventDefault();
        const i = ai.getOrCreateInstance(t),
          n = this.getAttribute("data-bs-slide-to");
        return n
          ? (i.to(n), void i._maybeEnableCycle())
          : "next" === _t.getDataAttribute(this, "slide")
          ? (i.next(), void i._maybeEnableCycle())
          : (i.prev(), void i._maybeEnableCycle());
      }),
        ft.on(window, Gt, () => {
          const e = jt.find('[data-bs-ride="carousel"]');
          for (const t of e) ai.getOrCreateInstance(t);
        }),
        Ye(ai);
      const li = ".bs.collapse",
        ci = `show${li}`,
        ui = `shown${li}`,
        di = `hide${li}`,
        hi = `hidden${li}`,
        fi = `click${li}.data-api`,
        pi = "show",
        gi = "collapse",
        mi = "collapsing",
        vi = `:scope .${gi} .${gi}`,
        bi = '[data-bs-toggle="collapse"]',
        _i = { parent: null, toggle: !0 },
        yi = { parent: "(null|element)", toggle: "boolean" };
      class wi extends wt {
        constructor(e, t) {
          super(e, t), (this._isTransitioning = !1), (this._triggerArray = []);
          const i = jt.find(bi);
          for (const e of i) {
            const t = Ne(e),
              i = jt.find(t).filter((e) => e === this._element);
            null !== t && i.length && this._triggerArray.push(e);
          }
          this._initializeChildren(),
            this._config.parent ||
              this._addAriaAndCollapsedClass(
                this._triggerArray,
                this._isShown()
              ),
            this._config.toggle && this.toggle();
        }
        static get Default() {
          return _i;
        }
        static get DefaultType() {
          return yi;
        }
        static get NAME() {
          return "collapse";
        }
        toggle() {
          this._isShown() ? this.hide() : this.show();
        }
        show() {
          if (this._isTransitioning || this._isShown()) return;
          let e = [];
          if (
            (this._config.parent &&
              (e = this._getFirstLevelChildren(
                ".collapse.show, .collapse.collapsing"
              )
                .filter((e) => e !== this._element)
                .map((e) => wi.getOrCreateInstance(e, { toggle: !1 }))),
            e.length && e[0]._isTransitioning)
          )
            return;
          if (ft.trigger(this._element, ci).defaultPrevented) return;
          for (const t of e) t.hide();
          const t = this._getDimension();
          this._element.classList.remove(gi),
            this._element.classList.add(mi),
            (this._element.style[t] = 0),
            this._addAriaAndCollapsedClass(this._triggerArray, !0),
            (this._isTransitioning = !0);
          const i = `scroll${t[0].toUpperCase() + t.slice(1)}`;
          this._queueCallback(
            () => {
              (this._isTransitioning = !1),
                this._element.classList.remove(mi),
                this._element.classList.add(gi, pi),
                (this._element.style[t] = ""),
                ft.trigger(this._element, ui);
            },
            this._element,
            !0
          ),
            (this._element.style[t] = `${this._element[i]}px`);
        }
        hide() {
          if (this._isTransitioning || !this._isShown()) return;
          if (ft.trigger(this._element, di).defaultPrevented) return;
          const e = this._getDimension();
          (this._element.style[e] = `${
            this._element.getBoundingClientRect()[e]
          }px`),
            He(this._element),
            this._element.classList.add(mi),
            this._element.classList.remove(gi, pi);
          for (const e of this._triggerArray) {
            const t = Me(e);
            t && !this._isShown(t) && this._addAriaAndCollapsedClass([e], !1);
          }
          (this._isTransitioning = !0),
            (this._element.style[e] = ""),
            this._queueCallback(
              () => {
                (this._isTransitioning = !1),
                  this._element.classList.remove(mi),
                  this._element.classList.add(gi),
                  ft.trigger(this._element, hi);
              },
              this._element,
              !0
            );
        }
        _isShown(e = this._element) {
          return e.classList.contains(pi);
        }
        _configAfterMerge(e) {
          return (e.toggle = Boolean(e.toggle)), (e.parent = Re(e.parent)), e;
        }
        _getDimension() {
          return this._element.classList.contains("collapse-horizontal")
            ? "width"
            : "height";
        }
        _initializeChildren() {
          if (!this._config.parent) return;
          const e = this._getFirstLevelChildren(bi);
          for (const t of e) {
            const e = Me(t);
            e && this._addAriaAndCollapsedClass([t], this._isShown(e));
          }
        }
        _getFirstLevelChildren(e) {
          const t = jt.find(vi, this._config.parent);
          return jt.find(e, this._config.parent).filter((e) => !t.includes(e));
        }
        _addAriaAndCollapsedClass(e, t) {
          if (e.length)
            for (const i of e)
              i.classList.toggle("collapsed", !t),
                i.setAttribute("aria-expanded", t);
        }
        static jQueryInterface(e) {
          const t = {};
          return (
            "string" == typeof e && /show|hide/.test(e) && (t.toggle = !1),
            this.each(function () {
              const i = wi.getOrCreateInstance(this, t);
              if ("string" == typeof e) {
                if (void 0 === i[e])
                  throw new TypeError(`No method named "${e}"`);
                i[e]();
              }
            })
          );
        }
      }
      ft.on(document, fi, bi, function (e) {
        ("A" === e.target.tagName ||
          (e.delegateTarget && "A" === e.delegateTarget.tagName)) &&
          e.preventDefault();
        const t = Ne(this),
          i = jt.find(t);
        for (const e of i) wi.getOrCreateInstance(e, { toggle: !1 }).toggle();
      }),
        Ye(wi);
      const xi = "dropdown",
        Ei = ".bs.dropdown",
        ki = ".data-api",
        Si = "ArrowUp",
        Ai = "ArrowDown",
        Li = `hide${Ei}`,
        Oi = `hidden${Ei}`,
        ji = `show${Ei}`,
        Ci = `shown${Ei}`,
        Ti = `click${Ei}${ki}`,
        Di = `keydown${Ei}${ki}`,
        Pi = `keyup${Ei}${ki}`,
        Ii = "show",
        Ni = '[data-bs-toggle="dropdown"]:not(.disabled):not(:disabled)',
        Mi = `${Ni}.${Ii}`,
        Fi = ".dropdown-menu",
        zi = Xe() ? "top-end" : "top-start",
        Ri = Xe() ? "top-start" : "top-end",
        $i = Xe() ? "bottom-end" : "bottom-start",
        Wi = Xe() ? "bottom-start" : "bottom-end",
        qi = Xe() ? "left-start" : "right-start",
        Bi = Xe() ? "right-start" : "left-start",
        Hi = {
          autoClose: !0,
          boundary: "clippingParents",
          display: "dynamic",
          offset: [0, 2],
          popperConfig: null,
          reference: "toggle",
        },
        Vi = {
          autoClose: "(boolean|string)",
          boundary: "(string|element)",
          display: "string",
          offset: "(array|string|function)",
          popperConfig: "(null|object|function)",
          reference: "(string|element|object)",
        };
      class Qi extends wt {
        constructor(e, t) {
          super(e, t),
            (this._popper = null),
            (this._parent = this._element.parentNode),
            (this._menu =
              jt.next(this._element, Fi)[0] ||
              jt.prev(this._element, Fi)[0] ||
              jt.findOne(Fi, this._parent)),
            (this._inNavbar = this._detectNavbar());
        }
        static get Default() {
          return Hi;
        }
        static get DefaultType() {
          return Vi;
        }
        static get NAME() {
          return xi;
        }
        toggle() {
          return this._isShown() ? this.hide() : this.show();
        }
        show() {
          if (We(this._element) || this._isShown()) return;
          const e = { relatedTarget: this._element };
          if (!ft.trigger(this._element, ji, e).defaultPrevented) {
            if (
              (this._createPopper(),
              "ontouchstart" in document.documentElement &&
                !this._parent.closest(".navbar-nav"))
            )
              for (const e of [].concat(...document.body.children))
                ft.on(e, "mouseover", Be);
            this._element.focus(),
              this._element.setAttribute("aria-expanded", !0),
              this._menu.classList.add(Ii),
              this._element.classList.add(Ii),
              ft.trigger(this._element, Ci, e);
          }
        }
        hide() {
          if (We(this._element) || !this._isShown()) return;
          const e = { relatedTarget: this._element };
          this._completeHide(e);
        }
        dispose() {
          this._popper && this._popper.destroy(), super.dispose();
        }
        update() {
          (this._inNavbar = this._detectNavbar()),
            this._popper && this._popper.update();
        }
        _completeHide(e) {
          if (!ft.trigger(this._element, Li, e).defaultPrevented) {
            if ("ontouchstart" in document.documentElement)
              for (const e of [].concat(...document.body.children))
                ft.off(e, "mouseover", Be);
            this._popper && this._popper.destroy(),
              this._menu.classList.remove(Ii),
              this._element.classList.remove(Ii),
              this._element.setAttribute("aria-expanded", "false"),
              _t.removeDataAttribute(this._menu, "popper"),
              ft.trigger(this._element, Oi, e);
          }
        }
        _getConfig(e) {
          if (
            "object" == typeof (e = super._getConfig(e)).reference &&
            !ze(e.reference) &&
            "function" != typeof e.reference.getBoundingClientRect
          )
            throw new TypeError(
              `${xi.toUpperCase()}: Option "reference" provided type "object" without a required "getBoundingClientRect" method.`
            );
          return e;
        }
        _createPopper() {
          if (void 0 === e)
            throw new TypeError(
              "Bootstrap's dropdowns require Popper (https://popper.js.org)"
            );
          let t = this._element;
          "parent" === this._config.reference
            ? (t = this._parent)
            : ze(this._config.reference)
            ? (t = Re(this._config.reference))
            : "object" == typeof this._config.reference &&
              (t = this._config.reference);
          const i = this._getPopperConfig();
          this._popper = Te(t, this._menu, i);
        }
        _isShown() {
          return this._menu.classList.contains(Ii);
        }
        _getPlacement() {
          const e = this._parent;
          if (e.classList.contains("dropend")) return qi;
          if (e.classList.contains("dropstart")) return Bi;
          if (e.classList.contains("dropup-center")) return "top";
          if (e.classList.contains("dropdown-center")) return "bottom";
          const t =
            "end" ===
            getComputedStyle(this._menu)
              .getPropertyValue("--bs-position")
              .trim();
          return e.classList.contains("dropup") ? (t ? Ri : zi) : t ? Wi : $i;
        }
        _detectNavbar() {
          return null !== this._element.closest(".navbar");
        }
        _getOffset() {
          const { offset: e } = this._config;
          return "string" == typeof e
            ? e.split(",").map((e) => Number.parseInt(e, 10))
            : "function" == typeof e
            ? (t) => e(t, this._element)
            : e;
        }
        _getPopperConfig() {
          const e = {
            placement: this._getPlacement(),
            modifiers: [
              {
                name: "preventOverflow",
                options: { boundary: this._config.boundary },
              },
              { name: "offset", options: { offset: this._getOffset() } },
            ],
          };
          return (
            (this._inNavbar || "static" === this._config.display) &&
              (_t.setDataAttribute(this._menu, "popper", "static"),
              (e.modifiers = [{ name: "applyStyles", enabled: !1 }])),
            {
              ...e,
              ...("function" == typeof this._config.popperConfig
                ? this._config.popperConfig(e)
                : this._config.popperConfig),
            }
          );
        }
        _selectMenuItem({ key: e, target: t }) {
          const i = jt
            .find(
              ".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)",
              this._menu
            )
            .filter((e) => $e(e));
          i.length && Ge(i, t, e === Ai, !i.includes(t)).focus();
        }
        static jQueryInterface(e) {
          return this.each(function () {
            const t = Qi.getOrCreateInstance(this, e);
            if ("string" == typeof e) {
              if (void 0 === t[e])
                throw new TypeError(`No method named "${e}"`);
              t[e]();
            }
          });
        }
        static clearMenus(e) {
          if (2 === e.button || ("keyup" === e.type && "Tab" !== e.key)) return;
          const t = jt.find(Mi);
          for (const i of t) {
            const t = Qi.getInstance(i);
            if (!t || !1 === t._config.autoClose) continue;
            const n = e.composedPath(),
              r = n.includes(t._menu);
            if (
              n.includes(t._element) ||
              ("inside" === t._config.autoClose && !r) ||
              ("outside" === t._config.autoClose && r)
            )
              continue;
            if (
              t._menu.contains(e.target) &&
              (("keyup" === e.type && "Tab" === e.key) ||
                /input|select|option|textarea|form/i.test(e.target.tagName))
            )
              continue;
            const s = { relatedTarget: t._element };
            "click" === e.type && (s.clickEvent = e), t._completeHide(s);
          }
        }
        static dataApiKeydownHandler(e) {
          const t = /input|textarea/i.test(e.target.tagName),
            i = "Escape" === e.key,
            n = [Si, Ai].includes(e.key);
          if (!n && !i) return;
          if (t && !i) return;
          e.preventDefault();
          const r = this.matches(Ni)
              ? this
              : jt.prev(this, Ni)[0] ||
                jt.next(this, Ni)[0] ||
                jt.findOne(Ni, e.delegateTarget.parentNode),
            s = Qi.getOrCreateInstance(r);
          if (n)
            return e.stopPropagation(), s.show(), void s._selectMenuItem(e);
          s._isShown() && (e.stopPropagation(), s.hide(), r.focus());
        }
      }
      ft.on(document, Di, Ni, Qi.dataApiKeydownHandler),
        ft.on(document, Di, Fi, Qi.dataApiKeydownHandler),
        ft.on(document, Ti, Qi.clearMenus),
        ft.on(document, Pi, Qi.clearMenus),
        ft.on(document, Ti, Ni, function (e) {
          e.preventDefault(), Qi.getOrCreateInstance(this).toggle();
        }),
        Ye(Qi);
      const Xi = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
        Yi = ".sticky-top",
        Ui = "padding-right",
        Ki = "margin-right";
      class Gi {
        constructor() {
          this._element = document.body;
        }
        getWidth() {
          const e = document.documentElement.clientWidth;
          return Math.abs(window.innerWidth - e);
        }
        hide() {
          const e = this.getWidth();
          this._disableOverFlow(),
            this._setElementAttributes(this._element, Ui, (t) => t + e),
            this._setElementAttributes(Xi, Ui, (t) => t + e),
            this._setElementAttributes(Yi, Ki, (t) => t - e);
        }
        reset() {
          this._resetElementAttributes(this._element, "overflow"),
            this._resetElementAttributes(this._element, Ui),
            this._resetElementAttributes(Xi, Ui),
            this._resetElementAttributes(Yi, Ki);
        }
        isOverflowing() {
          return this.getWidth() > 0;
        }
        _disableOverFlow() {
          this._saveInitialAttribute(this._element, "overflow"),
            (this._element.style.overflow = "hidden");
        }
        _setElementAttributes(e, t, i) {
          const n = this.getWidth();
          this._applyManipulationCallback(e, (e) => {
            if (e !== this._element && window.innerWidth > e.clientWidth + n)
              return;
            this._saveInitialAttribute(e, t);
            const r = window.getComputedStyle(e).getPropertyValue(t);
            e.style.setProperty(t, `${i(Number.parseFloat(r))}px`);
          });
        }
        _saveInitialAttribute(e, t) {
          const i = e.style.getPropertyValue(t);
          i && _t.setDataAttribute(e, t, i);
        }
        _resetElementAttributes(e, t) {
          this._applyManipulationCallback(e, (e) => {
            const i = _t.getDataAttribute(e, t);
            null !== i
              ? (_t.removeDataAttribute(e, t), e.style.setProperty(t, i))
              : e.style.removeProperty(t);
          });
        }
        _applyManipulationCallback(e, t) {
          if (ze(e)) t(e);
          else for (const i of jt.find(e, this._element)) t(i);
        }
      }
      const Ji = "backdrop",
        Zi = "show",
        en = `mousedown.bs.${Ji}`,
        tn = {
          className: "modal-backdrop",
          clickCallback: null,
          isAnimated: !1,
          isVisible: !0,
          rootElement: "body",
        },
        nn = {
          className: "string",
          clickCallback: "(function|null)",
          isAnimated: "boolean",
          isVisible: "boolean",
          rootElement: "(element|string)",
        };
      class rn extends yt {
        constructor(e) {
          super(),
            (this._config = this._getConfig(e)),
            (this._isAppended = !1),
            (this._element = null);
        }
        static get Default() {
          return tn;
        }
        static get DefaultType() {
          return nn;
        }
        static get NAME() {
          return Ji;
        }
        show(e) {
          if (!this._config.isVisible) return void Ue(e);
          this._append();
          const t = this._getElement();
          this._config.isAnimated && He(t),
            t.classList.add(Zi),
            this._emulateAnimation(() => {
              Ue(e);
            });
        }
        hide(e) {
          this._config.isVisible
            ? (this._getElement().classList.remove(Zi),
              this._emulateAnimation(() => {
                this.dispose(), Ue(e);
              }))
            : Ue(e);
        }
        dispose() {
          this._isAppended &&
            (ft.off(this._element, en),
            this._element.remove(),
            (this._isAppended = !1));
        }
        _getElement() {
          if (!this._element) {
            const e = document.createElement("div");
            (e.className = this._config.className),
              this._config.isAnimated && e.classList.add("fade"),
              (this._element = e);
          }
          return this._element;
        }
        _configAfterMerge(e) {
          return (e.rootElement = Re(e.rootElement)), e;
        }
        _append() {
          if (this._isAppended) return;
          const e = this._getElement();
          this._config.rootElement.append(e),
            ft.on(e, en, () => {
              Ue(this._config.clickCallback);
            }),
            (this._isAppended = !0);
        }
        _emulateAnimation(e) {
          Ke(e, this._getElement(), this._config.isAnimated);
        }
      }
      const sn = ".bs.focustrap",
        on = `focusin${sn}`,
        an = `keydown.tab${sn}`,
        ln = "backward",
        cn = { autofocus: !0, trapElement: null },
        un = { autofocus: "boolean", trapElement: "element" };
      class dn extends yt {
        constructor(e) {
          super(),
            (this._config = this._getConfig(e)),
            (this._isActive = !1),
            (this._lastTabNavDirection = null);
        }
        static get Default() {
          return cn;
        }
        static get DefaultType() {
          return un;
        }
        static get NAME() {
          return "focustrap";
        }
        activate() {
          this._isActive ||
            (this._config.autofocus && this._config.trapElement.focus(),
            ft.off(document, sn),
            ft.on(document, on, (e) => this._handleFocusin(e)),
            ft.on(document, an, (e) => this._handleKeydown(e)),
            (this._isActive = !0));
        }
        deactivate() {
          this._isActive && ((this._isActive = !1), ft.off(document, sn));
        }
        _handleFocusin(e) {
          const { trapElement: t } = this._config;
          if (e.target === document || e.target === t || t.contains(e.target))
            return;
          const i = jt.focusableChildren(t);
          0 === i.length
            ? t.focus()
            : this._lastTabNavDirection === ln
            ? i[i.length - 1].focus()
            : i[0].focus();
        }
        _handleKeydown(e) {
          "Tab" === e.key &&
            (this._lastTabNavDirection = e.shiftKey ? ln : "forward");
        }
      }
      const hn = ".bs.modal",
        fn = `hide${hn}`,
        pn = `hidePrevented${hn}`,
        gn = `hidden${hn}`,
        mn = `show${hn}`,
        vn = `shown${hn}`,
        bn = `resize${hn}`,
        _n = `click.dismiss${hn}`,
        yn = `mousedown.dismiss${hn}`,
        wn = `keydown.dismiss${hn}`,
        xn = `click${hn}.data-api`,
        En = "modal-open",
        kn = "show",
        Sn = "modal-static",
        An = { backdrop: !0, focus: !0, keyboard: !0 },
        Ln = {
          backdrop: "(boolean|string)",
          focus: "boolean",
          keyboard: "boolean",
        };
      class On extends wt {
        constructor(e, t) {
          super(e, t),
            (this._dialog = jt.findOne(".modal-dialog", this._element)),
            (this._backdrop = this._initializeBackDrop()),
            (this._focustrap = this._initializeFocusTrap()),
            (this._isShown = !1),
            (this._isTransitioning = !1),
            (this._scrollBar = new Gi()),
            this._addEventListeners();
        }
        static get Default() {
          return An;
        }
        static get DefaultType() {
          return Ln;
        }
        static get NAME() {
          return "modal";
        }
        toggle(e) {
          return this._isShown ? this.hide() : this.show(e);
        }
        show(e) {
          this._isShown ||
            this._isTransitioning ||
            ft.trigger(this._element, mn, { relatedTarget: e })
              .defaultPrevented ||
            ((this._isShown = !0),
            (this._isTransitioning = !0),
            this._scrollBar.hide(),
            document.body.classList.add(En),
            this._adjustDialog(),
            this._backdrop.show(() => this._showElement(e)));
        }
        hide() {
          this._isShown &&
            !this._isTransitioning &&
            (ft.trigger(this._element, fn).defaultPrevented ||
              ((this._isShown = !1),
              (this._isTransitioning = !0),
              this._focustrap.deactivate(),
              this._element.classList.remove(kn),
              this._queueCallback(
                () => this._hideModal(),
                this._element,
                this._isAnimated()
              )));
        }
        dispose() {
          for (const e of [window, this._dialog]) ft.off(e, hn);
          this._backdrop.dispose(),
            this._focustrap.deactivate(),
            super.dispose();
        }
        handleUpdate() {
          this._adjustDialog();
        }
        _initializeBackDrop() {
          return new rn({
            isVisible: Boolean(this._config.backdrop),
            isAnimated: this._isAnimated(),
          });
        }
        _initializeFocusTrap() {
          return new dn({ trapElement: this._element });
        }
        _showElement(e) {
          document.body.contains(this._element) ||
            document.body.append(this._element),
            (this._element.style.display = "block"),
            this._element.removeAttribute("aria-hidden"),
            this._element.setAttribute("aria-modal", !0),
            this._element.setAttribute("role", "dialog"),
            (this._element.scrollTop = 0);
          const t = jt.findOne(".modal-body", this._dialog);
          t && (t.scrollTop = 0),
            He(this._element),
            this._element.classList.add(kn),
            this._queueCallback(
              () => {
                this._config.focus && this._focustrap.activate(),
                  (this._isTransitioning = !1),
                  ft.trigger(this._element, vn, { relatedTarget: e });
              },
              this._dialog,
              this._isAnimated()
            );
        }
        _addEventListeners() {
          ft.on(this._element, wn, (e) => {
            if ("Escape" === e.key)
              return this._config.keyboard
                ? (e.preventDefault(), void this.hide())
                : void this._triggerBackdropTransition();
          }),
            ft.on(window, bn, () => {
              this._isShown && !this._isTransitioning && this._adjustDialog();
            }),
            ft.on(this._element, yn, (e) => {
              ft.one(this._element, _n, (t) => {
                this._element === e.target &&
                  this._element === t.target &&
                  ("static" !== this._config.backdrop
                    ? this._config.backdrop && this.hide()
                    : this._triggerBackdropTransition());
              });
            });
        }
        _hideModal() {
          (this._element.style.display = "none"),
            this._element.setAttribute("aria-hidden", !0),
            this._element.removeAttribute("aria-modal"),
            this._element.removeAttribute("role"),
            (this._isTransitioning = !1),
            this._backdrop.hide(() => {
              document.body.classList.remove(En),
                this._resetAdjustments(),
                this._scrollBar.reset(),
                ft.trigger(this._element, gn);
            });
        }
        _isAnimated() {
          return this._element.classList.contains("fade");
        }
        _triggerBackdropTransition() {
          if (ft.trigger(this._element, pn).defaultPrevented) return;
          const e =
              this._element.scrollHeight >
              document.documentElement.clientHeight,
            t = this._element.style.overflowY;
          "hidden" === t ||
            this._element.classList.contains(Sn) ||
            (e || (this._element.style.overflowY = "hidden"),
            this._element.classList.add(Sn),
            this._queueCallback(() => {
              this._element.classList.remove(Sn),
                this._queueCallback(() => {
                  this._element.style.overflowY = t;
                }, this._dialog);
            }, this._dialog),
            this._element.focus());
        }
        _adjustDialog() {
          const e =
              this._element.scrollHeight >
              document.documentElement.clientHeight,
            t = this._scrollBar.getWidth(),
            i = t > 0;
          if (i && !e) {
            const e = Xe() ? "paddingLeft" : "paddingRight";
            this._element.style[e] = `${t}px`;
          }
          if (!i && e) {
            const e = Xe() ? "paddingRight" : "paddingLeft";
            this._element.style[e] = `${t}px`;
          }
        }
        _resetAdjustments() {
          (this._element.style.paddingLeft = ""),
            (this._element.style.paddingRight = "");
        }
        static jQueryInterface(e, t) {
          return this.each(function () {
            const i = On.getOrCreateInstance(this, e);
            if ("string" == typeof e) {
              if (void 0 === i[e])
                throw new TypeError(`No method named "${e}"`);
              i[e](t);
            }
          });
        }
      }
      ft.on(document, xn, '[data-bs-toggle="modal"]', function (e) {
        const t = Me(this);
        ["A", "AREA"].includes(this.tagName) && e.preventDefault(),
          ft.one(t, mn, (e) => {
            e.defaultPrevented ||
              ft.one(t, gn, () => {
                $e(this) && this.focus();
              });
          });
        const i = jt.findOne(".modal.show");
        i && On.getInstance(i).hide(), On.getOrCreateInstance(t).toggle(this);
      }),
        xt(On),
        Ye(On);
      const jn = ".bs.offcanvas",
        Cn = ".data-api",
        Tn = `load${jn}${Cn}`,
        Dn = "show",
        Pn = "showing",
        In = "hiding",
        Nn = ".offcanvas.show",
        Mn = `show${jn}`,
        Fn = `shown${jn}`,
        zn = `hide${jn}`,
        Rn = `hidePrevented${jn}`,
        $n = `hidden${jn}`,
        Wn = `resize${jn}`,
        qn = `click${jn}${Cn}`,
        Bn = `keydown.dismiss${jn}`,
        Hn = { backdrop: !0, keyboard: !0, scroll: !1 },
        Vn = {
          backdrop: "(boolean|string)",
          keyboard: "boolean",
          scroll: "boolean",
        };
      class Qn extends wt {
        constructor(e, t) {
          super(e, t),
            (this._isShown = !1),
            (this._backdrop = this._initializeBackDrop()),
            (this._focustrap = this._initializeFocusTrap()),
            this._addEventListeners();
        }
        static get Default() {
          return Hn;
        }
        static get DefaultType() {
          return Vn;
        }
        static get NAME() {
          return "offcanvas";
        }
        toggle(e) {
          return this._isShown ? this.hide() : this.show(e);
        }
        show(e) {
          this._isShown ||
            ft.trigger(this._element, Mn, { relatedTarget: e })
              .defaultPrevented ||
            ((this._isShown = !0),
            this._backdrop.show(),
            this._config.scroll || new Gi().hide(),
            this._element.setAttribute("aria-modal", !0),
            this._element.setAttribute("role", "dialog"),
            this._element.classList.add(Pn),
            this._queueCallback(
              () => {
                (this._config.scroll && !this._config.backdrop) ||
                  this._focustrap.activate(),
                  this._element.classList.add(Dn),
                  this._element.classList.remove(Pn),
                  ft.trigger(this._element, Fn, { relatedTarget: e });
              },
              this._element,
              !0
            ));
        }
        hide() {
          this._isShown &&
            (ft.trigger(this._element, zn).defaultPrevented ||
              (this._focustrap.deactivate(),
              this._element.blur(),
              (this._isShown = !1),
              this._element.classList.add(In),
              this._backdrop.hide(),
              this._queueCallback(
                () => {
                  this._element.classList.remove(Dn, In),
                    this._element.removeAttribute("aria-modal"),
                    this._element.removeAttribute("role"),
                    this._config.scroll || new Gi().reset(),
                    ft.trigger(this._element, $n);
                },
                this._element,
                !0
              )));
        }
        dispose() {
          this._backdrop.dispose(),
            this._focustrap.deactivate(),
            super.dispose();
        }
        _initializeBackDrop() {
          const e = Boolean(this._config.backdrop);
          return new rn({
            className: "offcanvas-backdrop",
            isVisible: e,
            isAnimated: !0,
            rootElement: this._element.parentNode,
            clickCallback: e
              ? () => {
                  "static" !== this._config.backdrop
                    ? this.hide()
                    : ft.trigger(this._element, Rn);
                }
              : null,
          });
        }
        _initializeFocusTrap() {
          return new dn({ trapElement: this._element });
        }
        _addEventListeners() {
          ft.on(this._element, Bn, (e) => {
            "Escape" === e.key &&
              (this._config.keyboard
                ? this.hide()
                : ft.trigger(this._element, Rn));
          });
        }
        static jQueryInterface(e) {
          return this.each(function () {
            const t = Qn.getOrCreateInstance(this, e);
            if ("string" == typeof e) {
              if (void 0 === t[e] || e.startsWith("_") || "constructor" === e)
                throw new TypeError(`No method named "${e}"`);
              t[e](this);
            }
          });
        }
      }
      ft.on(document, qn, '[data-bs-toggle="offcanvas"]', function (e) {
        const t = Me(this);
        if (
          (["A", "AREA"].includes(this.tagName) && e.preventDefault(), We(this))
        )
          return;
        ft.one(t, $n, () => {
          $e(this) && this.focus();
        });
        const i = jt.findOne(Nn);
        i && i !== t && Qn.getInstance(i).hide(),
          Qn.getOrCreateInstance(t).toggle(this);
      }),
        ft.on(window, Tn, () => {
          for (const e of jt.find(Nn)) Qn.getOrCreateInstance(e).show();
        }),
        ft.on(window, Wn, () => {
          for (const e of jt.find(
            "[aria-modal][class*=show][class*=offcanvas-]"
          ))
            "fixed" !== getComputedStyle(e).position &&
              Qn.getOrCreateInstance(e).hide();
        }),
        xt(Qn),
        Ye(Qn);
      const Xn = new Set([
          "background",
          "cite",
          "href",
          "itemtype",
          "longdesc",
          "poster",
          "src",
          "xlink:href",
        ]),
        Yn = /^(?:(?:https?|mailto|ftp|tel|file|sms):|[^#&/:?]*(?:[#/?]|$))/i,
        Un =
          /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i,
        Kn = (e, t) => {
          const i = e.nodeName.toLowerCase();
          return t.includes(i)
            ? !Xn.has(i) ||
                Boolean(Yn.test(e.nodeValue) || Un.test(e.nodeValue))
            : t.filter((e) => e instanceof RegExp).some((e) => e.test(i));
        },
        Gn = {
          "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
          a: ["target", "href", "title", "rel"],
          area: [],
          b: [],
          br: [],
          col: [],
          code: [],
          div: [],
          em: [],
          hr: [],
          h1: [],
          h2: [],
          h3: [],
          h4: [],
          h5: [],
          h6: [],
          i: [],
          img: ["src", "srcset", "alt", "title", "width", "height"],
          li: [],
          ol: [],
          p: [],
          pre: [],
          s: [],
          small: [],
          span: [],
          sub: [],
          sup: [],
          strong: [],
          u: [],
          ul: [],
        },
        Jn = {
          allowList: Gn,
          content: {},
          extraClass: "",
          html: !1,
          sanitize: !0,
          sanitizeFn: null,
          template: "<div></div>",
        },
        Zn = {
          allowList: "object",
          content: "object",
          extraClass: "(string|function)",
          html: "boolean",
          sanitize: "boolean",
          sanitizeFn: "(null|function)",
          template: "string",
        },
        er = {
          entry: "(string|element|function|null)",
          selector: "(string|element)",
        };
      class tr extends yt {
        constructor(e) {
          super(), (this._config = this._getConfig(e));
        }
        static get Default() {
          return Jn;
        }
        static get DefaultType() {
          return Zn;
        }
        static get NAME() {
          return "TemplateFactory";
        }
        getContent() {
          return Object.values(this._config.content)
            .map((e) => this._resolvePossibleFunction(e))
            .filter(Boolean);
        }
        hasContent() {
          return this.getContent().length > 0;
        }
        changeContent(e) {
          return (
            this._checkContent(e),
            (this._config.content = { ...this._config.content, ...e }),
            this
          );
        }
        toHtml() {
          const e = document.createElement("div");
          e.innerHTML = this._maybeSanitize(this._config.template);
          for (const [t, i] of Object.entries(this._config.content))
            this._setContent(e, i, t);
          const t = e.children[0],
            i = this._resolvePossibleFunction(this._config.extraClass);
          return i && t.classList.add(...i.split(" ")), t;
        }
        _typeCheckConfig(e) {
          super._typeCheckConfig(e), this._checkContent(e.content);
        }
        _checkContent(e) {
          for (const [t, i] of Object.entries(e))
            super._typeCheckConfig({ selector: t, entry: i }, er);
        }
        _setContent(e, t, i) {
          const n = jt.findOne(i, e);
          n &&
            ((t = this._resolvePossibleFunction(t))
              ? ze(t)
                ? this._putElementInTemplate(Re(t), n)
                : this._config.html
                ? (n.innerHTML = this._maybeSanitize(t))
                : (n.textContent = t)
              : n.remove());
        }
        _maybeSanitize(e) {
          return this._config.sanitize
            ? (function (e, t, i) {
                if (!e.length) return e;
                if (i && "function" == typeof i) return i(e);
                const n = new window.DOMParser().parseFromString(
                    e,
                    "text/html"
                  ),
                  r = [].concat(...n.body.querySelectorAll("*"));
                for (const e of r) {
                  const i = e.nodeName.toLowerCase();
                  if (!Object.keys(t).includes(i)) {
                    e.remove();
                    continue;
                  }
                  const n = [].concat(...e.attributes),
                    r = [].concat(t["*"] || [], t[i] || []);
                  for (const t of n) Kn(t, r) || e.removeAttribute(t.nodeName);
                }
                return n.body.innerHTML;
              })(e, this._config.allowList, this._config.sanitizeFn)
            : e;
        }
        _resolvePossibleFunction(e) {
          return "function" == typeof e ? e(this) : e;
        }
        _putElementInTemplate(e, t) {
          if (this._config.html) return (t.innerHTML = ""), void t.append(e);
          t.textContent = e.textContent;
        }
      }
      const ir = new Set(["sanitize", "allowList", "sanitizeFn"]),
        nr = "fade",
        rr = "show",
        sr = ".modal",
        or = "hide.bs.modal",
        ar = "hover",
        lr = "focus",
        cr = {
          AUTO: "auto",
          TOP: "top",
          RIGHT: Xe() ? "left" : "right",
          BOTTOM: "bottom",
          LEFT: Xe() ? "right" : "left",
        },
        ur = {
          allowList: Gn,
          animation: !0,
          boundary: "clippingParents",
          container: !1,
          customClass: "",
          delay: 0,
          fallbackPlacements: ["top", "right", "bottom", "left"],
          html: !1,
          offset: [0, 0],
          placement: "top",
          popperConfig: null,
          sanitize: !0,
          sanitizeFn: null,
          selector: !1,
          template:
            '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
          title: "",
          trigger: "hover focus",
        },
        dr = {
          allowList: "object",
          animation: "boolean",
          boundary: "(string|element)",
          container: "(string|element|boolean)",
          customClass: "(string|function)",
          delay: "(number|object)",
          fallbackPlacements: "array",
          html: "boolean",
          offset: "(array|string|function)",
          placement: "(string|function)",
          popperConfig: "(null|object|function)",
          sanitize: "boolean",
          sanitizeFn: "(null|function)",
          selector: "(string|boolean)",
          template: "string",
          title: "(string|element|function)",
          trigger: "string",
        };
      class hr extends wt {
        constructor(t, i) {
          if (void 0 === e)
            throw new TypeError(
              "Bootstrap's tooltips require Popper (https://popper.js.org)"
            );
          super(t, i),
            (this._isEnabled = !0),
            (this._timeout = 0),
            (this._isHovered = null),
            (this._activeTrigger = {}),
            (this._popper = null),
            (this._templateFactory = null),
            (this._newContent = null),
            (this.tip = null),
            this._setListeners(),
            this._config.selector || this._fixTitle();
        }
        static get Default() {
          return ur;
        }
        static get DefaultType() {
          return dr;
        }
        static get NAME() {
          return "tooltip";
        }
        enable() {
          this._isEnabled = !0;
        }
        disable() {
          this._isEnabled = !1;
        }
        toggleEnabled() {
          this._isEnabled = !this._isEnabled;
        }
        toggle() {
          this._isEnabled &&
            ((this._activeTrigger.click = !this._activeTrigger.click),
            this._isShown() ? this._leave() : this._enter());
        }
        dispose() {
          clearTimeout(this._timeout),
            ft.off(this._element.closest(sr), or, this._hideModalHandler),
            this._element.getAttribute("data-bs-original-title") &&
              this._element.setAttribute(
                "title",
                this._element.getAttribute("data-bs-original-title")
              ),
            this._disposePopper(),
            super.dispose();
        }
        show() {
          if ("none" === this._element.style.display)
            throw new Error("Please use show on visible elements");
          if (!this._isWithContent() || !this._isEnabled) return;
          const e = ft.trigger(
              this._element,
              this.constructor.eventName("show")
            ),
            t = (
              qe(this._element) || this._element.ownerDocument.documentElement
            ).contains(this._element);
          if (e.defaultPrevented || !t) return;
          this._disposePopper();
          const i = this._getTipElement();
          this._element.setAttribute("aria-describedby", i.getAttribute("id"));
          const { container: n } = this._config;
          if (
            (this._element.ownerDocument.documentElement.contains(this.tip) ||
              (n.append(i),
              ft.trigger(
                this._element,
                this.constructor.eventName("inserted")
              )),
            (this._popper = this._createPopper(i)),
            i.classList.add(rr),
            "ontouchstart" in document.documentElement)
          )
            for (const e of [].concat(...document.body.children))
              ft.on(e, "mouseover", Be);
          this._queueCallback(
            () => {
              ft.trigger(this._element, this.constructor.eventName("shown")),
                !1 === this._isHovered && this._leave(),
                (this._isHovered = !1);
            },
            this.tip,
            this._isAnimated()
          );
        }
        hide() {
          if (
            this._isShown() &&
            !ft.trigger(this._element, this.constructor.eventName("hide"))
              .defaultPrevented
          ) {
            if (
              (this._getTipElement().classList.remove(rr),
              "ontouchstart" in document.documentElement)
            )
              for (const e of [].concat(...document.body.children))
                ft.off(e, "mouseover", Be);
            (this._activeTrigger.click = !1),
              (this._activeTrigger[lr] = !1),
              (this._activeTrigger[ar] = !1),
              (this._isHovered = null),
              this._queueCallback(
                () => {
                  this._isWithActiveTrigger() ||
                    (this._isHovered || this._disposePopper(),
                    this._element.removeAttribute("aria-describedby"),
                    ft.trigger(
                      this._element,
                      this.constructor.eventName("hidden")
                    ));
                },
                this.tip,
                this._isAnimated()
              );
          }
        }
        update() {
          this._popper && this._popper.update();
        }
        _isWithContent() {
          return Boolean(this._getTitle());
        }
        _getTipElement() {
          return (
            this.tip ||
              (this.tip = this._createTipElement(
                this._newContent || this._getContentForTemplate()
              )),
            this.tip
          );
        }
        _createTipElement(e) {
          const t = this._getTemplateFactory(e).toHtml();
          if (!t) return null;
          t.classList.remove(nr, rr),
            t.classList.add(`bs-${this.constructor.NAME}-auto`);
          const i = ((e) => {
            do {
              e += Math.floor(1e6 * Math.random());
            } while (document.getElementById(e));
            return e;
          })(this.constructor.NAME).toString();
          return (
            t.setAttribute("id", i),
            this._isAnimated() && t.classList.add(nr),
            t
          );
        }
        setContent(e) {
          (this._newContent = e),
            this._isShown() && (this._disposePopper(), this.show());
        }
        _getTemplateFactory(e) {
          return (
            this._templateFactory
              ? this._templateFactory.changeContent(e)
              : (this._templateFactory = new tr({
                  ...this._config,
                  content: e,
                  extraClass: this._resolvePossibleFunction(
                    this._config.customClass
                  ),
                })),
            this._templateFactory
          );
        }
        _getContentForTemplate() {
          return { ".tooltip-inner": this._getTitle() };
        }
        _getTitle() {
          return (
            this._resolvePossibleFunction(this._config.title) ||
            this._element.getAttribute("data-bs-original-title")
          );
        }
        _initializeOnDelegatedTarget(e) {
          return this.constructor.getOrCreateInstance(
            e.delegateTarget,
            this._getDelegateConfig()
          );
        }
        _isAnimated() {
          return (
            this._config.animation ||
            (this.tip && this.tip.classList.contains(nr))
          );
        }
        _isShown() {
          return this.tip && this.tip.classList.contains(rr);
        }
        _createPopper(e) {
          const t =
              "function" == typeof this._config.placement
                ? this._config.placement.call(this, e, this._element)
                : this._config.placement,
            i = cr[t.toUpperCase()];
          return Te(this._element, e, this._getPopperConfig(i));
        }
        _getOffset() {
          const { offset: e } = this._config;
          return "string" == typeof e
            ? e.split(",").map((e) => Number.parseInt(e, 10))
            : "function" == typeof e
            ? (t) => e(t, this._element)
            : e;
        }
        _resolvePossibleFunction(e) {
          return "function" == typeof e ? e.call(this._element) : e;
        }
        _getPopperConfig(e) {
          const t = {
            placement: e,
            modifiers: [
              {
                name: "flip",
                options: {
                  fallbackPlacements: this._config.fallbackPlacements,
                },
              },
              { name: "offset", options: { offset: this._getOffset() } },
              {
                name: "preventOverflow",
                options: { boundary: this._config.boundary },
              },
              {
                name: "arrow",
                options: { element: `.${this.constructor.NAME}-arrow` },
              },
              {
                name: "preSetPlacement",
                enabled: !0,
                phase: "beforeMain",
                fn: (e) => {
                  this._getTipElement().setAttribute(
                    "data-popper-placement",
                    e.state.placement
                  );
                },
              },
            ],
          };
          return {
            ...t,
            ...("function" == typeof this._config.popperConfig
              ? this._config.popperConfig(t)
              : this._config.popperConfig),
          };
        }
        _setListeners() {
          const e = this._config.trigger.split(" ");
          for (const t of e)
            if ("click" === t)
              ft.on(
                this._element,
                this.constructor.eventName("click"),
                this._config.selector,
                (e) => {
                  this._initializeOnDelegatedTarget(e).toggle();
                }
              );
            else if ("manual" !== t) {
              const e =
                  t === ar
                    ? this.constructor.eventName("mouseenter")
                    : this.constructor.eventName("focusin"),
                i =
                  t === ar
                    ? this.constructor.eventName("mouseleave")
                    : this.constructor.eventName("focusout");
              ft.on(this._element, e, this._config.selector, (e) => {
                const t = this._initializeOnDelegatedTarget(e);
                (t._activeTrigger["focusin" === e.type ? lr : ar] = !0),
                  t._enter();
              }),
                ft.on(this._element, i, this._config.selector, (e) => {
                  const t = this._initializeOnDelegatedTarget(e);
                  (t._activeTrigger["focusout" === e.type ? lr : ar] =
                    t._element.contains(e.relatedTarget)),
                    t._leave();
                });
            }
          (this._hideModalHandler = () => {
            this._element && this.hide();
          }),
            ft.on(this._element.closest(sr), or, this._hideModalHandler);
        }
        _fixTitle() {
          const e = this._element.getAttribute("title");
          e &&
            (this._element.getAttribute("aria-label") ||
              this._element.textContent.trim() ||
              this._element.setAttribute("aria-label", e),
            this._element.setAttribute("data-bs-original-title", e),
            this._element.removeAttribute("title"));
        }
        _enter() {
          this._isShown() || this._isHovered
            ? (this._isHovered = !0)
            : ((this._isHovered = !0),
              this._setTimeout(() => {
                this._isHovered && this.show();
              }, this._config.delay.show));
        }
        _leave() {
          this._isWithActiveTrigger() ||
            ((this._isHovered = !1),
            this._setTimeout(() => {
              this._isHovered || this.hide();
            }, this._config.delay.hide));
        }
        _setTimeout(e, t) {
          clearTimeout(this._timeout), (this._timeout = setTimeout(e, t));
        }
        _isWithActiveTrigger() {
          return Object.values(this._activeTrigger).includes(!0);
        }
        _getConfig(e) {
          const t = _t.getDataAttributes(this._element);
          for (const e of Object.keys(t)) ir.has(e) && delete t[e];
          return (
            (e = { ...t, ...("object" == typeof e && e ? e : {}) }),
            (e = this._mergeConfigObj(e)),
            (e = this._configAfterMerge(e)),
            this._typeCheckConfig(e),
            e
          );
        }
        _configAfterMerge(e) {
          return (
            (e.container =
              !1 === e.container ? document.body : Re(e.container)),
            "number" == typeof e.delay &&
              (e.delay = { show: e.delay, hide: e.delay }),
            "number" == typeof e.title && (e.title = e.title.toString()),
            "number" == typeof e.content && (e.content = e.content.toString()),
            e
          );
        }
        _getDelegateConfig() {
          const e = {};
          for (const t in this._config)
            this.constructor.Default[t] !== this._config[t] &&
              (e[t] = this._config[t]);
          return (e.selector = !1), (e.trigger = "manual"), e;
        }
        _disposePopper() {
          this._popper && (this._popper.destroy(), (this._popper = null)),
            this.tip && (this.tip.remove(), (this.tip = null));
        }
        static jQueryInterface(e) {
          return this.each(function () {
            const t = hr.getOrCreateInstance(this, e);
            if ("string" == typeof e) {
              if (void 0 === t[e])
                throw new TypeError(`No method named "${e}"`);
              t[e]();
            }
          });
        }
      }
      Ye(hr);
      const fr = {
          ...hr.Default,
          content: "",
          offset: [0, 8],
          placement: "right",
          template:
            '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
          trigger: "click",
        },
        pr = { ...hr.DefaultType, content: "(null|string|element|function)" };
      class gr extends hr {
        static get Default() {
          return fr;
        }
        static get DefaultType() {
          return pr;
        }
        static get NAME() {
          return "popover";
        }
        _isWithContent() {
          return this._getTitle() || this._getContent();
        }
        _getContentForTemplate() {
          return {
            ".popover-header": this._getTitle(),
            ".popover-body": this._getContent(),
          };
        }
        _getContent() {
          return this._resolvePossibleFunction(this._config.content);
        }
        static jQueryInterface(e) {
          return this.each(function () {
            const t = gr.getOrCreateInstance(this, e);
            if ("string" == typeof e) {
              if (void 0 === t[e])
                throw new TypeError(`No method named "${e}"`);
              t[e]();
            }
          });
        }
      }
      Ye(gr);
      const mr = ".bs.scrollspy",
        vr = `activate${mr}`,
        br = `click${mr}`,
        _r = `load${mr}.data-api`,
        yr = "active",
        wr = "[href]",
        xr = ".nav-link",
        Er = `${xr}, .nav-item > ${xr}, .list-group-item`,
        kr = {
          offset: null,
          rootMargin: "0px 0px -25%",
          smoothScroll: !1,
          target: null,
          threshold: [0.1, 0.5, 1],
        },
        Sr = {
          offset: "(number|null)",
          rootMargin: "string",
          smoothScroll: "boolean",
          target: "element",
          threshold: "array",
        };
      class Ar extends wt {
        constructor(e, t) {
          super(e, t),
            (this._targetLinks = new Map()),
            (this._observableSections = new Map()),
            (this._rootElement =
              "visible" === getComputedStyle(this._element).overflowY
                ? null
                : this._element),
            (this._activeTarget = null),
            (this._observer = null),
            (this._previousScrollData = {
              visibleEntryTop: 0,
              parentScrollTop: 0,
            }),
            this.refresh();
        }
        static get Default() {
          return kr;
        }
        static get DefaultType() {
          return Sr;
        }
        static get NAME() {
          return "scrollspy";
        }
        refresh() {
          this._initializeTargetsAndObservables(),
            this._maybeEnableSmoothScroll(),
            this._observer
              ? this._observer.disconnect()
              : (this._observer = this._getNewObserver());
          for (const e of this._observableSections.values())
            this._observer.observe(e);
        }
        dispose() {
          this._observer.disconnect(), super.dispose();
        }
        _configAfterMerge(e) {
          return (
            (e.target = Re(e.target) || document.body),
            (e.rootMargin = e.offset ? `${e.offset}px 0px -30%` : e.rootMargin),
            "string" == typeof e.threshold &&
              (e.threshold = e.threshold
                .split(",")
                .map((e) => Number.parseFloat(e))),
            e
          );
        }
        _maybeEnableSmoothScroll() {
          this._config.smoothScroll &&
            (ft.off(this._config.target, br),
            ft.on(this._config.target, br, wr, (e) => {
              const t = this._observableSections.get(e.target.hash);
              if (t) {
                e.preventDefault();
                const i = this._rootElement || window,
                  n = t.offsetTop - this._element.offsetTop;
                if (i.scrollTo)
                  return void i.scrollTo({ top: n, behavior: "smooth" });
                i.scrollTop = n;
              }
            }));
        }
        _getNewObserver() {
          const e = {
            root: this._rootElement,
            threshold: this._config.threshold,
            rootMargin: this._config.rootMargin,
          };
          return new IntersectionObserver((e) => this._observerCallback(e), e);
        }
        _observerCallback(e) {
          const t = (e) => this._targetLinks.get(`#${e.target.id}`),
            i = (e) => {
              (this._previousScrollData.visibleEntryTop = e.target.offsetTop),
                this._process(t(e));
            },
            n = (this._rootElement || document.documentElement).scrollTop,
            r = n >= this._previousScrollData.parentScrollTop;
          this._previousScrollData.parentScrollTop = n;
          for (const s of e) {
            if (!s.isIntersecting) {
              (this._activeTarget = null), this._clearActiveClass(t(s));
              continue;
            }
            const e =
              s.target.offsetTop >= this._previousScrollData.visibleEntryTop;
            if (r && e) {
              if ((i(s), !n)) return;
            } else r || e || i(s);
          }
        }
        _initializeTargetsAndObservables() {
          (this._targetLinks = new Map()),
            (this._observableSections = new Map());
          const e = jt.find(wr, this._config.target);
          for (const t of e) {
            if (!t.hash || We(t)) continue;
            const e = jt.findOne(t.hash, this._element);
            $e(e) &&
              (this._targetLinks.set(t.hash, t),
              this._observableSections.set(t.hash, e));
          }
        }
        _process(e) {
          this._activeTarget !== e &&
            (this._clearActiveClass(this._config.target),
            (this._activeTarget = e),
            e.classList.add(yr),
            this._activateParents(e),
            ft.trigger(this._element, vr, { relatedTarget: e }));
        }
        _activateParents(e) {
          if (e.classList.contains("dropdown-item"))
            jt.findOne(
              ".dropdown-toggle",
              e.closest(".dropdown")
            ).classList.add(yr);
          else
            for (const t of jt.parents(e, ".nav, .list-group"))
              for (const e of jt.prev(t, Er)) e.classList.add(yr);
        }
        _clearActiveClass(e) {
          e.classList.remove(yr);
          const t = jt.find(`${wr}.${yr}`, e);
          for (const e of t) e.classList.remove(yr);
        }
        static jQueryInterface(e) {
          return this.each(function () {
            const t = Ar.getOrCreateInstance(this, e);
            if ("string" == typeof e) {
              if (void 0 === t[e] || e.startsWith("_") || "constructor" === e)
                throw new TypeError(`No method named "${e}"`);
              t[e]();
            }
          });
        }
      }
      ft.on(window, _r, () => {
        for (const e of jt.find('[data-bs-spy="scroll"]'))
          Ar.getOrCreateInstance(e);
      }),
        Ye(Ar);
      const Lr = ".bs.tab",
        Or = `hide${Lr}`,
        jr = `hidden${Lr}`,
        Cr = `show${Lr}`,
        Tr = `shown${Lr}`,
        Dr = `click${Lr}`,
        Pr = `keydown${Lr}`,
        Ir = `load${Lr}`,
        Nr = "ArrowLeft",
        Mr = "ArrowRight",
        Fr = "ArrowUp",
        zr = "ArrowDown",
        Rr = "active",
        $r = "fade",
        Wr = "show",
        qr = ":not(.dropdown-toggle)",
        Br =
          '[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]',
        Hr = `.nav-link${qr}, .list-group-item${qr}, [role="tab"]${qr}, ${Br}`,
        Vr = `.${Rr}[data-bs-toggle="tab"], .${Rr}[data-bs-toggle="pill"], .${Rr}[data-bs-toggle="list"]`;
      class Qr extends wt {
        constructor(e) {
          super(e),
            (this._parent = this._element.closest(
              '.list-group, .nav, [role="tablist"]'
            )),
            this._parent &&
              (this._setInitialAttributes(this._parent, this._getChildren()),
              ft.on(this._element, Pr, (e) => this._keydown(e)));
        }
        static get NAME() {
          return "tab";
        }
        show() {
          const e = this._element;
          if (this._elemIsActive(e)) return;
          const t = this._getActiveElem(),
            i = t ? ft.trigger(t, Or, { relatedTarget: e }) : null;
          ft.trigger(e, Cr, { relatedTarget: t }).defaultPrevented ||
            (i && i.defaultPrevented) ||
            (this._deactivate(t, e), this._activate(e, t));
        }
        _activate(e, t) {
          e &&
            (e.classList.add(Rr),
            this._activate(Me(e)),
            this._queueCallback(
              () => {
                "tab" === e.getAttribute("role")
                  ? (e.removeAttribute("tabindex"),
                    e.setAttribute("aria-selected", !0),
                    this._toggleDropDown(e, !0),
                    ft.trigger(e, Tr, { relatedTarget: t }))
                  : e.classList.add(Wr);
              },
              e,
              e.classList.contains($r)
            ));
        }
        _deactivate(e, t) {
          e &&
            (e.classList.remove(Rr),
            e.blur(),
            this._deactivate(Me(e)),
            this._queueCallback(
              () => {
                "tab" === e.getAttribute("role")
                  ? (e.setAttribute("aria-selected", !1),
                    e.setAttribute("tabindex", "-1"),
                    this._toggleDropDown(e, !1),
                    ft.trigger(e, jr, { relatedTarget: t }))
                  : e.classList.remove(Wr);
              },
              e,
              e.classList.contains($r)
            ));
        }
        _keydown(e) {
          if (![Nr, Mr, Fr, zr].includes(e.key)) return;
          e.stopPropagation(), e.preventDefault();
          const t = [Mr, zr].includes(e.key),
            i = Ge(
              this._getChildren().filter((e) => !We(e)),
              e.target,
              t,
              !0
            );
          i &&
            (i.focus({ preventScroll: !0 }), Qr.getOrCreateInstance(i).show());
        }
        _getChildren() {
          return jt.find(Hr, this._parent);
        }
        _getActiveElem() {
          return this._getChildren().find((e) => this._elemIsActive(e)) || null;
        }
        _setInitialAttributes(e, t) {
          this._setAttributeIfNotExists(e, "role", "tablist");
          for (const e of t) this._setInitialAttributesOnChild(e);
        }
        _setInitialAttributesOnChild(e) {
          e = this._getInnerElement(e);
          const t = this._elemIsActive(e),
            i = this._getOuterElement(e);
          e.setAttribute("aria-selected", t),
            i !== e && this._setAttributeIfNotExists(i, "role", "presentation"),
            t || e.setAttribute("tabindex", "-1"),
            this._setAttributeIfNotExists(e, "role", "tab"),
            this._setInitialAttributesOnTargetPanel(e);
        }
        _setInitialAttributesOnTargetPanel(e) {
          const t = Me(e);
          t &&
            (this._setAttributeIfNotExists(t, "role", "tabpanel"),
            e.id &&
              this._setAttributeIfNotExists(t, "aria-labelledby", `#${e.id}`));
        }
        _toggleDropDown(e, t) {
          const i = this._getOuterElement(e);
          if (!i.classList.contains("dropdown")) return;
          const n = (e, n) => {
            const r = jt.findOne(e, i);
            r && r.classList.toggle(n, t);
          };
          n(".dropdown-toggle", Rr),
            n(".dropdown-menu", Wr),
            i.setAttribute("aria-expanded", t);
        }
        _setAttributeIfNotExists(e, t, i) {
          e.hasAttribute(t) || e.setAttribute(t, i);
        }
        _elemIsActive(e) {
          return e.classList.contains(Rr);
        }
        _getInnerElement(e) {
          return e.matches(Hr) ? e : jt.findOne(Hr, e);
        }
        _getOuterElement(e) {
          return e.closest(".nav-item, .list-group-item") || e;
        }
        static jQueryInterface(e) {
          return this.each(function () {
            const t = Qr.getOrCreateInstance(this);
            if ("string" == typeof e) {
              if (void 0 === t[e] || e.startsWith("_") || "constructor" === e)
                throw new TypeError(`No method named "${e}"`);
              t[e]();
            }
          });
        }
      }
      ft.on(document, Dr, Br, function (e) {
        ["A", "AREA"].includes(this.tagName) && e.preventDefault(),
          We(this) || Qr.getOrCreateInstance(this).show();
      }),
        ft.on(window, Ir, () => {
          for (const e of jt.find(Vr)) Qr.getOrCreateInstance(e);
        }),
        Ye(Qr);
      const Xr = ".bs.toast",
        Yr = `mouseover${Xr}`,
        Ur = `mouseout${Xr}`,
        Kr = `focusin${Xr}`,
        Gr = `focusout${Xr}`,
        Jr = `hide${Xr}`,
        Zr = `hidden${Xr}`,
        es = `show${Xr}`,
        ts = `shown${Xr}`,
        is = "hide",
        ns = "show",
        rs = "showing",
        ss = { animation: "boolean", autohide: "boolean", delay: "number" },
        os = { animation: !0, autohide: !0, delay: 5e3 };
      class as extends wt {
        constructor(e, t) {
          super(e, t),
            (this._timeout = null),
            (this._hasMouseInteraction = !1),
            (this._hasKeyboardInteraction = !1),
            this._setListeners();
        }
        static get Default() {
          return os;
        }
        static get DefaultType() {
          return ss;
        }
        static get NAME() {
          return "toast";
        }
        show() {
          ft.trigger(this._element, es).defaultPrevented ||
            (this._clearTimeout(),
            this._config.animation && this._element.classList.add("fade"),
            this._element.classList.remove(is),
            He(this._element),
            this._element.classList.add(ns, rs),
            this._queueCallback(
              () => {
                this._element.classList.remove(rs),
                  ft.trigger(this._element, ts),
                  this._maybeScheduleHide();
              },
              this._element,
              this._config.animation
            ));
        }
        hide() {
          this.isShown() &&
            (ft.trigger(this._element, Jr).defaultPrevented ||
              (this._element.classList.add(rs),
              this._queueCallback(
                () => {
                  this._element.classList.add(is),
                    this._element.classList.remove(rs, ns),
                    ft.trigger(this._element, Zr);
                },
                this._element,
                this._config.animation
              )));
        }
        dispose() {
          this._clearTimeout(),
            this.isShown() && this._element.classList.remove(ns),
            super.dispose();
        }
        isShown() {
          return this._element.classList.contains(ns);
        }
        _maybeScheduleHide() {
          this._config.autohide &&
            (this._hasMouseInteraction ||
              this._hasKeyboardInteraction ||
              (this._timeout = setTimeout(() => {
                this.hide();
              }, this._config.delay)));
        }
        _onInteraction(e, t) {
          switch (e.type) {
            case "mouseover":
            case "mouseout":
              this._hasMouseInteraction = t;
              break;
            case "focusin":
            case "focusout":
              this._hasKeyboardInteraction = t;
          }
          if (t) return void this._clearTimeout();
          const i = e.relatedTarget;
          this._element === i ||
            this._element.contains(i) ||
            this._maybeScheduleHide();
        }
        _setListeners() {
          ft.on(this._element, Yr, (e) => this._onInteraction(e, !0)),
            ft.on(this._element, Ur, (e) => this._onInteraction(e, !1)),
            ft.on(this._element, Kr, (e) => this._onInteraction(e, !0)),
            ft.on(this._element, Gr, (e) => this._onInteraction(e, !1));
        }
        _clearTimeout() {
          clearTimeout(this._timeout), (this._timeout = null);
        }
        static jQueryInterface(e) {
          return this.each(function () {
            const t = as.getOrCreateInstance(this, e);
            if ("string" == typeof e) {
              if (void 0 === t[e])
                throw new TypeError(`No method named "${e}"`);
              t[e](this);
            }
          });
        }
      }
      xt(as), Ye(as), i(1539), i(4747);
      var ls,
        cs = i(1807),
        us = i.n(cs),
        ds =
          (i(1058),
          i(9601),
          i(7327),
          i(6992),
          i(8783),
          i(4129),
          i(3948),
          i(3096)),
        hs = i.n(ds),
        fs = i(1296),
        ps = i.n(fs),
        gs = i(773),
        ms = i.n(gs),
        vs = [],
        bs = "ResizeObserver loop completed with undelivered notifications.";
      !(function (e) {
        (e.BORDER_BOX = "border-box"),
          (e.CONTENT_BOX = "content-box"),
          (e.DEVICE_PIXEL_CONTENT_BOX = "device-pixel-content-box");
      })(ls || (ls = {}));
      var _s,
        ys = function (e) {
          return Object.freeze(e);
        },
        ws = function (e, t) {
          (this.inlineSize = e), (this.blockSize = t), ys(this);
        },
        xs = (function () {
          function e(e, t, i, n) {
            return (
              (this.x = e),
              (this.y = t),
              (this.width = i),
              (this.height = n),
              (this.top = this.y),
              (this.left = this.x),
              (this.bottom = this.top + this.height),
              (this.right = this.left + this.width),
              ys(this)
            );
          }
          return (
            (e.prototype.toJSON = function () {
              var e = this;
              return {
                x: e.x,
                y: e.y,
                top: e.top,
                right: e.right,
                bottom: e.bottom,
                left: e.left,
                width: e.width,
                height: e.height,
              };
            }),
            (e.fromRect = function (t) {
              return new e(t.x, t.y, t.width, t.height);
            }),
            e
          );
        })(),
        Es = function (e) {
          return e instanceof SVGElement && "getBBox" in e;
        },
        ks = function (e) {
          if (Es(e)) {
            var t = e.getBBox(),
              i = t.width,
              n = t.height;
            return !i && !n;
          }
          var r = e,
            s = r.offsetWidth,
            o = r.offsetHeight;
          return !(s || o || e.getClientRects().length);
        },
        Ss = function (e) {
          var t;
          if (e instanceof Element) return !0;
          var i =
            null === (t = null == e ? void 0 : e.ownerDocument) || void 0 === t
              ? void 0
              : t.defaultView;
          return !!(i && e instanceof i.Element);
        },
        As = "undefined" != typeof window ? window : {},
        Ls = new WeakMap(),
        Os = /auto|scroll/,
        js = /^tb|vertical/,
        Cs = /msie|trident/i.test(As.navigator && As.navigator.userAgent),
        Ts = function (e) {
          return parseFloat(e || "0");
        },
        Ds = function (e, t, i) {
          return (
            void 0 === e && (e = 0),
            void 0 === t && (t = 0),
            void 0 === i && (i = !1),
            new ws((i ? t : e) || 0, (i ? e : t) || 0)
          );
        },
        Ps = ys({
          devicePixelContentBoxSize: Ds(),
          borderBoxSize: Ds(),
          contentBoxSize: Ds(),
          contentRect: new xs(0, 0, 0, 0),
        }),
        Is = function (e, t) {
          if ((void 0 === t && (t = !1), Ls.has(e) && !t)) return Ls.get(e);
          if (ks(e)) return Ls.set(e, Ps), Ps;
          var i = getComputedStyle(e),
            n = Es(e) && e.ownerSVGElement && e.getBBox(),
            r = !Cs && "border-box" === i.boxSizing,
            s = js.test(i.writingMode || ""),
            o = !n && Os.test(i.overflowY || ""),
            a = !n && Os.test(i.overflowX || ""),
            l = n ? 0 : Ts(i.paddingTop),
            c = n ? 0 : Ts(i.paddingRight),
            u = n ? 0 : Ts(i.paddingBottom),
            d = n ? 0 : Ts(i.paddingLeft),
            h = n ? 0 : Ts(i.borderTopWidth),
            f = n ? 0 : Ts(i.borderRightWidth),
            p = n ? 0 : Ts(i.borderBottomWidth),
            g = d + c,
            m = l + u,
            v = (n ? 0 : Ts(i.borderLeftWidth)) + f,
            b = h + p,
            _ = a ? e.offsetHeight - b - e.clientHeight : 0,
            y = o ? e.offsetWidth - v - e.clientWidth : 0,
            w = r ? g + v : 0,
            x = r ? m + b : 0,
            E = n ? n.width : Ts(i.width) - w - y,
            k = n ? n.height : Ts(i.height) - x - _,
            S = E + g + y + v,
            A = k + m + _ + b,
            L = ys({
              devicePixelContentBoxSize: Ds(
                Math.round(E * devicePixelRatio),
                Math.round(k * devicePixelRatio),
                s
              ),
              borderBoxSize: Ds(S, A, s),
              contentBoxSize: Ds(E, k, s),
              contentRect: new xs(d, l, E, k),
            });
          return Ls.set(e, L), L;
        },
        Ns = function (e, t, i) {
          var n = Is(e, i),
            r = n.borderBoxSize,
            s = n.contentBoxSize,
            o = n.devicePixelContentBoxSize;
          switch (t) {
            case ls.DEVICE_PIXEL_CONTENT_BOX:
              return o;
            case ls.BORDER_BOX:
              return r;
            default:
              return s;
          }
        },
        Ms = function (e) {
          var t = Is(e);
          (this.target = e),
            (this.contentRect = t.contentRect),
            (this.borderBoxSize = ys([t.borderBoxSize])),
            (this.contentBoxSize = ys([t.contentBoxSize])),
            (this.devicePixelContentBoxSize = ys([
              t.devicePixelContentBoxSize,
            ]));
        },
        Fs = function (e) {
          if (ks(e)) return 1 / 0;
          for (var t = 0, i = e.parentNode; i; ) (t += 1), (i = i.parentNode);
          return t;
        },
        zs = function () {
          var e = 1 / 0,
            t = [];
          vs.forEach(function (i) {
            if (0 !== i.activeTargets.length) {
              var n = [];
              i.activeTargets.forEach(function (t) {
                var i = new Ms(t.target),
                  r = Fs(t.target);
                n.push(i),
                  (t.lastReportedSize = Ns(t.target, t.observedBox)),
                  r < e && (e = r);
              }),
                t.push(function () {
                  i.callback.call(i.observer, n, i.observer);
                }),
                i.activeTargets.splice(0, i.activeTargets.length);
            }
          });
          for (var i = 0, n = t; i < n.length; i++) (0, n[i])();
          return e;
        },
        Rs = function (e) {
          vs.forEach(function (t) {
            t.activeTargets.splice(0, t.activeTargets.length),
              t.skippedTargets.splice(0, t.skippedTargets.length),
              t.observationTargets.forEach(function (i) {
                i.isActive() &&
                  (Fs(i.target) > e
                    ? t.activeTargets.push(i)
                    : t.skippedTargets.push(i));
              });
          });
        },
        $s = [],
        Ws = 0,
        qs = { attributes: !0, characterData: !0, childList: !0, subtree: !0 },
        Bs = [
          "resize",
          "load",
          "transitionend",
          "animationend",
          "animationstart",
          "animationiteration",
          "keyup",
          "keydown",
          "mouseup",
          "mousedown",
          "mouseover",
          "mouseout",
          "blur",
          "focus",
        ],
        Hs = function (e) {
          return void 0 === e && (e = 0), Date.now() + e;
        },
        Vs = !1,
        Qs = new ((function () {
          function e() {
            var e = this;
            (this.stopped = !0),
              (this.listener = function () {
                return e.schedule();
              });
          }
          return (
            (e.prototype.run = function (e) {
              var t = this;
              if ((void 0 === e && (e = 250), !Vs)) {
                Vs = !0;
                var i,
                  n = Hs(e);
                (i = function () {
                  var i = !1;
                  try {
                    i = (function () {
                      var e,
                        t = 0;
                      for (
                        Rs(t);
                        vs.some(function (e) {
                          return e.activeTargets.length > 0;
                        });

                      )
                        (t = zs()), Rs(t);
                      return (
                        vs.some(function (e) {
                          return e.skippedTargets.length > 0;
                        }) &&
                          ("function" == typeof ErrorEvent
                            ? (e = new ErrorEvent("error", { message: bs }))
                            : ((e = document.createEvent("Event")).initEvent(
                                "error",
                                !1,
                                !1
                              ),
                              (e.message = bs)),
                          window.dispatchEvent(e)),
                        t > 0
                      );
                    })();
                  } finally {
                    if (((Vs = !1), (e = n - Hs()), !Ws)) return;
                    i ? t.run(1e3) : e > 0 ? t.run(e) : t.start();
                  }
                }),
                  (function (e) {
                    if (!_s) {
                      var t = 0,
                        i = document.createTextNode("");
                      new MutationObserver(function () {
                        return $s.splice(0).forEach(function (e) {
                          return e();
                        });
                      }).observe(i, { characterData: !0 }),
                        (_s = function () {
                          i.textContent = "".concat(t ? t-- : t++);
                        });
                    }
                    $s.push(e), _s();
                  })(function () {
                    requestAnimationFrame(i);
                  });
              }
            }),
            (e.prototype.schedule = function () {
              this.stop(), this.run();
            }),
            (e.prototype.observe = function () {
              var e = this,
                t = function () {
                  return e.observer && e.observer.observe(document.body, qs);
                };
              document.body ? t() : As.addEventListener("DOMContentLoaded", t);
            }),
            (e.prototype.start = function () {
              var e = this;
              this.stopped &&
                ((this.stopped = !1),
                (this.observer = new MutationObserver(this.listener)),
                this.observe(),
                Bs.forEach(function (t) {
                  return As.addEventListener(t, e.listener, !0);
                }));
            }),
            (e.prototype.stop = function () {
              var e = this;
              this.stopped ||
                (this.observer && this.observer.disconnect(),
                Bs.forEach(function (t) {
                  return As.removeEventListener(t, e.listener, !0);
                }),
                (this.stopped = !0));
            }),
            e
          );
        })())(),
        Xs = function (e) {
          !Ws && e > 0 && Qs.start(), !(Ws += e) && Qs.stop();
        },
        Ys = (function () {
          function e(e, t) {
            (this.target = e),
              (this.observedBox = t || ls.CONTENT_BOX),
              (this.lastReportedSize = { inlineSize: 0, blockSize: 0 });
          }
          return (
            (e.prototype.isActive = function () {
              var e,
                t = Ns(this.target, this.observedBox, !0);
              return (
                (e = this.target),
                Es(e) ||
                  (function (e) {
                    switch (e.tagName) {
                      case "INPUT":
                        if ("image" !== e.type) break;
                      case "VIDEO":
                      case "AUDIO":
                      case "EMBED":
                      case "OBJECT":
                      case "CANVAS":
                      case "IFRAME":
                      case "IMG":
                        return !0;
                    }
                    return !1;
                  })(e) ||
                  "inline" !== getComputedStyle(e).display ||
                  (this.lastReportedSize = t),
                this.lastReportedSize.inlineSize !== t.inlineSize ||
                  this.lastReportedSize.blockSize !== t.blockSize
              );
            }),
            e
          );
        })(),
        Us = function (e, t) {
          (this.activeTargets = []),
            (this.skippedTargets = []),
            (this.observationTargets = []),
            (this.observer = e),
            (this.callback = t);
        },
        Ks = new WeakMap(),
        Gs = function (e, t) {
          for (var i = 0; i < e.length; i += 1) if (e[i].target === t) return i;
          return -1;
        },
        Js = (function () {
          function e() {}
          return (
            (e.connect = function (e, t) {
              var i = new Us(e, t);
              Ks.set(e, i);
            }),
            (e.observe = function (e, t, i) {
              var n = Ks.get(e),
                r = 0 === n.observationTargets.length;
              Gs(n.observationTargets, t) < 0 &&
                (r && vs.push(n),
                n.observationTargets.push(new Ys(t, i && i.box)),
                Xs(1),
                Qs.schedule());
            }),
            (e.unobserve = function (e, t) {
              var i = Ks.get(e),
                n = Gs(i.observationTargets, t),
                r = 1 === i.observationTargets.length;
              n >= 0 &&
                (r && vs.splice(vs.indexOf(i), 1),
                i.observationTargets.splice(n, 1),
                Xs(-1));
            }),
            (e.disconnect = function (e) {
              var t = this,
                i = Ks.get(e);
              i.observationTargets.slice().forEach(function (i) {
                return t.unobserve(e, i.target);
              }),
                i.activeTargets.splice(0, i.activeTargets.length);
            }),
            e
          );
        })(),
        Zs = (function () {
          function e(e) {
            if (0 === arguments.length)
              throw new TypeError(
                "Failed to construct 'ResizeObserver': 1 argument required, but only 0 present."
              );
            if ("function" != typeof e)
              throw new TypeError(
                "Failed to construct 'ResizeObserver': The callback provided as parameter 1 is not a function."
              );
            Js.connect(this, e);
          }
          return (
            (e.prototype.observe = function (e, t) {
              if (0 === arguments.length)
                throw new TypeError(
                  "Failed to execute 'observe' on 'ResizeObserver': 1 argument required, but only 0 present."
                );
              if (!Ss(e))
                throw new TypeError(
                  "Failed to execute 'observe' on 'ResizeObserver': parameter 1 is not of type 'Element"
                );
              Js.observe(this, e, t);
            }),
            (e.prototype.unobserve = function (e) {
              if (0 === arguments.length)
                throw new TypeError(
                  "Failed to execute 'unobserve' on 'ResizeObserver': 1 argument required, but only 0 present."
                );
              if (!Ss(e))
                throw new TypeError(
                  "Failed to execute 'unobserve' on 'ResizeObserver': parameter 1 is not of type 'Element"
                );
              Js.unobserve(this, e);
            }),
            (e.prototype.disconnect = function () {
              Js.disconnect(this);
            }),
            (e.toString = function () {
              return "function ResizeObserver () { [polyfill code] }";
            }),
            e
          );
        })(),
        eo =
          (i(5827),
          i(4916),
          i(4723),
          i(8309),
          i(5306),
          function (e) {
            return Array.prototype.reduce.call(
              e,
              function (e, t) {
                var i = t.name.match(/data-simplebar-(.+)/);
                if (i) {
                  var n = i[1].replace(/\W+(.)/g, function (e, t) {
                    return t.toUpperCase();
                  });
                  switch (t.value) {
                    case "true":
                      e[n] = !0;
                      break;
                    case "false":
                      e[n] = !1;
                      break;
                    case void 0:
                      e[n] = !0;
                      break;
                    default:
                      e[n] = t.value;
                  }
                }
                return e;
              },
              {}
            );
          });
      function to(e) {
        return e && e.ownerDocument && e.ownerDocument.defaultView
          ? e.ownerDocument.defaultView
          : window;
      }
      function io(e) {
        return e && e.ownerDocument ? e.ownerDocument : document;
      }
      var no = null,
        ro = null;
      function so(e) {
        if (null === no) {
          var t = io(e);
          if (void 0 === t) return (no = 0);
          var i = t.body,
            n = t.createElement("div");
          n.classList.add("simplebar-hide-scrollbar"), i.appendChild(n);
          var r = n.getBoundingClientRect().right;
          i.removeChild(n), (no = r);
        }
        return no;
      }
      us() &&
        window.addEventListener("resize", function () {
          ro !== window.devicePixelRatio &&
            ((ro = window.devicePixelRatio), (no = null));
        });
      var oo = (function () {
        function e(t, i) {
          var n = this;
          (this.onScroll = function () {
            var e = to(n.el);
            n.scrollXTicking ||
              (e.requestAnimationFrame(n.scrollX), (n.scrollXTicking = !0)),
              n.scrollYTicking ||
                (e.requestAnimationFrame(n.scrollY), (n.scrollYTicking = !0));
          }),
            (this.scrollX = function () {
              n.axis.x.isOverflowing &&
                (n.showScrollbar("x"), n.positionScrollbar("x")),
                (n.scrollXTicking = !1);
            }),
            (this.scrollY = function () {
              n.axis.y.isOverflowing &&
                (n.showScrollbar("y"), n.positionScrollbar("y")),
                (n.scrollYTicking = !1);
            }),
            (this.onMouseEnter = function () {
              n.showScrollbar("x"), n.showScrollbar("y");
            }),
            (this.onMouseMove = function (e) {
              (n.mouseX = e.clientX),
                (n.mouseY = e.clientY),
                (n.axis.x.isOverflowing || n.axis.x.forceVisible) &&
                  n.onMouseMoveForAxis("x"),
                (n.axis.y.isOverflowing || n.axis.y.forceVisible) &&
                  n.onMouseMoveForAxis("y");
            }),
            (this.onMouseLeave = function () {
              n.onMouseMove.cancel(),
                (n.axis.x.isOverflowing || n.axis.x.forceVisible) &&
                  n.onMouseLeaveForAxis("x"),
                (n.axis.y.isOverflowing || n.axis.y.forceVisible) &&
                  n.onMouseLeaveForAxis("y"),
                (n.mouseX = -1),
                (n.mouseY = -1);
            }),
            (this.onWindowResize = function () {
              (n.scrollbarWidth = n.getScrollbarWidth()),
                n.hideNativeScrollbar();
            }),
            (this.hideScrollbars = function () {
              (n.axis.x.track.rect = n.axis.x.track.el.getBoundingClientRect()),
                (n.axis.y.track.rect =
                  n.axis.y.track.el.getBoundingClientRect()),
                n.isWithinBounds(n.axis.y.track.rect) ||
                  (n.axis.y.scrollbar.el.classList.remove(n.classNames.visible),
                  (n.axis.y.isVisible = !1)),
                n.isWithinBounds(n.axis.x.track.rect) ||
                  (n.axis.x.scrollbar.el.classList.remove(n.classNames.visible),
                  (n.axis.x.isVisible = !1));
            }),
            (this.onPointerEvent = function (e) {
              var t, i;
              (n.axis.x.track.rect = n.axis.x.track.el.getBoundingClientRect()),
                (n.axis.y.track.rect =
                  n.axis.y.track.el.getBoundingClientRect()),
                (n.axis.x.isOverflowing || n.axis.x.forceVisible) &&
                  (t = n.isWithinBounds(n.axis.x.track.rect)),
                (n.axis.y.isOverflowing || n.axis.y.forceVisible) &&
                  (i = n.isWithinBounds(n.axis.y.track.rect)),
                (t || i) &&
                  (e.preventDefault(),
                  e.stopPropagation(),
                  "mousedown" === e.type &&
                    (t &&
                      ((n.axis.x.scrollbar.rect =
                        n.axis.x.scrollbar.el.getBoundingClientRect()),
                      n.isWithinBounds(n.axis.x.scrollbar.rect)
                        ? n.onDragStart(e, "x")
                        : n.onTrackClick(e, "x")),
                    i &&
                      ((n.axis.y.scrollbar.rect =
                        n.axis.y.scrollbar.el.getBoundingClientRect()),
                      n.isWithinBounds(n.axis.y.scrollbar.rect)
                        ? n.onDragStart(e, "y")
                        : n.onTrackClick(e, "y"))));
            }),
            (this.drag = function (t) {
              var i = n.axis[n.draggedAxis].track,
                r = i.rect[n.axis[n.draggedAxis].sizeAttr],
                s = n.axis[n.draggedAxis].scrollbar,
                o = n.contentWrapperEl[n.axis[n.draggedAxis].scrollSizeAttr],
                a = parseInt(n.elStyles[n.axis[n.draggedAxis].sizeAttr], 10);
              t.preventDefault(), t.stopPropagation();
              var l =
                ((("y" === n.draggedAxis ? t.pageY : t.pageX) -
                  i.rect[n.axis[n.draggedAxis].offsetAttr] -
                  n.axis[n.draggedAxis].dragOffset) /
                  (r - s.size)) *
                (o - a);
              "x" === n.draggedAxis &&
                ((l =
                  n.isRtl && e.getRtlHelpers().isRtlScrollbarInverted
                    ? l - (r + s.size)
                    : l),
                (l =
                  n.isRtl && e.getRtlHelpers().isRtlScrollingInverted
                    ? -l
                    : l)),
                (n.contentWrapperEl[n.axis[n.draggedAxis].scrollOffsetAttr] =
                  l);
            }),
            (this.onEndDrag = function (e) {
              var t = io(n.el),
                i = to(n.el);
              e.preventDefault(),
                e.stopPropagation(),
                n.el.classList.remove(n.classNames.dragging),
                t.removeEventListener("mousemove", n.drag, !0),
                t.removeEventListener("mouseup", n.onEndDrag, !0),
                (n.removePreventClickId = i.setTimeout(function () {
                  t.removeEventListener("click", n.preventClick, !0),
                    t.removeEventListener("dblclick", n.preventClick, !0),
                    (n.removePreventClickId = null);
                }));
            }),
            (this.preventClick = function (e) {
              e.preventDefault(), e.stopPropagation();
            }),
            (this.el = t),
            (this.minScrollbarWidth = 20),
            (this.options = Object.assign({}, e.defaultOptions, i)),
            (this.classNames = Object.assign(
              {},
              e.defaultOptions.classNames,
              this.options.classNames
            )),
            (this.axis = {
              x: {
                scrollOffsetAttr: "scrollLeft",
                sizeAttr: "width",
                scrollSizeAttr: "scrollWidth",
                offsetSizeAttr: "offsetWidth",
                offsetAttr: "left",
                overflowAttr: "overflowX",
                dragOffset: 0,
                isOverflowing: !0,
                isVisible: !1,
                forceVisible: !1,
                track: {},
                scrollbar: {},
              },
              y: {
                scrollOffsetAttr: "scrollTop",
                sizeAttr: "height",
                scrollSizeAttr: "scrollHeight",
                offsetSizeAttr: "offsetHeight",
                offsetAttr: "top",
                overflowAttr: "overflowY",
                dragOffset: 0,
                isOverflowing: !0,
                isVisible: !1,
                forceVisible: !1,
                track: {},
                scrollbar: {},
              },
            }),
            (this.removePreventClickId = null),
            e.instances.has(this.el) ||
              ((this.recalculate = hs()(this.recalculate.bind(this), 64)),
              (this.onMouseMove = hs()(this.onMouseMove.bind(this), 64)),
              (this.hideScrollbars = ps()(
                this.hideScrollbars.bind(this),
                this.options.timeout
              )),
              (this.onWindowResize = ps()(this.onWindowResize.bind(this), 64, {
                leading: !0,
              })),
              (e.getRtlHelpers = ms()(e.getRtlHelpers)),
              this.init());
        }
        (e.getRtlHelpers = function () {
          var t = document.createElement("div");
          t.innerHTML =
            '<div class="hs-dummy-scrollbar-size"><div style="height: 200%; width: 200%; margin: 10px 0;"></div></div>';
          var i = t.firstElementChild;
          document.body.appendChild(i);
          var n = i.firstElementChild;
          i.scrollLeft = 0;
          var r = e.getOffset(i),
            s = e.getOffset(n);
          i.scrollLeft = 999;
          var o = e.getOffset(n);
          return {
            isRtlScrollingInverted: r.left !== s.left && s.left - o.left != 0,
            isRtlScrollbarInverted: r.left !== s.left,
          };
        }),
          (e.getOffset = function (e) {
            var t = e.getBoundingClientRect(),
              i = io(e),
              n = to(e);
            return {
              top: t.top + (n.pageYOffset || i.documentElement.scrollTop),
              left: t.left + (n.pageXOffset || i.documentElement.scrollLeft),
            };
          });
        var t = e.prototype;
        return (
          (t.init = function () {
            e.instances.set(this.el, this),
              us() &&
                (this.initDOM(),
                this.setAccessibilityAttributes(),
                (this.scrollbarWidth = this.getScrollbarWidth()),
                this.recalculate(),
                this.initListeners());
          }),
          (t.initDOM = function () {
            var e = this;
            if (
              Array.prototype.filter.call(this.el.children, function (t) {
                return t.classList.contains(e.classNames.wrapper);
              }).length
            )
              (this.wrapperEl = this.el.querySelector(
                "." + this.classNames.wrapper
              )),
                (this.contentWrapperEl =
                  this.options.scrollableNode ||
                  this.el.querySelector("." + this.classNames.contentWrapper)),
                (this.contentEl =
                  this.options.contentNode ||
                  this.el.querySelector("." + this.classNames.contentEl)),
                (this.offsetEl = this.el.querySelector(
                  "." + this.classNames.offset
                )),
                (this.maskEl = this.el.querySelector(
                  "." + this.classNames.mask
                )),
                (this.placeholderEl = this.findChild(
                  this.wrapperEl,
                  "." + this.classNames.placeholder
                )),
                (this.heightAutoObserverWrapperEl = this.el.querySelector(
                  "." + this.classNames.heightAutoObserverWrapperEl
                )),
                (this.heightAutoObserverEl = this.el.querySelector(
                  "." + this.classNames.heightAutoObserverEl
                )),
                (this.axis.x.track.el = this.findChild(
                  this.el,
                  "." + this.classNames.track + "." + this.classNames.horizontal
                )),
                (this.axis.y.track.el = this.findChild(
                  this.el,
                  "." + this.classNames.track + "." + this.classNames.vertical
                ));
            else {
              for (
                this.wrapperEl = document.createElement("div"),
                  this.contentWrapperEl = document.createElement("div"),
                  this.offsetEl = document.createElement("div"),
                  this.maskEl = document.createElement("div"),
                  this.contentEl = document.createElement("div"),
                  this.placeholderEl = document.createElement("div"),
                  this.heightAutoObserverWrapperEl =
                    document.createElement("div"),
                  this.heightAutoObserverEl = document.createElement("div"),
                  this.wrapperEl.classList.add(this.classNames.wrapper),
                  this.contentWrapperEl.classList.add(
                    this.classNames.contentWrapper
                  ),
                  this.offsetEl.classList.add(this.classNames.offset),
                  this.maskEl.classList.add(this.classNames.mask),
                  this.contentEl.classList.add(this.classNames.contentEl),
                  this.placeholderEl.classList.add(this.classNames.placeholder),
                  this.heightAutoObserverWrapperEl.classList.add(
                    this.classNames.heightAutoObserverWrapperEl
                  ),
                  this.heightAutoObserverEl.classList.add(
                    this.classNames.heightAutoObserverEl
                  );
                this.el.firstChild;

              )
                this.contentEl.appendChild(this.el.firstChild);
              this.contentWrapperEl.appendChild(this.contentEl),
                this.offsetEl.appendChild(this.contentWrapperEl),
                this.maskEl.appendChild(this.offsetEl),
                this.heightAutoObserverWrapperEl.appendChild(
                  this.heightAutoObserverEl
                ),
                this.wrapperEl.appendChild(this.heightAutoObserverWrapperEl),
                this.wrapperEl.appendChild(this.maskEl),
                this.wrapperEl.appendChild(this.placeholderEl),
                this.el.appendChild(this.wrapperEl);
            }
            if (!this.axis.x.track.el || !this.axis.y.track.el) {
              var t = document.createElement("div"),
                i = document.createElement("div");
              t.classList.add(this.classNames.track),
                i.classList.add(this.classNames.scrollbar),
                t.appendChild(i),
                (this.axis.x.track.el = t.cloneNode(!0)),
                this.axis.x.track.el.classList.add(this.classNames.horizontal),
                (this.axis.y.track.el = t.cloneNode(!0)),
                this.axis.y.track.el.classList.add(this.classNames.vertical),
                this.el.appendChild(this.axis.x.track.el),
                this.el.appendChild(this.axis.y.track.el);
            }
            (this.axis.x.scrollbar.el = this.axis.x.track.el.querySelector(
              "." + this.classNames.scrollbar
            )),
              (this.axis.y.scrollbar.el = this.axis.y.track.el.querySelector(
                "." + this.classNames.scrollbar
              )),
              this.options.autoHide ||
                (this.axis.x.scrollbar.el.classList.add(
                  this.classNames.visible
                ),
                this.axis.y.scrollbar.el.classList.add(
                  this.classNames.visible
                )),
              this.el.setAttribute("data-simplebar", "init");
          }),
          (t.setAccessibilityAttributes = function () {
            var e = this.options.ariaLabel || "scrollable content";
            this.contentWrapperEl.setAttribute("tabindex", "0"),
              this.contentWrapperEl.setAttribute("role", "region"),
              this.contentWrapperEl.setAttribute("aria-label", e);
          }),
          (t.initListeners = function () {
            var e = this,
              t = to(this.el);
            this.options.autoHide &&
              this.el.addEventListener("mouseenter", this.onMouseEnter),
              ["mousedown", "click", "dblclick"].forEach(function (t) {
                e.el.addEventListener(t, e.onPointerEvent, !0);
              }),
              ["touchstart", "touchend", "touchmove"].forEach(function (t) {
                e.el.addEventListener(t, e.onPointerEvent, {
                  capture: !0,
                  passive: !0,
                });
              }),
              this.el.addEventListener("mousemove", this.onMouseMove),
              this.el.addEventListener("mouseleave", this.onMouseLeave),
              this.contentWrapperEl.addEventListener("scroll", this.onScroll),
              t.addEventListener("resize", this.onWindowResize);
            var i = !1,
              n = null,
              r = t.ResizeObserver || Zs;
            (this.resizeObserver = new r(function () {
              i &&
                null === n &&
                (n = t.requestAnimationFrame(function () {
                  e.recalculate(), (n = null);
                }));
            })),
              this.resizeObserver.observe(this.el),
              this.resizeObserver.observe(this.contentEl),
              t.requestAnimationFrame(function () {
                i = !0;
              }),
              (this.mutationObserver = new t.MutationObserver(
                this.recalculate
              )),
              this.mutationObserver.observe(this.contentEl, {
                childList: !0,
                subtree: !0,
                characterData: !0,
              });
          }),
          (t.recalculate = function () {
            var e = to(this.el);
            (this.elStyles = e.getComputedStyle(this.el)),
              (this.isRtl = "rtl" === this.elStyles.direction);
            var t = this.heightAutoObserverEl.offsetHeight <= 1,
              i = this.heightAutoObserverEl.offsetWidth <= 1,
              n = this.contentEl.offsetWidth,
              r = this.contentWrapperEl.offsetWidth,
              s = this.elStyles.overflowX,
              o = this.elStyles.overflowY;
            (this.contentEl.style.padding =
              this.elStyles.paddingTop +
              " " +
              this.elStyles.paddingRight +
              " " +
              this.elStyles.paddingBottom +
              " " +
              this.elStyles.paddingLeft),
              (this.wrapperEl.style.margin =
                "-" +
                this.elStyles.paddingTop +
                " -" +
                this.elStyles.paddingRight +
                " -" +
                this.elStyles.paddingBottom +
                " -" +
                this.elStyles.paddingLeft);
            var a = this.contentEl.scrollHeight,
              l = this.contentEl.scrollWidth;
            (this.contentWrapperEl.style.height = t ? "auto" : "100%"),
              (this.placeholderEl.style.width = i ? n + "px" : "auto"),
              (this.placeholderEl.style.height = a + "px");
            var c = this.contentWrapperEl.offsetHeight;
            (this.axis.x.isOverflowing = l > n),
              (this.axis.y.isOverflowing = a > c),
              (this.axis.x.isOverflowing =
                "hidden" !== s && this.axis.x.isOverflowing),
              (this.axis.y.isOverflowing =
                "hidden" !== o && this.axis.y.isOverflowing),
              (this.axis.x.forceVisible =
                "x" === this.options.forceVisible ||
                !0 === this.options.forceVisible),
              (this.axis.y.forceVisible =
                "y" === this.options.forceVisible ||
                !0 === this.options.forceVisible),
              this.hideNativeScrollbar();
            var u = this.axis.x.isOverflowing ? this.scrollbarWidth : 0,
              d = this.axis.y.isOverflowing ? this.scrollbarWidth : 0;
            (this.axis.x.isOverflowing =
              this.axis.x.isOverflowing && l > r - d),
              (this.axis.y.isOverflowing =
                this.axis.y.isOverflowing && a > c - u),
              (this.axis.x.scrollbar.size = this.getScrollbarSize("x")),
              (this.axis.y.scrollbar.size = this.getScrollbarSize("y")),
              (this.axis.x.scrollbar.el.style.width =
                this.axis.x.scrollbar.size + "px"),
              (this.axis.y.scrollbar.el.style.height =
                this.axis.y.scrollbar.size + "px"),
              this.positionScrollbar("x"),
              this.positionScrollbar("y"),
              this.toggleTrackVisibility("x"),
              this.toggleTrackVisibility("y");
          }),
          (t.getScrollbarSize = function (e) {
            if ((void 0 === e && (e = "y"), !this.axis[e].isOverflowing))
              return 0;
            var t,
              i = this.contentEl[this.axis[e].scrollSizeAttr],
              n = this.axis[e].track.el[this.axis[e].offsetSizeAttr],
              r = n / i;
            return (
              (t = Math.max(~~(r * n), this.options.scrollbarMinSize)),
              this.options.scrollbarMaxSize &&
                (t = Math.min(t, this.options.scrollbarMaxSize)),
              t
            );
          }),
          (t.positionScrollbar = function (t) {
            if ((void 0 === t && (t = "y"), this.axis[t].isOverflowing)) {
              var i = this.contentWrapperEl[this.axis[t].scrollSizeAttr],
                n = this.axis[t].track.el[this.axis[t].offsetSizeAttr],
                r = parseInt(this.elStyles[this.axis[t].sizeAttr], 10),
                s = this.axis[t].scrollbar,
                o = this.contentWrapperEl[this.axis[t].scrollOffsetAttr],
                a =
                  (o =
                    "x" === t &&
                    this.isRtl &&
                    e.getRtlHelpers().isRtlScrollingInverted
                      ? -o
                      : o) /
                  (i - r),
                l = ~~((n - s.size) * a);
              (l =
                "x" === t &&
                this.isRtl &&
                e.getRtlHelpers().isRtlScrollbarInverted
                  ? l + (n - s.size)
                  : l),
                (s.el.style.transform =
                  "x" === t
                    ? "translate3d(" + l + "px, 0, 0)"
                    : "translate3d(0, " + l + "px, 0)");
            }
          }),
          (t.toggleTrackVisibility = function (e) {
            void 0 === e && (e = "y");
            var t = this.axis[e].track.el,
              i = this.axis[e].scrollbar.el;
            this.axis[e].isOverflowing || this.axis[e].forceVisible
              ? ((t.style.visibility = "visible"),
                (this.contentWrapperEl.style[this.axis[e].overflowAttr] =
                  "scroll"))
              : ((t.style.visibility = "hidden"),
                (this.contentWrapperEl.style[this.axis[e].overflowAttr] =
                  "hidden")),
              this.axis[e].isOverflowing
                ? (i.style.display = "block")
                : (i.style.display = "none");
          }),
          (t.hideNativeScrollbar = function () {
            (this.offsetEl.style[this.isRtl ? "left" : "right"] =
              this.axis.y.isOverflowing || this.axis.y.forceVisible
                ? "-" + this.scrollbarWidth + "px"
                : 0),
              (this.offsetEl.style.bottom =
                this.axis.x.isOverflowing || this.axis.x.forceVisible
                  ? "-" + this.scrollbarWidth + "px"
                  : 0);
          }),
          (t.onMouseMoveForAxis = function (e) {
            void 0 === e && (e = "y"),
              (this.axis[e].track.rect =
                this.axis[e].track.el.getBoundingClientRect()),
              (this.axis[e].scrollbar.rect =
                this.axis[e].scrollbar.el.getBoundingClientRect()),
              this.isWithinBounds(this.axis[e].scrollbar.rect)
                ? this.axis[e].scrollbar.el.classList.add(this.classNames.hover)
                : this.axis[e].scrollbar.el.classList.remove(
                    this.classNames.hover
                  ),
              this.isWithinBounds(this.axis[e].track.rect)
                ? (this.showScrollbar(e),
                  this.axis[e].track.el.classList.add(this.classNames.hover))
                : this.axis[e].track.el.classList.remove(this.classNames.hover);
          }),
          (t.onMouseLeaveForAxis = function (e) {
            void 0 === e && (e = "y"),
              this.axis[e].track.el.classList.remove(this.classNames.hover),
              this.axis[e].scrollbar.el.classList.remove(this.classNames.hover);
          }),
          (t.showScrollbar = function (e) {
            void 0 === e && (e = "y");
            var t = this.axis[e].scrollbar.el;
            this.axis[e].isVisible ||
              (t.classList.add(this.classNames.visible),
              (this.axis[e].isVisible = !0)),
              this.options.autoHide && this.hideScrollbars();
          }),
          (t.onDragStart = function (e, t) {
            void 0 === t && (t = "y");
            var i = io(this.el),
              n = to(this.el),
              r = this.axis[t].scrollbar,
              s = "y" === t ? e.pageY : e.pageX;
            (this.axis[t].dragOffset = s - r.rect[this.axis[t].offsetAttr]),
              (this.draggedAxis = t),
              this.el.classList.add(this.classNames.dragging),
              i.addEventListener("mousemove", this.drag, !0),
              i.addEventListener("mouseup", this.onEndDrag, !0),
              null === this.removePreventClickId
                ? (i.addEventListener("click", this.preventClick, !0),
                  i.addEventListener("dblclick", this.preventClick, !0))
                : (n.clearTimeout(this.removePreventClickId),
                  (this.removePreventClickId = null));
          }),
          (t.onTrackClick = function (e, t) {
            var i = this;
            if ((void 0 === t && (t = "y"), this.options.clickOnTrack)) {
              var n = to(this.el);
              this.axis[t].scrollbar.rect =
                this.axis[t].scrollbar.el.getBoundingClientRect();
              var r = this.axis[t].scrollbar.rect[this.axis[t].offsetAttr],
                s = parseInt(this.elStyles[this.axis[t].sizeAttr], 10),
                o = this.contentWrapperEl[this.axis[t].scrollOffsetAttr],
                a =
                  ("y" === t ? this.mouseY - r : this.mouseX - r) < 0 ? -1 : 1,
                l = -1 === a ? o - s : o + s;
              !(function e() {
                var r, s;
                -1 === a
                  ? o > l &&
                    ((o -= i.options.clickOnTrackSpeed),
                    i.contentWrapperEl.scrollTo(
                      (((r = {})[i.axis[t].offsetAttr] = o), r)
                    ),
                    n.requestAnimationFrame(e))
                  : o < l &&
                    ((o += i.options.clickOnTrackSpeed),
                    i.contentWrapperEl.scrollTo(
                      (((s = {})[i.axis[t].offsetAttr] = o), s)
                    ),
                    n.requestAnimationFrame(e));
              })();
            }
          }),
          (t.getContentElement = function () {
            return this.contentEl;
          }),
          (t.getScrollElement = function () {
            return this.contentWrapperEl;
          }),
          (t.getScrollbarWidth = function () {
            try {
              return "none" ===
                getComputedStyle(this.contentWrapperEl, "::-webkit-scrollbar")
                  .display ||
                "scrollbarWidth" in document.documentElement.style ||
                "-ms-overflow-style" in document.documentElement.style
                ? 0
                : so(this.el);
            } catch (e) {
              return so(this.el);
            }
          }),
          (t.removeListeners = function () {
            var e = this,
              t = to(this.el);
            this.options.autoHide &&
              this.el.removeEventListener("mouseenter", this.onMouseEnter),
              ["mousedown", "click", "dblclick"].forEach(function (t) {
                e.el.removeEventListener(t, e.onPointerEvent, !0);
              }),
              ["touchstart", "touchend", "touchmove"].forEach(function (t) {
                e.el.removeEventListener(t, e.onPointerEvent, {
                  capture: !0,
                  passive: !0,
                });
              }),
              this.el.removeEventListener("mousemove", this.onMouseMove),
              this.el.removeEventListener("mouseleave", this.onMouseLeave),
              this.contentWrapperEl &&
                this.contentWrapperEl.removeEventListener(
                  "scroll",
                  this.onScroll
                ),
              t.removeEventListener("resize", this.onWindowResize),
              this.mutationObserver && this.mutationObserver.disconnect(),
              this.resizeObserver && this.resizeObserver.disconnect(),
              this.recalculate.cancel(),
              this.onMouseMove.cancel(),
              this.hideScrollbars.cancel(),
              this.onWindowResize.cancel();
          }),
          (t.unMount = function () {
            this.removeListeners(), e.instances.delete(this.el);
          }),
          (t.isWithinBounds = function (e) {
            return (
              this.mouseX >= e.left &&
              this.mouseX <= e.left + e.width &&
              this.mouseY >= e.top &&
              this.mouseY <= e.top + e.height
            );
          }),
          (t.findChild = function (e, t) {
            var i =
              e.matches ||
              e.webkitMatchesSelector ||
              e.mozMatchesSelector ||
              e.msMatchesSelector;
            return Array.prototype.filter.call(e.children, function (e) {
              return i.call(e, t);
            })[0];
          }),
          e
        );
      })();
      (oo.defaultOptions = {
        autoHide: !0,
        forceVisible: !1,
        clickOnTrack: !0,
        clickOnTrackSpeed: 40,
        classNames: {
          contentEl: "simplebar-content",
          contentWrapper: "simplebar-content-wrapper",
          offset: "simplebar-offset",
          mask: "simplebar-mask",
          wrapper: "simplebar-wrapper",
          placeholder: "simplebar-placeholder",
          scrollbar: "simplebar-scrollbar",
          track: "simplebar-track",
          heightAutoObserverWrapperEl: "simplebar-height-auto-observer-wrapper",
          heightAutoObserverEl: "simplebar-height-auto-observer",
          visible: "simplebar-visible",
          horizontal: "simplebar-horizontal",
          vertical: "simplebar-vertical",
          hover: "simplebar-hover",
          dragging: "simplebar-dragging",
        },
        scrollbarMinSize: 25,
        scrollbarMaxSize: 0,
        timeout: 1e3,
      }),
        (oo.instances = new WeakMap()),
        (oo.initDOMLoadedElements = function () {
          document.removeEventListener(
            "DOMContentLoaded",
            this.initDOMLoadedElements
          ),
            window.removeEventListener("load", this.initDOMLoadedElements),
            Array.prototype.forEach.call(
              document.querySelectorAll("[data-simplebar]"),
              function (e) {
                "init" === e.getAttribute("data-simplebar") ||
                  oo.instances.has(e) ||
                  new oo(e, eo(e.attributes));
              }
            );
        }),
        (oo.removeObserver = function () {
          this.globalObserver.disconnect();
        }),
        (oo.initHtmlApi = function () {
          (this.initDOMLoadedElements = this.initDOMLoadedElements.bind(this)),
            "undefined" != typeof MutationObserver &&
              ((this.globalObserver = new MutationObserver(oo.handleMutations)),
              this.globalObserver.observe(document, {
                childList: !0,
                subtree: !0,
              })),
            "complete" === document.readyState ||
            ("loading" !== document.readyState &&
              !document.documentElement.doScroll)
              ? window.setTimeout(this.initDOMLoadedElements)
              : (document.addEventListener(
                  "DOMContentLoaded",
                  this.initDOMLoadedElements
                ),
                window.addEventListener("load", this.initDOMLoadedElements));
        }),
        (oo.handleMutations = function (e) {
          e.forEach(function (e) {
            Array.prototype.forEach.call(e.addedNodes, function (e) {
              1 === e.nodeType &&
                (e.hasAttribute("data-simplebar")
                  ? !oo.instances.has(e) &&
                    document.documentElement.contains(e) &&
                    new oo(e, eo(e.attributes))
                  : Array.prototype.forEach.call(
                      e.querySelectorAll("[data-simplebar]"),
                      function (e) {
                        "init" !== e.getAttribute("data-simplebar") &&
                          !oo.instances.has(e) &&
                          document.documentElement.contains(e) &&
                          new oo(e, eo(e.attributes));
                      }
                    ));
            }),
              Array.prototype.forEach.call(e.removedNodes, function (e) {
                1 === e.nodeType &&
                  ("init" === e.getAttribute("data-simplebar")
                    ? oo.instances.has(e) &&
                      !document.documentElement.contains(e) &&
                      oo.instances.get(e).unMount()
                    : Array.prototype.forEach.call(
                        e.querySelectorAll('[data-simplebar="init"]'),
                        function (e) {
                          oo.instances.has(e) &&
                            !document.documentElement.contains(e) &&
                            oo.instances.get(e).unMount();
                        }
                      ));
              });
          });
        }),
        (oo.getOptions = eo),
        us() && oo.initHtmlApi();
      var ao = oo;
      let lo,
        co = !1;
      class uo {
        static run(e) {
          let t =
              arguments.length > 1 && void 0 !== arguments[1]
                ? arguments[1]
                : {},
            i = {
              "bs-tooltip": () => this.bsTooltip(),
              "bs-popover": () => this.bsPopover(),
              "dm-toggle-class": () => this.dmToggleClass(),
              "dm-year-copy": () => this.dmYearCopy(),
              "dm-ripple": () => this.dmRipple(),
              "dm-print": () => this.dmPrint(),
              "dm-table-tools-sections": () => this.dmTableToolsSections(),
              "dm-table-tools-checkable": () => this.dmTableToolsCheckable(),
              "js-ckeditor": () => this.jsCkeditor(),
              "js-ckeditor5": () => this.jsCkeditor5(),
              "js-simplemde": () => this.jsSimpleMDE(),
              "js-highlightjs": () => this.jsHighlightjs(),
              "js-flatpickr": () => this.jsFlatpickr(),
              "jq-appear": () => this.jqAppear(),
              "jq-magnific-popup": () => this.jqMagnific(),
              "jq-slick": () => this.jqSlick(),
              "jq-datepicker": () => this.jqDatepicker(),
              "jq-masked-inputs": () => this.jqMaskedInputs(),
              "jq-select2": () => this.jqSelect2(),
              "jq-notify": (e) => this.jqNotify(e),
              "jq-easy-pie-chart": () => this.jqEasyPieChart(),
              "jq-maxlength": () => this.jqMaxlength(),
              "jq-rangeslider": () => this.jqRangeslider(),
              "jq-pw-strength": () => this.jqPwStrength(),
              "jq-sparkline": () => this.jqSparkline(),
              "jq-validation": () => this.jqValidation(),
            };
          if (e instanceof Array) for (let n in e) i[e[n]] && i[e[n]](t);
          else i[e] && i[e](t);
        }
        static bsTooltip() {
          let e = [].slice.call(
            document.querySelectorAll(
              '[data-bs-toggle="tooltip"]:not(.js-bs-tooltip-enabled), .js-bs-tooltip:not(.js-bs-tooltip-enabled)'
            )
          );
          window.helperBsTooltips = e.map(
            (e) => (
              e.classList.add("js-bs-tooltip-enabled"),
              new bootstrap.Tooltip(e, {
                container: e.dataset.bsContainer || "#page-container",
                animation: !(
                  !e.dataset.bsAnimation ||
                  "true" != e.dataset.bsAnimation.toLowerCase()
                ),
              })
            )
          );
        }
        static bsPopover() {
          let e = [].slice.call(
            document.querySelectorAll(
              '[data-bs-toggle="popover"]:not(.js-bs-popover-enabled), .js-bs-popover:not(.js-bs-popover-enabled)'
            )
          );
          window.helperBsPopovers = e.map(
            (e) => (
              e.classList.add("js-bs-popover-enabled"),
              new bootstrap.Popover(e, {
                container: e.dataset.bsContainer || "#page-container",
                animation: !(
                  !e.dataset.bsAnimation ||
                  "true" != e.dataset.bsAnimation.toLowerCase()
                ),
                trigger: e.dataset.bsTrigger || "hover focus",
              })
            )
          );
        }
        static dmToggleClass() {
          document
            .querySelectorAll(
              '[data-toggle="class-toggle"]:not(.js-class-toggle-enabled),[data-toggle="layout"]:not(.js-class-toggle-enabled), .js-class-toggle:not(.js-class-toggle-enabled)'
            )
            .forEach((e) => {
              e.addEventListener("click", () => {
                e.classList.add("js-class-toggle-enabled");
                let t = !!e.dataset.class && e.dataset.class.split(" ");
                document.querySelectorAll(e.dataset.target).forEach((e) => {
                  t &&
                    t.forEach((t) => {
                      e.classList.toggle(t);
                    });
                });
              });
            });
        }
        static dmYearCopy() {
          document
            .querySelectorAll(
              '[data-toggle="year-copy"]:not(.js-year-copy-enabled)'
            )
            .forEach((e) => {
              let t = new Date().getFullYear(),
                i = e.textContent || t;
              e.classList.add("js-year-copy-enabled"),
                (e.textContent =
                  parseInt(i) >= t ? t : i + "-" + t.toString().substr(2, 2));
            });
        }
        static dmRipple() {
          document
            .querySelectorAll(
              '[data-toggle="click-ripple"]:not(.js-click-ripple-enabled)'
            )
            .forEach((e) => {
              e.classList.add("js-click-ripple-enabled"),
                (e.style.overflow = "hidden"),
                (e.style.position = "relative"),
                (e.style.zIndex = 1),
                e.addEventListener("click", (t) => {
                  let i,
                    n,
                    r,
                    s = "click-ripple",
                    o = e.querySelector("." + s);
                  if (o) o.classList.remove("animate");
                  else {
                    let t = document.createElement("span");
                    t.classList.add(s), e.insertBefore(t, e.firstChild);
                  }
                  (o = e.querySelector("." + s)),
                    ("0px" !== getComputedStyle(o).height &&
                      "0px" !== getComputedStyle(o).width) ||
                      ((i = Math.max(e.offsetWidth, e.offsetHeight)),
                      (o.style.height = i + "px"),
                      (o.style.width = i + "px")),
                    (n =
                      t.pageX -
                      (e.getBoundingClientRect().left + window.scrollX) -
                      parseFloat(getComputedStyle(o).width.replace("px", "")) /
                        2),
                    (r =
                      t.pageY -
                      (e.getBoundingClientRect().top + window.scrollY) -
                      parseFloat(getComputedStyle(o).height.replace("px", "")) /
                        2),
                    (o.style.top = r + "px"),
                    (o.style.left = n + "px"),
                    o.classList.add("animate");
                });
            });
        }
        static dmPrint() {
          let e = document.getElementById("page-container"),
            t = e.className;
          console.log(t), (e.classList = ""), window.print(), (e.classList = t);
        }
        static dmTableToolsSections() {
          document
            .querySelectorAll(
              ".js-table-sections:not(.js-table-sections-enabled)"
            )
            .forEach((e) => {
              e.classList.add("js-table-sections-enabled"),
                e
                  .querySelectorAll(".js-table-sections-header > tr")
                  .forEach((t) => {
                    t.addEventListener("click", (i) => {
                      if (
                        "checkbox" !== i.target.type &&
                        "button" !== i.target.type &&
                        "a" !== i.target.tagName.toLowerCase() &&
                        "a" !== i.target.parentNode.nodeName.toLowerCase() &&
                        "button" !==
                          i.target.parentNode.nodeName.toLowerCase() &&
                        "label" !==
                          i.target.parentNode.nodeName.toLowerCase() &&
                        !i.target.parentNode.classList.contains(
                          "custom-control"
                        )
                      ) {
                        let i = t.parentNode,
                          n = e.querySelectorAll("tbody");
                        i.classList.contains("show") ||
                          (n &&
                            n.forEach((e) => {
                              e.classList.remove("show"),
                                e.classList.remove("table-active");
                            })),
                          i.classList.toggle("show"),
                          i.classList.toggle("table-active");
                      }
                    });
                  });
            });
        }
        static dmTableToolsCheckable() {
          document
            .querySelectorAll(
              ".js-table-checkable:not(.js-table-checkable-enabled)"
            )
            .forEach((e) => {
              e.classList.add("js-table-checkable-enabled"),
                e
                  .querySelector("thead input[type=checkbox]")
                  .addEventListener("click", (t) => {
                    e.querySelectorAll("tbody input[type=checkbox]").forEach(
                      (e) => {
                        (e.checked = t.currentTarget.checked),
                          this.tableToolscheckRow(e, t.currentTarget.checked);
                      }
                    );
                  }),
                e
                  .querySelectorAll(
                    "tbody input[type=checkbox], tbody input + label"
                  )
                  .forEach((t) => {
                    t.addEventListener("click", (i) => {
                      let n = e.querySelector("thead input[type=checkbox]");
                      t.checked
                        ? e.querySelectorAll(
                            "tbody input[type=checkbox]:checked"
                          ).length ===
                            e.querySelectorAll("tbody input[type=checkbox]")
                              .length && (n.checked = !0)
                        : (n.checked = !1),
                        this.tableToolscheckRow(t, t.checked);
                    });
                  }),
                e.querySelectorAll("tbody > tr").forEach((t) => {
                  t.addEventListener("click", (t) => {
                    if (
                      "checkbox" !== t.target.type &&
                      "button" !== t.target.type &&
                      "a" !== t.target.tagName.toLowerCase() &&
                      "a" !== t.target.parentNode.nodeName.toLowerCase() &&
                      "button" !== t.target.parentNode.nodeName.toLowerCase() &&
                      "label" !== t.target.parentNode.nodeName.toLowerCase() &&
                      !t.target.parentNode.classList.contains("custom-control")
                    ) {
                      let i = e.querySelector("thead input[type=checkbox]"),
                        n = t.currentTarget.querySelector(
                          "input[type=checkbox]"
                        );
                      (n.checked = !n.checked),
                        this.tableToolscheckRow(n, n.checked),
                        n.checked
                          ? e.querySelectorAll(
                              "tbody input[type=checkbox]:checked"
                            ).length ===
                              e.querySelectorAll("tbody input[type=checkbox]")
                                .length && (i.checked = !0)
                          : (i.checked = !1);
                    }
                  });
                });
            });
        }
        static tableToolscheckRow(e, t) {
          t
            ? e.closest("tr").classList.add("table-active")
            : e.closest("tr").classList.remove("table-active");
        }
        static jsCkeditor() {
          let e = document.querySelector(
              "#js-ckeditor-inline:not(.js-ckeditor-inline-enabled)"
            ),
            t = document.querySelector(
              "#js-ckeditor:not(.js-ckeditor-enabled)"
            );
          e &&
            (e.setAttribute("contenteditable", "true"),
            CKEDITOR.inline("js-ckeditor-inline"),
            e.classList.add("js-ckeditor-inline-enabled")),
            t &&
              (CKEDITOR.replace("js-ckeditor"),
              t.classList.add("js-ckeditor-enabled"));
        }
        static jsCkeditor5() {
          let e = document.querySelector("#js-ckeditor5-inline"),
            t = document.querySelector("#js-ckeditor5-classic");
          e &&
            InlineEditor.create(document.querySelector("#js-ckeditor5-inline"))
              .then((e) => {
                window.editor = e;
              })
              .catch((e) => {
                console.error(
                  "There was a problem initializing the inline editor.",
                  e
                );
              }),
            t &&
              ClassicEditor.create(
                document.querySelector("#js-ckeditor5-classic")
              )
                .then((e) => {
                  window.editor = e;
                })
                .catch((e) => {
                  console.error(
                    "There was a problem initializing the classic editor.",
                    e
                  );
                });
        }
        static jsSimpleMDE() {
          let e = document.querySelectorAll(".js-simplemde");
          e.forEach((e) => {
            new SimpleMDE({ element: e, autoDownloadFontAwesome: !1 });
          }),
            e &&
              (document
                .querySelector(".editor-toolbar > a.fa-header")
                .classList.replace("fa-header", "fa-heading"),
              document
                .querySelector(".editor-toolbar > a.fa-picture-o")
                .classList.replace("fa-picture-o", "fa-image"));
        }
        static jsHighlightjs() {
          hljs.isHighlighted || hljs.initHighlighting();
        }
        static jsFlatpickr() {
          document
            .querySelectorAll(".js-flatpickr:not(.js-flatpickr-enabled)")
            .forEach((e) => {
              e.classList.add("js-flatpickr-enabled"), flatpickr(e);
            });
        }
        static jqAppear() {
          jQuery('[data-toggle="appear"]:not(.js-appear-enabled)').each(
            (e, t) => {
              let i =
                  window.innerWidth ||
                  document.documentElement.clientWidth ||
                  document.body.clientWidth,
                n = jQuery(t),
                r = n.data("class") || "animated fadeIn",
                s = n.data("offset") || 0,
                o = i < 992 ? 0 : n.data("timeout") ? n.data("timeout") : 0;
              n.addClass("js-appear-enabled").appear(
                () => {
                  setTimeout(() => {
                    n.removeClass("invisible").addClass(r);
                  }, o);
                },
                { accY: s }
              );
            }
          );
        }
        static jqMagnific() {
          jQuery(".js-gallery:not(.js-gallery-enabled)").each((e, t) => {
            jQuery(t)
              .addClass("js-gallery-enabled")
              .magnificPopup({
                delegate: "a.img-lightbox",
                type: "image",
                gallery: { enabled: !0 },
              });
          });
        }
        static jqSlick() {
          jQuery(".js-slider:not(.js-slider-enabled)").each((e, t) => {
            let i = jQuery(t);
            i.addClass("js-slider-enabled").slick({
              arrows: i.data("arrows") || !1,
              dots: i.data("dots") || !1,
              slidesToShow: i.data("slides-to-show") || 1,
              centerMode: i.data("center-mode") || !1,
              autoplay: i.data("autoplay") || !1,
              autoplaySpeed: i.data("autoplay-speed") || 3e3,
              infinite: void 0 === i.data("infinite") || i.data("infinite"),
            });
          });
        }
        static jqDatepicker() {
          jQuery(".js-datepicker:not(.js-datepicker-enabled)")
            .add(".input-daterange:not(.js-datepicker-enabled)")
            .each((e, t) => {
              let i = jQuery(t);
              i.addClass("js-datepicker-enabled").datepicker({
                weekStart: i.data("week-start") || 0,
                autoclose: i.data("autoclose") || !1,
                todayHighlight: i.data("today-highlight") || !1,
                startDate: i.data("start-date") || !1,
                container: i.data("container") || "#page-container",
                orientation: "bottom",
              });
            });
        }
        static jqMaskedInputs() {
          jQuery(".js-masked-date:not(.js-masked-enabled)").mask("99/99/9999"),
            jQuery(".js-masked-date-dash:not(.js-masked-enabled)").mask(
              "99-99-9999"
            ),
            jQuery(".js-masked-phone:not(.js-masked-enabled)").mask(
              "(999) 999-9999"
            ),
            jQuery(".js-masked-phone-ext:not(.js-masked-enabled)").mask(
              "(999) 999-9999? x99999"
            ),
            jQuery(".js-masked-taxid:not(.js-masked-enabled)").mask(
              "99-9999999"
            ),
            jQuery(".js-masked-ssn:not(.js-masked-enabled)").mask(
              "999-99-9999"
            ),
            jQuery(".js-masked-pkey:not(.js-masked-enabled)").mask(
              "a*-999-a999"
            ),
            jQuery(".js-masked-time:not(.js-masked-enabled)").mask("99:99"),
            jQuery(".js-masked-date")
              .add(".js-masked-date-dash")
              .add(".js-masked-phone")
              .add(".js-masked-phone-ext")
              .add(".js-masked-taxid")
              .add(".js-masked-ssn")
              .add(".js-masked-pkey")
              .add(".js-masked-time")
              .addClass("js-masked-enabled");
        }
        static jqSelect2() {
          jQuery(".js-select2:not(.js-select2-enabled)").each((e, t) => {
            let i = jQuery(t);
            i.addClass("js-select2-enabled").select2({
              placeholder: i.data("placeholder") || !1,
              dropdownParent: document.querySelector(
                i.data("container") || "#page-container"
              ),
            });
          });
        }
        static jqNotify() {
          let e =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
          jQuery.isEmptyObject(e)
            ? jQuery(".js-notify:not(.js-notify-enabled)").each((e, t) => {
                jQuery(t)
                  .addClass("js-notify-enabled")
                  .on("click.pixelcave.helpers", (e) => {
                    let t = jQuery(e.currentTarget);
                    jQuery.notify(
                      {
                        icon: t.data("icon") || "",
                        message: t.data("message"),
                        url: t.data("url") || "",
                      },
                      {
                        element: "body",
                        type: t.data("type") || "info",
                        placement: {
                          from: t.data("from") || "top",
                          align: t.data("align") || "right",
                        },
                        allow_dismiss: !0,
                        newest_on_top: !0,
                        showProgressbar: !1,
                        offset: 20,
                        spacing: 10,
                        z_index: 1033,
                        delay: 5e3,
                        timer: 1e3,
                        animate: {
                          enter: "animated fadeIn",
                          exit: "animated fadeOutDown",
                        },
                        template:
                          '<div data-notify="container" class="col-11 col-sm-4 alert alert-{0} alert-dismissible" role="alert">\n  <p class="mb-0">\n    <span data-notify="icon"></span>\n    <span data-notify="title">{1}</span>\n    <span data-notify="message">{2}</span>\n  </p>\n  <div class="progress" data-notify="progressbar">\n    <div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>\n  </div>\n  <a href="{3}" target="{4}" data-notify="url"></a>\n  <a class="p-2 m-1 text-dark" href="javascript:void(0)" aria-label="Close" data-notify="dismiss">\n    <i class="fa fa-times"></i>\n  </a>\n</div>',
                      }
                    );
                  });
              })
            : jQuery.notify(
                { icon: e.icon || "", message: e.message, url: e.url || "" },
                {
                  element: e.element || "body",
                  type: e.type || "info",
                  placement: {
                    from: e.from || "top",
                    align: e.align || "right",
                  },
                  allow_dismiss: !1 !== e.allow_dismiss,
                  newest_on_top: !1 !== e.newest_on_top,
                  showProgressbar: !!e.show_progress_bar,
                  offset: e.offset || 20,
                  spacing: e.spacing || 10,
                  z_index: e.z_index || 1033,
                  delay: e.delay || 5e3,
                  timer: e.timer || 1e3,
                  animate: {
                    enter: e.animate_enter || "animated fadeIn",
                    exit: e.animate_exit || "animated fadeOutDown",
                  },
                  template:
                    '<div data-notify="container" class="col-11 col-sm-4 alert alert-{0} alert-dismissible" role="alert">\n  <p class="mb-0">\n    <span data-notify="icon"></span>\n    <span data-notify="title">{1}</span>\n    <span data-notify="message">{2}</span>\n  </p>\n  <div class="progress" data-notify="progressbar">\n    <div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>\n  </div>\n  <a href="{3}" target="{4}" data-notify="url"></a>\n  <a class="p-2 m-1 text-dark" href="javascript:void(0)" aria-label="Close" data-notify="dismiss">\n    <i class="fa fa-times"></i>\n  </a>\n</div>',
                }
              );
        }
        static jqEasyPieChart() {
          jQuery(".js-pie-chart:not(.js-pie-chart-enabled)").each((e, t) => {
            let i = jQuery(t);
            i.addClass("js-pie-chart-enabled").easyPieChart({
              barColor: i.data("bar-color") || "#777777",
              trackColor: i.data("track-color") || "#eeeeee",
              lineWidth: i.data("line-width") || 3,
              size: i.data("size") || "80",
              animate: i.data("animate") || 750,
              scaleColor: i.data("scale-color") || !1,
            });
          });
        }
        static jqMaxlength() {
          jQuery(".js-maxlength:not(.js-maxlength-enabled)").each((e, t) => {
            let i = jQuery(t);
            i.addClass("js-maxlength-enabled").maxlength({
              alwaysShow: !!i.data("always-show"),
              threshold: i.data("threshold") || 10,
              warningClass: i.data("warning-class") || "badge bg-warning",
              limitReachedClass:
                i.data("limit-reached-class") || "badge bg-danger",
              placement: i.data("placement") || "bottom",
              preText: i.data("pre-text") || "",
              separator: i.data("separator") || "/",
              postText: i.data("post-text") || "",
            });
          });
        }
        static jqRangeslider() {
          jQuery(".js-rangeslider:not(.js-rangeslider-enabled)").each(
            (e, t) => {
              let i = jQuery(t);
              jQuery(t)
                .addClass("js-rangeslider-enabled")
                .ionRangeSlider({
                  input_values_separator: ";",
                  skin: i.data("skin") || "round",
                });
            }
          );
        }
        static jqPwStrength() {
          jQuery(".js-pw-strength:not(.js-pw-strength-enabled)").each(
            (e, t) => {
              let i = jQuery(t),
                n = i.parents(".js-pw-strength-container"),
                r = jQuery(".js-pw-strength-progress", n),
                s = jQuery(".js-pw-strength-feedback", n);
              i.addClass("js-pw-strength-enabled").pwstrength({
                ui: { container: n, viewports: { progress: r, verdict: s } },
              });
            }
          );
        }
        static jqSparkline() {
          let e = this;
          jQuery(".js-sparkline:not(.js-sparkline-enabled)").each((t, i) => {
            let n = jQuery(i),
              r = n.data("type"),
              s = {},
              o = {
                line: () => {
                  (s.type = r),
                    (s.lineWidth = n.data("line-width") || 2),
                    (s.lineColor = n.data("line-color") || "#0665d0"),
                    (s.fillColor = n.data("fill-color") || "#0665d0"),
                    (s.spotColor = n.data("spot-color") || "#495057"),
                    (s.minSpotColor = n.data("min-spot-color") || "#495057"),
                    (s.maxSpotColor = n.data("max-spot-color") || "#495057"),
                    (s.highlightSpotColor =
                      n.data("highlight-spot-color") || "#495057"),
                    (s.highlightLineColor =
                      n.data("highlight-line-color") || "#495057"),
                    (s.spotRadius = n.data("spot-radius") || 2),
                    (s.tooltipFormat = "{{prefix}}{{y}}{{suffix}}");
                },
                bar: () => {
                  (s.type = r),
                    (s.barWidth = n.data("bar-width") || 8),
                    (s.barSpacing = n.data("bar-spacing") || 6),
                    (s.barColor = n.data("bar-color") || "#0665d0"),
                    (s.tooltipFormat = "{{prefix}}{{value}}{{suffix}}");
                },
                pie: () => {
                  (s.type = r),
                    (s.sliceColors = [
                      "#fadb7d",
                      "#faad7d",
                      "#75b0eb",
                      "#abe37d",
                    ]),
                    (s.highlightLighten = n.data("highlight-lighten") || 1.1),
                    (s.tooltipFormat = "{{prefix}}{{value}}{{suffix}}");
                },
                tristate: () => {
                  (s.type = r),
                    (s.barWidth = n.data("bar-width") || 8),
                    (s.barSpacing = n.data("bar-spacing") || 6),
                    (s.posBarColor = n.data("pos-bar-color") || "#82b54b"),
                    (s.negBarColor = n.data("neg-bar-color") || "#e04f1a");
                },
              };
            o[r]
              ? (o[r](),
                "line" === r &&
                  ((n.data("chart-range-min") >= 0 ||
                    n.data("chart-range-min")) &&
                    (s.chartRangeMin = n.data("chart-range-min")),
                  (n.data("chart-range-max") >= 0 ||
                    n.data("chart-range-max")) &&
                    (s.chartRangeMax = n.data("chart-range-max"))),
                (s.width = n.data("width") || "120px"),
                (s.height = n.data("height") || "80px"),
                (s.tooltipPrefix = n.data("tooltip-prefix")
                  ? n.data("tooltip-prefix") + " "
                  : ""),
                (s.tooltipSuffix = n.data("tooltip-suffix")
                  ? " " + n.data("tooltip-suffix")
                  : ""),
                "100%" === s.width
                  ? co ||
                    ((co = !0),
                    jQuery(window).on(
                      "resize.pixelcave.helpers.sparkline",
                      function (t) {
                        clearTimeout(lo),
                          (lo = setTimeout(() => {
                            e.sparkline();
                          }, 500));
                      }
                    ))
                  : jQuery(i).addClass("js-sparkline-enabled"),
                jQuery(i).sparkline(n.data("points") || [0], s))
              : console.log(
                  "[jQuery Sparkline JS Helper] Please add a correct type (line, bar, pie or tristate) in all your elements with 'js-sparkline' class."
                );
          });
        }
        static jqValidation() {
          jQuery.validator.setDefaults({
            errorClass: "invalid-feedback animated fadeIn",
            errorElement: "div",
            errorPlacement: (e, t) => {
              jQuery(t).addClass("is-invalid"),
                jQuery(t).parents("div:not(.input-group)").first().append(e);
            },
            highlight: (e) => {
              jQuery(e)
                .parents("div:not(.input-group)")
                .first()
                .find(".is-invalid")
                .removeClass("is-invalid")
                .addClass("is-invalid");
            },
            success: (e) => {
              jQuery(e)
                .parents("div:not(.input-group)")
                .first()
                .find(".is-invalid")
                .removeClass("is-invalid"),
                jQuery(e).remove();
            },
          }),
            jQuery.validator.addMethod(
              "emailWithDot",
              function (e, t) {
                return (
                  this.optional(t) ||
                  /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(
                    e
                  )
                );
              },
              "Please enter a valid email address"
            );
        }
      }
      (window.bootstrap = t), (window.SimpleBar = ao);
      class ho {
        constructor() {
          this.onLoad(() => this._uiInit());
        }
        _uiInit() {
          (this._lHtml = document.documentElement),
            (this._lBody = document.body),
            (this._lpageLoader = document.getElementById("page-loader")),
            (this._lPage = document.getElementById("page-container")),
            (this._lSidebar = document.getElementById("sidebar")),
            (this._lSidebarScrollCon =
              this._lSidebar &&
              this._lSidebar.querySelector(".js-sidebar-scroll")),
            (this._lSideOverlay = document.getElementById("side-overlay")),
            (this._lResize = !1),
            (this._lHeader = document.getElementById("page-header")),
            (this._lHeaderSearch =
              document.getElementById("page-header-search")),
            (this._lHeaderSearchInput = document.getElementById(
              "page-header-search-input"
            )),
            (this._lHeaderLoader =
              document.getElementById("page-header-loader")),
            (this._lMain = document.getElementById("main-container")),
            (this._lFooter = document.getElementById("page-footer")),
            (this._lSidebarScroll = !1),
            (this._lSideOverlayScroll = !1),
            this._uiHandleTheme(),
            this._uiHandleDarkMode(),
            this._uiHandleSidebars(),
            this._uiHandleHeader(),
            this._uiHandleNav(),
            this._uiApiLayout(),
            this._uiApiBlocks(),
            this.helpers([
              "bs-tooltip",
              "bs-popover",
              "dm-toggle-class",
              "dm-year-copy",
              "dm-ripple",
            ]),
            this._uiHandlePageLoader();
        }
        _uiHandleSidebars() {
          let e =
              arguments.length > 0 && void 0 !== arguments[0]
                ? arguments[0]
                : "init",
            t = this;
          (t._lSidebar || t._lSideOverlay) &&
            ("init" === e
              ? (t._lPage.classList.add("side-trans-enabled"),
                window.addEventListener("resize", () => {
                  clearTimeout(t._lResize),
                    t._lPage.classList.remove("side-trans-enabled"),
                    (t._lResize = setTimeout(() => {
                      t._lPage.classList.add("side-trans-enabled");
                    }, 500));
                }),
                this._uiHandleSidebars("custom-scroll"))
              : (e = "custom-scroll") &&
                t._lPage.classList.contains("side-scroll") &&
                (t._lSidebar &&
                  !t._lSidebarScroll &&
                  (t._lSidebarScroll = new ao(t._lSidebarScrollCon)),
                t._lSideOverlay &&
                  !t._lSideOverlayScroll &&
                  (t._lSideOverlayScroll = new ao(t._lSideOverlay))));
        }
        _uiHandleHeader() {
          let e = this;
          e._lPage.classList.contains("page-header-glass") &&
            e._lPage.classList.contains("page-header-fixed") &&
            (window.addEventListener("scroll", (t) => {
              window.scrollY > 60
                ? e._lPage.classList.add("page-header-scroll")
                : e._lPage.classList.remove("page-header-scroll");
            }),
            window.dispatchEvent(new CustomEvent("scroll")));
        }
        _uiHandleNav() {
          let e = document.querySelectorAll('[data-toggle="submenu"]');
          e &&
            e.forEach((e) => {
              e.addEventListener("click", (t) => {
                t.preventDefault();
                let i = e.closest(".nav-main");
                if (
                  !(
                    (window.innerWidth ||
                      document.documentElement.clientWidth ||
                      document.body.clientWidth) > 991 &&
                    i.classList.contains("nav-main-horizontal") &&
                    i.classList.contains("nav-main-hover")
                  )
                ) {
                  let t = e.closest("li");
                  t.classList.contains("open")
                    ? (t.classList.remove("open"),
                      e.setAttribute("aria-expanded", "false"))
                    : (Array.from(e.closest("ul").children).forEach((e) => {
                        e.classList.remove("open");
                      }),
                      t.classList.add("open"),
                      e.setAttribute("aria-expanded", "true"));
                }
                return !1;
              });
            });
        }
        _uiHandlePageLoader() {
          let e =
              arguments.length > 0 && void 0 !== arguments[0]
                ? arguments[0]
                : "hide",
            t = arguments.length > 1 ? arguments[1] : void 0;
          if ("show" === e)
            if (this._lpageLoader)
              t &&
                ((this._lpageLoader.className = ""),
                this._lpageLoader.classList.add(t)),
                this._lpageLoader.classList.add("show");
            else {
              let e = document.createElement("div");
              (e.id = "page-loader"),
                t && e.classList.add(t),
                e.classList.add("show"),
                this._lPage.insertBefore(e, this._lPage.firstChild),
                (this._lpageLoader = document.getElementById("page-loader"));
            }
          else
            "hide" === e &&
              this._lpageLoader &&
              this._lpageLoader.classList.remove("show");
        }
        _uiHandleDarkMode() {
          let e =
              arguments.length > 0 && void 0 !== arguments[0]
                ? arguments[0]
                : "init",
            t = this;
          if (
            ("init" !== e ||
              t._lPage.classList.contains("dark-mode") ||
              (t._lPage.classList.contains("sidebar-dark")
                ? localStorage.setItem("dashmixDefaultsSidebarDark", !0)
                : localStorage.removeItem("dashmixDefaultsSidebarDark"),
              t._lPage.classList.contains("page-header-dark")
                ? localStorage.setItem("dashmixDefaultsPageHeaderDark", !0)
                : localStorage.removeItem("dashmixDefaultsPageHeaderDark")),
            t._lPage.classList.contains("remember-theme"))
          ) {
            let i = localStorage.getItem("dashmixDarkMode") || !1;
            "init" === e
              ? i
                ? (t._lPage.classList.add("sidebar-dark"),
                  t._lPage.classList.add("page-header-dark"),
                  t._lPage.classList.add("dark-mode"))
                : "init" === e && t._lPage.classList.remove("dark-mode")
              : "on" === e
              ? localStorage.setItem("dashmixDarkMode", !0)
              : "off" === e && localStorage.removeItem("dashmixDarkMode");
          } else "init" === e && localStorage.removeItem("dashmixDarkMode");
        }
        _uiHandleTheme() {
          let e = this,
            t = document.getElementById("theme-css"),
            i = !!this._lPage.classList.contains("remember-theme");
          if (i) {
            let i = localStorage.getItem("dashmixThemeName") || !1;
            i && e._uiUpdateTheme(t, i),
              (t = document.getElementById("theme-css"));
          } else localStorage.removeItem("dashmixThemeName");
          document
            .querySelectorAll(
              '[data-toggle="theme"][data-theme="' +
                (t ? t.getAttribute("href") : "default") +
                '"]'
            )
            .forEach((e) => {
              e.classList.add("active");
            }),
            document.querySelectorAll('[data-toggle="theme"]').forEach((n) => {
              n.addEventListener("click", (r) => {
                r.preventDefault();
                let s = n.dataset.theme;
                document
                  .querySelectorAll('[data-toggle="theme"]')
                  .forEach((e) => {
                    e.classList.remove("active");
                  }),
                  document
                    .querySelector(
                      '[data-toggle="theme"][data-theme="' + s + '"]'
                    )
                    .classList.add("active"),
                  e._uiUpdateTheme(t, s),
                  (t = document.getElementById("theme-css")),
                  i && localStorage.setItem("dashmixThemeName", s);
              });
            });
        }
        _uiUpdateTheme(e, t) {
          if ("default" === t) e && e.parentNode.removeChild(e);
          else if (e) e.setAttribute("href", t);
          else {
            let e = document.createElement("link");
            (e.id = "theme-css"),
              e.setAttribute("rel", "stylesheet"),
              e.setAttribute("href", t),
              document
                .getElementById("main-css")
                .insertAdjacentElement("afterend", e);
          }
        }
        _uiApiLayout() {
          let e =
              arguments.length > 0 && void 0 !== arguments[0]
                ? arguments[0]
                : "init",
            t = this,
            i = {
              init: () => {
                let e = document.querySelectorAll('[data-toggle="layout"]');
                if (
                  (e &&
                    e.forEach((e) => {
                      e.addEventListener("click", (i) => {
                        t._uiApiLayout(e.dataset.action);
                      });
                    }),
                  t._lPage.classList.contains("enable-page-overlay"))
                ) {
                  let e = document.createElement("div");
                  (e.id = "page-overlay"),
                    t._lPage.insertBefore(e, t._lPage.firstChild),
                    document
                      .getElementById("page-overlay")
                      .addEventListener("click", (e) => {
                        t._uiApiLayout("side_overlay_close");
                      });
                }
              },
              sidebar_pos_toggle: () => {
                t._lPage.classList.toggle("sidebar-r");
              },
              sidebar_pos_left: () => {
                t._lPage.classList.remove("sidebar-r");
              },
              sidebar_pos_right: () => {
                t._lPage.classList.add("sidebar-r");
              },
              sidebar_toggle: () => {
                window.innerWidth > 991
                  ? t._lPage.classList.toggle("sidebar-o")
                  : t._lPage.classList.toggle("sidebar-o-xs");
              },
              sidebar_open: () => {
                window.innerWidth > 991
                  ? t._lPage.classList.add("sidebar-o")
                  : t._lPage.classList.add("sidebar-o-xs");
              },
              sidebar_close: () => {
                window.innerWidth > 991
                  ? t._lPage.classList.remove("sidebar-o")
                  : t._lPage.classList.remove("sidebar-o-xs");
              },
              sidebar_mini_toggle: () => {
                window.innerWidth > 991 &&
                  t._lPage.classList.toggle("sidebar-mini");
              },
              sidebar_mini_on: () => {
                window.innerWidth > 991 &&
                  t._lPage.classList.add("sidebar-mini");
              },
              sidebar_mini_off: () => {
                window.innerWidth > 991 &&
                  t._lPage.classList.remove("sidebar-mini");
              },
              sidebar_style_toggle: () => {
                t._lPage.classList.contains("sidebar-dark")
                  ? t._uiApiLayout("sidebar_style_light")
                  : t._uiApiLayout("sidebar_style_dark");
              },
              sidebar_style_dark: () => {
                t._lPage.classList.add("sidebar-dark"),
                  localStorage.setItem("dashmixDefaultsSidebarDark", !0);
              },
              sidebar_style_light: () => {
                t._lPage.classList.remove("sidebar-dark"),
                  t._lPage.classList.remove("dark-mode"),
                  localStorage.removeItem("dashmixDefaultsSidebarDark");
              },
              side_overlay_toggle: () => {
                t._lPage.classList.contains("side-overlay-o")
                  ? t._uiApiLayout("side_overlay_close")
                  : t._uiApiLayout("side_overlay_open");
              },
              side_overlay_open: () => {
                document.addEventListener("keydown", (e) => {
                  ("Esc" !== e.key && "Escape" !== e.key) ||
                    t._uiApiLayout("side_overlay_close");
                }),
                  t._lPage.classList.add("side-overlay-o");
              },
              side_overlay_close: () => {
                t._lPage.classList.remove("side-overlay-o");
              },
              side_overlay_mode_hover_toggle: () => {
                t._lPage.classList.toggle("side-overlay-hover");
              },
              side_overlay_mode_hover_on: () => {
                t._lPage.classList.add("side-overlay-hover");
              },
              side_overlay_mode_hover_off: () => {
                t._lPage.classList.remove("side-overlay-hover");
              },
              header_glass_toggle: () => {
                t._lPage.classList.toggle("page-header-glass"),
                  t._uiHandleHeader();
              },
              header_glass_on: () => {
                t._lPage.classList.add("page-header-glass"),
                  t._uiHandleHeader();
              },
              header_glass_off: () => {
                t._lPage.classList.remove("page-header-glass"),
                  t._uiHandleHeader();
              },
              header_mode_toggle: () => {
                t._lPage.classList.toggle("page-header-fixed");
              },
              header_mode_static: () => {
                t._lPage.classList.remove("page-header-fixed");
              },
              header_mode_fixed: () => {
                t._lPage.classList.add("page-header-fixed");
              },
              header_style_toggle: () => {
                t._lPage.classList.contains("page-header-dark")
                  ? t._uiApiLayout("header_style_light")
                  : t._uiApiLayout("header_style_dark");
              },
              header_style_dark: () => {
                t._lPage.classList.add("page-header-dark"),
                  localStorage.setItem("dashmixDefaultsPageHeaderDark", !0);
              },
              header_style_light: () => {
                t._lPage.classList.remove("page-header-dark"),
                  t._lPage.classList.remove("dark-mode"),
                  localStorage.removeItem("dashmixDefaultsPageHeaderDark");
              },
              header_search_on: () => {
                t._lHeaderSearch.classList.add("show"),
                  t._lHeaderSearchInput.focus(),
                  document.addEventListener("keydown", (e) => {
                    ("Esc" !== e.key && "Escape" !== e.key) ||
                      t._uiApiLayout("header_search_off");
                  });
              },
              header_search_off: () => {
                t._lHeaderSearch.classList.remove("show"),
                  t._lHeaderSearchInput.blur();
              },
              header_loader_on: () => {
                t._lHeaderLoader.classList.add("show");
              },
              header_loader_off: () => {
                t._lHeaderLoader.classList.remove("show");
              },
              dark_mode_toggle: () => {
                t._lPage.classList.contains("dark-mode")
                  ? t._uiApiLayout("dark_mode_off")
                  : t._uiApiLayout("dark_mode_on");
              },
              dark_mode_on: () => {
                t._lPage.classList.add("sidebar-dark"),
                  t._lPage.classList.add("page-header-dark"),
                  t._lPage.classList.add("dark-mode"),
                  this._uiHandleDarkMode("on");
              },
              dark_mode_off: () => {
                localStorage.getItem("dashmixDefaultsSidebarDark") ||
                  t._lPage.classList.remove("sidebar-dark"),
                  localStorage.getItem("dashmixDefaultsPageHeaderDark") ||
                    t._lPage.classList.remove("page-header-dark"),
                  t._lPage.classList.remove("dark-mode"),
                  this._uiHandleDarkMode("off");
              },
              content_layout_toggle: () => {
                t._lPage.classList.contains("main-content-boxed")
                  ? t._uiApiLayout("content_layout_narrow")
                  : t._lPage.classList.contains("main-content-narrow")
                  ? t._uiApiLayout("content_layout_full_width")
                  : t._uiApiLayout("content_layout_boxed");
              },
              content_layout_boxed: () => {
                t._lPage.classList.remove("main-content-narrow"),
                  t._lPage.classList.add("main-content-boxed");
              },
              content_layout_narrow: () => {
                t._lPage.classList.remove("main-content-boxed"),
                  t._lPage.classList.add("main-content-narrow");
              },
              content_layout_full_width: () => {
                t._lPage.classList.remove("main-content-boxed"),
                  t._lPage.classList.remove("main-content-narrow");
              },
            };
          i[e] && i[e]();
        }
        _uiApiBlocks() {
          let e,
            t,
            i,
            n =
              arguments.length > 0 && void 0 !== arguments[0]
                ? arguments[0]
                : "init",
            r = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
            s = "si-size-fullscreen",
            o = "si-size-actual",
            a = "si-arrow-up",
            l = "si-arrow-down",
            c = {
              init: () => {
                document
                  .querySelectorAll(
                    '[data-toggle="block-option"][data-action="fullscreen_toggle"]'
                  )
                  .forEach((e) => {
                    e.innerHTML =
                      '<i class="si ' +
                      (e
                        .closest(".block")
                        .classList.contains("block-mode-fullscreen")
                        ? o
                        : s) +
                      '"></i>';
                  }),
                  document
                    .querySelectorAll(
                      '[data-toggle="block-option"][data-action="content_toggle"]'
                    )
                    .forEach((e) => {
                      e.innerHTML =
                        '<i class="si ' +
                        (e
                          .closest(".block")
                          .classList.contains("block-mode-hidden")
                          ? l
                          : a) +
                        '"></i>';
                    }),
                  document
                    .querySelectorAll('[data-toggle="block-option"]')
                    .forEach((e) => {
                      e.addEventListener("click", (t) => {
                        this._uiApiBlocks(
                          e.dataset.action,
                          e.closest(".block")
                        );
                      });
                    });
              },
              fullscreen_toggle: () => {
                e.classList.remove("block-mode-pinned"),
                  e.classList.toggle("block-mode-fullscreen"),
                  t &&
                    (e.classList.contains("block-mode-fullscreen")
                      ? t && t.querySelector("i").classList.replace(s, o)
                      : t && t.querySelector("i").classList.replace(o, s));
              },
              fullscreen_on: () => {
                e.classList.remove("block-mode-pinned"),
                  e.classList.add("block-mode-fullscreen"),
                  t && t.querySelector("i").classList.replace(s, o);
              },
              fullscreen_off: () => {
                e.classList.remove("block-mode-fullscreen"),
                  t && t.querySelector("i").classList.replace(o, s);
              },
              content_toggle: () => {
                e.classList.toggle("block-mode-hidden"),
                  i &&
                    (e.classList.contains("block-mode-hidden")
                      ? i.querySelector("i").classList.replace(a, l)
                      : i.querySelector("i").classList.replace(l, a));
              },
              content_hide: () => {
                e.classList.add("block-mode-hidden"),
                  i && i.querySelector("i").classList.replace(a, l);
              },
              content_show: () => {
                e.classList.remove("block-mode-hidden"),
                  i && i.querySelector("i").classList.replace(l, a);
              },
              state_toggle: () => {
                e.classList.toggle("block-mode-loading"),
                  e.querySelector(
                    '[data-toggle="block-option"][data-action="state_toggle"][data-action-mode="demo"]'
                  ) &&
                    setTimeout(() => {
                      e.classList.remove("block-mode-loading");
                    }, 2e3);
              },
              state_loading: () => {
                e.classList.add("block-mode-loading");
              },
              state_normal: () => {
                e.classList.remove("block-mode-loading");
              },
              pinned_toggle: () => {
                e.classList.remove("block-mode-fullscreen"),
                  e.classList.toggle("block-mode-pinned");
              },
              pinned_on: () => {
                e.classList.remove("block-mode-fullscreen"),
                  e.classList.add("block-mode-pinned");
              },
              pinned_off: () => {
                e.classList.remove("block-mode-pinned");
              },
              close: () => {
                e.classList.add("d-none");
              },
              open: () => {
                e.classList.remove("d-none");
              },
            };
          "init" === n
            ? c[n]()
            : ((e =
                r instanceof Element
                  ? r
                  : document.querySelector("".concat(r))),
              e &&
                ((t = e.querySelector(
                  '[data-toggle="block-option"][data-action="fullscreen_toggle"]'
                )),
                (i = e.querySelector(
                  '[data-toggle="block-option"][data-action="content_toggle"]'
                )),
                c[n] && c[n]()));
        }
        onLoad(e) {
          "loading" != document.readyState
            ? e()
            : document.addEventListener("DOMContentLoaded", e);
        }
        init() {
          this._uiInit();
        }
        layout(e) {
          this._uiApiLayout(e);
        }
        block(e, t) {
          this._uiApiBlocks(e, t);
        }
        loader(e, t) {
          this._uiHandlePageLoader(e, t);
        }
        helpers(e) {
          let t =
            arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
          uo.run(e, t);
        }
        helpersOnLoad(e) {
          let t =
            arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
          this.onLoad(() => uo.run(e, t));
        }
      }
      window.Dashmix = new (class extends ho {
        constructor() {
          super();
        }
      })();
    })();
})();
