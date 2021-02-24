const toggleBtn = document.querySelector(".navbar_toglebtn");
const menu = document.querySelector(".navbar_menu");
const icon = document.querySelector(".navbar_icon");

const writeBtn = document.querySelector("#write_btn");

toggleBtn.addEventListener("click", () => {
    menu.classList.toggle("active");
    icon.classList.toggle("active");
});

$(document).ready(function(){
    $(".dat_edit_bt").click(function(){
        /* dat_edit_bt클래스 클릭시 동작(댓글 수정) */
        let obj = $(this).closest(".dap_lo").find(".dat_edit");
        obj.dialog({
            modal:true,
            width:650,
            height:200,
            title:"댓글 수정"});
    });

    $(".dat_delete_bt").click(function(){
        /* dat_delete_bt클래스 클릭시 동작(댓글 삭제) */
        let obj = $(this).closest(".dap_lo").find(".dat_delete");
        obj.dialog({
            modal:true,
            width:400,
            title:"댓글 삭제확인"});
    });

});