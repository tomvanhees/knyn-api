(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2c277159"],{"39cd":function(t,e,a){"use strict";a.r(e);var n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",[a("h1",[t._v(" "+t._s(t.gallery.name)+" ")]),a("div",{staticClass:"container"},[a("div",{staticClass:"row mb-5"},[a("div",{staticClass:"col-12"},[a("div",{staticClass:"card"},[a("div",{staticClass:"card-body d-flex justify-content-between"},[a("div",{staticClass:"form-group"},[a("div",{staticClass:"input-group"},[a("input",{directives:[{name:"model",rawName:"v-model",value:t.gallery.name,expression:"gallery.name"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.gallery.name},on:{input:function(e){e.target.composing||t.$set(t.gallery,"name",e.target.value)}}}),a("div",{staticClass:"input-group-append"},[a("button",{staticClass:"btn btn-outline-primary",on:{click:t.updateGallery}},[t._v("aanpassen")])])])]),a("div",{staticClass:"form-group"},[a("button",{staticClass:"btn btn-outline-danger btn-block",on:{click:t.deleteGallery}},[t._v("Gallerij verwijderen")])])]),a("div",{staticClass:"card-body"},[a("div",{staticClass:"d-flex justify-content-center"},[a("label",{staticClass:"large-add-button",attrs:{for:"image"},on:{dragover:function(t){t.preventDefault()},drop:t.onImageDrop}},[a("span",[t._v("+")]),a("input",{ref:"upload",staticStyle:{opacity:"0",position:"absolute"},attrs:{id:"image",type:"file",multiple:""},on:{change:t.onImageChange}}),a("div",{staticClass:"loading",style:t.ProgressbarProgression})])])]),a("div",{staticClass:"card-body"},[a("div",{staticClass:"image-container"},t._l(t.gallery.media,(function(e){return a("dl-gallery-image",{key:e.id,attrs:{item:e},on:{"remove-media":t.removeMedia}})})),1)])])])])])])},i=[],r=(a("99af"),a("c740"),a("a434"),a("b0c0"),a("96cf"),a("1da1")),s=a("1c03"),l=a("e02d"),o=a("ece9"),c={name:"GalleryShow",components:{"dl-gallery-image":l["a"]},mixins:[o["a"]],data:function(){return{id:this.$route.params.id,gallery:{name:"",media:[]}}},methods:{getGallery:function(){var t=this;s["a"].get("/gallery/".concat(this.$route.params.id)).then((function(e){t.gallery=e.data}))},updateGallery:function(){s["a"].post("/gallery/".concat(this.gallery.id),{name:this.gallery.name,_method:"PATCH"}).then((function(t){console.log(t.data)}))},deleteGallery:function(){var t=this;s["a"].post("/gallery/".concat(this.gallery.id),{_method:"DELETE"}).then((function(){t.$router.push("/inspiratie")}))},uploadImage:function(t){var e=this;return Object(r["a"])(regeneratorRuntime.mark((function a(){var n,i;return regeneratorRuntime.wrap((function(a){while(1)switch(a.prev=a.next){case 0:return n=new FormData,n.append("image",t),n.append("_method","PATCH"),a.next=5,s["a"].post("/gallery/".concat(e.$route.params.id,"/media"),n).then((function(t){e.gallery.media.push(t.data)}));case 5:return i=a.sent,a.abrupt("return",i);case 7:case"end":return a.stop()}}),a)})))()},removeMedia:function(t){var e=this,a=this.gallery.media.findIndex((function(e){return e===t}));s["a"].post("/gallery/".concat(this.$route.params.id,"/media/").concat(t.id),{_method:"DELETE"}).then((function(){e.gallery.media.splice(a,1)}))}},created:function(){this.getGallery()}},d=c,u=(a("e487"),a("2877")),m=Object(u["a"])(d,n,i,!1,null,"208f267e",null);e["default"]=m.exports},"3f2c":function(t,e,a){},c740:function(t,e,a){"use strict";var n=a("23e7"),i=a("b727").findIndex,r=a("44d2"),s=a("ae40"),l="findIndex",o=!0,c=s(l);l in[]&&Array(1)[l]((function(){o=!1})),n({target:"Array",proto:!0,forced:o||!c},{findIndex:function(t){return i(this,t,arguments.length>1?arguments[1]:void 0)}}),r(l)},e02d:function(t,e,a){"use strict";var n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"card m-2",staticStyle:{width:"250px"}},[a("img",{staticClass:"card-img-top",attrs:{src:t.item.path,alt:""},on:{error:t.imageUrlAlt}}),a("div",{staticClass:"position-absolute",staticStyle:{top:"0",right:"0"}},[a("button",{staticClass:"btn btn-outline-delete btn-sm",on:{click:t.removeMedia}},[a("span",[t._v("x")])])])])},i=[],r={name:"GalleryImage",props:{item:{type:Object,required:!0}},methods:{removeMedia:function(){this.$emit("remove-media",this.item)},imageUrlAlt:function(t){t.target.src="https://picsum.photos/250/250"}}},s=r,l=a("2877"),o=Object(l["a"])(s,n,i,!1,null,"0a9142a0",null);e["a"]=o.exports},e487:function(t,e,a){"use strict";var n=a("3f2c"),i=a.n(n);i.a}}]);
//# sourceMappingURL=chunk-2c277159.55fd9ee4.js.map