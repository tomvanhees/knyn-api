(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-773c6784"],{"202b":function(e,t,a){"use strict";a.d(t,"a",(function(){return l}));a("99af"),a("c740"),a("4160"),a("a434"),a("b0c0"),a("d3b7"),a("3ca3"),a("159b"),a("ddb0");var n=a("d4ec"),r=a("bee2"),i=a("262e"),c=a("2caf"),u=a("439e"),o=a("e293"),s=a("c3f3"),l=function(e){Object(i["a"])(a,e);var t=Object(c["a"])(a);function a(){var e;return Object(n["a"])(this,a),e=t.call(this),e.name="",e.cover="",e.id=0,e.media=[],e.slug="",e.uploadMedia=new u["a"],e}return Object(r["a"])(a,[{key:"onChangeEvent",value:function(e){this.uploadMedia.onChangeEvent(e),this.storeMedia()}},{key:"onDroppedEvent",value:function(e){this.uploadMedia.onDroppedEvent(e),this.storeMedia()}},{key:"storeMedia",value:function(){var e=this,t=[];this.uploadMedia.getMedia().forEach((function(a){t.push(new Promise((function(t){var n=new FormData;n.append("image",a),n.append("_method","PATCH"),o["a"].post("/gallery/".concat(e.id,"/media"),n).then((function(a){e.media.push(a.data),t()}))})))})),Promise.all(t).then((function(){e.uploadMedia.clearMedia()}))}},{key:"deleteMedia",value:function(e){var t=this,a=this.media.findIndex((function(t){return t===e}));o["a"].post("/gallery/".concat(this.id,"/media/").concat(e.id),{_method:"DELETE"}).then((function(){t.media.splice(a,1)}))}}]),a}(s["a"])},"2ac8":function(e,t,a){"use strict";a.r(t);var n=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("h1",[e._v(" "+e._s(e.hasGallery?e.gallery.name:"Inspiratie toevoegen")+" ")]),a("div",{staticClass:"container"},[a("div",{staticClass:"row mb-5"},[a("div",{staticClass:"col-12"},[a("div",{staticClass:"card"},[a("div",{staticClass:"card-body d-flex justify-content-between"},[a("div",{staticClass:"form-group"},[e.hasGallery?e._e():a("div",{staticClass:"input-group"},[a("input",{directives:[{name:"model",rawName:"v-model",value:e.gallery.name,expression:"gallery.name"}],staticClass:"form-control",attrs:{placeholder:"Gallerijnaam",type:"text"},domProps:{value:e.gallery.name},on:{input:function(t){t.target.composing||e.$set(e.gallery,"name",t.target.value)}}}),a("div",{staticClass:"input-group-append"},[a("button",{staticClass:"btn btn-outline-primary",on:{click:e.createGallery}},[e._v(" aanmaken ")])])])])]),e.hasGallery?a("div",{staticClass:"card-body"},[a("div",{staticClass:"d-flex justify-content-center"},[a("label",{staticClass:"large-add-button",attrs:{for:"image"},on:{dragover:function(e){e.preventDefault()},drop:function(t){return e.gallery.onDroppedEvent(t)}}},[a("span",[e._v("+")]),a("input",{ref:"upload",staticStyle:{opacity:"0",position:"absolute"},attrs:{id:"image",multiple:"",type:"file"},on:{change:function(t){return e.gallery.onChangeEvent(t)}}}),a("div",{staticClass:"loading"})])])]):e._e(),a("div",{staticClass:"card-body"},[a("div",{staticClass:"image-container"},e._l(e.gallery.media,(function(t){return a("dl-gallery-image",{key:t.id,attrs:{item:t},on:{"remove-media":function(a){return e.gallery.deleteMedia(t)}}})})),1)])])])])])])},r=[],i=a("d4ec"),c=a("bee2"),u=a("262e"),o=a("2caf"),s=a("9ab4"),l=a("2b0e"),d=a("2fe1"),f=a("e02d"),p=a("67bd"),v=a("202b"),h=function(e){Object(u["a"])(a,e);var t=Object(o["a"])(a);function a(){var e;return Object(i["a"])(this,a),e=t.apply(this,arguments),e.gallery=new v["a"],e}return Object(c["a"])(a,[{key:"createGallery",value:function(){var e=this;p["a"].create(this.gallery).then((function(t){e.gallery=(new v["a"]).deserialize(t.data)}))}},{key:"hasGallery",get:function(){return 0!==this.gallery.id}}]),a}(l["default"]);h=Object(s["a"])([Object(d["a"])({components:{"dl-gallery-image":f["a"]}})],h);var m=h,b=m,g=(a("b0a5"),a("2877")),y=Object(g["a"])(b,n,r,!1,null,"51e1a7a1",null);t["default"]=y.exports},"439e":function(e,t,a){"use strict";a.d(t,"a",(function(){return i}));a("4160"),a("159b");var n=a("d4ec"),r=a("bee2"),i=function(){function e(){Object(n["a"])(this,e),this.media=[]}return Object(r["a"])(e,[{key:"onChangeEvent",value:function(e){this.setMedia(e.target.files)}},{key:"onDroppedEvent",value:function(e){e.stopPropagation(),e.preventDefault(),this.setMedia(e.dataTransfer.files)}},{key:"setMedia",value:function(e){var t=this;e.forEach((function(e){t.media.push(e)}))}},{key:"getMedia",value:function(){return this.media}},{key:"clearMedia",value:function(){this.media=[]}}]),e}()},"67bd":function(e,t,a){"use strict";a.d(t,"a",(function(){return u}));a("96cf");var n=a("1da1"),r=a("d4ec"),i=a("bee2"),c=a("e293"),u=function(){function e(){Object(r["a"])(this,e)}return Object(i["a"])(e,null,[{key:"fetch",value:function(){var e=Object(n["a"])(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",c["a"].get("/gallery"));case 1:case"end":return e.stop()}}),e)})));function t(){return e.apply(this,arguments)}return t}()},{key:"find",value:function(){var e=Object(n["a"])(regeneratorRuntime.mark((function e(t){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",c["a"].get("/gallery/".concat(t)));case 1:case"end":return e.stop()}}),e)})));function t(t){return e.apply(this,arguments)}return t}()},{key:"create",value:function(){var e=Object(n["a"])(regeneratorRuntime.mark((function e(t){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",c["a"].post("/gallery",{content:t.serialize()}));case 1:case"end":return e.stop()}}),e)})));function t(t){return e.apply(this,arguments)}return t}()},{key:"update",value:function(){var e=Object(n["a"])(regeneratorRuntime.mark((function e(t){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",c["a"].post("/gallery/".concat(t.id),{content:t.serialize(),_method:"PATCH"}));case 1:case"end":return e.stop()}}),e)})));function t(t){return e.apply(this,arguments)}return t}()},{key:"delete",value:function(){var e=Object(n["a"])(regeneratorRuntime.mark((function e(t){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",c["a"].post("/gallery/".concat(t.id),{_method:"DELETE"}));case 1:case"end":return e.stop()}}),e)})));function t(t){return e.apply(this,arguments)}return t}()}]),e}()},b0a5:function(e,t,a){"use strict";var n=a("fef6"),r=a.n(n);r.a},c740:function(e,t,a){"use strict";var n=a("23e7"),r=a("b727").findIndex,i=a("44d2"),c=a("ae40"),u="findIndex",o=!0,s=c(u);u in[]&&Array(1)[u]((function(){o=!1})),n({target:"Array",proto:!0,forced:o||!s},{findIndex:function(e){return r(this,e,arguments.length>1?arguments[1]:void 0)}}),i(u)},e02d:function(e,t,a){"use strict";var n=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"card m-2",staticStyle:{width:"250px"}},[a("img",{staticClass:"card-img-top",attrs:{src:e.item.path,alt:""},on:{error:e.imageUrlAlt}}),a("div",{staticClass:"position-absolute",staticStyle:{top:"0",right:"0"}},[a("button",{staticClass:"btn btn-outline-delete btn-sm",on:{click:e.removeMedia}},[a("span",[e._v("x")])])])])},r=[],i=a("d4ec"),c=a("bee2"),u=a("262e"),o=a("2caf"),s=a("9ab4"),l=a("2b0e"),d=a("2fe1"),f=l["default"].extend({props:{item:{type:Object,required:!0}}}),p=function(e){Object(u["a"])(a,e);var t=Object(o["a"])(a);function a(){return Object(i["a"])(this,a),t.apply(this,arguments)}return Object(c["a"])(a,[{key:"removeMedia",value:function(){this.$emit("remove-media",this.item)}},{key:"imageUrlAlt",value:function(e){e.target.src="https://picsum.photos/250/250"}}]),a}(Object(d["b"])(f));p=Object(s["a"])([d["a"]],p);var v=p,h=v,m=a("2877"),b=Object(m["a"])(h,n,r,!1,null,"53dc3b1a",null);t["a"]=b.exports},fef6:function(e,t,a){}}]);
//# sourceMappingURL=chunk-773c6784.b31aef6c.js.map