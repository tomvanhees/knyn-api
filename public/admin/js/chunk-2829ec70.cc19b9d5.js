(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2829ec70"],{"0d09":function(e,t,r){"use strict";r.d(t,"a",(function(){return u}));var a=r("d4ec"),n=r("bee2"),c=r("262e"),i=r("2caf"),s=r("9ab4"),d=r("2b0e"),o=r("2fe1"),u=function(e){Object(c["a"])(r,e);var t=Object(i["a"])(r);function r(){return Object(a["a"])(this,r),t.apply(this,arguments)}return Object(n["a"])(r,[{key:"Brands",get:function(){return this.$store.state.brands.brands}}]),r}(d["default"]);u=Object(s["a"])([o["a"]],u)},"1dd3":function(e,t,r){"use strict";r.d(t,"a",(function(){return s}));r("96cf");var a=r("1da1"),n=r("d4ec"),c=r("bee2"),i=r("e293"),s=function(){function e(){Object(n["a"])(this,e)}return Object(c["a"])(e,null,[{key:"fetch",value:function(){var e=Object(a["a"])(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",i["a"].get("/product"));case 1:case"end":return e.stop()}}),e)})));function t(){return e.apply(this,arguments)}return t}()},{key:"find",value:function(){var e=Object(a["a"])(regeneratorRuntime.mark((function e(t){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",i["a"].get("/product/".concat(t)));case 1:case"end":return e.stop()}}),e)})));function t(t){return e.apply(this,arguments)}return t}()},{key:"create",value:function(){var e=Object(a["a"])(regeneratorRuntime.mark((function e(t){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",i["a"].post("/product",{content:t.serialize()}));case 1:case"end":return e.stop()}}),e)})));function t(t){return e.apply(this,arguments)}return t}()},{key:"update",value:function(){var e=Object(a["a"])(regeneratorRuntime.mark((function e(t){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return console.log("in class"),e.abrupt("return",i["a"].post("/product/".concat(t.id),{content:t.serialize(),_method:"PATCH"}));case 2:case"end":return e.stop()}}),e)})));function t(t){return e.apply(this,arguments)}return t}()},{key:"delete",value:function(){var e=Object(a["a"])(regeneratorRuntime.mark((function e(t){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",i["a"].post("/product/".concat(t.id),{_method:"DELETE"}));case 1:case"end":return e.stop()}}),e)})));function t(t){return e.apply(this,arguments)}return t}()}]),e}()},2532:function(e,t,r){"use strict";var a=r("23e7"),n=r("5a34"),c=r("1d80"),i=r("ab13");a({target:"String",proto:!0,forced:!i("includes")},{includes:function(e){return!!~String(c(this)).indexOf(n(e),arguments.length>1?arguments[1]:void 0)}})},"439e":function(e,t,r){"use strict";r.d(t,"a",(function(){return c}));r("4160"),r("159b");var a=r("d4ec"),n=r("bee2"),c=function(){function e(){Object(a["a"])(this,e),this.media=[]}return Object(n["a"])(e,[{key:"onChangeEvent",value:function(e){this.setMedia(e.target.files)}},{key:"onDroppedEvent",value:function(e){e.stopPropagation(),e.preventDefault(),this.setMedia(e.dataTransfer.files)}},{key:"setMedia",value:function(e){var t=this;e.forEach((function(e){t.media.push(e)}))}},{key:"getMedia",value:function(){return this.media}},{key:"clearMedia",value:function(){this.media=[]}}]),e}()},"44e7":function(e,t,r){var a=r("861d"),n=r("c6b6"),c=r("b622"),i=c("match");e.exports=function(e){var t;return a(e)&&(void 0!==(t=e[i])?!!t:"RegExp"==n(e))}},"45fc":function(e,t,r){"use strict";var a=r("23e7"),n=r("b727").some,c=r("a640"),i=r("ae40"),s=c("some"),d=i("some");a({target:"Array",proto:!0,forced:!s||!d},{some:function(e){return n(this,e,arguments.length>1?arguments[1]:void 0)}})},"4de4":function(e,t,r){"use strict";var a=r("23e7"),n=r("b727").filter,c=r("1dde"),i=r("ae40"),s=c("filter"),d=i("filter");a({target:"Array",proto:!0,forced:!s||!d},{filter:function(e){return n(this,e,arguments.length>1?arguments[1]:void 0)}})},"4fa1":function(e,t,r){"use strict";r.r(t);var a=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",[r("h1",[e._v("Producten")]),r("div",{staticClass:"container"},[r("div",{staticClass:"row"},[r("div",{staticClass:"col-9 "},[r("div",{staticClass:"card"},[r("div",{staticClass:"card-body"},[r("div",{staticClass:"d-flex justify-content-center my-3"},[r("router-link",{attrs:{to:"/products/create"}},[r("div",{staticClass:"large-add-button"},[r("span",[e._v("+")])])])],1),r("transition-group",{staticClass:"d-flex flex-wrap",attrs:{mode:"out-in",name:"component-fade"}},e._l(e.FilteredProducts,(function(e){return r("dl-product-index-card",{key:e.id,attrs:{product:e}})})),1)],1)])]),r("div",{staticClass:"col-3"},[r("div",{staticClass:"card"},[e._m(0),r("div",{staticClass:"card-body"},e._l(e.Categories,(function(t){return r("div",{key:t.id,staticClass:"form-check"},[r("input",{directives:[{name:"model",rawName:"v-model",value:e.selectedCategories,expression:"selectedCategories"}],staticClass:"form-check-input",attrs:{id:"category_"+t.id,type:"checkbox"},domProps:{value:t.id,checked:Array.isArray(e.selectedCategories)?e._i(e.selectedCategories,t.id)>-1:e.selectedCategories},on:{change:function(r){var a=e.selectedCategories,n=r.target,c=!!n.checked;if(Array.isArray(a)){var i=t.id,s=e._i(a,i);n.checked?s<0&&(e.selectedCategories=a.concat([i])):s>-1&&(e.selectedCategories=a.slice(0,s).concat(a.slice(s+1)))}else e.selectedCategories=c}}}),r("label",{staticClass:"form-check-label",attrs:{for:"category_"+t.id}},[e._v(e._s(t.name))])])})),0),e._m(1),r("div",{staticClass:"card-body"},[r("div",{staticClass:"form-check"},[r("input",{directives:[{name:"model",rawName:"v-model",value:e.selectedBrands,expression:"selectedBrands"}],staticClass:"form-check-input",attrs:{id:"brand_0",type:"checkbox"},domProps:{value:0,checked:Array.isArray(e.selectedBrands)?e._i(e.selectedBrands,0)>-1:e.selectedBrands},on:{change:function(t){var r=e.selectedBrands,a=t.target,n=!!a.checked;if(Array.isArray(r)){var c=0,i=e._i(r,c);a.checked?i<0&&(e.selectedBrands=r.concat([c])):i>-1&&(e.selectedBrands=r.slice(0,i).concat(r.slice(i+1)))}else e.selectedBrands=n}}}),r("label",{staticClass:"form-check-label",attrs:{for:"brand_0"}},[e._v("Geen merk")])]),e._l(e.Brands,(function(t){return r("div",{key:t.id,staticClass:"form-check"},[r("input",{directives:[{name:"model",rawName:"v-model",value:e.selectedBrands,expression:"selectedBrands"}],staticClass:"form-check-input",attrs:{id:"brand_"+t.id,type:"checkbox"},domProps:{value:t.id,checked:Array.isArray(e.selectedBrands)?e._i(e.selectedBrands,t.id)>-1:e.selectedBrands},on:{change:function(r){var a=e.selectedBrands,n=r.target,c=!!n.checked;if(Array.isArray(a)){var i=t.id,s=e._i(a,i);n.checked?s<0&&(e.selectedBrands=a.concat([i])):s>-1&&(e.selectedBrands=a.slice(0,s).concat(a.slice(s+1)))}else e.selectedBrands=c}}}),r("label",{staticClass:"form-check-label",attrs:{for:"brand_"+t.id}},[e._v(e._s(t.name))])])}))],2)])])])])])},n=[function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"card-header"},[r("span",{staticClass:"card-header-text"},[e._v("Categorieën")])])},function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"card-header"},[r("div",{staticClass:"card-header-text"},[e._v(" Merken ")])])}],c=(r("4de4"),r("4160"),r("caad"),r("45fc"),r("2532"),r("159b"),r("d4ec")),i=r("bee2"),s=r("262e"),d=r("2caf"),o=r("9ab4"),u=r("2fe1"),l=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"product-index-card m-2"},[r("router-link",{staticStyle:{"text-decoration":"none"},attrs:{to:"/products/"+e.product.id+"/"+e.product.slug}},[r("div",{staticClass:"d-flex"},[r("div",[r("img",{staticClass:"m-3",staticStyle:{"border-radius":"50%",width:"100px",height:"100px"},attrs:{src:e.product.cover,alt:""}})]),r("div",{staticClass:"card-body d-flex flex-column"},[r("div",[r("div",{staticClass:"product-title"},[e._v(e._s(e.product.name))]),r("div",{staticClass:"product-brand"},[e._v(e._s(e.product.brand.name))])]),r("div",{staticClass:"product-price"},[e._v(e._s(e.product.price))])])])])],1)},f=[],p=r("2b0e"),h=p["default"].extend({props:{product:{type:Object,required:!0}}}),v=function(e){Object(s["a"])(r,e);var t=Object(d["a"])(r);function r(){return Object(c["a"])(this,r),t.apply(this,arguments)}return r}(Object(u["b"])(h));v=Object(o["a"])([u["a"]],v);var b=v,m=b,g=r("2877"),y=Object(g["a"])(m,l,f,!1,null,"17b363b4",null),k=y.exports,C=r("5bbf"),_=r("0d09"),O=r("6c56"),j=r("1dd3"),x=function(e){Object(s["a"])(r,e);var t=Object(d["a"])(r);function r(){var e;return Object(c["a"])(this,r),e=t.apply(this,arguments),e.selectedBrands=[],e.selectedCategories=[],e.products=[],e}return Object(i["a"])(r,[{key:"created",value:function(){var e=this;j["a"].fetch().then((function(t){t.data.forEach((function(t){return e.products.push((new O["a"]).deserialize(t))}))}))}},{key:"Products",get:function(){return this.products}},{key:"ABrandIsSelected",get:function(){return"undefined"!==typeof this.selectedBrands&&0!==this.selectedBrands.length}},{key:"ACategoryIsSelected",get:function(){return"undefined"!==typeof this.selectedCategories&&0!==this.selectedCategories.length}},{key:"FilteredProducts",get:function(){var e=this;return this.ABrandIsSelected&&this.ACategoryIsSelected?this.Products.filter((function(t){if(e.selectedBrands.includes(t.brand.id)&&t.categories.some((function(t){return e.selectedCategories.includes(t.id)})))return t})):this.ABrandIsSelected?this.Products.filter((function(t){if(e.selectedBrands.includes(t.brand.id))return t})):this.ACategoryIsSelected?this.Products.filter((function(t){if(t.categories.some((function(t){return e.selectedCategories.includes(t.id)})))return t})):this.Products}}]),r}(Object(u["b"])(C["a"],_["a"]));x=Object(o["a"])([Object(u["a"])({components:{"dl-product-index-card":k}})],x);var w=x,B=w,A=Object(g["a"])(B,a,n,!1,null,"678863f1",null);t["default"]=A.exports},"5a34":function(e,t,r){var a=r("44e7");e.exports=function(e){if(a(e))throw TypeError("The method doesn't accept regular expressions");return e}},"5bbf":function(e,t,r){"use strict";r.d(t,"a",(function(){return u}));var a=r("d4ec"),n=r("bee2"),c=r("262e"),i=r("2caf"),s=r("9ab4"),d=r("2b0e"),o=r("2fe1"),u=function(e){Object(c["a"])(r,e);var t=Object(i["a"])(r);function r(){return Object(a["a"])(this,r),t.apply(this,arguments)}return Object(n["a"])(r,[{key:"Categories",get:function(){return this.$store.state.categories.categories}}]),r}(d["default"]);u=Object(s["a"])([o["a"]],u)},"6c56":function(e,t,r){"use strict";r.d(t,"a",(function(){return l}));r("a4d3"),r("e01a"),r("99af"),r("c740"),r("4160"),r("a434"),r("b0c0"),r("d3b7"),r("3ca3"),r("159b"),r("ddb0");var a=r("d4ec"),n=r("bee2"),c=r("262e"),i=r("2caf"),s=r("5b80"),d=r("439e"),o=r("e293"),u=r("c3f3"),l=function(e){Object(c["a"])(r,e);var t=Object(i["a"])(r);function r(){var e;return Object(a["a"])(this,r),e=t.call(this),e.name="",e.price="",e.description="",e.categories=[],e.media=[],e.brand=new s["a"],e.uploadMedia=new d["a"],e}return Object(n["a"])(r,[{key:"deserialize",value:function(e){return Object.assign(this,e),this.brand=(new s["a"]).deserialize(e.brand),this}},{key:"serialize",value:function(){return{id:this.id,name:this.name,price:this.price,description:this.description,brand:this.brand.serialize(),categories:this.categories,media:this.media}}},{key:"deleteMedia",value:function(e){var t=this,r=this.media.findIndex((function(t){return t===e}));o["a"].post("/product/".concat(this.id,"/media/").concat(e.id),{_method:"DELETE"}).then((function(){t.media.splice(r,1)}))}},{key:"onChangeEvent",value:function(e){this.uploadMedia.onChangeEvent(e),this.storeMedia()}},{key:"onDroppedEvent",value:function(e){this.uploadMedia.onDroppedEvent(e),this.storeMedia()}},{key:"storeMedia",value:function(){var e=this,t=[];this.uploadMedia.getMedia().forEach((function(r){t.push(new Promise((function(t){var a=new FormData;a.append("image",r),a.append("_method","PATCH"),o["a"].post("/product/".concat(e.id,"/media"),a).then((function(r){e.media.push(r.data),t()}))})))})),Promise.all(t).then((function(){e.uploadMedia.clearMedia()}))}}]),r}(u["a"])},ab13:function(e,t,r){var a=r("b622"),n=a("match");e.exports=function(e){var t=/./;try{"/./"[e](t)}catch(r){try{return t[n]=!1,"/./"[e](t)}catch(a){}}return!1}},c740:function(e,t,r){"use strict";var a=r("23e7"),n=r("b727").findIndex,c=r("44d2"),i=r("ae40"),s="findIndex",d=!0,o=i(s);s in[]&&Array(1)[s]((function(){d=!1})),a({target:"Array",proto:!0,forced:d||!o},{findIndex:function(e){return n(this,e,arguments.length>1?arguments[1]:void 0)}}),c(s)},caad:function(e,t,r){"use strict";var a=r("23e7"),n=r("4d64").includes,c=r("44d2"),i=r("ae40"),s=i("indexOf",{ACCESSORS:!0,1:0});a({target:"Array",proto:!0,forced:!s},{includes:function(e){return n(this,e,arguments.length>1?arguments[1]:void 0)}}),c("includes")}}]);
//# sourceMappingURL=chunk-2829ec70.cc19b9d5.js.map