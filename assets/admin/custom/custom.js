
$('.datepicker').bootstrapMaterialDatePicker({ format : 'YYYY/MM/DD', weekStart : 0, time: false });
$('.timepicker').bootstrapMaterialDatePicker({ date: false });
$('.endDate').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
$('.startDate').bootstrapMaterialDatePicker({ weekStart : 0, time: false }).on('change', function(e, date)
{
$('.endDate').bootstrapMaterialDatePicker('setMinDate', date);
});
$("#officialStaff").show();
$("#tryTheJob").hide();
$("#cbTryTheJob").change(function(){
	html = '<label for="cbTryTheJob">{{__("general.tryTheJob")}}</label>';
	if (this.checked){
       	$("#officialStaff").hide();
		$("#tryTheJob").show();
    }
    else{
        $("#officialStaff").show();
		$("#tryTheJob").hide();
    }
});
$("#theSalaryCoefficient").hide();
$("#accordingToTheSalary").hide();
$("#sltPayForms").change(function(){
	if ($(this).val()=='1') {
		$("#theSalaryCoefficient").slideUp();
		$("#accordingToTheSalary").slideDown();
	}else if($(this).val()=='2'){
		$("#theSalaryCoefficient").slideDown();
		$("#accordingToTheSalary").slideUp();
	}else{
		$("#theSalaryCoefficient").slideUp();
		$("#accordingToTheSalary").slideUp();
	}
});
//= require ckeditor/init
//= require ckeditor/config
//= require ckeditor/plugins/YOUR_PLUGIN/plugin    // plugin.js in folder
//= require ckeditor/plugins/YOUR_PLUGIN/lang/en   // en.js in folder
//= require_directory