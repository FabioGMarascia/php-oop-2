# MILESTONE 0

Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende vari tipi di Prodotto per animali.
I prodotti HANNO una Categoria. La categoria va resa con una classe che avrà un nome (es. Cani o Gatti) e almeno un'altra proprietà (es. descrizione o icona)
I prodotti SONO: Cibo, Gioco, Cuccia ecc... oltre al Prodotto (generico). Queste sono tutte classi che vanno ad estendere il prodotto di base. Il cibo ha il peso, la cuccia le dimensioni ecc..

# MILESTONE 1

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria o altro.

# ILESTONE 2

Per ogni articolo pensate al modo di visualizzare in pagina di che tipo di prodotto si tratta (prodotto, cibo, gioco, cuccia). Ci sono vari modi per ottenere il risultato, aiutatevi con Google :occhiolino:

# BONUS

Immaginate che questi prodotti vengano acquistati da clienti.
Quindi create una classe Cliente che avrà proprietà di base (nome, cognome ecc..) e una proprietà carrello.
Avrete bisogno di un metodo che vi permetta di pushare prodotti nell'array cliente->carrello
Fate tutto "a mano": al caricamento della pagina create i prodotti, create un cliente e aggiungete N prodotti al suo carrello. Infine stampate il carrello.
:avviso: Il bonus è come sempre OPZIONALE.

# BONUS 2

Se volete potete poi sbizzarrirvi:
prevedete più utenti, ognuno con il suo carrello
immaginare un metodo cliente->paga(12, 2025) che controlli la scadenza di una carta e in caso sia valida imposti il booleano cliente->carrelloPagato = true
immaginate utenti standard e premium che hanno diverse scontistiche
la lista è praticamente infinita
