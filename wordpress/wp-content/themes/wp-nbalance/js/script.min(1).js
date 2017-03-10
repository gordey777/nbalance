function JCTitleSearch(t){var e=this;this.arParams={AJAX_PAGE:t.AJAX_PAGE,CONTAINER_ID:t.CONTAINER_ID,INPUT_ID:t.INPUT_ID,MIN_QUERY_LEN:parseInt(t.MIN_QUERY_LEN)},t.WAIT_IMAGE&&(this.arParams.WAIT_IMAGE=t.WAIT_IMAGE),t.MIN_QUERY_LEN<=0&&(t.MIN_QUERY_LEN=1),this.cache=[],this.cache_key=null,this.startText="",this.running=!1,this.currentRow=-1,this.RESULT=null,this.CONTAINER=null,this.INPUT=null,this.WAIT=null,this.ShowResult=function(t){BX.type.isString(t)&&(e.RESULT.innerHTML=t),e.RESULT.style.display=""!==e.RESULT.innerHTML?"block":"none";var s,i,n=e.adjustResultNode(),a=BX.findChild(e.RESULT,{tag:"table","class":"title-search-result"},!0);if(a&&(i=BX.findChild(a,{tag:"th"},!0)),i){var l=BX.pos(a);l.width=l.right-l.left;var r=BX.pos(i);r.width=r.right-r.left,i.style.width=r.width+"px",e.RESULT.style.width=n.width+r.width+"px",e.RESULT.style.left=n.left-r.width-1+"px",l.width-r.width>n.width&&(e.RESULT.style.width=n.width+r.width-1+"px"),l=BX.pos(a),s=BX.pos(e.RESULT),s.right>l.right&&(e.RESULT.style.width=l.right-l.left+"px")}var o;a&&(o=BX.findChild(e.RESULT,{"class":"title-search-fader"},!0)),o&&i&&(s=BX.pos(e.RESULT),o.style.left=s.right-s.left-18+"px",o.style.width="18px",o.style.top="0px",o.style.height=s.bottom-s.top+"px",o.style.display="block")},this.onKeyPress=function(t){var s=BX.findChild(e.RESULT,{tag:"table","class":"title-search-result"},!0);if(!s)return!1;var i,n=s.rows.length;switch(t){case 27:return e.RESULT.style.display="none",e.currentRow=-1,e.UnSelectAll(),!0;case 40:"none"==e.RESULT.style.display&&(e.RESULT.style.display="block");var a=-1;for(i=0;i<n;i++)if(!BX.findChild(s.rows[i],{"class":"title-search-separator"},!0)){if(a==-1&&(a=i),e.currentRow<i){e.currentRow=i;break}"title-search-selected"==s.rows[i].className&&(s.rows[i].className="")}return i==n&&e.currentRow!=i&&(e.currentRow=a),s.rows[e.currentRow].className="title-search-selected",!0;case 38:"none"==e.RESULT.style.display&&(e.RESULT.style.display="block");var l=-1;for(i=n-1;i>=0;i--)if(!BX.findChild(s.rows[i],{"class":"title-search-separator"},!0)){if(l==-1&&(l=i),e.currentRow>i){e.currentRow=i;break}"title-search-selected"==s.rows[i].className&&(s.rows[i].className="")}return i<0&&e.currentRow!=i&&(e.currentRow=l),s.rows[e.currentRow].className="title-search-selected",!0;case 13:if("block"==e.RESULT.style.display)for(i=0;i<n;i++)if(e.currentRow==i&&!BX.findChild(s.rows[i],{"class":"title-search-separator"},!0)){var r=BX.findChild(s.rows[i],{tag:"a"},!0);if(r)return window.location=r.href,!0}return!1}return!1},this.onTimeout=function(){e.onChange(function(){setTimeout(e.onTimeout,500)})},this.onChange=function(t){if(!e.running){if(e.running=!0,e.INPUT.value!=e.oldValue&&e.INPUT.value!=e.startText)if(e.oldValue=e.INPUT.value,e.INPUT.value.length>=e.arParams.MIN_QUERY_LEN){if(e.cache_key=e.arParams.INPUT_ID+"|"+e.INPUT.value,null==e.cache[e.cache_key]){if(e.WAIT){var s=BX.pos(e.INPUT),i=s.bottom-s.top-2;e.WAIT.style.top=s.top+1+"px",e.WAIT.style.height=i+"px",e.WAIT.style.width=i+"px",e.WAIT.style.left=s.right-i+2+"px",e.WAIT.style.display="block"}return void BX.ajax.post(e.arParams.AJAX_PAGE,{ajax_call:"y",INPUT_ID:e.arParams.INPUT_ID,q:e.INPUT.value,l:e.arParams.MIN_QUERY_LEN},function(s){e.cache[e.cache_key]=s,e.ShowResult(s),e.currentRow=-1,e.EnableMouseEvents(),e.WAIT&&(e.WAIT.style.display="none"),t&&t(),e.running=!1})}e.ShowResult(e.cache[e.cache_key]),e.currentRow=-1,e.EnableMouseEvents()}else e.RESULT.style.display="none",e.currentRow=-1,e.UnSelectAll();t&&t(),e.running=!1}},this.UnSelectAll=function(){var t=BX.findChild(e.RESULT,{tag:"table","class":"title-search-result"},!0);if(t)for(var s=t.rows.length,i=0;i<s;i++)t.rows[i].className=""},this.EnableMouseEvents=function(){var t=BX.findChild(e.RESULT,{tag:"table","class":"title-search-result"},!0);if(t)for(var s=t.rows.length,i=0;i<s;i++)BX.findChild(t.rows[i],{"class":"title-search-separator"},!0)||(t.rows[i].id="row_"+i,t.rows[i].onmouseover=function(t){e.currentRow!=this.id.substr(4)&&(e.UnSelectAll(),this.className="title-search-selected",e.currentRow=this.id.substr(4))},t.rows[i].onmouseout=function(t){this.className="",e.currentRow=-1})},this.onFocusLost=function(t){setTimeout(function(){e.RESULT.style.display="none"},250)},this.onFocusGain=function(){e.RESULT.innerHTML.length&&e.ShowResult()},this.onKeyDown=function(t){if(t||(t=window.event),"block"==e.RESULT.style.display&&e.onKeyPress(t.keyCode))return BX.PreventDefault(t)},this.adjustResultNode=function(){var t,s=BX.findParent(e.CONTAINER,BX.is_fixed);return s?(e.RESULT.style.position="fixed",e.RESULT.style.zIndex=BX.style(s,"z-index")+2,t=BX.pos(e.CONTAINER,!0)):(e.RESULT.style.position="absolute",t=BX.pos(e.CONTAINER)),t.width=t.right-t.left,e.RESULT.style.top=t.bottom+2+"px",e.RESULT.style.left=t.left+"px",e.RESULT.style.width=t.width+"px",t},this._onContainerLayoutChange=function(){"none"!==e.RESULT.style.display&&""!==e.RESULT.innerHTML&&e.adjustResultNode()},this.Init=function(){this.CONTAINER=document.getElementById(this.arParams.CONTAINER_ID),BX.addCustomEvent(this.CONTAINER,"OnNodeLayoutChange",this._onContainerLayoutChange),this.RESULT=document.body.appendChild(document.createElement("DIV")),this.RESULT.className="title-search-result",this.INPUT=document.getElementById(this.arParams.INPUT_ID),this.startText=this.oldValue=this.INPUT.value,BX.bind(this.INPUT,"focus",function(){e.onFocusGain()}),BX.bind(this.INPUT,"blur",function(){e.onFocusLost()}),BX.browser.IsSafari()||BX.browser.IsIE()?this.INPUT.onkeydown=this.onKeyDown:this.INPUT.onkeypress=this.onKeyDown,this.arParams.WAIT_IMAGE&&(this.WAIT=document.body.appendChild(document.createElement("DIV")),this.WAIT.style.backgroundImage="url('"+this.arParams.WAIT_IMAGE+"')",BX.browser.IsIE()||(this.WAIT.style.backgroundRepeat="none"),this.WAIT.style.display="none",this.WAIT.style.position="absolute",this.WAIT.style.zIndex="1100"),BX.bind(this.INPUT,"bxchange",function(){e.onChange()})},BX.ready(function(){e.Init(t)})}
//# sourceMappingURL=maps/script.min(1).js.map