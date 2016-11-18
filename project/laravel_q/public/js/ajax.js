function ajax(url,data=''){
	var str=''
	$.ajax({
			type:"get",
			url:"http://www.gao.com/"+url+"?callback=?",
			data:data,
			dataType:"jsonp",
			async:false,
			success:function(msg)
			{
				str = msg
			}
		})
	return str
}