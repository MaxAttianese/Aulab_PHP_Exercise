<?php

/* Scrivere un’applicazione che permetta di gestire alcuni aspetti di un ordine e nello specifico:

Ok Una classe Ordine che deve:

Ok - memorizzare un elenco di prodotti attraverso il metodo aggiungiProdotto();


Ok - il metodo aggiungiProdotto() accetta, come unico parametro, un oggetto di tipo ProdottoOrdine descritto in seguito;


OK - memorizzare il valore IVA che sarà sempre uguale a 22 (non varierà mai);


Ok - stampare l'elenco dei prodotti inseriti nell'ordine attraverso un metodo carrello(), indicando, riga per riga:
    quantità - nome - importo totale riga (importo unitario * quantità) - importo totale iva inclusa
    
    nota: uno dei possibili modi di calcolare l'importo iva inclusa é: importo * (1 + IVA/100)


OK - stampare l'importo totale dell'ordine (metodo totale()), ovvero la somma di tutti gli importi IVA    compresa. Questo metodo accetta un parametro $stampaMessaggio (di default = false):
    - Se $stampaMessaggio = false, restituisce il valore numerico del totale;
    - Se $stampaMessaggio = true, stampa echo "Importo totale ordine: valore".
    
- Un metodo paga che ha come unico parametro $metodoPagamento di tipo MetodoPagamento (interfaccia) (come abbiamo visto durante la lezione 6)


Ok - un metodo che stampi il messaggio: "Stato ordine: in lavorazione", questo metodo deve essere importato da un Trait;


Ok - un metodo statico valoreIva() che stampa il valore dell'IVA.


Ok Classe ProdottoOrdine
    la classe ProdottoOrdine deve permettere di memorizzare:

    - nome del prodotto;
    - quantità ordinate;
    - importo unitario;
    dove nome del prodotto e importo unitario appartengono ad una più generica classe Prodotto
    - le classi Prodotto e ProdottoOrdine appartengono al namespace Hack


Organizzare il codice nel seguente modo

- ogni classe, trait o interfaccia in un singolo file nelle rispettive cartelle Classes / Traits / Interfaces
- il codice principale in un file index.php che include le classi attraverso include 'Cartella\Nomefile.php';. */



// Include Files


// Class Order
include( "Classes/063classOrder.php");

// Class OrderProduct
include( "Classes/063classOrderProduct.php");

// Class CreditCard
include( "Classes/063classCreditCard.php");

// Class WireTranser
include( "Classes/063classWireTransfer.php");



// Instance Order
$order1 = new Order;


//Namespace
use Hack\OrderProduct;



// Instance Products
$product1 = new OrderProduct("Lampada", 30, 2);

$product2 = new OrderProduct("Cuffie", 75, 1);

$product3 = new OrderProduct("Laptop", 300, 1);



// Add products to Order
$order1->addproducts($product1);

$order1->addproducts($product2);

$order1->addproducts($product3);

var_dump($product1);

// Print all Products in order
//$order1 -> cart();



// Print total price (if condition is true)
//$order1->total();



// Print IVA value
//$order1::printIva();


// Print Order State
//$order1->printState();



// Payment


// Payment with Credit Card
$order1->payment(new CreditCard);


// Payment with Wire Transer
//$order1->payment(new WireTransfer);


?>