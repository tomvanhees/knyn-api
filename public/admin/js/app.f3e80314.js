(function(t){function e(e){for(var a,r,c=e[0],s=e[1],u=e[2],d=0,l=[];d<c.length;d++)r=c[d],Object.prototype.hasOwnProperty.call(o,r)&&o[r]&&l.push(o[r][0]),o[r]=0;for(a in s)Object.prototype.hasOwnProperty.call(s,a)&&(t[a]=s[a]);f&&f(e);while(l.length)l.shift()();return i.push.apply(i,u||[]),n()}function n(){for(var t,e=0;e<i.length;e++){for(var n=i[e],a=!0,r=1;r<n.length;r++){var c=n[r];0!==o[c]&&(a=!1)}a&&(i.splice(e--,1),t=s(s.s=n[0]))}return t}var a={},r={app:0},o={app:0},i=[];function c(t){return s.p+"js/"+({}[t]||t)+"."+{"chunk-12c9cc20":"cee0b01d","chunk-2d0ab539":"686c3de9","chunk-2d0ab820":"83d75bff","chunk-2d0c20d6":"9453b238","chunk-2d21a796":"9a30e7ee","chunk-2d222746":"5fe320a4","chunk-2d2248c5":"57260e8b","chunk-2d22d452":"ad505f43","chunk-7a805e81":"00a4bc5c","chunk-861da40c":"544c2d70","chunk-2c277159":"55fd9ee4","chunk-3b4f579c":"6d0a16db","chunk-496344f8":"313cb58e","chunk-573ec83c":"07446742"}[t]+".js"}function s(e){if(a[e])return a[e].exports;var n=a[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,s),n.l=!0,n.exports}s.e=function(t){var e=[],n={"chunk-12c9cc20":1,"chunk-2c277159":1,"chunk-3b4f579c":1,"chunk-496344f8":1,"chunk-573ec83c":1};r[t]?e.push(r[t]):0!==r[t]&&n[t]&&e.push(r[t]=new Promise((function(e,n){for(var a="css/"+({}[t]||t)+"."+{"chunk-12c9cc20":"c2033d5f","chunk-2d0ab539":"31d6cfe0","chunk-2d0ab820":"31d6cfe0","chunk-2d0c20d6":"31d6cfe0","chunk-2d21a796":"31d6cfe0","chunk-2d222746":"31d6cfe0","chunk-2d2248c5":"31d6cfe0","chunk-2d22d452":"31d6cfe0","chunk-7a805e81":"31d6cfe0","chunk-861da40c":"31d6cfe0","chunk-2c277159":"34ad322e","chunk-3b4f579c":"e7109b87","chunk-496344f8":"07beb478","chunk-573ec83c":"c32f1556"}[t]+".css",o=s.p+a,i=document.getElementsByTagName("link"),c=0;c<i.length;c++){var u=i[c],d=u.getAttribute("data-href")||u.getAttribute("href");if("stylesheet"===u.rel&&(d===a||d===o))return e()}var l=document.getElementsByTagName("style");for(c=0;c<l.length;c++){u=l[c],d=u.getAttribute("data-href");if(d===a||d===o)return e()}var f=document.createElement("link");f.rel="stylesheet",f.type="text/css",f.onload=e,f.onerror=function(e){var a=e&&e.target&&e.target.src||o,i=new Error("Loading CSS chunk "+t+" failed.\n("+a+")");i.code="CSS_CHUNK_LOAD_FAILED",i.request=a,delete r[t],f.parentNode.removeChild(f),n(i)},f.href=o;var m=document.getElementsByTagName("head")[0];m.appendChild(f)})).then((function(){r[t]=0})));var a=o[t];if(0!==a)if(a)e.push(a[2]);else{var i=new Promise((function(e,n){a=o[t]=[e,n]}));e.push(a[2]=i);var u,d=document.createElement("script");d.charset="utf-8",d.timeout=120,s.nc&&d.setAttribute("nonce",s.nc),d.src=c(t);var l=new Error;u=function(e){d.onerror=d.onload=null,clearTimeout(f);var n=o[t];if(0!==n){if(n){var a=e&&("load"===e.type?"missing":e.type),r=e&&e.target&&e.target.src;l.message="Loading chunk "+t+" failed.\n("+a+": "+r+")",l.name="ChunkLoadError",l.type=a,l.request=r,n[1](l)}o[t]=void 0}};var f=setTimeout((function(){u({type:"timeout",target:d})}),12e4);d.onerror=d.onload=u,document.head.appendChild(d)}return Promise.all(e)},s.m=t,s.c=a,s.d=function(t,e,n){s.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},s.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},s.t=function(t,e){if(1&e&&(t=s(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(s.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var a in t)s.d(n,a,function(e){return t[e]}.bind(null,a));return n},s.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return s.d(e,"a",e),e},s.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},s.p="/",s.oe=function(t){throw console.error(t),t};var u=window["webpackJsonp"]=window["webpackJsonp"]||[],d=u.push.bind(u);u.push=e,u=u.slice();for(var l=0;l<u.length;l++)e(u[l]);var f=d;i.push([0,"chunk-vendors"]),n()})({0:function(t,e,n){t.exports=n("56d7")},"1c03":function(t,e,n){"use strict";n("d3b7");var a=n("bc3a"),r=n.n(a),o=n("4360"),i=n("a18c"),c="http://api.tomvanhees.be/api/v1/";r.a.defaults.withCredentials=!0;var s=r.a.create({baseURL:c});s.interceptors.request.use((function(t){var e=o["a"].state.authentication.token;return e&&(t.headers["Authorization"]="Bearer "+e,t.headers.get["Accepts"]="application/json"),t}),(function(t){Promise.reject(t)})),s.interceptors.response.use((function(t){return t}),(function(t){return 401===t.response.status?(o["a"].dispatch("authentication/clearToken"),i["a"].push("/signin"),Promise.reject(t)):Promise.reject(t)})),s.defaults.withCredentials=!0,e["a"]=s},4360:function(t,e,n){"use strict";var a=n("2b0e"),r=n("2f62"),o=(n("d3b7"),n("1c03")),i={namespaced:!0,state:{token:""},mutations:{setToken:function(t,e){t.token=e},clearToken:function(t){t.token=""}},actions:{clearToken:function(t){var e=t.commit;localStorage.removeItem("token"),e("clearToken")},setToken:function(t,e){var n=t.commit;n("setToken",e)},tryAutologin:function(t){var e=t.commit,n=localStorage.getItem("token");n&&e("setToken",n)},logout:function(t){var e=t.dispatch;o["a"].post("/user/logout").finally((function(){e("clearToken")}))}}},c=(n("c975"),n("a434"),{namespaced:!0,state:{brands:[]},mutations:{setBrands:function(t,e){t.brands=e},addBrand:function(t,e){t.brands.push(e)},deleteBrand:function(t,e){var n=t.brands.indexOf(e);t.brands.splice(n,1)}},actions:{getBrands:function(t){var e=t.commit;o["a"].get("product/brands").then((function(t){e("setBrands",t.data)}))},addBrand:function(t,e){var n=t.commit;o["a"].post("/product/brands",{name:e}).then((function(t){n("addBrand",t.data)}))},deleteBrand:function(t,e){var n=t.commit;o["a"].post("product/brands/".concat(e.id),{_method:"DELETE"}).then((function(){n("deleteBrand",e)}))}}}),s={namespaced:!0,state:{categories:[]},mutations:{setCategories:function(t,e){t.categories=e},addCategory:function(t,e){t.categories.push(e)},deleteCategory:function(t,e){var n=t.categories.indexOf(e);t.categories.splice(n,1)}},actions:{getCategories:function(t){var e=t.commit;o["a"].get("product/categories").then((function(t){e("setCategories",t.data)}))},addCategory:function(t,e){var n=t.commit;o["a"].post("/product/categories",{name:e}).then((function(t){n("addCategory",t.data)}))},deleteCategory:function(t,e){var n=t.commit;o["a"].post("product/categories/".concat(e.id),{_method:"DELETE"}).then((function(){n("deleteCategory",e)}))}}};a["default"].use(r["a"]);e["a"]=new r["a"].Store({state:{},mutations:{},actions:{},modules:{authentication:i,brands:c,categories:s}})},"56d7":function(t,e,n){"use strict";n.r(e);n("e260"),n("e6cf"),n("cca6"),n("a79d");var a=n("2b0e"),r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{attrs:{id:"app"}},[n("notifications"),n("router-view",{attrs:{name:"menu"}}),n("transition",{attrs:{name:"component-fade",mode:"out-in"}},[n("router-view",{key:t.$router.fullPath,staticClass:"main-container"})],1)],1)},o=[],i=(n("a1a3"),{name:"container",created:function(){this.$store.dispatch("authentication/tryAutologin")}}),c=i,s=(n("5c0b"),n("2877")),u=Object(s["a"])(c,r,o,!1,null,null,null),d=u.exports,l=n("a18c"),f=n("4360"),m=n("ee98"),p=n.n(m);a["default"].use(p.a),a["default"].config.productionTip=!1,new a["default"]({router:l["a"],store:f["a"],render:function(t){return t(d)}}).$mount("#app")},"5c0b":function(t,e,n){"use strict";var a=n("9c0c"),r=n.n(a);r.a},"9c0c":function(t,e,n){},a18c:function(t,e,n){"use strict";n("d3b7");var a=n("2b0e"),r=n("8c4f"),o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div")},i=[],c={name:"Home"},s=c,u=n("2877"),d=Object(u["a"])(s,o,i,!1,null,"6dc670ea",null),l=d.exports,f=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("div",{staticClass:"container"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-4 offset-4 mt-5"},[n("div",{staticClass:"card"},[t._m(0),n("div",{staticClass:"card-body"},[n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[t._v("E-mailadres")]),n("input",{directives:[{name:"model",rawName:"v-model",value:t.email,expression:"email"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.email},on:{input:function(e){e.target.composing||(t.email=e.target.value)}}}),t.errors.hasOwnProperty("email")?n("div",{staticClass:"alert alert-danger"},[t._v(" "+t._s(t.errors.email[0])+" ")]):t._e()]),n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[t._v("Wachtwoord")]),t._v(" "),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:t.password,expression:"password"}],staticClass:"form-control",attrs:{type:"password"},domProps:{value:t.password},on:{input:function(e){e.target.composing||(t.password=e.target.value)}}}),t.errors.hasOwnProperty("password")?n("div",{staticClass:"alert alert-danger"},[t._v(" "+t._s(t.errors.password[0])+" ")]):t._e()]),n("div",{staticClass:"form-group"},[n("button",{staticClass:"btn btn-dark",on:{click:t.signIn}},[t._v("Verzenden")])]),n("div",[n("router-link",{attrs:{to:"/signup"}},[t._v("Nog geen account?")])],1)])])])])])])},m=[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"card-header bg-dark"},[n("span",{staticClass:"text-white"},[t._v("Inloggen")])])}],p=n("bc3a"),h=n.n(p),v="http://api.tomvanhees.be/api/v1/";h.a.defaults.withCredentials=!0;var b=h.a.create({baseURL:v});b.interceptors.request.use((function(t){return t.headers["Content-Type"]="application/json",t}),(function(t){Promise.reject(t)})),b.defaults.withCredentials=!0;var g=b,k={name:"SignIn",data:function(){return{email:"",password:"",errors:{}}},methods:{signIn:function(){var t=this;g.post("/user/login",{email:this.email,password:this.password}).then((function(e){t.$store.dispatch("authentication/setToken",e.data),localStorage.setItem("token",e.data),q.push("/")})).catch((function(e){console.log(e.response),t.errors=e.response.data.errors}))}}},C=k,w=Object(u["a"])(C,f,m,!1,null,"9eee1806",null),y=w.exports,_=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("div",{staticClass:"container"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-4 offset-4 mt-5"},[n("div",{staticClass:"card"},[t._m(0),n("div",{staticClass:"card-body"},[n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[t._v("Gebruikersnaam")]),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:t.data.name,expression:"data.name"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.data.name},on:{input:function(e){e.target.composing||t.$set(t.data,"name",e.target.value)}}})]),n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[t._v("E-mailadres")]),t._v(" "),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:t.data.email,expression:"data.email"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.data.email},on:{input:function(e){e.target.composing||t.$set(t.data,"email",e.target.value)}}})]),n("div",{staticClass:"form-group"},[n("label",{attrs:{for:""}},[t._v("Wachtwoord")]),t._v(" "),n("br"),n("input",{directives:[{name:"model",rawName:"v-model",value:t.data.password,expression:"data.password"}],staticClass:"form-control",attrs:{type:"password"},domProps:{value:t.data.password},on:{input:function(e){e.target.composing||t.$set(t.data,"password",e.target.value)}}})]),n("div",[n("button",{staticClass:"btn btn-dark",on:{click:t.subscribe}},[t._v("Verzenden")])])])])])])])])},E=[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"card-header bg-dark"},[n("span",{staticClass:"text-white"},[t._v("Inschrijven")])])}],x={name:"SignUp",data:function(){return{data:{name:"",email:"",password:""}}},methods:{subscribe:function(){var t=this;g.post("/user/store",this.data).then((function(e){t.$store.dispatch("authentication/setToken",e.data),localStorage.setItem("token",e.data),q.push("/")}))}}},P=x,j=Object(u["a"])(P,_,E,!1,null,"5c43b182",null),T=j.exports,O=n("4360"),S=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("div",{staticClass:"container-fluid menu"},[n("div",{staticClass:"main-container"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-12 d-flex"},[n("ul",{staticClass:"nav"},[n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{tag:"a","active-class":"active",to:"/inspiratie"}},[t._v("Inspiratie")])],1),n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{tag:"a","active-class":"active",to:"/feedback"}},[t._v("Feedback (wip)")])],1),n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{tag:"a","active-class":"active",to:"/products"}},[t._v("Producten")])],1),n("li",{staticClass:"nav-item"},[n("router-link",{staticClass:"nav-link",attrs:{tag:"a","active-class":"active",to:"/information"}},[t._v("Informatie")])],1)]),n("div",{staticClass:"ml-auto"},[n("a",{staticClass:"nav-link",on:{click:t.logout}},[t._v("Logout")])])])])])])])},I=[],$={name:"Menu",methods:{logout:function(){this.$store.dispatch("authentication/logout"),this.$router.push("/signin")}}},B=$,A=Object(u["a"])(B,S,I,!1,null,"203be57b",null),N=A.exports,L={path:"/products",name:"Products",components:{default:function(){return n.e("chunk-2d2248c5").then(n.bind(null,"e136"))},menu:N},beforeEnter:function(t,e,n){O["a"].state.authentication.token?n():n("/signin")},children:[{path:"",name:"Index",components:{default:function(){return n.e("chunk-7a805e81").then(n.bind(null,"4fa1"))},menu:N},beforeEnter:function(t,e,n){O["a"].state.authentication.token?n():n("/signin")}},{path:"create",name:"Create",components:{default:function(){return Promise.all([n.e("chunk-861da40c"),n.e("chunk-496344f8")]).then(n.bind(null,"49be"))},menu:N},beforeEnter:function(t,e,n){O["a"].state.authentication.token?n():n("/signin")}},{path:":id/*",name:"Show",components:{default:function(){return Promise.all([n.e("chunk-861da40c"),n.e("chunk-573ec83c")]).then(n.bind(null,"d998"))},menu:N},beforeEnter:function(t,e,n){O["a"].state.authentication.token?n():n("/signin")}}]},F={path:"/inspiratie",name:"Gallery",components:{default:function(){return n.e("chunk-2d0ab539").then(n.bind(null,"1598"))},menu:N},beforeEnter:function(t,e,n){O["a"].state.authentication.token?n():n("/signin")},children:[{path:"",name:"GalleryIndex",components:{default:function(){return n.e("chunk-12c9cc20").then(n.bind(null,"5695"))},menu:N},beforeEnter:function(t,e,n){O["a"].state.authentication.token?n():n("/signin")}},{path:"create",name:"GalleryCreate",components:{default:function(){return Promise.all([n.e("chunk-861da40c"),n.e("chunk-3b4f579c")]).then(n.bind(null,"2ac8"))},menu:N},beforeEnter:function(t,e,n){O["a"].state.authentication.token?n():n("/signin")}},{path:":id/*",name:"GalleryShow",components:{default:function(){return Promise.all([n.e("chunk-861da40c"),n.e("chunk-2c277159")]).then(n.bind(null,"39cd"))},menu:N},beforeEnter:function(t,e,n){O["a"].state.authentication.token?n():n("/signin")}}]},G={path:"/feedback",name:"Feedback",components:{default:function(){return n.e("chunk-2d0ab820").then(n.bind(null,"1627"))},menu:N},children:[{path:"",name:"FeedbackIndex",component:function(){return n.e("chunk-2d0c20d6").then(n.bind(null,"4950"))}},{path:"create",name:"FeedbackCreate",component:function(){return n.e("chunk-2d21a796").then(n.bind(null,"bc54"))}},{path:":id",name:"FeedbackShow",component:function(){return n.e("chunk-2d22d452").then(n.bind(null,"f77b"))}}],beforeEnter:function(t,e,n){O["a"].state.authentication.token?n():n("/signin")}};a["default"].use(r["a"]);var M=[L,F,G,{path:"/signin",name:"SignIn",component:y},{path:"/signup",name:"SignUp",component:T},{path:"/",name:"Home",components:{default:l,menu:N},beforeEnter:function(t,e,n){O["a"].state.authentication.token?n():n("/signin")}},{path:"/information",name:"Information",components:{default:function(){return n.e("chunk-2d222746").then(n.bind(null,"cf4a"))},menu:N},beforeEnter:function(t,e,n){O["a"].state.authentication.token?n():n("/signin")}}],U=new r["a"]({routes:M});U.beforeEach((function(t,e,n){O["a"].state.authentication.token||O["a"].dispatch("authentication/tryAutologin"),n()}));var q=e["a"]=U},a1a3:function(t,e,n){}});
//# sourceMappingURL=app.f3e80314.js.map