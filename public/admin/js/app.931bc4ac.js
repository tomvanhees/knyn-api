(function(t){function e(e){for(var a,r,c=e[0],s=e[1],u=e[2],d=0,l=[];d<c.length;d++)r=c[d],Object.prototype.hasOwnProperty.call(i,r)&&i[r]&&l.push(i[r][0]),i[r]=0;for(a in s)Object.prototype.hasOwnProperty.call(s,a)&&(t[a]=s[a]);f&&f(e);while(l.length)l.shift()();return o.push.apply(o,u||[]),n()}function n(){for(var t,e=0;e<o.length;e++){for(var n=o[e],a=!0,r=1;r<n.length;r++){var c=n[r];0!==i[c]&&(a=!1)}a&&(o.splice(e--,1),t=s(s.s=n[0]))}return t}var a={},r={app:0},i={app:0},o=[];function c(t){return s.p+"js/"+({}[t]||t)+"."+{"chunk-01bef820":"985519f3","chunk-11cd7f74":"7e9c1dd6","chunk-2d0ab539":"4e5a78ee","chunk-2d0ab820":"76d7da4c","chunk-2d2248c5":"6143a8d1","chunk-2d22d452":"26bb4403","chunk-302973ec":"06b9fd25","chunk-b8ab1a28":"66598425","chunk-1589ae24":"c4322d1b","chunk-2829ec70":"cc19b9d5","chunk-3509e462":"e38a7cb5","chunk-4a873b35":"2e58b1fa","chunk-773c6784":"b31aef6c","chunk-d9d2f52e":"8727acac","chunk-ea35824c":"7dde4b20","chunk-fe21830a":"636498b1"}[t]+".js"}function s(e){if(a[e])return a[e].exports;var n=a[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,s),n.l=!0,n.exports}s.e=function(t){var e=[],n={"chunk-1589ae24":1,"chunk-3509e462":1,"chunk-4a873b35":1,"chunk-773c6784":1,"chunk-ea35824c":1};r[t]?e.push(r[t]):0!==r[t]&&n[t]&&e.push(r[t]=new Promise((function(e,n){for(var a="css/"+({}[t]||t)+"."+{"chunk-01bef820":"31d6cfe0","chunk-11cd7f74":"31d6cfe0","chunk-2d0ab539":"31d6cfe0","chunk-2d0ab820":"31d6cfe0","chunk-2d2248c5":"31d6cfe0","chunk-2d22d452":"31d6cfe0","chunk-302973ec":"31d6cfe0","chunk-b8ab1a28":"31d6cfe0","chunk-1589ae24":"d99e98ce","chunk-2829ec70":"31d6cfe0","chunk-3509e462":"5c3f5a32","chunk-4a873b35":"8ec70acf","chunk-773c6784":"e1be49bd","chunk-d9d2f52e":"31d6cfe0","chunk-ea35824c":"cf5002f4","chunk-fe21830a":"31d6cfe0"}[t]+".css",i=s.p+a,o=document.getElementsByTagName("link"),c=0;c<o.length;c++){var u=o[c],d=u.getAttribute("data-href")||u.getAttribute("href");if("stylesheet"===u.rel&&(d===a||d===i))return e()}var l=document.getElementsByTagName("style");for(c=0;c<l.length;c++){u=l[c],d=u.getAttribute("data-href");if(d===a||d===i)return e()}var f=document.createElement("link");f.rel="stylesheet",f.type="text/css",f.onload=e,f.onerror=function(e){var a=e&&e.target&&e.target.src||i,o=new Error("Loading CSS chunk "+t+" failed.\n("+a+")");o.code="CSS_CHUNK_LOAD_FAILED",o.request=a,delete r[t],f.parentNode.removeChild(f),n(o)},f.href=i;var h=document.getElementsByTagName("head")[0];h.appendChild(f)})).then((function(){r[t]=0})));var a=i[t];if(0!==a)if(a)e.push(a[2]);else{var o=new Promise((function(e,n){a=i[t]=[e,n]}));e.push(a[2]=o);var u,d=document.createElement("script");d.charset="utf-8",d.timeout=120,s.nc&&d.setAttribute("nonce",s.nc),d.src=c(t);var l=new Error;u=function(e){d.onerror=d.onload=null,clearTimeout(f);var n=i[t];if(0!==n){if(n){var a=e&&("load"===e.type?"missing":e.type),r=e&&e.target&&e.target.src;l.message="Loading chunk "+t+" failed.\n("+a+": "+r+")",l.name="ChunkLoadError",l.type=a,l.request=r,n[1](l)}i[t]=void 0}};var f=setTimeout((function(){u({type:"timeout",target:d})}),12e4);d.onerror=d.onload=u,document.head.appendChild(d)}return Promise.all(e)},s.m=t,s.c=a,s.d=function(t,e,n){s.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},s.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},s.t=function(t,e){if(1&e&&(t=s(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(s.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var a in t)s.d(n,a,function(e){return t[e]}.bind(null,a));return n},s.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return s.d(e,"a",e),e},s.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},s.p="/admin/",s.oe=function(t){throw console.error(t),t};var u=window["webpackJsonp"]=window["webpackJsonp"]||[],d=u.push.bind(u);u.push=e,u=u.slice();for(var l=0;l<u.length;l++)e(u[l]);var f=d;o.push([0,"chunk-vendors"]),n()})({0:function(t,e,n){t.exports=n("cd49")},"0613":function(t,e,n){"use strict";var a=n("2b0e"),r=n("2f62"),i=(n("d3b7"),n("e293")),o={namespaced:!0,state:{token:""},getters:{isAuthenticated:function(t){return""!==t.token},getToken:function(t){return t.token}},mutations:{setToken:function(t,e){t.token=e},clearToken:function(t){t.token=""}},actions:{clearToken:function(t){var e=t.commit;localStorage.removeItem("token"),e("clearToken")},setToken:function(t,e){var n=t.commit;n("setToken",e)},tryAutologin:function(t){var e=t.commit,n=localStorage.getItem("token");n&&e("setToken",n)},logout:function(t){var e=t.dispatch;i["a"].post("/user/logout").finally((function(){e("clearToken")}))}}},c=(n("4160"),n("c975"),n("a434"),n("159b"),n("d4ec")),s=n("bee2"),u=function(){function t(){Object(c["a"])(this,t)}return Object(s["a"])(t,null,[{key:"fetch",value:function(){return i["a"].get("product/brands")}},{key:"post",value:function(t){return i["a"].post("/product/brands",{content:t.serialize()})}},{key:"delete",value:function(t){return i["a"].post("product/brands/".concat(t.id),{_method:"DELETE"})}}]),t}(),d=n("5b80"),l={namespaced:!0,state:{brands:Array()},mutations:{setBrands:function(t,e){e.forEach((function(e){return t.brands.push((new d["a"]).deserialize(e))}))},addBrand:function(t,e){t.brands.push((new d["a"]).deserialize(e))},deleteBrand:function(t,e){var n=t.brands.indexOf(e);t.brands.splice(n,1)}},actions:{getBrands:function(t){var e=t.state,n=t.commit;0===e.brands.length&&u.fetch().then((function(t){n("setBrands",t.data)}))},addBrand:function(t,e){var n=t.commit;u.post(e).then((function(t){n("addBrand",t.data)}))},deleteBrand:function(t,e){var n=t.commit;u.delete(e).then((function(){n("deleteBrand",e)}))}}},f=n("9e01"),h=function(){function t(){Object(c["a"])(this,t)}return Object(s["a"])(t,null,[{key:"fetch",value:function(){return i["a"].get("product/categories")}},{key:"post",value:function(t){return i["a"].post("/product/categories",{content:t.serialize()})}},{key:"delete",value:function(t){return i["a"].post("product/categories/".concat(t.id),{_method:"DELETE"})}}]),t}(),p={namespaced:!0,state:{categories:Array()},mutations:{setCategories:function(t,e){e.forEach((function(e){return t.categories.push((new f["a"]).deserialize(e))}))},addCategory:function(t,e){t.categories.push((new f["a"]).deserialize(e))},deleteCategory:function(t,e){var n=t.categories.indexOf(e);t.categories.splice(n,1)}},actions:{getCategories:function(t){var e=t.state,n=t.commit;0===e.categories.length&&h.fetch().then((function(t){n("setCategories",t.data)}))},addCategory:function(t,e){var n=t.commit;h.post(e).then((function(t){n("addCategory",t.data)}))},deleteCategory:function(t,e){var n=t.commit;h.delete(e).then((function(){n("deleteCategory",e)}))}}};a["default"].use(r["a"]);e["a"]=new r["a"].Store({state:{},mutations:{},actions:{},modules:{authentication:o,brands:l,categories:p}})},"5b80":function(t,e,n){"use strict";n.d(e,"a",(function(){return c}));n("b0c0");var a=n("d4ec"),r=n("262e"),i=n("2caf"),o=n("c3f3"),c=function(t){Object(r["a"])(n,t);var e=Object(i["a"])(n);function n(){var t;return Object(a["a"])(this,n),t=e.apply(this,arguments),t.id=0,t.name="",t}return n}(o["a"])},"5c0b":function(t,e,n){"use strict";var a=n("9c0c"),r=n.n(a);r.a},"9c0c":function(t,e,n){},"9e01":function(t,e,n){"use strict";n.d(e,"a",(function(){return c}));n("b0c0");var a=n("d4ec"),r=n("262e"),i=n("2caf"),o=n("c3f3"),c=function(t){Object(r["a"])(n,t);var e=Object(i["a"])(n);function n(){var t;return Object(a["a"])(this,n),t=e.apply(this,arguments),t.id=0,t.name="",t}return n}(o["a"])},a1a3:function(t,e,n){},afbc:function(t,e,n){"use strict";n("d3b7");var a=n("2b0e"),r=n("8c4f"),i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div")},o=[],c={name:"Home"},s=c,u=n("2877"),d=Object(u["a"])(s,i,o,!1,null,"6dc670ea",null),l=d.exports,f=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("div",{staticClass:"container"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-4 offset-4 mt-5"},[n("div",{staticClass:"card"},[t._m(0),n("div",{staticClass:"card-body"},[n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[t._v("E-mailadres")]),n("input",{directives:[{name:"model",rawName:"v-model",value:t.email,expression:"email"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.email},on:{input:function(e){e.target.composing||(t.email=e.target.value)}}}),t.errors.hasOwnProperty("email")?n("div",{staticClass:"alert alert-danger"},[t._v(" "+t._s(t.errors.email[0])+" ")]):t._e()]),n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[t._v("Wachtwoord")]),t._v(" "),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:t.password,expression:"password"}],staticClass:"form-control",attrs:{type:"password"},domProps:{value:t.password},on:{input:function(e){e.target.composing||(t.password=e.target.value)}}}),t.errors.hasOwnProperty("password")?n("div",{staticClass:"alert alert-danger"},[t._v(" "+t._s(t.errors.password[0])+" ")]):t._e()]),n("div",{staticClass:"form-group"},[n("button",{staticClass:"btn btn-dark",on:{click:t.signIn}},[t._v("Verzenden")])]),n("div",[n("router-link",{attrs:{to:"/signup"}},[t._v("Nog geen account?")])],1)])])])])])])},h=[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"card-header bg-dark"},[n("span",{staticClass:"text-white"},[t._v("Inloggen")])])}],p=(n("99af"),n("c975"),n("fb6a"),n("bc3a")),m=n.n(p),v=document.URL,b=v.indexOf("."),g=v.slice(0,b),k="http://".concat(g,".").concat("http://kapsalon-api.test/api/v1/");m.a.defaults.withCredentials=!0;var C=m.a.create({baseURL:k});C.interceptors.request.use((function(t){return t.headers["Content-Type"]="application/json",t}),(function(t){Promise.reject(t)})),C.defaults.withCredentials=!0;var w=C,y={name:"SignIn",data:function(){return{email:"",password:"",errors:{}}},methods:{signIn:function(){var t=this;w.post("/user/login",{email:this.email,password:this.password}).then((function(e){t.$store.dispatch("authentication/setToken",e.data),localStorage.setItem("token",e.data),H.push("/")})).catch((function(e){console.log(e.response),t.errors=e.response.data.errors}))}}},_=y,E=Object(u["a"])(_,f,h,!1,null,"9eee1806",null),j=E.exports,O=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("div",{staticClass:"container"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-4 offset-4 mt-5"},[n("div",{staticClass:"card"},[t._m(0),n("div",{staticClass:"card-body"},[n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[t._v("Tenant")]),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:t.data.tenant,expression:"data.tenant"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.data.tenant},on:{input:function(e){e.target.composing||t.$set(t.data,"tenant",e.target.value)}}})]),n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[t._v("Gebruikersnaam")]),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:t.data.name,expression:"data.name"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.data.name},on:{input:function(e){e.target.composing||t.$set(t.data,"name",e.target.value)}}})]),n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[t._v("E-mailadres")]),t._v(" "),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:t.data.email,expression:"data.email"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.data.email},on:{input:function(e){e.target.composing||t.$set(t.data,"email",e.target.value)}}})]),n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[t._v("Wachtwoord")]),t._v(" "),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:t.data.password,expression:"data.password"}],staticClass:"form-control",attrs:{type:"password"},domProps:{value:t.data.password},on:{input:function(e){e.target.composing||t.$set(t.data,"password",e.target.value)}}})]),n("div",[n("button",{staticClass:"btn btn-dark",on:{click:t.subscribe}},[t._v("Verzenden")])])])])])])])])},x=[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"card-header bg-dark"},[n("span",{staticClass:"text-white"},[t._v("Inschrijven")])])}],P=(n("ac1f"),n("5319"),a["default"].extend({name:"SignUp",data:function(){return{data:{tenant:"",name:"",email:"",password:""}}},methods:{subscribe:function(){w.post("/tenant/store",this.data).then((function(t){window.location.replace(t.data.redirect_path)}))}}})),A=P,T=Object(u["a"])(A,O,x,!1,null,"7746b4d2",null),S=T.exports,$=n("0613"),I=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("div",{staticClass:"container-fluid menu"},[n("div",{staticClass:"main-container"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-12 d-flex"},[n("ul",{staticClass:"nav"},[n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{tag:"a","active-class":"active",to:"/inspiratie"}},[t._v(" Inspiratie ")])],1),n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{tag:"a","active-class":"active",to:"/feedback"}},[t._v(" Feedback (wip) ")])],1),n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{tag:"a","active-class":"active",to:"/products"}},[t._v(" Producten ")])],1),n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{tag:"a","active-class":"active",to:"/information"}},[t._v(" Informatie ")])],1)]),n("div",{staticClass:"ml-auto"},[n("a",{staticClass:"nav-link",on:{click:t.logout}},[t._v("Logout")])])])])])])])},B=[],N=a["default"].extend({name:"Menu",methods:{logout:function(){this.$store.dispatch("authentication/logout"),this.$router.push("/signin")}}}),z=N,L=Object(u["a"])(z,I,B,!1,null,"aebf827e",null),F=L.exports,U={path:"/products",name:"Products",components:{default:function(){return n.e("chunk-2d2248c5").then(n.bind(null,"e136"))},menu:F},beforeEnter:function(t,e,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")},children:[{path:"",name:"Index",components:{default:function(){return Promise.all([n.e("chunk-b8ab1a28"),n.e("chunk-2829ec70")]).then(n.bind(null,"4fa1"))},menu:F},beforeEnter:function(t,e,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}},{path:"create",name:"Create",components:{default:function(){return n.e("chunk-ea35824c").then(n.bind(null,"49be"))},menu:F},beforeEnter:function(t,e,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}},{path:":id/*",name:"Show",components:{default:function(){return Promise.all([n.e("chunk-b8ab1a28"),n.e("chunk-3509e462")]).then(n.bind(null,"d998"))},menu:F},beforeEnter:function(t,e,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}}]},G={path:"/inspiratie",name:"Gallery",components:{default:function(){return n.e("chunk-2d0ab539").then(n.bind(null,"1598"))},menu:F},beforeEnter:function(t,e,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")},children:[{path:"",name:"GalleryIndex",components:{default:function(){return Promise.all([n.e("chunk-b8ab1a28"),n.e("chunk-1589ae24")]).then(n.bind(null,"5695"))},menu:F},beforeEnter:function(t,e,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}},{path:"create",name:"GalleryCreate",components:{default:function(){return Promise.all([n.e("chunk-b8ab1a28"),n.e("chunk-773c6784")]).then(n.bind(null,"2ac8"))},menu:F},beforeEnter:function(t,e,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}},{path:":id/*",name:"GalleryShow",components:{default:function(){return Promise.all([n.e("chunk-b8ab1a28"),n.e("chunk-4a873b35")]).then(n.bind(null,"39cd"))},menu:F},beforeEnter:function(t,e,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}}]},M={path:"/feedback",name:"Feedback",components:{default:function(){return n.e("chunk-2d0ab820").then(n.bind(null,"1627"))},menu:F},children:[{path:"",name:"FeedbackIndex",component:function(){return n.e("chunk-11cd7f74").then(n.bind(null,"4950"))}},{path:"create",name:"FeedbackCreate",component:function(){return n.e("chunk-01bef820").then(n.bind(null,"bc54"))}},{path:"answers",name:"Answers",components:{default:function(){return n.e("chunk-fe21830a").then(n.bind(null,"1d08"))},menu:F}},{path:":id",name:"FeedbackShow",component:function(){return n.e("chunk-2d22d452").then(n.bind(null,"f77b"))}}],beforeEnter:function(t,e,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}};a["default"].use(r["a"]);var q=[U,G,M,{path:"/signin",name:"SignIn",component:j},{path:"/signup",name:"SignUp",component:S},{path:"/",name:"Home",components:{default:l,menu:F},beforeEnter:function(t,e,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}},{path:"/information",name:"Information",components:{default:function(){return n.e("chunk-302973ec").then(n.bind(null,"cf4a"))},menu:F},beforeEnter:function(t,e,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}},{path:"/statistics",name:"Statistics",components:{default:function(){return n.e("chunk-d9d2f52e").then(n.bind(null,"e9c4"))},menu:F},beforeEnter:function(t,e,n){$["a"].getters["authentication/isAuthenticated"]?n():n("/signin")}}],D=new r["a"]({routes:q});D.beforeEach((function(t,e,n){$["a"].getters["authentication/isAuthenticated"]||$["a"].dispatch("authentication/tryAutologin"),n()}));var H=e["a"]=D},c3f3:function(t,e,n){"use strict";n.d(e,"a",(function(){return i}));n("13d5"),n("7039");var a=n("d4ec"),r=n("bee2"),i=function(){function t(){Object(a["a"])(this,t)}return Object(r["a"])(t,[{key:"deserialize",value:function(t){return Object.assign(this,t),this}},{key:"serialize",value:function(){var t=this;return Object.getOwnPropertyNames(this).reduce((function(e,n){return"__ob__"!=n&&(e[n]=t[n]),e}),{})}}]),t}()},cd49:function(t,e,n){"use strict";n.r(e);n("e260"),n("e6cf"),n("cca6"),n("a79d");var a=n("2b0e"),r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{attrs:{id:"app"}},[n("notifications"),n("router-view",{attrs:{name:"menu"}}),n("transition",{attrs:{name:"component-fade",mode:"out-in"}},[n("router-view",{key:t.$router.fullPath})],1)],1)},i=[],o=(n("a1a3"),a["default"].extend({name:"App",created:function(){this.$store.dispatch("authentication/tryAutologin")}})),c=o,s=(n("5c0b"),n("2877")),u=Object(s["a"])(c,r,i,!1,null,null,null),d=u.exports,l=n("afbc"),f=n("0613"),h=n("ee98"),p=n.n(h);a["default"].use(p.a),a["default"].config.productionTip=!1,new a["default"]({router:l["a"],store:f["a"],render:function(t){return t(d)}}).$mount("#app")},e293:function(t,e,n){"use strict";n("d3b7");var a=n("bc3a"),r=n.n(a),i=n("0613"),o=n("afbc"),c="http://kapsalon-api.test/api/v1/";r.a.defaults.withCredentials=!0;var s=r.a.create({baseURL:c});s.interceptors.request.use((function(t){var e=i["a"].getters["authentication/getToken"];return e&&(t.headers["Authorization"]="Bearer "+e,t.headers.get["Accepts"]="application/json"),t}),(function(t){Promise.reject(t)})),s.interceptors.response.use((function(t){return t}),(function(t){return 401===t.response.status?(i["a"].dispatch("authentication/clearToken"),o["a"].push("/signin"),Promise.reject(t)):Promise.reject(t)})),s.defaults.withCredentials=!0,e["a"]=s}});
//# sourceMappingURL=app.931bc4ac.js.map