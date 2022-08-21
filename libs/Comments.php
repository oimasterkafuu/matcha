<?php
/**
 * 评论反垃圾
 */
function AntiSpam($comment) {
    echo '<!--<nocompress>--><script>(function(){var a=document.addEventListener?{add:"addEventListener",focus:"focus",load:"DOMContentLoaded"}:{add:"attachEvent",focus:"onfocus",load:"onload"};var c,d,e,f,b=document.getElementById("'.$comment->respondId.'");null!=b&&(c=b.getElementsByTagName("form"),c.length>0&&(d=c[0],e=d.getElementsByTagName("textarea")[0],f=!1,null!=e&&"text"==e.name&&e[a.add](a.focus,function(){if(!f){var a=document.createElement("input");a.type="hidden",a.name="_",d.appendChild(a),f=!0,a.value='.Typecho_Common::shuffleScriptVar($comment->security->getToken($comment->request->getRequestUrl())).'}})))})();</script><!--</nocompress>-->';
}

/**
 * 解决评论框不跟随
 */
function replyScript($archive) {
    if ($archive->allow('comment')) echo "<!--<nocompress>--><script type=\"text/javascript\">(function(){window.TypechoComment={dom:function(id){return document.getElementById(id)},create:function(tag,attr){var el=document.createElement(tag);for(var key in attr){el.setAttribute(key,attr[key])}return el},reply:function(cid,coid){var comment=this.dom(cid),parent=comment.parentNode,response=this.dom('$archive->respondId'),input=this.dom('comment-parent'),form='form'==response.tagName?response:response.getElementsByTagName('form')[0],textarea=response.getElementsByTagName('textarea')[0];if(null==input){input=this.create('input',{'type':'hidden','name':'parent','id':'comment-parent'});form.appendChild(input)}input.setAttribute('value',coid);if(null==this.dom('comment-form-place-holder')){var holder=this.create('div',{'id':'comment-form-place-holder'});response.parentNode.insertBefore(holder,response)}comment.appendChild(response);this.dom('cancel-comment-reply-link').style.display='';if(null!=textarea&&'text'==textarea.name){textarea.focus()}return false},cancelReply:function(){var response=this.dom('$archive->respondId'),holder=this.dom('comment-form-place-holder'),input=this.dom('comment-parent');if(null!=input){input.parentNode.removeChild(input)}if(null==holder){return true}this.dom('cancel-comment-reply-link').style.display='none';holder.parentNode.insertBefore(response,holder);return false}}})();</script><!--</nocompress>-->";
}