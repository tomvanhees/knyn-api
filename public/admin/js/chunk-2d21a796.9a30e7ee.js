(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d21a796"],{bc54:function(e,s,t){"use strict";t.r(s);var a=function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("div",[t("h1",[e._v("Vraag aanmaken")]),t("div",{staticClass:"container"},[t("div",{staticClass:"row"},[t("div",{staticClass:"col-12"},[t("div",{staticClass:"card"},[t("div",{staticClass:"card-body"},[t("div",{staticClass:"form-group row"},[t("label",{staticClass:"col-3",attrs:{for:""}},[e._v("Vraag")]),t("div",{staticClass:"col-9"},[t("input",{directives:[{name:"model",rawName:"v-model",value:e.feedback.question,expression:"feedback.question"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:e.feedback.question},on:{input:function(s){s.target.composing||e.$set(e.feedback,"question",s.target.value)}}})])]),e._l(e.feedback.answers,(function(s,a){return t("div",{key:a,staticClass:"form-group row"},[t("label",{staticClass:"col-2 offset-1",attrs:{for:""}},[e._v("Antwoord "+e._s(a+1))]),t("div",{staticClass:"col-8"},[t("input",{directives:[{name:"model",rawName:"v-model",value:e.feedback.answers[a].answer,expression:"feedback.answers[index].answer"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:e.feedback.answers[a].answer},on:{input:function(s){s.target.composing||e.$set(e.feedback.answers[a],"answer",s.target.value)}}})]),t("div",{staticClass:"col-1"},[t("button",{staticClass:"btn btn-outline-delete btn-sm",on:{click:function(s){return e.removeAnswer(a)}}},[t("span",[e._v("x")])])])])})),t("div",{staticClass:"form-group d-flex justify-content-center"},[t("div",{staticClass:"small-add-button",on:{click:e.addAnswer}},[t("span",[e._v("+")])])]),t("div",{staticClass:"form-group"},[t("button",{staticClass:"btn btn-outline-primary",on:{click:e.createQuestion}},[e._v("Aanmaken")])])],2)])])])])])},n=[],o=(t("a434"),t("1c03")),i={name:"Create",data:function(){return{feedback:{question:"",answers:[]}}},methods:{addAnswer:function(){this.feedback.answers.push({id:Date.now(),answer:""})},removeAnswer:function(e){this.feedback.answers.splice(e,1)},createQuestion:function(){var e=this;o["a"].post("/feedback/questions",{question:this.feedback.question,answers:this.feedback.answers}).then((function(){e.$router.push("/feedback")}))}}},r=i,c=t("2877"),d=Object(c["a"])(r,a,n,!1,null,"ddea9f64",null);s["default"]=d.exports}}]);
//# sourceMappingURL=chunk-2d21a796.9a30e7ee.js.map