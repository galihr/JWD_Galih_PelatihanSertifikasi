function cekform(){
    foto = document.getElementById('file');
    if(foto.value==""){
        alert('file tidak boleh kosong');
        foto.focus();
        return false;
    }
    nama = document.getElementById('nama');
    if(nama.value==''){
        alert('nama lengkap tidak boleh kosong');
        nama.focus();
        return false;
    }else if(nama.value.length <=3){
        alert('nama lengkap minimal 3 karakter');
        nama.focus();
        return false;
    }
    panggilan = document.getElementById('panggilan');
    if(panggilan.value==''){
        alert('nama panggilan tidak boleh kosong');
        panggilan.focus();
        return false;
    }else if(nama.value.length <=3){
        alert('nama panggilan minimal 3 karakter');
        panggilan.focus();
        return false;
    }

    tempat = document.getElementById('tempat');
    if(tempat.value==''){
        alert('tempat tidak boleh kosong');
        tempat.focus();
        return false;
    }
    tanggal = document.getElementById('datepicker');
      if(tanggal.value==''){
          alert('Tanggal lahir harus diisi');
          tanggal.focus();
          return false;
      }
      jeniskelamin = document.getElementById('jeniskelamin');
      if(jeniskelamin.value==''){
          alert('Jenis Kelamin harus diisi');
          jeniskelamin.focus();
          return false;
      }
      kotatinggal = document.getElementById('kotatinggal');
      if(kotatinggal.value=='pilih'){
          alert('kota tinggal harus diisi');
          kotatinggal.focus();
          return false;
      }
      email = document.getElementById('email');
      if(email.value==''){
          alert('email harus diisi');
          email.focus();
          return false;
      }
      hp = document.getElementById('hp');
      if(hp.value==''){
          alert('hp harus diisi');
          hp.focus();
          return false;
      }
      media = document.getElementById('media');
      if(media.value=='pilih media sosial'){
          alert('media sosial harus diisi');
          media.focus();
          return false;
      }
      event.preventDefault();
    }
  
