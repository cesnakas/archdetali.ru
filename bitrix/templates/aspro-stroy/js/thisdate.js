$(document).ready(function(){
	var date = new Date();
	var month = date.getMonth() + 1;
	var thisdate = date.getDate();

	//esli bolee 28 dnei, uvelichivaem monts
	if(thisdate > 27 && thisdate <= 31) {month=month+1}
	if(month > 12) {month = 1;}

	if(month == 2) {month="феврал€"}
	if(month == 3) {month="марта"}
	if(month == 4) {month="апрел€"}
	if(month == 5) {month="ма€"}
	if(month == 6) {month="июн€"}
	if(month == 7) {month="июл€"}
	if(month == 8) {month="августа"}
	if(month == 9) {month="сент€бр€"}
	if(month == 10) {month="окт€бр€"}
	if(month == 11) {month="но€бр€"}
	if(month == 12) {month="декабр€"}
	if(month == 1) {month="€нвар€"}

	//formiruem dni
	if(thisdate >= 27) {newdate = 8}
	if(thisdate >= 1 && thisdate <= 7) {newdate = 8}
	if(thisdate >= 7 && thisdate <= 17) {newdate = 18}
	if(thisdate >= 17 && thisdate <= 27) {newdate = 28}

	$(".this-months").text(month);
	$(".this-date").text(newdate);
});
