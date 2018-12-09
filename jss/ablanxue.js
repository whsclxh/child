if(jQuery) (function($){
//定义键盘代码
var _numkeybordhtml = "<div id=\"numkeybord\">\n"
       + "<div id=\"keymain\">"
       + "<li class=\"key\">ㄅ</li>"
       + "<li class=\"key\">ㄆ</li>"
       + "<li class=\"key\">ㄇ</li>"
       + "<li class=\"key\">ㄈ</li>"
       + "<li class=\"key\">ㄉ</li>"
       + "<li class=\"key\">ㄊ</li>"
       + "<li class=\"key\">ㄋ</li>"
       + "<li class=\"key\">ㄌ</li>"
       + "<li class=\"key\">ㄍ</li>"
       + "<li class=\"key\">ㄎ</li>"
       + "<li class=\"key\">ㄏ</li>"
       + "<li class=\"key\">ㄐ</li>"
       + "<li class=\"key\">ㄑ</li>"
       + "<li class=\"key\">ㄒ</li>"
       + "<li class=\"key\">ㄓ</li>"
       + "<li class=\"key\">ㄔ</li>"
       + "<li class=\"key\">ㄕ</li>"
       + "<li class=\"key\">ㄖ</li>"
       + "<li class=\"key\">ㄗ</li>"
       + "<li class=\"key\">ㄘ</li>"
       + "<li class=\"key\">ㄙ</li>"
       + "<li class=\"key\">ㄧ</li>"
       + "<li class=\"key\">ㄨ</li>"
       + "<li class=\"key\">ㄩ</li>"
       + "<li class=\"key\">ㄚ</li>"
       + "<li class=\"key\">ㄛ</li>"
       + "<li class=\"key\">ㄜ</li>"
       + "<li class=\"key\">ㄝ</li>"
       + "<li class=\"key\">ㄞ</li>"
       + "<li class=\"key\">ㄟ</li>"
       + "<li class=\"key\">ㄠ</li>"
       + "<li class=\"key\">ㄡ</li>"
       + "<li class=\"key\">ㄢ</li>"
       + "<li class=\"key\">ㄣ</li>"
       + "<li class=\"key\">ㄤ</li>"
       + "<li class=\"key\">ㄥ</li>"
       + "<li class=\"key\">ㄦ</li>"
       + "<li class=\"key\">ˊ</li>"
       + "<li class=\"key\">ˇ</li>"
       + "<li class=\"key\">ˋ</li>"
       + "<li class=\"key\">˙</li>"
	   + "<li id=\"esc\">鍵盤输入</li>"
       + "<li id=\"back\">退格</li>"
	   + "<li id=\"clear\">清空</li>"
       + "<li id=\"enter\">確定</li>"
       + "</div>\n"
       + "</div>\n";
//定义插件
jQuery.fn.numkeybord = function(_option){
   //键盘追加到网页中
   $(document.body).append(_numkeybordhtml);  
   var _obj = this;  
   jQuery.each(_obj,function(i,_o){
    $(_o).bind('click',function(){ _show(this); });
   });  
   $("#numkeybord #enter").bind('click',function(){
    _hide();
   });
   $("#numkeybord .key").bind('click.returnkey',function(){
    var tmp    = $("#numkeybord").attr("target");
    var obj_tmp   = $("#"+tmp);   
    _returnkey(obj_tmp,$(this).text());   
    $(this).blur();
   });  
   $("#numkeybord #back").bind('click.back',function(){
    var tmp    = $("#numkeybord").attr("target");
    var obj_tmp   = $("#"+tmp);   
    _back(obj_tmp);
   });  
   $("#numkeybord #clear").bind('click',function(){
	  var tmp= $("#numkeybord").attr("target");
	  var obj_tmp= $("#"+tmp);   
   	  _clear(obj_tmp);
   });
   if(_option == null)
    return;
   else{   
    if(_option.enter == false)
     $("#enter").unbind('click.hide').css({color:"#fff"});   
    if(_option.esc == false)
     $("#esc").unbind('click.hide').css({color:"#fff"});   
    if(_option.back == false)
     $("#back").unbind('click.back').css({color:"#fff"});
   }
}
//键盘与元素绑定及显示
function _show(_input){
   $(_input).attr('readonly','readonly');
   var _offset    = $(_input).offset();
   var _left    = _offset.left;
   var _top    = _offset.top + $(_input).height() + ($.browser.msie ? 5 : 6);  
   $("#numkeybord").attr("target",_input.id).css({left:_left + "px",top:_top + "px",display:'block'});
   $('#esc').click(function(){
		$(_input).focus();
		$(_input).removeAttr('readonly');
		$('#numkeybord').css('display','none');
	})
}
//输入操作
function _returnkey(_input,_val){
   if($(_input).val().length >= $(_input).attr("maxlength")) return;
   var tmpval = $(_input).val() + _val;
   $(_input).val(tmpval);
   _focus(_input);
}
//光标返回
function _focus(_input){
    if($.browser.msie){
	var rng = $(_input)[0].createTextRange(); 
    rng.collapse(false);
    rng.select();
	
   }else{
    //$(_input).focus();
   }
}
//退格操作
function _back(_input){
   var _len = $(_input).val().length;
   var _tmp = $(_input).val();
   $(_input).val(_tmp.substr(0,_len-1));  
   _focus(_input);
}
//键盘关闭
function _hide(_input){
   var tmp    = $("#numkeybord").attr("target");
   var obj_tmp   = $("#"+tmp);
   $("#numkeybord").css({display:'none'});
   //$(obj_tmp).focus();
   _focus(obj_tmp);
}
//输入操作
function _clear(_input){
   $(_input).val('');
}
})(jQuery);