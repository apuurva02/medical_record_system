<?php require_once('/var/www/html/GH/imports.php');
?>
<body class="teal lighten-3">
<div class="container">
    <form action="" method="POST">
<div class="row">
    <div class = 'col s12'>
        <div class = "card-panel" style="height: 200px;">
                <textarea id="diag" name="diag" rows="50" max-width="50" placeholder="Enter Diagnosis here" style="height: 165px;resize: none;"required></textarea>
        </div>
    </div>
 <div class="col s12"  >
     <div class = "card-panel">
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
                    </tr>
                    <tr>
                        <td><input id="med2"  type="text" tag ="med"required></td>
                        <td><input id="dose2" type="text" tag ="dose" required></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
  </div>


<div class = "row">
    <div class = "col s12 offset-s1">
        <button class="waves-effect waves-light btn" onclick=to_add_new()><i class="material-icons left">add</i>Add Medicines</button>

    <div class="right-align">
            <button class="waves-effect waves-light btn right" onclick=on_save()
                    type="submit" name="save">SAVE</button>
    </div>
    </div>
</div>
</form>
</div>
</body>

<script>
    var i=3;

    function to_add_new(){
    //add new row with id incrementes as medi and dosei where i starts from 2
        var table = document.getElementById("myTable");
        table.innerHTML+='<tr><td><input id="med'+i+'"  type="text" tag ="med"required></td><td><input id="dose'+i+'"  type="text" tag ="dose" required></td> <td>';
    }

    function on_save(){
        var x=[], y=[];
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