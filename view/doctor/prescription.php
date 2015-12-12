<?php require_once('/var/www/html/GH/imports.php');
?>
<body class="teal lighten-3">
<div class = "row">
 <div class = 'col s6 offset-s1'   >
<div class = "cardpanel">
    <div class="container ">
        <table id="myTable">
            <thead>
            <tr>
                <th data-field="med">Medicine</th>
                <th data-field="dosage">Dosage</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input id="med1"  type="text" tag ="med"required></td>
                <td><input id="dose1" type="text" tag ="dose" required></td>
                <td><a class="waves-effect waves-light btn" onclick=to_add_new()><i class="material-icons left">add</i></a></td>
            </tr>
            </tbody>
        </table>
    </div>

</div>
</div>
<div class = 'col s3 offset-s1'>
    <div class = "card-panel">
        <div class = "container">
           <textarea id="diag" rows="25" columns="50"></textarea>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class = "col s1 offest-s11">
        <a class="waves-effect waves-light btn" onclick=on_save() type="submit" name="save">SAVE</a></td>
    </div>
</div>
</body>
<script>
    var i=2;

    function to_add_new(){
    //add new row with id incrementes as medi and dosei where i starts from 2
        var table = document.getElementById("myTable");
        table.innerHTML+='<tr><td><input id="med'+i+'"  type="text" tag ="med"required></td><td><input id="dose'+i+'"  type="text" tag ="dose" required></td> <td>';
    }

    function on_save(){
        var x=[], y=[];ipti
        var j;
        var z;
        for(j=1;j<=i;j++){
            x.push(document.getElementById('med'+j));
        }
        for(j=1;j<=i;j++){
            y.push(document.getElementById('dose'+j));
        }
        var z= document.getElementById("diag");
    }
</script>