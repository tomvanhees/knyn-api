(function(e){function t(t){for(var a,r,c=t[0],s=t[1],u=t[2],d=0,l=[];d<c.length;d++)r=c[d],Object.prototype.hasOwnProperty.call(i,r)&&i[r]&&l.push(i[r][0]),i[r]=0;for(a in s)Object.prototype.hasOwnProperty.call(s,a)&&(e[a]=s[a]);f&&f(t);while(l.length)l.shift()();return o.push.apply(o,u||[]),n()}function n(){for(var e,t=0;t<o.length;t++){for(var n=o[t],a=!0,r=1;r<n.length;r++){var c=n[r];0!==i[c]&&(a=!1)}a&&(o.splice(t--,1),e=s(s.s=n[0]))}return e}var a={},r={app:0},i={app:0},o=[];function c(e){return s.p+"js/"+({}[e]||e)+"."+{"chunk-01bef820":"985519f3","chunk-11cd7f74":"7e9c1dd6","chunk-2d0ab539":"4e5a78ee","chunk-2d0ab820":"76d7da4c","chunk-2d2248c5":"6143a8d1","chunk-2d22d452":"26bb4403","chunk-302973ec":"06b9fd25","chunk-b8ab1a28":"66598425","chunk-1589ae24":"c4322d1b","chunk-2829ec70":"cc19b9d5","chunk-3509e462":"e38a7cb5","chunk-4a873b35":"2e58b1fa","chunk-773c6784":"b31aef6c","chunk-d9d2f52e":"8727acac","chunk-ea35824c":"7dde4b20","chunk-fe21830a":"636498b1"}[e]+".js"}function s(t){if(a[t])return a[t].exports;var n=a[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,s),n.l=!0,n.exports}s.e=function(e){var t=[],n={"chunk-1589ae24":1,"chunk-3509e462":1,"chunk-4a873b35":1,"chunk-773c6784":1,"chunk-ea35824c":1};r[e]?t.push(r[e]):0!==r[e]&&n[e]&&t.push(r[e]=new Promise((function(t,n){for(var a="css/"+({}[e]||e)+"."+{"chunk-01bef820":"31d6cfe0","chunk-11cd7f74":"31d6cfe0","chunk-2d0ab539":"31d6cfe0","chunk-2d0ab820":"31d6cfe0","chunk-2d2248c5":"31d6cfe0","chunk-2d22d452":"31d6cfe0","chunk-302973ec":"31d6cfe0","chunk-b8ab1a28":"31d6cfe0","chunk-1589ae24":"d99e98ce","chunk-2829ec70":"31d6cfe0","chunk-3509e462":"5c3f5a32","chunk-4a873b35":"8ec70acf","chunk-773c6784":"e1be49bd","chunk-d9d2f52e":"31d6cfe0","chunk-ea35824c":"cf5002f4","chunk-fe21830a":"31d6cfe0"}[e]+".css",i=s.p+a,o=document.getElementsByTagName("link"),c=0;c<o.length;c++){var u=o[c],d=u.getAttribute("data-href")||u.getAttribute("href");if("stylesheet"===u.rel&&(d===a||d===i))return t()}var l=document.getElementsByTagName("style");for(c=0;c<l.length;c++){u=l[c],d=u.getAttribute("data-href");if(d===a||d===i)return t()}var f=document.createElement("link");f.rel="stylesheet",f.type="text/css",f.onload=t,f.onerror=function(t){var a=t&&t.target&&t.target.src||i,o=new Error("Loading CSS chunk "+e+" failed.\n("+a+")");o.code="CSS_CHUNK_LOAD_FAILED",o.request=a,delete r[e],f.parentNode.removeChild(f),n(o)},f.href=i;var h=document.getElementsByTagName("head")[0];h.appendChild(f)})).then((function(){r[e]=0})));var a=i[e];if(0!==a)if(a)t.push(a[2]);else{var o=new Promise((function(t,n){a=i[e]=[t,n]}));t.push(a[2]=o);var u,d=document.createElement("script");d.charset="utf-8",d.timeout=120,s.nc&&d.setAttribute("nonce",s.nc),d.src=c(e);var l=new Error;u=function(t){d.onerror=d.onload=null,clearTimeout(f);var n=i[e];if(0!==n){if(n){var a=t&&("load"===t.type?"missing":t.type),r=t&&t.target&&t.target.src;l.message="Loading chunk "+e+" failed.\n("+a+": "+r+")",l.name="ChunkLoadError",l.type=a,l.request=r,n[1](l)}i[e]=void 0}};var f=setTimeout((function(){u({type:"timeout",target:d})}),12e4);d.onerror=d.onload=u,document.head.appendChild(d)}return Promise.all(t)},s.m=e,s.c=a,s.d=function(e,t,n){s.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},s.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},s.t=function(e,t){if(1&t&&(e=s(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(s.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)s.d(n,a,function(t){return e[t]}.bind(null,a));return n},s.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return s.d(t,"a",t),t},s.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},s.p="/admin/",s.oe=function(e){throw console.error(e),e};var u=window["webpackJsonp"]=window["webpackJsonp"]||[],d=u.push.bind(u);u.push=t,u=u.slice();for(var l=0;l<u.length;l++)t(u[l]);var f=d;o.push([0,"chunk-vendors"]),n()})({0:function(e,t,n){e.exports=n("cd49")},"0613":function(e,t,n){"use strict";var a=n("2b0e"),r=n("2f62"),i=(n("d3b7"),n("e293")),o={namespaced:!0,state:{token:""},getters:{isAuthenticated:function(e){return""!==e.token},getToken:function(e){return e.token}},mutations:{setToken:function(e,t){e.token=t},clearToken:function(e){e.token=""}},actions:{clearToken:function(e){var t=e.commit;localStorage.removeItem("token"),t("clearToken")},setToken:function(e,t){var n=e.commit;n("setToken",t)},tryAutologin:function(e){var t=e.commit,n=localStorage.getItem("token");n&&t("setToken",n)},logout:function(e){var t=e.dispatch;i["a"].post("/user/logout").finally((function(){t("clearToken")}))}}},c=(n("4160"),n("c975"),n("a434"),n("159b"),n("d4ec")),s=n("bee2"),u=function(){function e(){Object(c["a"])(this,e)}return Object(s["a"])(e,null,[{key:"fetch",value:function(){return i["a"].get("product/brands")}},{key:"post",value:function(e){return i["a"].post("/product/brands",{content:e.serialize()})}},{key:"delete",value:function(e){return i["a"].post("product/brands/".concat(e.id),{_method:"DELETE"})}}]),e}(),d=n("5b80"),l={namespaced:!0,state:{brands:Array()},mutations:{setBrands:function(e,t){t.forEach((function(t){return e.brands.push((new d["a"]).deserialize(t))}))},addBrand:function(e,t){e.brands.push((new d["a"]).deserialize(t))},deleteBrand:function(e,t){var n=e.brands.indexOf(t);e.brands.splice(n,1)}},actions:{getBrands:function(e){var t=e.state,n=e.commit;0===t.brands.length&&u.fetch().then((function(e){n("setBrands",e.data)}))},addBrand:function(e,t){var n=e.commit;u.post(t).then((function(e){n("addBrand",e.data)}))},deleteBrand:function(e,t){var n=e.commit;u.delete(t).then((function(){n("deleteBrand",t)}))}}},f=n("9e01"),h=function(){function e(){Object(c["a"])(this,e)}return Object(s["a"])(e,null,[{key:"fetch",value:function(){return i["a"].get("product/categories")}},{key:"post",value:function(e){return i["a"].post("/product/categories",{content:e.serialize()})}},{key:"delete",value:function(e){return i["a"].post("product/categories/".concat(e.id),{_method:"DELETE"})}}]),e}(),p={namespaced:!0,state:{categories:Array()},mutations:{setCategories:function(e,t){t.forEach((function(t){return e.categories.push((new f["a"]).deserialize(t))}))},addCategory:function(e,t){e.categories.push((new f["a"]).deserialize(t))},deleteCategory:function(e,t){var n=e.categories.indexOf(t);e.categories.splice(n,1)}},actions:{getCategories:function(e){var t=e.state,n=e.commit;0===t.categories.length&&h.fetch().then((function(e){n("setCategories",e.data)}))},addCategory:function(e,t){var n=e.commit;h.post(t).then((function(e){n("addCategory",e.data)}))},deleteCategory:function(e,t){var n=e.commit;h.delete(t).then((function(){n("deleteCategory",t)}))}}};a["default"].use(r["a"]);t["a"]=new r["a"].Store({state:{},mutations:{},actions:{},modules:{authentication:o,brands:l,categories:p}})},"5b80":function(e,t,n){"use strict";n.d(t,"a",(function(){return c}));n("b0c0");var a=n("d4ec"),r=n("262e"),i=n("2caf"),o=n("c3f3"),c=function(e){Object(r["a"])(n,e);var t=Object(i["a"])(n);function n(){var e;return Object(a["a"])(this,n),e=t.apply(this,arguments),e.id=0,e.name="",e}return n}(o["a"])},"5c0b":function(e,t,n){"use strict";var a=n("9c0c"),r=n.n(a);r.a},"9c0c":function(e,t,n){},"9e01":function(e,t,n){"use strict";n.d(t,"a",(function(){return c}));n("b0c0");var a=n("d4ec"),r=n("262e"),i=n("2caf"),o=n("c3f3"),c=function(e){Object(r["a"])(n,e);var t=Object(i["a"])(n);function n(){var e;return Object(a["a"])(this,n),e=t.apply(this,arguments),e.id=0,e.name="",e}return n}(o["a"])},a1a3:function(e,t,n){},afbc:function(e,t,n){"use strict";n("d3b7");var a=n("2b0e"),r=n("8c4f"),i=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div")},o=[],c={name:"Home"},s=c,u=n("2877"),d=Object(u["a"])(s,i,o,!1,null,"6dc670ea",null),l=d.exports,f=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",[n("div",{staticClass:"container"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-4 offset-4 mt-5"},[n("div",{staticClass:"card"},[e._m(0),n("div",{staticClass:"card-body"},[n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[e._v("E-mailadres")]),n("input",{directives:[{name:"model",rawName:"v-model",value:e.email,expression:"email"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:e.email},on:{input:function(t){t.target.composing||(e.email=t.target.value)}}}),e.errors.hasOwnProperty("email")?n("div",{staticClass:"alert alert-danger"},[e._v(" "+e._s(e.errors.email[0])+" ")]):e._e()]),n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[e._v("Wachtwoord")]),e._v(" "),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:e.password,expression:"password"}],staticClass:"form-control",attrs:{type:"password"},domProps:{value:e.password},on:{input:function(t){t.target.composing||(e.password=t.target.value)}}}),e.errors.hasOwnProperty("password")?n("div",{staticClass:"alert alert-danger"},[e._v(" "+e._s(e.errors.password[0])+" ")]):e._e()]),n("div",{staticClass:"form-group"},[n("button",{staticClass:"btn btn-dark",on:{click:e.signIn}},[e._v("Verzenden")])]),n("div",[n("router-link",{attrs:{to:"/signup"}},[e._v("Nog geen account?")])],1)])])])])])])},h=[function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"card-header bg-dark"},[n("span",{staticClass:"text-white"},[e._v("Inloggen")])])}],p=(n("99af"),n("c975"),n("fb6a"),n("bc3a")),m=n.n(p),v=document.URL,b=v.indexOf(".");console.log(b);var g=v.slice(0,b);console.log(g);var k="".concat(g,".").concat("kapsalon-api.test/api/v1/");console.log(k),m.a.defaults.withCredentials=!0;var C=m.a.create({baseURL:k});C.interceptors.request.use((function(e){return e.headers["Content-Type"]="application/json",e}),(function(e){Promise.reject(e)})),C.defaults.withCredentials=!0;var w=C,y={name:"SignIn",data:function(){return{email:"",password:"",errors:{}}},methods:{signIn:function(){var e=this;w.post("/user/login",{email:this.email,password:this.password}).then((function(t){e.$store.dispatch("authentication/setToken",t.data),localStorage.setItem("token",t.data),H.push("/")})).catch((function(t){console.log(t.response),e.errors=t.response.data.errors}))}}},_=y,E=Object(u["a"])(_,f,h,!1,null,"9eee1806",null),j=E.exports,O=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",[n("div",{staticClass:"container"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-4 offset-4 mt-5"},[n("div",{staticClass:"card"},[e._m(0),n("div",{staticClass:"card-body"},[n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[e._v("Tenant")]),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:e.data.tenant,expression:"data.tenant"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:e.data.tenant},on:{input:function(t){t.target.composing||e.$set(e.data,"tenant",t.target.value)}}})]),n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[e._v("Gebruikersnaam")]),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:e.data.name,expression:"data.name"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:e.data.name},on:{input:function(t){t.target.composing||e.$set(e.data,"name",t.target.value)}}})]),n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[e._v("E-mailadres")]),e._v(" "),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:e.data.email,expression:"data.email"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:e.data.email},on:{input:function(t){t.target.composing||e.$set(e.data,"email",t.target.value)}}})]),n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[e._v("Wachtwoord")]),e._v(" "),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:e.data.password,expression:"data.password"}],staticClass:"form-control",attrs:{type:"password"},domProps:{value:e.data.password},on:{input:function(t){t.target.composing||e.$set(e.data,"password",t.target.value)}}})]),n("div",[n("button",{staticClass:"btn btn-dark",on:{click:e.subscribe}},[e._v("Verzenden")])])])])])])])])},x=[function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"card-header bg-dark"},[n("span",{staticClass:"text-white"},[e._v("Inschrijven")])])}],P=(n("ac1f"),n("5319"),a["default"].extend({name:"SignUp",data:function(){return{data:{tenant:"",name:"",email:"",password:""}}},methods:{subscribe:function(){w.post("/tenant/store",this.data).then((function(e){window.location.replace(e.data.redirect_path)}))}}})),A=P,T=Object(u["a"])(A,O,x,!1,null,"7746b4d2",null),S=T.exports,$=n("0613"),I=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",[n("div",{staticClass:"container-fluid menu"},[n("div",{staticClass:"main-container"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-12 d-flex"},[n("ul",{staticClass:"nav"},[n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{tag:"a","active-class":"active",to:"/inspiratie"}},[e._v(" Inspiratie ")])],1),n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{tag:"a","active-class":"active",to:"/feedback"}},[e._v(" Feedback (wip) ")])],1),n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{tag:"a","active-class":"active",to:"/products"}},[e._v(" Producten ")])],1),n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{tag:"a","active-class":"active",to:"/information"}},[e._v(" Informatie ")])],1)]),n("div",{staticClass:"ml-auto"},[n("a",{staticClass:"nav-link",on:{click:e.logout}},[e._v("Logout")])])])])])])])},B=[],N=a["default"].extend({name:"Menu",methods:{logout:function(){this.$store.dispatch("authentication/logout"),this.$router.push("/signin")}}}),z=N,L=Object(u["a"])(z,I,B,!1,null,"aebf827e",null),F=L.exports,U={path:"/products",name:"Products",components:{default:function(){return n.e("chunk-2d2248c5").then(n.bind(null,"e136"))},menu:F},beforeEnter:function(e,t,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")},children:[{path:"",name:"Index",components:{default:function(){return Promise.all([n.e("chunk-b8ab1a28"),n.e("chunk-2829ec70")]).then(n.bind(null,"4fa1"))},menu:F},beforeEnter:function(e,t,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}},{path:"create",name:"Create",components:{default:function(){return n.e("chunk-ea35824c").then(n.bind(null,"49be"))},menu:F},beforeEnter:function(e,t,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}},{path:":id/*",name:"Show",components:{default:function(){return Promise.all([n.e("chunk-b8ab1a28"),n.e("chunk-3509e462")]).then(n.bind(null,"d998"))},menu:F},beforeEnter:function(e,t,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}}]},G={path:"/inspiratie",name:"Gallery",components:{default:function(){return n.e("chunk-2d0ab539").then(n.bind(null,"1598"))},menu:F},beforeEnter:function(e,t,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")},children:[{path:"",name:"GalleryIndex",components:{default:function(){return Promise.all([n.e("chunk-b8ab1a28"),n.e("chunk-1589ae24")]).then(n.bind(null,"5695"))},menu:F},beforeEnter:function(e,t,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}},{path:"create",name:"GalleryCreate",components:{default:function(){return Promise.all([n.e("chunk-b8ab1a28"),n.e("chunk-773c6784")]).then(n.bind(null,"2ac8"))},menu:F},beforeEnter:function(e,t,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}},{path:":id/*",name:"GalleryShow",components:{default:function(){return Promise.all([n.e("chunk-b8ab1a28"),n.e("chunk-4a873b35")]).then(n.bind(null,"39cd"))},menu:F},beforeEnter:function(e,t,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}}]},M={path:"/feedback",name:"Feedback",components:{default:function(){return n.e("chunk-2d0ab820").then(n.bind(null,"1627"))},menu:F},children:[{path:"",name:"FeedbackIndex",component:function(){return n.e("chunk-11cd7f74").then(n.bind(null,"4950"))}},{path:"create",name:"FeedbackCreate",component:function(){return n.e("chunk-01bef820").then(n.bind(null,"bc54"))}},{path:"answers",name:"Answers",components:{default:function(){return n.e("chunk-fe21830a").then(n.bind(null,"1d08"))},menu:F}},{path:":id",name:"FeedbackShow",component:function(){return n.e("chunk-2d22d452").then(n.bind(null,"f77b"))}}],beforeEnter:function(e,t,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}};a["default"].use(r["a"]);var q=[U,G,M,{path:"/signin",name:"SignIn",component:j},{path:"/signup",name:"SignUp",component:S},{path:"/",name:"Home",components:{default:l,menu:F},beforeEnter:function(e,t,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}},{path:"/information",name:"Information",components:{default:function(){return n.e("chunk-302973ec").then(n.bind(null,"cf4a"))},menu:F},beforeEnter:function(e,t,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}},{path:"/statistics",name:"Statistics",components:{default:function(){return n.e("chunk-d9d2f52e").then(n.bind(null,"e9c4"))},menu:F},beforeEnter:function(e,t,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}}],D=new r["a"]({routes:q});D.beforeEach((function(e,t,n){$["a"].getters["authentication/isAuthenticated"]||$["a"].dispatch("authentication/tryAutologin"),n()}));var H=t["a"]=D},c3f3:function(e,t,n){"use strict";n.d(t,"a",(function(){return i}));n("13d5"),n("7039");var a=n("d4ec"),r=n("bee2"),i=function(){function e(){Object(a["a"])(this,e)}return Object(r["a"])(e,[{key:"deserialize",value:function(e){return Object.assign(this,e),this}},{key:"serialize",value:function(){var e=this;return Object.getOwnPropertyNames(this).reduce((function(t,n){return"__ob__"!=n&&(t[n]=e[n]),t}),{})}}]),e}()},cd49:function(e,t,n){"use strict";n.r(t);n("e260"),n("e6cf"),n("cca6"),n("a79d");var a=n("2b0e"),r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{attrs:{id:"app"}},[n("notifications"),n("router-view",{attrs:{name:"menu"}}),n("transition",{attrs:{name:"component-fade",mode:"out-in"}},[n("router-view",{key:e.$router.fullPath})],1)],1)},i=[],o=(n("a1a3"),a["default"].extend({name:"App",created:function(){this.$store.dispatch("authentication/tryAutologin")}})),c=o,s=(n("5c0b"),n("2877")),u=Object(s["a"])(c,r,i,!1,null,null,null),d=u.exports,l=n("afbc"),f=n("0613"),h=n("ee98"),p=n.n(h);a["default"].use(p.a),a["default"].config.productionTip=!1,new a["default"]({router:l["a"],store:f["a"],render:function(e){return e(d)}}).$mount("#app")},e293:function(e,t,n){"use strict";n("d3b7");var a=n("bc3a"),r=n.n(a),i=n("0613"),o=n("afbc"),c="kapsalon-api.test/api/v1/";r.a.defaults.withCredentials=!0;var s=r.a.create({baseURL:c});s.interceptors.request.use((function(e){var t=i["a"].getters["authentication/getToken"];return t&&(e.headers["Authorization"]="Bearer "+t,e.headers.get["Accepts"]="application/json"),e}),(function(e){Promise.reject(e)})),s.interceptors.response.use((function(e){return e}),(function(e){return 401===e.response.status?(i["a"].dispatch("authentication/clearToken"),o["a"].push("/signin"),Promise.reject(e)):Promise.reject(e)})),s.defaults.withCredentials=!0,t["a"]=s}});
//# sourceMappingURL=app.ed3fbce1.js.map