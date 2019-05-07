function LModal(name){
	this.className = name;
}
// 显示弹框
LModal.prototype.showModal = function(name){
	$(".modal_shadow").show();
	$(name).show();
}
LModal.prototype.cancleModal = function(name){
	$(".modal_shadow").hide();
	$(name).hide();
}