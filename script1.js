const hargaJual = document.getElementById('hargaJual');
const modal = document.getElementById('modal');
const qty = document.getElementById('qty');
const hpp = document.getElementById('hpp');
const laba = document.getElementById('laba');
const totalTransaksi = document.getElementById('totalTransaksi');

qty.addEventListener('keyup',function(){
    const hit_hpp = parseInt(document.getElementById('modal').value) * parseInt(document.getElementById('qty').value);
    document.getElementById('hpp').value = hit_hpp; 

    const hitTotalBeli = parseInt(document.getElementById('hargaJual').value) * parseInt(document.getElementById('qty').value);
    document.getElementById('totalTransaksi').value = hitTotalBeli;

    const hit_laba = hitTotalBeli - hit_hpp;
    document.getElementById('laba').value = hit_laba;
});
