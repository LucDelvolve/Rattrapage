function GetMaladie(idMaladie)
{
    $.ajax
    (
        {
            type: 'get',
            url: "getMaladie.php",
            data:"idMaladie="+idMaladie,
            success:function(data)
            {
                $('#divMaladie').empty();
                $('#divMaladie').append(data);
            },
            error:function()
            {
                alert("Impossible de récupérer les maladies");
            }
        }
    );
}

function GetMedicament(idMedicament)
{
    $.ajax
    (
        {
            type: 'get',
            url: "getMedicament.php",
            data:"idMedicament="+idMedicament,
            success:function(data)
            {
                $('#divMedicament').empty();
                $('#divMedicament').append(data);
            },
            error:function()
            {
                alert("Impossible de récupérer les médicaments");
            }
        }
    );
}
function AfficherLesMaladies()
{
    $.ajax
    (
        {
            type:"get",
            url:"PHP/GetMaladie.php",
            data:"nom="+$('#txtNom').val(),
            success:function(data)
            {
                data = $.parseJSON(data);
                var tab = "<table border='1'>";
                for(var i = 0 ; i < data.data.length ; i++)
                {
                    tab = tab + "<tr>";
                    tab = tab + "<td>"+data.data[i].title+"</td>";
                    tab = tab + "<td>"+data.data[i].cover_small+"></td>";
                    tab = tab + "</tr>";
                }
                tab= tab + "</table>";
                $('#divMaladie').empty();
                $('#divMaladie').append(tab);
            },
            error:function()
            {
                alert("Erreur maladie");
            }
        }
    );
}