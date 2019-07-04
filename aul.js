function search(){
	var data = document.formku.input.value;//menampung data form data input sebelumnya dalam variabel data
	var hh = "https://www.google.com/search?q=" + data;//menampung link google ke dalam varibel
	window.open(hh, "google", config="height=500 width=700 scrollbars=yes location=yes");//untuk membuka jendela baru yang isinya nantinya sesuai kata kunci yang dicari
}

function tgl(){
	var d = new Date();//menampung frmat tanggal dalam variabel d
	document.getElementById("nana").innerHTML=d;//untuk menampilkan element tanggal
}

function confirm(){
	alert("terima kasih !!!!")//untuk menampilkan jendela kotak kecil berisi kata Terima kasih
}