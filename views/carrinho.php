<main>
    <h2>Carrinho</h2>
    <hr>
    <p>
        <?php
        if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0)
            echo "Seu carrinho está vazio";
        else{
            echo "<pre>";
            print_r($_SESSION['cart']);
            echo "</pre>";
        }    
        ?>
    </p>
</main>