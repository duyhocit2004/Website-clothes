import './bootstrap';
window.Echo.channel("voucher")
.listen("VoucherCreated",(e)=>{
    console.log(e);
    alert(`mã giảm giá ${e.title} với ${e.discount}% giảm giá`)
})