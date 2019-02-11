
	$(document).ready(function(){
	
	//declarations [ a=counter, max=number of questions, tmp=present completion] 
	var a=1,max=prompt("Enter the number of questions"),tmp=0;
	a=parseInt(a);
	max=parseInt(max);
	tmp=parseInt(tmp);
	tmp=100/max;
	var mark=0;mark=parseInt(mark);
	var skip=1;
	var z=0;
	var inc=0;inc=parseInt(inc);
	var arr=0;
	
	//function for loading contents
	
	$("#max_question").text(max);
	
	function call()
	{
	$("ul>li,ul>li>*").css({"background-color":"transparent","color":"black"}); //color reseter for options
	$("#qsn").load("data.txt qsn"+a+">q"+a); //question increment
	$("#choose1").load("data.txt qsn"+a+">op1");//choose increment
	$("#choose2").load("data.txt qsn"+a+">op2");
	$("#choose3").load("data.txt qsn"+a+">op3");
	$("#choose4").load("data.txt qsn"+a+">op4");
	$('#status').css("width",(tmp*a)+"%");//status increment
	$("#status_text").text(tmp*a+"% Completed");
	};
	
	//Right Answer GREEN
	$("#choose1,#choose2,#choose3,#choose4").click(function(){
	skip=0;
	var ans = $(this);
$("dialog").load("data.txt qsn"+a+">ans>*",function(){

	if($("dialog").text()==ans.text()){mark++;ans.css({"background-color":"green","color":"white"});
	setTimeout("$('#next').click()",2000)
	};
	if($("dialog").text()!=ans.text()){ans.css({"background-color":"red","color":"white"});
		if($("dialog:last").text()==$("#choose1").text()){$("#choose1").css({"background-color":"green","color":"white"});};
		if($("dialog:last").text()==$("#choose2").text()){$("#choose2").css({"background-color":"green","color":"white"});};
		if($("dialog:last").text()==$("#choose3").text()){$("#choose3").css({"background-color":"green","color":"white"});};
		if($("dialog:last").text()==$("#choose4").text()){$("#choose4").css({"background-color":"green","color":"white"});};
		setTimeout("$('#next').click()",2000)
};
	});
	// For Wrong Answer RED
		});
		
	
	//call for initial load
	call();
	if(a==(max)){$("#next").text("Submit");}// submit when the question ends
	
	//call for next 
	$("#next").click(function click(){
		clearTimeout();
	var o="",ski=$("#skip").text().length;
		if(ski>=1){o=","};
	if(skip ==1 && a!=$("#skip").text()[ski-1]){if(arr==0){$("#skip").text($("#skip").text()+""+o+""+a)};z=z+1;
	};
	
	
	if($(this).text()=="Submit"){result();}
			if(a==max-1){$("#next").text("Submit")}// submit when the question ends
	

		if(a!=max && arr==0){a=a+1;}else{arr=1;}//maximum question
		if(arr==1){
			
	if(skip==0){
		if(ski>1){if(inc!=0){var sli2=$('#skip').text().slice(0,inc-2),sli1=$('#skip').text().slice(inc,ski);
		var sli=sli2+""+sli1}else{var sli=$('#skip').text().slice(inc,ski)}}
		else{var sli=$('#skip').text().slice(2,ski)};if(a==max){var sli=$('#skip').text().slice(0,inc-2)}
	$("#skip").text(sli);inc=0};
	var ski=$("#skip").text().length;
	a=$("#skip").text()[inc];
	if(a!=max){inc=inc+2}else{inc=0};
	
	};
		
			 	
	skip=1;
	call(); //call for increment question with choose and reset the coloring
	
	});
	
	//call for previous
	$("#previous").click(function(){
	if(a!=1 && arr==0) //minimum question 
	{
	a--;
	};
	if(arr==1){a=$("#skip").text()[inc]}
	if(a<(max)){$("#next").text("next");}
	call(); //call for increment question with choose and reset the coloring
	});
	function result(){
		if(z == 0){$("#skip").text("0")};
		var pri=$("#skip").text();
		$("#well").animate({"opacity":"1"},"3");
		var f=0,j=0;f=parseInt(f);
		f=Math.round(((mark/max)*100));
		$("#percent").text(f+"%");
		$("#correct").text(mark);
		
		
		
		
	};
	
	
});