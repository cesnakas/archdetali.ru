$(document).ready(function(){
	var date = new Date();
	var month = date.getMonth() + 1;
	var thisdate = date.getDate();

	//esli bolee 28 dnei, uvelichivaem monts
	if(thisdate > 27 && thisdate <= 31) {month=month+1}
	if(month > 12) {month = 1;}

	if(month == 2) {month="�������"}
	if(month == 3) {month="�����"}
	if(month == 4) {month="������"}
	if(month == 5) {month="���"}
	if(month == 6) {month="����"}
	if(month == 7) {month="����"}
	if(month == 8) {month="�������"}
	if(month == 9) {month="��������"}
	if(month == 10) {month="�������"}
	if(month == 11) {month="������"}
	if(month == 12) {month="�������"}
	if(month == 1) {month="������"}

	//formiruem dni
	if(thisdate >= 27) {newdate = 8}
	if(thisdate >= 1 && thisdate <= 7) {newdate = 8}
	if(thisdate >= 7 && thisdate <= 17) {newdate = 18}
	if(thisdate >= 17 && thisdate <= 27) {newdate = 28}

	$(".this-months").text(month);
	$(".this-date").text(newdate);
});
