function LModal(name){
	this.className = name;
}
// 显示弹框
LModal.prototype.showModal = function(name){
	$(".modal_shadow,.modal_shadow1").show();
	$(name).show();
}
LModal.prototype.cancleModal = function(name){
	$(".modal_shadow,.modal_shadow1").hide();
	$(name).hide();
}