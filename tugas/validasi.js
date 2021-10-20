function cekform(){
    foto = document.getElementById(file);
    if(foto.value==""){
        alert('file tidak boleh kosong');
        foto.focus();
        return false;
    }
    nama = document.getElementById(nama);
    if(nama.value==''){
        alert('nama lengkap tidak boleh kosong');
        nama.focus();
        return false;
    }else if(nama.value.length <=3){
        alert('nama lengkap minimal 3 karakter');
        nama.focus();
        return false;
    }
    panggilan = document.getElementById(panggilan);
    if(panggilan.value==''){
        alert('nama panggilan tidak boleh kosong');
        panggilan.focus();
        return false;
    }else if(nama.value.length <=3){
        alert('nama panggilan minimal 3 karakter');
        panggilan.focus();
        return false;
    }
}