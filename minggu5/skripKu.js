// Nama File   : skripKu.js
// NIM         : 11S20035
// Kelas       : 13IF2

const txt_name = document.querySelector("#txt_nama"); 
const txt_t4_lahir = document.querySelector("#txt_lahir");
const tgl_lahir = document.querySelector("#tgl_lahir");
const jenis_kelamin = document.querySelector("#gender");
let school = document.querySelectorAll("input[name='school']");

const output_nama = document.querySelector("#output_1");
const output_t4_lahir = document.querySelector("#output_2");
const output_tgl_lahir = document.querySelector("#output_3");
const output_jenis_kelamin = document.querySelector("#output_4");
const output_last_edu = document.querySelector("#output_5");

const _result_ = document.querySelector(".output_result");

// document.querySelector("#submit_button");
_result_.style.display = "none";

function submit(){
    if(txt_name.value.length == 0){
        alert("nama harus di isi");
        return;
    }else{
        _result_.classList.toggle("active");
        if(_result_.classList.contains("active")){
            _result_.style.display="block";
        }
        if(txt_name.value.length < 7){
            alert("nama harus memiliki panjang minimal 7 karakter");
            _result_.style.display = "none";
            txt_name.value = "";
            return;
        } else{
            output_nama.innerHTML = txt_name.value;
            txt_name.value = "";
            txt_name.disabled = true;
            _result_.style.display = "block";
        }

        output_t4_lahir.innerHTML = txt_t4_lahir.value;
        output_tgl_lahir.innerHTML = tgl_lahir.value;
        output_jenis_kelamin.innerHTML = jenis_kelamin.value;
        
        txt_t4_lahir.value = "";
        tgl_lahir.value = "";
        jenis_kelamin.value = "";
        
        txt_t4_lahir.disabled = true;
        tgl_lahir.disabled = true;
        jenis_kelamin.disabled = true;
        // let i = 0;
        // for(i; i<document.querySelectorAll("#school").length;i++){document.querySelectorAll("school")[i].disabled = true;}
        // let school_selected = function(){
        //     const select = document.querySelector("input[name='school']:checked").value;
        //     output_last_edu = select;
            
        //     for(i = 0; i<document.querySelectorAll("#school").length;i++){
        //         document.querySelectorAll("school")[i].checked = false;
        //         document.querySelectorAll("school")[i].disabled = true;
        //     }
        // }
        // school.forEach(school =>{
        //     school.addEventListener("change", school_selected);
        // });
        // school_selected;
    }
}