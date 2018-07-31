<?php
include("ClassConnect.php");

class ClassCell extends ClassConnect{
    public function showCell()
    {
        $FetchCell=$this->ConnectDB()->prepare("SELECT * FROM celulares");
        $FetchCell->execute();

        $Arr=[];
        $I=0;

        while ($Fetch=$FetchCell->fetch(PDO::FETCH_ASSOC)) {
            /*COLUNAS DO BANCO DE DADOS
            id_cell
            marca_cell
            modelo_cell
            valor_cell
            */
            $Arr[$I]=[
                "id_cell"=>$Fetch['id_cell'],
                "marca_cell"=>$Fetch['marca_cell'],
                "modelo_cell"=>$Fetch['modelo_cell'],
                "valor_cell"=>$Fetch['valor_cell'],
            ];
            $I++;
        }
        header("Access-Control-Allow-Origin:*");
        header("Content-type: application/json");
        echo json_encode($Arr);
    }
}