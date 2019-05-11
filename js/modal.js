function LModal(name){
	this.className = name;
}
// 显示弹框
LModal.prototype.showModal = function(name){
	$(".modal_shadow,.modal_shadow1").addClass("active");
	$(name).addClass("active");
}
LModal.prototype.cancleModal = function(name){
	$(".modal_shadow,.modal_shadow1").removeClass("active");
	$(name).removeClass("active");
}