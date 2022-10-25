<?php
use Dompdf\Dompdf;
//chamar a biblioteca
require_once 'dompdf/autoload.inc.php';

//Instanciar a classe:
$dompdf = new Dompdf();
$dompdf-> loadHtml('
<body>
            <h1> Relação de e-mails</h1>
            <ul>
                <li>andre123@gmail.com</li>
                <li>alexandre123@gmail.com</li>
                <li>maria123@gmail.com</li>
            </ul>
</body>

');

//Renderiza o documento
$dompdf->render();

//Gera saída do documento.
$dompdf->stream(
    "relatorio.pdf", // nome do arquivo gerado
    array(
        "attachmente" => true
    )
);



?>

