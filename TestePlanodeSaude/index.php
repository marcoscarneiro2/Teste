<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Plano de Saúde</title>
</head>
<body>
    <section>Plano de Saúde</section>
    
    <?php
    $arquivo = file_get_contents('PlanoPreco.json');
    
    $json = json_decode($arquivo);
    
    
    foreach($json -> tabelaPlano as $registro):
    echo 'Código: ' . $registro->codigo .
    ' Plano: ' . $registro->nome   .            
         '<br>';
    
    
endforeach;
    if(0 <= 17){
        echo ' faixa  ' . $registro->faixa1;
        
    }elseif(18 <= 40){
       echo ' faixa  ' . $registro->faixa2 ;
    }else{
        echo ' faixa  ' . $registro->faixa3 ;  
    }
    
    ?>
    
    
    
    
    <form action="#">
    <input type="number" name="beneficiarios" placeholder="Digite a quantidade de beneficiario">    
    </form>
    
    
    
    
</body>
</html>