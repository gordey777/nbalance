!function(t){if(!t.JCCatalogSectionRec){var s=function(t){s.superclass.constructor.apply(this,arguments),this.nameNode=BX.create("span",{props:{className:"bx_medium bx_bt_button",id:this.id},text:t.text}),this.buttonNode=BX.create("span",{attrs:{className:t.ownerClass},style:{marginBottom:"0",borderBottom:"0 none transparent"},children:[this.nameNode],events:this.contextEvents}),BX.browser.IsIE()&&this.buttonNode.setAttribute("hideFocus","hidefocus")};BX.extend(s,BX.PopupWindowButton),t.JCCatalogSectionRec=function(t){if(this.productType=0,this.showQuantity=!0,this.showAbsent=!0,this.secondPict=!1,this.showOldPrice=!1,this.showPercent=!1,this.showSkuProps=!1,this.visual={ID:"",PICT_ID:"",SECOND_PICT_ID:"",QUANTITY_ID:"",QUANTITY_UP_ID:"",QUANTITY_DOWN_ID:"",PRICE_ID:"",DSC_PERC:"",SECOND_DSC_PERC:"",DISPLAY_PROP_DIV:"",BASKET_PROP_DIV:""},this.product={checkQuantity:!1,maxQuantity:0,stepQuantity:1,isDblQuantity:!1,canBuy:!0,canSubscription:!0,name:"",pict:{},id:0,addUrl:"",buyUrl:""},this.basketData={useProps:!1,emptyProps:!1,quantity:"quantity",props:"prop",basketUrl:""},this.defaultPict={pict:null,secondPict:null},this.checkQuantity=!1,this.maxQuantity=0,this.stepQuantity=1,this.isDblQuantity=!1,this.canBuy=!0,this.canSubscription=!0,this.precision=6,this.precisionFactor=Math.pow(10,this.precision),this.offers=[],this.offerNum=0,this.treeProps=[],this.obTreeRows=[],this.showCount=[],this.showStart=[],this.selectedValues={},this.obProduct=null,this.obQuantity=null,this.obQuantityUp=null,this.obQuantityDown=null,this.obPict=null,this.obSecondPict=null,this.obPrice=null,this.obTree=null,this.obBuyBtn=null,this.obDscPerc=null,this.obSecondDscPerc=null,this.obSkuProps=null,this.obMeasure=null,this.obPopupWin=null,this.basketUrl="",this.basketParams={},this.treeRowShowSize=5,this.treeEnableArrow={display:"",cursor:"pointer",opacity:1},this.treeDisableArrow={display:"",cursor:"default",opacity:.2},this.lastElement=!1,this.containerHeight=0,this.errorCode=0,"object"==typeof t){switch(this.productType=parseInt(t.PRODUCT_TYPE,10),this.showQuantity=t.SHOW_QUANTITY,this.showAbsent=t.SHOW_ABSENT,this.secondPict=!!t.SECOND_PICT,this.showOldPrice=!!t.SHOW_OLD_PRICE,this.showPercent=!!t.SHOW_DISCOUNT_PERCENT,this.showSkuProps=!!t.SHOW_SKU_PROPS,this.visual=t.VISUAL,this.productType){case 1:case 2:t.PRODUCT&&"object"==typeof t.PRODUCT?(this.showQuantity&&(this.product.checkQuantity=t.PRODUCT.CHECK_QUANTITY,this.product.isDblQuantity=t.PRODUCT.QUANTITY_FLOAT,this.product.checkQuantity&&(this.product.maxQuantity=this.product.isDblQuantity?parseFloat(t.PRODUCT.MAX_QUANTITY):parseInt(t.PRODUCT.MAX_QUANTITY,10)),this.product.stepQuantity=this.product.isDblQuantity?parseFloat(t.PRODUCT.STEP_QUANTITY):parseInt(t.PRODUCT.STEP_QUANTITY,10),this.checkQuantity=this.product.checkQuantity,this.isDblQuantity=this.product.isDblQuantity,this.maxQuantity=this.product.maxQuantity,this.stepQuantity=this.product.stepQuantity,this.isDblQuantity&&(this.stepQuantity=Math.round(this.stepQuantity*this.precisionFactor)/this.precisionFactor)),this.product.canBuy=t.PRODUCT.CAN_BUY,this.product.canSubscription=t.PRODUCT.SUBSCRIPTION,this.canBuy=this.product.canBuy,this.canSubscription=this.product.canSubscription,this.product.name=t.PRODUCT.NAME,this.product.pict=t.PRODUCT.PICT,this.product.id=t.PRODUCT.ID,t.PRODUCT.ADD_URL&&(this.product.addUrl=t.PRODUCT.ADD_URL),t.PRODUCT.BUY_URL&&(this.product.buyUrl=t.PRODUCT.BUY_URL),t.BASKET&&"object"==typeof t.BASKET&&(this.basketData.useProps=!!t.BASKET.ADD_PROPS,this.basketData.emptyProps=!!t.BASKET.EMPTY_PROPS)):this.errorCode=-1;break;case 3:t.OFFERS&&BX.type.isArray(t.OFFERS)?(t.PRODUCT&&"object"==typeof t.PRODUCT&&(this.product.name=t.PRODUCT.NAME,this.product.id=t.PRODUCT.ID),this.offers=t.OFFERS,this.offerNum=0,t.OFFER_SELECTED&&(this.offerNum=parseInt(t.OFFER_SELECTED,10)),isNaN(this.offerNum)&&(this.offerNum=0),t.TREE_PROPS&&(this.treeProps=t.TREE_PROPS),t.DEFAULT_PICTURE&&(this.defaultPict.pict=t.DEFAULT_PICTURE.PICTURE,this.defaultPict.secondPict=t.DEFAULT_PICTURE.PICTURE_SECOND)):this.errorCode=-1;break;default:this.errorCode=-1}t.BASKET&&"object"==typeof t.BASKET&&(t.BASKET.QUANTITY&&(this.basketData.quantity=t.BASKET.QUANTITY),t.BASKET.PROPS&&(this.basketData.props=t.BASKET.PROPS),t.BASKET.BASKET_URL&&(this.basketData.basketUrl=t.BASKET.BASKET_URL)),this.lastElement=!!t.LAST_ELEMENT&&"Y"===t.LAST_ELEMENT}0===this.errorCode&&BX.ready(BX.delegate(this.Init,this))},t.JCCatalogSectionRec.prototype.Init=function(){var s=0,e="",i=null;if(this.obProduct=BX(this.visual.ID),this.obProduct||(this.errorCode=-1),this.obPict=BX(this.visual.PICT_ID),this.obPict||(this.errorCode=-2),this.secondPict&&this.visual.SECOND_PICT_ID&&(this.obSecondPict=BX(this.visual.SECOND_PICT_ID)),this.obPrice=BX(this.visual.PRICE_ID),this.obPrice||(this.errorCode=-16),this.showQuantity&&this.visual.QUANTITY_ID&&(this.obQuantity=BX(this.visual.QUANTITY_ID),this.visual.QUANTITY_UP_ID&&(this.obQuantityUp=BX(this.visual.QUANTITY_UP_ID)),this.visual.QUANTITY_DOWN_ID&&(this.obQuantityDown=BX(this.visual.QUANTITY_DOWN_ID))),3===this.productType){if(this.visual.TREE_ID)for(this.obTree=BX(this.visual.TREE_ID),this.obTree||(this.errorCode=-256),e=this.visual.TREE_ITEM_ID,s=0;s<this.treeProps.length;s++)if(this.obTreeRows[s]={LEFT:BX(e+this.treeProps[s].ID+"_left"),RIGHT:BX(e+this.treeProps[s].ID+"_right"),LIST:BX(e+this.treeProps[s].ID+"_list"),CONT:BX(e+this.treeProps[s].ID+"_cont")},!(this.obTreeRows[s].LEFT&&this.obTreeRows[s].RIGHT&&this.obTreeRows[s].LIST&&this.obTreeRows[s].CONT)){this.errorCode=-512;break}this.visual.QUANTITY_MEASURE&&(this.obMeasure=BX(this.visual.QUANTITY_MEASURE))}if(this.visual.BUY_ID&&(this.obBuyBtn=BX(this.visual.BUY_ID)),this.showPercent&&(this.visual.DSC_PERC&&(this.obDscPerc=BX(this.visual.DSC_PERC)),this.secondPict&&this.visual.SECOND_DSC_PERC&&(this.obSecondDscPerc=BX(this.visual.SECOND_DSC_PERC))),this.showSkuProps&&this.visual.DISPLAY_PROP_DIV&&(this.obSkuProps=BX(this.visual.DISPLAY_PROP_DIV)),0===this.errorCode){switch(this.showQuantity&&(this.obQuantityUp&&BX.bind(this.obQuantityUp,"click",BX.delegate(this.QuantityUp,this)),this.obQuantityDown&&BX.bind(this.obQuantityDown,"click",BX.delegate(this.QuantityDown,this)),this.obQuantity&&BX.bind(this.obQuantity,"change",BX.delegate(this.QuantityChange,this))),this.productType){case 1:break;case 3:if(i=BX.findChildren(this.obTree,{tagName:"li"},!0),i&&0<i.length)for(s=0;s<i.length;s++)BX.bind(i[s],"click",BX.delegate(this.SelectOfferProp,this));for(s=0;s<this.obTreeRows.length;s++)BX.bind(this.obTreeRows[s].LEFT,"click",BX.delegate(this.RowLeft,this)),BX.bind(this.obTreeRows[s].RIGHT,"click",BX.delegate(this.RowRight,this));this.SetCurrent()}this.obBuyBtn&&BX.bind(this.obBuyBtn,"click",BX.delegate(this.Basket,this)),this.lastElement&&(this.containerHeight=parseInt(this.obProduct.parentNode.offsetHeight,10),isNaN(this.containerHeight)&&(this.containerHeight=0),this.setHeight(),BX.bind(t,"resize",BX.delegate(this.checkHeight,this)),BX.bind(this.obProduct.parentNode,"mouseover",BX.delegate(this.setHeight,this)),BX.bind(this.obProduct.parentNode,"mouseout",BX.delegate(this.clearHeight,this)))}},t.JCCatalogSectionRec.prototype.checkHeight=function(){this.containerHeight=parseInt(this.obProduct.parentNode.offsetHeight,10),isNaN(this.containerHeight)&&(this.containerHeight=0)},t.JCCatalogSectionRec.prototype.setHeight=function(){0<this.containerHeight&&BX.adjust(this.obProduct.parentNode,{style:{height:this.containerHeight+"px"}})},t.JCCatalogSectionRec.prototype.clearHeight=function(){BX.adjust(this.obProduct.parentNode,{style:{height:"auto"}})},t.JCCatalogSectionRec.prototype.QuantityUp=function(){var t=0,s=!0;0===this.errorCode&&this.showQuantity&&this.canBuy&&(t=this.isDblQuantity?parseFloat(this.obQuantity.value):parseInt(this.obQuantity.value,10),isNaN(t)||(t+=this.stepQuantity,this.checkQuantity&&t>this.maxQuantity&&(s=!1),s&&(this.isDblQuantity&&(t=Math.round(t*this.precisionFactor)/this.precisionFactor),this.obQuantity.value=t)))},t.JCCatalogSectionRec.prototype.QuantityDown=function(){var t=0,s=!0;0===this.errorCode&&this.showQuantity&&this.canBuy&&(t=this.isDblQuantity?parseFloat(this.obQuantity.value):parseInt(this.obQuantity.value,10),isNaN(t)||(t-=this.stepQuantity,t<this.stepQuantity&&(s=!1),s&&(this.isDblQuantity&&(t=Math.round(t*this.precisionFactor)/this.precisionFactor),this.obQuantity.value=t)))},t.JCCatalogSectionRec.prototype.QuantityChange=function(){var t=0,s=!0;0===this.errorCode&&this.showQuantity&&(this.canBuy?(t=this.isDblQuantity?parseFloat(this.obQuantity.value):parseInt(this.obQuantity.value,10),isNaN(t)?this.obQuantity.value=this.stepQuantity:(this.checkQuantity&&(t>this.maxQuantity?(s=!1,t=this.maxQuantity):t<this.stepQuantity&&(s=!1,t=this.stepQuantity)),s||(this.obQuantity.value=t))):this.obQuantity.value=this.stepQuantity)},t.JCCatalogSectionRec.prototype.QuantitySet=function(t){0===this.errorCode&&(this.canBuy=this.offers[t].CAN_BUY,this.canBuy?(BX.addClass(this.obBuyBtn,"bx_bt_button"),BX.removeClass(this.obBuyBtn,"bx_bt_button_type_2"),this.obBuyBtn.innerHTML=BX.message("MESS_BTN_BUY")):(BX.addClass(this.obBuyBtn,"bx_bt_button_type_2"),BX.removeClass(this.obBuyBtn,"bx_bt_button"),this.obBuyBtn.innerHTML=BX.message("MESS_NOT_AVAILABLE")),this.showQuantity&&(this.isDblQuantity=this.offers[t].QUANTITY_FLOAT,this.checkQuantity=this.offers[t].CHECK_QUANTITY,this.isDblQuantity?(this.maxQuantity=parseFloat(this.offers[t].MAX_QUANTITY),this.stepQuantity=Math.round(parseFloat(this.offers[t].STEP_QUANTITY)*this.precisionFactor)/this.precisionFactor):(this.maxQuantity=parseInt(this.offers[t].MAX_QUANTITY,10),this.stepQuantity=parseInt(this.offers[t].STEP_QUANTITY,10)),this.obQuantity.value=this.stepQuantity,this.obQuantity.disabled=!this.canBuy,this.obMeasure&&(this.offers[t].MEASURE?BX.adjust(this.obMeasure,{html:this.offers[t].MEASURE}):BX.adjust(this.obMeasure,{html:""}))))},t.JCCatalogSectionRec.prototype.SelectOfferProp=function(){var t=0,s="",e="",i=[],o=null,a=BX.proxy_context;if(a&&a.hasAttribute("data-treevalue")&&(e=a.getAttribute("data-treevalue"),i=e.split("_"),this.SearchOfferPropIndex(i[0],i[1])&&(o=BX.findChildren(a.parentNode,{tagName:"li"},!1),o&&0<o.length)))for(t=0;t<o.length;t++)s=o[t].getAttribute("data-onevalue"),s===i[1]?BX.addClass(o[t],"bx_active"):BX.removeClass(o[t],"bx_active")},t.JCCatalogSectionRec.prototype.SearchOfferPropIndex=function(t,s){var e,i,o="",a=!1,h=[],r=-1,n={},u=[];for(e=0;e<this.treeProps.length;e++)if(this.treeProps[e].ID===t){r=e;break}if(-1<r){for(e=0;e<r;e++)o="PROP_"+this.treeProps[e].ID,n[o]=this.selectedValues[o];if(o="PROP_"+this.treeProps[r].ID,a=this.GetRowValues(n,o),!a)return!1;if(!BX.util.in_array(s,a))return!1;for(n[o]=s,e=r+1;e<this.treeProps.length;e++){if(o="PROP_"+this.treeProps[e].ID,a=this.GetRowValues(n,o),!a)return!1;if(this.showAbsent)for(h=[],u=[],u=BX.clone(n,!0),i=0;i<a.length;i++)u[o]=a[i],this.GetCanBuy(u)&&(h[h.length]=a[i]);else h=a;this.selectedValues[o]&&BX.util.in_array(this.selectedValues[o],h)?n[o]=this.selectedValues[o]:n[o]=h[0],this.UpdateRow(e,n[o],a,h)}this.selectedValues=n,this.ChangeInfo()}return!0},t.JCCatalogSectionRec.prototype.RowLeft=function(){var t=0,s="",e=-1,i=BX.proxy_context;if(i&&i.hasAttribute("data-treevalue")){for(s=i.getAttribute("data-treevalue"),t=0;t<this.treeProps.length;t++)if(this.treeProps[t].ID===s){e=t;break}-1<e&&this.treeRowShowSize<this.showCount[e]&&(0>this.showStart[e]&&(this.showStart[e]++,BX.adjust(this.obTreeRows[e].LIST,{style:{marginLeft:20*this.showStart[e]+"%"}}),BX.adjust(this.obTreeRows[e].RIGHT,{style:this.treeEnableArrow})),0<=this.showStart[e]&&BX.adjust(this.obTreeRows[e].LEFT,{style:this.treeDisableArrow}))}},t.JCCatalogSectionRec.prototype.RowRight=function(){var t=0,s="",e=-1,i=BX.proxy_context;if(i&&i.hasAttribute("data-treevalue")){for(s=i.getAttribute("data-treevalue"),t=0;t<this.treeProps.length;t++)if(this.treeProps[t].ID===s){e=t;break}-1<e&&this.treeRowShowSize<this.showCount[e]&&(this.treeRowShowSize-this.showStart[e]<this.showCount[e]&&(this.showStart[e]--,BX.adjust(this.obTreeRows[e].LIST,{style:{marginLeft:20*this.showStart[e]+"%"}}),BX.adjust(this.obTreeRows[e].LEFT,{style:this.treeEnableArrow})),this.treeRowShowSize-this.showStart[e]>=this.showCount[e]&&BX.adjust(this.obTreeRows[e].RIGHT,{style:this.treeDisableArrow}))}},t.JCCatalogSectionRec.prototype.UpdateRow=function(t,s,e,i){var o=0,a=0,h="",r=0,n="",u={},c=!1,l=!1,p=!1,b=0,d=this.treeEnableArrow,P=this.treeEnableArrow,T=0,f=null;if(-1<t&&t<this.obTreeRows.length&&(f=BX.findChildren(this.obTreeRows[t].LIST,{tagName:"li"},!1),f&&0<f.length)){for(c="PICT"===this.treeProps[t].SHOW_MODE,r=e.length,l=this.treeRowShowSize<r,n=l?100/r+"%":"20%",u={props:{className:""},style:{width:n}},c&&(u.style.paddingTop=n),o=0;o<f.length;o++)h=f[o].getAttribute("data-onevalue"),p=h===s,BX.util.in_array(h,i)?u.props.className=p?"bx_active":"":u.props.className=p?"bx_active bx_missing":"bx_missing",u.style.display="none",BX.util.in_array(h,e)&&(u.style.display="",p&&(b=a),a++),BX.adjust(f[o],u);u={style:{width:(l?20*r:100)+"%",marginLeft:"0%"}},c?BX.adjust(this.obTreeRows[t].CONT,{props:{className:l?"bx_item_detail_scu full":"bx_item_detail_scu"}}):BX.adjust(this.obTreeRows[t].CONT,{props:{className:l?"bx_item_detail_size full":"bx_item_detail_size"}}),l?(b+1===r&&(P=this.treeDisableArrow),this.treeRowShowSize<=b&&(T=this.treeRowShowSize-b-1,u.style.marginLeft=20*T+"%"),0===T&&(d=this.treeDisableArrow),BX.adjust(this.obTreeRows[t].LEFT,{style:d}),BX.adjust(this.obTreeRows[t].RIGHT,{style:P})):(BX.adjust(this.obTreeRows[t].LEFT,{style:{display:"none"}}),BX.adjust(this.obTreeRows[t].RIGHT,{style:{display:"none"}})),BX.adjust(this.obTreeRows[t].LIST,u),this.showCount[t]=r,this.showStart[t]=T}},t.JCCatalogSectionRec.prototype.GetRowValues=function(t,s){var e,i=0,o=[],a=!1,h=!0;if(0===t.length){for(i=0;i<this.offers.length;i++)BX.util.in_array(this.offers[i].TREE[s],o)||(o[o.length]=this.offers[i].TREE[s]);a=!0}else for(i=0;i<this.offers.length;i++){h=!0;for(e in t)if(t[e]!==this.offers[i].TREE[e]){h=!1;break}h&&(BX.util.in_array(this.offers[i].TREE[s],o)||(o[o.length]=this.offers[i].TREE[s]),a=!0)}return!!a&&o},t.JCCatalogSectionRec.prototype.GetCanBuy=function(t){var s,e=0,i=!1,o=!0;for(e=0;e<this.offers.length;e++){o=!0;for(s in t)if(t[s]!==this.offers[e].TREE[s]){o=!1;break}if(o&&this.offers[e].CAN_BUY){i=!0;break}}return i},t.JCCatalogSectionRec.prototype.SetCurrent=function(){var t=0,s=0,e=[],i="",o=!1,a={},h=[],r=this.offers[this.offerNum].TREE;for(t=0;t<this.treeProps.length&&(i="PROP_"+this.treeProps[t].ID,o=this.GetRowValues(a,i),o);t++){if(BX.util.in_array(r[i],o)?a[i]=r[i]:(a[i]=o[0],this.offerNum=0),this.showAbsent)for(e=[],h=[],h=BX.clone(a,!0),s=0;s<o.length;s++)h[i]=o[s],this.GetCanBuy(h)&&(e[e.length]=o[s]);else e=o;this.UpdateRow(t,a[i],o,e)}this.selectedValues=a,this.ChangeInfo()},t.JCCatalogSectionRec.prototype.ChangeInfo=function(){var t,s=0,e=-1,i={},o=!0,a="";for(s=0;s<this.offers.length;s++){o=!0;for(t in this.selectedValues)if(this.selectedValues[t]!==this.offers[s].TREE[t]){o=!1;break}if(o){e=s;break}}-1<e&&(this.obPict&&(this.offers[e].PREVIEW_PICTURE?BX.adjust(this.obPict,{style:{backgroundImage:"url("+this.offers[e].PREVIEW_PICTURE.SRC+")"}}):BX.adjust(this.obPict,{style:{backgroundImage:"url("+this.defaultPict.pict.SRC+")"}})),this.secondPict&&this.obSecondPict&&(this.offers[e].PREVIEW_PICTURE_SECOND?BX.adjust(this.obSecondPict,{style:{backgroundImage:"url("+this.offers[e].PREVIEW_PICTURE_SECOND.SRC+")"}}):this.offers[e].PREVIEW_PICTURE.SRC?BX.adjust(this.obSecondPict,{style:{backgroundImage:"url("+this.offers[e].PREVIEW_PICTURE.SRC+")"}}):this.defaultPict.secondPict?BX.adjust(this.obSecondPict,{style:{backgroundImage:"url("+this.defaultPict.secondPict.SRC+")"}}):BX.adjust(this.obSecondPict,{style:{backgroundImage:"url("+this.defaultPict.pict.SRC+")"}})),this.showSkuProps&&this.obSkuProps&&(0===this.offers[e].DISPLAY_PROPERTIES.length?BX.adjust(this.obSkuProps,{style:{display:"none"},html:""}):BX.adjust(this.obSkuProps,{style:{display:""},html:this.offers[e].DISPLAY_PROPERTIES})),this.obPrice&&(a=this.offers[e].PRICE.PRINT_DISCOUNT_VALUE,this.showOldPrice&&this.offers[e].PRICE.DISCOUNT_VALUE!==this.offers[e].PRICE.VALUE&&(a+=" <span>"+this.offers[e].PRICE.PRINT_VALUE+"</span>"),BX.adjust(this.obPrice,{html:a}),this.showPercent&&(i=this.offers[e].PRICE.DISCOUNT_VALUE!==this.offers[e].PRICE.VALUE?{style:{display:""},html:this.offers[e].PRICE.DISCOUNT_DIFF_PERCENT}:{style:{display:"none"},html:""},this.obDscPerc&&BX.adjust(this.obDscPerc,i),this.obSecondDscPerc&&BX.adjust(this.obSecondDscPerc,i))),this.offerNum=e,this.QuantitySet(this.offerNum))},t.JCCatalogSectionRec.prototype.InitBasketUrl=function(){switch(this.productType){case 1:case 2:this.basketUrl=this.product.addUrl;break;case 3:this.basketUrl=this.offers[this.offerNum].ADD_URL}this.basketParams={ajax_basket:"Y"},this.showQuantity&&(this.basketParams[this.basketData.quantity]=this.obQuantity.value)},t.JCCatalogSectionRec.prototype.FillBasketProps=function(){if(this.visual.BASKET_PROP_DIV){var t=0,s=null,e=!1,i=null;if(this.basketData.useProps&&!this.basketData.emptyProps?this.obPopupWin&&this.obPopupWin.contentContainer&&(i=this.obPopupWin.contentContainer):i=BX(this.visual.BASKET_PROP_DIV),i){if(s=i.getElementsByTagName("select"),s&&s.length)for(t=0;t<s.length;t++)if(!s[t].disabled)switch(s[t].type.toLowerCase()){case"select-one":this.basketParams[s[t].name]=s[t].value,e=!0}if(s=i.getElementsByTagName("input"),s&&s.length)for(t=0;t<s.length;t++)if(!s[t].disabled)switch(s[t].type.toLowerCase()){case"hidden":this.basketParams[s[t].name]=s[t].value,e=!0;break;case"radio":s[t].checked&&(this.basketParams[s[t].name]=s[t].value,e=!0)}e||(this.basketParams[this.basketData.props]=[],this.basketParams[this.basketData.props][0]=0)}}},t.JCCatalogSectionRec.prototype.SendToBasket=function(){this.canBuy&&(this.InitBasketUrl(),this.FillBasketProps(),BX.ajax.loadJSON(this.basketUrl,this.basketParams,BX.delegate(this.BasketResult,this)))},t.JCCatalogSectionRec.prototype.Basket=function(){var t="";if(this.canBuy)switch(this.productType){case 1:case 2:this.basketData.useProps&&!this.basketData.emptyProps?(this.InitPopupWindow(),this.obPopupWin.setTitleBar({content:BX.create("div",{style:{marginRight:"30px",whiteSpace:"nowrap"},text:BX.message("TITLE_BASKET_PROPS")})}),BX(this.visual.BASKET_PROP_DIV)&&(t=BX(this.visual.BASKET_PROP_DIV).innerHTML),this.obPopupWin.setContent(t),this.obPopupWin.setButtons([new s({ownerClass:this.obProduct.parentNode.parentNode.parentNode.className,text:BX.message("BTN_MESSAGE_SEND_PROPS"),events:{click:BX.delegate(this.SendToBasket,this)}})]),this.obPopupWin.show()):this.SendToBasket();break;case 3:this.SendToBasket()}},t.JCCatalogSectionRec.prototype.BasketResult=function(t){var e="",i="",o="",a=!0,h=[];if(this.obPopupWin&&this.obPopupWin.close(),"object"!=typeof t)return!1;if(a="OK"===t.STATUS){switch(BX.onCustomEvent("OnBasketChange"),i=this.product.name,this.productType){case 1:case 2:o=this.product.pict.SRC;break;case 3:o=this.offers[this.offerNum].PREVIEW_PICTURE?this.offers[this.offerNum].PREVIEW_PICTURE.SRC:this.defaultPict.pict.SRC}e='<div style="width: 96%; margin: 10px 2%; text-align: center;"><img src="'+o+'" height="130"><p>'+i+"</p></div>",h=[new s({ownerClass:this.obProduct.parentNode.parentNode.parentNode.className,text:BX.message("BTN_MESSAGE_BASKET_REDIRECT"),events:{click:BX.delegate(function(){location.href=this.basketData.basketUrl?this.basketData.basketUrl:BX.message("BASKET_URL")},this)}})]}else e=t.MESSAGE?t.MESSAGE:BX.message("BASKET_UNKNOWN_ERROR"),h=[new s({ownerClass:this.obProduct.parentNode.parentNode.parentNode.className,text:BX.message("BTN_MESSAGE_CLOSE"),events:{click:BX.delegate(this.obPopupWin.close,this.obPopupWin)}})];this.InitPopupWindow(),this.obPopupWin.setTitleBar({content:BX.create("div",{style:{marginRight:"30px",whiteSpace:"nowrap"},text:a?BX.message("TITLE_SUCCESSFUL"):BX.message("TITLE_ERROR")})}),this.obPopupWin.setContent(e),this.obPopupWin.setButtons(h),this.obPopupWin.show()},t.JCCatalogSectionRec.prototype.InitPopupWindow=function(){this.obPopupWin||(this.obPopupWin=BX.PopupWindowManager.create("CatalogSectionBasket_"+this.visual.ID,null,{autoHide:!1,offsetLeft:0,offsetTop:0,overlay:!0,closeByEsc:!0,titleBar:!0,closeIcon:{top:"10px",right:"10px"}}))}}}(window);
//# sourceMappingURL=maps/script(3).js.map
