//------------------------- Hapus FAQ ------------------------------
$(document).ready(function(){

$('#faq_hapus').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget)
var id = div.data('id')
var modal = $(this)

modal.find('#hapus-faq').attr("href","?tampil=faq_hapus&id="+id);
})}
);


//------------------------- Hapus MITRA PLN ------------------------------
$(document).ready(function(){

$('#mitrapln_hapus').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget)
var id = div.data('id')
var modal = $(this)

modal.find('#hapus-mitrapln').attr("href","?tampil=mitrapln_hapus&id="+id);
})}
);



