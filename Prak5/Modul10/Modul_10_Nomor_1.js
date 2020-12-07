var data=["Buku Tulis", "Pensil", "Spidol"];

function listData(){
    var show = document.getElementById('list');
    show.innerHTML = "";

    for(var i = 0; i < data.length; i++){
        var edit = "<a href='#' onclick='edit("+i+")'>Edit</a>";
        var hapus = "<a href='#' onclick='del("+i+")'>Hapus</a>";
    
        show.innerHTML +=  "<li>" + data[i] + " ["+ edit + " | "+ hapus +"]</li>";
    }
}

function add(){
    var newData = document.querySelector("input[name=input]").value;
    data.push(newData);
    listData();
    alert("Data berhasil ditambahkan!");
}

function edit(id){
    var editData = prompt("Masukkan nama", listData[id]);
    data[id] = editData;
    listData();
    alert("Data berhasil diperaharui!");
}

function del(id){
    data.splice(id,1);
    listData();
}

listData();
